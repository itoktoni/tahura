<x-layout>
    <x-form :model="$model" method="GET" action="{{ moduleRoute('getPrint') }}" :upload="true">
        <x-card>
            <x-action form="print" />

            @bind($model)
                <x-form-select col="6" name="discount_code" label="Discount" :options="$discount" />
            @endbind

        </x-card>
    </x-form>
</x-layout>
