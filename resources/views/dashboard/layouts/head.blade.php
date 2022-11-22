
  <head>


<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
<link rel="icon" type="image/png" href="./assets/img/favicon.png">
<link rel="shortcut icon" type="image/jpg" href="{{ URL::asset('assets/img/logo.png') }}"/>
<title>
  

  
Dylanu
  

  
</title>

@if (app()->getLocale() == 'ar')
 <!--     Fonts and icons     -->
 <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
<!-- Nucleo Icons -->
<link href="{{ URL::asset('assets/css_ar/nucleo-icons.css') }}" rel="stylesheet" />
<link href="{{ URL('assets/css_ar/nucleo-svg.css')}}" rel="stylesheet" />
<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
<link href="{{ URL::asset('assets/css_ar/nucleo-svg.css')}}" rel="stylesheet" />
@endif
@if (app()->getLocale() == 'en')
<!--     Fonts and icons     -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
<!-- Nucleo Icons -->
<link href="{{ URL::asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
<link href="{{ URL('assets/css/nucleo-svg.css')}}" rel="stylesheet" />
<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
<link href="{{ URL::asset('assets/css/nucleo-svg.css')}}" rel="stylesheet" />
<!-- CSS Files -->
@endif



<link id="pagestyle" href="{{ URL::asset('assets/css/soft-ui-dashboard.css?v=1.0.5')}}" rel="stylesheet" />


<style>
.outline-none {
  border: 0 !important;
}

</style>


  </head>