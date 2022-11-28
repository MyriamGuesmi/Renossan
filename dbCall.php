<!-- PHP code to establish connection with the localserver -->
<?php
 
// Username is root
$user = 'root';
$password = '';
 
// Database name is geeksforgeeks
$database = 'renossan nv';
 
// Server is localhost with
// port number 3306
$servername='localhost';
$mysqli = new mysqli($servername, $user,
                $password, $database);
 
// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' .
    $mysqli->connect_errno . ') '.
    $mysqli->connect_error);
}
 
// SQL query to select data from database
$sql_gammes = " SELECT * FROM gammes";
$result = $mysqli->query($sql_gammes);



$sql_options = " SELECT * FROM options";
$res_options = $mysqli->query($sql_options);


$sql_op_pm = " SELECT * FROM options WHERE options.optionID=1 ";
$res_op_pm = $mysqli->query($sql_op_pm);

$sql_op_pm_voit = " SELECT * FROM gammoption op, renossanmodel re WHERE op.idmodel=re.modID AND op.opID = 1";
$res_op_pm_voit = $mysqli->query($sql_op_pm_voit);


$sql_op_gps = " SELECT * FROM options WHERE options.optionID=2 ";
$res_op_gps = $mysqli->query($sql_op_gps);

$sql_op_gps_voit = " SELECT * FROM gammoption op, renossanmodel re WHERE op.idmodel=re.modID AND op.opID = 2";
$sql_op_gps_voit = $mysqli->query($sql_op_gps_voit);


$sql_op_toit = " SELECT * FROM options WHERE options.optionID=3 ";
$res_op_toit = $mysqli->query($sql_op_toit);

$sql_op_toit_voit = " SELECT * FROM gammoption op, renossanmodel re WHERE op.idmodel=re.modID AND op.opID = 3";
$sql_op_toit_voit = $mysqli->query($sql_op_toit_voit);

   
    
    

$mysqli->close();
?>