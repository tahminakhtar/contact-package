<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
</head>
<body>
    <h2>Contact Form</h2>
<form method="post" action="{{route('contact')}}">
        @csrf
        <input type="text" name="name" placeholder="Name">
        <input type="email" name="email" placeholder="Name">
        <textarea name="message"  cols="30" rows="10" placeholder="Query"></textarea>
        <input type="submit" value="submit">
    </form>
</body>
</html>