<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    */

    'required' => ':attribute 字段是必填项。',
    'string' => ':attribute 必须是字符串。',
    'max' => ':attribute 不能超过 :max 个字符。',
    'min' => ':attribute 至少需要 :min 个字符。',
    'image' => ':attribute 必须是一张图片。',
    'mimes' => ':attribute 必须是以下类型的文件: :values。',
    'array' => ':attribute 必须是一个数组。',
    'numeric' => ':attribute 必须是数字。',
    'integer' => ':attribute 必须是整数。',
    'lte' => ':attribute 必须小于或等于 :value。',
    'regex' => ':attribute 格式无效。',
    'confirmed' => ':attribute 确认不匹配。',
    'incorrect_current_password' => '当前密码不正确。',

    'password' => [
        'letters' => ':attribute 必须至少包含一个字母。',
        'mixed' => ':attribute 必须同时包含大写和小写字母。',
        'numbers' => ':attribute 必须至少包含一个数字。',
        'symbols' => ':attribute 必须至少包含一个符号。',
        'uncompromised' => ':attribute 已在数据泄露中出现。请使用不同的 :attribute。',
    ],

    'custom' => [
        'password' => [
            'confirmed' => '密码确认不匹配。',
            'min' => '密码长度至少为 :min 个字符。',
            'symbols' => '密码必须至少包含一个符号。',
        ],
        'phone' => [
            'regex' => '电话号码只能包含数字、空格、短横线和可选的 + 号。',
        ],
        'email' => [
            'unique' => '此电子邮件已被注册。',
        ],
        'status' => [
            'in' => '所选状态无效。',
        ],
    ],

    'attributes' => [

        // Admin profile
        'current_password' => '当前密码',
        'profile_image' => '个人资料图片',

        // Vendor fields
        'name' => '姓名',
        'email' => '电子邮件',
        'password' => '密码',
        'password_confirmation' => '确认密码',
        'phone' => '电话号码',
        'status' => '状态',

        // Social links
        'type' => '平台类型',
        'platform' => '平台名称',
        'link' => '平台链接',

        // Menu fields
        'title' => '菜单标题',
        'order_number' => '订单号',

        // Dynamic variants
        'variants.*.name' => '变体名称',
        'variants.*.price' => '变体价格',
        'variants.*.discount_price' => '变体折扣价',
        'variants.*.stock' => '变体库存',
        'variants.*.SKU' => '变体 SKU',
        'variants.*.barcode' => '变体条码',
        'variants.*.weight' => '变体重量',
        'variants.*.dimensions' => '变体尺寸',
        'variants.*.language_code' => '变体语言代码',
        'variants.*.size_id' => '变体尺寸',
        'variants.*.color_id' => '变体颜色',

        // Attribute name
        'name' => '属性名称',

        // Attribute values
        'values.*' => '属性值',
        ...array_combine(
            array_map(fn ($i) => "values.$i", range(0, 49)),
            array_map(fn ($i) => "属性值 $i", range(0, 49))
        ),

        // Attribute value translations (English)
        'translations.en.*' => '值 (英文)',
        ...array_combine(
            array_map(fn ($i) => "translations.en.$i", range(0, 49)),
            array_map(fn ($i) => "值 (英文) $i", range(0, 49))
        ),

        // Attribute value translations (Arabic)
        'translations.ar.*' => '值 (阿拉伯语)',
        ...array_combine(
            array_map(fn ($i) => "translations.ar.$i", range(0, 49)),
            array_map(fn ($i) => "值 (阿拉伯语) $i", range(0, 49))
        ),

        // Attribute value translations (German)
        'translations.de.*' => '值 (德语)',
        ...array_combine(
            array_map(fn ($i) => "translations.de.$i", range(0, 49)),
            array_map(fn ($i) => "值 (德语) $i", range(0, 49))
        ),

        // Attribute value translations (Spanish)
        'translations.es.*' => '值 (西班牙语)',
        ...array_combine(
            array_map(fn ($i) => "translations.es.$i", range(0, 49)),
            array_map(fn ($i) => "值 (西班牙语) $i", range(0, 49))
        ),

        // Attribute value translations (Persian)
        'translations.fa.*' => '值 (波斯语)',
        ...array_combine(
            array_map(fn ($i) => "translations.fa.$i", range(0, 49)),
            array_map(fn ($i) => "值 (波斯语) $i", range(0, 49))
        ),

        // Attribute value translations (French)
        'translations.fr.*' => '值 (法语)',
        ...array_combine(
            array_map(fn ($i) => "translations.fr.$i", range(0, 49)),
            array_map(fn ($i) => "值 (法语) $i", range(0, 49))
        ),

        // Attribute value translations (Hindi)
        'translations.hi.*' => '值 (印地语)',
        ...array_combine(
            array_map(fn ($i) => "translations.hi.$i", range(0, 49)),
            array_map(fn ($i) => "值 (印地语) $i", range(0, 49))
        ),

        // Attribute value translations (Indonesian)
        'translations.id.*' => '值 (印度尼西亚语)',
        ...array_combine(
            array_map(fn ($i) => "translations.id.$i", range(0, 49)),
            array_map(fn ($i) => "值 (印度尼西亚语) $i", range(0, 49))
        ),

        // Attribute value translations (Italian)
        'translations.it.*' => '值 (意大利语)',
        ...array_combine(
            array_map(fn ($i) => "translations.it.$i", range(0, 49)),
            array_map(fn ($i) => "值 (意大利语) $i", range(0, 49))
        ),

        // Attribute value translations (Japanese)
        'translations.ja.*' => '值 (日语)',
        ...array_combine(
            array_map(fn ($i) => "translations.ja.$i", range(0, 49)),
            array_map(fn ($i) => "值 (日语) $i", range(0, 49))
        ),

        // Attribute value translations (Korean)
        'translations.ko.*' => '值 (韩语)',
        ...array_combine(
            array_map(fn ($i) => "translations.ko.$i", range(0, 49)),
            array_map(fn ($i) => "值 (韩语) $i", range(0, 49))
        ),

        // Attribute value translations (Dutch)
        'translations.nl.*' => '值 (荷兰语)',
        ...array_combine(
            array_map(fn ($i) => "translations.nl.$i", range(0, 49)),
            array_map(fn ($i) => "值 (荷兰语) $i", range(0, 49))
        ),

        // Attribute value translations (Polish)
        'translations.pl.*' => '值 (波兰语)',
        ...array_combine(
            array_map(fn ($i) => "translations.pl.$i", range(0, 49)),
            array_map(fn ($i) => "值 (波兰语) $i", range(0, 49))
        ),

        // Attribute value translations (Portuguese)
        'translations.pt.*' => '值 (葡萄牙语)',
        ...array_combine(
            array_map(fn ($i) => "translations.pt.$i", range(0, 49)),
            array_map(fn ($i) => "值 (葡萄牙语) $i", range(0, 49))
        ),

        // Attribute value translations (Russian)
        'translations.ru.*' => '值 (俄语)',
        ...array_combine(
            array_map(fn ($i) => "translations.ru.$i", range(0, 49)),
            array_map(fn ($i) => "值 (俄语) $i", range(0, 49))
        ),

        // Attribute value translations (Thai)
        'translations.th.*' => '值 (泰语)',
        ...array_combine(
            array_map(fn ($i) => "translations.th.$i", range(0, 49)),
            array_map(fn ($i) => "值 (泰语) $i", range(0, 49))
        ),

        // Attribute value translations (Turkish)
        'translations.tr.*' => '值 (土耳其语)',
        ...array_combine(
            array_map(fn ($i) => "translations.tr.$i", range(0, 49)),
            array_map(fn ($i) => "值 (土耳其语) $i", range(0, 49))
        ),

        // Attribute value translations (Vietnamese)
        'translations.vi.*' => '值 (越南语)',
        ...array_combine(
            array_map(fn ($i) => "translations.vi.$i", range(0, 49)),
            array_map(fn ($i) => "值 (越南语) $i", range(0, 49))
        ),

        // Attribute value translations (Chinese)
        'translations.zh.*' => '值 (中文)',
        ...array_combine(
            array_map(fn ($i) => "translations.zh.$i", range(0, 49)),
            array_map(fn ($i) => "值 (中文) $i", range(0, 49))
        ),

        // Translations for all supported languages

        // English
        'translations.en.name' => '姓名 (英文)',
        'translations.en.description' => '描述 (英文)',
        'translations.en.image' => '图片 (英文)',
        'translations.en.title' => '标题 (英文)',
        'translations.en.content' => '内容 (英文)',
        'languages.en.title' => '横幅标题 (英文)',
        'languages.en.description' => '横幅描述 (英文)',
        'languages.en.image' => '横幅图片 (英文)',
        'languages.en.name' => '平台名称 (英文)',
        'title.en' => '标题 (英文)',

        // Arabic
        'translations.ar.name' => '姓名 (阿拉伯语)',
        'translations.ar.description' => '描述 (阿拉伯语)',
        'translations.ar.image' => '图片 (阿拉伯语)',
        'translations.ar.title' => '标题 (阿拉伯语)',
        'translations.ar.content' => '内容 (阿拉伯语)',
        'languages.ar.title' => '横幅标题 (阿拉伯语)',
        'languages.ar.description' => '横幅描述 (阿拉伯语)',
        'languages.ar.image' => '横幅图片 (阿拉伯语)',
        'languages.ar.name' => '平台名称 (阿拉伯语)',
        'title.ar' => '标题 (阿拉伯语)',

        // German
        'translations.de.name' => '姓名 (德语)',
        'translations.de.description' => '描述 (德语)',
        'translations.de.image' => '图片 (德语)',
        'translations.de.title' => '标题 (德语)',
        'translations.de.content' => '内容 (德语)',
        'languages.de.title' => '横幅标题 (德语)',
        'languages.de.description' => '横幅描述 (德语)',
        'languages.de.image' => '横幅图片 (德语)',
        'languages.de.name' => '平台名称 (德语)',
        'title.de' => '标题 (德语)',

        // Spanish
        'translations.es.name' => '姓名 (西班牙语)',
        'translations.es.description' => '描述 (西班牙语)',
        'translations.es.image' => '图片 (西班牙语)',
        'translations.es.title' => '标题 (西班牙语)',
        'translations.es.content' => '内容 (西班牙语)',
        'languages.es.title' => '横幅标题 (西班牙语)',
        'languages.es.description' => '横幅描述 (西班牙语)',
        'languages.es.image' => '横幅图片 (西班牙语)',
        'languages.es.name' => '平台名称 (西班牙语)',
        'title.es' => '标题 (西班牙语)',

        // Persian
        'translations.fa.name' => '姓名 (波斯语)',
        'translations.fa.description' => '描述 (波斯语)',
        'translations.fa.image' => '图片 (波斯语)',
        'translations.fa.title' => '标题 (波斯语)',
        'translations.fa.content' => '内容 (波斯语)',
        'languages.fa.title' => '横幅标题 (波斯语)',
        'languages.fa.description' => '横幅描述 (波斯语)',
        'languages.fa.image' => '横幅图片 (波斯语)',
        'languages.fa.name' => '平台名称 (波斯语)',
        'title.fa' => '标题 (波斯语)',

        // French
        'translations.fr.name' => '姓名 (法语)',
        'translations.fr.description' => '描述 (法语)',
        'translations.fr.image' => '图片 (法语)',
        'translations.fr.title' => '标题 (法语)',
        'translations.fr.content' => '内容 (法语)',
        'languages.fr.title' => '横幅标题 (法语)',
        'languages.fr.description' => '横幅描述 (法语)',
        'languages.fr.image' => '横幅图片 (法语)',
        'languages.fr.name' => '平台名称 (法语)',
        'title.fr' => '标题 (法语)',

        // Hindi
        'translations.hi.name' => '姓名 (印地语)',
        'translations.hi.description' => '描述 (印地语)',
        'translations.hi.image' => '图片 (印地语)',
        'translations.hi.title' => '标题 (印地语)',
        'translations.hi.content' => '内容 (印地语)',
        'languages.hi.title' => '横幅标题 (印地语)',
        'languages.hi.description' => '横幅描述 (印地语)',
        'languages.hi.image' => '横幅图片 (印地语)',
        'languages.hi.name' => '平台名称 (印地语)',
        'title.hi' => '标题 (印地语)',

        // Indonesian
        'translations.id.name' => '姓名 (印度尼西亚语)',
        'translations.id.description' => '描述 (印度尼西亚语)',
        'translations.id.image' => '图片 (印度尼西亚语)',
        'translations.id.title' => '标题 (印度尼西亚语)',
        'translations.id.content' => '内容 (印度尼西亚语)',
        'languages.id.title' => '横幅标题 (印度尼西亚语)',
        'languages.id.description' => '横幅描述 (印度尼西亚语)',
        'languages.id.image' => '横幅图片 (印度尼西亚语)',
        'languages.id.name' => '平台名称 (印度尼西亚语)',
        'title.id' => '标题 (印度尼西亚语)',

        // Italian
        'translations.it.name' => '姓名 (意大利语)',
        'translations.it.description' => '描述 (意大利语)',
        'translations.it.image' => '图片 (意大利语)',
        'translations.it.title' => '标题 (意大利语)',
        'translations.it.content' => '内容 (意大利语)',
        'languages.it.title' => '横幅标题 (意大利语)',
        'languages.it.description' => '横幅描述 (意大利语)',
        'languages.it.image' => '横幅图片 (意大利语)',
        'languages.it.name' => '平台名称 (意大利语)',
        'title.it' => '标题 (意大利语)',

        // Japanese
        'translations.ja.name' => '姓名 (日语)',
        'translations.ja.description' => '描述 (日语)',
        'translations.ja.image' => '图片 (日语)',
        'translations.ja.title' => '标题 (日语)',
        'translations.ja.content' => '内容 (日语)',
        'languages.ja.title' => '横幅标题 (日语)',
        'languages.ja.description' => '横幅描述 (日语)',
        'languages.ja.image' => '横幅图片 (日语)',
        'languages.ja.name' => '平台名称 (日语)',
        'title.ja' => '标题 (日语)',

        // Korean
        'translations.ko.name' => '姓名 (韩语)',
        'translations.ko.description' => '描述 (韩语)',
        'translations.ko.image' => '图片 (韩语)',
        'translations.ko.title' => '标题 (韩语)',
        'translations.ko.content' => '内容 (韩语)',
        'languages.ko.title' => '横幅标题 (韩语)',
        'languages.ko.description' => '横幅描述 (韩语)',
        'languages.ko.image' => '横幅图片 (韩语)',
        'languages.ko.name' => '平台名称 (韩语)',
        'title.ko' => '标题 (韩语)',

        // Dutch
        'translations.nl.name' => '姓名 (荷兰语)',
        'translations.nl.description' => '描述 (荷兰语)',
        'translations.nl.image' => '图片 (荷兰语)',
        'translations.nl.title' => '标题 (荷兰语)',
        'translations.nl.content' => '内容 (荷兰语)',
        'languages.nl.title' => '横幅标题 (荷兰语)',
        'languages.nl.description' => '横幅描述 (荷兰语)',
        'languages.nl.image' => '横幅图片 (荷兰语)',
        'languages.nl.name' => '平台名称 (荷兰语)',
        'title.nl' => '标题 (荷兰语)',

        // Polish
        'translations.pl.name' => '姓名 (波兰语)',
        'translations.pl.description' => '描述 (波兰语)',
        'translations.pl.image' => '图片 (波兰语)',
        'translations.pl.title' => '标题 (波兰语)',
        'translations.pl.content' => '内容 (波兰语)',
        'languages.pl.title' => '横幅标题 (波兰语)',
        'languages.pl.description' => '横幅描述 (波兰语)',
        'languages.pl.image' => '横幅图片 (波兰语)',
        'languages.pl.name' => '平台名称 (波兰语)',
        'title.pl' => '标题 (波兰语)',

        // Portuguese
        'translations.pt.name' => '姓名 (葡萄牙语)',
        'translations.pt.description' => '描述 (葡萄牙语)',
        'translations.pt.image' => '图片 (葡萄牙语)',
        'translations.pt.title' => '标题 (葡萄牙语)',
        'translations.pt.content' => '内容 (葡萄牙语)',
        'languages.pt.title' => '横幅标题 (葡萄牙语)',
        'languages.pt.description' => '横幅描述 (葡萄牙语)',
        'languages.pt.image' => '横幅图片 (葡萄牙语)',
        'languages.pt.name' => '平台名称 (葡萄牙语)',
        'title.pt' => '标题 (葡萄牙语)',

        // Russian
        'translations.ru.name' => '姓名 (俄语)',
        'translations.ru.description' => '描述 (俄语)',
        'translations.ru.image' => '图片 (俄语)',
        'translations.ru.title' => '标题 (俄语)',
        'translations.ru.content' => '内容 (俄语)',
        'languages.ru.title' => '横幅标题 (俄语)',
        'languages.ru.description' => '横幅描述 (俄语)',
        'languages.ru.image' => '横幅图片 (俄语)',
        'languages.ru.name' => '平台名称 (俄语)',
        'title.ru' => '标题 (俄语)',

        // Thai
        'translations.th.name' => '姓名 (泰语)',
        'translations.th.description' => '描述 (泰语)',
        'translations.th.image' => '图片 (泰语)',
        'translations.th.title' => '标题 (泰语)',
        'translations.th.content' => '内容 (泰语)',
        'languages.th.title' => '横幅标题 (泰语)',
        'languages.th.description' => '横幅描述 (泰语)',
        'languages.th.image' => '横幅图片 (泰语)',
        'languages.th.name' => '平台名称 (泰语)',
        'title.th' => '标题 (泰语)',

        // Turkish
        'translations.tr.name' => '姓名 (土耳其语)',
        'translations.tr.description' => '描述 (土耳其语)',
        'translations.tr.image' => '图片 (土耳其语)',
        'translations.tr.title' => '标题 (土耳其语)',
        'translations.tr.content' => '内容 (土耳其语)',
        'languages.tr.title' => '横幅标题 (土耳其语)',
        'languages.tr.description' => '横幅描述 (土耳其语)',
        'languages.tr.image' => '横幅图片 (土耳其语)',
        'languages.tr.name' => '平台名称 (土耳其语)',
        'title.tr' => '标题 (土耳其语)',

        // Vietnamese
        'translations.vi.name' => '姓名 (越南语)',
        'translations.vi.description' => '描述 (越南语)',
        'translations.vi.image' => '图片 (越南语)',
        'translations.vi.title' => '标题 (越南语)',
        'translations.vi.content' => '内容 (越南语)',
        'languages.vi.title' => '横幅标题 (越南语)',
        'languages.vi.description' => '横幅描述 (越南语)',
        'languages.vi.image' => '横幅图片 (越南语)',
        'languages.vi.name' => '平台名称 (越南语)',
        'title.vi' => '标题 (越南语)',

        // Chinese
        'translations.zh.name' => '姓名 (中文)',
        'translations.zh.description' => '描述 (中文)',
        'translations.zh.image' => '图片 (中文)',
        'translations.zh.title' => '标题 (中文)',
        'translations.zh.content' => '内容 (中文)',
        'languages.zh.title' => '横幅标题 (中文)',
        'languages.zh.description' => '横幅描述 (中文)',
        'languages.zh.image' => '横幅图片 (中文)',
        'languages.zh.name' => '平台名称 (中文)',
        'title.zh' => '标题 (中文)',
    ],
];
