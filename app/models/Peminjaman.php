<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;


class Peminjaman extends Eloquent {
    protected $table ='peminjaman';
    
    public $timestamps = false;
    
    public function anggota(){
        return $this->belongsTo("App\\Models\\Anggota");
        
    }
    public function buku(){
        return $this->belongsTo("App\\Models\\Buku");
    }
    
}
