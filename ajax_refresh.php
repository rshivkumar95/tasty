<?php
// PDO connect *********
function connect() {
    return new PDO('mysql:host=localhost;dbname=tasty_tadkaa', 'technomates', 'technomates07', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}

$pdo = connect();
$keyword = '%'.$_POST['keyword'].'%';


if(trim($_POST['key'])==='any')
{	
            $restname=array();
            $landmark=array();
            $restaddress=array();
			$sql = "SELECT DISTINCT Restaurant_Name FROM restaurant_info WHERE Restaurant_Name LIKE (:keyword) ORDER BY Restaurant_ID ASC LIMIT 0, 10";
			$query = $pdo->prepare($sql);
			$query->bindParam(':keyword', $keyword, PDO::PARAM_STR);
			$query->execute();
			$list = $query->fetchAll();
			foreach ($list as $rs) {
				// put in bold the written text
				array_push($restname,str_replace($_POST['keyword'], '<b>'.$_POST['keyword'].'</b>', $rs['Restaurant_Name']));
				
			}

			$sql = "SELECT DISTINCT landmark FROM restaurant_info WHERE landmark LIKE (:keyword) ORDER BY Restaurant_ID ASC LIMIT 0, 10";
			$query = $pdo->prepare($sql);
			$query->bindParam(':keyword', $keyword, PDO::PARAM_STR);
			$query->execute();
			$list = $query->fetchAll();
			foreach ($list as $rs) {
				// put in bold the written text
				array_push($landmark,str_replace($_POST['keyword'], '<b>'.$_POST['keyword'].'</b>', $rs['landmark']));
				// add new option
			   /* echo '<li onclick="set_item(\''.str_replace("'", "\'", $rs['landmark']).'\');search(\''.str_replace("'", "\'", $rs['landmark']).'\')">'.$country_name.'</li>';*/
			}

			$sql = "SELECT DISTINCT Restaurant_Address FROM restaurant_info WHERE Restaurant_Address LIKE (:keyword) ORDER BY Restaurant_ID ASC LIMIT 0, 10";
			$query = $pdo->prepare($sql);
			$query->bindParam(':keyword', $keyword, PDO::PARAM_STR);
			$query->execute();
			$list = $query->fetchAll();
			foreach ($list as $rs) {
				// put in bold the written text
				array_push($restaddress,str_replace($_POST['keyword'], '<b>'.$_POST['keyword'].'</b>', $rs['Restaurant_Address']));
				// add new option
			    /*echo '<li onclick="set_item(\''.str_replace("'", "\'", $rs['Restaurant_Address']).'\');search(\''.str_replace("'", "\'", $rs['Restaurant_Address']).'\')">'.$restaddress.'</li>';*/
			}

             $key=array_merge($restname,$landmark,$restaddress);

             asort($key);

			// add new option
             foreach ($key as $item) {
             	# code...
             	//echo '<li onclick="set_item(\''.str_replace("'", "\'", $item.'\');search(\''.str_replace("'", "\'", $item.'\')">'.$item.'</li>';
             	//str_replace("'", "\'", $item)
             	echo '<li onclick="set_item(\''.strip_tags($item).'\');search(\''.strip_tags($item).'\')">'.$item.'</li>';
             }
			    //echo '<li onclick="set_item(\''.str_replace("'", "\'", $rs['Restaurant_Name']).'\');search(\''.str_replace("'", "\'", $rs['landmark']).'\')">'.$country_name.'</li>';


}

if(trim($_POST['key'])==='landmark')
{	

$sql = "SELECT DISTINCT landmark FROM restaurant_info WHERE landmark LIKE (:keyword) ORDER BY Restaurant_ID ASC LIMIT 0, 10";
$query = $pdo->prepare($sql);
$query->bindParam(':keyword', $keyword, PDO::PARAM_STR);
$query->execute();
$list = $query->fetchAll();
foreach ($list as $rs) {
	// put in bold the written text
	$country_name = str_replace($_POST['keyword'], '<b>'.$_POST['keyword'].'</b>', $rs['landmark']);
	// add new option
    echo '<li onclick="set_item1(\''.str_replace("'", "\'", $rs['landmark']).'\');search1(\''.str_replace("'", "\'", $rs['landmark']).'\')">'.$country_name.'</li>';
}

}


?>