@extends('layouts.main')
@section('title','Список пользователей')
@section('content')
    <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading list-user-panel ">
                    <h3>Список Пользователей</h3>
                    <div><a href="{{route('form-user')}}" type="button" class=" btn btn-gradient btn-primary"
                            value="primary">Добавить пользователя</a></div>
                </div>
                <div class="panel-body">
                    <div class="responsive-table">
                        <table id="datatables-example" class="table table-striped table-bordered" width="100%"
                               cellspacing="0">
                            <thead>
                            <tr>
                                <th>Имя</th>
                                <th>E-mail</th>
                                <th>Полное Имя</th>
                                <th>Время создания</th>
                                <th>Время обновления</th>
                                <th>Рестораны</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $el)
                                <tr>
                                    <td>{{ $el->name }}</td>
                                    <td>{{ $el->email }}</td>
                                    <td>{{ $el->fullName }}</td>
                                    <td>{{$el->created_at}}</td>
                                    <td>{{ $el->updated_at }}</td>
                                    <td>@foreach($el->restaurants as $restaurant)
                                            {{$restaurant->name}} <br>
                                        @endforeach
                                    </td>
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
