<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    */

    'required' => ':attribute 字段是必填的。',
    'string' => ':attribute 必须是字符串。',
    'max' => ':attribute 不能超过 :max 个字符。',
    'min' => ':attribute 至少为 :min 个字符。',
    'image' => ':attribute 必须是图片。',
    'mimes' => ':attribute 必须是类型为 :values 的文件。',
    'array' => ':attribute 必须是数组。',
    'numeric' => ':attribute 必须是数字。',
    'integer' => ':attribute 必须是整数。',
    'lte' => ':attribute 必须小于或等于 :value。',

    /*
    |--------------------------------------------------------------------------
    | Custom Attributes
    |--------------------------------------------------------------------------
    |
    | 在这里定义自定义属性名称，使验证消息更易读。
    |
    */

    'attributes' => [

        // Vendor fields
        'name' => '姓名',
        'email' => '电子邮件',
        'password' => '密码',
        'password_confirmation' => '确认密码',
        'phone' => '电话号码',
        'status' => '状态',

        // Dynamic variants
        'variants.*.name' => '变体名称',
        'variants.*.price' => '变体价格',
        'variants.*.discount_price' => '变体折扣价格',
        'variants.*.stock' => '变体库存',
        'variants.*.SKU' => '变体 SKU',
        'variants.*.barcode' => '变体条形码',
        'variants.*.weight' => '变体重量',
        'variants.*.dimensions' => '变体尺寸',
        'variants.*.language_code' => '变体语言代码',
        'variants.*.size_id' => '变体尺寸',
        'variants.*.color_id' => '变体颜色',

        // Translations for all supported languages

        // English
        'translations.en.name' => '名称 (英语)',
        'translations.en.description' => '描述 (英语)',
        'translations.en.image' => '图片 (英语)',
        'languages.en.title' => '横幅标题 (英语)',
        'languages.en.description' => '横幅描述 (英语)',
        'languages.en.image' => '横幅图片 (英语)',

        // Arabic
        'translations.ar.name' => '名称 (阿拉伯语)',
        'translations.ar.description' => '描述 (阿拉伯语)',
        'translations.ar.image' => '图片 (阿拉伯语)',
        'languages.ar.title' => '横幅标题 (阿拉伯语)',
        'languages.ar.description' => '横幅描述 (阿拉伯语)',
        'languages.ar.image' => '横幅图片 (阿拉伯语)',

        // German
        'translations.de.name' => '名称 (德语)',
        'translations.de.description' => '描述 (德语)',
        'translations.de.image' => '图片 (德语)',
        'languages.de.title' => '横幅标题 (德语)',
        'languages.de.description' => '横幅描述 (德语)',
        'languages.de.image' => '横幅图片 (德语)',

        // Spanish
        'translations.es.name' => '名称 (西班牙语)',
        'translations.es.description' => '描述 (西班牙语)',
        'translations.es.image' => '图片 (西班牙语)',
        'languages.es.title' => '横幅标题 (西班牙语)',
        'languages.es.description' => '横幅描述 (西班牙语)',
        'languages.es.image' => '横幅图片 (西班牙语)',

        // Persian
        'translations.fa.name' => '名称 (波斯语)',
        'translations.fa.description' => '描述 (波斯语)',
        'translations.fa.image' => '图片 (波斯语)',
        'languages.fa.title' => '横幅标题 (波斯语)',
        'languages.fa.description' => '横幅描述 (波斯语)',
        'languages.fa.image' => '横幅图片 (波斯语)',

        // French
        'translations.fr.name' => '名称 (法语)',
        'translations.fr.description' => '描述 (法语)',
        'translations.fr.image' => '图片 (法语)',
        'languages.fr.title' => '横幅标题 (法语)',
        'languages.fr.description' => '横幅描述 (法语)',
        'languages.fr.image' => '横幅图片 (法语)',

        // Hindi
        'translations.hi.name' => '名称 (印地语)',
        'translations.hi.description' => '描述 (印地语)',
        'translations.hi.image' => '图片 (印地语)',
        'languages.hi.title' => '横幅标题 (印地语)',
        'languages.hi.description' => '横幅描述 (印地语)',
        'languages.hi.image' => '横幅图片 (印地语)',

        // Indonesian
        'translations.id.name' => '名称 (印尼语)',
        'translations.id.description' => '描述 (印尼语)',
        'translations.id.image' => '图片 (印尼语)',
        'languages.id.title' => '横幅标题 (印尼语)',
        'languages.id.description' => '横幅描述 (印尼语)',
        'languages.id.image' => '横幅图片 (印尼语)',

        // Italian
        'translations.it.name' => '名称 (意大利语)',
        'translations.it.description' => '描述 (意大利语)',
        'translations.it.image' => '图片 (意大利语)',
        'languages.it.title' => '横幅标题 (意大利语)',
        'languages.it.description' => '横幅描述 (意大利语)',
        'languages.it.image' => '横幅图片 (意大利语)',

        // Japanese
        'translations.ja.name' => '名称 (日语)',
        'translations.ja.description' => '描述 (日语)',
        'translations.ja.image' => '图片 (日语)',
        'languages.ja.title' => '横幅标题 (日语)',
        'languages.ja.description' => '横幅描述 (日语)',
        'languages.ja.image' => '横幅图片 (日语)',

        // Korean
        'translations.ko.name' => '名称 (韩语)',
        'translations.ko.description' => '描述 (韩语)',
        'translations.ko.image' => '图片 (韩语)',
        'languages.ko.title' => '横幅标题 (韩语)',
        'languages.ko.description' => '横幅描述 (韩语)',
        'languages.ko.image' => '横幅图片 (韩语)',

        // Dutch
        'translations.nl.name' => '名称 (荷兰语)',
        'translations.nl.description' => '描述 (荷兰语)',
        'translations.nl.image' => '图片 (荷兰语)',
        'languages.nl.title' => '横幅标题 (荷兰语)',
        'languages.nl.description' => '横幅描述 (荷兰语)',
        'languages.nl.image' => '横幅图片 (荷兰语)',

        // Polish
        'translations.pl.name' => '名称 (波兰语)',
        'translations.pl.description' => '描述 (波兰语)',
        'translations.pl.image' => '图片 (波兰语)',
        'languages.pl.title' => '横幅标题 (波兰语)',
        'languages.pl.description' => '横幅描述 (波兰语)',
        'languages.pl.image' => '横幅图片 (波兰语)',

        // Portuguese
        'translations.pt.name' => '名称 (葡萄牙语)',
        'translations.pt.description' => '描述 (葡萄牙语)',
        'translations.pt.image' => '图片 (葡萄牙语)',
        'languages.pt.title' => '横幅标题 (葡萄牙语)',
        'languages.pt.description' => '横幅描述 (葡萄牙语)',
        'languages.pt.image' => '横幅图片 (葡萄牙语)',

        // Russian
        'translations.ru.name' => '名称 (俄语)',
        'translations.ru.description' => '描述 (俄语)',
        'translations.ru.image' => '图片 (俄语)',
        'languages.ru.title' => '横幅标题 (俄语)',
        'languages.ru.description' => '横幅描述 (俄语)',
        'languages.ru.image' => '横幅图片 (俄语)',

        // Thai
        'translations.th.name' => '名称 (泰语)',
        'translations.th.description' => '描述 (泰语)',
        'translations.th.image' => '图片 (泰语)',
        'languages.th.title' => '横幅标题 (泰语)',
        'languages.th.description' => '横幅描述 (泰语)',
        'languages.th.image' => '横幅图片 (泰语)',

        // Turkish
        'translations.tr.name' => '名称 (土耳其语)',
        'translations.tr.description' => '描述 (土耳其语)',
        'translations.tr.image' => '图片 (土耳其语)',
        'languages.tr.title' => '横幅标题 (土耳其语)',
        'languages.tr.description' => '横幅描述 (土耳其语)',
        'languages.tr.image' => '横幅图片 (土耳其语)',

        // Vietnamese
        'translations.vi.name' => '名称 (越南语)',
        'translations.vi.description' => '描述 (越南语)',
        'translations.vi.image' => '图片 (越南语)',
        'languages.vi.title' => '横幅标题 (越南语)',
        'languages.vi.description' => '横幅描述 (越南语)',
        'languages.vi.image' => '横幅图片 (越南语)',

        // Chinese
        'translations.zh.name' => '名称 (中文)',
        'translations.zh.description' => '描述 (中文)',
        'translations.zh.image' => '图片 (中文)',
        'languages.zh.title' => '横幅标题 (中文)',
        'languages.zh.description' => '横幅描述 (中文)',
        'languages.zh.image' => '横幅图片 (中文)',
    ],
];
