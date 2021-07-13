@extends('layouts.app')

@section('content')

<div class="table-settings mb-4">
    <div class="row align-items-center justify-content-between">
        <!--<div class="col col-md-6 col-lg-3 col-xl-4">
            <div class="input-group">
                <span class="input-group-text" id="basic-addon2"><span class="fas fa-search"></span></span>
                <input type="text" class="form-control" id="exampleInputIconLeft" placeholder="Поиск" aria-label="Search" aria-describedby="basic-addon2">
            </div>
        </div>-->
        <div class="col-4 col-md-2 col-xl-1 pl-md-0 text-right">
            <div class="btn-group">


            </div>
        </div>
    </div>
</div>

<div class="card card-body border-light shadow-sm table-wrapper table-responsive pt-0">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Название проекта</th>
                <th>Дата начала</th>
                <th>Дата окончания</th>
                <th>Важность</th>
                <th>Статус</th>
                <th>Действие</th>
            </tr>
        </thead>
        <tbody>
        
            @foreach($projects as $project)
            <form method="post" action="{{ url('/delete-project') }}">
                @csrf
                @if($project->statuses()->first()->name ==="Невыполненные")


                <input type="hidden" value="{{$project->id}}" name="project_id">
                
        
                <!-- Item -->
                <tr>
                    <td>
                        <a href="/comment/{{$project->id}}" class="font-weight-bold">
                            {{$project->id}}
                        </a>
                    </td>
                    <td>
                        <span class="font-weight-normal">{{$project->name}}</span>
                    </td>
                    <td><span class="font-weight-normal">{{$project->date_start}}</span></td>
                    <td><span class="font-weight-normal">{{$project->date_end}}</span></td>
                    <td><span class="font-weight-bold">799,00</span></td>
                    
                    
                    <td><span class="font-weight-bold text-success">{{$project->statuses()->first()->name}}</span></td>
                    
                   
                   
                    <td>
                        <div class="btn-group">
                            <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="icon icon-sm">
                                    <span class="fas fa-ellipsis-h icon-dark"></span>
                                </span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="/details-project/{{$project->id}}"><span class="fas fa-eye mr-2"></span>Детально</a>
                                <a class="dropdown-item" href="/edit-project/{{$project->id}}"><span class="fas fa-edit mr-2"></span>Изменить</a>
                                <button type="submit" class="dropdown-item text-danger"><span class="fas fa-trash-alt mr-2"></span>Удалить</button>
                            </div>
                        </div>
                    </td>
                </tr>
                
                @endif
                @endforeach
        </tbody>
    </table>
    <div class="card-footer px-3 border-0 d-flex align-items-center justify-content-between">
        <nav aria-label="Page navigation example">
        {{ $projects->links() }}
        </nav>

    </div>
</div>
</form>
@endsection