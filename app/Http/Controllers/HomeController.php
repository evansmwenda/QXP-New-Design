<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Auth;
use App\LiveClasses;
use App\LiveClassRecordings;
use GuzzleHttp\Client;
use GuzzleHttp\Ring\Exception\ConnectException;
use DB;

class HomeController extends Controller
{
                /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    //

    public function meetingLogin(){
        if (\Auth::check()) {
            return view('meeting');
        }else{
            return view('meeting_login');
        }
        
    }

    public function pricing(){
    	return view('plans');
    }
    public function industries(){
        return view('industries');
    }
    public function terms(){
        return view('terms');
    }
    public function privacy(){
        return view('privacy');
    }
    public function features(){
        return view('features');
    }
    public function meeting(){
    
        if (\Auth::check()) {
            return view('meeting');
        }else{
            return view('meeting_login');
        }
    }



    // for the industries
    public function education(){
    	return view('industries.education');
    }
    public function healthcare(){
    	return view('industries.healthcare');
    }
    public function legal(){
    	return view('industries.legal');
    }
    public function financial(){
    	return view('industries.financial');
    }
    public function resources(){
    	return view('industries.humanresources');
    }
    public function manufacturing(){
        return view('industries.manufacturing');
    }
    public function organizations(){
        return view('industries.organizations');
    }
    public function sports(){
        return view('industries.sports');
    }
    public function sales(){
        return view('industries.sales');
    }
    public function startups(){
        return view('industries.startups');
    }
    public function technology(){
        return view('industries.technology');
    }
    public function automotive(){
        return view('industries.automotive');
    }
    public function franchises(){
        return view('industries.franchises');
    }
    public function createMeeting(Request $request){
    
            $data=$request->all();
             //dd($data);
            //post method
            $user = \Auth::user();
            $title="";
            //in order to schedule a class happens
            //1.get the details of the future class

            $title_array=explode(" ", $request->topic);
            //check if name is has more than one
            $count=count($title_array);
            if($count > 1){
                //this is an array -> loop and get the elements and underscore them
                $title=$title_array[0];
                for($i=1;$i<$count;$i++){
                    $title=$title."-".$title_array[$i];
                }
            }else{
                //the title is one word e.g "testing"
                $title=$title_array[0];
            }

            //1.5 create a live class as an event
            // $course_id = $data['course_id'];

            $meetingID=str_random(6);
            $classTime=$request->classTime;
            $attendeePW=str_random(6);;//"ap";//$request->attendeePW;
            $moderatorPW=str_random(6);//"mp";//$request->moderatorPW;
            $duration='30';//$request->duration;
    
            //format datetime
            $classTime=date("Y-m-d H:i:s",strtotime($classTime));//"2020-04-20 07:30:00"
            //get the secure salt
            $salt = env("BBB_SALT", "0");
            //get BBB server
            $bbb_server = env("BBB_SERVER", "0");

            //2.get the checksum(to be computer) and store it in column
            
                //name=$title&meetingID=$meetingID&attendeePW=$attendeePW&moderatorPW=$moderatorPW
                //(a)==> prepend the action to the entire query
            $create_string="name=$title&meetingID=$meetingID&record=true&attendeePW=$attendeePW&moderatorPW=$moderatorPW";

            $newCreateString="create".$create_string;
                    // createname=Test+Meeting&meetingID=abc123&attendeePW=111222&moderatorPW=333444
            //createname=$title&meetingID=$meetingID&attendeePW=$attendeePW&moderatorPW=$moderatorPW

                //(b)==> append the secret salt to end of the new query string with the action
                    //secret salt: 639259d4-9dd8-4b25-bf01-95f9567eaf4b
                    // $newString = createname=Test+Meeting&meetingID=abc123&attendeePW=111222&moderatorPW=333444639259d4-9dd8-4b25-bf01-95f9567eaf4b
            //$newString = "createname=$title&meetingID=$meetingID&attendeePW=$attendeePW&moderatorPW=$moderatorPW".$salt;
                //(c)==> get the sha1 of the new string and save it as checksum
            $checksumCreate=sha1($newCreateString.$salt);
            // echo $newCreateString;
            // echo "<br/>".$checksumCreate;


            $createURL = $create_string."&checksum=".$checksumCreate;
            $getCreateURL= $bbb_server.'create?'.$createURL;

            //3.create a meeting
            //make get request to create live class
            $url = $getCreateURL;

            //dd($url);
            //  Initiate curl
            $ch = curl_init();
            // Disable SSL verification
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            // Will return the response, if false it print the response
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            // Set the url
            curl_setopt($ch, CURLOPT_URL,$url);
            // Execute
            $result=curl_exec($ch);
            // Closing
            curl_close($ch);
             
            // Print the return data
            // print_r(json_decode($result, true));
            // dd($url);
            // die();


            // $client = new Client();
            // $response = $client->request('GET', $getCreateURL);
            // $response = $client->request('GET', 'http://bbb.teledogs.com/bigbluebutton/api/create?name=Flirting&meetingID=quest&attendeePW=ap&checksum=bcfb49cc9dac7b0834c90f1604c7005b9079da7b');

            // $body = $response->getBody(); 
            $xml = simplexml_load_string($result);
            //dd($xml);
            if($xml->returncode == "SUCCESS"){
                //successful on bbb server
                $newLiveClass= [
                'title'=>$title,//class title
                'meetingID'=>$meetingID,//meeting ID
                'classTime'=>$classTime,//classTime
                'attendeePW'=>$attendeePW,//attendee password 
                'moderatorPW'=>$moderatorPW,//moderator password
                'duration'=>$duration,//role=0for normal user accounts
                'owner'=>$user['id']
                ];
    
                $classRecord = [
                'meetingID'=>$meetingID,
                'users'=>$user['id']
                ];


                $newLiveClass = LiveClasses::create($newLiveClass);
                LiveClassRecordings::create($classRecord);

                if($newLiveClass){
                    $url = url('user/live/'.$meetingID);
                    //successful
                    //UNCOMMENT THIS
                    // $update = User::where('email',$user['email'])->update(['token'=>$meetingID]);
    
    
                    // sendMail(['template'=>get_option('user_create_meeting_email'),'recipent'=>[$user['email']]]);
    
                    // return redirect()->back()->with('msg',trans('main.thanks_class'));
                    // $class_string = 'Meeting created successfully!. Share -> '.$meetingID.' for others to join. Meeting details sent to your E-mail Address';
                    $class_string = "Meeting created successfully!.<br> ID: -> ".$meetingID."<br>Link. <a href='$url'>$url</a>";
                    return redirect()->back()->with('flash_message_success',$class_string);
    
                }else{
                    //not successful
                    return redirect()->back()->with('msg',trans('main.error_class'));
                }
            }else{
               //not successful
               return redirect()->back()->with('msg',trans('main.error_class')); 
            }  

    }
    public function joinmeeting(Request $request){
        return $this->join_meeting($request->meetingID);
    }
    public function join_meeting($meetingID){
        $user = \Auth::user();
        $currentUser="";

        //get the secure salt
        $salt = env("BBB_SALT", "0");
        //get BBB server
        $bbb_server = env("BBB_SERVER", "0");

        //1.get the details of the logged in user
        $currentUserArray= explode(" ", $user->name);
        // dd($user);

        if(count($currentUserArray) > 1){
            //has firstname lastname
            $currentUser=$currentUserArray[0]."_".$currentUserArray[1];//"test_user"
        }else{
            $currentUser=$currentUserArray[0];//"test"
        }
        

        //get the details of the live class
        $live_class = LiveClasses::where('meetingID',$meetingID)->first();
        // dd($live_class->title); = "First Class"
        if($live_class == null){
            return redirect()->back()->with('flash_message_error','An error occurred when trying to join the class');
        }

        //check if user is presenter by default or not 
        //if not owner of class assign role of attendee
        $userPass=$user->id == $live_class['owner'] ? 
        $live_class->moderatorPW: $live_class->attendeePW ;   

        // dd($meetingID);     

        //2.get the checksum(to be computer) and store it in column
        $join_string="fullName=$currentUser&meetingID=$meetingID&password=$userPass";

        $newJoinString="join".$join_string;

        //(b)==> append the secret salt to end of the new query string with the action
            //secret salt: 639259d4-9dd8-4b25-bf01-95f9567eaf4b
            // $newString = createname=Test+Meeting&meetingID=abc123&attendeePW=111222&moderatorPW=333444639259d4-9dd8-4b25-bf01-95f9567eaf4b
        //$newString = "createname=$title&meetingID=$meetingID&attendeePW=$attendeePW&moderatorPW=$moderatorPW".$salt;
            

        //(c)==> get the sha1 of the new string and save it as checksum
        $checksumJoin=sha1($newJoinString.$salt);

        $joinURL = $join_string."&checksum=".$checksumJoin;
        $getJoinURL= $bbb_server.'join?'.$joinURL;

        // dd($getJoinURL);
        $names=array();
        //save details into the liveclassrecordings table
        $names = DB::table('live_class_recordings')->where('meetingID', $meetingID)->value('users');
        $namesArray = explode(",", $names);
        array_push($namesArray,$user['id']);
        $newlist=implode(",", $namesArray);
        // dd($newlist);


        $liveRecord=LiveClassRecordings::where('meetingID',$meetingID)->update(['users'=>$newlist]);

        // dd($getJoinURL);
        return redirect()->away($getJoinURL);
    }
}


