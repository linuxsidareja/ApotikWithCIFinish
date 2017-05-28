<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Karyawan</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Tambah Karyawan
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form role="form" action="<?php echo base_url('index.php/karyawan/prosesaccount');?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>NIP</label>
                                        <input class="form-control" type="number" name="nip_karyawan" readonly value="<?php echo $nip->NIP_KARYAWAN;?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input class="form-control" type="text" name="username_karyawan">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input class="form-control" type="text" name="password_karyawan">
                                    </div>
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input class="form-control" type="text" name="nama_karyawan" readonly value="<?php echo $nama;?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <select name="jk_karyawan" class="form-control" readonly>
                                            <option value=""><?php echo $jk;?></option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input class="form-control" type="text" name="ttl_karyawan" readonly value="<?php echo $ttl;?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Role</label>
                                        <select name="role_karyawan" class="form-control" readonly>
                                            <option value=""><?php echo $role;?></option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea class="form-control" name="alamat_karyawan" readonly><?php echo $alamat;?></textarea>
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