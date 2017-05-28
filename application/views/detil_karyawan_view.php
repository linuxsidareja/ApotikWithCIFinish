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
                        Detail Karyawan
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-8">
                                <form role="form">
                                    <div class="form-group">
                                        <label>NIP</label>
                                        <input class="form-control" disabled value="<?php echo $karyawan->NIP_KARYAWAN;?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input class="form-control" disabled value="<?php echo $karyawan->USERNAME;?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input class="form-control" disabled value="<?php echo $karyawan->PASSWORD;?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input class="form-control" disabled value="<?php echo $karyawan->NAMA_KARYAWAN;?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <input class="form-control" disabled value="<?php echo $karyawan->JK_KARYAWAN;?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input class="form-control" disabled value="<?php echo $karyawan->TTL_KARYAWAN;?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Status</label>
                                        <input class="form-control" disabled value="<?php echo $karyawan->STATUS_KARYAWAN;?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Role</label>
                                        <input class="form-control" disabled value="<?php echo $karyawan->ROLE_KARYAWAN;?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea class="form-control" disabled><?php echo $karyawan->ALAMAT_KARYAWAN;?></textarea>
                                    </div>
                                    <a href="<?php echo base_url('index.php/karyawan');?>" class="btn btn-primary">Kembali</a>
                                </form>
                            </div>
                            <!-- /.col-lg-6 (nested) -->
                            <div class="col-lg-4">
                                <img src="<?php echo base_url('assets/img/karyawan/').$karyawan->FOTO_KARYAWAN;?>" class="img-responsive">
                            </div>
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