<?php
if(isset($_COOKIE['local'])){
    echo '<script>document.location.href="https://popcyut.cyut.club/";</script>';
    exit();
}
?>
<?php


function get_real_ip(){ 

$ip=false;
if(!empty($_SERVER["HTTP_CLIENT_IP"])){
$ip=$_SERVER["HTTP_CLIENT_IP"];
}
if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
$ips=explode (", ", $_SERVER['HTTP_X_FORWARDED_FOR']);
if ($ip) { array_unshift($ips, $ip); $ip=FALSE; }
for ($i=0; $i < count($ips); $i++) {
if (!eregi ("^(10|172.16|192.168).", $ips[$i])) {
$ip=$ips[$i];
break;
}
}
}
return ($ip ? $ip : $_SERVER['REMOTE_ADDR']);
}
$ip = get_real_ip();
$ch = curl_init();
$url = "http://ip-api.com/php/{$ip}?fields=country,city";
curl_setopt ($ch, CURLOPT_URL, $url);
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
$fileContents = curl_exec($ch); //網站回傳的數據，型態為字串
curl_close($ch);
$str_sec = explode('"',$fileContents);
$country =  $str_sec[3];
echo $city =  $str_sec[7];
if($city == "Keelung"){
    $id = "0";
}else if($city == "New Taipei"){
    $id = "1";
}else if($city == "Taipei"){
    $id = "2";
}else if($city == "Taoyuan"){
    $id = "3";
}else if($city == "Hsinchu"){
    $id = "4";
}else if($city == "Hsinchu"){
    $id = "5";
}else if($city == "Miaoli"){
    $id = "6";
}else if($city == "Taichung"){
    $id = "7";
}else if($city == "Changhua"){
    $id = "8";
}else if($city == "Changhua"){
    $id = "9";
}else if($city == "Nantou"){
    $id = "10";
}else if($city == "Nantou"){
    $id = "11";
}else if($city == "Yunlin"){
    $id = "12";
}else if($city == "Chiayi"){
    $id = "13";
}else if($city == "Tainan"){
    $id = "14";
}else if($city == "Kaohsiung"){
    $id = "15";
}else if($city == "Pingtung"){
    $id = "16";
}else if($city == "Yilan"){
    $id = "17";
}else if($city == "Hualien"){
    $id = "18";
}elseif($city == "Taitung"){
    $id = "19";
}elseif($city == "Penghu"){
    $id = "20";
}elseif($city == "Green"){
    $id = "21";
}elseif($city == "Orchid"){
    $id = "22";
}elseif($city == "Kinmen"){
    $id = "23";
}elseif($city == "Matsu"){
    $id = "24";
}elseif($city == "Lienchiang"){
    $id = "25";
}else{
    $id = "7";
}
setcookie("local", "$id", time()+3600);
echo '<script>document.location.href="https://popcyut.cyut.club/";</script>';
    exit();
?>