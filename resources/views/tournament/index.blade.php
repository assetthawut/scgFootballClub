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
                    <a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#schedule" role="tab" aria-controls="schedule" aria-selected="true"><span class="h6 font-weight-bold text-white">โปรแกรม</span></a>
                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#table" role="tab" aria-controls="table" aria-selected="false"><span class="h6 font-weight-bold text-white">ตารางคะแนน</span></a>
                    <a class="nav-item nav-link active" id="nav-contact-tab" data-toggle="tab" href="#stat" role="tab" aria-controls="stat" aria-selected="false"><span class="h6 font-weight-bold text-white">สถิติ</span></a>
                </div>
            </nav>            
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="tab-content mb-5" id="nav-tabContent" >
                <div class="tab-pane fade show" id="schedule" role="tabpanel" aria-labelledby="schedule-tab">
                    <div class="container  mt-2">
                        @foreach ($fixtures as $fixture)
                            <div class="row mt-2">
                                <div class="col-12">
                                    <div class="card " data-toggle="collapse" href="#match{{$fixture->id}}">
                                        <div class="card-body">
                                            <div class="row mb-2">
                                                <div class="col-6">
                                                    <span class="font-weight-bold text-gray">09-11-2019</span>
                                                </div>
                                                <div class="col-6 text-right">
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
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
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
                                        <th scope="col">ชนะ</th>
                                        <th scope="col">เสมอ</th>
                                        <th scope="col">แพ้</th>
                                        <th scope="col">แต้ม</th>
                                        <th scope="col">ได้</th>
                                        <th scope="col">เสีย</th>
                                        <th scope="col">ต่าง</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                    </tbody>
                                </table>                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade active" id="stat" role="tabpanel" aria-labelledby="stat-tab">
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
                                        <span>ผู้เล่น</span>
                                    </div>                                    
                                 </div>
                                 <div class="row my-2 pt-2 border-top">
                                    <div class="col-6 text-left">
                                        <span>Wayne Rooney</span>
                                    </div>
                                    <div class="col-6 text-right">
                                        <span>10</span>
                                    </div>                                    
                                 </div>
                                 <div class="row my-2 py-2 border-top ">
                                    <div class="col-6 text-left">
                                        <span>Wayne Rooney</span>
                                    </div>
                                    <div class="col-6 text-right">
                                        <span>10</span>
                                    </div>                                    
                                 </div>                               
                            </div>
                        </div>
                    </div>
                </div>
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
@endsection
