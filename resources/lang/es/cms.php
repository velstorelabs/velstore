<?php

return [
    'auth' => [
        'velstore' => 'Velstore',
        'login' => 'Iniciar sesión',
        'email' => 'Correo electrónico',
        'password' => 'Contraseña',
        'remember_me' => 'Recuérdame',
        'forgot_password' => '¿Olvidaste tu contraseña?',
    ],

    'profile' => [
        'profile' => 'Perfil',
        'setting' => 'Configuración',
        'logout' => 'Cerrar sesión',
    ],

    'dashboard' => [
        'total_sales' => 'Ventas Totales',
        'today' => 'Hoy',
        'total' => 'Total',

        'total_orders' => 'Total de Pedidos',
        'completed' => 'Completado',
        'all_orders' => 'Todos los Pedidos',

        'total_vendors' => 'Total de Vendedores',
        'active' => 'Activo',

        'total_customers' => 'Total de Clientes',

        'my_sales' => 'Mis Ventas',
        'my_orders' => 'Mis Pedidos',
        'my_products' => 'Mis Productos',
    ],

    'sidebar' => [
        'search_placeholder' => 'Buscar...',
        'dashboard' => 'Panel de control',
        'logo' => 'Logo',

        'categories' => [
            'title' => 'Categorías',
            'add_new' => 'Agregar nuevo',
            'list' => 'Lista',
        ],
        'brands' => [
            'title' => 'Marcas',
            'add_new' => 'Agregar nuevo',
            'list' => 'Lista',
        ],
        'products' => [
            'title' => 'Productos',
            'add_new' => 'Agregar nuevo',
            'list' => 'Lista',
        ],
        'attributes' => [
            'title' => 'Atributos',
            'add_new' => 'Agregar nuevo',
            'list' => 'Lista',
        ],
        'customers' => [
            'title' => 'Clientes',
            'list' => 'Lista',
        ],
        'vendors' => [
            'title' => 'Vendedores',
            'add_new' => 'Agregar nuevo',
            'list' => 'Lista',
        ],
        'product_reviews' => [
            'title' => 'Reseñas de productos',
            'list' => 'Lista',
        ],
        'banners' => [
            'title' => 'Banners',
            'add_new' => 'Agregar nuevo',
            'list' => 'Lista',
        ],
        'menu' => [
            'title' => 'Menú',
            'add_new' => 'Agregar nuevo',
            'list' => 'Lista',
        ],
        'menu_items' => [
            'title' => 'Elementos del menú',
            'add_new' => 'Agregar nuevo',
            'list' => 'Lista',
        ],
        'social_media_links' => [
            'title' => 'Enlaces de redes sociales',
            'add_new' => 'Agregar nuevo',
            'list' => 'Lista',
        ],
        'site_settings' => [
            'title' => 'Configuración del sitio',
            'manage' => 'Administrar configuración',
        ],
        'orders' => [
            'title' => 'Pedidos',
            'all_orders' => 'Todos los pedidos',
            'pending_orders' => 'Pedidos pendientes',
            'completed_orders' => 'Pedidos completados',
            'list' => 'Lista',
        ],
        'pages' => [
            'title' => 'Páginas',
            'add_new' => 'Agregar nuevo',
            'list' => 'Lista',
        ],
        'payments' => [
            'title' => 'Pagos',
            'list' => 'Lista',
        ],

        'refunds' => [
            'title' => 'Reembolsos',
            'list' => 'Lista',
        ],

        'payment_gateways' => [
            'title' => 'Pasarelas de Pago',
            'list' => 'Lista',
        ],
    ],

    'profile' => [
        'title' => 'Editar perfil',
        'choose_file' => 'Elegir archivo',
        'name' => 'Nombre',
        'email' => 'Correo electrónico',
        'phone' => 'Teléfono',
        'current_password' => 'Contraseña actual',
        'new_password' => 'Nueva contraseña',
        'confirm_new_password' => 'Confirmar nueva contraseña',
        'save' => 'Guardar',
        'profile_updated' => '¡Perfil actualizado con éxito!',
        'success' => 'Éxito',
    ],

    'payment_gateways' => [

        // Page Titles
        'title' => 'Pasarelas de Pago',
        'edit_title' => 'Editar Pasarela de Pago',

        // Table Headings
        'id' => 'ID',
        'name' => 'Nombre',
        'code' => 'Código',
        'status' => 'Estado',
        'action' => 'Acción',

        // Status Labels
        'active' => 'Activo',
        'inactive' => 'Inactivo',

        // Delete Modal
        'delete_confirm' => 'Confirmar Eliminación',
        'delete_message' => '¿Está seguro de que desea eliminar esta pasarela de pago?',
        'cancel' => 'Cancelar',
        'delete' => 'Eliminar',

        // Alerts / Notifications
        'success' => 'Éxito',
        'deleted' => 'Eliminado',
        'delete_error' => 'Error al eliminar la pasarela de pago!',

        // Form Labels
        'gateway_name' => 'Nombre de la Pasarela',
        'description' => 'Descripción',
        'active_label' => 'Activo',
        'configurations' => 'Configuraciones de la Pasarela',
        'key_name' => 'Nombre de Clave',
        'key_value' => 'Valor de Clave',
        'environment' => 'Entorno',
        'sandbox' => 'Sandbox',
        'production' => 'Producción',
        'encrypted' => 'Encriptado',
        'unique' => 'Único',
        'update_button' => 'Actualizar',

        // Fallback
        'not_available' => 'N/A',
    ],

    'refunds' => [

        // Page Titles
        'title' => 'Reembolsos',
        'details_title' => 'Detalles del Reembolso',

        // Table Headings
        'id' => 'ID',
        'payment' => 'Pago',
        'amount' => 'Monto',
        'status' => 'Estado',
        'reason' => 'Motivo',
        'action' => 'Acción',

        // Status Labels
        'completed' => 'Completado',
        'pending' => 'Pendiente',
        'failed' => 'Fallido',

        // Delete Modal
        'delete_confirm' => 'Confirmar Eliminación',
        'delete_message' => '¿Está seguro de que desea eliminar este reembolso?',
        'cancel' => 'Cancelar',
        'delete' => 'Eliminar',

        // Alerts / Notifications
        'success' => 'Éxito',
        'deleted' => 'Eliminado',
        'delete_error' => '¡Error al eliminar el reembolso!',

        // Refund Details Page
        'created_at' => 'Creado en',
        'updated_at' => 'Actualizado en',
        'back' => 'Volver a Reembolsos',

        // Fallback
        'not_available' => 'No disponible',
    ],

    'payments' => [

        // Page Titles
        'title' => 'Pagos',
        'details_title' => 'Detalles del pago',

        // Table Headings
        'id' => 'ID',
        'order' => 'Pedido',
        'user' => 'Usuario',
        'gateway' => 'Pasarela de pago',
        'amount' => 'Monto',
        'status' => 'Estado',
        'transaction' => 'Transacción',
        'action' => 'Acción',

        // Status Labels
        'completed' => 'Completado',
        'pending' => 'Pendiente',
        'failed' => 'Fallido',

        // Delete Modal
        'delete_confirm' => 'Confirmar eliminación',
        'delete_message' => '¿Está seguro de que desea eliminar este pago?',
        'cancel' => 'Cancelar',
        'delete' => 'Eliminar',

        // Alerts / Notifications
        'success' => 'Éxito',
        'deleted' => 'Eliminado',
        'delete_error' => '¡Error al eliminar el pago!',

        // Payment Details Page
        'transaction_id' => 'ID de transacción',
        'created_at' => 'Fecha de creación',
        'back' => 'Volver a Pagos',

        // Fallback
        'not_available' => 'No disponible',
    ],

    'pages' => [
        // General
        'title' => 'Páginas',
        'choose_file' => 'Elegir archivo',

        // Create Page
        'create' => 'Crear página',
        'form_title' => 'Título (:code)',
        'form_content' => 'Contenido (:code)',
        'form_image' => 'Imagen (:code)',
        'form_save' => 'Guardar',

        // Edit Page
        'edit' => 'Editar página',
        'form_update' => 'Actualizar',

        // Pages Table
        'table_title' => 'Título',
        'table_slug' => 'Slug',
        'table_status' => 'Estado',
        'table_actions' => 'Acciones',

        // Delete Modal
        'delete_modal_title' => 'Confirmar eliminación',
        'delete_modal_text' => '¿Está seguro de que desea eliminar esta página?',
        'delete_modal_cancel' => 'Cancelar',
        'delete_modal_delete' => 'Eliminar',

        // Toastr messages
        'toastr_success' => 'Éxito',
        'toastr_error' => 'Error al eliminar la página',
    ],

    'customers' => [
        'customer_list' => 'Lista de clientes',

        // Table columns
        'id' => 'ID',
        'name' => 'Nombre',
        'email' => 'Correo electrónico',
        'phone' => 'Teléfono',
        'address' => 'Dirección',
        'status' => 'Estado',
        'actions' => 'Acciones',

        // Status labels
        'active' => 'Activo',
        'inactive' => 'Inactivo',

        // Modal
        'confirm_delete_title' => 'Confirmar eliminación',
        'confirm_delete_message' => '¿Está seguro de que desea eliminar a este cliente?',
        'cancel_button' => 'Cancelar',
        'delete_button' => 'Eliminar',

        // Toastr messages
        'success_title' => 'Éxito',
        'deleted_title' => 'Eliminado',
        'delete_success_message' => '¡Cliente eliminado con éxito!',
        'delete_error_message' => '¡Error al eliminar al cliente!',
    ],

    'vendors' => [
        'title_list' => 'Lista de Vendedores',
        'id' => 'ID',
        'name' => 'Nombre',
        'email' => 'Correo Electrónico',
        'phone' => 'Teléfono',
        'status' => 'Estado',
        'actions' => 'Acciones',
        'register_new_vendor' => 'Registrar nuevo vendedor',
        'vendor_name' => 'Nombre del vendedor',
        'vendor_email' => 'Correo electrónico del vendedor',
        'phone_optional' => 'Teléfono (opcional)',
        'password' => 'Contraseña',
        'confirm_password' => 'Confirmar contraseña',
        'status' => 'Estado',
        'active' => 'Activo',
        'inactive' => 'Inactivo',
        'banned' => 'Bloqueado',
        'register_button' => 'Registrar vendedor',
        'cancel_button' => 'Cancelar',

        'active' => 'Activo',
        'inactive' => 'Inactivo',

        'modal_confirm_delete_title' => 'Confirmar Eliminación',
        'modal_confirm_delete_body' => '¿Está seguro de que desea eliminar este vendedor?',
        'delete' => 'Eliminar',
        'cancel' => 'Cancelar',

        'success' => 'Éxito',
        'success_delete' => '¡Vendedor eliminado con éxito!',
        'error_delete' => '¡Error al eliminar el vendedor! Por favor, inténtelo de nuevo.',
    ],

    'languages' => [
        'english' => 'Inglés',
        'spanish' => 'Español',
        'french' => 'Francés',
        'arabic' => 'Árabe',
        'german' => 'Alemán',
        'persian' => 'Persa (Farsi)',
        'hindi' => 'Hindi',
        'indonesian' => 'Indonesio',
        'italian' => 'Italiano',
        'japanese' => 'Japonés',
        'korean' => 'Coreano',
        'dutch' => 'Holandés',
        'polish' => 'Polaco',
        'portuguese' => 'Portugués',
        'russian' => 'Ruso',
        'thai' => 'Tailandés',
        'turkish' => 'Turco',
        'vietnamese' => 'Vietnamita',
        'chinese' => 'Chino',

        'language_change' => 'Cambio de idioma',
        'change_language' => 'Cambiar idioma',
        'confirm_language_change' => '¿Está seguro de que desea cambiar el idioma?',
        'cancel' => 'Cancelar',
        'yes_change' => 'Sí, cambiar',
    ],

    'categories' => [
        'heading' => 'Categorías',
        'image' => 'Imagen',
        'choose_file' => 'Elegir archivo',
        'id' => 'ID',
        'name' => 'Nombre de la categoría',
        'description' => 'Descripción',
        'action' => 'Acción',
        'edit' => 'Editar',
        'delete' => 'Eliminar',
        'button' => 'Guardar',
        'add_new' => 'Agregar Nuevo',
        'status' => 'Estado',
        'created' => '¡Categoría creada con éxito!',
        'updated' => '¡Categoría actualizada con éxito!',
        'deleted' => '¡Categoría eliminada con éxito!',
        'status_updated' => '¡Estado de la categoría actualizado con éxito!',
        'massage_confirm' => 'Confirmar eliminación',
        'confirm_delete' => '¿Estás seguro de que deseas eliminar esta categoría?',
        'massage_cancel' => 'Cancelar',
        'massage_delete' => 'Eliminar',
        'success' => 'Éxito',
    ],

    'datatables' => [
        'sEmptyTable' => 'No hay datos disponibles en la tabla',
        'sInfo' => 'Mostrando de _START_ a _END_ de un total de _TOTAL_ entradas',
        'sInfoEmpty' => 'Mostrando de 0 a 0 de un total de 0 entradas',
        'sInfoFiltered' => '(filtrado de _MAX_ entradas totales)',
        'sLengthMenu' => 'Mostrar _MENU_ entradas',
        'sLoadingRecords' => 'Cargando...',
        'sProcessing' => 'Procesando...',
        'sSearch' => 'Buscar:',
        'sZeroRecords' => 'No se encontraron registros coincidentes',
        'oPaginate' => [
            'sFirst' => 'Primero',
            'sLast' => 'Último',
            'sNext' => 'Siguiente',
            'sPrevious' => 'Anterior',
        ],
    ],

    'products' => [

        // Titles
        'title_create' => 'Crear Producto',
        'title_edit' => 'Editar Producto',
        'title_manage' => 'Gestionar Productos',

        // Form Fields
        'vendor' => 'Vendedor',
        'select_vendor' => 'Seleccionar Vendedor',
        'product_name' => 'Nombre del Producto',
        'product_type' => 'Tipo de Producto',
        'description' => 'Descripción',
        'translations' => 'Traducciones',
        'translated_value' => 'Valor Traducido',
        'category' => 'Categoría',
        'brand' => 'Marca',
        'no_brand' => 'Sin Marca',
        'status' => 'Estado',
        'price' => 'Precio',
        'discount_price' => 'Precio con Descuento',
        'sku' => 'SKU',
        'barcode' => 'Código de Barras',
        'stock' => 'Inventario',
        'weight' => 'Peso',
        'dimension' => 'Dimensiones',
        'size' => 'Tamaño',
        'color' => 'Color',
        'images' => 'Imágenes del Producto',
        'is_primary' => 'Variante Principal',
        'variant_name_en' => 'Nombre de Variante',
        'attributes' => 'Atributos',
        'attribute_values' => 'Valores de Atributo',
        'variants' => 'Variantes',

        // Buttons
        'add_variant' => 'Agregar Variante',
        'remove_variant' => 'Eliminar Variante',
        'save_product' => 'Guardar Producto',
        'update_product' => 'Actualizar Producto',
        'choose_images' => 'Elegir Imágenes',
        'choose_file' => 'Elegir Archivo',
        'remove' => 'Eliminar',

        // Messages
        'status_updated' => '¡El estado del producto se actualizó correctamente!',
        'success_create' => '¡Producto creado con éxito!',
        'success_update' => '¡Producto actualizado con éxito!',
        'success_delete' => '¡Producto eliminado con éxito!',
        'delete_confirmation' => '¿Estás seguro de que deseas eliminar este producto?',
        'success' => 'Éxito',

        // Table Columns
        'id' => 'ID',
        'name' => 'Nombre',
        'type' => 'Tipo',
        'price_column' => 'Precio',
        'status_column' => 'Estado',
        'action' => 'Acción',

        // Confirmation Dialog
        'confirm_delete' => 'Confirmar Eliminación',
        'delete' => 'Eliminar',
        'cancel' => 'Cancelar',
    ],

    'banners' => [
        'button_back' => 'Volver',
        'description' => 'Descripción',
        'choose_file' => 'Elegir archivo',
        'all_banners' => 'Todos los banners',
        'id' => 'ID',
        'add_new' => 'Añadir nuevo',
        'banner_type' => 'Tipo de banner',
        'promotion' => 'Promoción',
        'sale' => 'Venta',
        'seasonal' => 'Estacional',
        'featured' => 'Destacado',
        'announcement' => 'Anuncio',
        'actions' => 'Acciones',
        'edit' => 'Editar',
        'delete' => 'Eliminar',
        'no_image' => 'No hay imagen disponible',
        'delete_confirmation' => '¿Estás seguro de que deseas eliminar este banner?',
        'banner_deleted' => '¡Banner eliminado con éxito!',
        'error_delete' => '¡Error al eliminar el banner!',
        'image_preview' => 'Vista previa de la imagen',
        'create_banner' => 'Crear banner',
        'edit_banner' => 'Editar traducciones del banner',
        'save' => 'Guardar',
        'languages' => 'Idiomas',
        'status' => 'Estado',
        'image' => 'Imagen',
        'image_title' => 'Título de la imagen',
        'title' => 'Título',
        'select_language' => 'Seleccionar idioma',
        'file_upload' => 'Subir imagen',
        'choose_file' => 'Elegir archivo',
        'existing_image' => 'Imagen existente',
        'banner_saved' => '¡Banner guardado con éxito!',
        'banner_updated' => '¡Banner actualizado con éxito!',
        'form_title' => 'Crear o editar banner',
        'form_description' => 'Por favor, proporcione toda la información necesaria para el banner.',
        'back_to_list' => 'Volver a la lista de banners',
        'created' => '¡Banner creado con éxito!',
        'updated' => '¡Banner actualizado con éxito!',
        'deleted' => '¡Banner eliminado con éxito!',
        'status_updated' => '¡Estado del banner actualizado con éxito!',
        'massage_confirm' => 'Confirmar eliminación',
        'confirm_delete' => '¿Está seguro de que desea eliminar este banner?',
        'massage_cancel' => 'Cancelar',
        'massage_delete' => 'Eliminar',
        'success' => 'Éxito',
    ],

    'menus' => [
        'all_menus' => 'Todos los Menús',
        'id' => 'ID',
        'add_new' => 'Agregar Nuevo',
        'button_create' => 'Crear',
        'button_update' => 'Actualizar',
        'title' => 'Título',
        'edit' => 'Editar',
        'action' => 'Acción',
        'delete' => 'Eliminar',
        'created_at' => 'Creado en',
        'no_menus' => 'No hay menús disponibles',
        'delete_confirmation' => '¿Está seguro de que desea eliminar este menú?',
        'menu_deleted' => '¡Menú eliminado con éxito!',
        'error_delete' => '¡Error al eliminar el menú!',
        'create_menu' => 'Crear Menú',
        'edit_menu' => 'Editar Menú',
        'save' => 'Guardar',
        'menu_title' => 'Título del Menú',
        'form_title' => 'Crear o Editar Menú',
        'form_description' => 'Por favor, proporcione toda la información necesaria para el menú.',
        'back_to_list' => 'Volver a la lista de menús',
        'created' => '¡Menú creado con éxito!',
        'updated' => '¡Menú actualizado con éxito!',
        'deleted' => '¡Menú eliminado con éxito!',
        'status_updated' => '¡Estado del menú actualizado con éxito!',
        'massage_confirm' => 'Confirmar eliminación',
        'confirm_delete' => '¿Está seguro de que desea eliminar este menú?',
        'massage_cancel' => 'Cancelar',
        'massage_delete' => 'Eliminar',
        'success' => 'Éxito',

    ],

    'menu_items' => [
        'heading' => 'Todos los Elementos del Menú',
        'id' => 'ID',
        'create' => 'Crear Elemento del Menú',
        'choose_an_option' => 'Elija una opción',
        'select_an_option' => 'Seleccione una opción',
        'option1' => 'Opción 1',
        'option2' => 'Opción 2',
        'option3' => 'Opción 3',
        'option4' => 'Opción 4',
        'order_number' => 'Número de Orden',
        'parent_item' => 'Elemento Padre',
        'parent_none' => 'Ninguno',
        'edit' => 'Editar Elemento del Menú',
        'update' => 'Actualizar Elemento del Menú',
        'delete' => 'Eliminar Elemento del Menú',
        'title' => 'Título',
        'button' => 'Guardar',
        'update_button' => 'Actualizar',
        'slug' => 'Slug',
        'order' => 'Orden',
        'actions' => 'Acciones',
        'add_new' => 'Agregar Nuevo',
        'submit' => 'Enviar',
        'cancel' => 'Cancelar',
        'no_title' => 'Sin Título',
        'select_menu' => 'Seleccionar un Menú',
        'select_parent_item' => 'Seleccionar Elemento Padre',
        'language' => 'Idioma',
        'select_language' => 'Seleccionar Idioma',
        'select_order' => 'Seleccionar Orden',
        'success_message' => '¡Elemento del menú creado con éxito!',
        'error_message' => 'Hubo un error al crear el elemento del menú.',
        'confirm_delete' => '¿Está seguro de que desea eliminar este elemento del menú?',
        'update_success_message' => '¡Elemento del menú actualizado con éxito!',
        'update_error_message' => 'Hubo un error al actualizar el elemento del menú.',
        'created' => '¡Elemento de menú creado con éxito!',
        'updated' => '¡Elemento de menú actualizado con éxito!',
        'deleted' => '¡Elemento de menú eliminado con éxito!',
        'status_updated' => '¡Estado del elemento de menú actualizado con éxito!',
        'massage_confirm' => 'Confirmar eliminación',
        'confirm_delete' => '¿Estás seguro de que deseas eliminar este elemento de menú?',
        'massage_cancel' => 'Cancelar',
        'massage_delete' => 'Eliminar',
        'success' => 'Éxito',

    ],
    'errors' => [
        'validation_failed' => '¡La validación falló! Por favor, corrige los errores e intenta de nuevo.',
        'csrf_token_invalid' => 'Token CSRF inválido. Por favor, actualiza la página e intenta de nuevo.',
        'not_found' => 'El elemento solicitado no se pudo encontrar.',
        'unauthorized' => 'No estás autorizado para realizar esta acción.',
    ],
    'messages' => [
        'welcome' => '¡Bienvenido al Panel de Administración!',
        'dashboard' => 'Panel de control',
        'settings' => 'Configuraciones',
        'log_out' => 'Cerrar sesión',
        'profile' => 'Perfil',
        'menu' => 'Menú',
        'home' => 'Inicio',
        'view_details' => 'Ver detalles',
    ],

    'social_media_links' => [
        'type' => 'Tipo de red social',
        'select_type' => 'Seleccione el tipo de red social',
        'types' => [
            'facebook' => 'Facebook',
            'instagram' => 'Instagram',
            'tiktok' => 'TikTok',
            'youtube' => 'YouTube',
            'x' => 'X',
        ],

        'id' => 'ID',
        'create' => 'Crear enlace de redes sociales',
        'edit' => 'Editar enlace de redes sociales',
        'platform' => 'Nombre de la plataforma',
        'link' => 'Enlace de redes sociales',
        'created' => '¡Enlace de redes sociales creado con éxito!',
        'updated' => '¡Enlace de redes sociales actualizado con éxito!',
        'deleted' => '¡Enlace de redes sociales eliminado con éxito!',
        'status_updated' => '¡Estado del enlace de redes sociales actualizado con éxito!',
        'massage_confirm' => 'Confirmar eliminación',
        'confirm_delete' => '¿Está seguro de que desea eliminar este enlace de redes sociales?',
        'massage_cancel' => 'Cancelar',
        'massage_delete' => 'Eliminar',
        'success' => 'Éxito',

        'translations' => [
            'platform_name' => 'Nombre de la plataforma (traducido)',
        ],
        'save' => 'Guardar',
        'update' => 'Actualizar',
        'delete' => 'Eliminar',
        'no_links' => 'No hay enlaces de redes sociales disponibles',
        'delete_confirmation' => '¿Está seguro de que desea eliminar este enlace?',
        'link_deleted' => 'Enlace de redes sociales eliminado exitosamente!',
        'error_delete' => '¡Error al eliminar el enlace!',
        'create_link' => 'Crear enlace de redes sociales',
        'edit_link' => 'Editar enlace de redes sociales',
        'form_title' => 'Crear o editar enlace de redes sociales',
        'form_description' => 'Por favor, proporcione toda la información necesaria para el enlace de redes sociales.',
        'back_to_list' => 'Volver a la lista de enlaces de redes sociales',
        'add_new' => 'Agregar nuevo',
        'trans_name' => 'Nombre traducido',
        'delete' => 'Eliminar',
        'action' => 'Acción',
    ],

    'orders' => [

        // Page Title
        'title' => 'Lista de Pedidos',

        // Table Headings
        'id' => 'ID de Pedido',
        'order_date' => 'Fecha del Pedido',
        'status' => 'Estado',
        'total_price' => 'Precio Total',
        'action' => 'Acciones',
        'customer' => 'Cliente',

        // Delete Modal
        'delete_confirm_title' => 'Confirmar Eliminación',
        'delete_confirm_message' => '¿Estás seguro de que deseas eliminar este pedido?',
        'delete_cancel' => 'Cancelar',
        'delete_button' => 'Eliminar',

        // Toastr / Flash Messages
        'deleted_success' => 'Pedido eliminado con éxito.',
        'deleted_error' => 'No se pudo eliminar el pedido.',
        'deleted' => 'Eliminado',
        'success' => 'Éxito',
    ],

    'attributes' => [
        'title_create' => 'Crear Atributo',
        'title_edit' => 'Editar Atributo',
        'title_manage' => 'Gestionar Atributos',

        'attribute_name' => 'Nombre del Atributo',
        'attribute_values' => 'Valores del Atributo',
        'translations' => 'Traducciones',
        'translated_value' => 'Valor Traducido',

        'add_value' => 'Agregar Valor',
        'remove_value' => 'Eliminar',
        'save_attribute' => 'Guardar Atributo',
        'update_attribute' => 'Actualizar Atributo',
        'add_value_translation' => 'Agregar traducción de valor',

        'success_create' => '¡Atributo creado con éxito!',
        'success_update' => '¡Atributo actualizado con éxito!',
        'success_delete' => '¡Atributo eliminado con éxito!',
        'delete_confirmation' => '¿Estás seguro de que quieres eliminar este atributo?',
        'success' => 'Éxito',

        'id' => 'ID',
        'name' => 'Nombre',
        'values' => 'Valores',
        'action' => 'Acción',

        'confirm_delete' => 'Confirmar Eliminación',
        'delete' => 'Eliminar',
        'cancel' => 'Cancelar',
    ],

    'product_reviews' => [
        'title_manage' => 'Reseñas de productos',

        'review_id' => 'ID de reseña',
        'customer_name' => 'Nombre del cliente',
        'product_name' => 'Nombre del producto',
        'rating' => 'Calificación',
        'status' => 'Estado',
        'actions' => 'Acciones',
        'review_details' => 'Detalles de la reseña',
        'review' => 'Reseña',
        'back_button' => 'Volver a la lista',

        'confirm_delete' => 'Confirmar eliminación',
        'delete_message' => '¿Está seguro de que desea eliminar esta reseña de producto?',
        'delete' => 'Eliminar',
        'cancel' => 'Cancelar',

        'success_create' => '¡Reseña de producto creada con éxito!',
        'success_update' => '¡Reseña de producto actualizada con éxito!',
        'success_delete' => '¡Reseña de producto eliminada con éxito!',
        'error_delete' => '¡Error al eliminar la reseña de producto! Por favor, inténtelo de nuevo.',

        'success' => 'Éxito',
        'error' => 'Error',
    ],

];
