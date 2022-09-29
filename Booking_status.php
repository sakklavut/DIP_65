<?php include('comtop.php'); ?>
<!-- Include file css and properties -->
<?php include('header.php'); ?>
<!-- Menu and Logo -->
<div class="container mar-spacehead mb-5">


    <!-- ส่วนของข้อมูลผู้ใช้ -->
    <h2 class="h2-color pt-4">
        <i class="fa-solid fa-circle-check"></i> สถานะคำขอ
    </h2>
    <div class="row">
        <div class="col-lg-6 col-md-4 col-sm-12 col-12">
            <h5 class="h2-color mt-2"><a href="#">ข้อมูลผู้ใช้งาน > </a> <span>สถานะคำขอ</span></h5>
        </div>
        <!-- แบ่งส่วนไอคอนหน้าการจอง ห้องประชุม / หนังสือรับรอง / ยานพาหนะ -->
        <div class="col-lg-6 col-md-8 col-sm-12 col-12  ">
            <div class="row">
                <!-- ห้องประชุม -->
                <div class="col-lg-4 col-md-4 col-sm-4 col-12 ">
                    <img src="images/2meet.png" class="thumnal-iconfunction" alt="Meetingroom"><span class="ml-1 h2-color"> ห้องประชุม</span>
                </div>
                <!-- ยานพาหนะ -->
                <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                    <img src="images/2car.png" class="thumnal-iconfunction" alt="car"><span class="ml-1 h2-color"> ยานพาหนะ</span>
                </div>
                <!-- หนังสือรับรอง -->
                <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                    <img src="images/2certificate.png" class="thumnal-iconfunction" alt="certificate"><span class="ml-1 h2-color"> หนังสือรับรอง</span>
                </div>
            </div>
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
        <div class="col-lg-2 col-md-6 col-sm-12 col-12 p">
            <button type="button" class="btn-search btn Gradient-Color shadow-sm btn-sm mt-2"><i class="fa-solid fa-magnifying-glass"></i> ค้นหาประวัติ</button>
        </div>
    </div>








    <div class="table-responsive-sm">
        <table class="table table-sm">
            <thead class="white-text bg-color-purple ta-fontmini">
                <tr>
                    <th scope="col">Icon</th>
                    <th scope="col">ประเภทคำขอ</th>
                    <th scope="col">เลขที่คำขอ</th>
                    <th scope="col">หัวข้อคำขอ</th>
                    <th scope="col">ลงวันที่</th>
                    <th scope="col">สถานที่</th>
                    <th scope="col">สถานะ</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img src="images/2meet.png" class="thumnal-iconfunction" alt="Meetingroom"></th>
                    <td>จองห้องประชุม</td>
                    <td>2565/3 20113</td>
                    <td>ประชุมความคืบหน้าโครงการ</td>
                    <td>21 ก.ย. 65 - 21 ก.ย. 65</td>
                    <td>ห้องประชุม1 ชั้น 3</td>
                    <td>รออนุมัติ</td>
                    <td>สำนักงานเลขานุการกรม</td>
                </tr>
                <tr>
                    <td><img src="images/2car.png" class="thumnal-iconfunction" alt="Meetingroom"></th>
                    <td>จองยานพาหนะ</td>
                    <td>2565/2 10013</td>
                    <td>เดินทางไปต่างจังหวัด</td>
                    <td>21 ก.ย. 65 - 21 ก.ย. 65</td>
                    <td>อยุธยา</td>
                    <td>อนุมัติแล้ว</td>
                    <td></td>
                </tr>
                <tr>
                    <td><img src="images/2certificate.png" class="thumnal-iconfunction" alt="Meetingroom"></th>
                    <td>ขอหนังสือรับรับรอง</td>
                    <td>2565/3 30113</td>
                    <td>หนังสือรับรองเงินเดือน</td>
                    <td>21 ก.ย. 65</td>
                    <td> </td>
                    <td>อนุมัตแล้ว</td>
                    <td> </td>
                </tr>

            </tbody>
        </table>
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