<div class="row">

    <input type="hidden" name="event_id" value="{{ $user->event_id ?? $id }}">

    <div class="col-md-6 mb-3">
        <div class="form-floating">
            <select name="relationship1"
                class="form-select @error('relationship1') error @enderror"
                id="floatingInput" placeholder="relationship">
                <option value="">- Silahkan Pilih -</option>
                @foreach ($relationship as $key => $gitem)
                    <option @if ($user && $gitem == $user->relationship) selected @endif
                        value="{{ $gitem }}">{{ $gitem }}</option>
                @endforeach
            </select>
            <label for="floatingInput">Relationship</label>
            @error('relationship1')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-6 mb-3">
        <div class="form-floating">
            <input type="text" name="key" value="{{ old('key') ?? null }}"
                class="form-control @error('key') error @enderror" id="floatingInput" placeholder="first name">
            <label for="floatingInput">Nomer KTP / Kartu Pelajar</label>
            @error('key')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
    </div>

</div>

<div class="line"></div>

<div class="row">

    <div class="col-md-6 mb-3">
        <div class="form-floating">
            <input type="text" name="first_name1"
                class="form-control @error('first_name1') error @enderror" id="floatingInput" placeholder="first name">
            <label for="floatingInput">First Name</label>
            @error('first_name1')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-6 mb-3">
        <div class="form-floating">
            <input type="text" name="last_name"
                class="form-control @error('last_name') error @enderror" id="floatingInput" placeholder="last name">
            <label for="floatingInput">Last Name</label>
        </div>
    </div>

    <div class="col-md-6 mb-3">
        <div class="form-floating">
            <select name="gender1" class="form-select @error('gender1') error @enderror" id="floatingInput"
                placeholder="gender">
                <option value="">- Silahkan Pilih -</option>
                @foreach ($gender as $key => $gitem)
                    <option value="{{ $gitem }}">
                        {{ $gitem }}
                    </option>
                @endforeach
            </select>
            <label for="floatingInput">Gender</label>
            @error('gender1')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-6">
        <div class="row">
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="text" name="place_birth"
                        class="form-control @error('place_birth') error @enderror" id="floatingInput"
                        placeholder="place_birth">
                    <label for="floatingInput">Tempat Lahir</label>
                    @error('place_birth')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="date" name="date_birth1"
                        class="form-control @error('date_birth1') error @enderror" id="floatingInput"
                        placeholder="date_birth">
                    <label for="floatingInput">Tanggal Lahir</label>
                    @error('date_birth1')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
    </div>

</div>

<div class="line"></div>

<div class="row">

    <div class="col-md-6 mb-3">
        <div class="form-floating">
            <input type="text" name="country"
                class="form-control @error('country') error @enderror" id="floatingInput" placeholder="country">
            <label for="floatingInput">Negara</label>
            @error('country')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
    </div>


    <div class="col-md-6 mb-3">
        <div class="form-floating">
            <input type="text" name="province"
                class="form-control @error('province') error @enderror" id="floatingInput" placeholder="province">
            <label for="floatingInput">Provinsi</label>
            @error('province')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
    </div>


    <div class="col-md-6 mb-3">
        <div class="form-floating">
            <input type="text" name="city"
                class="form-control @error('city') error @enderror" id="floatingInput" placeholder="city">
            <label for="floatingInput">Kota</label>
            @error('city')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
    </div>


    <div class="col-md-6 mb-3">
        <div class="form-floating">
            <textarea name="address" class="form-control @error('address') error @enderror" id="floatingInput" cols="30"
                rows="10"></textarea>
            <label for="floatingInput">Alamat</label>
            @error('address')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
    </div>
</div>

<div class="line"></div>

<div class="row">

    <div class="col-md-6 mb-3">
        <div class="form-floating">
            <select name="blood_type" class="form-select @error('blood_type') error @enderror" id="floatingInput"
                placeholder="blood_type">
                <option value="">- Silahkan Pilih -</option>
                @foreach ($blood as $key => $bitem)
                    <option value="{{ $bitem }}">
                        {{ $bitem }}</option>
                @endforeach
            </select>
            <label for="floatingInput">Golongan Darah</label>
            @error('blood_type')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
    </div>


    <div class="col-md-6 mb-3">
        <div class="form-floating">
            <textarea name="illness" class="form-control @error('illness') error @enderror" id="floatingInput" cols="30"
                rows="10"></textarea>
            <label for="floatingInput">Riwayat Penyakit</label>
            @error('illness')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-6 mb-3">
        <div class="form-floating">
            <input type="text" name="emergency_contact"
                class="form-control @error('emergency_contact') error @enderror" id="floatingInput"
                placeholder="emergency_contact">
            <label for="floatingInput">Emergency Contact</label>
            @error('emergency_contact')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-6 mb-3">
        <div class="form-floating">
            <select name="jersey" class="form-select @error('jersey') error @enderror" id="floatingInput"
                placeholder="jersey">
                <option value="">- Silahkan Pilih -</option>
                @foreach ($jersey as $key => $jitem)
                    <option @if ($user && $jitem == $user->jersey) selected @endif value="{{ $jitem }}">
                        {{ $jitem }}</option>
                @endforeach
            </select>
            <label for="floatingInput">Ukuran Jersey</label>
            @error('jersey')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
    </div>

</div>
