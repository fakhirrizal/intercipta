<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.6
Version: 4.5.6
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Apps</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="http://datum.aplikasiku.online/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="http://datum.aplikasiku.online/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="http://datum.aplikasiku.online/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="http://datum.aplikasiku.online/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="http://datum.aplikasiku.online/assets/global/css/components-md.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="http://datum.aplikasiku.online/assets/global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />
        <link href="http://datum.aplikasiku.online/assets/pages/css/blog.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="http://datum.aplikasiku.online/assets/layouts/layout3/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="http://datum.aplikasiku.online/assets/layouts/layout3/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="http://datum.aplikasiku.online/assets/layouts/layout3/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="http://datum.aplikasiku.online/assets/icon.png" /> </head>
    <!-- END HEAD -->

        <body class="page-container-bg-solid page-md">
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <!-- BEGIN PAGE HEAD-->
                <div class="page-head">
                    <div class="container">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1>Dashboard
                                <small>Sistem Informasi</small>
                            </h1>
                        </div>
                        <!-- END PAGE TITLE -->
                    </div>
                </div>
                <!-- END PAGE HEAD-->
                <!-- BEGIN PAGE CONTENT BODY -->
                <div class="page-content">
                    <div class="container">
						<!-- BEGIN PAGE BREADCRUMBS -->
						<div class="page-content-inner">
                            <div class="m-heading-1 border-green m-bordered">
                                <!-- <h3>Catatan</h3> -->
                                <h2>Dokumentasi API</h2>
								<p><strong>Note:</strong> The <strong>data-parent</strong> attribute makes sure that all collapsible elements under the specified parent will be closed when one of the collapsible item is shown.</p>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                    <div class="portlet light ">
                                        <div class="portlet-body">
											<div class="panel-group" id="accordion">
												<!-- Start Parent -->
												<div class="heading">
													<h4>
														<a class="toggleEndpointList">Auth</a>
													</h4>
												</div>
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="false" class="collapsed"><span class="label label-info">POST</span>&nbsp;{url}/index.php/auth/login</a>
														</h4>
													</div>
													<div id="collapse1" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">Berikut beberapa atribut yang harus diisi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"email": "string",
	"password": "string"
}</code>
																		</pre>
																	</div>
																</div>
															</div>
															Output datanya sebagai berikut,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_user": "int",
	"nik": "string",
	"nama": "string",
	"alamat": "string",
	"email": "string",
	"password": "string",
	"nohp": "string",
	"level": "admin/ pic/ tl/ fl/ client/ non_fl/ payroll",
	"status_absen": "masuk/ keluar",
	"absen_today": "ya/ tidak",
	"keterangan_absen": "ok/ izin/ sakit",
	"id_shift": "int",
	"id_project_region": "int"
}</code>
																		</pre>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse106" aria-expanded="false" class="collapsed"><span class="label label-success">GET</span>&nbsp;{url}/index.php/auth/absent?id_user={id_user}</a>
														</h4>
													</div>
													<div id="collapse106" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Output datanya sebagai berikut,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id": "int",
	"tgl_absensi": "YYYY-mm-dd HH:ii:ss",
	"nik_user": "string",
	"jam_masuk": "HH:ii:ss",
	"jam_keluar": "HH:ii:ss",
	"foto": "url foto",
	"lat": "string",
	"lng": "string",
	"id_outlet": "int",
	"telat": "ya/ tidak",
	"absen_today": "ya/ tidak",
	"status_absen": "masuk/ keluar"
}</code>
																		</pre>
																	</div>
																</div>
																<!-- Keterangan :
																<ul>
																	<li>Kode kelompok dan Keterangan, jika user merupakan super admin/ hsse/ cdo maka field tadi tidak akan muncul </li>
																	<li>Kode kelompok, diambil dari tabel kelompok</li>
																</ul> -->
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse107" aria-expanded="false" class="collapsed"><span class="label label-info">POST</span>&nbsp;{url}/index.php/auth/reset_absent</a>
														</h4>
													</div>
													<div id="collapse107" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Fungsi ini untuk me-reset data informasi absen dari seorang user<br>Berikut beberapa atribut yang harus diisi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_user": "int"
}</code>
																		</pre>
																	</div>
																</div>
																<!-- Keterangan :
																<ul>
																	<li>Kode kelompok dan Keterangan, jika user merupakan super admin/ hsse/ cdo maka field tadi tidak akan muncul </li>
																	<li>Kode kelompok, diambil dari tabel kelompok</li>
																</ul> -->
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse82" aria-expanded="false" class="collapsed"><span class="label label-info">POST</span>&nbsp;{url}/index.php/auth/logout</a>
														</h4>
													</div>
													<div id="collapse82" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">Berikut beberapa atribut yang harus diisi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_user": "int"
}</code>
																		</pre>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse12" aria-expanded="false" class="collapsed"><span class="label label-info">POST</span>&nbsp;{url}/index.php/auth/username_check</a>
														</h4>
													</div>
													<div id="collapse12" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">Berikut beberapa atribut yang harus diisi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"email": "string"
}</code>
																		</pre>
																	</div>
																</div>
																Keterangan :
																<ul>
																	<li>Keluaran berupa status dengan keterangan email tersedia atau tidak.</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse81" aria-expanded="false" class="collapsed"><span class="label label-info">POST</span>&nbsp;{url}/index.php/auth/change_password</a>
														</h4>
													</div>
													<div id="collapse81" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Fungsi yang berguna untuk mengubah kata sandi akun pengguna<br>Berikut beberapa atribut yang harus diisi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_user": "int",
	"password_baru": "string"
}</code>
																		</pre>
																	</div>
																</div>
																Keterangan :
																<ul>
																	<li>Index "id_user" digunakan sebagai parameter untuk mengubah data lain.</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
												<!-- End Parent and Child -->
												<!-- Start Parent -->
												<div class="heading">
													<h4>
														<a class="toggleEndpointList">Admin</a>
													</h4>
												</div>
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse58" aria-expanded="false" class="collapsed"><span class="label label-success">GET</span>&nbsp;{url}/index.php/admin/user_location?id_user={id_user}</a>
														</h4>
													</div>
													<div id="collapse58" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Fungsi yang berguna untuk mendapatkan lokasi (berdasarkan longitude dan latitude) pengguna saat itu<br>Output datanya sebagai berikut,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"nama": "string",
	"lat": "string",
	"lng": "string"
}</code>
																		</pre>
																	</div>
																</div>
																<!-- Keterangan :
																<ul>
																	<li>Kode kelompok dan Keterangan, jika user merupakan super admin/ hsse/ cdo maka field tadi tidak akan muncul </li>
																	<li>Kode kelompok, diambil dari tabel kelompok</li>
																</ul> -->
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse59" aria-expanded="false" class="collapsed"><span class="label label-info">POST</span>&nbsp;{url}/index.php/admin/user_location</a>
														</h4>
													</div>
													<div id="collapse59" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Fungsi yang berguna untuk menyimpan lokasi dari pengguna<br>Berikut beberapa atribut yang harus diisi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_user": "int",
	"lat": "string",
	"lng": "string"
}</code>
																		</pre>
																	</div>
																</div>
																<!-- Keterangan :
																<ul>
																	<li>Kode kelompok dan Keterangan, jika user merupakan super admin/ hsse/ cdo maka field tadi tidak akan muncul </li>
																	<li>Kode kelompok, diambil dari tabel kelompok</li>
																</ul> -->
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false" class="collapsed"><span class="label label-success">GET</span>&nbsp;{url}/index.php/admin/user_data</a>
														</h4>
													</div>
													<div id="collapse2" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Output datanya sebagai berikut,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_user": "int",
	"nik": "string",
	"nama": "string",
	"alamat": "string",
	"email": "string",
	"password": "string",
	"nohp": "string",
	"level": "admin/ pic/ tl/ fl/ client/ non_fl/ payroll",
	"status_absen": "masuk/ keluar",
	"absen_today": "ya/ tidak",
	"keterangan_absen": "ok/ izin/ sakit",
	"id_shift": "int",
	"id_region": "int",
	"created_at": "Y-m-d H:i:s",
	"updated_at": "Y-m-d H:i:s"
}</code>
																		</pre>
																	</div>
																</div>
																<!-- Keterangan :
																<ul>
																	<li>Kode kelompok dan Keterangan, jika user merupakan super admin/ hsse/ cdo maka field tadi tidak akan muncul </li>
																	<li>Kode kelompok, diambil dari tabel kelompok</li>
																</ul> -->
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false" class="collapsed"><span class="label label-success">GET</span>&nbsp;{url}/index.php/admin/user_data?level={level}</a>
														</h4>
													</div>
													<div id="collapse3" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Output datanya sebagai berikut,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_user": "int",
	"nik": "string",
	"nama": "string",
	"alamat": "string",
	"email": "string",
	"password": "string",
	"nohp": "string",
	"level": "admin/ pic/ tl/ fl/ client/ non_fl/ payroll",
	"status_absen": "masuk/ keluar",
	"absen_today": "ya/ tidak",
	"keterangan_absen": "ok/ izin/ sakit",
	"nama_shift": "string",
	"nama_region": "string",
	"created_at": "Y-m-d H:i:s",
	"updated_at": "Y-m-d H:i:s"
}</code>
																		</pre>
																	</div>
																</div>
																<!-- Keterangan :
																<ul>
																	<li>Kode kelompok dan Keterangan, jika user merupakan super admin/ hsse/ cdo maka field tadi tidak akan muncul </li>
																	<li>Kode kelompok, diambil dari tabel kelompok</li>
																</ul> -->
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false" class="collapsed"><span class="label label-info">POST</span>&nbsp;{url}/index.php/admin/user_data</a>
														</h4>
													</div>
													<div id="collapse4" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Berikut beberapa atribut yang harus diisi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"nik": "string",
	"nama": "string",
	"alamat": "string",
	"email": "string",
	"password": "string",
	"nohp": "string",
	"level": "admin/ pic/ tl/ fl/ client/ non_fl/ payroll",
	"id_shift": "int",
	"id_region": "int"
}</code>
																		</pre>
																	</div>
																</div>
																<!-- Keterangan :
																<ul>
																	<li>Kode kelompok dan Keterangan, jika user merupakan super admin/ hsse/ cdo maka field tadi tidak akan muncul </li>
																	<li>Kode kelompok, diambil dari tabel kelompok</li>
																</ul> -->
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="false" class="collapsed"><span class="label label-warning">PUT</span>&nbsp;{url}/index.php/admin/user_data</a>
														</h4>
													</div>
													<div id="collapse5" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Berikut beberapa atribut yang harus diisi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_user": "int",
	"nik": "string",
	"nama": "string",
	"alamat": "string",
	"email": "string",
	"nohp": "string",
	"id_shift": "int",
	"id_region": "int"
}</code>
																		</pre>
																	</div>
																</div>
																Keterangan :
																<ul>
																	<li>Index "id_user" digunakan sebagai parameter untuk mengubah data lain.</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
												<!-- End Child-->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse84" aria-expanded="false" class="collapsed"><span class="label label-warning">PUT</span>&nbsp;{url}/index.php/admin/status_login</a>
														</h4>
													</div>
													<div id="collapse84" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Berikut beberapa atribut yang harus diisi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_user": "int",
	"status": "0/ 1"
}</code>
																		</pre>
																	</div>
																</div>
																Keterangan :
																<ul>
																	<li>Index "id_user" digunakan sebagai parameter untuk mengubah data lain.</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
												<!-- End Child-->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse99" aria-expanded="false" class="collapsed"><span class="label label-success">GET</span>&nbsp;{url}/index.php/admin/product</a>
														</h4>
													</div>
													<div id="collapse99" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Fungsi untuk melihat semua data produk<br>Output datanya sebagai berikut,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_produk": "int",
	"kode_produk": "string",
	"nama_produk": "string",
	"foto": "url foto",
	"id_client": "int",
	"nama_client": "string"
}</code>
																		</pre>
																	</div>
																</div>
																<!-- Keterangan :
																<ul>
																	<li>Kode kelompok dan Keterangan, jika user merupakan super admin/ hsse/ cdo maka field tadi tidak akan muncul </li>
																	<li>Kode kelompok, diambil dari tabel kelompok</li>
																</ul> -->
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse100" aria-expanded="false" class="collapsed"><span class="label label-success">GET</span>&nbsp;{url}/index.php/admin/product?id_produk={id_produk}</a>
														</h4>
													</div>
													<div id="collapse100" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Fungsi untuk melihat suatu barang yang dikehendaki<br>Output datanya sebagai berikut,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_produk": "int",
	"kode_produk": "string",
	"nama_produk": "string",
	"foto": "url foto",
	"id_client": "int",
	"nama_client": "string"
}</code>
																		</pre>
																	</div>
																</div>
																<!-- Keterangan :
																<ul>
																	<li>Kode kelompok dan Keterangan, jika user merupakan super admin/ hsse/ cdo maka field tadi tidak akan muncul </li>
																	<li>Kode kelompok, diambil dari tabel kelompok</li>
																</ul> -->
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse101" aria-expanded="false" class="collapsed"><span class="label label-info">POST</span>&nbsp;{url}/index.php/admin/product</a>
														</h4>
													</div>
													<div id="collapse101" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Fungsi untuk menyimpan data produk<br>Berikut beberapa atribut yang harus diisi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"kode_produk": "string",
	"nama_produk": "string",
	"foto": "base64",
	"id_client": "int"
}</code>
																		</pre>
																	</div>
																</div>
																Keterangan :
																<ul>
																	<li>Untuk foto berupa string <b>base64</b> dari sebuah foto, dan tipe data yang dibolehkan dari foto yang akan diupload adalah <b>.jpg</b></li>
																</ul>
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse103" aria-expanded="false" class="collapsed"><span class="label label-warning">PUT</span>&nbsp;{url}/index.php/admin/product</a>
														</h4>
													</div>
													<div id="collapse103" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Fungsi untuk mengubah data suatu produk<br>Berikut beberapa atribut yang harus diisi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_produk": "int",
	"kode_produk": "string",
	"nama_produk": "string",
	"foto": "base64",
	"id_client": "int"
}</code>
																		</pre>
																	</div>
																</div>
																Keterangan :
																<ul>
																	<li>Index "id_produk" digunakan sebagai parameter untuk mengubah data lain.</li>
																	<li>Untuk atribut foto, persyaratan sama dengan method <b>POST</b></li>
																</ul>
															</div>
														</div>
													</div>
												</div>
												<!-- End Child-->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse102" aria-expanded="false" class="collapsed"><span class="label label-danger">GET</span>&nbsp;{url}/index.php/admin/delete_product?id_produk={$id_produk}</a>
														</h4>
													</div>
													<div id="collapse102" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Berfungsi untuk menghapus data produk
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<!-- <pre>
																			<code>{
	"id": "int"
}</code>
																		</pre> -->
																	</div>
																</div>
																Keterangan :
																<ul>
																	<li>Output hanya ada 2 yaitu '<b>success</b>' dan '<b>failed</b>'</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
												<!-- End Child-->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="false" class="collapsed"><span class="label label-success">GET</span>&nbsp;{url}/index.php/admin/region</a>
														</h4>
													</div>
													<div id="collapse6" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Output datanya sebagai berikut,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id": "int",
	"nama_region": "string",
	"provinsi": "string"
}</code>
																		</pre>
																	</div>
																</div>
																<!-- Keterangan :
																<ul>
																	<li>Kode kelompok dan Keterangan, jika user merupakan super admin/ hsse/ cdo maka field tadi tidak akan muncul </li>
																	<li>Kode kelompok, diambil dari tabel kelompok</li>
																</ul> -->
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse22" aria-expanded="false" class="collapsed"><span class="label label-success">GET</span>&nbsp;{url}/index.php/admin/region?id={id}</a>
														</h4>
													</div>
													<div id="collapse22" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Output datanya sebagai berikut,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id": "int",
	"nama_region": "string",
	"provinsi": "string"
}</code>
																		</pre>
																	</div>
																</div>
																<!-- Keterangan :
																<ul>
																	<li>Kode kelompok dan Keterangan, jika user merupakan super admin/ hsse/ cdo maka field tadi tidak akan muncul </li>
																	<li>Kode kelompok, diambil dari tabel kelompok</li>
																</ul> -->
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse8" aria-expanded="false" class="collapsed"><span class="label label-info">POST</span>&nbsp;{url}/index.php/admin/region</a>
														</h4>
													</div>
													<div id="collapse8" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Berikut beberapa atribut yang harus diisi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"nama": "string",
	"prov": "string"
}</code>
																		</pre>
																	</div>
																</div>
																<!-- Keterangan :
																<ul>
																	<li>Kode kelompok dan Keterangan, jika user merupakan super admin/ hsse/ cdo maka field tadi tidak akan muncul </li>
																	<li>Kode kelompok, diambil dari tabel kelompok</li>
																</ul> -->
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse10" aria-expanded="false" class="collapsed"><span class="label label-warning">PUT</span>&nbsp;{url}/index.php/admin/region</a>
														</h4>
													</div>
													<div id="collapse10" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Berikut beberapa atribut yang harus diisi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id": "int",
	"nama": "string",
	"prov": "string"
}</code>
																		</pre>
																	</div>
																</div>
																Keterangan :
																<ul>
																	<li>Index "id" digunakan sebagai parameter untuk mengubah data lain.</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
												<!-- End Child-->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse27" aria-expanded="false" class="collapsed"><span class="label label-danger">DELETE</span>&nbsp;{url}/index.php/admin/region</a>
														</h4>
													</div>
													<div id="collapse27" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Berikut atribut yang harus dipenuhi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id": "int"
}</code>
																		</pre>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!-- End Child-->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse11" aria-expanded="false" class="collapsed"><span class="label label-success">GET</span>&nbsp;{url}/index.php/admin/outlet</a>
														</h4>
													</div>
													<div id="collapse11" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Output datanya sebagai berikut,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_outlet": "int",
	"nama_outlet": "string",
	"nama_region": "string"
}</code>
																		</pre>
																	</div>
																</div>
																<!-- Keterangan :
																<ul>
																	<li>Kode kelompok dan Keterangan, jika user merupakan super admin/ hsse/ cdo maka field tadi tidak akan muncul </li>
																	<li>Kode kelompok, diambil dari tabel kelompok</li>
																</ul> -->
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse24" aria-expanded="false" class="collapsed"><span class="label label-success">GET</span>&nbsp;{url}/index.php/admin/outlet?id_outlet={id_outlet}</a>
														</h4>
													</div>
													<div id="collapse24" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Output datanya sebagai berikut,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_outlet": "int",
	"nama_outlet": "string",
	"nama_region": "string"
}</code>
																		</pre>
																	</div>
																</div>
																<!-- Keterangan :
																<ul>
																	<li>Kode kelompok dan Keterangan, jika user merupakan super admin/ hsse/ cdo maka field tadi tidak akan muncul </li>
																	<li>Kode kelompok, diambil dari tabel kelompok</li>
																</ul> -->
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse31" aria-expanded="false" class="collapsed"><span class="label label-info">POST</span>&nbsp;{url}/index.php/admin/outlet</a>
														</h4>
													</div>
													<div id="collapse31" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Berikut beberapa atribut yang harus diisi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"nama": "string",
	"id_region": "int",
	"id_shift_pagi": "int",
	"id_shift_sore": "int"
}</code>
																		</pre>
																	</div>
																</div>
																<!-- Keterangan :
																<ul>
																	<li>Kode kelompok dan Keterangan, jika user merupakan super admin/ hsse/ cdo maka field tadi tidak akan muncul </li>
																	<li>Kode kelompok, diambil dari tabel kelompok</li>
																</ul> -->
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse21" aria-expanded="false" class="collapsed"><span class="label label-warning">PUT</span>&nbsp;{url}/index.php/admin/outlet</a>
														</h4>
													</div>
													<div id="collapse21" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Berikut beberapa atribut yang harus diisi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_outlet": "int",
	"nama": "string",
	"id_region": "int"
}</code>
																		</pre>
																	</div>
																</div>
																Keterangan :
																<ul>
																	<li>Index "id_outlet" digunakan sebagai parameter untuk mengubah data lain.</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
												<!-- End Child-->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse26" aria-expanded="false" class="collapsed"><span class="label label-danger">DELETE</span>&nbsp;{url}/index.php/admin/outlet</a>
														</h4>
													</div>
													<div id="collapse26" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Berikut atribut yang harus dipenuhi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_outlet": "int"
}</code>
																		</pre>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!-- End Child-->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse20" aria-expanded="false" class="collapsed"><span class="label label-success">GET</span>&nbsp;{url}/index.php/admin/shift</a>
														</h4>
													</div>
													<div id="collapse20" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Output datanya sebagai berikut,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id": "int",
	"nama_shift": "string",
	"jam_masuk": "HH:ii:ss",
	"jam_keluar": "HH:ii:ss"
}</code>
																		</pre>
																	</div>
																</div>
																<!-- Keterangan :
																<ul>
																	<li>Kode kelompok dan Keterangan, jika user merupakan super admin/ hsse/ cdo maka field tadi tidak akan muncul </li>
																	<li>Kode kelompok, diambil dari tabel kelompok</li>
																</ul> -->
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse19" aria-expanded="false" class="collapsed"><span class="label label-success">GET</span>&nbsp;{url}/index.php/admin/shift?id={id}</a>
														</h4>
													</div>
													<div id="collapse19" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Output datanya sebagai berikut,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id": "int",
	"nama_shift": "string",
	"jam_masuk": "HH:ii:ss",
	"jam_keluar": "HH:ii:ss"
}</code>
																		</pre>
																	</div>
																</div>
																<!-- Keterangan :
																<ul>
																	<li>Kode kelompok dan Keterangan, jika user merupakan super admin/ hsse/ cdo maka field tadi tidak akan muncul </li>
																	<li>Kode kelompok, diambil dari tabel kelompok</li>
																</ul> -->
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse18" aria-expanded="false" class="collapsed"><span class="label label-info">POST</span>&nbsp;{url}/index.php/admin/shift</a>
														</h4>
													</div>
													<div id="collapse18" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Berikut beberapa atribut yang harus diisi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"nama": "string",
	"jam_masuk": "HH:ii:ss",
	"jam_keluar": "HH:ii:ss"
}</code>
																		</pre>
																	</div>
																</div>
																<!-- Keterangan :
																<ul>
																	<li>Kode kelompok dan Keterangan, jika user merupakan super admin/ hsse/ cdo maka field tadi tidak akan muncul </li>
																	<li>Kode kelompok, diambil dari tabel kelompok</li>
																</ul> -->
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse17" aria-expanded="false" class="collapsed"><span class="label label-warning">PUT</span>&nbsp;{url}/index.php/admin/shift</a>
														</h4>
													</div>
													<div id="collapse17" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Berikut beberapa atribut yang harus diisi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id": "int",
	"nama": "string",
	"jam_masuk": "HH:ii:ss",
	"jam_keluar": "HH:ii:ss"
}</code>
																		</pre>
																	</div>
																</div>
																Keterangan :
																<ul>
																	<li>Index "id" digunakan sebagai parameter untuk mengubah data lain.</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
												<!-- End Child-->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse25" aria-expanded="false" class="collapsed"><span class="label label-danger">DELETE</span>&nbsp;{url}/index.php/admin/shift</a>
														</h4>
													</div>
													<div id="collapse25" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Berikut atribut yang harus dipenuhi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id": "int"
}</code>
																		</pre>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!-- End Child-->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse7" aria-expanded="false" class="collapsed"><span class="label label-success">GET</span>&nbsp;{url}/index.php/admin/project</a>
														</h4>
													</div>
													<div id="collapse7" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Output datanya sebagai berikut,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_project": "int",
	"pic": "string",
	"client": "string",
	"kode_project": "string",
	"nama_project": "string"
}</code>
																		</pre>
																	</div>
																</div>
																<!-- Keterangan :
																<ul>
																	<li>Kode kelompok dan Keterangan, jika user merupakan super admin/ hsse/ cdo maka field tadi tidak akan muncul </li>
																	<li>Kode kelompok, diambil dari tabel kelompok</li>
																</ul> -->
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse32" aria-expanded="false" class="collapsed"><span class="label label-success">GET</span>&nbsp;{url}/index.php/admin/project?id_project={id_project}</a>
														</h4>
													</div>
													<div id="collapse32" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Output datanya sebagai berikut,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_project": "int",
	"pic": "string",
	"client": "string",
	"kode_project": "string",
	"nama_project": "string"
}</code>
																		</pre>
																	</div>
																</div>
																<!-- Keterangan :
																<ul>
																	<li>Kode kelompok dan Keterangan, jika user merupakan super admin/ hsse/ cdo maka field tadi tidak akan muncul </li>
																	<li>Kode kelompok, diambil dari tabel kelompok</li>
																</ul> -->
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse29" aria-expanded="false" class="collapsed"><span class="label label-info">POST</span>&nbsp;{url}/index.php/admin/project</a>
														</h4>
													</div>
													<div id="collapse29" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Berikut beberapa atribut yang harus diisi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"nik_pic": "string",
	"nik_client": "string",
	"kode_project": "string",
	"nama_project": "string"
}</code>
																		</pre>
																	</div>
																</div>
																Keterangan :
																<ul>
																	<li>NIK PIC ataupun NIK Client bisa diambil dari <b>user data</b></li>
																</ul>
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse30" aria-expanded="false" class="collapsed"><span class="label label-warning">PUT</span>&nbsp;{url}/index.php/admin/project</a>
														</h4>
													</div>
													<div id="collapse30" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Berikut beberapa atribut yang harus diisi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_project": "int",
	"nik_pic": "string",
	"nik_client": "string",
	"kode_project": "string",
	"nama_project": "string",
	"status": "0/ 1"
}</code>
																		</pre>
																	</div>
																</div>
																Keterangan :
																<ul>
																	<li>Index "id_project" digunakan sebagai parameter untuk mengubah data lain.</li>
																	<li>Untuk status project 0 bernilai <b>Tidak Aktif</b>, dan 1 bernilai <b>Aktif</b>.</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
												<!-- End Child-->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse28" aria-expanded="false" class="collapsed"><span class="label label-danger">DELETE</span>&nbsp;{url}/index.php/admin/project</a>
														</h4>
													</div>
													<div id="collapse28" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Berikut atribut yang harus dipenuhi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_project": "int"
}</code>
																		</pre>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!-- End Parent -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse33" aria-expanded="false" class="collapsed"><span class="label label-success">GET</span>&nbsp;{url}/index.php/admin/project_region</a>
														</h4>
													</div>
													<div id="collapse33" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Output datanya sebagai berikut,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id": "int",
	"nama_project": "string",
	"nama_region": "string"
}</code>
																		</pre>
																	</div>
																</div>
																<!-- Keterangan :
																<ul>
																	<li>Kode kelompok dan Keterangan, jika user merupakan super admin/ hsse/ cdo maka field tadi tidak akan muncul </li>
																	<li>Kode kelompok, diambil dari tabel kelompok</li>
																</ul> -->
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse34" aria-expanded="false" class="collapsed"><span class="label label-success">GET</span>&nbsp;{url}/index.php/admin/project_region?id_project_region={id_project_region}</a>
														</h4>
													</div>
													<div id="collapse34" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Output datanya sebagai berikut,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id": "int",
	"nama_project": "string",
	"nama_region": "string"
}</code>
																		</pre>
																	</div>
																</div>
																<!-- Keterangan :
																<ul>
																	<li>Kode kelompok dan Keterangan, jika user merupakan super admin/ hsse/ cdo maka field tadi tidak akan muncul </li>
																	<li>Kode kelompok, diambil dari tabel kelompok</li>
																</ul> -->
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse35" aria-expanded="false" class="collapsed"><span class="label label-warning">PUT</span>&nbsp;{url}/index.php/admin/project_region</a>
														</h4>
													</div>
													<div id="collapse35" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Berikut beberapa atribut yang harus diisi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_user": "int",
	"id_project_region": "int"
}</code>
																		</pre>
																	</div>
																</div>
																Keterangan :
																<ul>
																	<li>Index "id_user" digunakan sebagai parameter untuk mengubah data lain.</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
												<!-- End Parent and Child-->
												<!-- Start Parent -->
												<div class="heading">
													<h4>
														<a class="toggleEndpointList">Team Leader</a>
													</h4>
												</div>
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse9" aria-expanded="false" class="collapsed"><span class="label label-info">POST</span>&nbsp;{url}/index.php/team_leader/absent</a>
														</h4>
													</div>
													<div id="collapse9" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Berikut beberapa atribut yang harus diisi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"nik": "string",
	"nama": "string",
	"tgl_absensi": "YYYY-mm-dd HH:ii:ss",
	"keterangan_absen": "ok/ izin/ sakit",
	"image": "base64",
	"lat": "string",
	"lng": "string",
	"id_outlet": "id_outlet"
}</code>
																		</pre>
																	</div>
																</div>
																Keterangan :
																<ul>
																	<li>Untuk atribut image berupa string <b>base64</b> dari sebuah foto, dan tipe data yang dibolehkan dari foto yang akan diupload adalah <b>.jpg</b></li>
																	<!-- <li>Kode kelompok, diambil dari tabel kelompok</li> -->
																</ul>
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse23" aria-expanded="false" class="collapsed"><span class="label label-info">POST</span>&nbsp;{url}/index.php/team_leader/absent_done</a>
														</h4>
													</div>
													<div id="collapse23" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Berikut beberapa atribut yang harus diisi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_absen": "int",
	"id_user": "int",
	"tanggal_absen_done": "YYYY-mm-dd"
}</code>
																		</pre>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse79" aria-expanded="false" class="collapsed"><span class="label label-success">GET</span>&nbsp;{url}/index.php/team_leader/status_absen?id_user={id_user}</a>
														</h4>
													</div>
													<div id="collapse79" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Berfungsi untuk mengecek kehadiran team leader pada hari tertentu<br>Output datanya sebagai berikut,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"status_absen": "masuk/ keluar",
	"absen_today": "ya/ tidak",
	"keterangan_absen": "ok/ izin/ sakit",
}</code>
																		</pre>
																	</div>
																</div>
																<!-- Keterangan :
																<ul>
																	<li>Kode kelompok dan Keterangan, jika user merupakan super admin/ hsse/ cdo maka field tadi tidak akan muncul </li>
																	<li>Kode kelompok, diambil dari tabel kelompok</li>
																</ul> -->
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse56" aria-expanded="false" class="collapsed"><span class="label label-success">GET</span>&nbsp;{url}/index.php/team_leader/absent_check?id_tl={id_user}&tanggal={YYYY-mm-dd}</a>
														</h4>
													</div>
													<div id="collapse56" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Output datanya sebagai berikut,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"nama_region": "string",
	"nama_outlet": "string",
	"id_absen": "int"
}</code>
																		</pre>
																	</div>
																</div>
																<!-- Keterangan :
																<ul>
																	<li>Kode kelompok dan Keterangan, jika user merupakan super admin/ hsse/ cdo maka field tadi tidak akan muncul </li>
																	<li>Kode kelompok, diambil dari tabel kelompok</li>
																</ul> -->
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse70" aria-expanded="false" class="collapsed"><span class="label label-success">GET</span>&nbsp;{url}/index.php/team_leader/report_competitor?id_tl={id_user}</a>
														</h4>
													</div>
													<div id="collapse70" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Fungsi ini menampilkan semua laporan bagaimana keadaan pesaing/ kompetitor yang dibuat seorang TL<br>Output datanya sebagai berikut,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_report_competitor": "int",
	"nama": "string",
	"foto": "url foto",
	"deskripsi": "string",
	"waktu": "YYYY-mm-dd HH:ii:ss"
}</code>
																		</pre>
																	</div>
																</div>
																<!-- Keterangan :
																<ul>
																	<li>Kode kelompok dan Keterangan, jika user merupakan super admin/ hsse/ cdo maka field tadi tidak akan muncul </li>
																	<li>Kode kelompok, diambil dari tabel kelompok</li>
																</ul> -->
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse71" aria-expanded="false" class="collapsed"><span class="label label-info">POST</span>&nbsp;{url}/index.php/team_leader/report_competitor</a>
														</h4>
													</div>
													<div id="collapse71" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Fungsi untuk menyimpan laporan dari kompetitor oleh seorang TL<br>Berikut beberapa atribut yang harus diisi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_user": "int",
	"foto": "base64",
	"deskripsi": "string"
}</code>
																		</pre>
																	</div>
																</div>
																Keterangan :
																<ul>
																	<li>Untuk foto berupa string <b>base64</b> dari sebuah foto, dan tipe data yang dibolehkan dari foto yang akan diupload adalah <b>.jpg</b></li>
																	<li>Waktu laporan diambil saat data tersebut masuk ke database</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse69" aria-expanded="false" class="collapsed"><span class="label label-warning">PUT</span>&nbsp;{url}/index.php/team_leader/report_competitor</a>
														</h4>
													</div>
													<div id="collapse69" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Fungsi untuk mengubah data laporan kompetitor<br>Berikut beberapa atribut yang harus diisi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_report_competitor": "int",
	"id_user": "int",
	"foto": "base64",
	"deskripsi": "string"
}</code>
																		</pre>
																	</div>
																</div>
																Keterangan :
																<ul>
																	<li>Index "id_report_competitor" digunakan sebagai parameter untuk mengubah data lain.</li>
																	<li>Untuk atribut foto, persyaratan sama dengan method <b>POST</b></li>
																</ul>
															</div>
														</div>
													</div>
												</div>
												<!-- End Child-->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse48" aria-expanded="false" class="collapsed"><span class="label label-success">GET</span>&nbsp;{url}/index.php/team_leader/report?id_tl={id_user}</a>
														</h4>
													</div>
													<div id="collapse48" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Output datanya sebagai berikut,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_laporan": "int",
	"tgl_laporan": "YYYY-mm-dd HH:ii:ss",
	"tipe_laporan": "sendiri/ kompetitor",
	"foto_kondisi": "url foto",
	"keterangan": "string",
	"lat": "string",
	"lng": "string"
}</code>
																		</pre>
																	</div>
																</div>
																<!-- Keterangan :
																<ul>
																	<li>Kode kelompok dan Keterangan, jika user merupakan super admin/ hsse/ cdo maka field tadi tidak akan muncul </li>
																	<li>Kode kelompok, diambil dari tabel kelompok</li>
																</ul> -->
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse47" aria-expanded="false" class="collapsed"><span class="label label-success">GET</span>&nbsp;{url}/index.php/team_leader/report?id_tl={id_user}&id_laporan={id_laporan}</a>
														</h4>
													</div>
													<div id="collapse47" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Output datanya sebagai berikut,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_laporan": "int",
	"tgl_laporan": "YYYY-mm-dd HH:ii:ss",
	"tipe_laporan": "sendiri/ kompetitor",
	"foto_kondisi": "url foto",
	"keterangan": "string",
	"lat": "string",
	"lng": "string"
}</code>
																		</pre>
																	</div>
																</div>
																<!-- Keterangan :
																<ul>
																	<li>Kode kelompok dan Keterangan, jika user merupakan super admin/ hsse/ cdo maka field tadi tidak akan muncul </li>
																	<li>Kode kelompok, diambil dari tabel kelompok</li>
																</ul> -->
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse46" aria-expanded="false" class="collapsed"><span class="label label-info">POST</span>&nbsp;{url}/index.php/team_leader/report</a>
														</h4>
													</div>
													<div id="collapse46" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Berikut beberapa atribut yang harus diisi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"tgl_laporan": "YYYY-mm-dd HH:ii:ss",
	"id_user": "int",
	"tipe_laporan": "sendiri/ kompetitor",
	"foto_kondisi": "base64",
	"keterangan": "string",
	"lat": "string",
	"lng": "string"
}</code>
																		</pre>
																	</div>
																</div>
																Keterangan :
																<ul>
																	<li>Untuk foto kondisi berupa string <b>base64</b> dari sebuah foto, dan tipe data yang dibolehkan dari foto yang akan diupload adalah <b>.jpg</b></li>
																	<!-- <li>Kode kelompok, diambil dari tabel kelompok</li> -->
																</ul>
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse45" aria-expanded="false" class="collapsed"><span class="label label-warning">PUT</span>&nbsp;{url}/index.php/team_leader/report</a>
														</h4>
													</div>
													<div id="collapse45" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Berikut beberapa atribut yang harus diisi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_laporan": "int",
	"tgl_laporan": "YYYY-mm-dd HH:ii:ss",
	"id_user": "int",
	"tipe_laporan": "sendiri/ kompetitor",
	"foto_kondisi": "base64",
	"keterangan": "string",
	"lat": "string",
	"lng": "string"
}</code>
																		</pre>
																	</div>
																</div>
																Keterangan :
																<ul>
																	<li>Index "id_laporan" digunakan sebagai parameter untuk mengubah data lain.</li>
																	<li>Untuk atribut foto_kondisi, persyaratan sama dengan method <b>POST</b></li>
																</ul>
															</div>
														</div>
													</div>
												</div>
												<!-- End Child-->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse44" aria-expanded="false" class="collapsed"><span class="label label-danger">DELETE</span>&nbsp;{url}/index.php/team_leader/report</a>
														</h4>
													</div>
													<div id="collapse44" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Berikut atribut yang harus dipenuhi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_laporan": "int"
}</code>
																		</pre>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!-- End Parent and Child-->
												<!-- Start Parent -->
												<div class="heading">
													<h4>
														<a class="toggleEndpointList">PIC</a>
													</h4>
												</div>
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse60" aria-expanded="false" class="collapsed"><span class="label label-success">GET</span>&nbsp;{url}/index.php/pic/fl_to_outlet</a>
														</h4>
													</div>
													<div id="collapse60" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Fungsi yang berguna untuk mengetahui list FL yang telah ditempatkan di outlet<br>Output datanya sebagai berikut,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id": "int",
	"nama_fl": "string",
	"nama_outlet": "string",
	"shift": "string"
}</code>
																		</pre>
																	</div>
																</div>
																<!-- Keterangan :
																<ul>
																	<li>Kode kelompok dan Keterangan, jika user merupakan super admin/ hsse/ cdo maka field tadi tidak akan muncul </li>
																	<li>Kode kelompok, diambil dari tabel kelompok</li>
																</ul> -->
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse61" aria-expanded="false" class="collapsed"><span class="label label-success">GET</span>&nbsp;{url}/index.php/pic/fl_to_outlet?id_region={id_region}</a>
														</h4>
													</div>
													<div id="collapse61" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Fungsi yang berguna untuk mengetahui siapa FL yang belum dapat kerjaan di suatu outlet dalam rentang region tertentu<br>Output datanya sebagai berikut,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id": "int",
	"nama_fl": "string"
}</code>
																		</pre>
																	</div>
																</div>
																<!-- Keterangan :
																<ul>
																	<li>Kode kelompok dan Keterangan, jika user merupakan super admin/ hsse/ cdo maka field tadi tidak akan muncul </li>
																	<li>Kode kelompok, diambil dari tabel kelompok</li>
																</ul> -->
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse62" aria-expanded="false" class="collapsed"><span class="label label-success">GET</span>&nbsp;{url}/index.php/pic/fl_to_outlet?id_outlet={id_outlet}</a>
														</h4>
													</div>
													<div id="collapse62" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Fungsi yang berguna untuk mengetahui siapa FL yang ditempatkan di outlet tertentu<br>Output datanya sebagai berikut,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id": "int",
	"nama": "string",
	"nama_shift": "string",
	"jam_masuk": "HH:ii:ss",
	"jam_keluar": "HH:ii:ss"
}</code>
																		</pre>
																	</div>
																</div>
																<!-- Keterangan :
																<ul>
																	<li>Kode kelompok dan Keterangan, jika user merupakan super admin/ hsse/ cdo maka field tadi tidak akan muncul </li>
																	<li>Kode kelompok, diambil dari tabel kelompok</li>
																</ul> -->
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse49" aria-expanded="false" class="collapsed"><span class="label label-info">POST</span>&nbsp;{url}/index.php/pic/fl_to_outlet</a>
														</h4>
													</div>
													<div id="collapse49" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Berikut beberapa atribut yang harus diisi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_project_region": "int",
	"id_outlet": "int",
	"id_user": "int",
	"id_shift": "int"
}</code>
																		</pre>
																	</div>
																</div>
																<!-- Keterangan :
																<ul>
																	<li>Kode kelompok dan Keterangan, jika user merupakan super admin/ hsse/ cdo maka field tadi tidak akan muncul </li>
																	<li>Kode kelompok, diambil dari tabel kelompok</li>
																</ul> -->
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse50" aria-expanded="false" class="collapsed"><span class="label label-warning">PUT</span>&nbsp;{url}/index.php/pic/fl_to_outlet</a>
														</h4>
													</div>
													<div id="collapse50" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Berikut beberapa atribut yang harus diisi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id": "int",
	"id_project_region": "int",
	"id_outlet": "int",
	"id_user": "int",
	"id_shift": "int"
}</code>
																		</pre>
																	</div>
																</div>
																Keterangan :
																<ul>
																	<li>Index "id" digunakan sebagai parameter untuk mengubah data lain.</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
												<!-- End Child-->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse63" aria-expanded="false" class="collapsed"><span class="label label-danger">GET</span>&nbsp;{url}/index.php/pic/delete_fl_to_outlet?id={$id}</a>
														</h4>
													</div>
													<div id="collapse63" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Berfungsi untuk menghapus fl yang sudah ditempatkan disuatu outlet
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<!-- <pre>
																			<code>{
	"id": "int"
}</code>
																		</pre> -->
																	</div>
																</div>
																Keterangan :
																<ul>
																	<li>Output hanya ada 2 yaitu '<b>success</b>' dan '<b>failed</b>'</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
												<!-- End Child-->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse36" aria-expanded="false" class="collapsed"><span class="label label-success">GET</span>&nbsp;{url}/index.php/pic/project?nik_pic={nik_pic}</a>
														</h4>
													</div>
													<div id="collapse36" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Output datanya sebagai berikut,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_project": "int",
	"id_client": "int",
	"client": "string",
	"kode_project": "string",
	"nama_project": "string",
	"jumlah_region": "int",
	"region_complete": "int"
}</code>
																		</pre>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse37" aria-expanded="false" class="collapsed"><span class="label label-success">GET</span>&nbsp;{url}/index.php/pic/project?nik_pic={nik_pic}&kode_project={kode_project}</a>
														</h4>
													</div>
													<div id="collapse37" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Output datanya sebagai berikut,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																		<code>
{
    "data_utama": [
        {
            "id_project": "int",
            "id_client": "int",
            "client": "string",
            "kode_project": "string",
            "nama_project": "string",
            "jumlah_region": "int",
            "region_complete": "int"
        }
    ],
    "data_detail": [
        {
            "id_project_region": "int",
            "nama_region": "string",
            "nama_tl": "string",
            "jumlah_outlet": "int",
            "id_region": "int"
        }
    ]
}</code>
																		</pre>
																	</div>
																</div>
																Keterangan :
																<ul>
																	<li>Array data detail bisa memiliki lebih dari 1 nilai.</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse41" aria-expanded="false" class="collapsed"><span class="label label-info">POST</span>&nbsp;{url}/index.php/pic/project_region</a>
														</h4>
													</div>
													<div id="collapse41" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Berikut beberapa atribut yang harus diisi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"kode_project": "string",
	"id_region": "int"
}</code>
																		</pre>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse40" aria-expanded="false" class="collapsed"><span class="label label-warning">PUT</span>&nbsp;{url}/index.php/pic/project_region</a>
														</h4>
													</div>
													<div id="collapse40" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Berikut beberapa atribut yang harus diisi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_project_region": "int",
	"kode_project": "string",
	"id_region": "int",
	"id_tl": "int"
}</code>
																		</pre>
																	</div>
																</div>
																Keterangan :
																<ul>
																	<li>Index "id_project_region" digunakan sebagai parameter untuk mengubah data lain.</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
												<!-- End Child-->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse64" aria-expanded="false" class="collapsed"><span class="label label-danger">GET</span>&nbsp;{url}/index.php/pic/delete_project_region?id_project_region={id_project_region}</a>
														</h4>
													</div>
													<div id="collapse64" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Fungsi ini untuk menghapus suatu project di daerah tertentu
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<!-- <pre>
																			<code>{
	"id_project_region": "int"
}</code>
																		</pre> -->
																	</div>
																</div>
																Keterangan :
																<ul>
																	<li>Output hanya ada 2 yaitu '<b>success</b>' dan '<b>failed</b>'</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
												<!-- End Child-->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse38" aria-expanded="false" class="collapsed"><span class="label label-success">GET</span>&nbsp;{url}/index.php/pic/project_region?id_project_region={id_project_region}</a>
														</h4>
													</div>
													<div id="collapse38" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Output datanya sebagai berikut,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																		<code>
{
    "data_utama": [
        {
            "id_project_region": "int",
            "kode_project": "string",
            "nama_project": "string",
            "nama_region": "string",
            "nama_tl": "string"
        }
    ],
    "data_outlet": [
        {
            "id_project_region_to_outlet": "int",
            "id_outlet": "int",
            "nama_outlet": "string",
            "jumlah_fl": "int"
        }
    ]
}</code>
																		</pre>
																	</div>
																</div>
																Keterangan :
																<ul>
																	<li>Array data outlet bisa memiliki lebih dari 1 nilai.</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse74" aria-expanded="false" class="collapsed"><span class="label label-info">POST</span>&nbsp;{url}/index.php/pic/project_region_to_outlet</a>
														</h4>
													</div>
													<div id="collapse74" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Berikut beberapa atribut yang harus diisi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_project_region": "int",
	"id_outlet": "int",
	"id_client": "int"
}</code>
																		</pre>
																	</div>
																</div>
																<!-- Keterangan :
																<ul>
																	<li>Kode kelompok dan Keterangan, jika user merupakan super admin/ hsse/ cdo maka field tadi tidak akan muncul </li>
																	<li>Kode kelompok, diambil dari tabel kelompok</li>
																</ul> -->
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse73" aria-expanded="false" class="collapsed"><span class="label label-warning">PUT</span>&nbsp;{url}/index.php/pic/project_region_to_outlet</a>
														</h4>
													</div>
													<div id="collapse73" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Berikut beberapa atribut yang harus diisi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_project_region_to_outlet": "int",
	"id_project_region": "int",
	"id_outlet": "int",
	"id_client": "int"
}</code>
																		</pre>
																	</div>
																</div>
																Keterangan :
																<ul>
																	<li>Index "id_project_region_to_outlet" digunakan sebagai parameter untuk mengubah data lain.</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
												<!-- End Child-->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse72" aria-expanded="false" class="collapsed"><span class="label label-danger">GET</span>&nbsp;{url}/index.php/pic/project_region_to_outlet?id_project_region_to_outlet={id_project_region_to_outlet}</a>
														</h4>
													</div>
													<div id="collapse72" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Fungsi untuk menghapus outlet dalam sebuah project region,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<!-- <pre>
																			<code>{
	"id": "int"
}</code>
																		</pre> -->
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!-- End Child-->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse39" aria-expanded="false" class="collapsed"><span class="label label-success">GET</span>&nbsp;{url}/index.php/pic/outlet?id_outlet={id_outlet}</a>
														</h4>
													</div>
													<div id="collapse39" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Output datanya sebagai berikut,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																		<code>
{
    "data_utama": [
        {
            "id_outlet": "int",
            "nama_outlet": "string",
            "nama_tl": "string"
        }
    ],
    "data_fl": [
        {
            "nama_fl": "string",
            "nama_shift": "string"
        }
    ]
}</code>
																		</pre>
																	</div>
																</div>
																Keterangan :
																<ul>
																	<li>Array data front liner outlet bisa memiliki lebih dari 1 nilai.</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse83" aria-expanded="false" class="collapsed"><span class="label label-success">GET</span>&nbsp;{url}/index.php/pic/outlet?id_region={id_region}</a>
														</h4>
													</div>
													<div id="collapse83" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Fungsi untuk melihat data outlet berdasarkan id_project_region<br>Output datanya sebagai berikut,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																		<code>
{
    "id_outlet": "int",
    "nama_outlet": "string"
}</code>
																		</pre>
																	</div>
																</div>
																<!-- Keterangan :
																<ul>
																	<li>Array data front liner outlet bisa memiliki lebih dari 1 nilai.</li>
																</ul> -->
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<!-- <div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse42" aria-expanded="false" class="collapsed"><span class="label label-success">GET</span>&nbsp;{url}/index.php/pic/outlet2?id_outlet={id_outlet}</a>
														</h4>
													</div>
													<div id="collapse42" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Output datanya sebagai berikut,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																		<code>
{
	"id": "int",
	"nama_fl": "string"
}</code>
																		</pre>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div> -->
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse43" aria-expanded="false" class="collapsed"><span class="label label-success">GET</span>&nbsp;{url}/index.php/pic/team_leader?id_region={id_region}</a>
														</h4>
													</div>
													<div id="collapse43" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Fungsi untuk melihat TL yang belum kebagian project di region tertentu<br>Output datanya sebagai berikut,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																		<code>
{
	"id_user": "int",
	"nama": "string"
}</code>
																		</pre>
																	</div>
																</div>
																<!-- Keterangan :
																<ul>
																	<li>Array data front liner outlet bisa memiliki lebih dari 1 nilai.</li>
																</ul> -->
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse95" aria-expanded="false" class="collapsed"><span class="label label-success">GET</span>&nbsp;{url}/index.php/pic/report_kadaluarsa?id_user={id_user}</a>
														</h4>
													</div>
													<div id="collapse95" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Fungsi ini menampilkan semua laporan barang yang kadaluarsa yang dibuat seorang PIC<br>Output datanya sebagai berikut,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_report_kadaluarsa": "int",
	"foto": "url foto",
	"kode_produk": "string",
	"nama_produk": "string",
	"jumlah": "int",
	"tgl_masuk": "YYYY-mm-dd HH:ii:ss",
	"tgl_kadaluarsa": "YYYY-mm-dd HH:ii:ss",
	"keterangan": "string"
}</code>
																		</pre>
																	</div>
																</div>
																<!-- Keterangan :
																<ul>
																	<li>Kode kelompok dan Keterangan, jika user merupakan super admin/ hsse/ cdo maka field tadi tidak akan muncul </li>
																	<li>Kode kelompok, diambil dari tabel kelompok</li>
																</ul> -->
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse94" aria-expanded="false" class="collapsed"><span class="label label-info">POST</span>&nbsp;{url}/index.php/pic/report_kadaluarsa</a>
														</h4>
													</div>
													<div id="collapse94" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Fungsi untuk menyimpan laporan barang yang kadaluarsa oleh seorang PIC<br>Berikut beberapa atribut yang harus diisi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_user": "int",
	"foto": "base64",
	"kode_produk": "string",
	"jumlah": "int",
	"tgl_masuk": "YYYY-mm-dd HH:ii:ss",
	"tgl_kadaluarsa": "YYYY-mm-dd HH:ii:ss",
	"keterangan": "string"
}</code>
																		</pre>
																	</div>
																</div>
																Keterangan :
																<ul>
																	<li>Untuk foto berupa string <b>base64</b> dari sebuah foto, dan tipe data yang dibolehkan dari foto yang akan diupload adalah <b>.jpg</b></li>
																</ul>
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse93" aria-expanded="false" class="collapsed"><span class="label label-warning">PUT</span>&nbsp;{url}/index.php/pic/report_kadaluarsa</a>
														</h4>
													</div>
													<div id="collapse93" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Fungsi untuk mengubah data laporan barang yang kadaluarsa oleh seorang PIC<br>Berikut beberapa atribut yang harus diisi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_report_kadaluarsa": "int",
	"id_user": "int",
	"foto": "base64",
	"kode_produk": "string",
	"jumlah": "int",
	"tgl_masuk": "YYYY-mm-dd HH:ii:ss",
	"tgl_kadaluarsa": "YYYY-mm-dd HH:ii:ss",
	"keterangan": "string"
}</code>
																		</pre>
																	</div>
																</div>
																Keterangan :
																<ul>
																	<li>Index "id_report_kadaluarsa" digunakan sebagai parameter untuk mengubah data lain.</li>
																	<li>Untuk atribut foto, persyaratan sama dengan method <b>POST</b></li>
																</ul>
															</div>
														</div>
													</div>
												</div>
												<!-- End Child-->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse57" aria-expanded="false" class="collapsed"><span class="label label-success">GET</span>&nbsp;{url}/index.php/pic/penjualan?kode_produk={kode_produk}</a>
														</h4>
													</div>
													<div id="collapse57" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Fungsi yang berguna untuk melihat penjualan yang ditangani oleh Front Liner berdasarkan kode produk tertentu<br>Output datanya sebagai berikut,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																		<code>
{
    "data_utama": [
        {
            "kode_produk": "string",
            "nama_produk": "string",
            "foto_produk": "url foto",
            "deskripsi": "string"
        }
    ],
    "data_detail": [
        {
            "tgl_penjualan": "YYYY-mm-dd HH:ii:ss",
            "nama_fl": "string",
            "stok_awal": "int",
            "stok_akhir": "int",
            "stok_add": "int",
            "keterangan": "string"
        }
    ]
}</code>
																		</pre>
																	</div>
																</div>
																Keterangan :
																<ul>
																	<li>Array data outlet bisa memiliki lebih dari 1 nilai.</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
												<!-- End Parent and Child -->
												<!-- Start Parent -->
												<div class="heading">
													<h4>
														<a class="toggleEndpointList">Front Liner</a>
													</h4>
												</div>
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse13" aria-expanded="false" class="collapsed"><span class="label label-info">POST</span>&nbsp;{url}/index.php/front_liner/absent</a>
														</h4>
													</div>
													<div id="collapse13" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Berikut beberapa atribut yang harus diisi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"nik": "string",
	"nama": "string",
	"tgl_absensi": "YYYY-mm-dd HH:ii:ss",
	"keterangan_absen": "ok/ izin/ sakit",
	"image": "base64",
	"lat": "string",
	"lng": "string"
}</code>
																		</pre>
																	</div>
																</div>
																Keterangan :
																<ul>
																	<li>Untuk atribut image berupa string <b>base64</b> dari sebuah foto, dan tipe data yang dibolehkan dari foto yang akan diupload adalah <b>.jpg</b></li>
																	<!-- <li>Kode kelompok, diambil dari tabel kelompok</li> -->
																</ul>
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse14" aria-expanded="false" class="collapsed"><span class="label label-info">POST</span>&nbsp;{url}/index.php/front_liner/absent_done</a>
														</h4>
													</div>
													<div id="collapse14" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Berikut beberapa atribut yang harus diisi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_absen": "int",
	"id_user": "int",
	"tanggal_absen_done": "YYYY-mm-dd"
}</code>
																		</pre>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse80" aria-expanded="false" class="collapsed"><span class="label label-success">GET</span>&nbsp;{url}/index.php/front_liner/status_absen?id_user={id_user}</a>
														</h4>
													</div>
													<div id="collapse80" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Berfungsi untuk mengecek kehadiran front liner pada hari tertentu<br>Output datanya sebagai berikut,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"status_absen": "masuk/ keluar",
	"absen_today": "ya/ tidak",
	"keterangan_absen": "ok/ izin/ sakit",
}</code>
																		</pre>
																	</div>
																</div>
																<!-- Keterangan :
																<ul>
																	<li>Kode kelompok dan Keterangan, jika user merupakan super admin/ hsse/ cdo maka field tadi tidak akan muncul </li>
																	<li>Kode kelompok, diambil dari tabel kelompok</li>
																</ul> -->
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse70" aria-expanded="false" class="collapsed"><span class="label label-success">GET</span>&nbsp;{url}/index.php/front_liner/location?id_user={id_user}</a>
														</h4>
													</div>
													<div id="collapse70" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Fungsi ini menampilkan lokasi dari seorang FL,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"nama": "string",
	"lat": "string",
	"lng": "string"
}</code>
																		</pre>
																	</div>
																</div>
																<!-- Keterangan :
																<ul>
																	<li>Kode kelompok dan Keterangan, jika user merupakan super admin/ hsse/ cdo maka field tadi tidak akan muncul </li>
																	<li>Kode kelompok, diambil dari tabel kelompok</li>
																</ul> -->
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse105" aria-expanded="false" class="collapsed"><span class="label label-success">GET</span>&nbsp;{url}/index.php/front_liner/product?id_client={id_client}</a>
														</h4>
													</div>
													<div id="collapse105" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Fungsi untuk melihat suatu barang dari client tertentu<br>Output datanya sebagai berikut,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_produk": "int",
	"kode_produk": "string",
	"nama_produk": "string",
	"foto": "url foto",
	"id_client": "int",
	"nama_client": "string"
}</code>
																		</pre>
																	</div>
																</div>
																<!-- Keterangan :
																<ul>
																	<li>Kode kelompok dan Keterangan, jika user merupakan super admin/ hsse/ cdo maka field tadi tidak akan muncul </li>
																	<li>Kode kelompok, diambil dari tabel kelompok</li>
																</ul> -->
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse104" aria-expanded="false" class="collapsed"><span class="label label-success">GET</span>&nbsp;{url}/index.php/front_liner/project?id_fl={id_fl}</a>
														</h4>
													</div>
													<div id="collapse104" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Fungsi untuk melihat data project dari seorang FL<br>Output datanya sebagai berikut,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_tl": "int",
	"nama_tl": "string",
	"kode_project": "string",
	"nama_project": "string",
	"id_client": "int",
	"nama_client": "string"
}</code>
																		</pre>
																	</div>
																</div>
																<!-- Keterangan :
																<ul>
																	<li>Kode kelompok dan Keterangan, jika user merupakan super admin/ hsse/ cdo maka field tadi tidak akan muncul </li>
																	<li>Kode kelompok, diambil dari tabel kelompok</li>
																</ul> -->
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse55" aria-expanded="false" class="collapsed"><span class="label label-success">GET</span>&nbsp;{url}/index.php/front_liner/report?nik_fl={nik_fl}</a>
														</h4>
													</div>
													<div id="collapse55" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Fungsi ini menampilkan semua laporan yang dibuat seorang FL<br>Output datanya sebagai berikut,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_laporan": "int",
	"tgl_laporan": "YYYY-mm-dd HH:ii:ss",
	"id_outlet": "int",
	"nama_outlet": "string",
	"nama_produk": "string",
	"kode_produk": "string",
	"kondisi": "return/ rusak/ kadaluarsa",
	"jumlah": "string",
	"foto": "url foto",
	"keterangan": "string",
	"tgl_masuk": "YYYY-mm-dd HH:ii:ss",
	"tgl_kadaluarsa": "YYYY-mm-dd HH:ii:ss"
}</code>
																		</pre>
																	</div>
																</div>
																<!-- Keterangan :
																<ul>
																	<li>Kode kelompok dan Keterangan, jika user merupakan super admin/ hsse/ cdo maka field tadi tidak akan muncul </li>
																	<li>Kode kelompok, diambil dari tabel kelompok</li>
																</ul> -->
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse54" aria-expanded="false" class="collapsed"><span class="label label-success">GET</span>&nbsp;{url}/index.php/front_liner/report?id_laporan={id_laporan}</a>
														</h4>
													</div>
													<div id="collapse54" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Fungsi ini untuk mendapatkan report FL berdasarkan id_laporan yang dipilih<br>Output datanya sebagai berikut,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_laporan": "int",
	"tgl_laporan": "YYYY-mm-dd HH:ii:ss",
	"id_outlet": "int",
	"nama_outlet": "string",
	"nama_produk": "string",
	"kode_produk": "string",
	"kondisi": "return/ rusak/ kadaluarsa",
	"jumlah": "string",
	"foto": "url foto",
	"keterangan": "string",
	"tgl_masuk": "YYYY-mm-dd HH:ii:ss",
	"tgl_kadaluarsa": "YYYY-mm-dd HH:ii:ss"
}</code>
																		</pre>
																	</div>
																</div>
																<!-- Keterangan :
																<ul>
																	<li>Kode kelompok dan Keterangan, jika user merupakan super admin/ hsse/ cdo maka field tadi tidak akan muncul </li>
																	<li>Kode kelompok, diambil dari tabel kelompok</li>
																</ul> -->
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse53" aria-expanded="false" class="collapsed"><span class="label label-info">POST</span>&nbsp;{url}/index.php/front_liner/report</a>
														</h4>
													</div>
													<div id="collapse53" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Berikut beberapa atribut yang harus diisi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"tgl_laporan": "YYYY-mm-dd HH:ii:ss",
	"id_outlet": "int",
	"nik_fl": "int",
	"kode_produk": "string",
	"kondisi": "return/ rusak/ kadaluarsa",
	"jumlah": "string",
	"foto": "base64",
	"keterangan": "string",
	"tgl_masuk": "YYYY-mm-dd HH:ii:ss",
	"tgl_kadaluarsa": "YYYY-mm-dd HH:ii:ss"
}</code>
																		</pre>
																	</div>
																</div>
																Keterangan :
																<ul>
																	<li>Untuk foto berupa string <b>base64</b> dari sebuah foto, dan tipe data yang dibolehkan dari foto yang akan diupload adalah <b>.jpg</b></li>
																	<!-- <li>Kode kelompok, diambil dari tabel kelompok</li> -->
																</ul>
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse52" aria-expanded="false" class="collapsed"><span class="label label-warning">PUT</span>&nbsp;{url}/index.php/front_liner/report</a>
														</h4>
													</div>
													<div id="collapse52" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Berikut beberapa atribut yang harus diisi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_laporan": "int",
	"tgl_laporan": "YYYY-mm-dd HH:ii:ss",
	"id_outlet": "int",
	"id_user": "int",
	"kode_produk": "string",
	"kondisi": "return/ rusak/ kadaluarsa",
	"jumlah": "string",
	"foto": "base64",
	"keterangan": "string",
	"tgl_masuk": "YYYY-mm-dd HH:ii:ss",
	"tgl_kadaluarsa": "YYYY-mm-dd HH:ii:ss"
}</code>
																		</pre>
																	</div>
																</div>
																Keterangan :
																<ul>
																	<li>Index "id_laporan" digunakan sebagai parameter untuk mengubah data lain.</li>
																	<li>Untuk atribut foto, persyaratan sama dengan method <b>POST</b></li>
																</ul>
															</div>
														</div>
													</div>
												</div>
												<!-- End Child-->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse85" aria-expanded="false" class="collapsed"><span class="label label-success">GET</span>&nbsp;{url}/index.php/front_liner/report_penjualan?id_user={id_user}</a>
														</h4>
													</div>
													<div id="collapse85" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Fungsi ini menampilkan semua laporan penjualan yang dibuat seorang FL<br>Output datanya sebagai berikut,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_laporan": "int",
	"id_user": "int",
	"nama": "string",
	"nama_produk": "string",
	"kode_produk": "string",
	"stok_awal": "int",
	"jumlah_tambahan": "int",
	"stok_akhir": "int",
	"tanggal_report": "YYYY-mm-dd HH:ii:ss"
}</code>
																		</pre>
																	</div>
																</div>
																<!-- Keterangan :
																<ul>
																	<li>Kode kelompok dan Keterangan, jika user merupakan super admin/ hsse/ cdo maka field tadi tidak akan muncul </li>
																	<li>Kode kelompok, diambil dari tabel kelompok</li>
																</ul> -->
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse86" aria-expanded="false" class="collapsed"><span class="label label-success">GET</span>&nbsp;{url}/index.php/front_liner/report_penjualan?id_laporan={id_laporan}</a>
														</h4>
													</div>
													<div id="collapse86" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Fungsi ini untuk mendapatkan report penjualan FL berdasarkan id_laporan yang dipilih<br>Output datanya sebagai berikut,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_laporan": "int",
	"id_user": "int",
	"nama": "string",
	"nama_produk": "string",
	"kode_produk": "string",
	"stok_awal": "int",
	"stok_akhir": "int",
	"tanggal_report": "YYYY-mm-dd HH:ii:ss"
}</code>
																		</pre>
																	</div>
																</div>
																<!-- Keterangan :
																<ul>
																	<li>Kode kelompok dan Keterangan, jika user merupakan super admin/ hsse/ cdo maka field tadi tidak akan muncul </li>
																	<li>Kode kelompok, diambil dari tabel kelompok</li>
																</ul> -->
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse87" aria-expanded="false" class="collapsed"><span class="label label-info">POST</span>&nbsp;{url}/index.php/front_liner/report_penjualan</a>
														</h4>
													</div>
													<div id="collapse87" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Fungsi untuk menyimpan data laporan oleh FL<br>Berikut beberapa atribut yang harus diisi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_user": "id_user",
	"kode_produk": "string",
	"stok_awal": "int",
	"jumlah_tambahan": "int",
	"stok_akhir": "int",
	"tanggal_report": "YYYY-mm-dd HH:ii:ss"
}</code>
																		</pre>
																	</div>
																</div>
																<!-- Keterangan : -->
																<ul>
																	<!-- <li>Untuk foto berupa string <b>base64</b> dari sebuah foto, dan tipe data yang dibolehkan dari foto yang akan diupload adalah <b>.jpg</b></li> -->
																	<!-- <li>Kode kelompok, diambil dari tabel kelompok</li> -->
																</ul>
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse88" aria-expanded="false" class="collapsed"><span class="label label-warning">PUT</span>&nbsp;{url}/index.php/front_liner/report_penjualan</a>
														</h4>
													</div>
													<div id="collapse88" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Fungsi untuk mengubah data laporan penjualan oleh FL<br>Berikut beberapa atribut yang harus diisi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_laporan": "int",
	"id_user": "int",
	"kode_produk": "string",
	"stok_awal": "string",
	"jumlah_tambahan": "string",
	"stok_akhir": "int",
	"tanggal_report": "YYYY-mm-dd HH:ii:ss"
}</code>
																		</pre>
																	</div>
																</div>
																Keterangan :
																<ul>
																	<li>Index "id_laporan" digunakan sebagai parameter untuk mengubah data lain.</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
												<!-- End Child-->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse51" aria-expanded="false" class="collapsed"><span class="label label-danger">GET</span>&nbsp;{url}/index.php/front_liner/delete_report?id_laporan={id_laporan}</a>
														</h4>
													</div>
													<div id="collapse51" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Fungsi untuk menghapus data laporan kerja dari seorang FL
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<!-- <pre>
																			<code>{
	"id_laporan": "int"
}</code>
																		</pre> -->
																	</div>
																</div>
																Keterangan :
																<ul>
																	<li>Output hanya ada 2 yaitu '<b>success</b>' dan '<b>failed</b>'</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
												<!-- End Child-->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse68" aria-expanded="false" class="collapsed"><span class="label label-success">GET</span>&nbsp;{url}/index.php/front_liner/report_competitor?id_fl={id_user}</a>
														</h4>
													</div>
													<div id="collapse68" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Fungsi ini menampilkan semua laporan bagaimana keadaan pesaing/ kompetitor yang dibuat seorang FL<br>Output datanya sebagai berikut,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_report_competitor": "int",
	"nama": "string",
	"foto": "url foto",
	"deskripsi": "string",
	"waktu": "YYYY-mm-dd HH:ii:ss"
}</code>
																		</pre>
																	</div>
																</div>
																<!-- Keterangan :
																<ul>
																	<li>Kode kelompok dan Keterangan, jika user merupakan super admin/ hsse/ cdo maka field tadi tidak akan muncul </li>
																	<li>Kode kelompok, diambil dari tabel kelompok</li>
																</ul> -->
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse67" aria-expanded="false" class="collapsed"><span class="label label-info">POST</span>&nbsp;{url}/index.php/front_liner/report_competitor</a>
														</h4>
													</div>
													<div id="collapse67" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Fungsi untuk menyimpan laporan dari kompetitor oleh seorang FL<br>Berikut beberapa atribut yang harus diisi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_user": "int",
	"foto": "base64",
	"deskripsi": "string"
}</code>
																		</pre>
																	</div>
																</div>
																Keterangan :
																<ul>
																	<li>Untuk foto berupa string <b>base64</b> dari sebuah foto, dan tipe data yang dibolehkan dari foto yang akan diupload adalah <b>.jpg</b></li>
																	<li>Waktu laporan diambil saat data tersebut masuk ke database</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse66" aria-expanded="false" class="collapsed"><span class="label label-warning">PUT</span>&nbsp;{url}/index.php/front_liner/report_competitor</a>
														</h4>
													</div>
													<div id="collapse66" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Fungsi untuk mengubah data laporan kompetitor<br>Berikut beberapa atribut yang harus diisi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_report_competitor": "int",
	"id_user": "int",
	"foto": "base64",
	"deskripsi": "string"
}</code>
																		</pre>
																	</div>
																</div>
																Keterangan :
																<ul>
																	<li>Index "id_report_competitor" digunakan sebagai parameter untuk mengubah data lain.</li>
																	<li>Untuk atribut foto, persyaratan sama dengan method <b>POST</b></li>
																</ul>
															</div>
														</div>
													</div>
												</div>
												<!-- End Child-->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse65" aria-expanded="false" class="collapsed"><span class="label label-danger">GET</span>&nbsp;{url}/index.php/front_liner/delete_report_competitor?id_report_competitor={id_report_competitor}</a>
														</h4>
													</div>
													<div id="collapse65" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Fungsi untuk menghapus data laporan kompetitor
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<!-- <pre>
																			<code>{
	"id_report_competitor": "int"
}</code>
																		</pre> -->
																	</div>
																</div>
																Keterangan :
																<ul>
																	<li>Output hanya ada 2 yaitu '<b>success</b>' dan '<b>failed</b>'</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
												<!-- End Child-->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse98" aria-expanded="false" class="collapsed"><span class="label label-success">GET</span>&nbsp;{url}/index.php/front_liner/report_kadaluarsa?id_user={id_user}</a>
														</h4>
													</div>
													<div id="collapse98" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Fungsi ini menampilkan semua laporan barang yang kadaluarsa yang dibuat seorang FL<br>Output datanya sebagai berikut,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_report_kadaluarsa": "int",
	"foto": "url foto",
	"kode_produk": "string",
	"nama_produk": "string",
	"jumlah": "int",
	"tgl_masuk": "YYYY-mm-dd HH:ii:ss",
	"tgl_kadaluarsa": "YYYY-mm-dd HH:ii:ss",
	"keterangan": "string"
}</code>
																		</pre>
																	</div>
																</div>
																<!-- Keterangan :
																<ul>
																	<li>Kode kelompok dan Keterangan, jika user merupakan super admin/ hsse/ cdo maka field tadi tidak akan muncul </li>
																	<li>Kode kelompok, diambil dari tabel kelompok</li>
																</ul> -->
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse97" aria-expanded="false" class="collapsed"><span class="label label-info">POST</span>&nbsp;{url}/index.php/front_liner/report_kadaluarsa</a>
														</h4>
													</div>
													<div id="collapse97" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Fungsi untuk menyimpan laporan barang yang kadaluarsa oleh seorang FL<br>Berikut beberapa atribut yang harus diisi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_user": "int",
	"foto": "base64",
	"kode_produk": "string",
	"jumlah": "int",
	"tgl_masuk": "YYYY-mm-dd HH:ii:ss",
	"tgl_kadaluarsa": "YYYY-mm-dd HH:ii:ss",
	"keterangan": "string"
}</code>
																		</pre>
																	</div>
																</div>
																Keterangan :
																<ul>
																	<li>Untuk foto berupa string <b>base64</b> dari sebuah foto, dan tipe data yang dibolehkan dari foto yang akan diupload adalah <b>.jpg</b></li>
																</ul>
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse96" aria-expanded="false" class="collapsed"><span class="label label-warning">PUT</span>&nbsp;{url}/index.php/front_liner/report_kadaluarsa</a>
														</h4>
													</div>
													<div id="collapse96" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Fungsi untuk mengubah data laporan barang yang kadaluarsa oleh seorang FL<br>Berikut beberapa atribut yang harus diisi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_report_kadaluarsa": "int",
	"id_user": "int",
	"foto": "base64",
	"kode_produk": "string",
	"jumlah": "int",
	"tgl_masuk": "YYYY-mm-dd HH:ii:ss",
	"tgl_kadaluarsa": "YYYY-mm-dd HH:ii:ss",
	"keterangan": "string"
}</code>
																		</pre>
																	</div>
																</div>
																Keterangan :
																<ul>
																	<li>Index "id_report_kadaluarsa" digunakan sebagai parameter untuk mengubah data lain.</li>
																	<li>Untuk atribut foto, persyaratan sama dengan method <b>POST</b></li>
																</ul>
															</div>
														</div>
													</div>
												</div>
												<!-- End Child-->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse92" aria-expanded="false" class="collapsed"><span class="label label-success">GET</span>&nbsp;{url}/index.php/front_liner/report_aktivitas?id_user={id_user}</a>
														</h4>
													</div>
													<div id="collapse92" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Fungsi ini menampilkan semua laporan aktivitas dari seorang FL<br>Output datanya sebagai berikut,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_laporan": "int",
	"id_user": "int",
	"nama": "string",
	"foto_outlet": "url foto",
	"keterangan": "string",
	"tgl": "YYYY-mm-dd HH:ii:ss"
}</code>
																		</pre>
																	</div>
																</div>
																<!-- Keterangan :
																<ul>
																	<li>Kode kelompok dan Keterangan, jika user merupakan super admin/ hsse/ cdo maka field tadi tidak akan muncul </li>
																	<li>Kode kelompok, diambil dari tabel kelompok</li>
																</ul> -->
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse91" aria-expanded="false" class="collapsed"><span class="label label-info">POST</span>&nbsp;{url}/index.php/front_liner/report_aktivitas</a>
														</h4>
													</div>
													<div id="collapse91" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Fungsi untuk menyimpan laporan dari kompetitor oleh seorang FL<br>Berikut beberapa atribut yang harus diisi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_user": "int",
	"foto_outlet": "base64",
	"keterangan": "string"
}</code>
																		</pre>
																	</div>
																</div>
																Keterangan :
																<ul>
																	<li>Untuk foto berupa string <b>base64</b> dari sebuah foto, dan tipe data yang dibolehkan dari foto yang akan diupload adalah <b>.jpg</b></li>
																	<!-- <li>Waktu laporan diambil saat data tersebut masuk ke database</li> -->
																</ul>
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse90" aria-expanded="false" class="collapsed"><span class="label label-warning">PUT</span>&nbsp;{url}/index.php/front_liner/report_aktivitas</a>
														</h4>
													</div>
													<div id="collapse90" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Fungsi untuk mengubah data laporan aktivitas FL<br>Berikut beberapa atribut yang harus diisi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_laporan": "int",
	"id_user": "int",
	"foto_outlet": "base64",
	"keterangan": "string"
}</code>
																		</pre>
																	</div>
																</div>
																Keterangan :
																<ul>
																	<li>Index "id_laporan" digunakan sebagai parameter untuk mengubah data lain.</li>
																	<li>Untuk atribut foto_outlet, persyaratan sama dengan method <b>POST</b></li>
																</ul>
															</div>
														</div>
													</div>
												</div>
												<!-- End Child-->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse89" aria-expanded="false" class="collapsed"><span class="label label-danger">GET</span>&nbsp;{url}/index.php/front_liner/delete_report_aktivitas?id_laporan={id_laporan}</a>
														</h4>
													</div>
													<div id="collapse89" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Fungsi untuk menghapus data laporan aktifitas dari FL
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<!-- <pre>
																			<code>{
	"id_report_competitor": "int"
}</code>
																		</pre> -->
																	</div>
																</div>
																Keterangan :
																<ul>
																	<li>Output hanya ada 2 yaitu '<b>success</b>' dan '<b>failed</b>'</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
												<!-- End Parent and Child -->
												<!-- Start Parent -->
												<div class="heading">
													<h4>
														<a class="toggleEndpointList">Non Front Liner</a>
													</h4>
												</div>
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse15" aria-expanded="false" class="collapsed"><span class="label label-info">POST</span>&nbsp;{url}/index.php/non_front_liner/absent</a>
														</h4>
													</div>
													<div id="collapse15" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Berikut beberapa atribut yang harus diisi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"nik": "string",
	"nama": "string",
	"tgl_absensi": "YYYY-mm-dd HH:ii:ss",
	"keterangan_absen": "ok/ izin/ sakit",
	"image": "base64",
	"lat": "string",
	"lng": "string"
}</code>
																		</pre>
																	</div>
																</div>
																Keterangan :
																<ul>
																	<li>Untuk atribut image berupa string <b>base64</b> dari sebuah foto, dan tipe data yang dibolehkan dari foto yang akan diupload adalah <b>.jpg</b></li>
																	<!-- <li>Waktu laporan diambil saat data tersebut masuk ke database</li> -->
																</ul>
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse16" aria-expanded="false" class="collapsed"><span class="label label-info">POST</span>&nbsp;{url}/index.php/non_front_liner/absent_done</a>
														</h4>
													</div>
													<div id="collapse16" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Berikut beberapa atribut yang harus diisi,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_absen": "int",
	"id_user": "int",
	"tanggal_absen_done": "YYYY-mm-dd"
}</code>
																		</pre>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!-- End Parent and Child -->
												<!-- Start Parent -->
												<div class="heading">
													<h4>
														<a class="toggleEndpointList">Client</a>
													</h4>
												</div>
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse75" aria-expanded="false" class="collapsed"><span class="label label-success">GET</span>&nbsp;{url}/index.php/client/project?nik_client={nik_client}</a>
														</h4>
													</div>
													<div id="collapse75" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Fungsi untuk mengetahui project yang dimiliki client<br>Berikut keluran datanya,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																		<code>
{
    "data_utama": [
        {
            "id_project": "int",
            "kode_project": "string",
            "nama_project": "string",
            "jumlah_region": "int"
        }
    ],
    "data_detail": [
        {
            "id_project_region": "int",
            "nama_region": "string",
            "nama_tl": "string",
            "id_region": "int"
        }
    ]
}</code>
																		</pre>
																	</div>
																</div>
																<!-- Keterangan :
																<ul>
																	<li>Untuk atribut image berupa string <b>base64</b> dari sebuah foto, dan tipe data yang dibolehkan dari foto yang akan diupload adalah <b>.jpg</b></li>
																	<li>Waktu laporan diambil saat data tersebut masuk ke database</li>
																</ul> -->
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse76" aria-expanded="false" class="collapsed"><span class="label label-success">GET</span>&nbsp;{url}/index.php/client/project?kode_project={kode_project}</a>
														</h4>
													</div>
													<div id="collapse76" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Mengambil data sebuah project berdasarkan project yang dipilih<br>Berikut keluaran datanya,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																		<code>
{
    "data_utama": [
        {
            "id_project": "int",
            "kode_project": "string",
            "nama_project": "string",
            "jumlah_region": "int"
        }
    ],
    "data_detail": [
        {
            "id_project_region": "int",
            "nama_region": "string",
            "nama_tl": "string",
            "id_region": "int"
        }
    ]
}</code>
																		</pre>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse77" aria-expanded="false" class="collapsed"><span class="label label-success">GET</span>&nbsp;{url}/index.php/client/report_tl?id_tl={id_user}</a>
														</h4>
													</div>
													<div id="collapse77" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Berfungsi untuk menampilkan data laporan dari seorang TL<br>Output datanya sebagai berikut,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_laporan": "int",
	"tgl_laporan": "YYYY-mm-dd HH:ii:ss",
	"tipe_laporan": "sendiri/ kompetitor",
	"foto_kondisi": "url foto",
	"keterangan": "string",
	"lat": "string",
	"lng": "string"
}</code>
																		</pre>
																	</div>
																</div>
																<!-- Keterangan :
																<ul>
																	<li>Kode kelompok dan Keterangan, jika user merupakan super admin/ hsse/ cdo maka field tadi tidak akan muncul </li>
																	<li>Kode kelompok, diambil dari tabel kelompok</li>
																</ul> -->
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- Start Child -->
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse78" aria-expanded="false" class="collapsed"><span class="label label-success">GET</span>&nbsp;{url}/index.php/client/report_competitor_tl?id_tl={id_user}</a>
														</h4>
													</div>
													<div id="collapse78" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
														<div class="panel-body">
															Fungsi ini menampilkan semua laporan bagaimana keadaan pesaing/ kompetitor yang dibuat seorang TL<br>Output datanya sebagai berikut,
															<div class="signature-container">
																<div class="snippet" style="display: block;">
																	<div class="snippet_json" style="display: block;">
																		<pre>
																			<code>{
	"id_report_competitor": "int",
	"nama": "string",
	"foto": "url foto",
	"deskripsi": "string",
	"waktu": "YYYY-mm-dd HH:ii:ss"
}</code>
																		</pre>
																	</div>
																</div>
																<!-- Keterangan :
																<ul>
																	<li>Kode kelompok dan Keterangan, jika user merupakan super admin/ hsse/ cdo maka field tadi tidak akan muncul </li>
																	<li>Kode kelompok, diambil dari tabel kelompok</li>
																</ul> -->
															</div>
														</div>
													</div>
												</div>
												<!-- End Child -->
												<!-- End Parent and Child -->
											</div>
                                        </div>
                                    </div>
                                    <!-- END EXAMPLE TABLE PORTLET-->
                                </div>
                            </div>
						</div>
					<!-- END PAGE CONTENT INNER -->
					</div>
                </div>
                <!-- END PAGE CONTENT BODY -->
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
		<!-- BEGIN PRE-FOOTER -->
        <div class="page-prefooter">
            <div class="container">
                <div class="row">
                </div>
            </div>
        </div>
        <!-- END PRE-FOOTER -->
        <!-- BEGIN INNER FOOTER -->
        <div class="page-footer">
            <div class="container">© 2015-2019, Intercipta Corp
            </div>
        </div>
        <div class="scroll-to-top">
		<img src='http://icons.iconarchive.com/icons/custom-icon-design/pretty-office-5/256/navigate-up-icon.png' width='20%' />
        </div>
        <!-- END FOOTER -->
        <script src="http://datum.aplikasiku.online/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="http://datum.aplikasiku.online/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="http://datum.aplikasiku.online/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="http://datum.aplikasiku.online/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="http://datum.aplikasiku.online/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="http://datum.aplikasiku.online/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="http://datum.aplikasiku.online/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
		<script src="http://datum.aplikasiku.online/assets/global/scripts/app.min.js" type="text/javascript"></script>
		<!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="http://datum.aplikasiku.online/assets/layouts/layout3/scripts/layout.min.js" type="text/javascript"></script>
        <script src="http://datum.aplikasiku.online/assets/layouts/layout3/scripts/demo.min.js" type="text/javascript"></script>
        <script src="http://datum.aplikasiku.online/assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>