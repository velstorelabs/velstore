<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    */

    'required' => 'حقل :attribute مطلوب.',
    'string' => 'يجب أن يكون :attribute نصًا.',
    'max' => 'لا يجوز أن يكون :attribute أكبر من :max حرفًا.',
    'min' => 'يجب أن يكون :attribute على الأقل :min حرفًا.',
    'image' => 'يجب أن يكون :attribute صورة.',
    'mimes' => 'يجب أن يكون :attribute ملف من نوع: :values.',
    'array' => 'يجب أن يكون :attribute مصفوفة.',
    'numeric' => 'يجب أن يكون :attribute رقمًا.',
    'integer' => 'يجب أن يكون :attribute عددًا صحيحًا.',
    'lte' => 'يجب أن يكون :attribute أقل من أو يساوي :value.',

    /*
    |--------------------------------------------------------------------------
    | Custom Attributes
    |--------------------------------------------------------------------------
    |
    | هنا نحدد أسماء السمات المخصصة لجميع اللغات.
    | بهذه الطريقة تصبح رسائل التحقق أكثر وضوحًا.
    |
    */

    'attributes' => [

        // Vendor fields
        'name' => 'الاسم',
        'email' => 'البريد الإلكتروني',
        'password' => 'كلمة المرور',
        'password_confirmation' => 'تأكيد كلمة المرور',
        'phone' => 'رقم الهاتف',
        'status' => 'الحالة',

        // Dynamic variants
        'variants.*.name' => 'اسم النسخة',
        'variants.*.price' => 'سعر النسخة',
        'variants.*.discount_price' => 'سعر النسخة بعد الخصم',
        'variants.*.stock' => 'المخزون',
        'variants.*.SKU' => 'رمز المنتج',
        'variants.*.barcode' => 'الباركود',
        'variants.*.weight' => 'الوزن',
        'variants.*.dimensions' => 'الأبعاد',
        'variants.*.language_code' => 'رمز اللغة',
        'variants.*.size_id' => 'المقاس',
        'variants.*.color_id' => 'اللون',

        // Translations for all supported languages

        // English
        'translations.en.name' => 'الاسم (إنجليزي)',
        'translations.en.description' => 'الوصف (إنجليزي)',
        'translations.en.image' => 'الصورة (إنجليزي)',
        'languages.en.title' => 'عنوان البانر (إنجليزي)',
        'languages.en.description' => 'وصف البانر (إنجليزي)',
        'languages.en.image' => 'صورة البانر (إنجليزي)',

        // Arabic
        'translations.ar.name' => 'الاسم (عربي)',
        'translations.ar.description' => 'الوصف (عربي)',
        'translations.ar.image' => 'الصورة (عربي)',
        'languages.ar.title' => 'عنوان البانر (عربي)',
        'languages.ar.description' => 'وصف البانر (عربي)',
        'languages.ar.image' => 'صورة البانر (عربي)',

        // German
        'translations.de.name' => 'الاسم (ألماني)',
        'translations.de.description' => 'الوصف (ألماني)',
        'translations.de.image' => 'الصورة (ألماني)',
        'languages.de.title' => 'عنوان البانر (ألماني)',
        'languages.de.description' => 'وصف البانر (ألماني)',
        'languages.de.image' => 'صورة البانر (ألماني)',

        // Spanish
        'translations.es.name' => 'الاسم (إسباني)',
        'translations.es.description' => 'الوصف (إسباني)',
        'translations.es.image' => 'الصورة (إسباني)',
        'languages.es.title' => 'عنوان البانر (إسباني)',
        'languages.es.description' => 'وصف البانر (إسباني)',
        'languages.es.image' => 'صورة البانر (إسباني)',

        // Persian
        'translations.fa.name' => 'الاسم (فارسي)',
        'translations.fa.description' => 'الوصف (فارسي)',
        'translations.fa.image' => 'الصورة (فارسي)',
        'languages.fa.title' => 'عنوان البانر (فارسي)',
        'languages.fa.description' => 'وصف البانر (فارسي)',
        'languages.fa.image' => 'صورة البانر (فارسي)',

        // French
        'translations.fr.name' => 'الاسم (فرنسي)',
        'translations.fr.description' => 'الوصف (فرنسي)',
        'translations.fr.image' => 'الصورة (فرنسي)',
        'languages.fr.title' => 'عنوان البانر (فرنسي)',
        'languages.fr.description' => 'وصف البانر (فرنسي)',
        'languages.fr.image' => 'صورة البانر (فرنسي)',

        // Hindi
        'translations.hi.name' => 'الاسم (هندي)',
        'translations.hi.description' => 'الوصف (هندي)',
        'translations.hi.image' => 'الصورة (هندي)',
        'languages.hi.title' => 'عنوان البانر (هندي)',
        'languages.hi.description' => 'وصف البانر (هندي)',
        'languages.hi.image' => 'صورة البانر (هندي)',

        // Indonesian
        'translations.id.name' => 'الاسم (إندونيسي)',
        'translations.id.description' => 'الوصف (إندونيسي)',
        'translations.id.image' => 'الصورة (إندونيسي)',
        'languages.id.title' => 'عنوان البانر (إندونيسي)',
        'languages.id.description' => 'وصف البانر (إندونيسي)',
        'languages.id.image' => 'صورة البانر (إندونيسي)',

        // Italian
        'translations.it.name' => 'الاسم (إيطالي)',
        'translations.it.description' => 'الوصف (إيطالي)',
        'translations.it.image' => 'الصورة (إيطالي)',
        'languages.it.title' => 'عنوان البانر (إيطالي)',
        'languages.it.description' => 'وصف البانر (إيطالي)',
        'languages.it.image' => 'صورة البانر (إيطالي)',

        // Japanese
        'translations.ja.name' => 'الاسم (ياباني)',
        'translations.ja.description' => 'الوصف (ياباني)',
        'translations.ja.image' => 'الصورة (ياباني)',
        'languages.ja.title' => 'عنوان البانر (ياباني)',
        'languages.ja.description' => 'وصف البانر (ياباني)',
        'languages.ja.image' => 'صورة البانر (ياباني)',

        // Korean
        'translations.ko.name' => 'الاسم (كوري)',
        'translations.ko.description' => 'الوصف (كوري)',
        'translations.ko.image' => 'الصورة (كوري)',
        'languages.ko.title' => 'عنوان البانر (كوري)',
        'languages.ko.description' => 'وصف البانر (كوري)',
        'languages.ko.image' => 'صورة البانر (كوري)',

        // Dutch
        'translations.nl.name' => 'الاسم (هولندي)',
        'translations.nl.description' => 'الوصف (هولندي)',
        'translations.nl.image' => 'الصورة (هولندي)',
        'languages.nl.title' => 'عنوان البانر (هولندي)',
        'languages.nl.description' => 'وصف البانر (هولندي)',
        'languages.nl.image' => 'صورة البانر (هولندي)',

        // Polish
        'translations.pl.name' => 'الاسم (بولندي)',
        'translations.pl.description' => 'الوصف (بولندي)',
        'translations.pl.image' => 'الصورة (بولندي)',
        'languages.pl.title' => 'عنوان البانر (بولندي)',
        'languages.pl.description' => 'وصف البانر (بولندي)',
        'languages.pl.image' => 'صورة البانر (بولندي)',

        // Portuguese
        'translations.pt.name' => 'الاسم (برتغالي)',
        'translations.pt.description' => 'الوصف (برتغالي)',
        'translations.pt.image' => 'الصورة (برتغالي)',
        'languages.pt.title' => 'عنوان البانر (برتغالي)',
        'languages.pt.description' => 'وصف البانر (برتغالي)',
        'languages.pt.image' => 'صورة البانر (برتغالي)',

        // Russian
        'translations.ru.name' => 'الاسم (روسي)',
        'translations.ru.description' => 'الوصف (روسي)',
        'translations.ru.image' => 'الصورة (روسي)',
        'languages.ru.title' => 'عنوان البانر (روسي)',
        'languages.ru.description' => 'وصف البانر (روسي)',
        'languages.ru.image' => 'صورة البانر (روسي)',

        // Thai
        'translations.th.name' => 'الاسم (تايلندي)',
        'translations.th.description' => 'الوصف (تايلندي)',
        'translations.th.image' => 'الصورة (تايلندي)',
        'languages.th.title' => 'عنوان البانر (تايلندي)',
        'languages.th.description' => 'وصف البانر (تايلندي)',
        'languages.th.image' => 'صورة البانر (تايلندي)',

        // Turkish
        'translations.tr.name' => 'الاسم (تركي)',
        'translations.tr.description' => 'الوصف (تركي)',
        'translations.tr.image' => 'الصورة (تركي)',
        'languages.tr.title' => 'عنوان البانر (تركي)',
        'languages.tr.description' => 'وصف البانر (تركي)',
        'languages.tr.image' => 'صورة البانر (تركي)',

        // Vietnamese
        'translations.vi.name' => 'الاسم (فيتنامي)',
        'translations.vi.description' => 'الوصف (فيتنامي)',
        'translations.vi.image' => 'الصورة (فيتنامي)',
        'languages.vi.title' => 'عنوان البانر (فيتنامي)',
        'languages.vi.description' => 'وصف البانر (فيتنامي)',
        'languages.vi.image' => 'صورة البانر (فيتنامي)',

        // Chinese
        'translations.zh.name' => 'الاسم (صيني)',
        'translations.zh.description' => 'الوصف (صيني)',
        'translations.zh.image' => 'الصورة (صيني)',
        'languages.zh.title' => 'عنوان البانر (صيني)',
        'languages.zh.description' => 'وصف البانر (صيني)',
        'languages.zh.image' => 'صورة البانر (صيني)',
    ],
];
