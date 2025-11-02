<?php

return [
    'header' => [
        'top_bar_message' => '满 $50 订单免费配送 | 支持 | 门店查找',
        'search_placeholder' => '搜索产品',
    ],

    'footer' => [
        'account' => '账户',
        'my_account' => '我的账户',
        'wishlist' => '愿望清单',
        'pages' => '页面',
        'privacy_policy' => '隐私政策',
        'terms_of_service' => '服务条款',
        'follow_us' => '关注我们',
        'footer_logo_alt' => 'Velstore 底部logo',
        'copyright' => '© 2025 Velstore Demo. 保留所有权利。',
        'powered_by' => '由 Velstore Labs 提供技术支持',
    ],

    'product_detail' => [
        'home' => '首页',
        'in_stock' => '有货',
        'out_of_stock' => '缺货',
        'customer_reviews' => '客户评价',
        'no_reviews' => '该产品暂无评价。',
        'no_review_text' => '暂无评论内容。',
        'average_rating' => '平均评分',
        'days_ago' => '{1} :days 天前|[2,*] :days 天前',
        'description' => '描述',
        'reviews' => '评价',
        'add_to_cart' => '加入购物车',
        'increase_quantity' => '增加数量',
        'decrease_quantity' => '减少数量',
        'selected_variant_not' => '所选的商品规格不可用。',
        'fetch_variant_failed' => '无法获取商品规格价格。',
        'ajax_error' => '发生错误，请重试。',
        'currency_symbol' => '货币',
        'cart_success' => '商品已成功加入购物车。',
        'cart_update_error' => '购物车更新失败，请重试。',
        'submit_review_title' => '提交您的评价',
        'review_optional' => '评价（可选）',
        'submit_review_btn' => '提交评价',
        'please' => '请',
        'login' => '登录',
        'customer' => '客户',
        'submit' => '以提交评价。',
        'no_reviews_yet' => '此产品尚无评价。',
        'no_review_text' => '未撰写评价。',
        'day' => '天',
        'days' => '天',
        'ago' => '前',
        'average_rating' => '平均评分',
        'variant_not_available' => '所选规格不可用。',
        'something_wrong' => '出现错误，请重试。',
        'added_to_wishlist' => '已添加到收藏 ❤️',
        'removed_from_wishlist' => '已从收藏中移除 💔',
        'login_to_wishlist' => '请登录以管理您的收藏。',
        'review_already_submitted' => '您已评价过此产品。',
        'review_success' => '感谢！您的评价已发布。',
    ],

    'cart' => [

        // Breadcrumb
        'breadcrumb_home' => '首页',
        'breadcrumb_cart' => '购物车',

        // Cart messages
        'empty_cart' => '您的购物车是空的。',
        'continue_shopping' => '继续购物',
        'update_cart' => '更新购物车',

        // Table headings
        'product' => '商品',
        'price' => '价格',
        'quantity' => '数量',
        'subtotal' => '小计',

        // Cart totals section
        'cart_totals' => '购物车总计',
        'subtotal_label' => '小计',
        'discount_label' => '折扣',
        'total_label' => '总计',
        'proceed_to_checkout' => '前往结账',

        // Coupon section
        'coupon_heading' => '优惠券',
        'coupon_placeholder' => '优惠码',
        'apply_coupon' => '使用优惠券',
        'remove_coupon' => '移除优惠券',

        // Toast messages
        'coupon_applied' => '优惠券已成功使用！',
        'coupon_removed' => '优惠券已成功移除！',
        'cart_updated' => '购物车已成功更新！',
        'item_removed' => '商品已从购物车中移除。',
        'error_occurred' => '发生错误，请重试。',
        'product_removed' => '商品已从购物车中移除。',
    ],

    'checkout' => [

        // Breadcrumb
        'breadcrumb_home' => '首页',
        'breadcrumb_category' => '耳机',
        'breadcrumb_checkout' => '结账',

        // Section titles
        'shipping_information' => '收货信息',
        'contact_information' => '联系信息',
        'payment_method' => '付款方式',
        'order_summary' => '订单摘要',

        // Shipping form placeholders
        'first_name' => '名字',
        'last_name' => '姓氏',
        'address' => '地址',
        'suite' => '套房/楼层',
        'select_country' => '选择国家',
        'city' => '城市',
        'select_state' => '选择省/州',
        'zipcode' => '邮政编码',
        'use_as_billing' => '用作账单地址',

        // Contact form placeholders
        'email' => '电子邮件',
        'phone' => '电话',

        // Payment
        'select_payment' => '选择付款方式',
        'stripe' => 'Stripe',
        'paypal' => 'PayPal',

        // Summary labels
        'subtotal' => '小计',
        'shipping' => '运费',
        'shipping_info' => '输入您的地址以查看运费',
        'total' => '总计',
        'proceed' => '继续',
        'place_order' => '下订单',

        // Toast / messages
        'order_success' => '您的订单已成功提交！',
        'order_failed' => '出现错误，请重试。',
        'payment_required' => '请在继续之前选择一种付款方式。',
        'paypal_instructions' => '请使用 PayPal 按钮完成付款。',
    ],

    'profile' => [
        'title' => '编辑资料',
        'choose_file' => '选择文件',
        'name' => '姓名',
        'email' => '电子邮箱',
        'phone' => '电话',
        'address' => '地址',
        'current_password' => '当前密码',
        'new_password' => '新密码',
        'confirm_new_password' => '确认新密码',
        'save' => '保存',
        'success' => '成功',
        'profile_updated' => '个人资料已成功更新。',
    ],

    'category' => [
        'home' => '首页',
        'min_price' => '最低价格',
        'max_price' => '最高价格',
        'sort_by' => '排序方式',
        'newest' => '最新',
        'price_low_high' => '价格：从低到高',
        'price_high_low' => '价格：从高到低',
        'top_rated' => '最高评分',
        'filter' => '筛选',
        'reviews' => '评价',
        'product_name_not_available' => '产品名称不可用',
        'no_products_found' => '此分类中没有找到产品。',
        'add_to_cart_success' => '成功加入购物车！',
    ],

    'wishlist' => [
        'title' => '我的愿望清单',
        'empty' => '你的愿望清单是空的。',
        'reviews' => '评价',
        'add_to_cart' => '加入购物车',
    ],
];
