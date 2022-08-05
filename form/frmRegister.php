<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>badland</title>
</head>
<body>
    <?php
    include("header.php");
    ?>

<main>
    <div class="container">
    <div class="card">
  <div class="card-header">
    สมัครสมาชิก
  </div>
  <div class="card-body">
   <form name="form1" action="#" method="post">
        <div class="row">
            <div class="col-md-2"><label for="exampleFormControlInput1" class="form-label">คำนำหน้าชื่อ</label>
            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
            <option selected>เลือกนำหน้าชื่อ</option>
            <option value="นาย">นาย</option>
             <option value="นาง">นางสาว</option>
             <option value="นางสาว">นาง</option>
            </select>
        </div>
        <div class="col-md-5"><label for="exampleFormControlInput1" class="form-label">ชื่อ</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="ชื่อของคุณ">
        </div>
        <div class="col-md-5"><label for="exampleFormControlInput1" class="form-label">นามสกุล</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="นามสกุลของคุณ">
        </div>
</div>

<div class="row">
    <div class="col-md-2"><label for="exampleFormControlInput1" class="form-label">เพศ</label>
            <div class="form-check">
            <input type="radio" class="form-check-input" name="sex" id="sex">ชาย 
            </div>

            <div class="form-check">
             <input type="radio" class="form-check-input" name="sex" id="sex">หญิง
            </div>

        </div>

        <div class="col-md-3"><label for="exampleFormControlInput1" class="form-label">วันเกิด</label>
        <input type="date" class="form-control" id="txt_birthdate" name="txt_birthdate"
                                placeholder="00/00/0000" data-provide="datepicker" data-date-language="th-th">
        </div>

        <div class="col-md-7"><label for="exampleFormControlInput1" class="form-label">ที่อยู่</label>
        
        <textarea class="form-control"  name="txt_address" id="txt_address"> </textarea>

        </div>

</div>
<div class="row">

<div class="col-md-6"><label for="exampleFormControlInput1" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="กรอกอีเมล">
        </div>

<div class="col-md-6"><label for="exampleFormControlInput1" class="form-label">เบอร์โทร</label>
            <input type="input" class="form-control" id="exampleFormControlInput1" placeholder="กรอกเบอร์">
        </div>

</div>
<br>
<center>
<button type="button" class="btn btn-outline-danger"><i class="bi bi-x-circle"></i> ยกเลิก</button>
<button type="button" class="btn btn-outline-success"><i class="bi bi-arrow-90deg-right"></i>ตกลง</button>
</center>
    </form>
  </div>
</div>
    </div>

</main>

    <?php
    include("footer.php");
    ?>
</body>
</html>