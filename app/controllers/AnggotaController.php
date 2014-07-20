<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Anggota;
use View;
use Illuminate\Support\Facades\Redirect;
use Input;



class AnggotaController extends BaseController{
    
    public function view(){
        $t = Anggota::paginate(3);
        $data = array (
            'anggota'=>$t,
    );
        return View::make('anggota.view',$data);
    }
    public function add(){
        return View::make('anggota.add');
    }
    public function addProses(){
        $in = Input::all();
        $t = new Anggota();
        $t->nm_anggota = $in['nama'];
        $t->alamat     = $in['alamat'];
        $t->jurusan    = $in['jurusan'];
        $t->tgl_daftar = $in['tgldaftar'];
        $t->save();
        
        return Redirect::to('/anggota');    
    }
     public function edit($id){
        $t = Anggota::find($id);
        $data = array (
            'anggota'=>$t,
        );
        return View::make('anggota.edit',$data); 
    }
    public function editProses(){
        
           $in = Input::all();
           $t = Anggota::find($in['id']);
            $t->nm_anggota = $in['nama'];
            $t->alamat     = $in['alamat'];
            $t->jurusan    = $in['jurusan'];
            $t->tgl_daftar = $in['tgldaftar'];
            $t->update();
        
        return Redirect::to('/anggota');    
        
    }
    public function delete($id){
       $t = Anggota::find($id);
       $t->delete();
       
       return Redirect::to('/anggota');
    }
}
