<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <title>{{ env('APP_NAME') }}</title>
    <link href="/css/app.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript" src="/js/app.js"></script>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Pamela Argentino" />
    @section('meta')
      <meta name="description" content="Some default meta description" />
      <meta name="keywords" content="Some, default, meta, keywords" />
    @endsection
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="/">Laravel Accounting</a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#collapsible"
          aria-controls="collapsible"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="collapsible">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a href="{{ route('suppliers.index') }}" class="nav-link">
                Fornecedores
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('bills.index') }}" class="nav-link">
                Contas a Pagar
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
      @yield('content')
    </div>
    @include('shared.modal')
  </body>
</html>
