<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="{!! asset(mix('css/app.css', 'website')) !!}">
    @stack('headcss')


</head>
<body>

<style>
    .tt{

        width: 80vw;
        position: fixed;
        margin-left: -40vw;
        top: 0;
        left: 50%;
        text-align: center;
        vertical-align: center;
        padding: 0.2rem 1rem 0;
        border-style: solid;
        border-width: 2px;
        border-top: none;
        z-index: 100;
        transform: translateY(-100%);
        transition: all 1s ease-out;
        border-bottom-left-radius: 5rem;
        border-bottom-right-radius: 5rem;
    }

    .tt-in{
        transform: translateY(0%);
    }

    .tt-out{
        transform: translateY(-100%);
       
    }

    .tt-success{
        background-color: greenyellow;
        color:  green;
        border-color: green;
    }

    .tt-warn{
        background-color: yellow;
        color:  orange;
        border-color: orange;
    }

    .tt-danger{
        background-color: red;
        color:  darkred;
        border-color: darkred;
    }
</style>


@yield('body')


<script src="{!! asset(mix('js/app.js', 'website')) !!}"></script>

<script>
    $(document).ready(function () {
        setTimeout(function () {
            $('.tt').addClass('tt-in');
            setTimeout(function () {
                $('.tt').removeClass('tt-in').addClass('tt-out');
            }, 2500);
        }, 1000);

    });
</script>

@stack('scripts')
</body>
</html>
