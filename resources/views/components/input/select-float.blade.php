<div class="relative">
    <label for="{{ $id }}"
        class="absolute z-[1] top-2 left-2
            scale-75 capitalize select-none
            text-grayPOS-1">
        {{ $label }}
    </label>

    <select 
        id="{{ $id }}"
        name="{{ $name }}"
        @if ($required)
            required
        @endif
        class="bg-white rounded-lg appearance-none capitalize text-sm
            pt-[1.625rem] pr-8 pb-[.625rem] pl-3
            bg-[url('../../public/assets/img/icon/down.png')] bg-no-repeat bg-[right_.75rem_center] bg-[length:20px_20px]
            border border-solid border-grayPOS-3
            transition-all duration-300 ease-in-out
            focus:border-bluePOS-1">
        {{ $slot }}
    </select>
</div>