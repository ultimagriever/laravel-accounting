@extends($layout)

@section('content')
  @if ($errors->any())
    @foreach ($errors->all() as $error)
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ $error }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endforeach
  @endif

  <div class="row">
    @include('shared.breadcrumbs', ['section' => 'new-supplier'])
    <div class="col-md-12">
      {!! Form::open(['route' => 'suppliers.store', 'id' => 'suppliers-form', 'class' => 'mt-3']) !!}
        @include('suppliers.form', ['submitButtonText' => 'Inserir'])
      {!! Form::close() !!}
    </div>
  </div>
@endsection
