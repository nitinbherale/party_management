<?php
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
        echo "Query not cubrid_execute(conn_identifier, SQL)"; 
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

function Forget_Password($email,$username)
{
    $err = "";
    global $dblink;
    $query_sel="select * from tbl_admin where email='".$email."' and username='".$username."' and status=0";
    //echo $query_sel;
    $result_sel=mysqli_query($dblink,$query_sel);
    if(mysqli_num_rows($result_sel)>0)
    {
       $row=mysqli_fetch_array($result_sel);
        $adminid=$row["id"];
        $contact=$row["phone"];
       $password = substr(md5(uniqid(rand(),1)),3,10);
        $pass = md5($password);
        // $headers = "MIME-Version: 1.0" . "\r\n";
        //     $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        //     $headers .= 'From: contact@yuvasena.co.in' . "\r\n";
        //     $subject = 'Forget Password ';
        //     $message1 = "<html><body>";
        //     $message1 .= "<div class='mail-content'>";
        //     $message1 .= "<table style='border:1px solid #ccc;width: 80%;margin: 0px auto; padding: 28px;background-color:#f7f7f7;'>";
        //     $message1 .= "<tr><td align='center'><img src = 'http://yuvasena.co.in/SS_Programs/images/logo_shivsena.png' style='width:20%;'></td> </tr>";
        //     $message1 .= "<tr style='padding-bottom:20px;'><td style='font-family: verdana;line-height: 31px;font-size: 15px;'>Dear ".$username.", <td></tr><br>";
        //     $message1 .= "<tr><td style='font-family: verdana;line-height: 22px;font-size: 15px;'>you or someone else have requested Forgot Password. Here is your account information please keep this as you may need this at a later stage.</td></tr><br>";
        //     $message1 .= "<tr><td style='font-family: verdana;line-height: 31px;font-size: 15px;'>Your password is <b>".$password."<b></td></tr>";
        //     $message1 .= "<tr><td style='font-family: verdana;line-height: 22px;font-size: 15px;'>Your password has been reset, please login and change your password to something more rememberable.</td></tr><br>";
        //     $message1 .= "<tr><td style='font-family: verdana;line-height: 26px;font-size: 15px; padding-top: 5px;'>Regards, <br/><b>ShivSena Digital Media Team</b></td></tr>";
        //     $message1 .= "</table>";
        //     $message1 .= "</div>";
        //     $message1 .= "</body></html>";

            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
              $headers .= 'From: contact@yuvasena.co.in' . "\r\n";
     
            $subject = 'Forget Password';
            $message1 = "<html><body>";
            $message1 .= "<div class='mail-content'>";
            $message1 .= "<table style='border:1px solid #ccc;width: 80%;margin: 0px auto; padding: 28px;background-color:#f7f7f7;'>";
            $message1 .= "<tr> <td align='center'><img src = 'http://yuvasena.co.in/new_ss_program/admin/images/logo_shivsena.png' style='width:20%;'></td> </tr>";
            $message1 .= "<tr style='padding-bottom:20px;'><td style='font-family: verdana;line-height: 31px;font-size: 15px;'>Dear ".$username.", <td></tr>";
            $message1 .= "<tr style='padding-bottom:20px;'><td style='font-family: verdana;line-height: 31px;font-size: 15px;'>Jai Maharashtra!!! <br/>you or someone else have requested Forgot Password. Here is your account information please keep this as you may need this at a later stage.<td></tr>";
            $message1 .= "<tr><td style='font-family: verdana;line-height: 31px;font-size: 15px;'>Your password is <b>".$password."<b></td></tr>";
             $message1 .= "<tr><td style='font-family: verdana;line-height: 22px;font-size: 15px;'>Your password has been reset, please login and change your password to something more rememberable.</td></tr><br>";
             $message1 .= "<tr><td style='font-family: verdana;line-height: 26px;font-size: 15px; padding-top: 5px;'>Regards, <br/><b>ShivSena Digital Media Team</b></td></tr>";
            
            $message1 .= "</table>";
            $message1 .= "</div>";
            $message1 .= "</body></html>";
//echo $message1;
        $text = $message1;
        if(mail($email,$subject,$text,$headers))
        {



            $query_up="update tbl_admin set password ='".$pass."' where id=".$adminid;



        $result_up=mysqli_query($dblink,$query_up);



        if($result_up)  {    $authKey = "xk9139XKsu83ae";

            $senderId = "AUTPRO";

            $clientId = "7c2f838f-3f5d-4208-ab38-859ca1c858d0";

            $message = urlencode('You have successfully updated your password for ShivSena Program Managment. Username : '.$username.' Password : '.$password.'. Click Here to Login https://bit.ly/2kMFELA');

            $route = "route=4";

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

             if(curl_errno($ch)){

                $err = 'message not send';

             }  
             else{
                $err = "";
             }

              curl_close($ch);

         }



        else {  $err='Error in updating the admin details.';    }



        }



        else



        {



            $err= 'mail sending fail';



        }



    }



    else    {   $err='Invalid Email ID and Username.Please check';  }



    return $err;



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







    function get_user($id)



    {

        //echo "echo this get called";

        //echo $id;

        global $dblink;



        $resultArray=array();



        $qry = "select * from tbl_admin where id = $id";



        $resultQueryFinal=mysqli_query($dblink,$qry);



        if(mysqli_num_rows($resultQueryFinal)>0)



        {



            while($RwGtAlSbmsn=mysqli_fetch_array($resultQueryFinal))



            {



                array_push($resultArray,$RwGtAlSbmsn);



            }



        }



  



    //echo count($resultArray);



        return array($resultArray);



    }



function searchPrograms($Pg,$fromdate,$todate,$tblname,$updates)

    {

        global $dblink;

        $resultArray=array();

        list($min,$max,$Pg)=Paging($Pg);

        if(strlen($updates>0))

        {

        $query="select * from $tblname where date between '$fromdate' and '$todate' and  status=0 and user='$updates'";    

        } else {

        $query="select * from $tblname where date between '$fromdate' and '$todate' and  status=0 ";

        }

        $result=mysqli_query($query,$dblink);

        $Ttl=mysqli_num_rows($result);      $TtlPg=ceil($Ttl/$max);

        if(($TtlPg<$Pg) && ($TtlPg>0)) list($min,$max,$Pg)=Paging($Pg-1);

        if(strlen($updates>0))

        {

        //$queryFinal="select * from $tblname where date between '$fromdate' and '$todate' and status=0 and user='$updates' order by id desc";

        list($result) = exc_qry("select * from $tblname where date between '$fromdate' and '$todate' and status=0 and user='$updates' order by id desc");  

        } else {

        //$queryFinal="select * from $tblname where date between '$fromdate' and '$todate' and status=0 order by id desc";

        list($result) = exc_qry("select * from $tblname where date between '$fromdate' and '$todate' and status=0 order by id desc");

        }

        //exit();

        $resultQueryFinal=mysqli_query($queryFinal,$dblink);

        if(mysqli_num_rows($resultQueryFinal)>0)

        {

            while($RwGtAlSbmsn=mysqli_fetch_array($resultQueryFinal,MYSQL_ASSOC))

            {

                array_push($resultArray,$RwGtAlSbmsn);

            }

        }

        return array($TtlPg,$Pg,$resultArray,$Ttl);

        echo $resultArray;

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

function approve_mail($email,$date,$description,$street,$city,$postal_code,$time,$per_nm,$per_phone,$title,$id){

     $headers = "MIME-Version: 1.0" . "\r\n";

            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

            //$email = "ashok.dongare@nmpl.biz, sagar.pardeshi@nmpl.biz, surajyuvasena@gmail.com, siddhesh_rk@hotmail.com";

           // $email = "ashok.dongare@nmpl.biz";            

            //$email = "sagar.pardeshi@nmpl.biz, ashok.dongare@nmpl.biz";

            // Additional headers

            $headers .= 'From: contact@yuvasena.co.in' . "\r\n";

            $subject = $title.' Program Confirmed';

            $message1 = "<html><body>";

            $message1 .= "<div class='mail-content'>";

            $message1 .= "<table style='border:1px solid #ccc;width: 80%;margin: 0px auto; padding: 28px;background-color:#f7f7f7;'>";

            $message1 .= "<tr><td align='center'><img src = 'http://yuvasena.co.in/new_ss_program/admin/images/logo_shivsena.png' style='width:20%;'></td> </tr>";

           

            $message1 .= "<tr style='padding-bottom:20px;'> <td style='font-family: verdana;line-height: 31px;font-size: 15px;'>Jai Maharashtra!!! <br/> We accept with pleasure, the kind invitation of Program.

            <td></tr>";

            $message1 .= "<tr><td style='font-family: verdana;line-height: 31px;font-size: 15px;'><b>Date : </b>".$date."</td></tr>";

            $message1 .= "<tr><td style='font-family: verdana;line-height: 31px;font-size: 15px;'><b>Program Details : </b>".$description."</td></tr>";

            $message1 .= "<tr><td style='font-family: verdana;line-height: 31px;font-size: 15px;'><b>Location : </b>".$street.", ".$city.", ".$postal_code."</td></tr>";

            $message1 .= "<tr><td style='font-family: verdana;line-height: 31px;font-size: 15px;'><b>Time : </b>".$time." </td></tr>";

            $message1 .= "<tr><td style='font-family: verdana;line-height: 31px;font-size: 15px;'><b>Person of Contact : </b>".$per_nm." - ".$per_phone." </td></tr>";

            $message1 .= "<tr><td style='font-family: verdana;line-height: 31px;font-size: 15px;'>This is to confirm the presence of Hon.  Aaditya ji Thackeray. <br> We look forward to the program

<br> Thank You </td></tr>";

            $message1 .= "<tr><td style='font-family: verdana;line-height: 26px;font-size: 15px; padding-top: 5px;'>Regards, <br/><b>ShivSena Digital Media Team</b></td></tr>";

            $message1 .= "</table>";

            $message1 .= "</div>";

            $message1 .= "</body></html>";



//echo $message1;

        $text = $message1;


        if(strlen($email)>0){
        mail($email,$subject,$text,$headers);


        }
                  $authKey = "xk9139XKsu83ae";

            $senderId = "AUTPRO";

            $clientId = "7c2f838f-3f5d-4208-ab38-859ca1c858d0";

            $short = make_bitly_url('http://yuvasena.co.in/new_ss_program/admin/program.php?id='.$id,'o_4l25i9vkav','R_2654447964be40a2a6caae4305917253','json');

            $message = urlencode('We accept with pleasure, the kind invitation of Program. For More details please click on below link '.$short);

            $route = "route=4";

            $postData = array(

            'authkey' => $authKey,

            'mobiles' => $contact,

            'message' => $message,

            'sender' => $senderId,

            'route' => $route

            );

            $url="https://quick.admarksolution.com/vendorsms/pushsms.aspx?clientid=$clientId&apikey=$authKey&msisdn=91$per_phone&sid=$senderId&msg=$message&fl=0&gwid=2&dc=8";

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

             if(curl_errno($ch)){

                $err = 'message not send';

             }  

              curl_close($ch);

}



function send_notification($chk_box,$date,$details,$address,$time,$coor_details,$username,$p_id,$homepage)  

{

    //echo $homepage;

    //break;

    global $dblink;

    for($i=0;$i<count($chk_box);$i++)

        {

                $QryChkFaqExists="select * from tbl_admin where id=$chk_box[$i]";

                $ResChkFaqExists=mysqli_query($dblink,$QryChkFaqExists);

                mysqli_num_rows($ResChkFaqExists);

                if(mysqli_num_rows($ResChkFaqExists)>0)

                {  

                   $row=mysqli_fetch_array($ResChkFaqExists); 

                   $email = $row['email']; 

                   $contact = $row['phone'];

                   $name = $row['fname']." ".$row['lname'];

                    $headers = "MIME-Version: 1.0" . "\r\n";

            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

                    $headers .= 'From: contact@yuvasena.co.in' . "\r\n";

            

            $subject = 'Program assigned by ShivSena Program Administrator';

            $message1 = "<html><body>";

            $message1 .= "<div class='mail-content'>";

            $message1 .= "<table style='border:1px solid #ccc;width: 80%;margin: 0px auto; padding: 28px;background-color:#f7f7f7;'>";

            $message1 .= "<tr> <td align='center'><img src = 'http://yuvasena.co.in/new_ss_program/admin/images/logo_shivsena.png' style='width:20%;'></td> </tr>";

            $message1 .= "<tr style='padding-bottom:20px;'><td style='font-family: verdana;line-height: 31px;font-size: 15px;'>Dear ".$name.", <td></tr>";

            $message1 .= "<tr style='padding-bottom:20px;'><td style='font-family: verdana;line-height: 31px;font-size: 15px;'>Jai Maharashtra!!! <br/>One program assigned to ".$username." by ShivSena program administrator following are the details: <td></tr>";

            $message1 .= "<tr><td style='font-family: verdana;line-height: 31px;font-size: 15px;'><b>Date : </b>".$date."</td></tr>";

            $message1 .= "<tr> <td style='font-family: verdana;line-height: 31px;font-size: 15px;'><b>Deatils : </b>".$details."</td></tr>";

            ///echo $address;

            $message1 .= "<tr> <td style='font-family: verdana;line-height: 31px;font-size: 15px;'><b>Location : </b>".$address."</td></tr>";

            $message1 .= "<tr><td style='font-family: verdana;line-height: 31px;font-size: 15px;'><b>Time : </b>".$time." </td></tr>";

            //echo $coor_details;

            $message1 .= "<tr><td style='font-family: verdana;line-height: 31px;font-size: 15px;'><b>Person of Contact : </b>".$coor_details." </td></tr>";

            $message1 .= "<tr> <td style='font-family: verdana;line-height: 31px;font-size: 15px;padding-top: 10px;'>Regards, <br/><b>ShivSena Digital Media Team</b></td></tr>";

            

            $message1 .= "</table>";

            $message1 .= "</div>";

            $message1 .= "</body></html>";

           $text = $message1;

             if(mail($email,$subject,$text,$headers))

                    {

                        //echo $contact;

                         $authKey = "xk9139XKsu83ae";

                            $senderId = "AUTPRO";

                            $clientId = "7c2f838f-3f5d-4208-ab38-859ca1c858d0";

                            $short = make_bitly_url('http://yuvasena.co.in/new_ss_program/admin/program.php?id='.$p_id,'o_4l25i9vkav','R_2654447964be40a2a6caae4305917253','json');

                            $message = urlencode('New Program assigned to '.$username.' by ShivSena Digital Media Team Administrator. For more details click here '.$short);

                            $route = "route=4";

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

                              curl_error($ch);
                              echo '<script>my_function("Error in message send");</script>';

                                }

                            else

                            {

                                $msg = "tsk";

                                if($homepage=="view_db"){

                                  // header('location:view_db_program.php?msg='.$msg.'&id='.$p_id.'&username='.$username);
                                   echo '<script>success_message("","success","Program Assigned to '.$username.'","view_program.php?id='.$p_id.'"); </script>';

                                }

                                elseif($homepage=="program")

                                {

                                  echo '<script>success_message("","success","Program Assigned to '.$username.' ","program_list.php"); </script>';
                                }

                                elseif($homepage=="view")

                                {

                                    echo '<script>success_message("","success","Program Assigned to '.$username.' ","view_program.php?id='.$p_id.'"); </script>';

                                }

                                 elseif($homepage=="index"){

                                    //header('location:index.php?msg='.$msg.'&username='.$username);
                                     echo '<script>success_message("","success","Program Assigned to '.$username.' ","index.php"); </script>';

                                 }

                                    }

                        curl_close($ch);

                    }

                }

        }

}

function send_notify($chk_box,$date,$details,$address,$time,$coor_details,$username,$p_id,$homepage,$status)  

{

 //echo '<script>my_function("homepage'.$homepage.'");</script>';

  global $dblink;

  for($i=0;$i<count($chk_box);$i++)

    {

          $QryChkFaqExists="select * from tbl_admin where id=$chk_box[$i]";

        $ResChkFaqExists=mysqli_query($dblink,$QryChkFaqExists);

          mysqli_num_rows($ResChkFaqExists);

        if(mysqli_num_rows($ResChkFaqExists)>0)

        {  

           $row=mysqli_fetch_array($ResChkFaqExists); 

           $email = $row['email']; 

           $contact = $row['phone'];

           $name = $row['fname']." ".$row['lname'];

            $headers = "MIME-Version: 1.0" . "\r\n";

            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

            $headers .= 'From: contact@yuvasena.co.in' . "\r\n";

            $subject = 'Program details has been changed by ShivSena Program Administrator';

            $message1 = "<html><body>";

            $message1 .= "<div class='mail-content'>";

            $message1 .= "<table style='border:1px solid #ccc;width: 80%;margin: 0px auto; padding: 28px;background-color:#f7f7f7;'>";

            $message1 .= "<tr> <td align='center'><img src = 'http://yuvasena.co.in/new_ss_program/admin/images/logo_shivsena.png' style='width:20%;'></td> </tr>";

            $message1 .= "<tr style='padding-bottom:20px;'><td style='font-family: verdana;line-height: 31px;font-size: 15px;'>Dear ".$name.", <td></tr>";

            $message1 .= "<tr style='padding-bottom:20px;'><td style='font-family: verdana;line-height: 31px;font-size: 15px;'>Jai Maharashtra!!! <br/> We are apologies for changes in program - ".$details."  by ShivSena program administrator. Following are the program  details: <td></tr>";

            $message1 .= "<tr><td style='font-family: verdana;line-height: 31px;font-size: 15px;'><b>Date : </b>".$date."</td></tr>";

            $message1 .= "<tr> <td style='font-family: verdana;line-height: 31px;font-size: 15px;'><b>Deatils : </b>".$details."</td></tr>";

            ///echo $address;

            $message1 .= "<tr> <td style='font-family: verdana;line-height: 31px;font-size: 15px;'><b>Location : </b>".$address."</td></tr>";

            $message1 .= "<tr><td style='font-family: verdana;line-height: 31px;font-size: 15px;'><b>Time : </b>".$time." </td></tr>";

            //echo $coor_details;

            $message1 .= "<tr><td style='font-family: verdana;line-height: 31px;font-size: 15px;'><b>Person of Contact : </b>".$coor_details." </td></tr>";

            $message1 .= "<tr><td style='font-family: verdana;line-height: 31px;font-size: 15px;'><b>Assigned to : </b>".$username." </td></tr>";

            $message1 .= "<tr> <td style='font-family: verdana;line-height: 31px;font-size: 15px;padding-top: 10px;'>Regards, <br/><b>ShivSena Digital Media Team</b></td></tr>";

            

            $message1 .= "</table>";

            $message1 .= "</div>";

            $message1 .= "</body></html>";



        

             



           $text = $message1;

       

                if(mail($email,$subject,$text,$headers))

              {

                //echo $contact;

                 $authKey = "xk9139XKsu83ae";

                    $senderId = "AUTPRO";

                    $clientId = "7c2f838f-3f5d-4208-ab38-859ca1c858d0";

                    $short = make_bitly_url('http://yuvasena.co.in/new_ss_program/admin/program.php?id='.$p_id,'o_4l25i9vkav','R_2654447964be40a2a6caae4305917253','json');

                    $message = urlencode('We are apologies for changes in program - '.$details.' done by ShivSena Digital Media Team Administrator. For more details click here '.$short);

    



                    

                    $route = "route=4";

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

                 'error:' . curl_error($ch);
                  echo '<script>my_function("Error in message sent");</script>';

                      }

              else

                    {

                       

                            if($homepage=="view_db"){

                                  // header('location:view_db_program.php?msg='.$msg.'&id='.$p_id.'&username='.$username);
                                   echo '<script>success_message("","success","Program Assigned to '.$username.' ","view_program.php?id='.$p_id.'");</script>';

                                }

                                elseif($homepage=="program")

                                {

                                  echo '<script>success_message("","success","Program Assigned to '.$username.'","program_list.php");</script>';
                                }

                                elseif($homepage=="view")

                                {
                                    echo '<script>success_message("","success","Program Assigned to '.$username.'","view_program.php?id='.$p_id.'"); </script>';

                                }

                                 elseif($homepage=="index"){

                                    //header('location:index.php?msg='.$msg.'&username='.$username);
                                     echo '<script>success_message("","success","Program Assigned to '.$username.' ","index.php"); </script>';

                                 }
                       

                        }

                curl_close($ch);

              } //mail

        }//myswli

    }//for

}//function

function cancel_program($id) {
 global $dblink;
    list($result) = exc_qry("select * from program where id = $id");
        $asign = $result[0]['user'];
        $notify = $result[0]['notify'];
      if($asign>0){
            $notify .= ",".$asign;
            
      }
      $up_qry="update program set cancel = 1 where id = $id";

      $ex_qry = mysqli_query($dblink,$up_qry);
        if ($ex_qry) {
             //echo "<script>window.alert('".$up_qry."');</script>";
             contact_person_cancel_mail($id);
           $notify = array_map('trim',explode(",",$notify));//array created
            for($i=0;$i<count($notify);$i++)
                {
                $QryChkFaqExists="select * from tbl_admin where id=$notify[$i]";
                 $ResChkFaqExists=mysqli_query($dblink,$QryChkFaqExists);
               mysqli_num_rows($ResChkFaqExists);
                 if(mysqli_num_rows($ResChkFaqExists)>0)
                 {  
                    $row=mysqli_fetch_array($ResChkFaqExists); 
                    $email = $row['email']; 
                    $contact = $row['phone'];
                    $name = $row['fname']." ".$row['lname'];
                       $headers = "MIME-Version: 1.0" . "\r\n";
                        $date = date('d-M-Y', strtotime($result[0]['date']));
                      $time = date('h:i a',strtotime($result[0]['program_time']));
                 $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                                 $headers .= 'From: contact@yuvasena.co.in' . "\r\n";
            
                     $subject = 'Program Cancel by ShivSena Program Administrator';
                    $message1 = "<html><body>";
                    $message1 .= "<div class='mail-content'>";
                    $message1 .= "<table style='border:1px solid #ccc;width: 80%;margin: 0px auto; padding: 28px;background-color:#f7f7f7;'>";
                    $message1 .= "<tr> <td align='center'><img src = 'http://yuvasena.co.in/new_ss_program/admin/images/logo_shivsena.png' style='width:20%;'></td> </tr>";
                    $message1 .= "<tr style='padding-bottom:20px;'><td style='font-family: verdana;line-height: 31px;font-size: 15px;'>Dear ".$name.", <td></tr>";
                    $message1 .= "<tr style='padding-bottom:20px;'><td style='font-family: verdana;line-height: 31px;font-size: 15px;'>Jai Maharashtra!!! <br/>We regret to inform you that following program has been Cancelled <td></tr>";
                    $message1 .= "<tr><td style='font-family: verdana;line-height: 31px;font-size: 15px;'><b>Date : </b>".$date."</td></tr>";
                    $message1 .= "<tr> <td style='font-family: verdana;line-height: 31px;font-size: 15px;'><b>Deatils : </b>".$result[0]['pname']."</td></tr>";
                    $address = $result[0]['street'].", ".$result[0]['city'].", ".$result[0]['postal_code'];
                    ///echo $address;
                    $message1 .= "<tr> <td style='font-family: verdana;line-height: 31px;font-size: 15px;'><b>Location : </b>".$address."</td></tr>";
                    $message1 .= "<tr><td style='font-family: verdana;line-height: 31px;font-size: 15px;'><b>Time : </b>".$time." </td></tr>";
                   
                    $message1 .= "<tr> <td style='font-family: verdana;line-height: 31px;font-size: 15px;padding-top: 10px;'>Regards, <br/><b>ShivSena Digital Media Team</b></td></tr>";
                    
                    $message1 .= "</table>";
                    $message1 .= "</div>";
                    $message1 .= "</body></html>";
                   $text = $message1;
                     if(mail($email,$subject,$text,$headers))
                                  {
                              //echo $contact;
                               $authKey = "xk9139XKsu83ae";
                                    $senderId = "AUTPRO";
                                    $clientId = "7c2f838f-3f5d-4208-ab38-859ca1c858d0";
                                    $short = make_bitly_url('http://yuvasena.co.in/new_ss_program/admin/program.php?id='.$id,'o_4l25i9vkav','R_2654447964be40a2a6caae4305917253','json');
                                    $message = urlencode('We regret to inform you that '.$result[0]['pname'].' has been cancelled by ShivSena Digital Media Team Administrator. For more details click here '.$short);
                                     $route = "route=4";
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
                                      echo 'error:' . curl_error($ch);
                                          }
                                          else
                                            {
                                       $msg = "Cancelled";
                                                }
                                curl_close($ch);
                  
                          }// mail
                        }//qry
            }//for
            if($msg == "Cancelled"){
                return $msg;
            }
      }
      else{
         $msg = mysqli_error($dblink);
         return $msg;
      }

}
function contact_person_cancel_mail($id){
     global $dblink;
      list($result) = exc_qry("select * from program where id = $id");
      $email = $result[0]['coor_email'];
      $contact = $result[0]['coor_phone'];
      $headers = "MIME-Version: 1.0" . "\r\n";
                        $date = date('d-M-Y', strtotime($result[0]['date']));
                      $time = date('h:i a',strtotime($result[0]['program_time']));
                 $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                                 $headers .= 'From: contact@yuvasena.co.in' . "\r\n";
            
                     $subject = 'Program Cancel by ShivSena Program Administrator';
                    $message1 = "<html><body>";
                    $message1 .= "<div class='mail-content'>";
                    $message1 .= "<table style='border:1px solid #ccc;width: 80%;margin: 0px auto; padding: 28px;background-color:#f7f7f7;'>";
                    $message1 .= "<tr> <td align='center'><img src = 'http://yuvasena.co.in/new_ss_program/admin/images/logo_shivsena.png' style='width:20%;'></td> </tr>";
                    $message1 .= "<tr style='padding-bottom:20px;'><td style='font-family: verdana;line-height: 31px;font-size: 15px;'>Dear ".$result[0]['coor_person'].", <td></tr>";
                    $message1 .= "<tr style='padding-bottom:20px;'><td style='font-family: verdana;line-height: 31px;font-size: 15px;'>Jai Maharashtra!!! <br/>We regret to inform you that following program has been Cancelled <td></tr>";
                    $message1 .= "<tr><td style='font-family: verdana;line-height: 31px;font-size: 15px;'><b>Date : </b>".$date."</td></tr>";
                    $message1 .= "<tr> <td style='font-family: verdana;line-height: 31px;font-size: 15px;'><b>Deatils : </b>".$result[0]['pname']."</td></tr>";
                    $address = $result[0]['street'].", ".$result[0]['city'].", ".$result[0]['postal_code'];
                    ///echo $address;
                    $message1 .= "<tr> <td style='font-family: verdana;line-height: 31px;font-size: 15px;'><b>Location : </b>".$address."</td></tr>";
                    $message1 .= "<tr><td style='font-family: verdana;line-height: 31px;font-size: 15px;'><b>Time : </b>".$time." </td></tr>";
                   
                    $message1 .= "<tr> <td style='font-family: verdana;line-height: 31px;font-size: 15px;padding-top: 10px;'>Regards, <br/><b>ShivSena Digital Media Team</b></td></tr>";
                    
                    $message1 .= "</table>";
                    $message1 .= "</div>";
                    $message1 .= "</body></html>";
                   $text = $message1;
                   if(strlen($email)>0){
                     mail($email,$subject,$text,$headers);
                   }
                   $authKey = "xk9139XKsu83ae";
                                    $senderId = "AUTPRO";
                                    $clientId = "7c2f838f-3f5d-4208-ab38-859ca1c858d0";
                                    $short = make_bitly_url('http://yuvasena.co.in/new_ss_program/admin/program.php?id='.$id,'o_4l25i9vkav','R_2654447964be40a2a6caae4305917253','json');
                                    $message = urlencode('We regret to inform you that '.$result[0]['pname'].' has been cancelled by ShivSena Digital Media Team Administrator. For more details click here '.$short);
                                     $route = "route=4";
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
                                      //echo 'error:' . curl_error($ch);
                                          }
                                          else
                                            {
                                       $msg = "Cancelled";
                                                }
                                curl_close($ch);
                  
}
?>