<?php

return [
    'header' => [
        'top_bar_message' => '$50 üzeri siparişlerde ücretsiz kargo | Destek | Mağaza Bulucu',
        'search_placeholder' => 'Ürün ara',
    ],

    'footer' => [
        'account' => 'Hesap',
        'my_account' => 'Hesabım',
        'wishlist' => 'İstek Listesi',
        'pages' => 'Sayfalar',
        'privacy_policy' => 'Gizlilik Politikası',
        'terms_of_service' => 'Hizmet Şartları',
        'follow_us' => 'Bizi Takip Et',
        'footer_logo_alt' => 'Velstore Alt Bilgi Logo',
        'copyright' => '© 2025 Velstore Demo. Tüm hakları saklıdır.',
        'powered_by' => 'Velstore Labs tarafından sağlanmaktadır',
    ],

    'product_detail' => [
        'home' => 'Ana Sayfa',
        'in_stock' => 'STOKTA VAR',
        'out_of_stock' => 'STOKTA YOK',
        'customer_reviews' => 'Müşteri Yorumları',
        'no_reviews' => 'Bu ürün için henüz yorum yok.',
        'no_review_text' => 'Henüz yorum yazılmadı.',
        'average_rating' => 'Ortalama Puan',
        'days_ago' => '{1} :days gün önce|[2,*] :days gün önce',
        'description' => 'Açıklama',
        'reviews' => 'Yorumlar',
        'add_to_cart' => 'Sepete Ekle',
        'increase_quantity' => 'Adedi artır',
        'decrease_quantity' => 'Adedi azalt',
        'selected_variant_not' => 'Seçilen varyant mevcut değil.',
        'fetch_variant_failed' => 'Varyant fiyatı alınamadı.',
        'ajax_error' => 'Bir şeyler yanlış gitti. Lütfen tekrar deneyin.',
        'currency_symbol' => 'Para Birimi',
        'cart_success' => 'Ürün başarıyla sepete eklendi.',
        'cart_update_error' => 'Sepet güncellenemedi. Lütfen tekrar deneyin.',
    ],

    'cart' => [

        // Breadcrumb
        'breadcrumb_home' => 'Ana Sayfa',
        'breadcrumb_cart' => 'Sepet',

        // Cart messages
        'empty_cart' => 'Sepetiniz boş.',
        'continue_shopping' => 'Alışverişe devam et',
        'update_cart' => 'Sepeti güncelle',

        // Table headings
        'product' => 'Ürün',
        'price' => 'Fiyat',
        'quantity' => 'Adet',
        'subtotal' => 'Ara toplam',

        // Cart totals section
        'cart_totals' => 'Sepet toplamı',
        'subtotal_label' => 'Ara toplam',
        'discount_label' => 'İndirim',
        'total_label' => 'Toplam',
        'proceed_to_checkout' => 'Ödemeye geç',

        // Coupon section
        'coupon_heading' => 'Kupon',
        'coupon_placeholder' => 'Kupon kodu',
        'apply_coupon' => 'Kuponu uygula',
        'remove_coupon' => 'Kuponu kaldır',

        // Toast messages
        'coupon_applied' => 'Kupon başarıyla uygulandı!',
        'coupon_removed' => 'Kupon başarıyla kaldırıldı!',
        'cart_updated' => 'Sepet başarıyla güncellendi!',
        'item_removed' => 'Ürün sepetten kaldırıldı.',
        'error_occurred' => 'Bir hata oluştu. Lütfen tekrar deneyin.',
        'product_removed' => 'Ürün sepetten kaldırıldı.',
    ],

    'checkout' => [

        // Breadcrumb
        'breadcrumb_home' => 'Ana Sayfa',
        'breadcrumb_category' => 'Kulaklık',
        'breadcrumb_checkout' => 'Ödeme',

        // Section titles
        'shipping_information' => 'Kargo Bilgileri',
        'contact_information' => 'İletişim Bilgileri',
        'payment_method' => 'Ödeme Yöntemi',
        'order_summary' => 'Sipariş Özeti',

        // Shipping form placeholders
        'first_name' => 'Ad',
        'last_name' => 'Soyad',
        'address' => 'Adres',
        'suite' => 'Daire/Kat',
        'select_country' => 'Ülke Seçin',
        'city' => 'Şehir',
        'select_state' => 'Eyalet/İl Seçin',
        'zipcode' => 'Posta Kodu',
        'use_as_billing' => 'Fatura adresi olarak kullan',

        // Contact form placeholders
        'email' => 'E-posta',
        'phone' => 'Telefon',

        // Payment
        'select_payment' => 'Bir ödeme yöntemi seçin',
        'stripe' => 'Stripe',
        'paypal' => 'PayPal',

        // Summary labels
        'subtotal' => 'Ara Toplam',
        'shipping' => 'Kargo',
        'shipping_info' => 'Kargo ücretini görmek için adresinizi girin',
        'total' => 'Toplam',
        'proceed' => 'Devam Et',
        'place_order' => 'Siparişi Tamamla',

        // Toast / messages
        'order_success' => 'Siparişiniz başarıyla oluşturuldu!',
        'order_failed' => 'Bir hata oluştu. Lütfen tekrar deneyin.',
        'payment_required' => 'Devam etmeden önce bir ödeme yöntemi seçin.',
        'paypal_instructions' => 'Lütfen PayPal butonunu kullanarak ödemeyi tamamlayın.',
    ],
];
