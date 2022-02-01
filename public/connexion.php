<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <body>

    <style>
        body{
    background: url(../image/bgo.jpg);
    background-size: cover;
    background-position: center;
}
#container{
    width:400px;
    margin:0 auto;
    margin-top:10%;
}
/* Bordered form */
form {
    width:100%;
    padding: 30px;
    border: 1px solid #f1f1f1;
    background: #fff;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
#container h1{
    width: 38%;
    margin: 0 auto;
    padding-bottom: 10px;
}

/* Full-width inputs */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
input[type=submit] {
    background-color: #ff0066;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}
input[type=submit]:hover {
    background-color: white;
    color: #53af57;
    border: 1px solid #53af57;
}
/*footer*/
.footer{
    margin: 0.7em 0;
	width: 95%;
	z-index: 10;
	display: flex;
	justify-content: space-between;
}
.footer .social_handle{
	font-size: 1.5em;
	color: #ff0066;
    font-size:50px;
}
.footer .social_handle i{
	margin: 0 5px;
}
.footer #logo{
    color: #fff;
    font-size: 1.5em;
    font-family: cursive;
    font-size:30px;
    text-decoration: none;
}
.compte{
    text-decoration: none;
    background-color: #53af57;
    color: white;
    padding: 14px 20px;
   
    border: none;
    cursor: pointer;
    width: 100%;
    text-align: center;
    margin-left:32%;
}
    </style>
           <div class="footer">
                <a  href="..//index.php"  id="logo"><i class='bx bxs-bar-chart-alt-2' ></i>&nbsp;BestMusic</a>
                <div class="social_handle">
                    <i class='bx bxl-twitter' ></i>
                    <i class='bx bxl-instagram'></i>
                    <i class='bx bxl-facebook' ></i>
                </div>
		    </div>
        <div id="container">
            <!-- zone de connexion -->
         

            <form action="verification.php" method="POST">
                <h1>Connexion</h1>
                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                <input type="submit" id='submit' value='Connexion' ><br><br>
               
                <a href="../public/inscription.php" class="compte">Creer un compte</a>
                
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
                
            </form>
        </div>
    </body>
</html>