<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

@foreach($returnarry as $value)
<h3>{{$value->name}}</h3>
<p>{{$value->description}}</p>
@endforeach

</body>
</html>