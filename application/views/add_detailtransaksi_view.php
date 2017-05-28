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
                                <form role="form" action="<?php echo base_url('index.php/transaksi/prosesdetil');?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Id Transaksi</label>
                                        <input class="form-control" type="number" name="id_transaksi" value="<?php echo $idtran;?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>NIP Karyawan</label>
                                        <input class="form-control" type="number" name="nip_karyawan" value="<?php echo $nip;?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal</label>
                                        <input class="form-control" type="text" name="tgl_beli" value="<?php echo $tglbeli;?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Pembeli</label>
                                        <input name="nama_pembeli" class="form-control" type="text" value="<?php echo $namapel;?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Obat</label>
                                        <select name="obat" class="form-control" readonly>
                                            <option value="<?php echo $idobat?>"><?php echo $namaobat;?></option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Jumlah Obat</label>
                                        <input class="form-control" type="number" name="jumlah_obat" value="<?php echo $jumlahbeli;?>" readonly>
                                    </div>
                                     <div class="form-group">
                                        <label>Harga per Obat</label>
                                        <input class="form-control" type="number" name="harga_obat" value="<?php echo $hargaobat;?>" readonly>
                                    </div>
                                     <div class="form-group">
                                        <label>Total Harga</label>
                                        <input class="form-control" type="number" name="total_harga" value="<?php echo $totalharga;?>" readonly>
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