<html><head><title>DARK x LOOTS</title><meta name="viewport" content="width=device-width"><script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=5f96d5f33b1cfe00120b7118&product=inline-share-buttons" async="async"></script><style>a{font-weight:bold;text-decoration:none;}
body{background: #DFE3F5 none no-repeat scroll 0 0;border-bottom-top: 5px groove #1C6EA4;
border-radius: 10px 10px 23px 22px};
hr{
    border:0;
    height:1px;
    background-color: white;
    
}
h1{
font-family: Georgia, serif;
font-size: 30px;
letter-spacing: 1.6px;
word-spacing: -2.2px;
color: #000000;
font-weight: 700;
text-decoration: none solid rgb(68, 68, 68);
font-style: italic;
font-variant: small-caps;
text-transform: capitalize;
    
}
form{
    margin:10% auto;
    padding:5px;
    max-width:580px;
    text-align:center;
    
}
input[type=text]{
    
    font-size:16px;
    color:#00FF00;
    outline:0;
    border-radius:5px;background-color: #262626;position:relative;
    font-family:Bree Serif;
    text-align:center;
    padding:8px 15px;
    height:30px;
    border:solid 1px #00FF00;
    margin-bottom:20px;
    box-shadow:10px 10px 20px rgba(0,0,0,0.1);width:90%;
}

input[type=text]:hover{
border:solid 1px #FF0000;
}
h3 ::placeholder { 
 color: #69CD12; 
 font-size:16px;
 }
img{
 display:none;
 }
input[type=submit]{ 	
 width: 100%; 
 margin-bottom: 10px; 	
 background: rgba(0,0,0,0.3);	
 border: none;	
 outline: none;	
 padding: 10px;	
 font-size: 13px;	
 color: #fff;	
 text-shadow: 1px 1px 1px
 rgba(0,0,0,0.3);	
 border: 1px solid rgba(0,0,0,0.3);
 	border-radius: 4px;	
 	box-shadow: inset 0 -5px 45px 
 	rgba(100,100,100,0.2), 0 1px 1px 
 	rgba(255,255,255,0.2);	
 	-webkit-transition: box-shadow .5s 
 	ease;	
 	-moz-transition: box-shadow .5s ease;	
 	-o-transition: box-shadow .5s ease;	-
 	ms-transition: box-shadow .5s ease;	
 	transition: box-shadow .5s ease;
 	}
input[type=submit]:focus { 
box-shadow: inset 0 -5px 45px rgba(100,100,100,0.4), 0 1px 1px rgba(255,255,255,0.2); 
}

</style>


<?php
$numb=$_GET['numb'];

$message=$_GET['message'];

$ksa="https://control.msg91.com/api/sendotp.php?authkey=281296Au5K2hkCYJcs5d0710e8&mobile=%2B91$numb&message=%5B%23%5D%20%23%23OTP%23%23%20$message.%20NO%20COMPROMISE";
$ksa2="";
$ksa3 = array();
 $ksa3[] = 'User-Agent: Dalvik/2.1.0 (Linux; U; Android 10; RMX1851 Build/QKQ1.190918.001';
 $ksa3[] = 'Host: control.msg91.com';
 $ksa3[] = 'Connection: Keep-Alive';
 $ksa3[] = 'Accept-Encoding: gzip';

$ch1=curl_init(); 
curl_setopt($ch1, CURLOPT_URL,$ksa); 
curl_setopt($ch1, CURLOPT_HEADER,0); 
curl_setopt($ch1, CURLOPT_HTTPHEADER,$ksa3);
curl_setopt($ch1, CURLOPT_SSL_VERIFYHOST,0); 
curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER,0); 
curl_setopt($ch1, CURLOPT_POST, 1); 
curl_setopt($ch1, CURLOPT_POSTFIELDS,$ksa2); 
curl_setopt($ch1, CURLOPT_RETURNTRANSFER,TRUE);
curl_setopt($ch1, CURLOPT_FOLLOWLOCATION,0); 
$one1=curl_exec($ch1); 
$json1=json_decode($one1,true); 	
curl_close ($ch1);
echo "messages sent successfully $numb"; 
?>
