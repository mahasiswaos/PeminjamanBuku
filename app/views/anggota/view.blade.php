@extends ('layout.bootstrap3.index')
@section('content')



<div class="panel panel-default">
  <div class="panel-heading">
      <h1 class="panel-title"> <center><b>Data anggota</b></center></h1>
  </div>
  <div class="panel-body">
     <table  class="table">
            <thead>
                <tr class="tab-content">
                    <th>Id</th>
                    <th>Nama anggota</th>
                    <th>Alamat</th>
                    <th>Jurusan</th>
                    <th>Tanggal daftar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($anggota as $val) { ?>
                    <tr>
                        <td><?php echo $val->id ?></td>
                        <td><?php echo $val->nm_anggota ?></td>
                        <td><?php echo $val->alamat ?></td>
                        <td><?php echo $val->jurusan ?></td>
                        <td><?php echo $val->tgl_daftar ?></td>
                        <td>
                            <a class="btn btn-info" href="<?php echo URL::to('/anggota/edit/'.$val->id); ?>"> 
                              <span class="glyphicon glyphicon-edit"></span>Edit</a>
                            <a class= "btn btn-danger" href="<?php echo URL::to('/anggota/delete/'.$val->id); ?>">
                                <span class="glyphicon glyphicon-trash"></span> Delete </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        
        <?php echo $anggota->links(); ?> 
  </div>
</div>
<a href="<?php echo URL::to('/anggota/add');?>" class="btn btn-info"><span class="glyphicon glyphicon-plus"></span>Tambah Data</a>
@stop