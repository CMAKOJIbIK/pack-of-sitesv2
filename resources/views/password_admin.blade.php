<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form class="password" action="{{route('password_admin')}}" method="post">
    @csrf
    <label for="">
        <input type="text" id="password" name="password" required>
    </label>
    <button onclick="password_admin()">Done!</button>
</form>
<div class="admin_content">
    <div class="title_admin">
        <h1>Private content</h1>
    </div>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis consequuntur cumque ducimus, est libero
        nihil nisi odio omnis porro quasi quidem quod similique veritatis? Aliquam exercitationem in minus quisquam
        tempora. Alias amet consectetur dolores, fugiat fugit illo itaque laboriosam nesciunt non pariatur quam saepe
        sed sunt ut voluptate. Blanditiis, nihil?</p>
</div>
</body>
</html>
