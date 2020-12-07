<section>
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
        <div class="container" id="containerCreate">
            <div id="createExplain" class="block-heading">
                <h1 class="nameStudent headerOne">Create Internship</h1>
                <p>Here you can create a new internship and post it on the general page for the students to see.</p>
            </div>

            <form id="createForm">
                <div class="form-group" id="createFormGroup">
                    <label for="description">Company name</label>
                    <textarea class="form-control descInput" rows="1" placeholder="Companyname" id="company_id" name="company_id"></textarea>
                </div>

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
                            <select class="form-control descInput" >
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

                    <div class="form-group dropdown" id="createFormGroup">
                        <form class="form-inline createGrid">
                            <div class="form-group" id="createAvailable">
                                <label class="createLabel">Internship is available</label>
                                <select  class="form-control descInput" >
                                    <option value="available" selected>Available</option>
                                    <option value="unavailable">Unavailable</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </section>

                <button class="btn btn-primary btn-block btn" id="createBtn" type="submit">Add internship</button>
            </form>
        </div>
{{--





    <div class="form-group dropdown" id="createFormGroup">
            <div class="form-group">
            <label for="category">Category</label>
            <select class="form-control descInput" placeholder="Category" id="category" name="category_id">
                <option>Choose</option>
                <option value="1">Design</option>
                <option value="2">Development</option>
                <option value="3">Hybrid</option>
            </select>
            </div>
    </div>

    <div class="form-group dropdown" id="createFormGroup">
            <div class="form-group">
            <label for="internshipPeriod_id">Timeperiod</label>
            <select class="form-control descInput" placeholder="Timeperiod" id="internshipPeriod" name="internshipPeriod_id">
                <option>Choose</option>
                <option value="1">First trimester</option>
                <option value="2">Second trimester</option>
                <option value="3">One year</option>
            </select>
            </div>
    </div>

    <div class="form-group dropdown" id="createFormGroup">
            <div class="form-group">
            <label for="skills">Required skills for internship</label>
            <select multiple class="form-control descInput" id="multipleDrop" placeholder="Skills" id="skills" name="skills_id">
                <option value="1">Laravel</option>
                <option value="2">Linux</option>
                <option value="3">PHP</option>
                <option value="4">CSS</option>
                <option value="5">HTML</option>
                <option value="6">JavaScript</option>
                <option value="7">NodeJS</option>
                <option value="8">Sass</option>
                <option value="9">ASP.NET Core</option>
                <option value="10">React</option>
                <option value="11">React Native</option>
                <option value="12">JSON</option>
                <option value="13">API's</option>
                <option value="14">Git</option>
                <option value="15">GitHub</option>
                <option value="16">VueJS</option>
                <option value="17">Websockets</option>
                <option value="18">Gulp</option>
                <option value="19">Parcel</option>
                <option value="20">Babel</option>
                <option value="21">Java</option>
                <option value="22">MongoDB</option>
                <option value="23">Wordpress</option>
                <option value="24">Drupal</option>
                <option value="25">Arduino</option>
                <option value="26">Information Architecture</option>
                <option value="27">User Interface Design</option>
                <option value="28">User Experience</option>
                <option value="29">Sketch</option>
                <option value="30">Figma</option>
                <option value="31">Procreate</option>
                <option value="32">Adobe Illustrator</option>
                <option value="33">Adobe Photoshop</option>
                <option value="34">Adobe Indesign</option>
                <option value="35">Adobe Premiere Pro</option>
                <option value="36">Adobe XD</option>
                <option value="37">Wonda</option>
                <option value="38">Kanban</option>
                <option value="39">SCRUM</option>
                <option value="40">Agile</option>
                <option value="41">Trello</option>
            </select>
            </div>
    </div>

    <div class="form-group dropdown" id="createFormGroup">
            <div class="form-group">
            <label for="availability">Internship is available</label>
            <select  class="form-control descInput" placeholder="Availability" id="availability" name="availability">
                <option value="available" selected>Available</option>
                <option value="unavailable">Unavailable</option>
            </select>
            </div>
    <button class="btn btn-primary btn-block" id="buttonCreate" type="submit" style="margin-left:12%">Add internship</button></div>
</form> --}}
</section>
