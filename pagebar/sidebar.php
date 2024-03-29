<div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3 class="text-center">Bootstrap Sidebar</h3>
        </div>

        <ul class="list-unstyled components">
            <p>Dummy Heading</p>
            <li class="active">
                <a href="#homeSubmenu" data-bs-toggle="collapse" aria-expanded="false">Home</a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="#">Home 1</a>
                    </li>
                    <li>
                        <a href="#">Home 2</a>
                    </li>
                    <li>
                        <a href="#">Home 3</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">About</a>
            </li>
            <li class="active">
                <a href="#pageSubmenu" data-bs-toggle="collapse" aria-expanded="false">Pages</a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                        <a href="#">Page 1</a>
                    </li>
                    <li>
                        <a href="#">Page 2</a>
                    </li>
                    <li>
                        <a href="#">Page 3</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">Portfolio</a>
            </li>
            <li>
                <a href="#">Contact</a>
            </li>
        </ul>
        <ul class="list-unstyled CTAs">
            <li>
                <button type="button" class="btn btn-info full-range distance-1" data-bs-toggle="modal" data-bs-target="#login">Login</a>
            </li>
        </ul>
    </nav>





    <!-- Modal login-->
    <div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login เข้าสู่ระบบ</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <form method="post" action="process/check-login.php">
                            <div id="login-row" class="row justify-content-center align-items-center">
                                <div id="login-column" class="col-md-6">
                                    <div id="login-box" class="col-md-12">

                                        <label>ชื่อผู้ใช้งาน</label>
                                        <input type="text" class="form-control mb-2" name="username" id="username">
                                        <label>รหัสผ่าน</label>
                                        <input type="password" class="form-control mb-2" name="password" id="password">
                                        <input type="checkBox" onclick="showpass();"> แสดงรหัสผ่าน
                                        <br>
                                        <u class="ml-auto"> <a href="#" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#register">ลงทะเบียนเพิ่มผู้ใช้</a></u>

                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fas fa-ban"></i> ยกเลิก</button>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i> ตกลง</button>
                </div>
            </div>
            </form>
        </div>
    </div>