<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
<title>Machine Search</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<div class="container">
<img class="logo" src="{{ asset('images/Machinesearchlogo-1536x131.webp') }}" alt="description of myimage"></img><br>
<form class="search-bar" action="{{ route('simple_search') }}" method="GET">

<input type="text"  placeholder="Search Machines" aria-describedby="basic-addon2" name="search">
<div class="input-group-append">
<button type="submit"><i class="fa fa-search"></i></button>


</div>
</div>

</form>

</body>

</html>

