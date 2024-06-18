<div class="container-fluid pt-2">
    <div class="row">
        <div class="col-md-6">
            <div class="card">

                <div class="card-body">
                    <h4><b>Tambah Data</b></h4>

                    @isset($calon)
                        <form action="/admin/calon/{{ $calon->id }}" method="POST">
                            @method('put')
                    @else
                    <form action="/admin/calon" method="POST">
                    @endisset

                        @csrf

                        <div class="form-group">
                            <label for=""><b>NISN</b></label>
                            <input type="text" class="form-control @error('nisn')  is-invalid @enderror" name="nisn" placeholder="NISN" value="{{  isset($calon) ? $calon->nisn : old('nisn') }}">

                            @error('nisn')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for=""><b>Nama Lengkap</b></label>
                            <input type="text" class="form-control @error('namalengkap')  is-invalid @enderror" name="namalengkap" placeholder="Nama Lengkap" value="{{  isset($calon) ? $calon->namalengkap : old('namalengkap') }}">

                            @error('namalengkap')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for=""><b>Tanggal Lahir</b></label>
                            <input type="date" class="form-control @error('tanggal_lahir')  is-invalid @enderror" name="tanggal_lahir" placeholder="Tempat Lahir" value="{{  isset($calon) ? $calon->tanggal_lahir : old('tanggal_lahir') }}">

                            @error('tanggal_lahir')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for=""><b>Asal Sekolah</b></label>
                            <input type="text" class="form-control @error('asal_sekolah')  is-invalid @enderror" name="asal_sekolah" placeholder="Asal Sekolah" value="{{  isset($calon) ? $calon->asal_sekolah : old('asal_sekolah') }}">

                            @error('asal_sekolah')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for=""><b>Jurusan</b></label>
                            <select name="jurusan_id" class="form-control @error('jurusan_id')  is-invalid @enderror" id="">
                                <option value="">--Jurusan--</option>
                                @foreach ($jurusan as $item)
                                    <option value="{{ $item->id }}" {{ isset($calon) ? $item->id == $calon->jurusan_id ? 'selected' : '' :old ('jurusan_id') }}>{{ $item->singkatan }}</option>
                                @endforeach
                        </select>
                            @error('jurusan_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
{{-- @dd($calon) --}}
                        <div class="form-group">
                            <label for=""><b>Status</b></label>
                            <select name="status" class="form-control @error('status')  is-invalid @enderror" id="">
                                    <option value="">--Status--</option>
                                    <option value="Lulus" {{ isset($calon) ? $calon->status == 'Lulus' ? 'selected' : old('status' ) : '' }}>Lulus</option>
                                    <option value="Tidak Lulus" {{ isset($calon) ? $calon->status == 'Tidak Lulus' ? 'selected' : old('status') :'' }}>Tidak Lulus</option>
                            </select>

                            @error('status')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                       

                        <a href="/admin/calon" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Kembali</a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>