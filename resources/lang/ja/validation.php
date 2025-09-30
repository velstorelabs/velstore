<?php

return [

    /*
    |--------------------------------------------------------------------------
    | バリデーション言語行
    |--------------------------------------------------------------------------
    */

    'required' => ':attribute は必須項目です。',
    'string' => ':attribute は文字列でなければなりません。',
    'max' => ':attribute は :max 文字以内でなければなりません。',
    'min' => ':attribute は少なくとも :min 文字でなければなりません。',
    'image' => ':attribute は画像でなければなりません。',
    'mimes' => ':attribute は次のタイプのファイルでなければなりません: :values。',
    'array' => ':attribute は配列でなければなりません。',
    'numeric' => ':attribute は数値でなければなりません。',
    'integer' => ':attribute は整数でなければなりません。',
    'lte' => ':attribute は :value 以下でなければなりません。',

    /*
    |--------------------------------------------------------------------------
    | カスタム属性
    |--------------------------------------------------------------------------
    |
    | 複数の言語でカスタム属性名を定義します。
    | これにより、バリデーションメッセージがより読みやすくなります。
    |
    */

    'attributes' => [

        // サポートされているすべての言語の翻訳
        'translations.en.name' => '名前 (英語)',
        'translations.en.description' => '説明 (英語)',
        'translations.en.image' => '画像 (英語)',

        'translations.ar.name' => '名前 (アラビア語)',
        'translations.ar.description' => '説明 (アラビア語)',
        'translations.ar.image' => '画像 (アラビア語)',

        'translations.de.name' => '名前 (ドイツ語)',
        'translations.de.description' => '説明 (ドイツ語)',
        'translations.de.image' => '画像 (ドイツ語)',

        'translations.es.name' => '名前 (スペイン語)',
        'translations.es.description' => '説明 (スペイン語)',
        'translations.es.image' => '画像 (スペイン語)',

        'translations.fa.name' => '名前 (ペルシア語)',
        'translations.fa.description' => '説明 (ペルシア語)',
        'translations.fa.image' => '画像 (ペルシア語)',

        'translations.fr.name' => '名前 (フランス語)',
        'translations.fr.description' => '説明 (フランス語)',
        'translations.fr.image' => '画像 (フランス語)',

        'translations.hi.name' => '名前 (ヒンディー語)',
        'translations.hi.description' => '説明 (ヒンディー語)',
        'translations.hi.image' => '画像 (ヒンディー語)',

        'translations.id.name' => '名前 (インドネシア語)',
        'translations.id.description' => '説明 (インドネシア語)',
        'translations.id.image' => '画像 (インドネシア語)',

        'translations.it.name' => '名前 (イタリア語)',
        'translations.it.description' => '説明 (イタリア語)',
        'translations.it.image' => '画像 (イタリア語)',

        'translations.ja.name' => '名前 (日本語)',
        'translations.ja.description' => '説明 (日本語)',
        'translations.ja.image' => '画像 (日本語)',

        'translations.ko.name' => '名前 (韓国語)',
        'translations.ko.description' => '説明 (韓国語)',
        'translations.ko.image' => '画像 (韓国語)',

        'translations.nl.name' => '名前 (オランダ語)',
        'translations.nl.description' => '説明 (オランダ語)',
        'translations.nl.image' => '画像 (オランダ語)',

        'translations.pl.name' => '名前 (ポーランド語)',
        'translations.pl.description' => '説明 (ポーランド語)',
        'translations.pl.image' => '画像 (ポーランド語)',

        'translations.pt.name' => '名前 (ポルトガル語)',
        'translations.pt.description' => '説明 (ポルトガル語)',
        'translations.pt.image' => '画像 (ポルトガル語)',

        'translations.ru.name' => '名前 (ロシア語)',
        'translations.ru.description' => '説明 (ロシア語)',
        'translations.ru.image' => '画像 (ロシア語)',

        'translations.th.name' => '名前 (タイ語)',
        'translations.th.description' => '説明 (タイ語)',
        'translations.th.image' => '画像 (タイ語)',

        'translations.tr.name' => '名前 (トルコ語)',
        'translations.tr.description' => '説明 (トルコ語)',
        'translations.tr.image' => '画像 (トルコ語)',

        'translations.vi.name' => '名前 (ベトナム語)',
        'translations.vi.description' => '説明 (ベトナム語)',
        'translations.vi.image' => '画像 (ベトナム語)',

        'translations.zh.name' => '名前 (中国語)',
        'translations.zh.description' => '説明 (中国語)',
        'translations.zh.image' => '画像 (中国語)',

        // 動的バリエーション
        'variants.*.name' => 'バリアント名',
        'variants.*.price' => 'バリアント価格',
        'variants.*.discount_price' => 'バリアント割引価格',
        'variants.*.stock' => 'バリアント在庫',
        'variants.*.SKU' => 'バリアントSKU',
        'variants.*.barcode' => 'バリアントバーコード',
        'variants.*.weight' => 'バリアント重量',
        'variants.*.dimensions' => 'バリアント寸法',
        'variants.*.language_code' => 'バリアント言語コード',
        'variants.*.size_id' => 'バリアントサイズ',
        'variants.*.color_id' => 'バリアントカラー',
    ],
];
