@extends('layouts.admin')

@section('title', 'Lista de Usuários')
@section('content-header', 'Lista de usuários')
@section('content-actions')
    <a href="{{route('categories.create')}}" class="btn btn-primary">Adcionar categoria</a>
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('plugins/sweetalert2/sweetalert2.min.css') }}">
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Cadastrado em</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{$loop->index}}</td>
                        <td>{{$category->name}}</td>
                        <td>{{$category->description}}</td>
                        <td>{{date( 'd/m/Y' , strtotime($category->created_at))}}</td>
                        <td>

                            <form id="delete-form" action="{{ route('category.destroy', $category->id) }}" method="POST">
                                <a href="{{ route('category.edit', $category) }}" class="btn btn-primary"><i
                                    class="fas fa-edit"></i></a>
                                @csrf
                                @method('DELETE')
                                <a class="btn btn-danger btn-delete" href="{{ route('category.destroy', $category->id) }}" 
                                    onclick="event.preventDefault(); document.getElementById('delete-form').submit();">
                                    <i
                                    class="fas fa-trash"></i>
                                </a>
                                
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $customers->render() }}
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('plugins/sweetalert2/sweetalert2.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            $(document).on('click', '.btn-delete', function () {
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
                    text: "Realmente quer deletar esta categoria?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Sim, eu quero!',
                    cancelButtonText: 'Não',
                    reverseButtons: true
                }).then((result) => {
                    if (result.value) {
                        $.post($this.data('url'), {_method: 'DELETE', _token: '{{csrf_token()}}'}, function (res) {
                            $this.closest('tr').fadeOut(500, function () {
                                $(this).remove();
                            })
                        })
                    }
                })
            })
        })
    </script>
@endsection
