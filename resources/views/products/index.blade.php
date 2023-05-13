@extends('layouts.admin')

@section('title', 'Lista de Produtos')
@section('content-header', 'Listagem de produtos')
@section('content-actions')
    <a href="{{ route('products.create') }}" class="btn btn-primary">Cadastrar produto</a>
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('plugins/sweetalert2/sweetalert2.min.css') }}">
@endsection
@section('content')

    <div class="card product-list">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Código</th>
                        <th>Preço</th>
                        <th>Quantidade</th>
                        <th>Status</th>
                        <th>Criado em</th>
                        <th>Validade</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $loop->index }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->barcode }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->quantity }}</td>
                            <td>
                                <span
                                    class="right badge badge-{{ $product->status ? 'success' : 'danger' }}">{{ $product->status ? 'Ativo' : 'Inativo' }}</span>
                            </td>

                            <td>{{ date('d/m/Y', strtotime($product->created_at)) }}</td>

                            @if ($product->validity == null)
                                <td>indeterminada</td>
                            @else
                                <td>{{ date('d/m/Y', strtotime($product->validity)) }}</td>
                            @endif

                            <td>

                                <form id="delete-form" action="{{ route('products.destroy', $product->id) }}"
                                    method="POST">
                                    <a href="{{ route('products.edit', $product) }}" class="btn btn-primary"><i
                                            class="fas fa-edit"></i></a>
                                    @csrf
                                    @method('DELETE')
                                    <a class="btn btn-danger btn-delete"
                                        href="{{ route('products.destroy', $product->id) }}"
                                        onclick="event.preventDefault(); document.getElementById('delete-form').submit();">
                                        <i class="fas fa-trash"></i>
                                    </a>

                                </form>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $products->render() }}
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('plugins/sweetalert2/sweetalert2.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $(document).on('click', '.btn-delete', function() {
                $this = $(this);
                const swalWithBootstrapButtons = Swal.mixin({
                    customClass: {
                        confirmButton: 'btn btn-success',
                        cancelButton: 'btn btn-danger'
                    },
                    buttonsStyling: false
                })

                swalWithBootstrapButtons.fire({
                    title: 'Você tem certeza?',
                    text: "Realmente quer deletar este produto?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Sim, eu quero!',
                    cancelButtonText: 'Não',
                    reverseButtons: true
                }).then((result) => {
                    if (result.value) {
                        $.post($this.data('url'), {
                            _method: 'DELETE',
                            _token: '{{ csrf_token() }}'
                        }, function(res) {
                            $this.closest('tr').fadeOut(500, function() {
                                $(this).remove();
                            })
                        })
                    }
                })
            })
        })
    </script>
@endsection
