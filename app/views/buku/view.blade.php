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
      <h1 class="panel-title"> <center><b>Data buku</b></center></h1>
  </div>
  <div class="panel-body">
     <table  class="table">
            <thead>
                <tr class="tab-content">
                    <th>Id</th>
                    <th>judul_buku</th>
                    <th>pengarang</th>
                    <th>penerbit</th>
                    <th>jumlah</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($buku as $val) { ?>
                    <tr>
                        <td><?php echo $val->id ?></td>
                        <td><?php echo $val->judul_buku ?></td>
                        <td><?php echo $val->pengarang ?></td>
                        <td><?php echo $val->penerbit ?></td>
                        <td><?php echo $val->jumlah ?></td>
                        <td>
                            <a class="btn btn-info" href="<?php echo URL::to('/buku/edit/'.$val->id); ?>"> 
                              <span class="glyphicon glyphicon-edit"></span>Edit</a>
                            <a class= "btn btn-danger" href="<?php echo URL::to('/buku/delete/'.$val->id); ?>">
                                <span class="glyphicon glyphicon-trash"></span> Delete </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        
        <?php echo $buku->links(); ?> 
  </div>
</div>
<a href="<?php echo URL::to('/buku/add');?>" class="btn btn-info"><span class="glyphicon glyphicon-plus"></span>Tambah Data</a>
@stop