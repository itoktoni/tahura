<x-layout>
    <x-form :model="$model" :upload="true">
        <x-card>
            <x-action form="form" />

                @bind($model)
                    <x-form-input col="6" value="{{ env('APP_NAME') }}" label="Nama Perusahaan" name="name" />
                    <x-form-input col="6" value="{{ env('APP_TITLE') }}" label="Nama Website" name="title" />
                    <x-form-input col="6" value="{{ env('APP_PHONE') }}" label="No. Telp" name="phone" />
                    <x-form-input col="6" value="{{ env('APP_ADDRESS') }}" label="Address" name="address" />

                    <x-form-input col="6" value="{{ env('EVENT_MAX') }}" label="Event Quota Max" name="max" />
                    <x-form-input col="6" value="{{ env('ADMIN_FEE') }}" label="Adjust Admin Fee" name="fee" />

                    <x-form-textarea col="6" value="{{ env('APP_DESCRIPTION') }}" label="Description" name="description" />
                    <x-form-textarea col="6" value="{{ env('APP_ABOUT') }}" label="About" name="about" />

                    <x-form-upload col="3" name="logo" />

                    <div class="col-md-3">
                        <img class="img-thumbnail img-fluid"
                            src="{{ env('APP_LOGO') ? url('storage/' . env('APP_LOGO')) : url('assets/media/image/logo.png') }}"
                            alt="">
                    </div>

                    <div class="col-md-6">
                            <div class="row">
                                <x-form-upload col="6" name="document" />
                                <div class="col-md-6">
                                    <label for="auto_id_document"></label>
                                    <a target="_blank" class="btn btn-danger btn-block mt-2" href="{{ url('storage/' . env('APP_DOCUMENT')) }}">Download</a>
                                </div>
                            </div>
                        </div>

                    <div class="row mt-3">
                        @if(auth()->user()->level == LevelType::Developer)
                        <x-form-input col="4" value="{{ env('APP_URL') }}" label="Website URL" name="url" />

                        <x-form-select col="2" name="debug_enable" :default="env('APP_DEBUG')" label="Debug Enable"
                            :options="$active" />
                        <x-form-select col="2" name="telescope_enable" :default="env('TELESCOPE_ENABLED')" label="Telescope"
                            :options="$active" />
                        <x-form-select col="2" name="debugbar_enable" :default="env('BREADCRUMB_ENABLED')" label="Debugbar"
                            :options="$active" />
                        @endif
                    </div>

                @endbind

        </x-card>

    </x-form>
</x-layout>
