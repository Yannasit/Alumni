<!DOCTYPE html>
<html lang="en">

<head>
  <title>ระบบค้นหาข้อมูลศิษย์เก่า</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="preconnect" href="/https://fonts.googleapis.com">
  <link rel="preconnect" href="/https://fonts.gstatic.com" crossorigin>
  <link href="/https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">
  <link href="/https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="/https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

  <link rel="stylesheet" href="/styleLogin.css" />
</head>

<body class="img js-fullheight" style="
      background-image: url(https://i.pinimg.com/originals/80/0e/d4/800ed46000029ab99c5a3554ff5da86b.jpg);
    ">
  <section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 text-center mb-5">
          <h1 class="heading-section">ระบบค้นหาข้อมูลศิษย์เก่า</h1>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4">
          <div class="login-wrap p-0">
            <?php if (session()->getFlashdata('msg')) : ?>
              <div class="alert alert-danger"><?= session()->getFlashdata('msg'); ?></div>
            <?php endif; ?>
            <form action="/login/auth" metod="post" class="signin-form">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="รหัสนักศึกษา" name="StudentID" required  value="<?= set_value('StudentID');?>"/>
              </div>
              <div class="form-group">
                <input id="password-field" type="password" class="form-control" placeholder="รหัสผ่าน" name="Password" required  value="<?= set_value('Password');?>"/>
                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
              </div>
              <br>
              <div class="form-group">
                <button type="submit" class="form-control btn btn-primary submit px-3" onclick="login()">
                  เข้าสู่ระบบ
                </button>
              </div>
            </form>
            <div class="form-group d-md-flex">
              <div class="w-50"></div>
            </div>
            </form>

            <div class="social d-flex text-center">
              <a href="/register" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> สมัครสมาชิก</a>
              <a href="/" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span>
                กลับสู่หน้าหลัก</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script>
    function login() {
      alert("เข้าสู่ระบบสำเร็จ");
    }
  </script>
  <script src="/jquery.min.js"></script>
  <script src="/main.js"></script>
</body>

</html>