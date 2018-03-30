<?php

// Home page
Breadcrumbs::register('home', function ($breadcrumbs) {
  $breadcrumbs->push('Home', route('home'));
});

// Home > Suppliers
Breadcrumbs::register('suppliers', function ($breadcrumbs) {
  $breadcrumbs->parent('home');
  $breadcrumbs->push('Fornecedores', route('suppliers.index'));
});

// Home > Suppliers > New Supplier
Breadcrumbs::register('new-supplier', function ($breadcrumbs) {
  $breadcrumbs->parent('suppliers');
  $breadcrumbs->push('Novo Fornecedor', route('suppliers.create'));
});

// Home > Suppliers > Show Supplier
Breadcrumbs::register('show-supplier', function ($breadcrumbs, $supplier) {
  $breadcrumbs->parent('suppliers');
  $breadcrumbs->push($supplier->full_name, route('suppliers.show', $supplier->id));
});

// Home > Suppliers > Edit Supplier
Breadcrumbs::register('edit-supplier', function ($breadcrumbs, $supplier) {
  $breadcrumbs->parent('show-supplier', $supplier);
  $breadcrumbs->push('Editar Fornecedor', route('suppliers.edit', $supplier->id));
});

// Home > Bills
Breadcrumbs::register('bills', function ($breadcrumbs) {
  $breadcrumbs->parent('home');
  $breadcrumbs->push('Contas a Pagar', route('bills.index'));
});

// Home > Bills > New Bill
Breadcrumbs::register('new-bill', function ($breadcrumbs) {
  $breadcrumbs->parent('bills');
  $breadcrumbs->push('Nova Conta a Pagar', route('bills.create'));
});

// Home > Suppliers > Edit Supplier
Breadcrumbs::register('edit-bill', function ($breadcrumbs, $bill) {
  $breadcrumbs->parent('bills');
  $breadcrumbs->push('Editar Conta a Pagar', route('bills.edit', $bill->id));
});
