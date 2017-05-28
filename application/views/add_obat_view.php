<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Obat</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <?php
        if ($this->session->flashdata('addobg')) {
            # code...
            ?>
            <div class="alert alert-danger">
                <?php echo $this->session->flashdata('addobg');?>
            </div>
            <?php
        }elseif ($this->session->flashdata('addobs')){
            ?>
            <div class="alert alert-success">
                <?php echo $this->session->flashdata('addobs');?>
            </div>
            <?php
        }
        ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Tambah Obat
                    </div>
                    <div class="panel-body">
                        <div class="row">
                                <div class="col-lg-12">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#addob" data-toggle="tab" aria-expanded="true">Tambah Obat Baru</a>
                                        </li>
                                        <li class=""><a href="#addstock" data-toggle="tab" aria-expanded="false">Tambah Stock Obat</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade active in" id="addob">
                                            <form role="form" action="<?php echo base_url('index.php/obat/proses');?>" method="post" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <label>Nama Obat</label>
                                                    <input class="form-control" type="text" name="nama_obat">
                                                </div>
                                                <div class="form-group">
                                                    <label>Suplier</label>
                                                    <select name="suplier" class="form-control">
                                                        <option value="">--- Pilih Suplier ---</option>
                                                        <?php
                                                        foreach ($suplier as $supl) {
                                                            # code...
                                                            if ($supl->STATUS_SUPLIER == 'aktif') {
                                                                # code...
                                                        ?>
                                                                <option value="<?php echo $supl->ID_SUPLIER;?>"><?php echo $supl->NAMA_SUPLIER;?></option>
                                                        <?php
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Produsen</label>
                                                    <input class="form-control" type="text" name="produsen_obat">
                                                </div>
                                                <div class="form-group">
                                                    <label>Harga</label>
                                                    <input class="form-control" type="number" name="harga_obat">
                                                </div>
                                                <div class="form-group">
                                                    <label>Stock</label>
                                                    <input class="form-control" type="number" name="stock_obat">
                                                </div>
                                                <div class="form-group">
                                                    <label>Foto</label>
                                                    <input type="file" name="foto_obat" class="form-control">
                                                </div>
                                                <input type="submit" class="btn btn-primary" name="submit">
                                            </form>
                                        </div>
                                        <div class="tab-pane" id="addstock">
                                            <form role="form" action="<?php echo base_url('index.php/obat/prosesstock');?>" method="post" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <label>Nama</label>
                                                    <select name="obat" class="form-control">
                                                        <option value="">--- Pilih Obat ---</option>
                                                        <?php
                                                        foreach ($obat as $ob) {
                                                            # code...
                                                            if ($ob->STATUS == 'ada') {
                                                                # code...
                                                        ?>
                                                                <option value="<?php echo $ob->ID_OBAT;?>"><?php echo $ob->NAMA_OBAT;?></option>
                                                        <?php
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Stock</label>
                                                    <input class="form-control" type="number" name="stock_obat">
                                                </div>
                                                <input type="submit" class="btn btn-primary" name="submit">
                                            </form>
                                        </div>
                                </div>
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