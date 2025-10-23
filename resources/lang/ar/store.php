<?php

return [
    'header' => [
        'top_bar_message' => 'شحن مجاني للطلبات التي تزيد عن 50 دولارًا | الدعم | دليل المتاجر',
        'search_placeholder' => 'ابحث عن منتج',
    ],

    'footer' => [
        'account' => 'الحساب',
        'my_account' => 'حسابي',
        'wishlist' => 'قائمة الرغبات',
        'pages' => 'الصفحات',
        'privacy_policy' => 'سياسة الخصوصية',
        'terms_of_service' => 'شروط الخدمة',
        'follow_us' => 'تابعنا',
        'footer_logo_alt' => 'شعار ذيل صفحة فيلستور',
        'copyright' => '© 2025 متجر فيلستور التجريبي. جميع الحقوق محفوظة.',
        'powered_by' => 'بدعم من فيلستور لابز',
    ],

    'product_detail' => [
        'home' => 'الرئيسية',
        'in_stock' => 'متوفر في المخزون',
        'out_of_stock' => 'غير متوفر في المخزون',
        'customer_reviews' => 'آراء العملاء',
        'no_reviews' => 'لا توجد مراجعات لهذا المنتج بعد.',
        'no_review_text' => 'لم تتم كتابة أي مراجعة.',
        'average_rating' => 'متوسط التقييم',
        'days_ago' => '{1} قبل :days يوم|[2,*] قبل :days أيام',
        'description' => 'الوصف',
        'reviews' => 'المراجعات',
        'add_to_cart' => 'أضف إلى السلة',
        'increase_quantity' => 'زيادة الكمية',
        'decrease_quantity' => 'تقليل الكمية',
        'selected_variant_not' => 'المتغير المحدد غير متوفر.',
        'fetch_variant_failed' => 'تعذر جلب سعر المتغير.',
        'ajax_error' => 'حدث خطأ ما. يرجى المحاولة مرة أخرى.',
        'currency_symbol' => 'العملة',
        'cart_success' => 'تمت إضافة المنتج إلى السلة بنجاح.',
        'cart_update_error' => 'تعذر تحديث السلة. يرجى المحاولة مرة أخرى.',
    ],

    'cart' => [

        // Breadcrumb
        'breadcrumb_home' => 'الصفحة الرئيسية',
        'breadcrumb_cart' => 'عربة التسوق',

        // Cart messages
        'empty_cart' => 'سلة التسوق فارغة.',
        'continue_shopping' => 'متابعة التسوق',
        'update_cart' => 'تحديث السلة',

        // Table headings
        'product' => 'المنتج',
        'price' => 'السعر',
        'quantity' => 'الكمية',
        'subtotal' => 'المجموع الفرعي',

        // Cart totals section
        'cart_totals' => 'إجمالي السلة',
        'subtotal_label' => 'المجموع الفرعي',
        'discount_label' => 'الخصم',
        'total_label' => 'الإجمالي',
        'proceed_to_checkout' => 'إتمام الشراء',

        // Coupon section
        'coupon_heading' => 'قسيمة الخصم',
        'coupon_placeholder' => 'رمز القسيمة',
        'apply_coupon' => 'تطبيق القسيمة',
        'remove_coupon' => 'إزالة القسيمة',

        // Toast messages
        'coupon_applied' => 'تم تطبيق القسيمة بنجاح!',
        'coupon_removed' => 'تمت إزالة القسيمة بنجاح!',
        'cart_updated' => 'تم تحديث السلة بنجاح!',
        'item_removed' => 'تمت إزالة العنصر من السلة.',
        'error_occurred' => 'حدث خطأ ما. يرجى المحاولة مرة أخرى.',
        'product_removed' => 'تمت إزالة المنتج من السلة.',
    ],

    'checkout' => [

        // Breadcrumb
        'breadcrumb_home' => 'الصفحة الرئيسية',
        'breadcrumb_category' => 'سماعة الرأس',
        'breadcrumb_checkout' => 'إتمام الطلب',

        // Section titles
        'shipping_information' => 'معلومات الشحن',
        'contact_information' => 'معلومات الاتصال',
        'payment_method' => 'طريقة الدفع',
        'order_summary' => 'ملخص الطلب',

        // Shipping form placeholders
        'first_name' => 'الاسم الأول',
        'last_name' => 'اسم العائلة',
        'address' => 'العنوان',
        'suite' => 'الشقة / الطابق',
        'select_country' => 'اختر الدولة',
        'city' => 'المدينة',
        'select_state' => 'اختر الولاية',
        'zipcode' => 'الرمز البريدي',
        'use_as_billing' => 'استخدام كعنوان الفاتورة',

        // Contact form placeholders
        'email' => 'البريد الإلكتروني',
        'phone' => 'رقم الهاتف',

        // Payment
        'select_payment' => 'اختر طريقة الدفع',
        'stripe' => 'سترايب',
        'paypal' => 'باي بال',

        // Summary labels
        'subtotal' => 'المجموع الفرعي',
        'shipping' => 'الشحن',
        'shipping_info' => 'أدخل عنوانك لعرض تكلفة الشحن',
        'total' => 'الإجمالي',
        'proceed' => 'متابعة',
        'place_order' => 'تأكيد الطلب',

        // Toast / messages
        'order_success' => 'تم إرسال طلبك بنجاح!',
        'order_failed' => 'حدث خطأ ما. يرجى المحاولة مرة أخرى.',
        'payment_required' => 'يرجى اختيار طريقة الدفع قبل المتابعة.',
        'paypal_instructions' => 'يرجى إتمام الدفع باستخدام زر باي بال.',
    ],

    'profile' => [
        'title' => 'تعديل الملف الشخصي',
        'choose_file' => 'اختر ملفًا',
        'name' => 'الاسم',
        'email' => 'البريد الإلكتروني',
        'phone' => 'رقم الهاتف',
        'address' => 'العنوان',
        'current_password' => 'كلمة المرور الحالية',
        'new_password' => 'كلمة المرور الجديدة',
        'confirm_new_password' => 'تأكيد كلمة المرور الجديدة',
        'save' => 'حفظ',
        'success' => 'نجاح',
        'profile_updated' => 'تم تحديث الملف الشخصي بنجاح.',
    ],
];
