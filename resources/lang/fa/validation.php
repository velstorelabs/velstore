<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    */

    'required' => 'فیلد :attribute الزامی است.',
    'string' => 'فیلد :attribute باید رشته باشد.',
    'max' => 'فیلد :attribute نباید بیشتر از :max کاراکتر باشد.',
    'min' => 'فیلد :attribute باید حداقل :min کاراکتر باشد.',
    'image' => 'فیلد :attribute باید یک تصویر باشد.',
    'mimes' => 'فیلد :attribute باید از نوع فایل: :values باشد.',
    'array' => 'فیلد :attribute باید یک آرایه باشد.',
    'numeric' => 'فیلد :attribute باید عدد باشد.',
    'integer' => 'فیلد :attribute باید عدد صحیح باشد.',
    'lte' => 'فیلد :attribute باید کمتر یا مساوی :value باشد.',
    'regex' => 'فرمت :attribute معتبر نیست.',
    'confirmed' => 'تأیید :attribute مطابقت ندارد.',
    'incorrect_current_password' => 'رمز عبور فعلی نادرست است.',

    'password' => [
        'letters' => ':attribute باید حداقل شامل یک حرف باشد.',
        'mixed' => ':attribute باید شامل حروف بزرگ و کوچک باشد.',
        'numbers' => ':attribute باید حداقل شامل یک عدد باشد.',
        'symbols' => ':attribute باید حداقل شامل یک نماد باشد.',
        'uncompromised' => ':attribute در یک نشت داده یافت شده است. لطفاً :attribute دیگری انتخاب کنید.',
    ],

    'custom' => [
        'password' => [
            'confirmed' => 'تأیید رمز عبور مطابقت ندارد.',
            'min' => 'رمز عبور باید حداقل :min کاراکتر باشد.',
            'symbols' => 'رمز عبور باید حداقل شامل یک نماد باشد.',
        ],
        'phone' => [
            'regex' => 'شماره تلفن فقط می‌تواند شامل اعداد، فاصله، خط تیره و علامت + اختیاری باشد.',
        ],
        'email' => [
            'unique' => 'این ایمیل قبلاً ثبت شده است.',
        ],
        'status' => [
            'in' => 'وضعیت انتخاب‌شده معتبر نیست.',
        ],
    ],

    'attributes' => [

        // Admin profile
        'current_password' => 'رمز عبور فعلی',
        'profile_image' => 'تصویر پروفایل',

        // Vendor fields
        'name' => 'نام',
        'email' => 'ایمیل',
        'password' => 'رمز عبور',
        'password_confirmation' => 'تأیید رمز عبور',
        'phone' => 'شماره تلفن',
        'status' => 'وضعیت',

        // Social links
        'type' => 'نوع پلتفرم',
        'platform' => 'نام پلتفرم',
        'link' => 'لینک پلتفرم',

        // Menu fields
        'title' => 'عنوان منو',
        'order_number' => 'شماره سفارش',

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
        'variants.*.size_id' => 'اندازه واریانت',
        'variants.*.color_id' => 'رنگ واریانت',

        // Attribute name
        'name' => 'نام ویژگی',

        // Attribute values
        'values.*' => 'مقدار ویژگی',
        ...array_combine(
            array_map(fn ($i) => "values.$i", range(0, 49)),
            array_map(fn ($i) => "مقدار ویژگی $i", range(0, 49))
        ),

        // Attribute value translations (English)
        'translations.en.*' => 'مقدار (انگلیسی)',
        ...array_combine(
            array_map(fn ($i) => "translations.en.$i", range(0, 49)),
            array_map(fn ($i) => "مقدار (انگلیسی) $i", range(0, 49))
        ),

        // Attribute value translations (Arabic)
        'translations.ar.*' => 'مقدار (عربی)',
        ...array_combine(
            array_map(fn ($i) => "translations.ar.$i", range(0, 49)),
            array_map(fn ($i) => "مقدار (عربی) $i", range(0, 49))
        ),

        // Attribute value translations (German)
        'translations.de.*' => 'مقدار (آلمانی)',
        ...array_combine(
            array_map(fn ($i) => "translations.de.$i", range(0, 49)),
            array_map(fn ($i) => "مقدار (آلمانی) $i", range(0, 49))
        ),

        // Attribute value translations (Spanish)
        'translations.es.*' => 'مقدار (اسپانیایی)',
        ...array_combine(
            array_map(fn ($i) => "translations.es.$i", range(0, 49)),
            array_map(fn ($i) => "مقدار (اسپانیایی) $i", range(0, 49))
        ),

        // Attribute value translations (Persian)
        'translations.fa.*' => 'مقدار (فارسی)',
        ...array_combine(
            array_map(fn ($i) => "translations.fa.$i", range(0, 49)),
            array_map(fn ($i) => "مقدار (فارسی) $i", range(0, 49))
        ),

        // Attribute value translations (French)
        'translations.fr.*' => 'مقدار (فرانسوی)',
        ...array_combine(
            array_map(fn ($i) => "translations.fr.$i", range(0, 49)),
            array_map(fn ($i) => "مقدار (فرانسوی) $i", range(0, 49))
        ),

        // Attribute value translations (Hindi)
        'translations.hi.*' => 'مقدار (هندی)',
        ...array_combine(
            array_map(fn ($i) => "translations.hi.$i", range(0, 49)),
            array_map(fn ($i) => "مقدار (هندی) $i", range(0, 49))
        ),

        // Attribute value translations (Indonesian)
        'translations.id.*' => 'مقدار (اندونزیایی)',
        ...array_combine(
            array_map(fn ($i) => "translations.id.$i", range(0, 49)),
            array_map(fn ($i) => "مقدار (اندونزیایی) $i", range(0, 49))
        ),

        // Attribute value translations (Italian)
        'translations.it.*' => 'مقدار (ایتالیایی)',
        ...array_combine(
            array_map(fn ($i) => "translations.it.$i", range(0, 49)),
            array_map(fn ($i) => "مقدار (ایتالیایی) $i", range(0, 49))
        ),

        // Attribute value translations (Japanese)
        'translations.ja.*' => 'مقدار (ژاپنی)',
        ...array_combine(
            array_map(fn ($i) => "translations.ja.$i", range(0, 49)),
            array_map(fn ($i) => "مقدار (ژاپنی) $i", range(0, 49))
        ),

        // Attribute value translations (Korean)
        'translations.ko.*' => 'مقدار (کره‌ای)',
        ...array_combine(
            array_map(fn ($i) => "translations.ko.$i", range(0, 49)),
            array_map(fn ($i) => "مقدار (کره‌ای) $i", range(0, 49))
        ),

        // Attribute value translations (Dutch)
        'translations.nl.*' => 'مقدار (هلندی)',
        ...array_combine(
            array_map(fn ($i) => "translations.nl.$i", range(0, 49)),
            array_map(fn ($i) => "مقدار (هلندی) $i", range(0, 49))
        ),

        // Attribute value translations (Polish)
        'translations.pl.*' => 'مقدار (لهستانی)',
        ...array_combine(
            array_map(fn ($i) => "translations.pl.$i", range(0, 49)),
            array_map(fn ($i) => "مقدار (لهستانی) $i", range(0, 49))
        ),

        // Attribute value translations (Portuguese)
        'translations.pt.*' => 'مقدار (پرتغالی)',
        ...array_combine(
            array_map(fn ($i) => "translations.pt.$i", range(0, 49)),
            array_map(fn ($i) => "مقدار (پرتغالی) $i", range(0, 49))
        ),

        // Attribute value translations (Russian)
        'translations.ru.*' => 'مقدار (روسی)',
        ...array_combine(
            array_map(fn ($i) => "translations.ru.$i", range(0, 49)),
            array_map(fn ($i) => "مقدار (روسی) $i", range(0, 49))
        ),

        // Attribute value translations (Thai)
        'translations.th.*' => 'مقدار (تایلندی)',
        ...array_combine(
            array_map(fn ($i) => "translations.th.$i", range(0, 49)),
            array_map(fn ($i) => "مقدار (تایلندی) $i", range(0, 49))
        ),

        // Attribute value translations (Turkish)
        'translations.tr.*' => 'مقدار (ترکی)',
        ...array_combine(
            array_map(fn ($i) => "translations.tr.$i", range(0, 49)),
            array_map(fn ($i) => "مقدار (ترکی) $i", range(0, 49))
        ),

        // Attribute value translations (Vietnamese)
        'translations.vi.*' => 'مقدار (ویتنامی)',
        ...array_combine(
            array_map(fn ($i) => "translations.vi.$i", range(0, 49)),
            array_map(fn ($i) => "مقدار (ویتنامی) $i", range(0, 49))
        ),

        // Attribute value translations (Chinese)
        'translations.zh.*' => 'مقدار (چینی)',
        ...array_combine(
            array_map(fn ($i) => "translations.zh.$i", range(0, 49)),
            array_map(fn ($i) => "مقدار (چینی) $i", range(0, 49))
        ),

        // Translations for all supported languages

        // English
        'translations.en.name' => 'نام (انگلیسی)',
        'translations.en.description' => 'توضیحات (انگلیسی)',
        'translations.en.image' => 'تصویر (انگلیسی)',
        'translations.en.title' => 'عنوان (انگلیسی)',
        'translations.en.content' => 'محتوا (انگلیسی)',
        'languages.en.title' => 'عنوان بنر (انگلیسی)',
        'languages.en.description' => 'توضیحات بنر (انگلیسی)',
        'languages.en.image' => 'تصویر بنر (انگلیسی)',
        'languages.en.name' => 'نام پلتفرم (انگلیسی)',
        'title.en' => 'عنوان (انگلیسی)',

        // Arabic
        'translations.ar.name' => 'نام (عربی)',
        'translations.ar.description' => 'توضیحات (عربی)',
        'translations.ar.image' => 'تصویر (عربی)',
        'translations.ar.title' => 'عنوان (عربی)',
        'translations.ar.content' => 'محتوا (عربی)',
        'languages.ar.title' => 'عنوان بنر (عربی)',
        'languages.ar.description' => 'توضیحات بنر (عربی)',
        'languages.ar.image' => 'تصویر بنر (عربی)',
        'languages.ar.name' => 'نام پلتفرم (عربی)',
        'title.ar' => 'عنوان (عربی)',

        // German
        'translations.de.name' => 'نام (آلمانی)',
        'translations.de.description' => 'توضیحات (آلمانی)',
        'translations.de.image' => 'تصویر (آلمانی)',
        'translations.de.title' => 'عنوان (آلمانی)',
        'translations.de.content' => 'محتوا (آلمانی)',
        'languages.de.title' => 'عنوان بنر (آلمانی)',
        'languages.de.description' => 'توضیحات بنر (آلمانی)',
        'languages.de.image' => 'تصویر بنر (آلمانی)',
        'languages.de.name' => 'نام پلتفرم (آلمانی)',
        'title.de' => 'عنوان (آلمانی)',

        // Spanish
        'translations.es.name' => 'نام (اسپانیایی)',
        'translations.es.description' => 'توضیحات (اسپانیایی)',
        'translations.es.image' => 'تصویر (اسپانیایی)',
        'translations.es.title' => 'عنوان (اسپانیایی)',
        'translations.es.content' => 'محتوا (اسپانیایی)',
        'languages.es.title' => 'عنوان بنر (اسپانیایی)',
        'languages.es.description' => 'توضیحات بنر (اسپانیایی)',
        'languages.es.image' => 'تصویر بنر (اسپانیایی)',
        'languages.es.name' => 'نام پلتفرم (اسپانیایی)',
        'title.es' => 'عنوان (اسپانیایی)',

        // Persian
        'translations.fa.name' => 'نام (فارسی)',
        'translations.fa.description' => 'توضیحات (فارسی)',
        'translations.fa.image' => 'تصویر (فارسی)',
        'translations.fa.title' => 'عنوان (فارسی)',
        'translations.fa.content' => 'محتوا (فارسی)',
        'languages.fa.title' => 'عنوان بنر (فارسی)',
        'languages.fa.description' => 'توضیحات بنر (فارسی)',
        'languages.fa.image' => 'تصویر بنر (فارسی)',
        'languages.fa.name' => 'نام پلتفرم (فارسی)',
        'title.fa' => 'عنوان (فارسی)',

        // French
        'translations.fr.name' => 'نام (فرانسوی)',
        'translations.fr.description' => 'توضیحات (فرانسوی)',
        'translations.fr.image' => 'تصویر (فرانسوی)',
        'translations.fr.title' => 'عنوان (فرانسوی)',
        'translations.fr.content' => 'محتوا (فرانسوی)',
        'languages.fr.title' => 'عنوان بنر (فرانسوی)',
        'languages.fr.description' => 'توضیحات بنر (فرانسوی)',
        'languages.fr.image' => 'تصویر بنر (فرانسوی)',
        'languages.fr.name' => 'نام پلتفرم (فرانسوی)',
        'title.fr' => 'عنوان (فرانسوی)',

        // Hindi
        'translations.hi.name' => 'نام (هندی)',
        'translations.hi.description' => 'توضیحات (هندی)',
        'translations.hi.image' => 'تصویر (هندی)',
        'translations.hi.title' => 'عنوان (هندی)',
        'translations.hi.content' => 'محتوا (هندی)',
        'languages.hi.title' => 'عنوان بنر (هندی)',
        'languages.hi.description' => 'توضیحات بنر (هندی)',
        'languages.hi.image' => 'تصویر بنر (هندی)',
        'languages.hi.name' => 'نام پلتفرم (هندی)',
        'title.hi' => 'عنوان (هندی)',

        // Indonesian
        'translations.id.name' => 'نام (اندونزیایی)',
        'translations.id.description' => 'توضیحات (اندونزیایی)',
        'translations.id.image' => 'تصویر (اندونزیایی)',
        'translations.id.title' => 'عنوان (اندونزیایی)',
        'translations.id.content' => 'محتوا (اندونزیایی)',
        'languages.id.title' => 'عنوان بنر (اندونزیایی)',
        'languages.id.description' => 'توضیحات بنر (اندونزیایی)',
        'languages.id.image' => 'تصویر بنر (اندونزیایی)',
        'languages.id.name' => 'نام پلتفرم (اندونزیایی)',
        'title.id' => 'عنوان (اندونزیایی)',

        // Italian
        'translations.it.name' => 'نام (ایتالیایی)',
        'translations.it.description' => 'توضیحات (ایتالیایی)',
        'translations.it.image' => 'تصویر (ایتالیایی)',
        'translations.it.title' => 'عنوان (ایتالیایی)',
        'translations.it.content' => 'محتوا (ایتالیایی)',
        'languages.it.title' => 'عنوان بنر (ایتالیایی)',
        'languages.it.description' => 'توضیحات بنر (ایتالیایی)',
        'languages.it.image' => 'تصویر بنر (ایتالیایی)',
        'languages.it.name' => 'نام پلتفرم (ایتالیایی)',
        'title.it' => 'عنوان (ایتالیایی)',

        // Japanese
        'translations.ja.name' => 'نام (ژاپنی)',
        'translations.ja.description' => 'توضیحات (ژاپنی)',
        'translations.ja.image' => 'تصویر (ژاپنی)',
        'translations.ja.title' => 'عنوان (ژاپنی)',
        'translations.ja.content' => 'محتوا (ژاپنی)',
        'languages.ja.title' => 'عنوان بنر (ژاپنی)',
        'languages.ja.description' => 'توضیحات بنر (ژاپنی)',
        'languages.ja.image' => 'تصویر بنر (ژاپنی)',
        'languages.ja.name' => 'نام پلتفرم (ژاپنی)',
        'title.ja' => 'عنوان (ژاپنی)',

        // Korean
        'translations.ko.name' => 'نام (کره‌ای)',
        'translations.ko.description' => 'توضیحات (کره‌ای)',
        'translations.ko.image' => 'تصویر (کره‌ای)',
        'translations.ko.title' => 'عنوان (کره‌ای)',
        'translations.ko.content' => 'محتوا (کره‌ای)',
        'languages.ko.title' => 'عنوان بنر (کره‌ای)',
        'languages.ko.description' => 'توضیحات بنر (کره‌ای)',
        'languages.ko.image' => 'تصویر بنر (کره‌ای)',
        'languages.ko.name' => 'نام پلتفرم (کره‌ای)',
        'title.ko' => 'عنوان (کره‌ای)',

        // Dutch
        'translations.nl.name' => 'نام (هلندی)',
        'translations.nl.description' => 'توضیحات (هلندی)',
        'translations.nl.image' => 'تصویر (هلندی)',
        'translations.nl.title' => 'عنوان (هلندی)',
        'translations.nl.content' => 'محتوا (هلندی)',
        'languages.nl.title' => 'عنوان بنر (هلندی)',
        'languages.nl.description' => 'توضیحات بنر (هلندی)',
        'languages.nl.image' => 'تصویر بنر (هلندی)',
        'languages.nl.name' => 'نام پلتفرم (هلندی)',
        'title.nl' => 'عنوان (هلندی)',

        // Polish
        'translations.pl.name' => 'نام (لهستانی)',
        'translations.pl.description' => 'توضیحات (لهستانی)',
        'translations.pl.image' => 'تصویر (لهستانی)',
        'translations.pl.title' => 'عنوان (لهستانی)',
        'translations.pl.content' => 'محتوا (لهستانی)',
        'languages.pl.title' => 'عنوان بنر (لهستانی)',
        'languages.pl.description' => 'توضیحات بنر (لهستانی)',
        'languages.pl.image' => 'تصویر بنر (لهستانی)',
        'languages.pl.name' => 'نام پلتفرم (لهستانی)',
        'title.pl' => 'عنوان (لهستانی)',

        // Portuguese
        'translations.pt.name' => 'نام (پرتغالی)',
        'translations.pt.description' => 'توضیحات (پرتغالی)',
        'translations.pt.image' => 'تصویر (پرتغالی)',
        'translations.pt.title' => 'عنوان (پرتغالی)',
        'translations.pt.content' => 'محتوا (پرتغالی)',
        'languages.pt.title' => 'عنوان بنر (پرتغالی)',
        'languages.pt.description' => 'توضیحات بنر (پرتغالی)',
        'languages.pt.image' => 'تصویر بنر (پرتغالی)',
        'languages.pt.name' => 'نام پلتفرم (پرتغالی)',
        'title.pt' => 'عنوان (پرتغالی)',

        // Russian
        'translations.ru.name' => 'نام (روسی)',
        'translations.ru.description' => 'توضیحات (روسی)',
        'translations.ru.image' => 'تصویر (روسی)',
        'translations.ru.title' => 'عنوان (روسی)',
        'translations.ru.content' => 'محتوا (روسی)',
        'languages.ru.title' => 'عنوان بنر (روسی)',
        'languages.ru.description' => 'توضیحات بنر (روسی)',
        'languages.ru.image' => 'تصویر بنر (روسی)',
        'languages.ru.name' => 'نام پلتفرم (روسی)',
        'title.ru' => 'عنوان (روسی)',

        // Thai
        'translations.th.name' => 'نام (تایلندی)',
        'translations.th.description' => 'توضیحات (تایلندی)',
        'translations.th.image' => 'تصویر (تایلندی)',
        'translations.th.title' => 'عنوان (تایلندی)',
        'translations.th.content' => 'محتوا (تایلندی)',
        'languages.th.title' => 'عنوان بنر (تایلندی)',
        'languages.th.description' => 'توضیحات بنر (تایلندی)',
        'languages.th.image' => 'تصویر بنر (تایلندی)',
        'languages.th.name' => 'نام پلتفرم (تایلندی)',
        'title.th' => 'عنوان (تایلندی)',

        // Turkish
        'translations.tr.name' => 'نام (ترکی)',
        'translations.tr.description' => 'توضیحات (ترکی)',
        'translations.tr.image' => 'تصویر (ترکی)',
        'translations.tr.title' => 'عنوان (ترکی)',
        'translations.tr.content' => 'محتوا (ترکی)',
        'languages.tr.title' => 'عنوان بنر (ترکی)',
        'languages.tr.description' => 'توضیحات بنر (ترکی)',
        'languages.tr.image' => 'تصویر بنر (ترکی)',
        'languages.tr.name' => 'نام پلتفرم (ترکی)',
        'title.tr' => 'عنوان (ترکی)',

        // Vietnamese
        'translations.vi.name' => 'نام (ویتنامی)',
        'translations.vi.description' => 'توضیحات (ویتنامی)',
        'translations.vi.image' => 'تصویر (ویتنامی)',
        'translations.vi.title' => 'عنوان (ویتنامی)',
        'translations.vi.content' => 'محتوا (ویتنامی)',
        'languages.vi.title' => 'عنوان بنر (ویتنامی)',
        'languages.vi.description' => 'توضیحات بنر (ویتنامی)',
        'languages.vi.image' => 'تصویر بنر (ویتنامی)',
        'languages.vi.name' => 'نام پلتفرم (ویتنامی)',
        'title.vi' => 'عنوان (ویتنامی)',

        // Chinese
        'translations.zh.name' => 'نام (چینی)',
        'translations.zh.description' => 'توضیحات (چینی)',
        'translations.zh.image' => 'تصویر (چینی)',
        'translations.zh.title' => 'عنوان (چینی)',
        'translations.zh.content' => 'محتوا (چینی)',
        'languages.zh.title' => 'عنوان بنر (چینی)',
        'languages.zh.description' => 'توضیحات بنر (چینی)',
        'languages.zh.image' => 'تصویر بنر (چینی)',
        'languages.zh.name' => 'نام پلتفرم (چینی)',
        'title.zh' => 'عنوان (چینی)',
    ],
];
