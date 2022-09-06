@include('test.layouts.header')
<div class="row">
    <div class="col-md-3">
        @include('test.layouts.sidebar')
    </div>
    <div class="col-md-9">
        @yield('content')
    </div>

</div>
@include('test.layouts.footer')