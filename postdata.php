<?php
require_once("./mysqli_connection.php");

$propertyType = "";
$houseNo = "";
$streetName = "";
$townName = "";
$county = "";
$eircode = "";
$geoLocateText = "";
$vacantTime = "";
$saleRentSign = "";
$grassOvergrown = "";
$roofDamaged = "";
$windowsBoarded = "";
$paintPeeling = "";
$propertyActivity = "";
$wasteBins = "";
$accessToProperty = "";
$aboutYou = "";
$message = "";
$canContact = "";
$editName = "";
$editEmail = "";
$editPhone = "";
$tandc = "";

$json = file_get_contents('php://input');
$obj = json_decode($json);


$sqlFields = "property_type, 
house_no, 
street_name, 
town_name, 
county, 
eircode,
geo_locate_text, 
vacant_time, 
sale_rent_sign, 
grass_overgrown, 
roof_damaged, 
windows_boarded, 
paint_peeling, 
property_activity, 
waste_bins, 
access_to_property, 
about_you, 
message, 
can_contact, 
edit_name, 
edit_email, 
edit_phone, 
tandc,
picture,
ip_address";

$sqlValues = "";
$geoLocateText = "";
$propertyType = "";
$houseNo = "";
$streetName = "";
$townName = "";
$county = "";
$eircode = "";
$vacantTime = "";
$saleRentSign = "";
$grassOvergrown = "";
$roofDamaged = "";
$windowsBoarded = "";
$paintPeeling = "";
$propertyActivity = "";
$wasteBins = "";
$accessToProperty = "";
$aboutYou = "";
$message = "";
$canContact = "";
$editName = "";
$editEmail = "";
$editPhone = "";
$editEmail = "";
$tandc = "";
$image = "";

foreach($obj as $key => $value){
    if ($key == "geoLocateText") {
        $geoLocateText = "'".addslashes(str_replace("Geolocation:", "", $value))."', ";
    } else if ($key == "propertyType") {
        $propertyType = stripslashes($value);
    } else if ($key == "houseNo") {
        $houseNo = stripslashes($value);
    } else if ($key == "streetName") {
        $streetName = stripslashes($value);
    } else if ($key == "townName") {
        $townName = stripslashes($value);
    } else if ($key == "county") {
        $county = stripslashes($value);
    } else if ($key == "eircode") {
        $eircode = stripslashes($value);
    } else if ($key == "vacantTime") {
        $vacantTime = stripslashes($value);
    } else if ($key == "saleRentSign") {
        $saleRentSign = stripslashes($value);
    } else if ($key == "grassOvergrown") {
        $grassOvergrown = stripslashes($value);
    } else if ($key == "roofDamaged") {
        $roofDamaged = stripslashes($value);
    } else if ($key == "windowsBoarded") {
        $windowsBoarded = stripslashes($value);
    } else if ($key == "paintPeeling") {
        $paintPeeling = stripslashes($value);
    } else if ($key == "propertyActivity") {
        $propertyActivity = stripslashes($value);
    } else if ($key == "wasteBins") {
        $wasteBins = stripslashes($value);
    } else if ($key == "accessToProperty") {
        $accessToProperty = stripslashes($value);
    } else if ($key == "aboutYou") {
        $aboutYou = stripslashes($value);
    } else if ($key == "message") {
        $message = stripslashes($value);
    } else if ($key == "canContact") {
        $canContact = stripslashes($value);
    } else if ($key == "editName") {
        $editName = stripslashes($value);
    } else if ($key == "editEmail") {
        $editEmail = stripslashes($value);
    } else if ($key == "editPhone") {
        $editPhone = stripslashes($value);
    } else if ($key == "editEmail") {
        $editEmail = stripslashes($value);
    } else if ($key == "tandc") {
        $tandc = stripslashes($value);
    } else if ($key == "image") {
        $image = stripslashes($value);
    } 
    
}

$sqlValues = '"'.$propertyType.'", "'.$houseNo.'", "'.$streetName.'", "'.$townName.'", "'.$county.'", "'.$eircode.'", "'.$geoLocateText.'", "'.$vacantTime.'", "'.$saleRentSign.'", "'.$grassOvergrown.'", "'.$roofDamaged.'", "'.$windowsBoarded.'", "'.$paintPeeling.'", "'.$propertyActivity.'", "'.$wasteBins.'", "'.
$accessToProperty.'", "'.$aboutYou.'", "'.$message.'", "'.$canContact.'", "'.$editName.'", "'.$editEmail.'", "'.$editPhone.'", "'.$tandc. '", "'.$image.'", "'.$_SERVER['REMOTE_ADDR'] .'"';

$sql = "insert into properties (".$sqlFields.") values (".$sqlValues.")";

connectQueryClose($sql);

/*
$fp = fopen('test.txt', 'w');
fwrite($fp, $sql);
fclose($fp);
*/

echo "ok";