<?php require('Views/partials/head.php') ?>

<?php require('Views/partials/nav.php') ?>

<?php require('Views/partials/sidebar.php') ?>
<?php require('Views/partials/banner_inside.php') ?>


<div class="row">

<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Librarian Info</h4>
                    </p>
                    <table class="table table-striped" style="width: 100%;table-layout: fixed;">
                      <thead>
                        <tr>
                          <th> Librarian</th>
                          <th> Name </th>
                          <th> Phone </th>
                          <th> Email </th>
                          <th> Password </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php foreach ($admins as $admin) :?>

                        <tr>
                          <td class="py-1" style="width:5%;">
                            <img src="../../src/assets/images/faces-clipart/pic-1.png" alt="image" />
                          </td>
                          <td> <?= htmlspecialchars($admin['name']) ?></td>
                          <td>
                          <?= htmlspecialchars($admin['phone']) ?>
                          </td>
                          <td> <?= htmlspecialchars($admin['email']) ?></td>
                          <td style="width:16%;word-wrap: break-word;overflow: hidden;"> <?= htmlspecialchars($admin['password'] )?> </td>
                          <td>
                            <form method="POST" style="display: inline;">
                            <input type="hidden" name= "_method" value="DELETE">
                            <input type="hidden" name= "id" value="<?= $admin['id'] ?>">
                                <button type="submit" class="btn btn-inverse-danger btn-icon">
                                  <i class="mdi mdi-delete"></i>
                                </button>
                            </form>
                          <a href="/librarians/edit?id=<?=$admin['id']?>">
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
