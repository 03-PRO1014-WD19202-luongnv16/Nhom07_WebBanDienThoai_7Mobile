<?php

// Khai báo các  biến môi trường dùng global 

// CLIENT {

define('PATH_CONTROLLER', __DIR__ . '/../controllers/');
define('PATH_MODEL', __DIR__ . '/../models/');
define('PATH_VIEW', __DIR__ . '/../views/');

define('BASE_URL', 'http://nhom07_webbandienthoai_7mobile.test/');


// ADMIN {

define('PATH_CONTROLLER_ADMIN', __DIR__ . '/../admin/controller/');
define('PATH_MODEL_ADMIN', __DIR__ . '/../admin/models/');
define('PATH_VIEW_ADMIN', __DIR__ . '/../admin/views/');

define('PATH_UPLOAD', __DIR__ . '/../');

define('BASE_URL_ADMIN', 'http://nhom07_webbandienthoai_7mobile.test/admin/');
// }

define('DB_HOST', 'localhost');
define('DB_PORT', '3306');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'duan1');

define('STATUS_DRAFT', 'draft');
define('STATUS_PUBLISHED', 'published');
