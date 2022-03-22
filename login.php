<?php
session_start();
//le type de data recuperer est jeson il ne faut pas utiliser espace ou bien echo
header("Content-Type:application/json");
 require_once "config.php";
 $output=array('flag'=>0);
if(isset($_POST['username'])&& isset($_POST['password']))
{
    $query="SELECT * from users where user_name='".$_POST['username']."' and  user_password ='".$_POST['password']."'";
    $res=$conn->query($query);
    if($res->num_rows == 1)
    {
        $_SESSION['username']=$_POST['username'];
        $output['flag']=1;

    }
}
echo json_encode($output);
?>