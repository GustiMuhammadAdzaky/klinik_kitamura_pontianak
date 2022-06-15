<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<section class="container-fluid mt-5">
    <!-- justify-content-center untuk mengatur posisi form agar berada di tengah-tengah -->
    <section class="row justify-content-center">
        <section class="col-12 col-sm-6 col-md-4">
            <form class="form-container">
                <h4 class="text-center font-weight-bold"> Form Analisis </h4>
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control" id="name" placeholder="Masukkan Nama">
                </div>
                <div class="form-group">
                    <label for="name">Jenis Kelamin</label>
                    <input type="text" class="form-control" id="name" placeholder="Masukkan Nama">
                </div>
                <div class="form-group">
                    <label for="name">Agama</label>
                    <input type="text" class="form-control" id="name" placeholder="Masukkan Nama">
                </div>
                <div class="form-group">
                    <label for="name">Pendidikan</label>
                    <input type="text" class="form-control" id="name" placeholder="Masukkan Nama">
                </div>
                <div class="form-group">
                    <label for="name">Pekerjaan</label>
                    <input type="text" class="form-control" id="name" placeholder="Masukkan Nama">
                </div>
                <div class="form-group">
                    <label for="name">Suku</label>
                    <input type="text" class="form-control" id="name" placeholder="Masukkan Nama">
                </div>
                <div class="form-group">
                    <label for="name">Tinggi</label>
                    <input type="text" class="form-control" id="name" placeholder="Masukkan Nama">
                </div>
                <br>
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </form>
        </section>
    </section>


    <?= $this->endSection() ?>