 <!-- main where_are_we-->

<?= $this->extend('layouts/main_layout') ?>

<?= $this->section('content') ?>
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
<?= $this->endSection() ?>