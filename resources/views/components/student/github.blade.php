
                <div class="form-row" style="margin-top:-10%">
                    <div class="col">
                        <div class="form-group" style="color: #011C3A;">
                            <label for="github" class="profileFieldLabel">Github Username</label>
                            <input class="form-control profileGroup" type="text" name="github" placeholder="Github Username" value="@isset($user->student->github){{ $user->student->github }}@else{{ old('github') }}@endisset">
                            <button class="btn btn-primary searchButton" type="submit">Show repository</button>
                        </div>
                    </div>
                </div>
