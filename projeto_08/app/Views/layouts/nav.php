 <!-- nav -->
 <nav class="container-fluid">
    <div class="row align-itens-center">
        <div class="col p-3">
            <!-- logo -->
            <a href="<?= site_url('/') ?>"> <img src="<?= base_url('assets/images/logo.png') ?>" alt="CBurguer Logo"></a>
        </div>
        <div class="col p-3 pe-5 d-flex flex-row justify-content-end">
            <div> <a class="nav-link ms-5" href="<?= site_url('/') ?>">Inicio</a>
            </div>
            <div> <a class="nav-link ms-5" href="<?= site_url('products') ?>">Produtos</a>
            </div>
            <div> <a class="nav-link ms-5" href="<?= site_url('where_are_we') ?>">Onde Estamos</a>
            </div>
        </div>
    </div>
 </nav>