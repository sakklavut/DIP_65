<?php include('comtop.php'); ?>
<!-- Include file css and properties -->
<?php include('header.php'); ?>
<!-- Menu and Logo -->
<div class="container mar-spacehead mb-5">


    <!-- ส่วนของข้อมูลผู้ใช้ -->
    <h2 class="h2-color pt-4">
    <i class="fa-solid fa-magnifying-glass"></i></i> ค้นหา
    </h2>
    <div class="row">
        <div class="col-lg-6 col-md-4 col-sm-12 col-12">
            <h5 class="h2-color mt-2"><a href="#">หน้าแรก > </a> <span>ค้นหาบทความ</span></h5>
        </div>
    </div>
    <hr class="hr_news mt-0">

    <div class="row mb-3">

        <div class="col-lg-4 col-md-6 col-sm-12 col-12 mb-2 ">
            <div class=" Datepick-start-stop shadow-sm ">
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
                    หมวดหมู่ทั้งหมด
                </a>

                <div class="dropdown-menu " aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">ประชาสัมพันธ์</a>
                    <a class="dropdown-item" href="#">กิจกรรม</a>
                    <a class="dropdown-item" href="#">องค์ความรู้</a>
                </div>
            </div>


        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-6 search-box shadow-sm">
            <div class="form-group  ">
                <div>
                    <input type="input" class="mt-2  border-0 form-control drop-function-search" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="กรอกคำค้นหา">
                </div>


            </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-12 col-12   ">
            <button type="button" class="btn-search btn Gradient-Color shadow-sm btn-sm mt-2"><i class="fa-solid fa-magnifying-glass"></i> ค้นหา</button>
        </div>
    </div>

    <h3 class="h2-color">
        ผลการค้นหา
    </h3>
    <div class="row ">
        <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-4">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-3 col-3  ">
                    <img class="img-fluid img-news-ra shadow" src="images/photo4.jpg" alt="img">
                </div>
                <div class="col-lg-9 col-md-8 col-sm-9 col-9 px-0">
                    <div class=" row">
                        <div class="col-lg-7 col-md-6 col-sm-7 col-7">
                            <div class="tag-bg-know">
                                องค์ความรู้
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6 col-sm-5 col-5 red-txt">
                            <i class="fa-solid fa-trash-can "></i> <span>หยิบออก</span>
                        </div>
                    </div>

                    <a href="Information_Knowledge.php" class="txt-header-news mt-1">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </a>
                    <div class="row">
                        <div class="col-lg-7 col-md-7 col-sm-6 col-6 pr-0  mt-2">
                            <img class="img-fluid img-user-news  " src="images/user.jpg" alt="img"><span class="ml-1">วสุรัตน์ คนหาญ</span>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-6 col-6 p-0 mt-2">
                            <i class="fa-solid fa-calendar-days"></i><span class="ml-1"> 26 มิ.ย. 65</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-4">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-3 col-3  ">
                    <img class="img-fluid img-news-ra shadow" src="images/photo4.jpg" alt="img">
                </div>
                <div class="col-lg-9 col-md-8 col-sm-9 col-9 px-0">
                    <div class=" row">
                        <div class="col-lg-7 col-md-6 col-sm-7 col-7">
                            <div class="tag-bg-PR">
                                ประชาสัมพันธ์
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6 col-sm-5 col-5 red-txt">
                            <i class="fa-solid fa-trash-can "></i> <span>หยิบออก</span>
                        </div>
                    </div>

                    <a href="#" class="txt-header-news mt-1">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </a>
                    <div class="row">
                        <div class="col-lg-7 col-md-7 col-sm-6 col-6 pr-0  mt-2">
                            <img class="img-fluid img-user-news  " src="images/user.jpg" alt="img"><span class="ml-1">วสุรัตน์ คนหาญ</span>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-6 col-6 p-0 mt-2">
                            <i class="fa-solid fa-calendar-days"></i><span class="ml-1"> 26 มิ.ย. 65</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-4">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-3 col-3  ">
                    <img class="img-fluid img-news-ra shadow" src="images/photo4.jpg" alt="img">
                </div>
                <div class="col-lg-9 col-md-8 col-sm-9 col-9 px-0">
                    <div class=" row">
                        <div class="col-lg-7 col-md-6 col-sm-7 col-7">
                            <div class="tag-bg-event">
                                กิจกรรม
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6 col-sm-5 col-5 red-txt">
                            <i class="fa-solid fa-trash-can "></i> <span>หยิบออก</span>
                        </div>
                    </div>

                    <a href="#" class="txt-header-news mt-1">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </a>
                    <div class="row">
                        <div class="col-lg-7 col-md-7 col-sm-6 col-6 pr-0  mt-2">
                            <img class="img-fluid img-user-news  " src="images/user.jpg" alt="img"><span class="ml-1">วสุรัตน์ คนหาญ</span>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-6 col-6 p-0 mt-2">
                            <i class="fa-solid fa-calendar-days"></i><span class="ml-1"> 26 มิ.ย. 65</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>








    <nav aria-label="Page navigation example">
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




<?php include('footer.php'); ?>

<!-- Footer Website -->
<?php include('combottom.php'); ?>

<!-- Include file js and properties -->