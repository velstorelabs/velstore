<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    */

    'required' => ':attribute は必須項目です。',
    'string' => ':attribute は文字列でなければなりません。',
    'max' => ':attribute は :max 文字以内で入力してください。',
    'min' => ':attribute は最低 :min 文字必要です。',
    'image' => ':attribute は画像でなければなりません。',
    'mimes' => ':attribute は :values タイプのファイルでなければなりません。',
    'array' => ':attribute は配列でなければなりません。',
    'numeric' => ':attribute は数字でなければなりません。',
    'integer' => ':attribute は整数でなければなりません。',
    'lte' => ':attribute は :value 以下でなければなりません。',

    /*
    |--------------------------------------------------------------------------
    | Custom Attributes
    |--------------------------------------------------------------------------
    |
    | ここではすべてのフィールドのカスタム属性名を定義します。
    | これにより、バリデーションメッセージがより読みやすくなります。
    |
    */

    'attributes' => [

        // Vendor fields
        'name' => '名前',
        'email' => 'メールアドレス',
        'password' => 'パスワード',
        'password_confirmation' => 'パスワード確認',
        'phone' => '電話番号',
        'status' => 'ステータス',

        // Dynamic variants
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

        // Translations for all supported languages

        // English
        'translations.en.name' => '名前 (英語)',
        'translations.en.description' => '説明 (英語)',
        'translations.en.image' => '画像 (英語)',
        'languages.en.title' => 'バナータイトル (英語)',
        'languages.en.description' => 'バナー説明 (英語)',
        'languages.en.image' => 'バナー画像 (英語)',

        // Arabic
        'translations.ar.name' => '名前 (アラビア語)',
        'translations.ar.description' => '説明 (アラビア語)',
        'translations.ar.image' => '画像 (アラビア語)',
        'languages.ar.title' => 'バナータイトル (アラビア語)',
        'languages.ar.description' => 'バナー説明 (アラビア語)',
        'languages.ar.image' => 'バナー画像 (アラビア語)',

        // German
        'translations.de.name' => '名前 (ドイツ語)',
        'translations.de.description' => '説明 (ドイツ語)',
        'translations.de.image' => '画像 (ドイツ語)',
        'languages.de.title' => 'バナータイトル (ドイツ語)',
        'languages.de.description' => 'バナー説明 (ドイツ語)',
        'languages.de.image' => 'バナー画像 (ドイツ語)',

        // Spanish
        'translations.es.name' => '名前 (スペイン語)',
        'translations.es.description' => '説明 (スペイン語)',
        'translations.es.image' => '画像 (スペイン語)',
        'languages.es.title' => 'バナータイトル (スペイン語)',
        'languages.es.description' => 'バナー説明 (スペイン語)',
        'languages.es.image' => 'バナー画像 (スペイン語)',

        // Persian
        'translations.fa.name' => '名前 (ペルシャ語)',
        'translations.fa.description' => '説明 (ペルシャ語)',
        'translations.fa.image' => '画像 (ペルシャ語)',
        'languages.fa.title' => 'バナータイトル (ペルシャ語)',
        'languages.fa.description' => 'バナー説明 (ペルシャ語)',
        'languages.fa.image' => 'バナー画像 (ペルシャ語)',

        // French
        'translations.fr.name' => '名前 (フランス語)',
        'translations.fr.description' => '説明 (フランス語)',
        'translations.fr.image' => '画像 (フランス語)',
        'languages.fr.title' => 'バナータイトル (フランス語)',
        'languages.fr.description' => 'バナー説明 (フランス語)',
        'languages.fr.image' => 'バナー画像 (フランス語)',

        // Hindi
        'translations.hi.name' => '名前 (ヒンディー語)',
        'translations.hi.description' => '説明 (ヒンディー語)',
        'translations.hi.image' => '画像 (ヒンディー語)',
        'languages.hi.title' => 'バナータイトル (ヒンディー語)',
        'languages.hi.description' => 'バナー説明 (ヒンディー語)',
        'languages.hi.image' => 'バナー画像 (ヒンディー語)',

        // Indonesian
        'translations.id.name' => '名前 (インドネシア語)',
        'translations.id.description' => '説明 (インドネシア語)',
        'translations.id.image' => '画像 (インドネシア語)',
        'languages.id.title' => 'バナータイトル (インドネシア語)',
        'languages.id.description' => 'バナー説明 (インドネシア語)',
        'languages.id.image' => 'バナー画像 (インドネシア語)',

        // Italian
        'translations.it.name' => '名前 (イタリア語)',
        'translations.it.description' => '説明 (イタリア語)',
        'translations.it.image' => '画像 (イタリア語)',
        'languages.it.title' => 'バナータイトル (イタリア語)',
        'languages.it.description' => 'バナー説明 (イタリア語)',
        'languages.it.image' => 'バナー画像 (イタリア語)',

        // Japanese
        'translations.ja.name' => '名前 (日本語)',
        'translations.ja.description' => '説明 (日本語)',
        'translations.ja.image' => '画像 (日本語)',
        'languages.ja.title' => 'バナータイトル (日本語)',
        'languages.ja.description' => 'バナー説明 (日本語)',
        'languages.ja.image' => 'バナー画像 (日本語)',

        // Korean
        'translations.ko.name' => '名前 (韓国語)',
        'translations.ko.description' => '説明 (韓国語)',
        'translations.ko.image' => '画像 (韓国語)',
        'languages.ko.title' => 'バナータイトル (韓国語)',
        'languages.ko.description' => 'バナー説明 (韓国語)',
        'languages.ko.image' => 'バナー画像 (韓国語)',

        // Dutch
        'translations.nl.name' => '名前 (オランダ語)',
        'translations.nl.description' => '説明 (オランダ語)',
        'translations.nl.image' => '画像 (オランダ語)',
        'languages.nl.title' => 'バナータイトル (オランダ語)',
        'languages.nl.description' => 'バナー説明 (オランダ語)',
        'languages.nl.image' => 'バナー画像 (オランダ語)',

        // Polish
        'translations.pl.name' => '名前 (ポーランド語)',
        'translations.pl.description' => '説明 (ポーランド語)',
        'translations.pl.image' => '画像 (ポーランド語)',
        'languages.pl.title' => 'バナータイトル (ポーランド語)',
        'languages.pl.description' => 'バナー説明 (ポーランド語)',
        'languages.pl.image' => 'バナー画像 (ポーランド語)',

        // Portuguese
        'translations.pt.name' => '名前 (ポルトガル語)',
        'translations.pt.description' => '説明 (ポルトガル語)',
        'translations.pt.image' => '画像 (ポルトガル語)',
        'languages.pt.title' => 'バナータイトル (ポルトガル語)',
        'languages.pt.description' => 'バナー説明 (ポルトガル語)',
        'languages.pt.image' => 'バナー画像 (ポルトガル語)',

        // Russian
        'translations.ru.name' => '名前 (ロシア語)',
        'translations.ru.description' => '説明 (ロシア語)',
        'translations.ru.image' => '画像 (ロシア語)',
        'languages.ru.title' => 'バナータイトル (ロシア語)',
        'languages.ru.description' => 'バナー説明 (ロシア語)',
        'languages.ru.image' => 'バナー画像 (ロシア語)',

        // Thai
        'translations.th.name' => '名前 (タイ語)',
        'translations.th.description' => '説明 (タイ語)',
        'translations.th.image' => '画像 (タイ語)',
        'languages.th.title' => 'バナータイトル (タイ語)',
        'languages.th.description' => 'バナー説明 (タイ語)',
        'languages.th.image' => 'バナー画像 (タイ語)',

        // Turkish
        'translations.tr.name' => '名前 (トルコ語)',
        'translations.tr.description' => '説明 (トルコ語)',
        'translations.tr.image' => '画像 (トルコ語)',
        'languages.tr.title' => 'バナータイトル (トルコ語)',
        'languages.tr.description' => 'バナー説明 (トルコ語)',
        'languages.tr.image' => 'バナー画像 (トルコ語)',

        // Vietnamese
        'translations.vi.name' => '名前 (ベトナム語)',
        'translations.vi.description' => '説明 (ベトナム語)',
        'translations.vi.image' => '画像 (ベトナム語)',
        'languages.vi.title' => 'バナータイトル (ベトナム語)',
        'languages.vi.description' => 'バナー説明 (ベトナム語)',
        'languages.vi.image' => 'バナー画像 (ベトナム語)',

        // Chinese
        'translations.zh.name' => '名前 (中国語)',
        'translations.zh.description' => '説明 (中国語)',
        'translations.zh.image' => '画像 (中国語)',
        'languages.zh.title' => 'バナータイトル (中国語)',
        'languages.zh.description' => 'バナー説明 (中国語)',
        'languages.zh.image' => 'バナー画像 (中国語)',
    ],
];
