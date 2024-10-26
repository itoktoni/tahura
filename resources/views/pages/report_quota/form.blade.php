<x-layout>
    <x-form :model="$model" method="GET" action="{{ moduleRoute('getPrint') }}" :upload="true">
        <x-card>
            <x-action form="print" />

            @bind($model)
                <x-form-select col="6" name="event_id" label="Event" :options="$event" />
            @endbind

        </x-card>
    </x-form>
</x-layout>
