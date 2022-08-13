<!-- ======= #main ======= -->
<main id="main" class="main">

    <div class="pagetitle">
        <h1>@yield('page-title')</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item active">@yield('page-title')</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <!-- ======= Section ======= -->
    @yield('main-section')
    <!-- End Section -->

</main><!-- End #main -->