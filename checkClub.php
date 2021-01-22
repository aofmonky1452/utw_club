<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ตรวจสอบชุมนุม</title>

    <?php include('import.php'); ?>
</head>
<body>
    
    <div class="register">
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
                <h2>ตรวจสอบชุมนุม</h2>
                <h4 id="currentTime"></h4>
            </div>
        </div>
        <form class="card">
            <div class="card-reason">
                <div class="search-control">
                    <div class="search-control-label">
                        <label>ค้นข้อมูลจากรหัสนักเรียน : </label>
                        <label>(สำหรับผู้ที่ลงทะเบียนแล้ว)</label>
                    </div>
                    <input type="search" class="search-form" placeholder="กรอกรหัสนักเรียน">
                    <a class="btn btn-success">ค้นหา</a>
                </div>
                <h3 class="color-danger">*หมายเหตุ : โปรดรีเฟรชหน้าจอเพื่ออัพเดทสถานะชุมนุมให้ล่าสุดอยู่เสมอ (กด F5)</h3>
                <h3 class="color-danger">**หมายเหตุ : หากค่าไม่อัพเดทให้ล้างแคชและคุกกี้ (กด ctrl+F5)</h3>
            </div>
            <table class="card-club">
                <thead>
                    <tr>
                        <th>ชื่อชุมนุม</th>
                        <th>สถานะ</th>
                        <th>สถานที่เรียน</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>C001 กรุณารอจนกว่าจะหมดเวลา</td>
                        <td class="color-success">เหลืออีก 5 คน</td>
                        <td>คลองถม</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td class="color-success">เหลืออีก 5 คน</td>
                        <td>คลองถม</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td class="color-danger">เต็มแล้ว</td>
                        <td>คลองถม</td>
                    </tr>
                </tbody>
            </table>

            <div class="btn-control-row" style="margin-top: 50px;">
                <a href="index.php" class="btn btn-danger">กลับหน้าหลัก</a>
            </div>
        </form>

        
    </div>

    <?php include('footer.php'); ?>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <!-- Current time now -->
    <script>
        var today = new Date();
        var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
        console.log(time);
        document.getElementById("currentTime").innerHTML = "ณ​ เวลา " + time;
    </script>


</body>
</html>

