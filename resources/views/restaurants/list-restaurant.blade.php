@extends('layouts.main')
@section('title','Список Ресторанов')
@section('content')
    <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading ">
                    <h3>Список Пользователей</h3>
                    <a href="{{route('form-restaurants')}}" type="button" class=" btn btn-gradient btn-primary" value="primary">Добавить ресторан</a>
                </div>
                <div class="panel-body">
                    <div class="responsive-table">
                        <table id="datatables-example" class="table table-striped table-bordered" width="100%"
                               cellspacing="0">
                            <thead>
                            <tr>
                                <th>Название</th>
                                <th>Адрес</th>
                                <th>Рейтинг</th>
                                <th>Колличество голосов</th>
                                <th>Описание</th>
                                <th>Время создания</th>
                                <th>Время обновления</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($restaurants as $el)
                                <tr>
                                    <td>{{ $el->name }}</td>
                                    <td>{{ $el->address }}</td>
                                    <td>{{ $el->rating }}</td>
                                    <td>{{ $el->votes }}</td>
                                    <td>{{ $el->short_description }}</td>
                                    <td>{{ $el->created_at }}</td>
                                    <td>{{ $el->updated_at }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
