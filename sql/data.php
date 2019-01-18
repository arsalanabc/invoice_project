<?php 

require_once '../php/config.php';


$sql = "INSERT INTO product (
	product_name,
	product_image,
	brand_id,
	categories_id, 
	description_id, 
	quantity,
	rate)
VALUES ('test1', 'https://picsum.photos/200/300/?random', 1, 1, 1, '1', '1');
";

// if ($connect->query($sql) === TRUE) {
//     echo "Data entered successfully";
// } else {
//     echo "Error entering data: " . $connect->error;
// }


for ($i = 0; $i < 20; $i++){
	$sql = "INSERT INTO product (
	product_name,
	product_image,
	brand_id,
	price,
	categories_id, 
	description_id, 
	quantity,
	rate)
VALUES ('product_".$i."', 'https://picsum.photos/200/300/?random', 1, '6.44', 1, 1, '1', '1');
";

if ($connect->query($sql) === TRUE) {
    echo "Data entered successfully";
} else {
    echo "Error entering data: " . $connect->error;
}
}




$connect->close();

?>