<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เอกสารจากครู</title>

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
            <h4>เอกสาร</h4>
            <h1>เอกสารจากครู</h1>

            <form action="" method="post" enctype="multipart/form-data">
                
                <div class="form-control">
                    <label for="name">*เลือกชุมนุม</label>
                    <select class="sel-content" name="sel_position" >
                        <option value="">--- select ---</option>
                        <option value="Frontend developer">Frontend developer</option>
                        <option value="Backend developer">Backend developer</option>
                        <option value="Tester">Tester</option>
                        <option value="Fullstack">Fullstack</option>
                        <option value="Supporter">Supporter</option>
                        <option value="Designer">Designer</option>
                    </select>
                </div>

                <div class="form-control">
                    <div class="form-control-col">
                        <div class="form-control-row">
                            <p>เอกสารหมายเลข 1 : </p>
                            <div class="btn btn-warning">PDF</div>
                        </div>
                    </div>
                </div>

            </form>
        </div>

        
    </section>
</body>

</html>