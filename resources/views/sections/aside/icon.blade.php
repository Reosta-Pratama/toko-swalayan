@if ($subItem['route'] === "dashboard")
    <x-iconsax-bul-status-up/>

@elseif  ($subItem['route'] === "product.list")
    <x-iconsax-bul-box />

@elseif ($subItem['route'] === "product.add")
    <x-iconsax-bul-box-add />

@elseif ($subItem['route'] === "product.expired")
    <x-iconsax-bul-box-time />

@elseif ($subItem['route'] === "category.list")
    <x-iconsax-bul-category-2 />

@elseif ($subItem['route'] === "brand.list")
    <x-iconsax-bul-tag-2 />

@elseif ($subItem['route'] === "unit.list")
    <x-iconsax-bul-percentage-square />

@elseif ($subItem['route'] === "barcode.print")
    <x-iconsax-bul-barcode />

@elseif ($subItem['route'] === "qr.print")
    <x-iconsax-bul-scan-barcode />

@elseif ($subItem['route'] === "stock.list")
    <x-iconsax-bul-box-search />

@elseif ($subItem['route'] === "stock.adjustment")
    <x-iconsax-bul-shop-add />

@elseif ($subItem['route'] === "stock.transfer")
    <x-iconsax-bul-group />

@elseif ($subItem['route'] === "sales.list")
    <x-iconsax-bul-shopping-cart />

@elseif ($subItem['route'] === "sales.return")
    <x-iconsax-bul-back-square />

@elseif ($subItem['route'] === "pos")
    <x-iconsax-bul-card-pos />

@elseif ($subItem['route'] === "coupon.list")
    <x-iconsax-bul-ticket-discount />       

@elseif ($subItem['route'] === "purchases.list")
    <x-iconsax-bul-briefcase />

@elseif ($subItem['route'] === "purchases.order")
    <x-iconsax-bul-brifecase-timer />

@elseif ($subItem['route'] === "purchases.return")
    <x-iconsax-bul-brifecase-cross />

@elseif ($subItem['route'] === "expense.list")
    <x-iconsax-bul-card />

@elseif ($subItem['route'] === "expense.category")
    <x-iconsax-bul-cards />

@elseif ($subItem['route'] === "customer.list")
    <x-iconsax-bul-user-octagon />

@elseif ($subItem['route'] === "supplier.list")
    <x-iconsax-bul-user-tag />

@elseif ($subItem['route'] === "warehouse.list")
    <x-iconsax-bul-shop />




@endif