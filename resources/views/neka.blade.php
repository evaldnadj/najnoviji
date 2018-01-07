
<html>
<body>
<p> Niz izgleda: </p>
<un>
@foreach ($niz as $clan)
    <li>{{$clan}}</li>
@endforeach
</un>
@foreach ($niz as $clan)
    <a href = 'kon/1'>{{$clan}}</a>
@endforeach
</body>
</html>

