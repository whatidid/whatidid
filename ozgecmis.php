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
				<li class="active">
					<a href="./ozgecmis.php">Özgeçmiş</a>
				</li>
				<li class="">
					<a href="./calismalar.php">Çalışma Alanları</a>
				</li>
				<li class="">
					<a href="./yayin.php">Yayın ve Eserler</a>
				</li>
				<li class="">
					<a href="./cesitli.php">Çeşitli Sayfalar</a>
				</li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper" class="">
			<a href="#menu-toggle" class="glyphicon glyphicon-menu-hamburger" id="menu-toggle2"></a>
            <div class="container-fluid">
				<p class="update">Son yenilenme tarihi: <span class="text-primary">15.03.2019</span></p>
                <div class="row-content">
                    <h1>Özgeçmiş</h1>
					<br>
					<p>1969 yılında Adana'da doğdu. Aslen Hataylıdır. İlkokulu Malatya'da, ortaokulu Samsun'da bitirdikten sonra, 1985 yılında Konya Atatürk Sağlık Meslek Lisesinden mezun oldu. 1989 yılında Gazi Üniversitesi Elektrik-Elektronik Mühendisliği Bölümünü bitirdi. 1990 yılında aynı bölümde araştırma görevlisi olarak çalışmaya başladı. 1995'te ODTÜ Elektrik-Elektronik Mühendisliği Ana Bilim Dalından Yüksek Lisans derecesini  aldı. Aynı yıl YÖK burslusu olarak yurtdışına gönderilmek üzere Kırıkkale Üniversitesi Elektrik-Elektronik Mühendisliği Bölümüne geçti.</p>
					<br>
					<p>1996 yılında İngiltere'nin Bristol şehrine gitti. 2001 yılında Bristol Üniversitesinden Elektrik-Elektronik Mühendisliği Doktora derecesini alarak Kırıkkale Üniversitesine döndü. Halen Dr. Öğr. Üyesi olarak buradaki görevine devam etmektedir. Başlıca çalışma alanları kontrol sistemleri, elektrik makineleri ve güç elektroniğidir. Üç çocuk babasıdır.</p>
					<br><br><br><br><br><br><br><br>
					
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
