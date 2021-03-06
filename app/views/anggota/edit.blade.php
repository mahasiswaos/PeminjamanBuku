@extends('layout.bootstrap3.index')
@section('content')

<div class="col-sm-9">
    <div class="panel panel-info">
        <div class="panel-heading"><i class="glyphicon glyphicon-plus"></i> Form Ubah Anggota</div>
        <div class="panel-body">
            <form class="form-horizontal" action="<?php echo URL::to("/anggota/edit/proses"); ?>" method="post">
                <input type="hidden" name="id" value="<?php echo $anggota->id?>">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Nama</label>
                    <div class="col-sm-4">
                        <input type="text" name="nama" class="form-control " value="<?php echo $anggota->nm_anggota?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Alamat</label>
                    <div class="col-sm-4">
                        <input type="text" name="alamat" class="form-control " value="<?php echo $anggota->alamat?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Jurusan</label>
                    <div class="col-sm-4">
                        <input type="text" name="jurusan" class="form-control " value="<?php echo $anggota->jurusan?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Tanggal daftar</label>
                    <div class="col-sm-5">
                        <input type="date" name="tgldaftar" class="form-control" value="<?php echo $anggota->tgl_daftar?>" >
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-10">
                        <button type="submit" class="btn btn-info">Ubah</button> 
                        <input type="button"  class="btn btn-danger" onclick="history.back(-1)" value="Batal">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@stop