<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <title>Ata Sevinç</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Raleway" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
				<a href="#menu-toggle" class="glyphicon glyphicon-menu-hamburger" id="menu-toggle"></a>
                <li class="sidebar-image">
					<img src="Ata_Sevinc_2021.png" alt="">
                </li>
                <li class="">
					<a href="./english.php"><font color="#700000">English</font></a>
				</li>
                <li class="">
					<a href="./index.php"><font size=4>Anasayfa</font></a>
				</li>
				<li class="">
					<a href="./dersler.php">Dersler/Sınavlar</a>
				</li>
				<li>
					<a href="./ozgecmis.php">Özgeçmiş</a>
				</li>
				<li class="">
					<a href="./calismalar.php">Çalışma Alanları</a>
				</li>
				<li class="">
					<a href="./yayin.php">Yayın ve Eserler</a>
				</li>
				<li class="active">
					<a href="./cesitli.php">Çeşitli Sayfalar</a>
				</li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper" class="">
			<a href="#menu-toggle" class="glyphicon glyphicon-menu-hamburger" id="menu-toggle2"></a>
            <div class="container-fluid">
				<p class="update">Son yenilenme tarihi: <span class="text-primary">10.3.2019</span></p>
                <div class="row-content">
                    <h1>Çeşitli Sayfalar</h1>
					<br>
					<ul class="list-group">
						<li class="list-group-item"><a href="http://eem.kku.edu.tr/">Bölümümüz</a></li>
						<li class="list-group-item"><a href="http://mf.kku.edu.tr/">Fakültemiz</a></li>
						<li class="list-group-item"><a href="http://www.kku.edu.tr/">Üniversitemiz</a></li>
						<li class="list-group-item"><a href="https://atasevinc.net/cesit/bilmece.php">Bilmeceler</a></li>
						<li class="list-group-item"><a href="https://atasevinc.net/tamsayi.php">Tamsayılar</a></li>
						<li class="list-group-item">Denklemler: <a href="https://atasevinc.net/denklem/tek_bilinmeyen.php">Tek bilinmeyen</a>&nbsp;&nbsp;&nbsp;<a href="https://atasevinc.net/denklem/iki_bilinmeyen.htm">İki bilinmeyen</a></li>
						<li class="list-group-item"><strong><a href="https://atasevinc.net/emd/motordesign.php">Electric motor and transformer design for simulation purposes</a></strong></li>
						
						
					</ul>
					<br><br><br><br><br><br><br><br><br><br><br>
					
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
	if ($(window).width() < 768) {
		$("#menu-toggle").hide();
		$("#menu-toggle2").show();
	}
	else {
		$("#menu-toggle2").hide();
		$("#menu-toggle").show();
	}

	$(window).on('resize', function() {
    
        if ($(window).width() < 768) {
            $("#menu-toggle").hide();
			$("#menu-toggle2").show();
        }
		else {
			$("#menu-toggle2").hide();
			$("#menu-toggle").show();
        }
	});
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
		$("#menu-toggle").hide();
		$("#menu-toggle2").show();
    });
	$("#menu-toggle2").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
		$("#menu-toggle2").hide();
		$("#menu-toggle").show();
    });
    </script>

</body>

</html>
