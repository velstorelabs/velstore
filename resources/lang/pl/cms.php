<?php

return [
    'auth' => [
        'velstore' => 'Velstore',
        'login' => 'Zaloguj się',
        'email' => 'Adres e-mail',
        'password' => 'Hasło',
        'remember_me' => 'Zapamiętaj mnie',
        'forgot_password' => 'Zapomniałeś hasła?',
    ],

    'profile' => [
        'profile' => 'Profil',
        'setting' => 'Ustawienia',
        'logout' => 'Wyloguj',
    ],

    'dashboard' => [
        'total_sales' => 'Łączna Sprzedaż',
        'today' => 'Dziś',
        'total' => 'Razem',

        'total_orders' => 'Łączna Liczba Zamówień',
        'completed' => 'Zakończone',
        'all_orders' => 'Wszystkie Zamówienia',

        'total_vendors' => 'Łączna Liczba Sprzedawców',
        'active' => 'Aktywni',

        'total_customers' => 'Łączna Liczba Klientów',
    ],

    'sidebar' => [
        'search_placeholder' => 'Szukaj...',
        'dashboard' => 'Panel główny',
        'logo' => 'Logo',

        'categories' => [
            'title' => 'Kategorie',
            'add_new' => 'Dodaj nową',
            'list' => 'Lista',
        ],
        'brands' => [
            'title' => 'Marki',
            'add_new' => 'Dodaj nową',
            'list' => 'Lista',
        ],
        'products' => [
            'title' => 'Produkty',
            'add_new' => 'Dodaj nowy',
            'list' => 'Lista',
        ],
        'attributes' => [
            'title' => 'Atrybuty',
            'add_new' => 'Dodaj Nowy',
            'list' => 'Lista',
        ],
        'customers' => [
            'title' => 'Klienci',
            'list' => 'Lista',
        ],
        'vendors' => [
            'title' => 'Dostawcy',
            'add_new' => 'Dodaj nowy',
            'list' => 'Lista',
        ],
        'product_reviews' => [
            'title' => 'Opinie o produktach',
            'list' => 'Lista',
        ],
        'banners' => [
            'title' => 'Banery',
            'add_new' => 'Dodaj nowy',
            'list' => 'Lista',
        ],
        'menu' => [
            'title' => 'Menu',
            'add_new' => 'Dodaj nowe',
            'list' => 'Lista',
        ],
        'menu_items' => [
            'title' => 'Elementy menu',
            'add_new' => 'Dodaj nowy',
            'list' => 'Lista',
        ],
        'social_media_links' => [
            'title' => 'Linki do mediów społecznościowych',
            'add_new' => 'Dodaj nowy',
            'list' => 'Lista',
        ],
        'site_settings' => [
            'title' => 'Ustawienia strony',
            'manage' => 'Zarządzaj ustawieniami',
        ],
        'orders' => [
            'title' => 'Zamówienia',
            'all_orders' => 'Wszystkie zamówienia',
            'pending_orders' => 'Oczekujące zamówienia',
            'completed_orders' => 'Zrealizowane zamówienia',
            'list' => 'Lista',
        ],
        'pages' => [
            'title' => 'Strony',
            'add_new' => 'Dodaj nową',
            'list' => 'Lista',
        ],
        'payments' => [
            'title' => 'Płatności',
            'list' => 'Lista',
        ],

        'refunds' => [
            'title' => 'Zwroty',
            'list' => 'Lista',
        ],

        'payment_gateways' => [
            'title' => 'Bramki płatności',
            'list' => 'Lista',
        ],
    ],

    'profile' => [
        'title' => 'Edytuj profil',
        'choose_file' => 'Wybierz plik',
        'name' => 'Imię',
        'email' => 'E-mail',
        'phone' => 'Telefon',
        'current_password' => 'Obecne hasło',
        'new_password' => 'Nowe hasło',
        'confirm_new_password' => 'Potwierdź nowe hasło',
        'save' => 'Zapisz',
        'profile_updated' => 'Profil został pomyślnie zaktualizowany!',
        'success' => 'Sukces',
    ],

    'payment_gateways' => [

        // Page Titles
        'title' => 'Bramki Płatności',
        'edit_title' => 'Edytuj Bramkę Płatności',

        // Table Headings
        'id' => 'ID',
        'name' => 'Nazwa',
        'code' => 'Kod',
        'status' => 'Status',
        'action' => 'Akcja',

        // Status Labels
        'active' => 'Aktywna',
        'inactive' => 'Nieaktywna',

        // Delete Modal
        'delete_confirm' => 'Potwierdź Usunięcie',
        'delete_message' => 'Czy na pewno chcesz usunąć tę bramkę płatności?',
        'cancel' => 'Anuluj',
        'delete' => 'Usuń',

        // Alerts / Notifications
        'success' => 'Sukces',
        'deleted' => 'Usunięto',
        'delete_error' => 'Błąd podczas usuwania bramki płatności!',

        // Form Labels
        'gateway_name' => 'Nazwa Bramki',
        'description' => 'Opis',
        'active_label' => 'Aktywna',
        'configurations' => 'Konfiguracje Bramki',
        'key_name' => 'Nazwa Klucza',
        'key_value' => 'Wartość Klucza',
        'environment' => 'Środowisko',
        'sandbox' => 'Sandbox',
        'production' => 'Produkcja',
        'encrypted' => 'Zaszyfrowany',
        'unique' => 'Unikalny',
        'update_button' => 'Aktualizuj',

        // Fallback
        'not_available' => 'Niedostępne',
    ],

    'refunds' => [

        // Page Titles
        'title' => 'Zwroty',
        'details_title' => 'Szczegóły zwrotu',

        // Table Headings
        'id' => 'ID',
        'payment' => 'Płatność',
        'amount' => 'Kwota',
        'status' => 'Status',
        'reason' => 'Powód',
        'action' => 'Akcja',

        // Status Labels
        'completed' => 'Zakończono',
        'pending' => 'Oczekujące',
        'failed' => 'Niepowodzenie',

        // Delete Modal
        'delete_confirm' => 'Potwierdź usunięcie',
        'delete_message' => 'Czy na pewno chcesz usunąć ten zwrot?',
        'cancel' => 'Anuluj',
        'delete' => 'Usuń',

        // Alerts / Notifications
        'success' => 'Sukces',
        'deleted' => 'Usunięto',
        'delete_error' => 'Błąd podczas usuwania zwrotu!',

        // Refund Details Page
        'created_at' => 'Utworzono',
        'updated_at' => 'Zaktualizowano',
        'back' => 'Powrót do zwrotów',

        // Fallback
        'not_available' => 'Niedostępne',
    ],

    'payments' => [

        // Page Titles
        'title' => 'Płatności',
        'details_title' => 'Szczegóły płatności',

        // Table Headings
        'id' => 'ID',
        'order' => 'Zamówienie',
        'user' => 'Użytkownik',
        'gateway' => 'Brama płatności',
        'amount' => 'Kwota',
        'status' => 'Status',
        'transaction' => 'Transakcja',
        'action' => 'Akcja',

        // Status Labels
        'completed' => 'Zakończono',
        'pending' => 'Oczekujące',
        'failed' => 'Niepowodzenie',

        // Delete Modal
        'delete_confirm' => 'Potwierdź usunięcie',
        'delete_message' => 'Czy na pewno chcesz usunąć tę płatność?',
        'cancel' => 'Anuluj',
        'delete' => 'Usuń',

        // Alerts / Notifications
        'success' => 'Sukces',
        'deleted' => 'Usunięto',
        'delete_error' => 'Błąd podczas usuwania płatności!',

        // Payment Details Page
        'transaction_id' => 'ID transakcji',
        'created_at' => 'Utworzono',
        'back' => 'Powrót do płatności',

        // Fallback
        'not_available' => 'Niedostępne',
    ],

    'pages' => [
        // General
        'title' => 'Strony',
        'choose_file' => 'Wybierz plik',

        // Create Page
        'create' => 'Utwórz stronę',
        'form_title' => 'Tytuł (:code)',
        'form_content' => 'Treść (:code)',
        'form_image' => 'Obraz (:code)',
        'form_save' => 'Zapisz',

        // Edit Page
        'edit' => 'Edytuj stronę',
        'form_update' => 'Aktualizuj',

        // Pages Table
        'table_title' => 'Tytuł',
        'table_slug' => 'Slug',
        'table_status' => 'Status',
        'table_actions' => 'Akcje',

        // Delete Modal
        'delete_modal_title' => 'Potwierdź usunięcie',
        'delete_modal_text' => 'Czy na pewno chcesz usunąć tę stronę?',
        'delete_modal_cancel' => 'Anuluj',
        'delete_modal_delete' => 'Usuń',

        // Toastr messages
        'toastr_success' => 'Sukces',
        'toastr_error' => 'Błąd podczas usuwania strony',
    ],

    'customers' => [
        'customer_list' => 'Lista klientów',

        // Table columns
        'id' => 'ID',
        'name' => 'Nazwa',
        'email' => 'E-mail',
        'phone' => 'Telefon',
        'address' => 'Adres',
        'status' => 'Status',
        'actions' => 'Akcje',

        // Status labels
        'active' => 'Aktywny',
        'inactive' => 'Nieaktywny',

        // Modal
        'confirm_delete_title' => 'Potwierdź usunięcie',
        'confirm_delete_message' => 'Czy na pewno chcesz usunąć tego klienta?',
        'cancel_button' => 'Anuluj',
        'delete_button' => 'Usuń',

        // Toastr messages
        'success_title' => 'Sukces',
        'deleted_title' => 'Usunięto',
        'delete_success_message' => 'Klient został pomyślnie usunięty!',
        'delete_error_message' => 'Błąd podczas usuwania klienta!',
    ],

    'vendors' => [
        'title_list' => 'Lista dostawców',
        'id' => 'ID',
        'name' => 'Nazwa',
        'email' => 'Email',
        'phone' => 'Telefon',
        'status' => 'Status',
        'actions' => 'Akcje',
        'register_new_vendor' => 'Zarejestruj nowego sprzedawcę',
        'vendor_name' => 'Nazwa sprzedawcy',
        'vendor_email' => 'E-mail sprzedawcy',
        'phone_optional' => 'Telefon (opcjonalnie)',
        'password' => 'Hasło',
        'confirm_password' => 'Potwierdź hasło',
        'status' => 'Status',
        'active' => 'Aktywny',
        'inactive' => 'Nieaktywny',
        'banned' => 'Zablokowany',
        'register_button' => 'Zarejestruj sprzedawcę',
        'cancel_button' => 'Anuluj',

        'active' => 'Aktywny',
        'inactive' => 'Nieaktywny',

        'modal_confirm_delete_title' => 'Potwierdź usunięcie',
        'modal_confirm_delete_body' => 'Czy na pewno chcesz usunąć tego dostawcę?',
        'delete' => 'Usuń',
        'cancel' => 'Anuluj',

        'success' => 'Sukces',
        'success_delete' => 'Dostawca został pomyślnie usunięty!',
        'error_delete' => 'Błąd podczas usuwania dostawcy! Proszę spróbuj ponownie.',
    ],

    'languages' => [
        'english' => 'Angielski',
        'spanish' => 'Hiszpański',
        'french' => 'Francuski',
        'arabic' => 'Arabski',
        'german' => 'Niemiecki',
        'persian' => 'Perski (Farsi)',
        'hindi' => 'Hindi',
        'indonesian' => 'Indonezyjski',
        'italian' => 'Włoski',
        'japanese' => 'Japoński',
        'korean' => 'Koreański',
        'dutch' => 'Holenderski',
        'polish' => 'Polski',
        'portuguese' => 'Portugalski',
        'russian' => 'Rosyjski',
        'thai' => 'Tajski',
        'turkish' => 'Turecki',
        'vietnamese' => 'Wietnamski',
        'chinese' => 'Chiński',

        'language_change' => 'Zmiana języka',
        'change_language' => 'Zmień język',
        'confirm_language_change' => 'Czy na pewno chcesz zmienić język?',
        'cancel' => 'Anuluj',
        'yes_change' => 'Tak, zmień',
    ],

    'categories' => [
        'heading' => 'Kategorie',
        'image' => 'Obraz',
        'choose_file' => 'Wybierz plik',
        'id' => 'ID',
        'name' => 'Nazwa kategorii',
        'description' => 'Opis',
        'action' => 'Akcja',
        'edit' => 'Edytuj',
        'delete' => 'Usuń',
        'button' => 'Zapisz',
        'add_new' => 'Dodaj Nowy',
        'status' => 'Status',
        'created' => 'Kategoria została pomyślnie utworzona!',
        'updated' => 'Kategoria została pomyślnie zaktualizowana!',
        'deleted' => 'Kategoria została pomyślnie usunięta!',
        'status_updated' => 'Status kategorii został pomyślnie zaktualizowany!',
        'massage_confirm' => 'Potwierdź usunięcie',
        'confirm_delete' => 'Czy na pewno chcesz usunąć tę kategorię?',
        'massage_cancel' => 'Anuluj',
        'massage_delete' => 'Usuń',
        'success' => 'Sukces',
    ],

    'datatables' => [
        'sEmptyTable' => 'Brak danych w tabeli',
        'sInfo' => 'Wyświetlanie od _START_ do _END_ z _TOTAL_ wpisów',
        'sInfoEmpty' => 'Wyświetlanie od 0 do 0 z 0 wpisów',
        'sInfoFiltered' => '(filtrowane z _MAX_ wszystkich wpisów)',
        'sLengthMenu' => 'Pokaż _MENU_ wpisów',
        'sLoadingRecords' => 'Ładowanie...',
        'sProcessing' => 'Przetwarzanie...',
        'sSearch' => 'Szukaj:',
        'sZeroRecords' => 'Brak pasujących rekordów',
        'oPaginate' => [
            'sFirst' => 'Pierwszy',
            'sLast' => 'Ostatni',
            'sNext' => 'Następny',
            'sPrevious' => 'Poprzedni',
        ],
    ],

    'products' => [

        // Tytuły
        'title_create' => 'Utwórz produkt',
        'title_edit' => 'Edytuj produkt',
        'title_manage' => 'Zarządzaj produktami',

        // Pola formularza
        'vendor' => 'Sprzedawca',
        'select_vendor' => 'Wybierz Sprzedawcę',
        'product_name' => 'Nazwa produktu',
        'product_type' => 'Typ produktu',
        'description' => 'Opis',
        'translations' => 'Tłumaczenia',
        'translated_value' => 'Przetłumaczona wartość',
        'category' => 'Kategoria',
        'brand' => 'Marka',
        'no_brand' => 'Brak marki',
        'status' => 'Status',
        'price' => 'Cena',
        'discount_price' => 'Cena promocyjna',
        'sku' => 'SKU',
        'barcode' => 'Kod kreskowy',
        'stock' => 'Stan magazynowy',
        'weight' => 'Waga',
        'dimension' => 'Wymiary',
        'size' => 'Rozmiar',
        'color' => 'Kolor',
        'images' => 'Zdjęcia produktu',
        'is_primary' => 'Wariant główny',
        'variant_name_en' => 'Nazwa wariantu',
        'attributes' => 'Atrybuty',
        'attribute_values' => 'Wartości atrybutów',
        'variants' => 'Warianty',

        // Przyciski
        'add_variant' => 'Dodaj wariant',
        'remove_variant' => 'Usuń wariant',
        'save_product' => 'Zapisz produkt',
        'update_product' => 'Aktualizuj produkt',
        'choose_images' => 'Wybierz zdjęcia',
        'choose_file' => 'Wybierz plik',
        'remove' => 'Usuń',

        // Komunikaty
        'status_updated' => 'Status produktu został pomyślnie zaktualizowany!',
        'success_create' => 'Produkt został pomyślnie utworzony!',
        'success_update' => 'Produkt został pomyślnie zaktualizowany!',
        'success_delete' => 'Produkt został pomyślnie usunięty!',
        'delete_confirmation' => 'Czy na pewno chcesz usunąć ten produkt?',
        'success' => 'Sukces',

        // Kolumny tabeli
        'id' => 'ID',
        'name' => 'Nazwa',
        'type' => 'Typ',
        'price_column' => 'Cena',
        'status_column' => 'Status',
        'action' => 'Akcja',

        // Okno potwierdzenia
        'confirm_delete' => 'Potwierdź usunięcie',
        'delete' => 'Usuń',
        'cancel' => 'Anuluj',
    ],

    'brands' => [
        'heading' => 'Marki',
        'id' => 'ID',
        'name' => 'Nazwa marki',
        'description' => 'Opis',
        'logo' => 'Logo',
        'status' => 'Status',
        'action' => 'Akcja',
        'edit' => 'Edytuj',
        'delete' => 'Usuń',
        'create' => 'Utwórz',
        'update' => 'Zaktualizuj',
        'add_new' => 'Dodaj nowy',
        'button' => 'Zapisz',
        'form_title' => 'Utwórz lub edytuj markę',
        'file_upload' => 'Prześlij logo',
        'no_logo' => 'Brak logo',
        'choose_file' => 'Wybierz plik',
        'image_preview' => 'Podgląd obrazu',
        'delete_confirmation' => 'Czy na pewno chcesz usunąć tę markę?',
        'brand_deleted' => 'Marka została pomyślnie usunięta!',
        'error_delete' => 'Wystąpił błąd podczas usuwania marki!',
        'created' => 'Marka została pomyślnie utworzona!',
        'updated' => 'Marka została pomyślnie zaktualizowana!',
        'deleted' => 'Marka została pomyślnie usunięta!',
        'status_updated' => 'Status marki został pomyślnie zaktualizowany!',
        'massage_confirm' => 'Potwierdzenie usunięcia',
        'confirm_delete' => 'Czy na pewno chcesz usunąć tę markę?',
        'massage_cancel' => 'Anuluj',
        'massage_delete' => 'Usuń',
        'success' => 'Sukces',
    ],

    'banners' => [
        'button_back' => 'Wstecz',
        'description' => 'Opis',
        'choose_file' => 'Wybierz plik',
        'all_banners' => 'Wszystkie bannery',
        'id' => 'ID',
        'add_new' => 'Dodaj nowy',
        'banner_type' => 'Typ banneru',
        'promotion' => 'Promocja',
        'sale' => 'Wyprzedaż',
        'seasonal' => 'Sezonowy',
        'featured' => 'Polecany',
        'announcement' => 'Ogłoszenie',
        'actions' => 'Akcje',
        'edit' => 'Edytuj',
        'delete' => 'Usuń',
        'no_image' => 'Brak dostępnej grafiki',
        'delete_confirmation' => 'Czy na pewno chcesz usunąć ten banner?',
        'banner_deleted' => 'Banner został pomyślnie usunięty!',
        'error_delete' => 'Błąd podczas usuwania bannera!',
        'image_preview' => 'Podgląd obrazu',
        'create_banner' => 'Utwórz banner',
        'edit_banner' => 'Edytuj tłumaczenia bannera',
        'save' => 'Zapisz',
        'languages' => 'Języki',
        'status' => 'Status',
        'image' => 'Obraz',
        'image_title' => 'Tytuł obrazu',
        'title' => 'Tytuł',
        'select_language' => 'Wybierz język',
        'file_upload' => 'Prześlij obraz',
        'choose_file' => 'Wybierz plik',
        'existing_image' => 'Istniejący obraz',
        'banner_saved' => 'Banner został pomyślnie zapisany!',
        'banner_updated' => 'Banner został pomyślnie zaktualizowany!',
        'form_title' => 'Utwórz lub edytuj banner',
        'form_description' => 'Podaj wszystkie niezbędne informacje dotyczące bannera.',
        'back_to_list' => 'Powrót do listy bannerów',
        'created' => 'Banner został pomyślnie utworzony!',
        'updated' => 'Banner został pomyślnie zaktualizowany!',
        'deleted' => 'Banner został pomyślnie usunięty!',
        'status_updated' => 'Status bannera został pomyślnie zaktualizowany!',
        'massage_confirm' => 'Potwierdzenie usunięcia',
        'confirm_delete' => 'Czy na pewno chcesz usunąć ten banner?',
        'massage_cancel' => 'Anuluj',
        'massage_delete' => 'Usuń',
        'success' => 'Sukces',
    ],

    'menus' => [
        'all_menus' => 'Wszystkie menu',
        'id' => 'ID',
        'add_new' => 'Dodaj nowe',
        'button_create' => 'Utwórz',
        'button_update' => 'Zaktualizuj',
        'title' => 'Tytuł',
        'edit' => 'Edytuj',
        'action' => 'Akcja',
        'delete' => 'Usuń',
        'created_at' => 'Utworzono w',
        'no_menus' => 'Brak dostępnych menu',
        'delete_confirmation' => 'Czy na pewno chcesz usunąć to menu?',
        'menu_deleted' => 'Menu zostało pomyślnie usunięte!',
        'error_delete' => 'Błąd podczas usuwania menu!',
        'create_menu' => 'Utwórz menu',
        'edit_menu' => 'Edytuj menu',
        'save' => 'Zapisz',
        'menu_title' => 'Tytuł menu',
        'form_title' => 'Utwórz lub edytuj menu',
        'form_description' => 'Proszę podać wszystkie niezbędne informacje dla menu.',
        'back_to_list' => 'Wróć do listy menu',
        'created' => 'Menu zostało pomyślnie utworzone!',
        'updated' => 'Menu zostało pomyślnie zaktualizowane!',
        'deleted' => 'Menu zostało pomyślnie usunięte!',
        'status_updated' => 'Status menu został pomyślnie zaktualizowany!',
        'massage_confirm' => 'Potwierdzenie usunięcia',
        'confirm_delete' => 'Czy na pewno chcesz usunąć to menu?',
        'massage_cancel' => 'Anuluj',
        'massage_delete' => 'Usuń',
        'success' => 'Sukces',

    ],

    'menu_items' => [
        'heading' => 'Wszystkie elementy menu',
        'id' => 'ID',
        'create' => 'Utwórz element menu',
        'choose_an_option' => 'Wybierz opcję',
        'select_an_option' => 'Wybierz opcję',
        'option1' => 'Opcja 1',
        'option2' => 'Opcja 2',
        'option3' => 'Opcja 3',
        'option4' => 'Opcja 4',
        'order_number' => 'Numer zamówienia',
        'parent_item' => 'Element nadrzędny',
        'parent_none' => 'Brak',
        'edit' => 'Edytuj element menu',
        'update' => 'Zaktualizuj element menu',
        'delete' => 'Usuń element menu',
        'title' => 'Tytuł',
        'button' => 'Zapisz',
        'update_button' => 'Zaktualizuj',
        'slug' => 'Slug',
        'order' => 'Kolejność',
        'actions' => 'Akcje',
        'add_new' => 'Dodaj nowe',
        'submit' => 'Wyślij',
        'cancel' => 'Anuluj',
        'no_title' => 'Brak tytułu',
        'select_menu' => 'Wybierz menu',
        'select_parent_item' => 'Wybierz element nadrzędny',
        'language' => 'Język',
        'select_language' => 'Wybierz język',
        'select_order' => 'Wybierz kolejność',
        'success_message' => 'Element menu został pomyślnie utworzony!',
        'error_message' => 'Wystąpił błąd podczas tworzenia elementu menu.',
        'confirm_delete' => 'Czy na pewno chcesz usunąć ten element menu?',
        'update_success_message' => 'Element menu został pomyślnie zaktualizowany!',
        'update_error_message' => 'Wystąpił błąd podczas aktualizacji elementu menu.',
        'created' => 'Element menu został pomyślnie utworzony!',
        'updated' => 'Element menu został pomyślnie zaktualizowany!',
        'deleted' => 'Element menu został pomyślnie usunięty!',
        'status_updated' => 'Status elementu menu został pomyślnie zaktualizowany!',
        'massage_confirm' => 'Potwierdź usunięcie',
        'confirm_delete' => 'Czy na pewno chcesz usunąć ten element menu?',
        'massage_cancel' => 'Anuluj',
        'massage_delete' => 'Usuń',
        'success' => 'Sukces',

    ],
    'errors' => [
        'validation_failed' => 'Niepowodzenie walidacji! Popraw błędy i spróbuj ponownie.',
        'csrf_token_invalid' => 'Nieprawidłowy token CSRF. Odśwież stronę i spróbuj ponownie.',
        'not_found' => 'Nie znaleziono żądanego elementu.',
        'unauthorized' => 'Nie masz uprawnień do wykonania tej akcji.',
    ],
    'messages' => [
        'welcome' => 'Witaj w panelu administracyjnym!',
        'dashboard' => 'Panel',
        'settings' => 'Ustawienia',
        'log_out' => 'Wyloguj się',
        'profile' => 'Profil',
        'menu' => 'Menu',
        'home' => 'Strona główna',
        'view_details' => 'Zobacz szczegóły',
    ],

    'social_media_links' => [
        'type' => 'Typ sieci społecznościowej',
        'select_type' => 'Wybierz typ sieci społecznościowej',
        'types' => [
            'facebook' => 'Facebook',
            'instagram' => 'Instagram',
            'tiktok' => 'TikTok',
            'youtube' => 'YouTube',
            'x' => 'X',
        ],

        'id' => 'ID',
        'create' => 'Utwórz link do mediów społecznościowych',
        'edit' => 'Edytuj link do mediów społecznościowych',
        'platform' => 'Nazwa platformy',
        'link' => 'Link do mediów społecznościowych',
        'created' => 'Link do mediów społecznościowych został pomyślnie utworzony!',
        'updated' => 'Link do mediów społecznościowych został pomyślnie zaktualizowany!',
        'deleted' => 'Link do mediów społecznościowych został pomyślnie usunięty!',
        'status_updated' => 'Status linku do mediów społecznościowych został pomyślnie zaktualizowany!',
        'massage_confirm' => 'Potwierdź usunięcie',
        'confirm_delete' => 'Czy na pewno chcesz usunąć ten link do mediów społecznościowych?',
        'massage_cancel' => 'Anuluj',
        'massage_delete' => 'Usuń',
        'success' => 'Sukces',

        'translations' => [
            'platform_name' => 'Nazwa platformy (przetłumaczone)',
        ],
        'save' => 'Zapisz',
        'update' => 'Aktualizuj',
        'delete' => 'Usuń',
        'no_links' => 'Brak dostępnych linków do mediów społecznościowych',
        'delete_confirmation' => 'Czy na pewno chcesz usunąć ten link?',
        'link_deleted' => 'Link do mediów społecznościowych został pomyślnie usunięty!',
        'error_delete' => 'Błąd podczas usuwania linku!',
        'create_link' => 'Utwórz link do mediów społecznościowych',
        'edit_link' => 'Edytuj link do mediów społecznościowych',
        'form_title' => 'Utwórz lub edytuj link do mediów społecznościowych',
        'form_description' => 'Podaj wszystkie niezbędne informacje dotyczące linku do mediów społecznościowych.',
        'back_to_list' => 'Powrót do listy linków do mediów społecznościowych',
        'add_new' => 'Dodaj nowy',
        'trans_name' => 'Przetłumaczone imię',
        'delete' => 'Usuń',
        'action' => 'Akcja',
    ],

    'orders' => [

        // Page Title
        'title' => 'Lista zamówień',

        // Table Headings
        'id' => 'ID zamówienia',
        'order_date' => 'Data zamówienia',
        'status' => 'Status',
        'total_price' => 'Łączna cena',
        'action' => 'Akcje',
        'customer' => 'Klient',

        // Delete Modal
        'delete_confirm_title' => 'Potwierdź usunięcie',
        'delete_confirm_message' => 'Czy na pewno chcesz usunąć to zamówienie?',
        'delete_cancel' => 'Anuluj',
        'delete_button' => 'Usuń',

        // Toastr / Flash Messages
        'deleted_success' => 'Zamówienie zostało pomyślnie usunięte.',
        'deleted_error' => 'Nie udało się usunąć zamówienia.',
        'deleted' => 'Usunięto',
        'success' => 'Sukces',
    ],

    'attributes' => [
        'title_create' => 'Utwórz atrybut',
        'title_edit' => 'Edytuj atrybut',
        'title_manage' => 'Zarządzaj atrybutami',

        'attribute_name' => 'Nazwa atrybutu',
        'attribute_values' => 'Wartości atrybutu',
        'translations' => 'Tłumaczenia',
        'translated_value' => 'Przetłumaczona wartość',

        'add_value' => 'Dodaj wartość',
        'remove_value' => 'Usuń',
        'save_attribute' => 'Zapisz atrybut',
        'update_attribute' => 'Aktualizuj atrybut',
        'add_value_translation' => 'Dodaj tłumaczenie wartości',

        'success_create' => 'Atrybut został pomyślnie utworzony!',
        'success_update' => 'Atrybut został pomyślnie zaktualizowany!',
        'success_delete' => 'Atrybut został pomyślnie usunięty!',
        'delete_confirmation' => 'Czy na pewno chcesz usunąć ten atrybut?',
        'success' => 'Sukces',

        'id' => 'ID',
        'name' => 'Nazwa',
        'values' => 'Wartości',
        'action' => 'Akcja',

        'confirm_delete' => 'Potwierdź usunięcie',
        'delete' => 'Usuń',
        'cancel' => 'Anuluj',
    ],

    'product_reviews' => [
        'title_manage' => 'Zarządzanie opiniami o produktach',

        'review_id' => 'ID opinii',
        'customer_name' => 'Nazwa klienta',
        'product_name' => 'Nazwa produktu',
        'rating' => 'Ocena',
        'status' => 'Status',
        'actions' => 'Akcje',
        'review_details' => 'Szczegóły recenzji',
        'review' => 'Recenzja',
        'back_button' => 'Wróć do listy',

        'confirm_delete' => 'Potwierdzenie usunięcia',
        'delete_message' => 'Czy na pewno chcesz usunąć tę opinię o produkcie?',
        'delete' => 'Usuń',
        'cancel' => 'Anuluj',

        'success_create' => 'Opinia o produkcie została pomyślnie dodana!',
        'success_update' => 'Opinia o produkcie została pomyślnie zaktualizowana!',
        'success_delete' => 'Opinia o produkcie została pomyślnie usunięta!',
        'error_delete' => 'Błąd podczas usuwania opinii o produkcie! Spróbuj ponownie.',

        'success' => 'Sukces',
        'error' => 'Błąd',
    ],

];
