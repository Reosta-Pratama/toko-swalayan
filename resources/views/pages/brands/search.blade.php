<div class="flex flex-col gap-0">
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
            <li>
                <x-button.icon-btn
                    id="filterBtn"
                    name="filter"
                    href="javascript:void(0)"
                    addClass="bg-bluePOS-1 border-bluePOS-1/20"
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
    
    <div id="filterBox" 
        class="hidden justify-between items-start gap-4 pt-4">
        <div class="grid grid-cols-3 gap-4 flex-1">
            <x-input.select
                id="filterProduct"
                label=""
                name="filterProduct"
                :top="true"
                :required="false"
                addClass="">
                <option value="" selected disabled>choose product</option>
                <option value="1">latest</option>
                <option value="2">Open this</option>
                <option value="3">Open this</option>
                <option value="4">Open this</option>
                <option value="5">Open this sort by</option>
            </x-input.select>

            <x-input.select
                id="filterCategory"
                label=""
                name="filterCategory"
                :top="true"
                :required="false"
                addClass="">
                <option value="" selected disabled>choose category</option>
                <option value="1">latest</option>
                <option value="2">Open this</option>
                <option value="3">Open this</option>
                <option value="4">Open this</option>
                <option value="5">Open this sort by</option>
            </x-input.select>

            <x-input.select
                id="filterStatus"
                label=""
                name="filterStatus"
                :top="true"
                :required="false"
                addClass="">
                <option value="" selected disabled>choose status</option>
                <option value="1">latest</option>
                <option value="2">Open this</option>
                <option value="3">Open this</option>
                <option value="4">Open this</option>
                <option value="5">Open this sort by</option>
            </x-input.select>
        </div>

        <div class="w-[30%] flex justify-end">
            <x-button.icon-text-btn
                name="search"
                type="submit"
                icon="{{ svg('iconsax-lin-search-normal') }}"
                addClass="test"
            />
        </div>
    </div>
</div>

<script src="{{ asset('assets/js/filterBox.js') }}"></script>