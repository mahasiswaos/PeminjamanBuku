@extends('layout.bootstrap3.index')
@section('content')

<div class="col-sm-9">
    <div class="panel panel-info">
        <div class="panel-heading"><i class="glyphicon glyphicon-plus"></i> Form Tambah Buku</div>
        <div class="panel-body">
            <form class="form-horizontal" action="<?php echo URL::to("/buku/add/proses"); ?>" method="post">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Judul buku</label>
                    <div class="col-sm-4">
                       <input type="text" name="judul" class="form-control " placeholder="Judul buku">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Pengarang</label>
                    <div class="col-sm-4">
                        <input type="text" name="pengarang" class="form-control " placeholder="Nama pengarang">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Penerbit</label>
                    <div class="col-sm-4">
                        <input type="text" name="penerbit" class="form-control " placeholder="Nama penulis">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Jumlah</label>
                    <div class="col-sm-5">
                        <input type="text" name="jumlah" class="form-control" placeholder="Jumlah buku">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-10">
                        <button type="submit" class="btn btn-info"> Simpan</button>
                        <input type="button"  class="btn btn-danger" onclick="history.back(-1)" value="Batal">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@stop