<?php
foreach ($home as $h => $row) {
    $jml = $row->jumlah;
    $total_masuk = $total_masuk + $jml;

    $jml_out = $row->keluar;
    $total_keluar = $total_keluar + $jml_out;

    $total = $total_masuk - $total_keluar;
}
?>
<marquee><?= $pesan1; ?></marquee>
<div class="row">
    <div class="col-lg-12">
        <h2><?= $pesan2; ?></h2>
        <h5><?= $pesan3; ?></h5>
    </div>
</div>
<!-- /. ROW  -->
<hr />
<div class="row">
    <div class="col-lg-4 col-md-4 col-sm-6">           
        <div class="panel panel-back noti-box">
            <span class="icon-box bg-color-green set-icon">
                <i class="glyphicon glyphicon-floppy-save"></i>
            </span>
            <div class="text-box">
                <p class="main-text">Rp. <?= number_format($total_masuk); ?>,-</p>
                <p class="text-muted">Total Kas Masuk</p>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6">           
        <div class="panel panel-back noti-box">
            <span class="icon-box bg-color-red set-icon">
                <i class="glyphicon glyphicon-floppy-open"></i>
            </span>
            <div class="text-box">
                <p class="main-text">Rp. <?= number_format($total_keluar); ?>,-</p>
                <p class="text-muted">Total Kas Keluar</p>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6">           
        <div class="panel panel-back noti-box">
            <span class="icon-box bg-color-blue set-icon">
                <i class="glyphicon glyphicon-floppy-disk"></i>
            </span>
            <div class="text-box">
                <p class="main-text">Rp. <?= number_format($total); ?>,-</p>
                <p class="text-muted">Saldo Akhir</p>
            </div>
        </div>
    </div>
</div>
