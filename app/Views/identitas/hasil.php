<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>




<div class="container">
    <div class="card mt-3">
        <div class="card-body">
            <div class="container">
                <div class="container">
                    <h2 class="text-center mb-3">Analisis</h2>
                    <div class="row">
                        <div class="card col-sm-3">
                            <h3 class="text-center">Diagram</h3>
                            <div>
                                <canvas id="myChart"></canvas>
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="card col-8 col-sm-6">
                                    <h5 class="text-center">Result</h5>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In, blanditiis quo culpa
                                        aliquam deserunt harum aut? Cum possimus iste ducimus excepturi corrupti
                                        nesciunt, natus, esse autem placeat nobis temporibus earum! Dolor ducimus
                                        corrupti aperiam, assumenda ipsam adipisci atque quibusdam eveniet aliquid
                                        molestiae nam sint quam ad ut, excepturi unde iure.</p>
                                </div>
                                <div class="card col-8 col-sm-6">
                                    <h5 class="text-center">List Data</h5>
                                    <li>Lorem, ipsum dolor.</li>
                                    <li>Lorem, ipsum dolor.</li>
                                    <li>Lorem, ipsum dolor.</li>
                                    <li>Lorem, ipsum dolor.</li>
                                    <li>Lorem, ipsum dolor.</li>
                                    <li>Lorem, ipsum dolor.</li>
                                    <li>Lorem, ipsum dolor.</li>
                                    <li>Lorem, ipsum dolor.</li>
                                    <li>Lorem, ipsum dolor.</li>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>