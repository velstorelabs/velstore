<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    */

    'required' => ':attribute harus diisi.',
    'string' => ':attribute harus berupa string.',
    'max' => ':attribute tidak boleh lebih dari :max karakter.',
    'min' => ':attribute harus minimal :min karakter.',
    'image' => ':attribute harus berupa gambar.',
    'mimes' => ':attribute harus berupa file dengan tipe: :values.',
    'array' => ':attribute harus berupa array.',
    'numeric' => ':attribute harus berupa angka.',
    'integer' => ':attribute harus berupa bilangan bulat.',
    'lte' => ':attribute harus kurang dari atau sama dengan :value.',
    'regex' => 'Format :attribute tidak valid.',
    'confirmed' => 'Konfirmasi :attribute tidak cocok.',
    'incorrect_current_password' => 'Kata sandi saat ini salah.',

    'password' => [
        'letters' => ':attribute harus berisi setidaknya satu huruf.',
        'mixed' => ':attribute harus berisi huruf besar dan huruf kecil.',
        'numbers' => ':attribute harus berisi setidaknya satu angka.',
        'symbols' => ':attribute harus berisi setidaknya satu simbol.',
        'uncompromised' => ':attribute ditemukan dalam kebocoran data. Silakan pilih :attribute yang berbeda.',
    ],

    'custom' => [
        'password' => [
            'confirmed' => 'Konfirmasi kata sandi tidak cocok.',
            'min' => 'Kata sandi harus terdiri dari minimal :min karakter.',
            'symbols' => 'Kata sandi harus berisi setidaknya satu simbol.',
        ],
        'phone' => [
            'regex' => 'Nomor telepon hanya boleh berisi angka, spasi, tanda hubung, dan tanda + opsional.',
        ],
        'email' => [
            'unique' => 'Email ini sudah terdaftar.',
        ],
        'status' => [
            'in' => 'Status yang dipilih tidak valid.',
        ],
    ],

    'attributes' => [

        // Admin profile
        'current_password' => 'Kata Sandi Saat Ini',
        'profile_image' => 'Gambar Profil',

        // Vendor fields
        'name' => 'Nama',
        'email' => 'Email',
        'password' => 'Kata Sandi',
        'password_confirmation' => 'Konfirmasi Kata Sandi',
        'phone' => 'Nomor Telepon',
        'status' => 'Status',

        // Social links
        'type' => 'Jenis Platform',
        'platform' => 'Nama Platform',
        'link' => 'Link Platform',

        // Menu fields
        'title' => 'Judul Menu',
        'order_number' => 'Nomor Pesanan',

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

        // Attribute name
        'name' => 'Nama Atribut',

        // Attribute values
        'values.*' => 'Nilai Atribut',
        ...array_combine(
            array_map(fn ($i) => "values.$i", range(0, 49)),
            array_map(fn ($i) => "Nilai Atribut $i", range(0, 49))
        ),

        // Attribute value translations (English)
        'translations.en.*' => 'Nilai (Inggris)',
        ...array_combine(
            array_map(fn ($i) => "translations.en.$i", range(0, 49)),
            array_map(fn ($i) => "Nilai (Inggris) $i", range(0, 49))
        ),

        // Attribute value translations (Arabic)
        'translations.ar.*' => 'Nilai (Arab)',
        ...array_combine(
            array_map(fn ($i) => "translations.ar.$i", range(0, 49)),
            array_map(fn ($i) => "Nilai (Arab) $i", range(0, 49))
        ),

        // Attribute value translations (German)
        'translations.de.*' => 'Nilai (Jerman)',
        ...array_combine(
            array_map(fn ($i) => "translations.de.$i", range(0, 49)),
            array_map(fn ($i) => "Nilai (Jerman) $i", range(0, 49))
        ),

        // Attribute value translations (Spanish)
        'translations.es.*' => 'Nilai (Spanyol)',
        ...array_combine(
            array_map(fn ($i) => "translations.es.$i", range(0, 49)),
            array_map(fn ($i) => "Nilai (Spanyol) $i", range(0, 49))
        ),

        // Attribute value translations (Persian)
        'translations.fa.*' => 'Nilai (Persia)',
        ...array_combine(
            array_map(fn ($i) => "translations.fa.$i", range(0, 49)),
            array_map(fn ($i) => "Nilai (Persia) $i", range(0, 49))
        ),

        // Attribute value translations (French)
        'translations.fr.*' => 'Nilai (Prancis)',
        ...array_combine(
            array_map(fn ($i) => "translations.fr.$i", range(0, 49)),
            array_map(fn ($i) => "Nilai (Prancis) $i", range(0, 49))
        ),

        // Attribute value translations (Hindi)
        'translations.hi.*' => 'Nilai (Hindi)',
        ...array_combine(
            array_map(fn ($i) => "translations.hi.$i", range(0, 49)),
            array_map(fn ($i) => "Nilai (Hindi) $i", range(0, 49))
        ),

        // Attribute value translations (Indonesian)
        'translations.id.*' => 'Nilai (Indonesia)',
        ...array_combine(
            array_map(fn ($i) => "translations.id.$i", range(0, 49)),
            array_map(fn ($i) => "Nilai (Indonesia) $i", range(0, 49))
        ),

        // Attribute value translations (Italian)
        'translations.it.*' => 'Nilai (Italia)',
        ...array_combine(
            array_map(fn ($i) => "translations.it.$i", range(0, 49)),
            array_map(fn ($i) => "Nilai (Italia) $i", range(0, 49))
        ),

        // Attribute value translations (Japanese)
        'translations.ja.*' => 'Nilai (Jepang)',
        ...array_combine(
            array_map(fn ($i) => "translations.ja.$i", range(0, 49)),
            array_map(fn ($i) => "Nilai (Jepang) $i", range(0, 49))
        ),

        // Attribute value translations (Korean)
        'translations.ko.*' => 'Nilai (Korea)',
        ...array_combine(
            array_map(fn ($i) => "translations.ko.$i", range(0, 49)),
            array_map(fn ($i) => "Nilai (Korea) $i", range(0, 49))
        ),

        // Attribute value translations (Dutch)
        'translations.nl.*' => 'Nilai (Belanda)',
        ...array_combine(
            array_map(fn ($i) => "translations.nl.$i", range(0, 49)),
            array_map(fn ($i) => "Nilai (Belanda) $i", range(0, 49))
        ),

        // Attribute value translations (Polish)
        'translations.pl.*' => 'Nilai (Polandia)',
        ...array_combine(
            array_map(fn ($i) => "translations.pl.$i", range(0, 49)),
            array_map(fn ($i) => "Nilai (Polandia) $i", range(0, 49))
        ),

        // Attribute value translations (Portuguese)
        'translations.pt.*' => 'Nilai (Portugis)',
        ...array_combine(
            array_map(fn ($i) => "translations.pt.$i", range(0, 49)),
            array_map(fn ($i) => "Nilai (Portugis) $i", range(0, 49))
        ),

        // Attribute value translations (Russian)
        'translations.ru.*' => 'Nilai (Rusia)',
        ...array_combine(
            array_map(fn ($i) => "translations.ru.$i", range(0, 49)),
            array_map(fn ($i) => "Nilai (Rusia) $i", range(0, 49))
        ),

        // Attribute value translations (Thai)
        'translations.th.*' => 'Nilai (Thailand)',
        ...array_combine(
            array_map(fn ($i) => "translations.th.$i", range(0, 49)),
            array_map(fn ($i) => "Nilai (Thailand) $i", range(0, 49))
        ),

        // Attribute value translations (Turkish)
        'translations.tr.*' => 'Nilai (Turki)',
        ...array_combine(
            array_map(fn ($i) => "translations.tr.$i", range(0, 49)),
            array_map(fn ($i) => "Nilai (Turki) $i", range(0, 49))
        ),

        // Attribute value translations (Vietnamese)
        'translations.vi.*' => 'Nilai (Vietnam)',
        ...array_combine(
            array_map(fn ($i) => "translations.vi.$i", range(0, 49)),
            array_map(fn ($i) => "Nilai (Vietnam) $i", range(0, 49))
        ),

        // Attribute value translations (Chinese)
        'translations.zh.*' => 'Nilai (Cina)',
        ...array_combine(
            array_map(fn ($i) => "translations.zh.$i", range(0, 49)),
            array_map(fn ($i) => "Nilai (Cina) $i", range(0, 49))
        ),

        // Translations for all supported languages

        // English
        'translations.en.name' => 'Name (English)',
        'translations.en.description' => 'Description (English)',
        'translations.en.image' => 'Image (English)',
        'translations.en.title' => 'Title (English)',
        'translations.en.content' => 'Content (English)',
        'languages.en.title' => 'Banner Title (English)',
        'languages.en.description' => 'Banner Description (English)',
        'languages.en.image' => 'Banner Image (English)',
        'languages.en.name' => 'Platform Name (English)',
        'title.en' => 'Title (English)',

        // Arabic
        'translations.ar.name' => 'Name (Arabic)',
        'translations.ar.description' => 'Description (Arabic)',
        'translations.ar.image' => 'Image (Arabic)',
        'translations.ar.title' => 'Title (Arabic)',
        'translations.ar.content' => 'Content (Arabic)',
        'languages.ar.title' => 'Banner Title (Arabic)',
        'languages.ar.description' => 'Banner Description (Arabic)',
        'languages.ar.image' => 'Banner Image (Arabic)',
        'languages.ar.name' => 'Platform Name (Arabic)',
        'title.ar' => 'Title (Arabic)',

        // German
        'translations.de.name' => 'Name (German)',
        'translations.de.description' => 'Description (German)',
        'translations.de.image' => 'Image (German)',
        'translations.de.title' => 'Title (German)',
        'translations.de.content' => 'Content (German)',
        'languages.de.title' => 'Banner Title (German)',
        'languages.de.description' => 'Banner Description (German)',
        'languages.de.image' => 'Banner Image (German)',
        'languages.de.name' => 'Platform Name (German)',
        'title.de' => 'Title (German)',

        // Spanish
        'translations.es.name' => 'Name (Spanish)',
        'translations.es.description' => 'Description (Spanish)',
        'translations.es.image' => 'Image (Spanish)',
        'translations.es.title' => 'Title (Spanish)',
        'translations.es.content' => 'Content (Spanish)',
        'languages.es.title' => 'Banner Title (Spanish)',
        'languages.es.description' => 'Banner Description (Spanish)',
        'languages.es.image' => 'Banner Image (Spanish)',
        'languages.es.name' => 'Platform Name (Spanish)',
        'title.es' => 'Title (Spanish)',

        // Persian
        'translations.fa.name' => 'Name (Persian)',
        'translations.fa.description' => 'Description (Persian)',
        'translations.fa.image' => 'Image (Persian)',
        'translations.fa.title' => 'Title (Persian)',
        'translations.fa.content' => 'Content (Persian)',
        'languages.fa.title' => 'Banner Title (Persian)',
        'languages.fa.description' => 'Banner Description (Persian)',
        'languages.fa.image' => 'Banner Image (Persian)',
        'languages.fa.name' => 'Platform Name (Persian)',
        'title.fa' => 'Title (Persian)',

        // French
        'translations.fr.name' => 'Name (French)',
        'translations.fr.description' => 'Description (French)',
        'translations.fr.image' => 'Image (French)',
        'translations.fr.title' => 'Title (French)',
        'translations.fr.content' => 'Content (French)',
        'languages.fr.title' => 'Banner Title (French)',
        'languages.fr.description' => 'Banner Description (French)',
        'languages.fr.image' => 'Banner Image (French)',
        'languages.fr.name' => 'Platform Name (French)',
        'title.fr' => 'Title (French)',

        // Hindi
        'translations.hi.name' => 'Name (Hindi)',
        'translations.hi.description' => 'Description (Hindi)',
        'translations.hi.image' => 'Image (Hindi)',
        'translations.hi.title' => 'Title (Hindi)',
        'translations.hi.content' => 'Content (Hindi)',
        'languages.hi.title' => 'Banner Title (Hindi)',
        'languages.hi.description' => 'Banner Description (Hindi)',
        'languages.hi.image' => 'Banner Image (Hindi)',
        'languages.hi.name' => 'Platform Name (Hindi)',
        'title.hi' => 'Title (Hindi)',

        // Indonesian (translated)
        'translations.id.name' => 'Nama (Indonesia)',
        'translations.id.description' => 'Deskripsi (Indonesia)',
        'translations.id.image' => 'Gambar (Indonesia)',
        'translations.id.title' => 'Judul (Indonesia)',
        'translations.id.content' => 'Konten (Indonesia)',
        'languages.id.title' => 'Judul Banner (Indonesia)',
        'languages.id.description' => 'Deskripsi Banner (Indonesia)',
        'languages.id.image' => 'Gambar Banner (Indonesia)',
        'languages.id.name' => 'Nama Platform (Indonesia)',
        'title.id' => 'Judul (Indonesia)',

        // Italian
        'translations.it.name' => 'Name (Italian)',
        'translations.it.description' => 'Description (Italian)',
        'translations.it.image' => 'Image (Italian)',
        'translations.it.title' => 'Title (Italian)',
        'translations.it.content' => 'Content (Italian)',
        'languages.it.title' => 'Banner Title (Italian)',
        'languages.it.description' => 'Banner Description (Italian)',
        'languages.it.image' => 'Banner Image (Italian)',
        'languages.it.name' => 'Platform Name (Italian)',
        'title.it' => 'Title (Italian)',

        // Japanese
        'translations.ja.name' => 'Name (Japanese)',
        'translations.ja.description' => 'Description (Japanese)',
        'translations.ja.image' => 'Image (Japanese)',
        'translations.ja.title' => 'Title (Japanese)',
        'translations.ja.content' => 'Content (Japanese)',
        'languages.ja.title' => 'Banner Title (Japanese)',
        'languages.ja.description' => 'Banner Description (Japanese)',
        'languages.ja.image' => 'Banner Image (Japanese)',
        'languages.ja.name' => 'Platform Name (Japanese)',
        'title.ja' => 'Title (Japanese)',

        // Korean
        'translations.ko.name' => 'Name (Korean)',
        'translations.ko.description' => 'Description (Korean)',
        'translations.ko.image' => 'Image (Korean)',
        'translations.ko.title' => 'Title (Korean)',
        'translations.ko.content' => 'Content (Korean)',
        'languages.ko.title' => 'Banner Title (Korean)',
        'languages.ko.description' => 'Banner Description (Korean)',
        'languages.ko.image' => 'Banner Image (Korean)',
        'languages.ko.name' => 'Platform Name (Korean)',
        'title.ko' => 'Title (Korean)',

        // Dutch
        'translations.nl.name' => 'Name (Dutch)',
        'translations.nl.description' => 'Description (Dutch)',
        'translations.nl.image' => 'Image (Dutch)',
        'translations.nl.title' => 'Title (Dutch)',
        'translations.nl.content' => 'Content (Dutch)',
        'languages.nl.title' => 'Banner Title (Dutch)',
        'languages.nl.description' => 'Banner Description (Dutch)',
        'languages.nl.image' => 'Banner Image (Dutch)',
        'languages.nl.name' => 'Platform Name (Dutch)',
        'title.nl' => 'Title (Dutch)',

        // Polish
        'translations.pl.name' => 'Name (Polish)',
        'translations.pl.description' => 'Description (Polish)',
        'translations.pl.image' => 'Image (Polish)',
        'translations.pl.title' => 'Title (Polish)',
        'translations.pl.content' => 'Content (Polish)',
        'languages.pl.title' => 'Banner Title (Polish)',
        'languages.pl.description' => 'Banner Description (Polish)',
        'languages.pl.image' => 'Banner Image (Polish)',
        'languages.Pl.name' => 'Platform Name (Polish)',
        'title.pl' => 'Title (Polish)',

        // Portuguese
        'translations.pt.name' => 'Name (Portuguese)',
        'translations.pt.description' => 'Description (Portuguese)',
        'translations.pt.image' => 'Image (Portuguese)',
        'translations.pt.title' => 'Title (Portuguese)',
        'translations.pt.content' => 'Content (Portuguese)',
        'languages.pt.title' => 'Banner Title (Portuguese)',
        'languages.pt.description' => 'Banner Description (Portuguese)',
        'languages.pt.image' => 'Banner Image (Portuguese)',
        'languages.pt.name' => 'Platform Name (Portuguese)',
        'title.pt' => 'Title (Portuguese)',

        // Russian
        'translations.ru.name' => 'Name (Russian)',
        'translations.ru.description' => 'Description (Russian)',
        'translations.ru.image' => 'Image (Russian)',
        'translations.ru.title' => 'Title (Russian)',
        'translations.ru.content' => 'Content (Russian)',
        'languages.ru.title' => 'Banner Title (Russian)',
        'languages.ru.description' => 'Banner Description (Russian)',
        'languages.ru.image' => 'Banner Image (Russian)',
        'languages.ru.name' => 'Platform Name (Russian)',
        'title.ru' => 'Title (Russian)',

        // Thai
        'translations.th.name' => 'Name (Thai)',
        'translations.th.description' => 'Description (Thai)',
        'translations.th.image' => 'Image (Thai)',
        'translations.th.title' => 'Title (Thai)',
        'translations.th.content' => 'Content (Thai)',
        'languages.th.title' => 'Banner Title (Thai)',
        'languages.th.description' => 'Banner Description (Thai)',
        'languages.th.image' => 'Banner Image (Thai)',
        'languages.th.name' => 'Platform Name (Thai)',
        'title.th' => 'Title (Thai)',

        // Turkish
        'translations.tr.name' => 'Name (Turkish)',
        'translations.tr.description' => 'Description (Turkish)',
        'translations.tr.image' => 'Image (Turkish)',
        'translations.tr.title' => 'Title (Turkish)',
        'translations.tr.content' => 'Content (Turkish)',
        'languages.tr.title' => 'Banner Title (Turkish)',
        'languages.tr.description' => 'Banner Description (Turkish)',
        'languages.tr.image' => 'Banner Image (Turkish)',
        'languages.tr.name' => 'Platform Name (Turkish)',
        'title.tr' => 'Title (Turkish)',

        // Vietnamese
        'translations.vi.name' => 'Name (Vietnamese)',
        'translations.vi.description' => 'Description (Vietnamese)',
        'translations.vi.image' => 'Image (Vietnamese)',
        'translations.vi.title' => 'Title (Vietnamese)',
        'translations.vi.content' => 'Content (Vietnamese)',
        'languages.vi.title' => 'Banner Title (Vietnamese)',
        'languages.vi.description' => 'Banner Description (Vietnamese)',
        'languages.vi.image' => 'Banner Image (Vietnamese)',
        'languages.vi.name' => 'Platform Name (Vietnamese)',
        'title.vi' => 'Title (Vietnamese)',

        // Chinese
        'translations.zh.name' => 'Name (Chinese)',
        'translations.zh.description' => 'Description (Chinese)',
        'translations.zh.image' => 'Image (Chinese)',
        'translations.zh.title' => 'Title (Chinese)',
        'translations.zh.content' => 'Content (Chinese)',
        'languages.zh.title' => 'Banner Title (Chinese)',
        'languages.zh.description' => 'Banner Description (Chinese)',
        'languages.zh.image' => 'Banner Image (Chinese)',
        'languages.zh.name' => 'Platform Name (Chinese)',
        'title.zh' => 'Title (Chinese)',
    ],
];
