<!DOCTYPE html>
<?php
    $xml = simplexml_load_file('data.xml');
?>
<html lang='hr'>
    <head>
        <title> Authors </title>
        <meta http-equiv='content-type' content='text/html; charset=UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <meta name='description' content='BauhausInfo authors'>
        <meta name='keywords' content='bauhaus dizajn povijest autori galerija'>
        <meta name='author' content='Vito Vdović'>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
        <link rel="stylesheet" href="css/ionicons.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <style>
        body {
            background-color: #eeece0;
        }
        main {
            font-family: Arial, sans-serif;
            max-width: 90%;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            font-size: 36px;
            font-weight: bold;
        }

        p {
            font-size: 16px;
            margin-bottom: 10px;
        }

        @keyframes slideInUp {
            from {
                transform: translateY(100%);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .animated-card {
            animation: slideInUp 0.5s ease-in-out;
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
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="authors.php">Authors</a>
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
        <div class="container-fluid">
            <div class="row">
                <?php foreach ($xml->Authors->Person as $person): ?>
                    <div class="col-md-4 full-width-col">
                        <div class="card mb-4 animated-card">
                            <img src="<?php echo $person->Picture; ?>" class="card-img-top" alt="<?php echo $person->Name; ?>">
                            <div class="card-body">
                                <h2 class="card-title"><?php echo $person->Name; ?></h2>
                                <p class="card-text"><?php echo $person->Description; ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
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