<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit Post</h1>
    <form action="/blogs/edit/{{$blog->id}}" method="POST">

    @csrf
    @method('PUT')
    <input type="text" name="blogtitle" value="{{$blog->blog_title}}">
    <textarea name="blogcontent" cols="30" rows="10">{{$blog->blog_content}}</textarea>
    <button>Save Changes</button>




    </form>
</body>
</html>
