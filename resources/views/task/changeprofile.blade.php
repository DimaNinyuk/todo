@extends('layouts.app')

@section('content')


<div class="row">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
    <div>
        <a class="btn btn-secondary text-dark mr-2 dropdown-toggle" href="/new-project"  aria-haspopup="true" aria-expanded="false">
            <span class="fas fa-plus mr-2"></span>Создать проект
        </a>

    </div>

</div>
    <div class="col-12 col-xl-12">
        <div class="card card-body bg-white border-light shadow-sm mb-4">
            <div class="card border-light text-center p-0">
                <div class="profile-cover rounded-top" data-background="../assets/img/profile-cover.jpg"></div>
                <div class="card-body pb-5">
                    <img src="{{$user->img}}" class="user-avatar large-avatar rounded-circle mx-auto mt-n7 mb-4" alt="Neil Portrait">
                    <h4 class="h3">{{$user->name}}</h4>
                    <h5 class="font-weight-normal">{{$user->email}}</h5>

                </div>
            </div>

            <form method="post" action="{{ url('/change-profile') }}" enctype="multipart/form-data">
            @csrf
                <div class="row">
                    <h2 class="h5 mb-4" style="padding-top: 10px;">Изменить профиль</h2>
                    <div class="col-md-6 mb-3">

                        <div>
                            <label for="first_name">ФИО</label>
                            <input class="form-control" name="name" value="{{$user->name}}" id="first_name" type="text" required>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div>
                            <label for="last_name">Почта</label>
                            <input class="form-control" id="email" name="email" value="{{$user->email}}" type="email" placeholder="name@company.com" required>
                        </div>
                    </div>

                    <h2 class="h5 mb-4">Выбрато фото профиля</h2>
                    <div class="d-xl-flex align-items-center">
                        <div>
                            <!-- Avatar -->
                            <div class="user-avatar xl-avatar mb-3">
                                <img class="rounded" src="{{$user->img}}" alt="change avatar">
                            </div>
                        </div>
                        <div class="file-field">
                            <div class="d-flex justify-content-xl-center ml-xl-3">
                                <div class="d-flex">
                                    <span class="icon icon-md"><span class="fas fa-paperclip mr-3"></span></span> <input name ="file" type="file">
                                    <div class="d-md-block text-left">
                                        <div class="font-weight-normal text-dark mb-1">Выбрать фото</div>
                                        <div class="text-gray small">JPG, GIF или PNG.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="mt-3">
                    <button type="submit" class="btn btn-primary">Сохранить</button>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection