<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lihat Pegawai</title>
	<link href="<?php echo base_url("assets/css/bootstrap.min.css")?>"  rel="stylesheet">
	<link href="<?php echo base_url("assets/css/font-awesome.min.css")?>" rel="stylesheet">
	<link href="<?php echo base_url("assets/css/datepicker3.css")?>" rel="stylesheet">
	<link href="<?php echo base_url("assets/css/styles.css")?>" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
					<img src="<?php echo base_url("assets/img/cms.png")?>" alt="logo"style="width:100px;height:50px;"> 
					<ul class="nav navbar-top-links navbar-right"></ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><?php echo $this->session->userdata('username');?></div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		
		<ul class="nav menu">
		<?php if($this->session->userdata('role')==='1'):?>
			<li><a href='<?php echo site_url('admin')?>'><em class='fa fa-home'>&nbsp;</em> Home</a></li>
			<li><a href='<?php echo site_url('admin/absensi')?>'><em class='fa fa-calendar'>&nbsp;</em> Absensi</a></li>
			<li class="active"><a href='<?php echo site_url('admin/lihatpegawai')?>'><em class='fa fa-user'>&nbsp;</em> Lihat pegawai</a></li>
			<li><a href='<?php echo site_url('admin/gajipegawai')?>'><em class='fa fa-usd'>&nbsp;</em> Gaji Pegawai</a></li>
			<li><a href='<?php echo site_url('admin/halamanlembur')?>'><em class='fa fa-align-left'>&nbsp;</em> Lembur/Tunjangan</a></li>
			<li><a href="<?php echo site_url('login/logout');?>"><em class="fa fa-sign-out">&nbsp;</em> Logout</a></li>
		<?php else:?>	
			<li><a href="<?php echo site_url('login/logout');?>"><em class="fa fa-sign-out">&nbsp;</em> Logout</a></li>
		<?php endif;?>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Lihat Pegawai</li>
			</ol>
		</div><!--/.row-->
		<div class="row">
			<div class="col-lg-12">
				<h3 class="page-header">Lihat Pegawai</h1>
			</div>
		</div>

	</div><!--/.col-->
			
			
			
	
	<script src="<?php echo base_url("assets/js/jquery-1.11.1.min.js")?>"></script>
	<script src="<?php echo base_url("assets/js/bootstrap.min.js")?>"></script>
	<script src="<?php echo base_url("assets/js/chart.min.js")?>"></script>
	<script src="<?php echo base_url("assets/js/chart-data.js")?>"></script>
	<script src="<?php echo base_url("assets/js/easypiechart.js")?>"></script>
	<script src="<?php echo base_url("assets/js/easypiechart-data.js")?>"></script>
	<script src="<?php echo base_url("assets/js/bootstrap-datepicker.js")?>"></script>
	<script src="<?php echo base_url("assets/js/custom.js")?>"></script>
	<script>
		window.onload = function () {
			var chart1 = document.getElementById("line-chart").getContext("2d");
			window.myLine = new Chart(chart1).Line(lineChartData, {
			responsive: true,
			scaleLineColor: "rgba(0,0,0,.2)",
			scaleGridLineColor: "rgba(0,0,0,.05)",
			scaleFontColor: "#c5c7cc"
		});
	};
	</script>
		
</body>
</html>