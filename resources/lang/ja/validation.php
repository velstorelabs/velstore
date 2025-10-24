<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    */

    'required' => ':attribute は必須です。',
    'string' => ':attribute は文字列でなければなりません。',
    'max' => ':attribute は :max 文字を超えることはできません。',
    'min' => ':attribute は少なくとも :min 文字である必要があります。',
    'image' => ':attribute は画像でなければなりません。',
    'mimes' => ':attribute は次のタイプのファイルでなければなりません: :values。',
    'array' => ':attribute は配列でなければなりません。',
    'numeric' => ':attribute は数字でなければなりません。',
    'integer' => ':attribute は整数でなければなりません。',
    'lte' => ':attribute は :value 以下でなければなりません。',
    'regex' => ':attribute の形式が無効です。',
    'confirmed' => ':attribute の確認が一致しません。',
    'incorrect_current_password' => '現在のパスワードが正しくありません。',

    'password' => [
        'letters' => ':attribute には少なくとも1文字のアルファベットを含める必要があります。',
        'mixed' => ':attribute には大文字と小文字の両方を含める必要があります。',
        'numbers' => ':attribute には少なくとも1つの数字を含める必要があります。',
        'symbols' => ':attribute には少なくとも1つの記号を含める必要があります。',
        'uncompromised' => ':attribute はデータ漏洩で発見されました。別の :attribute を選択してください。',
    ],

    'custom' => [
        'password' => [
            'confirmed' => 'パスワードの確認が一致しません。',
            'min' => 'パスワードは最低でも :min 文字である必要があります。',
            'symbols' => 'パスワードには少なくとも1つの記号を含める必要があります。',
        ],
        'phone' => [
            'regex' => '電話番号には数字、スペース、ハイフン、およびオプションの + 記号のみを含めることができます。',
        ],
        'email' => [
            'unique' => 'このメールアドレスは既に登録されています。',
        ],
        'status' => [
            'in' => '選択されたステータスは無効です。',
        ],
    ],

    'attributes' => [

        // Admin profile
        'current_password' => '現在のパスワード',
        'profile_image' => 'プロフィール画像',

        // Vendor fields
        'name' => '名前',
        'email' => 'メールアドレス',
        'password' => 'パスワード',
        'password_confirmation' => 'パスワード確認',
        'phone' => '電話番号',
        'status' => 'ステータス',

        // Social links
        'type' => 'プラットフォームタイプ',
        'platform' => 'プラットフォーム名',
        'link' => 'プラットフォームリンク',

        // Menu fields
        'title' => 'メニュータイトル',
        'order_number' => '注文番号',

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

        // Attribute name
        'name' => '属性名',

        // Attribute values
        'values.*' => '属性値',
        ...array_combine(
            array_map(fn ($i) => "values.$i", range(0, 49)),
            array_map(fn ($i) => "属性値 $i", range(0, 49))
        ),

        // Attribute value translations (English)
        'translations.en.*' => '値（英語）',
        ...array_combine(
            array_map(fn ($i) => "translations.en.$i", range(0, 49)),
            array_map(fn ($i) => "値（英語） $i", range(0, 49))
        ),

        // Attribute value translations (Arabic)
        'translations.ar.*' => '値（アラビア語）',
        ...array_combine(
            array_map(fn ($i) => "translations.ar.$i", range(0, 49)),
            array_map(fn ($i) => "値（アラビア語） $i", range(0, 49))
        ),

        // Attribute value translations (German)
        'translations.de.*' => '値（ドイツ語）',
        ...array_combine(
            array_map(fn ($i) => "translations.de.$i", range(0, 49)),
            array_map(fn ($i) => "値（ドイツ語） $i", range(0, 49))
        ),

        // Attribute value translations (Spanish)
        'translations.es.*' => '値（スペイン語）',
        ...array_combine(
            array_map(fn ($i) => "translations.es.$i", range(0, 49)),
            array_map(fn ($i) => "値（スペイン語） $i", range(0, 49))
        ),

        // Attribute value translations (Persian)
        'translations.fa.*' => '値（ペルシア語）',
        ...array_combine(
            array_map(fn ($i) => "translations.fa.$i", range(0, 49)),
            array_map(fn ($i) => "値（ペルシア語） $i", range(0, 49))
        ),

        // Attribute value translations (French)
        'translations.fr.*' => '値（フランス語）',
        ...array_combine(
            array_map(fn ($i) => "translations.fr.$i", range(0, 49)),
            array_map(fn ($i) => "値（フランス語） $i", range(0, 49))
        ),

        // Attribute value translations (Hindi)
        'translations.hi.*' => '値（ヒンディー語）',
        ...array_combine(
            array_map(fn ($i) => "translations.hi.$i", range(0, 49)),
            array_map(fn ($i) => "値（ヒンディー語） $i", range(0, 49))
        ),

        // Attribute value translations (Indonesian)
        'translations.id.*' => '値（インドネシア語）',
        ...array_combine(
            array_map(fn ($i) => "translations.id.$i", range(0, 49)),
            array_map(fn ($i) => "値（インドネシア語） $i", range(0, 49))
        ),

        // Attribute value translations (Italian)
        'translations.it.*' => '値（イタリア語）',
        ...array_combine(
            array_map(fn ($i) => "translations.it.$i", range(0, 49)),
            array_map(fn ($i) => "値（イタリア語） $i", range(0, 49))
        ),

        // Attribute value translations (Japanese)
        'translations.ja.*' => '値（日本語）',
        ...array_combine(
            array_map(fn ($i) => "translations.ja.$i", range(0, 49)),
            array_map(fn ($i) => "値（日本語） $i", range(0, 49))
        ),

        // Attribute value translations (Korean)
        'translations.ko.*' => '値（韓国語）',
        ...array_combine(
            array_map(fn ($i) => "translations.ko.$i", range(0, 49)),
            array_map(fn ($i) => "値（韓国語） $i", range(0, 49))
        ),

        // Attribute value translations (Dutch)
        'translations.nl.*' => '値（オランダ語）',
        ...array_combine(
            array_map(fn ($i) => "translations.nl.$i", range(0, 49)),
            array_map(fn ($i) => "値（オランダ語） $i", range(0, 49))
        ),

        // Attribute value translations (Polish)
        'translations.pl.*' => '値（ポーランド語）',
        ...array_combine(
            array_map(fn ($i) => "translations.pl.$i", range(0, 49)),
            array_map(fn ($i) => "値（ポーランド語） $i", range(0, 49))
        ),

        // Attribute value translations (Portuguese)
        'translations.pt.*' => '値（ポルトガル語）',
        ...array_combine(
            array_map(fn ($i) => "translations.pt.$i", range(0, 49)),
            array_map(fn ($i) => "値（ポルトガル語） $i", range(0, 49))
        ),

        // Attribute value translations (Russian)
        'translations.ru.*' => '値（ロシア語）',
        ...array_combine(
            array_map(fn ($i) => "translations.ru.$i", range(0, 49)),
            array_map(fn ($i) => "値（ロシア語） $i", range(0, 49))
        ),

        // Attribute value translations (Thai)
        'translations.th.*' => '値（タイ語）',
        ...array_combine(
            array_map(fn ($i) => "translations.th.$i", range(0, 49)),
            array_map(fn ($i) => "値（タイ語） $i", range(0, 49))
        ),

        // Attribute value translations (Turkish)
        'translations.tr.*' => '値（トルコ語）',
        ...array_combine(
            array_map(fn ($i) => "translations.tr.$i", range(0, 49)),
            array_map(fn ($i) => "値（トルコ語） $i", range(0, 49))
        ),

        // Attribute value translations (Vietnamese)
        'translations.vi.*' => '値（ベトナム語）',
        ...array_combine(
            array_map(fn ($i) => "translations.vi.$i", range(0, 49)),
            array_map(fn ($i) => "値（ベトナム語） $i", range(0, 49))
        ),

        // Attribute value translations (Chinese)
        'translations.zh.*' => '値（中国語）',
        ...array_combine(
            array_map(fn ($i) => "translations.zh.$i", range(0, 49)),
            array_map(fn ($i) => "値（中国語） $i", range(0, 49))
        ),

        // Translations for all supported languages (converted to Japanese equivalents)

        // English
        'translations.en.name' => '名前 (英語)',
        'translations.en.description' => '説明 (英語)',
        'translations.en.image' => '画像 (英語)',
        'translations.en.title' => 'タイトル (英語)',
        'translations.en.content' => 'コンテンツ (英語)',
        'languages.en.title' => 'バナータイトル (英語)',
        'languages.en.description' => 'バナー説明 (英語)',
        'languages.en.image' => 'バナー画像 (英語)',
        'languages.en.name' => 'プラットフォーム名 (英語)',
        'title.en' => 'タイトル (英語)',

        // Arabic
        'translations.ar.name' => '名前 (アラビア語)',
        'translations.ar.description' => '説明 (アラビア語)',
        'translations.ar.image' => '画像 (アラビア語)',
        'translations.ar.title' => 'タイトル (アラビア語)',
        'translations.ar.content' => 'コンテンツ (アラビア語)',
        'languages.ar.title' => 'バナータイトル (アラビア語)',
        'languages.ar.description' => 'バナー説明 (アラビア語)',
        'languages.ar.image' => 'バナー画像 (アラビア語)',
        'languages.ar.name' => 'プラットフォーム名 (アラビア語)',
        'title.ar' => 'タイトル (アラビア語)',

        // German
        'translations.de.name' => '名前 (ドイツ語)',
        'translations.de.description' => '説明 (ドイツ語)',
        'translations.de.image' => '画像 (ドイツ語)',
        'translations.de.title' => 'タイトル (ドイツ語)',
        'translations.de.content' => 'コンテンツ (ドイツ語)',
        'languages.de.title' => 'バナータイトル (ドイツ語)',
        'languages.de.description' => 'バナー説明 (ドイツ語)',
        'languages.de.image' => 'バナー画像 (ドイツ語)',
        'languages.de.name' => 'プラットフォーム名 (ドイツ語)',
        'title.de' => 'タイトル (ドイツ語)',

        // Spanish
        'translations.es.name' => '名前 (スペイン語)',
        'translations.es.description' => '説明 (スペイン語)',
        'translations.es.image' => '画像 (スペイン語)',
        'translations.es.title' => 'タイトル (スペイン語)',
        'translations.es.content' => 'コンテンツ (スペイン語)',
        'languages.es.title' => 'バナータイトル (スペイン語)',
        'languages.es.description' => 'バナー説明 (スペイン語)',
        'languages.es.image' => 'バナー画像 (スペイン語)',
        'languages.es.name' => 'プラットフォーム名 (スペイン語)',
        'title.es' => 'タイトル (スペイン語)',

        // Persian
        'translations.fa.name' => '名前 (ペルシャ語)',
        'translations.fa.description' => '説明 (ペルシャ語)',
        'translations.fa.image' => '画像 (ペルシャ語)',
        'translations.fa.title' => 'タイトル (ペルシャ語)',
        'translations.fa.content' => 'コンテンツ (ペルシャ語)',
        'languages.fa.title' => 'バナータイトル (ペルシャ語)',
        'languages.fa.description' => 'バナー説明 (ペルシャ語)',
        'languages.fa.image' => 'バナー画像 (ペルシャ語)',
        'languages.fa.name' => 'プラットフォーム名 (ペルシャ語)',
        'title.fa' => 'タイトル (ペルシャ語)',

        // French
        'translations.fr.name' => '名前 (フランス語)',
        'translations.fr.description' => '説明 (フランス語)',
        'translations.fr.image' => '画像 (フランス語)',
        'translations.fr.title' => 'タイトル (フランス語)',
        'translations.fr.content' => 'コンテンツ (フランス語)',
        'languages.fr.title' => 'バナータイトル (フランス語)',
        'languages.fr.description' => 'バナー説明 (フランス語)',
        'languages.fr.image' => 'バナー画像 (フランス語)',
        'languages.fr.name' => 'プラットフォーム名 (フランス語)',
        'title.fr' => 'タイトル (フランス語)',

        // Hindi
        'translations.hi.name' => '名前 (ヒンディー語)',
        'translations.hi.description' => '説明 (ヒンディー語)',
        'translations.hi.image' => '画像 (ヒンディー語)',
        'translations.hi.title' => 'タイトル (ヒンディー語)',
        'translations.hi.content' => 'コンテンツ (ヒンディー語)',
        'languages.hi.title' => 'バナータイトル (ヒンディー語)',
        'languages.hi.description' => 'バナー説明 (ヒンディー語)',
        'languages.hi.image' => 'バナー画像 (ヒンディー語)',
        'languages.hi.name' => 'プラットフォーム名 (ヒンディー語)',
        'title.hi' => 'タイトル (ヒンディー語)',

        // Indonesian
        'translations.id.name' => '名前 (インドネシア語)',
        'translations.id.description' => '説明 (インドネシア語)',
        'translations.id.image' => '画像 (インドネシア語)',
        'translations.id.title' => 'タイトル (インドネシア語)',
        'translations.id.content' => 'コンテンツ (インドネシア語)',
        'languages.id.title' => 'バナータイトル (インドネシア語)',
        'languages.id.description' => 'バナー説明 (インドネシア語)',
        'languages.id.image' => 'バナー画像 (インドネシア語)',
        'languages.id.name' => 'プラットフォーム名 (インドネシア語)',
        'title.id' => 'タイトル (インドネシア語)',

        // Italian
        'translations.it.name' => '名前 (イタリア語)',
        'translations.it.description' => '説明 (イタリア語)',
        'translations.it.image' => '画像 (イタリア語)',
        'translations.it.title' => 'タイトル (イタリア語)',
        'translations.it.content' => 'コンテンツ (イタリア語)',
        'languages.it.title' => 'バナータイトル (イタリア語)',
        'languages.it.description' => 'バナー説明 (イタリア語)',
        'languages.it.image' => 'バナー画像 (イタリア語)',
        'languages.it.name' => 'プラットフォーム名 (イタリア語)',
        'title.it' => 'タイトル (イタリア語)',

        // Japanese
        'translations.ja.name' => '名前 (日本語)',
        'translations.ja.description' => '説明 (日本語)',
        'translations.ja.image' => '画像 (日本語)',
        'translations.ja.title' => 'タイトル (日本語)',
        'translations.ja.content' => 'コンテンツ (日本語)',
        'languages.ja.title' => 'バナータイトル (日本語)',
        'languages.ja.description' => 'バナー説明 (日本語)',
        'languages.ja.image' => 'バナー画像 (日本語)',
        'languages.ja.name' => 'プラットフォーム名 (日本語)',
        'title.ja' => 'タイトル (日本語)',

        // Korean
        'translations.ko.name' => '名前 (韓国語)',
        'translations.ko.description' => '説明 (韓国語)',
        'translations.ko.image' => '画像 (韓国語)',
        'translations.ko.title' => 'タイトル (韓国語)',
        'translations.ko.content' => 'コンテンツ (韓国語)',
        'languages.ko.title' => 'バナータイトル (韓国語)',
        'languages.ko.description' => 'バナー説明 (韓国語)',
        'languages.ko.image' => 'バナー画像 (韓国語)',
        'languages.ko.name' => 'プラットフォーム名 (韓国語)',
        'title.ko' => 'タイトル (韓国語)',

        // Dutch
        'translations.nl.name' => '名前 (オランダ語)',
        'translations.nl.description' => '説明 (オランダ語)',
        'translations.nl.image' => '画像 (オランダ語)',
        'translations.nl.title' => 'タイトル (オランダ語)',
        'translations.nl.content' => 'コンテンツ (オランダ語)',
        'languages.nl.title' => 'バナータイトル (オランダ語)',
        'languages.nl.description' => 'バナー説明 (オランダ語)',
        'languages.nl.image' => 'バナー画像 (オランダ語)',
        'languages.nl.name' => 'プラットフォーム名 (オランダ語)',
        'title.nl' => 'タイトル (オランダ語)',

        // Polish
        'translations.pl.name' => '名前 (ポーランド語)',
        'translations.pl.description' => '説明 (ポーランド語)',
        'translations.pl.image' => '画像 (ポーランド語)',
        'translations.pl.title' => 'タイトル (ポーランド語)',
        'translations.pl.content' => 'コンテンツ (ポーランド語)',
        'languages.pl.title' => 'バナータイトル (ポーランド語)',
        'languages.pl.description' => 'バナー説明 (ポーランド語)',
        'languages.pl.image' => 'バナー画像 (ポーランド語)',
        'languages.pl.name' => 'プラットフォーム名 (ポーランド語)',
        'title.pl' => 'タイトル (ポーランド語)',

        // Portuguese
        'translations.pt.name' => '名前 (ポルトガル語)',
        'translations.pt.description' => '説明 (ポルトガル語)',
        'translations.pt.image' => '画像 (ポルトガル語)',
        'translations.pt.title' => 'タイトル (ポルトガル語)',
        'translations.pt.content' => 'コンテンツ (ポルトガル語)',
        'languages.pt.title' => 'バナータイトル (ポルトガル語)',
        'languages.pt.description' => 'バナー説明 (ポルトガル語)',
        'languages.pt.image' => 'バナー画像 (ポルトガル語)',
        'languages.pt.name' => 'プラットフォーム名 (ポルトガル語)',
        'title.pt' => 'タイトル (ポルトガル語)',

        // Russian
        'translations.ru.name' => '名前 (ロシア語)',
        'translations.ru.description' => '説明 (ロシア語)',
        'translations.ru.image' => '画像 (ロシア語)',
        'translations.ru.title' => 'タイトル (ロシア語)',
        'translations.ru.content' => 'コンテンツ (ロシア語)',
        'languages.ru.title' => 'バナータイトル (ロシア語)',
        'languages.ru.description' => 'バナー説明 (ロシア語)',
        'languages.ru.image' => 'バナー画像 (ロシア語)',
        'languages.ru.name' => 'プラットフォーム名 (ロシア語)',
        'title.ru' => 'タイトル (ロシア語)',

        // Thai
        'translations.th.name' => '名前 (タイ語)',
        'translations.th.description' => '説明 (タイ語)',
        'translations.th.image' => '画像 (タイ語)',
        'translations.th.title' => 'タイトル (タイ語)',
        'translations.th.content' => 'コンテンツ (タイ語)',
        'languages.th.title' => 'バナータイトル (タイ語)',
        'languages.th.description' => 'バナー説明 (タイ語)',
        'languages.th.image' => 'バナー画像 (タイ語)',
        'languages.th.name' => 'プラットフォーム名 (タイ語)',
        'title.th' => 'タイトル (タイ語)',

        // Turkish
        'translations.tr.name' => '名前 (トルコ語)',
        'translations.tr.description' => '説明 (トルコ語)',
        'translations.tr.image' => '画像 (トルコ語)',
        'translations.tr.title' => 'タイトル (トルコ語)',
        'translations.tr.content' => 'コンテンツ (トルコ語)',
        'languages.tr.title' => 'バナータイトル (トルコ語)',
        'languages.tr.description' => 'バナー説明 (トルコ語)',
        'languages.tr.image' => 'バナー画像 (トルコ語)',
        'languages.tr.name' => 'プラットフォーム名 (トルコ語)',
        'title.tr' => 'タイトル (トルコ語)',

        // Vietnamese
        'translations.vi.name' => '名前 (ベトナム語)',
        'translations.vi.description' => '説明 (ベトナム語)',
        'translations.vi.image' => '画像 (ベトナム語)',
        'translations.vi.title' => 'タイトル (ベトナム語)',
        'translations.vi.content' => 'コンテンツ (ベトナム語)',
        'languages.vi.title' => 'バナータイトル (ベトナム語)',
        'languages.vi.description' => 'バナー説明 (ベトナム語)',
        'languages.vi.image' => 'バナー画像 (ベトナム語)',
        'languages.vi.name' => 'プラットフォーム名 (ベトナム語)',
        'title.vi' => 'タイトル (ベトナム語)',

        // Chinese
        'translations.zh.name' => '名前 (中国語)',
        'translations.zh.description' => '説明 (中国語)',
        'translations.zh.image' => '画像 (中国語)',
        'translations.zh.title' => 'タイトル (中国語)',
        'translations.zh.content' => 'コンテンツ (中国語)',
        'languages.zh.title' => 'バナータイトル (中国語)',
        'languages.zh.description' => 'バナー説明 (中国語)',
        'languages.zh.image' => 'バナー画像 (中国語)',
        'languages.zh.name' => 'プラットフォーム名 (中国語)',
        'title.zh' => 'タイトル (中国語)',
    ],
];
