<?php


function homeIndex()
{
    $view = 'home';
    $postTopViews = postTopViewOnHome();
    $postTopSales = getTop3BiggestDiscountProducts();
    $categorys = getAllCategory();
    //     $postTop6Latest = postTop6LatestOnHome();
    //     $postTop5Trending = postTop5TrendingOnHome();
    require_once PATH_VIEW . 'layouts/master.php';
    require_once './views/home.php';
} 

function aboutIndex() {
    $view = 'about';
    require_once PATH_VIEW . 'layouts/master.php';
    require_once './views/about.php';
}

function contactIndex() {
    $view = 'contact';
    require_once PATH_VIEW . 'layouts/master.php';
    require_once './views/contact.php';
}

function handleContactForm() {
    $view = 'contact';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if (saveContact($name, $email, $message)) {
        $success = "Cảm ơn bạn đã liên hệ!";
    } else {
        $error = "Có lỗi xảy ra. Vui lòng thử lại.";
    }
    require_once PATH_VIEW . 'layouts/master.php';
    require_once './views/contact.php';
}








// Luong mvc 1: vao index
//     -> duoc dieu huong den ham xu ly logic trong controller tuong ung
//     -> ham se tra view luon vi ko tuong tac voi model 

// Luong mvc 2: vao index
//     -> duoc dieu huong den ham xu ly logic trong controller tuong ung
//     -> ham se tuong tac voi ham xu ly trong model
//     -> du lieu nay se dc tra ve view  -->