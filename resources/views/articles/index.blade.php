<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<div class="container">
    <h3 class="text-center my-3">Articles</h3>
    <a class="btn btn-success" href="{{ route('articles.create') }}">Add new article</a>
    <table class="table table-hover">
        <thead>
        <tr>
            <td>#</td>
            <td>Title</td>
            <td>Content</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>
        </thead>
        <tbody>
        @foreach($articles as $article)
            <tr>
                <td>{{ $article->id }}</td>
                <td>{{ $article->title }}</td>
                <td>{{ $article->content }}</td>
                <td>
                    <a href="" class="btn btn-primary">Edit</a>
                </td>
                <td>
                    <a href="" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
