@extends('layouts.master')

@section('meta')
  <meta name="description" content="This is where we input suppliers" />
  <meta name="keywords" content="suppliers, bills" />
@endsection

@section('content')
  <div class="row">
    @include('shared.breadcrumbs', ['section' => 'suppliers'])
    <div class="col-md-12">
      <h1>Suppliers</h1>
    </div>
    <div class="col-md-12 table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Fantasy Name</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($suppliers as $supplier)
            <tr>
              <td>{{ $supplier->id }}</td>
              <td>{{ $supplier->name }}</td>
              <td>{{ $supplier->fantasy_name }}</td>
            </tr>
          @empty
            <tr>
              <td colspan="5" class="text-center">
                No records found. Would you like to <a href="{{ route('suppliers.create') }}">insert a new supplier</a>?
              </td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
@endsection
