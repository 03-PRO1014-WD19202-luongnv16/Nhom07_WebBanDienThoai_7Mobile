<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= BASE_URL_ADMIN ?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3"> Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="<?= BASE_URL_ADMIN ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-user"></i>
            <span>QUẢN LÝ NGƯỜI DÙNG</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= BASE_URL_ADMIN ?>?act=users">List</a>
                <a class="collapse-item" href="<?= BASE_URL_ADMIN ?>?act=user-add">Add new</a>
            </div>
        </div>
    </li>

    <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
            <i class="fab fa-apple"></i>
            <span>Quan ly tag</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="heading3" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= BASE_URL_ADMIN ?>?act=tags">List</a>
                <a class="collapse-item" href="<?= BASE_URL_ADMIN ?>?act=tag-create">Add new</a>
            </div>
        </div>
    </li> -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapse4">
            <i class="fab fa-apple"></i>
            <span>QUẢN LÝ DANH MỤC</span>
        </a>
        <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= BASE_URL_ADMIN ?>?act=categories">List</a>
                <a class="collapse-item" href="<?= BASE_URL_ADMIN ?>?act=category-add">Add new</a>
            </div>
        </div>
    </li>
    <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse5" aria-expanded="true" aria-controls="collapse5">
            <i class="fab fa-apple"></i>
            <span>Quan ly authors</span>
        </a>
        <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= BASE_URL_ADMIN ?>?act=authors">List</a>
                <a class="collapse-item" href="<?= BASE_URL_ADMIN ?>?act=author-create">Add new</a>
            </div>
        </div>
    </li> -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse7" aria-expanded="true" aria-controls="collapse7">
            <i class="fab fa-apple"></i>
            <span>QUẢN LÝ SẢN PHẨM</span>
        </a>
        <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= BASE_URL_ADMIN ?>?act=products">List</a>
                <a class="collapse-item" href="<?= BASE_URL_ADMIN ?>?act=product-add">Add new</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse6" aria-expanded="true" aria-controls="collapse6">
            <i class="fab fa-apple"></i>
            <span>QUẢN LÝ ĐƠN HÀNG</span>
        </a>
        <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= BASE_URL_ADMIN ?>?act=order">List</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse8" aria-expanded="true" aria-controls="collapse8">
            <i class="fab fa-apple"></i>
            <span>QUẢN LÝ BÌNH LUẬN</span>
        </a>
        <div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= BASE_URL_ADMIN ?>?act=comment">List</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse9" aria-expanded="true" aria-controls="collapse9">
            <i class="fab fa-apple"></i>
            <span>QUẢN LÝ LIÊN HỆ</span>
        </a>
        <div id="collapse9" class="collapse" aria-labelledby="heading9" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= BASE_URL_ADMIN ?>?act=contact">List</a>
            </div>
        </div>
    </li>
    <!-- Nav Item - Utilities Collapse Menu -->


    <!-- Divider -->
    <hr class="sidebar-divider">



</ul>