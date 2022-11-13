<?php include_once('includes/header.php'); ?>
<?php include_once('includes/navbar.php'); ?>

<?php
    include_once('classes/Register.php');
    $res = new Register();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $register = $res->addRegister($_POST,$_FILES);
    }
?>

<div class="container my-3">
    <div class="row d-flex justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">
                    <h2>ลงทะเบียน ระบบสั่งจองอาหารออนไลน์</h2>
                </div>
                <div class="card-body">
                <form method="post" enctype="multipart/form-data">

                        <div class="mb-3">
                            <label class="fs-5">ลงทะเบียนหน้าที่ ระบบสั่งจองอาหารออนไลน์</label>
                            <select class="form-control fs-6" name="role_as" required>
                                <option value="">==กรุณาเลือกหน้าที่==</option>
                                <option value="1">1.ผู้ดูแลร้านอาหาร</option>
                                <!--manager-->
                                <option value="2">2.ผู้ส่งอาหาร</option>
                                <!--rider-->
                                <option value="3">3.สมาชิกหรือลูกค้า</option>
                                <!--customer-->
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="fs-5">ชื่อ-สกุล</label>
                            <input class="form-control fs-5" type="text" name="name" required placeholder="กรุณาป้อน ชื่อของคุณ">
                        </div>

                        <div class="mb-3">
                            <label class="fs-5">อีเมลล์</label>
                            <input class="form-control fs-5" type="email" name="email" required placeholder="กรุณาป้อน อีเมลล์ของคุณ">
                        </div>

                        <div class="mb-3">
                            <label class="fs-5">รหัสผ่าน</label>
                            <input class="form-control fs-5" type="password" name="password" required placeholder="กรุณาป้อน รหัสผ่านของคุณ">
                        </div>

                        <div class="mb-3">
                            <label class="fs-5">ยืนยันรหัสผ่าน</label>
                            <input class="form-control fs-5" type="password" name="confirm_password" required placeholder="กรุณาป้อน ยืนยันรหัสผ่านของคุณ">
                        </div>

                        <div class="mb-3">
                            <label class="fs-5">หมายเลขโทรศัพท์</label>
                            <input class="form-control fs-5" type="text" name="phone" required placeholder="กรุณาป้อน หมายเลขโทรศัพท์ของคุณ" />
                        </div>
                        


                        <div class="mb-3">
                            <label class="fs-5">รูปภาพ:ภาพที่มีนามสกุล เช่น <span class="text-danger">.jpg/jpeg/png/gif</span></label>
                            <input class="form-control fs-5" type="file" name="photo" required placeholder="กรุณาอัพโหลด รูปภาพของคุณ" />
                        </div>

                        <div class="mb-3">
                            <label class="fs-5">กรุณาป้อนข้อมูล ที่อยู่:</label>
                            <textarea class="form-control fs-5" name="address" rows="3" required></textarea>
                        </div>

                        <div class="mb-3">
                            <input class="btn btn-success form-control fs-4" type="submit" value="ลงทะเบียน">
                        </div>

                    </form>
                </div>

            </div>
        </div>

    </div>
</div>
<?php include_once('includes/footer.php'); ?>