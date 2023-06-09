<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;
class TaskAPIController extends Controller
{
    //Read Data Task
    public function read(){
        $task = Task::all();
        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil Ditampilkan',
            'data' => $task
        ],200);
    }
    // Create Data Task
    public function create(Request $request){
        $task = Task::create([
            'nama'=> $request->nama,
            'judul_task'=> $request->judul_task,
            'deskripsi_task'=> $request->deskripsi_task
        ]);
        if($task){
            return response()->json([
                'success' => true,
                'message' => 'Task created successfully',
                'data' => $task
            ],200);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Task created Failed',
                'data' => $task
            ],401);
        }
    }
    //Update Data Task
    public function update($id, Request $request){
        $task = Task::find($id)->update([
            'nama'=>$request->nama,
            'judul_task'=>$request->judul_task,
            'deskripsi_task'=>$request->deskripsi_task
        ]);
        if($task){
            return response()->json([
                'success' => true,
                'message' => 'Task successfully updated',
                'data' => $task
            ],200);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Task failed updated',
                'data' => $task
            ],400);
        }
    }
    public function delete($id){
        $task = Task::find($id)->delete();
        if($task){
            return response()->json([
                'success' => true,
                'message' => 'Task successfully delete',
                'data' => $task
            ],200);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Task failed delete',
                'data' => $task
            ],400);
        }
    }
}
