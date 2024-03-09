<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>E-commerce Website</title>
	<!-- style link file start here -->
	@include('frontend.includes.style')
	<!-- style link file start here -->

</head>
<body>
	<!-- Header include file start here -->
	@include('frontend.includes.header')
	<!-- Header include file end here -->
    <main>
        @yield('content')
	</main>

	<!-- Footer include file start here -->
	@include('frontend.includes.footer')
	<!-- Footer include file end here -->

	<!-- script include file start here -->
	@include('frontend.includes.script')
	<!-- script include file end here -->

    @stack('script')
</body>
</html>