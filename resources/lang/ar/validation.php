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
    'regex' => 'تنسيق :attribute غير صالح.',
    'confirmed' => 'تأكيد :attribute غير مطابق.',
    'incorrect_current_password' => 'كلمة المرور الحالية غير صحيحة.',

    'password' => [
        'letters' => 'يجب أن يحتوي :attribute على حرف واحد على الأقل.',
        'mixed' => 'يجب أن يحتوي :attribute على أحرف كبيرة وصغيرة معًا.',
        'numbers' => 'يجب أن يحتوي :attribute على رقم واحد على الأقل.',
        'symbols' => 'يجب أن يحتوي :attribute على رمز واحد على الأقل.',
        'uncompromised' => 'تم العثور على :attribute في تسريب بيانات. الرجاء اختيار :attribute آخر.',
    ],

    'custom' => [
        'password' => [
            'confirmed' => 'تأكيد كلمة المرور غير مطابق.',
            'min' => 'يجب أن تتكون كلمة المرور من :min أحرف على الأقل.',
            'symbols' => 'يجب أن تحتوي كلمة المرور على رمز واحد على الأقل.',
        ],
        'phone' => [
            'regex' => 'يمكن أن يحتوي رقم الهاتف على أرقام ومسافات وواصلات وعلامة + اختيارية فقط.',
        ],
        'email' => [
            'unique' => 'هذا البريد الإلكتروني مسجل بالفعل.',
        ],
        'status' => [
            'in' => 'الحالة المحددة غير صالحة.',
        ],
    ],
    'attributes' => [

        // Admin profile
        'current_password' => 'كلمة المرور الحالية',
        'profile_image' => 'صورة الملف الشخصي',

        // Vendor fields
        'name' => 'الاسم',
        'email' => 'البريد الإلكتروني',
        'password' => 'كلمة المرور',
        'password_confirmation' => 'تأكيد كلمة المرور',
        'phone' => 'رقم الهاتف',
        'status' => 'الحالة',

        // Social links
        'type' => 'نوع المنصة',
        'platform' => 'اسم المنصة',
        'link' => 'رابط المنصة',

        // Menu fields
        'title' => 'عنوان القائمة',
        'order_number' => 'رقم الطلب',

        // Dynamic variants
        'variants.*.name' => 'اسم المتغير',
        'variants.*.price' => 'سعر المتغير',
        'variants.*.discount_price' => 'سعر الخصم للمتغير',
        'variants.*.stock' => 'مخزون المتغير',
        'variants.*.SKU' => 'رمز SKU للمتغير',
        'variants.*.barcode' => 'باركود المتغير',
        'variants.*.weight' => 'وزن المتغير',
        'variants.*.dimensions' => 'أبعاد المتغير',
        'variants.*.language_code' => 'رمز لغة المتغير',
        'variants.*.size_id' => 'حجم المتغير',
        'variants.*.color_id' => 'لون المتغير',

        // Attribute name
        'name' => 'اسم الخاصية',

        // Attribute values
        'values.*' => 'قيمة الخاصية',
        ...array_combine(
            array_map(fn ($i) => "values.$i", range(0, 49)),
            array_map(fn ($i) => "قيمة الخاصية $i", range(0, 49))
        ),

        // Attribute value translations (English)
        'translations.en.*' => 'القيمة (بالإنجليزية)',
        ...array_combine(
            array_map(fn ($i) => "translations.en.$i", range(0, 49)),
            array_map(fn ($i) => "القيمة (بالإنجليزية) $i", range(0, 49))
        ),

        // Attribute value translations (Arabic)
        'translations.ar.*' => 'القيمة (بالعربية)',
        ...array_combine(
            array_map(fn ($i) => "translations.ar.$i", range(0, 49)),
            array_map(fn ($i) => "القيمة (بالعربية) $i", range(0, 49))
        ),

        // Attribute value translations (German)
        'translations.de.*' => 'القيمة (بالألمانية)',
        ...array_combine(
            array_map(fn ($i) => "translations.de.$i", range(0, 49)),
            array_map(fn ($i) => "القيمة (بالألمانية) $i", range(0, 49))
        ),

        // Attribute value translations (Spanish)
        'translations.es.*' => 'القيمة (بالإسبانية)',
        ...array_combine(
            array_map(fn ($i) => "translations.es.$i", range(0, 49)),
            array_map(fn ($i) => "القيمة (بالإسبانية) $i", range(0, 49))
        ),

        // Attribute value translations (Persian)
        'translations.fa.*' => 'القيمة (بالفارسية)',
        ...array_combine(
            array_map(fn ($i) => "translations.fa.$i", range(0, 49)),
            array_map(fn ($i) => "القيمة (بالفارسية) $i", range(0, 49))
        ),

        // Attribute value translations (French)
        'translations.fr.*' => 'القيمة (بالفرنسية)',
        ...array_combine(
            array_map(fn ($i) => "translations.fr.$i", range(0, 49)),
            array_map(fn ($i) => "القيمة (بالفرنسية) $i", range(0, 49))
        ),

        // Attribute value translations (Hindi)
        'translations.hi.*' => 'القيمة (بالهندية)',
        ...array_combine(
            array_map(fn ($i) => "translations.hi.$i", range(0, 49)),
            array_map(fn ($i) => "القيمة (بالهندية) $i", range(0, 49))
        ),

        // Attribute value translations (Indonesian)
        'translations.id.*' => 'القيمة (بالإندونيسية)',
        ...array_combine(
            array_map(fn ($i) => "translations.id.$i", range(0, 49)),
            array_map(fn ($i) => "القيمة (بالإندونيسية) $i", range(0, 49))
        ),

        // Attribute value translations (Italian)
        'translations.it.*' => 'القيمة (بالإيطالية)',
        ...array_combine(
            array_map(fn ($i) => "translations.it.$i", range(0, 49)),
            array_map(fn ($i) => "القيمة (بالإيطالية) $i", range(0, 49))
        ),

        // Attribute value translations (Japanese)
        'translations.ja.*' => 'القيمة (باليابانية)',
        ...array_combine(
            array_map(fn ($i) => "translations.ja.$i", range(0, 49)),
            array_map(fn ($i) => "القيمة (باليابانية) $i", range(0, 49))
        ),

        // Attribute value translations (Korean)
        'translations.ko.*' => 'القيمة (بالكورية)',
        ...array_combine(
            array_map(fn ($i) => "translations.ko.$i", range(0, 49)),
            array_map(fn ($i) => "القيمة (بالكورية) $i", range(0, 49))
        ),

        // Attribute value translations (Dutch)
        'translations.nl.*' => 'القيمة (بالهولندية)',
        ...array_combine(
            array_map(fn ($i) => "translations.nl.$i", range(0, 49)),
            array_map(fn ($i) => "القيمة (بالهولندية) $i", range(0, 49))
        ),

        // Attribute value translations (Polish)
        'translations.pl.*' => 'القيمة (بالبولندية)',
        ...array_combine(
            array_map(fn ($i) => "translations.pl.$i", range(0, 49)),
            array_map(fn ($i) => "القيمة (بالبولندية) $i", range(0, 49))
        ),

        // Attribute value translations (Portuguese)
        'translations.pt.*' => 'القيمة (بالبرتغالية)',
        ...array_combine(
            array_map(fn ($i) => "translations.pt.$i", range(0, 49)),
            array_map(fn ($i) => "القيمة (بالبرتغالية) $i", range(0, 49))
        ),

        // Attribute value translations (Russian)
        'translations.ru.*' => 'القيمة (بالروسية)',
        ...array_combine(
            array_map(fn ($i) => "translations.ru.$i", range(0, 49)),
            array_map(fn ($i) => "القيمة (بالروسية) $i", range(0, 49))
        ),

        // Attribute value translations (Thai)
        'translations.th.*' => 'القيمة (بالتايلاندية)',
        ...array_combine(
            array_map(fn ($i) => "translations.th.$i", range(0, 49)),
            array_map(fn ($i) => "القيمة (بالتايلاندية) $i", range(0, 49))
        ),

        // Attribute value translations (Turkish)
        'translations.tr.*' => 'القيمة (بالتركية)',
        ...array_combine(
            array_map(fn ($i) => "translations.tr.$i", range(0, 49)),
            array_map(fn ($i) => "القيمة (بالتركية) $i", range(0, 49))
        ),

        // Attribute value translations (Vietnamese)
        'translations.vi.*' => 'القيمة (بالفيتنامية)',
        ...array_combine(
            array_map(fn ($i) => "translations.vi.$i", range(0, 49)),
            array_map(fn ($i) => "القيمة (بالفيتنامية) $i", range(0, 49))
        ),

        // Attribute value translations (Chinese)
        'translations.zh.*' => 'القيمة (بالصينية)',
        ...array_combine(
            array_map(fn ($i) => "translations.zh.$i", range(0, 49)),
            array_map(fn ($i) => "القيمة (بالصينية) $i", range(0, 49))
        ),

        // Translations for all supported languages

        // English
        'translations.en.name' => 'الاسم (بالإنجليزية)',
        'translations.en.description' => 'الوصف (بالإنجليزية)',
        'translations.en.image' => 'الصورة (بالإنجليزية)',
        'translations.en.title' => 'العنوان (بالإنجليزية)',
        'translations.en.content' => 'المحتوى (بالإنجليزية)',
        'languages.en.title' => 'عنوان البانر (بالإنجليزية)',
        'languages.en.description' => 'وصف البانر (بالإنجليزية)',
        'languages.en.image' => 'صورة البانر (بالإنجليزية)',
        'languages.en.name' => 'اسم المنصة (بالإنجليزية)',
        'title.en' => 'العنوان (بالإنجليزية)',

        // Arabic
        'translations.ar.name' => 'الاسم (بالعربية)',
        'translations.ar.description' => 'الوصف (بالعربية)',
        'translations.ar.image' => 'الصورة (بالعربية)',
        'translations.ar.title' => 'العنوان (بالعربية)',
        'translations.ar.content' => 'المحتوى (بالعربية)',
        'languages.ar.title' => 'عنوان البانر (بالعربية)',
        'languages.ar.description' => 'وصف البانر (بالعربية)',
        'languages.ar.image' => 'صورة البانر (بالعربية)',
        'languages.ar.name' => 'اسم المنصة (بالعربية)',
        'title.ar' => 'العنوان (بالعربية)',

        // German
        'translations.de.name' => 'الاسم (بالألمانية)',
        'translations.de.description' => 'الوصف (بالألمانية)',
        'translations.de.image' => 'الصورة (بالألمانية)',
        'translations.de.title' => 'العنوان (بالألمانية)',
        'translations.de.content' => 'المحتوى (بالألمانية)',
        'languages.de.title' => 'عنوان البانر (بالألمانية)',
        'languages.de.description' => 'وصف البانر (بالألمانية)',
        'languages.de.image' => 'صورة البانر (بالألمانية)',
        'languages.de.name' => 'اسم المنصة (بالألمانية)',
        'title.de' => 'العنوان (بالألمانية)',

        // Spanish
        'translations.es.name' => 'الاسم (بالإسبانية)',
        'translations.es.description' => 'الوصف (بالإسبانية)',
        'translations.es.image' => 'الصورة (بالإسبانية)',
        'translations.es.title' => 'العنوان (بالإسبانية)',
        'translations.es.content' => 'المحتوى (بالإسبانية)',
        'languages.es.title' => 'عنوان البانر (بالإسبانية)',
        'languages.es.description' => 'وصف البانر (بالإسبانية)',
        'languages.es.image' => 'صورة البانر (بالإسبانية)',
        'languages.es.name' => 'اسم المنصة (بالإسبانية)',
        'title.es' => 'العنوان (بالإسبانية)',

        // Persian
        'translations.fa.name' => 'الاسم (بالفارسي)',
        'translations.fa.description' => 'الوصف (بالفارسي)',
        'translations.fa.image' => 'الصورة (بالفارسي)',
        'translations.fa.title' => 'العنوان (بالفارسي)',
        'translations.fa.content' => 'المحتوى (بالفارسي)',
        'languages.fa.title' => 'عنوان البانر (بالفارسي)',
        'languages.fa.description' => 'وصف البانر (بالفارسي)',
        'languages.fa.image' => 'صورة البانر (بالفارسي)',
        'languages.fa.name' => 'اسم المنصة (بالفارسي)',
        'title.fa' => 'العنوان (بالفارسي)',

        // French
        'translations.fr.name' => 'الاسم (بالفرنسية)',
        'translations.fr.description' => 'الوصف (بالفرنسية)',
        'translations.fr.image' => 'الصورة (بالفرنسية)',
        'translations.fr.title' => 'العنوان (بالفرنسية)',
        'translations.fr.content' => 'المحتوى (بالفرنسية)',
        'languages.fr.title' => 'عنوان البانر (بالفرنسية)',
        'languages.fr.description' => 'وصف البانر (بالفرنسية)',
        'languages.fr.image' => 'صورة البانر (بالفرنسية)',
        'languages.fr.name' => 'اسم المنصة (بالفرنسية)',
        'title.fr' => 'العنوان (بالفرنسية)',

        // Hindi
        'translations.hi.name' => 'الاسم (بالهندية)',
        'translations.hi.description' => 'الوصف (بالهندية)',
        'translations.hi.image' => 'الصورة (بالهندية)',
        'translations.hi.title' => 'العنوان (بالهندية)',
        'translations.hi.content' => 'المحتوى (بالهندية)',
        'languages.hi.title' => 'عنوان البانر (بالهندية)',
        'languages.hi.description' => 'وصف البانر (بالهندية)',
        'languages.hi.image' => 'صورة البانر (بالهندية)',
        'languages.hi.name' => 'اسم المنصة (بالهندية)',
        'title.hi' => 'العنوان (بالهندية)',

        // Indonesian
        'translations.id.name' => 'الاسم (بالإندونيسية)',
        'translations.id.description' => 'الوصف (بالإندونيسية)',
        'translations.id.image' => 'الصورة (بالإندونيسية)',
        'translations.id.title' => 'العنوان (بالإندونيسية)',
        'translations.id.content' => 'المحتوى (بالإندونيسية)',
        'languages.id.title' => 'عنوان البانر (بالإندونيسية)',
        'languages.id.description' => 'وصف البانر (بالإندونيسية)',
        'languages.id.image' => 'صورة البانر (بالإندونيسية)',
        'languages.id.name' => 'اسم المنصة (بالإندونيسية)',
        'title.id' => 'العنوان (بالإندونيسية)',

        // Italian
        'translations.it.name' => 'الاسم (بالإيطالية)',
        'translations.it.description' => 'الوصف (بالإيطالية)',
        'translations.it.image' => 'الصورة (بالإيطالية)',
        'translations.it.title' => 'العنوان (بالإيطالية)',
        'translations.it.content' => 'المحتوى (بالإيطالية)',
        'languages.it.title' => 'عنوان البانر (بالإيطالية)',
        'languages.it.description' => 'وصف البانر (بالإيطالية)',
        'languages.it.image' => 'صورة البانر (بالإيطالية)',
        'languages.it.name' => 'اسم المنصة (بالإيطالية)',
        'title.it' => 'العنوان (بالإيطالية)',

        // Japanese
        'translations.ja.name' => 'الاسم (باليابانية)',
        'translations.ja.description' => 'الوصف (باليابانية)',
        'translations.ja.image' => 'الصورة (باليابانية)',
        'translations.ja.title' => 'العنوان (باليابانية)',
        'translations.ja.content' => 'المحتوى (باليابانية)',
        'languages.ja.title' => 'عنوان البانر (باليابانية)',
        'languages.ja.description' => 'وصف البانر (باليابانية)',
        'languages.ja.image' => 'صورة البانر (باليابانية)',
        'languages.ja.name' => 'اسم المنصة (باليابانية)',
        'title.ja' => 'العنوان (باليابانية)',

        // Korean
        'translations.ko.name' => 'الاسم (بالكورية)',
        'translations.ko.description' => 'الوصف (بالكورية)',
        'translations.ko.image' => 'الصورة (بالكورية)',
        'translations.ko.title' => 'العنوان (بالكورية)',
        'translations.ko.content' => 'المحتوى (بالكورية)',
        'languages.ko.title' => 'عنوان البانر (بالكورية)',
        'languages.ko.description' => 'وصف البانر (بالكورية)',
        'languages.ko.image' => 'صورة البانر (بالكورية)',
        'languages.ko.name' => 'اسم المنصة (بالكورية)',
        'title.ko' => 'العنوان (بالكورية)',

        // Dutch
        'translations.nl.name' => 'الاسم (بالهولندية)',
        'translations.nl.description' => 'الوصف (بالهولندية)',
        'translations.nl.image' => 'الصورة (بالهولندية)',
        'translations.nl.title' => 'العنوان (بالهولندية)',
        'translations.nl.content' => 'المحتوى (بالهولندية)',
        'languages.nl.title' => 'عنوان البانر (بالهولندية)',
        'languages.nl.description' => 'وصف البانر (بالهولندية)',
        'languages.nl.image' => 'صورة البانر (بالهولندية)',
        'languages.nl.name' => 'اسم المنصة (بالهولندية)',
        'title.nl' => 'العنوان (بالهولندية)',

        // Polish
        'translations.pl.name' => 'الاسم (بالبولندية)',
        'translations.pl.description' => 'الوصف (بالبولندية)',
        'translations.pl.image' => 'الصورة (بالبولندية)',
        'translations.pl.title' => 'العنوان (بالبولندية)',
        'translations.pl.content' => 'المحتوى (بالبولندية)',
        'languages.pl.title' => 'عنوان البانر (بالبولندية)',
        'languages.pl.description' => 'وصف البانر (بالبولندية)',
        'languages.pl.image' => 'صورة البانر (بالبولندية)',
        'languages.pl.name' => 'اسم المنصة (بالبولندية)',
        'title.pl' => 'العنوان (بالبولندية)',

        // Portuguese
        'translations.pt.name' => 'الاسم (بالبرتغالية)',
        'translations.pt.description' => 'الوصف (بالبرتغالية)',
        'translations.pt.image' => 'الصورة (بالبرتغالية)',
        'translations.pt.title' => 'العنوان (بالبرتغالية)',
        'translations.pt.content' => 'المحتوى (بالبرتغالية)',
        'languages.pt.title' => 'عنوان البانر (بالبرتغالية)',
        'languages.pt.description' => 'وصف البانر (بالبرتغالية)',
        'languages.pt.image' => 'صورة البانر (بالبرتغالية)',
        'languages.pt.name' => 'اسم المنصة (بالبرتغالية)',
        'title.pt' => 'العنوان (بالبرتغالية)',

        // Russian
        'translations.ru.name' => 'الاسم (بالروسية)',
        'translations.ru.description' => 'الوصف (بالروسية)',
        'translations.ru.image' => 'الصورة (بالروسية)',
        'translations.ru.title' => 'العنوان (بالروسية)',
        'translations.ru.content' => 'المحتوى (بالروسية)',
        'languages.ru.title' => 'عنوان البانر (بالروسية)',
        'languages.ru.description' => 'وصف البانر (بالروسية)',
        'languages.ru.image' => 'صورة البانر (بالروسية)',
        'languages.ru.name' => 'اسم المنصة (بالروسية)',
        'title.ru' => 'العنوان (بالروسية)',

        // Thai
        'translations.th.name' => 'الاسم (بالتايلاندية)',
        'translations.th.description' => 'الوصف (بالتايلاندية)',
        'translations.th.image' => 'الصورة (بالتايلاندية)',
        'translations.th.title' => 'العنوان (بالتايلاندية)',
        'translations.th.content' => 'المحتوى (بالتايلاندية)',
        'languages.th.title' => 'عنوان البانر (بالتايلاندية)',
        'languages.th.description' => 'وصف البانر (بالتايلاندية)',
        'languages.th.image' => 'صورة البانر (بالتايلاندية)',
        'languages.th.name' => 'اسم المنصة (بالتايلاندية)',
        'title.th' => 'العنوان (بالتايلاندية)',

        // Turkish
        'translations.tr.name' => 'الاسم (بالتركية)',
        'translations.tr.description' => 'الوصف (بالتركية)',
        'translations.tr.image' => 'الصورة (بالتركية)',
        'translations.tr.title' => 'العنوان (بالتركية)',
        'translations.tr.content' => 'المحتوى (بالتركية)',
        'languages.tr.title' => 'عنوان البانر (بالتركية)',
        'languages.tr.description' => 'وصف البانر (بالتركية)',
        'languages.tr.image' => 'صورة البانر (بالتركية)',
        'languages.tr.name' => 'اسم المنصة (بالتركية)',
        'title.tr' => 'العنوان (بالتركية)',

        // Vietnamese
        'translations.vi.name' => 'الاسم (بالفيتنامية)',
        'translations.vi.description' => 'الوصف (بالفيتنامية)',
        'translations.vi.image' => 'الصورة (بالفيتنامية)',
        'translations.vi.title' => 'العنوان (بالفيتنامية)',
        'translations.vi.content' => 'المحتوى (بالفيتنامية)',
        'languages.vi.title' => 'عنوان البانر (بالفيتنامية)',
        'languages.vi.description' => 'وصف البانر (بالفيتنامية)',
        'languages.vi.image' => 'صورة البانر (بالفيتنامية)',
        'languages.vi.name' => 'اسم المنصة (بالفيتنامية)',
        'title.vi' => 'العنوان (بالفيتنامية)',

        // Chinese
        'translations.zh.name' => 'الاسم (بالصينية)',
        'translations.zh.description' => 'الوصف (بالصينية)',
        'translations.zh.image' => 'الصورة (بالصينية)',
        'translations.zh.title' => 'العنوان (بالصينية)',
        'translations.zh.content' => 'المحتوى (بالصينية)',
        'languages.zh.title' => 'عنوان البانر (بالصينية)',
        'languages.zh.description' => 'وصف البانر (بالصينية)',
        'languages.zh.image' => 'صورة البانر (بالصينية)',
        'languages.zh.name' => 'اسم المنصة (بالصينية)',
        'title.zh' => 'العنوان (بالصينية)',
    ],
];
