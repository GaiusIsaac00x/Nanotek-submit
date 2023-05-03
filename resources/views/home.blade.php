{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

@include('includes.head')
@include('includes.navbar')


<section class="section-padding colz">
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                <h2 class="Build mt-5">Learn Tech Skills and Excel Globally</h2>
                <p class="my-3">An online learning platform where individuals and groups can access 
                 course contents, live classes and communities across different tech groups and sectors. We are improving the modern day teaching and learning system with technology.
                </p>
                <div class="row my-5">
                  <div class="col-6 col-lg-4 col-md-4 col-sm-4 mt-5">
                    <div class="">
                      <a href="/register" class="btn-get-startedP">Get Started</a>
                    </div>
                  </div>
                  <div class="col-6 col-lg-4 col-md-4 col-sm-4 mt-5">
                    <div class="">
                      <a href="courses.html" class="btn-get-startedP">Programmes</a>
                    </div>
                  </div>
                  <div class="col-6 col-lg-4 col-md-4 col-sm-4 mt-5">
                    <a href="https://chat.whatsapp.com/KILWxUHt7ZD5LcVtMjZkEx" class="btn-get-startedP">Community</a>
                  </div>
                </div>
            </div>
            <div class="col-lg-6 position-relative zindex-2 py-lg-4 ">
              <div class="row">
                <div class="col-lg-6">
                  <span class="circle"></span>
                  <span class="circle2"></span>
                  <img src="/images/TestD.jpg" alt="" class="img-fluid para1 ml-3"> 
                </div>
                <div class="col-lg-6 col-sm-12 col-md-6">
                  <img src="/images/AB.jpg" alt="Layer" class="img-fluid para2">
                  <img src="/images/AD.jpg" alt="Layer" class="img-fluid para2 mt-3">
                </div>
              </div>
            </div>
        </div>
    </div>
</section>


<section class="section-padding digital" style="background-color:white;">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 pt-3">
          <h2 class="text-center">Empowering Global Tech Talents</h2>
          <p class="text-justify">
            We are a technology talent development company connecting people to quality tech trainings online at affordable rate. Kivalearn is partnering with various technology experts across Africa to help connect more individuals who desire to learn technological skills with virtual access to quality and affordable technology education. 
          </p>
          <p class="text-center mt-5">  <span><a href="aboutus.html" class="btn-get-startedabout ml-3">About Us<i class="fa fa-arrow-right ml-1"></i> </a>
          </span> </p>
        </div>
      </div>
    </div>
  </section>

    
    <section class="growth section-padding" style="background-color:#0b0b3d;">
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-3">
            <h2 class="text-white text-center">Improving Technology Education</h2>
          </div>
        </div>
        <div class="row">
          <div class="box-growth">
              <div class="box-3 text-center" style="background-color: skyblue;">
                <h3>300+</h3>
                <p>Students Trained</p>
              </div>
              <div class="box-2">
                  <img src="images/New.jpg" class="" width="270px" height="305px"  alt="">
              </div>
              <div class="box-3 text-center" style="background-color: skyblue;">
                <h3>90%</h3>
                <p>Completion rate of Kivalearners</p>
              </div>
              <div class="box-2">
                <img src="images/AR.jpg" class="" width="270px" height="305px"  alt="">
              </div>
          </div>
          <div class="col-lg-12">
            <p class="text-white pt-4">We are a platform that helps you learn tech skills from various expert qualitatively even at an affordable rate. </p>
            <a href="/register" class="btn btn-get-startedC mb-5 mt-3">Get Started &nbsp;<i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </section>

    <section style="background-color:#f2f2f2">
      <div class="container py-5" >
        <div class="row">
          <div class="col-12 col-sm-12 col-md-12 col-lg-6">
            <div class="row">
              <div class="col-sm-6">
                <div class="card">
                  <img src="./images/AF.jpg" class="img-fluid" alt="">
                  <div class="card-body">
                    <h4 class="Easy"> <b> Cohort Based Learning </b> </h4>
                    <p class="">Our approach is a cohort based learning pattern. 
                      A collaboration-focused program where Kivalearners work together to complete task and projects. 
                      </p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card">
                  <img src="./images/AG.jpg" class="img-fluid" alt="">
                  <div class="card-body">
                    <h4 class="Easy"> <b> Instructor-led and Mentoring</b> </h4>
                    <p class="">
                      Kivalearners engage with instructors and the learning community. Receive mentorship and reviews
                      on how to go about completing tasks and projects for courses.</p>
                       
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-12 col-lg-6">
            <h1 class="start mt-3">Why Kivalearn?</h1>
            <p class="mt-3">Kivalearn offers learners quality, swift and convenient technology skills programs to learn how to succeed globally 
                            in the tech space. Our platform allows technology experts to share their 
                            bank of knowledge and resources to people who needs it using live sessions, trainings, courses and communities. </p>

              <p class=""> Kivalearn is repositioning Africa for constructive success through global talent development. 
                           Kivalearn seeks to transform more lives
                           virtually using quality education from certified industry experts across Africa. 
                           We are providing a medium for verified tech professionals to easily do what they love doing best, 
                           communicating their wealth of technical expertise to people who desires to learn from them. 
                </p>
                <a href="/register" class="btn btn-get-startedC">  Get Started&nbsp;<i class="fas fa-arrow-right"></i></a>
          </div>
          
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col">
            <h1 class="text-center py-2 mt-4">Courses </h1>

          </div>
        </div>
      </div>

      <div class="container py-5" >
        <div class="row">
          <div class="col-12 col-sm-12 col-md-12 col-lg-12">
            <div class="row">
              <div class="col-md-4">
                <div class="card" id="firstCard" style="position:relative;">
                  <img src="./images/AI.jpg" class="weight" alt="" >
                  <div class="card-body">
                    <a href=""><p class="priceTagB p-1 text-center"> <b>$25.0 <s> $50.0 </s> </b> </p></a>
                    <h4 class="Easy"> <b> Graphic Designs </b> </h4>
                    <p class="py-1"> 
                      Learn how to come up with creative designs that will strengthen brand visibility with ease using photoshop, corel draw and other design specific softwares used in varying fields. 
                      </p>
                       <a href="graphics.html" class="btn-get-startedP">Explore<i class="fa fa-arrow-right ml-1"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card" id="firstCard" style="position:relative;">
                  <img src="./images/AH.jpg" class="weight" alt="">
                  <div class="card-body">
                    <a href=""><p class="priceTagB p-1 text-center"> <b>$25.0 <s> $50.0 </s> </b> </p></a>
                    <h4 class="Easy"> <b> Digital Marketing </b> </h4>
                    <p class="py-1">This course teaches you how to leverage various technological platform in creating  quality, 
                      persuading messages even while delivery amazing reach using SEO, Social Medias, Email etc. </p>
                       <a href="digitalmarket.html" class="btn-get-startedP">Explore<i class="fa fa-arrow-right ml-1"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                 <div class="card" id="firstCard" style="position:relative;">
                <img src="./images/BA.jpg" class="weight" alt="">
                <div class="card-body">
                  <a href=""><p class="priceTagA p-1 text-center"> <b>$25.0 <s> $50.0 </s> </b> </p></a>
                  <h4 class="Easy"> <b> Front-End Development </b> </h4>
                  <p class="py-1">Explore project based learning on with HTML, CSS , Javascript and learn all you need to know about Front-End development.
                    </p>
                     <a href="frontendpage.html" class="btn-get-startedP">Explore<i class="fa fa-arrow-right ml-1"></i></a>
                </div>
              </div>
                <!-- <div class="card" id="firstCard" style="position:relative;">
                    <img src="./images/AE.jpg" class="weight" alt="" >
                    <div class="card-body">
                      <a href=""><p class="priceTag p-1 text-center"> <b>$100 <s> $180 </s> </b> </p></a>
                      <h4 class="Easy"> <b> Data Analysis </b> </h4>
                      <p class="py-1">Unlock your potential in data analytics. Build job-ready skills for a data analyst career. Gain job-ready skills for an entry-level data analyst role with this Data Analyst course.</p>
                         <a href="dataanalysis.html" class="btn-get-startedB">Explore<i class="fa fa-arrow-right ml-1"></i></a>
                    </div>
                  </div> -->
              </div>
            </div>
          </div>
          
        </div>
      </div>

      <div class="container text-center">
        <div class="row">
          <div class="col-lg-12">
            <a href="courses.html" class="btn btn-get-startedC mb-3"> More Courses&nbsp;<i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </div>

    </section>


    
    <section class="mt-4">
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-5 text-center"> 
            <p style="font-size:4.5vw;"><b>
            WHAT <span style="color:#0b0b3d"> OUR USERS </span> SAY ABOUT US 
          </b></p>
          </div>
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-3">
            <div class="owl-testimonial owl-theme text-center">
                  <div class="item" style="background-color: #0b0b3d; height:400px !important;">
                    <div class="testimonials">
                        <p class="text-white">
                          <i class="fas fa-quote-left"></i>
                         <i> Brykiva is the best tech-institute in terms of teaching with well respect values</i><i class="ml-1 fas fa-quote-right"></i></p>
                    </div>
                      <div class="center">
                        <img src="/images/kivaicon2.png"  class="img-fluid" alt="" style="width: 40%; height:130px;">
                        <h4 class="my-3 text-white">Odion Kelly Igiogbe</h4>
                        <h6 class="pb-3 text-white"> <i> FreeLancer </i></h6>
                      </div>
                  </div>
                  <div class="item"  style="background-color: #0b0b3d; height:400px !important;">
                    <div class="testimonials">
                        <p class="text-white">
                          <i class="fas fa-quote-left"></i>
                         <i> Brykiva set me on the path to becoming a CTO.
                            Their frontend development course was my first introduction to programming and it was great.</i><i class="ml-1 fas fa-quote-right"></i></p>
                    </div>
                      <div class="center">
                        <img src="/images/Gaius1.jpg"  class="img-fluid" alt="" style="width: 40%; height:130px;">
                        <h4 class="my-3 text-white">Isaac Gaius</h4>
                        <h6 class="pb-3 text-white"> <i> FreeLancer </i></h6>
                      </div>
                  </div>
                  <div class="item"  style="background-color: #0b0b3d; height:400px !important;">
                    <div class="testimonials">
                        <p class="text-white">
                          <i class="fas fa-quote-left"></i>
                         <i>Brykiva has impacted a lot in me in terms of programming I can boast anywhere with what I have learnt from Brykiva.
                        </i><i class="ml-1 fas fa-quote-right"></i></p>
                    </div>
                      <div class="center">
                        <img src="/images/Patrick.jpeg"  class="img-fluid" alt="" style="width: 40%; height:130px;">
                        <h4 class="my-3 text-white">Aiyohuyin Patrick</h4>
                        <h6 class="pb-3 text-white"> <i> FreeLancer </i></h6>
                      </div>
                  </div>
                  <div class="item"  style="background-color: #0b0b3d; height:400px !important;">
                    <div class="testimonials">
                        <p class="text-white">
                          <i class="fas fa-quote-left"></i>
                         <i>Brykiva gave me the real foundation to Information technology,
                            now am doing my masters in Data Analyse because of them</i><i class="ml-1 fas fa-quote-right"></i></p>
                    </div>
                      <div class="center">
                        <img src="/images/Greg.jpeg"  class="img-fluid" alt="" style="width: 40%; height:130px;">
                        <h4 class="my-3 text-white">Tsado Gregory</h4>
                        <h6 class="pb-3 text-white"> <i> FreeLancer </i></h6>
                      </div>
                  </div>
                  <div class="item"  style="background-color: #0b0b3d; height:400px !important;">
                    <div class="testimonials">
                        <p class="text-white">
                          <i class="fas fa-quote-left"></i>
                         <i> I am a proud woman in the tech field, thanks to Brykiva. </i><i class="ml-1 fas fa-quote-right"></i></p>
                    </div>
                      <div class="center">
                        <img src="/images/Peace.jpeg"  class="img-fluid" alt="" style="width: 40%; height:130px;">
                        <h4 class="my-3 text-white">Peace Osayuwa</h4>
                        <h6 class="pb-3 text-white"> <i> FreeLancer </i></h6>
                      </div>
                  </div>
                  <div class="item" style="background-color: #0b0b3d; height:400px !important;">
                    <div class="testimonials">
                        <p class="text-white">
                          <i class="fas fa-quote-left"></i>
                         <i> Brykiva has helped me become familiar with the world of tech. 
                           They were always ready to support in any way possible to ensure I got the best.</i><i class="ml-1 fas fa-quote-right"></i></p>
                    </div>
                      <div class="center">
                        <img src="/images/Destiny.JPG"  class="img-fluid" alt="" style="width: 40%; height:130px;">
                        <h4 class="my-3 text-white">Destiny Erhieme</h4>
                        <h6 class="pb-3 text-white"> <i> FreeLancer </i></h6>
                      </div>
                  </div>
            </div>
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