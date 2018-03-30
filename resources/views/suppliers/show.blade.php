@extends($layout)

@section('content')
  <div class="row">
    @include('shared.breadcrumbs', ['section' => 'show-supplier', 'argument' => $supplier])
    <div class="col-md-12">
      <h1>{{ $supplier->full_name }}</h1>
    </div>
    <div class="col-md-12">
      <p class="lead">{{ $supplier->fantasy_name }}</p>
    </div>
  </div>
@endsection
