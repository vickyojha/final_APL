<?php
// session_start();
include_once '../../uatdbconnect.php';
date_default_timezone_set('Asia/Kolkata');


if(isset($_REQUEST['auth_key']))
{
    if($_REQUEST['auth_key'] == '12345678')
    {
      if(isset($_REQUEST['phone1'],$_REQUEST['password']))
      {

    $phone1  = $_REQUEST['phone1'];
    $password = md5($_REQUEST['password']);

    $query = "SELECT * FROM retailer_table WHERE phone1='$phone1' AND password = '$password'";

    $sql_info     = mysqli_query($conn, $query);
    if(!$row = mysqli_fetch_row($sql_info))
        {
          echo '{"statuscode":"0", "message":"invalid username or password","data":"{}"}';
          exit();
        }
        else
        { 
          $result = $conn->query($query);
    $dbdata = array();
    while ($row = $result->fetch_assoc()){$dbdata[]=$row;}
 
  $json_string = json_encode($dbdata[0]);

  // curl_setopt($json_string, CURLOPT_RETURNTRANSFER, true);

  echo $json_data = '{"statuscode":"1", "message":"success", "data":'.$json_string.'}';

          
            
    }
}
else{
echo '{"statuscode":"0", "message":"Username and Password Missing","data":"{}"}';
exit();
} // Username and password missing
}
else{
echo '{"statuscode":"0", "message":"invalid auth key","data":"{}"}';
exit();
} // auth key validation
}
else
{
echo '{"statuscode":"0", "message":"invalid Params","data":"{}"}';
exit();
} // Invalid Params


?>
