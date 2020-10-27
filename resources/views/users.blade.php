<?php //$user="My user defined in users.blade.php </br>";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <x-header data="users Component Header"/>
    <p> Here comes the other header ....that's not a component, it's a view ...</p>
    @include('header-view')
    <h1>User Page</h1>
    <H3>This is the users view</H3>
    <h2><?php echo ($name ??' - name not defined error - ');?></h2>
    <h3>{{$articlePublished ?? '$articlePublished - not defined...'}}</h3>
    <p>I received a paramerters "name" with the value {{$name ?? '$name is undefined ... leider :-))'}}</p>
    
    @for ($i = 0 ; $i<10; $i++)
    <h4>{{$i}}</h4>
    @endfor


    // include an other view*/
    @include('inner'); 

   
    <h1>User Login</h1>
    
    <form action="users" method="POST">
        @csrf
        <input type="text" name="username" placeholder ="Enter UserName">
        @error('username')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="password" name="userpassword" placeholder ="Enter Password">
        @error('userpassword')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <button type="Submit">Submit</button>
        

    </form>

    @if ($errors->any())
        @foreach ($errors->all() as $key => $value)
            <div>{{$key." ".$value}}</div>
        @endforeach
    @endif

   {{dd($errors->all())}}
    
    
</body>
</html>
