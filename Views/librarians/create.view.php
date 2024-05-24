<?php require('Views/partials/head.php') ?>

<?php require('Views/partials/nav.php') ?>

<?php require('Views/partials/sidebar.php') ?>
<?php require('Views/partials/banner_inside.php') ?>


<div class="row">

<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title" style="display: inline-block;">Create </h4>
                      <div class="g_massage" style="display: inline-block; float: right;">
                          <?php if (strpos($_SERVER['REQUEST_URI'], 'created') !== false) : ?>
                              <p id="create-message" class=" btn-inverse-info pt-1 pb-1 px-2 fs-11 mb-0">The item is created</p>
                              <?php displayCreateMessageScript(); ?>
                          <?php endif; ?>
                      </div>
                    <form class="forms-sample mt-4" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="name"  placeholder="Name" value="<?= isset($_GET['name']) ? htmlspecialchars($_GET['name']) : '' ?>">
                        
                        <?php if (isset($errors['name'])) : ?>
                          <small class="text-danger"><?= $errors['name'] ?></small>
                        <?php endif; ?>

                      </div>


                      <div class="form-group">
                        <label for="exampleInputPhone">Phone</label>
                          <input type="text" class="form-control" id="exampleInputPhone" name="phone"  placeholder="Phone number" value="<?= isset($_GET['phone']) ? htmlspecialchars($_GET['phone']) : '' ?>">
                          <?php if (isset($errors['phone'])) : ?>
                          <small class="text-danger"><?= $errors['phone'] ?></small>
                        <?php endif; ?>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail">Email address</label>
                        <input type="text" class="form-control" id="exampleInputEmail" name="email"  placeholder="Email" value="<?= isset($_GET['email']) ? htmlspecialchars($_GET['email']) : '' ?>">
                        <?php if (isset($errors['email'])) : ?>
                          <small class="text-danger"><?= $errors['email'] ?></small>
                        <?php endif; ?>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword" name="password"  placeholder="Password" value="<?= isset($_GET['password']) ? htmlspecialchars($_GET['password']) : '' ?>">
                          <?php if (isset($errors['password'])) : ?>
                              <small class="text-danger"><?= $errors['password'] ?></small>
                          <?php endif; ?>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputImage">File image</label>
                            <input id="exampleInputImage" class="form-control file-upload-browse btn  py-3" type="file" name="file" style="border: 1px solid #ebedf2;text-align: left;padding-left: 23px;">
                          <?php if (isset($errors['file'])) : ?>
                              <small class="text-danger"><?= $errors['file'] ?></small>
                          <?php endif; ?>
                        </div>


                      <input class="btn btn-gradient-primary me-2" id="tea-submit" type="submit" name="submit" value="Submit">
                                            <!-- <button type="submit" class="btn btn-gradient-primary me-2">Submit</button> -->
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
</div>

<?php require('Views/partials/footer.php') ?>
