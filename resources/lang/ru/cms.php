<?php

return [
    'auth' => [
        'velstore' => 'Велстор',
        'login' => 'Войти',
        'email' => 'Адрес электронной почты',
        'password' => 'Пароль',
        'remember_me' => 'Запомнить меня',
        'forgot_password' => 'Забыли пароль?',
    ],

    'profile' => [
        'profile' => 'Профиль',
        'setting' => 'Настройки',
        'logout' => 'Выйти',
    ],

    'dashboard' => [
        'total_sales' => 'Общая Продажа',
        'today' => 'Сегодня',
        'total' => 'Всего',

        'total_orders' => 'Всего Заказов',
        'completed' => 'Завершено',
        'all_orders' => 'Все Заказы',

        'total_vendors' => 'Всего Продавцов',
        'active' => 'Активные',

        'total_customers' => 'Всего Клиентов',
    ],

    'sidebar' => [
        'search_placeholder' => 'Поиск...',
        'dashboard' => 'Панель управления',
        'logo' => 'Логотип',

        'categories' => [
            'title' => 'Категории',
            'add_new' => 'Добавить новую',
            'list' => 'Список',
        ],
        'brands' => [
            'title' => 'Бренды',
            'add_new' => 'Добавить новый',
            'list' => 'Список',
        ],
        'products' => [
            'title' => 'Товары',
            'add_new' => 'Добавить новый',
            'list' => 'Список',
        ],
        'attributes' => [
            'title' => 'Атрибуты',
            'add_new' => 'Добавить новый',
            'list' => 'Список',
        ],
        'customers' => [
            'title' => 'Клиенты',
            'list' => 'Список',
        ],
        'vendors' => [
            'title' => 'Поставщики',
            'add_new' => 'Добавить новый',
            'list' => 'Список',
        ],
        'product_reviews' => [
            'title' => 'Отзывы о товарах',
            'list' => 'Список',
        ],
        'banners' => [
            'title' => 'Баннеры',
            'add_new' => 'Добавить новый',
            'list' => 'Список',
        ],
        'menu' => [
            'title' => 'Меню',
            'add_new' => 'Добавить новое',
            'list' => 'Список',
        ],
        'menu_items' => [
            'title' => 'Элементы меню',
            'add_new' => 'Добавить новый',
            'list' => 'Список',
        ],
        'social_media_links' => [
            'title' => 'Ссылки на соцсети',
            'add_new' => 'Добавить новую',
            'list' => 'Список',
        ],
        'site_settings' => [
            'title' => 'Настройки сайта',
            'manage' => 'Управление настройками',
        ],
        'orders' => [
            'title' => 'Заказы',
            'all_orders' => 'Все заказы',
            'pending_orders' => 'Ожидающие заказы',
            'completed_orders' => 'Завершенные заказы',
            'list' => 'Список',
        ],
        'pages' => [
            'title' => 'Страницы',
            'add_new' => 'Добавить новую',
            'list' => 'Список',
        ],
        'payments' => [
            'title' => 'Платежи',
            'list' => 'Список',
        ],

        'refunds' => [
            'title' => 'Возвраты',
            'list' => 'Список',
        ],

        'payment_gateways' => [
            'title' => 'Платёжные шлюзы',
            'list' => 'Список',
        ],
    ],

    'profile' => [
        'title' => 'Редактировать профиль',
        'choose_file' => 'Выбрать файл',
        'name' => 'Имя',
        'email' => 'Электронная почта',
        'phone' => 'Телефон',
        'current_password' => 'Текущий пароль',
        'new_password' => 'Новый пароль',
        'confirm_new_password' => 'Подтвердить новый пароль',
        'save' => 'Сохранить',
        'profile_updated' => 'Профиль успешно обновлён!',
        'success' => 'Успех',
    ],

    'payment_gateways' => [

        // Page Titles
        'title' => 'Платёжные шлюзы',
        'edit_title' => 'Редактировать платёжный шлюз',

        // Table Headings
        'id' => 'ID',
        'name' => 'Название',
        'code' => 'Код',
        'status' => 'Статус',
        'action' => 'Действие',

        // Status Labels
        'active' => 'Активен',
        'inactive' => 'Неактивен',

        // Delete Modal
        'delete_confirm' => 'Подтвердить удаление',
        'delete_message' => 'Вы уверены, что хотите удалить этот платёжный шлюз?',
        'cancel' => 'Отмена',
        'delete' => 'Удалить',

        // Alerts / Notifications
        'success' => 'Успех',
        'deleted' => 'Удалено',
        'delete_error' => 'Ошибка при удалении платёжного шлюза!',

        // Form Labels
        'gateway_name' => 'Название шлюза',
        'description' => 'Описание',
        'active_label' => 'Активен',
        'configurations' => 'Настройки шлюза',
        'key_name' => 'Имя ключа',
        'key_value' => 'Значение ключа',
        'environment' => 'Окружение',
        'sandbox' => 'Песочница',
        'production' => 'Продакшн',
        'encrypted' => 'Зашифровано',
        'unique' => 'Уникальный',
        'update_button' => 'Обновить',

        // Fallback
        'not_available' => 'Н/Д',
    ],

    'refunds' => [

        // Page Titles
        'title' => 'Возвраты',
        'details_title' => 'Детали возврата',

        // Table Headings
        'id' => 'ID',
        'payment' => 'Платёж',
        'amount' => 'Сумма',
        'status' => 'Статус',
        'reason' => 'Причина',
        'action' => 'Действие',

        // Status Labels
        'completed' => 'Завершено',
        'pending' => 'В ожидании',
        'failed' => 'Неудачно',

        // Delete Modal
        'delete_confirm' => 'Подтвердить удаление',
        'delete_message' => 'Вы уверены, что хотите удалить этот возврат?',
        'cancel' => 'Отмена',
        'delete' => 'Удалить',

        // Alerts / Notifications
        'success' => 'Успех',
        'deleted' => 'Удалено',
        'delete_error' => 'Ошибка при удалении возврата!',

        // Refund Details Page
        'created_at' => 'Создано',
        'updated_at' => 'Обновлено',
        'back' => 'Назад к возвратам',

        // Fallback
        'not_available' => 'Недоступно',
    ],

    'payments' => [

        // Page Titles
        'title' => 'Платежи',
        'details_title' => 'Детали платежа',

        // Table Headings
        'id' => 'ID',
        'order' => 'Заказ',
        'user' => 'Пользователь',
        'gateway' => 'Платежный шлюз',
        'amount' => 'Сумма',
        'status' => 'Статус',
        'transaction' => 'Транзакция',
        'action' => 'Действие',

        // Status Labels
        'completed' => 'Завершено',
        'pending' => 'В ожидании',
        'failed' => 'Неудачно',

        // Delete Modal
        'delete_confirm' => 'Подтвердить удаление',
        'delete_message' => 'Вы уверены, что хотите удалить этот платеж?',
        'cancel' => 'Отмена',
        'delete' => 'Удалить',

        // Alerts / Notifications
        'success' => 'Успешно',
        'deleted' => 'Удалено',
        'delete_error' => 'Ошибка при удалении платежа!',

        // Payment Details Page
        'transaction_id' => 'ID транзакции',
        'created_at' => 'Дата создания',
        'back' => 'Вернуться к платежам',

        // Fallback
        'not_available' => 'Недоступно',
    ],

    'pages' => [
        // General
        'title' => 'Страницы',
        'choose_file' => 'Выбрать файл',

        // Create Page
        'create' => 'Создать страницу',
        'form_title' => 'Заголовок (:code)',
        'form_content' => 'Содержание (:code)',
        'form_image' => 'Изображение (:code)',
        'form_save' => 'Сохранить',

        // Edit Page
        'edit' => 'Редактировать страницу',
        'form_update' => 'Обновить',

        // Pages Table
        'table_title' => 'Заголовок',
        'table_slug' => 'Slug',
        'table_status' => 'Статус',
        'table_actions' => 'Действия',

        // Delete Modal
        'delete_modal_title' => 'Подтверждение удаления',
        'delete_modal_text' => 'Вы уверены, что хотите удалить эту страницу?',
        'delete_modal_cancel' => 'Отмена',
        'delete_modal_delete' => 'Удалить',

        // Toastr messages
        'toastr_success' => 'Успех',
        'toastr_error' => 'Ошибка при удалении страницы',
    ],

    'customers' => [
        'customer_list' => 'Список клиентов',

        // Table columns
        'id' => 'ID',
        'name' => 'Имя',
        'email' => 'E-mail',
        'phone' => 'Телефон',
        'address' => 'Адрес',
        'status' => 'Статус',
        'actions' => 'Действия',

        // Status labels
        'active' => 'Активен',
        'inactive' => 'Неактивен',

        // Modal
        'confirm_delete_title' => 'Подтвердите удаление',
        'confirm_delete_message' => 'Вы уверены, что хотите удалить этого клиента?',
        'cancel_button' => 'Отмена',
        'delete_button' => 'Удалить',

        // Toastr messages
        'success_title' => 'Успешно',
        'deleted_title' => 'Удалено',
        'delete_success_message' => 'Клиент успешно удалён!',
        'delete_error_message' => 'Ошибка при удалении клиента!',
    ],

    'vendors' => [
        'title_list' => 'Список поставщиков',
        'id' => 'ID',
        'name' => 'Имя',
        'email' => 'Электронная почта',
        'phone' => 'Телефон',
        'status' => 'Статус',
        'actions' => 'Действия',
        'register_new_vendor' => 'Зарегистрировать нового продавца',
        'vendor_name' => 'Имя продавца',
        'vendor_email' => 'Электронная почта продавца',
        'phone_optional' => 'Телефон (необязательно)',
        'password' => 'Пароль',
        'confirm_password' => 'Подтвердите пароль',
        'status' => 'Статус',
        'active' => 'Активный',
        'inactive' => 'Неактивный',
        'banned' => 'Заблокирован',
        'register_button' => 'Зарегистрировать продавца',
        'cancel_button' => 'Отмена',

        'active' => 'Активен',
        'inactive' => 'Неактивен',

        'modal_confirm_delete_title' => 'Подтверждение удаления',
        'modal_confirm_delete_body' => 'Вы уверены, что хотите удалить этого поставщика?',
        'delete' => 'Удалить',
        'cancel' => 'Отмена',

        'success' => 'Успех',
        'success_delete' => 'Поставщик успешно удалён!',
        'error_delete' => 'Ошибка при удалении поставщика! Пожалуйста, попробуйте снова.',
    ],

    'languages' => [
        'english' => 'Английский',
        'spanish' => 'Испанский',
        'french' => 'Французский',
        'arabic' => 'Арабский',
        'german' => 'Немецкий',
        'persian' => 'Персидский (Фарси)',
        'hindi' => 'Хинди',
        'indonesian' => 'Индонезийский',
        'italian' => 'Итальянский',
        'japanese' => 'Японский',
        'korean' => 'Корейский',
        'dutch' => 'Голландский',
        'polish' => 'Польский',
        'portuguese' => 'Португальский',
        'russian' => 'Русский',
        'thai' => 'Тайский',
        'turkish' => 'Турецкий',
        'vietnamese' => 'Вьетнамский',
        'chinese' => 'Китайский',

        'language_change' => 'Смена языка',
        'change_language' => 'Изменить язык',
        'confirm_language_change' => 'Вы уверены, что хотите изменить язык?',
        'cancel' => 'Отмена',
        'yes_change' => 'Да, изменить',
    ],

    'categories' => [
        'heading' => 'Категории',
        'image' => 'Изображение',
        'choose_file' => 'Выбрать файл',
        'id' => 'ID',
        'name' => 'Название категории',
        'description' => 'Описание',
        'action' => 'Действие',
        'edit' => 'Редактировать',
        'delete' => 'Удалить',
        'button' => 'Сохранить',
        'add_new' => 'Добавить новый',
        'status' => 'Статус',
        'created' => 'Категория успешно создана!',
        'updated' => 'Категория успешно обновлена!',
        'deleted' => 'Категория успешно удалена!',
        'status_updated' => 'Статус категории успешно обновлен!',
        'massage_confirm' => 'Подтвердить удаление',
        'confirm_delete' => 'Вы уверены, что хотите удалить эту категорию?',
        'massage_cancel' => 'Отменить',
        'massage_delete' => 'Удалить',
        'success' => 'Успех',
    ],

    'datatables' => [
        'sEmptyTable' => 'Данные в таблице отсутствуют',
        'sInfo' => 'Показано с _START_ по _END_ из _TOTAL_ записей',
        'sInfoEmpty' => 'Показано с 0 по 0 из 0 записей',
        'sInfoFiltered' => '(отфильтровано из _MAX_ записей всего)',
        'sLengthMenu' => 'Показать _MENU_ записей',
        'sLoadingRecords' => 'Загрузка...',
        'sProcessing' => 'Обработка...',
        'sSearch' => 'Поиск:',
        'sZeroRecords' => 'Соответствующие записи не найдены',
        'oPaginate' => [
            'sFirst' => 'Первый',
            'sLast' => 'Последний',
            'sNext' => 'Следующий',
            'sPrevious' => 'Предыдущий',
        ],
    ],

    'products' => [

        // Заголовки
        'title_create' => 'Создать товар',
        'title_edit' => 'Редактировать товар',
        'title_manage' => 'Управление товарами',

        // Поля формы
        'vendor' => 'Поставщик',
        'select_vendor' => 'Выберите поставщика',
        'product_name' => 'Название товара',
        'product_type' => 'Тип товара',
        'description' => 'Описание',
        'translations' => 'Переводы',
        'translated_value' => 'Переведенное значение',
        'category' => 'Категория',
        'brand' => 'Бренд',
        'no_brand' => 'Без бренда',
        'status' => 'Статус',
        'price' => 'Цена',
        'discount_price' => 'Цена со скидкой',
        'sku' => 'Артикул (SKU)',
        'barcode' => 'Штрихкод',
        'stock' => 'Остаток',
        'weight' => 'Вес',
        'dimension' => 'Размеры',
        'size' => 'Размер',
        'color' => 'Цвет',
        'images' => 'Изображения товара',
        'is_primary' => 'Основной вариант',
        'variant_name_en' => 'Название варианта',
        'attributes' => 'Атрибуты',
        'attribute_values' => 'Значения атрибутов',
        'variants' => 'Варианты',

        // Кнопки
        'add_variant' => 'Добавить вариант',
        'remove_variant' => 'Удалить вариант',
        'save_product' => 'Сохранить товар',
        'update_product' => 'Обновить товар',
        'choose_images' => 'Выбрать изображения',
        'choose_file' => 'Выбрать файл',
        'remove' => 'Удалить',

        // Сообщения
        'status_updated' => 'Статус продукта успешно обновлен!',
        'success_create' => 'Товар успешно создан!',
        'success_update' => 'Товар успешно обновлен!',
        'success_delete' => 'Товар успешно удален!',
        'delete_confirmation' => 'Вы уверены, что хотите удалить этот товар?',
        'success' => 'Успешно',

        // Столбцы таблицы
        'id' => 'ID',
        'name' => 'Название',
        'type' => 'Тип',
        'price_column' => 'Цена',
        'status_column' => 'Статус',
        'action' => 'Действие',

        // Диалог подтверждения
        'confirm_delete' => 'Подтвердите удаление',
        'delete' => 'Удалить',
        'cancel' => 'Отмена',
    ],

    'brands' => [
        'heading' => 'Бренды',
        'id' => 'ID',
        'name' => 'Название бренда',
        'description' => 'Описание',
        'logo' => 'Логотип',
        'status' => 'Статус',
        'action' => 'Действие',
        'edit' => 'Редактировать',
        'delete' => 'Удалить',
        'create' => 'Создать',
        'update' => 'Обновить',
        'add_new' => 'Добавить новый',
        'button' => 'Сохранить',
        'form_title' => 'Создать или редактировать бренд',
        'file_upload' => 'Загрузить логотип',
        'no_logo' => 'Нет логотипа',
        'choose_file' => 'Выбрать файл',
        'image_preview' => 'Предпросмотр изображения',
        'delete_confirmation' => 'Вы уверены, что хотите удалить этот бренд?',
        'brand_deleted' => 'Бренд успешно удален!',
        'error_delete' => 'Ошибка при удалении бренда!',
        'created' => 'Бренд успешно создан!',
        'updated' => 'Бренд успешно обновлен!',
        'deleted' => 'Бренд успешно удален!',
        'status_updated' => 'Статус бренда успешно обновлен!',
        'massage_confirm' => 'Подтверждение удаления',
        'confirm_delete' => 'Вы уверены, что хотите удалить этот бренд?',
        'massage_cancel' => 'Отмена',
        'massage_delete' => 'Удалить',
        'success' => 'Успех',
    ],

    'banners' => [
        'button_back' => 'Назад',
        'description' => 'Описание',
        'choose_file' => 'Выберите файл',
        'all_banners' => 'Все баннеры',
        'id' => 'ID',
        'add_new' => 'Добавить новый',
        'banner_type' => 'Тип баннера',
        'promotion' => 'Продажа',
        'sale' => 'Скидка',
        'seasonal' => 'Сезонный',
        'featured' => 'Рекомендуемый',
        'announcement' => 'Объявление',
        'actions' => 'Действия',
        'edit' => 'Редактировать',
        'delete' => 'Удалить',
        'no_image' => 'Изображение недоступно',
        'delete_confirmation' => 'Вы уверены, что хотите удалить этот баннер?',
        'banner_deleted' => 'Баннер успешно удален!',
        'error_delete' => 'Ошибка при удалении баннера!',
        'image_preview' => 'Предварительный просмотр изображения',
        'create_banner' => 'Создать баннер',
        'edit_banner' => 'Редактировать перевод баннера',
        'save' => 'Сохранить',
        'languages' => 'Языки',
        'status' => 'Статус',
        'image' => 'Изображение',
        'image_title' => 'Заголовок изображения',
        'title' => 'Заголовок',
        'select_language' => 'Выберите язык',
        'file_upload' => 'Загрузить изображение',
        'choose_file' => 'Выбрать файл',
        'existing_image' => 'Существующее изображение',
        'banner_saved' => 'Баннер успешно сохранен!',
        'banner_updated' => 'Баннер успешно обновлен!',
        'form_title' => 'Создать или отредактировать баннер',
        'form_description' => 'Пожалуйста, предоставьте всю необходимую информацию для баннера.',
        'back_to_list' => 'Вернуться к списку баннеров',
        'created' => 'Баннер успешно создан!',
        'updated' => 'Баннер успешно обновлен!',
        'deleted' => 'Баннер успешно удален!',
        'status_updated' => 'Статус баннера успешно обновлен!',
        'massage_confirm' => 'Подтверждение удаления',
        'confirm_delete' => 'Вы уверены, что хотите удалить этот баннер?',
        'massage_cancel' => 'Отмена',
        'massage_delete' => 'Удалить',
        'success' => 'Успех',
    ],

    'menus' => [
        'all_menus' => 'Все меню',
        'id' => 'ID',
        'add_new' => 'Добавить новое',
        'button_create' => 'Создать',
        'button_update' => 'Обновить',
        'title' => 'Название',
        'edit' => 'Редактировать',
        'action' => 'Действие',
        'delete' => 'Удалить',
        'created_at' => 'Создано',
        'no_menus' => 'Меню недоступны',
        'delete_confirmation' => 'Вы уверены, что хотите удалить это меню?',
        'menu_deleted' => 'Меню успешно удалено!',
        'error_delete' => 'Ошибка при удалении меню!',
        'create_menu' => 'Создать меню',
        'edit_menu' => 'Редактировать меню',
        'save' => 'Сохранить',
        'menu_title' => 'Название меню',
        'form_title' => 'Создать или отредактировать меню',
        'form_description' => 'Пожалуйста, предоставьте всю необходимую информацию для меню.',
        'back_to_list' => 'Вернуться к списку меню',
        'created' => 'Меню успешно создано!',
        'updated' => 'Меню успешно обновлено!',
        'deleted' => 'Меню успешно удалено!',
        'status_updated' => 'Статус меню успешно обновлён!',
        'massage_confirm' => 'Подтвердить удаление',
        'confirm_delete' => 'Вы уверены, что хотите удалить это меню?',
        'massage_cancel' => 'Отмена',
        'massage_delete' => 'Удалить',
        'success' => 'Успех',
    ],

    'menu_items' => [
        'heading' => 'Все элементы меню',
        'id' => 'ID',
        'create' => 'Создать элемент меню',
        'choose_an_option' => 'Выберите опцию',
        'select_an_option' => 'Выберите опцию',
        'option1' => 'Опция 1',
        'option2' => 'Опция 2',
        'option3' => 'Опция 3',
        'option4' => 'Опция 4',
        'order_number' => 'Номер заказа',
        'parent_item' => 'Родительский элемент',
        'parent_none' => 'Нет',
        'edit' => 'Редактировать элемент меню',
        'update' => 'Обновить элемент меню',
        'delete' => 'Удалить элемент меню',
        'title' => 'Заголовок',
        'button' => 'Сохранить',
        'update_button' => 'Обновить',
        'slug' => 'Слаг',
        'order' => 'Порядок',
        'actions' => 'Действия',
        'add_new' => 'Добавить новое',
        'submit' => 'Отправить',
        'cancel' => 'Отмена',
        'no_title' => 'Без названия',
        'select_menu' => 'Выберите меню',
        'select_parent_item' => 'Выберите родительский элемент',
        'language' => 'Язык',
        'select_language' => 'Выберите язык',
        'select_order' => 'Выберите порядок',
        'success_message' => 'Элемент меню успешно создан!',
        'error_message' => 'Ошибка при создании элемента меню.',
        'confirm_delete' => 'Вы уверены, что хотите удалить этот элемент меню?',
        'update_success_message' => 'Элемент меню успешно обновлен!',
        'update_error_message' => 'Ошибка при обновлении элемента меню.',
        'created' => 'Элемент меню успешно создан!',
        'updated' => 'Элемент меню успешно обновлён!',
        'deleted' => 'Элемент меню успешно удалён!',
        'status_updated' => 'Статус элемента меню успешно обновлён!',
        'massage_confirm' => 'Подтвердить удаление',
        'confirm_delete' => 'Вы уверены, что хотите удалить этот элемент меню?',
        'massage_cancel' => 'Отмена',
        'massage_delete' => 'Удалить',
        'success' => 'Успех',

    ],
    'errors' => [
        'validation_failed' => 'Ошибка валидации! Пожалуйста, исправьте ошибки и попробуйте снова.',
        'csrf_token_invalid' => 'Неверный CSRF токен. Пожалуйста, обновите страницу и попробуйте снова.',
        'not_found' => 'Запрашиваемый элемент не найден.',
        'unauthorized' => 'У вас нет прав для выполнения этого действия.',
    ],
    'messages' => [
        'welcome' => 'Добро пожаловать в панель администратора!',
        'dashboard' => 'Панель управления',
        'settings' => 'Настройки',
        'log_out' => 'Выйти',
        'profile' => 'Профиль',
        'menu' => 'Меню',
        'home' => 'Главная',
        'view_details' => 'Посмотреть детали',
    ],

    'social_media_links' => [
        'type' => 'Тип социальной сети',
        'select_type' => 'Выберите тип социальной сети',
        'types' => [
            'facebook' => 'Фейсбук',
            'instagram' => 'Инстаграм',
            'tiktok' => 'ТикТок',
            'youtube' => 'Ютуб',
            'x' => 'Икс',
        ],

        'id' => 'ID',
        'create' => 'Создать ссылку на социальные сети',
        'edit' => 'Редактировать ссылку на социальные сети',
        'platform' => 'Название платформы',
        'link' => 'Ссылка на социальные сети',
        'created' => 'Ссылка на социальные сети успешно создана!',
        'updated' => 'Ссылка на социальные сети успешно обновлена!',
        'deleted' => 'Ссылка на социальные сети успешно удалена!',
        'status_updated' => 'Статус ссылки на социальные сети успешно обновлен!',
        'massage_confirm' => 'Подтвердите удаление',
        'confirm_delete' => 'Вы уверены, что хотите удалить эту ссылку на социальные сети?',
        'massage_cancel' => 'Отмена',
        'massage_delete' => 'Удалить',
        'success' => 'Успех',

        'translations' => [
            'platform_name' => 'Название платформы (переведено)',
        ],
        'save' => 'Сохранить',
        'update' => 'Обновить',
        'delete' => 'Удалить',
        'no_links' => 'Нет доступных ссылок на социальные сети',
        'delete_confirmation' => 'Вы уверены, что хотите удалить эту ссылку?',
        'link_deleted' => 'Ссылка на социальные сети успешно удалена!',
        'error_delete' => 'Ошибка при удалении ссылки!',
        'create_link' => 'Создать ссылку на социальные сети',
        'edit_link' => 'Редактировать ссылку на социальные сети',
        'form_title' => 'Создание или редактирование ссылки на социальные сети',
        'form_description' => 'Пожалуйста, предоставьте всю необходимую информацию для ссылки на социальные сети.',
        'back_to_list' => 'Вернуться к списку ссылок на социальные сети',
        'add_new' => 'Добавить новый',
        'trans_name' => 'Переведенное название',
        'delete' => 'Удалить',
        'action' => 'Действие',
    ],

    'orders' => [

        // Page Title
        'title' => 'Список заказов',

        // Table Headings
        'id' => 'ID заказа',
        'order_date' => 'Дата заказа',
        'status' => 'Статус',
        'total_price' => 'Общая стоимость',
        'action' => 'Действия',
        'customer' => 'Клиент',

        // Delete Modal
        'delete_confirm_title' => 'Подтвердить удаление',
        'delete_confirm_message' => 'Вы уверены, что хотите удалить этот заказ?',
        'delete_cancel' => 'Отмена',
        'delete_button' => 'Удалить',

        // Toastr / Flash Messages
        'deleted_success' => 'Заказ успешно удален.',
        'deleted_error' => 'Не удалось удалить заказ.',
        'deleted' => 'Удалено',
        'success' => 'Успех',
    ],

    'attributes' => [
        'title_create' => 'Создать атрибут',
        'title_edit' => 'Редактировать атрибут',
        'title_manage' => 'Управление атрибутами',

        'attribute_name' => 'Название атрибута',
        'attribute_values' => 'Значения атрибута',
        'translations' => 'Переводы',
        'translated_value' => 'Переведенное значение',

        'add_value' => 'Добавить значение',
        'remove_value' => 'Удалить',
        'save_attribute' => 'Сохранить атрибут',
        'update_attribute' => 'Обновить атрибут',
        'add_value_translation' => 'Добавить перевод значения',

        'success_create' => 'Атрибут успешно создан!',
        'success_update' => 'Атрибут успешно обновлен!',
        'success_delete' => 'Атрибут успешно удален!',
        'delete_confirmation' => 'Вы уверены, что хотите удалить этот атрибут?',
        'success' => 'Успех',

        'id' => 'ID',
        'name' => 'Название',
        'values' => 'Значения',
        'action' => 'Действие',

        'confirm_delete' => 'Подтвердите удаление',
        'delete' => 'Удалить',
        'cancel' => 'Отмена',
    ],

    'product_reviews' => [
        'title_manage' => 'Управление отзывами о товарах',

        'review_id' => 'ID отзыва',
        'customer_name' => 'Имя клиента',
        'product_name' => 'Название товара',
        'rating' => 'Оценка',
        'status' => 'Статус',
        'actions' => 'Действия',
        'review_details' => 'Подробности отзыва',
        'review' => 'Отзыв',
        'back_button' => 'Вернуться к списку',

        'confirm_delete' => 'Подтверждение удаления',
        'delete_message' => 'Вы уверены, что хотите удалить этот отзыв о товаре?',
        'delete' => 'Удалить',
        'cancel' => 'Отмена',

        'success_create' => 'Отзыв о товаре успешно создан!',
        'success_update' => 'Отзыв о товаре успешно обновлен!',
        'success_delete' => 'Отзыв о товаре успешно удален!',
        'error_delete' => 'Ошибка при удалении отзыва о товаре! Пожалуйста, попробуйте снова.',

        'success' => 'Успех',
        'error' => 'Ошибка',
    ],

];
