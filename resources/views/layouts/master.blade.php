<!DOCTYPE html>
<html lang="en">

<head>

    @include('layouts.partials.head')

</head>

<body id="page-top">

    @include('layouts.partials.navigation')

    @yield('content')

</body>

@include('layouts.partials.script')

</html>