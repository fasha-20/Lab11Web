<?= $this->include('template/admin_header'); ?>
<link rel="stylesheet" href="<?= base_url('/style.css'); ?>">
<form method="get" class="form-search"> 
  <input type="text" name="baru" value="<?= $baru; ?>" placeholder="Cari data"> 
  <input type="submit" value="Cari" class="btn btn-primary"> 
</form>
<table class="table">
  
  <thead>
    <tr>
      <th>ID</th>
      <th>Judul</th>
      <th>Status</th>
      <th>AKsi</th>
    </tr>
  </thead>
  <tbody>
    <?php if ($artikel) :
      $n = 1;
      foreach ($artikel as $row) : ?>
        <tr>
          <td><?= $n++; ?></td>
          <td> <b><?= $row['judul']; ?></b>
            <p><small><?= substr($row['isi'], 0, 50); ?></small></p>
          </td>
          <td><?= $row['status']; ?></td>
          <td>
            <a class="btn" href="<?= base_url('/admin/artikel/edit/' . $row['id']); ?>">Ubah</a>
            <a class="btn btn-danger" onclick="return confirm('Yakin menghapus data?');" href="<?= base_url('/admin/artikel/delete/' . $row['id']); ?>">Hapus</a>
          </td>
        </tr>
      <?php endforeach;
    else : ?> <tr>
        <td colspan="4">Belum ada data.</td>
      </tr>
    <?php endif; ?>
  </tbody>
  <tfoot>
    <tr>
      <th>ID</th>
      <th>Judul</th>
      <th>Status</th>
      <th>AKsi</th>
    </tr>
  </tfoot>
</table>
<div class="baru">
  <?= $pager->links(); ?>
</div>
<?= $this->include('template/admin_footer'); ?>