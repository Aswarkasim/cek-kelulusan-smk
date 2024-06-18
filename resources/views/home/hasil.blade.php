<div class="container">
    <div class="row">

        <div class="col-md-6"  data-aos="flip-right" data-aos-duration="1500">
            <img src="/vendor/img/ppdb.png" class="shadow-sm" width="100%" data-aos="flip-up" data-aos-duration="1000" alt="">
        </div>

        <div class="col-md-6"  data-aos="flip-up" data-aos-duration="1000">
            <div class="card shadow-sm p-4">

                <div class="text-center"><b>HASIL</b></div>

                @if ($calon)
               

                <table class="table">
                    <tr>
                        <td>NISN</td>
                        <td>: {{ $calon->nisn }}</td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>: {{ $calon->namalengkap }}</td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>: {{ $calon->tanggal_lahir }}</td>
                    </tr>

                    <tr>
                        <td>Asal sekolah</td>
                        <td>: {{ $calon->asal_sekolah }}</td>
                    </tr>
                </table>

                    @if ($calon->status == 'Lulus')
                        <p class="alert alert-success">Selamat anda dinyatakan lulus di jurusan <b>{{ $calon->jurusan->name }}</b>. Silakan lakukan pendaftaran ulang.</p>
                    @else
                        <p class="alert alert-danger">Mohon maaf, anda dinyatakan <b>tidak lulus</b>, jangan patah semangat yah..!</p>
                    @endif

                @else
                    <p class="alert alert-warning">Data anda tidak ditemukan. periksa kembali data yang dimasukkan atau hubungi panitia PPDB UPTD SMKN Karossa.</p>    
                @endif

                

                <a href="/cek" class="btn btn-secondary"><i  class="fas fa-arrow-left"></i> Kembali</a>

            </div>
        </div>

        
    </div>
</div>