<?php

return [
    'header' => [
        'top_bar_message' => 'จัดส่งฟรีสำหรับคำสั่งซื้อมากกว่า $50 | การสนับสนุน | ค้นหาร้านค้า',
        'search_placeholder' => 'ค้นหาผลิตภัณฑ์',
    ],

    'footer' => [
        'account' => 'บัญชี',
        'my_account' => 'บัญชีของฉัน',
        'wishlist' => 'รายการที่ต้องการ',
        'pages' => 'หน้า',
        'privacy_policy' => 'นโยบายความเป็นส่วนตัว',
        'terms_of_service' => 'ข้อกำหนดการให้บริการ',
        'follow_us' => 'ติดตามเรา',
        'footer_logo_alt' => 'โลโก้ฟุตเตอร์ Velstore',
        'copyright' => '© 2025 Velstore Demo. สงวนลิขสิทธิ์ทุกประการ',
        'powered_by' => 'พัฒนาโดย Velstore Labs',
    ],

    'product_detail' => [
        'home' => 'หน้าแรก',
        'in_stock' => 'มีสินค้า',
        'out_of_stock' => 'สินค้าหมด',
        'customer_reviews' => 'รีวิวจากลูกค้า',
        'no_reviews' => 'ยังไม่มีรีวิวสำหรับสินค้านี้',
        'no_review_text' => 'ยังไม่มีการเขียนรีวิว',
        'average_rating' => 'คะแนนเฉลี่ย',
        'days_ago' => '{1} :days วันที่แล้ว|[2,*] :days วันที่แล้ว',
        'description' => 'รายละเอียด',
        'reviews' => 'รีวิว',
        'add_to_cart' => 'เพิ่มลงตะกร้า',
        'increase_quantity' => 'เพิ่มจำนวน',
        'decrease_quantity' => 'ลดจำนวน',
        'selected_variant_not' => 'ตัวเลือกที่เลือกไม่พร้อมใช้งาน',
        'fetch_variant_failed' => 'ไม่สามารถดึงราคาของตัวเลือกได้',
        'ajax_error' => 'เกิดข้อผิดพลาด กรุณาลองใหม่อีกครั้ง',
        'currency_symbol' => 'สกุลเงิน',
        'cart_success' => 'เพิ่มสินค้าในตะกร้าสำเร็จแล้ว',
        'cart_update_error' => 'ไม่สามารถอัปเดตตะกร้าได้ กรุณาลองใหม่อีกครั้ง',
    ],

    'cart' => [

        // Breadcrumb
        'breadcrumb_home' => 'หน้าแรก',
        'breadcrumb_cart' => 'รถเข็นสินค้า',

        // Cart messages
        'empty_cart' => 'รถเข็นสินค้าของคุณว่างเปล่า',
        'continue_shopping' => 'ช้อปปิ้งต่อ',
        'update_cart' => 'อัปเดตรถเข็นสินค้า',

        // Table headings
        'product' => 'สินค้า',
        'price' => 'ราคา',
        'quantity' => 'จำนวน',
        'subtotal' => 'ยอดรวมย่อย',

        // Cart totals section
        'cart_totals' => 'ยอดรวมรถเข็นสินค้า',
        'subtotal_label' => 'ยอดรวมย่อย',
        'discount_label' => 'ส่วนลด',
        'total_label' => 'ยอดรวมทั้งหมด',
        'proceed_to_checkout' => 'ไปที่ชำระเงิน',

        // Coupon section
        'coupon_heading' => 'คูปอง',
        'coupon_placeholder' => 'รหัสคูปอง',
        'apply_coupon' => 'ใช้คูปอง',
        'remove_coupon' => 'ลบคูปอง',

        // Toast messages
        'coupon_applied' => 'ใช้คูปองเรียบร้อยแล้ว!',
        'coupon_removed' => 'ลบคูปองเรียบร้อยแล้ว!',
        'cart_updated' => 'อัปเดตรถเข็นเรียบร้อยแล้ว!',
        'item_removed' => 'นำสินค้าออกจากรถเข็นแล้ว.',
        'error_occurred' => 'เกิดข้อผิดพลาด โปรดลองอีกครั้ง.',
        'product_removed' => 'นำสินค้าออกจากรถเข็นแล้ว.',
    ],

    'checkout' => [

        // Breadcrumb
        'breadcrumb_home' => 'หน้าหลัก',
        'breadcrumb_category' => 'หูฟัง',
        'breadcrumb_checkout' => 'ชำระเงิน',

        // Section titles
        'shipping_information' => 'ข้อมูลการจัดส่ง',
        'contact_information' => 'ข้อมูลการติดต่อ',
        'payment_method' => 'วิธีการชำระเงิน',
        'order_summary' => 'สรุปคำสั่งซื้อ',

        // Shipping form placeholders
        'first_name' => 'ชื่อจริง',
        'last_name' => 'นามสกุล',
        'address' => 'ที่อยู่',
        'suite' => 'ห้อง/ชั้น',
        'select_country' => 'เลือกประเทศ',
        'city' => 'เมือง',
        'select_state' => 'เลือกจังหวัด/รัฐ',
        'zipcode' => 'รหัสไปรษณีย์',
        'use_as_billing' => 'ใช้เป็นที่อยู่สำหรับเรียกเก็บเงิน',

        // Contact form placeholders
        'email' => 'อีเมล',
        'phone' => 'เบอร์โทรศัพท์',

        // Payment
        'select_payment' => 'เลือกวิธีการชำระเงิน',
        'stripe' => 'Stripe',
        'paypal' => 'PayPal',

        // Summary labels
        'subtotal' => 'ยอดรวมย่อย',
        'shipping' => 'การจัดส่ง',
        'shipping_info' => 'กรอกที่อยู่ของคุณเพื่อดูค่าจัดส่ง',
        'total' => 'รวมทั้งหมด',
        'proceed' => 'ดำเนินการต่อ',
        'place_order' => 'ยืนยันคำสั่งซื้อ',

        // Toast / messages
        'order_success' => 'คำสั่งซื้อของคุณเสร็จสมบูรณ์!',
        'order_failed' => 'เกิดข้อผิดพลาด กรุณาลองใหม่อีกครั้ง',
        'payment_required' => 'กรุณาเลือกวิธีการชำระเงินก่อนดำเนินการต่อ',
        'paypal_instructions' => 'กรุณาชำระเงินโดยใช้ปุ่ม PayPal ด้านล่าง',
    ],
];
