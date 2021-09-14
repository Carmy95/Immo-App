<!DOCTYPE html>
<html lang="fr">
<head>
<title>myHOME</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="myHOME - real estate template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
@include('layouts.sites.css')
</head>
<body>

<div class="super_container">
	<div class="super_overlay"></div>

    @include('layouts.sites.menu')

	<!-- Home -->
    @yield('content')


    @include('layouts.sites.footer')

</div>

@include('layouts.sites.js')
</body>
</html>
