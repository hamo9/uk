<!DOCTYPE html>
@if (App::getLocale() == 'ar')
    <html lang="ar" dir="rtl">
@else
    <html lang="en">
@endif

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ __('home.siteName') }} | @yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/new/logo.jpeg" rel="icon">
    <link href="assets/img/new/logo.jpeg" rel="apple-touch-icon">

    <base href="/public">

    <!-- Vendor CSS Files -->
    <link href="user/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="user/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="user/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="user/assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="user/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="user/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="user/assets/vendor/simple-datatables/style.css" rel="stylesheet">


    @if (App::getLocale() == 'ar')
        {{-- for arabic font --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500&display=swap" rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css"
            integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
        <link href="user/assets/css/rtl.css" rel="stylesheet" />
    @else
        <!-- Google Fonts -->
        <link href="https://fonts.gstatic.com" rel="preconnect">
        <link
            href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
            rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="user/assets/css/style.css" rel="stylesheet">
    @endif


</head>


<body>

    @include('user.inc.header')

    @include('user.inc.sidebare')

    @yield('content')


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="user/assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="user/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="user/assets/vendor/chart.js/chart.min.js"></script>
    <script src="user/assets/vendor/echarts/echarts.min.js"></script>
    <script src="user/assets/vendor/quill/quill.min.js"></script>
    <script src="user/assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="user/assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="user/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="user/assets/js/main.js"></script>

</body>

</html>
