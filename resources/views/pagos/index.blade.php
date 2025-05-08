@extends('layouts.menu_dash')

@section('content')
<div class="row justify-content-center">
    <div class="col-8">
        <h1 class="alert alert-success">Listado de Pagos</h1>
        <a href="{{ route('pagos.create') }}" class="btn btn-success mb-3">
            <i class="fas fa-plus"></i> Nuevo Pago
        </a>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Monto</th>
                    <th>Forma de Pago</th>
                    <th>Fecha</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($pagos as $pago)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $pago->monto_formateado }}</td>
                    <td>{{ $pago->forma_pago }}</td>
                    <td>{{ $pago->fecha_pago }}</td>
                    <td>
                        <div class="d-flex gap-2">
                            <a href="{{ route('pagos.edit', $pago->id_pago) }}" class="btn btn-warning btn-sm">
                                <i class="fas fa-edit"></i> Editar
                            </a>
                            <form action="{{ route('pagos.destroy', $pago->id_pago) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar este pago?')">
                                    <i class="fas fa-trash"></i> Eliminar
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center">No hay pagos registrados</td>
                </tr>
                @endforelse
            </tbody>
        </table>

        {{ $pagos->links() }}
    </div>
</div>
@endsection
