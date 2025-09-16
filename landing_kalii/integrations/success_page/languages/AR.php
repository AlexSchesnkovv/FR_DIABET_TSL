<?php
// Арабский
$base_array = array(
    'name' => 'الاسم:',
    'phone' => 'رقم الهاتف:',
    'return' => 'للعودة',
);
$success_page_array = array_merge($base_array, array(
    'title' => 'شكرا',
    'text-1' => 'شكرا لك على طلبك!',
    'text-2' => 'سيقوم خبراؤنا بالاتصال بك',
    'text-3' => 'تأكد من أنك قد دخلت:',
));
$error_page_array = array_merge($base_array, array(
    'title' => 'خطأ',
    'text-1' => 'حدث خطأ',
    'text-2' => 'ارجع إلى الصفحة الرئيسية وحاول مرة أخرى',
    'text-3' => 'تأكد من أنك قد دخلت:',
));
$double_page_array = array_merge($base_array, array(
    'title' => 'شكرا',
    'text-1' => 'طلبك قيد المعالجة بالفعل!',
    'text-2' => 'سيقوم خبراؤنا بالاتصال بك',
    'text-3' => 'البيانات التي قدمتها:',
));
