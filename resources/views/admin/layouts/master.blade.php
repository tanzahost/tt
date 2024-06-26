<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $general->siteName($pageTitle ?? '') }}</title>

    <link rel="shortcut icon" type="image/png" href="{{getImage(getFilePath('logoIcon') .'/favicon.png')}}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('jun/assets/global/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('assets/admin/css/vendor/bootstrap-toggle.min.css')}}">
    <link rel="stylesheet" href="{{asset('jun/assets/global/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('jun/assets/global/css/line-awesome.min.css')}}">

    @stack('style-lib')

    <link rel="stylesheet" href="{{asset('assets/admin/css/vendor/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/css/app.css')}}">

    @stack('style')
</head>
<body>

@yield('content')

<script src="{{asset('jun/assets/global/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('jun/assets/global/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/admin/js/vendor/bootstrap-toggle.min.js')}}"></script>
<script src="{{asset('assets/admin/js/vendor/jquery.slimscroll.min.js')}}"></script>


@include('partials.notify')
@stack('script-lib')

<script src="{{ asset('assets/admin/js/nicEdit.js') }}"></script>

<script src="{{asset('assets/admin/js/vendor/select2.min.js')}}"></script>
<script src="{{asset('assets/admin/js/app.js')}}"></script>
<script src="{{ asset('assets/admin/js/cu-modal.js') }}"></script>

{{-- LOAD NIC EDIT --}}
<script>
    "use strict";
    bkLib.onDomLoaded(function() {
        $( ".nicEdit" ).each(function( index ) {
            $(this).attr("id","nicEditor"+index);
            new nicEditor({fullPanel : true}).panelInstance('nicEditor'+index,{hasPanel : true});
        });
    });
    (function($){
        $( document ).on('mouseover ', '.nicEdit-main,.nicEdit-panelContain',function(){
            $('.nicEdit-main').focus();
        });

        var redirectPath = @json(\Request::path());
        if(redirectPath != 'admin'){

            var object = {
                expireTime: '{{ Carbon\Carbon::now()->addHours(3) }}',
                redirect: redirectPath,
            }

            localStorage.setItem('redirect', JSON.stringify(object));
        }

        $('.adminLogout').on('click',function(){
            localStorage.removeItem('redirect');
        });

        if($('.topTap').length){
            $('.breadcum-nav-open').removeClass('d-none');
        }

    })(jQuery);
</script>

@stack('script')

</body>
</html>
