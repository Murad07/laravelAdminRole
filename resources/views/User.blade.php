<a href="/"><h4>Home</h4></a>
<a href="/practice"><h4>Practice Home</h4></a>
<h1>{{$user}}</h1>

@if($user=='Murad')
<h3>Hi {{$user}}</h3>
@elseif($user=='Araf')
<h3>Hello {{$user}}</h3>
@endif