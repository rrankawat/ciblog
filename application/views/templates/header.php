<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">

    <!-- Ckeditor -->
    <script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>

	<title>ciBlog</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  <div class="container">
	  	<a class="navbar-brand" href="<?php echo base_url() ?>">ciBlog</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarColor02">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item">
		        <a class="nav-link" href="<?php echo base_url() ?>">Home</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="<?php echo base_url('about') ?>">About</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="<?php echo base_url('posts/index') ?>">Blog</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="<?php echo base_url('categories/index') ?>">Categories</a>
		      </li>
		    </ul>
		    <form class="form-inline my-2 my-lg-0">
				<ul class="navbar-nav mr-auto">
					<?php if(!$this->session->userdata('logged_in')): ?>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo base_url('users/register') ?>">Register</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo base_url('users/login') ?>">Login</a>
						</li>
					<?php endif; ?>
					<?php if($this->session->userdata('logged_in')): ?>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo base_url('users/logout') ?>">Logout</a>
						</li>
					<?php endif; ?>
				</ul>
		    </form>
		  </div>
	  </div>
	</nav>

	<div class="container"><br/>
		<!-- Flash messages -->
		<?php if($this->session->flashdata('user_registered')): ?>
			<div class="alert alert-dismissible alert-success">
			  <button type="button" class="close" data-dismiss="alert">&times;</button>
			  <?php echo $this->session->flashdata('user_registered'); ?>
			</div>
		<?php endif; ?>

		<?php if($this->session->flashdata('post_created')): ?>
			<div class="alert alert-dismissible alert-success">
			  <button type="button" class="close" data-dismiss="alert">&times;</button>
			  <?php echo $this->session->flashdata('post_created'); ?>
			</div>
		<?php endif; ?>

		<?php if($this->session->flashdata('post_updated')): ?>
			<div class="alert alert-dismissible alert-success">
			  <button type="button" class="close" data-dismiss="alert">&times;</button>
			  <?php echo $this->session->flashdata('post_updated'); ?>
			</div>
		<?php endif; ?>

		<?php if($this->session->flashdata('post_deleted')): ?>
			<div class="alert alert-dismissible alert-success">
			  <button type="button" class="close" data-dismiss="alert">&times;</button>
			  <?php echo $this->session->flashdata('post_deleted'); ?>
			</div>
		<?php endif; ?>

		<?php if($this->session->flashdata('login_failed')): ?>
			<div class="alert alert-dismissible alert-danger">
			  <button type="button" class="close" data-dismiss="alert">&times;</button>
			  <?php echo $this->session->flashdata('login_failed'); ?>
			</div>
		<?php endif; ?>

		<?php if($this->session->flashdata('user_Loggedin')): ?>
			<div class="alert alert-dismissible alert-success">
			  <button type="button" class="close" data-dismiss="alert">&times;</button>
			  <?php echo $this->session->flashdata('user_Loggedin'); ?>
			</div>
		<?php endif; ?>

		<?php if($this->session->flashdata('user_loggedout')): ?>
			<div class="alert alert-dismissible alert-success">
			  <button type="button" class="close" data-dismiss="alert">&times;</button>
			  <?php echo $this->session->flashdata('user_loggedout'); ?>
			</div>
		<?php endif; ?>

		<?php if($this->session->flashdata('category_deleted')): ?>
			<div class="alert alert-dismissible alert-success">
			  <button type="button" class="close" data-dismiss="alert">&times;</button>
			  <?php echo $this->session->flashdata('category_deleted'); ?>
			</div>
		<?php endif; ?>