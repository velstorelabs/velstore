<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    */

    'required' => 'Trường :attribute là bắt buộc.',
    'string' => ':attribute phải là chuỗi ký tự.',
    'max' => ':attribute không được nhiều hơn :max ký tự.',
    'min' => ':attribute phải có ít nhất :min ký tự.',
    'image' => ':attribute phải là một tệp hình ảnh.',
    'mimes' => ':attribute phải là tệp thuộc loại: :values.',
    'array' => ':attribute phải là một mảng.',
    'numeric' => ':attribute phải là số.',
    'integer' => ':attribute phải là số nguyên.',
    'lte' => ':attribute phải nhỏ hơn hoặc bằng :value.',

    /*
    |--------------------------------------------------------------------------
    | Custom Attributes
    |--------------------------------------------------------------------------
    |
    | Here we define custom attribute names for multiple languages.
    | This way validation messages are more readable.
    |
    */

    'attributes' => [

        // Translations for all supported languages
        'translations.en.name' => 'Tên (Tiếng Anh)',
        'translations.en.description' => 'Mô tả (Tiếng Anh)',
        'translations.en.image' => 'Hình ảnh (Tiếng Anh)',

        'translations.ar.name' => 'Tên (Tiếng Ả Rập)',
        'translations.ar.description' => 'Mô tả (Tiếng Ả Rập)',
        'translations.ar.image' => 'Hình ảnh (Tiếng Ả Rập)',

        'translations.de.name' => 'Tên (Tiếng Đức)',
        'translations.de.description' => 'Mô tả (Tiếng Đức)',
        'translations.de.image' => 'Hình ảnh (Tiếng Đức)',

        'translations.es.name' => 'Tên (Tiếng Tây Ban Nha)',
        'translations.es.description' => 'Mô tả (Tiếng Tây Ban Nha)',
        'translations.es.image' => 'Hình ảnh (Tiếng Tây Ban Nha)',

        'translations.fa.name' => 'Tên (Tiếng Ba Tư)',
        'translations.fa.description' => 'Mô tả (Tiếng Ba Tư)',
        'translations.fa.image' => 'Hình ảnh (Tiếng Ba Tư)',

        'translations.fr.name' => 'Tên (Tiếng Pháp)',
        'translations.fr.description' => 'Mô tả (Tiếng Pháp)',
        'translations.fr.image' => 'Hình ảnh (Tiếng Pháp)',

        'translations.hi.name' => 'Tên (Tiếng Hindi)',
        'translations.hi.description' => 'Mô tả (Tiếng Hindi)',
        'translations.hi.image' => 'Hình ảnh (Tiếng Hindi)',

        'translations.id.name' => 'Tên (Tiếng Indonesia)',
        'translations.id.description' => 'Mô tả (Tiếng Indonesia)',
        'translations.id.image' => 'Hình ảnh (Tiếng Indonesia)',

        'translations.it.name' => 'Tên (Tiếng Ý)',
        'translations.it.description' => 'Mô tả (Tiếng Ý)',
        'translations.it.image' => 'Hình ảnh (Tiếng Ý)',

        'translations.ja.name' => 'Tên (Tiếng Nhật)',
        'translations.ja.description' => 'Mô tả (Tiếng Nhật)',
        'translations.ja.image' => 'Hình ảnh (Tiếng Nhật)',

        'translations.ko.name' => 'Tên (Tiếng Hàn)',
        'translations.ko.description' => 'Mô tả (Tiếng Hàn)',
        'translations.ko.image' => 'Hình ảnh (Tiếng Hàn)',

        'translations.nl.name' => 'Tên (Tiếng Hà Lan)',
        'translations.nl.description' => 'Mô tả (Tiếng Hà Lan)',
        'translations.nl.image' => 'Hình ảnh (Tiếng Hà Lan)',

        'translations.pl.name' => 'Tên (Tiếng Ba Lan)',
        'translations.pl.description' => 'Mô tả (Tiếng Ba Lan)',
        'translations.pl.image' => 'Hình ảnh (Tiếng Ba Lan)',

        'translations.pt.name' => 'Tên (Tiếng Bồ Đào Nha)',
        'translations.pt.description' => 'Mô tả (Tiếng Bồ Đào Nha)',
        'translations.pt.image' => 'Hình ảnh (Tiếng Bồ Đào Nha)',

        'translations.ru.name' => 'Tên (Tiếng Nga)',
        'translations.ru.description' => 'Mô tả (Tiếng Nga)',
        'translations.ru.image' => 'Hình ảnh (Tiếng Nga)',

        'translations.th.name' => 'Tên (Tiếng Thái)',
        'translations.th.description' => 'Mô tả (Tiếng Thái)',
        'translations.th.image' => 'Hình ảnh (Tiếng Thái)',

        'translations.tr.name' => 'Tên (Tiếng Thổ Nhĩ Kỳ)',
        'translations.tr.description' => 'Mô tả (Tiếng Thổ Nhĩ Kỳ)',
        'translations.tr.image' => 'Hình ảnh (Tiếng Thổ Nhĩ Kỳ)',

        'translations.vi.name' => 'Tên (Tiếng Việt)',
        'translations.vi.description' => 'Mô tả (Tiếng Việt)',
        'translations.vi.image' => 'Hình ảnh (Tiếng Việt)',

        'translations.zh.name' => 'Tên (Tiếng Trung)',
        'translations.zh.description' => 'Mô tả (Tiếng Trung)',
        'translations.zh.image' => 'Hình ảnh (Tiếng Trung)',

        // Dynamic variants
        'variants.*.name' => 'Tên biến thể',
        'variants.*.price' => 'Giá biến thể',
        'variants.*.discount_price' => 'Giá giảm của biến thể',
        'variants.*.stock' => 'Kho biến thể',
        'variants.*.SKU' => 'Mã SKU biến thể',
        'variants.*.barcode' => 'Mã vạch biến thể',
        'variants.*.weight' => 'Trọng lượng biến thể',
        'variants.*.dimensions' => 'Kích thước biến thể',
        'variants.*.language_code' => 'Mã ngôn ngữ biến thể',
        'variants.*.size_id' => 'Kích cỡ biến thể',
        'variants.*.color_id' => 'Màu sắc biến thể',
    ],
];
