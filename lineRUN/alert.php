<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="style.css" rel="stylesheet">
<title>Line Lib Calls</title>
<script>
	ProgressCountdown(180, 'pageBeginCountdown', 'pageBeginCountdownText').then(value => alert(`Page has started: ${value}.`));
//เปลี่ยน เวลาตรง 180 ครับ 
function ProgressCountdown(timeleft, bar, text) {
  return new Promise((resolve, reject) => {
    var countdownTimer = setInterval(() => {
      timeleft--;

      document.getElementById(bar).value = timeleft;
      document.getElementById(text).textContent = timeleft;

      if (timeleft <= 0) {
        clearInterval(countdownTimer);
  		var r = confirm("Call staff agian!");
    	if (r == true) {
        	     location.reload();
   			} 
    
      }
    }, 1000);
  });
}
</script>
<?php
date_default_timezone_set("Asia/Bangkok");

////////// เงื่อนไข การส่งข้อความแจ้งเตือน /////////
$dt = date("l d/m/Y   h:i:sa");
 if ($_GET['id'] == '1')  {
 		$message = "เคาน์เตอร์ Research Support Service มีผู้ขอใช้บริการค่ะ ".$dt;}
else if ($_GET['id'] == '2')   {
		$message = "เคาน์เตอร์บริการชั้น 2 มีผู้ขอใช้บริการค่ะ ".$dt;}
else if ($_GET['id'] == '3')   {
		$message = "เคาน์เตอร์บริการชั้น 3 มีผู้ขอใช้บริการค่ะ ".$dt;}
else if ($_GET['id'] == '4')   {
		$message = "เคาน์เตอร์วิทยานิพนธ์ มีผู้ขอใช้บริการค่ะ ".$dt;}
else if ($_GET['id'] == '5')   {
		$message = "ผู้ใช้บริการสนใจหนังสือน่าอ่านค่ะ ".$dt;}
		
////////// เงื่อนไข การส่งข้อความแจ้งเตือน /////////

		
	sendlinemesg();	
	header('Content-Type: text/html; charset=utf-8');
	$res = notify_message($message);

function sendlinemesg() {
	
    define('LINE_API',"https://notify-api.line.me/api/notify");
	define('LINE_TOKEN','u3WPX1E01ga2yB4LG4SLt6j7DHEANI3be9aoPkUpEKX'); // ใส่ Token ตรงนี้ 

	function notify_message($message){

		$queryData = array('message' => $message);
		$queryData = http_build_query($queryData,'','&');
		$headerOptions = array(
			'http'=>array(
				'method'=>'POST',
				'header'=> "Content-Type: application/x-www-form-urlencoded\r\n"
						."Authorization: Bearer ".LINE_TOKEN."\r\n"
						."Content-Length: ".strlen($queryData)."\r\n",
				'content' => $queryData
			),
			'ssl'=>array(
			"verify_peer"=>false,
			"verify_peer_name"=>false,
			),
		);
		$context = stream_context_create($headerOptions);
		$result = file_get_contents(LINE_API,FALSE,$context);
		$res = json_decode($result);
		return $res;
	}
} ///////// ชื่อธีรยุทธ บาลชน /////////////
//เว็บทำ QR Code //
///https://www.qrcode-monkey.com/
///เว็บวิธีทำ Line Notify //
/// https://engineering.thinknet.co.th/%E0%B8%AA%E0%B8%A3%E0%B9%89%E0%B8%B2%E0%B8%87%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B9%81%E0%B8%88%E0%B9%89%E0%B8%87%E0%B9%80%E0%B8%95%E0%B8%B7%E0%B8%AD%E0%B8%99%E0%B8%94%E0%B9%89%E0%B8%A7%E0%B8%A2-line-notify-670f9b20ac27



?>
</head>

<body>


<div class="ex1"><span id="pageBeginCountdownText">180</span></div>   <!--เปลี่ยนเวลา ตรงนี้ครับ กำหนดเป็นวินาที-->

<br/>

<div class="ex2"><progress value="180" max="180" id="pageBeginCountdown"></progress></div>

</body>
</html>
