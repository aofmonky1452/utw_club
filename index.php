<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTW club</title>

    <?php include('import.php'); ?>
    
</head>
<body>

    <div class="index">
        <div class="index-home">
            <div class="index-home-logo">
                <img src="img/utw.gif">
            </div>
            <p class="index-title-main">ระบบกิจกรรมชุมนุม</p>
            <p class="index-title-sub">โรงเรียนอุทัยวิทยาคม</p>
            <div class="index-home-btn">
                <a href="register.php" class="btn-student"><i class="fas fa-user-graduate"></i>นักเรียน</a>
                <a onclick="teacher()" class="btn-teacher"><i class="fas fa-chalkboard-teacher"></i>อาจารย์</a>
            </div>
        </div>
    </div>

    <?php include('footer.php'); ?>
    
    <script>
        function teacher() {
            Swal.fire({
                title: 'Passcode',
                icon: 'info',
                html:   '<form action="" method="post" class="teacher-login">'+
                            '<input type="password" class="passcode" placeholder="insert passcode">'+
                            '<div class="btn-control-row">'+
                                '<button class="btn btn-success">Login</button>'+
                            '</div>'+
                        '</form>',
                
                // html:
                //     'You can use <b>bold text</b>, ' +
                //     '<a href="//sweetalert2.github.io">links</a> ' +
                //     'and other HTML tags',
                showCloseButton: true,
                showCancelButton: false,
                focusConfirm: false,
                showConfirmButton: false,
                //confirmButtonText: '<button>Login</button>',
                //confirmButtonAriaLabel: 'Thumbs up, great!',
                cancelButtonText: '<butt class="fa fa-thumbs-down"></button>',
                cancelButtonAriaLabel: 'Thumbs down'
                })
        }
    </script>
</body>
</html>