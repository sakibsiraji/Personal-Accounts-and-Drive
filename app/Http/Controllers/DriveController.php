<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Drive;
use Illuminate\Support\Facades\Hash;
use Session;
use Illuminate\Support\Facades\DB;

class DriveController extends Controller
{
    function store(Request $req)
    {
        $record_type=$req->input('record_type');
        $record_detail=$req->input('record_detail');
        $record_file=$req->file('record_file');
        if(!$record_file==null)
        {
            $record_file_name = time() . '.' . $record_file->extension();
            $record_file->move('record_file', $record_file_name);
        }
        else
        {
            $record_file_name="";
        }

        $result=DB::table('records')->insert([
            'record_type'=>$record_type,
            'record_detail'=>$record_detail,
            'record_file'=>$record_file_name
        ]);

        if($result==true)
        {
            return view('dashboard');
        }
    }
    public function DriveRecordsByCategory()
    {
        if(!session()->has('user_name')){
            return redirect('dashboard');
        }
        $data=DB::table('records')->select('record_type')->distinct('record_type')->get();
        return view('DriveRecordsByCategory',['records'=>$data]);
    }
    function show($id1)
    {
        if(!session()->has('user_name')){
            return redirect('dashboard');
        }
        $data=DB::table('records')->where('record_type',$id1)->get();
        return view('DriveRecordsView',['records'=>$data]);
    }
    public function view($id)
    {
        $record=Drive::find($id);
        return view ('doc', compact('record'));
    }
    function delete($id){
        if(!session()->has('user_name')){
            return redirect('dashboard');
        }
        $record=Drive::find($id);
        $record->delete();
        return redirect('dashboard');

    }
}
