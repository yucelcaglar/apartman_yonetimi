<?php

namespace App\Http\Controllers\admin\gelir;

use App\Models\gelir_kalemleri;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class indexController extends Controller
{
    public function index(){
        $data = DB::table('gelir_kalemleris')->distinct()->get();
        return view('admin.gelir.index',['data' => $data]);
    }

    public function create(){
        return view('admin.gelir.create');
    }

    public function store(Request $request){
        $all = $request->except(['_token','EKLE']);


        $insert = DB::table('gelir_kalemleris')->insert([$all]);
        if($insert){
            return redirect('admin/gelir/ekle')->with('status','Gelir Eklenmiştir !');
        }else{
            return redirect('admin/gelir/ekle')->with('status','Gelir Eklenirken Hata oluştu !');
        }
    }

    public function edit($id){
        $data = DB::table('gelir_kalemleris')->where('id','=', $id)->get();
        return view('admin.gelir.edit',['data' => $data]);

    }

    public function update(Request $request){
        $id = $request->route('id');
        $all = $request->except('_token');
        $update = DB::table('gelir_kalemleris')->where('id','=',$id)->update($all);
        return redirect()->route('admin.gelir.edit.post', ['id' => $id])->with('status','Gelir adı güncellenmiştir !');
    }

    public function delete(Request $request){
        $id = $request->route('id');
        $delete = DB::table('gelir_kalemleris')->where('id','=',$id)->delete();
        return redirect()->back()->with('status','Gelir adı silinmiştir !');

    }

}
