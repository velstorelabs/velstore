<?php

return [
    'auth' => [
        'velstore' => '벨스토어',
        'login' => '로그인',
        'email' => '이메일 주소',
        'password' => '비밀번호',
        'remember_me' => '로그인 상태 유지',
        'forgot_password' => '비밀번호를 잊으셨나요?',
    ],

    'profile' => [
        'profile' => '프로필',
        'setting' => '설정',
        'logout' => '로그아웃',
    ],

    'dashboard' => [
        'total_sales' => '총 판매',
        'today' => '오늘',
        'total' => '합계',

        'total_orders' => '총 주문',
        'completed' => '완료',
        'all_orders' => '모든 주문',

        'total_vendors' => '총 판매자',
        'active' => '활성',

        'total_customers' => '총 고객',
    ],

    'sidebar' => [
        'search_placeholder' => '검색...',
        'dashboard' => '대시보드',
        'logo' => '로고',

        'categories' => [
            'title' => '카테고리',
            'add_new' => '새로 추가',
            'list' => '목록',
        ],
        'brands' => [
            'title' => '브랜드',
            'add_new' => '새로 추가',
            'list' => '목록',
        ],
        'products' => [
            'title' => '제품',
            'add_new' => '새로 추가',
            'list' => '목록',
        ],
        'attributes' => [
            'title' => '속성',
            'add_new' => '새로 추가',
            'list' => '목록',
        ],
        'customers' => [
            'title' => '고객',
            'list' => '목록',
        ],
        'vendors' => [
            'title' => '판매자',
            'add_new' => '새로 추가',
            'list' => '목록',
        ],
        'product_reviews' => [
            'title' => '제품 리뷰',
            'list' => '목록',
        ],
        'banners' => [
            'title' => '배너',
            'add_new' => '새로 추가',
            'list' => '목록',
        ],
        'menu' => [
            'title' => '메뉴',
            'add_new' => '새로 추가',
            'list' => '목록',
        ],
        'menu_items' => [
            'title' => '메뉴 항목',
            'add_new' => '새로 추가',
            'list' => '목록',
        ],
        'social_media_links' => [
            'title' => '소셜 미디어 링크',
            'add_new' => '새로 추가',
            'list' => '목록',
        ],
        'site_settings' => [
            'title' => '사이트 설정',
            'manage' => '설정 관리',
        ],
        'orders' => [
            'title' => '주문',
            'all_orders' => '전체 주문',
            'pending_orders' => '보류 중인 주문',
            'completed_orders' => '완료된 주문',
            'list' => '목록',
        ],
        'pages' => [
            'title' => '페이지',
            'add_new' => '새로 추가',
            'list' => '목록',
        ],
        'payments' => [
            'title' => '결제',
            'list' => '목록',
        ],

        'refunds' => [
            'title' => '환불',
            'list' => '목록',
        ],

        'payment_gateways' => [
            'title' => '결제 게이트웨이',
            'list' => '목록',
        ],
    ],

    'profile' => [
        'title' => '프로필 수정',
        'choose_file' => '파일 선택',
        'name' => '이름',
        'email' => '이메일',
        'phone' => '전화번호',
        'current_password' => '현재 비밀번호',
        'new_password' => '새 비밀번호',
        'confirm_new_password' => '새 비밀번호 확인',
        'save' => '저장',
        'profile_updated' => '프로필이 성공적으로 업데이트되었습니다!',
        'success' => '성공',
    ],

    'payment_gateways' => [

        // Page Titles
        'title' => '결제 게이트웨이',
        'edit_title' => '결제 게이트웨이 편집',

        // Table Headings
        'id' => 'ID',
        'name' => '이름',
        'code' => '코드',
        'status' => '상태',
        'action' => '작업',

        // Status Labels
        'active' => '활성',
        'inactive' => '비활성',

        // Delete Modal
        'delete_confirm' => '삭제 확인',
        'delete_message' => '이 결제 게이트웨이를 삭제하시겠습니까?',
        'cancel' => '취소',
        'delete' => '삭제',

        // Alerts / Notifications
        'success' => '성공',
        'deleted' => '삭제됨',
        'delete_error' => '결제 게이트웨이 삭제 중 오류 발생!',

        // Form Labels
        'gateway_name' => '게이트웨이 이름',
        'description' => '설명',
        'active_label' => '활성',
        'configurations' => '게이트웨이 구성',
        'key_name' => '키 이름',
        'key_value' => '키 값',
        'environment' => '환경',
        'sandbox' => '샌드박스',
        'production' => '운영',
        'encrypted' => '암호화됨',
        'unique' => '고유',
        'update_button' => '업데이트',

        // Fallback
        'not_available' => '사용 불가',
    ],

    'refunds' => [

        // Page Titles
        'title' => '환불',
        'details_title' => '환불 상세 정보',

        // Table Headings
        'id' => 'ID',
        'payment' => '결제',
        'amount' => '금액',
        'status' => '상태',
        'reason' => '사유',
        'action' => '작업',

        // Status Labels
        'completed' => '완료',
        'pending' => '대기 중',
        'failed' => '실패',

        // Delete Modal
        'delete_confirm' => '삭제 확인',
        'delete_message' => '이 환불을 삭제하시겠습니까?',
        'cancel' => '취소',
        'delete' => '삭제',

        // Alerts / Notifications
        'success' => '성공',
        'deleted' => '삭제됨',
        'delete_error' => '환불 삭제 중 오류 발생!',

        // Refund Details Page
        'created_at' => '생성일',
        'updated_at' => '업데이트일',
        'back' => '환불 목록으로 돌아가기',

        // Fallback
        'not_available' => '사용 불가',
    ],

    'payments' => [

        // Page Titles
        'title' => '결제',
        'details_title' => '결제 상세',

        // Table Headings
        'id' => 'ID',
        'order' => '주문',
        'user' => '사용자',
        'gateway' => '결제 게이트웨이',
        'amount' => '금액',
        'status' => '상태',
        'transaction' => '거래',
        'action' => '작업',

        // Status Labels
        'completed' => '완료',
        'pending' => '대기 중',
        'failed' => '실패',

        // Delete Modal
        'delete_confirm' => '삭제 확인',
        'delete_message' => '이 결제를 삭제하시겠습니까?',
        'cancel' => '취소',
        'delete' => '삭제',

        // Alerts / Notifications
        'success' => '성공',
        'deleted' => '삭제됨',
        'delete_error' => '결제 삭제 중 오류 발생!',

        // Payment Details Page
        'transaction_id' => '거래 ID',
        'created_at' => '생성일',
        'back' => '결제 목록으로 돌아가기',

        // Fallback
        'not_available' => '사용 불가',
    ],

    'pages' => [
        // General
        'title' => '페이지',
        'choose_file' => '파일 선택',

        // Create Page
        'create' => '페이지 생성',
        'form_title' => '제목 (:code)',
        'form_content' => '내용 (:code)',
        'form_image' => '이미지 (:code)',
        'form_save' => '저장',

        // Edit Page
        'edit' => '페이지 편집',
        'form_update' => '업데이트',

        // Pages Table
        'table_title' => '제목',
        'table_slug' => '슬러그',
        'table_status' => '상태',
        'table_actions' => '작업',

        // Delete Modal
        'delete_modal_title' => '삭제 확인',
        'delete_modal_text' => '이 페이지를 삭제하시겠습니까?',
        'delete_modal_cancel' => '취소',
        'delete_modal_delete' => '삭제',

        // Toastr messages
        'toastr_success' => '성공',
        'toastr_error' => '페이지 삭제 중 오류 발생',
    ],

    'customers' => [
        'customer_list' => '고객 목록',

        // Table columns
        'id' => '아이디',
        'name' => '이름',
        'email' => '이메일',
        'phone' => '전화번호',
        'address' => '주소',
        'status' => '상태',
        'actions' => '작업',

        // Status labels
        'active' => '활성',
        'inactive' => '비활성',

        // Modal
        'confirm_delete_title' => '삭제 확인',
        'confirm_delete_message' => '이 고객을 삭제하시겠습니까?',
        'cancel_button' => '취소',
        'delete_button' => '삭제',

        // Toastr messages
        'success_title' => '성공',
        'deleted_title' => '삭제됨',
        'delete_success_message' => '고객이 성공적으로 삭제되었습니다!',
        'delete_error_message' => '고객 삭제 중 오류가 발생했습니다!',
    ],

    'vendors' => [
        'title_list' => '판매자 목록',
        'id' => 'ID',
        'name' => '이름',
        'email' => '이메일',
        'phone' => '전화번호',
        'status' => '상태',
        'actions' => '작업',
        'register_new_vendor' => '새 판매자 등록',
        'vendor_name' => '판매자 이름',
        'vendor_email' => '판매자 이메일',
        'phone_optional' => '전화번호 (선택 사항)',
        'password' => '비밀번호',
        'confirm_password' => '비밀번호 확인',
        'status' => '상태',
        'active' => '활성',
        'inactive' => '비활성',
        'banned' => '차단됨',
        'register_button' => '판매자 등록',
        'cancel_button' => '취소',

        'active' => '활성',
        'inactive' => '비활성',

        'modal_confirm_delete_title' => '삭제 확인',
        'modal_confirm_delete_body' => '이 판매자를 삭제하시겠습니까?',
        'delete' => '삭제',
        'cancel' => '취소',

        'success' => '성공',
        'success_delete' => '판매자가 성공적으로 삭제되었습니다!',
        'error_delete' => '판매자 삭제 중 오류가 발생했습니다. 다시 시도해 주세요.',
    ],

    'languages' => [
        'english' => '영어',
        'spanish' => '스페인어',
        'french' => '프랑스어',
        'arabic' => '아랍어',
        'german' => '독일어',
        'persian' => '페르시아어 (파르시)',
        'hindi' => '힌디어',
        'indonesian' => '인도네시아어',
        'italian' => '이탈리아어',
        'japanese' => '일본어',
        'korean' => '한국어',
        'dutch' => '네덜란드어',
        'polish' => '폴란드어',
        'portuguese' => '포르투갈어',
        'russian' => '러시아어',
        'thai' => '태국어',
        'turkish' => '터키어',
        'vietnamese' => '베트남어',
        'chinese' => '중국어',

        'language_change' => '언어 변경',
        'change_language' => '언어 변경하기',
        'confirm_language_change' => '정말 언어를 변경하시겠습니까?',
        'cancel' => '취소',
        'yes_change' => '예, 변경하기',
    ],

    'categories' => [
        'heading' => '카테고리',
        'image' => '이미지',
        'choose_file' => '파일 선택',
        'id' => '아이디',
        'name' => '카테고리 이름',
        'description' => '설명',
        'action' => '동작',
        'edit' => '편집',
        'delete' => '삭제',
        'button' => '저장',
        'add_new' => '새로 추가',
        'status' => '상태',
        'created' => '카테고리가 성공적으로 생성되었습니다!',
        'updated' => '카테고리가 성공적으로 업데이트되었습니다!',
        'deleted' => '카테고리가 성공적으로 삭제되었습니다!',
        'status_updated' => '카테고리 상태가 성공적으로 업데이트되었습니다!',
        'massage_confirm' => '삭제 확인',
        'confirm_delete' => '정말 이 카테고리를 삭제하시겠습니까?',
        'massage_cancel' => '취소',
        'massage_delete' => '삭제',
        'success' => '성공',
    ],

    'datatables' => [
        'sEmptyTable' => '테이블에 데이터가 없습니다',
        'sInfo' => '_START_ 부터 _END_ 까지 _TOTAL_ 항목을 표시합니다',
        'sInfoEmpty' => '0 부터 0 까지 0 항목을 표시합니다',
        'sInfoFiltered' => '(총 _MAX_ 항목에서 필터링됨)',
        'sLengthMenu' => '_MENU_ 항목을 표시',
        'sLoadingRecords' => '로드 중...',
        'sProcessing' => '처리 중...',
        'sSearch' => '검색:',
        'sZeroRecords' => '일치하는 기록이 없습니다',
        'oPaginate' => [
            'sFirst' => '처음',
            'sLast' => '마지막',
            'sNext' => '다음',
            'sPrevious' => '이전',
        ],
    ],

    'products' => [

        // 제목
        'title_create' => '상품 생성',
        'title_edit' => '상품 수정',
        'title_manage' => '상품 관리',

        // 폼 필드
        'vendor' => '판매자',
        'select_vendor' => '판매자 선택',
        'product_name' => '상품명',
        'product_type' => '상품 유형',
        'description' => '설명',
        'translations' => '번역',
        'translated_value' => '번역된 값',
        'category' => '카테고리',
        'brand' => '브랜드',
        'no_brand' => '브랜드 없음',
        'status' => '상태',
        'price' => '가격',
        'discount_price' => '할인가',
        'sku' => 'SKU',
        'barcode' => '바코드',
        'stock' => '재고',
        'weight' => '무게',
        'dimension' => '치수',
        'size' => '사이즈',
        'color' => '색상',
        'images' => '상품 이미지',
        'is_primary' => '기본 옵션',
        'variant_name_en' => '옵션명',
        'attributes' => '속성',
        'attribute_values' => '속성 값',
        'variants' => '옵션',

        // 버튼
        'add_variant' => '옵션 추가',
        'remove_variant' => '옵션 삭제',
        'save_product' => '상품 저장',
        'update_product' => '상품 수정',
        'choose_images' => '이미지 선택',
        'choose_file' => '파일 선택',
        'remove' => '제거',

        // 메시지
        'status_updated' => '상품 상태가 성공적으로 업데이트되었습니다!',
        'success_create' => '상품이 성공적으로 생성되었습니다!',
        'success_update' => '상품이 성공적으로 수정되었습니다!',
        'success_delete' => '상품이 성공적으로 삭제되었습니다!',
        'delete_confirmation' => '이 상품을 삭제하시겠습니까?',
        'success' => '성공',

        // 테이블 열
        'id' => 'ID',
        'name' => '이름',
        'type' => '유형',
        'price_column' => '가격',
        'status_column' => '상태',
        'action' => '동작',

        // 확인 다이얼로그
        'confirm_delete' => '삭제 확인',
        'delete' => '삭제',
        'cancel' => '취소',
    ],

    'brands' => [
        'heading' => '브랜드',
        'id' => '아이디',
        'name' => '브랜드 이름',
        'description' => '설명',
        'logo' => '로고',
        'status' => '상태',
        'action' => '작업',
        'edit' => '편집',
        'delete' => '삭제',
        'create' => '생성',
        'update' => '업데이트',
        'add_new' => '새로 추가',
        'button' => '저장',
        'form_title' => '브랜드 생성 또는 편집',
        'file_upload' => '로고 업로드',
        'no_logo' => '로고 없음',
        'choose_file' => '파일 선택',
        'image_preview' => '이미지 미리보기',
        'delete_confirmation' => '이 브랜드를 삭제하시겠습니까?',
        'brand_deleted' => '브랜드가 성공적으로 삭제되었습니다!',
        'error_delete' => '브랜드 삭제 중 오류 발생!',
        'created' => '브랜드가 성공적으로 생성되었습니다!',
        'updated' => '브랜드가 성공적으로 업데이트되었습니다!',
        'deleted' => '브랜드가 성공적으로 삭제되었습니다!',
        'status_updated' => '브랜드 상태가 성공적으로 업데이트되었습니다!',
        'massage_confirm' => '삭제 확인',
        'confirm_delete' => '이 브랜드를 정말 삭제하시겠습니까?',
        'massage_cancel' => '취소',
        'massage_delete' => '삭제',
        'success' => '성공',
    ],

    'banners' => [
        'button_back' => '뒤로',
        'description' => '설명',
        'choose_file' => '파일 선택',
        'all_banners' => '모든 배너',
        'id' => '아이디',
        'add_new' => '새로 추가',
        'banner_type' => '배너 유형',
        'promotion' => '프로모션',
        'sale' => '세일',
        'seasonal' => '시즌 한정',
        'featured' => '추천',
        'announcement' => '공지사항',
        'actions' => '작업',
        'edit' => '편집',
        'delete' => '삭제',
        'no_image' => '이미지가 없습니다',
        'delete_confirmation' => '이 배너를 삭제하시겠습니까?',
        'banner_deleted' => '배너가 성공적으로 삭제되었습니다!',
        'error_delete' => '배너 삭제 중 오류가 발생했습니다!',
        'image_preview' => '이미지 미리보기',
        'create_banner' => '배너 만들기',
        'edit_banner' => '배너 번역 편집',
        'save' => '저장',
        'languages' => '언어',
        'status' => '상태',
        'image' => '이미지',
        'image_title' => '이미지 제목',
        'title' => '제목',
        'select_language' => '언어 선택',
        'file_upload' => '이미지 업로드',
        'choose_file' => '파일 선택',
        'existing_image' => '기존 이미지',
        'banner_saved' => '배너가 성공적으로 저장되었습니다!',
        'banner_updated' => '배너가 성공적으로 업데이트되었습니다!',
        'form_title' => '배너 만들기 또는 편집',
        'form_description' => '배너에 필요한 모든 정보를 제공해 주세요.',
        'back_to_list' => '배너 목록으로 돌아가기',
        'created' => '배너가 성공적으로 생성되었습니다!',
        'updated' => '배너가 성공적으로 업데이트되었습니다!',
        'deleted' => '배너가 성공적으로 삭제되었습니다!',
        'status_updated' => '배너 상태가 성공적으로 업데이트되었습니다!',
        'massage_confirm' => '삭제 확인',
        'confirm_delete' => '이 배너를 정말 삭제하시겠습니까?',
        'massage_cancel' => '취소',
        'massage_delete' => '삭제',
        'success' => '성공',
    ],

    'menus' => [
        'all_menus' => '모든 메뉴',
        'id' => '아이디',
        'add_new' => '새로 추가',
        'button_create' => '생성',
        'button_update' => '업데이트',
        'title' => '제목',
        'edit' => '편집',
        'action' => '작업',
        'delete' => '삭제',
        'created_at' => '생성일',
        'no_menus' => '사용 가능한 메뉴가 없습니다',
        'delete_confirmation' => '이 메뉴를 삭제하시겠습니까?',
        'menu_deleted' => '메뉴가 성공적으로 삭제되었습니다!',
        'error_delete' => '메뉴 삭제 중 오류가 발생했습니다!',
        'create_menu' => '메뉴 생성',
        'edit_menu' => '메뉴 편집',
        'save' => '저장',
        'menu_title' => '메뉴 제목',
        'form_title' => '메뉴 생성 또는 편집',
        'form_description' => '메뉴에 필요한 모든 정보를 제공해 주세요.',
        'back_to_list' => '메뉴 목록으로 돌아가기',
        'created' => '메뉴가 성공적으로 생성되었습니다!',
        'updated' => '메뉴가 성공적으로 업데이트되었습니다!',
        'deleted' => '메뉴가 성공적으로 삭제되었습니다!',
        'status_updated' => '메뉴 상태가 성공적으로 업데이트되었습니다!',
        'massage_confirm' => '삭제 확인',
        'confirm_delete' => '이 메뉴를 정말 삭제하시겠습니까?',
        'massage_cancel' => '취소',
        'massage_delete' => '삭제',
        'success' => '성공',

    ],

    'menu_items' => [
        'heading' => '모든 메뉴 항목',
        'id' => '아이디',
        'create' => '메뉴 항목 생성',
        'choose_an_option' => '옵션 선택',
        'select_an_option' => '옵션을 선택하세요',
        'option1' => '옵션 1',
        'option2' => '옵션 2',
        'option3' => '옵션 3',
        'option4' => '옵션 4',
        'order_number' => '주문 번호',
        'parent_item' => '상위 항목',
        'parent_none' => '없음',
        'edit' => '메뉴 항목 편집',
        'update' => '메뉴 항목 업데이트',
        'delete' => '메뉴 항목 삭제',
        'title' => '제목',
        'button' => '저장',
        'update_button' => '업데이트',
        'slug' => '슬러그',
        'order' => '순서',
        'actions' => '작업',
        'add_new' => '새로 추가',
        'submit' => '제출',
        'cancel' => '취소',
        'no_title' => '제목 없음',
        'select_menu' => '메뉴 선택',
        'select_parent_item' => '상위 항목 선택',
        'language' => '언어',
        'select_language' => '언어 선택',
        'select_order' => '순서 선택',
        'success_message' => '메뉴 항목이 성공적으로 생성되었습니다!',
        'error_message' => '메뉴 항목 생성 중 오류가 발생했습니다.',
        'confirm_delete' => '이 메뉴 항목을 삭제하시겠습니까?',
        'update_success_message' => '메뉴 항목이 성공적으로 업데이트되었습니다!',
        'update_error_message' => '메뉴 항목 업데이트 중 오류가 발생했습니다.',
        'created' => '메뉴 항목이 성공적으로 생성되었습니다!',
        'updated' => '메뉴 항목이 성공적으로 업데이트되었습니다!',
        'deleted' => '메뉴 항목이 성공적으로 삭제되었습니다!',
        'status_updated' => '메뉴 항목의 상태가 성공적으로 업데이트되었습니다!',
        'massage_confirm' => '삭제 확인',
        'confirm_delete' => '이 메뉴 항목을 삭제하시겠습니까?',
        'massage_cancel' => '취소',
        'massage_delete' => '삭제',
        'success' => '성공',

    ],
    'errors' => [
        'validation_failed' => '유효성 검사에 실패했습니다! 오류를 수정하고 다시 시도하십시오.',
        'csrf_token_invalid' => '잘못된 CSRF 토큰입니다. 페이지를 새로 고침하고 다시 시도하십시오.',
        'not_found' => '요청한 항목을 찾을 수 없습니다.',
        'unauthorized' => '이 작업을 수행할 권한이 없습니다.',
    ],
    'messages' => [
        'welcome' => '관리자 패널에 오신 것을 환영합니다!',
        'dashboard' => '대시보드',
        'settings' => '설정',
        'log_out' => '로그아웃',
        'profile' => '프로필',
        'menu' => '메뉴',
        'home' => '홈',
        'view_details' => '세부사항 보기',
    ],

    'social_media_links' => [
        'type' => '소셜 네트워크 유형',
        'select_type' => '소셜 네트워크 유형 선택',
        'types' => [
            'facebook' => '페이스북',
            'instagram' => '인스타그램',
            'tiktok' => '틱톡',
            'youtube' => '유튜브',
            'x' => '엑스',
        ],

        'id' => '아이디',
        'create' => '소셜 미디어 링크 만들기',
        'edit' => '소셜 미디어 링크 수정',
        'platform' => '플랫폼 이름',
        'link' => '소셜 미디어 링크',
        'created' => '소셜 미디어 링크가 성공적으로 생성되었습니다!',
        'updated' => '소셜 미디어 링크가 성공적으로 업데이트되었습니다!',
        'deleted' => '소셜 미디어 링크가 성공적으로 삭제되었습니다!',
        'status_updated' => '소셜 미디어 링크 상태가 성공적으로 업데이트되었습니다!',
        'massage_confirm' => '삭제 확인',
        'confirm_delete' => '이 소셜 미디어 링크를 삭제하시겠습니까?',
        'massage_cancel' => '취소',
        'massage_delete' => '삭제',
        'success' => '성공',

        'translations' => [
            'platform_name' => '플랫폼 이름 (번역됨)',
        ],
        'save' => '저장',
        'update' => '업데이트',
        'delete' => '삭제',
        'no_links' => '사용 가능한 소셜 미디어 링크가 없습니다',
        'delete_confirmation' => '이 링크를 삭제하시겠습니까?',
        'link_deleted' => '소셜 미디어 링크가 성공적으로 삭제되었습니다!',
        'error_delete' => '링크 삭제 중 오류가 발생했습니다!',
        'create_link' => '소셜 미디어 링크 만들기',
        'edit_link' => '소셜 미디어 링크 수정',
        'form_title' => '소셜 미디어 링크 만들기 또는 수정',
        'form_description' => '소셜 미디어 링크에 필요한 모든 정보를 제공해주세요.',
        'back_to_list' => '소셜 미디어 링크 목록으로 돌아가기',
        'add_new' => '새로 추가',
        'trans_name' => '번역된 이름',
        'delete' => '삭제',
        'action' => '작업',
    ],

    'orders' => [

        // Page Title
        'title' => '주문 목록',

        // Table Headings
        'id' => '주문 ID',
        'order_date' => '주문일',
        'status' => '상태',
        'total_price' => '총 금액',
        'action' => '작업',
        'customer' => '고객',

        // Delete Modal
        'delete_confirm_title' => '삭제 확인',
        'delete_confirm_message' => '이 주문을 삭제하시겠습니까?',
        'delete_cancel' => '취소',
        'delete_button' => '삭제',

        // Toastr / Flash Messages
        'deleted_success' => '주문이 성공적으로 삭제되었습니다.',
        'deleted_error' => '주문 삭제에 실패했습니다.',
        'deleted' => '삭제됨',
        'success' => '성공',
    ],

    'attributes' => [
        'title_create' => '속성 만들기',
        'title_edit' => '속성 수정',
        'title_manage' => '속성 관리',

        'attribute_name' => '속성 이름',
        'attribute_values' => '속성 값',
        'translations' => '번역',
        'translated_value' => '번역된 값',

        'add_value' => '값 추가',
        'remove_value' => '제거',
        'save_attribute' => '속성 저장',
        'update_attribute' => '속성 업데이트',
        'add_value_translation' => '값 번역 추가',

        'success_create' => '속성이 성공적으로 생성되었습니다!',
        'success_update' => '속성이 성공적으로 업데이트되었습니다!',
        'success_delete' => '속성이 성공적으로 삭제되었습니다!',
        'delete_confirmation' => '이 속성을 정말로 삭제하시겠습니까?',
        'success' => '성공',

        'id' => 'ID',
        'name' => '이름',
        'values' => '값',
        'action' => '작업',

        'confirm_delete' => '삭제 확인',
        'delete' => '삭제',
        'cancel' => '취소',
    ],

    'product_reviews' => [
        'title_manage' => '상품 리뷰 관리',

        'review_id' => '리뷰 ID',
        'customer_name' => '고객 이름',
        'product_name' => '상품명',
        'rating' => '평점',
        'status' => '상태',
        'actions' => '작업',
        'review_details' => '리뷰 세부 정보',
        'review' => '리뷰',
        'back_button' => '목록으로 돌아가기',

        'confirm_delete' => '삭제 확인',
        'delete_message' => '이 상품 리뷰를 정말 삭제하시겠습니까?',
        'delete' => '삭제',
        'cancel' => '취소',

        'success_create' => '상품 리뷰가 성공적으로 생성되었습니다!',
        'success_update' => '상품 리뷰가 성공적으로 업데이트되었습니다!',
        'success_delete' => '상품 리뷰가 성공적으로 삭제되었습니다!',
        'error_delete' => '상품 리뷰 삭제 중 오류가 발생했습니다! 다시 시도해주세요.',

        'success' => '성공',
        'error' => '오류',
    ],

];
