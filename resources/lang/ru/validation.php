<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Сообщения валидации
    |--------------------------------------------------------------------------
    */

    'required' => 'Поле :attribute является обязательным.',
    'string' => 'Поле :attribute должно быть строкой.',
    'max' => 'Поле :attribute не может быть длиннее :max символов.',
    'min' => 'Поле :attribute должно содержать не менее :min символов.',
    'image' => 'Поле :attribute должно быть изображением.',
    'mimes' => 'Поле :attribute должно быть файлом одного из типов: :values.',
    'array' => 'Поле :attribute должно быть массивом.',
    'numeric' => 'Поле :attribute должно быть числом.',
    'integer' => 'Поле :attribute должно быть целым числом.',
    'lte' => 'Поле :attribute должно быть меньше или равно :value.',

    /*
    |--------------------------------------------------------------------------
    | Пользовательские атрибуты
    |--------------------------------------------------------------------------
    |
    | Здесь мы определяем пользовательские имена атрибутов для разных языков.
    | Это делает сообщения об ошибках более читаемыми.
    |
    */

    'attributes' => [

        // Переводы для всех поддерживаемых языков
        'translations.en.name' => 'Название (Английский)',
        'translations.en.description' => 'Описание (Английский)',
        'translations.en.image' => 'Изображение (Английский)',

        'translations.ar.name' => 'Название (Арабский)',
        'translations.ar.description' => 'Описание (Арабский)',
        'translations.ar.image' => 'Изображение (Арабский)',

        'translations.de.name' => 'Название (Немецкий)',
        'translations.de.description' => 'Описание (Немецкий)',
        'translations.de.image' => 'Изображение (Немецкий)',

        'translations.es.name' => 'Название (Испанский)',
        'translations.es.description' => 'Описание (Испанский)',
        'translations.es.image' => 'Изображение (Испанский)',

        'translations.fa.name' => 'Название (Персидский)',
        'translations.fa.description' => 'Описание (Персидский)',
        'translations.fa.image' => 'Изображение (Персидский)',

        'translations.fr.name' => 'Название (Французский)',
        'translations.fr.description' => 'Описание (Французский)',
        'translations.fr.image' => 'Изображение (Французский)',

        'translations.hi.name' => 'Название (Хинди)',
        'translations.hi.description' => 'Описание (Хинди)',
        'translations.hi.image' => 'Изображение (Хинди)',

        'translations.id.name' => 'Название (Индонезийский)',
        'translations.id.description' => 'Описание (Индонезийский)',
        'translations.id.image' => 'Изображение (Индонезийский)',

        'translations.it.name' => 'Название (Итальянский)',
        'translations.it.description' => 'Описание (Итальянский)',
        'translations.it.image' => 'Изображение (Итальянский)',

        'translations.ja.name' => 'Название (Японский)',
        'translations.ja.description' => 'Описание (Японский)',
        'translations.ja.image' => 'Изображение (Японский)',

        'translations.ko.name' => 'Название (Корейский)',
        'translations.ko.description' => 'Описание (Корейский)',
        'translations.ko.image' => 'Изображение (Корейский)',

        'translations.nl.name' => 'Название (Нидерландский)',
        'translations.nl.description' => 'Описание (Нидерландский)',
        'translations.nl.image' => 'Изображение (Нидерландский)',

        'translations.pl.name' => 'Название (Польский)',
        'translations.pl.description' => 'Описание (Польский)',
        'translations.pl.image' => 'Изображение (Польский)',

        'translations.pt.name' => 'Название (Португальский)',
        'translations.pt.description' => 'Описание (Португальский)',
        'translations.pt.image' => 'Изображение (Португальский)',

        'translations.ru.name' => 'Название (Русский)',
        'translations.ru.description' => 'Описание (Русский)',
        'translations.ru.image' => 'Изображение (Русский)',

        'translations.th.name' => 'Название (Тайский)',
        'translations.th.description' => 'Описание (Тайский)',
        'translations.th.image' => 'Изображение (Тайский)',

        'translations.tr.name' => 'Название (Турецкий)',
        'translations.tr.description' => 'Описание (Турецкий)',
        'translations.tr.image' => 'Изображение (Турецкий)',

        'translations.vi.name' => 'Название (Вьетнамский)',
        'translations.vi.description' => 'Описание (Вьетнамский)',
        'translations.vi.image' => 'Изображение (Вьетнамский)',

        'translations.zh.name' => 'Название (Китайский)',
        'translations.zh.description' => 'Описание (Китайский)',
        'translations.zh.image' => 'Изображение (Китайский)',

        // Динамические варианты
        'variants.*.name' => 'Название варианта',
        'variants.*.price' => 'Цена варианта',
        'variants.*.discount_price' => 'Цена со скидкой для варианта',
        'variants.*.stock' => 'Запас варианта',
        'variants.*.SKU' => 'SKU варианта',
        'variants.*.barcode' => 'Штрихкод варианта',
        'variants.*.weight' => 'Вес варианта',
        'variants.*.dimensions' => 'Размеры варианта',
        'variants.*.language_code' => 'Код языка варианта',
        'variants.*.size_id' => 'Размер варианта',
        'variants.*.color_id' => 'Цвет варианта',
    ],
];
