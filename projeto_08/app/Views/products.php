 <!-- main products -->

<?= $this->extend('layouts/main_layout') ?>

<?= $this->section('content') ?>
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
<?= $this->endSection() ?>