@extends('layouts.admin')

@section('title', 'Saídas')
@section('content-header', 'Saídas de caixa')
@section('content-actions')
<a href="{{route('cart.index')}}" class="btn btn-primary">Abrir venda</a>
<a href="{{route('outflow.create')}}" class="btn btn-danger">Realizar saída de caixa</a>
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
                    <th>Valor</th>
                    <th>Descrição</th>
                    <th>Dia de retirada</th>
                    <th>Usuário</th>
                </tr>
            </thead>
            <tbody>
                @if (isset($outflow))
                
                @foreach ($outflow as $outflows)
                
                <tr>
                    <td>{{$loop->index}}</td>
                    <td>{{$outflows->value}}</td>
                    <td>{{$outflows->description}}</td>
                    <td>{{$outflows->created_at}}</td>
                    <td>
                        @foreach ($user as $users)
                            @if ($user->id == $outflows->user)
                                {{$user->name}}
                            @endif
                        @endforeach
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
        {{ $outflows->render() }}
        @endif
        
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </tbody>
</table>
        
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
                text: "Realmente quer deletar a saída de caixa?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Sim, eu quero',
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
