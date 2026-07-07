<!DOCTYPE html>
<html lang="en">

<head>

    @include('partials.head')
</head>

<body id="bg">

    <div class="page-wraper">

        @include('partials.header')

        <main>
            @yield('content')
        </main>

        @include('partials.footer')

    </div>

    @include('partials.scripts')


    @stack('scripts')


</body>
<button class="back-to-top fa fa-chevron-up"></button></div>

</html>