<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    */

    'required' => 'El campo :attribute es obligatorio.',
    'string' => 'El :attribute debe ser una cadena de texto.',
    'max' => 'El :attribute no puede tener más de :max caracteres.',
    'min' => 'El :attribute debe tener al menos :min caracteres.',
    'image' => 'El :attribute debe ser una imagen.',
    'mimes' => 'El :attribute debe ser un archivo de tipo: :values.',
    'array' => 'El :attribute debe ser un arreglo.',
    'numeric' => 'El :attribute debe ser un número.',
    'integer' => 'El :attribute debe ser un número entero.',
    'lte' => 'El :attribute debe ser menor o igual a :value.',

    /*
    |--------------------------------------------------------------------------
    | Custom Attributes
    |--------------------------------------------------------------------------
    |
    | Aquí definimos nombres personalizados para los atributos de todos los idiomas.
    | De esta manera los mensajes de validación son más legibles.
    |
    */

    'attributes' => [

        // Vendor fields
        'name' => 'Nombre',
        'email' => 'Correo electrónico',
        'password' => 'Contraseña',
        'password_confirmation' => 'Confirmación de contraseña',
        'phone' => 'Número de teléfono',
        'status' => 'Estado',

        // Dynamic variants
        'variants.*.name' => 'Nombre de la variante',
        'variants.*.price' => 'Precio de la variante',
        'variants.*.discount_price' => 'Precio con descuento de la variante',
        'variants.*.stock' => 'Stock de la variante',
        'variants.*.SKU' => 'SKU de la variante',
        'variants.*.barcode' => 'Código de barras de la variante',
        'variants.*.weight' => 'Peso de la variante',
        'variants.*.dimensions' => 'Dimensiones de la variante',
        'variants.*.language_code' => 'Código de idioma de la variante',
        'variants.*.size_id' => 'Tamaño de la variante',
        'variants.*.color_id' => 'Color de la variante',

        // Translations for all supported languages

        // English
        'translations.en.name' => 'Nombre (Inglés)',
        'translations.en.description' => 'Descripción (Inglés)',
        'translations.en.image' => 'Imagen (Inglés)',
        'languages.en.title' => 'Título del banner (Inglés)',
        'languages.en.description' => 'Descripción del banner (Inglés)',
        'languages.en.image' => 'Imagen del banner (Inglés)',

        // Arabic
        'translations.ar.name' => 'Nombre (Árabe)',
        'translations.ar.description' => 'Descripción (Árabe)',
        'translations.ar.image' => 'Imagen (Árabe)',
        'languages.ar.title' => 'Título del banner (Árabe)',
        'languages.ar.description' => 'Descripción del banner (Árabe)',
        'languages.ar.image' => 'Imagen del banner (Árabe)',

        // German
        'translations.de.name' => 'Nombre (Alemán)',
        'translations.de.description' => 'Descripción (Alemán)',
        'translations.de.image' => 'Imagen (Alemán)',
        'languages.de.title' => 'Título del banner (Alemán)',
        'languages.de.description' => 'Descripción del banner (Alemán)',
        'languages.de.image' => 'Imagen del banner (Alemán)',

        // Spanish
        'translations.es.name' => 'Nombre (Español)',
        'translations.es.description' => 'Descripción (Español)',
        'translations.es.image' => 'Imagen (Español)',
        'languages.es.title' => 'Título del banner (Español)',
        'languages.es.description' => 'Descripción del banner (Español)',
        'languages.es.image' => 'Imagen del banner (Español)',

        // Persian
        'translations.fa.name' => 'Nombre (Persa)',
        'translations.fa.description' => 'Descripción (Persa)',
        'translations.fa.image' => 'Imagen (Persa)',
        'languages.fa.title' => 'Título del banner (Persa)',
        'languages.fa.description' => 'Descripción del banner (Persa)',
        'languages.fa.image' => 'Imagen del banner (Persa)',

        // French
        'translations.fr.name' => 'Nombre (Francés)',
        'translations.fr.description' => 'Descripción (Francés)',
        'translations.fr.image' => 'Imagen (Francés)',
        'languages.fr.title' => 'Título del banner (Francés)',
        'languages.fr.description' => 'Descripción del banner (Francés)',
        'languages.fr.image' => 'Imagen del banner (Francés)',

        // Hindi
        'translations.hi.name' => 'Nombre (Hindi)',
        'translations.hi.description' => 'Descripción (Hindi)',
        'translations.hi.image' => 'Imagen (Hindi)',
        'languages.hi.title' => 'Título del banner (Hindi)',
        'languages.hi.description' => 'Descripción del banner (Hindi)',
        'languages.hi.image' => 'Imagen del banner (Hindi)',

        // Indonesian
        'translations.id.name' => 'Nombre (Indonesio)',
        'translations.id.description' => 'Descripción (Indonesio)',
        'translations.id.image' => 'Imagen (Indonesio)',
        'languages.id.title' => 'Título del banner (Indonesio)',
        'languages.id.description' => 'Descripción del banner (Indonesio)',
        'languages.id.image' => 'Imagen del banner (Indonesio)',

        // Italian
        'translations.it.name' => 'Nombre (Italiano)',
        'translations.it.description' => 'Descripción (Italiano)',
        'translations.it.image' => 'Imagen (Italiano)',
        'languages.it.title' => 'Título del banner (Italiano)',
        'languages.it.description' => 'Descripción del banner (Italiano)',
        'languages.it.image' => 'Imagen del banner (Italiano)',

        // Japanese
        'translations.ja.name' => 'Nombre (Japonés)',
        'translations.ja.description' => 'Descripción (Japonés)',
        'translations.ja.image' => 'Imagen (Japonés)',
        'languages.ja.title' => 'Título del banner (Japonés)',
        'languages.ja.description' => 'Descripción del banner (Japonés)',
        'languages.ja.image' => 'Imagen del banner (Japonés)',

        // Korean
        'translations.ko.name' => 'Nombre (Coreano)',
        'translations.ko.description' => 'Descripción (Coreano)',
        'translations.ko.image' => 'Imagen (Coreano)',
        'languages.ko.title' => 'Título del banner (Coreano)',
        'languages.ko.description' => 'Descripción del banner (Coreano)',
        'languages.ko.image' => 'Imagen del banner (Coreano)',

        // Dutch
        'translations.nl.name' => 'Nombre (Neerlandés)',
        'translations.nl.description' => 'Descripción (Neerlandés)',
        'translations.nl.image' => 'Imagen (Neerlandés)',
        'languages.nl.title' => 'Título del banner (Neerlandés)',
        'languages.nl.description' => 'Descripción del banner (Neerlandés)',
        'languages.nl.image' => 'Imagen del banner (Neerlandés)',

        // Polish
        'translations.pl.name' => 'Nombre (Polaco)',
        'translations.pl.description' => 'Descripción (Polaco)',
        'translations.pl.image' => 'Imagen (Polaco)',
        'languages.pl.title' => 'Título del banner (Polaco)',
        'languages.pl.description' => 'Descripción del banner (Polaco)',
        'languages.pl.image' => 'Imagen del banner (Polaco)',

        // Portuguese
        'translations.pt.name' => 'Nombre (Portugués)',
        'translations.pt.description' => 'Descripción (Portugués)',
        'translations.pt.image' => 'Imagen (Portugués)',
        'languages.pt.title' => 'Título del banner (Portugués)',
        'languages.pt.description' => 'Descripción del banner (Portugués)',
        'languages.pt.image' => 'Imagen del banner (Portugués)',

        // Russian
        'translations.ru.name' => 'Nombre (Ruso)',
        'translations.ru.description' => 'Descripción (Ruso)',
        'translations.ru.image' => 'Imagen (Ruso)',
        'languages.ru.title' => 'Título del banner (Ruso)',
        'languages.ru.description' => 'Descripción del banner (Ruso)',
        'languages.ru.image' => 'Imagen del banner (Ruso)',

        // Thai
        'translations.th.name' => 'Nombre (Tailandés)',
        'translations.th.description' => 'Descripción (Tailandés)',
        'translations.th.image' => 'Imagen (Tailandés)',
        'languages.th.title' => 'Título del banner (Tailandés)',
        'languages.th.description' => 'Descripción del banner (Tailandés)',
        'languages.th.image' => 'Imagen del banner (Tailandés)',

        // Turkish
        'translations.tr.name' => 'Nombre (Turco)',
        'translations.tr.description' => 'Descripción (Turco)',
        'translations.tr.image' => 'Imagen (Turco)',
        'languages.tr.title' => 'Título del banner (Turco)',
        'languages.tr.description' => 'Descripción del banner (Turco)',
        'languages.tr.image' => 'Imagen del banner (Turco)',

        // Vietnamese
        'translations.vi.name' => 'Nombre (Vietnamita)',
        'translations.vi.description' => 'Descripción (Vietnamita)',
        'translations.vi.image' => 'Imagen (Vietnamita)',
        'languages.vi.title' => 'Título del banner (Vietnamita)',
        'languages.vi.description' => 'Descripción del banner (Vietnamita)',
        'languages.vi.image' => 'Imagen del banner (Vietnamita)',

        // Chinese
        'translations.zh.name' => 'Nombre (Chino)',
        'translations.zh.description' => 'Descripción (Chino)',
        'translations.zh.image' => 'Imagen (Chino)',
        'languages.zh.title' => 'Título del banner (Chino)',
        'languages.zh.description' => 'Descripción del banner (Chino)',
        'languages.zh.image' => 'Imagen del banner (Chino)',
    ],
];
