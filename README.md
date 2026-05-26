<p align="center">
  <img src="https://i.ibb.co/1tRYZP5R/Velstore-logo-v1.png" alt="Velstore open-source multi-vendor Laravel eCommerce solution">
</p>

<p align="center">

  <a href="https://packagist.org/packages/velstorelabs/velstore">
    <img src="https://poser.pugx.org/velstorelabs/velstore/d/total" alt="Velstore Packagist Downloads">
  </a>
  
  <a href="https://github.com/velstorelabs/velstore/releases">
    <img src="https://poser.pugx.org/velstorelabs/velstore/v/stable" alt="Velstore Latest Stable Version">
  </a>

  <a href="https://github.com/velstorelabs/velstore/actions/workflows/ci.yml">
    <img src="https://github.com/velstorelabs/velstore/actions/workflows/ci.yml/badge.svg" alt="CI status for Velstore">
  </a>

  <a href="https://github.com/velstorelabs/velstore/blob/master/LICENSE">
    <img src="https://poser.pugx.org/velstorelabs/velstore/license" alt="License">
  </a>
</p>

<p align="center">
  <img src="https://i.ibb.co/9mL3YZQV/velstore-demo1-resized.png" alt="Velstore open-source multi-vendor Laravel eCommerce solution demo">
</p>

Velstore is a powerful and open-source multi-vendor Laravel eCommerce solution. It is fully customizable and ready to use. It is the perfect choice for launching your online store with ease and efficiency.

## Features

- Built with Laravel
- Multi vendor support
- Multi lingual support  
- Dedicated Admin, Seller, and Customer panels 
- Modular and extensible architecture
- Translated to 19 languages
- Integrated payment gateways: PayPal and Stripe

### Supported Languages

<p align="center" style="display: inline;">
    <img src="https://flagicons.lipis.dev/flags/4x3/us.svg" title="English" width="24">
    <img src="https://flagicons.lipis.dev/flags/4x3/de.svg" title="German" width="24">
    <img src="https://flagicons.lipis.dev/flags/4x3/fr.svg" title="French" width="24">
    <img src="https://flagicons.lipis.dev/flags/4x3/es.svg" title="Spanish" width="24">
    <img src="https://flagicons.lipis.dev/flags/4x3/nl.svg" title="Dutch" width="24">
    <img src="https://flagicons.lipis.dev/flags/4x3/it.svg" title="Italian" width="24">
    <img src="https://flagicons.lipis.dev/flags/4x3/pt.svg" title="Portuguese" width="24">
    <img src="https://flagicons.lipis.dev/flags/4x3/in.svg" title="Hindi" width="24">
    &nbsp;&nbsp;&nbsp;
    <img src="https://flagicons.lipis.dev/flags/4x3/pl.svg" title="Polish" width="24">
    <img src="https://flagicons.lipis.dev/flags/4x3/ru.svg" title="Russian" width="24">
    &nbsp;&nbsp;&nbsp;
    <img src="https://flagicons.lipis.dev/flags/4x3/tr.svg" title="Turkish" width="24">
    <img src="https://flagicons.lipis.dev/flags/4x3/sa.svg" title="Arabic" width="24">
    <img src="https://flagicons.lipis.dev/flags/4x3/ir.svg" title="Persian" width="24">
    &nbsp;&nbsp;&nbsp;
    <img src="https://flagicons.lipis.dev/flags/4x3/cn.svg" title="Chinese" width="24">
    <img src="https://flagicons.lipis.dev/flags/4x3/jp.svg" title="Japanese" width="24">
    <img src="https://flagicons.lipis.dev/flags/4x3/id.svg" title="Indonesian" width="24">
    <img src="https://flagicons.lipis.dev/flags/4x3/vi.svg" title="Vietnamese" width="24">
    <img src="https://flagicons.lipis.dev/flags/4x3/kr.svg" title="Korean" width="24">
    <img src="https://flagicons.lipis.dev/flags/4x3/th.svg" title="Thai" width="24">
</p>


### Trending Products

<p align="center">
  <img src="https://i.ibb.co/7Jy8q2CS/trending-product-1.png" alt="Velstore open-source multi-vendor Laravel eCommerce solution demo">
</p>

### Featured Products

<p align="center">
  <img src="https://i.ibb.co/ch5w4bv2/featured-products-velstore-laravel.png" alt="Velstore open-source multi-vendor Laravel eCommerce solution demo">
</p>

### Categories

<p align="center">
  <img src="https://i.ibb.co/vvKgdWK9/categories-velstore-laravel.png" alt="Velstore open-source multi-vendor Laravel eCommerce solution demo">
</p>

## Installation Guide  

Follow these steps to set up Velstore:  

### **Install via Composer**  
Run the following command to create a new Velstore project:
```sh
composer create-project velstorelabs/velstore
```

If you didn't have `.env` you can copy it from `.env.example`.

```sh
cp .env.example .env
```

Create a new database and update the database credentials in `.env`. Run the following command to install Velstore:
```sh
php artisan install:velstore --with-import
```

### **Options**
- `--with-import` Imports sample data to help you get started quickly.

Start the Laravel server:
```sh
php artisan serve
```

If you found error `Vite manifest not found at`, you should run this in different terminal:
```sh
npm run dev
```

Your Velstore instance is now running! Open your browser and visit:
```sh
http://127.0.0.1:8000
```

## Tech Stack
- Backend: Laravel 10+
- Database: MySQLi
- Frontend: Blade (with Laravel UI)
- Authentication: Laravel Sanctum
- DataTables: Yajra Laravel Datatables

## 💼 Hire Us
Need ecommerce development, Velstore customization, or support for your project?  
We’re ready to help.  

[Share your project details](https://forms.gle/ZF9E9t5gUKShfHLLA)
a