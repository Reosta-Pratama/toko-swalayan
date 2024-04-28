<?php
return [
    [
        'title' => 'main',
        'list' => [
            [
                'name' => 'dashboard',
                'route' => 'dashboard',
                'href' => '/',
            ],
        ]
    ],
    [
        'title' => 'Inventory',
        'list' => [
            [
                'name' => 'products',
                'route' => 'product.list',
                'href' => '/list-product',
            ],
            [
                'name' => 'create product',
                'route' => 'product.add',
                'href' => '/add-product',
            ],
            [
                'name' => 'Expired Product',
                'route' => 'product.expired',
                'href' => '/expired-product',
            ],
            [
                'name' => 'Categories',
                'route' => 'category.list',
                'href' => '/list-category',
            ],
            [
                'name' => 'Brands',
                'route' => 'brand.list',
                'href' => '/list-brand',
            ],
            [
                'name' => 'Units',
                'route' => 'unit.list',
                'href' => '/list-unit',
            ],
            [
                'name' => 'Print Barcode',
                'route' => 'barcode.print',
                'href' => '/print-barcode',
            ],
            [
                'name' => 'Print QR Code',
                'route' => 'qr.print',
                'href' => '/print-qr',
            ],
        ]
    ],
    [
        'title' => 'stock',
        'list' => [
            [
                'name' => 'Manage Stock',
                'route' => 'stock.list',
                'href' => '/list-stock',
            ],
            [
                'name' => 'Stock Adjustment',
                'route' => 'stock.adjustment',
                'href' => '/adjustment-stock',
            ],
            [
                'name' => 'Stock Transfer',
                'route' => 'stock.transfer',
                'href' => '/transfer-stock',
            ],
        ]
    ],
    [
        'title' => 'sales',
        'list' => [
            [
                'name' => 'Sales',
                'route' => 'sales.list',
                'href' => '/list-sales',
            ],
            [
                'name' => 'Sales Return',
                'route' => 'sales.return',
                'href' => '/return-sales',
            ],
            [
                'name' => 'POS',
                'route' => 'pos',
                'href' => '/pos',
            ],
        ]
    ],
    [
        'title' => 'promo',
        'list' => [
            [
                'name' => 'Coupons',
                'route' => 'coupon.list',
                'href' => '/list-coupon',
            ],
        ]
    ],
    [
        'title' => 'purchases',
        'list' => [
            [
                'name' => 'purchases',
                'route' => 'purchases.list',
                'href' => '/list-purchases',
            ],
            [
                'name' => 'purchases order',
                'route' => 'purchases.order',
                'href' => '/order-purchases',
            ],
            [
                'name' => 'purchases return',
                'route' => 'purchases.return',
                'href' => '/return-purchases',
            ],
        ]
    ],
    [
        'title' => 'finance',
        'list' => [
            [
                'name' => 'expenses',
                'route' => 'expense.list',
                'href' => '/list-expense',
            ],
            [
                'name' => 'expense category',
                'route' => 'expense.category',
                'href' => '/category-expense',
            ],
        ]
    ],
    [
        'title' => 'people',
        'list' => [
            [
                'name' => 'customers',
                'route' => 'customer.list',
                'href' => '/list-customer',
            ],
            [
                'name' => 'suppliers',
                'route' => 'supplier.list',
                'href' => '/list-supplier',
            ],
            [
                'name' => 'warehouses',
                'route' => 'warehouse.list',
                'href' => '/list-warehouse',
            ],
        ]
    ],
    [
        'title' => 'HRM',
        'list' => [
            [
                'name' => 'employees',
                'route' => 'employee.list',
                'href' => '/list-employee',
            ],
            [
                'name' => 'Designation',
                'route' => 'employee.designation',
                'href' => '/designation-employee',
            ],
            [
                'name' => 'Shift',
                'route' => 'employee.shift',
                'href' => '/shift-employee',
            ],
            [
                'name' => 'payroll',
                'route' => 'employee.payroll',
                'href' => '/payroll-employee',
            ],
        ]
    ],
    [
        'title' => 'Reports',
        'list' => [
            [
                'name' => 'Sales Report',
                'route' => 'report.sales',
                'href' => '/sales-report',
            ],
            [
                'name' => 'purchase Report',
                'route' => 'report.purchase',
                'href' => '/purchase-report',
            ],
            [
                'name' => 'inventory Report',
                'route' => 'report.inventory',
                'href' => '/inventory-report',
            ],
            [
                'name' => 'invoice Report',
                'route' => 'report.invoice',
                'href' => '/invoice-report',
            ],
            [
                'name' => 'supplier Report',
                'route' => 'report.supplier',
                'href' => '/supplier-report',
            ],
            [
                'name' => 'customer Report',
                'route' => 'report.customer',
                'href' => '/customer-report',
            ],
            [
                'name' => 'expense Report',
                'route' => 'report.expense',
                'href' => '/expense-report',
            ],
            [
                'name' => 'income Report',
                'route' => 'report.income',
                'href' => '/income-report',
            ],
            [
                'name' => 'profit loss',
                'route' => 'report.profitLoss',
                'href' => '/profitLoss-report',
            ],
        ]
    ],
    [
        'title' => 'User Management',
        'list' => [
            [
                'name' => 'Users',
                'route' => 'user.list',
                'href' => '/list-user',
            ],
            [
                'name' => 'Roles & Permission',
                'route' => 'user.role',
                'href' => '/role-user',
            ],
        ]
    ],
];
?>
