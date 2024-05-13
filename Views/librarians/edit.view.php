<?php require('Views/partials/head.php') ?>

<?php require('Views/partials/nav.php') ?>

<?php require('Views/partials/sidebar.php') ?>
<?php require('Views/partials/banner_inside.php') ?>


<div class="row">



<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Edit</h4>
                    <form class="forms-sample"  method="POST">

                    <?php foreach ($admins as $admin) :?>

                      <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="name" value="<?= isset($_GET['name']) ? $_GET['name']  : htmlspecialchars($admin['name']) ?>" placeholder="Name">
                        <?php if (isset($errors['name'])) : ?>
                          <small class="text-danger"><?= $errors['name'] ?></small>
                        <?php endif; ?>   
                      </div>
                      
                      <div class="form-group">
                        <label for="exampleInputPhone">Phone</label>
                          <input type="text" class="form-control" id="exampleInputPhone" name="phone" value="<?= isset($_GET['phone']) ? htmlspecialchars($_GET['phone']) : htmlspecialchars($admin['phone']) ?>"placeholder="Phone number">
                          <?php if (isset($errors['phone'])) : ?>
                          <small class="text-danger"><?= $errors['phone'] ?></small>
                        <?php endif; ?>
                        </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail3" name="email" value="<?= isset($_GET['email']) ? htmlspecialchars($_GET['email']) : htmlspecialchars($admin['email']) ?>" placeholder="Email">
                        <?php if (isset($errors['email'])) : ?>
                          <small class="text-danger"><?= $errors['email'] ?></small>
                        <?php endif; ?>
                      </div>
                     
                      <!-- <div class="form-group">
                        <label>File image</label>
                        <input type="file" name="img[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-gradient-primary py-3" type="button">Upload</button>
                          </span>
                        </div>
                      </div> -->
                     
                      <input id="tea-submit" type="submit" name="submit" value="coffee">
                      <button class="btn btn-light">Cancel</button>
                      <?php endforeach; ?>

                    </form>
                  </div>
                </div>
</div>

<?php require('Views/partials/footer.php') ?>
