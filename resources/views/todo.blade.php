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



                    @if(count($data['undone_todos']))

                    {!! Form::open(['route' => 'todo.done']) !!}

                    <ul id="sortable" class="list-unstyled">
                        @foreach($data['undone_todos'] as $todo)
                            <li class="ui-state-default">
                                <div class="checkbox">
                                    <label><input name="id[]" type="checkbox" value="{{$todo['id']}}" />{{$todo['description']}}</label>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                        <button type="submit" class="btn btn-success">Done</button>

                        {!! Form::close() !!}
                    @endif


                </div>

            </div>
            <div class="col-md-6">
                <div class="todolist">
                    <h1>Already Done</h1>
                    <ul id="done-items" class="list-unstyled">
                        @if(count($data['done_todos']))
                        {!! Form::open(['route' => 'todo.delete']) !!}

                       @foreach($data['done_todos'] as $todo)

                        <li><input name="id[]" type="checkbox" value="{{$todo['id']}}" /> {{$todo['description']}}</li>
                        @endforeach
                        <button type="submit" class="btn btn-danger">Delete</button>

                        {!! Form::close() !!}
                        @endif

                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection