<div class="container-fluid pt-2">


    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <a href="/admin/calon/create" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah</a>

                    <div class="float-right">
                        <form action="" method="get">
                        <div class="input-group input-group-sm">
                            <input type="text" name="cari" class="form-control" placeholder="Cari..">
                            <span class="input-group-append">
                              <button type="submit" class="btn btn-primary btn-flat"><i class="fa fa-search"></i></button>
                              <a href="/admin/calon" class="btn btn-info btn-flat"><i class="fa fa-sync-alt"></i></a>
                            </span>
                          </div>
                          </form>
                      </div>


                    @if (session()->has('success'))
                        <div class="alert alert-success mt-2"><i class="fas fa-check"></i>
                            {{ session('success') }}
                        </div>
                    @endif

                    <table class="table mt-1">
                        <tr>
                            <th>No</th>
                            <th>Nisn</th>
                            <th>Nama</th>
                            <th>Tanggal Lahir</th>
                            <th>Asal Sekolah</th>
                            <th>Jurusan</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>

                        {{-- @dd($calon) --}}
                        @foreach ($calon as $item)
                            
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nisn }}</td>
                            <td>{{ $item->namalengkap }}</td>
                            <td>{{ $item->tanggal_lahir }}</td>
                            <td>{{ $item->asal_sekolah }}</td>
                            <td>{{ $item->jurusan->singkatan }}</td>
                            <td>{{ $item->status }}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="/admin/calon/{{ $item->id }}/edit" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></a>
                                    {{-- <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a> --}}
                                    <form action="/admin/calon/{{ $item->id }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm ml-1"><i class="fas fa-trash"></i></button>
                                    </form>
                                </div>
                                
                            </td>
                        </tr>
                        @endforeach

                    </table>

                    <div class="justify-content-center d-flex">
                        {{ $calon->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>