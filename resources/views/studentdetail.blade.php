<h1>{{ $title }}</h1>

<ul>
    @foreach{$filters as $filter}
        <li>{{ $filter }}</li>
    @endforeach
</ul>