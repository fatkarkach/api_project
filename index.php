 <?php
 session_start();
//le type de data recuperer est jeson il ne faut pas utiliser espace ou bien echo
header("Content-Type:application/json");
 require_once "config.php";
  $output=array('flag'=>0,'msg'=>'invalid request');
  if(isset($_SESSION['username'])&& !empty($_SESSION['username']))
   {
    $query="SELECT * from blogs";
    $result=$conn->query($query);
    $data=[];
    while($item=$result->fetch_assoc())
    {
      $data[]=$item;
  
    }
    if(count($data)>0)
    {
      $output['data']=$data;
      $output['flag']=1;
      $output['msg']='';
  
    }else
    {
      $output['flag']=0;
      $output['msg']='no data';
    }
   }
  else
  {
    $output['flag']=0;
    $output['msg']='you have not the authority to get this data ';
  }
//   print_r($output);
//   echo "transformer au format jeson  ";
echo json_encode($output);
// jeson_decode($output);
?>