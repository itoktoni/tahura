<div>

    <form wire:submit="save" id="registerform" class="register-form">
        @csrf

        <div class="row">

            <div class="col-md-6 mb-3">
                <div class="form-floating">
                    <input type="text" name="key" class="form-control @error('key') error @enderror" wire:model="key" id="floatingInput" placeholder="first name">
                    <label for="floatingInput">Nomer KTP / Kartu Pelajar</label>
                    @error('key') <span class="error">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="col-md-6 mb-3">
                <div class="form-floating">
                    <input type="text" name="community" class="form-control @error('community') error @enderror" wire:model="community" id="floatingInput" placeholder="first name">
                    <label for="floatingInput">Komunitas</label>
                    @error('community') <span class="error">{{ $message }}</span> @enderror
                </div>
            </div>


            <div class="col-md-6 mb-3">
                <div class="form-floating">
                    <input type="text" name="first_name" class="form-control @error('fist_name') error @enderror" wire:model="first_name" id="floatingInput" placeholder="first name">
                    <label for="floatingInput">First Name</label>
                    @error('fist_name') <span class="error">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="col-md-6 mb-3">
                <div class="form-floating">
                    <input type="text" name="last_name" class="form-control @error('last_name') error @enderror" wire:model="last_name" id="floatingInput" placeholder="last name">
                    <label for="floatingInput">Last Name</label>
                </div>
            </div>

            <div class="col-md-6 mb-3">
                <div class="form-floating">
                    <input type="email" name="email" class="form-control @error('email') error @enderror" wire:model="email" id="floatingInput" placeholder="email">
                    <label for="floatingInput">Email</label>
                    @error('email') <span class="error">{{ $message }}</span> @enderror

                </div>
            </div>

            <div class="col-md-6 mb-3">
                <div class="form-floating">
                    <input type="text" name="phone" class="form-control @error('phone') error @enderror" wire:model="phone" id="floatingInput" placeholder="phone">
                    <label for="floatingInput">Phone</label>
                    @error('phone') <span class="error">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="col-md-6 mb-3">
                <div class="form-floating">
                    <input type="text" name="place_birth" class="form-control @error('place_birth') error @enderror" wire:model="place_birth" id="floatingInput" placeholder="place_birth">
                    <label for="floatingInput">Tempat Lahir</label>
                    @error('place_birth') <span class="error">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="col-md-6 mb-3">
                <div class="form-floating">
                    <input type="date" name="date_birth" class="form-control @error('date_birth') error @enderror" wire:model="date_birth" id="floatingInput" placeholder="date_birth">
                    <label for="floatingInput">Tempat Lahir</label>
                    @error('date_birth') <span class="error">{{ $message }}</span> @enderror
                </div>
            </div>

        </div>

        <div class="line"></div>

        <div class="row">

            <div class="col-md-6 mb-3">
                <div class="form-floating">
                    <input type="text" name="country" class="form-control @error('country') error @enderror" wire:model="country" id="floatingInput" placeholder="country">
                    <label for="floatingInput">Negara</label>
                    @error('country') <span class="error">{{ $message }}</span> @enderror
                </div>
            </div>


            <div class="col-md-6 mb-3">
                <div class="form-floating">
                    <input type="text" name="province" class="form-control @error('province') error @enderror" wire:model="province" id="floatingInput" placeholder="province">
                    <label for="floatingInput">Provinsi</label>
                    @error('province') <span class="error">{{ $message }}</span> @enderror
                </div>
            </div>


            <div class="col-md-6 mb-3">
                <div class="form-floating">
                    <input type="text" name="city" class="form-control @error('city') error @enderror" wire:model="city" id="floatingInput" placeholder="city">
                    <label for="floatingInput">Kota</label>
                    @error('city') <span class="error">{{ $message }}</span> @enderror
                </div>
            </div>


            <div class="col-md-6 mb-3">
                <div class="form-floating">
                    <textarea name="address" class="form-control @error('address') error @enderror" wire:model="address" id="floatingInput" cols="30" rows="10"></textarea>
                    <label for="floatingInput">Alamat</label>
                    @error('address') <span class="error">{{ $message }}</span> @enderror
                </div>
            </div>
        </div>

        <div class="line"></div>

        <div class="row">

            <div class="col-md-6 mb-3">
                <div class="form-floating">
                    <select name="blood" class="form-select @error('blood') error @enderror" wire:model="blood" id="floatingInput" placeholder="blood">
                        <option value="">- Silahkan Pilih -</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="AB">AB</option>
                        <option value="O">O</option>
                    </select>
                    <label for="floatingInput">Golongan Darah</label>
                    @error('blood') <span class="error">{{ $message }}</span> @enderror
                </div>
            </div>


            <div class="col-md-6 mb-3">
                <div class="form-floating">
                    <textarea name="ilness" class="form-control @error('ilness') error @enderror" wire:model="ilness" id="floatingInput" cols="30" rows="10"></textarea>
                    <label for="floatingInput">Riwayat Penyakit</label>
                    @error('ilness') <span class="error">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="col-md-6 mb-3">
                <div class="form-floating">
                    <input type="text" name="emergency_contact" class="form-control @error('emergency_contact') error @enderror" wire:model="emergency_contact" id="floatingInput" placeholder="emergency_contact">
                    <label for="floatingInput">Emergency Contact</label>
                    @error('emergency_contact') <span class="error">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="col-md-6 mb-3">
                <div class="form-floating">
                    <select name="jersey" class="form-select @error('jersey') error @enderror" wire:model="jersey" id="floatingInput" placeholder="jersey">
                        <option value="">- Silahkan Pilih -</option>
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                        <option value="XXL">XXL</option>
                        <option value="XXXL">XXXL</option>
                    </select>
                    <label for="floatingInput">Ukuran Jersey</label>
                    @error('jersey') <span class="error">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="col-md-6 mb-3">
                <div class="form-floating">
                    <select name="id_event" class="form-select @error('id_event') error @enderror" wire:model="id_event" id="floatingInput" placeholder="id_event">
                        <option value="">- Silahkan Pilih -</option>
                        @foreach ($data_event as $item)
                        <option value="{{ $item->field_primary }}">
                            {{ $item->field_name }}
                        </option>
                        @endforeach
                    </select>
                    <label for="floatingInput">Event</label>
                    @error('id_event') <span class="error">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="col-md-6 mb-3">
                <div class="form-floating">
                    <select name="relationship" class="form-select @error('relationship') error @enderror" wire:model="relationship" id="floatingInput" placeholder="relationship">
                        <option value="">- Silahkan Pilih -</option>
                        <option value="Istri">Istri</option>
                        <option value="Suami">Suami</option>
                        <option value="Anak">Anak</option>
                    </select>
                    <label for="floatingInput">Hubungan</label>
                    @error('relationship') <span class="error">{{ $message }}</span> @enderror
                </div>
            </div>

        </div>

        @if($errors)
        @foreach ($errors as $item)
        <span>{{ $item }}</span>
        @endforeach
        @endif


        <p class="form-submit">
            <input name="submit" type="submit" id="comment-reply" class="submit-register" value="Register">
        </p>

    </form>
</div>
