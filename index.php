<!DOCTYPE html>
<?php
    $xml = simplexml_load_file('data.xml');
?>
<html lang='hr'>
    <head>
        <title> Home </title>
        <meta http-equiv='content-type' content='text/html; charset=UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <meta name='description' content='BauhausInfo home'>
        <meta name='keywords' content='bauhaus dizajn povijest autori galerija'>
        <meta name='author' content='Vito Vdović'>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
        <link rel="stylesheet" href="css/ionicons.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <style>
        body {
            background-image: url(photos/wallpaper.jpg);
            background-repeat: no-repeat;
            background-size:auto;
            background-position:center;
        }
        main {
            font-family: Arial, sans-serif;
            padding: 100px 20px;  
            text-align: center; 
            max-width: 700px; 
            margin: 0 auto; 
        }

        #animated-text {
            opacity: 0;
            transform: translateY(50px);
            animation: slide-up 0.5s ease forwards;
            animation-delay: 0.3s;
        }

        @keyframes slide-up {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        main .Name {
            font-size: 100px;
            font-weight: bold;
        }

        main .Founded,
        main .Founder {
            font-size: 18px; 
            margin-top: -40px;
            margin-bottom: 30px;
        }

        main .Description {
            font-size: 16px;
            background-color: rgba(0, 0, 0, 0.7); 
            color: white;
            line-height: 1.5;
            padding: 20px;
            border-radius: 15px; 
        }
    </style>
    <body>
    <nav class="navbar navbar-dark navbar-expand-lg navbar-light bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">BauhausInfo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="authors.php">Authors</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.php">Gallery</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Test
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="test1.php">XML</a></li>
                            <li><a class="dropdown-item" href="test2.php">XML and Scheme</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        <?php
            foreach ($xml->Home as $home):
                echo "<div class='Name' id='animated-text'>" . $home->Name . "</div>";
                echo "<div class='Founded' id='animated-text'>" . $home->Founded . " • " . $home->Founder . "</div>";
                echo "<div class='Description' id='animated-text'>" . $home->Description . "</div>";
            endforeach
        ?>
    </main>
    <footer class="footer-07">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-12 text-center">
						<h2 class="footer-heading"><a href="#" class="logo">BauhausInfo.com</a></h2>
						<p class="menu">
							<a href="index.php">Home</a>
							<a href="authors.php">Authors</a>
							<a href="gallery.php">Gallery</a>
							<a href="test1.php">Test XML</a>
							<a href="test2.php">Test XML & XSD</a>
						</p>
						<ul class="ftco-footer-social p-0">
                            <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><span class="ion-logo-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><span class="ion-logo-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><span class="ion-logo-instagram"></span></a></li>
                         </ul>
					</div>
				</div>
			</div>
		</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
</html>