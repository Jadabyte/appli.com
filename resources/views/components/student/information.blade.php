<section>
    <h3 class="headerThree" style="margin-top:2%">Information</h3>
        <div class="profileForm" style="margin-top:30%">
            <form class="profileContainer" method="post" action="">
                <div class="form-row" style="margin-top:-5%">
                    <div class="col">
                        <div class="form-group" style="color:#011C3A;">
                            <label for="firstName" class="profileFieldLabel">Firstname</label>
                            <input class="form-control profileGroup" type="text" name="firstName" placeholder="Firstname" value="{{ $user->firstName }}">
                        </div>
                        <div class="form-group" style="color: #011C3A;">
                            <label for="lastName" class="profileFieldLabel">Lastname</label>
                            <input class="form-control profileGroup" type="text" name="lastName" placeholder="Lastname" value="{{ $user->lastName }}">
                        </div>
                        <div class="form-group" style="color: #011C3A;">
                            <label for="mobile" class="profileFieldLabel">Mobile phone</label>
                            <input class="form-control profileGroup" type="tel" name="mobile" placeholder="Mobile phone" value="@isset($user->student->mobile){{ $user->student->mobile }}@else{{ old('mobile') }}@endisset">
                        </div>
                    </div>

                    <div class="col">
                        <div class="avatar">
                            <div class="avatar-bg center" style="margin-left:35%;"></div>
                                <div style="margin-top:1%; color: #011C3A;">
                                    <label for="picture" class="profileFieldLabel">Profile picture</label>
                                    <input type="file" class="form-control" name="picture" style="color: #011C3A;" aria-describedby="fileHelp">
                                    <p class="infoSearch" id="fileHelp" class="form-text text-muted">Please upload a valid image file. Size of image should not be more than 2MB.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col">
                            <div class="form-group" style="color: #011C3A;">
                                <label for="biography" class="profileFieldLabel">Biography</label>
                                <input class="form-control profileGroup" type="text" name="biography" placeholder="Biography">@isset($user->student->biography){{ $user->student->biography }}@else{{ old('biography') }}@endisset>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col">
                            <div class="form-group" style="color: #011C3A;">
                                <label for="portfolio" class="profileFieldLabel">Portfolio website</label>
                                <input class="form-control profileGroup" type="url" name="portfolio" placeholder="Portfolio link" value="@isset($user->student->portfolio){{ $user->student->portfolio }}@else{{ old('portfolio') }}@endisset">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group" style="color: #011C3A;">
                                <label for="linkedin" class="profileFieldLabel">LinkedIn</label>
                                <input class="form-control profileGroup" type="url" name="linkedin" placeholder="LinkedIn" value="@isset($user->student->LinkedIn){{ $user->student->LinkedIn }}@else{{ old('linkedin') }}@endisset">
                            </div>
                        </div>
                    </div>

                <div class="form-row">
                    <div class="col">
                        <div class="form-group" style="color: #011C3A;">
                            <label for="category" class="profileFieldLabel">Category</label>
                            @foreach ($categories as $category)
                                <option @if(!empty($user->student->category_id) && $category->id === $user->student->category_id){{ 'selected' }}@endif value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                        </div>
                    </div>
                </div>

            <div class="form-row" style="text-align:right;">
                <div class="col offset-xl-0">
                    <button class="btn btn-primary btnDeclined" type="button" style="margin-right:-6%;">Cancel</button>
                    <button class="btn btn-primary btnApproved" type="button" style="margin-right:5%;">Save</button>
                </div>
            </div>
        </form>
    </div>
</section>
