<?php
if  (
	isset($_POST["dimensao"])&&
	isset($_POST["inicio"])&&
	isset($_POST["fim"])&&
	isset($_POST["valor"])&&
	isset($_POST["ordenar"])
)
{if  (

	is_numeric($_POST["dimensao"])&&
	is_numeric($_POST["inicio"])&&
	is_numeric($_POST["fim"])&&
	is_numeric($_POST["valor"])
)
if  (is_numeric($_POST["dimensao"])){
	$dimensao=$_POST["dimensao"];
	for ($i=0; $i <$dimensao ; $i++) { 
		$numero=rand($start,$end);
		
}
}

}
?>