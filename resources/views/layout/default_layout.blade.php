<html>
<!--
reference : https://bootsnipp.com/snippets/featured/todo-example
-->
<title>ToDo list</title>
<head>
{{ Html::style('css/bootstrap.min.css') }}
{{ Html::style('css/todo.css') }}

</head>
<body>
@yield('content')
{{ Html::script('js/jquery-3.2.1.min.js') }}
{{ Html::script('js/jquery-ui.min.js') }}
{{ Html::script('js/bootstrap.min.js') }}
{{--{{ Html::script('js/todo.js') }}--}}

</body>
</html>
