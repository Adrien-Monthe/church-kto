@extends('backend.layouts.app')

@section('page-title', "Listes des Prières")

@section('content')

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <a href="{{ route('prayers.create')  }}" class="btn btn-primary btn-primary-custom"><i
                        class="bi bi-bag-plus me-1"></i> Ajouter une prière</a>
                <br>
                <br>
                <div class="card recent-sales overflow-auto">
                    <div class="card-body">
                        <h5 class="card-title">Listes des Prieres</h5>

                        <table class="table table-borderless datatable">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Titre</th>
                                <th scope="col">Sous Titre</th>
                                <th scope="col">Actions</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($prayers as $prayer)
                                <tr>

                                    <th scope="row"><a href="#">{{ $prayer->id }}</a></th>
                                    <td>{{ $prayer->title }}</td>
                                    <td>{{ $prayer->sub_title }}</td>

                                    <td>
                                        <form action="{{ route('prayers.destroy',[app()->getLocale() ,$prayer->id]) }}"
                                              method="Post">
                                            <a class="btn btn-info"
                                               href="{{ route('prayers.show',[app()->getLocale() ,$prayer->id]) }}"><i
                                                    class="bi bi-eye"></i></a>

                                            <a class="btn btn-warning"
                                               href="{{ route('prayers.edit',[app()->getLocale() ,$prayer->id]) }}">
                                                <i class="bi bi-pencil-square"></i> </a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"
                                                    ><i class="bi bi-trash"></i></button>
                                        </form>
                                    </td>

                                </tr>
                            @endforeach


                            </tbody>
                        </table>

                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
