<?php

return [
    'auth' => [
        'velstore' => 'Velstore',
        'login' => 'Login',
        'email' => 'Email Address',
        'password' => 'Password',
        'remember_me' => 'Remember Me',
        'forgot_password' => 'Forgot Your Password?',
    ],

    'profile' => [
        'profile' => 'profile',
        'setting' => 'setting',
        'logout' => 'logout',
    ],

    'dashboard' => [
        'total_sales' => 'Total Sales',
        'today' => 'Today',
        'total' => 'Total',

        'total_orders' => 'Total Orders',
        'completed' => 'Completed',
        'all_orders' => 'All Orders',

        'total_vendors' => 'Total Vendors',
        'active' => 'Active',

        'total_customers' => 'Total Customers',

        'my_sales' => 'My Sales',
        'my_orders' => 'My Orders',
        'my_products' => 'My Products',
    ],

    'sidebar' => [
        'search_placeholder' => 'Search...',
        'dashboard' => 'Dashboard',
        'logo' => 'Logo',

        'categories' => [
            'title' => 'Categories',
            'add_new' => 'Add New',
            'list' => 'List',
        ],
        'brands' => [
            'title' => 'Brands',
            'add_new' => 'Add New',
            'list' => 'List',
        ],
        'products' => [
            'title' => 'Products',
            'add_new' => 'Add New',
            'list' => 'List',
        ],
        'attributes' => [
            'title' => 'Attributes',
            'add_new' => 'Add New',
            'list' => 'List',
        ],
        'customers' => [
            'title' => 'Customers',
            'list' => 'List',
        ],
        'vendors' => [
            'title' => 'Vendors',
            'add_new' => 'Add New',
            'list' => 'List',
        ],
        'product_reviews' => [
            'title' => 'Product Reviews',
            'list' => 'List',
        ],
        'banners' => [
            'title' => 'Banners',
            'add_new' => 'Add New',
            'list' => 'List',
        ],
        'menu' => [
            'title' => 'Menu',
            'add_new' => 'Add New',
            'list' => 'List',
        ],
        'menu_items' => [
            'title' => 'Menu Items',
            'add_new' => 'Add New',
            'list' => 'List',
        ],
        'social_media_links' => [
            'title' => 'Social Media Links',
            'add_new' => 'Add New',
            'list' => 'List',
        ],
        'site_settings' => [
            'title' => 'Site Settings',
            'manage' => 'Manage Settings',
        ],
        'orders' => [
            'title' => 'Orders',
            'all_orders' => 'All Orders',
            'pending_orders' => 'Pending Orders',
            'completed_orders' => 'Completed Orders',
            'list' => 'List',
        ],
        'pages' => [
            'title' => 'Pages',
            'add_new' => 'Add New',
            'list' => 'List',
        ],
        'payments' => [
            'title' => 'Payments',
            'list' => 'List',
        ],

        'refunds' => [
            'title' => 'Refunds',
            'list' => 'List',
        ],

        'payment_gateways' => [
            'title' => 'Payment Gateways',
            'list' => 'List',
        ],
    ],

    'profile' => [
        'title' => 'Edit Profile',
        'choose_file' => 'Choose File',
        'name' => 'Name',
        'email' => 'Email',
        'phone' => 'Phone',
        'current_password' => 'Current Password',
        'new_password' => 'New Password',
        'confirm_new_password' => 'Confirm New Password',
        'save' => 'Save',
        'profile_updated' => 'Profile updated successfully!',
        'success' => 'Success',
    ],

    'payment_gateways' => [

        // Page Titles
        'title' => 'Payment Gateways',
        'edit_title' => 'Edit Payment Gateway',

        // Table Headings
        'id' => 'ID',
        'name' => 'Name',
        'code' => 'Code',
        'status' => 'Status',
        'action' => 'Action',

        // Status Labels
        'active' => 'Active',
        'inactive' => 'Inactive',

        // Delete Modal
        'delete_confirm' => 'Confirm Delete',
        'delete_message' => 'Are you sure you want to delete this payment gateway?',
        'cancel' => 'Cancel',
        'delete' => 'Delete',

        // Alerts / Notifications
        'success' => 'Success',
        'deleted' => 'Deleted',
        'delete_error' => 'Error deleting payment gateway!',

        // Form Labels
        'gateway_name' => 'Gateway Name',
        'description' => 'Description',
        'active_label' => 'Active',
        'configurations' => 'Gateway Configurations',
        'key_name' => 'Key Name',
        'key_value' => 'Key Value',
        'environment' => 'Environment',
        'sandbox' => 'Sandbox',
        'production' => 'Production',
        'encrypted' => 'Encrypted',
        'unique' => 'unique',
        'update_button' => 'Update',

        // Fallback
        'not_available' => 'N/A',
    ],

    'refunds' => [

        // Page Titles
        'title' => 'Refunds',
        'details_title' => 'Refund Details',

        // Table Headings
        'id' => 'ID',
        'payment' => 'Payment',
        'amount' => 'Amount',
        'status' => 'Status',
        'reason' => 'Reason',
        'action' => 'Action',

        // Status Labels
        'completed' => 'Completed',
        'pending' => 'Pending',
        'failed' => 'Failed',

        // Delete Modal
        'delete_confirm' => 'Confirm Delete',
        'delete_message' => 'Are you sure you want to delete this refund?',
        'cancel' => 'Cancel',
        'delete' => 'Delete',

        // Alerts / Notifications
        'success' => 'Success',
        'deleted' => 'Deleted',
        'delete_error' => 'Error deleting refund!',

        // Refund Details Page
        'created_at' => 'Created At',
        'updated_at' => 'Updated At',
        'back' => 'Back to Refunds',

        // Fallback
        'not_available' => 'N/A',
    ],

    'payments' => [

        // Page Titles
        'title' => 'Payments',
        'details_title' => 'Payment Details',

        // Table Headings
        'id' => 'ID',
        'order' => 'Order',
        'user' => 'User',
        'gateway' => 'Gateway',
        'amount' => 'Amount',
        'status' => 'Status',
        'transaction' => 'Transaction',
        'action' => 'Action',

        // Status Labels
        'completed' => 'Completed',
        'pending' => 'Pending',
        'failed' => 'Failed',

        // Delete Modal
        'delete_confirm' => 'Confirm Delete',
        'delete_message' => 'Are you sure you want to delete this payment?',
        'cancel' => 'Cancel',
        'delete' => 'Delete',

        // Alerts / Notifications
        'success' => 'Success',
        'deleted' => 'Deleted',
        'delete_error' => 'Error deleting payment!',

        // Payment Details Page
        'transaction_id' => 'Transaction ID',
        'created_at' => 'Created At',
        'back' => 'Back to Payments',

        // Fallback
        'not_available' => 'N/A',
    ],

    'pages' => [
        // General
        'title' => 'Pages',
        'choose_file' => 'Choose File',

        // Create Page
        'create' => 'Create Page',
        'form_title' => 'Title (:code)',
        'form_content' => 'Content (:code)',
        'form_image' => 'Image (:code)',
        'form_save' => 'Save',

        // Edit Page
        'edit' => 'Edit Page',
        'form_update' => 'Update',

        // Pages Table
        'table_title' => 'Title',
        'table_slug' => 'Slug',
        'table_status' => 'Status',
        'table_actions' => 'Actions',

        // Delete Modal
        'delete_modal_title' => 'Confirm Deletion',
        'delete_modal_text' => 'Are you sure you want to delete this page?',
        'delete_modal_cancel' => 'Cancel',
        'delete_modal_delete' => 'Delete',

        // Toastr messages
        'toastr_success' => 'Success',
        'toastr_error' => 'Error deleting page',
    ],

    'customers' => [
        'customer_list' => 'Customer List',

        // Table columns
        'id' => 'Id',
        'name' => 'Name',
        'email' => 'Email',
        'phone' => 'Phone',
        'address' => 'Address',
        'status' => 'Status',
        'actions' => 'Actions',

        // Status labels
        'active' => 'Active',
        'inactive' => 'Inactive',

        // Modal
        'confirm_delete_title' => 'Confirm Delete',
        'confirm_delete_message' => 'Are you sure you want to delete this customer?',
        'cancel_button' => 'Cancel',
        'delete_button' => 'Delete',

        // Toastr messages
        'success_title' => 'Success',
        'deleted_title' => 'Deleted',
        'delete_success_message' => 'Customer deleted successfully!',
        'delete_error_message' => 'Error deleting customer!',
    ],

    'vendors' => [
        'title_list' => 'Vendor List',
        'id' => 'Id',
        'name' => 'Name',
        'email' => 'Email',
        'phone' => 'Phone',
        'status' => 'Status',
        'actions' => 'Actions',
        'register_new_vendor' => 'Register New Vendor',
        'vendor_name' => 'Vendor Name',
        'vendor_email' => 'Vendor Email',
        'phone_optional' => 'Phone (Optional)',
        'password' => 'Password',
        'confirm_password' => 'Confirm Password',
        'status' => 'Status',
        'active' => 'Active',
        'inactive' => 'Inactive',
        'banned' => 'Banned',
        'register_button' => 'Register Vendor',
        'cancel_button' => 'Cancel',

        'active' => 'Active',
        'inactive' => 'Inactive',

        'modal_confirm_delete_title' => 'Confirm Delete',
        'modal_confirm_delete_body' => 'Are you sure you want to delete this vendor?',
        'delete' => 'Delete',
        'cancel' => 'Cancel',

        'success' => 'Success',
        'error_delete' => 'Error deleting vendor! Please try again.',
    ],

    'languages' => [
        'english' => 'English',
        'spanish' => 'Spanish',
        'french' => 'French',
        'arabic' => 'Arabic',
        'german' => 'German',
        'persian' => 'Persian (Farsi)',
        'hindi' => 'Hindi',
        'indonesian' => 'Indonesian',
        'italian' => 'Italian',
        'japanese' => 'Japanese',
        'korean' => 'Korean',
        'dutch' => 'Dutch',
        'polish' => 'Polish',
        'portuguese' => 'Portuguese',
        'russian' => 'Russian',
        'thai' => 'Thai',
        'turkish' => 'Turkish',
        'vietnamese' => 'Vietnamese',
        'chinese' => 'Chinese',

        'language_change' => 'Language Change',
        'change_language' => 'Change Language',
        'confirm_language_change' => 'Are you sure you want to change the language?',
        'cancel' => 'Cancel',
        'yes_change' => 'Yes, Change',
    ],

    'categories' => [
        'heading' => 'Categories',
        'image' => 'Image',
        'choose_file' => 'Choose File',
        'id' => 'Id',
        'name' => 'Category Name',
        'description' => 'Description',
        'action' => 'Action',
        'edit' => 'edit',
        'delete' => 'delete',
        'button' => 'Save',
        'add_new' => 'Add New',
        'status' => 'Status',
        'created' => 'Category created successfully!',
        'updated' => 'Category updated successfully!',
        'deleted' => 'Category deleted successfully!',
        'status_updated' => 'Category status updated successfully!',
        'massage_confirm' => 'Confirm Deletion',
        'confirm_delete' => 'Are you sure you want to delete this category?',
        'massage_cancel' => 'Cancel',
        'massage_delete' => 'Delete',
        'success' => 'Success',
    ],

    'datatables' => [
        'sEmptyTable' => 'No data available in table',
        'sInfo' => 'Showing _START_ to _END_ of _TOTAL_ entries',
        'sInfoEmpty' => 'Showing 0 to 0 of 0 entries',
        'sInfoFiltered' => '(filtered from _MAX_ total entries)',
        'sLengthMenu' => 'Show _MENU_ entries',
        'sLoadingRecords' => 'Loading...',
        'sProcessing' => 'Processing...',
        'sSearch' => 'Search:',
        'sZeroRecords' => 'No matching records found',
        'oPaginate' => [
            'sFirst' => 'First',
            'sLast' => 'Last',
            'sNext' => 'Next',
            'sPrevious' => 'Previous',
        ],
    ],

    'products' => [

        // Titles
        'title_create' => 'Create Product',
        'title_edit' => 'Edit Product',
        'title_manage' => 'Manage Products',

        // Form Fields
        'vendor' => 'Vendor',
        'select_vendor' => 'Select Vendor',
        'product_name' => 'Product Name',
        'product_type' => 'Product Type',
        'description' => 'Description',
        'translations' => 'Translations',
        'translated_value' => 'Translated Value',
        'category' => 'Category',
        'brand' => 'Brand',
        'no_brand' => 'No Brand',
        'status' => 'Status',
        'price' => 'Price',
        'discount_price' => 'Discount Price',
        'sku' => 'SKU',
        'barcode' => 'Barcode',
        'stock' => 'Stock',
        'weight' => 'Weight',
        'dimension' => 'Dimensions',
        'size' => 'Size',
        'color' => 'Color',
        'images' => 'Product Images',
        'is_primary' => 'Primary Variant',
        'variant_name_en' => 'Variant Name',
        'attributes' => 'Attributes',
        'attribute_values' => 'Attribute Values',
        'variants' => 'Variants',

        // Buttons
        'add_variant' => 'Add Variant',
        'remove_variant' => 'Remove Variant',
        'save_product' => 'Save Product',
        'update_product' => 'Update Product',
        'choose_images' => 'Choose Images',
        'choose_file' => 'Choose File',
        'remove' => 'Remove',

        // Messages
        'status_updated' => 'product status updated successfully!',
        'success_create' => 'Product created successfully!',
        'success_update' => 'Product updated successfully!',
        'success_delete' => 'Product deleted successfully!',
        'delete_confirmation' => 'Are you sure you want to delete this product?',
        'success' => 'Success',

        // Table Columns
        'id' => 'ID',
        'name' => 'Name',
        'type' => 'Type',
        'price_column' => 'Price',
        'status_column' => 'Status',
        'action' => 'Action',

        // Confirmation Dialog
        'confirm_delete' => 'Confirm Delete',
        'delete' => 'Delete',
        'cancel' => 'Cancel',
    ],

    'brands' => [
        'heading' => 'Brands',
        'id' => 'ID',
        'name' => 'Name',
        'description' => 'Description',
        'logo' => 'Logo',
        'status' => 'Status',
        'action' => 'Action',
        'edit' => 'Edit',
        'delete' => 'Delete',
        'create' => 'Create',
        'update' => 'Update',
        'add_new' => 'Add New',
        'button' => 'Save',
        'form_title' => 'Create or Edit Brand',
        'file_upload' => 'Upload Logo',
        'no_logo' => 'No Logo',
        'choose_file' => 'Choose file',
        'image_preview' => 'Image Preview',
        'delete_confirmation' => 'Are you sure you want to delete this brand?',
        'brand_deleted' => 'Brand deleted successfully!',
        'error_delete' => 'Error deleting brand!',
        'created' => 'Brand created successfully!',
        'updated' => 'Brand updated successfully!',
        'deleted' => 'Brand deleted successfully!',
        'status_updated' => 'Brand status updated successfully!',
        'massage_confirm' => 'Confirm Deletion',
        'confirm_delete' => 'Are you sure you want to delete this brand?',
        'massage_cancel' => 'Cancel',
        'massage_delete' => 'Delete',
        'success' => 'Success',
    ],

    'banners' => [
        'button_back' => 'Back',
        'description' => 'Description',
        'choose_file' => 'Choose file',
        'all_banners' => 'All Banners',
        'id' => 'Id',
        'add_new' => 'Add New',
        'banner_type' => 'Banner Type',
        'promotion' => 'Promotion',
        'sale' => 'Sale',
        'seasonal' => 'Seasonal',
        'featured' => 'Featured',
        'announcement' => 'Announcement',
        'actions' => 'Actions',
        'edit' => 'Edit',
        'delete' => 'Delete',
        'no_image' => 'No image available',
        'delete_confirmation' => 'Are you sure you want to delete this banner?',
        'banner_deleted' => 'Banner deleted successfully!',
        'error_delete' => 'Error deleting banner!',
        'image_preview' => 'Image Preview',
        'create_banner' => 'Create Banner',
        'edit_banner' => 'Edit Banner Translations',
        'save' => 'Save',
        'languages' => 'Languages',
        'status' => 'Status',
        'image' => 'Image',
        'image_title' => 'Image Title',
        'title' => 'Title',
        'select_language' => 'Select Language',
        'file_upload' => 'Upload Image',
        'choose_file' => 'Choose File',
        'existing_image' => 'Existing Image',
        'banner_saved' => 'Banner saved successfully!',
        'banner_updated' => 'Banner updated successfully!',
        'form_title' => 'Create or Edit Banner',
        'form_description' => 'Please provide all the necessary information for the banner.',
        'back_to_list' => 'Back to Banner List',
        'created' => 'Banner created successfully!',
        'updated' => 'Banner updated successfully!',
        'deleted' => 'Banner deleted successfully!',
        'status_updated' => 'Banner status updated successfully!',
        'massage_confirm' => 'Confirm Deletion',
        'confirm_delete' => 'Are you sure you want to delete this banner?',
        'massage_cancel' => 'Cancel',
        'massage_delete' => 'Delete',
        'success' => 'Success',
    ],

    'menus' => [
        'all_menus' => 'All Menus',
        'id' => 'Id',
        'add_new' => 'Add New',
        'button_create' => 'Create',
        'button_update' => 'Update',
        'title' => 'Title',
        'edit' => 'Edit',
        'action' => 'Action',
        'delete' => 'Delete',
        'created_at' => 'Created At',
        'no_menus' => 'No menus available',
        'delete_confirmation' => 'Are you sure you want to delete this menu?',
        'menu_deleted' => 'Menu deleted successfully!',
        'error_delete' => 'Error deleting menu!',
        'create_menu' => 'Create Menu',
        'edit_menu' => 'Edit Menu',
        'save' => 'Save',
        'menu_title' => 'Menu Title',
        'form_title' => 'Create or Edit Menu',
        'form_description' => 'Please provide all the necessary information for the menu.',
        'back_to_list' => 'Back to Menu List',
        'created' => 'Menu created successfully!',
        'updated' => 'Menu updated successfully!',
        'deleted' => 'Menu deleted successfully!',
        'status_updated' => 'Menu status updated successfully!',
        'massage_confirm' => 'Confirm Deletion',
        'confirm_delete' => 'Are you sure you want to delete this menu?',
        'massage_cancel' => 'Cancel',
        'massage_delete' => 'Delete',
        'success' => 'Success',

    ],

    'menu_items' => [
        'heading' => 'All Menu Items',
        'id' => 'Id',
        'create' => 'Create Menu Item',
        'choose_an_option' => 'Choose an Option',
        'select_an_option' => 'Select an Option',
        'option1' => 'Option 1',
        'option2' => 'Option 2',
        'option3' => 'Option 3',
        'option4' => 'Option 4',
        'order_number' => 'Order Number',
        'parent_item' => 'Parent Item',
        'parent_none' => 'None',
        'edit' => 'Edit Menu Item',
        'update' => 'Update Menu Item',
        'delete' => 'Delete Menu Item',
        'title' => 'Title',
        'button' => 'Save',
        'update_button' => 'Update',
        'slug' => 'Slug',
        'order' => 'Order',
        'actions' => 'Actions',
        'add_new' => 'Add New',
        'submit' => 'Submit',
        'cancel' => 'Cancel',
        'no_title' => 'No Title',
        'select_menu' => 'Select a Menu',
        'select_parent_item' => 'Select Parent Item',
        'language' => 'Language',
        'select_language' => 'Select Language',
        'select_order' => 'Select Order',
        'success_message' => 'Menu Item has been successfully created!',
        'error_message' => 'There was an error creating the menu item.',
        'confirm_delete' => 'Are you sure you want to delete this menu item?',
        'update_success_message' => 'Menu Item has been successfully updated!',
        'update_error_message' => 'There was an error updating the menu item.',
        'created' => 'Menu item created successfully!',
        'updated' => 'Menu item updated successfully!',
        'deleted' => 'Menu item deleted successfully!',
        'status_updated' => 'Menu item status updated successfully!',
        'massage_confirm' => 'Confirm Deletion',
        'confirm_delete' => 'Are you sure you want to delete this menu item?',
        'massage_cancel' => 'Cancel',
        'massage_delete' => 'Delete',
        'success' => 'Success',

    ],

    'errors' => [
        'validation_failed' => 'Validation failed! Please correct the errors and try again.',
        'csrf_token_invalid' => 'Invalid CSRF token. Please refresh the page and try again.',
        'not_found' => 'The requested item could not be found.',
        'unauthorized' => 'You are not authorized to perform this action.',
    ],

    'messages' => [
        'welcome' => 'Welcome to the Admin Panel!',
        'dashboard' => 'Dashboard',
        'settings' => 'Settings',
        'log_out' => 'Log Out',
        'profile' => 'Profile',
        'menu' => 'Menu',
        'home' => 'Home',
        'view_details' => 'View Details',
    ],

    'social_media_links' => [
        'type' => 'Social Media Type',
        'select_type' => 'Select Social Media Type',
        'types' => [
            'facebook' => 'Facebook',
            'instagram' => 'Instagram',
            'tiktok' => 'TikTok',
            'youtube' => 'YouTube',
            'x' => 'X',
        ],
        'id' => 'Id',
        'create' => 'Create Social Media Link',
        'edit' => 'Edit Social Media Link',
        'platform' => 'Platform Name',
        'link' => 'Social Media Link',
        'created' => 'Social media link created successfully!',
        'updated' => 'Social media link updated successfully!',
        'deleted' => 'Social media link deleted successfully!',
        'status_updated' => 'Social media link status updated successfully!',
        'massage_confirm' => 'Confirm Deletion',
        'confirm_delete' => 'Are you sure you want to delete this social media link?',
        'massage_cancel' => 'Cancel',
        'massage_delete' => 'Delete',
        'success' => 'Success',

        'translations' => [
            'platform_name' => 'Platform Name (translated)',
        ],
        'save' => 'Save',
        'update' => 'Update',
        'delete' => 'Delete',
        'no_links' => 'No Social Media Links available',
        'delete_confirmation' => 'Are you sure you want to delete this link?',
        'link_deleted' => 'Social Media Link deleted successfully!',
        'error_delete' => 'Error deleting link!',
        'create_link' => 'Create Social Media Link',
        'edit_link' => 'Edit Social Media Link',
        'form_title' => 'Create or Edit Social Media Link',
        'form_description' => 'Please provide all the necessary information for the social media link.',
        'back_to_list' => 'Back to Social Media Links List',
        'add_new' => 'Add New',
        'trans_name' => 'Translated Name',
        'delete' => 'Delete',
        'action' => 'Action',
    ],

    'orders' => [

        // Page Title
        'title' => 'Orders List',

        // Table Headings
        'id' => 'Order ID',
        'order_date' => 'Order Date',
        'status' => 'Status',
        'total_price' => 'Total Price',
        'action' => 'Actions',
        'customer' => 'Customer',

        // Delete Modal
        'delete_confirm_title' => 'Confirm Delete',
        'delete_confirm_message' => 'Are you sure you want to delete this order?',
        'delete_cancel' => 'Cancel',
        'delete_button' => 'Delete',

        // Toastr / Flash Messages
        'deleted_success' => 'Order deleted successfully.',
        'deleted_error' => 'Failed to delete the order.',
        'deleted' => 'Deleted',
        'success' => 'Success',
    ],

    'attributes' => [
        'title_create' => 'Create Attribute',
        'title_edit' => 'Edit Attribute',
        'title_manage' => 'Manage Attributes',

        'attribute_name' => 'Attribute Name',
        'attribute_values' => 'Attribute Values',
        'translations' => 'Translations',
        'translated_value' => 'Translated Value',

        'add_value' => 'Add Value',
        'remove_value' => 'Remove',
        'save_attribute' => 'Save Attribute',
        'update_attribute' => 'Update Attribute',
        'add_value_translation' => 'Add Value Translation',

        'success_create' => 'Attribute created successfully!',
        'success_update' => 'Attribute updated successfully!',
        'success_delete' => 'Attribute deleted successfully!',
        'delete_confirmation' => 'Are you sure you want to delete this attribute?',
        'success' => 'Success',

        'id' => 'ID',
        'name' => 'Name',
        'values' => 'Values',
        'action' => 'Action',

        'confirm_delete' => 'Confirm Delete',
        'delete' => 'Delete',
        'cancel' => 'Cancel',
    ],

    'product_reviews' => [
        'title_manage' => 'Product Reviews',

        'review_id' => 'Review ID',
        'customer_name' => 'Customer Name',
        'product_name' => 'Product Name',
        'rating' => 'Rating',
        'status' => 'Status',
        'actions' => 'Actions',
        'review_details' => 'Review Details',
        'review' => 'Review',
        'back_button' => 'Back to List',

        'confirm_delete' => 'Confirm Delete',
        'delete_message' => 'Are you sure you want to delete this product review?',
        'delete' => 'Delete',
        'cancel' => 'Cancel',

        'success_create' => 'Product review created successfully!',
        'success_update' => 'Product review updated successfully!',
        'success_delete' => 'Product review deleted successfully!',
        'error_delete' => 'Error deleting product review! Please try again.',

        'success' => 'Success',
        'error' => 'Error',
    ],

];
