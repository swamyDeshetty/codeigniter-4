<!DOCTYPE html>
<html>
<head>
  <title>Add User</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">


</head>
<style>
    h1{
    color: #00faff;
    font-family: cursive;
    font-style: initial;
    }
</style>

<body>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8"> 
                <div class="card">
                    <div class="card-header">
                        <h1> Add User
                            <a href=""></a>
                        </h1>
                    </div>
                    <div class="card-body">
                    <form method="post" action="<?= site_url('store') ?>" enctype="multipart/form-data">
                        <?= csrf_field() ?>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                <b><label>Name</label></b>
                                <input type="text" class="form-control" name="name" placeholder="Enter the Name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                <b><label>Email</label></b>
                                <input type="email" class="form-control" name="email" placeholder="Enter Email" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                <b><label>Phone_no</label></b>
                                <input type="tel" class="form-control" name="phone" placeholder="Enter PhoneNo" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                               <b> <label>Address</label></b>
                               <input type="text" class="form-control" name="address" placeholder="Enter Address" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                <b><label>Gender</label></b>
                                <select class="form-control" name="gender" required>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                <b><label>Date_of_birth</label></b>
                                <input type="date" class="form-control" name="dob" required >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                <b><label for="">Profile</label></b>
                                <input type="file" class="form-control" name="profile" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-2">        
                                <b><label for="">Signature</label></b>
                                <input type="file" class="form-control" name="signature" required />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-2">        
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" required  />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <hr>
                                <button type="submit" class="btn btn-outline-warning btn-block">Create User</button>
                                <!-- <button href="/superadmin" class="btn btn-secondary px-4 float-end">Back</button> -->
                                 <a href="/superadmin" class="btn btn-outline-info btn-block">Return back</a>
                                 </div>

                        </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>

</body>
</html>
