  <main id="main" class="main">

<div class="pagetitle">
  <h1>User Tables</h1>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">User Table</h5>

          <!-- Default Table -->
          <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Date Created</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              $no = 1;
              foreach ($akun as $ak) :?>
              <tr>
                <th scope="row"><?= $no++; ?></th>
                <td><?= $ak['name']; ?></td>
                <td><?= $ak['email']; ?></td>
                <td><?= date('d F Y', $ak['datecreated']); ?></td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
          <!-- End Default Table Example -->

    </div>
  </div>
</section>

</main>
