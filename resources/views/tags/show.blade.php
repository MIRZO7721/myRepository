@section('content')
    <div class="container">
        <h1 class="mt-5 mb-4">Детали метки</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Название метки: {{ $tag->name }}</h5>
                <a href="{{ route('tags.index') }}" class="btn btn-primary">Назад к списку меток</a>
            </div>
        </div>
    </div>
@endsection

