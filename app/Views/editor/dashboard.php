<?= $this->extend("layouts/app") ?>

<?= $this->section("body") ?>

<!-- Editor Dashboard view -->
<div class="container" style="margin-top:20px;">
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <div class="panel panel-primary">
                <div class="panel-heading">Editor Dashboard</div>
                <div class="panel-body">
                <?php if (session()->has('success')) : ?>
                    <div class="alert alert-success">
                        <?= session('success') ?>
                    </div>
    <?php endif; ?>
                    <h1>Hello, <?= session()->get('name') ?></h1>
                    <!-- Add more user details here as needed -->

                    <!-- Form to update user details -->
                    <form action="<?= site_url('userupdate') ?>" method="post">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name" value="<?= session()->get('name') ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email"  value="<?= session()->get('email') ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone_no</label>
                            <input type="phoneno" class="form-control" name="phone_no" value="<?= session()->get('phone_no') ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="address" class="form-control" name="address"  value="<?= session()->get('address') ?>" required>
                        </div>
                        <!-- Add more input fields for other user details as needed -->

                        <button type="submit" class="btn btn-primary">Update Details</button>
                        <a class="btn btn-danger" href="logout">logout</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection() ?>
  