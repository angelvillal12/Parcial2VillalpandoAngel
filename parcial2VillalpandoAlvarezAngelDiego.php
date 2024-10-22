<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<?php 

$Telefonos =[["Telefono" => "Iphone", "Precio" => 17000],["Telefono" => "Samsung", "Precio" => 15000]
,["Telefono" => "Motorola", "Precio" => 14000],["Telefono" => "Huawei", "Precio" => 13500],
["Telefono" => "Oppo", "Precio" => 12000]];

echo "Telefonos: ";
echo "<br>"; 

	foreach ($Telefonos as $Telefono) {
    	echo $Telefono["Telefono"] . " Precio: " . $Telefono["Precio"];
    	echo "<br>";
	}

array_push($Telefonos, ["Telefono" => "Vivo", "Precio" => 15200]);
array_push($Telefonos, ["Telefono" => "Nokia", "Precio" => 11000]);
echo "<br>";

echo "Telefonos nuevos: "; 
echo "<br>"; 

	foreach ($Telefonos as $Telefono) {
    	echo $Telefono["Telefono"] . " Precio: " . $Telefono["Precio"];
    	echo "<br>";
	}

usort($Telefonos, function($a, $b) {
    	return $a["Precio"] <=> $b["Precio"];
	});


 ?>

</body>
</html>