<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Api;

class ApiController extends Controller
{
    public function insert(Request $a)
    {
        $data = new Api;

        $data->name = $a->name;
        $data->email = $a->email;
        $data->phn_num = $a->phn_num;
        $data->address = $a->address;
        $data->qualification = $a->qualification;
        $data->branch = $a->branch;
        $data->semester = $a->semester;
        $data->course = $a->course;
        $data->gender = $a->gender;
        $data->college = $a->college;
        $data->save();

        if($data != null) {
            return response()->json($data = [
                'status'=> 200,
                'msg'=>'success',
                'api'=>$data

            ]);
        }
        else{
            return response()->json($data = [
                'status'=> 200,
                'msg'=>'DATA NOT FOUND'
            ]);
        }



    }

    public function display()
    {

        $data = Api::all();

        if ($data != null)
        {
            return response()->json($data = [
                'status'=>200,
                'msg'=>'success',
                'api'=> $data
            ]);
        }
        else{
            return response()->json($data = [
                'status'=>400,
                'msg'=>'DATA NOT FOUND'
            ]);
        }

    }

    public function view($id)
    {
        $data = Api::find($id);

        if ($data != null)
        {
            return response()->json($data = [
                'status'=>200,
                'msg'=>'success',
                'api'=> $data
            ]);
        }
        else{
            return response()->json($data = [
                'status'=>400,
                'msg'=>'DATA NOT FOUND'
            ]);
        }
    }

    public function update(Request $a)
    {
        $data = Api::find($a->id);
        $data->name = $a->name;
        $data->email = $a->email;
        $data->phn_num = $a->phn_num;
        $data->address = $a->address;
        $data->qualification = $a->qualification;
        $data->branch = $a->branch;
        $data->semester = $a->semester;
        $data->course = $a->course;
        $data->gender = $a->gender;
        $data->college = $a->college;
        $data->save();

        if ($data != null)
        {
            return response()->json($data = [
                'status'=>200,
                'msg'=>'success',
                'api'=> $data
            ]);
        }
        else{
            return response()->json($data = [
                'status'=>400,
                'msg'=>'DATA NOT FOUND'
            ]);
        }

    }

    public function delete($id)
    {

        $data = Api::find($id);
        $delete = $data->delete();

        if ($delete != null)
        {
            return response()->json($delete = [
                'status'=>200,
                'msg'=>'success',
                'api'=> $delete
            ]);
        }
        else{
            return response()->json($delete = [
                'status'=>400,
                'msg'=>'DATA NOT FOUND'
            ]);
        }

    }



}
