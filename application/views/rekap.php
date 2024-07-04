<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             <?= $header; ?>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode</th>
                                            <th>Tanggal</th>
                                            <th>Keterangan</th>
                                            <th>Masuk</th>
                                            <th>Jenis</th>
                                            <th>Keluar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php 
                                    	foreach ($rekap as $r => $row) {
                                    	 ?>
                                        <tr class="odd gradeX">
                                        	<td><?= $no++; ?></td>
                                            <td><?= $row->kode; ?></td>
            								<td><?= date('d F Y', strtotime($row->tgl)); ?></td>
            								<td><?= $row->keterangan; ?></td>
            								<td align="right"><?= number_format($row->jumlah).",-"; ?></td>
            								<td><?= $row->jenis; ?></td>
            								<td align="right"><?= number_format($row->keluar).",-"; ?></td>
                                        </tr>
                                        <?php 
                                        	$total = $total+$row->jumlah;
                                        	$total_keluar=$total_keluar+$row->keluar;

                                        	$saldo_akhir = $total-$total_keluar;
                                    	}
                                    	 ?>
                                    </tbody>
	                                    <tr>
	                                    	<td colspan="5"><strong>Total Kas Masuk</strong></td>
	                                    	<td align="right" colspan="2"><strong><?= "Rp." .  number_format($total).",-"; ?></strong></td>	
	                                    </tr>

	                                    <tr>
	                                    	<td colspan="5"><strong>Total Kas Keluar</strong></td>
	                                    	<td align="right" colspan="2"><strong><?= "Rp." .  number_format($total_keluar).",-"; ?></strong></td>	
	                                    </tr>

	                                    <tr>
	                                    	<td colspan="5"><strong>Saldo Akhir</strong></td>
	                                    	<td align="right" colspan="2"><strong><?= "Rp." .  number_format($saldo_akhir).",-"; ?></strong></td>	
	                                    </tr>
                                </table>
                            </div>