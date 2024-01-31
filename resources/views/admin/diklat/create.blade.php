@extends('layouts.admin')


@section('content')
    <div class="container my-3">
        <form action="{{ route('diklat.store') }}" method="POST">
            @csrf
            <div class="row text-center">
                <div class="col">
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Pilih Gambar</label>
                        <input class="form-control" type="file" id="formFile" name="cover">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label">Nama Diklat</label>
                        <input type="text" class="form-control" name="nama_diklat">
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label">Jumlah Sasaran</label>
                        <input type="text" class="form-control" placeholder="400" name="jumlahsasaran">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label">Periode</label>
                        <input type="text" class="form-control" placeholder=" 2 Juli - 10 Desember 2024" name="periode">
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label">Tempat</label>
                        <input type="text" class="form-control" name="tempat">
                    </div>
                </div>
            </div>
            {{-- <div class="row">
                <div class="col">
                    <div class="text-center"><label class="form-label my-3 fw-bolder">Kata Pengantar</label></div>
                    <textarea class="form-control" id="summernote" name="kata_pengantar"></textarea>
                </div>
            </div> --}}
            <div class="row">
                <div class="col">
                    <div class="text-center"><label class="form-label my-3 fw-bolder">Latar Belakang</label></div>
                    <textarea class="form-control" id="summernote2" name="latar_belakang">
                        <p>Pendidikan kejuruan merupakan pendidikan menengah yang mempersiapkan peserta didik terutama untuk bekerja dalam bidang tertentu (penjelasan Pasal 15, Undang-Undang Republik Indonesia Nomor 20 Tahun 2003 Tentang Sistem Pendidikan Nasional). Oleh karenanya, Pendidikan Menengah kejuruan berupaya untuk mengembangkan kemampuan peserta didik dengan penekanan pada penguasaan keterampilan, standar kompetensi, pengembangan sikap kewirausahaan serta pengembangan kepribadian profesional, sehingga peserta didiknya lebih siap bekerja di dunia usaha dunia industri. Hal tersebut menjadi tanggung jawab dari gurunya dalam proses belajar mengajar.</p><p>Guru atau Pendidik merupakan tenaga profesional yang bertugas merencanakan dan melaksanakan proses pembelajaran, menilai hasil pembelajaran, melakukan pembimbingan dan pelatihan (Pasal 39 Ayat 2, Undang-Undang Republik Indonesia Nomor 20 Tahun 2003 Tentang Sistem Pendidikan Nasional). Pendidik sebagai tenaga profesional memiliki peran penting dan strategis dalam proses pembelajaran pada Sekolah Menengah Kejuruan/Madrasah Aliyah Kejuruan (SMK/MAK) untuk mengembangkan potensi peserta didik. Tugas dan kewajiban guru adalah mengelola pembelajaran dengan baik mulai dari perencanaan, pelaksanaan, termasuk melakukan evaluasi agar terorganisasikan dengan baik. Pengelolaan pembelajaran ini mendorong proses pembelajaran terlaksana dengan baik sehingga menciptakan pendidikan berkualitas dalam pencapaian tujuan pembelajaran. Standar Kompetensi guru mencakup 4 (empat) kompetensi, yaitu kompetensi pedagogik, kepribadian, sosial, dan profesional yang dibuktikan dengan sertifikat pendidik. Kompetensi keahlian di bidang kejuruan yang merupakan kompetensi profesional, dibuktikan dengan sertifikat keahlian yang relevan sesuai ketentuan peraturan perundang-undangan.</p><p>Pada era Industri 4.0 sekarang ini, Perkembangan ilmu pengetahuan, teknologi, dan berbagai faktor kehidupan lainnya telah banyak mengubah kondisi sosial budaya masyarakat. Termasuk berbagai perubahan di dunia kerja. Kondisi tersebut sangat dinamis, sehingga perlu direspon dengan baik oleh para pendidik SMK. Respon yang baik tersebut diharapkan mampu menghantarkan peserta didik dalam mengembangkan dirinya, sehingga mereka siap untuk menghadapi dan menyesuaikan dengan tuntutan perkembangan yang terjadi.</p><p>Guru SMK perlu terus menerus mengupayakan agar kompetensi profesionalnya dapat mengikuti perkembangan teknologi dan pemanfaatannya di dunia kerja. Dengan demikian, pendidikan yang dikelolanya akan tetap relevan dan memenuhi kebutuhan masyarakat.</p><p>Menurut Peraturan Menteri Pendidikan Dan Kebudayaan Republik Indonesia Nomor 26 Tahun 2020 Tentang Organisasi Dan Tata Kerja Unit Pelaksana Teknis Kementerian Pendidikan Dan Kebudayaan menyatakan bahwa, BBPPMPV menyelenggarakan fungsi pelaksanaan fasilitasi dan peningkatan kompetensi pendidik dan tenaga kependidikan pada pendidikan vokasi.&nbsp; Sehubungan dengan hal tersebut, untuk mendukung peningkatan dan pemerataan kompetensi bagi pendidik, maka Direktorat Jenderal Pendidikan Vokasi melalui BBPPMPV BMTI akan menyelenggarakan Program Upskilling dan Reskilling Guru Kejuruan Berstandar Industri melalui Penggunaan Software CAD CAM.</p>
                    </textarea>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="text-center"><label class="form-label my-3 fw-bolder">Hasil Yang Diharapkan</label></div>
                    <textarea class="form-control" id="summernote3" name="hasil_diharapkan">
                        <p>Setelah mengikuti pelatihan, peserta diharapkan mampu membuat model 3D dengan CAD dan membuat program CNC dengan CAM.<br></p>
                    </textarea>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="text-center"><label class="form-label my-3 fw-bolder">Sasaran</label></div>
                    <textarea class="form-control" id="summernote4" name="sasaran">
                        <p>Setelah mengikuti pelatihan, peserta diharapkan mampu membuat model 3D dengan CAD dan membuat program CNC dengan CAM.<br></p>
                    </textarea>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="text-center"><label class="form-label my-3 fw-bolder">Materi Pokok</label></div>
                    <textarea class="form-control" id="summernote5" name="materi_pokok">
                        <div style="text-align: justify;"><span id="docs-internal-guid-7a3cbea5-7fff-2193-471c-072fba1a6567" style=""><ol style=""><li style="">Membuat gambar sketsa 2D
                            Berisi materi tentang basic pembuatan model melalui sketsa 2D</li><li style="">Membuat model 3D dengan basic feature&nbsp;<br>Berisi materi tentang penggunaan perintah dasar (basic feature) untuk membuat model 3D seperti extrude, revolve, cylinder, cone, sphere, hole, emboss, groove, rib, thread.</li><li>Membuat model 3D dengan feature surface&nbsp;<br>Berisikan materi tentang membuat model 3D dengan permukaan yang kompleks dengan menggunakan perintah seperti 4 Point Surface, mesh surface, sweep.</li><li>Membuat gambar kerja (gambar detail)<br>Berisikan materi tentang menyajikan gambar kerja (gambar detail) yang meliputi gambar proyeksi, gambar potongan, dan setting layout sesuai ukuran kertas gambar yg diinginkan.</li><li>Membuat program CAM<br>Berisikan materi tentang membuat program CAM yang meliputi milling process, milling planar, hloe making, milling contour.</li><li>Proses pemesinan CNC<br>Berisikan materi tentang pembuatan produk hasil desain CAD dan program CAM dengan software di mesin CNC.</li><li>Pengecekan program (siklus program, Tool, Work Preparation)<br>Berisikan materi tentang verifikasi G-Code (program jadi) , penyesuain tool, setting benda kerja, setting tool.</li><li>Quality control (Produk)<br>Berisikan materi tentang pengecekan hasil proses pemesinan (dimensi, kesesuaian, kelengkapan feature, surface quality).</li><li>Presentasi Project dan RTL<br>Pada kegiatan ini peserta pelatihan akan mempresentasikan proyek yang dilaksanakan selama kegiatan pelatihan serta tindak lanjutnya.</li><li>Magang Industri<br>Membekali peserta dengan budaya industri, bisnis proses, manajemen resiko, melalui pengamatan, keterlibatan secara langsung, elaborasi, dan kolaborasi. Selama kegiatan ini peserta mendapat bimbingan dari staf industri yang ditunjuk pimpinan perusahaan.&nbsp;</li><li>Uji Kompetensi Keahlian<br>Kegiatan untuk menguji kompetensi teknis peserta pelatihan, uji kompetensi diselenggarakan oleh PT. CNC Disain Nusantara.<font face="Arial Narrow, sans-serif"><br></font></li></ol></span></div>
                    </textarea>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="text-center"><label class="form-label my-3 fw-bolder">Evaluasi</label></div>
                    <textarea class="form-control" id="summernote6" name="evaluasi"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="text-center"><label class="form-label my-3 fw-bolder">Sertifikat</label></div>
                    <textarea class="form-control" id="summernote7" name="sertifikat"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="text-center"><label class="form-label my-3 fw-bolder">Layanan Peserta</label></div>
                    <textarea class="form-control" id="summernote8" name="layanan_peserta"></textarea>
                </div>
            </div>
            {{-- <div class="row">
                <div class="col">
                    <div class="text-center"><label class="form-label my-3 fw-bolder">Tata Tertib Pelaksanaan</label></div>
                    <textarea class="form-control" id="summernote9" name="ttertib_pelaksanaan"></textarea>
                </div>
            </div> --}}
            <div class="row mt-3">
                <div class="col">
                    <a href="{{ route('mainmenu') }}" class="btn btn-secondary">Kembali</a>
                </div>
                <div class="col d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Tambahkan</button>
                </div>
            </div>
        </form>
    </div>

    <script>
        $('#summernote').summernote({
            placeholder: 'Hello stand alone ui',
            tabsize: 2,
            height: 200,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });

        $('#summernote2').summernote({
            placeholder: 'Hello stand alone ui',
            tabsize: 2,
            height: 300,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
        $('#summernote3').summernote({
            placeholder: 'Hello stand alone ui',
            tabsize: 2,
            height: 300,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
        $('#summernote4').summernote({
            placeholder: 'Hello stand alone ui',
            tabsize: 2,
            height: 300,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
        $('#summernote5').summernote({
            placeholder: 'Hello stand alone ui',
            tabsize: 2,
            height: 300,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
        $('#summernote6').summernote({
            placeholder: 'Hello stand alone ui',
            tabsize: 2,
            height: 300,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
        $('#summernote7').summernote({
            placeholder: 'Hello stand alone ui',
            tabsize: 2,
            height: 200,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
        $('#summernote8').summernote({
            placeholder: 'Hello stand alone ui',
            tabsize: 2,
            height: 200,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
        $('#summernote9').summernote({
            placeholder: 'Hello stand alone ui',
            tabsize: 2,
            height: 200,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    </script>
@endsection
