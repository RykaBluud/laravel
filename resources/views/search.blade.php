<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
<title>Machine Search</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container-search">
<a align="center" href="/">
<img class="logo-search" src="{{ asset('images/Machinesearchlogo-1536x131.webp') }}" alt="description of myimage"></img></a><br>
<form class="search-bar"action="{{ route('simple_search') }}" method="GET">
<input type="text" class="form-control" placeholder="" aria-describedby="basic-addon2" name="search">
<div class="input-group-append">
<button type="submit"><i class="fa fa-search"></i></button></div>
</div>
</form>

</div>

<div class="box">
@foreach($data as $machine)
<ul>
<li class="c-listing-card"><a href={{$machine->url}}><img class="image-column " src= {{ $machine->image }}></></a>
<div class="info-column">
    <h3 style="font-weight:bold">{{ $machine->name }}</h3>
    <ul class="card-spec">
    <h4><span style="font-weight:bold;">Manufacturer: </span>{{ $machine->manufacturer }}</h4>
    <h4><span style="font-weight:bold;">Model: </span>{{ $machine->model }}</h4>
    <h4><span style="font-weight:bold;">Millage: </span>{{ $machine->millage }}</h4>
    <h4><span style="font-weight:bold;">Millage: </span>{{ $machine->year }}</h4>
    <h4><span style="font-weight:bold;">Machine condition: </span>{{ $machine->machine_condition }}</h4>
    <h4><span style="font-weight:bold;">Category: </span>{{ $machine->main_category }}</h4>
    <h4><span style="font-weight:bold;">Sub Category: </span>{{ $machine->sub_category }}</h4>

   </ul>
</div>
<div class="cta-column">
    <div>{{ $machine->price }}</div>
    <div><span><i class="fa fa-map-marker"></i><span> {{ $machine->location }}</div>
    <a href="{{ $machine->url }}" class="c-button">Click to Contact Seller</a>
</div>
</li>
</ul>
@endforeach
{{ $data->appends(request()->except('page'))->links() }}
</div>
</div>
</div>
</div>

</body>
</html>

