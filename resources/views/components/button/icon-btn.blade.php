<div class="relative">
    <a href="http://" target="_blank" rel="noopener noreferrer"></a>
    <a 
        id="{{ $id }}"
        href="{{ $href }}"
        target="_blank"
        rel="noopener noreferrer"
        @if ($onclick != null)
            onclick="{{ $onclick }}"
        @endif
        onmouseenter="showTooltip('{{ $id }}Tooltip')"
        onmouseleave="hideTooltip('{{ $id }}Tooltip')"
        class="w-11 h-11 
            flex justify-center items-center rounded-lg 
            border border-solid border-grayPOS-1/20 {{ $addClass ?? '' }}">
        <span class="w-6 h-6 text-grayPOS-1">
            {{ $icon }}
        </span>
    </a>

    <x-tooltip.tooltip
        id="{{ $id }}Tooltip"
        class="tooltip opacity-0 invisible">
        {{ $name }}
    </x-tooltip.tooltip>
</div>


