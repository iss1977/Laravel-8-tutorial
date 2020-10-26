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
    <h1>User Page</h1>
    <H3>This is the users view</H3>
    <h2><?php echo ($name ??' - name not defined error - ');?></h2>
    <h3>{{$articlePublished ?? '$articlePublished - not defined...'}}</h3>
    <p>I received a paramerters "name" with the value {{$name ?? '$name is undefined ... leider :-))'}}</p>
</body>
</html>
