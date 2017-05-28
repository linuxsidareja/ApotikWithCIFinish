<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Karyawan</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <?php
        if ($this->session->flashdata('addkars')){
            ?>
            <div class="alert alert-success">
                <?php echo $this->session->flashdata('addkars');?>
            </div>
            <?php
        }elseif ($this->session->flashdata('delkars')) {
            # code...
            ?>
            <div class="alert alert-success">
                <?php echo $this->session->flashdata('delkars');?>
            </div>
            <?php
        }elseif ($this->session->flashdata('delkarg')) {
            # code...
            ?>
            <div class="alert alert-danger">
                <?php echo $this->session->flashdata('delkarg');?>
            </div>
            <?php
        }elseif($this->session->flashdata('editkarg')){
            ?>
            <div class="alert alert-danger">
                <?php echo $this->session->flashdata('editkarg');?>
            </div>
            <?php
        }elseif ($this->session->flashdata('editkars')) {
            # code...
            ?>
            <div class="alert alert-success">
                <?php echo $this->session->flashdata('editkars');?>
            </div>
            <?php
        }
        ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Tabel Karyawan
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <?php
                        if($this->session->userdata('role') == 'superadmin'){
                        ?>
                            <div class="row">
                                <div class="col-lg-6" align="left">
                                    <a href="<?php echo base_url('index.php/karyawan/addkaryawan');?>" class="btn btn-primary"><i class="fa fa-plus fa-fw"></i> Tambah</a>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                        <br>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>NIP</th>
                                        <th>Foto</th>
                                        <th>Nama</th>
                                        <th>Role</th>
                                        <th>Jenis Kelamin</th>
                                        <?php
                                        if($this->session->userdata('role') == 'superadmin'){
                                        ?>
                                        <th>Action</th>
                                        <?php
                                        }   
                                        ?>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $no = 1;
                                    foreach ($karyawan as $view) {
                                        # code...
                                        if($this->session->userdata('status') == 'aktif'){
                                            if($view->STATUS_KARYAWAN == 'aktif'){
                                ?>
                                            <tr>
                                                <td><?php echo $no;?></td>
                                                <td><?php echo $view->NIP_KARYAWAN;?></td>
                                                <td><img src="<?php echo base_url('assets/img/karyawan/').$view->FOTO_KARYAWAN;?>" class="img-responsive" width="100px" height="150px"></td>
                                                <td><a href="<?php echo base_url('index.php/karyawan/detilkaryawan/').$view->NIP_KARYAWAN;?>"><?php echo $view->NAMA_KARYAWAN;?></a></td>
                                                <td><?php echo $view->ROLE_KARYAWAN;?></td>
                                                <td><?php echo $view->JK_KARYAWAN;?></td>
                                                <?php
                                                if($this->session->userdata('role') == 'superadmin'){
                                                ?>
                                                <td>
                                                    <a href="<?php echo base_url('index.php/karyawan/editkaryawan/').$view->NIP_KARYAWAN;?>" class="btn btn-primary btn-circle"><i class="fa fa-edit fa-fw"></i></a>

                                                    <a href="<?php echo base_url('index.php/karyawan/hapus/').$view->NIP_KARYAWAN;?>" class="btn btn-danger btn-circle"><i class="fa fa-trash fa-fw"></i></a>
                                                </td>
                                                <?php
                                                }
                                                ?>
                                            </tr>
                                <?php
                                            }
                                        }
                                        $no++;
                                    }
                                ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-6 -->
        </div>
    </div>
</div>