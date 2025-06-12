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
  <section class="container product-box py-5">
    <div class="row">
        <div class="col-5 text-center">
            <img class="img-fluid" src="<?= base_url('assets/images/room.jpg') ?>" alt="Our room">
        </div>
        <div class="col-6">
            <p class="where-are-we-title mb-0">CBurger China</p>
            <p class="where-are-we-subtitle">diusahdusaudsa</p>
            <p class="mb-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit, odit sunt. Mollitia non cum placeat ipsa id distinctio harum pariatur, exercitationem dolor quia, repellat ea quae, porro iusto et expedita?</p>
            <div class="d-flex align-items-center mb-3">
                <img src="<?= base_url('assets/images/icon_phone.png') ?>" alt="phone">
                <p class="where-are-we-subtitle ms-3"><a class="nav-link" href="tel:+331123456789">+331123456789</a></p>
            </div>
             <div class="d-flex align-items-center mb-3">
                <img src="<?= base_url('assets/images/icon_email.png') ?>" alt="email">
                <p class="where-are-we-subtitle ms-3"><a class="nav-link" href="mailto:cburger@china.com">cburger@china.com</a></p>
            </div>
        </div>
    </div>
  </section>

  <!-- map -->
   <section class="container product-box py-5">
    <div class="row">
        <div class="row text-center">
            <img src="<?= base_url('assets/images/map.jpg') ?>" alt="Map">

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