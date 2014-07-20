<nav class="navbar navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <h4> <b>Aplikasi peminjaman buku</</h4>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i>Anggota<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo URL::to('/anggota/add'); ?>"><i class="glyphicon glyphicon-plus"></i>Tambah data</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo URL::to('/anggota'); ?>"><i class="glyphicon glyphicon-list-alt"></i>Lihat data</a></li>
                </ul>
            </li>
           <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-book"></i>Buku <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo URL::to('/buku/add'); ?>"><i class="glyphicon glyphicon-plus"></i> Tambah data</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo URL::to('/buku'); ?>"><i class="glyphicon glyphicon-list-alt"></i>Lihat data</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-record"></i>Peminjaman <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo URL::to('/peminjaman/add'); ?>"><i class="glyphicon glyphicon-plus"></i> Tambah data</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo URL::to('/peminjaman'); ?>"><i class="glyphicon glyphicon-list-alt"></i> Lihat data</a></li>
                </ul>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i> 
                    <?php
                    if (Auth::check()) {
                        $user = Auth::user();
                        echo $user->username;
                    }
                    ?>
                    <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo URL::to('/login/logout'); ?>"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
            </li>
        </ul>
    </div><!-- /.navbar-collapse -->
</nav>