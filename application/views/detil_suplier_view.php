<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Suplier</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Detail Suplier
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form role="form">
                                    <div class="form-group">
                                        <label>ID</label>
                                        <input class="form-control" disabled value="<?php echo $suplier->ID_SUPLIER;?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input class="form-control" disabled value="<?php echo $suplier->NAMA_SUPLIER;?>">
                                    </div>
                                    <div class="form-group">
                                        <label>No. Telp</label>
                                        <input class="form-control" disabled value="<?php echo $suplier->TELP_SUPLIER;?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Kota</label>
                                        <input class="form-control" disabled value="<?php echo $suplier->KOTA_SUPLIER;?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea class="form-control" disabled><?php echo $suplier->ALAMAT_SUPLIER;?></textarea>
                                    </div>
                                    <a href="<?php echo base_url('index.php/suplier');?>" class="btn btn-primary">Kembali</a>
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