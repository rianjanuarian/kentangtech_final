<!-- Basic features section-->
<section class="mt-5">
    <div class="container px-5">
        <div class="row gx-5 align-items-center justify-content-center row-login border-end border-start">
           
            <div class="col-sm-12 col-md-5 mb-5 mt-5">
                <div class="pesan">
                    <?= $this->session->flashdata('pesan') ?>
                </div>
                <?= form_open('Auth', 'autocomplete="off"') ?>
                <h2 class="font-alt text-center card-judul2 mb-4">Login</h2>
                <div class="form-floating mb-3">
                    <input class="form-control" id="input" name="input" type="text" placeholder="Masukkan Email atau Nama akun" />
                    <label for="input" class="text-muted">Email</label>
                    <?= form_error('input', '<span class="badge text-bg-danger">', '</span>'); ?>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" id="password" name="password" type="password" placeholder="Masukkan Sandi Akun" />
                    <label for="password" class="text-muted">Sandi</label>
                    <?= form_error('password', '<span class="badge text-bg-danger">', '</span>'); ?>
                </div>
              
                <div class="d-grid"><button class="btn btn-primary rounded btn-lg" id="submitButton" type="submit">Submit</button></div>
                <hr class="text-dark-50">
                <p class="mb-1 text-center">

                </p>
                <?= form_close() ?>
            </div>
        </div>
    </div>
</section>