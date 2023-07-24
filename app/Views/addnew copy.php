<!-- File: app/Views/add_user.php -->

<?= $this->extend("layouts/app") ?>

<?= $this->section("body") ?>
<div class="container my-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0" style="color:bluex">Add New User</h4>
                </div>
                <div class="card-body">
                <form method="post" action="<?= site_url('store') ?>" enctype="multipart/form-data">
                        <?= csrf_field() ?>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter the Name" required>
                           
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter Email" required>

                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="tel" class="form-control" name="phone" placeholder="Enter PhoneNo" required>

                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" name="address" placeholder="Enter Address" required>

                        </div>
                        <div class="form-group">
                            <label for="gender">Gender</label>
                                <select class="form-control" name="gender" required>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                        </div>
                        <div class="form-group">
                            <label for="dob">Date of Birth</label>
                            <input type="date" class="form-control" name="dob" required >

                        </div>
                        <div class="form-group">
                            <label for="profile">Profile Picture</label>
                            <input type="file" class="form-control" name="profile" required />

                        </div>

                        <div class="form-group">
                            <label for="signature">Signature</label>
                            <input type="file" class="form-control" name="signature" required />

                        </div>
                       
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" required  />

                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Create User</button>
                            <a href="<?= site_url('/superadmin') ?>" class="btn btn-secondary">Return Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
