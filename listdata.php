<html>
    <head>
        <style>
            span {
                color: #676767;
            }
        </style>
    </head>
    <body>
        
    <?php
require_once("./mysqli_connection.php");



$sql = "select * from properties order by id desc";

$result = connectQueryClose($sql);

for ($i = 0; $i < sizeof($result); $i++) {
    echo '<br/><a href="./readdata.php?id='.$result[$i]['id'].'"/>Property Ref:'.$result[$i]['id'].'</a>';
}

    ?></body>
</html>