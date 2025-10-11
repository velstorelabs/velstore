<?php

return [
    'header' => [
        'top_bar_message' => 'Darmowa wysyłka przy zamówieniach powyżej 50 $ | Wsparcie | Lokalizator sklepów',
        'search_placeholder' => 'Szukaj produktu',
    ],

    'footer' => [
        'account' => 'Konto',
        'my_account' => 'Moje Konto',
        'wishlist' => 'Lista życzeń',
        'pages' => 'Strony',
        'privacy_policy' => 'Polityka prywatności',
        'terms_of_service' => 'Regulamin',
        'follow_us' => 'Śledź nas',
        'footer_logo_alt' => 'Logo stopki Velstore',
        'copyright' => '© 2025 Velstore Demo. Wszelkie prawa zastrzeżone.',
        'powered_by' => 'Zasilane przez Velstore Labs',
    ],
    'product_detail' => [
        'home' => 'Strona główna',
        'in_stock' => 'DOSTĘPNY',
        'out_of_stock' => 'NIEDOSTĘPNY',
        'customer_reviews' => 'Opinie klientów',
        'no_reviews' => 'Brak opinii dla tego produktu.',
        'no_review_text' => 'Nie napisano żadnej opinii.',
        'average_rating' => 'Średnia ocena',
        'days_ago' => '{1} :days dzień temu|[2,*] :days dni temu',
        'description' => 'Opis',
        'reviews' => 'Opinie',
        'add_to_cart' => 'Dodaj do koszyka',
        'increase_quantity' => 'Zwiększ ilość',
        'decrease_quantity' => 'Zmniejsz ilość',
        'selected_variant_not' => 'Wybrany wariant jest niedostępny.',
        'fetch_variant_failed' => 'Nie udało się pobrać ceny wariantu.',
        'ajax_error' => 'Coś poszło nie tak. Spróbuj ponownie.',
        'currency_symbol' => 'Waluta',
        'cart_success' => 'Produkt został pomyślnie dodany do koszyka.',
        'cart_update_error' => 'Nie udało się zaktualizować koszyka. Spróbuj ponownie.',
    ],

    'cart' => [

        // Breadcrumb
        'breadcrumb_home' => 'Strona główna',
        'breadcrumb_cart' => 'Koszyk',

        // Cart messages
        'empty_cart' => 'Twój koszyk jest pusty.',
        'continue_shopping' => 'Kontynuuj zakupy',
        'update_cart' => 'Zaktualizuj koszyk',

        // Table headings
        'product' => 'Produkt',
        'price' => 'Cena',
        'quantity' => 'Ilość',
        'subtotal' => 'Suma częściowa',

        // Cart totals section
        'cart_totals' => 'Podsumowanie koszyka',
        'subtotal_label' => 'Suma częściowa',
        'discount_label' => 'Zniżka',
        'total_label' => 'Łącznie',
        'proceed_to_checkout' => 'Przejdź do kasy',

        // Coupon section
        'coupon_heading' => 'Kupon rabatowy',
        'coupon_placeholder' => 'Kod kuponu',
        'apply_coupon' => 'Zastosuj kupon',
        'remove_coupon' => 'Usuń kupon',

        // Toast messages
        'coupon_applied' => 'Kupon został pomyślnie zastosowany!',
        'coupon_removed' => 'Kupon został pomyślnie usunięty!',
        'cart_updated' => 'Koszyk został pomyślnie zaktualizowany!',
        'item_removed' => 'Produkt został usunięty z koszyka.',
        'error_occurred' => 'Wystąpił błąd. Spróbuj ponownie.',
        'product_removed' => 'Produkt został usunięty z koszyka.',
    ],

    'checkout' => [

        // Breadcrumb
        'breadcrumb_home' => 'Strona główna',
        'breadcrumb_category' => 'Słuchawki',
        'breadcrumb_checkout' => 'Zamówienie',

        // Section titles
        'shipping_information' => 'Informacje o wysyłce',
        'contact_information' => 'Dane kontaktowe',
        'payment_method' => 'Metoda płatności',
        'order_summary' => 'Podsumowanie zamówienia',

        // Shipping form placeholders
        'first_name' => 'Imię',
        'last_name' => 'Nazwisko',
        'address' => 'Adres',
        'suite' => 'Mieszkanie/Piętro',
        'select_country' => 'Wybierz kraj',
        'city' => 'Miasto',
        'select_state' => 'Wybierz województwo',
        'zipcode' => 'Kod pocztowy',
        'use_as_billing' => 'Użyj jako adres rozliczeniowy',

        // Contact form placeholders
        'email' => 'Adres e-mail',
        'phone' => 'Telefon',

        // Payment
        'select_payment' => 'Wybierz metodę płatności',
        'stripe' => 'Stripe',
        'paypal' => 'PayPal',

        // Summary labels
        'subtotal' => 'Suma częściowa',
        'shipping' => 'Wysyłka',
        'shipping_info' => 'Wprowadź adres, aby zobaczyć koszt wysyłki',
        'total' => 'Razem',
        'proceed' => 'Kontynuuj',
        'place_order' => 'Złóż zamówienie',

        // Toast / messages
        'order_success' => 'Twoje zamówienie zostało pomyślnie złożone!',
        'order_failed' => 'Coś poszło nie tak. Spróbuj ponownie.',
        'payment_required' => 'Wybierz metodę płatności przed kontynuowaniem.',
        'paypal_instructions' => 'Dokończ płatność za pomocą przycisku PayPal.',
    ],
];
