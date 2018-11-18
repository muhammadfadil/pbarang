<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <script type="text/javascript"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Peminjaman Barang</title>
    <meta name="description" content="Peminjaman Barang - Balai Monitoring Spektrum Frekuensi Radio Kelas II Lampung">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="<?php echo base_url('assets/images/logosc.png')?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/normalize.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/themify-icons.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/flag-icon.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/cs-skin-elastic.css')?>">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="<?php echo base_url('assets/scss/style.css')?>">
    <link href="<?php echo base_url('assets/css/lib/vector-map/jqvmap.min.css')?>" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-datepicker3.css')?>"/>

</head>

<body>


        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand"><img src="<?php echo base_url('assets/images/Kemkominfo.png');?>" alt="Logo"></a>
                <a class="navbar-brand hidden" ><img src="<?php echo base_url('assets/images/logo2kom.png');?>" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                
                <ul class="nav navbar-nav">
                    <h3 class="menu-title">Menu</h3><!-- /.menu-title -->
                    <li>
                        <a href="<?php echo site_url('Admin/index')?>"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('Crudbarang/kebarang')?>"> <i class="menu-icon fa fa-tasks"></i>Daftar Barang</a>
                    </li>
                    <li class="active">
                        <a href="<?php echo site_url('Crudpinjambarang/kepinjambarang')?>"> <i class="menu-icon fa fa-file-o"></i>Form Peminjaman</a>
                    </li>
					<li>
                        <a href="<?php echo site_url('Laporanbarang/kelaporan')?>"> <i class="menu-icon fa fa-print"></i>Laporan Peminjaman</a>
                    </li>
					<li>
						<a href="<?php echo site_url('Login/keluar')?>"> <i class="menu-icon fa fa fa-sign-out"></i>	Logout</a>
					</li>
                    
					</li>
                </ul>
            </div>
        </nav>
    </aside>






    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-plus"></i></a>
                    <div class="header-left"> 
                    <h3>Dashboard</h3>
                    </div>    
				</div>
			</div>
        </header><!-- /header -->
        <!-- Header-->
		<div class="container">
			<div class="card">
                      <div class="card-header">
                        <strong>Form Peminjaman</strong>
                      </div>
                      <div class="card-body card-block">
					  <div class="bootstrap-iso">
                        <form action="<?php echo site_url('crudpinjambarang/cek'); ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nomor SPT</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="nospt" name="nospt" placeholder="Nomor Surat Perintah Tugas" class="form-control"></div>
                          </div>
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="tanggal" class=" form-control-label">Tanggal</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="tanggal" name="tanggal" placeholder="yyyy-mm-dd" class="tanggal"></div>
                          </div>
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama 1</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="nama1" name="nama1" placeholder="Ketua Pelaksana" class="form-control"></div>
                          </div>
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama 2</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="nama2" name="nama2" placeholder="Wakil Ketua Pelaksana" class="form-control"></div>
                          </div>
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama 3</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="nama3" name="nama3" placeholder="Petugas" class="form-control"></div>
                          </div>						 
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Barang</label></div>
                            <div class="col-12 col-md-9">
                              <select name="select" id="select" class="form-control">
                                <?php foreach($tb_barang as $row) { ?>
								<option value="<?php echo $row->id_barang ?>"><?php echo $row->nama_barang ?></option>
								<?php } ?>
                              </select>
                            </div>
                          </div>
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Unit</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="unit" name="unit" placeholder="Unit" class="form-control"></div>
                          </div>
						  <div class="row form-group">
						    <div class="col col-md-3"></div>
							<div class="col-12 col-md-9">
							<button type="submit" class="btn btn-primary btn-sm">
							<i class="fa fa-plus"></i> Tambah
							</button>
							</div>
						  </div>						  
					  <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Barang Pilihan</strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Merk/Type</th>
                        <th>No Seri</th>
                        <th>Kondisi Barang</th>
                        <th>Unit</th>
						<th>Action</th>
                        </tr>						
                    </thead>
                    <tbody>
						<?php 
						foreach($view_detail as $br){ 
						?>
						<tr>
                       
						<td><?php echo $br->kode_barang ?></td>
						<td><?php echo $br->nama_barang ?></td>
						<td><?php echo $br->merk ?></td>
						<td><?php echo $br->no_seri ?></td>
						<td><?php echo $br->kondisi_barang ?></td>
						<td><?php echo $br->unit ?></td>
                        <td>                                
                            <a class="btn btn-danger btn-sm"  data-toggle="modal" data-target="#staticModal<?php echo $br->id_barang; ?>" class="btn btn-small"><i class="fa fa-trash-o"></i>Hapus</a>
						</td>
						</tr>
						<?php } ?>
                    </tbody>
                </table>
						</div>
					</div>
				</div>
				</div>
			</div>
		</div>
					</form>
					<div class="card-footer">
                        <button class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Selesai
                        </button>
                        <button class="btn btn-danger btn-sm"  data-toggle="modal" data-target="#staticModal" class="btn btn-small">
                          <i class="fa fa-ban"></i> Batal
                        </button>
                     </div>
					</div>
					</div>
			</div>
		</div>
   </div>
						<div class="modal fade" id="staticModal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true" data-backdrop="static">
							<div class="modal-dialog modal-sm" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="staticModalLabel">Konfirmasi Batal</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<p>
										Yakin ingin membatalkan proses ini?
										</p>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
										<a type="button" class="btn btn-primary" href="<?php echo site_url('crudpinjambarang/kepinjambarang'); ?>">Ya, Batal</a>
									</div>
								</div>
							</div>
						</div>
    <script src="<?php echo base_url('assets/js/vendor/jquery-2.1.4.min.js');?>"</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="<?php echo base_url('assets/js/plugins.js');?>"></script>
    <script src="<?php echo base_url('assets/js/main.js');?>"></script>
    <script src="<?php echo base_url('assets/js/lib/chart-js/Chart.bundle.js');?>"></script>
    <script src="<?php echo base_url('assets/js/dashboard.js');?>"></script>
    <script src="<?php echo base_url('assets/js/widgets.js')?>"></script>
    <script src="<?php echo base_url('assets/js/lib/vector-map/jquery.vmap.js');?>"></script>
    <script src="<?php echo base_url('assets/js/lib/vector-map/jquery.vmap.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/lib/vector-map/jquery.vmap.sampledata.js');?>"></script>
    <script src="<?php echo base_url('assets/js/lib/vector-map/country/jquery.vmap.world.js');?>"></script>
    <script>
        ( function ( $ ) {
            "use strict";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
    </script>
	<script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js');?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.js');?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap-datepicker.js');?>"></script>
    <script>
        $(document).ready(function () {
            $('.tanggal').datepicker({
                format: "yyyy-mm-dd",
                autoclose:true
            });
        });
    </script>

</body>

</html>
