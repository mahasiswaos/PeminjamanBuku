<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Buku extends Eloquent {
    protected $table = 'buku';
    
    public $timestamps = false;
    
    public function peminjaman() {
        return $this->hasOne("App\\Models\\Peminjaman");
    }
}
