<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <!-- การลิ้ง css bootstrap เเบบ cdn -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- การลิ้ง javascript ของ bootstrap เเบบ cdn -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- การลิ้ง icon เพื่อใช้งาน icon -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <link rel="preconnect" href="/https://fonts.googleapis.com">
    <link rel="preconnect" href="/https://fonts.gstatic.com" crossorigin>
    <link href="/https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">
    <link href="/https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="/https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

    <link rel="stylesheet" href="/viewstu.css" />
</head>

<body>
<div class="bg-alumni"></div>

    <H1 style="text-align: center; color : #fff">ค้นหาข้อมูลนักศึกษาโดยใช้ หมู่เรียน</H1>
    <hr>
    <div class="row justify-content-md-center">
        <!-- data table ใช้เเสดงข้อมูลเเละเเบ่งหน้าให้อัตโนมัติ -->
        <div class="col-sm-8">
            <table class="table table-striped table-bordered table-hover table-responsive-sm" id="student-list">
                <thead class="thead-dark">
                    <tr style="text-align: center;">
                        <th>ชื่อ</th>
                        <th>นามสกุล</th>
                        <th>เพศ</th>
                        <th>จังหวัด</th>
                        <th>รหัสนักศึกษา</th>
                        <th>หมู่เรียน</th>
                        <th>สาขาวิชา</th>
                        <th>ปีการศึกษาแรกเข้า</th>
                        <th>ดูข้อมูล</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($student) : ?>
                        <?php foreach ($student as $user) : ?>
                            <tr style="text-align: center;">
                
                                <td style="background-color:white;color : black"><?php echo $user['Firstname']; ?></td>
                                <td style="background-color:white;color : black"><?php echo $user['Lastname']; ?></td>
                                <td style="background-color:white;color : black"><?php echo $user['Sex']; ?></td>
                                <td style="background-color:white;color : black"><?php echo $user['Province']; ?></td>
                                <td style="background-color:white;color : black"><?php echo $user['StudentID']; ?></td>
                                <td style="background-color:white;color : black"><?php echo $user['Section']; ?></td>
                                <td style="background-color:white;color : black"><?php echo $user['Major']; ?></td>
                                <td style="background-color:white;color : black"><?php echo $user['EducationYear']; ?></td>
                            


                                <td style="background-color:white;">
                                    <div class="btn-group btn-group-sm">
                                        <a class="btn btn-info" href="/view_student/<?php echo $user['UserID'] ?>" data-bs-toggle="modal" data-bs-target="#studentid">
                                            <i class="fa fa-eye"></i>
                                        </a>

                                    </div>
                                </td>

                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table><br>
            <div class="container">

                <div style="float: right;">
                    <a href="/delete" class="btn btn-primary">กลับหน้าหลัก</a>
                </div>


            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#student-list').DataTable();
            });
        </script>
        <script src="/main.js"></script>
</body>

</html>