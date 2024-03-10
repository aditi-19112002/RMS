<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Result;

class ResultController extends Controller
{
 public function index(){
    $data["results"]=Result::all();
    return view("home",$data);
 }
 public function search(Request $req){
   $search = $req->search;
   $data["results"]=Result::where("name","like","%$search%")->get();//select * from results wherename LIKE%$search$%
   return view("home",$data);
 }
 public function insert(Request $req){
    if($req->ismethod("post")){
        $data= $req->validate([
            "name"=>"required",
            "father"=>"required",
            "contact"=>"required",
            "school_name"=>"required",
            "maths"=>"required",
            "science"=>"required",
            "sst"=>"required",
            "hindi"=>"required",
            "english"=>"required",
            "image"=>"required"
        ]);
        //image work
        $filename = $req->file("image")->getClientOriginalName();
         $path = $req->file("image")->storeAs("public/students",$filename);

        $done = Result::create($data);
        $req->session()->flash("msg","Insert Sucessfully");
        return redirect()->route("home")->with("msg","Result update successfully");

    }
    return view("insert");
 }
 
 public function deleteResult(Request $req,$id){
    $data = Result::findorfail($id);
    $data->delete();

     $req->session()->flash("error","Delete Result Sucessfully");
    return redirect()->back();

 }

 public function viewResult($id){
    $data ["result"]= Result::findorfail($id);
    return view("viewResult",$data);

 }
 public function editResult(Request $req,$id){
   if($req->ismethod("post")){
      $data= $req->validate([
          "name"=>"required",
          "father"=>"required",
          "contact"=>"required",
          "school_name"=>"required",
          "maths"=>"required",
          "science"=>"required",
          "sst"=>"required",
          "hindi"=>"required",
          "english"=>"required",
      ]);
      $result=Result:: where("id",$id)->update($data);
      return redirect()->route("home");
   }
   $data ["result"] = Result::findorfail($id);
    return view("editResult",$data);
 
}
} 