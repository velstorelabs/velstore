<?php

return [
    'auth' => [
        'velstore' => 'Velstore',
        'login' => 'Giriş Yap',
        'email' => 'E-posta Adresi',
        'password' => 'Parola',
        'remember_me' => 'Beni Hatırla',
        'forgot_password' => 'Parolanızı mı unuttunuz?',
    ],

    'profile' => [
        'profile' => 'Profil',
        'setting' => 'Ayarlar',
        'logout' => 'Çıkış',
    ],

    'dashboard' => [
        'total_sales' => 'Toplam Satış',
        'today' => 'Bugün',
        'total' => 'Toplam',

        'total_orders' => 'Toplam Sipariş',
        'completed' => 'Tamamlandı',
        'all_orders' => 'Tüm Siparişler',

        'total_vendors' => 'Toplam Satıcı',
        'active' => 'Aktif',

        'total_customers' => 'Toplam Müşteri',
    ],

    'sidebar' => [
        'search_placeholder' => 'Ara...',
        'dashboard' => 'Kontrol Paneli',
        'logo' => 'Logo',

        'categories' => [
            'title' => 'Kategoriler',
            'add_new' => 'Yeni Ekle',
            'list' => 'Liste',
        ],
        'brands' => [
            'title' => 'Markalar',
            'add_new' => 'Yeni Ekle',
            'list' => 'Liste',
        ],
        'products' => [
            'title' => 'Ürünler',
            'add_new' => 'Yeni Ekle',
            'list' => 'Liste',
        ],
        'attributes' => [
            'title' => 'Özellikler',
            'add_new' => 'Yeni Ekle',
            'list' => 'Liste',
        ],
        'customers' => [
            'title' => 'Müşteriler',
            'list' => 'Liste',
        ],
        'vendors' => [
            'title' => 'Satıcılar',
            'add_new' => 'Yeni Ekle',
            'list' => 'Liste',
        ],
        'product_reviews' => [
            'title' => 'Ürün İncelemeleri',
            'list' => 'Liste',
        ],
        'banners' => [
            'title' => 'Afişler',
            'add_new' => 'Yeni Ekle',
            'list' => 'Liste',
        ],
        'menu' => [
            'title' => 'Menü',
            'add_new' => 'Yeni Ekle',
            'list' => 'Liste',
        ],
        'menu_items' => [
            'title' => 'Menü Öğeleri',
            'add_new' => 'Yeni Ekle',
            'list' => 'Liste',
        ],
        'social_media_links' => [
            'title' => 'Sosyal Medya Bağlantıları',
            'add_new' => 'Yeni Ekle',
            'list' => 'Liste',
        ],
        'site_settings' => [
            'title' => 'Site Ayarları',
            'manage' => 'Ayarları Yönet',
        ],
        'orders' => [
            'title' => 'Siparişler',
            'all_orders' => 'Tüm Siparişler',
            'pending_orders' => 'Bekleyen Siparişler',
            'completed_orders' => 'Tamamlanan Siparişler',
            'list' => 'Liste',
        ],
        'pages' => [
            'title' => 'Sayfalar',
            'add_new' => 'Yeni Ekle',
            'list' => 'Liste',
        ],
        'payments' => [
            'title' => 'Ödemeler',
            'list' => 'Liste',
        ],

        'refunds' => [
            'title' => 'İadeler',
            'list' => 'Liste',
        ],

        'payment_gateways' => [
            'title' => 'Ödeme Ağ Geçitleri',
            'list' => 'Liste',
        ],
    ],

    'profile' => [
        'title' => 'Profili Düzenle',
        'choose_file' => 'Dosya Seç',
        'name' => 'Ad',
        'email' => 'E-posta',
        'phone' => 'Telefon',
        'current_password' => 'Mevcut Şifre',
        'new_password' => 'Yeni Şifre',
        'confirm_new_password' => 'Yeni Şifreyi Onayla',
        'save' => 'Kaydet',
        'profile_updated' => 'Profil başarıyla güncellendi!',
        'success' => 'Başarılı',
    ],

    'payment_gateways' => [

        // Page Titles
        'title' => 'Ödeme Ağ Geçitleri',
        'edit_title' => 'Ödeme Ağ Geçidini Düzenle',

        // Table Headings
        'id' => 'ID',
        'name' => 'Ad',
        'code' => 'Kod',
        'status' => 'Durum',
        'action' => 'İşlem',

        // Status Labels
        'active' => 'Aktif',
        'inactive' => 'Pasif',

        // Delete Modal
        'delete_confirm' => 'Silme Onayı',
        'delete_message' => 'Bu ödeme ağ geçidini silmek istediğinizden emin misiniz?',
        'cancel' => 'İptal',
        'delete' => 'Sil',

        // Alerts / Notifications
        'success' => 'Başarılı',
        'deleted' => 'Silindi',
        'delete_error' => 'Ödeme ağ geçidi silinirken hata oluştu!',

        // Form Labels
        'gateway_name' => 'Ağ Geçidi Adı',
        'description' => 'Açıklama',
        'active_label' => 'Aktif',
        'configurations' => 'Ağ Geçidi Yapılandırmaları',
        'key_name' => 'Anahtar Adı',
        'key_value' => 'Anahtar Değeri',
        'environment' => 'Ortam',
        'sandbox' => 'Sandbox',
        'production' => 'Production',
        'encrypted' => 'Şifreli',
        'unique' => 'Benzersiz',
        'update_button' => 'Güncelle',

        // Fallback
        'not_available' => 'Mevcut değil',
    ],

    'refunds' => [

        // Page Titles
        'title' => 'İadeler',
        'details_title' => 'İade Detayları',

        // Table Headings
        'id' => 'ID',
        'payment' => 'Ödeme',
        'amount' => 'Tutar',
        'status' => 'Durum',
        'reason' => 'Sebep',
        'action' => 'İşlem',

        // Status Labels
        'completed' => 'Tamamlandı',
        'pending' => 'Beklemede',
        'failed' => 'Başarısız',

        // Delete Modal
        'delete_confirm' => 'Silme Onayı',
        'delete_message' => 'Bu iadeyi silmek istediğinizden emin misiniz?',
        'cancel' => 'İptal',
        'delete' => 'Sil',

        // Alerts / Notifications
        'success' => 'Başarılı',
        'deleted' => 'Silindi',
        'delete_error' => 'İade silinirken hata oluştu!',

        // Refund Details Page
        'created_at' => 'Oluşturulma Tarihi',
        'updated_at' => 'Güncellenme Tarihi',
        'back' => 'İadelere Geri Dön',

        // Fallback
        'not_available' => 'Mevcut değil',
    ],

    'payments' => [

        // Page Titles
        'title' => 'Ödemeler',
        'details_title' => 'Ödeme Detayları',

        // Table Headings
        'id' => 'ID',
        'order' => 'Sipariş',
        'user' => 'Kullanıcı',
        'gateway' => 'Ödeme Geçidi',
        'amount' => 'Tutar',
        'status' => 'Durum',
        'transaction' => 'İşlem',
        'action' => 'İşlem',

        // Status Labels
        'completed' => 'Tamamlandı',
        'pending' => 'Beklemede',
        'failed' => 'Başarısız',

        // Delete Modal
        'delete_confirm' => 'Silme Onayı',
        'delete_message' => 'Bu ödemeyi silmek istediğinizden emin misiniz?',
        'cancel' => 'İptal',
        'delete' => 'Sil',

        // Alerts / Notifications
        'success' => 'Başarılı',
        'deleted' => 'Silindi',
        'delete_error' => 'Ödeme silinirken hata oluştu!',

        // Payment Details Page
        'transaction_id' => 'İşlem ID',
        'created_at' => 'Oluşturulma Tarihi',
        'back' => 'Ödeme Listesine Dön',

        // Fallback
        'not_available' => 'Mevcut değil',
    ],

    'pages' => [
        // General
        'title' => 'Sayfalar',
        'choose_file' => 'Dosya Seç',

        // Create Page
        'create' => 'Sayfa Oluştur',
        'form_title' => 'Başlık (:code)',
        'form_content' => 'İçerik (:code)',
        'form_image' => 'Resim (:code)',
        'form_save' => 'Kaydet',

        // Edit Page
        'edit' => 'Sayfayı Düzenle',
        'form_update' => 'Güncelle',

        // Pages Table
        'table_title' => 'Başlık',
        'table_slug' => 'Slug',
        'table_status' => 'Durum',
        'table_actions' => 'İşlemler',

        // Delete Modal
        'delete_modal_title' => 'Silme Onayı',
        'delete_modal_text' => 'Bu sayfayı silmek istediğinizden emin misiniz?',
        'delete_modal_cancel' => 'İptal',
        'delete_modal_delete' => 'Sil',

        // Toastr messages
        'toastr_success' => 'Başarılı',
        'toastr_error' => 'Sayfa silinirken hata oluştu',
    ],

    'customers' => [
        'customer_list' => 'Müşteri Listesi',

        // Table columns
        'id' => 'ID',
        'name' => 'Adı',
        'email' => 'E-posta',
        'phone' => 'Telefon',
        'address' => 'Adres',
        'status' => 'Durum',
        'actions' => 'İşlemler',

        // Status labels
        'active' => 'Aktif',
        'inactive' => 'Pasif',

        // Modal
        'confirm_delete_title' => 'Silme Onayı',
        'confirm_delete_message' => 'Bu müşteriyi silmek istediğinizden emin misiniz?',
        'cancel_button' => 'İptal',
        'delete_button' => 'Sil',

        // Toastr messages
        'success_title' => 'Başarılı',
        'deleted_title' => 'Silindi',
        'delete_success_message' => 'Müşteri başarıyla silindi!',
        'delete_error_message' => 'Müşteri silinirken hata oluştu!',
    ],

    'vendors' => [
        'title_list' => 'Satıcı Listesi',
        'id' => 'ID',
        'name' => 'İsim',
        'email' => 'E-posta',
        'phone' => 'Telefon',
        'status' => 'Durum',
        'actions' => 'İşlemler',
        'register_new_vendor' => 'Yeni Satıcı Kaydet',
        'vendor_name' => 'Satıcı Adı',
        'vendor_email' => 'Satıcı E-postası',
        'phone_optional' => 'Telefon (Opsiyonel)',
        'password' => 'Şifre',
        'confirm_password' => 'Şifreyi Onayla',
        'status' => 'Durum',
        'active' => 'Aktif',
        'inactive' => 'Pasif',
        'banned' => 'Yasaklı',
        'register_button' => 'Satıcıyı Kaydet',
        'cancel_button' => 'İptal',

        'active' => 'Aktif',
        'inactive' => 'Pasif',

        'modal_confirm_delete_title' => 'Silme Onayı',
        'modal_confirm_delete_body' => 'Bu satıcıyı silmek istediğinize emin misiniz?',
        'delete' => 'Sil',
        'cancel' => 'İptal',

        'success' => 'Başarılı',
        'success_delete' => 'Satıcı başarıyla silindi!',
        'error_delete' => 'Satıcı silinirken hata oluştu! Lütfen tekrar deneyin.',
    ],

    'languages' => [
        'english' => 'İngilizce',
        'spanish' => 'İspanyolca',
        'french' => 'Fransızca',
        'arabic' => 'Arapça',
        'german' => 'Almanca',
        'persian' => 'Farsça (Farsi)',
        'hindi' => 'Hintçe',
        'indonesian' => 'Endonezce',
        'italian' => 'İtalyanca',
        'japanese' => 'Japonca',
        'korean' => 'Korece',
        'dutch' => 'Flemenkçe',
        'polish' => 'Lehçe',
        'portuguese' => 'Portekizce',
        'russian' => 'Rusça',
        'thai' => 'Tayca',
        'turkish' => 'Türkçe',
        'vietnamese' => 'Vietnamca',
        'chinese' => 'Çince',

        'language_change' => 'Dil Değiştirme',
        'change_language' => 'Dili Değiştir',
        'confirm_language_change' => 'Dili değiştirmek istediğinizden emin misiniz?',
        'cancel' => 'İptal',
        'yes_change' => 'Evet, Değiştir',
    ],

    'categories' => [
        'heading' => 'Kategoriler',
        'image' => 'Görsel',
        'choose_file' => 'Dosya Seç',
        'id' => 'ID',
        'name' => 'Kategori Adı',
        'description' => 'Açıklama',
        'action' => 'İşlem',
        'edit' => 'Düzenle',
        'delete' => 'Sil',
        'button' => 'Kaydet',
        'add_new' => 'Yeni Ekle',
        'status' => 'Durum',
        'created' => 'Kategori başarıyla oluşturuldu!',
        'updated' => 'Kategori başarıyla güncellendi!',
        'deleted' => 'Kategori başarıyla silindi!',
        'status_updated' => 'Kategori durumu başarıyla güncellendi!',
        'massage_confirm' => 'Silme onayı',
        'confirm_delete' => 'Bu kategoriyi silmek istediğinizden emin misiniz?',
        'massage_cancel' => 'İptal',
        'massage_delete' => 'Sil',
        'success' => 'Başarı',
    ],

    'datatables' => [
        'sEmptyTable' => 'Tabloda veri yok',
        'sInfo' => '_START_ ile _END_ arasında _TOTAL_ giriş gösteriliyor',
        'sInfoEmpty' => '0 ile 0 arasında 0 giriş gösteriliyor',
        'sInfoFiltered' => '(toplam _MAX_ girişten filtrelendi)',
        'sLengthMenu' => '_MENU_ giriş göster',
        'sLoadingRecords' => 'Yükleniyor...',
        'sProcessing' => 'İşleniyor...',
        'sSearch' => 'Ara:',
        'sZeroRecords' => 'Eşleşen kayıt bulunamadı',
        'oPaginate' => [
            'sFirst' => 'İlk',
            'sLast' => 'Son',
            'sNext' => 'Sonraki',
            'sPrevious' => 'Önceki',
        ],
    ],

    'products' => [

        // Titles
        'title_create' => 'Ürün Oluştur',
        'title_edit' => 'Ürün Düzenle',
        'title_manage' => 'Ürünleri Yönet',

        // Form Fields
        'vendor' => 'Satıcı',
        'select_vendor' => 'Satıcı Seç',
        'product_name' => 'Ürün Adı',
        'product_type' => 'Ürün Tipi',
        'description' => 'Açıklama',
        'translations' => 'Çeviriler',
        'translated_value' => 'Çevrilen Değer',
        'category' => 'Kategori',
        'brand' => 'Marka',
        'no_brand' => 'Marka Yok',
        'status' => 'Durum',
        'price' => 'Fiyat',
        'discount_price' => 'İndirimli Fiyat',
        'sku' => 'SKU',
        'barcode' => 'Barkod',
        'stock' => 'Stok',
        'weight' => 'Ağırlık',
        'dimension' => 'Boyutlar',
        'size' => 'Beden',
        'color' => 'Renk',
        'images' => 'Ürün Resimleri',
        'is_primary' => 'Ana Seçenek',
        'variant_name_en' => 'Varyant Adı',
        'attributes' => 'Özellikler',
        'attribute_values' => 'Özellik Değerleri',
        'variants' => 'Varyantlar',

        // Buttons
        'add_variant' => 'Varyant Ekle',
        'remove_variant' => 'Varyantı Kaldır',
        'save_product' => 'Ürünü Kaydet',
        'update_product' => 'Ürünü Güncelle',
        'choose_images' => 'Resimleri Seç',
        'choose_file' => 'Dosya Seç',
        'remove' => 'Kaldır',

        // Messages
        'status_updated' => 'Ürün durumu başarıyla güncellendi!',
        'success_create' => 'Ürün başarıyla oluşturuldu!',
        'success_update' => 'Ürün başarıyla güncellendi!',
        'success_delete' => 'Ürün başarıyla silindi!',
        'delete_confirmation' => 'Bu ürünü silmek istediğinizden emin misiniz?',
        'success' => 'Başarılı',

        // Table Columns
        'id' => 'ID',
        'name' => 'Ad',
        'type' => 'Tür',
        'price_column' => 'Fiyat',
        'status_column' => 'Durum',
        'action' => 'İşlem',

        // Confirmation Dialog
        'confirm_delete' => 'Silme Onayı',
        'delete' => 'Sil',
        'cancel' => 'İptal',
    ],

    'brands' => [
        'heading' => 'Markalar',
        'id' => 'ID',
        'name' => 'Marka Adı',
        'description' => 'Açıklama',
        'logo' => 'Logo',
        'status' => 'Durum',
        'action' => 'İşlem',
        'edit' => 'Düzenle',
        'delete' => 'Sil',
        'create' => 'Oluştur',
        'update' => 'Güncelle',
        'add_new' => 'Yeni Ekle',
        'button' => 'Kaydet',
        'form_title' => 'Marka Oluştur veya Düzenle',
        'file_upload' => 'Logo Yükle',
        'no_logo' => 'Logo Yok',
        'choose_file' => 'Dosya Seç',
        'image_preview' => 'Görüntü Önizlemesi',
        'delete_confirmation' => 'Bu markayı silmek istediğinizden emin misiniz?',
        'brand_deleted' => 'Marka başarıyla silindi!',
        'error_delete' => 'Marka silinirken hata oluştu!',
        'created' => 'Marka başarıyla oluşturuldu!',
        'updated' => 'Marka başarıyla güncellendi!',
        'deleted' => 'Marka başarıyla silindi!',
        'status_updated' => 'Marka durumu başarıyla güncellendi!',
        'massage_confirm' => 'Silme onayı',
        'confirm_delete' => 'Bu markayı silmek istediğinizden emin misiniz?',
        'massage_cancel' => 'İptal',
        'massage_delete' => 'Sil',
        'success' => 'Başarı',
    ],

    'banners' => [
        'button_back' => 'Geri',
        'description' => 'Açıklama',
        'choose_file' => 'Dosya seç',
        'all_banners' => 'Tüm Bannerlar',
        'id' => 'ID',
        'add_new' => 'Yeni Ekle',
        'banner_type' => 'Banner Türü',
        'promotion' => 'Promosyon',
        'sale' => 'Satış',
        'seasonal' => 'Mevsimsel',
        'featured' => 'Öne Çıkan',
        'announcement' => 'Duyuru',
        'actions' => 'İşlemler',
        'edit' => 'Düzenle',
        'delete' => 'Sil',
        'no_image' => 'Resim mevcut değil',
        'delete_confirmation' => 'Bu banner\'ı silmek istediğinizden emin misiniz?',
        'banner_deleted' => 'Banner başarıyla silindi!',
        'error_delete' => 'Banner silinirken hata oluştu!',
        'image_preview' => 'Resim Önizlemesi',
        'create_banner' => 'Banner Oluştur',
        'edit_banner' => 'Banner Düzenle',
        'save' => 'Kaydet',
        'languages' => 'Diller',
        'status' => 'Durum',
        'image' => 'Resim',
        'image_title' => 'Resim Başlığı',
        'title' => 'Başlık',
        'select_language' => 'Dil Seçin',
        'file_upload' => 'Resim Yükle',
        'choose_file' => 'Dosya Seç',
        'existing_image' => 'Mevcut Resim',
        'banner_saved' => 'Banner başarıyla kaydedildi!',
        'banner_updated' => 'Banner başarıyla güncellendi!',
        'form_title' => 'Banner Oluştur veya Düzenle',
        'form_description' => 'Lütfen banner için gerekli tüm bilgileri sağlayın.',
        'back_to_list' => 'Banner Listesine Geri Dön',
        'created' => 'Banner başarıyla oluşturuldu!',
        'updated' => 'Banner başarıyla güncellendi!',
        'deleted' => 'Banner başarıyla silindi!',
        'status_updated' => 'Banner durumu başarıyla güncellendi!',
        'massage_confirm' => 'Silme onayı',
        'confirm_delete' => 'Bu bannerı silmek istediğinizden emin misiniz?',
        'massage_cancel' => 'İptal',
        'massage_delete' => 'Sil',
        'success' => 'Başarı',

    ],

    'menus' => [
        'all_menus' => 'Tüm Menüler',
        'id' => 'ID',
        'add_new' => 'Yeni Ekle',
        'button_create' => 'Oluştur',
        'button_update' => 'Güncelle',
        'title' => 'Başlık',
        'edit' => 'Düzenle',
        'action' => 'Eylem',
        'delete' => 'Sil',
        'created_at' => 'Oluşturulma Tarihi',
        'no_menus' => 'Mevcut menü yok',
        'delete_confirmation' => 'Bu menüyü silmek istediğinizden emin misiniz?',
        'menu_deleted' => 'Menü başarıyla silindi!',
        'error_delete' => 'Menü silinirken bir hata oluştu!',
        'create_menu' => 'Menü Oluştur',
        'edit_menu' => 'Menü Düzenle',
        'save' => 'Kaydet',
        'menu_title' => 'Menü Başlığı',
        'form_title' => 'Menü Oluştur veya Düzenle',
        'form_description' => 'Lütfen menü için gerekli tüm bilgileri sağlayın.',
        'back_to_list' => 'Menü Listesine Geri Dön',
        'created' => 'Menü başarıyla oluşturuldu!',
        'updated' => 'Menü başarıyla güncellendi!',
        'deleted' => 'Menü başarıyla silindi!',
        'status_updated' => 'Menü durumu başarıyla güncellendi!',
        'massage_confirm' => 'Silme işlemini onayla',
        'confirm_delete' => 'Bu menüyü silmek istediğinizden emin misiniz?',
        'massage_cancel' => 'İptal',
        'massage_delete' => 'Sil',
        'success' => 'Başarı',

    ],

    'menu_items' => [
        'heading' => 'Tüm Menü Öğeleri',
        'id' => 'ID',
        'create' => 'Menü Öğesi Oluştur',
        'choose_an_option' => 'Bir Seçenek Seçin',
        'select_an_option' => 'Bir Seçenek Seçiniz',
        'option1' => 'Seçenek 1',
        'option2' => 'Seçenek 2',
        'option3' => 'Seçenek 3',
        'option4' => 'Seçenek 4',
        'order_number' => 'Sıra Numarası',
        'parent_item' => 'Ana Öğesi',
        'parent_none' => 'Yok',
        'edit' => 'Menü Öğesini Düzenle',
        'update' => 'Menü Öğesini Güncelle',
        'delete' => 'Menü Öğesini Sil',
        'title' => 'Başlık',
        'button' => 'Kaydet',
        'update_button' => 'Güncelle',
        'slug' => 'Slug',
        'order' => 'Sıra',
        'actions' => 'Eylemler',
        'add_new' => 'Yeni Ekle',
        'submit' => 'Gönder',
        'cancel' => 'İptal',
        'no_title' => 'Başlık Yok',
        'select_menu' => 'Bir Menü Seçin',
        'select_parent_item' => 'Ana Öğeyi Seçin',
        'language' => 'Dil',
        'select_language' => 'Dil Seçin',
        'select_order' => 'Sıra Seçin',
        'success_message' => 'Menü Öğesi başarıyla oluşturuldu!',
        'error_message' => 'Menü öğesi oluşturulurken bir hata oluştu.',
        'confirm_delete' => 'Bu menü öğesini silmek istediğinizden emin misiniz?',
        'update_success_message' => 'Menü öğesi başarıyla güncellendi!',
        'update_error_message' => 'Menü öğesi güncellenirken bir hata oluştu.',
        'created' => 'Menü öğesi başarıyla oluşturuldu!',
        'updated' => 'Menü öğesi başarıyla güncellendi!',
        'deleted' => 'Menü öğesi başarıyla silindi!',
        'status_updated' => 'Menü öğesi durumu başarıyla güncellendi!',
        'massage_confirm' => 'Silme işlemini onayla',
        'confirm_delete' => 'Bu menü öğesini silmek istediğinizden emin misiniz?',
        'massage_cancel' => 'İptal',
        'massage_delete' => 'Sil',
        'success' => 'Başarı',

    ],
    'errors' => [
        'validation_failed' => 'Geçerlilik testi başarısız! Lütfen hataları düzeltin ve tekrar deneyin.',
        'csrf_token_invalid' => 'Geçersiz CSRF token. Lütfen sayfayı yenileyin ve tekrar deneyin.',
        'not_found' => 'İstenilen öğe bulunamadı.',
        'unauthorized' => 'Bu işlemi gerçekleştirmek için yetkiniz yok.',
    ],
    'messages' => [
        'welcome' => 'Yönetici Paneline Hoş Geldiniz!',
        'dashboard' => 'Kontrol Paneli',
        'settings' => 'Ayarlar',
        'log_out' => 'Çıkış Yap',
        'profile' => 'Profil',
        'menu' => 'Menü',
        'home' => 'Anasayfa',
        'view_details' => 'Detayları Görüntüle',
    ],

    'social_media_links' => [
        'type' => 'Sosyal ağ türü',
        'select_type' => 'Sosyal ağ türünü seçin',
        'types' => [
            'facebook' => 'Facebook',
            'instagram' => 'Instagram',
            'tiktok' => 'TikTok',
            'youtube' => 'YouTube',
            'x' => 'X',
        ],

        'id' => 'ID',
        'create' => 'Sosyal Medya Bağlantısı Oluştur',
        'edit' => 'Sosyal Medya Bağlantısını Düzenle',
        'platform' => 'Platform Adı',
        'link' => 'Sosyal Medya Bağlantısı',
        'created' => 'Sosyal medya bağlantısı başarıyla oluşturuldu!',
        'updated' => 'Sosyal medya bağlantısı başarıyla güncellendi!',
        'deleted' => 'Sosyal medya bağlantısı başarıyla silindi!',
        'status_updated' => 'Sosyal medya bağlantısı durumu başarıyla güncellendi!',
        'massage_confirm' => 'Silme işlemini onayla',
        'confirm_delete' => 'Bu sosyal medya bağlantısını silmek istediğinizden emin misiniz?',
        'massage_cancel' => 'İptal',
        'massage_delete' => 'Sil',
        'success' => 'Başarı',

        'translations' => [
            'platform_name' => 'Platform Adı (çevirilmiş)',
        ],
        'save' => 'Kaydet',
        'update' => 'Güncelle',
        'delete' => 'Sil',
        'no_links' => 'Mevcut Sosyal Medya Bağlantısı Yok',
        'delete_confirmation' => 'Bu bağlantıyı silmek istediğinizden emin misiniz?',
        'link_deleted' => 'Sosyal Medya Bağlantısı başarıyla silindi!',
        'error_delete' => 'Bağlantı silinirken hata oluştu!',
        'create_link' => 'Sosyal Medya Bağlantısı Oluştur',
        'edit_link' => 'Sosyal Medya Bağlantısını Düzenle',
        'form_title' => 'Sosyal Medya Bağlantısı Oluştur veya Düzenle',
        'form_description' => 'Sosyal medya bağlantısı için gerekli tüm bilgileri sağlayın.',
        'back_to_list' => 'Sosyal Medya Bağlantıları Listesine Geri Dön',
        'add_new' => 'Yeni Ekle',
        'trans_name' => 'Çevrilmiş Ad',
        'delete' => 'Sil',
        'action' => 'İşlem',
    ],

    'orders' => [

        // Page Title
        'title' => 'Siparişler Listesi',

        // Table Headings
        'id' => 'Sipariş ID',
        'order_date' => 'Sipariş Tarihi',
        'status' => 'Durum',
        'total_price' => 'Toplam Fiyat',
        'action' => 'İşlemler',
        'customer' => 'Müşteri',

        // Delete Modal
        'delete_confirm_title' => 'Silme Onayı',
        'delete_confirm_message' => 'Bu siparişi silmek istediğinizden emin misiniz?',
        'delete_cancel' => 'İptal',
        'delete_button' => 'Sil',

        // Toastr / Flash Messages
        'deleted_success' => 'Sipariş başarıyla silindi.',
        'deleted_error' => 'Siparişi silme işlemi başarısız oldu.',
        'deleted' => 'Silindi',
        'success' => 'Başarılı',
    ],

    'attributes' => [
        'title_create' => 'Özellik Oluştur',
        'title_edit' => 'Özellik Düzenle',
        'title_manage' => 'Özellikleri Yönet',

        'attribute_name' => 'Özellik Adı',
        'attribute_values' => 'Özellik Değerleri',
        'translations' => 'Çeviriler',
        'translated_value' => 'Çevrilen Değer',

        'add_value' => 'Değer Ekle',
        'remove_value' => 'Kaldır',
        'save_attribute' => 'Özelliği Kaydet',
        'update_attribute' => 'Özelliği Güncelle',
        'add_value_translation' => 'Değer çevirisi ekle',

        'success_create' => 'Özellik başarıyla oluşturuldu!',
        'success_update' => 'Özellik başarıyla güncellendi!',
        'success_delete' => 'Özellik başarıyla silindi!',
        'delete_confirmation' => 'Bu özelliği silmek istediğinizden emin misiniz?',
        'success' => 'Başarılı',

        'id' => 'ID',
        'name' => 'Ad',
        'values' => 'Değerler',
        'action' => 'İşlem',

        'confirm_delete' => 'Silme işlemini onayla',
        'delete' => 'Sil',
        'cancel' => 'İptal',
    ],

    'product_reviews' => [
        'title_manage' => 'Ürün Yorumları Yönetimi',

        'review_id' => 'Yorum ID',
        'customer_name' => 'Müşteri Adı',
        'product_name' => 'Ürün Adı',
        'rating' => 'Puan',
        'status' => 'Durum',
        'actions' => 'İşlemler',
        'review_details' => 'İnceleme detayları',
        'review' => 'İnceleme',
        'back_button' => 'Listeye geri dön',

        'confirm_delete' => 'Silme Onayı',
        'delete_message' => 'Bu ürün yorumunu silmek istediğinizden emin misiniz?',
        'delete' => 'Sil',
        'cancel' => 'İptal',

        'success_create' => 'Ürün yorumu başarıyla oluşturuldu!',
        'success_update' => 'Ürün yorumu başarıyla güncellendi!',
        'success_delete' => 'Ürün yorumu başarıyla silindi!',
        'error_delete' => 'Ürün yorumu silinirken hata oluştu! Lütfen tekrar deneyin.',

        'success' => 'Başarı',
        'error' => 'Hata',
    ],

];
