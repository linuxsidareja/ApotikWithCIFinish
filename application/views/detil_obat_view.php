<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Obat</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Detail Obat
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-8">
                                <form role="form">
                                    <div class="form-group">
                                        <label>ID</label>
                                        <input class="form-control" disabled value="<?php echo $obat->ID_OBAT;?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input class="form-control" disabled value="<?php echo $obat->NAMA_OBAT;?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Produsen</label>
                                        <input class="form-control" disabled value="<?php echo $obat->PRODUSEN_OBAT;?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Harga</label>
                                        <input class="form-control" disabled value="<?php echo $obat->HARGA_OBAT;?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Stock</label>
                                        <input class="form-control" disabled value="<?php echo $obat->STOCK_OBAT;?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Status</label>
                                        <input class="form-control" disabled value="<?php echo $obat->STATUS;?>">
                                    </div>
                                    <a href="<?php echo base_url('index.php/obat');?>" class="btn btn-primary">Kembali</a>
                                </form>
                            </div>
                            <div class="col-lg-4">
                                <img src="<?php echo base_url('assets/img/obat/').$obat->FOTO_OBAT;?>" class="img-responsive">
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