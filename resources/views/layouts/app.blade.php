<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

{{-- Head --}}
@include('layouts.partials.head')

<body>
    <div class="account-pages my-5 pt-sm-5">
        @yield('content')
    </div>

    {{-- Scripts --}}
    @include('layouts.partials.script')
</body>

</html>
