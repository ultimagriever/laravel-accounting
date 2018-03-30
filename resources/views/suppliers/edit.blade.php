@extends($layout)

@section('content')
  <div class="row">
    @include('shared.breadcrumbs', ['section' => 'edit-supplier', 'argument' => $supplier])
    <div class="col-md-12">
      {!! Form::model($supplier, ['method' => 'put', 'route' => ['suppliers.update', $supplier->id], 'id' => 'suppliers-form', 'class' => 'mt-3']) !!}
        @include('suppliers.form', ['submitButtonText' => 'Atualizar'])
      {!! Form::close() !!}
    </div>
  </div>
@endsection
