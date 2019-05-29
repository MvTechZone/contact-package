<!DOCTYPE html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
</head>
<body>
<div class="row">
    <h1 class="text-center">Contact Us Any Time</h1>
    <form action="{{ route('contact') }}" method="post">
        @csrf
        <input type="text" name="name" id="name" placeholder="Your name...">
        <input type="email" name="email" id="email" placeholder="Your valid email...">
        <textarea name="message" cols="30" rows="10" placeholder="Your query..."></textarea>
        <button type="submit">Submit</button>
    </form>
</div>
</body>
</html>
