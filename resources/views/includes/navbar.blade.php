<header>
    <div class="container">
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-light fixed-top navstyle py-3" style="background-color:white;">
                    <!-- <img src="./images/kivaicon3.png" class="kivaicon" alt=""> <a href="index.html"> <img src="./images/kivaicon5.png" class="kivaicon" alt=""></a> -->
                   <a href="/"> <img src="./images/kivaicon5.png" class="kivaicon" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                  
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav m-auto">
                        <li class="nav-item ml-4">
                          <a class="nav-link" href=" {{route('aboutus')}} " aria-haspopup="true" aria-expanded="false" style="color:black; font-weight:400;">
                            Why Kivalearn?
                          </a>
                        </li>
                        <li class="nav-item dropdown ml-4">
                            <a class="nav-link dropdown-toggle legbere" href="#" id=""  style="color:black; font-weight:400;">
                              Programmes
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="{{ route('frontend') }}">Front-End Web Development</a>
                              <a class="dropdown-item" href="{{ route('backend') }}">Back-End Web Development</a>
                             <!--<a class="dropdown-item" href="mobileappdevelopment.html">Mobile App Development</a>-->
                              <a class="dropdown-item" href="{{ route('graphics') }}">Graphic Designs</a>
                              <!-- <a class="dropdown-item" href="userinterface.html">UI/UX Design</a>
                              <a class="dropdown-item" href="ieltstraining.html">IELTS Training</a>
                              <a class="dropdown-item" href="dataanalysis.html">Data Analysis</a> -->
                              <a class="dropdown-item" href="{{ route('digitalmarket') }}">Digital Marketing</a>
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
                              <a class="dropdown-item" href=" {{route('faq')}} ">FAQ</a>
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
                      @guest
                            @if (Route::has('login'))
                                  <span>  <a class="nav-item nav-link pb-3 btn btn-get-startednav" href="{{ route('login') }}">{{ __('Login') }}</a></span>      
                            @endif

                            @if (Route::has('register'))
                                   <span> <a class="nav-item nav-link pb-3 btn btn-get-startednav ml-2" href="{{ route('register') }}">{{ __('Register') }}</a></span>
                            @endif
                        @else
                            <li class="nav-item dropdown" style="list-style-type: none;">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle pb-3 btn btn-get-startednav dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <a class="dropdown-item mt-3" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Dashboard') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                      <div>
                          
                        
                   

                        {{-- @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest --}}
                      </div>
                    </div>
                  </nav>
            </div>
        </div>
    </div>
</header>