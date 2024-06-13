<?php

use Illuminate\Support\Facades\Route;

// Main ------------------------------------------------------------------------------
Route::get('/', function () {
    return view('pages.dashboard');
})->name("dashboard");

// Inventory ------------------------------------------------------------------------------
Route::get('/list-product', function () {
    return view('pages.product.index');
})->name("product.list");

Route::get('/add-product', function () {
    return view('pages.dashboard');
})->name("product.add");

Route::get('/expired-product', function () {
    return view('pages.expiredProduct.index');
})->name("product.expired");

Route::get('/list-category', function () {
    return view('pages.categories.index');
})->name("category.list");

Route::get('/list-brand', function () {
    return view('pages.brands.index');
})->name("brand.list");

Route::get('/list-unit', function () {
    return view('pages.units.index');
})->name("unit.list");

Route::get('/print-barcode', function () {
    return view('pages.dashboard');
})->name("barcode.print");

Route::get('/print-qr', function () {
    return view('pages.dashboard');
})->name("qr.print");

// Manage Stock ------------------------------------------------------------------------------
Route::get('/list-stock', function () {
    return view('pages.dashboard');
})->name("stock.list");

Route::get('/adjustment-stock', function () {
    return view('pages.dashboard');
})->name("stock.adjustment");

Route::get('/transfer-stock', function () {
    return view('pages.dashboard');
})->name("stock.transfer");

// Sales ------------------------------------------------------------------------------
Route::get('/list-sales', function () {
    return view('pages.dashboard');
})->name("sales.list");

Route::get('/return-sales', function () {
    return view('pages.dashboard');
})->name("sales.return");

Route::get('/pos', function () {
    return view('pages.dashboard');
})->name("pos");

// Promo ------------------------------------------------------------------------------
Route::get('/list-coupon', function () {
    return view('pages.dashboard');
})->name("coupon.list");

// Purchase ------------------------------------------------------------------------------
Route::get('/list-purchases', function () {
    return view('pages.dashboard');
})->name("purchases.list");

Route::get('/order-purchases', function () {
    return view('pages.dashboard');
})->name("purchases.order");

Route::get('/return-purchases', function () {
    return view('pages.dashboard');
})->name("purchases.return");

// Expense ------------------------------------------------------------------------------
Route::get('/list-expense', function () {
    return view('pages.dashboard');
})->name("expense.list");

Route::get('/category-expense', function () {
    return view('pages.dashboard');
})->name("expense.category");

// People ------------------------------------------------------------------------------
Route::get('/list-customer', function () {
    return view('pages.dashboard');
})->name("customer.list");

Route::get('/list-supplier', function () {
    return view('pages.dashboard');
})->name("supplier.list");

Route::get('/list-warehouse', function () {
    return view('pages.dashboard');
})->name("warehouse.list");

// HRM ------------------------------------------------------------------------------
Route::get('/list-employee', function () {
    return view('pages.dashboard');
})->name("employee.list");

Route::get('/designation-employee', function () {
    return view('pages.dashboard');
})->name("employee.designation");

Route::get('/shift-employee', function () {
    return view('pages.dashboard');
})->name("employee.shift");

Route::get('/payroll-employee', function () {
    return view('pages.dashboard');
})->name("employee.payroll");

// Report ------------------------------------------------------------------------------
Route::get('/sales-report', function () {
    return view('pages.dashboard');
})->name("report.sales");

Route::get('/purchase-report', function () {
    return view('pages.dashboard');
})->name("report.purchase");

Route::get('/inventory-report', function () {
    return view('pages.dashboard');
})->name("report.inventory");

Route::get('/invoice-report', function () {
    return view('pages.dashboard');
})->name("report.invoice");

Route::get('/supplier-report', function () {
    return view('pages.dashboard');
})->name("report.supplier");

Route::get('/customer-report', function () {
    return view('pages.dashboard');
})->name("report.customer");

Route::get('/expense-report', function () {
    return view('pages.dashboard');
})->name("report.expense");

Route::get('/income-report', function () {
    return view('pages.dashboard');
})->name("report.income");

Route::get('/profitLoss-report', function () {
    return view('pages.dashboard');
})->name("report.profitLoss");

// Permission ------------------------------------------------------------------------------
Route::get('/list-user', function () {
    return view('pages.dashboard');
})->name("user.list");

Route::get('/role-user', function () {
    return view('pages.dashboard');
})->name("user.role");
