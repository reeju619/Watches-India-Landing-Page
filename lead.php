<?php



include_once 'database.php';
   
    $num = time() . rand(100,999);
    $token = "CITIZEN-DM-". $num;
    // echo $token;
    // echo $new;
     $name = $_POST['name'];
     $number = $_POST['number'];
     $email = $_POST['email'];
     
     $sql_select="SELECT Token FROM `citizen` WHERE `Token`='"+ $token +"'";

     $result_select=mysqli_query($conn,$sql_select);

     $rowcount_select=mysqli_num_rows($result_select);

     if($rowcount_select>0){
        
      $token = "CITIZEN-DM-". $num . rand(10,99);
     }
  

  $sql = "INSERT INTO `citizen`(`Id`, `Name`, `Phone`, `Email`, `Token`) VALUES ('NULL','$name','$number','$email','$token')";
     if (mysqli_query($conn, $sql)) {
        
     } else {
        echo "Error: " . $sql . "
" . mysqli_error($conn);
     }

     mysqli_close($conn);





$name = $_POST['name'];
$number = $_POST['number'];
$email = $_POST['email'];
$utm_src = $_POST['utm_src'];
$utm_med = $_POST['utm_med'];
$utm_camp = $_POST['utm_camp'];
$utm_term = $_POST['utm_term'];
$utm_cont = $_POST['utm_cont'];
$utm_refer = $_POST['utm_refer'];
$ip_add = $_POST['ip_add'];


if($name!='' && $number!=''  && $email!='')
{
  $data = array(
        'entry.794569667' => $name,
        'entry.1403379145' => $number,
        'entry.1830891279' => $email,
        'entry.1520338260' => $token,
        'entry.216165649' => $utm_src,
        'entry.344591129' => $utm_med,
        'entry.1116430367' => $utm_camp,
        'entry.1836553037'  => $utm_term,
        'entry.1092165595' => $utm_cont,
        'entry.691791797' => $utm_refer,
        'entry.251587014' => $ip_add,
     );

    $ch=curl_init();
    curl_setopt($ch, CURLOPT_URL, 'INSERT YOUR GOOGLE SHEET LINK HERE');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
    curl_setopt($ch, CURLOPT_TIMEOUT, 15);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    $response = curl_exec($ch);

     header('Location: thank-you.php?token='.$token);


}
// else
// {
//     header('Location: /cu');

// }

 ?>
