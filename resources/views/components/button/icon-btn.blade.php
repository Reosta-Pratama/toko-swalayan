<div class="relative">
    <button 
        id="{{ $id }}"
        type="{{ $type }}"
        @if ($onclick != null)
            onclick="{{ $onclick }}"
        @endif
        onmouseenter="showTooltip('{{ $id }}Tooltip')"
        onmouseleave="hideTooltip('{{ $id }}Tooltip')"
        class="w-11 h-11 
            flex justify-center items-center rounded-lg 
            border border-solid border-grayPOS-1/20 {{ $addClass ?? '' }}">
        <span class="w-6 h-6">
            {{ $icon }}
        </span>
    </button>

    <x-tooltip.tooltip
        id="{{ $id }}Tooltip"
        class="tooltip opacity-0 invisible">
        {{ $name }}
    </x-tooltip.tooltip>
</div>

<script>
    function showTooltip(id) {
        var tooltip = document.getElementById(id);
        tooltip.classList.remove('opacity-0', 'invisible');
        tooltip.classList.add('opacity-100', 'visible');
    }

    function hideTooltip(id) {
        var tooltip = document.getElementById(id);
        tooltip.classList.remove('opacity-100', 'visible');
        tooltip.classList.add('opacity-0', 'invisible');
    }
</script>
