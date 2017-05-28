<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Transaksi</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <?php
        if ($this->session->flashdata('addtrang')) {
            # code...
            ?>
            <div class="alert alert-danger">
                <?php echo $this->session->flashdata('addtrang');?>
            </div>
            <?php
        }elseif ($this->session->flashdata('addtrans')){
            ?>
            <div class="alert alert-success">
                <?php echo $this->session->flashdata('addtrans');?>
            </div>
            <?php
        }
        ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Tambah Transaksi
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form role="form" action="<?php echo base_url('index.php/transaksi/proses');?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Tanggal</label>
                                        <input class="form-control" type="text" name="tgl_beli" value="<?php echo date('Y-m-d');?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Pembeli</label>
                                        <input class="form-control" type="text" name="nama_pembeli">
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Obat</label>
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
                                        <label>Jumlah Obat</label>
                                        <input class="form-control" type="number" name="jumlah_obat">
                                    </div>
                                    <input type="submit" class="btn btn-primary" name="submit">
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