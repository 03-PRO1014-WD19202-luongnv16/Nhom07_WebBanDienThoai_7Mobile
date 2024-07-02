<?php

function homeIndex()
{
    $view = 'home';
    //     $postTopView = postTopViewOnHome();
    //     $postTop6Latest = postTop6LatestOnHome();
    //     $postTop5Trending = postTop5TrendingOnHome();
    require_once PATH_VIEW . 'layouts/master.php';
}   

// Luong mvc 1: vao index
//     -> duoc dieu huong den ham xu ly logic trong controller tuong ung
//     -> ham se tra view luon vi ko tuong tac voi model 

// Luong mvc 2: vao index
//     -> duoc dieu huong den ham xu ly logic trong controller tuong ung
//     -> ham se tuong tac voi ham xu ly trong model
//     -> du lieu nay se dc tra ve view  -->