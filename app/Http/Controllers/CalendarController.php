<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Drive;
use App\Training;
use App\Calendar;

class CalendarController extends Controller
{
    public function DisplayEvents(){
        $user=Auth::User();
        $drives = Drive::all()->toArray();
        $trainings=Training::all()->toArray();
        $custom_events=Calendar::all()->toArray();
        $long_day=[];
        $single_day=[];
        $custom_single=[];
        $custom_long=[];
        //dd($trainings);
        //dd($drives);
        //dd($drives[0]);
        //dd($drives[0]['company_name']);
        foreach ($trainings as $training){
            //dd($training['dates']);
            $dates_array=explode(",",$training['dates']);
            $size_dates_array=sizeof($dates_array);
            if($size_dates_array==1){
                $event['name']=$training['training_name'];
                $event['date']=$dates_array[0];
                array_push($single_day,$event);
            }

            elseif($size_dates_array>1){
                $x=0;
                while($x < $size_dates_array){
                    $pointer_start=$x;
                    $nextday=date("Y-m-d", strtotime("$dates_array[$x] +1 day"));
                    //dd($nextday,$dates_array[$x],$x);
                    if(in_array($nextday, $dates_array)){
                        //dd($nextday,$x,$dates_array[$x]);
                        $start_date=$dates_array[$x];
                        //dd($start_date);
                        $limit=$x;
                        while($limit < $size_dates_array){
                            $nextday=date("Y-m-d", strtotime("$dates_array[$limit] +1 day"));
                            if(in_array($nextday, $dates_array)){
                                //dd($nextday,$dates_array[$limit]);
                                $end_date=$nextday;
                                $limit=$limit+1;
                                //dd($end_date,$limit);
                            }
                            else{
                                $x=$limit+1;
                                $event1['name']=$training['training_name'];
                                $event1['start_date']=$start_date;
                                $event1['end_date']=date("Y-m-d", strtotime("$end_date +1 day"));
                                array_push($long_day,$event1);
                                break;
                            }

                        }
                    }
                    else{
                        $event2['name']=$training['training_name'];
                        $event2['date']=$dates_array[$x];
                        array_push($single_day,$event2);
                        $x=$x+1;

                    }


                }
            }

            
        }
        //custom_events
        foreach ($custom_events as $custom){
            //dd($training['dates']);
            $dates_array=explode(",",$custom['dates']);
            //dd($dates_array);
            $size_dates_array=sizeof($dates_array);
            if($size_dates_array==1){
                $custom_single1['name']=$custom['event_name'];
                $custom_single1['date']=$dates_array[0];
                $custom_single1['color']=$custom['event_color'];
                array_push($custom_single,$custom_single1);
            }

            elseif($size_dates_array>1){
                $x=0;
                while($x < $size_dates_array){
                    $pointer_start=$x;
                    $nextday=date("Y-m-d", strtotime("$dates_array[$x] +1 day"));
                    //dd($nextday,$dates_array[$x],$x);
                    if(in_array($nextday, $dates_array)){
                        //dd($nextday,$x,$dates_array[$x]);
                        $start_date=$dates_array[$x];
                        //dd($start_date);
                        $limit=$x;
                        while($limit < $size_dates_array){
                            $nextday=date("Y-m-d", strtotime("$dates_array[$limit] +1 day"));
                            if(in_array($nextday, $dates_array)){
                                //dd($nextday,$dates_array[$limit]);
                                $end_date=$nextday;
                                $limit=$limit+1;
                                //dd($end_date,$limit);
                            }
                            else{
                                $x=$limit+1;
                                $custom_long1['name']=$custom['event_name'];
                                $custom_long1['start_date']=$start_date;
                                $custom_long1['end_date']=date("Y-m-d", strtotime("$end_date +1 day"));
                                $custom_long1['color']=$custom['event_color'];
                                array_push($custom_long,$custom_long1);
                                break;
                            }

                        }
                    }
                    else{
                        $custom_long2['name']=$custom['event_name'];
                        $custom_long2['date']=$dates_array[$x];
                        $custom_long2['color']=$custom['event_color'];
                        array_push($custom_single,$custom_long2);
                        $x=$x+1;

                    }
                }
            }        
        }

        return view("admin.calendar",compact('user','drives','single_day','long_day','custom_single','custom_long'));
    }

    public function CalenderHod(){
        $user=Auth::User();
        $drives = Drive::all()->toArray();
        $trainings=Training::all()->toArray();
        $custom_events=Calendar::all()->toArray();
        $long_day=[];
        $single_day=[];
        $custom_single=[];
        $custom_long=[];
        //dd($trainings);
        //dd($drives);
        //dd($drives[0]);
        //dd($drives[0]['company_name']);
        foreach ($trainings as $training){
            //dd($training['dates']);
            $dates_array=explode(",",$training['dates']);
            $size_dates_array=sizeof($dates_array);
            if($size_dates_array==1){
                $event['name']=$training['training_name'];
                $event['date']=$dates_array[0];
                array_push($single_day,$event);
            }

            elseif($size_dates_array>1){
                $x=0;
                while($x < $size_dates_array){
                    $pointer_start=$x;
                    $nextday=date("Y-m-d", strtotime("$dates_array[$x] +1 day"));
                    //dd($nextday,$dates_array[$x],$x);
                    if(in_array($nextday, $dates_array)){
                        //dd($nextday,$x,$dates_array[$x]);
                        $start_date=$dates_array[$x];
                        //dd($start_date);
                        $limit=$x;
                        while($limit < $size_dates_array){
                            $nextday=date("Y-m-d", strtotime("$dates_array[$limit] +1 day"));
                            if(in_array($nextday, $dates_array)){
                                //dd($nextday,$dates_array[$limit]);
                                $end_date=$nextday;
                                $limit=$limit+1;
                                //dd($end_date,$limit);
                            }
                            else{
                                $x=$limit+1;
                                $event1['name']=$training['training_name'];
                                $event1['start_date']=$start_date;
                                $event1['end_date']=date("Y-m-d", strtotime("$end_date +1 day"));
                                array_push($long_day,$event1);
                                break;
                            }

                        }
                    }
                    else{
                        $event2['name']=$training['training_name'];
                        $event2['date']=$dates_array[$x];
                        array_push($single_day,$event2);
                        $x=$x+1;

                    }


                }
            }

            
        }
        //custom_events
        foreach ($custom_events as $custom){
            //dd($training['dates']);
            $dates_array=explode(",",$custom['dates']);
            //dd($dates_array);
            $size_dates_array=sizeof($dates_array);
            if($size_dates_array==1){
                $custom_single1['name']=$custom['event_name'];
                $custom_single1['date']=$dates_array[0];
                $custom_single1['color']=$custom['event_color'];
                array_push($custom_single,$custom_single1);
            }

            elseif($size_dates_array>1){
                $x=0;
                while($x < $size_dates_array){
                    $pointer_start=$x;
                    $nextday=date("Y-m-d", strtotime("$dates_array[$x] +1 day"));
                    //dd($nextday,$dates_array[$x],$x);
                    if(in_array($nextday, $dates_array)){
                        //dd($nextday,$x,$dates_array[$x]);
                        $start_date=$dates_array[$x];
                        //dd($start_date);
                        $limit=$x;
                        while($limit < $size_dates_array){
                            $nextday=date("Y-m-d", strtotime("$dates_array[$limit] +1 day"));
                            if(in_array($nextday, $dates_array)){
                                //dd($nextday,$dates_array[$limit]);
                                $end_date=$nextday;
                                $limit=$limit+1;
                                //dd($end_date,$limit);
                            }
                            else{
                                $x=$limit+1;
                                $custom_long1['name']=$custom['event_name'];
                                $custom_long1['start_date']=$start_date;
                                $custom_long1['end_date']=date("Y-m-d", strtotime("$end_date +1 day"));
                                $custom_long1['color']=$custom['event_color'];
                                array_push($custom_long,$custom_long1);
                                break;
                            }

                        }
                    }
                    else{
                        $custom_long2['name']=$custom['event_name'];
                        $custom_long2['date']=$dates_array[$x];
                        $custom_long2['color']=$custom['event_color'];
                        array_push($custom_single,$custom_long2);
                        $x=$x+1;

                    }
                }
            }        
        }

        return view("hod.calendar",compact('user','drives','single_day','long_day','custom_single','custom_long'));
    }

    public function CalenderFaculty(){
        $user=Auth::User();
        $drives = Drive::all()->toArray();
        $trainings=Training::all()->toArray();
        $custom_events=Calendar::all()->toArray();
        $long_day=[];
        $single_day=[];
        $custom_single=[];
        $custom_long=[];
        //dd($trainings);
        //dd($drives);
        //dd($drives[0]);
        //dd($drives[0]['company_name']);
        foreach ($trainings as $training){
            //dd($training['dates']);
            $dates_array=explode(",",$training['dates']);
            $size_dates_array=sizeof($dates_array);
            if($size_dates_array==1){
                $event['name']=$training['training_name'];
                $event['date']=$dates_array[0];
                array_push($single_day,$event);
            }

            elseif($size_dates_array>1){
                $x=0;
                while($x < $size_dates_array){
                    $pointer_start=$x;
                    $nextday=date("Y-m-d", strtotime("$dates_array[$x] +1 day"));
                    //dd($nextday,$dates_array[$x],$x);
                    if(in_array($nextday, $dates_array)){
                        //dd($nextday,$x,$dates_array[$x]);
                        $start_date=$dates_array[$x];
                        //dd($start_date);
                        $limit=$x;
                        while($limit < $size_dates_array){
                            $nextday=date("Y-m-d", strtotime("$dates_array[$limit] +1 day"));
                            if(in_array($nextday, $dates_array)){
                                //dd($nextday,$dates_array[$limit]);
                                $end_date=$nextday;
                                $limit=$limit+1;
                                //dd($end_date,$limit);
                            }
                            else{
                                $x=$limit+1;
                                $event1['name']=$training['training_name'];
                                $event1['start_date']=$start_date;
                                $event1['end_date']=date("Y-m-d", strtotime("$end_date +1 day"));
                                array_push($long_day,$event1);
                                break;
                            }

                        }
                    }
                    else{
                        $event2['name']=$training['training_name'];
                        $event2['date']=$dates_array[$x];
                        array_push($single_day,$event2);
                        $x=$x+1;

                    }


                }
            }

            
        }
        //custom_events
        foreach ($custom_events as $custom){
            //dd($training['dates']);
            $dates_array=explode(",",$custom['dates']);
            //dd($dates_array);
            $size_dates_array=sizeof($dates_array);
            if($size_dates_array==1){
                $custom_single1['name']=$custom['event_name'];
                $custom_single1['date']=$dates_array[0];
                $custom_single1['color']=$custom['event_color'];
                array_push($custom_single,$custom_single1);
            }

            elseif($size_dates_array>1){
                $x=0;
                while($x < $size_dates_array){
                    $pointer_start=$x;
                    $nextday=date("Y-m-d", strtotime("$dates_array[$x] +1 day"));
                    //dd($nextday,$dates_array[$x],$x);
                    if(in_array($nextday, $dates_array)){
                        //dd($nextday,$x,$dates_array[$x]);
                        $start_date=$dates_array[$x];
                        //dd($start_date);
                        $limit=$x;
                        while($limit < $size_dates_array){
                            $nextday=date("Y-m-d", strtotime("$dates_array[$limit] +1 day"));
                            if(in_array($nextday, $dates_array)){
                                //dd($nextday,$dates_array[$limit]);
                                $end_date=$nextday;
                                $limit=$limit+1;
                                //dd($end_date,$limit);
                            }
                            else{
                                $x=$limit+1;
                                $custom_long1['name']=$custom['event_name'];
                                $custom_long1['start_date']=$start_date;
                                $custom_long1['end_date']=date("Y-m-d", strtotime("$end_date +1 day"));
                                $custom_long1['color']=$custom['event_color'];
                                array_push($custom_long,$custom_long1);
                                break;
                            }

                        }
                    }
                    else{
                        $custom_long2['name']=$custom['event_name'];
                        $custom_long2['date']=$dates_array[$x];
                        $custom_long2['color']=$custom['event_color'];
                        array_push($custom_single,$custom_long2);
                        $x=$x+1;

                    }
                }
            }        
        }

        return view("faculty.calendar",compact('user','drives','single_day','long_day','custom_single','custom_long'));
    }

    public function CalenderStudent(){
        $user=Auth::User();
        $drives = Drive::all()->toArray();
        $trainings=Training::all()->toArray();
        $custom_events=Calendar::all()->toArray();
        $long_day=[];
        $single_day=[];
        $custom_single=[];
        $custom_long=[];
        //dd($trainings);
        //dd($drives);
        //dd($drives[0]);
        //dd($drives[0]['company_name']);
        foreach ($trainings as $training){
            //dd($training['dates']);
            $dates_array=explode(",",$training['dates']);
            $size_dates_array=sizeof($dates_array);
            if($size_dates_array==1){
                $event['name']=$training['training_name'];
                $event['date']=$dates_array[0];
                array_push($single_day,$event);
            }

            elseif($size_dates_array>1){
                $x=0;
                while($x < $size_dates_array){
                    $pointer_start=$x;
                    $nextday=date("Y-m-d", strtotime("$dates_array[$x] +1 day"));
                    //dd($nextday,$dates_array[$x],$x);
                    if(in_array($nextday, $dates_array)){
                        //dd($nextday,$x,$dates_array[$x]);
                        $start_date=$dates_array[$x];
                        //dd($start_date);
                        $limit=$x;
                        while($limit < $size_dates_array){
                            $nextday=date("Y-m-d", strtotime("$dates_array[$limit] +1 day"));
                            if(in_array($nextday, $dates_array)){
                                //dd($nextday,$dates_array[$limit]);
                                $end_date=$nextday;
                                $limit=$limit+1;
                                //dd($end_date,$limit);
                            }
                            else{
                                $x=$limit+1;
                                $event1['name']=$training['training_name'];
                                $event1['start_date']=$start_date;
                                $event1['end_date']=date("Y-m-d", strtotime("$end_date +1 day"));
                                array_push($long_day,$event1);
                                break;
                            }

                        }
                    }
                    else{
                        $event2['name']=$training['training_name'];
                        $event2['date']=$dates_array[$x];
                        array_push($single_day,$event2);
                        $x=$x+1;

                    }


                }
            }

            
        }
        //custom_events
        foreach ($custom_events as $custom){
            //dd($training['dates']);
            $dates_array=explode(",",$custom['dates']);
            //dd($dates_array);
            $size_dates_array=sizeof($dates_array);
            if($size_dates_array==1){
                $custom_single1['name']=$custom['event_name'];
                $custom_single1['date']=$dates_array[0];
                $custom_single1['color']=$custom['event_color'];
                array_push($custom_single,$custom_single1);
            }

            elseif($size_dates_array>1){
                $x=0;
                while($x < $size_dates_array){
                    $pointer_start=$x;
                    $nextday=date("Y-m-d", strtotime("$dates_array[$x] +1 day"));
                    //dd($nextday,$dates_array[$x],$x);
                    if(in_array($nextday, $dates_array)){
                        //dd($nextday,$x,$dates_array[$x]);
                        $start_date=$dates_array[$x];
                        //dd($start_date);
                        $limit=$x;
                        while($limit < $size_dates_array){
                            $nextday=date("Y-m-d", strtotime("$dates_array[$limit] +1 day"));
                            if(in_array($nextday, $dates_array)){
                                //dd($nextday,$dates_array[$limit]);
                                $end_date=$nextday;
                                $limit=$limit+1;
                                //dd($end_date,$limit);
                            }
                            else{
                                $x=$limit+1;
                                $custom_long1['name']=$custom['event_name'];
                                $custom_long1['start_date']=$start_date;
                                $custom_long1['end_date']=date("Y-m-d", strtotime("$end_date +1 day"));
                                $custom_long1['color']=$custom['event_color'];
                                array_push($custom_long,$custom_long1);
                                break;
                            }

                        }
                    }
                    else{
                        $custom_long2['name']=$custom['event_name'];
                        $custom_long2['date']=$dates_array[$x];
                        $custom_long2['color']=$custom['event_color'];
                        array_push($custom_single,$custom_long2);
                        $x=$x+1;

                    }
                }
            }        
        }

        return view("student.calendar",compact('user','drives','single_day','long_day','custom_single','custom_long'));
    }


    public function AddEvent(Request $request){
        $validated_data = request()->validate([
            'event_name' => 'required',
            'days' => 'required',
            'dates' => 'required',
            'event_color' => 'required',
        ]);
        $event_dates=implode(",",$request->dates);
        //dd($event_dates);
        $event = Calendar::create([
            'event_name' => $request->event_name,
            'days' => $request->days,
            'dates'=>$event_dates,
            'event_color'=>$request->event_color,
        ]);
        return redirect('/admin/calendar')->with("success", "Event Added!");
        

    }

    public function RemoveEvent(){
        
    }
}
           