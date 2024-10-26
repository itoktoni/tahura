@extends('layouts.public')

@section('content')

    <!-- Widget-about -->
    <div class="tf-widget-about-us main-content">
        <div class="themeflat-container">
            <div class="container tf-about-us">
                <div class="row">
                    <div class="col-md-3 image-wraper">
                        <div class="media">
                            <div class="media-v1">
                                <img class="mask-media wow fadeInLeft animated"
                                    src="{{ asset('zunzo/images/about/mask1.png') }}" alt="image">
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

                            @if (session('status'))
                                <div class="alert alert-danger">
                                    {{ session('status') }}
                                </div>
                            @endif

                            @if (auth()->check())

                                <form action="{{ route('add') }}" method="POST" id="registerform" class="register-form">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <div class="form-floating">
                                                <select name="id_event"
                                                    class="event form-select @error('id_event') error @enderror"
                                                    id="floatingInput" placeholder="id_event">
                                                    <option value="">- Silahkan Pilih -</option>
                                                    @foreach ($data_event as $item)
                                                        <option {{ $id == $item->field_primary ? 'selected' : '' }}
                                                            value="{{ $item->field_primary }}">
                                                            {{ $item->field_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <label for="floatingInput">Event</label>
                                                @error('id_event')
                                                    <span class="error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <div class="form-floating">
                                                <input type="text" name="community"
                                                    value="{{ old('community') ?? (($user->community ?? null)) }}"
                                                    class="form-control @error('community') error @enderror"
                                                    id="floatingInput" placeholder="first name">
                                                <label for="floatingInput">Komunitas</label>
                                                @error('community')
                                                    <span class="error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>

                                    <div class="line"></div>

                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <div class="form-floating">
                                                <input type="text" name="key"
                                                    value="{{ old('key') ?? (($user->key ?? null)) }}"
                                                    class="form-control @error('key') error @enderror" id="floatingInput"
                                                    placeholder="first name">
                                                <label for="floatingInput">Nomer KTP / Kartu Pelajar</label>
                                                @error('key')
                                                    <span class="error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <div class="form-floating">
                                                <select name="gender"
                                                    class="form-select @error('gender') error @enderror"
                                                    id="floatingInput" placeholder="gender">
                                                    <option value="">- Silahkan Pilih -</option>
                                                    @foreach ($gender as $key => $gitem)
                                                        <option @if (($user && $gitem == $user->gender)) selected @endif
                                                            value="{{ $gitem }}">{{ $gitem }}</option>
                                                    @endforeach
                                                </select>
                                                <label for="floatingInput">Gender</label>
                                                @error('gender')
                                                    <span class="error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-md-6 mb-3">
                                            <div class="form-floating">
                                                <input type="text" name="first_name"
                                                    value="{{ old('first_name') ?? (($user->first_name ?? null)) }}"
                                                    class="form-control @error('first_name') error @enderror"
                                                    id="floatingInput" placeholder="first name">
                                                <label for="floatingInput">First Name</label>
                                                @error('first_name')
                                                    <span class="error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <div class="form-floating">
                                                <input type="text" name="last_name"
                                                    value="{{ old('last_name') ?? (($user->last_name ?? null)) }}"
                                                    class="form-control @error('last_name') error @enderror"
                                                    id="floatingInput" placeholder="last name">
                                                <label for="floatingInput">Last Name</label>
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <div class="form-floating">
                                                <input type="email" name="email"
                                                    value="{{ old('email') ?? (($user->email ?? null)) }}"
                                                    class="form-control @error('email') error @enderror" id="floatingInput"
                                                    placeholder="email">
                                                <label for="floatingInput">Email</label>
                                                @error('email')
                                                    <span class="error">{{ $message }}</span>
                                                @enderror

                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <div class="form-floating">
                                                <input type="text" name="phone"
                                                    value="{{ old('phone') ?? (($user->phone ?? null)) }}"
                                                    class="form-control @error('phone') error @enderror" id="floatingInput"
                                                    placeholder="phone">
                                                <label for="floatingInput">Phone</label>
                                                @error('phone')
                                                    <span class="error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="text" name="place_birth"
                                                    value="{{ old('place_birth') ?? (($user->place_birth ?? null)) }}"
                                                    class="form-control @error('place_birth') error @enderror"
                                                    id="floatingInput" placeholder="place_birth">
                                                <label for="floatingInput">Tempat Lahir</label>
                                                @error('place_birth')
                                                    <span class="error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="date" name="date_birth"
                                                    value="{{ old('date_birth') ?? (($user->date_birth ?? null)) }}"
                                                    class="form-control @error('date_birth') error @enderror"
                                                    id="floatingInput" placeholder="date_birth">
                                                <label for="floatingInput">Tempat Lahir</label>
                                                @error('date_birth')
                                                    <span class="error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>

                                    <div class="line"></div>

                                    <div class="row">

                                        <div class="col-md-6 mb-3">
                                            <div class="form-floating">
                                                <input type="text" name="country"
                                                    value="{{ old('country') ?? (($user->country ?? null)) }}"
                                                    class="form-control @error('country') error @enderror"
                                                    id="floatingInput" placeholder="country">
                                                <label for="floatingInput">Negara</label>
                                                @error('country')
                                                    <span class="error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-md-6 mb-3">
                                            <div class="form-floating">
                                                <input type="text" name="province"
                                                    value="{{ old('province') ?? (($user->province ?? null)) }}"
                                                    class="form-control @error('province') error @enderror"
                                                    id="floatingInput" placeholder="province">
                                                <label for="floatingInput">Provinsi</label>
                                                @error('province')
                                                    <span class="error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-md-6 mb-3">
                                            <div class="form-floating">
                                                <input type="text" name="city"
                                                    value="{{ old('city') ?? (($user->city ?? null)) }}"
                                                    class="form-control @error('city') error @enderror"
                                                    id="floatingInput" placeholder="city">
                                                <label for="floatingInput">Kota</label>
                                                @error('city')
                                                    <span class="error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-md-6 mb-3">
                                            <div class="form-floating">
                                                <textarea name="address" class="form-control @error('address') error @enderror" id="floatingInput" cols="30"
                                                    rows="10">{{ old('address') ?? (($user->address ?? null)) }}</textarea>
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
                                                <select name="blood_type"
                                                    class="form-select @error('blood_type') error @enderror"
                                                    id="floatingInput" placeholder="blood_type">
                                                    <option value="">- Silahkan Pilih -</option>
                                                    @foreach ($blood as $key => $bitem)
                                                        <option @if (($user && $bitem == $user->blood_type)) selected @endif
                                                            value="{{ $bitem }}">{{ $bitem }}</option>
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
                                                    rows="10">{{ old('illness') ?? (($user->illness ?? null)) }}</textarea>
                                                <label for="floatingInput">Riwayat Penyakit</label>
                                                @error('illness')
                                                    <span class="error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <div class="form-floating">
                                                <input type="text" name="emergency_contact"
                                                    value="{{ old('emergency_contact') ?? (($user->emergency_contact ?? null)) }}"
                                                    class="form-control @error('emergency_contact') error @enderror"
                                                    id="floatingInput" placeholder="emergency_contact">
                                                <label for="floatingInput">Emergency Contact</label>
                                                @error('emergency_contact')
                                                    <span class="error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <div class="form-floating">
                                                <select name="jersey"
                                                    class="form-select @error('jersey') error @enderror"
                                                    id="floatingInput" placeholder="jersey">
                                                    <option value="">- Silahkan Pilih -</option>
                                                    @foreach ($jersey as $key => $jitem)
                                                        <option @if (($user && $jitem == $user->jersey)) selected @endif
                                                            value="{{ $jitem }}">{{ $jitem }}</option>
                                                    @endforeach
                                                </select>
                                                <label for="floatingInput">Ukuran Jersey</label>
                                                @error('jersey')
                                                    <span class="error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>

                                    <div class="line"></div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" name="confirmation" {{ !empty($user->confirmation) ? 'checked' : '' }} type="checkbox" id="inlineCheckbox1">
                                                <label class="form-check-label" for="inlineCheckbox1">
                                                    {!! $event->event_confirm_page ?? 'Confirmation of Agreement' !!}

                                                    @error('confirmation')
                                                        ( <span class="error text-danger">{{ $message }}</span> )
                                                    @enderror

                                                </label>

                                              </div>
                                        </div>
                                    </div>

                                    @if ($errors)
                                        @foreach ($errors as $item)
                                            <span>{{ $item }}</span>
                                        @endforeach
                                    @endif

                                    <p class="form-submit mt-3">
                                        <input type="submit" id="comment-reply" class="submit-register"
                                            value="Save Cart">
                                    </p>

                                </form>

                            @else

                                <form action="{{ route('add') }}" method="POST" id="registerform"
                                    class="register-form">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <div class="form-floating">
                                                <select name="id_event"
                                                    class="event form-select @error('id_event') error @enderror"
                                                    id="floatingInput" placeholder="id_event">
                                                    <option value="">- Silahkan Pilih -</option>
                                                    @foreach ($data_event as $item)
                                                        <option {{ $id == $item->field_primary ? 'selected' : '' }}
                                                            value="{{ $item->field_primary }}">
                                                            {{ $item->field_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <label for="floatingInput">Event</label>
                                                @error('id_event')
                                                    <span class="error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <div class="form-floating">
                                                <input type="text" name="community"
                                                    value="{{ old('community') ?? ($user->community ?? null) }}"
                                                    class="form-control @error('community') error @enderror"
                                                    id="floatingInput" placeholder="first name">
                                                <label for="floatingInput">Komunitas</label>
                                                @error('community')
                                                    <span class="error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>

                                    <div class="line"></div>

                                    <div class="row">

                                        <div class="col-md-6 mb-3">
                                            <div class="form-floating">
                                                <input type="text" name="key"
                                                    value="{{ old('key') ?? ($user->key ?? null) }}"
                                                    class="form-control @error('key') error @enderror" id="floatingInput"
                                                    placeholder="first name">
                                                <label for="floatingInput">Nomer KTP / Kartu Pelajar</label>
                                                @error('key')
                                                    <span class="error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <div class="form-floating">
                                                <input type="email" name="email"
                                                    value="{{ old('email') ?? ($user->email ?? null) }}"
                                                    class="form-control @error('email') error @enderror"
                                                    id="floatingInput" placeholder="email">
                                                <label for="floatingInput">Email</label>
                                                @error('email')
                                                    <span class="error">{{ $message }}</span>
                                                @enderror

                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <div class="form-floating">
                                                <input type="text" name="first_name"
                                                    value="{{ old('first_name') ?? ($user->first_name ?? null) }}"
                                                    class="form-control @error('first_name') error @enderror"
                                                    id="floatingInput" placeholder="first name">
                                                <label for="floatingInput">First Name</label>
                                                @error('first_name')
                                                    <span class="error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <div class="form-floating">
                                                <input type="text" name="last_name"
                                                    value="{{ old('last_name') ?? ($user->last_name ?? null) }}"
                                                    class="form-control @error('last_name') error @enderror"
                                                    id="floatingInput" placeholder="last name">
                                                <label for="floatingInput">Last Name</label>
                                            </div>
                                        </div>



                                        <div class="col-md-6 mb-3">
                                            <div class="form-floating">
                                                <input type="text" name="phone"
                                                    value="{{ old('phone') ?? ($user->phone ?? null) }}"
                                                    class="form-control @error('phone') error @enderror"
                                                    id="floatingInput" placeholder="phone">
                                                <label for="floatingInput">Phone</label>
                                                @error('phone')
                                                    <span class="error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <div class="form-floating">
                                                <select name="gender"
                                                    class="form-select @error('gender') error @enderror"
                                                    id="floatingInput" placeholder="gender">
                                                    <option value="">- Silahkan Pilih -</option>
                                                    @foreach ($gender as $key => $gitem)
                                                        <option @if ($user && $gitem == $user->gender) selected @endif
                                                            value="{{ $gitem }}">{{ $gitem }}</option>
                                                    @endforeach
                                                </select>
                                                <label for="floatingInput">Gender</label>
                                                @error('gender')
                                                    <span class="error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="text" name="place_birth"
                                                    value="{{ old('place_birth') ?? ($user->place_birth ?? null) }}"
                                                    class="form-control @error('place_birth') error @enderror"
                                                    id="floatingInput" placeholder="place_birth">
                                                <label for="floatingInput">Tempat Lahir</label>
                                                @error('place_birth')
                                                    <span class="error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="date" name="date_birth"
                                                    value="{{ old('date_birth') ?? ($user->date_birth ?? null) }}"
                                                    class="form-control @error('date_birth') error @enderror"
                                                    id="floatingInput" placeholder="date_birth">
                                                <label for="floatingInput">Tanggal Lahir</label>
                                                @error('date_birth')
                                                    <span class="error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>

                                    <div class="line"></div>

                                    <div class="row">

                                        <div class="col-md-6 mb-3">
                                            <div class="form-floating">
                                                <input type="text" name="country"
                                                    value="{{ old('country') ?? ($user->country ?? null) }}"
                                                    class="form-control @error('country') error @enderror"
                                                    id="floatingInput" placeholder="country">
                                                <label for="floatingInput">Negara</label>
                                                @error('country')
                                                    <span class="error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-md-6 mb-3">
                                            <div class="form-floating">
                                                <input type="text" name="province"
                                                    value="{{ old('province') ?? ($user->province ?? null) }}"
                                                    class="form-control @error('province') error @enderror"
                                                    id="floatingInput" placeholder="province">
                                                <label for="floatingInput">Provinsi</label>
                                                @error('province')
                                                    <span class="error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-md-6 mb-3">
                                            <div class="form-floating">
                                                <input type="text" name="city"
                                                    value="{{ old('city') ?? ($user->city ?? null) }}"
                                                    class="form-control @error('city') error @enderror"
                                                    id="floatingInput" placeholder="city">
                                                <label for="floatingInput">Kota</label>
                                                @error('city')
                                                    <span class="error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-md-6 mb-3">
                                            <div class="form-floating">
                                                <textarea name="address" class="form-control @error('address') error @enderror" id="floatingInput" cols="30"
                                                    rows="10">{{ old('address') ?? ($user->address ?? null) }}</textarea>
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
                                                <select name="blood_type"
                                                    class="form-select @error('blood_type') error @enderror"
                                                    id="floatingInput" placeholder="blood_type">
                                                    <option value="">- Silahkan Pilih -</option>
                                                    @foreach ($blood as $key => $bitem)
                                                        <option @if ($user && $bitem == $user->blood_type) selected @endif
                                                            value="{{ $bitem }}">{{ $bitem }}</option>
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
                                                    rows="10">{{ old('illness') ?? ($user->illness ?? null) }}</textarea>
                                                <label for="floatingInput">Riwayat Penyakit</label>
                                                @error('illness')
                                                    <span class="error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <div class="form-floating">
                                                <input type="text" name="emergency_contact"
                                                    value="{{ old('emergency_contact') ?? ($user->emergency_contact ?? null) }}"
                                                    class="form-control @error('emergency_contact') error @enderror"
                                                    id="floatingInput" placeholder="emergency_contact">
                                                <label for="floatingInput">Emergency Contact</label>
                                                @error('emergency_contact')
                                                    <span class="error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <div class="form-floating">
                                                <select name="jersey"
                                                    class="form-select @error('jersey') error @enderror"
                                                    id="floatingInput" placeholder="jersey">
                                                    <option value="">- Silahkan Pilih -</option>
                                                    @foreach ($jersey as $key => $jitem)
                                                        <option @if ($user && $jitem == $user->jersey) selected @endif
                                                            value="{{ $jitem }}">{{ $jitem }}</option>
                                                    @endforeach
                                                </select>
                                                <label for="floatingInput">Ukuran Jersey</label>
                                                @error('jersey')
                                                    <span class="error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>

                                    <div class="line"></div>

                                    @if ($errors)
                                        @foreach ($errors as $item)
                                            <span>{{ $item }}</span>
                                        @endforeach
                                    @endif

                                    @if ($user->is_paid != 'PAID')
                                        <p class="form-submit">
                                            <input type="submit" id="comment-reply" class="submit-register"
                                                value="Save Cart">
                                        </p>
                                    @endif

                                </form>

                            @endif

                            @if ($id == 6)
                            <form method="POST" class="mt-5 register-form" id="registerform" action="{{ route('relationship') }}">
                                @csrf
                                <div id="accordion">

                                    <div class="card mb-5">

                                        <div class="card-header" id="headingOne">
                                            <h5 class="mb-0">
                                                <a data-toggle="collapse" href="#collpase"
                                                    role="button" aria-expanded="false"
                                                    aria-controls="collpase">
                                                    Tambahkan Anggota Keluarga
                                                </a>
                                            </h5>
                                        </div>

                                        <div id="collapse" class="collapse show"
                                            aria-labelledby="headingOne" data-parent="#accordion">
                                            <div class="card-body">
                                                @include('public.relationship')
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                @if ($user->is_paid != 'PAID')
                                    <p class="form-submit">
                                        <input type="submit" id="comment-reply" class="submit-register"
                                            value="Add Cart">
                                    </p>
                                @endif

                            </form>
                        @endif

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
                var route = "{{ route('event-register') }}" + "?event_id=" + id;

                window.location.href = route;
            });
        </script>
    @endpush

@endsection
