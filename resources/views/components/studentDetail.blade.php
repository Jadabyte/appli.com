    @foreach ($qualities as $quality)
        <li>{{$quality}}</li>
    @endforeach


    <div class="card-group">
        <div class="card">
            <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <h3 class="card-title">Student 1</h3>
                    <h4 class="card-title"><h5>{{$category}}</h5></h4>
                    <p class="card-text"><h5>{{$description}}</h5></p>
                    <p class="card-text"><h5>{{$motivation}}</h5></p>
                    <p class="card-text"><h5>{{$portfolio}}</h5></p>
                    <a href="">More</a>
                </div>
        </div>

