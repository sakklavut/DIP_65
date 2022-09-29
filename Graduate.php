<?php include('comtop.php'); ?>
<!-- Include file css and properties -->
<?php include('header.php'); ?>
<!-- Menu and Logo -->

<!-- background image top -->

<!-- คอนเท้นคอร์สที่กำลังเรียน -->

<div class="container">


  <div class="row">
    <div class="mt-2 col-lg-9 col-md-9 col-sm-12 col-12">
      <li style="list-style: none; " class="nav-item mt-4">
        <a href="index.php">หน้าหลัก </a><span> ></span> คอร์สที่เรียนจบแล้ว
      </li>
      <div class="row">
        <div class="col-lg-9 col-md-8 col-sm-12 col-12 mt-3">

          <h2>คอร์สที่เรียนจบแล้ว</h2>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-12 col-12 mt-3">
          <h2>2 หลักสูตร</h2>
        </div>
      </div>


      <div class=" border-news p-3">
        <div class="row border-bottom-course mx-0 mt-3 mb-2">
          <!-- picture -->
          <div class="col-lg-3 col-md-12 col-sm-12 col-12">
            <div><img class="img-fluid mb-3" style="border-radius: 10px;" src="images/PictureCourse1.jpg" alt="">
            </div>
          </div>
          <!-- content -->
          <div class="col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-2">
                <div class="row mx-0">
                  <h3 class="mb-0">การพัฒนาความรู้การค้าระหว่างประเทศ</h3>
                </div>

                <!-- <p class="mb-0">เริ่มเรียน ตั้งแต่ 6 พ.ค. 2565 ถึง 10 มิ.ย.2565</p> -->
                <!-- status -->
                <div class="mt-1 mb-2">
                  <span class="badge badge-pill badge-success mb-3 shadow-sm mr-2" style="font-size:16px; color:#fff;">ผ่านการทดสอบ</span>
                  <button onclick="window.location.href='Graduate_certificate.php'" type="button" class="btn btn-graduate-color btn-sm mr-2">ใบรับรองหลักสูตร</button>
                  <!-- <button onclick="window.location.href='/page2'">Continue</button> -->
                </div>
              </div>
            </div>
          </div>
          <!-- คะแนน ใบรับรองหลักสูตร -->
          <div class="col-lg-3 col-md-12 col-sm-12 col-12 mt-2 mb-3 shadow-sm txt-gradient-purple text-center font-graduatae">
            <div>100 คะแนน</div>

          </div>

        </div>


        <div class="row border-bottom-course mx-0 mt-3 mb-2">
          <!-- picture -->
          <div class="col-lg-3 col-md-12 col-sm-12 col-12">
            <div><img class="img-fluid mb-3" style="border-radius: 10px;" src="images/PictureCourse4.jpg" alt="">
            </div>
          </div>
          <!-- content -->
          <div class="col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-2">
                <div class="row mx-0">
                  <h3 class="mb-0">หลักสูตรการจดทะเบียนการค้า</h3>

                </div>

                <!-- <p class="mb-0">เริ่มเรียน ตั้งแต่ 25 เม.ย. 2565 ถึง 15 พ.ค.2565</p> -->
                <!-- status -->
                <div class="mt-1 mb-2">
                  <span class="badge badge-pill badge-danger mb-3 shadow-sm mr-2" style="font-size:17px; color:#fff;">ไม่ผ่าน</span>
                  <button type="button" class="btn btn-outline-danger test-again mr-1">โปรดทำการทดสอบอีกครั้ง</button>
                </div>


              </div>
            </div>
          </div>
          <!-- คะแนน ใบรับรองหลักสูตร -->
          <div class="col-lg-3 col-md-12 col-sm-12 col-12 mt-2 mb-3 shadow-sm txt-gradient-purple text-center font-graduatae">
            <div>40 คะแนน</div>

          </div>


        </div>




      </div>


      <div class="mt-3 mb-5" style="text-align: center;">
        <nav aria-label="Page navigation example">
          <ul class="pagination justify-content-center">
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
              </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>





    </div>
    <div class="col-lg-3 col-md-3 col-sm-12 col-12 mar-t-top-menu">
      <!-- รอ include ปฏิทินจากพี่ไมค์ -->
      <?php include('right_side.php'); ?>
    </div>
  </div>
</div>



<!-- background image top -->

<!-- Open main top title page -->

<!-- Close main top title page -->




<section id="news" class="news pb-0">


  <!--/ Title row end -->

  <!-- 3rd post col end -->


  <!--/ Container end -->



</section>

<!--/ News end -->

<?php include('footer.php'); ?>
<!-- Footer Website -->
<?php include('combottom.php'); ?>
<!-- Include file js and properties -->