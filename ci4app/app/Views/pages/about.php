<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<div class="container mt-4">
  <div class="row">
    <div class="col">
      <h2>About Me.</h2>
      <p>Hallo,Perkenalkan Saya <?= $nama ?>, dan Saya berumur <?= $umur ?> Tahun.</p>
      <br><br>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet nostrum accusantium expedita
        quaerat fugiat similique maiores incidunt eos consectetur.
        Reiciendis aliquam animi dolores necessitatibus dignissimos hic nulla architecto ab nisi..</p>
    </div>
  </div>
</div>
<?= $this->endSection() ?>