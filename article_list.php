<?php
require_once 'mysqli_connect.php';
require_once 'function.php';

$datas = get_publish_article();

?>

<!DOCTYPE html>
<html>
<head>
<title>文章列表 - DA-DING</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
<link rel="stylesheet" href="assets/css/main.css" />

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<link rel="stylesheet"
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
	integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
	crossorigin="anonymous">
<script
	src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
	integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
	crossorigin="anonymous"></script>
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" />
</head>

<body class="no-sidebar is-preload">
	<div id="page-wrapper">
		<?php include_once 'menu.php';?>
		<section id="main">
			<div class="container">
				<div id="content">
    
    			<?php if(!empty($datas)):?>
   			    <?php foreach($datas as $article):?>
    
    			<?php
                 $abstract = strip_tags($article['content']);
                 $abstract = mb_substr($abstract, 0, 100, "UTF-8");
                ?>
    
  				   <div class="panel panel-custom">
						<div class="panel-heading">
							<a href='article.php ?i=<?php echo $article['id'];?>'><?php echo $article['title']?></a>
						</div>						
						<div class="panel-body">
							
								<span class="label label-info"><?php echo $article['category'];?></span>
								<span class="label label-danger"><?php echo $article['create_date'];?></span>
								<br><br>
 	  					    <?php echo $abstract."　...MORE";?>
	  					</div>
				   </div><br>
    			   <?php endforeach;?>
   				   <?php endif;?>
				   
  				</div>
			</div>
		</section>
		<?php include_once('footer.php');?>
	</div>
</body>
</html>