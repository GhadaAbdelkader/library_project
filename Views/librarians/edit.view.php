<?php require('Views/partials/head.php') ?>

<?php require('Views/partials/nav.php') ?>

<?php require('Views/partials/sidebar.php') ?>
<?php require('Views/partials/banner_inside.php') ?>


<div class="row">



<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Edit</h4>
                    <form class="forms-sample"  method="POST" enctype="multipart/form-data">

                    <?php foreach ($librarians as $librarian) :?>

                      <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="name" value="<?= isset($_GET['name']) ? $_GET['name']  : htmlspecialchars($librarian['name']) ?>" placeholder="Name">
                        <?php if (isset($errors['name'])) : ?>
                          <small class="text-danger"><?= $errors['name'] ?></small>
                        <?php endif; ?>   
                      </div>
                      
                      <div class="form-group">
                        <label for="exampleInputPhone">Phone</label>
                          <input type="text" class="form-control" id="exampleInputPhone" name="phone" value="<?= isset($_GET['phone']) ? htmlspecialchars($_GET['phone']) : htmlspecialchars($librarian['phone']) ?>"placeholder="Phone number">
                          <?php if (isset($errors['phone'])) : ?>
                          <small class="text-danger"><?= $errors['phone'] ?></small>
                        <?php endif; ?>
                        </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail3" name="email" value="<?= isset($_GET['email']) ? htmlspecialchars($_GET['email']) : htmlspecialchars($librarian['email']) ?>" placeholder="Email">
                        <?php if (isset($errors['email'])) : ?>
                          <small class="text-danger"><?= $errors['email'] ?></small>
                        <?php endif; ?>
                      </div>

                        <div class="form-group">
                            <label for="exampleInputImage">File image</label>
                            <img src="../../uploads/<?= htmlspecialchars($librarian['image_url']) ?>" alt="Current Image" style="max-width: 100px; max-height: 100px;display: block;margin: 10px 0;" />
                            <input id="exampleInputImage" class="form-control file-upload-browse btn  py-3" type="file" name="file"  style="border: 1px solid #ebedf2;text-align: left;padding-left: 23px;">
                            <?php if (isset($errors['file'])) : ?>
                                <small class="text-danger"><?= $errors['file'] ?></small>
                            <?php endif; ?>
                        </div>
                        <input class="btn btn-gradient-primary me-2" id="tea-submit" type="submit" name="submit" value="Edit">
                      <button class="btn btn-light">Cancel</button>
                      <?php endforeach; ?>

                    </form>
                  </div>
                </div>
</div>

<?php require('Views/partials/footer.php') ?>
