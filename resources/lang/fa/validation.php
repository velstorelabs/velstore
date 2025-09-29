<?php

return [

    'categories' => [
        'translations' => [
            'name' => [
                'required' => 'فیلد translations.en.name الزامی است.',
                'string' => 'فیلد translations.en.name باید یک رشته باشد.',
                'max' => 'فیلد translations.en.name نباید بیشتر از :max کاراکتر باشد.',
            ],
            'description' => [
                'required' => 'فیلد translations.en.description الزامی است.',
                'string' => 'فیلد translations.en.description باید یک رشته باشد.',
                'min' => 'فیلد translations.en.description باید حداقل :min کاراکتر باشد.',
            ],
            'image' => [
                'required' => 'فیلد translations.en.image الزامی است.',
                'image' => 'فیلد translations.en.image باید یک تصویر باشد.',
                'mimes' => 'فیلد translations.en.image باید فایلی از نوع: :values باشد.',
                'max' => 'فیلد translations.en.image نباید بیشتر از :max کیلوبایت باشد.',
            ],
        ],
    ],
];
