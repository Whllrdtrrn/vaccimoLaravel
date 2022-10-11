
<!DOCTYPE html>
<html>
<head>
	@include('frontend._components.metas')
	@include('frontend._components.styles')
	@yield('page-styles')
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	

</head>

<body class="hold-transition login-page bg-primary">
	
	@yield('content')

@include('frontend._components.scripts')
@yield('page-scripts')
</body>
</html>