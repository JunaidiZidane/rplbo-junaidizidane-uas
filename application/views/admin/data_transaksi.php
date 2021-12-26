<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Data Transaksi</h1>
    </div>

    <table class="table table-responsive table-bordered table-striped">
      <tr>
        <th>No</th>
        <th>Customer</th>
        <th>Mobil Pesanan</th>
        <th>Tgl. Pemesanan</th>
        <th>Tgl. Pembayaran</th>
        <th>Harga Mobil</th>
        <th>Status Pembayaran</th>
      </tr>

      <?php 
      $no = 1;
      foreach($transaksi as $tr): ?>
      <tr>
        <td><?= $no++; ?></td>
        <td><?= $tr->nama; ?></td>
        <td><?= $tr->merek; ?></td>
        <td><?= date('d/m/Y', strtotime($tr->tgl_pemesanan)); ?></td>
        <td><?= date('d/m/Y', strtotime($tr->tgl_pembayaran)); ?></td>
        <td>Rp.<?= number_format($tr->harga, 0,',','.'); ?>,-</td>
        
        <td>
          <?php if($tr->tgl_konfirmasi == "0000-00-00"){
            echo "Belum Selesai";
          }else{
            echo "Selesai";
          }?>
        </td>

      <?php endforeach; ?>
    </table>
  </section>
</div>