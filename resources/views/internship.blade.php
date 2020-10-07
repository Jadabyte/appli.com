<h1>{{ $title }}</h1>

<ul>
    @foreach{$informations as $information}
        <li>{{ $information }}</li>
    @endforeach
</ul>