<?php include('comtop.php'); ?>
<!-- Include file css and properties -->
<?php include('header.php'); ?>
<!-- Menu and Logo -->

<!-- แถบสีน้ำเงินหัวข้อข่าวสาร -->
<div class="container-fluid mar-spacehead" style="background-color: #F1EDEA">
    <div class="container ">
        <form id="contact-form" action="#" method="post" role="form">
            <div class="error-container"></div>
            <div class="row">
                <h1 class="col-12 text-center h2-color font-h-search  pt-4 pb-4">
                    ขอหนังสือรับรอง
                </h1>
            </div>
        </form>
    </div>
</div>

<div class="d-flex ">
    <div class="p-2 StepBox-882 p-3 ">

        <h3 class="mt-2 mb-0"><i class=" justify-content-center fa-solid fa-list-check"></i></h3>
        <h4 class="mt-0">เลือกแบบฟอร์ม</h4>
        <p class="white-text">ระบุจำนวนหนังสือรับรองที่คุณต้องการ จากนั้นกดปุ่ม "เพิ่มรายการ"</p>
        <div class="arrow-right-822"></div>
    </div>
    <div class="p-2 StepBox-BE4  p-3">
        <h3 class="mt-2 mb-0"><i class="fa-solid fa-map-location-dot"></i></h3>
        <h4 class="mt-0">ระบุสถานที่รับ</h4>
        <p class="white-text">รายการคำขอ จะปรากฏใน “รายการหนังสือที่ร้องขอ”
            จากนั้นเลือกสถานที่จัดส่ง</p>
            <div class="arrow-right-BE4"></div>
    </div>
    <div class="p-2 StepBox-882  p-3">
        <h3 class="mt-2 mb-0"><i class="fa-solid fa-paper-plane"></i></h3>
        <h4 class="mt-0">ส่งคำขอ</h4>
        <p class="white-text">คลิกปุ่มส่งคำขอ โดยคุณสามารถตรวจสอบสถานะคำขอต่างๆได้ใน
            "จัดการภารกิจ"</p>
    </div>
</div>


<!-- News index page -->
<div class="shadow-sm container-fluid Knowledge-bg-head ">
    <div class="container pb-3 ">
        <h2 class="h2-color pt-4">
            แบบฟอร์มหนังสือรับรอง
        </h2>
        <h5 class="h2-color"><a href="profile.php">ข้อมูลผู้ใช้งาน > </a> <span>กิจกรรม</span></h5>
        <hr class="hr_news mt-0">

        <div class="row">
            <div class="col-lg-7 col-md-12 col-sm-12 col-12 mb-3">
                <h3><i class="fa-solid fa-file-lines"></i> เลือกแบบฟอร์มที่ต้องการร้องขอหนังสือรับรอง</h3>
                <div class="row">
                    <!-- รูปหนังสือรับรอง -->
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                        <img src="images/imgcer.jpg" class="img-fluid" alt="Responsive image">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                        <h4 class="mt-3">1. ข้อมูลหนังสือรับรอง</h4>
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12 col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        เงินเดือน
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-12 col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                                    <label class="form-check-label" for="defaultCheck2">
                                        ระยะเวลาทำงาน
                                    </label>
                                </div>
                            </div>
                        </div>

                        <h4 class="mt-3">2. ภาษาของหนังสือรับรอง</h4>
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12 col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        ภาษาไทย
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-12 col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                                    <label class="form-check-label" for="defaultCheck2">
                                        ภาษาอังกฤษ
                                    </label>
                                </div>
                            </div>
                        </div>

                        <h4 class="mt-3">3. จำนวนที่ต้องการ</h4>
                        <!-- Change the `data-field` of buttons and `name` of input field's for multiple plus minus buttons-->
                        <div class="input-group plus-minus-input">
                            <div class="input-group-button">
                                <button type="button" class="button hollow circle" data-quantity="minus" data-field="quantity">
                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                </button>
                            </div>
                            <input class="input-group-field plus-minus-style" type="number" name="quantity" value="0">
                            <div class="input-group-button ">
                                <button type="button " class="button hollow circle " data-quantity="plus" data-field="quantity">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>

                        <div class="mt-3">
                            <a href="#" class="px-5 btn Gradient-Color border-ra-15px white-text  btn-sm">เพิ่มรายการ</a>
                        </div>
                    </div>

                </div>
            </div>
            <!-- รายการหนังสือที่ร้องขอ -->
            <div class="col-lg-5 col-md-12 col-sm-12 col-12 bg-color-book">
                <h4 class="mt-2 mb-2"><i class="fa-solid fa-file-lines "></i> รายการหนังสือที่ร้องขอ</h4>
                <div class="row">
                    <div class="col-lg-4 col-md-3 col-sm-3 col-4 mb-3">
                        <img src="images/imgcer.jpg" class="img-fluid" alt="Responsive image">
                    </div>
                    <div class="col-lg-8 col-md-9 col-sm-9 col-8 ">
                        <h5 class="h2-color m-0">หนังสือรับรองระยะเวลาทำงาน </h5>
                        <h5 class="h2-color m-0">หนังสือรับรองเงินเดือน</h5>
                        <p class=" m-0">(ภาษาไทย, ภาษาอังกฤษ)</p>
                        <p class=" m-0">จำนวน 2 รายการ</p>
                        <a href="#" class="mt-2 px-3 btn  border-ra-15px btn-light btn-sm"><i class="fa-solid fa-magnifying-glass"></i> ดูตัวอย่าง</a>
                        <span><a href="#" class="mt-2 px-3 btn  border-ra-15px btn-danger btn-sm"><i class="fa-regular fa-trash-can"></i> ลบออก</a></span>
                    </div>
                    <hr>

                    <div class="col-lg-4 col-md-3 col-sm-3 col-4 mb-3">
                        <img src="images/imgcer.jpg" class="img-fluid" alt="Responsive image">
                    </div>
                    <div class="col-lg-8 col-md-9 col-sm-9 col-8 ">
                        <h5 class="h2-color m-0">หนังสือรับรองเงินเดือน</h5>
                        <p class=" m-0">(ภาษาไทย)</p>
                        <p class=" m-0">จำนวน 1 รายการ</p>
                        <a href="#" class="mt-2 px-3 btn  border-ra-15px btn-light btn-sm"><i class="fa-solid fa-magnifying-glass"></i> ดูตัวอย่าง</a>
                        <span><a href="#" class="mt-2 px-3 btn  border-ra-15px btn-danger btn-sm"><i class="fa-regular fa-trash-can"></i> ลบออก</a></span>
                    </div>
                    <hr>

                </div>
                <form>
                    <h4 class="mt-2 mb-2">สถานที่ในการจัดส่ง</h4>
                    <div class="form-check form-check-inline ml-2">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">พระราม 4</label>
                    </div>
                    <div class="form-check form-check-inline ml-2">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">พระราม 6</label>
                    </div>
                    <div class="form-check form-check-inline ml-2">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                        <label class="form-check-label" for="inlineRadio3">ศูนย์ภูมิภาค)</label>
                    </div>
                    <h4 class="mt-2 mb-2">เบอร์โทรศัพท์</h4>
                    <form>
                        <div class="form-row">
                            <div class="col ">
                                <input type="phone" class="form-control" placeholder="เบอร์ที่สะดวกในการติดต่อ">
                            </div>
                        </div>
                    </form>
                    <h4 class="mt-2 mb-2">วัตถุประสงค์</h4>

                    <div class="form-row ">
                        <select class="form-control mb-2">
                            <option>-- กรุณาเลือก --</option>
                            <option>กู้เงินเพื่ออสังหาฯ</option>
                        </select>
                    </div>
                    <a href="#" class="mt-2 mb-3 px-3 btn d-flex justify-content-center  border-ra-15px btn-success btn-sm"><i class="fa-solid fa-magnifying-glass mt-1 mr-1"></i> ดูตัวอย่าง</a>
                </form>

            </div>
        </div>





    </div>

</div>





<?php include('footer.php'); ?>
<!-- Footer Website -->
<?php include('combottom.php'); ?>

<!-- PLUS MINUS BUTTONS JS -->
<script>
    jQuery(document).ready(function() {
        // This button will increment the value
        $('[data-quantity="plus"]').click(function(e) {
            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            fieldName = $(this).attr('data-field');
            // Get its current value
            var currentVal = parseInt($('input[name=' + fieldName + ']').val());
            // If is not undefined
            if (!isNaN(currentVal)) {
                // Increment
                $('input[name=' + fieldName + ']').val(currentVal + 1);
            } else {
                // Otherwise put a 0 there
                $('input[name=' + fieldName + ']').val(0);
            }
        });
        // This button will decrement the value till 0
        $('[data-quantity="minus"]').click(function(e) {
            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            fieldName = $(this).attr('data-field');
            // Get its current value
            var currentVal = parseInt($('input[name=' + fieldName + ']').val());
            // If it isn't undefined or its greater than 0
            if (!isNaN(currentVal) && currentVal > 0) {
                // Decrement one
                $('input[name=' + fieldName + ']').val(currentVal - 1);
            } else {
                // Otherwise put a 0 there
                $('input[name=' + fieldName + ']').val(0);
            }
        });
    });
</script>

<!-- Include file js and properties -->