@extends('admin.layout.app')

@section('title')
Konkursy
@endsection


@section('content')
<div class="container-fluid">
    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary chat-site">
                    <h4 class="card-title">Konkurs - {{ $nr }}</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">


                        @if (count($competitions) === 0)

                            <div class="alert alert-danger" role="alert">
                                Brak wpisów
                            </div>

                        @else
                            <table class="table table-hover">
                                <thead class="">
                                    <th>
                                        Nr sklepu
                                    </th>
                                    <th>
                                        Team
                                    </th>
                                    <th>
                                        Kraj
                                    </th>
                                    <th>
                                        Imię i Nazwisko
                                    </th>
                                    <th>
                                        E-mail
                                    </th>
                                    <th>
                                        Link
                                    </th>
                                    <th class="text-center">
                                        Akcja
                                    </th>
                                </thead>
                                <tbody>

                                    @foreach ($competitions as $competition)
                                        <tr>
                                            <td>
                                                {{ $competition->nr_shop }}
                                            </td>
                                            <td>
                                                @if (!empty($competition->size_team)) 
                                                    {{ $competition->size_team }}
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td>
                                                {{ $competition->country }}
                                            </td>
                                            <td>
                                                {{ $competition->name }}
                                            </td>
                                            <td>
                                                {{ $competition->email }}
                                            </td>
                                            <td>
                                                @if (!empty($competition->link)) 
                                                    <a target="_blank" href="{{ $competition->link }}"><span class="material-icons">link</span></a>
                                                @endif
                                            </td>
                                            <td class="td-actions text-center">
                                                @if (!empty($competition->image)) 
                                                    <button type="button" class="btn btn-primary btn-link  btn-sm" data-toggle="modal" data-target="#modal-{{ $competition->id }}" rel="tooltip" title="Szczegóły">
                                                        <span class="material-icons">info</span>
                                                    </button>
                                                @endif
                                                
                                                <button
                                                    type="button" rel="tooltip"
                                                    title="Usuń" class="btn btn-danger btn-link btn-sm"
                                                    onclick="event.preventDefault();
                                                        document.getElementById('delete-{{ $competition->id }}').submit();">
                                                    <i class="material-icons">close</i>
                                                </button>

                                                <form id="delete-{{ $competition->id }}"
                                                    action="{{ url('admin/delete-competition/' . $competition->id) }}"
                                                    method="POST"
                                                    style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </td>
                                        </tr>

                                        <!-- Modal -->
                                        <div class="modal fade" id="modal-{{ $competition->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">{{ $competition->name }}</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <img class="img-fluid" src="{{ URL::asset('storage/comp' . $competition->image) }}" alt="">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
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
