<x-layout>
    <x-form :model="$model">
        <x-card>
            <x-action form="form" />

            <div class="row">
                @bind($model)

                <x-form-input col="3" name="discount_code" />
                <x-form-input col="3" name="discount_max" />
                <x-form-input col="6" name="discount_name" />
                <x-form-input col="6" name="discount_formula" />
                <x-form-textarea col="6" name="discount_description" />

                @endbind
            </div>

        </x-card>
    </x-form>
</x-layout>
