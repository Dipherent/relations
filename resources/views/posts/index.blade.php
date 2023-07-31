<form action="/posts" method="post">

    @csrf

    <textarea name="body" id="body" cols="30" rows="10">
    </textarea>

            <button type="submit"> Post </button>

</form>

<div>
    @foreach ($posts as $post )

    <div>
        {{$post->id}}: {{$post->body}}
    </div>

    @can('delete', $post)

        <form action="/posts/{{$post->id}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
        
    @endcan
    
        
    @endforeach
</div>