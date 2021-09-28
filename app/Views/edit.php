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


<body  >
<div class="bg-alumni"></div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12 text-center ">
          
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-6">
          <H1 style="text-align: center; color: white;">แก้ไขข้อมูล</H1>
          <hr>
          <?php $session = session(); ?>
          <form action="/edit" method="POST">
              <div class="row">
                  <input type="hidden" name="id" class="form-control" id="id" value="<?php echo $session->get('id'); ?>">
                  <div class="col-md-6">
                      <label for="inputFirstname" class="form-label">ชื่อ</label>
                      <input type="text" name="Firstname" class="form-control" id="inputFirstname" value="<?php echo $session->get('Firstname'); ?>">
                  </div>
                  <div class="col-md-6">
                      <label for="inputLastname" class="form-label">นามสกุล</label>
                      <input type="text" name="Lastname" class="form-control" id="inputLastname" value="<?php echo $session->get('Lastname'); ?>">
                  </div>
              </div>

              <div class="mb-3">
                  <label for="inputSection" class="form-label">หมู่เรียน</label>
                  <input type="text" name="Section" class="form-control" id="inputSection" value="<?php echo $session->get('Section'); ?>">
              </div>
              <div class="mb-3">
                  <label for="inputMajor" class="form-label">สาขาวิชา</label>
                  <input type="text" name="Major" class="form-control" id="inputMajor" value="<?php echo $session->get('Major'); ?>">
              </div>
              <div class="mb-3">
                  <label for="inputEducationYear" class="form-label">ปีการศึกษา</label>
                  <input type="text" name="EducationYear" class="form-control" id="inputEducationYear" value="<?php echo $session->get('EducationYear'); ?>">
              </div>


              <div class="row">
                  <div class="col-md-6">
                      <label for="inputaddress" class="form-label">ที่อยู่</label>
                      <input type="text" name="Address" class="form-control" id="inputAddress" value="<?php echo $session->get('Address'); ?>">
                  </div>
                  <div class="col-md-6">
                      <label for="inputdistrict" class="form-label">ตำบล</label>
                      <input type="text" name="District" class="form-control" id="inputDistrict" value="<?php echo $session->get('District'); ?>">
                  </div>
              </div>

              <div class="row">
                  <div class="col-md-6">
                      <label for="inputdistrict2" class="form-label">อำเภอ</label>
                      <input type="text" name="District2" class="form-control" id="inputDistrict2" value="<?php echo $session->get('District2'); ?>">
                  </div>
                  <div class="col-md-6">
                      <label for="inputProvince" class="form-label">จังหวัด</label>
                      <input type="text" name="Province" class="form-control" id="inputProvince" value="<?php echo $session->get('Province'); ?>">
                  </div>
              </div>



              <div class="row">
                  <div class="col-md-6">
                      <label for="inputWork" class="form-label">สถานภาพการทำงาน</label>
                      <br>
                      <input type="radio" id="ทำงานแล้ว" name="Work" value="ทำงานแล้ว" <?php if ($session->get('Work') === "ทำงานแล้ว") {
                                                                                              echo " checked";
                                                                                          } ?>> <label for="ทำงานแล้ว">ทำงานแล้ว</label>
                      <input type="radio" id="ว่างงาน" name="Work" value="ว่างงาน" <?php if ($session->get('Work') === "ว่างงาน") {
                                                                                          echo " checked";
                                                                                      } ?>> <label for="ว่างงาน">ว่างงาน</label>
                  </div>
                  <div class="col-md-6">
                      <label for="inputWorkplace" class="form-label">ที่ทำงาน</label>
                      <input type="text" name="Workplace" class="form-control" id="inputWorkplace" value="<?php echo $session->get('Workplace'); ?>">
                  </div>
              </div>
              <div class="mb-3">
                  <label for="inputPhonenumber" class="form-label">เบอร์โทรที่สามารถติดต่อได้</label>
                  <input type="text" name="Phonenumber" class="form-control" id="inputPhonenumber" value="<?php echo $session->get('Phonenumber'); ?>">
              </div>
              <div align="center">
              <button class="btn btn-primary" onclick="edit()">บันทึก</button>
              <a href="/dashboard" class="btn btn-primary">ยกเลิก</a>
              </div>
          </form>
          <hr>


      </div>
      </div>
    </div>
  
  <script>
    function register() {
      alert("ลงทะเบียนสำเร็จ");
    }
  </script>
  <script src="jquery.min.js"></script>
  <script src="main.js"></script>
</body>

</html>