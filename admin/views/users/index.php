<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">
        <?= $title ?>
        <a href="<?= BASE_URL_ADMIN ?>?act=user-create" class="btn btn-primary">Create</a>

    </h1>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                DataTables Example
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Type</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        foreach ($users as $user) :
                        ?>
                            <tr>
                                <td><?= $user['id'] ?></td>
                                <td><?= $user['name'] ?></td>
                                <td><?= $user['email'] ?></td>
                                <td><?= $user['type'] ?
                                        '<span class="badge badge-success ">Admin</span>'
                                        : '<span class="badge badge-warning ">Members</span>' ?></td>
                                <td>
                                    <a href="<?= BASE_URL_ADMIN ?>?act=user-detail&id=<?= $user['id'] ?>" class="btn btn-info">Show</a>
                                    <a href="<?= BASE_URL_ADMIN ?>?act=user-update&id=<?= $user['id'] ?>" class="btn btn-warning">Update</a>
                                    <a href="<?= BASE_URL_ADMIN ?>?act=user-delete&id=<?= $user['id'] ?>"
                                    onclick="return confirm('Are you sure?')"
                                    class="btn btn-danger">Delete</a>

                                </td>   
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>