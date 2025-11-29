<?php

return [
    'auth' => [
        'velstore' => 'Velstore',
        'login' => 'Masuk',
        'email' => 'Alamat Email',
        'password' => 'Kata Sandi',
        'remember_me' => 'Ingat Saya',
        'forgot_password' => 'Lupa Kata Sandi?',
    ],

    'profile' => [
        'profile' => 'Profil',
        'setting' => 'Pengaturan',
        'logout' => 'Keluar',
    ],

    'dashboard' => [
        'total_sales' => 'Total Penjualan',
        'today' => 'Hari Ini',
        'total' => 'Total',

        'total_orders' => 'Total Pesanan',
        'completed' => 'Selesai',
        'all_orders' => 'Semua Pesanan',

        'total_vendors' => 'Total Penjual',
        'active' => 'Aktif',

        'total_customers' => 'Total Pelanggan',
    ],

    'sidebar' => [
        'search_placeholder' => 'Cari...',
        'dashboard' => 'Dasbor',
        'logo' => 'Logo',

        'categories' => [
            'title' => 'Kategori',
            'add_new' => 'Tambah Baru',
            'list' => 'Daftar',
        ],
        'brands' => [
            'title' => 'Merek',
            'add_new' => 'Tambah Baru',
            'list' => 'Daftar',
        ],
        'products' => [
            'title' => 'Produk',
            'add_new' => 'Tambah Baru',
            'list' => 'Daftar',
        ],
        'attributes' => [
            'title' => 'Atribut',
            'add_new' => 'Tambah Baru',
            'list' => 'Daftar',
        ],
        'customers' => [
            'title' => 'Pelanggan',
            'list' => 'Daftar',
        ],
        'vendors' => [
            'title' => 'Penjual',
            'add_new' => 'Tambah Baru',
            'list' => 'Daftar',
        ],
        'product_reviews' => [
            'title' => 'Ulasan Produk',
            'list' => 'Daftar',
        ],
        'banners' => [
            'title' => 'Banner',
            'add_new' => 'Tambah Baru',
            'list' => 'Daftar',
        ],
        'menu' => [
            'title' => 'Menu',
            'add_new' => 'Tambah Baru',
            'list' => 'Daftar',
        ],
        'menu_items' => [
            'title' => 'Item Menu',
            'add_new' => 'Tambah Baru',
            'list' => 'Daftar',
        ],
        'social_media_links' => [
            'title' => 'Tautan Media Sosial',
            'add_new' => 'Tambah Baru',
            'list' => 'Daftar',
        ],
        'site_settings' => [
            'title' => 'Pengaturan Situs',
            'manage' => 'Kelola Pengaturan',
        ],
        'orders' => [
            'title' => 'Pesanan',
            'all_orders' => 'Semua Pesanan',
            'pending_orders' => 'Pesanan Tertunda',
            'completed_orders' => 'Pesanan Selesai',
            'list' => 'Daftar',
        ],
        'pages' => [
            'title' => 'Halaman',
            'add_new' => 'Tambah Baru',
            'list' => 'Daftar',
        ],
        'payments' => [
            'title' => 'Pembayaran',
            'list' => 'Daftar',
        ],

        'refunds' => [
            'title' => 'Pengembalian Dana',
            'list' => 'Daftar',
        ],

        'payment_gateways' => [
            'title' => 'Gerbang Pembayaran',
            'list' => 'Daftar',
        ],
    ],

    'profile' => [
        'title' => 'Edit Profil',
        'choose_file' => 'Pilih File',
        'name' => 'Nama',
        'email' => 'Email',
        'phone' => 'Telepon',
        'current_password' => 'Kata Sandi Saat Ini',
        'new_password' => 'Kata Sandi Baru',
        'confirm_new_password' => 'Konfirmasi Kata Sandi Baru',
        'save' => 'Simpan',
        'profile_updated' => 'Profil berhasil diperbarui!',
        'success' => 'Berhasil',
    ],

    'payment_gateways' => [

        // Page Titles
        'title' => 'Gateway Pembayaran',
        'edit_title' => 'Sunting Gateway Pembayaran',

        // Table Headings
        'id' => 'ID',
        'name' => 'Nama',
        'code' => 'Kode',
        'status' => 'Status',
        'action' => 'Aksi',

        // Status Labels
        'active' => 'Aktif',
        'inactive' => 'Nonaktif',

        // Delete Modal
        'delete_confirm' => 'Konfirmasi Hapus',
        'delete_message' => 'Apakah Anda yakin ingin menghapus gateway pembayaran ini?',
        'cancel' => 'Batal',
        'delete' => 'Hapus',

        // Alerts / Notifications
        'success' => 'Sukses',
        'deleted' => 'Dihapus',
        'delete_error' => 'Terjadi kesalahan saat menghapus gateway pembayaran!',

        // Form Labels
        'gateway_name' => 'Nama Gateway',
        'description' => 'Deskripsi',
        'active_label' => 'Aktif',
        'configurations' => 'Konfigurasi Gateway',
        'key_name' => 'Nama Kunci',
        'key_value' => 'Nilai Kunci',
        'environment' => 'Lingkungan',
        'sandbox' => 'Sandbox',
        'production' => 'Produksi',
        'encrypted' => 'Terenkripsi',
        'unique' => 'Unik',
        'update_button' => 'Perbarui',

        // Fallback
        'not_available' => 'Tidak Tersedia',
    ],

    'refunds' => [

        // Page Titles
        'title' => 'Pengembalian Dana',
        'details_title' => 'Detail Pengembalian Dana',

        // Table Headings
        'id' => 'ID',
        'payment' => 'Pembayaran',
        'amount' => 'Jumlah',
        'status' => 'Status',
        'reason' => 'Alasan',
        'action' => 'Aksi',

        // Status Labels
        'completed' => 'Selesai',
        'pending' => 'Menunggu',
        'failed' => 'Gagal',

        // Delete Modal
        'delete_confirm' => 'Konfirmasi Hapus',
        'delete_message' => 'Apakah Anda yakin ingin menghapus pengembalian dana ini?',
        'cancel' => 'Batal',
        'delete' => 'Hapus',

        // Alerts / Notifications
        'success' => 'Sukses',
        'deleted' => 'Dihapus',
        'delete_error' => 'Terjadi kesalahan saat menghapus pengembalian dana!',

        // Refund Details Page
        'created_at' => 'Dibuat Pada',
        'updated_at' => 'Diperbarui Pada',
        'back' => 'Kembali ke Pengembalian Dana',

        // Fallback
        'not_available' => 'Tidak Tersedia',
    ],

    'payments' => [

        // Page Titles
        'title' => 'Pembayaran',
        'details_title' => 'Detail Pembayaran',

        // Table Headings
        'id' => 'ID',
        'order' => 'Pesanan',
        'user' => 'Pengguna',
        'gateway' => 'Gateway Pembayaran',
        'amount' => 'Jumlah',
        'status' => 'Status',
        'transaction' => 'Transaksi',
        'action' => 'Aksi',

        // Status Labels
        'completed' => 'Selesai',
        'pending' => 'Tertunda',
        'failed' => 'Gagal',

        // Delete Modal
        'delete_confirm' => 'Konfirmasi Hapus',
        'delete_message' => 'Apakah Anda yakin ingin menghapus pembayaran ini?',
        'cancel' => 'Batal',
        'delete' => 'Hapus',

        // Alerts / Notifications
        'success' => 'Berhasil',
        'deleted' => 'Dihapus',
        'delete_error' => 'Terjadi kesalahan saat menghapus pembayaran!',

        // Payment Details Page
        'transaction_id' => 'ID Transaksi',
        'created_at' => 'Tanggal Dibuat',
        'back' => 'Kembali ke Pembayaran',

        // Fallback
        'not_available' => 'Tidak tersedia',
    ],

    'pages' => [
        // General
        'title' => 'Halaman',
        'choose_file' => 'Pilih File',

        // Create Page
        'create' => 'Buat Halaman',
        'form_title' => 'Judul (:code)',
        'form_content' => 'Konten (:code)',
        'form_image' => 'Gambar (:code)',
        'form_save' => 'Simpan',

        // Edit Page
        'edit' => 'Edit Halaman',
        'form_update' => 'Perbarui',

        // Pages Table
        'table_title' => 'Judul',
        'table_slug' => 'Slug',
        'table_status' => 'Status',
        'table_actions' => 'Aksi',

        // Delete Modal
        'delete_modal_title' => 'Konfirmasi Penghapusan',
        'delete_modal_text' => 'Apakah Anda yakin ingin menghapus halaman ini?',
        'delete_modal_cancel' => 'Batal',
        'delete_modal_delete' => 'Hapus',

        // Toastr messages
        'toastr_success' => 'Sukses',
        'toastr_error' => 'Gagal menghapus halaman',
    ],

    'customers' => [
        'customer_list' => 'Daftar Pelanggan',

        // Table columns
        'id' => 'ID',
        'name' => 'Nama',
        'email' => 'Email',
        'phone' => 'Telepon',
        'address' => 'Alamat',
        'status' => 'Status',
        'actions' => 'Aksi',

        // Status labels
        'active' => 'Aktif',
        'inactive' => 'Tidak Aktif',

        // Modal
        'confirm_delete_title' => 'Konfirmasi Hapus',
        'confirm_delete_message' => 'Apakah Anda yakin ingin menghapus pelanggan ini?',
        'cancel_button' => 'Batal',
        'delete_button' => 'Hapus',

        // Toastr messages
        'success_title' => 'Berhasil',
        'deleted_title' => 'Dihapus',
        'delete_success_message' => 'Pelanggan berhasil dihapus!',
        'delete_error_message' => 'Terjadi kesalahan saat menghapus pelanggan!',
    ],

    'vendors' => [
        'title_list' => 'Daftar Vendor',
        'id' => 'ID',
        'name' => 'Nama',
        'email' => 'Email',
        'phone' => 'Telepon',
        'status' => 'Status',
        'actions' => 'Aksi',
        'register_new_vendor' => 'Daftarkan Vendor Baru',
        'vendor_name' => 'Nama Vendor',
        'vendor_email' => 'Email Vendor',
        'phone_optional' => 'Telepon (Opsional)',
        'password' => 'Kata Sandi',
        'confirm_password' => 'Konfirmasi Kata Sandi',
        'status' => 'Status',
        'active' => 'Aktif',
        'inactive' => 'Tidak Aktif',
        'banned' => 'Diblokir',
        'register_button' => 'Daftarkan Vendor',
        'cancel_button' => 'Batal',

        'active' => 'Aktif',
        'inactive' => 'Tidak Aktif',

        'modal_confirm_delete_title' => 'Konfirmasi Hapus',
        'modal_confirm_delete_body' => 'Apakah Anda yakin ingin menghapus vendor ini?',
        'delete' => 'Hapus',
        'cancel' => 'Batal',

        'success' => 'Berhasil',
        'success_delete' => 'Vendor berhasil dihapus!',
        'error_delete' => 'Gagal menghapus vendor! Silakan coba lagi.',
    ],

    'languages' => [
        'english' => 'Inggris',
        'spanish' => 'Spanyol',
        'french' => 'Perancis',
        'arabic' => 'Arab',
        'german' => 'Jerman',
        'persian' => 'Persia (Farsi)',
        'hindi' => 'Hindi',
        'indonesian' => 'Indonesia',
        'italian' => 'Italia',
        'japanese' => 'Jepang',
        'korean' => 'Korea',
        'dutch' => 'Belanda',
        'polish' => 'Polandia',
        'portuguese' => 'Portugis',
        'russian' => 'Rusia',
        'thai' => 'Thailand',
        'turkish' => 'Turki',
        'vietnamese' => 'Vietnam',
        'chinese' => 'Cina',

        'language_change' => 'Perubahan Bahasa',
        'change_language' => 'Ubah Bahasa',
        'confirm_language_change' => 'Apakah Anda yakin ingin mengubah bahasa?',
        'cancel' => 'Batal',
        'yes_change' => 'Ya, Ubah',
    ],

    'categories' => [
        'heading' => 'Kategori',
        'image' => 'Gambar',
        'choose_file' => 'Pilih File',
        'id' => 'Id',
        'name' => 'Nama Kategori',
        'description' => 'Deskripsi',
        'action' => 'Aksi',
        'edit' => 'Ubah',
        'delete' => 'Hapus',
        'button' => 'Simpan',
        'add_new' => 'Tambah Baru',
        'status' => 'Status',
        'created' => 'Kategori berhasil dibuat!',
        'updated' => 'Kategori berhasil diperbarui!',
        'deleted' => 'Kategori berhasil dihapus!',
        'status_updated' => 'Status kategori berhasil diperbarui!',
        'massage_confirm' => 'Konfirmasi Penghapusan',
        'confirm_delete' => 'Apakah Anda yakin ingin menghapus kategori ini?',
        'massage_cancel' => 'Batal',
        'massage_delete' => 'Hapus',
        'success' => 'Sukses',
    ],

    'datatables' => [
        'sEmptyTable' => 'Tidak ada data yang tersedia di tabel',
        'sInfo' => 'Menampilkan _START_ sampai _END_ dari _TOTAL_ entri',
        'sInfoEmpty' => 'Menampilkan 0 sampai 0 dari 0 entri',
        'sInfoFiltered' => '(disaring dari _MAX_ entri total)',
        'sLengthMenu' => 'Tampilkan _MENU_ entri',
        'sLoadingRecords' => 'Memuat...',
        'sProcessing' => 'Memproses...',
        'sSearch' => 'Pencarian:',
        'sZeroRecords' => 'Tidak ada data yang cocok ditemukan',
        'oPaginate' => [
            'sFirst' => 'Pertama',
            'sLast' => 'Terakhir',
            'sNext' => 'Berikutnya',
            'sPrevious' => 'Sebelumnya',
        ],
    ],

    'products' => [

        // Judul
        'title_create' => 'Buat Produk',
        'title_edit' => 'Edit Produk',
        'title_manage' => 'Kelola Produk',

        // Bidang Formulir
        'vendor' => 'Penjual',
        'select_vendor' => 'Pilih Penjual',
        'product_name' => 'Nama Produk',
        'product_type' => 'Tipe Produk',
        'description' => 'Deskripsi',
        'translations' => 'Terjemahan',
        'translated_value' => 'Nilai Terjemahan',
        'category' => 'Kategori',
        'brand' => 'Merek',
        'no_brand' => 'Tanpa Merek',
        'status' => 'Status',
        'price' => 'Harga',
        'discount_price' => 'Harga Diskon',
        'sku' => 'SKU',
        'barcode' => 'Barcode',
        'stock' => 'Stok',
        'weight' => 'Berat',
        'dimension' => 'Dimensi',
        'size' => 'Ukuran',
        'color' => 'Warna',
        'images' => 'Gambar Produk',
        'is_primary' => 'Varian Utama',
        'variant_name_en' => 'Nama Varian',
        'attributes' => 'Atribut',
        'attribute_values' => 'Nilai Atribut',
        'variants' => 'Varian',

        // Tombol
        'add_variant' => 'Tambah Varian',
        'remove_variant' => 'Hapus Varian',
        'save_product' => 'Simpan Produk',
        'update_product' => 'Perbarui Produk',
        'choose_images' => 'Pilih Gambar',
        'choose_file' => 'Pilih File',
        'remove' => 'Hapus',

        // Pesan
        'status_updated' => 'Status produk berhasil diperbarui!',
        'success_create' => 'Produk berhasil dibuat!',
        'success_update' => 'Produk berhasil diperbarui!',
        'success_delete' => 'Produk berhasil dihapus!',
        'delete_confirmation' => 'Apakah Anda yakin ingin menghapus produk ini?',
        'success' => 'Berhasil',

        // Kolom Tabel
        'id' => 'ID',
        'name' => 'Nama',
        'type' => 'Tipe',
        'price_column' => 'Harga',
        'status_column' => 'Status',
        'action' => 'Aksi',

        // Dialog Konfirmasi
        'confirm_delete' => 'Konfirmasi Hapus',
        'delete' => 'Hapus',
        'cancel' => 'Batal',
    ],

    'brands' => [
        'button_back' => 'Kembali',
        'heading' => 'Merek',
        'id' => 'Id',
        'name' => 'Nama Merek',
        'description' => 'Deskripsi',
        'logo' => 'Logo',
        'status' => 'Status',
        'action' => 'Aksi',
        'edit' => 'Ubah',
        'delete' => 'Hapus',
        'create' => 'Buat',
        'update' => 'Perbarui',
        'add_new' => 'Tambah Baru',
        'button' => 'Simpan',
        'form_title' => 'Buat atau Ubah Merek',
        'file_upload' => 'Unggah Logo',
        'no_logo' => 'Tidak Ada Logo',
        'choose_file' => 'Pilih Berkas',
        'image_preview' => 'Pratinjau Gambar',
        'delete_confirmation' => 'Apakah Anda yakin ingin menghapus merek ini?',
        'brand_deleted' => 'Merek berhasil dihapus!',
        'error_delete' => 'Terjadi kesalahan saat menghapus merek!',
        'created' => 'Merek berhasil dibuat!',
        'updated' => 'Merek berhasil diperbarui!',
        'deleted' => 'Merek berhasil dihapus!',
        'status_updated' => 'Status merek berhasil diperbarui!',
        'massage_confirm' => 'Konfirmasi Penghapusan',
        'confirm_delete' => 'Apakah Anda yakin ingin menghapus merek ini?',
        'massage_cancel' => 'Batal',
        'massage_delete' => 'Hapus',
        'success' => 'Sukses',
    ],

    'banners' => [
        'description' => 'Deskripsi',
        'choose_file' => 'Pilih file',
        'all_banners' => 'Semua Banner',
        'id' => 'Id',
        'add_new' => 'Tambah Baru',
        'banner_type' => 'Tipe Banner',
        'promotion' => 'Promosi',
        'sale' => 'Penjualan',
        'seasonal' => 'Musiman',
        'featured' => 'Unggulan',
        'announcement' => 'Pengumuman',
        'actions' => 'Tindakan',
        'edit' => 'Ubah',
        'delete' => 'Hapus',
        'no_image' => 'Tidak ada gambar tersedia',
        'delete_confirmation' => 'Apakah Anda yakin ingin menghapus banner ini?',
        'banner_deleted' => 'Banner berhasil dihapus!',
        'error_delete' => 'Terjadi kesalahan saat menghapus banner!',
        'image_preview' => 'Pratinjau Gambar',
        'create_banner' => 'Buat Banner',
        'edit_banner' => 'Ubah Terjemahan Banner',
        'save' => 'Simpan',
        'languages' => 'Bahasa',
        'status' => 'Status',
        'image' => 'Gambar',
        'image_title' => 'Judul Gambar',
        'title' => 'Judul',
        'select_language' => 'Pilih Bahasa',
        'file_upload' => 'Unggah Gambar',
        'choose_file' => 'Pilih Berkas',
        'existing_image' => 'Gambar yang Ada',
        'banner_saved' => 'Banner berhasil disimpan!',
        'banner_updated' => 'Banner berhasil diperbarui!',
        'form_title' => 'Buat atau Ubah Banner',
        'form_description' => 'Harap lengkapi semua informasi yang diperlukan untuk banner.',
        'back_to_list' => 'Kembali ke Daftar Banner',
        'created' => 'Banner berhasil dibuat!',
        'updated' => 'Banner berhasil diperbarui!',
        'deleted' => 'Banner berhasil dihapus!',
        'status_updated' => 'Status banner berhasil diperbarui!',
        'massage_confirm' => 'Konfirmasi Penghapusan',
        'confirm_delete' => 'Apakah Anda yakin ingin menghapus banner ini?',
        'massage_cancel' => 'Batal',
        'massage_delete' => 'Hapus',
        'success' => 'Sukses',
    ],

    'menus' => [
        'all_menus' => 'Semua Menu',
        'id' => 'Id',
        'add_new' => 'Tambah Baru',
        'button_create' => 'Buat',
        'button_update' => 'Perbarui',
        'title' => 'Judul',
        'edit' => 'Ubah',
        'action' => 'Aksi',
        'delete' => 'Hapus',
        'created_at' => 'Dibuat Pada',
        'no_menus' => 'Tidak ada menu tersedia',
        'delete_confirmation' => 'Apakah Anda yakin ingin menghapus menu ini?',
        'menu_deleted' => 'Menu berhasil dihapus!',
        'error_delete' => 'Terjadi kesalahan saat menghapus menu!',
        'create_menu' => 'Buat Menu',
        'edit_menu' => 'Ubah Menu',
        'save' => 'Simpan',
        'menu_title' => 'Judul Menu',
        'form_title' => 'Buat atau Ubah Menu',
        'form_description' => 'Harap lengkapi semua informasi yang diperlukan untuk menu.',
        'back_to_list' => 'Kembali ke Daftar Menu',
        'created' => 'Menu berhasil dibuat!',
        'updated' => 'Menu berhasil diperbarui!',
        'deleted' => 'Menu berhasil dihapus!',
        'status_updated' => 'Status menu berhasil diperbarui!',
        'massage_confirm' => 'Konfirmasi Penghapusan',
        'confirm_delete' => 'Apakah Anda yakin ingin menghapus menu ini?',
        'massage_cancel' => 'Batal',
        'massage_delete' => 'Hapus',
        'success' => 'Sukses',

    ],

    'menu_items' => [
        'heading' => 'Semua Item Menu',
        'id' => 'Id',
        'create' => 'Buat Item Menu',
        'choose_an_option' => 'Pilih Opsi',
        'select_an_option' => 'Pilih Opsi',
        'option1' => 'Opsi 1',
        'option2' => 'Opsi 2',
        'option3' => 'Opsi 3',
        'option4' => 'Opsi 4',
        'order_number' => 'Nomor Urut',
        'parent_item' => 'Item Induk',
        'parent_none' => 'Tidak Ada',
        'edit' => 'Ubah Item Menu',
        'update' => 'Perbarui Item Menu',
        'delete' => 'Hapus Item Menu',
        'title' => 'Judul',
        'button' => 'Simpan',
        'update_button' => 'Perbarui',
        'slug' => 'Slug',
        'order' => 'Urutan',
        'actions' => 'Tindakan',
        'add_new' => 'Tambah Baru',
        'submit' => 'Kirim',
        'cancel' => 'Batal',
        'no_title' => 'Tidak Ada Judul',
        'select_menu' => 'Pilih Menu',
        'select_parent_item' => 'Pilih Item Induk',
        'language' => 'Bahasa',
        'select_language' => 'Pilih Bahasa',
        'select_order' => 'Pilih Urutan',
        'success_message' => 'Item Menu berhasil dibuat!',
        'error_message' => 'Terjadi kesalahan saat membuat item menu.',
        'confirm_delete' => 'Apakah Anda yakin ingin menghapus item menu ini?',
        'update_success_message' => 'Item Menu berhasil diperbarui!',
        'update_error_message' => 'Terjadi kesalahan saat memperbarui item menu.',
        'created' => 'Item Menu berhasil dibuat!',
        'updated' => 'Item Menu berhasil diperbarui!',
        'deleted' => 'Item Menu berhasil dihapus!',
        'status_updated' => 'Status item menu berhasil diperbarui!',
        'massage_confirm' => 'Konfirmasi Penghapusan',
        'confirm_delete' => 'Apakah Anda yakin ingin menghapus item menu ini?',
        'massage_cancel' => 'Batal',
        'massage_delete' => 'Hapus',
        'success' => 'Sukses',

    ],

    'errors' => [
        'validation_failed' => 'Validasi gagal! Harap perbaiki kesalahan dan coba lagi.',
        'csrf_token_invalid' => 'Token CSRF tidak valid. Harap segarkan halaman dan coba lagi.',
        'not_found' => 'Item yang diminta tidak dapat ditemukan.',
        'unauthorized' => 'Anda tidak memiliki izin untuk melakukan tindakan ini.',
    ],

    'messages' => [
        'welcome' => 'Selamat datang di Panel Admin!',
        'dashboard' => 'Dasbor',
        'settings' => 'Pengaturan',
        'log_out' => 'Keluar',
        'profile' => 'Profil',
        'menu' => 'Menu',
        'home' => 'Beranda',
        'view_details' => 'Lihat Rincian',
    ],

    'social_media_links' => [
        'type' => 'Jenis Jejaring Sosial',
        'select_type' => 'Pilih Jenis Jejaring Sosial',
        'types' => [
            'facebook' => 'Facebook',
            'instagram' => 'Instagram',
            'tiktok' => 'TikTok',
            'youtube' => 'YouTube',
            'x' => 'X',
        ],

        'id' => 'Id',
        'create' => 'Buat Tautan Media Sosial',
        'edit' => 'Ubah Tautan Media Sosial',
        'platform' => 'Nama Platform',
        'link' => 'Tautan Media Sosial',
        'created' => 'Tautan media sosial berhasil dibuat!',
        'updated' => 'Tautan media sosial berhasil diperbarui!',
        'deleted' => 'Tautan media sosial berhasil dihapus!',
        'status_updated' => 'Status tautan media sosial berhasil diperbarui!',
        'massage_confirm' => 'Konfirmasi Penghapusan',
        'confirm_delete' => 'Apakah Anda yakin ingin menghapus tautan media sosial ini?',
        'massage_cancel' => 'Batal',
        'massage_delete' => 'Hapus',
        'success' => 'Sukses',

        'translations' => [
            'platform_name' => 'Nama Platform (terjemahan)',
        ],
        'save' => 'Simpan',
        'update' => 'Perbarui',
        'delete' => 'Hapus',
        'no_links' => 'Tidak ada Tautan Media Sosial tersedia',
        'delete_confirmation' => 'Apakah Anda yakin ingin menghapus tautan ini?',
        'link_deleted' => 'Tautan Media Sosial berhasil dihapus!',
        'error_delete' => 'Terjadi kesalahan saat menghapus tautan!',
        'create_link' => 'Buat Tautan Media Sosial',
        'edit_link' => 'Ubah Tautan Media Sosial',
        'form_title' => 'Buat atau Ubah Tautan Media Sosial',
        'form_description' => 'Harap lengkapi semua informasi yang diperlukan untuk tautan media sosial.',
        'back_to_list' => 'Kembali ke Daftar Tautan Media Sosial',
        'add_new' => 'Tambah Baru',
        'trans_name' => 'Nama Terjemahan',
        'delete' => 'Hapus',
        'action' => 'Aksi',
    ],

    'orders' => [

        // Page Title
        'title' => 'Daftar Pesanan',

        // Table Headings
        'id' => 'ID Pesanan',
        'order_date' => 'Tanggal Pesanan',
        'status' => 'Status',
        'total_price' => 'Total Harga',
        'action' => 'Aksi',
        'customer' => 'Pelanggan',

        // Delete Modal
        'delete_confirm_title' => 'Konfirmasi Hapus',
        'delete_confirm_message' => 'Apakah Anda yakin ingin menghapus pesanan ini?',
        'delete_cancel' => 'Batal',
        'delete_button' => 'Hapus',

        // Toastr / Flash Messages
        'deleted_success' => 'Pesanan berhasil dihapus.',
        'deleted_error' => 'Gagal menghapus pesanan.',
        'deleted' => 'Dihapus',
        'success' => 'Sukses',
    ],

    'attributes' => [
        'title_create' => 'Buat Atribut',
        'title_edit' => 'Edit Atribut',
        'title_manage' => 'Kelola Atribut',

        'attribute_name' => 'Nama Atribut',
        'attribute_values' => 'Nilai Atribut',
        'translations' => 'Terjemahan',
        'translated_value' => 'Nilai Terjemahan',

        'add_value' => 'Tambah Nilai',
        'remove_value' => 'Hapus',
        'save_attribute' => 'Simpan Atribut',
        'update_attribute' => 'Perbarui Atribut',
        'add_value_translation' => 'Tambahkan terjemahan nilai',

        'success_create' => 'Atribut berhasil dibuat!',
        'success_update' => 'Atribut berhasil diperbarui!',
        'success_delete' => 'Atribut berhasil dihapus!',
        'delete_confirmation' => 'Apakah Anda yakin ingin menghapus atribut ini?',
        'success' => 'Sukses',

        'id' => 'ID',
        'name' => 'Nama',
        'values' => 'Nilai',
        'action' => 'Aksi',

        'confirm_delete' => 'Konfirmasi Hapus',
        'delete' => 'Hapus',
        'cancel' => 'Batal',
    ],

    'product_reviews' => [
        'title_manage' => 'Manajemen Ulasan Produk',

        'review_id' => 'ID Ulasan',
        'customer_name' => 'Nama Pelanggan',
        'product_name' => 'Nama Produk',
        'rating' => 'Peringkat',
        'status' => 'Status',
        'actions' => 'Tindakan',
        'review_details' => 'Detail ulasan',
        'review' => 'Ulasan',
        'back_button' => 'Kembali ke daftar',

        'confirm_delete' => 'Konfirmasi Penghapusan',
        'delete_message' => 'Apakah Anda yakin ingin menghapus ulasan produk ini?',
        'delete' => 'Hapus',
        'cancel' => 'Batal',

        'success_create' => 'Ulasan produk berhasil dibuat!',
        'success_update' => 'Ulasan produk berhasil diperbarui!',
        'success_delete' => 'Ulasan produk berhasil dihapus!',
        'error_delete' => 'Terjadi kesalahan saat menghapus ulasan produk! Silakan coba lagi.',

        'success' => 'Sukses',
        'error' => 'Kesalahan',
    ],

];
