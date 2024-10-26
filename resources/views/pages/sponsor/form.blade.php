<x-layout>
    <x-form :model="$model" :upload="true">
        <x-card>
            <x-action form="form" />

            <div class="row">
                @bind($model)

                <x-form-input col="6" name="sponsor_name" />
                <x-form-input col="6" name="sponsor_link" />

                <x-form-select col="6" name="sponsor_type" label="Type" :options="$type" />

                <x-form-upload col="6" name="images" />

                @if($model)
                <div class="col-md-6">
                    <img class="img-thumbnail img-fluid"
                        src="{{ $model ? url('storage/files/sponsor/' . $model->sponsor_image) : url('assets/media/image/logo.png') }}"
                        alt="">
                </div>
                @endif

                @endbind
            </div>

        </x-card>
    </x-form>
</x-layout>
