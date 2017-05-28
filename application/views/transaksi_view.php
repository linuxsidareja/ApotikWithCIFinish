<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Transaksi</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Tabel Transaksi
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
	                    <div class="row">
	                        <div class="col-lg-6" align="left">
	                            <a href="<?php echo base_url('index.php/transaksi/addtransaksi');?>" class="btn btn-primary"><i class="fa fa-plus fa-fw"></i> Transaksi Baru</a>
	                        </div>
	                    </div>
	                    <br>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Pembeli</th>
                                        <th>Tanggal Pembelian</th>
                                        <th>Nama Obat</th>
                                        <th>Jumlah Obat</th>
                                        <th>Total Harga</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $no = 1;
                                    foreach ($transaksi as $view) {
                                        # code...
                                        if($this->session->userdata('status') == 'aktif'){
                                ?>
                                        <tr>
                                            <td><?php echo $no;?></td>
                                            <td><?php echo $view->NAMA_PEMBELI;?></td>
                                            <td><?php echo $view->TGL_BELI;?></td>
                                            <td><?php echo $view->NAM_OBAT;?></td>
                                            <td><?php echo $view->JUMLAH_PEMBELIAN;?></td>
                                            <td><?php echo $view->TOTAL_HARGA;?></td>
                                            <td>
                                            	<a href="<?php echo base_url('index.php/transaksi/detiltransaksi/').$view->ID_TRANSAKSI;?>" class="btn btn-info btn-circle"><i class="fa fa-search fa-fw"></i></a>
                                            </td>
                                        </tr>
                                <?php
                                        }
                                        $no++;
                                    }
                                ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-6 -->
        </div>
    </div>
</div>