<?php include('comtop.php'); ?>
<!-- Include file css and properties -->
<?php include('header.php'); ?>
<!-- Menu and Logo -->

<!-- แถบค้นหา -->
<div class="container-fluid cont-bg px-0 shadow">

    <div class=" mar-spacehead bg-tabhead shadow-sm">
        
            <form id="contact-form" action="#" method="post" role="form">
                <div class="row  w-100 d-flex justify-content-center">
                    <img src="images/2car.png" class="img rounded icon-tabhead" alt="BG-BookingCar"><span>
                        <h1 class="col-12 txt-gradient-purple font-h-search  pt-4 pb-4 ">
                            จองยานพาหนะ
                        </h1>
                    </span>
                </div>
            </form>
        
    </div>

    <div class="container ">
        <h5 class="h2-color mt-4 "><a href="index.php">หน้าแรก > </a> <span>จองยานพาหนะ</span></h5>
        <hr class="hr_news mt-0">
        <div class="row mb-3 mt-5">

            <div class="col-lg-4 col-md-6 col-sm-12 col-12 mb-2  ">
                <div class=" Datepick-start-stop ">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6 ">
                            <h5 class="ml-2 mb-0"><i class="fa-regular fa-calendar-days "></i> วันเริ่มต้น</h5>
                            <input class="mt-0 ml-2 pb-1 border-0" type="date" id="start" name="trip-start" value="dd/mm/yyy" min="2022-01-01" max="2030-12-31">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6 ">
                            <h5 class="ml-2 mb-0"><i class="fa-regular fa-calendar-days"></i> วันที่สิ้นสุด</h5>
                            <input class="mt-0 ml-2 pb-1 border-0" type="date" id="end" name="trip-end" value="dd/mm/yyy" min="2022-01-01" max="2030-12-31">
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-6 ">
                <div class="dropdown show">
                    <a class="btn drop-function-search shadow-sm btn-lg dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        แสดงระบบทั้งหมด
                    </a>

                    <div class="dropdown-menu " aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-6 ">
                <div class="dropdown show">
                    <a class="btn drop-function-search shadow-sm btn-lg dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        แสดงสถานะทั้งหมด
                    </a>

                    <div class="dropdown-menu " aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12 col-12 ">
                <button type="button" class="btn-search btn Gradient-Color shadow-sm btn-sm mt-2"><i class="fa-solid fa-magnifying-glass"></i> ค้นหาประวัติ</button>
            </div>
        </div>
        <div class="d-flex justify-content-center  mb-4">
            <a href="#" class="btn txt-purple bg-white btn-sm active px-4 py-2 mt-3" role="button" aria-pressed="true">ปฏิทินจองยานพาหนะ</a>
        </div>
    </div>
</div>
<div class="container mt-4">
    <div>
        <h2 class="h2-color text-center">เลือกดูยานพาหนะ</h2>
        <h3 class="h2-color mt-3 mb-2">ยานพาหนะที่ว่างวันนี้</h3>
        <hr class="hr_news mt-0">
    </div>
    <div class="row">
        <!-- ช่องของ รถแต่ละคัน -->
        <div class="col-lg-4 col-md-6 col-sm-12 col-12 my-3">
            <!-- กล่องยานพาหนะ -->
            <div class="latest-post shadow-lg min-height-news ">
                <div class="latest-post-media ">
                    <a href="courseview.php" class="latest-post-img">
                        <img loading="lazy" class="bor-ra-t15px img-fluid  max-height-news w-100" src="images/car1.jpg" alt="img">
                    </a>
                </div>
                <div class="post-body p-3 bg-color-purple bor-ra-b15px">
                    <h4 class="post-title text-white">
                        <a href="info_bookingCar.php" class="d-inline-block text-white mr-4"> รถตู้ toyota commuter </a> <span><i class="fa-solid fa-user"></i> 12</span>
                    </h4>
                    <div class="latest-post-meta text-white">
                        <div class="post-item-date color-datetime">
                            ทะเบียน : ขอ-4442
                        </div>
                        <div class="post-item-date line-height-20px">
                            ระยะไมค์ : 60,500 กิโลเมตร
                        </div>
                        <div class="post-item-date line-height-20px">
                            ผู้ดูแล : ธาณี อยู่พุ่ม
                        </div>
                    </div>
                    <div class="general-btn text-right mt-1 ">
                        <a class="btn txt-purple  bg-white border-ra-10px pad-more-btn px-3" href="registercourse.php"> ลงทะเบียน </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 col-12 my-3">
            <!-- กล่องยานพาหนะ -->
            <div class="latest-post shadow-lg min-height-news ">
                <div class="latest-post-media ">
                    <a href="courseview.php" class="latest-post-img">
                        <img loading="lazy" class="bor-ra-t15px img-fluid  max-height-news w-100" src="images/car7.jpg" alt="img">
                    </a>
                </div>
                <div class="post-body p-3 bg-color-purple bor-ra-b15px">
                    <h4 class="post-title text-white">
                        <a href="#" class="d-inline-block text-white mr-4"> รถตู้ toyota commuter </a> <span><i class="fa-solid fa-user"></i> 12</span>
                    </h4>
                    <div class="latest-post-meta text-white">
                        <div class="post-item-date color-datetime">
                            ทะเบียน : ขอ-4442
                        </div>
                        <div class="post-item-date line-height-20px">
                            ระยะไมค์ : 60,500 กิโลเมตร
                        </div>
                        <div class="post-item-date line-height-20px">
                            ผู้ดูแล : ธาณี อยู่พุ่ม
                        </div>
                    </div>
                    <div class="general-btn text-right mt-1 ">
                        <a class="btn txt-purple  bg-white border-ra-10px pad-more-btn px-3" href="registercourse.php"> ลงทะเบียน </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 col-12 my-3">
            <!-- กล่องยานพาหนะ -->
            <div class="latest-post shadow-lg min-height-news ">
                <div class="latest-post-media ">
                    <a href="courseview.php" class="latest-post-img">
                        <img loading="lazy" class="bor-ra-t15px img-fluid  max-height-news w-100" src="images/car5.jpg" alt="img">
                    </a>
                </div>
                <div class="post-body p-3 bg-color-purple bor-ra-b15px">
                    <h4 class="post-title text-white">
                        <a href="#" class="d-inline-block text-white mr-4"> รถตู้ toyota commuter </a> <span><i class="fa-solid fa-user"></i> 12</span>
                    </h4>
                    <div class="latest-post-meta text-white">
                        <div class="post-item-date color-datetime">
                            ทะเบียน : ขอ-4442
                        </div>
                        <div class="post-item-date line-height-20px">
                            ระยะไมค์ : 60,500 กิโลเมตร
                        </div>
                        <div class="post-item-date line-height-20px">
                            ผู้ดูแล : ธาณี อยู่พุ่ม
                        </div>
                    </div>
                    <div class="general-btn text-right mt-1 ">
                        <a class="btn txt-purple  bg-white border-ra-10px pad-more-btn px-3" href="registercourse.php"> ลงทะเบียน </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 col-12 my-3">
            <!-- กล่องยานพาหนะ -->
            <div class="latest-post shadow-lg min-height-news ">
                <div class="latest-post-media ">
                    <a href="courseview.php" class="latest-post-img">
                        <img loading="lazy" class="bor-ra-t15px img-fluid  max-height-news w-100" src="images/car4.jpg" alt="img">
                    </a>
                </div>
                <div class="post-body p-3 bg-color-purple bor-ra-b15px">
                    <h4 class="post-title text-white">
                        <a href="#" class="d-inline-block text-white mr-4"> รถตู้ toyota commuter </a> <span><i class="fa-solid fa-user"></i> 12</span>
                    </h4>
                    <div class="latest-post-meta text-white">
                        <div class="post-item-date color-datetime">
                            ทะเบียน : ขอ-4442
                        </div>
                        <div class="post-item-date line-height-20px">
                            ระยะไมค์ : 60,500 กิโลเมตร
                        </div>
                        <div class="post-item-date line-height-20px">
                            ผู้ดูแล : ธาณี อยู่พุ่ม
                        </div>
                    </div>
                    <div class="general-btn text-right mt-1 ">
                        <a class="btn txt-purple  bg-white border-ra-10px pad-more-btn px-3" href="registercourse.php"> ลงทะเบียน </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 col-12 my-3">
            <!-- กล่องยานพาหนะ -->
            <div class="latest-post shadow-lg min-height-news ">
                <div class="latest-post-media ">
                    <a href="courseview.php" class="latest-post-img">
                        <img loading="lazy" class="bor-ra-t15px img-fluid  max-height-news w-100" src="images/car5.jpg" alt="img">
                    </a>
                </div>
                <div class="post-body p-3 bg-color-purple bor-ra-b15px">
                    <h4 class="post-title text-white">
                        <a href="#" class="d-inline-block text-white mr-4"> รถตู้ toyota commuter </a> <span><i class="fa-solid fa-user"></i> 12</span>
                    </h4>
                    <div class="latest-post-meta text-white">
                        <div class="post-item-date color-datetime">
                            ทะเบียน : ขอ-4442
                        </div>
                        <div class="post-item-date line-height-20px">
                            ระยะไมค์ : 60,500 กิโลเมตร
                        </div>
                        <div class="post-item-date line-height-20px">
                            ผู้ดูแล : ธาณี อยู่พุ่ม
                        </div>
                    </div>
                    <div class="general-btn text-right mt-1 ">
                        <a class="btn txt-purple  bg-white border-ra-10px pad-more-btn px-3" href="registercourse.php"> ลงทะเบียน </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 col-12 my-3">
            <!-- กล่องยานพาหนะ -->
            <div class="latest-post shadow-lg min-height-news ">
                <div class="latest-post-media ">
                    <a href="courseview.php" class="latest-post-img">
                        <img loading="lazy" class="bor-ra-t15px img-fluid  max-height-news w-100" src="images/car2.jpg" alt="img">
                    </a>
                </div>
                <div class="post-body p-3 bg-color-purple bor-ra-b15px">
                    <h4 class="post-title text-white">
                        <a href="#" class="d-inline-block text-white mr-4"> รถตู้ toyota commuter </a> <span><i class="fa-solid fa-user"></i> 12</span>
                    </h4>
                    <div class="latest-post-meta text-white">
                        <div class="post-item-date color-datetime">
                            ทะเบียน : ขอ-4442
                        </div>
                        <div class="post-item-date line-height-20px">
                            ระยะไมค์ : 60,500 กิโลเมตร
                        </div>
                        <div class="post-item-date line-height-20px">
                            ผู้ดูแล : ธาณี อยู่พุ่ม
                        </div>
                    </div>
                    <div class="general-btn text-right mt-1 ">
                        <a class="btn txt-purple  bg-white border-ra-10px pad-more-btn px-3" href="registercourse.php"> ลงทะเบียน </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mb-4">
        <nav aria-label="Page navigation example ">
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>

</div>





<!-- ข้อมูลวันเวลาจำนวน -->







<?php include('footer.php'); ?>
<!-- Footer Website -->
<?php include('combottom.php'); ?>



<!-- Include file js and properties -->