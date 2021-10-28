<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Relations</title>
    <style>
        div{
            width: 600px;
            height: 800px;
            background: cyan;
        }
        form{
            width: 500px;
            height: 600px;
            margin: 20px;
            background: rgb(255, 1, 234);
        }
        input{
            font-size: 12px;
            padding: 2px;
            margin: 10px; 
        }
    </style>
</head>
<body>
    <div>
        <form action="" method="POST">
            @csrf
            <input type="text" name="user_name" placeholder="enter the name">
            <input type="text" name="post_name" placeholder="enter the post name">
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>