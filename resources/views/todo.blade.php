@extends('layout.default_layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if(Session::has('message'))
                    <div class="alert alert @if(Session::has('error')) alert-danger @else alert-success @endif">
                        {{Session::get('message')}}
                    </div>
                @endif
            </div>
        </div>
        <div class="row">

            <div class="col-md-6">
                <div class="todolist not-done">
                    <h1>Todos</h1>
                    {!! Form::open(['route' => 'todo.store']) !!}
                    <input type="text" name="description" class="form-control" placeholder="Add todo">
                    <button class="btn btn-success">Submit</button>
                    {!! Form::close() !!}



                    {!! Form::open(['route' => 'todo.done']) !!}
                    <button type="submit" class="btn btn-success">Done</button>

                    <ul id="sortable" class="list-unstyled">
                        @foreach($data['undone_todos'] as $todo)
                            <li class="ui-state-default">
                                <div class="checkbox">
                                    <label>
                                        <input name="id[]" type="checkbox" value="{{$todo['id']}}" />{{$todo['description']}}</label>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                    {!! Form::close() !!}


                </div>

            </div>
            <div class="col-md-6">
                <div class="todolist">
                    <h1>Already Done</h1>
                    <ul id="done-items" class="list-unstyled">
                        @foreach($data['done_todos'] as $todo)

                        <li>{{$todo['description']}} <button class="remove-item btn btn-default btn-xs pull-right"><span class="glyphicon glyphicon-remove"></span></button></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection