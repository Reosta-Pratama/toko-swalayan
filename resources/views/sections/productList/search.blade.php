<div class="flex justify-between items-center">
    <div>
        <x-input.input-search
            id="searchProduct"
            name="searchProduct"
            placeholder="Search..."
            addClass="px-3"
        />
    </div>

    <ul>
        <li>
            <x-button.icon-btn
                id="filterBtn"
                name="filterBtn"
                href="javascript:void(0)"
                :addClass="null"
                icon="{{ svg('iconsax-bul-printer') }}">
            </x-button.icon-btn>
        </li>
    </ul>
</div>