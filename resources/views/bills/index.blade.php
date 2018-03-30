@extends('layouts.master')

@section('meta')
  <meta name="description" content="Include your monthly bills and keep track of their due dates" />
  <meta name="keywords" content="bills, due dates" />
@endsection

@section('content')
  <div class="row">
    @include('shared.breadcrumbs', ['section' => 'bills'])
    <div class="col-md-12">
      <h1>Bills</h1>
    </div>
    <div class="col-md-12 table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Supplier</th>
            <th>Description</th>
            <th>Amount</th>
            <th>Due Date</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($bills as $bill)
            <tr>
              <td>{{ $bill->id }}</td>
              <td>{{ $bill->supplier->name }}</td>
              <td>{{ $bill->description }}</td>
              <td>{{ $bill->amount }}</td>
              <td>{{ $bill->due_date }}</td>
            </tr>
          @empty
            <tr>
              <td colspan="5" class="text-center">
                No records found. Would you like to <a href="{{ route('bills.create') }}">insert a new bill</a>?
              </td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
@endsection
