@extends('layouts.public')

@section('content')

  <!-- Widget-about -->
    <div class="tf-widget-about-us main-content">
        <div class="themeflat-container">
            <div class="tf-about-us">
                <div class="row">
                    <div class="col-md-3 image-wraper">
                        <div class="media">
                            <div class="media-v1">
                                <img class="mask-media wow fadeInLeft animated" src="{{ asset('zunzo/images/about/mask1.png') }}"
                                    alt="image">
                            </div>

                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="about-box">
                            <!-- header style v1 -->
                            <div class="title-box title-small-v2">
                                <h2 class="title-section wow fadeInUp animated">
                                    Register Event
                                </h2>
                            </div><!-- header style v1 -->

                            <div class="line"></div>


                            <form action="{{ route('checkout') }}" method="POST" id="registerform" class="register-form">
                                @csrf

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="form-floating">
                                            <select name="id_event" class="event form-select @error('id_event') error @enderror" id="floatingInput" placeholder="id_event">
                                                <option value="">- Silahkan Pilih -</option>
                                                @foreach ($data_event as $item)
                                                <option {{ old('id_event') == $item->field_primary || $id == $item->field_primary ? 'selected' : '' }} value="{{ $item->field_primary }}">
                                                    {{ $item->field_name }}
                                                </option>
                                                @endforeach
                                            </select>
                                            <label for="floatingInput">Event</label>
                                            @error('id_event') <span class="error">{{ $message }}</span> @enderror
                                        </div>
                                    </div>

                                    @if($id == 6)
                                    <div class="col-md-6 mb-3">
                                        <div class="form-floating">
                                            <select name="relationship" class="form-select @error('relationship') error @enderror" id="floatingInput" placeholder="relationship">
                                                <option value="">- Silahkan Pilih -</option>
                                                <option value="Istri">Istri</option>
                                                <option value="Suami">Suami</option>
                                                <option value="Anak">Anak</option>
                                            </select>
                                            <label for="floatingInput">Hubungan</label>
                                            @error('relationship') <span class="error">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    @endif

                                </div>

                                <div class="line"></div>


                                <div class="row">

                                    <div class="col-md-6 mb-3">
                                        <div class="form-floating">
                                            <input type="text" name="key" class="form-control @error('key') error @enderror" id="floatingInput" placeholder="first name">
                                            <label for="floatingInput">Nomer KTP / Kartu Pelajar</label>
                                            @error('key') <span class="error">{{ $message }}</span> @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <div class="form-floating">
                                            <input type="text" name="community" class="form-control @error('community') error @enderror" id="floatingInput" placeholder="first name">
                                            <label for="floatingInput">Komunitas</label>
                                            @error('community') <span class="error">{{ $message }}</span> @enderror
                                        </div>
                                    </div>


                                    <div class="col-md-6 mb-3">
                                        <div class="form-floating">
                                            <input type="text" name="first_name" value="{{ old('first_name') }}" class="form-control @error('first_name') error @enderror" id="floatingInput" placeholder="first name">
                                            <label for="floatingInput">First Name</label>
                                            @error('first_name') <span class="error">{{ $message }}</span> @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <div class="form-floating">
                                            <input type="text" name="last_name" class="form-control @error('last_name') error @enderror" id="floatingInput" placeholder="last name">
                                            <label for="floatingInput">Last Name</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <div class="form-floating">
                                            <input type="email" name="email" class="form-control @error('email') error @enderror" id="floatingInput" placeholder="email">
                                            <label for="floatingInput">Email</label>
                                            @error('email') <span class="error">{{ $message }}</span> @enderror

                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <div class="form-floating">
                                            <input type="text" name="phone" class="form-control @error('phone') error @enderror" id="floatingInput" placeholder="phone">
                                            <label for="floatingInput">Phone</label>
                                            @error('phone') <span class="error">{{ $message }}</span> @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <div class="form-floating">
                                            <input type="text" name="place_birth" class="form-control @error('place_birth') error @enderror" id="floatingInput" placeholder="place_birth">
                                            <label for="floatingInput">Tempat Lahir</label>
                                            @error('place_birth') <span class="error">{{ $message }}</span> @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <div class="form-floating">
                                            <input type="date" name="date_birth" class="form-control @error('date_birth') error @enderror" id="floatingInput" placeholder="date_birth">
                                            <label for="floatingInput">Tempat Lahir</label>
                                            @error('date_birth') <span class="error">{{ $message }}</span> @enderror
                                        </div>
                                    </div>

                                </div>

                                <div class="line"></div>

                                <div class="row">

                                    <div class="col-md-6 mb-3">
                                        <div class="form-floating">
                                            <input type="text" name="country" class="form-control @error('country') error @enderror" id="floatingInput" placeholder="country">
                                            <label for="floatingInput">Negara</label>
                                            @error('country') <span class="error">{{ $message }}</span> @enderror
                                        </div>
                                    </div>


                                    <div class="col-md-6 mb-3">
                                        <div class="form-floating">
                                            <input type="text" name="province" class="form-control @error('province') error @enderror" id="floatingInput" placeholder="province">
                                            <label for="floatingInput">Provinsi</label>
                                            @error('province') <span class="error">{{ $message }}</span> @enderror
                                        </div>
                                    </div>


                                    <div class="col-md-6 mb-3">
                                        <div class="form-floating">
                                            <input type="text" name="city" class="form-control @error('city') error @enderror" id="floatingInput" placeholder="city">
                                            <label for="floatingInput">Kota</label>
                                            @error('city') <span class="error">{{ $message }}</span> @enderror
                                        </div>
                                    </div>


                                    <div class="col-md-6 mb-3">
                                        <div class="form-floating">
                                            <textarea name="address" class="form-control @error('address') error @enderror" id="floatingInput" cols="30" rows="10"></textarea>
                                            <label for="floatingInput">Alamat</label>
                                            @error('address') <span class="error">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="line"></div>

                                <div class="row">

                                    <div class="col-md-6 mb-3">
                                        <div class="form-floating">
                                            <select name="blood_type" class="form-select @error('blood_type') error @enderror" id="floatingInput" placeholder="blood_type">
                                                <option value="">- Silahkan Pilih -</option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="AB">AB</option>
                                                <option value="O">O</option>
                                            </select>
                                            <label for="floatingInput">Golongan Darah</label>
                                            @error('blood_type') <span class="error">{{ $message }}</span> @enderror
                                        </div>
                                    </div>


                                    <div class="col-md-6 mb-3">
                                        <div class="form-floating">
                                            <textarea name="illness" class="form-control @error('illness') error @enderror" id="floatingInput" cols="30" rows="10"></textarea>
                                            <label for="floatingInput">Riwayat Penyakit</label>
                                            @error('illness') <span class="error">{{ $message }}</span> @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <div class="form-floating">
                                            <input type="text" name="emergency_contact" class="form-control @error('emergency_contact') error @enderror" id="floatingInput" placeholder="emergency_contact">
                                            <label for="floatingInput">Emergency Contact</label>
                                            @error('emergency_contact') <span class="error">{{ $message }}</span> @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <div class="form-floating">
                                            <select name="jersey" class="form-select @error('jersey') error @enderror" id="floatingInput" placeholder="jersey">
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

                                </div>

                                @if($errors)
                                @foreach ($errors as $item)
                                <span>{{ $item }}</span>
                                @endforeach
                                @endif


                                <p class="form-submit">
                                    <input type="submit" id="comment-reply" class="submit-register" value="Register">
                                </p>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Widget-about  -->

    @push('js')
    <script>
            $('.event').on('change', function() {
                var id = $(this).val();
                var route = "{{ route('event-register') }}"+"?event_id="+id;

                window.location.href = route;
            });

    </script>
    @endpush

@endsection