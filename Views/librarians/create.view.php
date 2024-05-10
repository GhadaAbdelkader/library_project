<?php require('Views/partials/head.php') ?>

<?php require('Views/partials/nav.php') ?>

<?php require('Views/partials/sidebar.php') ?>
<?php require('Views/partials/banner_inside.php') ?>


<div class="row">

<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Create </h4>
                    <form class="forms-sample" method="post">
                      <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="name"  placeholder="Name" value="<?= isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '' ?>">
                        
                        <?php if (isset($errors['name'])) : ?>
                          <small class="text-danger"><?= $errors['name'] ?></small>
                        <?php endif; ?>

                      </div>


                      <div class="form-group">
                        <label for="exampleInputPhone">Phone</label>
                          <input type="text" class="form-control" id="exampleInputPhone" name="phone"  placeholder="Phone number" value="<?= $_POST['phone'] ?? '' ?>">
                          <?php if (isset($errors['phone'])) : ?>
                          <small class="text-danger"><?= $errors['phone'] ?></small>
                        <?php endif; ?>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail">Email address</label>
                        <input type="text" class="form-control" id="exampleInputEmail" name="email"  placeholder="Email" value="<?= $_POST['email'] ?? '' ?>">
                        <?php if (isset($errors['email'])) : ?>
                          <small class="text-danger"><?= $errors['email'] ?></small>
                        <?php endif; ?>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword" name="password"  placeholder="Password">
                      </div>
                      <div class="form-group">
                        <label>File image</label>
                        <input type="file" name="img[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-gradient-primary py-3" type="button">Upload</button>
                          </span>
                        </div>
                      </div>
                     
                      <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
</div>

<?php require('Views/partials/footer.php') ?>
