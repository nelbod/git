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
		<img src="../image/1280x680_gettyimages-1140819868 - Copie.jpg" alt="" id="bg">

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
				
				<li><a href="#"><i class='bx bxs-cart-add'></i></a></li>
			</div>
		</div><br><br><br><br>
   
       
        <!-- tracks part -->
		<div class="top_tracks" id="top_tracks">
			<p id="heading"><i class='bx bxs-playlist'></i>&nbsp;&nbsp;Top Musics</p>
		
			
			<div id="track">
				<img src="../image/ninho.jpg" alt="">
				<div id="actions">
					<a href="#"><i class='bx bx-heart' ></i></a>
					<a id="play_pause"><i class='bx bx-play'></i></a>
				</div>

				<audio src="../son/ninho_lettre_a_une_femme_clip_officiel_aac_59891.m4a" id="music"></audio>

				<div id="song_desc">
				   <p>lettre_a_une_femme</p>
				   <p>Ninho</p>
				   <p id="total_download"><i class='bx bx-download'></i>&nbsp;&nbsp;2000+</p>
				  
				</div>
				<div id="actions_2">
				  <p><a href="#"><i class='bx bx-share' ></i></a></p>
				  <p><a href="../son/ninho_lettre_a_une_femme_clip_officiel_aac_59891.m4a" download><i class='bx bx-download'></i></a></p>
				</div>
			</div>

			<div id="track">
				<img src="../image/ninho.jpg" alt="">
				<div id="actions">
					<a href="#"><i class='bx bx-heart' ></i></a>
					<a id="play_pause"><i class='bx bx-play'></i></a>
				</div>
				<audio src="../son/ninho_putana_clip_officiel_aac_36496.m4a" id="music"></audio>

				<div id="song_desc">
					<p>Putana_clip_officiel</p>
				   <p>Ninho_</p>
				   <p id="total_download"><i class='bx bx-download'></i>&nbsp;&nbsp;2000+</p>
			
				</div>

				<div id="actions_2">
				  <p><i class='bx bx-share' ></i></p>
				  <p><a href="../son/ninho_putana_clip_officiel_aac_36496.m4a" download><i class='bx bx-download'></i></a></p>
				</div>
			</div>

			<div id="track">
				<img src="../image/ninho.jpg" alt="">
				<div id="actions">
					<a href="#"><i class='bx bx-heart' ></i></a>
					<a id="play_pause"><i class='bx bx-play'></i></a>
				</div>
				<audio src="../son/ninho_promo_feat._damso_clip_video_aac_24181.m4a" id="music"></audio>

				<div id="song_desc">
					 <p>Promo_feat._damso</p>
				     <p>Ninho</p>
				     <p id="total_download"><i class='bx bx-download'></i>&nbsp;&nbsp;2000+</p>
				   
				</div>

				<div id="actions_2">
				  <p><i class='bx bx-share' ></i></p>
				  <p><a href="../son/ninho_promo_feat._damso_clip_video_aac_24181.m4a" download><i class='bx bx-download'></i></a></p>
				</div>
			</div>

			<div id="track">
				<img src="../image/ninho.jpg" alt="">
				<div id="actions">
					<a href="#"><i class='bx bx-heart' ></i></a>
					<a id="play_pause"><i class='bx bx-play'></i></a>
				</div>
				<audio src="../son/ninho_goutte_d_eau_clip_officiel_aac_23774.m4a" id="music"></audio>

				<div id="song_desc">
					 <p>Goutte_d_eaul</p>
				     <p>Ninho</p>
				     <p id="total_download"><i class='bx bx-download'></i>&nbsp;&nbsp;2000+</p>
				</div>

				<div id="actions_2">
				  <p><i class='bx bx-share' ></i></p>
				  <p><a href="../son/ninho_goutte_d_eau_clip_officiel_aac_23774.m4a" download><i class='bx bx-download'></i></a></p>
				</div>
			</div>

			<div id="track">
				<img src="../image/ninho.jpg" alt="">
				<div id="actions">
					<a href="#"><i class='bx bx-heart' ></i></a>
					<a id="play_pause"><i class='bx bx-play'></i></a>
				</div>
				<audio src="../son/ninho_maman_ne_le_sait_pas_feat._niska_clip_officiel_aac_55371.m4a" id="music"></audio>

				<div id="song_desc">
					 <p>Maman_ne_le_sait_pas</p>
				     <p>Ninho_feat._niska</p>
				     <p id="total_download"><i class='bx bx-download'></i>&nbsp;&nbsp;2000+</p>
				</div>

				<div id="actions_2">
				  <p><i class='bx bx-share' ></i></p>
				  <p><a href="../son/ninho_maman_ne_le_sait_pas_feat._niska_clip_officiel_aac_55371.m4a" download><i class='bx bx-download'></i></a></p>
				</div>
			</div>
      <div id="track">
				<img src="../image/ninho.jpg" alt="">
				<div id="actions">
					<a href="#"><i class='bx bx-heart' ></i></a>
					<a id="play_pause"><i class='bx bx-play'></i></a>
				</div>

				<audio src="../son/ninho_lettre_a_une_femme_clip_officiel_aac_59891.m4a" id="music"></audio>

				<div id="song_desc">
				   <p>lettre_a_une_femme</p>
				   <p>Ninho</p>
				   <p id="total_download"><i class='bx bx-download'></i>&nbsp;&nbsp;2000+</p>
				  
				</div>
				<div id="actions_2">
				  <p><a href="#"><i class='bx bx-share' ></i></a></p>
				  <p><a href="../son/ninho_lettre_a_une_femme_clip_officiel_aac_59891.m4a" download><i class='bx bx-download'></i></a></p>
				</div>
			</div>

			<div id="track">
				<img src="../image/ninho.jpg" alt="">
				<div id="actions">
					<a href="#"><i class='bx bx-heart' ></i></a>
					<a id="play_pause"><i class='bx bx-play'></i></a>
				</div>
				<audio src="../son/ninho_putana_clip_officiel_aac_36496.m4a" id="music"></audio>

				<div id="song_desc">
					<p>Putana_clip_officiel</p>
				   <p>Ninho_</p>
				   <p id="total_download"><i class='bx bx-download'></i>&nbsp;&nbsp;2000+</p>
			
				</div>

				<div id="actions_2">
				  <p><i class='bx bx-share' ></i></p>
				  <p><a href="../son/ninho_putana_clip_officiel_aac_36496.m4a" download><i class='bx bx-download'></i></a></p>
				</div>
			</div>

			<div id="track">
				<img src="../image/ninho.jpg" alt="">
				<div id="actions">
					<a href="#"><i class='bx bx-heart' ></i></a>
					<a id="play_pause"><i class='bx bx-play'></i></a>
				</div>
				<audio src="../son/ninho_promo_feat._damso_clip_video_aac_24181.m4a" id="music"></audio>

				<div id="song_desc">
					 <p>Promo_feat._damso</p>
				     <p>Ninho</p>
				     <p id="total_download"><i class='bx bx-download'></i>&nbsp;&nbsp;2000+</p>
				   
				</div>

				<div id="actions_2">
				  <p><i class='bx bx-share' ></i></p>
				  <p><a href="../son/ninho_promo_feat._damso_clip_video_aac_24181.m4a" download><i class='bx bx-download'></i></a></p>
				</div>
			</div>

			<div id="track">
				<img src="../image/ninho.jpg" alt="">
				<div id="actions">
					<a href="#"><i class='bx bx-heart' ></i></a>
					<a id="play_pause"><i class='bx bx-play'></i></a>
				</div>
				<audio src="../son/ninho_goutte_d_eau_clip_officiel_aac_23774.m4a" id="music"></audio>

				<div id="song_desc">
					 <p>Goutte_d_eaul</p>
				     <p>Ninho</p>
				     <p id="total_download"><i class='bx bx-download'></i>&nbsp;&nbsp;2000+</p>
				</div>

				<div id="actions_2">
				  <p><i class='bx bx-share' ></i></p>
				  <p><a href="../son/ninho_goutte_d_eau_clip_officiel_aac_23774.m4a" download><i class='bx bx-download'></i></a></p>
				</div>
			</div>

			<div id="track">
				<img src="../image/ninho.jpg" alt="">
				<div id="actions">
					<a href="#"><i class='bx bx-heart' ></i></a>
					<a id="play_pause"><i class='bx bx-play'></i></a>
				</div>
				<audio src="../son/ninho_maman_ne_le_sait_pas_feat._niska_clip_officiel_aac_55371.m4a" id="music"></audio>

				<div id="song_desc">
					 <p>Maman_ne_le_sait_pas</p>
				     <p>Ninho_feat._niska</p>
				     <p id="total_download"><i class='bx bx-download'></i>&nbsp;&nbsp;2000+</p>
				</div>

				<div id="actions_2">
				  <p><i class='bx bx-share' ></i></p>
				  <p><a href="../son/ninho_maman_ne_le_sait_pas_feat._niska_clip_officiel_aac_55371.m4a" download><i class='bx bx-download'></i></a></p>
				</div>
			</div>
      <div id="track">
				<img src="../image/ninho.jpg" alt="">
				<div id="actions">
					<a href="#"><i class='bx bx-heart' ></i></a>
					<a id="play_pause"><i class='bx bx-play'></i></a>
				</div>

				<audio src="../son/ninho_lettre_a_une_femme_clip_officiel_aac_59891.m4a" id="music"></audio>

				<div id="song_desc">
				   <p>lettre_a_une_femme</p>
				   <p>Ninho</p>
				   <p id="total_download"><i class='bx bx-download'></i>&nbsp;&nbsp;2000+</p>
				  
				</div>
				<div id="actions_2">
				  <p><a href="#"><i class='bx bx-share' ></i></a></p>
				  <p><a href="../son/ninho_lettre_a_une_femme_clip_officiel_aac_59891.m4a" download><i class='bx bx-download'></i></a></p>
				</div>
			</div>

			<div id="track">
				<img src="../image/ninho.jpg" alt="">
				<div id="actions">
					<a href="#"><i class='bx bx-heart' ></i></a>
					<a id="play_pause"><i class='bx bx-play'></i></a>
				</div>
				<audio src="../son/ninho_putana_clip_officiel_aac_36496.m4a" id="music"></audio>

				<div id="song_desc">
					<p>Putana_clip_officiel</p>
				   <p>Ninho_</p>
				   <p id="total_download"><i class='bx bx-download'></i>&nbsp;&nbsp;2000+</p>
			
				</div>

				<div id="actions_2">
				  <p><i class='bx bx-share' ></i></p>
				  <p><a href="../son/ninho_putana_clip_officiel_aac_36496.m4a" download><i class='bx bx-download'></i></a></p>
				</div>
			</div>

			<div id="track">
				<img src="../image/ninho.jpg" alt="">
				<div id="actions">
					<a href="#"><i class='bx bx-heart' ></i></a>
					<a id="play_pause"><i class='bx bx-play'></i></a>
				</div>
				<audio src="../son/ninho_promo_feat._damso_clip_video_aac_24181.m4a" id="music"></audio>

				<div id="song_desc">
					 <p>Promo_feat._damso</p>
				     <p>Ninho</p>
				     <p id="total_download"><i class='bx bx-download'></i>&nbsp;&nbsp;2000+</p>
				   
				</div>

				<div id="actions_2">
				  <p><i class='bx bx-share' ></i></p>
				  <p><a href="../son/ninho_promo_feat._damso_clip_video_aac_24181.m4a" download><i class='bx bx-download'></i></a></p>
				</div>
			</div>

			<div id="track">
				<img src="../image/ninho.jpg" alt="">
				<div id="actions">
					<a href="#"><i class='bx bx-heart' ></i></a>
					<a id="play_pause"><i class='bx bx-play'></i></a>
				</div>
				<audio src="../son/ninho_goutte_d_eau_clip_officiel_aac_23774.m4a" id="music"></audio>

				<div id="song_desc">
					 <p>Goutte_d_eaul</p>
				     <p>Ninho</p>
				     <p id="total_download"><i class='bx bx-download'></i>&nbsp;&nbsp;2000+</p>
				</div>

				<div id="actions_2">
				  <p><i class='bx bx-share' ></i></p>
				  <p><a href="../son/ninho_goutte_d_eau_clip_officiel_aac_23774.m4a" download><i class='bx bx-download'></i></a></p>
				</div>
			</div>

			<div id="track">
				<img src="../image/ninho.jpg" alt="">
				<div id="actions">
					<a href="#"><i class='bx bx-heart' ></i></a>
					<a id="play_pause"><i class='bx bx-play'></i></a>
				</div>
				<audio src="../son/ninho_maman_ne_le_sait_pas_feat._niska_clip_officiel_aac_55371.m4a" id="music"></audio>

				<div id="song_desc">
					 <p>Maman_ne_le_sait_pas</p>
				     <p>Ninho_feat._niska</p>
				     <p id="total_download"><i class='bx bx-download'></i>&nbsp;&nbsp;2000+</p>
				</div>

				<div id="actions_2">
				  <p><i class='bx bx-share' ></i></p>
				  <p><a href="../son/ninho_maman_ne_le_sait_pas_feat._niska_clip_officiel_aac_55371.m4a" download><i class='bx bx-download'></i></a></p>
				</div>
			</div>

		</div>

		<!-- popular creator part -->
        
		<!-- popular creator part -->
		<div class="popular_creator">
           <p id="heading"><i class='bx bx-trophy' ></i>&nbsp;&nbsp;Célébrités</p>
            <div class="artists_list">

            	<div class="artist">
            		<img src="../image/7.jpg" alt="">
            		<div class="artist_desc">
            			<p>Vano Baby</p>
            			<p><i class='bx bx-like' ></i>&nbsp;&nbsp;2000+&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class='bx bx-share' ></i>500+</p>
            		</div>
            		
            	</div>

            	<div class="artist">
            		<img src="../image/8.jpg" alt="">
            		<div class="artist_desc">
            			<p>Maître Gims</p>
            			<p><i class='bx bx-like' ></i>&nbsp;&nbsp;2000+&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class='bx bx-share' ></i>500+</p>
            		</div>
            	</div>

            	<div class="artist">
            		<img src="../image/6.jpg" alt="">
            		<div class="artist_desc">
            			<p>Ninho</p>
            			<p><i class='bx bx-like' ></i>&nbsp;&nbsp;2000+&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class='bx bx-share' ></i>500+</p>
            		</div>
            	</div>

            	<div class="artist">
            		<img src="../image/dadju.jpg" alt="">
            		<div class="artist_desc">
            			<p>Dadju</p>
            			<p><i class='bx bx-like' ></i>&nbsp;&nbsp;2000+&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class='bx bx-share' ></i>500+</p>
            		</div>
            	</div>

            	<div class="artist">
            		<img src="../image/fally.jpg" alt="">
            		<div class="artist_desc">
            			<p>Fally Ipupa</p>
            			<p><i class='bx bx-like' ></i>&nbsp;&nbsp;2000+&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class='bx bx-share' ></i>500+</p>
            		</div>
            	</div>

            	

            	<div class="artist">
            		<img src="../image/niska.jpg" alt="">
            		<div class="artist_desc">
            			<p>Niska</p>
            			<p><i class='bx bx-like' ></i>&nbsp;&nbsp;2000+&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class='bx bx-share' ></i>500+</p>
            		</div>
            	</div>
				

				<div class="artist">
            		<img src="../image/fouine.jpg" alt="">
            		<div class="artist_desc">
            			<p>La Fouine</p>
            			<p><i class='bx bx-like' ></i>&nbsp;&nbsp;2000+&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class='bx bx-share' ></i>500+</p>
            		</div>
            	</div>

				<div class="artist">
            		<img src="../image/booba.jpg" alt="">
            		<div class="artist_desc">
            			<p>Booba</p>
            			<p><i class='bx bx-like' ></i>&nbsp;&nbsp;2000+&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class='bx bx-share' ></i>500+</p>
            		</div>
            	</div>
            </div>
		</div>

        <!-- footer part -->
		<div class="footer">
			<a id="logo"><i class='bx bxs-bar-chart-alt-2' ></i>&nbsp;BestMusic</a>
			<div class="social_handle">
				<i class='bx bxl-twitter' ></i>
				<i class='bx bxl-twitch'></i>
				<i class='bx bxl-github' ></i>
			</div>
		</div>

	</div>

  <!-- javascript file -->
  <script src="../public/js/general.js"></script>
</body>
</html>

<!-- by Dev Ideas -->