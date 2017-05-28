<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Obat</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <?php
        if($this->session->flashdata('editobg')){
            ?>
            <div class="alert alert-danger">
                <?php echo $this->session->flashdata('editobg');?>
            </div>
            <?php
        }
        ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Edit Obat
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form role="form" action="<?php echo base_url('index.php/obat/prosesedit');?>" method="post">
                                    <div class="form-group">
                                        <label>ID Obat</label>
                                        <input type="number" class="form-control" name="id_obat" value="<?php echo $obat->ID_OBAT;?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Obat</label>
                                        <input class="form-control" name="nama_obat" value="<?php echo $obat->NAMA_OBAT;?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Harga</label>
                                        <input type="number" class="form-control" name="harga_obat" value="<?php echo $obat->HARGA_OBAT;?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Produsen</label>
                                        <input class="form-control" name="produsen_obat" value="<?php echo $obat->PRODUSEN_OBAT;?>">
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