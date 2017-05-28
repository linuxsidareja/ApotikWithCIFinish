<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Suplier</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <?php
        if ($this->session->flashdata('addsups')){
            ?>
            <div class="alert alert-success">
                <?php echo $this->session->flashdata('addsups');?>
            </div>
            <?php
        }elseif($this->session->flashdata('editsupg')){
            ?>
            <div class="alert alert-danger">
                <?php echo $this->session->flashdata('editsupg');?>
            </div>
            <?php
        }elseif ($this->session->flashdata('editsups')) {
            # code...
            ?>
            <div class="alert alert-success">
                <?php echo $this->session->flashdata('editsups');?>
            </div>
            <?php
        }elseif ($this->session->flashdata('delsups')) {
            # code...
            ?>
            <div class="alert alert-success">
                <?php echo $this->session->flashdata('delsups');?>
            </div>
            <?php
        }elseif($this->session->flashdata('delsupg')){
            ?>
            <div class="alert alert-danger">
                <?php echo $this->session->flashdata('delsupg');?>
            </div>
            <?php
        }
        ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Tabel Suplier
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                    	<div class="row">
                            <div class="col-lg-6" align="left">
                                <a href="<?php echo base_url('index.php/suplier/addsuplier');?>" class="btn btn-primary"><i class="fa fa-plus fa-fw"></i> Tambah</a>
                            </div>
                        </div>
                        <br>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>Telp</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $no = 1;
                                    foreach ($suplier as $view) {
                                        # code...
                                        if ($view->STATUS_SUPLIER == 'aktif') {
                                        	# code...
                                ?>
	                                    <tr>
	                                        <td><?php echo $no;?></td>
	                                        <td><?php echo $view->ID_SUPLIER;?></td>
	                                        <td><a href="<?php echo base_url('index.php/suplier/detilsuplier/').$view->ID_SUPLIER;?>"><?php echo $view->NAMA_SUPLIER;?></a></td>
	                                        <td><?php echo $view->TELP_SUPLIER;?></td>
	                                        <td>
	                                        	<a href="<?php echo base_url('index.php/suplier/editsuplier/').$view->ID_SUPLIER;?>" class="btn btn-primary btn-circle"><i class="fa fa-edit fa-fw"></i></a>

	                                        	<a href="<?php echo base_url('index.php/suplier/hapus/').$view->ID_SUPLIER;?>" class="btn btn-danger btn-circle"><i class="fa fa-trash fa-fw"></i></a>
	                                        </td>
	                                    </tr>
                                <?php
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