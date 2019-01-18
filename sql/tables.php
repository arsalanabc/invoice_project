<?php 

require_once '../php/config.php';

// sql to create table
$connect->query("DROP TABLE IF EXISTS brands");
$sql = "CREATE TABLE brands (
  brand_id int(11) NOT NULL,
  brand_name varchar(255) NOT NULL,
  brand_active int(11) NOT NULL DEFAULT 0,
  brand_status int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1; ";


if ($connect->query($sql) === TRUE) {
    echo "Table brands created successfully";
} else {
    echo "Error creating table: " . $connect->error;
}

$connect->query("DROP TABLE IF EXISTS product");
$sql = "CREATE TABLE product (
  product_id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  product_name varchar(255) NOT NULL,
  product_image text NOT NULL,
  brand_id int(11) NOT NULL,
  price varchar(11) NOT NULL,
  categories_id int(11) NOT NULL,
  description_id int(11) NOT NULL,
  quantity varchar(255) NOT NULL,
  rate varchar(255) NOT NULL,
  active int(11) NOT NULL DEFAULT '0',
  status int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1";

if ($connect->query($sql) === TRUE) {
    echo "Table product created successfully";
} else {
    echo "Error creating product table:" . $connect->error;
}

$connect->close();
/*

//
//Table structure for table 'categories'
//
DROP TABLE IF EXISTS 'categories';
CREATE TABLE 'categories' (
  'categories_id' int(11) NOT NULL,
  'categories_name' varchar(255) NOT NULL,
  'categories_active' int(11) NOT NULL DEFAULT '0',
  'categories_status' int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



//
//Table structure for table 'product'
//
DROP TABLE IF EXISTS 'product';
CREATE TABLE 'product' (
  'product_id' int(11) NOT NULL,
  'product_name' varchar(255) NOT NULL,
  'product_image' text NOT NULL,
  'brand_id' int(11) NOT NULL,
  'categories_id' int(11) NOT NULL,
  'description_id' int(11) NOT NULL,
  'quantity' varchar(255) NOT NULL,
  'rate' varchar(255) NOT NULL,
  'active' int(11) NOT NULL DEFAULT '0',
  'status' int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

//
//Table structure for table 'description'
//
DROP TABLE IF EXISTS 'product';
CREATE TABLE 'product' (
  'description_id' int(11) NOT NULL,
  'description' varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

//
//Indexes for table 'brands'
//
ALTER TABLE 'brands'
  ADD PRIMARY KEY ('brand_id');

//
//Indexes for table 'categories'
//
ALTER TABLE 'categories'
  ADD PRIMARY KEY ('categories_id');

//
//Indexes for table 'product'
//
ALTER TABLE 'product'
  ADD PRIMARY KEY ('product_id');

//
//Indexes for table 'description'
//
ALTER TABLE 'description'
  ADD PRIMARY KEY ('description_id');

*/

// function drop_if_exists(table_name){
//   $sql = "DROP "+ table_name;
// 	return $connect->query($sql) ;
// }

?>
