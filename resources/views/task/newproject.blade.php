@extends('layouts.app')

@section('content')
<div class="row">
    <form method="post" action="{{ url('/new-project') }}">
        @csrf
        <div class="col-12 mb-4">
            <div class="card border-light shadow-sm components-section">
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-md-12">
                            <div class="mt-5 mb-3 mt-sm-0">
                                <span class="h6 font-weight-bold">Создать проект:</span>


                            </div>

                            <input type="hidden" name="id">
                            <div class="mb-3">
                                <label for="exampleInputIconLeft">Название проекта</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1"></span>
                                    <input type="text" class="form-control" name="nameProject" id="exampleInputIconLeft" aria-label="Search">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="birthday">Дата начала</label>
                                <div class="input-group">
                                    <span class="input-group-text"><span class="far fa-calendar-alt"></span></span>
                                    <input name="dateS" class="form-control" id="birthday" type="text">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="birthday">Дата окончания</label>
                                <div class="input-group">
                                    <span class="input-group-text"><span class="far fa-calendar-alt"></span></span>
                                    <input name="dateE" class="form-control" id="birthday" type="text">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputIconLeft">Макс количество пользователей</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1"></span>
                                    <input type="text" class="form-control" name="countUser" id="exampleInputIconLeft" aria-label="Search">
                                </div>
                            </div>
                            <input type="hidden" value="{{ Auth::user()->id }}" name="id">
                            <div class="my-4">
                                <label for="textarea">Описание </label>
                                <textarea class="form-control" name="descriptionProject" id="textarea" rows="4"></textarea>
                            </div>
                            <button class="btn btn-outline-tertiary" type="submit">Создать</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<div class="row">

    <div class="col-12 mb-4">
        <div class="card border-light shadow-sm components-section">
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-md-12">
                        <div class="mt-5 mb-3 mt-sm-0">
                            <span class="h6 font-weight-bold">Проекты:</span>
                        </div>

                        <input type="hidden" name="id">

                        @foreach($projects as $project)
                        <div class="mb-3">
                            <label for="exampleInputIconLeft">Название проекта</label>
                            <div class="input-group">

                                <p>{{$project->name}}</p>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="birthday">Дата начала</label>
                            <div class="input-group">

                                <p>{{$project->date_start}}</p>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="birthday">Дата окончания</label>
                            <div class="input-group">

                                <p>{{$project->date_end}}</p>
                            </div>
                        </div>
                        <div class="mt-5 mb-3 mt-sm-0">
                            <span class="h6 font-weight-bold">Задачи:</span>
                        </div>

                        @foreach($project->tasks()->get() as $task)
                        <div class="mb-3">
                            <label for="exampleInputIconLeft">Название задачи</label>
                            <div class="input-group">

                                <p>{{$task->name}}</p>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="birthday">Дата начала</label>
                            <div class="input-group">

                                <p>{{$task->date_start}}</p>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="birthday">Дата окончания</label>
                            <div class="input-group">

                                <p>{{$task->date_end}}</p>
                            </div>
                        </div>

                        @endforeach
                        <form method="post" action="{{ url('/new-task') }}">
                            @csrf
                            <div class="col-12 mb-4">
                                <div class="card border-light shadow-sm components-section">
                                    <div class="card-body">
                                        <div class="row mb-4">
                                            <div class="col-md-12">
                                                <div class="mt-5 mb-3 mt-sm-0">
                                                    <span class="h6 font-weight-bold">Добавить новую задачу:</span>


                                                </div>

                                                <input type="hidden" name="id">
                                                <div class="mb-3">
                                                    <label for="exampleInputIconLeft">Название задачм</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text" id="basic-addon1"></span>
                                                        <input type="text" class="form-control" name="nameTask" id="exampleInputIconLeft" aria-label="Search">
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="birthday">Дата начала</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text"><span class="far fa-calendar-alt"></span></span>
                                                        <input name="dateSTask" class="form-control" id="birthday" type="text">
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="birthday">Дата окончания</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text"><span class="far fa-calendar-alt"></span></span>
                                                        <input name="dateETask" class="form-control" id="birthday" type="text">
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleInputIconLeft">Макс количество пользователей</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text" id="basic-addon1"></span>
                                                        <input type="text" class="form-control" name="countUserTask" id="exampleInputIconLeft" aria-label="Search">
                                                    </div>
                                                </div>

                                                <div class="my-4">
                                                    <label for="textarea">Описание </label>
                                                    <textarea class="form-control" name="descriptionTask" id="textarea" rows="4"></textarea>
                                                </div>
                                                <div class="mb-4">
                                                    <label class="my-1 mr-2" for="country">Исполнитель</label>
                                                    <select name="user_id" class="form-select" id="country" aria-label="Default select example">
                                                        @foreach($users as $user)
                                                        <option value="{{$user->id}}">{{$user->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                
                                                <input type="hidden" value="{{ $project->id }}" name="pr_id">
                                                <button class="btn btn-outline-tertiary" type="submit">Добавить задачу</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection