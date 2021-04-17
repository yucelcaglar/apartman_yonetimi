<?php

namespace App\Http\Controllers\admin\site;
use App\Models\Blok;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index(){

        $data = DB::table('bloks')->distinct()->get();
        return view('admin.site.index',['data' => $data]);
    }

    public function create(){
        return view('admin.site.create');
    }

    public function store(Request $request){
        $all = $request->except(['_token','EKLE']);

       /* $blok = new Blok;

        $blok->blok = $request->blok;

        $blok->save();*/
        $insert = DB::table('bloks')->insert([$all]);
        if($insert){
            return redirect('admin/site/ekle')->with('status','Blok Eklenmiştir !');
        }else{
            return redirect('admin/site/ekle')->with('status','Blok Eklenirken Hata oluştu !');
        }
    }

    public function edit($id){

        $data = DB::table('bloks')->where('id','=', $id)->get();
        return view('admin.site.edit',['data' => $data]);
    }

    public function update(Request $request){
        $id = $request->route('id');
        $all = $request->except('_token');
        $update = DB::table('bloks')->where('id','=',$id)->update($all);
        return redirect()->route('admin.site.edit.post', ['id' => $id])->with('status','Blog adı güncellenmiştir !');
    }

    public function delete(Request $request){
        $id = $request->route('id');
        $delete = DB::table('bloks')->where('id','=',$id)->delete();
        return redirect()->back()->with('status','Blog adı silinmiştir !');

    }
}
