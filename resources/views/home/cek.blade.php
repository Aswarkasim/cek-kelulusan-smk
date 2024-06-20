<div class="container mt-4">
    <div class="text-center">
        <h4><b>Silakan Cek Kelulusan Anda</b></h4>
        <p>Lengkapi data berikut</p>
    </div>


        <div class="row">
            <div class="col-md-6"  data-aos="flip-up" data-aos-duration="1000">
                <img src="/vendor/img/buku.png" width="100%" alt="">
            </div>
            <div class="col-md-6"  data-aos="flip-up" data-aos-duration="1500">
                <div class="card shadow-sm">
                    <div class="card-content p-3">
                        <a href="/" class="btn btn-secondary"><i  class="fas fa-arrow-left"></i> Kembali</a>
                        <form action="/cek/proses" method="get">
                            <div class="form-group">
                                <label for=""><b>No. Tes</b></label>
                                <input type="text" class="form-control @error('nisn')  is-invalid @enderror" name="nisn" placeholder="No Tes" value="{{  isset($user) ? $user->nisn : '' }}">
    
                                @error('nisn')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mt-4">
                                <label for=""><b>Tanggal Lahir</b></label>
                                <input type="date" class="form-control @error('tanggal_lahir')  is-invalid @enderror" name="tanggal_lahir" placeholder="tanggal_lahir" value="{{  isset($user) ? $user->tanggal_lahir : '' }}">
    
                                @error('tanggal_lahir')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>


                            <div class="justify-content-center d-flex mt-2">
                                <button type="submit" class="btn btn-primary">Cek Kelulusan <i class="fas fa-arrow-right"></i></button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

</div>