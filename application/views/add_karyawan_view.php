<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Karyawan</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <?php
        if ($this->session->flashdata('addkarg')) {
            # code...
            ?>
            <div class="alert alert-danger">
                <?php echo $this->session->flashdata('addkarg');?>
            </div>
            <?php
        }elseif ($this->session->flashdata('addkars')){
            ?>
            <div class="alert alert-success">
                <?php echo $this->session->flashdata('addkars');?>
            </div>
            <?php
        }
        ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Tambah Karyawan
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form role="form" action="<?php echo base_url('index.php/karyawan/proses');?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input class="form-control" type="text" name="nama_karyawan">
                                    </div>
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <select name="jk_karyawan" class="form-control">
                                            <option value="">--- Pilih Jenis Kelamin ---</option>
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input class="form-control" type="date" name="ttl_karyawan">
                                    </div>
                                    <div class="form-group">
                                        <label>Role</label>
                                        <select name="role_karyawan" class="form-control">
                                            <option value="">--- Pilih Role Karyawan ---</option>
                                            <option value="superadmin">Super Admin</option>
                                            <option value="admin">Admin</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea class="form-control" name="alamat_karyawan"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Foto</label>
                                        <input type="file" name="foto_karyawan" class="form-control">
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