@extends('layout.default_layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">

            </div>
        </div>
        <div class="row">

            <div class="col-md-6">
                <div class="todolist not-done">
                    <h1>Todos</h1>
                    <input type="text" name="description" class="form-control" placeholder="Add todo">
                    <button class="btn btn-success">Submit</button>





                    <ul id="sortable" class="list-unstyled">
                            <li class="ui-state-default">
                                <div class="checkbox">
                                    <label><input name="id[]" type="checkbox" value="" />First Todo</label>
                                </div>
                            </li>
                    </ul>
                        <button type="submit" class="btn btn-success">Done</button>




                </div>

            </div>
            <div class="col-md-6">
                <div class="todolist">
                    <h1>Already Done</h1>
                    <ul id="done-items" class="list-unstyled">

                        <li><input name="id[]" type="checkbox" value="" /> Done Todo</li>
                        <button type="submit" class="btn btn-danger">Delete</button>



                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection