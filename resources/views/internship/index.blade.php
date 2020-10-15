{{-- LIST OF INTERNSHIPS --}}

    <h1>Internships</h1>

    <ul>
        @foreach ($internships as $internship)
            <li><a href="/internship/{{$internship->id}}">{{$internship->title}}</a></li>
        @endforeach

    </ul>

    <input type="submit" value="Apply">

    <footer>Copyright Appli</footer>
</body>
</html>

