<?php require('Views/partials/head.php') ?>

<?php require('Views/partials/nav.php') ?>

<?php require('Views/partials/sidebar.php') ?>
<?php require('Views/partials/banner_inside.php') ?>


<div class="row">

<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title" style="display: inline-block;">Librarian Info</h4>
                      <div class="g_massage" style="display: inline-block; float: right;">
                      <?php if (strpos($_SERVER['REQUEST_URI'], 'delete') !== false) : ?>
                      <p id="delete-message" class=" btn-inverse-danger pt-1 pb-1 px-2 fs-11 mb-0">The item is deleted</p>
                      <?php $message->deleteMessage() ?>
                      <?php endif; ?>
                      <?php if (strpos($_SERVER['REQUEST_URI'], 'edit') !== false) : ?>
                          <p id="edit-message" class="btn-inverse-success pt-1 pb-1 px-2 fs-11 mb-0">The item is edited</p>
                          <?php $message->editMessage() ?>
                      <?php endif; ?>
                      </div>
                      <table class="table table-striped" style="width: 100%;table-layout: fixed;">
                      <thead>
                        <tr>
                          <th> Librarian</th>
                          <th> Name </th>
                          <th> Phone </th>
                          <th> Email </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php foreach ($librarians as $librarian) :?>

                        <tr>
                          <td class="py-1" style="width:5%;">
                            <img src="../../uploads/<?= htmlspecialchars($librarian['image_url']) ?>" alt="image" />
                          </td>
                          <td> <?= htmlspecialchars($librarian['name']) ?></td>
                          <td>
                          <?= htmlspecialchars($librarian['phone']) ?>
                          </td>
                          <td> <?= htmlspecialchars($librarian['email']) ?></td>
                          <td>
                            <form method="POST" style="display: inline;">
                            <input type="hidden" name= "_method" value="DELETE">
                            <input type="hidden" name= "id" value="<?= $librarian['id'] ?>">
                                <button type="submit" class="btn btn-inverse-danger btn-icon">
                                  <i class="mdi mdi-delete"></i>
                                </button>
                            </form>
                          <a href="/librarians/edit?id=<?=$librarian['id']?>">
                            <button type="button" class="btn btn-inverse-success  btn-icon">
                              <i class=" mdi mdi-pencil-box "></i>
                            </button>
                          </a>
                          </td>
                        </tr>
                        <?php endforeach; ?>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

<?php require('Views/partials/footer.php') ?>
