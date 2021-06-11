<!doctype html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>


    <title>{{ config('app.name') }}</title>
</head>

<?php
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$base = "http://" . $host . $uri . "/";
?>

<body>

    <iframe id="iframe"
            title="Inline Frame Example"
            src="<?php echo $base."login" ?>">
    </iframe>

</body>

</html>

<script type="text/javascript">

    $(document).ready(function(){
            var height = $(window).height();
            $('#html').height(height);
            $('#body').height(height);
            $('#iframe').height(height-8);
    });









</script>

<style lang="scss">
    html {
        padding:0px;
    margin:0px;
    }

    body {
        padding: 0px;
        width: 100%;
        margin: 0px;
        background-color: #26a69a;
    }




    @media screen and (max-width:640px) {
        #iframe {
            width: 99%;
            margin-left: 0%;
        }
    }
    @media screen and (max-width:1024px) and (min-width:640px) {
        #iframe {
            width: 80%;
            margin-left: 10%;
        }
    }
    @media screen and (min-width:1024px) {
        #iframe {
            width: 40%;
            margin-left: 30%;
        }
    }




</style>
