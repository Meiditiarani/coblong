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
		<div class="container">
            <div class="row">
                <div class="col-lg-8 text-center">
				<?php				
					$nama=$_POST['nama'];
					$email=$_POST['email'];
					$alamat	=$_POST['alamat'];
					$keluhan=$_POST['keluhan'];

					include('conn.php');
					
					if(($nama!="") or ($email!="") or ($alamat!="") or ($keluhan!=""))
						{
							mysql_query("insert into keluhan values('$nama','$email','$alamat','$keluhan')");
							echo "KELUHAN TERKIRIM "; 
							echo "TERIMA KASIH ATAS KELUHAN YANG ANDA KIRIM";
						}
						else
						{
							echo "KELUHAN TIDAK TERKIRIM";
						}
					?>
				</div>
			</div>
		</div>

</body>
</html>
