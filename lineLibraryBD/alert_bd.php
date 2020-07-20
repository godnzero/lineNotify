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
    
    if ($_GET['id'] == '1')  {
            $message = "ศาลายา : LIAD ";}
    else if ($_GET['id'] == '2')   {
            $message = "ศาลายา : LICE ";}
    else if ($_GET['id'] == '3')   {
            $message = "ศาลายา : LICF ";}
    else if ($_GET['id'] == '4')   {
            $message = "ศาลายา : LICL ";}
    else if ($_GET['id'] == '5')   {
            $message = "ศาลายา : LICR ";}
    else if ($_GET['id'] == '6')   {
            $message = "ศาลายา : LIEN ";}
    else if ($_GET['id'] == '7')   {
            $message = "ศาลายา : LIGJ ";}
    else if ($_GET['id'] == '8')   {
            $message = "ศาลายา : LIIC ";}
    else if ($_GET['id'] == '9')   {
            $message = "ศาลายา : LILA ";}
    else if ($_GET['id'] == '10')   {
            $message = "ศาลายา : LILC ";}
    else if ($_GET['id'] == '11')   {
            $message = "ศาลายา : LIMS ";}
    else if ($_GET['id'] == '12')   {
            $message = "ศาลายา : LIMT ";}
    else if ($_GET['id'] == '13')   {
            $message = "ศาลายา : LINU ";}
    else if ($_GET['id'] == '14')   {
            $message = "ศาลายา : LIPR ";}
    else if ($_GET['id'] == '15')   {
            $message = "ศาลายา : LIPT ";}
    else if ($_GET['id'] == '16')   {
            $message = "ศาลายา : LIRA-Rama Nurse Salaya ";}
    else if ($_GET['id'] == '17')   {
            $message = "ศาลายา : LIRS ";}
    else if ($_GET['id'] == '18')   {
            $message = "ศาลายา : LISH ";}
    else if ($_GET['id'] == '19')   {
            $message = "ศาลายา : LIVS ";}
    else if ($_GET['id'] == '20')   {
            $message = "ศาลายา : NSS ";}
    else if ($_GET['id'] == '21')   {
            $message = "พญาไท : LIPY ";}
    else if ($_GET['id'] == '22')   {
            $message = "พญาไท : LIRA ";}
    else if ($_GET['id'] == '23')   {
            $message = "พญาไท : LIRV ";}
    else if ($_GET['id'] == '24')   {
            $message = "พญาไท : LISC ";}
    else if ($_GET['id'] == '25')   {
            $message = "บางกอกน้อย : LINS ";}
    else if ($_GET['id'] == '26')   {
            $message = "บางกอกน้อย : LISI ";}
            
    ////////// เงื่อนไข การส่งข้อความแจ้งเตือน /////////
        sendlinemesg();	
        header('Content-Type: text/html; charset=utf-8');
        $res = notify_message($message);
    function sendlinemesg() {
        define('LINE_API',"https://notify-api.line.me/api/notify");
        define('LINE_TOKEN','q7Ze09LD7ClPlZkR9upPXI6CuL3CRs1NTJ9NNLp29Uh'); // ใส่ Token ตรงนี้ 
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

                <h5>ระบบแจ้งรับ-ส่งหนังสือเรียบร้อยแล้ว</h5>
                        <!--<button type="button" class="btn btn-warning btn-lg" onclick="closeCurrentTab()">Close</button>-->
                        <button type="button" class="btn btn-danger btn-lg shadow-lg" onclick="Redirect()">Close</button>
                </main>
        </div>
        <footer class="footer mt-auto py-3">
                <div class="container">
                        <span class="text-muted center">Copyright © Mahidol University Library and Knowledge Center 2019.</span>
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
