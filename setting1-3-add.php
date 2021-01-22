<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มข้อมูลชุมนุม</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/app.css">

    <!-- logo browser -->
    <link rel="icon" href="img/logo-browser.png">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
        integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
        crossorigin="anonymous" />

</head>

<body>
    <section class="admin-container">
        <div class="admin-nav">
            <?php include('admin-navbar.php'); ?>
        </div>
        <div class="admin-dashboard">
            <h4>ตั้งค่าระบบ</h4>
            <h1>เพิ่มข้อมูลชุมนุม</h1>

            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-control">
                    <label for="name">*รหัสชุมนุม</label>
                    <input type="text" name="txt_firstname" class="txt-content" placeholder="รหัสชุมนุม" >
                </div>
                <div class="form-control">
                    <label for="name">*ชื่อชุมนุม</label>
                    <input type="text" name="txt_lastname" class="txt-content" placeholder="ชื่อชุมนุม" >
                </div>
                <div class="form-control">
                    <label for="name">*สถานที่</label>
                    <input type="text" name="txt_lastname" class="txt-content" placeholder="สถานที่" >
                </div>
                <div class="form-control">
                    <label for="name">*จำนวนคนสมัคร</label>
                    <input type="text" name="txt_lastname" class="txt-content" placeholder="จำนวนคนสมัคร" >
                </div>

                <div class="form-control">
                    <label for="name">*จำนวนที่รับสมัคร</label>
                    <input type="text" name="txt_lastname" class="txt-content" placeholder="จำนวนที่รับสมัคร" >
                </div>

                <div class="btn-manage">
                    <a class="btn btn-delete" href="setting1-3.php">ยกเลิก</a>
                    <button class="btn btn-upload" name="btn_upload">ยืนยัน</button>
                </div>

            </form>
        </div>

        
    </section>
</body>

</html>