@extends($layout)

@section('meta')
  <meta name="description" content="This is where we input suppliers" />
  <meta name="keywords" content="suppliers, bills" />
@endsection

@section('content')
  <div class="row">
    @include('shared.breadcrumbs', ['section' => 'suppliers'])
    <div class="col-md-12">
      <h1>Fornecedor</h1>
    </div>
    <div class="col-md-12 table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Razão Social</th>
            <th>Nome Fantasia</th>
            <th colspan="3" class="text-center">
              <a href="{{ route('suppliers.create') }}" class="btn btn-primary">
                Inserir
              </a>
            </th>
          </tr>
        </thead>
        <tbody>
          @forelse ($suppliers as $supplier)
            <tr>
              <td>{{ $supplier->id }}</td>
              <td>{{ $supplier->full_name }}</td>
              <td>{{ $supplier->fantasy_name }}</td>
              <td class="text-center">
                <a href="{{ route('suppliers.show', $supplier->id) }}" class="btn btn-link">
                  <i class="fa fa-search"></i>
                </a>
              </td>
              <td class="text-center">
                <a href="{{ route('suppliers.edit', $supplier->id) }}" class="btn btn-link">
                  <i class="fa fa-pencil"></i>
                </a>
              </td>
              <td class="text-center">
                {!! Form::open(['method' => 'DELETE', 'route' => ['suppliers.destroy', $supplier->id]]) !!}
                  <button type="submit" class="btn btn-danger">
                    <i class="fa fa-times"></i>
                  </button>
                {!! Form::close() !!}
              </td>
            </tr>
          @empty
            <tr>
              <td colspan="6" class="text-center">
                Nenhum registro encontrado. Gostaria de <a href="{{ route('suppliers.create') }}">adicionar um novo fornecedor</a>?
              </td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
@endsection
