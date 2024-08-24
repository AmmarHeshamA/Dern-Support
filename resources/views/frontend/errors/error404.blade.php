<!DOCTYPE html>
<html>

<!-- head -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no" />
    <title>
        Error Page
    </title>
    <link rel="icon" href="{{ asset('./assets/images/service/logo-title.png') }}" type="image/icon type">

    <link href="{{ asset('./assets/animate.css/animate.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('./assets/fontawesome/css/all.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('./assets/chosen/chosen.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('./assets/jquery-ui-custom/jquery-ui.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('./assets/pentix/css/pentix.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('./assets/css/pex-theme.min.css') }}" rel="stylesheet" type="text/css" />
</head>



<!-- body -->

<body class="body loader-loading">
    <section class="text-center content-section">
        <div class="container mx-auto my-auto">
            <img class="image offs-md" src="{{ asset('./assets/images/error/404.png') }}" alt=""
                data-inview-showup="showup-scale" />
            <div class="section-head text-center container-md">
                <h2 class="section-title text-upper text-lg" data-inview-showup="showup-translate-right">
                    Error
                </h2>
                <p data-inview-showup="showup-translate-left" class="text-danger">
                    {{ $errorMessage }}
                </p>
            </div>
            <a class="btn text-upper" href="/home" data-inview-showup="showup-translate-up">back to homepage</a>
        </div>
    </section>
</body>

</html>
