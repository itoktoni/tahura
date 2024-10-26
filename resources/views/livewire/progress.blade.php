<div>
    @if (!empty($batch))

    <div wire:poll class="progress">

        <div class="bar" style="width: {{ $percent }}%"></div>

    </div>

    @endif

</div>