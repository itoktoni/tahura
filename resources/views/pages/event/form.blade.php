<x-layout>
    <x-form :model="$model">
        <x-card>
            <x-action form="form" />

            <div class="row">
                @bind($model)
                    
                <x-form-input col="6" name="event_id" />
                <x-form-input col="6" name="event_name" />
                <x-form-input col="6" name="event_price" />
                <x-form-input col="6" name="event_description" />

                @endbind
            </div>

        </x-card>
    </x-form>
</x-layout>
