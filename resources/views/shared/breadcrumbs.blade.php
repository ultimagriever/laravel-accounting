<div class="col-md-12 mt-3 mb-3">
  @if (isset($argument))
    {{ Breadcrumbs::render($section, $argument) }}
  @else
    {{ Breadcrumbs::render($section) }}
  @endif
</div>
