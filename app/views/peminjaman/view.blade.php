@extends ('layout.bootstrap3.index')
@section('content')
<div>
    <br/>
    <br/>
    <br/>
    <br/>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
        <h1 class="panel-title"> <center><b>Data Peminjaman</b></center></h1>
    </div>
    <div class="panel-body">
        <table  class="table">
            <thead>
                <tr class="tab-content">
                    <th>Id Peminjaman</th>
                    <th>Nama anggota</th>
                    <th>Judul buku</th>
                    <th>Tanggal pinjam</th>
                    <th> <center>Aksi</center></th>
            </tr>
            </thead>
            <tbody>
                <?php foreach ($peminjaman as $val) { ?>
                    <tr>
                        <td><?php echo $val->id ?></td>
                        <td><?php echo $val->anggota->nm_anggota ?></td>
                        <td><?php echo $val->buku->judul_buku ?></td>
                        <td><?php echo $val->tgl_pinjam ?></td>
                        <td><center>
                            <a class="btn btn-info" href="<?php echo URL::to('/peminjaman/edit/' . $val->id); ?>"> 
                                <span class="glyphicon glyphicon-edit"></span>Edit</a>
                            <a class= "btn btn-danger" href="<?php echo URL::to('/peminjaman/delete/' . $val->id); ?>">
                                <span class="glyphicon glyphicon-trash"></span> Delete </a>
                        </center>
                        </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>

        <?php echo $peminjaman->links(); ?> 
    </div>
</div>
<a href="<?php echo URL::to('/peminjaman/add'); ?>" class="btn btn-info"><span class="glyphicon glyphicon-plus"></span>Tambah Data</a>
@stop