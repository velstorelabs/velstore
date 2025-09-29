<?php

return [

    'categories' => [
        'translations' => [
            'name' => [
                'required' => 'translations.en.name 字段为必填项。',
                'string' => 'translations.en.name 字段必须是字符串。',
                'max' => 'translations.en.name 字段不能超过 :max 个字符。',
            ],
            'description' => [
                'required' => 'translations.en.description 字段为必填项。',
                'string' => 'translations.en.description 字段必须是字符串。',
                'min' => 'translations.en.description 字段至少需要 :min 个字符。',
            ],
            'image' => [
                'required' => 'translations.en.image 字段为必填项。',
                'image' => 'translations.en.image 字段必须是图片。',
                'mimes' => 'translations.en.image 字段必须是以下类型的文件: :values。',
                'max' => 'translations.en.image 字段不能大于 :max KB。',
            ],
        ],
    ],
];
