<?php

// Home page
Breadcrumbs::register('home', function ($breadcrumbs) {
  $breadcrumbs->push('Home', route('home'));
});

// Home > Suppliers
Breadcrumbs::register('suppliers', function ($breadcrumbs) {
  $breadcrumbs->parent('home');
  $breadcrumbs->push('Suppliers', route('suppliers.index'));
});

// Home > Suppliers > New Supplier
Breadcrumbs::register('new-supplier', function ($breadcrumbs) {
  $breadcrumbs->parent('suppliers');
  $breadcrumbs->push('New Supplier', route('suppliers.create'));
});

// Home > Suppliers > Edit Supplier
Breadcrumbs::register('edit-supplier', function ($breadcrumbs, $supplier) {
  $breadcrumbs->parent('suppliers');
  $breadcrumbs->push('Edit Supplier', route('suppliers.edit', $supplier->id));
});

// Home > Bills
Breadcrumbs::register('bills', function ($breadcrumbs) {
  $breadcrumbs->parent('home');
  $breadcrumbs->push('Bills', route('bills.index'));
});

// Home > Bills > New Bill
Breadcrumbs::register('new-bill', function ($breadcrumbs) {
  $breadcrumbs->parent('bills');
  $breadcrumbs->push('New Bill', route('bills.create'));
});

// Home > Suppliers > Edit Supplier
Breadcrumbs::register('edit-bill', function ($breadcrumbs, $bill) {
  $breadcrumbs->parent('bills');
  $breadcrumbs->push('Edit Bill', route('bills.edit', $bill->id));
});
