<?php
function redirect($pg_name){
 header("location:".$pg_name);
}

function isValidUser()
{
    global $dblink;
    $sess=session_id();
    $query_sel="select * from tbl_adm where ad_sess='".$sess."' and ad_active =0";
   // echo $query_sel;
    $result_sel=mysqli_query($dblink,$query_sel);
    if(mysqli_num_rows($result_sel)>0)
    { 
        return 1;
    }
    else 
    {   
       //echo "Query not cubrid_execute(conn_identifier, SQL)"; 
        return 0;
    }
}

function LgnChk($username,$password)
{
    global $dblink;
    $sess=session_id();
    $md5_pwd=md5($password);
    $query_sel="select * from tbl_adm where ad_usr_nm='".$username."' and ad_pwd='".$md5_pwd."' and ad_active = 0";
  //  echo $query_sel;
    $result_sel=mysqli_query($dblink,$query_sel);
    if(mysqli_num_rows($result_sel)>0)
    {
       //echo "This function get called";
        $row=mysqli_fetch_array($result_sel);
        //echo count($row);
        $adminid =$row["ad_id"];
        $_SESSION['pma_adm_id']=$row["ad_id"];
        $_SESSION['pma_adm_usr_nm']=$row["ad_usr_nm"];
        $_SESSION['pma_adm_usr_type']=$row["ad_type"];
        $query_up="update tbl_adm set ad_sess='".$sess."' where ad_id=".$adminid;
        echo $query_up;
        $result_up=mysqli_query($dblink,$query_up);
        if($result_up)  { echo  $err="";    }
        else { echo $err="Error in updating the admin details.";    }
    }
    else    
    {   
        $err="Invalid Username/Pasword.Please Try Again";   
    }
    return $err;
}

function security($type)
{
    $session_type = $_SESSION['us_type'];
    if($session_type==$type){
    }
    else
    { 
        header("location:logout.php");
    }
}

 function execute_qry($qry){
     global $dblink;
     $queryFinal=$qry;
     //echo "<script>window.alert('executed')</script>";
     $result = mysqli_query($dblink,$queryFinal);
     if ($result) {
        echo "<script>window.alert('success')</script>";
     }
     else
     {
        $msg ="Error".mysqli_error($dblink);
        echo "<script>window.alert('".$msg."')</script>";
     }
 }

function exc_qry($qry)
{
    global $dblink;
    $resultArray=array();
    $queryFinal=$qry;//give the 20 values accronding to min value
    //echo $queryFinal;
    $resultQueryFinal=mysqli_query($dblink,$queryFinal);
    if(mysqli_num_rows($resultQueryFinal)>0)
    {
        while($RwGtAlSbmsn=mysqli_fetch_array($resultQueryFinal))
        {
            array_push($resultArray,$RwGtAlSbmsn);
        }
    }
// echo count($resultArray);
    return array($resultArray);
} 

function send_sms($msg,$mobile_no){
    $authKey = "xk9139XKsu83ae";
    $senderId = "AUTPRO";
    $clientId = "7c2f838f-3f5d-4208-ab38-859ca1c858d0";
    $message = urlencode($msg);
    $route = "route=4";
    $contact = $mobile_no;
    $postData = array(
    'authkey' => $authKey,
    'mobiles' => $contact,
    'message' => $message,
    'sender' => $senderId,
    'route' => $route
    );
    $url="https://quick.admarksolution.com/vendorsms/pushsms.aspx?clientid=$clientId&apikey=$authKey&msisdn=91$contact&sid=$senderId&msg=$message&fl=0&gwid=2&dc=8";
    $ch = curl_init();
    curl_setopt_array($ch, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $postData
    ));
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $output = curl_exec($ch);
    if(curl_errno($ch))
    {
        $msg = 'error:' . curl_error($ch);
    }
    else
    {
        $msg="success";
    }
    curl_close($ch);
  return $msg;
}

?>