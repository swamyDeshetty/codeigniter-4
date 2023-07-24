<!DOCTYPE html>
<html>
<head>
  <title>Codeigniter 4 CRUD - Edit User Demo</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">


</head>

<div class="container mt-4">
      <!-- Display the flash message if it exists in the session -->
      <?php if (session()->has('success')) : ?>
        <div class="alert alert-success">
            <?= session('success') ?>
        </div>
    <?php endif; ?>
         <!-- Display the flash message if it exists in the session -->
         <?php if (session()->has('error')) : ?>
        <div class="alert alert-danger">
            <?= session('error') ?>
        </div>
    <?php endif; ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                   <center><h1>Aproove Users Here</h1></center>  
                   <a class="btn btn-outline-warning" href="/admin">Back</a> 
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>PhoneNo</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($pendingUsers as $user) : ?>
                                    <tr>
                                        <td><?= $user['name'] ?></td>
                                        <td><?= $user['email'] ?></td>
                                        <td><?= $user['phone_no'] ?></td>
                                        <td>
                                        <a  class="btn btn-success"href="<?= site_url('approve-user/' .$user['id']) ?>">Aproove</a>
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
