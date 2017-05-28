<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Karyawan</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <?php
        if($this->session->flashdata('editkarg')){
            ?>
            <div class="alert alert-danger">
                <?php echo $this->session->flashdata('editkarg');?>
            </div>
            <?php
        }
        ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Edit Karyawan
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form role="form" action="<?php echo base_url('index.php/karyawan/prosesedit');?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>NIP</label>
                                        <input class="form-control" type="number" name="nip_karyawan" readonly value="<?php echo $karyawan->NIP_KARYAWAN;?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input class="form-control" type="text" name="nama_karyawan" value="<?php echo $karyawan->NAMA_KARYAWAN;?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <?php
                                        if ($karyawan->JK_KARYAWAN == 'Laki-laki') {
                                            # code...
                                            ?>
                                            <select name="jk_karyawan" class="form-control">
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                            <?php
                                        } else {
                                            # code...
                                            ?>
                                            <select name="jk_karyawan" class="form-control">
                                                <option value="Perempuan">Perempuan</option>
                                                <option value="Laki-laki">Laki-laki</option>
                                            </select>
                                            <?php
                                        }
                                        
                                        ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input class="form-control" type="text" name="ttl_karyawan" value="<?php echo $karyawan->TTL_KARYAWAN;?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Role</label>
                                        <?php
                                        if ($karyawan->ROLE_KARYAWAN == 'superadmin') {
                                            # code...
                                            ?>
                                            <select name="role_karyawan" class="form-control">
                                                <option value="superadmin">Super Admin</option>
                                                <option value="admin">Admin</option>
                                            </select>
                                            <?php
                                        } else {
                                            # code...
                                            ?>
                                            <select name="role_karyawan" class="form-control">
                                                <option value="admin">Admin</option>
                                                <option value="superadmin">Super Admin</option>
                                            </select>
                                            <?php
                                        }
                                        
                                        ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea class="form-control" name="alamat_karyawan"><?php echo $karyawan->ALAMAT_KARYAWAN;?></textarea>
                                    </div>
                                    <input type="submit" class="btn btn-primary" name="submit">
                                    <a href="<?php echo base_url('index.php/karyawan');?>" class="btn btn-primary">Kembali</a>
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