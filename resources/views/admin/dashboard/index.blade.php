<div class="container-fluid mt-2">
    <div class="alert alert-success">Halo {{ auth()->user()->name }} Selamat datang di halaman admin !!</div>
</div>


<div class="row m-3">
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-info">
        <div class="inner">
          <h3>{{ $calon }}</h3>

          <p>Calon Siswa</p>
        </div>
        <div class="icon">
          <i class="ion ion-bag"></i>
        </div>
        {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
      </div>
    </div>

  </div>