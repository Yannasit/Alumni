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
          <h1 class="heading-section">ลงทะเบียนศิษย์เก่า</h1>
        </div>
        <?php if (isset($validation)) : ?>
              <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
            <?php endif; ?>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-6 col-lg-6">
          <div class="login-wrap p-0">
  
            <form action="/register/save" method="POST" class="signin-form">
             
              <div class="row">
                <div class="col-md-6">
                    <label for="inputFirstname" class="form-label">ชื่อ</label>
                    <input type="text" name="Firstname" class="form-control" id="inputFirstname" value="<?= set_value('Firstname'); ?>">
                </div>
                <div class="col-md-6">
                    <label for="inputLastname" class="form-label">นามสกุล</label>
                    <input type="text" name="Lastname" class="form-control" id="inputLastname" value="<?= set_value('Lastname'); ?>">
                </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                  <label for="inputSex" class="form-label">เพศ</label>
                  <br>
                  <input type="radio" id="ชาย" name="Sex" value="ชาย"> <label for="ชาย">ชาย</label>
                  <input type="radio" id="หญิง" name="Sex" value="หญิง"> <label for="หญิง">หญิง</label>
              </div>
              <div class="col-md-6">
              <label for="inputStudentID" class="form-label">รหัสนักศึกษา</label>
              <input type="text" name="StudentID" class="form-control" id="inputStudentID" value="<?= set_value('StudentID'); ?>">
              </div>
          </div>

          <div class="mb-3">
              <label for="inputPassword" class="form-label">รหัสผ่าน</label>
              <input type="password" name="Password" class="form-control" id="inputPassword" value="<?= set_value('Password'); ?>">
          </div>
          <div class="mb-3">
              <label for="inputSection" class="form-label">หมู่เรียน</label>
              <input type="text" name="Section" class="form-control" id="inputSection" value="<?= set_value('Section'); ?>">
          </div>
          <div class="mb-3">
              <label for="inputMajor" class="form-label">สาขาวิชา</label>
              <input type="text" name="Major" class="form-control" id="inputMajor" value="<?= set_value('Major'); ?>">
          </div>
          <div class="mb-3">
              <label for="inputEducationYear" class="form-label">ปีการศึกษา</label>
              <input type="text" name="EducationYear" class="form-control" id="inputEducationYear" value="<?= set_value('EducationYear'); ?>">
          </div>

          <div class="row">
              <div class="col-md-6">
              <label for="inputaddress" class="form-label">ที่อยู่</label>
              <input type="text" name="Address" class="form-control" id="inputAddress" value="<?= set_value('Address'); ?>">
              </div>
              <div class="col-md-6">
              <label for="inputdistrict" class="form-label">ตำบล</label>
              <input type="text" name="District" class="form-control" id="inputDistrict" value="<?= set_value('District'); ?>">
              </div>
          </div>

          <div class="row">
              <div class="col-md-6">
              <label for="inputdistrict2" class="form-label">อำเภอ</label>
              <input type="text" name="District2" class="form-control" id="inputDistrict2" value="<?= set_value('District2'); ?>">
              </div>
              <div class="col-md-6">
              <label for="inputProvince" class="form-label">จังหวัด</label>
                  <select  class="form-control select" name="Province">
                      <option selected>เลือกจังหวัด...</option>


                      <option> กรุงเทพมหานคร </option>
                      <option> กระบี่ </option>
                      <option> กาญจนบุรี </option>
                      <option> กาฬสินธุ์ </option>
                      <option> กำแพงเพชร </option>
                      <option> ขอนแก่น </option>
                      <option> จันทบุรี </option>
                      <option> ฉะเชิงเทรา </option>
                      <option> ชลบุรี </option>
                      <option> ชัยนาท </option>
                      <option> ชัยภูมิ </option>
                      <option> ชุมพร </option>
                      <option> เชียงราย </option>
                      <option> เชียงใหม่ </option>
                      <option> ตรัง </option>
                      <option> ตราด </option>
                      <option> ตาก </option>
                      <option> นครนายก </option>
                      <option> นครปฐม </option>
                      <option> นครพนม </option>
                      <option> นครราชสีมา </option>
                      <option> นครศรีธรรมราช </option>
                      <option> นครสวรรค์ </option>
                      <option> นนทบุรี </option>
                      <option> นราธิวาส </option>
                      <option> น่าน </option>
                      <option> บึงกาฬ </option>
                      <option> บุรีรัมย์ </option>
                      <option> ปทุมธานี </option>
                      <option> ประจวบคีรีขันธ์ </option>
                      <option> ปราจีนบุรี </option>
                      <option> ปัตตานี </option>
                      <option> พระนครศรีอยุธยา </option>
                      <option> พังงา </option>
                      <option> พัทลุง </option>
                      <option> พิจิตร </option>
                      <option> พิษณุโลก </option>
                      <option> เพชรบุรี </option>
                      <option> เพชรบูรณ์ </option>
                      <option> แพร่ </option>
                      <option> พะเยา </option>
                      <option> ภูเก็ต </option>
                      <option> มหาสารคาม </option>
                      <option> มุกดาหาร </option>
                      <option> แม่ฮ่องสอน </option>
                      <option> ยะลา </option>
                      <option> ยโสธร </option>
                      <option> ร้อยเอ็ด </option>
                      <option> ระนอง </option>
                      <option> ระยอง </option>
                      <option> ราชบุรี </option>
                      <option> ลพบุรี </option>
                      <option> ลำปาง </option>
                      <option> ลำพูน </option>
                      <option> เลย </option>
                      <option> ศรีสะเกษ </option>
                      <option> สกลนคร </option>
                      <option> สงขลา </option>
                      <option> สตูล </option>
                      <option> สมุทรปราการ </option>
                      <option> สมุทรสงคราม </option>
                      <option> สมุทรสาคร </option>
                      <option> สระแก้ว </option>
                      <option> สระบุรี </option>
                      <option> สิงห์บุรี </option>
                      <option> สุโขทัย </option>
                      <option> สุพรรณบุรี </option>
                      <option> สุราษฎร์ธานี </option>
                      <option> สุรินทร์ </option>
                      <option> หนองคาย </option>
                      <option> หนองบัวลำภู </option>
                      <option> อ่างทอง </option>
                      <option> อุดรธานี </option>
                      <option> อุทัยธานี </option>
                      <option> อุตรดิตถ์ </option>
                      <option> อุบลราชธานี </option>
                      <option> อำนาจเจริญ </option>
                  </select>
              </div>
          </div>
          
          
          <div class="row">
              <div class="col-md-6">
                  <label for="inputWork" class="form-label">สถานภาพการทำงาน</label>
                  <br>
                  <input type="radio" id="ทำงานแล้ว" name="Work" value="ทำงานแล้ว"> <label for="ทำงานแล้ว">ทำงานแล้ว</label>
                  <input type="radio" id="ว่างงาน" name="Work" value="ว่างงาน"> <label for="ว่างงาน">ว่างงาน</label>
              </div>
              <div class="col-md-6">
                  <label for="inputWorkplace" class="form-label">ที่ทำงาน</label>
                  <input type="text" name="Workplace" class="form-control" id="inputWorkplace" value="<?= set_value('Workplace'); ?>">
              </div>
          </div>
          <div class="mb-3">
              <label for="inputPhonenumber" class="form-label">เบอร์โทรที่สามารถติดต่อได้</label>
              <input type="text" name="Phonenumber" class="form-control" id="inputPhonenumber" value="<?= set_value('Phonenumber'); ?>">
          </div>
          <div class="form-group">
            <button type="submit" class="form-control btn btn-primary submit px-3" onclick="register()">
              บันทึกข้อมูล
            </button>
          </div>
      </form>



              <!-- <div class="form-group">
                <input id="password-field" type="password" class="form-control" placeholder="รหัสผ่าน" name="Password" required  value="<?= set_value('Password');?>"/>
                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
              </div>
              <br>
              <div class="form-group">
                <button type="submit" class="form-control btn btn-primary submit px-3" onclick="login()">
                  เข้าสู่ระบบ
                </button>
              </div>
            </form> -->

            <div class="social d-flex text-center">
              
              <a href="/" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span>
                ยกเลิก</a>
            </div>
            <div class="form-group d-md-flex">
              <div class="w-50"></div>
            </div>
            </form>

           
          </div>
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