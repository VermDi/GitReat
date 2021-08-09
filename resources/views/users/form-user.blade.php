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
                    <label class="col-sm-2 control-label text-right">Name</label>
                    <div class="col-sm-10 form-user-bottom">
                        <input type="text" class="form-control" placeholder="Name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label text-right">Password</label>
                    <div class="col-sm-10 form-user-bottom">
                        <input type="text" class="form-control" placeholder="Password">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label text-right">E-mail</label>
                    <div class="col-sm-10 form-user-bottom">
                        <input type="email" class="form-control" placeholder="E-mail">
                    </div>
                </div>
                <div>
                    <a href="{{route('form-user')}}"  class="btn btn-gradient btn-primary" style="float: right" >Добавить</a>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
