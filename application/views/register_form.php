<body class="bg-dark">
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
              <img src="<?= base_url('assets/assets_stisla/'); ?>/assets/img/logoshop.png" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Daftar E-Mobillindo</h4></div>

              <div class="card-body">
                <form method="POST" action="<?= base_url('register'); ?>">
                    <div class="form-group">
                      <label for="nama">Nama</label>
                      <input id="nama" type="text" class="form-control" name="nama" autofocus>
                      <?= form_error('nama', '<div class="text-small text-danger">', '</div>'); ?>
                    </div>

                    <div class="form-group">
                      <label for="no_telepon" class="d-block">No. Handphone</label>
                      <input id="no_telepon" type="text" class="form-control" name="no_telepon">
                      <?= form_error('no_telepon', '<div class="text-small text-danger">', '</div>'); ?>
                    </div>

                    <div class="form-group">
                      <label for="username">Email</label>
                      <input id="username" type="Email" class="form-control" name="username">
                      <?= form_error('username', '<div class="text-small text-danger">', '</div>'); ?>
                    </div>

                  <div class="form-group">
                    <label for="kode">Password</label>
                    <input id="kode" type="password" class="form-control" name="kode">
                    <?= form_error('kode', '<div class="text-small text-danger">', '</div>'); ?>
                    <div class="invalid-feedback">
                    </div>
                  </div>

                    <div class="form-group">
                      <label>Ulangi Password</label>
                      <input type="password" name="password" class="form-control">
                      <?= form_error('password', '<div class="text-small text-danger">', '</div>'); ?>
                    </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Daftar
                    </button>
                  </div>
                </form>
                <div class="mt-5 text-muted text-center">
                  Sudah Punya Akun? <a href="<?= base_url('auth/login'); ?>">Login disini!</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>