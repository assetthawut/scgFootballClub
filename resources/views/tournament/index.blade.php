@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row bg-danger pt-5 pb-2">
        <div class="col-2">
        </div>
        <div class="col-8 text-center">
            <span class="text-white h3 font-weight-bold">Fa Cup 2019</span>
            <div>
                <span class="text-white  font-weight-bold">9 พฤศจิกายน พ.ศ. 2562</span>
            </div>
        </div>
        <div class="col-2">
        </div>
    </div>
    <div class="row pt-4 bg-danger">
        <div class="col-12">
            <nav>
                <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#schedule" role="tab" aria-controls="schedule" aria-selected="true"><span class="h6 font-weight-bold text-white">โปรแกรม</span></a>
                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#table" role="tab" aria-controls="table" aria-selected="false"><span class="h6 font-weight-bold text-white">ตารางคะแนน</span></a>
                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#stat" role="tab" aria-controls="stat" aria-selected="false"><span class="h6 font-weight-bold text-white">สถิติ</span></a>
                </div>
            </nav>            
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="tab-content mb-5" id="nav-tabContent" >
                <div class="tab-pane fade show active" id="schedule" role="tabpanel" aria-labelledby="schedule-tab">
                    <div class="container  mt-2">
                        @guest
                        @else
                        <div class="menubar row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-3 text-center">
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addPlayerModal"><i class="fa fa-user" aria-hidden="true"></i></button>
                                                </div>
                                                <div class="col-3 text-center">
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#knockoutFixture"><i class="fa fa-calendar" aria-hidden="true"></i></button>
                                                </div>                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endguest
                        @foreach ($fixtures as $fixture)
                            <div class="row mt-2">
                                <div class="col-12">
                                    <div class="card " data-toggle="collapse" href="#match{{$fixture->id}}">
                                        <div class="card-body">
                                            <div class="row mb-2">
                                                <div class="col-4">
                                                    <span class="font-weight-bold text-gray">09-11-2019</span>
                                                </div>
                                                <div class="col-4 text-center">
                                                    @if ($fixture->type == '1')
                                                    <span class="font-weight-bold text-gray">กลุ่ม {{$fixture->slot_ref}}</span>
                                                    @else
                                                    <span class="font-weight-bold text-gray">รอบ {{$fixture->slot_ref}}</span>
                                                    @endif
                                                </div>
                                                <div class="col-4 text-right">
                                                    <span class="font-weight-bold text-gray"><?php echo getTime($fixture->start_at,$fixture->end_at);?></span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-2 text-info">
                                                    <i class="fa fa-futbol-o"></i>
                                                </div>
                                                <div class="col-8">
                                                    <span class="font-weight-bold">{{$fixture->home_name}}</span>
                                                </div>
                                                <div class="col-2">
                                                    <span>{{$fixture->home_score}}</span>
                                                </div>                                            
                                            </div>
                                            <div class="row">
                                                <div class="col-2 text-info">
                                                    <i class="fa fa-futbol-o"></i>
                                                </div>
                                                <div class="col-8">
                                                    <span class="font-weight-bold">{{$fixture->away_name}}</span>
                                                </div>
                                                <div class="col-2">
                                                    <span>{{$fixture->away_score }}</span>
                                                </div>
                                            </div>                                        
                                        </div>
                                    </div>
                                    {{-- Detail --}}
                                    <div class="collapse mt-2" id="match{{$fixture->id}}">
                                        <div class="card card-body">
                                            <div class="row">
                                                <div class="col-6 text-left">                                               
                                                </div>                                                
                                            </div>
                                        </div>
                                    </div>                                
                                </div>
                            </div>
                        @endforeach 
                    </div>
                </div>
                <div class="tab-pane fade" id="table" role="tabpanel" aria-labelledby="table-tab">
                    <div class="container mt-2 league_standing">
                        <div class="row mt-2 group">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12 my-2">
                                        <span class="font-weight-bold">กลุ่ม A</span>
                                    </div>
                                </div>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">ทีม</th>
                                            <th scope="col">แข่ง</th>
                                            <th scope="col">แต้ม</th>
                                            <th scope="col">ชนะ</th>
                                            {{-- <th scope="col">เสมอ</th> --}}
                                            <th scope="col">แพ้</th>
                                            <th scope="col">ได้</th>
                                            <th scope="col">เสีย</th>
                                            <th scope="col">ต่าง</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $pos=1 ?>
                                        @foreach ($minileague['A'] as $club)
                                        <tr>
                                            <th scope="row">{{$pos}}</th>
                                            <td>{{$club->name}}</td>
                                            <td>{{$club->played}}</td>
                                            <td scope="row">{{$club->point}}</td>
                                            <th >{{$club->won}}</th>
                                            <td>{{$club->lost}}</td>
                                            {{-- <td>{{$club->lost}}</td> --}}
                                            <td>{{$club->goal_for}}</td>
                                            <td>{{$club->goal_againt}}</td>
                                            <td>{{(int)$club->goal_for - (int)$club->goal_againt}}</td>
                                        </tr>
                                        <?php  $pos++ ?>
                                        @endforeach
                                    </tbody>
                                </table>                                
                            </div>
                        </div>
                        {{-- B --}}
                        <div class="row mt-2 group">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-12 my-2">
                                            <span class="font-weight-bold">กลุ่ม B</span>
                                        </div>
                                    </div>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">ทีม</th>
                                                <th scope="col">แข่ง</th>
                                                <th scope="col">แต้ม</th>
                                                <th scope="col">ชนะ</th>
                                                {{-- <th scope="col">เสมอ</th> --}}
                                                <th scope="col">แพ้</th>
                                                <th scope="col">ได้</th>
                                                <th scope="col">เสีย</th>
                                                <th scope="col">ต่าง</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $pos=1 ?>
                                            @foreach ($minileague['B'] as $club)
                                            <tr>
                                                <th scope="row">{{$pos}}</th>
                                                <td>{{$club->name}}</td>
                                                <td>{{$club->played}}</td>
                                                <td scope="row">{{$club->point}}</td>
                                                <th >{{$club->won}}</th>
                                                <td>{{$club->lost}}</td>
                                                {{-- <td>{{$club->lost}}</td> --}}
                                                <td>{{$club->goal_for}}</td>
                                                <td>{{$club->goal_againt}}</td>
                                                <td>{{(int)$club->goal_for - (int)$club->goal_againt}}</td>
                                            </tr>
                                            <?php  $pos++ ?>
                                            @endforeach
                                        </tbody>
                                    </table>                                
                                </div>
                            </div> 
                          {{-- C --}}
                          <div class="row mt-2 group">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-12 my-2">
                                            <span class="font-weight-bold">กลุ่ม C</span>
                                        </div>
                                    </div>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">ทีม</th>
                                                <th scope="col">แข่ง</th>
                                                <th scope="col">แต้ม</th>
                                                <th scope="col">ชนะ</th>
                                                {{-- <th scope="col">เสมอ</th> --}}
                                                <th scope="col">แพ้</th>
                                                <th scope="col">ได้</th>
                                                <th scope="col">เสีย</th>
                                                <th scope="col">ต่าง</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $pos=1 ?>
                                            @foreach ($minileague['C'] as $club)
                                            <tr>
                                                <th scope="row">{{$pos}}</th>
                                                <td>{{$club->name}}</td>
                                                <td>{{$club->played}}</td>
                                                <td scope="row">{{$club->point}}</td>
                                                <th >{{$club->won}}</th>
                                                <td>{{$club->lost}}</td>
                                                {{-- <td>{{$club->lost}}</td> --}}
                                                <td>{{$club->goal_for}}</td>
                                                <td>{{$club->goal_againt}}</td>
                                                <td>{{(int)$club->goal_for - (int)$club->goal_againt}}</td>
                                            </tr>
                                            <?php  $pos++ ?>
                                            @endforeach
                                        </tbody>
                                    </table>                                
                                </div>
                            </div>  
                          {{-- C --}}
                          <div class="row mt-2 group">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-12 my-2">
                                            <span class="font-weight-bold">กลุ่ม D</span>
                                        </div>
                                    </div>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">ทีม</th>
                                                <th scope="col">แข่ง</th>
                                                <th scope="col">แต้ม</th>
                                                <th scope="col">ชนะ</th>
                                                {{-- <th scope="col">เสมอ</th> --}}
                                                <th scope="col">แพ้</th>
                                                <th scope="col">ได้</th>
                                                <th scope="col">เสีย</th>
                                                <th scope="col">ต่าง</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $pos=1 ?>
                                            @foreach ($minileague['D'] as $club)
                                            <tr>
                                                <th scope="row">{{$pos}}</th>
                                                <td>{{$club->name}}</td>
                                                <td>{{$club->played}}</td>
                                                <td scope="row">{{$club->point}}</td>
                                                <th >{{$club->won}}</th>
                                                <td>{{$club->lost}}</td>
                                                {{-- <td>{{$club->lost}}</td> --}}
                                                <td>{{$club->goal_for}}</td>
                                                <td>{{$club->goal_againt}}</td>
                                                <td>{{(int)$club->goal_for - (int)$club->goal_againt}}</td>
                                            </tr>
                                            <?php  $pos++ ?>
                                            @endforeach
                                        </tbody>
                                    </table>                                
                                </div>
                            </div>                                                      
                    </div>
                </div>
                <div class="tab-pane fade" id="stat" role="tabpanel" aria-labelledby="stat-tab">
                    <div class="container mt-2 p-0">
                        <div class="card">
                            <div class="card-body">
                                 <div class="row">
                                    <div class="ml-3">
                                        <span class="font-weight-bold">ประตู</span>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-6 text-left">
                                        <span>ผู้เล่น</span>
                                    </div>
                                    <div class="col-6 text-right">
                                        <span>ประตู</span>
                                    </div>                                    
                                 </div>
                                 @if (!empty($stat))
                                    @foreach ($stat as $item)
                                        <div class="row my-2 pt-2 border-top">
                                            <div class="col-6 text-left">
                                                <span>{{$item->firstname}} {{$item->lastname}}</span>
                                            </div>
                                            <div class="col-6 text-right">
                                                <span>{{$item->total}}</span>
                                            </div>                                    
                                        </div>                                       
                                    @endforeach                                      
                                 @else
                                     
                                 @endif                           
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Add Player Modal --}}
<div class="modal fade" id="addPlayerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">เพิ่มผู้เล่น</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form action="/player" method="POST" id="playerForm">
                    {!! csrf_field() !!}
                    <input type="hidden" name="tournamentId" value="1">
                    <div class="row my-2">
                        <div class="col-12">
                            <button type="button" class="btn btn-primary" id="addMorePlayer"><i class="fa fa-plus" aria-hidden="true"></i></button>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-12 mb-3">
                            <select class="form-control" name="clubId">
                                @foreach ($teams as $team)
                                    <option value="{{$team->id}}">{{$team->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="namegroup">
                        <div class="form-row row">
                            <div class="col-6">
                                <input type="text" class="form-control" name="firstname[1]" placeholder="Firstname" >
                            </div>
                            <div class="col-6">
                                <input type="text" class="form-control" name="lastname[1]" placeholder="Lastname" >
                            </div>                
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
              <button type="button" class="btn btn-primary" id="savePlayer">บันทึก</button>
            </div>
          </div>
        </div>
</div>
{{-- add semi / final --}}
<div class="modal fade" id="knockoutFixture" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">อัพเดทตารางแข่ง</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form action="/fixture/special" method="Post" id="knockoutForm">
                    {!! csrf_field() !!}
                    <span class="h6">Semi Final A</span>
                    <div class="row">
                        <div class="col-6">
                            <select class="form-control" name="semi[1][h]">
                                <option value=""> เลือกทีม</option>
                                @foreach ($teams as $team)
                                    <option value="{{$team->id}}">{{$team->name}}</option>
                                @endforeach
                            </select>                            
                        </div>
                        <div class="col-6">
                            <select class="form-control" name="semi[1][a]">
                                <option value=""> เลือกทีม</option>
                                @foreach ($teams as $team)
                                    <option value="{{$team->id}}">{{$team->name}}</option>
                                @endforeach
                            </select>                                                        
                        </div>            
                        <input type="hidden" name="semi[1][id]" value="16">            
                    </div>
                    <span class="h6">Semi Final B</span>
                    <div class="row">
                        <div class="col-6">
                            <select class="form-control" name="semi[2][h]">
                                <option value=""> เลือกทีม</option>
                                @foreach ($teams as $team)
                                    <option value="{{$team->id}}">{{$team->name}}</option>
                                @endforeach
                            </select>                            
                        </div>
                        <div class="col-6">
                            <select class="form-control" name="semi[2][a]">
                                <option value=""> เลือกทีม</option>
                                @foreach ($teams as $team)
                                    <option value="{{$team->id}}">{{$team->name}}</option>
                                @endforeach
                            </select>                                                        
                        </div>                  
                        <input type="hidden" name="semi[2][id]" value="17">           
                    </div> 
                    <div class="row mt-2">
                            <div class="col-12">
                                <span class="h6">Third place</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <select class="form-control" name="third[h]">
                                    <option value=""> เลือกทีม</option>
                                    @foreach ($teams as $team)
                                        <option value="{{$team->id}}">{{$team->name}}</option>
                                    @endforeach
                                </select>                            
                            </div>
                            <div class="col-6">
                                <select class="form-control" name="third[a]">
                                    <option value=""> เลือกทีม</option>
                                    @foreach ($teams as $team)
                                        <option value="{{$team->id}}">{{$team->name}}</option>
                                    @endforeach
                                </select>                                                        
                            </div>   
                            <input type="hidden" name="third[id]" value="19">                          
                        </div>
                    <div class="row mt-2">
                        <div class="col-12">
                            <span class="h6">Final </span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <select class="form-control" name="final[h]">
                                <option value=""> เลือกทีม</option>
                                @foreach ($teams as $team)
                                    <option value="{{$team->id}}">{{$team->name}}</option>
                                @endforeach
                            </select>                            
                        </div>
                        <div class="col-6">
                            <select class="form-control" name="final[a]">
                                <option value=""> เลือกทีม</option>
                                @foreach ($teams as $team)
                                    <option value="{{$team->id}}">{{$team->name}}</option>
                                @endforeach
                            </select>                                                        
                        </div>   
                        <input type="hidden" name="final[id]" value="18">                     
                    </div>                                        
                </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
              <button type="submit" class="btn btn-primary" id="saveFixture">บันทึก</button>
            </div>
          </div>
        </div>
</div>
<?php 
    function getFixtureDate($sDate){
        return;
    }

    function getTime($sDate,$eDate){
        // print_r($sDate);
        // print_r($eDate);
        $start = explode(" ",$sDate);
        $end  = explode(" ",$eDate);
        // echo date('g:i', strtotime($end[1]));
        $sTime = date('H:i', strtotime($start[1]));
        $eTime = date('H:i', strtotime($end[1]));
        // exit();
        return $sTime . '-' . $eTime . "น.";
    }

?>

<script type="text/javascript">
    $(document).ready(function() {
        var i = 1;
        $('#addMorePlayer').click(function(){
            i = i + 1;
            console.log(i);
            let inputForm = `
                    <div class="form-row row mt-2">
                        <div class="col-6">
                            <input type="text" class="form-control" name="firstname[`+i+`]" placeholder="Firstname" >
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control" name="lastname[`+i+`]" placeholder="Lastname" >
                        </div>                
                    </div>                
            `;
            $('.namegroup').append(inputForm);

        });  

        $('#saveFixture').click(function(){
            $('#knockoutForm').submit();
            // console.log('sdfsdfsd');
        });

        $("#savePlayer").click(function(){
            console.log('save');
            // $('#playerForm').submit();
            $('#playerForm').submit();
        });

    });
</script>

@endsection

