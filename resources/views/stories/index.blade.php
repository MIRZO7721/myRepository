<h1>History</h1>
<ul>
    @foreach($stories as $story)
        <li><a href="{{ route('stories.show', $story->id) }}">{{ $story->title }}</a></li>
    @endforeach
</ul>
