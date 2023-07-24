<!DOCTYPE html>
<html>
<head>
  <title>Codeigniter 4 CRUD - Edit User Demo</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">


</head>

<body>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8"> 
                <div class="card">
                    <div class="card-header">
                        <h5> Edit Details
                            <a href=""></a>
                        </h5>
                    </div>
                    <div class="card-body">
                     <form method="post" id="update_user" name="update_user" action="<?= site_url('update/'.$user_obj['id']) ?>" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                <b><label>Name</label></b>
                                <input type="text" name="name" class="form-control" value="<?php echo $user_obj['name']; ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                <b><label>Email</label></b>
                                <input type="email" name="email" class="form-control" value="<?php echo $user_obj['email']; ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                <b><label>Phone_no</label></b>
                                <input type="text" name="phone" class="form-control" value="<?php echo $user_obj['phone_no']; ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                <b><label>Role</label></b>
                                <input type="disable" name="role" class="form-control" value="<?php echo $user_obj['role']; ?>" disabled>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group mb-2">
                               <b> <label>Address</label></b>
                                <input type="text" name="address" class="form-control" value="<?php echo $user_obj['address']; ?>">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group mb-2">
                                <b><label>Gender</label></b>
                                    <select class="form-control" name="gender" required>
                                        <option value="">Select Gender</option>
                                        <option value="male" <?php if ($user_obj['gender'] === 'male') echo 'selected'; ?>>Male</option>
                                        <option value="female" <?php if ($user_obj['gender'] === 'female') echo 'selected'; ?>>Female</option>
                                        <option value="other" <?php if ($user_obj['gender'] === 'other') echo 'selected'; ?>>Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-2">
                                <b><label>Date_of_birth</label></b>
                                <input type="date" name="date_of_birth" class="form-control" value="<?php echo $user_obj['date_of_birth']; ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                            <div class="col-md-3">
                                <div class="form-group mb-2">
                                <b><label for="">Profile</label></b>
                                <input type="file" name="image" />
                                <img src="<?=  base_url ("images/".$user_obj['profile_pic']) ?>" alt="Product Image" class="w-100">
                                </div>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="col-md-3">
                                <div class="form-group mb-2">        
                                <b><label for="">Signature</label></b>
                                <input type="file" name="signature" />
                                <img src="<?=  base_url ("images/".$user_obj['signature']) ?>" alt="Product Image" class="w-100">
                                </div>
                            </div>
                            </div>
                            
                            <div class="col-md-12">
                                <hr>
                                <button type="submit" class="btn btn-success btn-block">Update</button>
                                <!-- <button href="/superadmin" class="btn btn-secondary px-4 float-end">Back</button> -->
                                 <a href="/superadmin" class="btn btn-primary btn-block">Return back</a>


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
