<html>
    <head>
        <style>
            span {
                color: #676767;
            }
        </style>
    </head>
    <body>
        <a href="./listdata.php"/>List of submissions</a>
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
$picture = "";


$sql = "select * from properties where id = ".intval($_GET['id']);

$result = connectQueryClose($sql);

echo '<br/><span>property_type: </span>'.$result[0]['property_type']; 
echo '<br/><span>house_no: </span>'.$result[0]['house_no']; 
echo '<br/><span>street_name: </span>'.$result[0]['street_name']; 
echo '<br/><span>town_name: </span>'.$result[0]['town_name']; 
echo '<br/><span>county: </span>'.$result[0]['county']; 
echo '<br/><span>eircode: </span>'.$result[0]['eircode'];
echo '<br/><span>geo_locate_text: </span>'.$result[0]['geo_locate_text']; 
echo '<br/><span>vacant_time: </span>'.$result[0]['vacant_time'];

$x = (intval($result[0]['sale_rent_sign']) == 1) ? 'Yes' : 'No';
echo '<br/><span>sale_rent_sign: </span>'.$x; 

$x = (intval($result[0]['grass_overgrown']) == 1) ? 'Yes' : 'No';
echo '<br/><span>grass_overgrown: </span>'.$x; 

$x = (intval($result[0]['roof_damaged']) == 1) ? 'Yes' : 'No';
echo '<br/><span>roof_damaged: </span>'.$x; 

$x = (intval($result[0]['windows_boarded']) == 1) ? 'Yes' : 'No';
echo '<br/><span>windows_boarded: </span>'.$x; 


$x = (intval($result[0]['paint_peeling']) == 1) ? 'Yes' : 'No';
echo '<br/><span>paint_peeling: </span>'.$x; 

$x = (intval($result[0]['property_activity']) == 1) ? 'Yes' : 'No';
echo '<br/><span>property_activity: </span>'.$x; 

$x = (intval($result[0]['waste_bins']) == 1) ? 'Yes' : 'No';
echo '<br/><span>waste_bins: </span>'.$x;

$x = (intval($result[0]['access_to_property']) == 1) ? 'Yes' : 'No';
echo '<br/><span>access_to_property: </span>'.$x; 
echo '<br/><span>about_you: </span>'.$result[0]['about_you']; 
echo '<br/><span>message: </span>'.$result[0]['message']; 

$x = (intval($result[0]['can_contact']) == 1) ? 'Yes' : 'No';
echo '<br/><span>can_contact: </span>'.$x; 
echo '<br/><span>edit_name: </span>'.$result[0]['edit_name']; 
echo '<br/><span>edit_email: </span>'.$result[0]['edit_email']; 
echo '<br/><span>edit_phone: </span>'.$result[0]['edit_phone']; 
$x = (intval($result[0]['tandc']) == 1) ? 'Yes' : 'No';
echo '<br/><span>tandc: </span>'.$x;


echo '<br/><span><img alt="Embedded Image" src="data:image/png;base64,'.$result[0]['picture'].'"/>';
echo '<br/><span>ip_address: </span>'.$result[0]['ip_address'];
?></body>
</html>