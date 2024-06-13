<div class="relative flex gap-2
    @if ($top)
        flex-col 
    @endif">

    @if ($label !== '' || $label != null)
        <label for="{{ $id }}"
            class="capitalize">
            {{ $label }}
        </label>
    @endif

    <select 
        id="{{ $id }}"
        name="{{ $name }}"
        @if ($required)
            required
        @endif
        class="bg-white w-full appearance-none rounded-lg 
            px-3 py-[0.75rem]
            text-sm text-blackPOS-2 capitalize
            bg-[url('../../public/assets/img/icon/down.png')] bg-no-repeat bg-[right_.75rem_center] bg-[length:20px_20px]
            border border-solid border-grayPOS-3
            transition-all duration-300 ease-in-out
            focus:border-bluePOS-1 
            focus-within:outline-none focus-within:outline-0 {{ $addClass }}">
        {{ $slot }}
    </select>
</div>