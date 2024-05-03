<?php require('Views/partials/head.php') ?>

<?php require('Views/partials/nav.php') ?>

<?php require('Views/partials/sidebar.php') ?>
<?php require('Views/partials/banner_inside.php') ?>


<div class="row">

<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Create Book</h4>
                    <form class="forms-sample">
                    <div class="form-group">
                        <label for="exampleInputName1">Title</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Title">
                      </div> 
                      <div class="form-group">
                        <label for="exampleInputAuthor1">Author</label>
                        <input type="text" class="form-control" id="exampleInputAuthor1" placeholder="Author">
                      </div>
                    
                      <div class="form-group">
                        <label for="exampleInputStock">Stock</label>
                        <input type="number" class="form-control" id="exampleInputStock" placeholder="stock">
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
                     
                      <div class="form-group">
                        <label for="exampleTextarea1">Description</label>
                        <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
                      </div>
                      <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
<?php require('Views/partials/footer.php') ?>
