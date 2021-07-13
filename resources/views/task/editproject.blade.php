@extends('layouts.app')

@section('content')
<div class="row">
    <form method="post" action="{{ url('/update-project') }}">
        @csrf
        <div class="col-12 mb-4">
            <div class="card border-light shadow-sm components-section">
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-md-12">
                            <div class="mt-5 mb-3 mt-sm-0">
                                <span class="h6 font-weight-bold">Создатель проекта:</span>
                                <p class="lead">{{$projectedit->user->name}}</p>
                                <span class="h6 font-weight-bold">Статус проекта:</span>
                                <p class="lead">{{$projectedit->statuses()->first()->name}}</p>

                            </div>

                            <input type="hidden" value="{{$projectedit->id}}" name="id">
                            <div class="mb-3">
                                <label for="exampleInputIconLeft">Название проекта</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1"></span>
                                    <input type="text" class="form-control" name="nameProject" id="exampleInputIconLeft" value="{{$projectedit->name}}" aria-label="Search">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="birthday">Дата начала</label>
                                <div class="input-group">
                                    <span class="input-group-text"><span class="far fa-calendar-alt"></span></span>
                                    <input name="dateS" class="form-control" id="birthday" type="text" value="{{$projectedit->date_start}}">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="birthday">Дата окончания</label>
                                <div class="input-group">
                                    <span class="input-group-text"><span class="far fa-calendar-alt"></span></span>
                                    <input name="dateE" class="form-control" id="birthday" type="text" value="{{$projectedit->date_end}}">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputIconLeft">Макс количество пользователей</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1"></span>
                                    <input type="text" class="form-control" name="countUser" id="exampleInputIconLeft" value="{{$projectedit->count_workers}}" aria-label="Search">
                                </div>
                            </div>
                            <div class="my-4">
                                <label for="textarea">Описание </label>
                                <textarea class="form-control" name="descriptionProject" id="textarea" rows="4">{{$projectedit->description}}</textarea>
                            </div>
                            <button class="btn btn-outline-tertiary" type="submit">Обновить</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <form method="post" action="{{ url('/add-role') }}">
        @csrf
        <div class="col-12 mb-4">
            <div class="card border-light shadow-sm components-section">
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-md-12">
                            <div class="mt-5 mb-3 mt-sm-0">
                                <span class="h6 font-weight-bold">Назначение ролей:</span>

                                <input type="hidden" value="{{$projectedit->id}}" name="project_id">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputIconLeft">Название роли</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1"></span>
                                    <input type="text" name="name" class="form-control" id="exampleInputIconLeft" aria-label="Search">
                                </div>
                            </div>
                            <div class="mb-4">
                                <label class="my-1 mr-2" for="country">Пользователь</label>
                                <select name="user_id" class="form-select" id="country" aria-label="Default select example">
                                    @foreach($users as $user)
                                    <option value="{{$user->id}}">{{$user->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <button class="btn btn-outline-tertiary" type="submit">Добавить</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <form method="post" action="{{ url('/update-status-project') }}">
    @csrf
    <div class="col-12 mb-4">
        <div class="card border-light shadow-sm components-section">
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-md-12">
                        <div class="mt-5 mb-3 mt-sm-0">
                            <span class="h6 font-weight-bold">Изменить статус проекта:</span>


                        </div>


                        <div class="mb-3">
                            <label for="exampleInputIconLeft">Статус</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1"></span>
                                <input type="hidden" value="{{$projectedit->id}}" name="project_id">
                                <input type="text" name="name" class="form-control" id="exampleInputIconLeft" aria-label="Search">
                            </div>
                        </div>

                        <button class="btn btn-outline-tertiary" type="submit">Изменить</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>

</div>
@endsection