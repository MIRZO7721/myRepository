@foreach ($pendingStories as $story)
    <li>
        <a href="{{ route('stories.show', $story->id) }}">{{ $story->title }}</a>
        <!-- Формы для принятия и отклонения истории -->
        <form method="POST" action="{{ route('stories.moderate.action', $story->id) }}" style="display: inline;">
            @csrf
            <input type="hidden" name="action" value="accept">
            <button type="submit" class="btn btn-success">Принять</button>
        </form>
        <form method="POST" action="{{ route('stories.moderate.action', $story->id) }}" style="display: inline;">
            @csrf
            <input type="hidden" name="action" value="reject">
            <button type="submit" class="btn btn-danger">Отклонить</button>
        </form>
    </li>
@endforeach
