<!DOCTYPE html>
<html lang="fr">
<head>
<title>aStar</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="aStar Fashion Template Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
@include('layouts.css')
</head>
<body>

<div class="super_container">

	<!-- Header -->

@include('layouts.admins.menu')

@yield('content')



@include('layouts.admins.footer')

</div>
@include('layouts.js')
</body>
</html>
