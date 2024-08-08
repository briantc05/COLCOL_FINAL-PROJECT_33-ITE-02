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
        </div>
        <div style="border: 3px solid black;">
            <h2>ALL BLOGS</h2>
            @foreach ($blogs as $blog)
            <div style="background-color: gray; padding: 10px; margin: 10px;"></div>
            <h3>{{ $blog['blog_title'] }} by {{$blog->user->name}} </h3>
            <h5> Created at {{ date('jS M Y', strtotime($blog->created_at)) }} </h5>
            {{ $blog['blog_content']}}
            <p><a href="/blogs/edit/{{ $blog->id}}">Edit</a></p>
            <form action="/blogs/delete/{{ $blog->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button>Delete</button>
            </form>
        </div>
            @endforeach



    @else
    <div style="border: 3px solid black;">
        <p> Register</p>
        <form action="/register" method="POST">
            @csrf
            <input name="name" type="text" placeholder="name">
            <input name ="email" type="text" placeholder="email">
            <input name = "password" type="password" placeholder="password">
            <button>Register</button>
        </form>





    <div style="border: 3px solid black;">
        <p> Login</p>
        <form action="/login" method="POST">
            @csrf
            <input name ="loginemail" type="text" placeholder="email">
            <input name = "loginpassword" type="password" placeholder="password">
            <button>Login</button>
        </form>
    </div>
    @endauth

</body>
</html>
