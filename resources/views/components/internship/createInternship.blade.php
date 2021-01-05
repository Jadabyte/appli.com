<section>
    <div class="container" id="containerCreate">
        <div id="createExplain" class="block-heading">
            <h1 class="nameStudent headerOne">Create Internship</h1>
                <p>Here you can create a new internship and post it on the general page for the students to see.</p>
        </div>

        <form id="createForm" method="POST" action="/internship/create">
        @csrf
            @if( $flash = session('message') )
                <div class="alert alert-success">{{ $flash }}</div>
            @endif

            @if( $flash = session('error') )
                <div class="alert alert-danger">{{ $flash }}</div>
            @endif

            @if( $errors->any())
                <ul class="alert alert-danger">
                    @foreach($errors->all() as $e)
                        <li>{{ $e }}</li>
                    @endforeach
                </ul>
            @endif

        <div class="form-group" id="createFormGroup">
            <label for="title">Internship title</label>
            <input class="form-control item" type="text" id="title" placeholder=" Title internship" name="title">
        </div>

        <div class="form-group" id="createFormGroup">
            <label for="description">Description of internship</label>
            <textarea class="form-control descInput" rows="10" placeholder="Description of internship" id="description" name="description"></textarea>
        </div>

        <section class="grid">
            <div class="form-group dropdown" id="createFormGroup">
                <form class="form-inline createGrid">
                <div class="form-group" id="createCategory">
                    <label class="createLabel">Category</label>
                        <select class="form-control descInput">
                            <option>Choose</option>
                            <option>Design</option>
                            <option>Development</option>
                            <option>Hybrid</option>
                        </select>
                    </div>
                </form>
            </div>

            <div class="form-group dropdown" id="createFormGroup">
                <form class="form-inline createGrid">
                    <div class="form-group" id="createTime">
                        <label class="createLabel">Timeperiod</label>
                        <select class="form-control descInput" >
                            <option>Choose</option>
                            <option>First trimester</option>
                            <option>Second trimester</option>
                            <option>One year</option>
                        </select>
                    </div>
                </form>
                </div>

                <div class="form-group dropdown" id="createFormGroup">
                    <form class="form-inline createGrid">
                    <div class="form-group" id="createSkills">
                        <label class="createLabel" for="skills">Required skills for internship</label>
                        <select multiple class="form-control descInput" id="multipleDrop" style="width:80%">
                            <option>Skills</option>
                            <option>Laravel</option>
                            <option>Linux</option>
                            <option>PHP</option>
                            <option>CSS</option>
                            <option>HTML</option>
                            <option>Javascript</option>
                            <option>NodeJS</option>
                            <option>Sass</option>
                            <option>ASP.NET Core</option>
                            <option>React</option>
                            <option>JSON</option>
                            <option>API's</option>
                            <option>Git</option>
                            <option>GitHub</option>
                            <option>VueJS</option>
                            <option>Websockets</option>
                            <option>Gulp</option>
                            <option>Parcel</option>
                            <option>Babel</option>
                            <option>Java</option>
                            <option>MongoDB</option>
                            <option>CMS</option>
                            <option>Drupal</option>
                            <option>Arduino</option>
                            <option>Information Architecture</option>
                            <option>User Interface Design</option>
                            <option>User Experience</option>
                            <option>Sketch</option>
                            <option>Procreate</option>
                            <option>Adobe Illustrator</option>
                            <option>Adobe Photoshop</option>
                            <option>Adobe Indesign</option>
                            <option>Adobe Premiere Pro</option>
                            <option>Adobe XD</option>
                            <option>Wonda</option>
                            <option>Kanban</option>
                            <option>SCRUM</option>
                            <option>Agile</option>
                            <option>Trello</option>
                        </select>
                    </div>
                    </form>
                </div>
            </section>

        <div class="col offset-xl-0" style="text-align:right;">
            <button class="btn btn-primary btnApproved" id="createBtn" type="submit" style="margin-right:5%;">Add Internship</button>
        </div>
    </form>
</div>
</section>
