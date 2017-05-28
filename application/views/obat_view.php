<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Obat</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <?php
        if ($this->session->flashdata('addobs')){
            ?>
            <div class="alert alert-success">
                <?php echo $this->session->flashdata('addobs');?>
            </div>
            <?php
        }elseif ($this->session->flashdata('delobs')) {
            # code...
            ?>
            <div class="alert alert-success">
                <?php echo $this->session->flashdata('delobs');?>
            </div>
            <?php
        }elseif ($this->session->flashdata('delobg')) {
            # code...
            ?>
            <div class="alert alert-danger">
                <?php echo $this->session->flashdata('delobg');?>
            </div>
            <?php
        }elseif($this->session->flashdata('editobg')){
            ?>
            <div class="alert alert-danger">
                <?php echo $this->session->flashdata('editobg');?>
            </div>
            <?php
        }elseif ($this->session->flashdata('editobs')) {
            # code...
            ?>
            <div class="alert alert-success">
                <?php echo $this->session->flashdata('editobs');?>
            </div>
            <?php
        }
        ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Tabel Obat
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                    	<div class="row">
                            <div class="col-lg-6" align="left">
                                <a href="<?php echo base_url('index.php/obat/addobat');?>" class="btn btn-primary"><i class="fa fa-plus fa-fw"></i> Tambah</a>
                            </div>
                        </div>
                        <br>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Id</th>
                                        <th>Foto</th>
                                        <th>Nama</th>
                                        <th>Harga</th>
                                        <th>Stock</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $no = 1;
                                    foreach ($obat as $view) {
                                        # code...
                                        if($this->session->userdata('status') == 'aktif'){
                                        	if ($view->STATUS == 'ada') {
                                        		# code...
                                ?>
		                                        <tr>
		                                            <td><?php echo $no;?></td>
		                                            <td><?php echo $view->ID_OBAT;?></td>
		                                            <td><img src="<?php echo base_url('assets/img/obat/').$view->FOTO_OBAT;?>" class="img-responsive" width="100px" height="150px"></td>
		                                            <td><a href="<?php echo base_url('index.php/obat/detilobat/').$view->ID_OBAT;?>"><?php echo $view->NAMA_OBAT;?></a></td>
		                                            <td><?php echo $view->HARGA_OBAT;?></td>
		                                            <td><?php echo $view->STOCK_OBAT;?></td>
		                                            <td><?php echo $view->STATUS;?></td>
		                                            <td>
		                                                <a href="<?php echo base_url('index.php/obat/editobat/').$view->ID_OBAT;?>" class="btn btn-primary btn-circle"><i class="fa fa-edit fa-fw"></i></a>

		                                                <a href="<?php echo base_url('index.php/obat/hapus/').$view->ID_OBAT;?>" class="btn btn-danger btn-circle"><i class="fa fa-trash fa-fw"></i></a>
		                                            </td>
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