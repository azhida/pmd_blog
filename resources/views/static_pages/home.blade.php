@extends('layouts.default')

@section('content')
    <div class="jumbotron">
        <h1>Hello 坡马代</h1>
        <p class="lead">
            你现在所看到的是 满目青山的<a href="">坡马代风景</a> 和 热情好客的<a href="">坡马代人</a>。
        </p>
        <p>
            一切，将从这里开始。
        </p>
        <p>
            <a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">现在注册</a>
        </p>
    </div>
@stop