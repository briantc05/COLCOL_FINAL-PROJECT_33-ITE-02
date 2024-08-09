<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @auth
        <p>Congrats, you are logged in. </p>
        <form action="/logout" method="POST">
        @csrf
        <button>Log Out</button>
        </form>

        <div style="border: 3px solid black;">
            <h2>Create A New Blog</h2>
            <form action="/blogs/create" method="POST">

                @csrf
                <input type="text" name="blogtitle" placeholder="Title">
                <textarea name="blogcontent" placeholder="Place your blog content..."></textarea>
                <button>Create Blog</button>

            </form>




    @endauth
    </form>
</body>
</html>
