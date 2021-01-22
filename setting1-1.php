<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ปีการศึกษา</title>

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
            <h1>ปีการศึกษา</h1>

            
            <form action="" method="post" enctype="multipart/form-data">
                <!-- <div class="form-control">
                    <div class="form-upload">
                        <label for="file-upload-1">Choose
                            <input type="file" name="txt_file" id="file-upload-1" class="file-upload"
                                accept="image/x-png,image/gif,image/jpeg">
                        </label>
                        <p id="filename-1" class="filename">Profile picture</p>
                    </div>
                </div> -->

                <div class="form-control">
                    <label for="name">*เทอม</label>
                    <input type="text" name="txt_firstname" class="txt-content" placeholder="กรอกเทอม" >
                </div>
                <div class="form-control">
                    <label for="name">*ปีการศึกษา</label>
                    <input type="text" name="txt_lastname" class="txt-content" placeholder="กรอกการศึกษา" >
                </div>
                <!-- <div class="form-control">
                    <label for="name">*Position</label>
                    <select class="sel-content" name="sel_position" >
                        <option value="">--- select ---</option>
                        <option value="Frontend developer">Frontend developer</option>
                        <option value="Backend developer">Backend developer</option>
                        <option value="Tester">Tester</option>
                        <option value="Fullstack">Fullstack</option>
                        <option value="Supporter">Supporter</option>
                        <option value="Designer">Designer</option>
                    </select>
                </div> -->

                <button class="btn btn-upload" name="btn_upload">ตั้งค่า</button>
            </form>
        </div>

        
    </section>
</body>

</html>