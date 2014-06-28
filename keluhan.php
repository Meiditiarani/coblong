<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kecamatan Coblong</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/freelancer.css" rel="stylesheet" type="text/css">
	
	<!-- Add custom CSS here 
    <link href="css/full-slider.css" rel="stylesheet"> -->

    <!-- Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- IE8 support for HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" class="index">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#page-top">PELAYANAN KECAMATAN COBLONG JITU</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="/coblong/index.php#portfolio">PELAYANAN</a>
                    </li>
					<li class="page-scroll">
                        <a href="/coblong/keluhan.php">KELUHAN</a>
                    </li>
                </ul>
            </div>

            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
	<section id="keluhan">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <br>
					<h2>Keluhan</h2>
                    <hr class="star-primary">
                </div>
            </div>	
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
			<?php
				    if($_POST){  
					$nama=$_POST['nama'];
					$email=$_POST['email'];
					$alamat=$_POST['alamat'];
					$keluhan=$_POST['keluhan'];   
					$error = array();  
				if(empty($nama)){  
				  $error['nama'] = 'Nama tidak boleh kosong';  
				}  
				if(empty($email)){  
				  $error['email'] = 'Email tidak boleh kosong'; }
				  else{
						if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
						   $error['email'] = "tidak sesuai format";
						}
				  }
				
				if(empty($alamat)){  
				  $error['alamat'] = 'alamat tidak boleh kosong'; 				  
				}  
				if(empty($keluhan)){  
				  $error['keluhan'] = 'Keluhan tidak boleh kosong';  
				}  
				if(empty($error)){  
						//prosess data    
						include('simpan.php');
						unset($_POST);
				}  
				}
				?>

                    <form method="post" action=""> 
				
					<!--<form action='simpan.php' method='POST'>-->
                        <div class="row">
                            <div class="form-group col-xs-12 floating-label-form-group">
                                <label for="nama">Nama</label>
								<input class="form-control" type="text" name="nama" placeholder="Nama" value="<?php echo isset($_POST['nama']) ? $_POST['nama'] : '';?>">
								<div style="color:red"><?php echo isset($error['nama']) ? $error['nama'] : '';?></div> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-12 floating-label-form-group">
                                <label for="email">Email</label>
								<input class="form-control" type="text" name="email" placeholder="Email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '';?>">
								<div style="color:red"><?php echo isset($error['email']) ? $error['email'] : '';?></div> 
                            </div>
                        </div>
						<div class="row">
                            <div class="form-group col-xs-12 floating-label-form-group">
                                <label for="alamat">alamat</label>
								<input class="form-control" type="text" name="alamat" placeholder="Alamat" value="<?php echo isset($_POST['alamat']) ? $_POST['alamat'] : '';?>">
								<div style="color:red"><?php echo isset($error['alamat']) ? $error['alamat'] : '';?></div> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-12 floating-label-form-group">
                                <label for="keluhan">Keluhan</label>
								<textarea placeholder="Keluhan" class="form-control" name="keluhan" rows="2"><?php echo isset($_POST['keluhan']) ? $_POST['keluhan'] : '';?></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-lg btn-success" value="submit" name="submit">Kirim</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
		</section>
	</body>
</html>
