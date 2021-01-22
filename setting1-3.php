<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลชุมนุม</title>

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
            <h1>ข้อมูลชุมนุม</h1>
            <a href="setting1-3-add.php" class="btn btn-upload">เพิ่มชุมนุม</a>

            <table>
                <thead>
                    <tr>
                        <th>รหัสชุมนุม</th>
                        <th>ชื่อชุมนุม</th>
                        <th>สถานที่</th>
                        <th>ตั้งค่า</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td><p>C001</p></td>
                        <td><p style="text-align:left;">ดนตรี</p></td>
                        <td><p style="text-align:left;">215</p></td>
                        <td > 
                            <a class="btn btn-edit" href="setting1-3-edit.php?update_id=">แก้ไข</a>
                            <a class="btn btn-delete" href="setting1-3.php?delete_id=">ลบ</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        
    </section>
</body>

</html>