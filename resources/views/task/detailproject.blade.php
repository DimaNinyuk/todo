@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12 mb-4">
        <div class="card border-light shadow-sm components-section">
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-md-12">
                        <div class="mt-5 mb-3 mt-sm-0">
                            <span class="h6 font-weight-bold">Проект #{{$projectdetails->id}} проект: {{$projectdetails->name}}</span>
                        </div>
                        <span class="h6 font-weight-bold">Создатель проекта:</span>
                        <p class="lead">{{$projectdetails->user->name}}</p>
                        <span class="h6 font-weight-bold">Описание</span>
                        <p class="lead">{{$projectdetails->description}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 mb-4">
        <div class="card border-light shadow-sm components-section">
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-md-12">
                        <div class="mt-5 mb-3 mt-sm-0">
                            <span class="h6 font-weight-bold">Список ролей</span>
                        </div>
                        
                        <ul>
                        @foreach($projectdetails->roles()->get() as $role)
                            <li>{{$role->name}}</li>
                        @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 mb-4">
        <div class="card border-light shadow-sm components-section">
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-md-12">
                        <div class="mt-5 mb-3 mt-sm-0">
                            <span class="h6 font-weight-bold">Список задач</span>
                        </div>
                        
                        <ul>
                        @foreach($projectdetails->tasks()->get() as $task)
                            <li>{{$task->name}}</li>
                            <span class="h6 font-weight-bold">Исполнитель: {{$task->user->name}}</span>
                        @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection