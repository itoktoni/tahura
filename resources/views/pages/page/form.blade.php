<x-layout>
    <x-form :model="$model" :upload="true">
        <x-card>
            <x-action form="form" />

            <div class="row">
                @bind($model)

                <x-form-input col="6" name="page_title" />
                <x-form-input col="6" name="page_name" />
                <x-form-textarea col="6" name="page_description" />

                <x-form-upload col="3" name="images" />

                @if($model)
                <div class="col-md-3 pb-2">
                    <img class="img-thumbnail img-fluid"
                        src="{{ !empty($model->page_image) ? url('storage/files/page/' . $model->page_image) : url('assets/media/image/image.png') }}"
                        alt="">
                </div>
                @endif

                <div class="row mt-3 mb-5">
                    <div class="col-md-12">
                        <x-form-input col="6" type="hidden" class="editor" name="page_body" />
                        <div id="editor">{!! $model ? $model->page_body : '' !!}</div>
                   </div>
                </div>

                @endbind
            </div>

        </x-card>
    </x-form>
</x-layout>
