<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Anggota extends Eloquent {
    protected $table = 'anggota';
    
    public $timestamps = false;
    
    public function peminjaman() {
        return $this->hasOne("App\\Models\\Peminjaman");
    }
}
