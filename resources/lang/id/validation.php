<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    */

    'required' => 'Field :attribute wajib diisi.',
    'string' => ':attribute harus berupa string.',
    'max' => ':attribute tidak boleh lebih dari :max karakter.',
    'min' => ':attribute harus memiliki minimal :min karakter.',
    'image' => ':attribute harus berupa gambar.',
    'mimes' => ':attribute harus berupa file dengan tipe: :values.',
    'array' => ':attribute harus berupa array.',
    'numeric' => ':attribute harus berupa angka.',
    'integer' => ':attribute harus berupa bilangan bulat.',
    'lte' => ':attribute harus kurang dari atau sama dengan :value.',

    /*
    |--------------------------------------------------------------------------
    | Custom Attributes
    |--------------------------------------------------------------------------
    |
    | Di sini kita mendefinisikan nama atribut khusus untuk semua field.
    | Dengan begitu, pesan validasi lebih mudah dibaca.
    |
    */

    'attributes' => [

        // Vendor fields
        'name' => 'Nama',
        'email' => 'Email',
        'password' => 'Kata Sandi',
        'password_confirmation' => 'Konfirmasi Kata Sandi',
        'phone' => 'Nomor Telepon',
        'status' => 'Status',

        // Dynamic variants
        'variants.*.name' => 'Nama Varian',
        'variants.*.price' => 'Harga Varian',
        'variants.*.discount_price' => 'Harga Diskon Varian',
        'variants.*.stock' => 'Stok Varian',
        'variants.*.SKU' => 'SKU Varian',
        'variants.*.barcode' => 'Barcode Varian',
        'variants.*.weight' => 'Berat Varian',
        'variants.*.dimensions' => 'Dimensi Varian',
        'variants.*.language_code' => 'Kode Bahasa Varian',
        'variants.*.size_id' => 'Ukuran Varian',
        'variants.*.color_id' => 'Warna Varian',

        // Translations for all supported languages

        // English
        'translations.en.name' => 'Nama (Inggris)',
        'translations.en.description' => 'Deskripsi (Inggris)',
        'translations.en.image' => 'Gambar (Inggris)',
        'languages.en.title' => 'Judul Banner (Inggris)',
        'languages.en.description' => 'Deskripsi Banner (Inggris)',
        'languages.en.image' => 'Gambar Banner (Inggris)',

        // Arabic
        'translations.ar.name' => 'Nama (Arab)',
        'translations.ar.description' => 'Deskripsi (Arab)',
        'translations.ar.image' => 'Gambar (Arab)',
        'languages.ar.title' => 'Judul Banner (Arab)',
        'languages.ar.description' => 'Deskripsi Banner (Arab)',
        'languages.ar.image' => 'Gambar Banner (Arab)',

        // German
        'translations.de.name' => 'Nama (Jerman)',
        'translations.de.description' => 'Deskripsi (Jerman)',
        'translations.de.image' => 'Gambar (Jerman)',
        'languages.de.title' => 'Judul Banner (Jerman)',
        'languages.de.description' => 'Deskripsi Banner (Jerman)',
        'languages.de.image' => 'Gambar Banner (Jerman)',

        // Spanish
        'translations.es.name' => 'Nama (Spanyol)',
        'translations.es.description' => 'Deskripsi (Spanyol)',
        'translations.es.image' => 'Gambar (Spanyol)',
        'languages.es.title' => 'Judul Banner (Spanyol)',
        'languages.es.description' => 'Deskripsi Banner (Spanyol)',
        'languages.es.image' => 'Gambar Banner (Spanyol)',

        // Persian
        'translations.fa.name' => 'Nama (Persia)',
        'translations.fa.description' => 'Deskripsi (Persia)',
        'translations.fa.image' => 'Gambar (Persia)',
        'languages.fa.title' => 'Judul Banner (Persia)',
        'languages.fa.description' => 'Deskripsi Banner (Persia)',
        'languages.fa.image' => 'Gambar Banner (Persia)',

        // French
        'translations.fr.name' => 'Nama (Perancis)',
        'translations.fr.description' => 'Deskripsi (Perancis)',
        'translations.fr.image' => 'Gambar (Perancis)',
        'languages.fr.title' => 'Judul Banner (Perancis)',
        'languages.fr.description' => 'Deskripsi Banner (Perancis)',
        'languages.fr.image' => 'Gambar Banner (Perancis)',

        // Hindi
        'translations.hi.name' => 'Nama (Hindi)',
        'translations.hi.description' => 'Deskripsi (Hindi)',
        'translations.hi.image' => 'Gambar (Hindi)',
        'languages.hi.title' => 'Judul Banner (Hindi)',
        'languages.hi.description' => 'Deskripsi Banner (Hindi)',
        'languages.hi.image' => 'Gambar Banner (Hindi)',

        // Indonesian
        'translations.id.name' => 'Nama (Indonesia)',
        'translations.id.description' => 'Deskripsi (Indonesia)',
        'translations.id.image' => 'Gambar (Indonesia)',
        'languages.id.title' => 'Judul Banner (Indonesia)',
        'languages.id.description' => 'Deskripsi Banner (Indonesia)',
        'languages.id.image' => 'Gambar Banner (Indonesia)',

        // Italian
        'translations.it.name' => 'Nama (Italia)',
        'translations.it.description' => 'Deskripsi (Italia)',
        'translations.it.image' => 'Gambar (Italia)',
        'languages.it.title' => 'Judul Banner (Italia)',
        'languages.it.description' => 'Deskripsi Banner (Italia)',
        'languages.it.image' => 'Gambar Banner (Italia)',

        // Japanese
        'translations.ja.name' => 'Nama (Jepang)',
        'translations.ja.description' => 'Deskripsi (Jepang)',
        'translations.ja.image' => 'Gambar (Jepang)',
        'languages.ja.title' => 'Judul Banner (Jepang)',
        'languages.ja.description' => 'Deskripsi Banner (Jepang)',
        'languages.ja.image' => 'Gambar Banner (Jepang)',

        // Korean
        'translations.ko.name' => 'Nama (Korea)',
        'translations.ko.description' => 'Deskripsi (Korea)',
        'translations.ko.image' => 'Gambar (Korea)',
        'languages.ko.title' => 'Judul Banner (Korea)',
        'languages.ko.description' => 'Deskripsi Banner (Korea)',
        'languages.ko.image' => 'Gambar Banner (Korea)',

        // Dutch
        'translations.nl.name' => 'Nama (Belanda)',
        'translations.nl.description' => 'Deskripsi (Belanda)',
        'translations.nl.image' => 'Gambar (Belanda)',
        'languages.nl.title' => 'Judul Banner (Belanda)',
        'languages.nl.description' => 'Deskripsi Banner (Belanda)',
        'languages.nl.image' => 'Gambar Banner (Belanda)',

        // Polish
        'translations.pl.name' => 'Nama (Polandia)',
        'translations.pl.description' => 'Deskripsi (Polandia)',
        'translations.pl.image' => 'Gambar (Polandia)',
        'languages.pl.title' => 'Judul Banner (Polandia)',
        'languages.pl.description' => 'Deskripsi Banner (Polandia)',
        'languages.pl.image' => 'Gambar Banner (Polandia)',

        // Portuguese
        'translations.pt.name' => 'Nama (Portugis)',
        'translations.pt.description' => 'Deskripsi (Portugis)',
        'translations.pt.image' => 'Gambar (Portugis)',
        'languages.pt.title' => 'Judul Banner (Portugis)',
        'languages.pt.description' => 'Deskripsi Banner (Portugis)',
        'languages.pt.image' => 'Gambar Banner (Portugis)',

        // Russian
        'translations.ru.name' => 'Nama (Rusia)',
        'translations.ru.description' => 'Deskripsi (Rusia)',
        'translations.ru.image' => 'Gambar (Rusia)',
        'languages.ru.title' => 'Judul Banner (Rusia)',
        'languages.ru.description' => 'Deskripsi Banner (Rusia)',
        'languages.ru.image' => 'Gambar Banner (Rusia)',

        // Thai
        'translations.th.name' => 'Nama (Thailand)',
        'translations.th.description' => 'Deskripsi (Thailand)',
        'translations.th.image' => 'Gambar (Thailand)',
        'languages.th.title' => 'Judul Banner (Thailand)',
        'languages.th.description' => 'Deskripsi Banner (Thailand)',
        'languages.th.image' => 'Gambar Banner (Thailand)',

        // Turkish
        'translations.tr.name' => 'Nama (Turki)',
        'translations.tr.description' => 'Deskripsi (Turki)',
        'translations.tr.image' => 'Gambar (Turki)',
        'languages.tr.title' => 'Judul Banner (Turki)',
        'languages.tr.description' => 'Deskripsi Banner (Turki)',
        'languages.tr.image' => 'Gambar Banner (Turki)',

        // Vietnamese
        'translations.vi.name' => 'Nama (Vietnam)',
        'translations.vi.description' => 'Deskripsi (Vietnam)',
        'translations.vi.image' => 'Gambar (Vietnam)',
        'languages.vi.title' => 'Judul Banner (Vietnam)',
        'languages.vi.description' => 'Deskripsi Banner (Vietnam)',
        'languages.vi.image' => 'Gambar Banner (Vietnam)',

        // Chinese
        'translations.zh.name' => 'Nama (Cina)',
        'translations.zh.description' => 'Deskripsi (Cina)',
        'translations.zh.image' => 'Gambar (Cina)',
        'languages.zh.title' => 'Judul Banner (Cina)',
        'languages.zh.description' => 'Deskripsi Banner (Cina)',
        'languages.zh.image' => 'Gambar Banner (Cina)',
    ],
];
