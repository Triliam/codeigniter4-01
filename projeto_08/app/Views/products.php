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

 <!-- main -->
  <section class="container">
    <!-- burger 01 -->
    <div class="row mb-5 product-box">
        <div class="col-5 text-center">
            <img class="img-fluid" src="<?= base_url('assets/images/burger_01.png') ?>" alt="burguer 1">
        </div>
        <div class="col-7 p-5">
            <h1 class="mb-3 product-text-color">Burguer 1</h1>
            <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati cupiditate natus, eum dicta id ipsa voluptates sed quos neque minus nisi maxime modi veniam, aut nobis autem totam suscipit! Nemo.</p>
            <h2 class="mt-3 product-text-color">15,00</h2>
        </div>
    </div>

    <!-- burger 02 -->
     <div class="row mb-5 product-box">
        <div class="col-7 p-5">
            <h1 class="mb-3 product-text-color">Burguer 2</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore vitae delectus libero consequatur culpa? Velit, at voluptates? Sed veniam excepturi ab debitis odio aperiam quod fugiat quasi facere, inventore dolorum?</p>
            <h2 class="mt-3 product-text-color">15,00</h2>
        </div>
        <div class="col-5 text-center">
            <img class="img-fluid" src="<?= base_url('assets/images/burger_02.png') ?>" alt="burguer 2">
        </div>
     </div>
         <!-- burger 03 -->
    <div class="row mb-5 product-box">
        <div class="col-5 text-center">
            <img class="img-fluid" src="<?= base_url('assets/images/burger_03.png') ?>" alt="burguer 3">
        </div>
        <div class="col-7 p-5">
            <h1 class="mb-3 product-text-color">Burguer 3</h1>
            <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati cupiditate natus, eum dicta id ipsa voluptates sed quos neque minus nisi maxime modi veniam, aut nobis autem totam suscipit! Nemo.</p>
            <h2 class="mt-3 product-text-color">15,00</h2>
        </div>
    </div>

    <!-- burger 04 -->
     <div class="row mb-5 product-box">
        <div class="col-7 p-5">
            <h1 class="mb-3 product-text-color">Burguer 4</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore vitae delectus libero consequatur culpa? Velit, at voluptates? Sed veniam excepturi ab debitis odio aperiam quod fugiat quasi facere, inventore dolorum?</p>
            <h2 class="mt-3 product-text-color">15,00</h2>
        </div>
        <div class="col-5 text-center">
            <img class="img-fluid" src="<?= base_url('assets/images/burger_04.png') ?>" alt="burguer 4">
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