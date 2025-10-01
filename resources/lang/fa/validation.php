<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    */

    'required' => 'فیلد :attribute الزامی است.',
    'string' => ':attribute باید یک رشته باشد.',
    'max' => ':attribute نباید بیشتر از :max کاراکتر باشد.',
    'min' => ':attribute باید حداقل :min کاراکتر داشته باشد.',
    'image' => ':attribute باید یک تصویر باشد.',
    'mimes' => ':attribute باید یک فایل از نوع: :values باشد.',
    'array' => ':attribute باید یک آرایه باشد.',
    'numeric' => ':attribute باید یک عدد باشد.',
    'integer' => ':attribute باید یک عدد صحیح باشد.',
    'lte' => ':attribute باید کمتر یا مساوی :value باشد.',

    /*
    |--------------------------------------------------------------------------
    | Custom Attributes
    |--------------------------------------------------------------------------
    |
    | در اینجا نام‌های سفارشی برای تمام زبان‌ها تعریف شده است.
    | به این ترتیب پیام‌های اعتبارسنجی قابل خواندن‌تر هستند.
    |
    */

    'attributes' => [

        // Vendor fields
        'name' => 'نام',
        'email' => 'ایمیل',
        'password' => 'رمز عبور',
        'password_confirmation' => 'تأیید رمز عبور',
        'phone' => 'شماره تلفن',
        'status' => 'وضعیت',

        // Dynamic variants
        'variants.*.name' => 'نام واریانت',
        'variants.*.price' => 'قیمت واریانت',
        'variants.*.discount_price' => 'قیمت تخفیف واریانت',
        'variants.*.stock' => 'موجودی واریانت',
        'variants.*.SKU' => 'SKU واریانت',
        'variants.*.barcode' => 'بارکد واریانت',
        'variants.*.weight' => 'وزن واریانت',
        'variants.*.dimensions' => 'ابعاد واریانت',
        'variants.*.language_code' => 'کد زبان واریانت',
        'variants.*.size_id' => 'سایز واریانت',
        'variants.*.color_id' => 'رنگ واریانت',

        // Translations for all supported languages

        // English
        'translations.en.name' => 'نام (انگلیسی)',
        'translations.en.description' => 'توضیحات (انگلیسی)',
        'translations.en.image' => 'تصویر (انگلیسی)',
        'languages.en.title' => 'عنوان بنر (انگلیسی)',
        'languages.en.description' => 'توضیحات بنر (انگلیسی)',
        'languages.en.image' => 'تصویر بنر (انگلیسی)',

        // Arabic
        'translations.ar.name' => 'نام (عربی)',
        'translations.ar.description' => 'توضیحات (عربی)',
        'translations.ar.image' => 'تصویر (عربی)',
        'languages.ar.title' => 'عنوان بنر (عربی)',
        'languages.ar.description' => 'توضیحات بنر (عربی)',
        'languages.ar.image' => 'تصویر بنر (عربی)',

        // German
        'translations.de.name' => 'نام (آلمانی)',
        'translations.de.description' => 'توضیحات (آلمانی)',
        'translations.de.image' => 'تصویر (آلمانی)',
        'languages.de.title' => 'عنوان بنر (آلمانی)',
        'languages.de.description' => 'توضیحات بنر (آلمانی)',
        'languages.de.image' => 'تصویر بنر (آلمانی)',

        // Spanish
        'translations.es.name' => 'نام (اسپانیایی)',
        'translations.es.description' => 'توضیحات (اسپانیایی)',
        'translations.es.image' => 'تصویر (اسپانیایی)',
        'languages.es.title' => 'عنوان بنر (اسپانیایی)',
        'languages.es.description' => 'توضیحات بنر (اسپانیایی)',
        'languages.es.image' => 'تصویر بنر (اسپانیایی)',

        // Persian
        'translations.fa.name' => 'نام (فارسی)',
        'translations.fa.description' => 'توضیحات (فارسی)',
        'translations.fa.image' => 'تصویر (فارسی)',
        'languages.fa.title' => 'عنوان بنر (فارسی)',
        'languages.fa.description' => 'توضیحات بنر (فارسی)',
        'languages.fa.image' => 'تصویر بنر (فارسی)',

        // French
        'translations.fr.name' => 'نام (فرانسوی)',
        'translations.fr.description' => 'توضیحات (فرانسوی)',
        'translations.fr.image' => 'تصویر (فرانسوی)',
        'languages.fr.title' => 'عنوان بنر (فرانسوی)',
        'languages.fr.description' => 'توضیحات بنر (فرانسوی)',
        'languages.fr.image' => 'تصویر بنر (فرانسوی)',

        // Hindi
        'translations.hi.name' => 'نام (هندی)',
        'translations.hi.description' => 'توضیحات (هندی)',
        'translations.hi.image' => 'تصویر (هندی)',
        'languages.hi.title' => 'عنوان بنر (هندی)',
        'languages.hi.description' => 'توضیحات بنر (هندی)',
        'languages.hi.image' => 'تصویر بنر (هندی)',

        // Indonesian
        'translations.id.name' => 'نام (اندونزیایی)',
        'translations.id.description' => 'توضیحات (اندونزیایی)',
        'translations.id.image' => 'تصویر (اندونزیایی)',
        'languages.id.title' => 'عنوان بنر (اندونزیایی)',
        'languages.id.description' => 'توضیحات بنر (اندونزیایی)',
        'languages.id.image' => 'تصویر بنر (اندونزیایی)',

        // Italian
        'translations.it.name' => 'نام (ایتالیایی)',
        'translations.it.description' => 'توضیحات (ایتالیایی)',
        'translations.it.image' => 'تصویر (ایتالیایی)',
        'languages.it.title' => 'عنوان بنر (ایتالیایی)',
        'languages.it.description' => 'توضیحات بنر (ایتالیایی)',
        'languages.it.image' => 'تصویر بنر (ایتالیایی)',

        // Japanese
        'translations.ja.name' => 'نام (ژاپنی)',
        'translations.ja.description' => 'توضیحات (ژاپنی)',
        'translations.ja.image' => 'تصویر (ژاپنی)',
        'languages.ja.title' => 'عنوان بنر (ژاپنی)',
        'languages.ja.description' => 'توضیحات بنر (ژاپنی)',
        'languages.ja.image' => 'تصویر بنر (ژاپنی)',

        // Korean
        'translations.ko.name' => 'نام (کره‌ای)',
        'translations.ko.description' => 'توضیحات (کره‌ای)',
        'translations.ko.image' => 'تصویر (کره‌ای)',
        'languages.ko.title' => 'عنوان بنر (کره‌ای)',
        'languages.ko.description' => 'توضیحات بنر (کره‌ای)',
        'languages.ko.image' => 'تصویر بنر (کره‌ای)',

        // Dutch
        'translations.nl.name' => 'نام (هلندی)',
        'translations.nl.description' => 'توضیحات (هلندی)',
        'translations.nl.image' => 'تصویر (هلندی)',
        'languages.nl.title' => 'عنوان بنر (هلندی)',
        'languages.nl.description' => 'توضیحات بنر (هلندی)',
        'languages.nl.image' => 'تصویر بنر (هلندی)',

        // Polish
        'translations.pl.name' => 'نام (لهستانی)',
        'translations.pl.description' => 'توضیحات (لهستانی)',
        'translations.pl.image' => 'تصویر (لهستانی)',
        'languages.pl.title' => 'عنوان بنر (لهستانی)',
        'languages.pl.description' => 'توضیحات بنر (لهستانی)',
        'languages.pl.image' => 'تصویر بنر (لهستانی)',

        // Portuguese
        'translations.pt.name' => 'نام (پرتغالی)',
        'translations.pt.description' => 'توضیحات (پرتغالی)',
        'translations.pt.image' => 'تصویر (پرتغالی)',
        'languages.pt.title' => 'عنوان بنر (پرتغالی)',
        'languages.pt.description' => 'توضیحات بنر (پرتغالی)',
        'languages.pt.image' => 'تصویر بنر (پرتغالی)',

        // Russian
        'translations.ru.name' => 'نام (روسی)',
        'translations.ru.description' => 'توضیحات (روسی)',
        'translations.ru.image' => 'تصویر (روسی)',
        'languages.ru.title' => 'عنوان بنر (روسی)',
        'languages.ru.description' => 'توضیحات بنر (روسی)',
        'languages.ru.image' => 'تصویر بنر (روسی)',

        // Thai
        'translations.th.name' => 'نام (تایلندی)',
        'translations.th.description' => 'توضیحات (تایلندی)',
        'translations.th.image' => 'تصویر (تایلندی)',
        'languages.th.title' => 'عنوان بنر (تایلندی)',
        'languages.th.description' => 'توضیحات بنر (تایلندی)',
        'languages.th.image' => 'تصویر بنر (تایلندی)',

        // Turkish
        'translations.tr.name' => 'نام (ترکی)',
        'translations.tr.description' => 'توضیحات (ترکی)',
        'translations.tr.image' => 'تصویر (ترکی)',
        'languages.tr.title' => 'عنوان بنر (ترکی)',
        'languages.tr.description' => 'توضیحات بنر (ترکی)',
        'languages.tr.image' => 'تصویر بنر (ترکی)',

        // Vietnamese
        'translations.vi.name' => 'نام (ویتنامی)',
        'translations.vi.description' => 'توضیحات (ویتنامی)',
        'translations.vi.image' => 'تصویر (ویتنامی)',
        'languages.vi.title' => 'عنوان بنر (ویتنامی)',
        'languages.vi.description' => 'توضیحات بنر (ویتنامی)',
        'languages.vi.image' => 'تصویر بنر (ویتنامی)',

        // Chinese
        'translations.zh.name' => 'نام (چینی)',
        'translations.zh.description' => 'توضیحات (چینی)',
        'translations.zh.image' => 'تصویر (چینی)',
        'languages.zh.title' => 'عنوان بنر (چینی)',
        'languages.zh.description' => 'توضیحات بنر (چینی)',
        'languages.zh.image' => 'تصویر بنر (چینی)',
    ],
];
