@include('backend.layout.header')
<div class="container-fluid page-body-wrapper">
@include('backend.layout.sidebar')

@yield('content')

@include('backend.layout.footer')
