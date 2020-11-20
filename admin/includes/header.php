<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8"/>
    <title>admin Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
    
    <!-- Logo -->
    <link rel="stylesheet" href="<?php echo $_DOMAIN; ?>logo/logoofme - Copy.png">
    <!-- Liên kết fonawesome -->
    <link rel="stylesheet" href="<?php echo $_DOMAIN; ?>fontawesome/css/all.css">
    <!-- Liên kết Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo $_DOMAIN; ?>bootstrap/css/bootstrap.min.css"/> 
    <!-- Liên kết css footer -->
    <link rel="stylesheet" href="<?php echo $_DOMAIN; ?>css/footer.css">
    <!-- Liên kết thư viện jQuery -->
    <script src="<?php echo $_DOMAIN; ?>js/jquery.min.js"></script>        
</head>
<body>
    <?php
    $today = date('d-m-Y || H:i:s');
    // Nếu chưa đăng nhập
    if (!$user)
    {
        echo
        '
            <div class="container">
                <div> Thời gian truy cập của bạn: &nbsp; '.$today.' </div>
                <div class="page-header">
                    <h1>ADMIN <small>Page</small></h1>
                    <h3>Đăng nhập đê</h3>
                </div><!-- div.page-header -->
            </div><!-- div.container -->
        ';
    }
    // Nếu đăng nhập thành công
    else
    {
        echo
        '
            <nav class="navbar navbar-default" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="' . $_DOMAIN . '">Admin Page</a>
                    </div><!-- div.navbar-header -->
                </div><!-- div.container-fluid -->
            </nav>
        ';
    }
 
    ?>