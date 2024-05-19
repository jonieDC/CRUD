<?php

namespace App\Http\Controllers;

use App\Models\book;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ValidatedInput;

class crudController extends Controller
{
    public function read(){
        $data=book::get()->all();
        $datas=[];
        if (count($data)!=null) {
            return view('read')->with(['datas'=>$data]);
        }else{
            return view('read')->with(['datas'=>$data]);
        }
        
    }
    public function save(Request $request){
        
            $validations=$request->validate([
                'title'=>'required',
                'author'=>'required',
                'price'=>'required'
             ]);
             if (book::create($validations)) {
                return back()->with('status','book successfully added!');
             }
       
    }
    public function delete(Request $request){
        if (book::where(['id'=>$request->id])->delete()) {
            return back()->with('status','successfully deleted!');
        }
    }
    public function edit(Request $request){
        $id=book::find($request->id);
      return view('edit')->with('id',$id);
}
    public function update(Request $request){
        $validations=$request->validate([
            'id'=>'required',
            'title'=>'required',
            'author'=>'required',
            'price'=>'required'
         ]);
         
   $update = book::find($validations['id']);
   $update->title=$validations['title'];
   $update->author=$validations['author'];
   $update->price=$validations['price'];
   $update->save();
   if ($update) {
   return redirect('/')->with('status','update success!');
   }   
}
public function view(Request $request){
    $data = book::find($request->id);
    return view('view')->with(['data'=>$data]);
}
public function search(Request $request){
    $request->id;
    $data=book::find($request->id);
    
    return back()->with('sdata',$data);
}
}
