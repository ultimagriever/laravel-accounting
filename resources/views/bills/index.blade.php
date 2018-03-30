@extends($layout)

@section('meta')
  <meta name="description" content="Include your monthly bills and keep track of their due dates" />
  <meta name="keywords" content="bills, due dates" />
@endsection

@section('content')
  <div class="row">
    @include('shared.breadcrumbs', ['section' => 'bills'])
    <div class="col-md-12">
      <h1>Contas a Pagar</h1>
    </div>
    <div class="col-md-12 table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Fornecedor</th>
            <th>Descrição</th>
            <th>Montante</th>
            <th>Data de Vencimento</th>
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
                Nenhum registro encontrado. Gostaria de <a href="{{ route('bills.create') }}">inserir uma nova conta a pagar</a>?
              </td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
@endsection
