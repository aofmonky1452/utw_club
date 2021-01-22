<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลนักเรียน</title>

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
            <h1>ข้อมูลนักเรียน</h1>
            <a href="setting1-4-add.php" class="btn btn-upload">เพิ่มนักเรียน</a>

            <table>
                <thead>
                    <tr>
                        <th>รหัสนักเรียน</th>
                        <th>ชื่อ-สกุล</th>
                        <th>ระดับชั้น</th>
                        <th>ตั้งค่า</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td><p>5902041620091</p></td>
                        <td><p style="text-align:left;">พนา ชัยชนะ</p></td>
                        <td><p style="text-align:left;">ม.2/1</p></td>
                        <td > 
                            <a class="btn btn-edit" href="setting1-4-edit.php?update_id=">แก้ไข</a>
                            <a class="btn btn-delete" href="setting1-4.php?delete_id=">ลบ</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        
    </section>
</body>

</html>