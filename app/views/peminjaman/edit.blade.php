@extends('layout.bootstrap3.index')
@section('content')

<div class="col-sm-9">
    <div class="panel panel-info">
        <div class="panel-heading"><i class="glyphicon glyphicon-plus"></i> Form Ubah Peminjaman</div>
        <div class="panel-body">
            <form class="form-horizontal" action="<?php echo URL::to("/peminjaman/edit/proses"); ?>" method="post">
                <input type="hidden" name="id" value="<?php echo $peminjaman->id ?>">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Nama anggota</label>
                    <div class="col-sm-4">
                        <select class="form-control" name="idanggota">
                            <option>--Pilih salah satu--</option>
                            <?php foreach ($anggota as $value) { ?>
                                <option value="<?php echo $value->id ?>" 
                                        <?php echo($value->id == $peminjaman['anggota_id']) ? "selected" : ""; ?>><?php echo $value->nm_anggota ?></option>
                                    <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Judul buku</label>
                    <div class="col-sm-4">
                        <select class="form-control" name="idbuku">
                            <option>--Pilih salah satu--</option>
                            <?php foreach ($buku as $value1) { ?>
                                <option value="<?php echo $value1->id ?>"
                                        <?php echo($value1->id == $peminjaman['buku_id']) ? "selected" : ""; ?>><?php echo $value1->judul_buku ?></option>
                                    <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Tanggal pinjam</label>
                    <div class="col-sm-5">
                        <input type="date" name="tglpinjam" class="form-control" value="<?php echo $peminjaman->tgl_pinjam; ?>">
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