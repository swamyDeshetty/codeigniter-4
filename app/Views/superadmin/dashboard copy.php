<?= $this->extend("layouts/app") ?>

<?= $this->section("body") ?>

<div class="container" style="margin-top:20px;">
    <div class="row">
        <div class="col-sm-6">
            <div class="panel panel-primary">
                <div class="panel-heading">SuperAdmin Dashboard</div>
                <div class="panel-body">
                    <h1>Hello, <?= session()->get('name') ?></h1>
                    <table border="1px">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>PhoneNo</th>
                                <th>Pic</th>
                                <th>Role</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                                <?php foreach ($users as $user) : ?>
                                    <tr>
                                     <td><?= $user['id'] ?></td>
                                        <td><?= $user['name'] ?></td>
                                        <td><?= $user['email'] ?></td>
                                        <td><?= $user['phone_no'] ?></td>
                                        <td>
                                        <img src="<?=  base_url ("images/".$user['profile_pic']) ?>" height="10px" alt="Product Image" class="w-100">
                                          
                                        </td>
                                        <td><?= $user['role'] ?></td>
                                        <td>
                                        <a class="btn btn-primary" href="<?= site_url('add') ?>">Add</a>
                                        <a  class="btn btn-success"href="<?= site_url('edit/' .$user['id']) ?>">Edit</a>
                                        <a class="btn btn-danger" href="<?= site_url('delete/' .$user['id']) ?>">Delete</a>
                                        </td>
                                    </tr>
        <?php endforeach; ?>
                        </tbody>
                    </table>
                    
                    <h3><a href="<?= site_url('logout') ?>">Logout</a></h3>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>