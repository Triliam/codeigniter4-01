<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CBurguer</title>
     <link rel="shortcut icons" href="<?= base_url('assets/images/logo.png') ?>" type="image/png">
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/app.css') ?>">
    
</head>
<body>

<!-- nav -->
 <nav class="container-fluid">
    <div class="row align-itens-center">
        <div class="col p-3">
            <!-- logo -->
             <img src="<?= base_url('assets/images/logo.png') ?>" alt="CBurguer Logo">
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

 <!-- main -->

 <section class="container-fluid bg-color-02">
    <div class="row">
        <div class="col text-center p-5">
            <div class="mb-5">
                <img class="img-fluid" src="<?= base_url('assets/images/main_burger_01.png') ?>" alt="The best burguer in the world!">
            </div>
            <div class="text-center">
                <h3 class="mb-5">Deliciosos e com grandes descontos!</h3>
                <a class="btn-products" href="<?= site_url('/products') ?>">Produtos</a>
            </div>
        </div>
        <div class="col text-center p-5">
            <img class="img-fluid" src="<?= base_url('assets/images/main_burger_02.png') ?>" alt="The best burguer in the world!">
        </div>
    </div>
 </section>

 <!-- footer social networks -->

 <footer class="container-fluid mt-5">
    <div class="row justify-content-center">
        <div class="col-6 d-flex flex-row justify-content-center">
            <div class="text-center mx-4">
                <a href="#">
                    <img src="<?= base_url('assets/images/facebook.png') ?>" alt="Facebook">
                </a>
            </div>
            <div class="text-center mx-4">
                <a href="#">
                    <img src="<?= base_url('assets/images/instagram.png') ?>" alt="Instagram">
                </a>
            </div>
            <div class="text-center mx-4">
                <a href="#">
                    <img src="<?= base_url('assets/images/whatsapp.png') ?>" alt="WhatsApp">
                </a>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col text-center">
            <h6>Todos os direitos reservados &copy; <?= date('Y') ?></h6>
        </div>
    </div>
 </footer>

    <script src="<?= base_url('assets/bootstrap/bootstrap.bundle.min.js') ?>"></script>
</body>
</html>