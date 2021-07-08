@extends('layouts.main')

@section('content')
    <h1 class="my-4">Sitemap</h1>
    <div class="my-5">
        @php
            $routes = Route::getRoutes()->getRoutes();
            asort($routes);
        @endphp
        @foreach ($routes as $route)
            @php
                $uri = $route->uri();
                $method = join(' ', $route->methods());
            @endphp
            @if ($uri[0] !== '_' && $uri !== 'sitemap' && $method !== 'POST' && $method !== 'DELETE')
                <div><a href="{{ $route->uri() }}">{{ $route->uri() }}</a></div>
            @endif
        @endforeach
    </div>
@endsection