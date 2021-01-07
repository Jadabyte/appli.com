<section style="margin-bottom: 10%">
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
            <div style="margin-right: 3%" class="form-group dropdown" id="createFormGroup">
                <div class="form-group" id="createCategory">
                    <label class="createLabel">Category</label>
                        <select class="form-control descInput" name="category_id">
                            <option value="0">Choose</option>
                            <option value="1">Design</option>
                            <option value="2">Development</option>
                            <option value="3">Hybrid</option>
                        </select>
                    </div>
            </div>

            <div style="margin-right: 3%" class="form-group dropdown" id="createFormGroup">
                    <div class="form-group" id="createTime">
                        <label class="createLabel">Timeperiod</label>
                        <select class="form-control descInput" name="internshipPeriod_id">
                            <option value="0">Choose</option>
                            <option value="1">First trimester</option>
                            <option value="2">Second trimester</option>
                            <option value="3">One year</option>
                        </select>
                    </div>
                </div>

                <div class="form-group dropdown" id="createFormGroup">
                    <div class="form-group" id="createSkills">
                        <label class="createLabel" for="skills">Required skills for internship</label>
                        <select multiple class="form-control descInput" id="multipleDrop" name="skills_id" style="width:80%">
                            <option value="0">Skills</option>
                            <option value="1">Laravel</option>
                            <option value="2">Linux</option>
                            <option value="3">PHP</option>
                            <option value="4">CSS</option>
                            <option value="5">HTML</option>
                            <option value="6">Javascript</option>
                            <option value="7">NodeJS</option>
                            <option value="8">Sass</option>
                            <option value="9">ASP.NET Core</option>
                            <option value="10">React</option>
                            <option value="11">JSON</option>
                            <option value="12">API's</option>
                            <option value="13">Git</option>
                            <option value="14">GitHub</option>
                            <option value="15">VueJS</option>
                            <option value="16">Websockets</option>
                            <option value="17">Gulp</option>
                            <option value="18">Parcel</option>
                            <option value="19">Babel</option>
                            <option value="20">Java</option>
                            <option value="21">MongoDB</option>
                            <option value="22">CMS</option>
                            <option value="23">Drupal</option>
                            <option value="24">Arduino</option>
                            <option value="25">Information Architecture</option>
                            <option value="26">User Interface Design</option>
                            <option value="27">User Experience</option>
                            <option value="28">Sketch</option>
                            <option value="29">Procreate</option>
                            <option value="30">Adobe Illustrator</option>
                            <option value="31">Adobe Photoshop</option>
                            <option value="32">Adobe Indesign</option>
                            <option value="33">Adobe Premiere Pro</option>
                            <option value="34">Adobe XD</option>
                            <option value="35">Wonda</option>
                            <option value="36">Kanban</option>
                            <option value="37">SCRUM</option>
                            <option value="38">Agile</option>
                            <option value="39">Trello</option>
                        </select>
                    </div>
                </div>
            </section>

        <div class="col offset-xl-0" style="text-align:right;">
            <button class="btn btn-primary btnApproved" id="createBtn" style="text-transform:capitalize" type="submit" style="margin-right:5%;">Add Internship</button>
        </div>
    </form>
</div>
</section>
