<h2>Search Results for "{{ $searchQuery }}"</h2>

@if ($posts->isEmpty())
    <p>No results found.</p>
@else
    <ul>
        @foreach ($posts as $post)
            <li>{{ $post->title }}</li>
        @endforeach
    </ul>
@endif
