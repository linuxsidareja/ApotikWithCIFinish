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
                        Detail Transaksi
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form role="form">
                                    <div class="form-group">
                                        <label>ID</label>
                                        <input class="form-control" disabled value="<?php echo $transaksi->ID_TRANSAKSI;?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Pembeli</label>
                                        <input class="form-control" disabled value="<?php echo $transaksi->NAMA_PEMBELI;?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Pembelian</label>
                                        <input class="form-control" disabled value="<?php echo $transaksi->TGL_BELI;?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Obat</label>
                                        <input class="form-control" disabled value="<?php echo $transaksi->NAM_OBAT;?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Harga Per-Item</label>
                                        <input class="form-control" disabled value="<?php echo $transaksi->HARGA_PEROBAT;?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Jumlah Pembelian</label>
                                        <input class="form-control" disabled value="<?php echo $transaksi->JUMLAH_PEMBELIAN;?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Total Harga</label>
                                        <input class="form-control" disabled value="<?php echo $transaksi->TOTAL_HARGA;?>">
                                    </div>
                                    <a href="<?php echo base_url('index.php/transaksi');?>" class="btn btn-primary">Kembali</a>
                                </form>
                            </div>
                            <!-- /.col-lg-6 (nested) -->
                        </div>
                        <!-- /.row (nested) -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
    </div>
</div>