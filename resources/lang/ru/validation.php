<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    */

    'required' => 'Поле :attribute обязательно для заполнения.',
    'string' => 'Поле :attribute должно быть строкой.',
    'max' => 'Поле :attribute не может быть больше :max символов.',
    'min' => 'Поле :attribute должно содержать не менее :min символов.',
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
    | Here we define custom attribute names for multiple languages.
    | This way validation messages are more readable.
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

        // Social links
        'type' => 'Тип платформы',
        'platform' => 'Название платформы',
        'link' => 'Ссылка на платформу',

        // Menu fields
        'title' => 'Название меню',

        // Dynamic variants
        'variants.*.name' => 'Название варианта',
        'variants.*.price' => 'Цена варианта',
        'variants.*.discount_price' => 'Цена со скидкой варианта',
        'variants.*.stock' => 'Количество на складе варианта',
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
        'translations.en.title' => 'Название (Английский)',
        'translations.en.content' => 'Содержимое (Английский)',
        'languages.en.title' => 'Название баннера (Английский)',
        'languages.en.description' => 'Описание баннера (Английский)',
        'languages.en.image' => 'Изображение баннера (Английский)',
        'languages.en.name' => 'Название платформы (Английский)',
        'title.en' => 'Название (Английский)',

        // Arabic
        'translations.ar.name' => 'Имя (Арабский)',
        'translations.ar.description' => 'Описание (Арабский)',
        'translations.ar.image' => 'Изображение (Арабский)',
        'translations.ar.title' => 'Название (Арабский)',
        'translations.ar.content' => 'Содержимое (Арабский)',
        'languages.ar.title' => 'Название баннера (Арабский)',
        'languages.ar.description' => 'Описание баннера (Арабский)',
        'languages.ar.image' => 'Изображение баннера (Арабский)',
        'languages.ar.name' => 'Название платформы (Арабский)',
        'title.ar' => 'Название (Арабский)',

        // German
        'translations.de.name' => 'Имя (Немецкий)',
        'translations.de.description' => 'Описание (Немецкий)',
        'translations.de.image' => 'Изображение (Немецкий)',
        'translations.de.title' => 'Название (Немецкий)',
        'translations.de.content' => 'Содержимое (Немецкий)',
        'languages.de.title' => 'Название баннера (Немецкий)',
        'languages.de.description' => 'Описание баннера (Немецкий)',
        'languages.de.image' => 'Изображение баннера (Немецкий)',
        'languages.de.name' => 'Название платформы (Немецкий)',
        'title.de' => 'Название (Немецкий)',

        // Spanish
        'translations.es.name' => 'Имя (Испанский)',
        'translations.es.description' => 'Описание (Испанский)',
        'translations.es.image' => 'Изображение (Испанский)',
        'translations.es.title' => 'Название (Испанский)',
        'translations.es.content' => 'Содержимое (Испанский)',
        'languages.es.title' => 'Название баннера (Испанский)',
        'languages.es.description' => 'Описание баннера (Испанский)',
        'languages.es.image' => 'Изображение баннера (Испанский)',
        'languages.es.name' => 'Название платформы (Испанский)',
        'title.es' => 'Название (Испанский)',

        // Persian
        'translations.fa.name' => 'Имя (Персидский)',
        'translations.fa.description' => 'Описание (Персидский)',
        'translations.fa.image' => 'Изображение (Персидский)',
        'translations.fa.title' => 'Название (Персидский)',
        'translations.fa.content' => 'Содержимое (Персидский)',
        'languages.fa.title' => 'Название баннера (Персидский)',
        'languages.fa.description' => 'Описание баннера (Персидский)',
        'languages.fa.image' => 'Изображение баннера (Персидский)',
        'languages.fa.name' => 'Название платформы (Персидский)',
        'title.fa' => 'Название (Персидский)',

        // French
        'translations.fr.name' => 'Имя (Французский)',
        'translations.fr.description' => 'Описание (Французский)',
        'translations.fr.image' => 'Изображение (Французский)',
        'translations.fr.title' => 'Название (Французский)',
        'translations.fr.content' => 'Содержимое (Французский)',
        'languages.fr.title' => 'Название баннера (Французский)',
        'languages.fr.description' => 'Описание баннера (Французский)',
        'languages.fr.image' => 'Изображение баннера (Французский)',
        'languages.fr.name' => 'Название платформы (Французский)',
        'title.fr' => 'Название (Французский)',

        // Hindi
        'translations.hi.name' => 'Имя (Хинди)',
        'translations.hi.description' => 'Описание (Хинди)',
        'translations.hi.image' => 'Изображение (Хинди)',
        'translations.hi.title' => 'Название (Хинди)',
        'translations.hi.content' => 'Содержимое (Хинди)',
        'languages.hi.title' => 'Название баннера (Хинди)',
        'languages.hi.description' => 'Описание баннера (Хинди)',
        'languages.hi.image' => 'Изображение баннера (Хинди)',
        'languages.hi.name' => 'Название платформы (Хинди)',
        'title.hi' => 'Название (Хинди)',

        // Indonesian
        'translations.id.name' => 'Имя (Индонезийский)',
        'translations.id.description' => 'Описание (Индонезийский)',
        'translations.id.image' => 'Изображение (Индонезийский)',
        'translations.id.title' => 'Название (Индонезийский)',
        'translations.id.content' => 'Содержимое (Индонезийский)',
        'languages.id.title' => 'Название баннера (Индонезийский)',
        'languages.id.description' => 'Описание баннера (Индонезийский)',
        'languages.id.image' => 'Изображение баннера (Индонезийский)',
        'languages.id.name' => 'Название платформы (Индонезийский)',
        'title.id' => 'Название (Индонезийский)',

        // Italian
        'translations.it.name' => 'Имя (Итальянский)',
        'translations.it.description' => 'Описание (Итальянский)',
        'translations.it.image' => 'Изображение (Итальянский)',
        'translations.it.title' => 'Название (Итальянский)',
        'translations.it.content' => 'Содержимое (Итальянский)',
        'languages.it.title' => 'Название баннера (Итальянский)',
        'languages.it.description' => 'Описание баннера (Итальянский)',
        'languages.it.image' => 'Изображение баннера (Итальянский)',
        'languages.it.name' => 'Название платформы (Итальянский)',
        'title.it' => 'Название (Итальянский)',

        // Japanese
        'translations.ja.name' => 'Имя (Японский)',
        'translations.ja.description' => 'Описание (Японский)',
        'translations.ja.image' => 'Изображение (Японский)',
        'translations.ja.title' => 'Название (Японский)',
        'translations.ja.content' => 'Содержимое (Японский)',
        'languages.ja.title' => 'Название баннера (Японский)',
        'languages.ja.description' => 'Описание баннера (Японский)',
        'languages.ja.image' => 'Изображение баннера (Японский)',
        'languages.ja.name' => 'Название платформы (Японский)',
        'title.ja' => 'Название (Японский)',

        // Korean
        'translations.ko.name' => 'Имя (Корейский)',
        'translations.ko.description' => 'Описание (Корейский)',
        'translations.ko.image' => 'Изображение (Корейский)',
        'translations.ko.title' => 'Название (Корейский)',
        'translations.ko.content' => 'Содержимое (Корейский)',
        'languages.ko.title' => 'Название баннера (Корейский)',
        'languages.ko.description' => 'Описание баннера (Корейский)',
        'languages.ko.image' => 'Изображение баннера (Корейский)',
        'languages.ko.name' => 'Название платформы (Корейский)',
        'title.ko' => 'Название (Корейский)',

        // Dutch
        'translations.nl.name' => 'Имя (Нидерландский)',
        'translations.nl.description' => 'Описание (Нидерландский)',
        'translations.nl.image' => 'Изображение (Нидерландский)',
        'translations.nl.title' => 'Название (Нидерландский)',
        'translations.nl.content' => 'Содержимое (Нидерландский)',
        'languages.nl.title' => 'Название баннера (Нидерландский)',
        'languages.nl.description' => 'Описание баннера (Нидерландский)',
        'languages.nl.image' => 'Изображение баннера (Нидерландский)',
        'languages.nl.name' => 'Название платформы (Нидерландский)',
        'title.nl' => 'Название (Нидерландский)',

        // Polish
        'translations.pl.name' => 'Имя (Польский)',
        'translations.pl.description' => 'Описание (Польский)',
        'translations.pl.image' => 'Изображение (Польский)',
        'translations.pl.title' => 'Название (Польский)',
        'translations.pl.content' => 'Содержимое (Польский)',
        'languages.pl.title' => 'Название баннера (Польский)',
        'languages.pl.description' => 'Описание баннера (Польский)',
        'languages.pl.image' => 'Изображение баннера (Польский)',
        'languages.pl.name' => 'Название платформы (Польский)',
        'title.pl' => 'Название (Польский)',

        // Portuguese
        'translations.pt.name' => 'Имя (Португальский)',
        'translations.pt.description' => 'Описание (Португальский)',
        'translations.pt.image' => 'Изображение (Португальский)',
        'translations.pt.title' => 'Название (Португальский)',
        'translations.pt.content' => 'Содержимое (Португальский)',
        'languages.pt.title' => 'Название баннера (Португальский)',
        'languages.pt.description' => 'Описание баннера (Португальский)',
        'languages.pt.image' => 'Изображение баннера (Португальский)',
        'languages.pt.name' => 'Название платформы (Португальский)',
        'title.pt' => 'Название (Португальский)',

        // Russian
        'translations.ru.name' => 'Имя (Русский)',
        'translations.ru.description' => 'Описание (Русский)',
        'translations.ru.image' => 'Изображение (Русский)',
        'translations.ru.title' => 'Название (Русский)',
        'translations.ru.content' => 'Содержимое (Русский)',
        'languages.ru.title' => 'Название баннера (Русский)',
        'languages.ru.description' => 'Описание баннера (Русский)',
        'languages.ru.image' => 'Изображение баннера (Русский)',
        'languages.ru.name' => 'Название платформы (Русский)',
        'title.ru' => 'Название (Русский)',

        // Thai
        'translations.th.name' => 'Имя (Тайский)',
        'translations.th.description' => 'Описание (Тайский)',
        'translations.th.image' => 'Изображение (Тайский)',
        'translations.th.title' => 'Название (Тайский)',
        'translations.th.content' => 'Содержимое (Тайский)',
        'languages.th.title' => 'Название баннера (Тайский)',
        'languages.th.description' => 'Описание баннера (Тайский)',
        'languages.th.image' => 'Изображение баннера (Тайский)',
        'languages.th.name' => 'Название платформы (Тайский)',
        'title.th' => 'Название (Тайский)',

        // Turkish
        'translations.tr.name' => 'Имя (Турецкий)',
        'translations.tr.description' => 'Описание (Турецкий)',
        'translations.tr.image' => 'Изображение (Турецкий)',
        'translations.tr.title' => 'Название (Турецкий)',
        'translations.tr.content' => 'Содержимое (Турецкий)',
        'languages.tr.title' => 'Название баннера (Турецкий)',
        'languages.tr.description' => 'Описание баннера (Турецкий)',
        'languages.tr.image' => 'Изображение баннера (Турецкий)',
        'languages.tr.name' => 'Название платформы (Турецкий)',
        'title.tr' => 'Название (Турецкий)',

        // Vietnamese
        'translations.vi.name' => 'Имя (Вьетнамский)',
        'translations.vi.description' => 'Описание (Вьетнамский)',
        'translations.vi.image' => 'Изображение (Вьетнамский)',
        'translations.vi.title' => 'Название (Вьетнамский)',
        'translations.vi.content' => 'Содержимое (Вьетнамский)',
        'languages.vi.title' => 'Название баннера (Вьетнамский)',
        'languages.vi.description' => 'Описание баннера (Вьетнамский)',
        'languages.vi.image' => 'Изображение баннера (Вьетнамский)',
        'languages.vi.name' => 'Название платформы (Вьетнамский)',
        'title.vi' => 'Название (Вьетнамский)',

        // Chinese
        'translations.zh.name' => 'Имя (Китайский)',
        'translations.zh.description' => 'Описание (Китайский)',
        'translations.zh.image' => 'Изображение (Китайский)',
        'translations.zh.title' => 'Название (Китайский)',
        'translations.zh.content' => 'Содержимое (Китайский)',
        'languages.zh.title' => 'Название баннера (Китайский)',
        'languages.zh.description' => 'Описание баннера (Китайский)',
        'languages.zh.image' => 'Изображение баннера (Китайский)',
        'languages.zh.name' => 'Название платформы (Китайский)',
        'title.zh' => 'Название (Китайский)',
    ],
];
