<?php
	const titre ="EDW école pour les métiers du web";
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php print titre ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

	<ul>
		<li><a href="index.php?page=1">&lt;/&gt;  L'école</a></li>
		<li><a href="index.php?page=2">&lt;/&gt; Formations</a></li>
		<li><a href="index.php?page=3">&lt;/&gt;  Contact</a></li>
		
	</ul>
	<main>
		<h1><?php print titre ?></h1>

	
			<?php
				if(isset($_GET['page'])){
				//variable pour $_GET
				$root = $_GET['page'];
						if($root==1){
							include_once("./template/index.html");
						}
						if($root==2){
							include_once("./template/portfolio.html");
						}
						if($root==3){
							include_once("./template/contact.html");
						}
						else if($root>3 || $root==0){
							echo '<p class="warning"><i class="far fa-frown"></i> La page demandée n\'existe pas!!</p>';
							//header("HTTP/1.0 404 Not Found");
						}

				}
					else{
						include("./template/index.html");
					}

			?>
	</div>
</body>
</html>