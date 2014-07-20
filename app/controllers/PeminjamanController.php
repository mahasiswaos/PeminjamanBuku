<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Peminjaman;
use App\Models\Anggota;
use App\Models\Buku;
use Input;
use View;
use Illuminate\Support\Facades\Redirect;

class PeminjamanController extends BaseController {

    public function view() {
        $t = Peminjaman::paginate(3);
        $data = array(
            'peminjaman' => $t,
        );
        return View::make('peminjaman.view', $data);
    }

    public function add() {
        $anggota = Anggota::all();
        $bk = Buku::all();
        $data = [
            'anggota' => $anggota,
            'buku' => $bk,
        ];
        return View::make('peminjaman.add', $data);
    }

    public function addProses() {
        $in = Input::all();
        $pinjam = new Peminjaman;
        $pinjam->anggota_id = $in['idanggota'];
        $pinjam->buku_id = $in['idbuku'];
        $pinjam->tgl_pinjam = $in['tglpinjam'];
        $pinjam->save();

        return Redirect::to('/peminjaman');
    }

    public function edit($id) {
        $p = Peminjaman::find($id);
        $anggota = Anggota::all();
        $bk = Buku::all();
        $data = [
            'anggota' => $anggota,
            'peminjaman' => $p,
            'buku' => $bk,
        ];
        return View::make('peminjaman.edit', $data);
    }
    
    public function editProses(){
        
           $in = Input::all();
           $pinjam = Peminjaman::find($in['id']);
           $pinjam->anggota_id = $in['idanggota'];
           $pinjam->buku_id = $in['idbuku'];
           $pinjam->tgl_pinjam = $in['tglpinjam'];
           $pinjam->update();
        
        return Redirect::to('/peminjaman');    
        
    }
    
    public function delete($id){
       $t = Peminjaman::find($id);
       $t->delete();
       
       return Redirect::to('/peminjaman');
    }

}
