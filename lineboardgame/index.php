<html>
    <head>
        <title>Call for Staff Board Game Café</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
         <!-- Custom styles for this template -->
        <link href="custom.css" rel="stylesheet">
        <!--bootstrap-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    </head>
    <body>

            
            <div class="centerize">
                <button type="button" class="btn-danger btn-circle btn-circle-xl" id="checktime" onclick="window.location.href='https://survey.li.mahidol.ac.th/lineboardgame/alert.php?id=2'"><p id="click">CLICK HERE</p></button>
            </div>
            
<!--counter-->
            <?php
            if(file_exists("counter/counter.txt")){ 
            // file_exists() คือ Function ที่ใช้ในการตรวจสอบไฟล์ หากไฟล์นั้นมีอยู่จริงจะคืนค่า true 

            $f=fopen("counter/counter.txt","r"); //เปิดไฟล์เพื่ออ่านค่า
            /* fopen() เป็นการเปิดไฟล์ตามที่ และเราจำเป็นต้องกำหนด Option ให้แก่การเปิดไฟล์ด้วย Option ต่าง ๆ ดังนี้ 
            r สำหรับการอ่านไฟล์ 
            w สำหรับการเขียนไฟล์ และข้อมูลจะถูกเขียนทับใหม่ทั้งหมด
            a สำหรับการเขียนไฟล์ แต่ข้อมูลจะถูกเขียนต่อข้อมูลเดิมที่มีอยู่ในไฟล์นั้น
            */ 

            $data=fread($f,5); 
            // fread() เป็นการอ่านไฟล์ เลข 5 คือจำนวน byte ของข้อมูลที่ต้องการอ่านค่า
            fclose($f);
            $data++;

            }else{

            $data=0;

            }

            //เขียนข้อมูลลงไฟล์
            $f=fopen("counter/counter.txt","w");
            fputs($f,$data); 
            fclose($f);
            /* 
            $data=sprintf("%05d",$data);

            %05d คือ Option ที่ใช้ในการกำหนดรูปแบบของตัวเลข
            ส่วนของเลข 5 สามารถกำหนดได้ตามต้องการ จะเป็นการกำหนดจำนวนหลักของตัวเลขที่แสดงผล โดยถ้าจำนวนหลักน้อยกว่าตัวเลขที่กำหนด จะนำเลข 0 นำหน้าตัวเลขนั้นให้ครบ 5 หลัก เป็นต้น


            echo $data; // แสดงผล*/ 
            ?>
              
    </body>

<script type="text/javascript" defer="defer">

//Setเวลา
    var enableDisable = function(){
    var hours = new Date().getUTCHours()+7;
    if (hours >= 13 && hours < 18){
        document.getElementById('checktime').disabled = false;
       
    }
    else
    {
        document.getElementById('checktime').disabled = true;
        document.getElementById("click").innerHTML = "ยังไม่เปิดให้ใช้บริการ";
    }
};
setInterval(enableDisable, 1000*60);
enableDisable();
</script>
</html>