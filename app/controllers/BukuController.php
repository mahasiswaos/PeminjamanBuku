<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Buku;
use View;
use Illuminate\Support\Facades\Redirect;
use Input;



class BukuController extends BaseController{
    public function view(){
        $t = Buku::paginate(3);
        $data = array (
            'buku'=>$t,
    );
        return View::make('buku.view',$data);
    }
    public function add(){
        return View::make('buku.add');
    }
    public function addProses(){
        $in = Input::all();
        $t = new Buku();
        $t->judul_buku = $in['judul'];
        $t->pengarang  = $in['pengarang'];
        $t->penerbit    = $in['penerbit'];
        $t->jumlah     = $in['jumlah'];
        $t->save();
        
        return Redirect::to('/buku');    
    }
      public function edit($id){
        $t = Buku::find($id);
        $data = array (
            'buku'=>$t,
        );
        return View::make('buku.edit',$data); 
      }
       public function editProses(){
          $in = Input::all();
          $t = Buku::find($in['id']);
            $t->judul_buku = $in['judul_buku'];
            $t->pengarang    = $in['pengarang'];
            $t->penerbit   = $in['penerbit'];
            $t->jumlah = $in['jumlah'];
            $t->update();
        
        return Redirect::to('/buku');    
        
    }

    public function delete($id){
       $t = Buku::find($id);
       $t->delete();    
   
       
       return Redirect::to('/buku');
    }
     
}
