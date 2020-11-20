<!-- Liên kết thư viện hàm xử lý form -->
<script src="<?php echo $_DOMAIN; ?>js/form.js"></script>


	<!-- Liên kết thư viện CKEditor -->
	<script src="<?php echo $_DOMAIN; ?>ckeditor/ckeditor.js"></script>


<!-- Liên kết thư viện jQuery Form -->
<script src="<?php echo $_DOMAIN; ?>js/jquery.form.min.js"></script>  

<?php
 
// Active sidebar
// Lấy tham số tab
if (isset($_GET['tab']))
{
    $tab = trim(addslashes(htmlspecialchars($_GET['tab'])));
}
else
{
    $tab = '';
}
 
// Nếu có tham số tab
if ($tab != '')
{
    // Tháo active của Bảng điều khiển
    echo '<script>$(".sidebar ul a:eq(1)").removeClass("active");</script>';
    // Active theo giá trị của tham số tab
    if ($tab == 'profile')
    {
        echo '<script>$(".sidebar ul a:eq(2)").addClass("active");</script>';
    }
    else if ($tab == 'posts')
    {
        echo '<script>$(".sidebar ul a:eq(3)").addClass("active");</script>';
        if ($ac == 'edit') {
          if ($id) {
              $sql_check_id_post_exist = "SELECT id_post FROM posts WHERE id_post = '$id'";
              if ($db->num_rows($sql_check_id_post_exist)) {
                  echo
                  '
                  <script>
                  config = {};
                  config.entities_latin = false;
                  config.language = "vi";
                  CKEDITOR.replace("body_edit_post", config);
                </script>
              
               
                  ';
              }
          }
      }
    }
    else if ($tab == 'photos')
    {
        echo '<script>$(".sidebar ul a:eq(4)").addClass("active");</script>';
    } 
    else if ($tab == 'categories')
    {
        echo '<script>$(".sidebar ul a:eq(5)").addClass("active");</script>';
    }
    else if ($tab == 'accounts')
    {
        echo '<script>$(".sidebar ul a:eq(6)").addClass("active");</script>';
    }
    else if ($tab == 'setting')
    {
        echo '<script>$(".sidebar ul a:eq(7)").addClass("active");</script>';
    }

}
 
?> 
<footer class="site-footer">
    <div class="container">
      <div class="row f-logo">
      <div class="col-lg-4"></div>

      <img src="<?php echo $_DOMAIN; ?>logo/logoofme - Copy.png" alt="">
      
      </div>
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <h6>About</h6>
          <p class="text-justify">Page này làm với php thuần.</p>
          <p>Được thiết  kế bởi <b>Hoàng Nam</b> dành cho <b>ai cũng được</b></p>
        </div>
      </div>
      <hr>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-6 col-xs-12">
          <?php
              date_default_timezone_set('Asia/Ho_Chi_Minh');

          ?>
          <p class="copyright-text">&copy; <?php echo date('Y'); ?> Bản quyền thuộc sở hữu trí tuệ của <b>Hoàng Nam</b> | Thiết két bởi <b>Hoàng Nam</b>.
          </p>
        </div>

        <div class="col-md-4 col-sm-6 col-xs-12">
          <ul class="social-icons">
            <li><a class="facebook" href="https://www.facebook.com/nam1822001/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
            <li><a class="twitter"  href="https://www.facebook.com/messages/t/nam1822001"  target="_blank"><i class="fab fa-facebook-messenger"></i></a></li>
            <li><a class="dribbble" href="https://www.instagram.com/justbenam/?hl=vi" target="_blank"><i class="fab fa-instagram"></i></a></li>
            <li><a class="linkedin" href="mailto:namkenly2001@gmail.com"  target="_blank"><i class="far fa-envelope"></i></a></li>   
          </ul>
        </div>
      </div>
    </div>
  </footer>
  

</body>
</html>