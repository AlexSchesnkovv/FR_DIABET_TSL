<?php
// Вьетнамский
$base_array = array(
    'name' => 'Tên:',
    'phone' => 'Số điện thoại:',
    'return' => 'Trở lại',
);
$success_page_array = array_merge($base_array, array(
    'title' => 'Cảm ơn',
    'text-1' => 'Cảm ơn bạn đã đặt hàng của bạn!',
    'text-2' => 'Các chuyên gia của chúng tôi sẽ liên hệ với bạn',
    'text-3' => 'Hãy chắc chắn rằng bạn nhập:',
));
$error_page_array = array_merge($base_array, array(
    'title' => 'Lỗi',
    'text-1' => 'một lỗi đã xảy ra',
    'text-2' => 'Quay lại trang chính và thử lại',
    'text-3' => 'Hãy chắc chắn rằng bạn nhập:',
));
$double_page_array = array_merge($base_array, array(
    'title' => 'Cảm ơn',
    'text-1' => 'Đơn đặt hàng của bạn đã được xử lý!',
    'text-2' => 'Các chuyên gia của chúng tôi sẽ liên hệ với bạn',
    'text-3' => 'Dữ liệu bạn cung cấp:',
));
