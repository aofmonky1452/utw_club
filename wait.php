<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>โปรดรอสักครู่</title>
    
    <?php include('import.php'); ?>
    
    
</head>
<body>
    
    <div class="register" id="wait">
        <div class="card-header">
            <!-- left -->
            <div class="card-header-logo">
                <div class="header-logo">
                    <img src="img/utw.gif">
                </div>
                <div class="header-title">
                    <h1>ลงทะเบียนชุมนุม</h1>
                    <h3>โรงเรียนอุทัยวิทยาคม</h3>
                </div>
            </div>

            <!-- right -->
            <div class="card-header-system">
                <h2>ขั้นตอนที่ 2/3 : เตรียมเลือกชุมนุม</h2>
                <h4>นายอนันต์ ฐะปัตชะเย</h4>
            </div>
        </div>
        <form class="card">
            <div class="timer-wait" v-if="!statusRegister">
                <h1>กรุณารอสักครู่</h1>

                <div class="loadingio-spinner-ripple-cs0r6su1glk">
                    <div class="ldio-abebizowwe5">
                        <div></div>
                        <div></div>
                    </div>
                </div>

                <h3>เหลือเวลาอีก</h3>
                <h1>{{ displayMinutes }} : {{ displaySeconds }} </h1>

                <div class="progress-bar">
                    <progress class="sb-progress sb-progress--red" v-bind:value="displayProgress" max="100"></progress>
                </div>
                    
                <h3>กรุณารอจนกว่าจะหมดเวลา เพื่อป้องกันเว็บไซต์ล่มเนื่องจากแบนด์วิดไม่พอใช้งาน</h3>
                <h3>ระหว่างรอเวลา สามารถตรวจสอบชุมนุมว่างได้ที่ลิงค์ด้านล่างนี้</h3>
                <a class="a-check-club" href="checkClub.php" target="_blank">ตรวจสอบชุมนุมก่อนเลือก (กดลิงค์นี้เปิดแท็ปใหม่)</a>
            </div>
            
            
            <div class="timer-done" v-if="statusRegister">
                <h1 style="text-alin:center; margin-top: 50px;">เลือกชุมนุมที่ต้องการ</h1>
                <select class="sel-club">
                    <option value="">--- เลือก ---</option>
                    <option value="">ชุมนุม</option>
                    <option value="">ชุมนุม</option>
                    <option value="">ชุมนุม</option>
                    <option value="">ชุมนุม</option>
                </select>

                <div class="btn-control-row">
                    <a href="index.php" class="btn btn-danger"><i style="margin: 0 10px;" class="fas fa-chevron-left"></i> ยกเลิก</a>
                    <a href="statusPass.php" class="btn btn-success">ยืนยัน <i style="margin: 0 10px;" class="fas fa-chevron-right"></i></a>
                </div>
            </div>
        </form>

        
    </div>

    <?php include('footer.php'); ?>


    <script src="js/vue-main.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    </script>


</body>
</html>

