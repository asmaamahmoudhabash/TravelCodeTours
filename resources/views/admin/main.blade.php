@include('admin/layouts/header')
@include('admin/layouts/sidebar')

<main class="mn-inner inner-active-sidebar">
    <div class="middle-content">
        @yield('content')
    </div>
</main>


<div class="left-sidebar-hover"></div>
@include('admin/layouts/footer')