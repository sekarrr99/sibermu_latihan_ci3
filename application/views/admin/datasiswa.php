<main id="main" class="main">

<div class="pagetitle">
  <h1>Student Tables</h1>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Student Table</h5>

          <!-- Default Table -->
          <table class="table">
            <thead>
              <tr class="text-center">
                <th scope="col">No</th>
                <th scope="col">Nis</th>
                <th scope="col">Name</th>
                <th scope="col">Photo</th>
                <th scope="col">File</th>
                <th scope="col">Date</th>
                <th scope="col">Asal</th>
                <th scope="col" colspan="2">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              $no = 1;
              foreach ($student as $st) :?>
              <tr>
                <th scope="row"><?= $no++; ?></th>
                <td><?= $st['nis']; ?></td>
                <td><?= $st['name']; ?></td>
                <td><img src="<?= base_url('upload/').$st['photo'];?>" width="100" height="100"></td>
                <td><a href="<?= base_url('upload/'). $st['file'];?>" download><?= $st['file']; ?></a></td>
                <td><?= $st['date']; ?></td>
                <td><?= $st['asal']; ?></td>
                <td class="text-center" onclick="javascript: return confirm('Apakah Yakin Dihapus?')">
                  <?php echo anchor('admin/delete/'. $st['nis'], '<i class="btn btn-danger">Delete</i>'); ?>
                </td>
                <td><button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#Modal<?= $st['nis']; ?>" data-bs-whatever="@mdo">Edit</button></td>
                <div class="modal fade" id="Modal<?= $st['nis']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form method="POST" action="<?php echo base_url().'admin/update_student';?>">
                        <div class="mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="hidden" class="form-control" id="nis" name="nis" value="<?= $st['nis']; ?>">
                          <input type="text" class="form-control" id="name" name="name" value="<?= $st['name']; ?>">
                        </div>
                        </div>
                        <!-- <div class="row mb-3">
                          <label for="inputNumber" class="col-sm-2 col-form-label">Photo</label>
                          <div class="col-sm-10">
                          <img src="<?= base_url('upload/').$st['photo'];?>" width="100" height="100">
                            <input class="form-control" type="file" id="photo" name="photo" value="<?= $st['photo'];?>">
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                          <div class="col-sm-10">
                            <input class="form-control" type="file" id="file" name="file" value="<?= $st['file']; ?>">
                          </div>
                        </div> -->
                        <div class="row mb-3">
                          <label for="inputDate" class="col-sm-2 col-form-label">Date</label>
                          <div class="col-sm-10">
                            <input type="date" class="form-control" id="date" name="date" value="<?= $st['date']; ?>">
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label">Asal Sekolah</label>
                          <div class="col-sm-10">
                            <select class="form-select" aria-label="Default select example" id="asal" name="asal">
                              <option><?= $st['asal']; ?></option>
                              <option value="SMP">SMP</option>
                              <option value="Madrasah">Madrasah</option>
                            </select>
                          </div>
                        </div>
                      
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Kirim</button>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
          <!-- End Default Table Example -->

    </div>
  </div>
</section>

</main>
