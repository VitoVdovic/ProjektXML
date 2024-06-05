<!DOCTYPE html>
<?php
    $xml = simplexml_load_file('data.xml');
?>
<html lang='hr'>
    <head>
        <title> Test XML & XSD </title>
        <meta http-equiv='content-type' content='text/html; charset=UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <meta name='description' content='BauhausInfo test'>
        <meta name='keywords' content='bauhaus dizajn povijest autori galerija'>
        <meta name='author' content='Vito Vdović'>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
        <link rel="stylesheet" href="css/ionicons.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <style>
        body {
            background-color:  #eeece0;
        }
        main {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 75vh;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        label {
            font-weight: bold;
            display: block;
            margin-bottom: 10px;
        }
        input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #0056b3;
        }
        .message {
            text-align: center;
            margin-top: 20px;
        }
        .error {
            background-color: #ffc2c2;
            color: #c00;
        }
        .success {
            background-color: #d4edda;
            color: #155724;
        }
        footer {
            background-color: #343a40;
            color: #fff;
            padding: 20px 0;
            text-align: center;
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
                        <a class="nav-link" href="authors.php">Authors</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.php">Gallery</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
        <form action="" method="post" enctype="multipart/form-data">
            <h2>XML & XSD Validation Form</h2>
            <label for="xmlFile">Select XML File:</label>
            <input type="file" id="xmlFile" name="xmlFile">
            <label for="xsdFile">Select XSD Schema:</label>
            <input type="file" id="xsdFile" name="xsdFile">
            <button type="submit" name="submit">Validate XML & XSD</button>

            <?php
            if (isset($_POST['submit'])) {
                if (isset($_FILES['xmlFile']) && isset($_FILES['xsdFile'])) {
                    $xmlFile = $_FILES['xmlFile']['tmp_name'];
                    $xsdFile = $_FILES['xsdFile']['tmp_name'];
                    libxml_use_internal_errors(true);
                    $doc = new DOMDocument();
                    $doc->load($xmlFile);
                    if ($doc->schemaValidate($xsdFile)) {
                        echo "<div class='message success'>XML and XSD are valid</div>";
                    } else {
                        echo "<div class='message error'>Error: XML is not valid according to the XSD schema</div>";
                    }
                } else {
                    echo "<div class='message error'>Error: XML file or XSD schema not uploaded</div>";
                }
            }
            ?>
        </form>
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