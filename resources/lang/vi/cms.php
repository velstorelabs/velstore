<?php

return [
    'auth' => [
        'velstore' => 'Velstore',
        'login' => 'Đăng nhập',
        'email' => 'Địa chỉ Email',
        'password' => 'Mật khẩu',
        'remember_me' => 'Ghi nhớ tôi',
        'forgot_password' => 'Quên mật khẩu?',
    ],

    'profile' => [
        'profile' => 'Hồ sơ',
        'setting' => 'Cài đặt',
        'logout' => 'Đăng xuất',
    ],

    'dashboard' => [
        'total_sales' => 'Tổng Doanh Thu',
        'today' => 'Hôm Nay',
        'total' => 'Tổng',

        'total_orders' => 'Tổng Đơn Hàng',
        'completed' => 'Hoàn Thành',
        'all_orders' => 'Tất Cả Đơn Hàng',

        'total_vendors' => 'Tổng Nhà Cung Cấp',
        'active' => 'Hoạt Động',

        'total_customers' => 'Tổng Khách Hàng',
    ],

    'sidebar' => [
        'search_placeholder' => 'Tìm kiếm...',
        'dashboard' => 'Bảng điều khiển',
        'logo' => 'Logo',

        'categories' => [
            'title' => 'Danh mục',
            'add_new' => 'Thêm mới',
            'list' => 'Danh sách',
        ],
        'brands' => [
            'title' => 'Thương hiệu',
            'add_new' => 'Thêm mới',
            'list' => 'Danh sách',
        ],
        'products' => [
            'title' => 'Sản phẩm',
            'add_new' => 'Thêm mới',
            'list' => 'Danh sách',
        ],
        'attributes' => [
            'title' => 'Thuộc tính',
            'add_new' => 'Thêm mới',
            'list' => 'Danh sách',
        ],
        'customers' => [
            'title' => 'Khách hàng',
            'list' => 'Danh sách',
        ],
        'vendors' => [
            'title' => 'Nhà cung cấp',
            'add_new' => 'Thêm mới',
            'list' => 'Danh sách',
        ],
        'product_reviews' => [
            'title' => 'Đánh giá sản phẩm',
            'list' => 'Danh sách',
        ],
        'banners' => [
            'title' => 'Biểu ngữ',
            'add_new' => 'Thêm mới',
            'list' => 'Danh sách',
        ],
        'menu' => [
            'title' => 'Menu',
            'add_new' => 'Thêm mới',
            'list' => 'Danh sách',
        ],
        'menu_items' => [
            'title' => 'Mục menu',
            'add_new' => 'Thêm mới',
            'list' => 'Danh sách',
        ],
        'social_media_links' => [
            'title' => 'Liên kết mạng xã hội',
            'add_new' => 'Thêm mới',
            'list' => 'Danh sách',
        ],
        'site_settings' => [
            'title' => 'Cài đặt trang web',
            'manage' => 'Quản lý cài đặt',
        ],
        'orders' => [
            'title' => 'Đơn hàng',
            'all_orders' => 'Tất cả đơn hàng',
            'pending_orders' => 'Đơn hàng đang chờ',
            'completed_orders' => 'Đơn hàng đã hoàn thành',
            'list' => 'Danh sách',
        ],
        'pages' => [
            'title' => 'Trang',
            'add_new' => 'Thêm mới',
            'list' => 'Danh sách',
        ],
        'payments' => [
            'title' => 'Thanh toán',
            'list' => 'Danh sách',
        ],

        'refunds' => [
            'title' => 'Hoàn tiền',
            'list' => 'Danh sách',
        ],

        'payment_gateways' => [
            'title' => 'Cổng thanh toán',
            'list' => 'Danh sách',
        ],
    ],

    'profile' => [
        'title' => 'Chỉnh sửa hồ sơ',
        'choose_file' => 'Chọn tệp',
        'name' => 'Tên',
        'email' => 'Email',
        'phone' => 'Điện thoại',
        'current_password' => 'Mật khẩu hiện tại',
        'new_password' => 'Mật khẩu mới',
        'confirm_new_password' => 'Xác nhận mật khẩu mới',
        'save' => 'Lưu',
        'profile_updated' => 'Cập nhật hồ sơ thành công!',
        'success' => 'Thành công',
    ],

    'payment_gateways' => [

        // Page Titles
        'title' => 'Cổng thanh toán',
        'edit_title' => 'Chỉnh sửa cổng thanh toán',

        // Table Headings
        'id' => 'ID',
        'name' => 'Tên',
        'code' => 'Mã',
        'status' => 'Trạng thái',
        'action' => 'Hành động',

        // Status Labels
        'active' => 'Hoạt động',
        'inactive' => 'Không hoạt động',

        // Delete Modal
        'delete_confirm' => 'Xác nhận xóa',
        'delete_message' => 'Bạn có chắc chắn muốn xóa cổng thanh toán này không?',
        'cancel' => 'Hủy',
        'delete' => 'Xóa',

        // Alerts / Notifications
        'success' => 'Thành công',
        'deleted' => 'Đã xóa',
        'delete_error' => 'Lỗi khi xóa cổng thanh toán!',

        // Form Labels
        'gateway_name' => 'Tên cổng',
        'description' => 'Mô tả',
        'active_label' => 'Hoạt động',
        'configurations' => 'Cấu hình cổng',
        'key_name' => 'Tên khóa',
        'key_value' => 'Giá trị khóa',
        'environment' => 'Môi trường',
        'sandbox' => 'Sandbox',
        'production' => 'Production',
        'encrypted' => 'Đã mã hóa',
        'unique' => 'Độc nhất',
        'update_button' => 'Cập nhật',

        // Fallback
        'not_available' => 'Không có sẵn',
    ],

    'refunds' => [

        // Page Titles
        'title' => 'Hoàn tiền',
        'details_title' => 'Chi tiết hoàn tiền',

        // Table Headings
        'id' => 'ID',
        'payment' => 'Thanh toán',
        'amount' => 'Số tiền',
        'status' => 'Trạng thái',
        'reason' => 'Lý do',
        'action' => 'Hành động',

        // Status Labels
        'completed' => 'Hoàn tất',
        'pending' => 'Đang chờ',
        'failed' => 'Thất bại',

        // Delete Modal
        'delete_confirm' => 'Xác nhận xóa',
        'delete_message' => 'Bạn có chắc chắn muốn xóa khoản hoàn tiền này không?',
        'cancel' => 'Hủy',
        'delete' => 'Xóa',

        // Alerts / Notifications
        'success' => 'Thành công',
        'deleted' => 'Đã xóa',
        'delete_error' => 'Lỗi khi xóa khoản hoàn tiền!',

        // Refund Details Page
        'created_at' => 'Ngày tạo',
        'updated_at' => 'Ngày cập nhật',
        'back' => 'Quay lại danh sách hoàn tiền',

        // Fallback
        'not_available' => 'Không có sẵn',
    ],

    'payments' => [

        // Page Titles
        'title' => 'Thanh toán',
        'details_title' => 'Chi tiết thanh toán',

        // Table Headings
        'id' => 'ID',
        'order' => 'Đơn hàng',
        'user' => 'Người dùng',
        'gateway' => 'Cổng thanh toán',
        'amount' => 'Số tiền',
        'status' => 'Trạng thái',
        'transaction' => 'Giao dịch',
        'action' => 'Hành động',

        // Status Labels
        'completed' => 'Hoàn tất',
        'pending' => 'Đang chờ',
        'failed' => 'Thất bại',

        // Delete Modal
        'delete_confirm' => 'Xác nhận xóa',
        'delete_message' => 'Bạn có chắc chắn muốn xóa thanh toán này không?',
        'cancel' => 'Hủy',
        'delete' => 'Xóa',

        // Alerts / Notifications
        'success' => 'Thành công',
        'deleted' => 'Đã xóa',
        'delete_error' => 'Lỗi khi xóa thanh toán!',

        // Payment Details Page
        'transaction_id' => 'ID giao dịch',
        'created_at' => 'Ngày tạo',
        'back' => 'Quay lại Thanh toán',

        // Fallback
        'not_available' => 'Không có sẵn',
    ],

    'pages' => [
        // General
        'title' => 'Trang',
        'choose_file' => 'Chọn tệp',

        // Create Page
        'create' => 'Tạo Trang',
        'form_title' => 'Tiêu đề (:code)',
        'form_content' => 'Nội dung (:code)',
        'form_image' => 'Hình ảnh (:code)',
        'form_save' => 'Lưu',

        // Edit Page
        'edit' => 'Chỉnh sửa Trang',
        'form_update' => 'Cập nhật',

        // Pages Table
        'table_title' => 'Tiêu đề',
        'table_slug' => 'Slug',
        'table_status' => 'Trạng thái',
        'table_actions' => 'Hành động',

        // Delete Modal
        'delete_modal_title' => 'Xác nhận xóa',
        'delete_modal_text' => 'Bạn có chắc chắn muốn xóa trang này không?',
        'delete_modal_cancel' => 'Hủy',
        'delete_modal_delete' => 'Xóa',

        // Toastr messages
        'toastr_success' => 'Thành công',
        'toastr_error' => 'Lỗi khi xóa trang',
    ],

    'customers' => [
        'customer_list' => 'Danh sách khách hàng',

        // Table columns
        'id' => 'ID',
        'name' => 'Tên',
        'email' => 'E-mail',
        'phone' => 'Điện thoại',
        'address' => 'Địa chỉ',
        'status' => 'Trạng thái',
        'actions' => 'Hành động',

        // Status labels
        'active' => 'Hoạt động',
        'inactive' => 'Không hoạt động',

        // Modal
        'confirm_delete_title' => 'Xác nhận xóa',
        'confirm_delete_message' => 'Bạn có chắc chắn muốn xóa khách hàng này không?',
        'cancel_button' => 'Hủy',
        'delete_button' => 'Xóa',

        // Toastr messages
        'success_title' => 'Thành công',
        'deleted_title' => 'Đã xóa',
        'delete_success_message' => 'Xóa khách hàng thành công!',
        'delete_error_message' => 'Lỗi khi xóa khách hàng!',
    ],

    'vendors' => [
        'title_list' => 'Danh sách nhà cung cấp',
        'id' => 'ID',
        'name' => 'Tên',
        'email' => 'Email',
        'phone' => 'Số điện thoại',
        'status' => 'Trạng thái',
        'actions' => 'Hành động',
        'register_new_vendor' => 'Đăng ký nhà bán mới',
        'vendor_name' => 'Tên nhà bán',
        'vendor_email' => 'Email nhà bán',
        'phone_optional' => 'Số điện thoại (tùy chọn)',
        'password' => 'Mật khẩu',
        'confirm_password' => 'Xác nhận mật khẩu',
        'status' => 'Trạng thái',
        'active' => 'Hoạt động',
        'inactive' => 'Không hoạt động',
        'banned' => 'Bị cấm',
        'register_button' => 'Đăng ký nhà bán',
        'cancel_button' => 'Hủy',

        'active' => 'Hoạt động',
        'inactive' => 'Không hoạt động',

        'modal_confirm_delete_title' => 'Xác nhận xóa',
        'modal_confirm_delete_body' => 'Bạn có chắc chắn muốn xóa nhà cung cấp này không?',
        'delete' => 'Xóa',
        'cancel' => 'Hủy',

        'success' => 'Thành công',
        'success_delete' => 'Xóa nhà cung cấp thành công!',
        'error_delete' => 'Lỗi khi xóa nhà cung cấp! Vui lòng thử lại.',
    ],

    'languages' => [
        'english' => 'Tiếng Anh',
        'spanish' => 'Tiếng Tây Ban Nha',
        'french' => 'Tiếng Pháp',
        'arabic' => 'Tiếng Ả Rập',
        'german' => 'Tiếng Đức',
        'persian' => 'Tiếng Ba Tư (Farsi)',
        'hindi' => 'Tiếng Hindi',
        'indonesian' => 'Tiếng Indonesia',
        'italian' => 'Tiếng Ý',
        'japanese' => 'Tiếng Nhật',
        'korean' => 'Tiếng Hàn',
        'dutch' => 'Tiếng Hà Lan',
        'polish' => 'Tiếng Ba Lan',
        'portuguese' => 'Tiếng Bồ Đào Nha',
        'russian' => 'Tiếng Nga',
        'thai' => 'Tiếng Thái',
        'turkish' => 'Tiếng Thổ Nhĩ Kỳ',
        'vietnamese' => 'Tiếng Việt',
        'chinese' => 'Tiếng Trung',

        'language_change' => 'Thay đổi ngôn ngữ',
        'change_language' => 'Thay đổi ngôn ngữ',
        'confirm_language_change' => 'Bạn có chắc chắn muốn thay đổi ngôn ngữ không?',
        'cancel' => 'Hủy',
        'yes_change' => 'Có, thay đổi',
    ],

    'languages' => [
        'english' => 'Tiếng Anh',
        'spanish' => 'Tiếng Tây Ban Nha',
        'french' => 'Tiếng Pháp',
        'arabic' => 'Tiếng Ả Rập',
        'german' => 'Tiếng Đức',
        'persian' => 'Tiếng Ba Tư (Farsi)',
        'hindi' => 'Tiếng Hindi',
        'indonesian' => 'Tiếng Indonesia',
        'italian' => 'Tiếng Ý',
        'japanese' => 'Tiếng Nhật',
        'korean' => 'Tiếng Hàn',
        'dutch' => 'Tiếng Hà Lan',
        'polish' => 'Tiếng Ba Lan',
        'portuguese' => 'Tiếng Bồ Đào Nha',
        'russian' => 'Tiếng Nga',
        'thai' => 'Tiếng Thái',
        'turkish' => 'Tiếng Thổ Nhĩ Kỳ',
        'vietnamese' => 'Tiếng Việt',
        'chinese' => 'Tiếng Trung',

        'language_change' => 'Thay đổi ngôn ngữ',
        'change_language' => 'Thay đổi ngôn ngữ',
        'confirm_language_change' => 'Bạn có chắc chắn muốn thay đổi ngôn ngữ không?',
        'cancel' => 'Hủy',
        'yes_change' => 'Có, thay đổi',
    ],

    'categories' => [
        'heading' => 'Danh mục',
        'image' => 'Hình ảnh',
        'choose_file' => 'Chọn tệp',
        'id' => 'ID',
        'name' => 'Tên danh mục',
        'description' => 'Mô tả',
        'action' => 'Hành động',
        'edit' => 'Chỉnh sửa',
        'delete' => 'Xóa',
        'button' => 'Lưu',
        'add_new' => 'Thêm Mới',
        'status' => 'Trạng thái',
        'created' => 'Danh mục đã được tạo thành công!',
        'updated' => 'Danh mục đã được cập nhật thành công!',
        'deleted' => 'Danh mục đã được xóa thành công!',
        'status_updated' => 'Trạng thái danh mục đã được cập nhật thành công!',
        'massage_confirm' => 'Xác nhận xóa',
        'confirm_delete' => 'Bạn có chắc chắn muốn xóa danh mục này?',
        'massage_cancel' => 'Hủy',
        'massage_delete' => 'Xóa',
        'success' => 'Thành công',
    ],

    'datatables' => [
        'sEmptyTable' => 'Không có dữ liệu trong bảng',
        'sInfo' => 'Đang hiển thị từ _START_ đến _END_ của _TOTAL_ mục',
        'sInfoEmpty' => 'Đang hiển thị từ 0 đến 0 của 0 mục',
        'sInfoFiltered' => '(lọc từ _MAX_ tổng số mục)',
        'sLengthMenu' => 'Hiển thị _MENU_ mục',
        'sLoadingRecords' => 'Đang tải...',
        'sProcessing' => 'Đang xử lý...',
        'sSearch' => 'Tìm kiếm:',
        'sZeroRecords' => 'Không tìm thấy bản ghi nào',
        'oPaginate' => [
            'sFirst' => 'Đầu tiên',
            'sLast' => 'Cuối cùng',
            'sNext' => 'Tiếp theo',
            'sPrevious' => 'Trước đó',
        ],
    ],

    'products' => [

        // Titles
        'title_create' => 'Tạo Sản Phẩm',
        'title_edit' => 'Chỉnh Sửa Sản Phẩm',
        'title_manage' => 'Quản Lý Sản Phẩm',

        // Form Fields
        'vendor' => 'Người bán',
        'select_vendor' => 'Chọn Người bán',
        'product_name' => 'Tên Sản Phẩm',
        'product_type' => 'Loại Sản Phẩm',
        'description' => 'Mô Tả',
        'translations' => 'Bản Dịch',
        'translated_value' => 'Giá Trị Dịch',
        'category' => 'Danh Mục',
        'brand' => 'Thương Hiệu',
        'no_brand' => 'Không Có Thương Hiệu',
        'status' => 'Trạng Thái',
        'price' => 'Giá',
        'discount_price' => 'Giá Khuyến Mãi',
        'sku' => 'SKU',
        'barcode' => 'Mã Vạch',
        'stock' => 'Tồn Kho',
        'weight' => 'Cân Nặng',
        'dimension' => 'Kích Thước',
        'size' => 'Kích Cỡ',
        'color' => 'Màu Sắc',
        'images' => 'Hình Ảnh Sản Phẩm',
        'is_primary' => 'Biến Thể Chính',
        'variant_name_en' => 'Tên Biến Thể',
        'attributes' => 'Thuộc Tính',
        'attribute_values' => 'Giá Trị Thuộc Tính',
        'variants' => 'Biến Thể',

        // Buttons
        'add_variant' => 'Thêm Biến Thể',
        'remove_variant' => 'Xóa Biến Thể',
        'save_product' => 'Lưu Sản Phẩm',
        'update_product' => 'Cập Nhật Sản Phẩm',
        'choose_images' => 'Chọn Hình Ảnh',
        'choose_file' => 'Chọn Tệp',
        'remove' => 'Xóa',

        // Messages
        'status_updated' => 'Trạng thái sản phẩm đã được cập nhật thành công!',
        'success_create' => 'Sản phẩm đã được tạo thành công!',
        'success_update' => 'Sản phẩm đã được cập nhật thành công!',
        'success_delete' => 'Sản phẩm đã được xóa thành công!',
        'delete_confirmation' => 'Bạn có chắc chắn muốn xóa sản phẩm này không?',
        'success' => 'Thành Công',

        // Table Columns
        'id' => 'ID',
        'name' => 'Tên',
        'type' => 'Loại',
        'price_column' => 'Giá',
        'status_column' => 'Trạng Thái',
        'action' => 'Hành Động',

        // Confirmation Dialog
        'confirm_delete' => 'Xác Nhận Xóa',
        'delete' => 'Xóa',
        'cancel' => 'Hủy',
    ],

    'brands' => [
        'heading' => 'Thương hiệu',
        'id' => 'ID',
        'name' => 'Tên thương hiệu',
        'description' => 'Mô tả',
        'logo' => 'Logo',
        'status' => 'Trạng thái',
        'action' => 'Hành động',
        'edit' => 'Chỉnh sửa',
        'delete' => 'Xóa',
        'create' => 'Tạo mới',
        'update' => 'Cập nhật',
        'add_new' => 'Thêm mới',
        'button' => 'Lưu',
        'form_title' => 'Tạo hoặc chỉnh sửa thương hiệu',
        'file_upload' => 'Tải lên logo',
        'no_logo' => 'Không có logo',
        'choose_file' => 'Chọn tệp',
        'image_preview' => 'Xem trước hình ảnh',
        'delete_confirmation' => 'Bạn có chắc chắn muốn xóa thương hiệu này?',
        'brand_deleted' => 'Thương hiệu đã được xóa thành công!',
        'error_delete' => 'Lỗi khi xóa thương hiệu!',
        'created' => 'Thương hiệu đã được tạo thành công!',
        'updated' => 'Thương hiệu đã được cập nhật thành công!',
        'deleted' => 'Thương hiệu đã được xóa thành công!',
        'status_updated' => 'Trạng thái thương hiệu đã được cập nhật thành công!',
        'massage_confirm' => 'Xác nhận xóa',
        'confirm_delete' => 'Bạn có chắc chắn muốn xóa thương hiệu này không?',
        'massage_cancel' => 'Hủy',
        'massage_delete' => 'Xóa',
        'success' => 'Thành công',
    ],

    'banners' => [
        'button_back' => 'Quay lại',
        'description' => 'Mô tả',
        'choose_file' => 'Chọn tệp',
        'all_banners' => 'Tất cả các Banner',
        'id' => 'ID',
        'add_new' => 'Thêm Mới',
        'banner_type' => 'Loại Banner',
        'promotion' => 'Khuyến Mãi',
        'sale' => 'Giảm Giá',
        'seasonal' => 'Mùa',
        'featured' => 'Nổi Bật',
        'announcement' => 'Thông Báo',
        'actions' => 'Hành Động',
        'edit' => 'Chỉnh Sửa',
        'delete' => 'Xóa',
        'no_image' => 'Không có hình ảnh',
        'delete_confirmation' => 'Bạn có chắc chắn muốn xóa banner này?',
        'banner_deleted' => 'Banner đã được xóa thành công!',
        'error_delete' => 'Lỗi khi xóa banner!',
        'image_preview' => 'Xem Trước Hình Ảnh',
        'create_banner' => 'Tạo Banner',
        'edit_banner' => 'Chỉnh Sửa Banner',
        'save' => 'Lưu',
        'languages' => 'Ngôn Ngữ',
        'status' => 'Trạng Thái',
        'image' => 'Hình Ảnh',
        'image_title' => 'Tiêu Đề Hình Ảnh',
        'title' => 'Tiêu Đề',
        'select_language' => 'Chọn Ngôn Ngữ',
        'file_upload' => 'Tải Lên Hình Ảnh',
        'choose_file' => 'Chọn Tệp',
        'existing_image' => 'Hình Ảnh Hiện Tại',
        'banner_saved' => 'Banner đã được lưu thành công!',
        'banner_updated' => 'Banner đã được cập nhật thành công!',
        'form_title' => 'Tạo hoặc Chỉnh sửa Banner',
        'form_description' => 'Vui lòng cung cấp tất cả thông tin cần thiết cho banner.',
        'back_to_list' => 'Quay lại danh sách Banner',
        'created' => 'Biểu ngữ đã được tạo thành công!',
        'updated' => 'Biểu ngữ đã được cập nhật thành công!',
        'deleted' => 'Biểu ngữ đã được xóa thành công!',
        'status_updated' => 'Trạng thái biểu ngữ đã được cập nhật thành công!',
        'massage_confirm' => 'Xác nhận xóa',
        'confirm_delete' => 'Bạn có chắc chắn muốn xóa biểu ngữ này không?',
        'massage_cancel' => 'Hủy',
        'massage_delete' => 'Xóa',
        'success' => 'Thành công',

    ],

    'menus' => [
        'all_menus' => 'Tất cả các Menu',
        'id' => 'ID',
        'add_new' => 'Thêm Mới',
        'button_create' => 'Tạo',
        'button_update' => 'Cập Nhật',
        'title' => 'Tiêu Đề',
        'edit' => 'Chỉnh Sửa',
        'action' => 'Hành Động',
        'delete' => 'Xóa',
        'created_at' => 'Được Tạo Vào',
        'no_menus' => 'Không có menu nào',
        'delete_confirmation' => 'Bạn có chắc chắn muốn xóa menu này?',
        'menu_deleted' => 'Menu đã được xóa thành công!',
        'error_delete' => 'Lỗi khi xóa menu!',
        'create_menu' => 'Tạo Menu',
        'edit_menu' => 'Chỉnh Sửa Menu',
        'save' => 'Lưu',
        'menu_title' => 'Tiêu Đề Menu',
        'form_title' => 'Tạo hoặc Chỉnh Sửa Menu',
        'form_description' => 'Vui lòng cung cấp tất cả các thông tin cần thiết cho menu.',
        'back_to_list' => 'Quay lại danh sách menu',
        'created' => 'Tạo menu thành công!',
        'updated' => 'Cập nhật menu thành công!',
        'deleted' => 'Xóa menu thành công!',
        'status_updated' => 'Cập nhật trạng thái menu thành công!',
        'massage_confirm' => 'Xác nhận xóa',
        'confirm_delete' => 'Bạn có chắc chắn muốn xóa menu này không?',
        'massage_cancel' => 'Hủy',
        'massage_delete' => 'Xóa',
        'success' => 'Thành công',

    ],

    'menu_items' => [
        'heading' => 'Tất cả các Mục Menu',
        'id' => 'ID',
        'create' => 'Tạo Mục Menu',
        'choose_an_option' => 'Chọn một tùy chọn',
        'select_an_option' => 'Chọn một tùy chọn',
        'option1' => 'Tùy chọn 1',
        'option2' => 'Tùy chọn 2',
        'option3' => 'Tùy chọn 3',
        'option4' => 'Tùy chọn 4',
        'order_number' => 'Số thứ tự',
        'parent_item' => 'Mục Cha',
        'parent_none' => 'Không có',
        'edit' => 'Chỉnh Sửa Mục Menu',
        'update' => 'Cập Nhật Mục Menu',
        'delete' => 'Xóa Mục Menu',
        'title' => 'Tiêu Đề',
        'button' => 'Lưu',
        'update_button' => 'Cập Nhật',
        'slug' => 'Slug',
        'order' => 'Thứ Tự',
        'actions' => 'Hành Động',
        'add_new' => 'Thêm Mới',
        'submit' => 'Gửi',
        'cancel' => 'Hủy',
        'no_title' => 'Không Có Tiêu Đề',
        'select_menu' => 'Chọn một Menu',
        'select_parent_item' => 'Chọn Mục Cha',
        'language' => 'Ngôn Ngữ',
        'select_language' => 'Chọn Ngôn Ngữ',
        'select_order' => 'Chọn Thứ Tự',
        'success_message' => 'Mục menu đã được tạo thành công!',
        'error_message' => 'Đã có lỗi khi tạo mục menu.',
        'confirm_delete' => 'Bạn có chắc chắn muốn xóa mục menu này?',
        'update_success_message' => 'Mục menu đã được cập nhật thành công!',
        'update_error_message' => 'Đã có lỗi khi cập nhật mục menu.',
        'created' => 'Tạo mục menu thành công!',
        'updated' => 'Cập nhật mục menu thành công!',
        'deleted' => 'Xóa mục menu thành công!',
        'status_updated' => 'Cập nhật trạng thái mục menu thành công!',
        'massage_confirm' => 'Xác nhận xóa',
        'confirm_delete' => 'Bạn có chắc chắn muốn xóa mục menu này không?',
        'massage_cancel' => 'Hủy',
        'massage_delete' => 'Xóa',
        'success' => 'Thành công',

    ],
    'errors' => [
        'validation_failed' => 'Kiểm tra hợp lệ không thành công! Vui lòng sửa lỗi và thử lại.',
        'csrf_token_invalid' => 'Token CSRF không hợp lệ. Vui lòng làm mới trang và thử lại.',
        'not_found' => 'Không tìm thấy mục yêu cầu.',
        'unauthorized' => 'Bạn không có quyền thực hiện hành động này.',
    ],
    'messages' => [
        'welcome' => 'Chào mừng bạn đến với Bảng Điều Khiển Quản Trị!',
        'dashboard' => 'Bảng Điều Khiển',
        'settings' => 'Cài Đặt',
        'log_out' => 'Đăng Xuất',
        'profile' => 'Hồ Sơ',
        'menu' => 'Menu',
        'home' => 'Trang Chủ',
        'view_details' => 'Xem Chi Tiết',
    ],

    'social_media_links' => [
        'type' => 'Loại mạng xã hội',
        'select_type' => 'Chọn loại mạng xã hội',
        'types' => [
            'facebook' => 'Facebook',
            'instagram' => 'Instagram',
            'tiktok' => 'TikTok',
            'youtube' => 'YouTube',
            'x' => 'X',
        ],

        'id' => 'ID',
        'create' => 'Tạo liên kết mạng xã hội',
        'edit' => 'Chỉnh sửa liên kết mạng xã hội',
        'platform' => 'Tên nền tảng',
        'link' => 'Liên kết mạng xã hội',
        'created' => 'Liên kết mạng xã hội đã được tạo thành công!',
        'updated' => 'Liên kết mạng xã hội đã được cập nhật thành công!',
        'deleted' => 'Liên kết mạng xã hội đã được xóa thành công!',
        'status_updated' => 'Trạng thái liên kết mạng xã hội đã được cập nhật thành công!',
        'massage_confirm' => 'Xác nhận xóa',
        'confirm_delete' => 'Bạn có chắc chắn muốn xóa liên kết mạng xã hội này không?',
        'massage_cancel' => 'Hủy',
        'massage_delete' => 'Xóa',
        'success' => 'Thành công',

        'translations' => [
            'platform_name' => 'Tên nền tảng (dịch)',
        ],
        'save' => 'Lưu',
        'update' => 'Cập nhật',
        'delete' => 'Xóa',
        'no_links' => 'Không có liên kết mạng xã hội',
        'delete_confirmation' => 'Bạn có chắc chắn muốn xóa liên kết này?',
        'link_deleted' => 'Liên kết mạng xã hội đã được xóa thành công!',
        'error_delete' => 'Lỗi khi xóa liên kết!',
        'create_link' => 'Tạo liên kết mạng xã hội',
        'edit_link' => 'Chỉnh sửa liên kết mạng xã hội',
        'form_title' => 'Tạo hoặc chỉnh sửa liên kết mạng xã hội',
        'form_description' => 'Vui lòng cung cấp tất cả thông tin cần thiết cho liên kết mạng xã hội.',
        'back_to_list' => 'Quay lại danh sách liên kết mạng xã hội',
        'add_new' => 'Thêm mới',
        'trans_name' => 'Tên đã dịch',
        'delete' => 'Xóa',
        'action' => 'Hành động',
    ],

    'orders' => [

        // Page Title
        'title' => 'Danh sách đơn hàng',

        // Table Headings
        'id' => 'Mã đơn hàng',
        'order_date' => 'Ngày đặt hàng',
        'status' => 'Trạng thái',
        'total_price' => 'Tổng giá',
        'action' => 'Hành động',
        'customer' => 'Khách hàng',

        // Delete Modal
        'delete_confirm_title' => 'Xác nhận xóa',
        'delete_confirm_message' => 'Bạn có chắc chắn muốn xóa đơn hàng này không?',
        'delete_cancel' => 'Hủy',
        'delete_button' => 'Xóa',

        // Toastr / Flash Messages
        'deleted_success' => 'Xóa đơn hàng thành công.',
        'deleted_error' => 'Xóa đơn hàng thất bại.',
        'deleted' => 'Đã xóa',
        'success' => 'Thành Công',
    ],

    'attributes' => [
        'title_create' => 'Tạo Thuộc Tính',
        'title_edit' => 'Chỉnh Sửa Thuộc Tính',
        'title_manage' => 'Quản Lý Thuộc Tính',

        'attribute_name' => 'Tên Thuộc Tính',
        'attribute_values' => 'Giá Trị Thuộc Tính',
        'translations' => 'Dịch Thuật',
        'translated_value' => 'Giá Trị Dịch Thuật',

        'add_value' => 'Thêm Giá Trị',
        'remove_value' => 'Xóa',
        'save_attribute' => 'Lưu Thuộc Tính',
        'update_attribute' => 'Cập Nhật Thuộc Tính',
        'add_value_translation' => 'Thêm bản dịch giá trị',

        'success_create' => 'Tạo Thuộc Tính Thành Công!',
        'success_update' => 'Cập Nhật Thuộc Tính Thành Công!',
        'success_delete' => 'Xóa Thuộc Tính Thành Công!',
        'delete_confirmation' => 'Bạn có chắc chắn muốn xóa thuộc tính này?',
        'success' => 'Thành Công',

        'id' => 'ID',
        'name' => 'Tên',
        'values' => 'Giá Trị',
        'action' => 'Hành Động',

        'confirm_delete' => 'Xác Nhận Xóa',
        'delete' => 'Xóa',
        'cancel' => 'Hủy',
    ],

    'product_reviews' => [
        'title_manage' => 'Quản lý đánh giá sản phẩm',

        'review_id' => 'ID đánh giá',
        'customer_name' => 'Tên khách hàng',
        'product_name' => 'Tên sản phẩm',
        'rating' => 'Đánh giá',
        'status' => 'Trạng thái',
        'actions' => 'Hành động',
        'review_details' => 'Chi tiết đánh giá',
        'review' => 'Đánh giá',
        'back_button' => 'Quay lại danh sách',

        'confirm_delete' => 'Xác nhận xóa',
        'delete_message' => 'Bạn có chắc chắn muốn xóa đánh giá sản phẩm này?',
        'delete' => 'Xóa',
        'cancel' => 'Hủy',

        'success_create' => 'Đánh giá sản phẩm đã được tạo thành công!',
        'success_update' => 'Đánh giá sản phẩm đã được cập nhật thành công!',
        'success_delete' => 'Đánh giá sản phẩm đã được xóa thành công!',
        'error_delete' => 'Lỗi khi xóa đánh giá sản phẩm! Vui lòng thử lại.',

        'success' => 'Thành công',
        'error' => 'Lỗi',
    ],

];
