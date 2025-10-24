<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Hash;

class Velstore extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'install:velstore {--locale= : Set the application locale} {--with-import : Import default data}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install Velstore Ecommerce Built with Laravel.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Running composer dump-autoload...');
        exec('composer dump-autoload');

        $this->info('Running migrations...');
        $this->call('migrate');

        $this->info('Creating admin user...');
        $this->createAdminUser();

        $this->info('Admin user created successfully.');

        $availableLocales = ['en' => 'English', 'es' => 'Spanish', 'fr' => 'French', 'de' => 'German'];

        $locale = $this->choice(
            'Please select a locale to set for the application',
            array_keys($availableLocales),
            'en'
        );

        if (! array_key_exists($locale, $availableLocales)) {
            $this->error("Invalid locale '{$locale}'. Supported locales are: ".implode(', ', array_keys($availableLocales)));

            return 1;
        }

        $withImport = $this->option('with-import');
        if ($withImport) {
            $this->call('data:import');
        }

        $this->updateEnvFile('APP_LOCALE', $locale);

        $this->info("Application language set to: $locale");

        $this->info('Velstore installation completed successfully.');

        $this->info('Installing npm packages...');
        exec('npm install');

        $this->info('Generating application key...');
        Artisan::call('key:generate');
        $this->info('Application key generated successfully.');

        Artisan::call('storage:link');
        $this->info('Storage link created successfully.');

        return Command::SUCCESS;
    }

    /**
     * Create the admin user.
     *
     * @return void
     */
    protected function createAdminUser()
    {
        $user = User::firstOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'password' => Hash::make('abc123'),
                'profile_image' => 'https://i.postimg.cc/1t3RZtmT/images-9.jpg',
            ]
        );

        if ($user->wasRecentlyCreated) {
            $this->info('Admin user created successfully.');
        } else {
            $this->info('Admin user already exists.');
        }
    }

    /**
     * Update the .env file with a given key-value pair.
     */
    protected function updateEnvFile($key, $value)
    {
        $path = base_path('.env');

        if (file_exists($path)) {
            $content = file_get_contents($path);
            $pattern = "/^{$key}=.*/m";

            if (preg_match($pattern, $content)) {
                $content = preg_replace($pattern, "{$key}={$value}", $content);
            } else {
                $content .= PHP_EOL."{$key}={$value}";
            }

            file_put_contents($path, $content);
        }
    }
}
