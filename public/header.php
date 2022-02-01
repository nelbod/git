<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Music Creator</title>
	<link rel="stylesheet" href="../public/css/style.css">
    <meta name="theme-color" content="#000000">
	<meta name="viewport" content="width=device-width , initial-scale=1">
	<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

	<div class="main">
		<div class="progress_bar" id="Bar"></div>
		

		<!-- navbar part -->
		<div class="navbar">
			<a href="#" id="logo"><i class='bx bxs-bar-chart-alt-2' ></i>&nbsp;BestMusic</a>
            <a onclick="open_close_menu()" id="responsive_menu"><i class='bx bxs-chevron-down' ></i></a>

			<div class="nav_content">
				<li><a href="../index.php">Accuiel</a></li>
				<li><a href="../public/music.php">Musiques</a></li>
				<li><a href="../public/video.php">Videos</a></li>
				<li><a href="../public/actu.php">Actualités</a></li>
				<li><a href="connexion.php">Se connecter</a></li>
			</div>

            <a onclick="menu_action()" id="menu_btn"><i class='bx bx-menu-alt-left'></i></a>
			<div class="side_menu">
				<li><a href="../public/actu.php"><i class='bx bx-category'></i></a></li>
				<li><a href="../public/music.php"><i class='bx bxs-playlist'></i></a></li>
				<li><a href="../public/video.php"><i class='bx bxs-movie-play'></i></a></li>
				<li><a href="#"><i class='bx bxs-message-square-detail'></i></a></li>
				<li><a href="#"><i class='bx bx-merge'></i></a></li>
				<li><a href="#"><i class='bx bxs-cart-add'></i></a></li>
			</div>
		</div>
	</div>	
</body>
</html>
