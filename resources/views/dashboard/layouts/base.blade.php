<!DOCTYPE html>
<html dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">

@include('dashboard.layouts.head')

<body class="g-sidenav-show  bg-gray-100">

    @include('dashboard.layouts.sidenav')

    <main class="main-content border-radius-lg ">

        @include('dashboard.layouts.nav')

        <div class="container-fluid py-4">

            @if(Session::has('success'))
            <div class="alert alert-success text-center" id="alert">
                <strong>Success:</strong> {{Session::get('success')}}
            </div>
            @elseif(session('error'))
            <div class="alert alert-danger text-center" id="alert">

                <strong>Error:</strong>{{Session::get('error')}}
            </div>
            @endif

            @yield('content')

            @include('dashboard.layouts.footer')

        </div>
    </main>
    @include('dashboard.layouts.scripts')
</body>

</html>