<!DOCTYPE html>
<html>
<head>
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">


</head>

<div class="container mt-4">
     <!-- Display the flash message if it exists in the session -->
     <?php if (session()->has('success')) : ?>
        <div class="alert alert-success">
            <?= session('success') ?>
        </div>
    <?php endif; ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                   <center><h1>Admin Dashboard</h1></center> 
                   <a href="<?= site_url('adminaproove') ?>" class="btn btn-info" style="float:left">Approve Users</a>
                    <a href="<?= site_url('admin/addnew') ?>" class="btn btn-warning" style="float:right">Add User</a>
                    <a href="<?= site_url('logout') ?>" class="btn btn-danger" style="margin: -6% 0 0 83%;" >Logout</a>

                    
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Role</th>
                                <th>Profile</th>
                                <th>Signature</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($users as $user) : ?>
                                    <tr>
                                     <td><?= $user['id'] ?></td>
                                        <td><?= $user['name'] ?></td>
                                        <td><?= $user['role'] ?></td>
                                        <td>
                                            <img src="<?=  base_url("images/" . $user['profile_pic']) ?>" width="100px" alt="Profile Picture">
                                            </td>
                                            <td>
                                            <img src="<?=  base_url("images/" . $user['signature']) ?>" width="100px" alt="Signature Image">
                                            </td>

                                        <td>
                                        <a class="btn btn-primary" href="<?= site_url('admin/addnew') ?>">Add</a>
                                        <a class="btn btn-danger" href="<?= site_url('delete/' .$user['id']) ?>">Delete</a>
                                        </td>
                                    </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
