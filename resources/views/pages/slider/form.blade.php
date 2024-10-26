<x-layout>
    <x-form :model="$model" :upload="true">
        <x-card>
            <x-action form="form"/>

            <div class="row">
                @bind($model)

                <x-form-input col="6" name="slider_title" />
                <x-form-input col="6" name="slider_name" />
                <x-form-textarea col="6" name="slider_description" />
                <x-form-input col="6" name="slider_button" />
                <x-form-input col="6" name="slider_link" />

                <x-form-upload col="6" name="images" />
                @if($model)
                <div class="col-md-6">
                    <img class="img-thumbnail img-fluid"
                        src="{{ $model ? url('storage/files/slider/' . $model->slider_image) : url('assets/media/image/logo.png') }}"
                        alt="">
                </div>
                @endif

                @endbind
            </div>

        </x-card>
    </x-form>
</x-layout>
