<?php
require('header.php');
?>
<div id='all'>
	
	<form id='game' action="./index.php" method='GET'>
		<input type="submit" id='submit' value='Créer une Partie' name ='action'>
	</form>

	<form id='shop' action="./index.php" method='GET'>
		<input type="submit" id='submit' value='Rejoindre une Partie' name ='action'>
	</form>
	
</div>
<?= $content ?>

<?php
require('footer.php');
?>