<?php

	$db=new mysqli("localhost", "root", "", "products");
	$createView= "CREATE VIEW products_view AS
	SELECT id, name,price, manufacturer_id
	FROM product
	WHERE price>5000";
	if ($db->query($createView)){
		echo "View creates successfully";	
	}else{
		echo "error";
	}  

?>
