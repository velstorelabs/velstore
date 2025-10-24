<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    */

    'required' => 'Trường :attribute là bắt buộc.',
    'string' => ':attribute phải là một chuỗi.',
    'max' => ':attribute không được vượt quá :max ký tự.',
    'min' => ':attribute phải có ít nhất :min ký tự.',
    'image' => ':attribute phải là một hình ảnh.',
    'mimes' => ':attribute phải là tệp loại: :values.',
    'array' => ':attribute phải là một mảng.',
    'numeric' => ':attribute phải là một số.',
    'integer' => ':attribute phải là một số nguyên.',
    'lte' => ':attribute phải nhỏ hơn hoặc bằng :value.',
    'regex' => 'Định dạng của :attribute không hợp lệ.',
    'confirmed' => 'Xác nhận :attribute không khớp.',
    'incorrect_current_password' => 'Mật khẩu hiện tại không chính xác.',

    'password' => [
        'letters' => ':attribute phải chứa ít nhất một chữ cái.',
        'mixed' => ':attribute phải chứa cả chữ hoa và chữ thường.',
        'numbers' => ':attribute phải chứa ít nhất một chữ số.',
        'symbols' => ':attribute phải chứa ít nhất một ký hiệu.',
        'uncompromised' => ':attribute đã xuất hiện trong một vụ rò rỉ dữ liệu. Vui lòng chọn :attribute khác.',
    ],

    'custom' => [
        'password' => [
            'confirmed' => 'Xác nhận mật khẩu không khớp.',
            'min' => 'Mật khẩu phải có ít nhất :min ký tự.',
            'symbols' => 'Mật khẩu phải chứa ít nhất một ký hiệu.',
        ],
        'phone' => [
            'regex' => 'Số điện thoại chỉ được chứa số, khoảng trắng, dấu gạch ngang và dấu + tùy chọn.',
        ],
        'email' => [
            'unique' => 'Email này đã được đăng ký.',
        ],
        'status' => [
            'in' => 'Trạng thái được chọn không hợp lệ.',
        ],
    ],

    'attributes' => [

        // Admin profile
        'current_password' => 'Mật khẩu hiện tại',
        'profile_image' => 'Ảnh hồ sơ',

        // Vendor fields
        'name' => 'Tên',
        'email' => 'Email',
        'password' => 'Mật khẩu',
        'password_confirmation' => 'Xác nhận mật khẩu',
        'phone' => 'Số điện thoại',
        'status' => 'Trạng thái',

        // Social links
        'type' => 'Loại nền tảng',
        'platform' => 'Tên nền tảng',
        'link' => 'Liên kết nền tảng',

        // Menu fields
        'title' => 'Tiêu đề menu',
        'order_number' => 'Số đơn hàng',

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

        // Attribute name
        'name' => 'Tên thuộc tính',

        // Attribute values
        'values.*' => 'Giá trị thuộc tính',
        ...array_combine(
            array_map(fn ($i) => "values.$i", range(0, 49)),
            array_map(fn ($i) => "Giá trị thuộc tính $i", range(0, 49))
        ),

        // Attribute value translations (English)
        'translations.en.*' => 'Giá trị (Tiếng Anh)',
        ...array_combine(
            array_map(fn ($i) => "translations.en.$i", range(0, 49)),
            array_map(fn ($i) => "Giá trị (Tiếng Anh) $i", range(0, 49))
        ),

        // Attribute value translations (Arabic)
        'translations.ar.*' => 'Giá trị (Tiếng Ả Rập)',
        ...array_combine(
            array_map(fn ($i) => "translations.ar.$i", range(0, 49)),
            array_map(fn ($i) => "Giá trị (Tiếng Ả Rập) $i", range(0, 49))
        ),

        // Attribute value translations (German)
        'translations.de.*' => 'Giá trị (Tiếng Đức)',
        ...array_combine(
            array_map(fn ($i) => "translations.de.$i", range(0, 49)),
            array_map(fn ($i) => "Giá trị (Tiếng Đức) $i", range(0, 49))
        ),

        // Attribute value translations (Spanish)
        'translations.es.*' => 'Giá trị (Tiếng Tây Ban Nha)',
        ...array_combine(
            array_map(fn ($i) => "translations.es.$i", range(0, 49)),
            array_map(fn ($i) => "Giá trị (Tiếng Tây Ban Nha) $i", range(0, 49))
        ),

        // Attribute value translations (Persian)
        'translations.fa.*' => 'Giá trị (Tiếng Ba Tư)',
        ...array_combine(
            array_map(fn ($i) => "translations.fa.$i", range(0, 49)),
            array_map(fn ($i) => "Giá trị (Tiếng Ba Tư) $i", range(0, 49))
        ),

        // Attribute value translations (French)
        'translations.fr.*' => 'Giá trị (Tiếng Pháp)',
        ...array_combine(
            array_map(fn ($i) => "translations.fr.$i", range(0, 49)),
            array_map(fn ($i) => "Giá trị (Tiếng Pháp) $i", range(0, 49))
        ),

        // Attribute value translations (Hindi)
        'translations.hi.*' => 'Giá trị (Tiếng Hindi)',
        ...array_combine(
            array_map(fn ($i) => "translations.hi.$i", range(0, 49)),
            array_map(fn ($i) => "Giá trị (Tiếng Hindi) $i", range(0, 49))
        ),

        // Attribute value translations (Indonesian)
        'translations.id.*' => 'Giá trị (Tiếng Indonesia)',
        ...array_combine(
            array_map(fn ($i) => "translations.id.$i", range(0, 49)),
            array_map(fn ($i) => "Giá trị (Tiếng Indonesia) $i", range(0, 49))
        ),

        // Attribute value translations (Italian)
        'translations.it.*' => 'Giá trị (Tiếng Ý)',
        ...array_combine(
            array_map(fn ($i) => "translations.it.$i", range(0, 49)),
            array_map(fn ($i) => "Giá trị (Tiếng Ý) $i", range(0, 49))
        ),

        // Attribute value translations (Japanese)
        'translations.ja.*' => 'Giá trị (Tiếng Nhật)',
        ...array_combine(
            array_map(fn ($i) => "translations.ja.$i", range(0, 49)),
            array_map(fn ($i) => "Giá trị (Tiếng Nhật) $i", range(0, 49))
        ),

        // Attribute value translations (Korean)
        'translations.ko.*' => 'Giá trị (Tiếng Hàn)',
        ...array_combine(
            array_map(fn ($i) => "translations.ko.$i", range(0, 49)),
            array_map(fn ($i) => "Giá trị (Tiếng Hàn) $i", range(0, 49))
        ),

        // Attribute value translations (Dutch)
        'translations.nl.*' => 'Giá trị (Tiếng Hà Lan)',
        ...array_combine(
            array_map(fn ($i) => "translations.nl.$i", range(0, 49)),
            array_map(fn ($i) => "Giá trị (Tiếng Hà Lan) $i", range(0, 49))
        ),

        // Attribute value translations (Polish)
        'translations.pl.*' => 'Giá trị (Tiếng Ba Lan)',
        ...array_combine(
            array_map(fn ($i) => "translations.pl.$i", range(0, 49)),
            array_map(fn ($i) => "Giá trị (Tiếng Ba Lan) $i", range(0, 49))
        ),

        // Attribute value translations (Portuguese)
        'translations.pt.*' => 'Giá trị (Tiếng Bồ Đào Nha)',
        ...array_combine(
            array_map(fn ($i) => "translations.pt.$i", range(0, 49)),
            array_map(fn ($i) => "Giá trị (Tiếng Bồ Đào Nha) $i", range(0, 49))
        ),

        // Attribute value translations (Russian)
        'translations.ru.*' => 'Giá trị (Tiếng Nga)',
        ...array_combine(
            array_map(fn ($i) => "translations.ru.$i", range(0, 49)),
            array_map(fn ($i) => "Giá trị (Tiếng Nga) $i", range(0, 49))
        ),

        // Attribute value translations (Thai)
        'translations.th.*' => 'Giá trị (Tiếng Thái)',
        ...array_combine(
            array_map(fn ($i) => "translations.th.$i", range(0, 49)),
            array_map(fn ($i) => "Giá trị (Tiếng Thái) $i", range(0, 49))
        ),

        // Attribute value translations (Turkish)
        'translations.tr.*' => 'Giá trị (Tiếng Thổ Nhĩ Kỳ)',
        ...array_combine(
            array_map(fn ($i) => "translations.tr.$i", range(0, 49)),
            array_map(fn ($i) => "Giá trị (Tiếng Thổ Nhĩ Kỳ) $i", range(0, 49))
        ),

        // Attribute value translations (Vietnamese)
        'translations.vi.*' => 'Giá trị (Tiếng Việt)',
        ...array_combine(
            array_map(fn ($i) => "translations.vi.$i", range(0, 49)),
            array_map(fn ($i) => "Giá trị (Tiếng Việt) $i", range(0, 49))
        ),

        // Attribute value translations (Chinese)
        'translations.zh.*' => 'Giá trị (Tiếng Trung)',
        ...array_combine(
            array_map(fn ($i) => "translations.zh.$i", range(0, 49)),
            array_map(fn ($i) => "Giá trị (Tiếng Trung) $i", range(0, 49))
        ),

        // Translations for all supported languages

        // English
        'translations.en.name' => 'Tên (Tiếng Anh)',
        'translations.en.description' => 'Mô tả (Tiếng Anh)',
        'translations.en.image' => 'Hình ảnh (Tiếng Anh)',
        'translations.en.title' => 'Tiêu đề (Tiếng Anh)',
        'translations.en.content' => 'Nội dung (Tiếng Anh)',
        'languages.en.title' => 'Tiêu đề banner (Tiếng Anh)',
        'languages.en.description' => 'Mô tả banner (Tiếng Anh)',
        'languages.en.image' => 'Hình ảnh banner (Tiếng Anh)',
        'languages.en.name' => 'Tên nền tảng (Tiếng Anh)',
        'title.en' => 'Tiêu đề (Tiếng Anh)',

        // Arabic
        'translations.ar.name' => 'Tên (Tiếng Ả Rập)',
        'translations.ar.description' => 'Mô tả (Tiếng Ả Rập)',
        'translations.ar.image' => 'Hình ảnh (Tiếng Ả Rập)',
        'translations.ar.title' => 'Tiêu đề (Tiếng Ả Rập)',
        'translations.ar.content' => 'Nội dung (Tiếng Ả Rập)',
        'languages.ar.title' => 'Tiêu đề banner (Tiếng Ả Rập)',
        'languages.ar.description' => 'Mô tả banner (Tiếng Ả Rập)',
        'languages.ar.image' => 'Hình ảnh banner (Tiếng Ả Rập)',
        'languages.ar.name' => 'Tên nền tảng (Tiếng Ả Rập)',
        'title.ar' => 'Tiêu đề (Tiếng Ả Rập)',

        // German
        'translations.de.name' => 'Tên (Tiếng Đức)',
        'translations.de.description' => 'Mô tả (Tiếng Đức)',
        'translations.de.image' => 'Hình ảnh (Tiếng Đức)',
        'translations.de.title' => 'Tiêu đề (Tiếng Đức)',
        'translations.de.content' => 'Nội dung (Tiếng Đức)',
        'languages.de.title' => 'Tiêu đề banner (Tiếng Đức)',
        'languages.de.description' => 'Mô tả banner (Tiếng Đức)',
        'languages.de.image' => 'Hình ảnh banner (Tiếng Đức)',
        'languages.de.name' => 'Tên nền tảng (Tiếng Đức)',
        'title.de' => 'Tiêu đề (Tiếng Đức)',

        // Spanish
        'translations.es.name' => 'Tên (Tiếng Tây Ban Nha)',
        'translations.es.description' => 'Mô tả (Tiếng Tây Ban Nha)',
        'translations.es.image' => 'Hình ảnh (Tiếng Tây Ban Nha)',
        'translations.es.title' => 'Tiêu đề (Tiếng Tây Ban Nha)',
        'translations.es.content' => 'Nội dung (Tiếng Tây Ban Nha)',
        'languages.es.title' => 'Tiêu đề banner (Tiếng Tây Ban Nha)',
        'languages.es.description' => 'Mô tả banner (Tiếng Tây Ban Nha)',
        'languages.es.image' => 'Hình ảnh banner (Tiếng Tây Ban Nha)',
        'languages.es.name' => 'Tên nền tảng (Tiếng Tây Ban Nha)',
        'title.es' => 'Tiêu đề (Tiếng Tây Ban Nha)',

        // Persian
        'translations.fa.name' => 'Tên (Tiếng Ba Tư)',
        'translations.fa.description' => 'Mô tả (Tiếng Ba Tư)',
        'translations.fa.image' => 'Hình ảnh (Tiếng Ba Tư)',
        'translations.fa.title' => 'Tiêu đề (Tiếng Ba Tư)',
        'translations.fa.content' => 'Nội dung (Tiếng Ba Tư)',
        'languages.fa.title' => 'Tiêu đề banner (Tiếng Ba Tư)',
        'languages.fa.description' => 'Mô tả banner (Tiếng Ba Tư)',
        'languages.fa.image' => 'Hình ảnh banner (Tiếng Ba Tư)',
        'languages.fa.name' => 'Tên nền tảng (Tiếng Ba Tư)',
        'title.fa' => 'Tiêu đề (Tiếng Ba Tư)',

        // French
        'translations.fr.name' => 'Tên (Tiếng Pháp)',
        'translations.fr.description' => 'Mô tả (Tiếng Pháp)',
        'translations.fr.image' => 'Hình ảnh (Tiếng Pháp)',
        'translations.fr.title' => 'Tiêu đề (Tiếng Pháp)',
        'translations.fr.content' => 'Nội dung (Tiếng Pháp)',
        'languages.fr.title' => 'Tiêu đề banner (Tiếng Pháp)',
        'languages.fr.description' => 'Mô tả banner (Tiếng Pháp)',
        'languages.fr.image' => 'Hình ảnh banner (Tiếng Pháp)',
        'languages.fr.name' => 'Tên nền tảng (Tiếng Pháp)',
        'title.fr' => 'Tiêu đề (Tiếng Pháp)',

        // Hindi
        'translations.hi.name' => 'Tên (Tiếng Hindi)',
        'translations.hi.description' => 'Mô tả (Tiếng Hindi)',
        'translations.hi.image' => 'Hình ảnh (Tiếng Hindi)',
        'translations.hi.title' => 'Tiêu đề (Tiếng Hindi)',
        'translations.hi.content' => 'Nội dung (Tiếng Hindi)',
        'languages.hi.title' => 'Tiêu đề banner (Tiếng Hindi)',
        'languages.hi.description' => 'Mô tả banner (Tiếng Hindi)',
        'languages.hi.image' => 'Hình ảnh banner (Tiếng Hindi)',
        'languages.hi.name' => 'Tên nền tảng (Tiếng Hindi)',
        'title.hi' => 'Tiêu đề (Tiếng Hindi)',

        // Indonesian
        'translations.id.name' => 'Tên (Tiếng Indonesia)',
        'translations.id.description' => 'Mô tả (Tiếng Indonesia)',
        'translations.id.image' => 'Hình ảnh (Tiếng Indonesia)',
        'translations.id.title' => 'Tiêu đề (Tiếng Indonesia)',
        'translations.id.content' => 'Nội dung (Tiếng Indonesia)',
        'languages.id.title' => 'Tiêu đề banner (Tiếng Indonesia)',
        'languages.id.description' => 'Mô tả banner (Tiếng Indonesia)',
        'languages.id.image' => 'Hình ảnh banner (Tiếng Indonesia)',
        'languages.id.name' => 'Tên nền tảng (Tiếng Indonesia)',
        'title.id' => 'Tiêu đề (Tiếng Indonesia)',

        // Italian
        'translations.it.name' => 'Tên (Tiếng Ý)',
        'translations.it.description' => 'Mô tả (Tiếng Ý)',
        'translations.it.image' => 'Hình ảnh (Tiếng Ý)',
        'translations.it.title' => 'Tiêu đề (Tiếng Ý)',
        'translations.it.content' => 'Nội dung (Tiếng Ý)',
        'languages.it.title' => 'Tiêu đề banner (Tiếng Ý)',
        'languages.it.description' => 'Mô tả banner (Tiếng Ý)',
        'languages.it.image' => 'Hình ảnh banner (Tiếng Ý)',
        'languages.it.name' => 'Tên nền tảng (Tiếng Ý)',
        'title.it' => 'Tiêu đề (Tiếng Ý)',

        // Japanese
        'translations.ja.name' => 'Tên (Tiếng Nhật)',
        'translations.ja.description' => 'Mô tả (Tiếng Nhật)',
        'translations.ja.image' => 'Hình ảnh (Tiếng Nhật)',
        'translations.ja.title' => 'Tiêu đề (Tiếng Nhật)',
        'translations.ja.content' => 'Nội dung (Tiếng Nhật)',
        'languages.ja.title' => 'Tiêu đề banner (Tiếng Nhật)',
        'languages.ja.description' => 'Mô tả banner (Tiếng Nhật)',
        'languages.ja.image' => 'Hình ảnh banner (Tiếng Nhật)',
        'languages.ja.name' => 'Tên nền tảng (Tiếng Nhật)',
        'title.ja' => 'Tiêu đề (Tiếng Nhật)',

        // Korean
        'translations.ko.name' => 'Tên (Tiếng Hàn)',
        'translations.ko.description' => 'Mô tả (Tiếng Hàn)',
        'translations.ko.image' => 'Hình ảnh (Tiếng Hàn)',
        'translations.ko.title' => 'Tiêu đề (Tiếng Hàn)',
        'translations.ko.content' => 'Nội dung (Tiếng Hàn)',
        'languages.ko.title' => 'Tiêu đề banner (Tiếng Hàn)',
        'languages.ko.description' => 'Mô tả banner (Tiếng Hàn)',
        'languages.ko.image' => 'Hình ảnh banner (Tiếng Hàn)',
        'languages.ko.name' => 'Tên nền tảng (Tiếng Hàn)',
        'title.ko' => 'Tiêu đề (Tiếng Hàn)',

        // Dutch
        'translations.nl.name' => 'Tên (Tiếng Hà Lan)',
        'translations.nl.description' => 'Mô tả (Tiếng Hà Lan)',
        'translations.nl.image' => 'Hình ảnh (Tiếng Hà Lan)',
        'translations.nl.title' => 'Tiêu đề (Tiếng Hà Lan)',
        'translations.nl.content' => 'Nội dung (Tiếng Hà Lan)',
        'languages.nl.title' => 'Tiêu đề banner (Tiếng Hà Lan)',
        'languages.nl.description' => 'Mô tả banner (Tiếng Hà Lan)',
        'languages.nl.image' => 'Hình ảnh banner (Tiếng Hà Lan)',
        'languages.nl.name' => 'Tên nền tảng (Tiếng Hà Lan)',
        'title.nl' => 'Tiêu đề (Tiếng Hà Lan)',

        // Polish
        'translations.pl.name' => 'Tên (Tiếng Ba Lan)',
        'translations.pl.description' => 'Mô tả (Tiếng Ba Lan)',
        'translations.pl.image' => 'Hình ảnh (Tiếng Ba Lan)',
        'translations.pl.title' => 'Tiêu đề (Tiếng Ba Lan)',
        'translations.pl.content' => 'Nội dung (Tiếng Ba Lan)',
        'languages.pl.title' => 'Tiêu đề banner (Tiếng Ba Lan)',
        'languages.pl.description' => 'Mô tả banner (Tiếng Ba Lan)',
        'languages.pl.image' => 'Hình ảnh banner (Tiếng Ba Lan)',
        'languages.pl.name' => 'Tên nền tảng (Tiếng Ba Lan)',
        'title.pl' => 'Tiêu đề (Tiếng Ba Lan)',

        // Portuguese
        'translations.pt.name' => 'Tên (Tiếng Bồ Đào Nha)',
        'translations.pt.description' => 'Mô tả (Tiếng Bồ Đào Nha)',
        'translations.pt.image' => 'Hình ảnh (Tiếng Bồ Đào Nha)',
        'translations.pt.title' => 'Tiêu đề (Tiếng Bồ Đào Nha)',
        'translations.pt.content' => 'Nội dung (Tiếng Bồ Đào Nha)',
        'languages.pt.title' => 'Tiêu đề banner (Tiếng Bồ Đào Nha)',
        'languages.pt.description' => 'Mô tả banner (Tiếng Bồ Đào Nha)',
        'languages.pt.image' => 'Hình ảnh banner (Tiếng Bồ Đào Nha)',
        'languages.pt.name' => 'Tên nền tảng (Tiếng Bồ Đào Nha)',
        'title.pt' => 'Tiêu đề (Tiếng Bồ Đào Nha)',

        // Russian
        'translations.ru.name' => 'Tên (Tiếng Nga)',
        'translations.ru.description' => 'Mô tả (Tiếng Nga)',
        'translations.ru.image' => 'Hình ảnh (Tiếng Nga)',
        'translations.ru.title' => 'Tiêu đề (Tiếng Nga)',
        'translations.ru.content' => 'Nội dung (Tiếng Nga)',
        'languages.ru.title' => 'Tiêu đề banner (Tiếng Nga)',
        'languages.ru.description' => 'Mô tả banner (Tiếng Nga)',
        'languages.ru.image' => 'Hình ảnh banner (Tiếng Nga)',
        'languages.ru.name' => 'Tên nền tảng (Tiếng Nga)',
        'title.ru' => 'Tiêu đề (Tiếng Nga)',

        // Thai
        'translations.th.name' => 'Tên (Tiếng Thái)',
        'translations.th.description' => 'Mô tả (Tiếng Thái)',
        'translations.th.image' => 'Hình ảnh (Tiếng Thái)',
        'translations.th.title' => 'Tiêu đề (Tiếng Thái)',
        'translations.th.content' => 'Nội dung (Tiếng Thái)',
        'languages.th.title' => 'Tiêu đề banner (Tiếng Thái)',
        'languages.th.description' => 'Mô tả banner (Tiếng Thái)',
        'languages.th.image' => 'Hình ảnh banner (Tiếng Thái)',
        'languages.th.name' => 'Tên nền tảng (Tiếng Thái)',
        'title.th' => 'Tiêu đề (Tiếng Thái)',

        // Turkish
        'translations.tr.name' => 'Tên (Tiếng Thổ Nhĩ Kỳ)',
        'translations.tr.description' => 'Mô tả (Tiếng Thổ Nhĩ Kỳ)',
        'translations.tr.image' => 'Hình ảnh (Tiếng Thổ Nhĩ Kỳ)',
        'translations.tr.title' => 'Tiêu đề (Tiếng Thổ Nhĩ Kỳ)',
        'translations.tr.content' => 'Nội dung (Tiếng Thổ Nhĩ Kỳ)',
        'languages.tr.title' => 'Tiêu đề banner (Tiếng Thổ Nhĩ Kỳ)',
        'languages.tr.description' => 'Mô tả banner (Tiếng Thổ Nhĩ Kỳ)',
        'languages.tr.image' => 'Hình ảnh banner (Tiếng Thổ Nhĩ Kỳ)',
        'languages.tr.name' => 'Tên nền tảng (Tiếng Thổ Nhĩ Kỳ)',
        'title.tr' => 'Tiêu đề (Tiếng Thổ Nhĩ Kỳ)',

        // Vietnamese
        'translations.vi.name' => 'Tên (Tiếng Việt)',
        'translations.vi.description' => 'Mô tả (Tiếng Việt)',
        'translations.vi.image' => 'Hình ảnh (Tiếng Việt)',
        'translations.vi.title' => 'Tiêu đề (Tiếng Việt)',
        'translations.vi.content' => 'Nội dung (Tiếng Việt)',
        'languages.vi.title' => 'Tiêu đề banner (Tiếng Việt)',
        'languages.vi.description' => 'Mô tả banner (Tiếng Việt)',
        'languages.vi.image' => 'Hình ảnh banner (Tiếng Việt)',
        'languages.vi.name' => 'Tên nền tảng (Tiếng Việt)',
        'title.vi' => 'Tiêu đề (Tiếng Việt)',

        // Chinese
        'translations.zh.name' => 'Tên (Tiếng Trung)',
        'translations.zh.description' => 'Mô tả (Tiếng Trung)',
        'translations.zh.image' => 'Hình ảnh (Tiếng Trung)',
        'translations.zh.title' => 'Tiêu đề (Tiếng Trung)',
        'translations.zh.content' => 'Nội dung (Tiếng Trung)',
        'languages.zh.title' => 'Tiêu đề banner (Tiếng Trung)',
        'languages.zh.description' => 'Mô tả banner (Tiếng Trung)',
        'languages.zh.image' => 'Hình ảnh banner (Tiếng Trung)',
        'languages.zh.name' => 'Tên nền tảng (Tiếng Trung)',
        'title.zh' => 'Tiêu đề (Tiếng Trung)',
    ],
];
