{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit normal frontend from here</h1>
    

    <h1>This is for the html and css</h1>
    <div>
        <form method="post" action=" {{ route('adminfrontendposts') }} ">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Title</label>
              <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Description</label>
              <input type="text" name="description" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Duration</label>
                <input type="text" name="duration" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Commencement</label>
                <input type="text" name="commencement" class="form-control" id="exampleInputPassword1">
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</body>
</html> --}}



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Front-End </title>
    <link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('public/css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp">
    <link rel="stylesheet" href="{{ asset('public/animation.css') }}">
    <link rel="stylesheet" href="{{ asset('public/femag.css') }}">
    <link rel="shortcut icon" href="{{ asset('./public/img/kivaicon3.png') }}" type="image/x-icon">
  <style>

table {
         border-collapse: separate;
         border-spacing: 0 20px !important;
       }
       td {
     padding-top:20px !important;
     padding-bottom:20px !important;
     padding-right:20px !important;   
 }
   
.switch {
    height: 100px;
    position: absolute;
    top: 15px;
    right: 230px;
}
@media screen and (max-width:992px) {
    .switch{
      right: 35%;
    }
}

@media screen and (max-width:768px) {
    .switch{
      right: 50%;
    }
}
@media screen and (max-width:730px) {
    .switch{
      right: 55%;
    }
}
@media screen and (max-width:685px) {
    .switch{
      right: 60%;
    }
}
@media screen and (max-width:600px) {
    .switch{
      right: 40%;
    }
}
@media screen and (max-width:480px) {
    .switch{
      right: 63%;
    }
  }
   </style>  

</head>
<body>
<div class="contanier">
  <div class="navigation">
    <ul>
      <li>
          <a href="#">
            <div class="text-center">
              <img src="./public/img/kivaicon5.png" alt="" width="70%">
            </div>
            <span class="cl togglehid"><div class="toggle mt-2" onclick="toggleMenu(); myFunction()">
                    
            </div></span>
          </a>
        </li>
      <li class="">
        <a href="./index.html" class="ms-2">
            <span class="icon"> <svg class="me-4" width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M8.33301 12.3333H11.6663M15.4163 16.5C15.9088 16.5 16.3964 16.403 16.8514 16.2145C17.3064 16.0261 17.7198 15.7499 18.068 15.4016C18.4162 15.0534 18.6924 14.64 18.8809 14.1851C19.0693 13.7301 19.1663 13.2425 19.1663 12.75C19.1663 12.2575 19.0693 11.7699 18.8809 11.3149C18.6924 10.86 18.4162 10.4466 18.068 10.0983C17.7198 9.75013 17.3064 9.47391 16.8514 9.28545C16.3964 9.097 15.9088 9 15.4163 9C14.4218 9 13.468 9.39509 12.7647 10.0983C12.0614 10.8016 11.6663 11.7554 11.6663 12.75C11.6663 13.7446 12.0614 14.6984 12.7647 15.4016C13.468 16.1049 14.4218 16.5 15.4163 16.5V16.5ZM8.33301 4.83333H11.6663H8.33301ZM1.24967 11.0833C1.24967 11.0833 4.58301 3.16667 4.99967 2.33333C5.41634 1.5 6.24967 1.5 6.66634 1.5C7.08301 1.5 8.33301 1.5 8.33301 3.16667V12.3333L1.24967 11.0833ZM4.58301 16.5C4.09055 16.5 3.60292 16.403 3.14794 16.2145C2.69297 16.0261 2.27958 15.7499 1.93136 15.4016C1.58314 15.0534 1.30691 14.64 1.11846 14.1851C0.930004 13.7301 0.833008 13.2425 0.833008 12.75C0.833008 12.2575 0.930004 11.7699 1.11846 11.3149C1.30691 10.86 1.58314 10.4466 1.93136 10.0983C2.27958 9.75013 2.69297 9.47391 3.14794 9.28545C3.60292 9.097 4.09055 9 4.58301 9C5.57757 9 6.5314 9.39509 7.23466 10.0983C7.93792 10.8016 8.33301 11.7554 8.33301 12.75C8.33301 13.7446 7.93792 14.6984 7.23466 15.4016C6.5314 16.1049 5.57757 16.5 4.58301 16.5V16.5ZM18.7497 11.0833C18.7497 11.0833 15.4163 3.16667 14.9997 2.33333C14.583 1.5 13.7497 1.5 13.333 1.5C12.9163 1.5 11.6663 1.5 11.6663 3.16667V12.3333L18.7497 11.0833Z" stroke="white" stroke-width="1.66667"/>
              </svg> </span>
            <span class="title txtcl">Overview</span>
        </a>
    </li>
      <li class="strokeey">
          <a href="./adminseeuser.html" class="ms-2">
              <span class="icon"> <svg class="me-4" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M6.66643 8.96677H6.18309C5.52351 8.94293 4.86607 9.0549 4.25157 9.29573C3.63707 9.53656 3.07862 9.90112 2.61087 10.3668L2.47754 10.5223V15.1223H4.74421V12.5112L5.04976 12.1668L5.18865 12.0057C5.91194 11.2626 6.81242 10.7158 7.80532 10.4168C7.3082 10.0385 6.91614 9.53934 6.66643 8.96677Z" fill="black"/>
                  <path d="M17.411 10.3499C16.9432 9.88427 16.3848 9.51972 15.7703 9.27888C15.1558 9.03805 14.4983 8.92608 13.8387 8.94992C13.6364 8.95049 13.4343 8.96162 13.2332 8.98325C12.9788 9.52042 12.5974 9.98758 12.1221 10.3444C13.1821 10.6376 14.1423 11.2137 14.8998 12.011L15.0387 12.1666L15.3387 12.511V15.1277H17.5276V10.5055L17.411 10.3499Z" fill="black"/>
                  <path d="M6.16692 7.88331H6.33914C6.25912 7.19622 6.37968 6.50066 6.68627 5.88058C6.99286 5.2605 7.47237 4.74242 8.06692 4.38886C7.8514 4.05961 7.55407 3.79198 7.20404 3.61217C6.854 3.43235 6.46327 3.34653 6.07011 3.3631C5.67694 3.37967 5.29482 3.49806 4.96115 3.70668C4.62749 3.91531 4.35373 4.20701 4.16667 4.55322C3.97962 4.89944 3.88569 5.2883 3.89407 5.68172C3.90246 6.07515 4.01287 6.45965 4.21451 6.79759C4.41614 7.13552 4.70209 7.41529 5.04434 7.60951C5.38658 7.80372 5.77341 7.90573 6.16692 7.90553V7.88331Z" fill="black"/>
                  <path d="M13.5722 7.46678C13.5789 7.59447 13.5789 7.72242 13.5722 7.85011C13.6788 7.86701 13.7865 7.8763 13.8944 7.87789H14C14.3917 7.857 14.7714 7.73502 15.1021 7.52382C15.4327 7.31263 15.7031 7.01942 15.8868 6.67273C16.0705 6.32605 16.1613 5.93771 16.1503 5.54552C16.1394 5.15333 16.0271 4.77066 15.8243 4.43476C15.6216 4.09885 15.3353 3.82117 14.9934 3.62874C14.6515 3.43631 14.2656 3.33569 13.8733 3.33668C13.4809 3.33766 13.0955 3.44022 12.7546 3.63437C12.4136 3.82852 12.1288 4.10764 11.9277 4.44456C12.4306 4.77286 12.844 5.22084 13.131 5.74832C13.418 6.2758 13.5696 6.86628 13.5722 7.46678Z" fill="black"/>
                  <path d="M9.92767 9.95544C11.2992 9.95544 12.411 8.84361 12.411 7.4721C12.411 6.1006 11.2992 4.98877 9.92767 4.98877C8.55616 4.98877 7.44434 6.1006 7.44434 7.4721C7.44434 8.84361 8.55616 9.95544 9.92767 9.95544Z" fill="black"/>
                  <path d="M10.0615 11.2777C9.33601 11.2484 8.61206 11.3662 7.93323 11.624C7.25441 11.8817 6.63475 12.2742 6.11155 12.7777L5.97266 12.9332V16.4499C5.97482 16.5645 5.99954 16.6775 6.04539 16.7824C6.09123 16.8874 6.15732 16.9824 6.23986 17.0618C6.32241 17.1413 6.4198 17.2037 6.52647 17.2455C6.63314 17.2873 6.747 17.3077 6.86155 17.3055H13.2449C13.3594 17.3077 13.4733 17.2873 13.58 17.2455C13.6866 17.2037 13.784 17.1413 13.8666 17.0618C13.9491 16.9824 14.0152 16.8874 14.061 16.7824C14.1069 16.6775 14.1316 16.5645 14.1338 16.4499V12.9444L14.0004 12.7777C13.4806 12.2726 12.8631 11.8791 12.1858 11.6212C11.5085 11.3632 10.7856 11.2463 10.0615 11.2777Z" fill="black"/>
                  </svg>                    
                 </span>
              <span class="title txtcl">Users</span>
          </a>
      </li>
      <li class="">
          <a href="./adminfrontend.html" class="ms-2 panel-active" id="activetab">
              <span class="icon" id="activeicon"> <svg class="me-4" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M13.1441 5.55553H8.33301V4.44442H12.6552C12.4982 3.88532 12.4611 3.29936 12.5463 2.72492C12.6315 2.15048 12.8371 1.60052 13.1497 1.11108H4.44412C4.14943 1.11108 3.86682 1.22815 3.65844 1.43652C3.45007 1.64489 3.33301 1.92751 3.33301 2.2222V17.7778C3.33301 18.0724 3.45007 18.3551 3.65844 18.5634C3.86682 18.7718 4.14943 18.8889 4.44412 18.8889H15.5552C15.8499 18.8889 16.1325 18.7718 16.3409 18.5634C16.5493 18.3551 16.6663 18.0724 16.6663 17.7778V7.49997C15.9627 7.50009 15.2706 7.32179 14.6546 6.98174C14.0386 6.64168 13.5189 6.15099 13.1441 5.55553ZM7.2219 14.4444H6.11079V13.3333H7.2219V14.4444ZM7.2219 12.2222H6.11079V11.1111H7.2219V12.2222ZM7.2219 9.99997H6.11079V8.88886H7.2219V9.99997ZM7.2219 7.77775H6.11079V6.66664H7.2219V7.77775ZM7.2219 5.55553H6.11079V4.44442H7.2219V5.55553ZM13.8886 14.4444H8.33301V13.3333H13.8886V14.4444ZM13.8886 12.2222H8.33301V11.1111H13.8886V12.2222ZM13.8886 9.99997H8.33301V8.88886H13.8886V9.99997ZM13.8886 7.77775H8.33301V6.66664H13.8886V7.77775Z" fill="black"/>
                  <path d="M16.6664 6.11122C18.2006 6.11122 19.4442 4.86757 19.4442 3.33344C19.4442 1.79932 18.2006 0.555664 16.6664 0.555664C15.1323 0.555664 13.8887 1.79932 13.8887 3.33344C13.8887 4.86757 15.1323 6.11122 16.6664 6.11122Z" fill="black"/>
                  </svg>
                 </span>
              <span class="title txtbl">Front-End Dev</span>
          </a>
      </li>
      <li class="">
        <a href="./adminbackend.html" class="ms-2">
            <span class="icon"> <svg class="me-4" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M0 14.2488V15.75C0 16.991 3.02344 18 6.75 18C10.4766 18 13.5 16.991 13.5 15.75V14.2488C12.048 15.2719 9.39375 15.75 6.75 15.75C4.10625 15.75 1.45195 15.2719 0 14.2488ZM11.25 4.5C14.9766 4.5 18 3.49102 18 2.25C18 1.00898 14.9766 0 11.25 0C7.52344 0 4.5 1.00898 4.5 2.25C4.5 3.49102 7.52344 4.5 11.25 4.5ZM0 10.5609V12.375C0 13.616 3.02344 14.625 6.75 14.625C10.4766 14.625 13.5 13.616 13.5 12.375V10.5609C12.048 11.7562 9.39023 12.375 6.75 12.375C4.10977 12.375 1.45195 11.7562 0 10.5609ZM14.625 10.9477C16.6395 10.5574 18 9.8332 18 9V7.49883C17.1844 8.07539 15.9855 8.46914 14.625 8.71172V10.9477ZM6.75 5.625C3.02344 5.625 0 6.88359 0 8.4375C0 9.99141 3.02344 11.25 6.75 11.25C10.4766 11.25 13.5 9.99141 13.5 8.4375C13.5 6.88359 10.4766 5.625 6.75 5.625ZM14.4598 7.6043C16.5691 7.22461 18 6.4793 18 5.625V4.12383C16.752 5.00625 14.6074 5.48086 12.3504 5.59336C13.3875 6.09609 14.1504 6.77109 14.4598 7.6043Z" fill="#0A0A0A"/>
              </svg>
               </span>
            <span class="title txtcl">Back-End Dev</span>
        </a>
    </li>
    <li class="">
      <a href="./admingraphics.html" class="ms-2">
          <span class="icon"> <svg class="me-4" width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M2 4H0V17H10V15H2V4ZM15.9 2.4L14.6 1.1C14.2 0.700001 13.5 0.600001 13 1L12 2H3V14H12V8L16 4C16.4 3.5 16.3 2.8 15.9 2.4ZM10.2 8.4L7.7 9.3L8.6 6.8L13 2.4L14.6 4L10.2 8.4Z" fill="black"/>
              </svg>
             </span>
          <span class="title txtcl">Graphics</span>
      </a>
  </li>
  <li class="">
      <a href="./admindigitalmarketing.html" class="ms-2">
          <span class="icon"> <svg class="me-4" width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M5.31641 1.39992L4.12474 0.208252C2.12474 1.73325 0.808073 4.08325 0.691406 6.74992H2.35807C2.4171 5.69309 2.71376 4.6632 3.22596 3.73691C3.73816 2.81062 4.45271 2.0118 5.31641 1.39992ZM15.6414 6.74992H17.3081C17.1831 4.08325 15.8664 1.73325 13.8747 0.208252L12.6914 1.39992C13.5514 2.01481 14.2628 2.81451 14.7732 3.7403C15.2837 4.6661 15.5804 5.69447 15.6414 6.74992ZM13.9997 7.16658C13.9997 4.60825 12.6331 2.46659 10.2497 1.89992V1.33325C10.2497 0.641585 9.69141 0.083252 8.99974 0.083252C8.30807 0.083252 7.74974 0.641585 7.74974 1.33325V1.89992C5.35807 2.46659 3.99974 4.59992 3.99974 7.16658V11.3333L2.33307 12.9999V13.8333H15.6664V12.9999L13.9997 11.3333V7.16658ZM8.99974 16.3333C9.11641 16.3333 9.22474 16.3249 9.33307 16.2999C9.87474 16.1833 10.3164 15.8166 10.5331 15.3166C10.6164 15.1166 10.6581 14.8999 10.6581 14.6666H7.32474C7.33307 15.5833 8.07474 16.3333 8.99974 16.3333Z" fill="black"/>
              </svg>
             </span>
          <span class="title txtcl">Digital Marketing</span>
      </a>
  </li>
 
  <li class="">
      <a href="./statistics.html" class="ms-2">
          <span class="icon"> <svg class="me-4" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M9.21003 12.0327H6.38463C6.21743 12.0327 6.08203 12.1681 6.08203 12.3353V16.7221C6.08203 16.8893 6.21743 17.0247 6.38463 17.0247H9.21003C9.37723 17.0247 9.51243 16.8893 9.51243 16.7221V12.3351C9.51243 12.1679 9.37703 12.0327 9.21003 12.0327Z" fill="black"/>
              <path d="M13.6153 2.97559H10.7899C10.6227 2.97559 10.4873 3.11099 10.4873 3.27819V16.7218C10.4873 16.889 10.6227 17.0244 10.7899 17.0244H13.6153C13.7825 17.0244 13.9179 16.889 13.9179 16.7218V3.27819C13.9179 3.11099 13.7825 2.97559 13.6153 2.97559Z" fill="black"/>
              <path d="M18.043 7.05981H15.2176C15.0504 7.05981 14.915 7.19521 14.915 7.36241V16.7218C14.915 16.889 15.0504 17.0244 15.2176 17.0244H18.0428C18.21 17.0244 18.3454 16.889 18.3454 16.7218V7.36241C18.3454 7.19541 18.21 7.05981 18.043 7.05981Z" fill="black"/>
              <path d="M4.7823 7.05981H1.9569C1.7897 7.05981 1.6543 7.19521 1.6543 7.36241V16.7218C1.6543 16.889 1.7897 17.0244 1.9569 17.0244H4.7823C4.9495 17.0244 5.0849 16.889 5.0849 16.7218V7.36241C5.0849 7.19541 4.9495 7.05981 4.7823 7.05981Z" fill="black"/>
              </svg>
             </span>
          <span class="title txtcl">Statistics</span>
      </a>
  </li>
  <li class="">
      <a href="./adminsettings.html" class="ms-2">
          <span class="icon"> <svg class="me-4" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M10.5171 17.3334H7.48381C7.29375 17.3334 7.10939 17.2685 6.96131 17.1494C6.81322 17.0302 6.71031 16.8641 6.66964 16.6784L6.33047 15.1084C5.87802 14.9102 5.449 14.6623 5.05131 14.3692L3.52047 14.8567C3.33928 14.9145 3.14376 14.9086 2.96641 14.8399C2.78905 14.7713 2.64052 14.644 2.54547 14.4792L1.02547 11.8534C0.931428 11.6885 0.896125 11.4966 0.925342 11.309C0.954558 11.1215 1.04656 10.9494 1.18631 10.8209L2.37381 9.73758C2.3198 9.24684 2.3198 8.75166 2.37381 8.26091L1.18631 7.18008C1.04637 7.05156 0.954235 6.87931 0.925014 6.69157C0.895793 6.50382 0.931214 6.31172 1.02547 6.14675L2.54214 3.51925C2.63718 3.35451 2.78572 3.22724 2.96307 3.15857C3.14043 3.0899 3.33594 3.08397 3.51714 3.14175L5.04797 3.62925C5.25131 3.47925 5.46297 3.33925 5.68131 3.21258C5.89214 3.09425 6.10881 2.98675 6.33047 2.89091L6.67047 1.32258C6.71095 1.13691 6.81367 0.970655 6.9616 0.851372C7.10952 0.73209 7.29378 0.666948 7.48381 0.666748H10.5171C10.7072 0.666948 10.8914 0.73209 11.0394 0.851372C11.1873 0.970655 11.29 1.13691 11.3305 1.32258L11.6738 2.89175C12.126 3.09 12.5547 3.33791 12.9521 3.63091L14.4838 3.14341C14.6649 3.08584 14.8602 3.09189 15.0374 3.16055C15.2146 3.22921 15.363 3.35636 15.458 3.52091L16.9746 6.14841C17.168 6.48758 17.1013 6.91675 16.8138 7.18091L15.6263 8.26425C15.6803 8.75499 15.6803 9.25017 15.6263 9.74091L16.8138 10.8242C17.1013 11.0892 17.168 11.5176 16.9746 11.8567L15.458 14.4842C15.3629 14.649 15.2144 14.7763 15.037 14.8449C14.8597 14.9136 14.6642 14.9195 14.483 14.8617L12.9521 14.3742C12.5548 14.667 12.126 14.9147 11.6738 15.1126L11.3305 16.6784C11.2898 16.8639 11.187 17.03 11.0391 17.1491C10.8912 17.2682 10.7071 17.3333 10.5171 17.3334ZM5.35047 12.5242L6.03381 13.0242C6.18797 13.1376 6.34797 13.2417 6.51464 13.3367C6.67131 13.4276 6.83131 13.5092 6.99714 13.5834L7.77464 13.9242L8.15547 15.6667H9.84714L10.228 13.9234L11.0055 13.5826C11.3446 13.4326 11.6671 13.2467 11.9663 13.0276L12.6496 12.5276L14.3513 13.0692L15.1971 11.6042L13.878 10.4017L13.9713 9.55841C14.013 9.18925 14.013 8.81675 13.9713 8.44841L13.878 7.60508L15.198 6.40008L14.3513 4.93425L12.6505 5.47591L11.9663 4.97591C11.667 4.75566 11.3449 4.56819 11.0055 4.41675L10.228 4.07591L9.84714 2.33341H8.15547L7.77214 4.07675L6.99714 4.41675C6.65729 4.56559 6.33504 4.75173 6.03631 4.97175L5.35214 5.47175L3.65214 4.93008L2.80464 6.40008L4.12381 7.60091L4.03047 8.44508C3.98881 8.81425 3.98881 9.18675 4.03047 9.55508L4.12381 10.3984L2.80464 11.6009L3.65047 13.0659L5.35047 12.5242ZM8.99714 12.3334C8.11309 12.3334 7.26524 11.9822 6.64012 11.3571C6.015 10.732 5.66381 9.88414 5.66381 9.00008C5.66381 8.11603 6.015 7.26818 6.64012 6.64306C7.26524 6.01794 8.11309 5.66675 8.99714 5.66675C9.8812 5.66675 10.729 6.01794 11.3542 6.64306C11.9793 7.26818 12.3305 8.11603 12.3305 9.00008C12.3305 9.88414 11.9793 10.732 11.3542 11.3571C10.729 11.9822 9.8812 12.3334 8.99714 12.3334ZM8.99714 7.33341C8.67077 7.33375 8.35168 7.42989 8.07946 7.60992C7.80723 7.78996 7.59386 8.04595 7.46581 8.34615C7.33775 8.64635 7.30066 8.97754 7.35912 9.29863C7.41758 9.61972 7.56903 9.91658 7.79468 10.1524C8.02032 10.3882 8.31023 10.5525 8.62844 10.6251C8.94665 10.6976 9.27915 10.6751 9.58469 10.5604C9.89023 10.4457 10.1554 10.2438 10.3472 9.97971C10.539 9.71567 10.6491 9.40112 10.6638 9.07508V9.40841V9.00008C10.6638 8.55805 10.4882 8.13413 10.1757 7.82157C9.86309 7.50901 9.43917 7.33341 8.99714 7.33341Z" fill="black"/>
              </svg>
             </span>
          <span class="title txtcl">Settings</span>
      </a>
  </li>

<li class="logout">
  <a href="" class="ms-2">
      <span class="icon"> <svg class="me-4" width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M13.818 3.57691L17.9992 7.60659L13.818 11.606V8.92457H7.5614V6.25832H13.818V3.57691ZM11.3033 11.3333L12.9091 12.9543C11.3336 14.4288 9.62674 15.166 7.78864 15.166C5.59706 15.166 3.75138 14.4414 2.25161 12.9921C0.751838 11.5429 0.00195312 9.73253 0.00195312 7.56115C0.00195312 6.19772 0.345335 4.93529 1.0321 3.77385C1.71886 2.61241 2.64549 1.69588 3.81198 1.02427C4.97846 0.352653 6.24342 0.0168457 7.60685 0.0168457C9.46515 0.0168457 11.2275 0.764206 12.8939 2.25893L11.3033 3.86474C10.1519 2.8144 8.92483 2.28923 7.622 2.28923C6.11718 2.28923 4.84717 2.8144 3.81198 3.86474C2.77678 4.91509 2.25918 6.19772 2.25918 7.71264C2.25918 9.12656 2.79193 10.3435 3.85742 11.3636C4.92292 12.3836 6.17273 12.8937 7.60685 12.8937C8.92988 12.8937 10.162 12.3735 11.3033 11.3333Z" fill="black"/>
          </svg>
         </span>
      <span class="title txtcl">Log Out</span>
  </a>
</li>
   </ul>
  </div>
  
        <div class="main">
            <div class="topbar navtop">
              <div>
                <div class="toggle" onclick="toggleMenu(); myFunction()">
                    
                </div>
              </div>
              <div class="d-flex" style="margin-left: auto;">
            
              </div>
              <!-- <div class="dropdown me-4">
                <a type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="text-decoration: none;">
                    <img src="./public/img/clarity_notification-outline-badged.svg" alt="">
                </a>
                <ul class="dropdown-menu p-4" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item _xnotifi" href="#">Notifications</a></li>
                  <li class="_0kanat mt-4"> <span class="dropdown-item"> <img src="./svg/Tether (USDT).svg" class="mt-3" alt=""> <span class="ms-3 _0xco"> New Sell Trade #156373 from Kelvin <br> <span style="font-size: 12px;color:#6B7280;" class="ms-5">2hrs Ago</span> </span> </span>  </li>
                  <li class="_0kanat mt-4"> <span class="dropdown-item"> <img src="./svg/Tether (USDT).svg" class="mt-3" alt=""> <span class="ms-3 _0xco"> New Sell Trade #156373 from Kelvin <br> <span style="font-size: 12px;color:#6B7280;" class="ms-5">2hrs Ago</span> </span> </span>  </li>
                </ul>
              </div> -->
            </div>

            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-8">
                <h3 class="text-center fw-bold text-white">Edit Course Details</h3>
                </div>
              </div>
              <div class="row justify-content-center  px-lg-5">
                <div class="col-lg-12">
                  
                  <div>
                    <form method="post" action=" {{ route('adminfrontendposts') }} ">
                      @csrf
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label fw-bold text-white">COURSE TITLE</label>
                        <input type="text" name="title" class="form-control text-white border-0" style="background-color: rgb(11,11,61);" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label text-white fw-bold">COURSE DESCRIPTION</label>
                        <input type="text" name="description" class="form-control text-white border-0 fw-bold" style="background-color: rgb(11,11,61);" id="exampleInputPassword1">
                      </div>
                      <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label text-white fw-bold">DURATION</label>
                          <input type="text" name="duration" class="form-control border-0 text-white" style="background-color: rgb(11,11,61);" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label text-white fw-bold">COMMENCEMENT</label>
                          <input type="text" name="commencement" class="form-control border-0 text-white" style="background-color: rgb(11,11,61);" id="exampleInputPassword1">
                        </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                  </div>

                  <div class="text-center">
                    <h3 class="text-white text-center">View All Posts</h3>
                    <table class="table">
                      <thead class="text-white">
                        <tr>
                          <th scope="col">Number</th>
                          <th scope="col">Course Title</th>
                          <th scope="col">Course Description</th>
                          <th scope="col">Duration</th>
                          <th scope="col">Commencement</th>
                          <th scope="col">action</th>
                        </tr>
                      </thead>
                      <tbody class="text-white">
                        @foreach ($details as $detail)
                        <tr>
                          <th scope="row">{{ $detail->id }}</th>
                          <td>{{ $detail->title }}</td>
                          <td>{{ $detail->description }}</td>
                          <td>{{ $detail->duration }}</td>
                          <td> {{ $detail->commencement }} </td>

                          <td> <span> <a href=""   class="btn btn-warning bg-warning" data-bs-toggle="modal" data-bs-target="#exampleModal{{$detail->id}}" style="font-size:13px;">Edit Post</a>
                          
                          <!-- Button trigger modal --><!-- Modal -->
<div class="modal fade" id="exampleModal{{$detail->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="{{ route('adminfrontendupdate', $detail->id) }}"> 
          @csrf
          @method('put')
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label text-dark">Course Title</label>
            <input name="title" type="text" class="form-control text-dark" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $detail->title }}">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label text-dark">Course Description</label>
            <input name="description" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $detail->description }}">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label text-dark">Duration</label>
            <input name="duration" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $detail->duration }}">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label text-dark">Commencement</label>
            <input name="commencement" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $detail->commencement }}">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
                          
                          </span>
                          <form action="{{ route('adminfrontenddelete', $detail->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <span> <button type="submit" class="btn btn-danger bg-danger" style="font-size:13px;">Delete</button></span>
                          </form>
                          </td>
                        </tr>    
                        @endforeach
                      </tbody>
                    </table>
                  </div>

                </div>
              </div>
            </div>
          
           
        </div>

      </div>
  
    </body>


    <script>
      const toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');
  const currentTheme = localStorage.getItem('theme');
  
  if (currentTheme) {
      document.documentElement.setAttribute('data-theme', currentTheme);
    
      if (currentTheme === 'dark') {
          toggleSwitch.checked = true;
      }
  }
  
  function switchTheme(e) {
      if (e.target.checked) {
          document.documentElement.setAttribute('data-theme', 'dark');
          localStorage.setItem('theme', 'dark');
      }
      else {        document.documentElement.setAttribute('data-theme', 'light');
            localStorage.setItem('theme', 'light');
      }    
  }
  
  toggleSwitch.addEventListener('change', switchTheme, false);

  </script>

  
    <script src="{{ asset('./public/js/destiny.js') }}"></script>
    <script src="{{ asset('./public/js/toggle.js') }}"></script>
    <script src="{{ asset('public/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('public/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('public/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('public/js/script.js') }}"></script>
    </html>