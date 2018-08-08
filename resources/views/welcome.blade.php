<h1>Hello: </h1>


    @foreach ($users as $user)

    <h2>{{ $user->name }}</h2>

    <h3>{{ $user->email }}</h3>

    @endforeach

