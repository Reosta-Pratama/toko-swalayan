<ul class="flex items-center gap-2">
    <li>
        <x-button.icon-btn
            id="pdfBtn"
            name="PDF"
            href="/"
            addClass="border-grayPOS-1/20"
            textColor="text-grayPOS-1"
            :target="false"
            icon='<img src="{{ asset("assets/img/icon/pdf.png") }}" alt="pdfBtn" class="w-full h-full object-contain">'>
        </x-button.icon-btn>
    </li>

    <li>
        <x-button.icon-btn
            id="excelBtn"
            name="Excel"
            href="/"
            addClass="border-grayPOS-1/20"
            textColor="text-grayPOS-1"
            :target="false"
            icon='<img src="{{ asset("assets/img/icon/xls.png") }}" alt="excelBtn" class="w-full h-full object-contain">'>
        </x-button.icon-btn>
    </li>

    <li>
        <x-button.icon-btn
            id="printBtn"
            name="print"
            href="/"
            addClass="border-grayPOS-1/20"
            textColor="text-grayPOS-1"
            :target="false"
            icon="{{ svg('iconsax-bul-printer') }}">
        </x-button.icon-btn>
    </li>

    <li>
        <x-button.icon-btn
            id="refreshBtn"
            name="refresh"
            href="javascript:window.location.href=window.location.href"
            addClass="border-grayPOS-1/20"
            textColor="text-grayPOS-1"
            :target="false"
            icon="{{ svg('iconsax-bul-rotate-left-1') }}">
        </x-button.icon-btn>
    </li>
</ul>