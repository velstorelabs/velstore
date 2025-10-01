<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    */

    'required' => 'Поле :attribute обязательно для заполнения.',
    'string' => 'Поле :attribute должно быть строкой.',
    'max' => 'Поле :attribute не может быть длиннее :max символов.',
    'min' => 'Поле :attribute должно содержать как минимум :min символов.',
    'image' => 'Поле :attribute должно быть изображением.',
    'mimes' => 'Поле :attribute должно быть файлом типа: :values.',
    'array' => 'Поле :attribute должно быть массивом.',
    'numeric' => 'Поле :attribute должно быть числом.',
    'integer' => 'Поле :attribute должно быть целым числом.',
    'lte' => 'Поле :attribute должно быть меньше или равно :value.',

    /*
    |--------------------------------------------------------------------------
    | Custom Attributes
    |--------------------------------------------------------------------------
    |
    | Здесь можно определить пользовательские имена атрибутов.
    | Это делает сообщения об ошибках валидации более читаемыми.
    |
    */

    'attributes' => [

        // Vendor fields
        'name' => 'Имя',
        'email' => 'Электронная почта',
        'password' => 'Пароль',
        'password_confirmation' => 'Подтверждение пароля',
        'phone' => 'Номер телефона',
        'status' => 'Статус',

        // Dynamic variants
        'variants.*.name' => 'Название варианта',
        'variants.*.price' => 'Цена варианта',
        'variants.*.discount_price' => 'Скидочная цена варианта',
        'variants.*.stock' => 'Наличие варианта',
        'variants.*.SKU' => 'Артикул варианта',
        'variants.*.barcode' => 'Штрихкод варианта',
        'variants.*.weight' => 'Вес варианта',
        'variants.*.dimensions' => 'Размеры варианта',
        'variants.*.language_code' => 'Код языка варианта',
        'variants.*.size_id' => 'Размер варианта',
        'variants.*.color_id' => 'Цвет варианта',

        // Translations for all supported languages

        // English
        'translations.en.name' => 'Имя (Английский)',
        'translations.en.description' => 'Описание (Английский)',
        'translations.en.image' => 'Изображение (Английский)',
        'languages.en.title' => 'Заголовок баннера (Английский)',
        'languages.en.description' => 'Описание баннера (Английский)',
        'languages.en.image' => 'Изображение баннера (Английский)',

        // Arabic
        'translations.ar.name' => 'Имя (Арабский)',
        'translations.ar.description' => 'Описание (Арабский)',
        'translations.ar.image' => 'Изображение (Арабский)',
        'languages.ar.title' => 'Заголовок баннера (Арабский)',
        'languages.ar.description' => 'Описание баннера (Арабский)',
        'languages.ar.image' => 'Изображение баннера (Арабский)',

        // German
        'translations.de.name' => 'Имя (Немецкий)',
        'translations.de.description' => 'Описание (Немецкий)',
        'translations.de.image' => 'Изображение (Немецкий)',
        'languages.de.title' => 'Заголовок баннера (Немецкий)',
        'languages.de.description' => 'Описание баннера (Немецкий)',
        'languages.de.image' => 'Изображение баннера (Немецкий)',

        // Spanish
        'translations.es.name' => 'Имя (Испанский)',
        'translations.es.description' => 'Описание (Испанский)',
        'translations.es.image' => 'Изображение (Испанский)',
        'languages.es.title' => 'Заголовок баннера (Испанский)',
        'languages.es.description' => 'Описание баннера (Испанский)',
        'languages.es.image' => 'Изображение баннера (Испанский)',

        // Persian
        'translations.fa.name' => 'Имя (Персидский)',
        'translations.fa.description' => 'Описание (Персидский)',
        'translations.fa.image' => 'Изображение (Персидский)',
        'languages.fa.title' => 'Заголовок баннера (Персидский)',
        'languages.fa.description' => 'Описание баннера (Персидский)',
        'languages.fa.image' => 'Изображение баннера (Персидский)',

        // French
        'translations.fr.name' => 'Имя (Французский)',
        'translations.fr.description' => 'Описание (Французский)',
        'translations.fr.image' => 'Изображение (Французский)',
        'languages.fr.title' => 'Заголовок баннера (Французский)',
        'languages.fr.description' => 'Описание баннера (Французский)',
        'languages.fr.image' => 'Изображение баннера (Французский)',

        // Hindi
        'translations.hi.name' => 'Имя (Хинди)',
        'translations.hi.description' => 'Описание (Хинди)',
        'translations.hi.image' => 'Изображение (Хинди)',
        'languages.hi.title' => 'Заголовок баннера (Хинди)',
        'languages.hi.description' => 'Описание баннера (Хинди)',
        'languages.hi.image' => 'Изображение баннера (Хинди)',

        // Indonesian
        'translations.id.name' => 'Имя (Индонезийский)',
        'translations.id.description' => 'Описание (Индонезийский)',
        'translations.id.image' => 'Изображение (Индонезийский)',
        'languages.id.title' => 'Заголовок баннера (Индонезийский)',
        'languages.id.description' => 'Описание баннера (Индонезийский)',
        'languages.id.image' => 'Изображение баннера (Индонезийский)',

        // Italian
        'translations.it.name' => 'Имя (Итальянский)',
        'translations.it.description' => 'Описание (Итальянский)',
        'translations.it.image' => 'Изображение (Итальянский)',
        'languages.it.title' => 'Заголовок баннера (Итальянский)',
        'languages.it.description' => 'Описание баннера (Итальянский)',
        'languages.it.image' => 'Изображение баннера (Итальянский)',

        // Japanese
        'translations.ja.name' => 'Имя (Японский)',
        'translations.ja.description' => 'Описание (Японский)',
        'translations.ja.image' => 'Изображение (Японский)',
        'languages.ja.title' => 'Заголовок баннера (Японский)',
        'languages.ja.description' => 'Описание баннера (Японский)',
        'languages.ja.image' => 'Изображение баннера (Японский)',

        // Korean
        'translations.ko.name' => 'Имя (Корейский)',
        'translations.ko.description' => 'Описание (Корейский)',
        'translations.ko.image' => 'Изображение (Корейский)',
        'languages.ko.title' => 'Заголовок баннера (Корейский)',
        'languages.ko.description' => 'Описание баннера (Корейский)',
        'languages.ko.image' => 'Изображение баннера (Корейский)',

        // Dutch
        'translations.nl.name' => 'Имя (Нидерландский)',
        'translations.nl.description' => 'Описание (Нидерландский)',
        'translations.nl.image' => 'Изображение (Нидерландский)',
        'languages.nl.title' => 'Заголовок баннера (Нидерландский)',
        'languages.nl.description' => 'Описание баннера (Нидерландский)',
        'languages.nl.image' => 'Изображение баннера (Нидерландский)',

        // Polish
        'translations.pl.name' => 'Имя (Польский)',
        'translations.pl.description' => 'Описание (Польский)',
        'translations.pl.image' => 'Изображение (Польский)',
        'languages.pl.title' => 'Заголовок баннера (Польский)',
        'languages.pl.description' => 'Описание баннера (Польский)',
        'languages.pl.image' => 'Изображение баннера (Польский)',

        // Portuguese
        'translations.pt.name' => 'Имя (Португальский)',
        'translations.pt.description' => 'Описание (Португальский)',
        'translations.pt.image' => 'Изображение (Португальский)',
        'languages.pt.title' => 'Заголовок баннера (Португальский)',
        'languages.pt.description' => 'Описание баннера (Португальский)',
        'languages.pt.image' => 'Изображение баннера (Португальский)',

        // Russian
        'translations.ru.name' => 'Имя (Русский)',
        'translations.ru.description' => 'Описание (Русский)',
        'translations.ru.image' => 'Изображение (Русский)',
        'languages.ru.title' => 'Заголовок баннера (Русский)',
        'languages.ru.description' => 'Описание баннера (Русский)',
        'languages.ru.image' => 'Изображение баннера (Русский)',

        // Thai
        'translations.th.name' => 'Имя (Тайский)',
        'translations.th.description' => 'Описание (Тайский)',
        'translations.th.image' => 'Изображение (Тайский)',
        'languages.th.title' => 'Заголовок баннера (Тайский)',
        'languages.th.description' => 'Описание баннера (Тайский)',
        'languages.th.image' => 'Изображение баннера (Тайский)',

        // Turkish
        'translations.tr.name' => 'Имя (Турецкий)',
        'translations.tr.description' => 'Описание (Турецкий)',
        'translations.tr.image' => 'Изображение (Турецкий)',
        'languages.tr.title' => 'Заголовок баннера (Турецкий)',
        'languages.tr.description' => 'Описание баннера (Турецкий)',
        'languages.tr.image' => 'Изображение баннера (Турецкий)',

        // Vietnamese
        'translations.vi.name' => 'Имя (Вьетнамский)',
        'translations.vi.description' => 'Описание (Вьетнамский)',
        'translations.vi.image' => 'Изображение (Вьетнамский)',
        'languages.vi.title' => 'Заголовок баннера (Вьетнамский)',
        'languages.vi.description' => 'Описание баннера (Вьетнамский)',
        'languages.vi.image' => 'Изображение баннера (Вьетнамский)',

        // Chinese
        'translations.zh.name' => 'Имя (Китайский)',
        'translations.zh.description' => 'Описание (Китайский)',
        'translations.zh.image' => 'Изображение (Китайский)',
        'languages.zh.title' => 'Заголовок баннера (Китайский)',
        'languages.zh.description' => 'Описание баннера (Китайский)',
        'languages.zh.image' => 'Изображение баннера (Китайский)',
    ],
];
