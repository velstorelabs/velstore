<?php

return [

    'categories' => [
        'translations' => [
            'name' => [
                'required' => 'translations.en.name フィールドは必須です。',
                'string' => 'translations.en.name フィールドは文字列である必要があります。',
                'max' => 'translations.en.name フィールドは :max 文字を超えてはいけません。',
            ],
            'description' => [
                'required' => 'translations.en.description フィールドは必須です。',
                'string' => 'translations.en.description フィールドは文字列である必要があります。',
                'min' => 'translations.en.description フィールドは少なくとも :min 文字である必要があります。',
            ],
            'image' => [
                'required' => 'translations.en.image フィールドは必須です。',
                'image' => 'translations.en.image フィールドは画像である必要があります。',
                'mimes' => 'translations.en.image フィールドは次のタイプのファイルである必要があります: :values。',
                'max' => 'translations.en.image フィールドは :max キロバイトを超えてはいけません。',
            ],
        ],
    ],
];
