<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    */

    'required' => 'Trường :attribute là bắt buộc.',
    'string' => 'Trường :attribute phải là chuỗi ký tự.',
    'max' => 'Trường :attribute không được lớn hơn :max ký tự.',
    'min' => 'Trường :attribute phải có ít nhất :min ký tự.',
    'image' => 'Trường :attribute phải là hình ảnh.',
    'mimes' => 'Trường :attribute phải là tập tin kiểu: :values.',
    'array' => 'Trường :attribute phải là mảng.',
    'numeric' => 'Trường :attribute phải là số.',
    'integer' => 'Trường :attribute phải là số nguyên.',
    'lte' => 'Trường :attribute phải nhỏ hơn hoặc bằng :value.',

    /*
    |--------------------------------------------------------------------------
    | Custom Attributes
    |--------------------------------------------------------------------------
    |
    | Xác định tên thuộc tính tùy chỉnh để làm cho thông báo validation dễ đọc hơn.
    |
    */

    'attributes' => [

        // Vendor fields
        'name' => 'Tên',
        'email' => 'Email',
        'password' => 'Mật khẩu',
        'password_confirmation' => 'Xác nhận mật khẩu',
        'phone' => 'Số điện thoại',
        'status' => 'Trạng thái',

        // Dynamic variants
        'variants.*.name' => 'Tên biến thể',
        'variants.*.price' => 'Giá biến thể',
        'variants.*.discount_price' => 'Giá giảm biến thể',
        'variants.*.stock' => 'Kho biến thể',
        'variants.*.SKU' => 'SKU biến thể',
        'variants.*.barcode' => 'Mã vạch biến thể',
        'variants.*.weight' => 'Trọng lượng biến thể',
        'variants.*.dimensions' => 'Kích thước biến thể',
        'variants.*.language_code' => 'Mã ngôn ngữ biến thể',
        'variants.*.size_id' => 'Kích thước biến thể',
        'variants.*.color_id' => 'Màu sắc biến thể',

        // Translations for all supported languages

        // English
        'translations.en.name' => 'Tên (Tiếng Anh)',
        'translations.en.description' => 'Mô tả (Tiếng Anh)',
        'translations.en.image' => 'Hình ảnh (Tiếng Anh)',
        'languages.en.title' => 'Tiêu đề banner (Tiếng Anh)',
        'languages.en.description' => 'Mô tả banner (Tiếng Anh)',
        'languages.en.image' => 'Hình banner (Tiếng Anh)',

        // Arabic
        'translations.ar.name' => 'Tên (Tiếng Ả Rập)',
        'translations.ar.description' => 'Mô tả (Tiếng Ả Rập)',
        'translations.ar.image' => 'Hình ảnh (Tiếng Ả Rập)',
        'languages.ar.title' => 'Tiêu đề banner (Tiếng Ả Rập)',
        'languages.ar.description' => 'Mô tả banner (Tiếng Ả Rập)',
        'languages.ar.image' => 'Hình banner (Tiếng Ả Rập)',

        // German
        'translations.de.name' => 'Tên (Tiếng Đức)',
        'translations.de.description' => 'Mô tả (Tiếng Đức)',
        'translations.de.image' => 'Hình ảnh (Tiếng Đức)',
        'languages.de.title' => 'Tiêu đề banner (Tiếng Đức)',
        'languages.de.description' => 'Mô tả banner (Tiếng Đức)',
        'languages.de.image' => 'Hình banner (Tiếng Đức)',

        // Spanish
        'translations.es.name' => 'Tên (Tiếng Tây Ban Nha)',
        'translations.es.description' => 'Mô tả (Tiếng Tây Ban Nha)',
        'translations.es.image' => 'Hình ảnh (Tiếng Tây Ban Nha)',
        'languages.es.title' => 'Tiêu đề banner (Tiếng Tây Ban Nha)',
        'languages.es.description' => 'Mô tả banner (Tiếng Tây Ban Nha)',
        'languages.es.image' => 'Hình banner (Tiếng Tây Ban Nha)',

        // Persian
        'translations.fa.name' => 'Tên (Tiếng Ba Tư)',
        'translations.fa.description' => 'Mô tả (Tiếng Ba Tư)',
        'translations.fa.image' => 'Hình ảnh (Tiếng Ba Tư)',
        'languages.fa.title' => 'Tiêu đề banner (Tiếng Ba Tư)',
        'languages.fa.description' => 'Mô tả banner (Tiếng Ba Tư)',
        'languages.fa.image' => 'Hình banner (Tiếng Ba Tư)',

        // French
        'translations.fr.name' => 'Tên (Tiếng Pháp)',
        'translations.fr.description' => 'Mô tả (Tiếng Pháp)',
        'translations.fr.image' => 'Hình ảnh (Tiếng Pháp)',
        'languages.fr.title' => 'Tiêu đề banner (Tiếng Pháp)',
        'languages.fr.description' => 'Mô tả banner (Tiếng Pháp)',
        'languages.fr.image' => 'Hình banner (Tiếng Pháp)',

        // Hindi
        'translations.hi.name' => 'Tên (Tiếng Hindi)',
        'translations.hi.description' => 'Mô tả (Tiếng Hindi)',
        'translations.hi.image' => 'Hình ảnh (Tiếng Hindi)',
        'languages.hi.title' => 'Tiêu đề banner (Tiếng Hindi)',
        'languages.hi.description' => 'Mô tả banner (Tiếng Hindi)',
        'languages.hi.image' => 'Hình banner (Tiếng Hindi)',

        // Indonesian
        'translations.id.name' => 'Tên (Tiếng Indonesia)',
        'translations.id.description' => 'Mô tả (Tiếng Indonesia)',
        'translations.id.image' => 'Hình ảnh (Tiếng Indonesia)',
        'languages.id.title' => 'Tiêu đề banner (Tiếng Indonesia)',
        'languages.id.description' => 'Mô tả banner (Tiếng Indonesia)',
        'languages.id.image' => 'Hình banner (Tiếng Indonesia)',

        // Italian
        'translations.it.name' => 'Tên (Tiếng Ý)',
        'translations.it.description' => 'Mô tả (Tiếng Ý)',
        'translations.it.image' => 'Hình ảnh (Tiếng Ý)',
        'languages.it.title' => 'Tiêu đề banner (Tiếng Ý)',
        'languages.it.description' => 'Mô tả banner (Tiếng Ý)',
        'languages.it.image' => 'Hình banner (Tiếng Ý)',

        // Japanese
        'translations.ja.name' => 'Tên (Tiếng Nhật)',
        'translations.ja.description' => 'Mô tả (Tiếng Nhật)',
        'translations.ja.image' => 'Hình ảnh (Tiếng Nhật)',
        'languages.ja.title' => 'Tiêu đề banner (Tiếng Nhật)',
        'languages.ja.description' => 'Mô tả banner (Tiếng Nhật)',
        'languages.ja.image' => 'Hình banner (Tiếng Nhật)',

        // Korean
        'translations.ko.name' => 'Tên (Tiếng Hàn)',
        'translations.ko.description' => 'Mô tả (Tiếng Hàn)',
        'translations.ko.image' => 'Hình ảnh (Tiếng Hàn)',
        'languages.ko.title' => 'Tiêu đề banner (Tiếng Hàn)',
        'languages.ko.description' => 'Mô tả banner (Tiếng Hàn)',
        'languages.ko.image' => 'Hình banner (Tiếng Hàn)',

        // Dutch
        'translations.nl.name' => 'Tên (Tiếng Hà Lan)',
        'translations.nl.description' => 'Mô tả (Tiếng Hà Lan)',
        'translations.nl.image' => 'Hình ảnh (Tiếng Hà Lan)',
        'languages.nl.title' => 'Tiêu đề banner (Tiếng Hà Lan)',
        'languages.nl.description' => 'Mô tả banner (Tiếng Hà Lan)',
        'languages.nl.image' => 'Hình banner (Tiếng Hà Lan)',

        // Polish
        'translations.pl.name' => 'Tên (Tiếng Ba Lan)',
        'translations.pl.description' => 'Mô tả (Tiếng Ba Lan)',
        'translations.pl.image' => 'Hình ảnh (Tiếng Ba Lan)',
        'languages.pl.title' => 'Tiêu đề banner (Tiếng Ba Lan)',
        'languages.pl.description' => 'Mô tả banner (Tiếng Ba Lan)',
        'languages.pl.image' => 'Hình banner (Tiếng Ba Lan)',

        // Portuguese
        'translations.pt.name' => 'Tên (Tiếng Bồ Đào Nha)',
        'translations.pt.description' => 'Mô tả (Tiếng Bồ Đào Nha)',
        'translations.pt.image' => 'Hình ảnh (Tiếng Bồ Đào Nha)',
        'languages.pt.title' => 'Tiêu đề banner (Tiếng Bồ Đào Nha)',
        'languages.pt.description' => 'Mô tả banner (Tiếng Bồ Đào Nha)',
        'languages.pt.image' => 'Hình banner (Tiếng Bồ Đào Nha)',

        // Russian
        'translations.ru.name' => 'Tên (Tiếng Nga)',
        'translations.ru.description' => 'Mô tả (Tiếng Nga)',
        'translations.ru.image' => 'Hình ảnh (Tiếng Nga)',
        'languages.ru.title' => 'Tiêu đề banner (Tiếng Nga)',
        'languages.ru.description' => 'Mô tả banner (Tiếng Nga)',
        'languages.ru.image' => 'Hình banner (Tiếng Nga)',

        // Thai
        'translations.th.name' => 'Tên (Tiếng Thái)',
        'translations.th.description' => 'Mô tả (Tiếng Thái)',
        'translations.th.image' => 'Hình ảnh (Tiếng Thái)',
        'languages.th.title' => 'Tiêu đề banner (Tiếng Thái)',
        'languages.th.description' => 'Mô tả banner (Tiếng Thái)',
        'languages.th.image' => 'Hình banner (Tiếng Thái)',

        // Turkish
        'translations.tr.name' => 'Tên (Tiếng Thổ Nhĩ Kỳ)',
        'translations.tr.description' => 'Mô tả (Tiếng Thổ Nhĩ Kỳ)',
        'translations.tr.image' => 'Hình ảnh (Tiếng Thổ Nhĩ Kỳ)',
        'languages.tr.title' => 'Tiêu đề banner (Tiếng Thổ Nhĩ Kỳ)',
        'languages.tr.description' => 'Mô tả banner (Tiếng Thổ Nhĩ Kỳ)',
        'languages.tr.image' => 'Hình banner (Tiếng Thổ Nhĩ Kỳ)',

        // Vietnamese
        'translations.vi.name' => 'Tên (Tiếng Việt)',
        'translations.vi.description' => 'Mô tả (Tiếng Việt)',
        'translations.vi.image' => 'Hình ảnh (Tiếng Việt)',
        'languages.vi.title' => 'Tiêu đề banner (Tiếng Việt)',
        'languages.vi.description' => 'Mô tả banner (Tiếng Việt)',
        'languages.vi.image' => 'Hình banner (Tiếng Việt)',

        // Chinese
        'translations.zh.name' => 'Tên (Tiếng Trung)',
        'translations.zh.description' => 'Mô tả (Tiếng Trung)',
        'translations.zh.image' => 'Hình ảnh (Tiếng Trung)',
        'languages.zh.title' => 'Tiêu đề banner (Tiếng Trung)',
        'languages.zh.description' => 'Mô tả banner (Tiếng Trung)',
        'languages.zh.image' => 'Hình banner (Tiếng Trung)',
    ],
];
