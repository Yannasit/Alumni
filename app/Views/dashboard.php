<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลนักศึกษา</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">



    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

    <link rel="stylesheet" href="/viewstu.css" />
</head>

<body>
    <div class="bg-alumni"></div>
    <?php $session = session(); ?>
    <div class="container mt-4">
        <div class="row justify-content-md-center">
            <div class="col-md-6">
                <H1 class="align-center" style="text-align:center; color:aliceblue;background-color:black; margin-bottom: 0rem; font-size: 60px; "><?php echo " ยินดีต้อนรับ คุณ :" . $session->get('Firstname') ?></H1>

                
                <div class="border"  style="background-color:#dee2e6;">
                <p style="margin-left: 10px;color:black;margin-top:30px; font-size: 20px"><?php echo " ชื่อ : " . $session->get('Firstname') ?></p>
                <p style="margin-left: 10px;color:black;margin-top:30px; font-size: 20px"><?php echo " นามสกุล : " . $session->get('Lastname') ?></p>
                <p style="margin-left: 10px;color:black;margin-top:30px; font-size: 20px"><?php echo " เพศ : " . $session->get('Sex') ?></p>
                <p style="margin-left: 10px;color:black;margin-top:30px; font-size: 20px"><?php echo " จังหวัด : " . $session->get('Province') ?></p>
                <p style="margin-left: 10px;color:black;margin-top:30px; font-size: 20px"><?php echo " รหัสนักศึกษา : " . $session->get('StudentID') ?></p>
                <p style="margin-left: 10px;color:black;margin-top:30px; font-size: 20px"><?php echo " หมู่เรียน : " . $session->get('Section') ?></p>
                <p style="margin-left: 10px;color:black;margin-top:30px; font-size: 20px"><?php echo " สาขาวิชา : " . $session->get('Major') ?></p>
                <p style="margin-left: 10px;color:black;margin-top:30px; font-size: 20px"><?php echo " ปีการศึกษาแรกเข้า : " . $session->get('EducationYear') ?></p>
                <p style="margin-left: 10px;color:black;margin-top:30px; font-size: 20px"><?php echo " ที่อยู่ปัจจุบัน : " . $session->get('Address')." ตำบล ".$session->get('District')." อำเภอ ".$session->get('District2') . " จังหวัด  " . $session->get('Province') ?></p>
                <p style="margin-left: 10px;color:black;margin-top:30px; font-size: 20px"><?php echo " สถานะการทำงาน : " . $session->get('Work') . " สถานที่ทำงาน : " . $session->get('Workplace') ?></p>
                <p style="margin-left: 10px;color:black;margin-top:30px; font-size: 20px"><?php echo " เบอร์ที่สามารถติดต่อได้ : " . $session->get('Phonenumber') ?></p>
                </div>
                <br>
                <a href="/showedit" class="btn btn-primary">แก้ไขข้อมูล</a>
                
                <div style="float: right;">
                <a href="/logout" class="btn btn-danger">ออกจากระบบ</a>
            </div>
            
            
            </div>

                
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="/jquery.min.js"></script>
    <script src="/main.js"></script>
</body>

</html>