@include('includes.head')
@include('includes.navbar')


<section>
    <div class="faqs-page-heading">
        <div class="about-title">
            <h1 id="navA">Learn Graphic Design</h1>
        </div>
    </div>
</section>

<section>
    <div class="container mt-5 frontend">
        <div class="row">
            <div class="col-12 col-lg-6 col-sm-12">
                <h2 class="">Welcome to Kivalearn</h2>
                <h1 class="mt-3">Graphic Design</h1>
                <p class="mt-3" style="font-size:16px;">The Kivalearn Graphic Design school is designed to help graphic-design enthusiasts kickstart their journey to learning Graphic Design development, 
                    as well as helping professionals advance in the field.</p>
            </div>
            <div class="col-lg-6 col-12 col-sm-12">
                <img src="/images/BF.png" class="img-responsive mt-3 rounded" width="90%" alt="">
            </div>
        </div>
    </div>
</section>


  <section>
      <div class="container text-left py-5">
            <div class="row">
                <div class="col-lg-7 col-12 col-sm-12">
                  <h1 class="frontendC mt-4">Courses Available in Kivalearn's Graphic Design School</h1>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-6 col-12 col-sm-12">
                  <p class="frontendD">Kivalearn offers a wide variety of programs and courses led by leading industry experts.</p>
                </div>
            </div>   
      </div>
  </section>

  <section class="py-4" style="background-color:rgba(135, 207, 235, 0.233);">
    <div class="container p-5">
        <div class="row">
            <div class="col-lg-6 col-12 col-sm-12">
                <p>
                  <span class="Enthu px-3"> <b> Course:  </b> </span>
                </p>
                <h2 class="ptb">The Basics: Corel Draw</h2>
                <p class="my-3">Learn how to design logos and create flyers.</p>
                <h6 class="my-4" style="color:#0b0b3d;"> <i class="fas fa-clock"></i> 1 Month </h6>
                <h6 class="mt-3" style="color:#0b0b3d;">Next class starts: #, 2022 </h6>
                <a class="btn btn-get-startedB mt-3" href="pricing-page.html">Get this Course &nbsp;<i class="fas fa-arrow-right"></i></a>
                <a class="btn btn-get-startedB mt-3" href="coreldraw.html">Learn More &nbsp;<i class="fas fa-arrow-right"></i></a>
                </div>
            <div class="col-lg-6 mt-2">
                <img src="/images/BE.jpg" alt="" class="img-fluid rounded" width="100%">
            </div>
        </div>
    </div>
  </section>

  <section class="py-4">
    <div class="container p-5">
        <div class="row">
            <div class="col-lg-6 col-12 col-sm-12">
                <p>
                  <span class="Enthu px-3"> <b> Course:  </b> </span>
                </p>
                <h2 class="ptb">Photoshop</h2>
                <p class="my-3">Advance in your designing journey by using the Photosop design software to edit photos and create more powerful designs.</p>
                <h6 class="my-4" style="color:#0b0b3d;"><i class="fas fa-clock"></i> 1 Month </h6>
                <h6 class="mt-3" style="color:#0b0b3d;">Next class starts: #, 2022 </h6>
                <a class="btn btn-get-startedB mt-3" href="pricing-page.html">Get this Course &nbsp;<i class="fas fa-arrow-right"></i></a>
                <a class="btn btn-get-startedB mt-3" href="photoshop.html">Learn More &nbsp;<i class="fas fa-arrow-right"></i></a>
                </div>

            <div class="col-lg-6 mt-2">
                <img src="/images/BJ.jpg" alt="" class="img-fluid rounded" width="100%">
            </div>
        </div>
    </div>
  </section>



  <section class="partner section-padding mt-3" style="background-color: white;">
    <div class="container">
        <div class="row">
              <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                  <h2>Partner organizations</h2> 
              </div>
              <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-5">
                   <div class="owl-carousel owl-theme text-center">
                         <div class="item">
                             <img src="./images/slack-removebg-preview.png"  class="img-fluid" alt="" style="width: 50%; height:50%;">
                         </div>
                         <div class="item">
                             <img src="./images/brykiva-removebg-preview.png"  class="img-fluid" alt="" style="width: 70%; height:70%;">
                         </div>
                         <div class="item">
                             <img src="./images/github.png"  class="img-fluid" alt="" style="width: 50%; height:50%;">
                         </div>
                         <div class="item">
                             <img src="./images/googlemeet.png"  class="img-fluid" alt="" style="width: 50%; height:50%;">
                         </div>
                         <div class="item">
                          <img src="./images/iwere.png"  class="img-fluid" alt="" style="width: 50%; height:50%;">
                      </div>
                   </div>
              </div>
        </div>
    </div>
  </section>

  @include('includes.footer')
  @include('includes.scripts')