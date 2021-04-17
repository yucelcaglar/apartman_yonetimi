<?php

namespace App\Http\Controllers\admin\gider;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class indexController extends Controller
{
    public function index(){
        $data = DB::table('gider_kalemleris')->distinct()->get();
        return view('admin.gider.index',['data' => $data]);
    }

    public function create(){
        return view('admin.gider.create');
    }

    public function store(Request $request){
        $all = $request->except(['_token','EKLE']);


        $insert = DB::table('gider_kalemleris')->insert([$all]);
        if($insert){
            return redirect('admin/gider/ekle')->with('status','Gider Eklenmiştir !');
        }else{
            return redirect('admin/gider/ekle')->with('status','Gider Eklenirken Hata oluştu !');
        }
    }

    public function edit($id){
        $data = DB::table('gider_kalemleris')->where('id','=',$id)->get();
        return view('admin.gider.edit',['data' => $data]);
    }

    public function update(Request $request){
        $id = $request->route('id');
        $all = $request->except('_token');
        $update = DB::table('gider_kalemleris')->where('id','=',$id)->update($all);
        return redirect()->route('admin.gider.edit.post',['id' => $id])->with('status','Gider kalemi güncellenmiştir !');
    }

    public function delete(Request $request){
        $id = $request->route('id');
        $delete = DB::table('gider_kalemleris')->where('id','=',$id)->delete();
        return redirect()->back()->with('status','Gider kalemi silinmiştir !');

    }
}
