<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="style.css" rel="stylesheet">
    <title>Line Lib Calls</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    <?php
    date_default_timezone_set("Asia/Bangkok");
    ////////// เงื่อนไข การส่งข้อความแจ้งเตือน /////////
    
    
        if ($_GET['id'] == 'c1')   {
                $message = "Check-In Point : ศาลายา : LIAD ";}    
        else if ($_GET['id'] == 'c2')   {
                $message = "Check-In Point : ศาลายา : LICE ";}
        else if ($_GET['id'] == 'c3')   {
                $message = "Check-In Point : ศาลายา : LICF ";}
        else if ($_GET['id'] == 'c4')   {
                $message = "Check-In Point : ศาลายา : LICL ";}
        else if ($_GET['id'] == 'c5')   {
                $message = "Check-In Point : ศาลายา : LICR ";}
        else if ($_GET['id'] == 'c6')   {
                $message = "Check-In Point : ศาลายา : LIEN ";}
        else if ($_GET['id'] == 'c7')   {
                $message = "Check-In Point : ศาลายา : LIGJ ";}
        else if ($_GET['id'] == 'c8')   {
                $message = "Check-In Point : ศาลายา : LIIC ";}
        else if ($_GET['id'] == 'c9')   {
                $message = "Check-In Point : ศาลายา : LILA ";}
        else if ($_GET['id'] == 'c10')   {
                $message = "Check-In Point : ศาลายา : LILC ";}
        else if ($_GET['id'] == 'c11')   {
                $message = "Check-In Point : ศาลายา : LIMS ";}
        else if ($_GET['id'] == 'c12')   {
                $message = "Check-In Point : ศาลายา : LIMT ";}
        else if ($_GET['id'] == 'c13')   {
                $message = "Check-In Point : ศาลายา : LINU ";}
        else if ($_GET['id'] == 'c14')   {
                $message = "Check-In Point : ศาลายา : LIPR ";}
        else if ($_GET['id'] == 'c15')   {
                $message = "Check-In Point : ศาลายา : LIPT ";}
        else if ($_GET['id'] == 'c16')   {
                $message = "Check-In Point : ศาลายา : LIRA-Rama Nurse Salaya ";}
        else if ($_GET['id'] == 'c17')   {
                $message = "Check-In Point : ศาลายา : LIRS ";}
        else if ($_GET['id'] == 'c18')   {
                $message = "Check-In Point : ศาลายา : LISH ";}
        else if ($_GET['id'] == 'c19')   {
                $message = "Check-In Point : ศาลายา : LIVS ";}
        else if ($_GET['id'] == 'c20')   {
                $message = "Check-In Point : ศาลายา : NSS ";}
        else if ($_GET['id'] == 'c21')   {
                $message = "Check-In Point : พญาไท : LIPY ";}
        else if ($_GET['id'] == 'c22')   {
                $message = "Check-In Point : พญาไท : LIRA ";}
        else if ($_GET['id'] == 'c23')   {
                $message = "Check-In Point : พญาไท : LIRV ";}
        else if ($_GET['id'] == 'c24')   {
                $message = "Check-In Point : พญาไท : LISC ";}
        else if ($_GET['id'] == 'c25')   {
                $message = "Check-In Point : บางกอกน้อย : LINS ";}
        else if ($_GET['id'] == 'c26')   {
                $message = "Check-In Point : บางกอกน้อย : LISI ";}
                else if ($_GET['id'] == 'c27')   {
                        $message = "งดบริการรับ-ส่งหนังสือ : พนักงานรับส่งลา ";}
                else if ($_GET['id'] == 'c28')   {
                        $message = "งดบริการรับ-ส่งหนังสือ : พนักงานรับส่งติดภารกิจงานส่วนกลาง ";}
                else if ($_GET['id'] == 'c29')   {
                        $message = "บริการรับ-ส่งหนังสือล่าช้า : พนักงานรับส่งติดภารกิจงานส่วนกลาง ";}
                else if ($_GET['id'] == 'c30')   {
                        $message = "พนักงานรับส่งเริ่มปฏิบัติงานรับ-ส่งหนังสือ ";}	
            
    ////////// เงื่อนไข การส่งข้อความแจ้งเตือน /////////
        sendlinemesg();	
        header('Content-Type: text/html; charset=utf-8');
        $res = notify_message($message);
    function sendlinemesg() {
        define('LINE_API',"https://notify-api.line.me/api/notify");
        define('LINE_TOKEN','cPWutC6EM289w8HileoLRcqgHX8ZClPlJJ4OoQF5hi5'); // ใส่ Token ตรงนี้ 
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
        
        <div class="container">
                <main>
                <center>
                <div class="shadow-lg p-3 mb-5 bg-white rounded"><h3>Mahidol Book Delivery</h3></div>

                <h5>Mahidol Book Delivery-Check-In Point</h5>
                        <!--<button type="button" class="btn btn-warning btn-lg" onclick="closeCurrentTab()">Close</button>-->
                        <button type="button" class="btn btn-danger btn-lg shadow-lg" onclick="Redirect()">Close</button>
                </main>
        </div>
        <footer class="footer mt-auto py-3">
                <div class="container">
                        <span class="text-muted center">Copyright © Mahidol University Library and Knowledge Center 2020.</span>
                </div>
                </center>
        </footer>
       
        <?php if (!(strpos($_SERVER['HTTP_USER_AGENT'], 'Safari') && !strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome'))) {
        if (function_exists( 'wpcf7_enqueue_scripts')) {
        wpcf7_enqueue_scripts(); }}
        ?>
</body>
<script type="text/javascript">
	function closeCurrentTab(){
		var conf=confirm("Are you sure, you want to close this tab?");
		if(conf==true){
			close();
		}
	}
</script>
<script>
    function Redirect() {
        location.replace("https://www.li.mahidol.ac.th/")
    }
</script>

</html>
