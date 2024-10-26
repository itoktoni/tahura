<x-layout>
    <x-form :model="$model">
        <x-card>
            <x-action form="form" />

                @bind($model)

                <x-form-input col="6" name="category_id" />
                <x-form-input col="6" name="category_name" />
                <x-form-input col="6" name="category_user_id" />

                @endbind

        </x-card>
    </x-form>
</x-layout>
