@extends('layouts.main')
@section('title','Форма добавления')
@section('content')
    <div class="panel form-element-padding">
        <div class="panel-heading">
            <h4>Форма добавления</h4>
        </div>
        <div class="panel-body" style="padding-bottom:30px;">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="col-sm-2 control-label text-right">Название</label>
                    <div class="col-sm-10 form-user-bottom">
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label text-right">Адрес</label>
                    <div class="col-sm-10 form-user-bottom">
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label text-right">Описание</label>
                    <div class="col-sm-10 form-user-bottom">
                        <textarea type="text" class="form-control" style="resize: none" rows="10"></textarea>
                    </div>
                </div>
                <div>
                    <a href="{{route('form-restaurants')}}"  class="btn btn-gradient btn-primary" style="float: right" >Добавить</a>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
