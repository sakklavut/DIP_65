<?php include('comtop.php'); ?>
<?php include('header.php'); ?>

<style> 
     .icon_faq{
          position: absolute;
          font-size: 24px;
          padding-top:2px;
          color: #82288c;
          padding-right: 10px;
          
     }
     .icon_question{
          color:#ccc;
     }
     .icon_eye{
          color:#ccc;
     }
     .veiw_eye{
          color:#ccc;
     }
     .heading_faq{
          color:#000;
     }
     .btn_link{
          list-style: none;
     }
</style>

<div class="container-fluid mar-spacehead" style="background-color: #82288c">
    <div class="container ">
        <form id="contact-form" action="#" method="post" role="form" novalidate="novalidate">
            <div class="error-container"></div>
            <div class="row">
                <h1 class="col-12 text-center text-white font-h-search  pt-4 pb-4">
				 คำถามที่พบบ่อย 
                </h1>
            </div>
        </form>
    </div>
</div>
<div class="container">
     <div class="row mt-3">
          <div class="col-xl-4">
               <h5 class="h2-color">คำถามสูงสุด 10 อันดับ</h5>
          </div>
          <div class="col-xl-8 text-">
             <div class="d-flex justify-content-end">
                <input type="text" class="form-control col-xl-6 " id="exampleFormControlInput1" placeholder="ค้นหารายการที่นี่"> 
                 <a class="icon_faq" href="#"> <i class="fa-solid fa-magnifying-glass"></i>  </a> 
             </div>
          </div>
     </div>
     <div class="row mt-3">
          <div class="col-xl-12">
          <div class="accordion" id="accordionExample">
               <div class="shadow-sm p-3  bg-white rounded">
                    <div class="row">
                         <div class="col-xl-6">
                              <i class="fa-solid fa-file-circle-question icon_question"></i> <span class="heading_faq">จะขอสิทธิ์การใช้งานระบบต่างๆ ต้องทำอย่างไร?</span> 
                              <i class="fa-solid fa-eye icon_eye">  </i> <span class="veiw_eye"> 200 </span>
                         </div>
                         <div class="col-xl-6 ">
                              <div class="d-flex justify-content-end">
                                  <i class="fa-solid fa-circle-plus"  type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"></i>
                              </div>
                         </div>
                    </div>
               </div>
               <div class="card">
               <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                    Some placeholder content for the second accordion panel. This panel is hidden by default.
                    </div>
               </div>
               </div>
               <div class="card mt-2">
               <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                         Collapsible Group Item #3
                    </button>
                    </h2>
               </div>
               <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                    And lastly, the placeholder content for the third and final accordion panel. This panel is hidden by default.
                    </div>
               </div>
               </div>
               </div>
          </div>
     </div>
</div>




<?php include('footer.php'); ?>
<?php include('combottom.php'); ?>