<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ช่วงเวลาการใช้งาน</title>

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
            <h1>ช่วงเวลาการใช้งาน</h1>

            

            <form action="" method="post" enctype="multipart/form-data">

                <div class="form-control">
                    <h3>ช่วงการรับสมัคร</h3>
                    <div class="form-control-col">
                        <div class="form-control-row">
                            <p>สถานะ : เปิดใช้งาน</p>
                            <div class="btn btn-warning">เปลี่ยนช่วงเวลา</div>
                        </div>
                    </div>
                </div>
                <div class="form-control">
                    <h3>ช่วงตัดสินผลการเรียน</h3>
                    <div class="form-control-col">
                        <div class="form-control-row">
                            <p>สถานะ : เปิดใช้งาน</p>
                            <div class="btn btn-warning">เปลี่ยนช่วงเวลา</div>
                        </div>
                    </div>
                </div>

                
                <!-- <div class="btn-manage">
                    <button class="btn btn-delete" name="btn_newpatch">New patch</button>
                    <button class="btn btn-upload" name="btn_uppatch">Update patch</button>
                </div> -->

            </form>
        </div>

        
    </section>
</body>


</html>