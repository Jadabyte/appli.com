
                <div class="form-row" style="margin-top:-10%">
                    <div class="col">
                        <div class="form-group" style="color: #011C3A;">
                            <label for="firstName" class="profileFieldLabel">Firstname</label>
                            <input class="form-control profileGroup" type="text" name="firstName" placeholder="Firstname" value="{{ $user->firstName }}">
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group" style="color: #011C3A;">
                            <label for="lastName" class="profileFieldLabel">Lastname</label>
                            <input class="form-control profileGroup" type="text" name="lastName" placeholder="Lastname" value="{{ $user->lastName }}">
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col">
                        <div class="form-group" style="color: #011C3A;">
                            <label for="email" class="profileFieldLabel">Email</label>
                            <input class="form-control" type="email" name="email" placeholder="Email" value="{{ $user->email }}">
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col">
                        <div class="form-group" style="color: #011C3A;">
                            <label for="password" class="profileFieldLabel">Password</label>
                            <input class="form-control profileGroup" type="password" name="password" placeholder="Password">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group" style="color: #011C3A;">
                            <label for="password_confirmation" class="profileFieldLabel">Confirm Password</label>
                            <input class="form-control profileGroup" type="password" name="password_confirmation" placeholder="Confirm password">
                        </div>
                    </div>
                </div>
                <div class="form-row" style="text-align:right;">
                    <div class="col offset-xl-0">
                        <button class="btn btn-primary btnDeclined" type="button" style="margin-right:-6%;">Cancel</button>
                        <button class="btn btn-primary btnApproved" type="submit" style="margin-right:5%;">Save</button>
                    </div>
                </div>

