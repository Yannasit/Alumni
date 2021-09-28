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
    <div class="container mt-4">
        <div class="row justify-content-md-center">
            <div class="col-md-6">
                <h1 style="text-align:center; color:aliceblue;background-color:black; margin-bottom: 0rem; font-size: 60px; ">ข้อมูลส่วนตัว</h1>
                <div class="border" style="background-color:#dee2e6;">
                    <p style="margin-left: 10px;color:black;margin-top:30px; font-size: 20px"><?php echo " ชื่อ : " . $user['Firstname'] ?></p>
                    <p style="margin-left: 10px;color:black;margin-top:30px; font-size: 20px"><?php echo " นามสกุล : " . $user['Lastname'] ?></p>
                    <p style="margin-left: 10px;color:black;margin-top:30px; font-size: 20px"><?php echo " เพศ : " . $user['Sex'] ?></p>
                    <p style="margin-left: 10px;color:black;margin-top:30px; font-size: 20px"><?php echo " จังหวัด : " . $user['Province'] ?></p>
                    <p style="margin-left: 10px;color:black;margin-top:30px; font-size: 20px"><?php echo " รหัสนักศึกษา : " . $user['StudentID'] ?></p>
                    <p style="margin-left: 10px;color:black;margin-top:30px; font-size: 20px"><?php echo " หมู่เรียน : " . $user['Section'] ?></p>
                    <p style="margin-left: 10px;color:black;margin-top:30px; font-size: 20px"><?php echo " สาขาวิชา : " . $user['Major'] ?></p>
                    <p style="margin-left: 10px;color:black;margin-top:30px; font-size: 20px"><?php echo " ปีการศึกษาแรกเข้า : " . $user['EducationYear'] ?></p>
                    <p style="margin-left: 10px;color:black;margin-top:30px; font-size: 20px"><?php echo " ที่อยู่ปัจจุบัน : " . $user['Address'] . "ตำบล " . $user['District'] . "อำเภอ " . $user['District2'] . " จังหวัด  " . $user['Province'] ?></p>
                    <p style="margin-left: 10px;color:black;margin-top:30px; font-size: 20px"><?php echo " สถานะการทำงาน : " . $user['Work'] . " สถานที่ทำงาน : " . $user['Workplace'] ?></p>
                    <p style="margin-left: 10px;color:black;margin-top:30px; font-size: 20px"><?php echo " เบอร์ที่สามารถติดต่อได้ : " . $user['Phonenumber'] ?></p>
                </div>
                <br>



                <div style="float: right;">
                    <a href="/delete" class="btn btn-primary">กลับหน้าหลัก</a>
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