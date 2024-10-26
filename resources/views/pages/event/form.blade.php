<x-layout>
    <x-form :model="$model" :upload="true">
        <x-card>
            <x-action form="form" />

            <div class="row mb-5">
                @bind($model)

                <x-form-input col="2" name="event_code" />
                <x-form-input col="4" name="event_name" />
                <div class="col-md-6">
                    <div class="row">
                        <x-form-input type="number" col="6" name="event_price" />
                        <x-form-select col="6" name="event_active" :options="$active" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <x-form-input col="6" type="date" name="event_date" />
                        <x-form-input col="6" type="number" name="event_max" />
                    </div>
                </div>
                <x-form-input col="6" name="event_info" />

                <x-form-upload col="3" name="images" />

                @if($model)
                <div class="col-md-3 pb-2">
                    <img class="img-thumbnail img-fluid"
                        src="{{ !empty($model->event_image) ? url('storage/files/event/' . $model->event_image) : url('assets/media/image/image.png') }}"
                        alt="">
                </div>
                @endif

                <x-form-upload col="3" name="banner" />

                @if($model)
                <div class="col-md-3 pb-2">
                    <img class="img-thumbnail img-fluid"
                        src="{{ !empty($model->event_banner) ? url('storage/files/event/' . $model->event_banner) : url('assets/media/image/image.png') }}"
                        alt="">
                </div>
                @endif

                <x-form-upload col="3" name="detail" />

                @if($model)
                <div class="col-md-3 pb-2">
                    <img class="img-thumbnail img-fluid"
                        src="{{ !empty($model->event_detail) ? url('storage/files/event/' . $model->event_detail) : url('assets/media/image/image.png') }}"
                        alt="">
                </div>
                @endif

                <x-form-upload col="3" name="map" />

                @if($model)
                <div class="col-md-3 pb-2">
                    <img class="img-thumbnail img-fluid"
                        src="{{ !empty($model->event_map) ? url('storage/files/event/' . $model->event_map) : url('assets/media/image/image.png') }}"
                        alt="">
                </div>
                @endif

                <x-form-upload col="3" name="mandatory" />

                @if($model)
                <div class="col-md-3 pb-2">
                    <img class="img-thumbnail img-fluid"
                        src="{{ !empty($model->event_mandatory) ? url('storage/files/event/' . $model->event_mandatory) : url('assets/media/image/image.png') }}"
                        alt="">
                </div>
                @endif

                <x-form-upload col="3" name="roundown" />

                @if($model)
                <div class="col-md-3 pb-2">
                    <img class="img-thumbnail img-fluid"
                        src="{{ !empty($model->event_roundown) ? url('storage/files/event/' . $model->event_roundown) : url('assets/media/image/image.png') }}"
                        alt="">
                </div>
                @endif

                <x-form-upload col="3" name="background" />

                @if($model)
                <div class="col-md-3 pb-2">
                    <img class="img-thumbnail img-fluid"
                        src="{{ !empty($model->event_background) ? url('storage/files/event/' . $model->event_background) : url('assets/media/image/image.png') }}"
                        alt="">
                </div>
                @endif

                <x-form-textarea col="6" name="event_description" />

                <div class="row mt-3 mb-5">
                    <div class="col-md-6 form-group">
                        <label for="">Content Page</label>
                        <x-form-input col="6" type="hidden" class="editor" name="event_page" />
                        <div id="editor">{!! $model ? $model->event_page : '' !!}</div>
                   </div>

                   <div class="col-md-6 form-group">
                        <label for="">Confirmation Page</label>
                        <x-form-input col="6" type="hidden" class="editor1" name="event_confirm_page" />
                        <div id="editor1">{!! $model ? $model->event_confirm_page : '' !!}</div>
                </div>

                </div>

                @endbind
            </div>

        </x-card>
    </x-form>
</x-layout>
