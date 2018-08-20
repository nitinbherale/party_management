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
        $_SESSION['id']=$row["ad_id"];
        $_SESSION['usr_nm']=$row["ad_usr_nm"];
        $_SESSION['usr_type']=$row["ad_type"];
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

function make_bitly_url($url, $login, $appkey, $format='xml', $history=1, $version='2.0.1')
{
    //create the URL
    $bitly = 'http://api.bit.ly/shorten';
    $param = 'version='.$version.'&longUrl='.urlencode($url).'&login='
        .$login.'&apiKey='.$appkey.'&format='.$format.'&history='.$history;
    //get the url
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $bitly . "?" . $param);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($ch);
    curl_close($ch);
    //parse depending on desired format
    if(strtolower($format) == 'json') {
        $json = @json_decode($response,true);
        return $json['results'][$url]['shortUrl'];
    } else {
        $xml = simplexml_load_string($response);
        return 'http://bit.ly/'.$xml->results->nodeKeyVal->hash;
    }
}

?>