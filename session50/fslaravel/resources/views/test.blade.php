<h1>toha</h1>
<h1>{{$data}}</h1>
<ul>
@foreach($users as $user)

    <li>{{$user->name}}</li>

@endforeach
</ul>