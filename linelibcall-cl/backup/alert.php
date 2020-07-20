<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
 		$message = "มีผู้ใช้บริการต้องการความช่วยเหลือตอนนี้ที่จุดบริการ Internet ชั้น 1 ค่ะ".$dt;}
else if ($_GET['id'] == '2')   {
		$message = "ผู้ใช้บริการต้องการความช่วยเหลือตอนนี้ที่จุดบริการเคาน์เตอร์ ชั้น 2 ค่ะ".$dt;}
else if ($_GET['id'] == '3')   {
		$message = "ใส่ข้อความแจ้งเตือน ตรงนี้".$dt;}
else if ($_GET['id'] == '4')   {
		$message = "ใส่ข้อความแจ้งเตือน ตรงนี้".$dt;}
		
////////// เงื่อนไข การส่งข้อความแจ้งเตือน /////////

		
	sendlinemesg();	
	header('Content-Type: text/html; charset=utf-8');
	$res = notify_message($message);

function sendlinemesg() {
	
    define('LINE_API',"https://notify-api.line.me/api/notify");
	define('LINE_TOKEN','6R5XD8ZzSiIC83y7hh3KTfwDTZ6uFZeNKgLahu3Swk6'); // ใส่ Token ตรงนี้ 

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
<div style="width:1024px; height:800px; background-image: url(https://survey.li.mahidol.ac.th/linelibcall-cl/bg.jpg); background-repeat:no-repeat; background-position:top; margin-left:auto; margin-right:auto;">
<div class="row begin-countdown" style=" padding:230px 0px 0px 0px;" >
  <div class="col-md-7 text-center" style=" padding:0px 0px 0px 260px;" >


<span id="pageBeginCountdownText" style=" font-size:200px;">180</span>   <!--เปลี่ยนเวลา ตรงนี้ครับ กำหนดเป็นวินาที-->

 </div>

 <br />

<progress value="180" max="180" id="pageBeginCountdown" style="    width: 890px;
    height: 100px;
    background-color: #26385c;
    margin: 55px 0px 0px 58px;"></progress>
 
</div>
</div>
</body>
</html>
