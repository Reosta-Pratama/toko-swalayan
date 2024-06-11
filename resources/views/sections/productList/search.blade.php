<div class="flex justify-between items-center">
    <div>
        <x-input.input-search
            id="searchProduct"
            name="searchProduct"
            placeholder="Search..."
            addClass="px-3"
        />
    </div>

    <ul class="flex items-center gap-2">
        <li class="">
            <x-button.icon-btn
                id="filterBtn"
                name="filter"
                href="javascript:void(0)"
                :addClass="'bg-bluePOS-1 border-bluePOS-1/20'"
                textColor="text-white"
                :target="false"
                icon="{{ svg('iconsax-bol-filter') }}">
            </x-button.icon-btn>
        </li>

        <li>
            <x-input.select-float
                id="sortBtn"
                name="sorting"
                :required="false"
                :addClass="null"
                label="sort by">
                    <option value="1">latest</option>
                    <option value="2">Open this</option>
                    <option value="3">Open this</option>
                    <option value="4">Open this</option>
                    <option value="5">Open this sort by</option>
            </x-input.select-float>
        </li>
    </ul>
</div>