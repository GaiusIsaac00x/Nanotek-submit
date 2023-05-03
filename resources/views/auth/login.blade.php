@include('includes.head')

<!-- navbar -->
<header>
    <div class="container">
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-light fixed-top navstyle py-3" style="background-color:white;">
                    <!-- <img src="./images/kivaicon3.png" class="kivaicon" alt=""> <a href="index.html"> <img src="./images/kivaicon5.png" class="kivaicon" alt=""></a> -->
                   <a href="index.html"> <img src="./images/kivaicon5.png" class="kivaicon" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                  
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav m-auto">
                        <li class="nav-item ml-4">
                          <a class="nav-link" href="aboutus.html" aria-haspopup="true" aria-expanded="false" style="color:black; font-weight:400;">
                            Why Kivalearn?
                          </a>
                        </li>
                        <li class="nav-item dropdown ml-4">
                            <a class="nav-link dropdown-toggle legbere" href="courses.html" id=""  style="color:black; font-weight:400;">
                              Programmes
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="frontendpage.html">Front-End Web Development</a>
                              <a class="dropdown-item" href="backend.html">Back-End Web Development</a>
                             <!--<a class="dropdown-item" href="mobileappdevelopment.html">Mobile App Development</a>-->
                              <a class="dropdown-item" href="graphics.html">Graphic Designs</a>
                              <!-- <a class="dropdown-item" href="userinterface.html">UI/UX Design</a>
                              <a class="dropdown-item" href="ieltstraining.html">IELTS Training</a>
                              <a class="dropdown-item" href="dataanalysis.html">Data Analysis</a> -->
                              <a class="dropdown-item" href="digitalmarket.html">Digital Marketing</a>
                              <a class="btn-get-startedD ml-5 mt-5" href="courses.html">View All Courses</a>
                            </div>
                          </li>
                          <li class="nav-item dropdown ml-4">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:black; font-weight:400;">
                              Resources
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="https://chat.whatsapp.com/KILWxUHt7ZD5LcVtMjZkEx">Join Community</a>
                              <a class="dropdown-item" href="#">Free Courses</a>
                              <a class="dropdown-item" href="#">Free Videos</a>
                              <a class="dropdown-item" href="#">Free Downloads</a>
                            </div>
                          </li>
                          <li class="nav-item dropdown ml-4">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:black; font-weight:400;">
                              Company
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="aboutus.html">About Us</a>
                              <a class="dropdown-item" href="FAQ.html">FAQ</a>
                              <a class="dropdown-item" href="#">Feed Back</a>
                              <a class="dropdown-item" href="#">Our Partners</a>
                              <!-- <a class="dropdown-item" href="alumnipage.html">Alumni</a> -->
                              <a class="dropdown-item" href="testimonial.html">Testimonials</a>
                            </div>
                          </li>
                          <li class="nav-item ml-4">
                            <a class="nav-link" href="contactus.html" aria-haspopup="true" aria-expanded="false" style="color:black; font-weight:400;">
                              Contact Us
                            </a>
                          </li>
                        
                      </ul>
                      <div>
                        <a href="/register" class="pb-3 btn btn-get-startednav">Get Started</a>
                        <a href="/login" class="pb-3 btn btn-get-startednav">Login</a>
                    <!-- <li class="ml-5"> -->
                      {{-- <button class="btn btn-theme effect my-2 my-sm-0" type="submit">Login</button> --}}
                    <!-- </li> -->
                      </div>
                    </div>
                  </nav>
            </div>
        </div>
    </div>
</header>

<div class="container" style="padding-top:150px;padding-bottom:100px;"> 
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('includes.scripts')
@include('includes.footer')

