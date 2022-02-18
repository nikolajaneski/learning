<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


    @if(strlen($user['firstName']) > 4)
        Hello {{ $user['firstName'] }} , I am test view. <Br /> 
    @endif
    

    @unless(strlen($user['firstName']) > 4)
        Hello {{ $user['firstName'] }} , I am test view. <Br /> 
    @endunless

    {{-- <li>Home</li>
        <li>About</li>
        <li>Contact</li>
    @guest
        <li> Login </li>
        <li> Register </li>
    @endguest --}}


    @if(!empty($products))
        @foreach($products as $key => $value)
                {{ $value }} <br />
        @endforeach
    @else 
        There is no product yet.
    @endif

    @forelse($products as $key => $value) 
            {{ $value }} <br />
    @empty
            There is no product yet.
    @endforelse
            
    <br> <br>

    @foreach($products as $key => $value)
        @if ($loop->even)
            {{ $value }}
        @endif 
    @endforeach
    

</body>
</html>