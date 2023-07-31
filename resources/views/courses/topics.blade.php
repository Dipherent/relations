<form action="{{route('courses.topics.store', $course)}}" method="POST">

    @csrf

    <select name="topic_id">
        @foreach ($topics as $topic)
             <option value="{{$topic->id}}">{{$topic->title}}</option>
        @endforeach
    </select>

    <button type="submit">Attach</button>
</form>