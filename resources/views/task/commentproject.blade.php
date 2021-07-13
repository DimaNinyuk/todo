<style>
    body {
        margin-top: 20px;
        background-color: #e9ebee;
    }

    .be-comment-block {
        margin-bottom: 50px !important;
        border: 1px solid #edeff2;
        border-radius: 2px;
        padding: 50px 70px;
        border: 1px solid #ffffff;
    }

    .comments-title {
        font-size: 16px;
        color: #262626;
        margin-bottom: 15px;
        font-family: 'Conv_helveticaneuecyr-bold';
    }

    .be-img-comment {
        width: 60px;
        height: 60px;
        float: left;
        margin-bottom: 15px;
    }

    .be-ava-comment {
        width: 60px;
        height: 60px;
        border-radius: 50%;
    }

    .be-comment-content {
        margin-left: 80px;
    }

    .be-comment-content span {
        display: inline-block;
        width: 49%;
        margin-bottom: 15px;
    }

    .be-comment-name {
        font-size: 13px;
        font-family: 'Conv_helveticaneuecyr-bold';
    }

    .be-comment-content a {
        color: #383b43;
    }

    .be-comment-content span {
        display: inline-block;
        width: 49%;
        margin-bottom: 15px;
    }

    .be-comment-time {
        text-align: right;
    }

    .be-comment-time {
        font-size: 11px;
        color: #b4b7c1;
    }

    .be-comment-text {
        font-size: 13px;
        line-height: 18px;
        color: #7a8192;
        display: block;
        background: #f6f6f7;
        border: 1px solid #edeff2;
        padding: 15px 20px 20px 20px;
    }

    .form-group.fl_icon .icon {
        position: absolute;
        top: 1px;
        left: 16px;
        width: 48px;
        height: 48px;
        background: #f6f6f7;
        color: #b5b8c2;
        text-align: center;
        line-height: 50px;
        -webkit-border-top-left-radius: 2px;
        -webkit-border-bottom-left-radius: 2px;
        -moz-border-radius-topleft: 2px;
        -moz-border-radius-bottomleft: 2px;
        border-top-left-radius: 2px;
        border-bottom-left-radius: 2px;
    }
</style>
@extends('layouts.app')

@section('content')
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">

    <div class="be-comment-block">
        @foreach($projects as $project)
        @foreach($project->tasks()->get() as $task)
        <h5>Задача #{{$task->id}} {{$task->name}}</h5>
        <h1 class="comments-title">Количество отзывов ({{$task->comments()->count()}})</h1>
        @foreach($task->comments()->get() as $comment)
        <div class="be-comment">
            <div class="be-img-comment">

                <img src="{{$comment->user->img}}" alt="" class="be-ava-comment">
               
            </div>
            <div class="be-comment-content">

                <span class="be-comment-name">
                {{$comment->user->name}}
                </span>
                <span class="be-comment-time">
                    <i class="fa fa-clock-o"></i>
                    {{$comment->date}}
                </span>

                <p class="be-comment-text">
               
                    {{$comment->description}}
                </p>
            </div>
        </div>
        @endforeach
        <form class="form-block" method="post" action="{{ url('/add-comment') }}">
        @csrf
            <div class="row">

                <div class="my-4">
                    <label for="textarea">Сообщение</label>
                    <textarea class="form-control" name="description" placeholder="Ввод сообщения..." id="textarea" rows="4"></textarea>
                    <input type="hidden" value="{{$task->id}}" name="task_id">
                </div>
                <button class="btn btn-outline-tertiary" type="submit">Отправить</button>
            </div>
        </form>
        @endforeach
        @endforeach
        
    </div>

</div>
@endsection