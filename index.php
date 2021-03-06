<?php
	const titre ="&#91;M2L&#93;	 La Maison des Ligues de Lorraine";
	const css = "./static/css/style.css";
?>

<!DOCTYPE HTML>
<html lang="fr" dir="ltr">
<head>
	<meta charset="UTF-8">
	<title><?php print titre ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Ce site est développé dans le cadre d'un prjet de bts sio">
	<!-- <link rel="shortcut icon" href="" type="image/x-icon"> -->
	<link rel="stylesheet" href=<?php print css?> >
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">


	
</head>
<body>

	<?php include_once('./src/navigation.php');?>
	<main>
		<h1><?php print titre ?></h1>

	
			<?php
				if(isset($_GET['page'])){
				//variable pour $_GET
				$root = $_GET['page'];
						if($root==1){
							include_once("./template/content.php");
						}
						if($root==2){
							include_once("./template/portfolio.php");
						}
						if($root==3){
							include_once("./template/contact.php");
						}
						else if($root>3 || $root==0){
							echo '<p class="warning"><i class="far fa-frown"></i> La page demandée n\'existe pas!!</p>';
							
						}
						else{
							header("HTTP/1.0 404 Not Found");
						}

				}
					else{
						include("./template/content.php");
					}

			?>
	</main>
</body>
</html>


