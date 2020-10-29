<section>
<form id="createForm" method="POST" action="/internship">
    @csrf

    <div class="form-group" id="createFormGroup">
        <label for="title">Internship title</label>
        <input class="form-control item" type="text" id="title" placeholder=" Title internship">
    </div>

    <div class="form-group" id="createFormGroup">
        <label for="description">Description of internship</label>
        <textarea class="form-control descInput" rows="10" placeholder="Description of internship" id="description"></textarea>
    </div>

    <div class="form-group dropdown" id="createFormGroup">
            <div class="form-group">
            <label for="category">Category</label>
            <select class="form-control descInput" placeholder="Category" id="category">
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
            <select class="form-control descInput" placeholder="Timeperiod" id="internshipPeriod">
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
            <select multiple class="form-control descInput" id="multipleDrop" placeholder="Skills" id="skills">
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
            <select  class="form-control descInput" placeholder="Availability" id="availability">
                <option value="available" selected>Available</option>
                <option value="unavailable">Unavailable</option>
            </select>
            </div>
    <button class="btn btn-primary btn-block" id="buttonCreate" type="submit" style="margin-left:12%">Add internship</button></div>
</form>
</section>
