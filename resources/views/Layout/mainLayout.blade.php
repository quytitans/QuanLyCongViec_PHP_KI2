<!doctype html>
<html class="fixed">
<head>
 @include('Layout.include.head')
</head>
<body>
<section class="body">
    <!-- start: header -->
    @include('Layout.include.header')
    <!-- end: header -->
    <div class="inner-wrapper">
        <!-- start: sidebar -->
        <aside id="sidebar-left" class="sidebar-left">
            <div class="sidebar-header">
                <div class="sidebar-title">
                    Navigation
                </div>
                <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
                    <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                </div>
            </div>
            <div class="nano">
                @include('Layout.include.leftMenu')
            </div>
        </aside>
        <!-- end: sidebar -->
        <section role="main" class="content-body">
            <header class="page-header">
                <h2>@yield('title')</h2>
            </header>
            <!-- start: page -->
            <div>
                @yield('main')
            </div>
            <!-- end: page -->
        </section>
    </div>
</section>
<!-- Vendor -->
@include('Layout.include.scriptFoot')
@yield('pageScript')
</body>
</html>
