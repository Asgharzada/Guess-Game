<!DOCTYPE html>
<html>
    <head>
     	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php $view['slots']->output('title', "Default title") ?></title>
    </head>
    <body>
    	<div id="container" >
    		<div id="header">
    		<h1><?php echo "Guess Game"?></h1>
    			<div class="HorizLinks">
    	 			<ul>
						<li><a href="<?php ?>">Home</a></li>
						<li><a href="<?php ?>">How to play</a></li>
						<li><a href="<?php ?>">About</a></li>
						<li><a href="<?php ?>">Contact</a></li>
				
						</ul>
    	
    			</div>
    	
    	
    		</div>
    	
	      <?php $view['slots']->output('_content') ?>
	 	
	 	
	 	<div id="footer">
	 	
	 	</div>
	 	
	 	</div>
    </body>
</html>
