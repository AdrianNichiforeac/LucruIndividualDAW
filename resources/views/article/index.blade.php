
<x-app-layout>
<div class="container mt-5">
        <div class="row">
            <div class="article__links">
                <a class="btn btn-info text-white" href="{{ route('article.create')}}">Adauga articol</a>
            </div>
            @foreach ($articles as $article)
                <div class="col-md-4 mb-4">
                    <div class="card">
                    <h5 class="card-title">{{ $article->title }}</h5>
                    <label for="card-text">{{ $article->description }}</label>
                        <img src="{{ $article->image }}" class="card-img-top" alt="{{ $article->title }}">
                        <div class="card-body">
                            <p class="card-text">{{ $article->content }}</p>
                            <a href="{{ route('article.edit', $article->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('article.destroy', $article->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
</div>
</x-app-loyaut>