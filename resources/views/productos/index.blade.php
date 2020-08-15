@extends('layout')

@section('title', 'Productos')

@section('content')

<div class="container">
	<div class="d-flex justify-content-between align-items-center mb-3">
		<h1 class="display-4 mb-0">Portafolio</h1>

		@auth
			<a class="btn btn-primary" href="{{ route('productos.create') }}">
				Agregar producto
			</a>
		@endauth
	</div>

	<ul class="list-group">
		@forelse($productos as $producto)
			<li class="list-group-item border-0 mb-3 shadow-sm">
				<a class="text-secondary d-flex justify-content-between align-items-center" href="{{ route('productos.show', $producto) }}">
					<span class="font-weight-bold">
						{{ $producto->nombre }}
					</span>
					<span class="text-black-50">
						{{ $project->created_at->format('d/m/Y') }}
					</span>
				</a>
			</li>
		@empty
			<li class="list-group-item border-0 mb-3 shadow-sm">
				No hay productos
			</li>
		@endforelse

		{{ $productos->links() }}
	</ul>
</div>

@endsection