@extends('layouts.app')

@section('content')
<div class="row justify-content-md-center">
    <div class="col-12 mb-4">
        <div class="card bg-yellow-alt shadow-sm">
            <div class="card-header d-flex flex-row align-items-center flex-0">
                <div class="d-block">
                    <div class="h5 font-weight-normal mb-2">Мои выполненные задачи</div>
                    

                </div>
                
            </div>
            <div class="card-body p-2">
                <div class="ct-chart-sales-value ct-double-octave ct-series-g"></div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-xl-12 mb-4">
            <div class="row">

                <div class="col-12 col-lg-12 mb-4">
                    <div class="card border-light shadow-sm">
                        <div class="card-header border-bottom border-light d-flex justify-content-between">
                            <h2 class="h5 mb-0">Комментарии к задачам</h2>
                            
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush list my--3">

                            @foreach($tasks as $task)
                         
                            <li class="list-group-item px-0">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <!-- Avatar -->
                                            <a href="/comment/{{$task->project->id}}"><h5><span style="background-color:powderblue;">#{{$task->id}} {{$task->name}}</h5></span></a>
                                            @foreach($task->comments()->get() as $comment)
                                            <a href="#" class="user-avatar">
                                                <img class="rounded-circle" alt="Image placeholder" src="{{$comment->user->img}}">
                                            </a>
                                            
                                            <a href="/home"><h5>{{$comment->name}}</h5></a>
                                            <p>{{$comment->description}}</p>
                                            @endforeach
                                        </div>
                                        <div class="col-auto ml--2">
                                            <!--<h4 class="h6 mb-0">
                                                <a href="#">Jndtnbnm</a>
                                            </h4>
                                            -->
                                            
                                            
                                            
                                        </div>
                                        <div class="col text-right">
                                            <a href="/comment/{{$task->project->id}}" class="btn btn-sm btn-tertiary"><i class="fas fa-comment mr-1"></i> Чат задачи</a>
                                        </div>
                                        
                                    </div>
                                </li>
                       <hr />
                            @endforeach
                            

                            
                                
                            </ul>
                        </div>
                        {{ $tasks->links() }}
   

                    </div>
                   
                </div>
               
            </div>
        </div>

    </div>
   
<script>

const d = document;
d.addEventListener("DOMContentLoaded", function(event) {

    
   
    //Chartist

    if(d.querySelector('.ct-chart-sales-value')) {
        //Chart 5
          new Chartist.Line('.ct-chart-sales-value', {
            labels: ['Янв.', 'Фев.', 'Мар.', 'Апр.', 'Май', 'Июн.', 'Июл.'],
            series: [
                ['{{$mon}}', '{{$tue}}', '{{$wed}}', '{{$thu}}', '{{$fri}}', '{{$sat}}', '{{$san}}']
            ]
          }, {
            low: 0,
            showArea: true,
            fullWidth: true,
            
            plugins: [
              Chartist.plugins.tooltip()
            ],
            axisX: {
                // On the x-axis start means top and end means bottom
                position: 'end',
                showGrid: true
            },
            axisY: {
                // On the y-axis start means left and end means right
                showGrid: false,
                showLabel: false,
                labelInterpolationFnc: function(value) {
                    return '$' + (value / 1) + 'k';
                }
            }
        });
    }

   

});
</script>
    @endsection