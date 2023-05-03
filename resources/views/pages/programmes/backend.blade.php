@include('includes.head')
@include('includes.navbar')


<section>
    <div class="faqs-page-heading">
        <div class="about-title">
            <h1 id="navA">Learn Back-End Development</h1>
        </div>
    </div>
</section>

<section>
    <div class="container mt-5 frontend">
        <div class="row">
            <div class="col-12 col-lg-6 col-sm-12">
                <h2 class="">Welcome to Kivalearn</h2>
                <h1 class="mt-3">Back-End Development</h1>
                <p class="mt-3" style="font-size:16px;">The Kivalearn Back-End Development school is designed to help Web enthusiasts kickstart their journey to learning Back-End development, 
                    as well as helping profesionals advance in the field.</p>
            </div>
            <div class="col-lg-6 col-12 col-sm-12">
                <img src="/images/AL.jpg" class="img-fluid rounded mt-3" width="100%" alt="">
            </div>
        </div>
    </div>
</section>


  <section>
      <div class="container text-left py-5">
            <div class="row">
                <div class="col-lg-7 col-12 col-sm-12">
                  <h1 class="frontendC mt-4">Courses Available in Kivalearn's Back-End School</h1>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-6 col-12 col-sm-12">
                  <p class="frontendD">Kivalearn offers a wide variety of programs and courses led by leading industry experts.</p>
                </div>
            </div>   
      </div>
  </section>

  @foreach ($details as $detail)
  <section class="py-4" style="background-color:rgba(135, 207, 235, 0.233);">
    <div class="container p-5">
        <div class="row">
            <div class="col-lg-6 col-12 col-sm-12">
                <p>
                  <span class="Enthu px-3"> <b> Course:  </b> </span>
                </p>
                <h2 class="ptb">{{ $detail->title }}</h2>
                <p class="my-3">{{ $detail->description }}</p>
                <h6 class="my-4" style="color:#0b0b3d;"> <i class="fas fa-clock"></i> {{ $detail->duration }} </h6>
                <h6 class="mt-3" style="color:#0b0b3d;"> {{ $detail->commencement }} </h6>
                <div class="mt-5">
                  <a class="btn btn-get-startedB mt-3" href="pricing-page.html">Get this Course &nbsp;<i class="fas fa-arrow-right"></i></a>
                  <a class="btn btn-get-startedB mt-3" href="phppython.html">Learn More &nbsp;<i class="fas fa-arrow-right"></i></a>
                  </div>           
                 </div>
            <div class="col-lg-6 mt-2">
                <img src="/images/BA.jpg" alt="" class="img-fluid rounded" width="100%">
            </div>
        </div>
    </div>
  </section>
  @endforeach


 

  {{-- <section class="py-4">
    <div class="container p-5">
        <div class="row">
            <div class="col-lg-6 col-12 col-sm-12">
                <p>
                  <span class="Enthu px-3"> <b> Course:  </b> </span>
                </p>
                <h2 class="ptb">Laravel and Django frameworks</h2>
                <p class="my-3">Frameworks to make your builds easier, faster and more secure.</p>
                <h6 class="my-4" style="color:#0b0b3d;"><i class="fas fa-clock"></i> 1 Month </h6>
                <h6 class="mt-3" style="color:#0b0b3d;">Next class starts: #, 2022 </h6>
                <div class="mt-5">
                  <a class="btn btn-get-startedB mt-3" href="pricing-page.html">Get this Course &nbsp;<i class="fas fa-arrow-right"></i></a>
                  <a class="btn btn-get-startedB mt-3" href="laraveldjango.html">Learn More &nbsp;<i class="fas fa-arrow-right"></i></a>
                  </div>
                </div>

            <div class="col-lg-6 mt-2">
                <img src="/images/AZ.jpg" alt="" class="img-fluid rounded" width="100%">
            </div>
        </div>
    </div>
  </section> --}}



  {{-- <section class="partner section-padding" style="background-color: white;">
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
  </section> --}}

@include('includes.footer')
@include('includes.scripts')