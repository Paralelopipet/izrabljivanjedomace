<?php
	$broj_prijava=$_GET["brojprijava"];
	?>

<form action="lista.php" method="get">
<?php
for($i=0;i<$broj_prijava;$i++)
{
	echo "<input type='text' name='ime$i'>"
	"<input type='text' name='godine$i'>"
	"<input type='submit' name='submit">';
}

?>
		
</form>
		
	