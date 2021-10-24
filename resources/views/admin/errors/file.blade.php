<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Agency - Erreur</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/faviicon.png">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">

    </head>


    <body>

        <!-- Begin page -->
        <div class="accountbg"></div>
        <div class="wrapper-page">

            <div class="card">
                <div class="card-block">

                    <div class="ex-page-content text-center">
                        <h1 class="">Oup!</h1>
                        <h3 class="">{{ session('photo') }}</h3><br>

                        <a class="btn btn-info mb-5 waves-effect waves-light" href="{{ route('sliders.create') }}">Réessayer</a>
                        <a class="btn btn-danger mb-5 waves-effect waves-light" href="{{ route('sliders.index') }}">Retour</a>
                    </div>

                </div>
            </div>
        </div>


    </body>
</html>
