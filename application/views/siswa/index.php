<main id="main" class="main">

<div class="pagetitle">
  <h1>Form Elements</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Forms</li>
      <li class="breadcrumb-item active">Elements</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-8">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">General Form Elements</h5>

          <!-- General Form Elements -->
          <form method="POST" action="<?= base_url(). 'siswa/input_data';?>" enctype="multipart/form-data">
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputNumber" class="col-sm-2 col-form-label">Photo</label>
              <div class="col-sm-10">
                <input class="form-control" type="file" id="photo" name="photo">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
              <div class="col-sm-10">
                <input class="form-control" type="file" id="file" name="file">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputDate" class="col-sm-2 col-form-label">Date</label>
              <div class="col-sm-10">
                <input type="date" class="form-control" id="date" name="date">
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">Asal Sekolah</label>
              <div class="col-sm-10">
                <select class="form-select" aria-label="Default select example" id="asal" name="asal">
                  <option selected>Open this select menu</option>
                  <option value="SMP">SMP</option>
                  <option value="Madrasah">Madrasah</option>
                </select>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label"></label>
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Kirim</button>
              </div>
            </div>

          </form><!-- End General Form Elements -->

        </div>
      </div>

    </div>
    </div>
  </div>
</section>

</main><!-- End #main -->