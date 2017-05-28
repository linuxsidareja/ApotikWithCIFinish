<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Suplier</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <?php
        if($this->session->flashdata('editsupg')){
            ?>
            <div class="alert alert-danger">
                <?php echo $this->session->flashdata('editsupg');?>
            </div>
            <?php
        }
        ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Edit Suplier
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form role="form" action="<?php echo base_url('index.php/suplier/prosesedit');?>" method="post">
                                    <div class="form-group">
                                        <label>ID</label>
                                        <input class="form-control" name="id_suplier" value="<?php echo $suplier->ID_SUPLIER;?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input class="form-control" name="nama_suplier" value="<?php echo $suplier->NAMA_SUPLIER;?>">
                                    </div>
                                    <div class="form-group">
                                        <label>No. Telp</label>
                                        <input type="number" class="form-control" name="telp_suplier" value="<?php echo $suplier->TELP_SUPLIER;?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Kota</label>
                                        <input class="form-control" name="kota_suplier" value="<?php echo $suplier->KOTA_SUPLIER;?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea class="form-control" name="alamat_suplier"><?php echo $suplier->ALAMAT_SUPLIER;?></textarea>
                                    </div>
                                    <input type="submit" class="btn btn-primary" name="submit">
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