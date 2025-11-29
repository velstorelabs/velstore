<?php

return [
    'auth' => [
        'velstore' => '维尔斯托尔',
        'login' => '登录',
        'email' => '电子邮件地址',
        'password' => '密码',
        'remember_me' => '记住我',
        'forgot_password' => '忘记密码？',
    ],

    'profile' => [
        'profile' => '个人资料',
        'setting' => '设置',
        'logout' => '登出',
    ],

    'dashboard' => [
        'total_sales' => '总销售额',
        'today' => '今天',
        'total' => '总计',

        'total_orders' => '订单总数',
        'completed' => '已完成',
        'all_orders' => '所有订单',

        'total_vendors' => '供应商总数',
        'active' => '活跃',

        'total_customers' => '客户总数',
    ],

    'sidebar' => [
        'search_placeholder' => '搜索...',
        'dashboard' => '控制面板',
        'logo' => '标志',

        'categories' => [
            'title' => '分类',
            'add_new' => '新增',
            'list' => '列表',
        ],
        'brands' => [
            'title' => '品牌',
            'add_new' => '新增',
            'list' => '列表',
        ],
        'products' => [
            'title' => '产品',
            'add_new' => '新增',
            'list' => '列表',
        ],
        'attributes' => [
            'title' => '属性',
            'add_new' => '添加新项',
            'list' => '列表',
        ],
        'customers' => [
            'title' => '客户',
            'list' => '列表',
        ],
        'vendors' => [
            'title' => '供应商',
            'add_new' => '新增',
            'list' => '列表',
        ],
        'product_reviews' => [
            'title' => '产品评价',
            'list' => '列表',
        ],
        'banners' => [
            'title' => '横幅',
            'add_new' => '新增',
            'list' => '列表',
        ],
        'menu' => [
            'title' => '菜单',
            'add_new' => '新增',
            'list' => '列表',
        ],
        'menu_items' => [
            'title' => '菜单项',
            'add_new' => '新增',
            'list' => '列表',
        ],
        'social_media_links' => [
            'title' => '社交媒体链接',
            'add_new' => '新增',
            'list' => '列表',
        ],
        'site_settings' => [
            'title' => '网站设置',
            'manage' => '管理设置',
        ],
        'orders' => [
            'title' => '订单',
            'all_orders' => '所有订单',
            'pending_orders' => '待处理订单',
            'completed_orders' => '已完成订单',
            'list' => '列表',
        ],
        'pages' => [
            'title' => '页面',
            'add_new' => '新增',
            'list' => '列表',
        ],
        'payments' => [
            'title' => '支付',
            'list' => '列表',
        ],

        'refunds' => [
            'title' => '退款',
            'list' => '列表',
        ],

        'payment_gateways' => [
            'title' => '支付网关',
            'list' => '列表',
        ],
    ],

    'profile' => [
        'title' => '编辑资料',
        'choose_file' => '选择文件',
        'name' => '姓名',
        'email' => '电子邮件',
        'phone' => '电话',
        'current_password' => '当前密码',
        'new_password' => '新密码',
        'confirm_new_password' => '确认新密码',
        'save' => '保存',
        'profile_updated' => '个人资料更新成功！',
        'success' => '成功',
    ],

    'payment_gateways' => [

        // Page Titles
        'title' => '支付网关',
        'edit_title' => '编辑支付网关',

        // Table Headings
        'id' => 'ID',
        'name' => '名称',
        'code' => '代码',
        'status' => '状态',
        'action' => '操作',

        // Status Labels
        'active' => '激活',
        'inactive' => '未激活',

        // Delete Modal
        'delete_confirm' => '确认删除',
        'delete_message' => '您确定要删除此支付网关吗？',
        'cancel' => '取消',
        'delete' => '删除',

        // Alerts / Notifications
        'success' => '成功',
        'deleted' => '已删除',
        'delete_error' => '删除支付网关时出错！',

        // Form Labels
        'gateway_name' => '网关名称',
        'description' => '描述',
        'active_label' => '激活',
        'configurations' => '网关配置',
        'key_name' => '键名',
        'key_value' => '键值',
        'environment' => '环境',
        'sandbox' => '沙盒',
        'production' => '生产',
        'encrypted' => '已加密',
        'unique' => '唯一',
        'update_button' => '更新',

        // Fallback
        'not_available' => '不可用',
    ],

    'refunds' => [

        // Page Titles
        'title' => '退款',
        'details_title' => '退款详情',

        // Table Headings
        'id' => 'ID',
        'payment' => '支付',
        'amount' => '金额',
        'status' => '状态',
        'reason' => '原因',
        'action' => '操作',

        // Status Labels
        'completed' => '已完成',
        'pending' => '待处理',
        'failed' => '失败',

        // Delete Modal
        'delete_confirm' => '确认删除',
        'delete_message' => '您确定要删除此退款吗？',
        'cancel' => '取消',
        'delete' => '删除',

        // Alerts / Notifications
        'success' => '成功',
        'deleted' => '已删除',
        'delete_error' => '删除退款时出错！',

        // Refund Details Page
        'created_at' => '创建时间',
        'updated_at' => '更新时间',
        'back' => '返回退款列表',

        // Fallback
        'not_available' => '不可用',
    ],

    'payments' => [

        // Page Titles
        'title' => '付款',
        'details_title' => '付款详情',

        // Table Headings
        'id' => '编号',
        'order' => '订单',
        'user' => '用户',
        'gateway' => '支付网关',
        'amount' => '金额',
        'status' => '状态',
        'transaction' => '交易',
        'action' => '操作',

        // Status Labels
        'completed' => '已完成',
        'pending' => '待处理',
        'failed' => '失败',

        // Delete Modal
        'delete_confirm' => '确认删除',
        'delete_message' => '您确定要删除此付款吗？',
        'cancel' => '取消',
        'delete' => '删除',

        // Alerts / Notifications
        'success' => '成功',
        'deleted' => '已删除',
        'delete_error' => '删除付款时出错！',

        // Payment Details Page
        'transaction_id' => '交易编号',
        'created_at' => '创建时间',
        'back' => '返回付款列表',

        // Fallback
        'not_available' => '不可用',
    ],

    'pages' => [
        // General
        'title' => '页面',
        'choose_file' => '选择文件',

        // Create Page
        'create' => '创建页面',
        'form_title' => '标题 (:code)',
        'form_content' => '内容 (:code)',
        'form_image' => '图片 (:code)',
        'form_save' => '保存',

        // Edit Page
        'edit' => '编辑页面',
        'form_update' => '更新',

        // Pages Table
        'table_title' => '标题',
        'table_slug' => 'Slug',
        'table_status' => '状态',
        'table_actions' => '操作',

        // Delete Modal
        'delete_modal_title' => '确认删除',
        'delete_modal_text' => '您确定要删除此页面吗？',
        'delete_modal_cancel' => '取消',
        'delete_modal_delete' => '删除',

        // Toastr messages
        'toastr_success' => '成功',
        'toastr_error' => '删除页面时出错',
    ],

    'customers' => [
        'customer_list' => '客户列表',

        // Table columns
        'id' => '编号',
        'name' => '姓名',
        'email' => '邮箱',
        'phone' => '电话',
        'address' => '地址',
        'status' => '状态',
        'actions' => '操作',

        // Status labels
        'active' => '启用',
        'inactive' => '停用',

        // Modal
        'confirm_delete_title' => '确认删除',
        'confirm_delete_message' => '您确定要删除此客户吗？',
        'cancel_button' => '取消',
        'delete_button' => '删除',

        // Toastr messages
        'success_title' => '成功',
        'deleted_title' => '已删除',
        'delete_success_message' => '客户已成功删除！',
        'delete_error_message' => '删除客户时出错！',
    ],

    'vendors' => [
        'title_list' => '供应商列表',
        'id' => '编号',
        'name' => '名称',
        'email' => '电子邮件',
        'phone' => '电话',
        'status' => '状态',
        'actions' => '操作',
        'register_new_vendor' => '注册新商家',
        'vendor_name' => '商家名称',
        'vendor_email' => '商家邮箱',
        'phone_optional' => '电话（可选）',
        'password' => '密码',
        'confirm_password' => '确认密码',
        'status' => '状态',
        'active' => '启用',
        'inactive' => '停用',
        'banned' => '已封禁',
        'register_button' => '注册商家',
        'cancel_button' => '取消',

        'active' => '激活',
        'inactive' => '未激活',

        'modal_confirm_delete_title' => '确认删除',
        'modal_confirm_delete_body' => '您确定要删除此供应商吗？',
        'delete' => '删除',
        'cancel' => '取消',

        'success' => '成功',
        'success_delete' => '供应商删除成功！',
        'error_delete' => '删除供应商时出错！请重试。',
    ],

    'languages' => [
        'english' => '英语',
        'spanish' => '西班牙语',
        'french' => '法语',
        'arabic' => '阿拉伯语',
        'german' => '德语',
        'persian' => '波斯语（法尔西语）',
        'hindi' => '印地语',
        'indonesian' => '印尼语',
        'italian' => '意大利语',
        'japanese' => '日语',
        'korean' => '韩语',
        'dutch' => '荷兰语',
        'polish' => '波兰语',
        'portuguese' => '葡萄牙语',
        'russian' => '俄语',
        'thai' => '泰语',
        'turkish' => '土耳其语',
        'vietnamese' => '越南语',
        'chinese' => '中文',

        'language_change' => '语言更改',
        'change_language' => '更改语言',
        'confirm_language_change' => '您确定要更改语言吗？',
        'cancel' => '取消',
        'yes_change' => '是的，更改',
    ],

    'categories' => [
        'heading' => '类别',
        'image' => '图片',
        'choose_file' => '选择文件',
        'id' => '身份证号',
        'name' => '类别名称',
        'description' => '描述',
        'action' => '操作',
        'edit' => '编辑',
        'delete' => '删除',
        'button' => '保存',
        'add_new' => '添加新项',
        'status' => '状态',
        'created' => '类别创建成功！',
        'updated' => '类别更新成功！',
        'deleted' => '类别删除成功！',
        'status_updated' => '类别状态更新成功！',
        'massage_confirm' => '确认删除',
        'confirm_delete' => '您确定要删除这个类别吗？',
        'massage_cancel' => '取消',
        'massage_delete' => '删除',
        'success' => '成功',
    ],

    'datatables' => [
        'sEmptyTable' => '表中没有数据',
        'sInfo' => '显示 _START_ 到 _END_，共 _TOTAL_ 条记录',
        'sInfoEmpty' => '显示 0 到 0，共 0 条记录',
        'sInfoFiltered' => '(从 _MAX_ 条记录中过滤)',
        'sLengthMenu' => '显示 _MENU_ 条记录',
        'sLoadingRecords' => '加载中...',
        'sProcessing' => '处理中...',
        'sSearch' => '搜索:',
        'sZeroRecords' => '没有找到匹配的记录',
        'oPaginate' => [
            'sFirst' => '首页',
            'sLast' => '最后一页',
            'sNext' => '下一页',
            'sPrevious' => '上一页',
        ],
    ],

    'products' => [

        // Titles
        'title_create' => '创建产品',
        'title_edit' => '编辑产品',
        'title_manage' => '管理产品',

        // Form Fields
        'vendor' => '供应商',
        'select_vendor' => '选择供应商',
        'product_name' => '产品名称',
        'product_type' => '产品类型',
        'description' => '描述',
        'translations' => '翻译',
        'translated_value' => '翻译值',
        'category' => '类别',
        'brand' => '品牌',
        'no_brand' => '无品牌',
        'status' => '状态',
        'price' => '价格',
        'discount_price' => '折扣价',
        'sku' => 'SKU',
        'barcode' => '条形码',
        'stock' => '库存',
        'weight' => '重量',
        'dimension' => '尺寸',
        'size' => '大小',
        'color' => '颜色',
        'images' => '产品图片',
        'is_primary' => '主变体',
        'variant_name_en' => '变体名称',
        'attributes' => '属性',
        'attribute_values' => '属性值',
        'variants' => '变体',

        // Buttons
        'add_variant' => '添加变体',
        'remove_variant' => '移除变体',
        'save_product' => '保存产品',
        'update_product' => '更新产品',
        'choose_images' => '选择图片',
        'choose_file' => '选择文件',
        'remove' => '删除',

        // Messages
        'status_updated' => '产品状态已成功更新！',
        'success_create' => '产品创建成功！',
        'success_update' => '产品更新成功！',
        'success_delete' => '产品删除成功！',
        'delete_confirmation' => '您确定要删除此产品吗？',
        'success' => '成功',

        // Table Columns
        'id' => 'ID',
        'name' => '名称',
        'type' => '类型',
        'price_column' => '价格',
        'status_column' => '状态',
        'action' => '操作',

        // Confirmation Dialog
        'confirm_delete' => '确认删除',
        'delete' => '删除',
        'cancel' => '取消',
    ],

    'brands' => [
        'heading' => '品牌',
        'id' => '身份证号',
        'name' => '品牌名称',
        'description' => '描述',
        'logo' => '标志',
        'status' => '状态',
        'action' => '操作',
        'edit' => '编辑',
        'delete' => '删除',
        'create' => '创建',
        'update' => '更新',
        'add_new' => '添加新',
        'button' => '保存',
        'form_title' => '创建或编辑品牌',
        'file_upload' => '上传标志',
        'no_logo' => '没有标志',
        'choose_file' => '选择文件',
        'image_preview' => '图片预览',
        'delete_confirmation' => '您确定要删除此品牌吗？',
        'brand_deleted' => '品牌删除成功！',
        'error_delete' => '删除品牌时出错！',
        'created' => '品牌创建成功！',
        'updated' => '品牌更新成功！',
        'deleted' => '品牌删除成功！',
        'status_updated' => '品牌状态更新成功！',
        'massage_confirm' => '确认删除',
        'confirm_delete' => '您确定要删除这个品牌吗？',
        'massage_cancel' => '取消',
        'massage_delete' => '删除',
        'success' => '成功',
    ],

    'banners' => [
        'button_back' => '返回',
        'description' => '描述',
        'choose_file' => '选择文件',
        'all_banners' => '所有横幅',
        'id' => '身份证号',
        'add_new' => '添加新横幅',
        'banner_type' => '横幅类型',
        'promotion' => '促销',
        'sale' => '销售',
        'seasonal' => '季节性',
        'featured' => '精选',
        'announcement' => '公告',
        'actions' => '操作',
        'edit' => '编辑',
        'delete' => '删除',
        'no_image' => '没有图片',
        'delete_confirmation' => '你确定要删除这个横幅吗？',
        'banner_deleted' => '横幅已成功删除！',
        'error_delete' => '删除横幅时出错！',
        'image_preview' => '图片预览',
        'create_banner' => '创建横幅',
        'edit_banner' => '编辑横幅翻译',
        'save' => '保存',
        'languages' => '语言',
        'status' => '状态',
        'image' => '图片',
        'image_title' => '图片标题',
        'title' => '标题',
        'select_language' => '选择语言',
        'file_upload' => '上传图片',
        'choose_file' => '选择文件',
        'existing_image' => '现有图片',
        'banner_saved' => '横幅已成功保存！',
        'banner_updated' => '横幅已成功更新！',
        'form_title' => '创建或编辑横幅',
        'form_description' => '请提供横幅所需的所有必要信息。',
        'back_to_list' => '返回横幅列表',
        'created' => '横幅创建成功！',
        'updated' => '横幅更新成功！',
        'deleted' => '横幅删除成功！',
        'status_updated' => '横幅状态更新成功！',
        'massage_confirm' => '确认删除',
        'confirm_delete' => '您确定要删除这个横幅吗？',
        'massage_cancel' => '取消',
        'massage_delete' => '删除',
        'success' => '成功',

    ],

    'menus' => [
        'all_menus' => '所有菜单',
        'id' => '身份证号',
        'add_new' => '添加新菜单',
        'button_create' => '创建',
        'button_update' => '更新',
        'title' => '标题',
        'edit' => '编辑',
        'action' => '操作',
        'delete' => '删除',
        'created_at' => '创建时间',
        'no_menus' => '没有可用的菜单',
        'delete_confirmation' => '您确定要删除这个菜单吗？',
        'menu_deleted' => '菜单已成功删除！',
        'error_delete' => '删除菜单时出错！',
        'create_menu' => '创建菜单',
        'edit_menu' => '编辑菜单',
        'save' => '保存',
        'menu_title' => '菜单标题',
        'form_title' => '创建或编辑菜单',
        'form_description' => '请提供菜单所需的所有信息。',
        'back_to_list' => '返回菜单列表',
        'created' => '菜单创建成功！',
        'updated' => '菜单更新成功！',
        'deleted' => '菜单删除成功！',
        'status_updated' => '菜单状态更新成功！',
        'massage_confirm' => '确认删除',
        'confirm_delete' => '您确定要删除此菜单吗？',
        'massage_cancel' => '取消',
        'massage_delete' => '删除',
        'success' => '成功',

    ],

    'menu_items' => [
        'heading' => '所有菜单项',
        'id' => '身份证号',
        'create' => '创建菜单项',
        'choose_an_option' => '选择一个选项',
        'select_an_option' => '选择一个选项',
        'option1' => '选项 1',
        'option2' => '选项 2',
        'option3' => '选项 3',
        'option4' => '选项 4',
        'order_number' => '订单号',
        'parent_item' => '父项',
        'parent_none' => '无',
        'edit' => '编辑菜单项',
        'update' => '更新菜单项',
        'delete' => '删除菜单项',
        'title' => '标题',
        'button' => '保存',
        'update_button' => '更新',
        'slug' => 'Slug',
        'order' => '排序',
        'actions' => '操作',
        'add_new' => '添加新项',
        'submit' => '提交',
        'cancel' => '取消',
        'no_title' => '无标题',
        'select_menu' => '选择菜单',
        'select_parent_item' => '选择父项',
        'language' => '语言',
        'select_language' => '选择语言',
        'select_order' => '选择排序',
        'success_message' => '菜单项已成功创建！',
        'error_message' => '创建菜单项时出错。',
        'confirm_delete' => '您确定要删除这个菜单项吗？',
        'update_success_message' => '菜单项已成功更新！',
        'update_error_message' => '更新菜单项时出错。',
        'created' => '菜单项创建成功！',
        'updated' => '菜单项更新成功！',
        'deleted' => '菜单项删除成功！',
        'status_updated' => '菜单项状态更新成功！',
        'massage_confirm' => '确认删除',
        'confirm_delete' => '您确定要删除此菜单项吗？',
        'massage_cancel' => '取消',
        'massage_delete' => '删除',
        'success' => '成功',

    ],
    'errors' => [
        'validation_failed' => '验证失败！请修正错误后再试。',
        'csrf_token_invalid' => 'CSRF Token 无效。请刷新页面后再试。',
        'not_found' => '未找到请求的项。',
        'unauthorized' => '您没有权限执行此操作。',
    ],
    'messages' => [
        'welcome' => '欢迎来到管理面板！',
        'dashboard' => '仪表盘',
        'settings' => '设置',
        'log_out' => '登出',
        'profile' => '个人资料',
        'menu' => '菜单',
        'home' => '首页',
        'view_details' => '查看详情',
    ],

    'social_media_links' => [
        'type' => '社交媒体类型',
        'select_type' => '选择社交媒体类型',
        'types' => [
            'facebook' => 'Facebook',
            'instagram' => 'Instagram',
            'tiktok' => 'TikTok',
            'youtube' => 'YouTube',
            'x' => 'X',
        ],

        'id' => '身份证号',
        'create' => '创建社交媒体链接',
        'edit' => '编辑社交媒体链接',
        'platform' => '平台名称',
        'link' => '社交媒体链接',
        'created' => '社交媒体链接创建成功！',
        'updated' => '社交媒体链接更新成功！',
        'deleted' => '社交媒体链接删除成功！',
        'status_updated' => '社交媒体链接状态更新成功！',
        'massage_confirm' => '确认删除',
        'confirm_delete' => '您确定要删除这个社交媒体链接吗？',
        'massage_cancel' => '取消',
        'massage_delete' => '删除',
        'success' => '成功',

        'translations' => [
            'platform_name' => '平台名称（翻译）',
        ],
        'save' => '保存',
        'update' => '更新',
        'delete' => '删除',
        'no_links' => '没有社交媒体链接',
        'delete_confirmation' => '您确定要删除这个链接吗？',
        'link_deleted' => '社交媒体链接已成功删除！',
        'error_delete' => '删除链接时出错！',
        'create_link' => '创建社交媒体链接',
        'edit_link' => '编辑社交媒体链接',
        'form_title' => '创建或编辑社交媒体链接',
        'form_description' => '请提供所有必要的信息以创建社交媒体链接。',
        'back_to_list' => '返回社交媒体链接列表',
        'add_new' => '添加新链接',
        'trans_name' => '翻译名称',
        'delete' => '删除',
        'action' => '操作',
    ],

    'orders' => [

        // Page Title
        'title' => '订单列表',

        // Table Headings
        'id' => '订单编号',
        'order_date' => '下单日期',
        'status' => '状态',
        'total_price' => '总价',
        'action' => '操作',
        'customer' => '客户',

        // Delete Modal
        'delete_confirm_title' => '确认删除',
        'delete_confirm_message' => '您确定要删除此订单吗？',
        'delete_cancel' => '取消',
        'delete_button' => '删除',

        // Toastr / Flash Messages
        'deleted_success' => '订单删除成功。',
        'deleted_error' => '订单删除失败。',
        'deleted' => '已删除',
        'success' => '成功',
    ],

    'attributes' => [
        'title_create' => '创建属性',
        'title_edit' => '编辑属性',
        'title_manage' => '管理属性',

        'attribute_name' => '属性名称',
        'attribute_values' => '属性值',
        'translations' => '翻译',
        'translated_value' => '翻译后的值',

        'add_value' => '添加值',
        'remove_value' => '移除',
        'save_attribute' => '保存属性',
        'update_attribute' => '更新属性',
        'add_value_translation' => '添加值翻译',

        'success_create' => '属性创建成功！',
        'success_update' => '属性更新成功！',
        'success_delete' => '属性删除成功！',
        'delete_confirmation' => '您确定要删除此属性吗？',
        'success' => '成功',

        'id' => 'ID',
        'name' => '名称',
        'values' => '值',
        'action' => '操作',

        'confirm_delete' => '确认删除',
        'delete' => '删除',
        'cancel' => '取消',
    ],

    'product_reviews' => [
        'title_manage' => '产品评论管理',

        'review_id' => '评论ID',
        'customer_name' => '客户名称',
        'product_name' => '产品名称',
        'rating' => '评分',
        'status' => '状态',
        'actions' => '操作',
        'review_details' => '评价详情',
        'review' => '评价',
        'back_button' => '返回列表',

        'confirm_delete' => '确认删除',
        'delete_message' => '您确定要删除此产品评论吗？',
        'delete' => '删除',
        'cancel' => '取消',

        'success_create' => '产品评论创建成功！',
        'success_update' => '产品评论更新成功！',
        'success_delete' => '产品评论删除成功！',
        'error_delete' => '删除产品评论时发生错误！请重试。',

        'success' => '成功',
        'error' => '错误',
    ],

];
