<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <button class="btn">

                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <a href="<?= BASE_URL_ADMIN ?>?act=orderByStatus&status=Chờ xác nhận">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Chờ xác nhận</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                </div>
                            </a>
                            <!-- <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div> -->
                        </div>
                    </div>
                </button>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <button class="btn">

                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <a href="<?= BASE_URL_ADMIN ?>?act=orderByStatus&status=Chờ giao hàng">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        Chờ giao hàng</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                </div>
                            </a>
                            <!-- <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div> -->
                        </div>
                    </div>
                </button>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <button class="btn">

                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <a href="<?= BASE_URL_ADMIN ?>?act=orderByStatus&status=Đang giao hàng">

                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Đang giao hàng
                                    </div>
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                            </div>
                                        </div>
                                        <!-- <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div> -->
                                    </div>
                                </div>
                                <!-- <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div> -->
                            </a>
                        </div>

                    </div>
                </button>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <button class="btn">

                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <a href="<?= BASE_URL_ADMIN ?>?act=orderByStatus&status=Giao hàng thành công">

                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                        Giao hàng thành công</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                </div>
                                <!-- <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div> -->
                            </a>
                        </div>
                    </div>
                </button>
            </div>

        </div>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <button class="btn">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                        <a href="<?= BASE_URL_ADMIN ?>?act=orderByStatus&status=Giao hàng thất bại">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    Giao hàng thất bại</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                            </div>
                        </a>
                        </div>
                    </div>

                </button>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <button class="btn">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <a href="<?= BASE_URL_ADMIN ?>?act=orderByStatus&status=Đã hủy">

                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Đã hủy</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                </div>
                            </a>
                            <!-- <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div> -->
                        </div>
                    </div>
                </button>
            </div>
        </div>
    </div>



</div>