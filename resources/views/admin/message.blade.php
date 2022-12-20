@extends('admin.layout.app')

@section('title')
Wiadomości
@endsection


@section('content')
<div class="container-fluid">
    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary chat-site">
                    <h4 class="card-title">Wszystkie wiadomości</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">


                        @if (count($msgs) === 0)

                            <div class="alert alert-danger" role="alert">
                                Brak wiadomości
                            </div>

                        @else
                            <table class="table table-hover">
                                <thead class="">
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        Imię i Nazwisko
                                    </th>
                                    <th>
                                        E-mail
                                    </th>
                                    <th>
                                        Wiadomość
                                    </th>
                                     <th class="text-center">
                                        Akcja
                                    </th>
                                </thead>
                                <tbody>

                                    @foreach ($msgs as $msg)
                                        <tr>
                                            <td>
                                                {{ $msg->id }}
                                            </td>
                                            <td>
                                                {{ $msg->name }}
                                            </td>
                                            <td>
                                                {{ $msg->email }}
                                            </td>
                                            <td>
                                                {{ $msg->message }}
                                            </td>
                                            <td class="td-actions text-center">
                                                <button
                                                    type="button" rel="tooltip"
                                                    title="Usuń" class="btn btn-danger btn-link btn-sm"
                                                    onclick="event.preventDefault();
                                                        document.getElementById('delete-{{ $msg->id }}').submit();">
                                                    <i class="material-icons">close</i>
                                                </button>

                                                <form id="delete-{{ $msg->id }}"
                                                    action="{{ url('admin/delete-message/' . $msg->id) }}"
                                                    method="POST"
                                                    style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        @endif

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection