<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    */

    'required' => 'The :attribute field is required.',
    'string' => 'The :attribute must be a string.',
    'max' => 'The :attribute may not be greater than :max characters.',
    'min' => 'The :attribute must be at least :min characters.',
    'image' => 'The :attribute must be an image.',
    'mimes' => 'The :attribute must be a file of type: :values.',
    'array' => 'The :attribute must be an array.',
    'numeric' => 'The :attribute must be a number.',
    'integer' => 'The :attribute must be an integer.',
    'lte' => 'The :attribute must be less than or equal to :value.',

    /*
    |--------------------------------------------------------------------------
    | Custom Attributes
    |--------------------------------------------------------------------------
    |
    | Here we define custom attribute names for multiple languages.
    | This way validation messages are more readable.
    |
    */

    'attributes' => [

        // Vendor fields
        'name' => 'Name',
        'email' => 'Email',
        'password' => 'Password',
        'password_confirmation' => 'Password Confirmation',
        'phone' => 'Phone Number',
        'status' => 'Status',

        // Dynamic variants
        'variants.*.name' => 'Variant Name',
        'variants.*.price' => 'Variant Price',
        'variants.*.discount_price' => 'Variant Discount Price',
        'variants.*.stock' => 'Variant Stock',
        'variants.*.SKU' => 'Variant SKU',
        'variants.*.barcode' => 'Variant Barcode',
        'variants.*.weight' => 'Variant Weight',
        'variants.*.dimensions' => 'Variant Dimensions',
        'variants.*.language_code' => 'Variant Language Code',
        'variants.*.size_id' => 'Variant Size',
        'variants.*.color_id' => 'Variant Color',

        // Translations for all supported languages

        // English
        'translations.en.name' => 'Name (English)',
        'translations.en.description' => 'Description (English)',
        'translations.en.image' => 'Image (English)',
        'languages.en.title' => 'Banner Title (English)',
        'languages.en.description' => 'Banner Description (English)',
        'languages.en.image' => 'Banner Image (English)',

        // Arabic
        'translations.ar.name' => 'Name (Arabic)',
        'translations.ar.description' => 'Description (Arabic)',
        'translations.ar.image' => 'Image (Arabic)',
        'languages.ar.title' => 'Banner Title (Arabic)',
        'languages.ar.description' => 'Banner Description (Arabic)',
        'languages.ar.image' => 'Banner Image (Arabic)',

        // German
        'translations.de.name' => 'Name (German)',
        'translations.de.description' => 'Description (German)',
        'translations.de.image' => 'Image (German)',
        'languages.de.title' => 'Banner Title (German)',
        'languages.de.description' => 'Banner Description (German)',
        'languages.de.image' => 'Banner Image (German)',

        // Spanish
        'translations.es.name' => 'Name (Spanish)',
        'translations.es.description' => 'Description (Spanish)',
        'translations.es.image' => 'Image (Spanish)',
        'languages.es.title' => 'Banner Title (Spanish)',
        'languages.es.description' => 'Banner Description (Spanish)',
        'languages.es.image' => 'Banner Image (Spanish)',

        // Persian
        'translations.fa.name' => 'Name (Persian)',
        'translations.fa.description' => 'Description (Persian)',
        'translations.fa.image' => 'Image (Persian)',
        'languages.fa.title' => 'Banner Title (Persian)',
        'languages.fa.description' => 'Banner Description (Persian)',
        'languages.fa.image' => 'Banner Image (Persian)',

        // French
        'translations.fr.name' => 'Name (French)',
        'translations.fr.description' => 'Description (French)',
        'translations.fr.image' => 'Image (French)',
        'languages.fr.title' => 'Banner Title (French)',
        'languages.fr.description' => 'Banner Description (French)',
        'languages.fr.image' => 'Banner Image (French)',

        // Hindi
        'translations.hi.name' => 'Name (Hindi)',
        'translations.hi.description' => 'Description (Hindi)',
        'translations.hi.image' => 'Image (Hindi)',
        'languages.hi.title' => 'Banner Title (Hindi)',
        'languages.hi.description' => 'Banner Description (Hindi)',
        'languages.hi.image' => 'Banner Image (Hindi)',

        // Indonesian
        'translations.id.name' => 'Name (Indonesian)',
        'translations.id.description' => 'Description (Indonesian)',
        'translations.id.image' => 'Image (Indonesian)',
        'languages.id.title' => 'Banner Title (Indonesian)',
        'languages.id.description' => 'Banner Description (Indonesian)',
        'languages.id.image' => 'Banner Image (Indonesian)',

        // Italian
        'translations.it.name' => 'Name (Italian)',
        'translations.it.description' => 'Description (Italian)',
        'translations.it.image' => 'Image (Italian)',
        'languages.it.title' => 'Banner Title (Italian)',
        'languages.it.description' => 'Banner Description (Italian)',
        'languages.it.image' => 'Banner Image (Italian)',

        // Japanese
        'translations.ja.name' => 'Name (Japanese)',
        'translations.ja.description' => 'Description (Japanese)',
        'translations.ja.image' => 'Image (Japanese)',
        'languages.ja.title' => 'Banner Title (Japanese)',
        'languages.ja.description' => 'Banner Description (Japanese)',
        'languages.ja.image' => 'Banner Image (Japanese)',

        // Korean
        'translations.ko.name' => 'Name (Korean)',
        'translations.ko.description' => 'Description (Korean)',
        'translations.ko.image' => 'Image (Korean)',
        'languages.ko.title' => 'Banner Title (Korean)',
        'languages.ko.description' => 'Banner Description (Korean)',
        'languages.ko.image' => 'Banner Image (Korean)',

        // Dutch
        'translations.nl.name' => 'Name (Dutch)',
        'translations.nl.description' => 'Description (Dutch)',
        'translations.nl.image' => 'Image (Dutch)',
        'languages.nl.title' => 'Banner Title (Dutch)',
        'languages.nl.description' => 'Banner Description (Dutch)',
        'languages.nl.image' => 'Banner Image (Dutch)',

        // Polish
        'translations.pl.name' => 'Name (Polish)',
        'translations.pl.description' => 'Description (Polish)',
        'translations.pl.image' => 'Image (Polish)',
        'languages.pl.title' => 'Banner Title (Polish)',
        'languages.pl.description' => 'Banner Description (Polish)',
        'languages.pl.image' => 'Banner Image (Polish)',

        // Portuguese
        'translations.pt.name' => 'Name (Portuguese)',
        'translations.pt.description' => 'Description (Portuguese)',
        'translations.pt.image' => 'Image (Portuguese)',
        'languages.pt.title' => 'Banner Title (Portuguese)',
        'languages.pt.description' => 'Banner Description (Portuguese)',
        'languages.pt.image' => 'Banner Image (Portuguese)',

        // Russian
        'translations.ru.name' => 'Name (Russian)',
        'translations.ru.description' => 'Description (Russian)',
        'translations.ru.image' => 'Image (Russian)',
        'languages.ru.title' => 'Banner Title (Russian)',
        'languages.ru.description' => 'Banner Description (Russian)',
        'languages.ru.image' => 'Banner Image (Russian)',

        // Thai
        'translations.th.name' => 'Name (Thai)',
        'translations.th.description' => 'Description (Thai)',
        'translations.th.image' => 'Image (Thai)',
        'languages.th.title' => 'Banner Title (Thai)',
        'languages.th.description' => 'Banner Description (Thai)',
        'languages.th.image' => 'Banner Image (Thai)',

        // Turkish
        'translations.tr.name' => 'Name (Turkish)',
        'translations.tr.description' => 'Description (Turkish)',
        'translations.tr.image' => 'Image (Turkish)',
        'languages.tr.title' => 'Banner Title (Turkish)',
        'languages.tr.description' => 'Banner Description (Turkish)',
        'languages.tr.image' => 'Banner Image (Turkish)',

        // Vietnamese
        'translations.vi.name' => 'Name (Vietnamese)',
        'translations.vi.description' => 'Description (Vietnamese)',
        'translations.vi.image' => 'Image (Vietnamese)',
        'languages.vi.title' => 'Banner Title (Vietnamese)',
        'languages.vi.description' => 'Banner Description (Vietnamese)',
        'languages.vi.image' => 'Banner Image (Vietnamese)',

        // Chinese
        'translations.zh.name' => 'Name (Chinese)',
        'translations.zh.description' => 'Description (Chinese)',
        'translations.zh.image' => 'Image (Chinese)',
        'languages.zh.title' => 'Banner Title (Chinese)',
        'languages.zh.description' => 'Banner Description (Chinese)',
        'languages.zh.image' => 'Banner Image (Chinese)',
    ],
];
