<table border="1" width="80%">
    <thead>
        <tr>
            <th>Id</th>
            <th>title</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->status}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
