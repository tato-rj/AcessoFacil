<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <meta name="description" content="">

    <title>{{ config('app.name') }}</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
    
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    
    <link href="{{ asset('css/primer.css') }}" rel="stylesheet">

    <script>
        window.app = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    @stack('header')

</head>

<body>
    <div id="app">
        @include('layouts.navbar.bar')
        <main>
            @yield('content')
        </main>
        @include('layouts.footer.layout')
    </div>

@if(session()->has('status'))
@include('components.alerts.success', ['message' => session('status')])
@endif

@if(session()->has('error'))
@include('components.alerts.error', ['message' => session('error')])
@endif

<script src="{{ mix('js/app.js') }}"></script>
<script type="text/javascript">
let $runwayPlane = $('#runway-plane');
let footerHeight = $('#footer-container').height();
let footerYpos = $('footer').offset().top + footerHeight + 100;
$(window).scroll(function() {
    let screenBottom = $(this).scrollTop();
   
    if (screenBottom > footerYpos) {
        $runwayPlane.css('left', '70%');
    } else {
        $runwayPlane.css('left', '-20%');        
    }
});
</script>
@stack('scripts')
</body>
</html>
