<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
  <div class="row">
    <div class="col">
      <a href="" class="btn btn-primary mt-4">Tambah Tahanan</a>
      <h1>Daftar Manusia</h1>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Muka</th>
      <th scope="col">Nama</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($manusia as $m) : ?>
    <tr>
      <th scope="row"><?= $m['id']; ?></th>
      <td><img class="benget" src="/img/<?= $m['benget']; ?>" alt=""></td>
      <td><?= $m['nama']; ?></td>
      <td><a href="/<?= $m['nama']; ?>" class="btn btn-success">Details</a></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>