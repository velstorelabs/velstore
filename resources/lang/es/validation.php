<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    */

    'required' => 'El campo :attribute es obligatorio.',
    'string' => 'El campo :attribute debe ser una cadena de texto.',
    'max' => 'El campo :attribute no puede tener más de :max caracteres.',
    'min' => 'El campo :attribute debe tener al menos :min caracteres.',
    'image' => 'El campo :attribute debe ser una imagen.',
    'mimes' => 'El campo :attribute debe ser un archivo de tipo: :values.',
    'array' => 'El campo :attribute debe ser un arreglo.',
    'numeric' => 'El campo :attribute debe ser un número.',
    'integer' => 'El campo :attribute debe ser un número entero.',
    'lte' => 'El campo :attribute debe ser menor o igual a :value.',
    'regex' => 'El formato de :attribute no es válido.',
    'confirmed' => 'La confirmación de :attribute no coincide.',
    'incorrect_current_password' => 'La contraseña actual es incorrecta.',

    'password' => [
        'letters' => ':attribute debe contener al menos una letra.',
        'mixed' => ':attribute debe contener letras mayúsculas y minúsculas.',
        'numbers' => ':attribute debe contener al menos un número.',
        'symbols' => ':attribute debe contener al menos un símbolo.',
        'uncompromised' => ':attribute ha aparecido en una filtración de datos. Por favor, elige otro :attribute.',
    ],

    'custom' => [
        'password' => [
            'confirmed' => 'La confirmación de la contraseña no coincide.',
            'min' => 'La contraseña debe tener al menos :min caracteres.',
            'symbols' => 'La contraseña debe contener al menos un símbolo.',
        ],
        'phone' => [
            'regex' => 'El número de teléfono solo puede contener números, espacios, guiones y un signo + opcional.',
        ],
        'email' => [
            'unique' => 'Este correo electrónico ya está registrado.',
        ],
        'status' => [
            'in' => 'El estado seleccionado no es válido.',
        ],
    ],

    'attributes' => [

        // Admin profile
        'current_password' => 'Contraseña actual',
        'profile_image' => 'Imagen de perfil',

        // Vendor fields
        'name' => 'Nombre',
        'email' => 'Correo electrónico',
        'password' => 'Contraseña',
        'password_confirmation' => 'Confirmación de contraseña',
        'phone' => 'Número de teléfono',
        'status' => 'Estado',

        // Social links
        'type' => 'Tipo de plataforma',
        'platform' => 'Nombre de la plataforma',
        'link' => 'Enlace de la plataforma',

        // Menu fields
        'title' => 'Título del menú',
        'order_number' => 'Número de pedido',

        // Dynamic variants
        'variants.*.name' => 'Nombre de variante',
        'variants.*.price' => 'Precio de variante',
        'variants.*.discount_price' => 'Precio de descuento de variante',
        'variants.*.stock' => 'Stock de variante',
        'variants.*.SKU' => 'SKU de variante',
        'variants.*.barcode' => 'Código de barras de variante',
        'variants.*.weight' => 'Peso de variante',
        'variants.*.dimensions' => 'Dimensiones de variante',
        'variants.*.language_code' => 'Código de idioma de variante',
        'variants.*.size_id' => 'Tamaño de variante',
        'variants.*.color_id' => 'Color de variante',

        // Attribute name
        'name' => 'Nombre del atributo',

        // Attribute values
        'values.*' => 'Valor del atributo',
        ...array_combine(
            array_map(fn ($i) => "values.$i", range(0, 49)),
            array_map(fn ($i) => "Valor del atributo $i", range(0, 49))
        ),

        // Attribute value translations (English)
        'translations.en.*' => 'Valor (Inglés)',
        ...array_combine(
            array_map(fn ($i) => "translations.en.$i", range(0, 49)),
            array_map(fn ($i) => "Valor (Inglés) $i", range(0, 49))
        ),

        // Attribute value translations (Arabic)
        'translations.ar.*' => 'Valor (Árabe)',
        ...array_combine(
            array_map(fn ($i) => "translations.ar.$i", range(0, 49)),
            array_map(fn ($i) => "Valor (Árabe) $i", range(0, 49))
        ),

        // Attribute value translations (German)
        'translations.de.*' => 'Valor (Alemán)',
        ...array_combine(
            array_map(fn ($i) => "translations.de.$i", range(0, 49)),
            array_map(fn ($i) => "Valor (Alemán) $i", range(0, 49))
        ),

        // Attribute value translations (Spanish)
        'translations.es.*' => 'Valor (Español)',
        ...array_combine(
            array_map(fn ($i) => "translations.es.$i", range(0, 49)),
            array_map(fn ($i) => "Valor (Español) $i", range(0, 49))
        ),

        // Attribute value translations (Persian)
        'translations.fa.*' => 'Valor (Persa)',
        ...array_combine(
            array_map(fn ($i) => "translations.fa.$i", range(0, 49)),
            array_map(fn ($i) => "Valor (Persa) $i", range(0, 49))
        ),

        // Attribute value translations (French)
        'translations.fr.*' => 'Valor (Francés)',
        ...array_combine(
            array_map(fn ($i) => "translations.fr.$i", range(0, 49)),
            array_map(fn ($i) => "Valor (Francés) $i", range(0, 49))
        ),

        // Attribute value translations (Hindi)
        'translations.hi.*' => 'Valor (Hindi)',
        ...array_combine(
            array_map(fn ($i) => "translations.hi.$i", range(0, 49)),
            array_map(fn ($i) => "Valor (Hindi) $i", range(0, 49))
        ),

        // Attribute value translations (Indonesian)
        'translations.id.*' => 'Valor (Indonesio)',
        ...array_combine(
            array_map(fn ($i) => "translations.id.$i", range(0, 49)),
            array_map(fn ($i) => "Valor (Indonesio) $i", range(0, 49))
        ),

        // Attribute value translations (Italian)
        'translations.it.*' => 'Valor (Italiano)',
        ...array_combine(
            array_map(fn ($i) => "translations.it.$i", range(0, 49)),
            array_map(fn ($i) => "Valor (Italiano) $i", range(0, 49))
        ),

        // Attribute value translations (Japanese)
        'translations.ja.*' => 'Valor (Japonés)',
        ...array_combine(
            array_map(fn ($i) => "translations.ja.$i", range(0, 49)),
            array_map(fn ($i) => "Valor (Japonés) $i", range(0, 49))
        ),

        // Attribute value translations (Korean)
        'translations.ko.*' => 'Valor (Coreano)',
        ...array_combine(
            array_map(fn ($i) => "translations.ko.$i", range(0, 49)),
            array_map(fn ($i) => "Valor (Coreano) $i", range(0, 49))
        ),

        // Attribute value translations (Dutch)
        'translations.nl.*' => 'Valor (Holandés)',
        ...array_combine(
            array_map(fn ($i) => "translations.nl.$i", range(0, 49)),
            array_map(fn ($i) => "Valor (Holandés) $i", range(0, 49))
        ),

        // Attribute value translations (Polish)
        'translations.pl.*' => 'Valor (Polaco)',
        ...array_combine(
            array_map(fn ($i) => "translations.pl.$i", range(0, 49)),
            array_map(fn ($i) => "Valor (Polaco) $i", range(0, 49))
        ),

        // Attribute value translations (Portuguese)
        'translations.pt.*' => 'Valor (Portugués)',
        ...array_combine(
            array_map(fn ($i) => "translations.pt.$i", range(0, 49)),
            array_map(fn ($i) => "Valor (Portugués) $i", range(0, 49))
        ),

        // Attribute value translations (Russian)
        'translations.ru.*' => 'Valor (Ruso)',
        ...array_combine(
            array_map(fn ($i) => "translations.ru.$i", range(0, 49)),
            array_map(fn ($i) => "Valor (Ruso) $i", range(0, 49))
        ),

        // Attribute value translations (Thai)
        'translations.th.*' => 'Valor (Tailandés)',
        ...array_combine(
            array_map(fn ($i) => "translations.th.$i", range(0, 49)),
            array_map(fn ($i) => "Valor (Tailandés) $i", range(0, 49))
        ),

        // Attribute value translations (Turkish)
        'translations.tr.*' => 'Valor (Turco)',
        ...array_combine(
            array_map(fn ($i) => "translations.tr.$i", range(0, 49)),
            array_map(fn ($i) => "Valor (Turco) $i", range(0, 49))
        ),

        // Attribute value translations (Vietnamese)
        'translations.vi.*' => 'Valor (Vietnamita)',
        ...array_combine(
            array_map(fn ($i) => "translations.vi.$i", range(0, 49)),
            array_map(fn ($i) => "Valor (Vietnamita) $i", range(0, 49))
        ),

        // Attribute value translations (Chinese)
        'translations.zh.*' => 'Valor (Chino)',
        ...array_combine(
            array_map(fn ($i) => "translations.zh.$i", range(0, 49)),
            array_map(fn ($i) => "Valor (Chino) $i", range(0, 49))
        ),

        // Translations for all supported languages

        // English
        'translations.en.name' => 'Nombre (Inglés)',
        'translations.en.description' => 'Descripción (Inglés)',
        'translations.en.image' => 'Imagen (Inglés)',
        'translations.en.title' => 'Título (Inglés)',
        'translations.en.content' => 'Contenido (Inglés)',
        'languages.en.title' => 'Título del banner (Inglés)',
        'languages.en.description' => 'Descripción del banner (Inglés)',
        'languages.en.image' => 'Imagen del banner (Inglés)',
        'languages.en.name' => 'Nombre de la plataforma (Inglés)',
        'title.en' => 'Título (Inglés)',

        // Arabic
        'translations.ar.name' => 'Nombre (Árabe)',
        'translations.ar.description' => 'Descripción (Árabe)',
        'translations.ar.image' => 'Imagen (Árabe)',
        'translations.ar.title' => 'Título (Árabe)',
        'translations.ar.content' => 'Contenido (Árabe)',
        'languages.ar.title' => 'Título del banner (Árabe)',
        'languages.ar.description' => 'Descripción del banner (Árabe)',
        'languages.ar.image' => 'Imagen del banner (Árabe)',
        'languages.ar.name' => 'Nombre de la plataforma (Árabe)',
        'title.ar' => 'Título (Árabe)',

        // German
        'translations.de.name' => 'Nombre (Alemán)',
        'translations.de.description' => 'Descripción (Alemán)',
        'translations.de.image' => 'Imagen (Alemán)',
        'translations.de.title' => 'Título (Alemán)',
        'translations.de.content' => 'Contenido (Alemán)',
        'languages.de.title' => 'Título del banner (Alemán)',
        'languages.de.description' => 'Descripción del banner (Alemán)',
        'languages.de.image' => 'Imagen del banner (Alemán)',
        'languages.de.name' => 'Nombre de la plataforma (Alemán)',
        'title.de' => 'Título (Alemán)',

        // Spanish
        'translations.es.name' => 'Nombre (Español)',
        'translations.es.description' => 'Descripción (Español)',
        'translations.es.image' => 'Imagen (Español)',
        'translations.es.title' => 'Título (Español)',
        'translations.es.content' => 'Contenido (Español)',
        'languages.es.title' => 'Título del banner (Español)',
        'languages.es.description' => 'Descripción del banner (Español)',
        'languages.es.image' => 'Imagen del banner (Español)',
        'languages.es.name' => 'Nombre de la plataforma (Español)',
        'title.es' => 'Título (Español)',

        // Persian
        'translations.fa.name' => 'Nombre (Persa)',
        'translations.fa.description' => 'Descripción (Persa)',
        'translations.fa.image' => 'Imagen (Persa)',
        'translations.fa.title' => 'Título (Persa)',
        'translations.fa.content' => 'Contenido (Persa)',
        'languages.fa.title' => 'Título del banner (Persa)',
        'languages.fa.description' => 'Descripción del banner (Persa)',
        'languages.fa.image' => 'Imagen del banner (Persa)',
        'languages.fa.name' => 'Nombre de la plataforma (Persa)',
        'title.fa' => 'Título (Persa)',

        // French
        'translations.fr.name' => 'Nombre (Francés)',
        'translations.fr.description' => 'Descripción (Francés)',
        'translations.fr.image' => 'Imagen (Francés)',
        'translations.fr.title' => 'Título (Francés)',
        'translations.fr.content' => 'Contenido (Francés)',
        'languages.fr.title' => 'Título del banner (Francés)',
        'languages.fr.description' => 'Descripción del banner (Francés)',
        'languages.fr.image' => 'Imagen del banner (Francés)',
        'languages.fr.name' => 'Nombre de la plataforma (Francés)',
        'title.fr' => 'Título (Francés)',

        // Hindi
        'translations.hi.name' => 'Nombre (Hindi)',
        'translations.hi.description' => 'Descripción (Hindi)',
        'translations.hi.image' => 'Imagen (Hindi)',
        'translations.hi.title' => 'Título (Hindi)',
        'translations.hi.content' => 'Contenido (Hindi)',
        'languages.hi.title' => 'Título del banner (Hindi)',
        'languages.hi.description' => 'Descripción del banner (Hindi)',
        'languages.hi.image' => 'Imagen del banner (Hindi)',
        'languages.hi.name' => 'Nombre de la plataforma (Hindi)',
        'title.hi' => 'Título (Hindi)',

        // Indonesian
        'translations.id.name' => 'Nombre (Indonesio)',
        'translations.id.description' => 'Descripción (Indonesio)',
        'translations.id.image' => 'Imagen (Indonesio)',
        'translations.id.title' => 'Título (Indonesio)',
        'translations.id.content' => 'Contenido (Indonesio)',
        'languages.id.title' => 'Título del banner (Indonesio)',
        'languages.id.description' => 'Descripción del banner (Indonesio)',
        'languages.id.image' => 'Imagen del banner (Indonesio)',
        'languages.id.name' => 'Nombre de la plataforma (Indonesio)',
        'title.id' => 'Título (Indonesio)',

        // Italian
        'translations.it.name' => 'Nombre (Italiano)',
        'translations.it.description' => 'Descripción (Italiano)',
        'translations.it.image' => 'Imagen (Italiano)',
        'translations.it.title' => 'Título (Italiano)',
        'translations.it.content' => 'Contenido (Italiano)',
        'languages.it.title' => 'Título del banner (Italiano)',
        'languages.it.description' => 'Descripción del banner (Italiano)',
        'languages.it.image' => 'Imagen del banner (Italiano)',
        'languages.it.name' => 'Nombre de la plataforma (Italiano)',
        'title.it' => 'Título (Italiano)',

        // Japanese
        'translations.ja.name' => 'Nombre (Japonés)',
        'translations.ja.description' => 'Descripción (Japonés)',
        'translations.ja.image' => 'Imagen (Japonés)',
        'translations.ja.title' => 'Título (Japonés)',
        'translations.ja.content' => 'Contenido (Japonés)',
        'languages.ja.title' => 'Título del banner (Japonés)',
        'languages.ja.description' => 'Descripción del banner (Japonés)',
        'languages.ja.image' => 'Imagen del banner (Japonés)',
        'languages.ja.name' => 'Nombre de la plataforma (Japonés)',
        'title.ja' => 'Título (Japonés)',

        // Korean
        'translations.ko.name' => 'Nombre (Coreano)',
        'translations.ko.description' => 'Descripción (Coreano)',
        'translations.ko.image' => 'Imagen (Coreano)',
        'translations.ko.title' => 'Título (Coreano)',
        'translations.ko.content' => 'Contenido (Coreano)',
        'languages.ko.title' => 'Título del banner (Coreano)',
        'languages.ko.description' => 'Descripción del banner (Coreano)',
        'languages.ko.image' => 'Imagen del banner (Coreano)',
        'languages.ko.name' => 'Nombre de la plataforma (Coreano)',
        'title.ko' => 'Título (Coreano)',

        // Dutch
        'translations.nl.name' => 'Nombre (Neerlandés)',
        'translations.nl.description' => 'Descripción (Neerlandés)',
        'translations.nl.image' => 'Imagen (Neerlandés)',
        'translations.nl.title' => 'Título (Neerlandés)',
        'translations.nl.content' => 'Contenido (Neerlandés)',
        'languages.nl.title' => 'Título del banner (Neerlandés)',
        'languages.nl.description' => 'Descripción del banner (Neerlandés)',
        'languages.nl.image' => 'Imagen del banner (Neerlandés)',
        'languages.nl.name' => 'Nombre de la plataforma (Neerlandés)',
        'title.nl' => 'Título (Neerlandés)',

        // Polish
        'translations.pl.name' => 'Nombre (Polaco)',
        'translations.pl.description' => 'Descripción (Polaco)',
        'translations.pl.image' => 'Imagen (Polaco)',
        'translations.pl.title' => 'Título (Polaco)',
        'translations.pl.content' => 'Contenido (Polaco)',
        'languages.pl.title' => 'Título del banner (Polaco)',
        'languages.pl.description' => 'Descripción del banner (Polaco)',
        'languages.pl.image' => 'Imagen del banner (Polaco)',
        'languages.pl.name' => 'Nombre de la plataforma (Polaco)',
        'title.pl' => 'Título (Polaco)',

        // Portuguese
        'translations.pt.name' => 'Nombre (Portugués)',
        'translations.pt.description' => 'Descripción (Portugués)',
        'translations.pt.image' => 'Imagen (Portugués)',
        'translations.pt.title' => 'Título (Portugués)',
        'translations.pt.content' => 'Contenido (Portugués)',
        'languages.pt.title' => 'Título del banner (Portugués)',
        'languages.pt.description' => 'Descripción del banner (Portugués)',
        'languages.pt.image' => 'Imagen del banner (Portugués)',
        'languages.pt.name' => 'Nombre de la plataforma (Portugués)',
        'title.pt' => 'Título (Portugués)',

        // Russian
        'translations.ru.name' => 'Nombre (Ruso)',
        'translations.ru.description' => 'Descripción (Ruso)',
        'translations.ru.image' => 'Imagen (Ruso)',
        'translations.ru.title' => 'Título (Ruso)',
        'translations.ru.content' => 'Contenido (Ruso)',
        'languages.ru.title' => 'Título del banner (Ruso)',
        'languages.ru.description' => 'Descripción del banner (Ruso)',
        'languages.ru.image' => 'Imagen del banner (Ruso)',
        'languages.ru.name' => 'Nombre de la plataforma (Ruso)',
        'title.ru' => 'Título (Ruso)',

        // Thai
        'translations.th.name' => 'Nombre (Tailandés)',
        'translations.th.description' => 'Descripción (Tailandés)',
        'translations.th.image' => 'Imagen (Tailandés)',
        'translations.th.title' => 'Título (Tailandés)',
        'translations.th.content' => 'Contenido (Tailandés)',
        'languages.th.title' => 'Título del banner (Tailandés)',
        'languages.th.description' => 'Descripción del banner (Tailandés)',
        'languages.th.image' => 'Imagen del banner (Tailandés)',
        'languages.th.name' => 'Nombre de la plataforma (Tailandés)',
        'title.th' => 'Título (Tailandés)',

        // Turkish
        'translations.tr.name' => 'Nombre (Turco)',
        'translations.tr.description' => 'Descripción (Turco)',
        'translations.tr.image' => 'Imagen (Turco)',
        'translations.tr.title' => 'Título (Turco)',
        'translations.tr.content' => 'Contenido (Turco)',
        'languages.tr.title' => 'Título del banner (Turco)',
        'languages.tr.description' => 'Descripción del banner (Turco)',
        'languages.tr.image' => 'Imagen del banner (Turco)',
        'languages.tr.name' => 'Nombre de la plataforma (Turco)',
        'title.tr' => 'Título (Turco)',

        // Vietnamese
        'translations.vi.name' => 'Nombre (Vietnamita)',
        'translations.vi.description' => 'Descripción (Vietnamita)',
        'translations.vi.image' => 'Imagen (Vietnamita)',
        'translations.vi.title' => 'Título (Vietnamita)',
        'translations.vi.content' => 'Contenido (Vietnamita)',
        'languages.vi.title' => 'Título del banner (Vietnamita)',
        'languages.vi.description' => 'Descripción del banner (Vietnamita)',
        'languages.vi.image' => 'Imagen del banner (Vietnamita)',
        'languages.vi.name' => 'Nombre de la plataforma (Vietnamita)',
        'title.vi' => 'Título (Vietnamita)',

        // Chinese
        'translations.zh.name' => 'Nombre (Chino)',
        'translations.zh.description' => 'Descripción (Chino)',
        'translations.zh.image' => 'Imagen (Chino)',
        'translations.zh.title' => 'Título (Chino)',
        'translations.zh.content' => 'Contenido (Chino)',
        'languages.zh.title' => 'Título del banner (Chino)',
        'languages.zh.description' => 'Descripción del banner (Chino)',
        'languages.zh.image' => 'Imagen del banner (Chino)',
        'languages.zh.name' => 'Nombre de la plataforma (Chino)',
        'title.zh' => 'Título (Chino)',
    ],
];
