@if (app()->getLocale() == 'en')
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
@endif
@if (app()->getLocale() == 'ar')
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-end me-3 rotate-caret" id="sidenav-main">
@endif
<div class="sidenav-header">
  <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
  <a class="navbar-brand m-0" href="">
    <img src="{{ asset('assets/img/logo.png') }}" class="navbar-brand-img h-100" alt="main_logo">
    <span class="ms-1 font-weight-bold">Dylanu</span>
  </a>
</div>
<hr class="horizontal dark mt-0">

<div class="collapse navbar-collapse  w-auto h-auto h-100" id="sidenav-collapse-main">
  <ul class="navbar-nav">
    


<li class="nav-item mt-3">
<h6 class="ps-4  ms-2 text-uppercase text-xs font-weight-bolder opacity-6">PAGES</h6>
</li>


<li class="nav-item">


<a data-bs-toggle="collapse" href="" class="nav-link " aria-controls="pagesExamples" role="button" aria-expanded="false">
  
    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
      <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <title>office</title> <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF" fill-rule="nonzero"> <g transform="translate(1716.000000, 291.000000)"> <g id="office" transform="translate(153.000000, 2.000000)"> <path class="color-background" d="M12.25,17.5 L8.75,17.5 L8.75,1.75 C8.75,0.78225 9.53225,0 10.5,0 L31.5,0 C32.46775,0 33.25,0.78225 33.25,1.75 L33.25,12.25 L29.75,12.25 L29.75,3.5 L12.25,3.5 L12.25,17.5 Z" opacity="0.6"></path> <path class="color-background" d="M40.25,14 L24.5,14 C23.53225,14 22.75,14.78225 22.75,15.75 L22.75,38.5 L19.25,38.5 L19.25,22.75 C19.25,21.78225 18.46775,21 17.5,21 L1.75,21 C0.78225,21 0,21.78225 0,22.75 L0,40.25 C0,41.21775 0.78225,42 1.75,42 L40.25,42 C41.21775,42 42,41.21775 42,40.25 L42,15.75 C42,14.78225 41.21775,14 40.25,14 Z M12.25,36.75 L7,36.75 L7,33.25 L12.25,33.25 L12.25,36.75 Z M12.25,29.75 L7,29.75 L7,26.25 L12.25,26.25 L12.25,29.75 Z M35,36.75 L29.75,36.75 L29.75,33.25 L35,33.25 L35,36.75 Z M35,29.75 L29.75,29.75 L29.75,26.25 L35,26.25 L35,29.75 Z M35,22.75 L29.75,22.75 L29.75,19.25 L35,19.25 L35,22.75 Z"></path> </g> </g> </g> </g> </svg>
    </div>
  
  <span class="nav-link-text ms-1">Users</span>
</a>

</li>

<li class="nav-item">


<a data-bs-toggle="collapse" href="" class="nav-link " aria-controls="applicationsExamples" role="button" aria-expanded="false">
  
    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
      <svg width="12px" height="12px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <title>settings</title> <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g transform="translate(-2020.000000, -442.000000)" fill="#FFFFFF" fill-rule="nonzero"> <g transform="translate(1716.000000, 291.000000)"> <g transform="translate(304.000000, 151.000000)"> <polygon class="color-background" opacity="0.596981957" points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667"></polygon> <path class="color-background" d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z" opacity="0.596981957"></path> <path class="color-background" d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z"></path> </g> </g> </g> </g> </svg>
    </div>
  
  <span class="nav-link-text ms-1">Categories</span>
</a>


</li>

<li class="nav-item">


<a data-bs-toggle="collapse" href="" class="nav-link " aria-controls="applicationsExamples" role="button" aria-expanded="false">
  
    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
      <svg width="12px" height="12px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <title>settings</title> <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g transform="translate(-2020.000000, -442.000000)" fill="#FFFFFF" fill-rule="nonzero"> <g transform="translate(1716.000000, 291.000000)"> <g transform="translate(304.000000, 151.000000)"> <polygon class="color-background" opacity="0.596981957" points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667"></polygon> <path class="color-background" d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z" opacity="0.596981957"></path> <path class="color-background" d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z"></path> </g> </g> </g> </g> </svg>
    </div>
  
  <span class="nav-link-text ms-1">Questions</span>
</a>


</li>



<li class="nav-item">


<a data-bs-toggle="collapse" href="" class="nav-link " aria-controls="ecommerceExamples" role="button" aria-expanded="false">
  
    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
      <svg class="text-dark" width="12px" height="12px" viewBox="0 0 42 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <title>basket</title> <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g transform="translate(-1869.000000, -741.000000)" fill="#FFFFFF" fill-rule="nonzero"> <g transform="translate(1716.000000, 291.000000)"> <g id="basket" transform="translate(153.000000, 450.000000)"> <path class="color-background" d="M34.080375,13.125 L27.3748125,1.9490625 C27.1377583,1.53795093 26.6972449,1.28682264 26.222716,1.29218729 C25.748187,1.29772591 25.3135593,1.55890827 25.0860125,1.97535742 C24.8584658,2.39180657 24.8734447,2.89865282 25.1251875,3.3009375 L31.019625,13.125 L10.980375,13.125 L16.8748125,3.3009375 C17.1265553,2.89865282 17.1415342,2.39180657 16.9139875,1.97535742 C16.6864407,1.55890827 16.251813,1.29772591 15.777284,1.29218729 C15.3027551,1.28682264 14.8622417,1.53795093 14.6251875,1.9490625 L7.919625,13.125 L0,13.125 L0,18.375 L42,18.375 L42,13.125 L34.080375,13.125 Z" opacity="0.595377604"></path> <path class="color-background" d="M3.9375,21 L3.9375,38.0625 C3.9375,40.9619949 6.28800506,43.3125 9.1875,43.3125 L32.8125,43.3125 C35.7119949,43.3125 38.0625,40.9619949 38.0625,38.0625 L38.0625,21 L3.9375,21 Z M14.4375,36.75 L11.8125,36.75 L11.8125,26.25 L14.4375,26.25 L14.4375,36.75 Z M22.3125,36.75 L19.6875,36.75 L19.6875,26.25 L22.3125,26.25 L22.3125,36.75 Z M30.1875,36.75 L27.5625,36.75 L27.5625,26.25 L30.1875,26.25 L30.1875,36.75 Z"></path> </g> </g> </g> </g> </svg>
    </div>
  
  <span class="nav-link-text ms-1">Answers</span>
</a>


</li>



<li class="nav-item">


<a data-bs-toggle="collapse" href="" class="nav-link " aria-controls="authExamples" role="button" aria-expanded="false">
  
    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
      <svg width="12px" height="12px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <title>document</title> <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF" fill-rule="nonzero"> <g transform="translate(1716.000000, 291.000000)"> <g transform="translate(154.000000, 300.000000)"> <path class="color-background" d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z" opacity="0.603585379"></path> <path class="color-background" d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z"></path> </g> </g> </g> </g> </svg>
    </div>
  
  <span class="nav-link-text ms-1">Articles</span>
</a>


</li>



<li class="nav-item">
<hr class="horizontal dark"/>
<h6 class="ps-4  ms-2 text-uppercase text-xs font-weight-bolder opacity-6">DOCS</h6>
</li>

<li class="nav-item">


<a data-bs-toggle="collapse" href="#basicExamples" class="nav-link " aria-controls="basicExamples" role="button" aria-expanded="false">
  
    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
      <svg width="12px" height="20px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <title>spaceship</title> <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g transform="translate(-1720.000000, -592.000000)" fill="#FFFFFF" fill-rule="nonzero"> <g transform="translate(1716.000000, 291.000000)"> <g transform="translate(4.000000, 301.000000)"> <path class="color-background" d="M39.3,0.706666667 C38.9660984,0.370464027 38.5048767,0.192278529 38.0316667,0.216666667 C14.6516667,1.43666667 6.015,22.2633333 5.93166667,22.4733333 C5.68236407,23.0926189 5.82664679,23.8009159 6.29833333,24.2733333 L15.7266667,33.7016667 C16.2013871,34.1756798 16.9140329,34.3188658 17.535,34.065 C17.7433333,33.98 38.4583333,25.2466667 39.7816667,1.97666667 C39.8087196,1.50414529 39.6335979,1.04240574 39.3,0.706666667 Z M25.69,19.0233333 C24.7367525,19.9768687 23.3029475,20.2622391 22.0572426,19.7463614 C20.8115377,19.2304837 19.9992882,18.0149658 19.9992882,16.6666667 C19.9992882,15.3183676 20.8115377,14.1028496 22.0572426,13.5869719 C23.3029475,13.0710943 24.7367525,13.3564646 25.69,14.31 C26.9912731,15.6116662 26.9912731,17.7216672 25.69,19.0233333 L25.69,19.0233333 Z"></path> <path class="color-background" d="M1.855,31.4066667 C3.05106558,30.2024182 4.79973884,29.7296005 6.43969145,30.1670277 C8.07964407,30.6044549 9.36054508,31.8853559 9.7979723,33.5253085 C10.2353995,35.1652612 9.76258177,36.9139344 8.55833333,38.11 C6.70666667,39.9616667 0,40 0,40 C0,40 0,33.2566667 1.855,31.4066667 Z"></path> <path class="color-background" d="M17.2616667,3.90166667 C12.4943643,3.07192755 7.62174065,4.61673894 4.20333333,8.04166667 C3.31200265,8.94126033 2.53706177,9.94913142 1.89666667,11.0416667 C1.5109569,11.6966059 1.61721591,12.5295394 2.155,13.0666667 L5.47,16.3833333 C8.55036617,11.4946947 12.5559074,7.25476565 17.2616667,3.90166667 L17.2616667,3.90166667 Z" opacity="0.598539807"></path> <path class="color-background" d="M36.0983333,22.7383333 C36.9280725,27.5056357 35.3832611,32.3782594 31.9583333,35.7966667 C31.0587397,36.6879974 30.0508686,37.4629382 28.9583333,38.1033333 C28.3033941,38.4890431 27.4704606,38.3827841 26.9333333,37.845 L23.6166667,34.53 C28.5053053,31.4496338 32.7452344,27.4440926 36.0983333,22.7383333 L36.0983333,22.7383333 Z" opacity="0.598539807"></path> </g> </g> </g> </g> </svg>
    </div>
  
  <span class="nav-link-text ms-1">Basic</span>
</a>

<div class="collapse " id="basicExamples">
  <ul class="nav ms-4 ps-3">
  
    <li class="nav-item ">

      

      <a class="nav-link " data-bs-toggle="collapse" aria-expanded="false" href="#gettingStartedExample">
        <span class="sidenav-mini-icon"> G </span>
        <span class="sidenav-normal"> Getting Started  <b class="caret"></b></span>
      </a>

      <div class="collapse " id="gettingStartedExample">
        <ul class="nav nav-sm flex-column">
          
          <li class="nav-item">
            
            <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/quick-start/soft-ui-dashboard" target="_blank">
              <span class="sidenav-mini-icon text-xs"> Q </span>
              <span class="sidenav-normal"> Quick Start </span>
            </a>
            
          </li>
          
          <li class="nav-item">
            
            <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/license/soft-ui-dashboard" target="_blank">
              <span class="sidenav-mini-icon text-xs"> L </span>
              <span class="sidenav-normal"> License </span>
            </a>
            
          </li>
          
          <li class="nav-item">
            
            <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/overview/soft-ui-dashboard" target="_blank">
              <span class="sidenav-mini-icon text-xs"> C </span>
              <span class="sidenav-normal"> Contents </span>
            </a>
            
          </li>
          
          <li class="nav-item">
            
            <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/build-tools/soft-ui-dashboard" target="_blank">
              <span class="sidenav-mini-icon text-xs"> B </span>
              <span class="sidenav-normal"> Build Tools </span>
            </a>
            
          </li>
          
        </ul>
      </div>

      
    </li>

  
    <li class="nav-item ">

      

      <a class="nav-link " data-bs-toggle="collapse" aria-expanded="false" href="#foundationExample">
        <span class="sidenav-mini-icon"> F </span>
        <span class="sidenav-normal"> Foundation  <b class="caret"></b></span>
      </a>

      <div class="collapse " id="foundationExample">
        <ul class="nav nav-sm flex-column">
          
          <li class="nav-item">
            
            <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/colors/soft-ui-dashboard" target="_blank">
              <span class="sidenav-mini-icon text-xs"> C </span>
              <span class="sidenav-normal"> Colors </span>
            </a>
            
          </li>
          
          <li class="nav-item">
            
            <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/grid/soft-ui-dashboard" target="_blank">
              <span class="sidenav-mini-icon text-xs"> G </span>
              <span class="sidenav-normal"> Grid </span>
            </a>
            
          </li>
          
          <li class="nav-item">
            
            <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/typography/soft-ui-dashboard" target="_blank">
              <span class="sidenav-mini-icon text-xs"> T </span>
              <span class="sidenav-normal"> Typography </span>
            </a>
            
          </li>
          
          <li class="nav-item">
            
            <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/icons/soft-ui-dashboard" target="_blank">
              <span class="sidenav-mini-icon text-xs"> I </span>
              <span class="sidenav-normal"> Icons </span>
            </a>
            
          </li>
          
        </ul>
      </div>

      
    </li>

  
</ul>
</div>


</li>



<li class="nav-item">


<a data-bs-toggle="collapse" href="#componentsExamples" class="nav-link " aria-controls="componentsExamples" role="button" aria-expanded="false">
  
    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
      <svg width="12px" height="12px" viewBox="0 0 46 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <title>customer-support</title> <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g transform="translate(-1717.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero"> <g transform="translate(1716.000000, 291.000000)"> <g transform="translate(1.000000, 0.000000)"> <path class="color-background" d="M45,0 L26,0 C25.447,0 25,0.447 25,1 L25,20 C25,20.379 25.214,20.725 25.553,20.895 C25.694,20.965 25.848,21 26,21 C26.212,21 26.424,20.933 26.6,20.8 L34.333,15 L45,15 C45.553,15 46,14.553 46,14 L46,1 C46,0.447 45.553,0 45,0 Z" opacity="0.59858631"></path> <path class="color-foreground" d="M22.883,32.86 C20.761,32.012 17.324,31 13,31 C8.676,31 5.239,32.012 3.116,32.86 C1.224,33.619 0,35.438 0,37.494 L0,41 C0,41.553 0.447,42 1,42 L25,42 C25.553,42 26,41.553 26,41 L26,37.494 C26,35.438 24.776,33.619 22.883,32.86 Z"></path> <path class="color-foreground" d="M13,28 C17.432,28 21,22.529 21,18 C21,13.589 17.411,10 13,10 C8.589,10 5,13.589 5,18 C5,22.529 8.568,28 13,28 Z"></path> </g> </g> </g> </g> </svg>
    </div>
  
  <span class="nav-link-text ms-1">Components</span>
</a>

<div class="collapse " id="componentsExamples">
  <ul class="nav ms-4 ps-3">
  
    <li class="nav-item ">

      

      
      <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/alerts/soft-ui-dashboard" target="_blank">
        <span class="sidenav-mini-icon"> A </span>
        <span class="sidenav-normal"> Alerts </span>
      </a>
      

      
    </li>

  
    <li class="nav-item ">

      

      
      <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/badge/soft-ui-dashboard" target="_blank">
        <span class="sidenav-mini-icon"> B </span>
        <span class="sidenav-normal"> Badge </span>
      </a>
      

      
    </li>

  
    <li class="nav-item ">

      

      
      <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/buttons/soft-ui-dashboard" target="_blank">
        <span class="sidenav-mini-icon"> B </span>
        <span class="sidenav-normal"> Buttons </span>
      </a>
      

      
    </li>

  
    <li class="nav-item ">

      

      
      <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/cards/soft-ui-dashboard" target="_blank">
        <span class="sidenav-mini-icon"> C </span>
        <span class="sidenav-normal"> Card </span>
      </a>
      

      
    </li>

  
    <li class="nav-item ">

      

      
      <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/carousel/soft-ui-dashboard" target="_blank">
        <span class="sidenav-mini-icon"> C </span>
        <span class="sidenav-normal"> Carousel </span>
      </a>
      

      
    </li>

  
    <li class="nav-item ">

      

      
      <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/collapse/soft-ui-dashboard" target="_blank">
        <span class="sidenav-mini-icon"> C </span>
        <span class="sidenav-normal"> Collapse </span>
      </a>
      

      
    </li>

  
    <li class="nav-item ">

      

      
      <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/dropdowns/soft-ui-dashboard" target="_blank">
        <span class="sidenav-mini-icon"> D </span>
        <span class="sidenav-normal"> Dropdowns </span>
      </a>
      

      
    </li>

  
    <li class="nav-item ">

      

      
      <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/forms/soft-ui-dashboard" target="_blank">
        <span class="sidenav-mini-icon"> F </span>
        <span class="sidenav-normal"> Forms </span>
      </a>
      

      
    </li>

  
    <li class="nav-item ">

      

      
      <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/modal/soft-ui-dashboard" target="_blank">
        <span class="sidenav-mini-icon"> M </span>
        <span class="sidenav-normal"> Modal </span>
      </a>
      

      
    </li>

  
    <li class="nav-item ">

      

      
      <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/navs/soft-ui-dashboard" target="_blank">
        <span class="sidenav-mini-icon"> N </span>
        <span class="sidenav-normal"> Navs </span>
      </a>
      

      
    </li>

  
    <li class="nav-item ">

      

      
      <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/navbar/soft-ui-dashboard" target="_blank">
        <span class="sidenav-mini-icon"> N </span>
        <span class="sidenav-normal"> Navbar </span>
      </a>
      

      
    </li>

  
    <li class="nav-item ">

      

      
      <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/pagination/soft-ui-dashboard" target="_blank">
        <span class="sidenav-mini-icon"> P </span>
        <span class="sidenav-normal"> Pagination </span>
      </a>
      

      
    </li>

  
    <li class="nav-item ">

      

      
      <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/popovers/soft-ui-dashboard" target="_blank">
        <span class="sidenav-mini-icon"> P </span>
        <span class="sidenav-normal"> Popovers </span>
      </a>
      

      
    </li>

  
    <li class="nav-item ">

      

      
      <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/progress/soft-ui-dashboard" target="_blank">
        <span class="sidenav-mini-icon"> P </span>
        <span class="sidenav-normal"> Progress </span>
      </a>
      

      
    </li>

  
    <li class="nav-item ">

      

      
      <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/spinners/soft-ui-dashboard" target="_blank">
        <span class="sidenav-mini-icon"> S </span>
        <span class="sidenav-normal"> Spinners </span>
      </a>
      

      
    </li>

  
    <li class="nav-item ">

      

      
      <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/tables/soft-ui-dashboard" target="_blank">
        <span class="sidenav-mini-icon"> T </span>
        <span class="sidenav-normal"> Tables </span>
      </a>
      

      
    </li>

  
    <li class="nav-item ">

      

      
      <a class="nav-link " href="https://www.creative-tim.com/learning-lab/bootstrap/tooltips/soft-ui-dashboard" target="_blank">
        <span class="sidenav-mini-icon"> T </span>
        <span class="sidenav-normal"> Tooltips </span>
      </a>
      

      
    </li>

  
</ul>
</div>


</li>



<li class="nav-item">



<a class="nav-link" href="https://github.com/creativetimofficial/ct-soft-ui-dashboard-pro/blob/main/CHANGELOG.md" target="_blank">

  
    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center  me-2 d-flex align-items-center justify-content-center">
      <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <title>credit-card</title> <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero"> <g transform="translate(1716.000000, 291.000000)"> <g transform="translate(453.000000, 454.000000)"> <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path> <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path> </g> </g> </g> </g> </svg>
    </div>
  
  <span class="nav-link-text ms-1">Changelog</span>
</a>


</li>



      

    

    


  </ul>
</div>
<div class="sidenav-footer mx-3 mt-3 pt-3">
  <div class="card card-background shadow-none card-background-mask-secondary" id="sidenavCard">
    <div class="card-body text-start p-3 w-100">
      <div class="icon icon-shape icon-sm bg-white shadow text-center mb-3 d-flex align-items-center justify-content-center border-radius-md">
        <i class="ni ni-diamond text-dark text-gradient text-lg top-0" aria-hidden="true" id="sidenavCardIcon"></i>
      </div>
      <div class="docs-info">
        
        <h6 class="text-white up mb-0">Need help?</h6>
        <p class="text-xs font-weight-bold">Please check our docs</p>
        <a href="https://www.creative-tim.com/learning-lab/bootstrap/overview/soft-ui-dashboard" target="_blank" class="btn btn-white btn-sm w-100 mb-0">Documentation</a>
        
      </div>
    </div>
  </div>
  
</div>
</aside>