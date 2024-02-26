@extends('layouts.admin')

@section('content')
    <div class="container">
        <form action="{{ route('suratpemanggilan.store') }}" method="post">
            @csrf
            <input type="text" name='diklat_id' value="{{ $diklat->id }}" readonly hidden>
            <div class="row my-3">
                <div class="col-lg-1">
                    Nomor
                </div>
                <div class="col-md-auto">
                    :
                </div>
                <div class="col-lg-3">
                    <input type="text" class="form-control" value="3470/D7.5/KP.04.00/20232" name='nomor_surat'>
                </div>
                <div class="col-lg-6 d-flex justify-content-end">
                    <div class="col-lg-3">
                        <input type="text" class="form-control"
                            value="{{ old('date', \Carbon\Carbon::now()->format('d M Y')) }}" name='tanggal'>
                    </div>
                </div>
            </div>
            <div class="row my-3">
                <div class="col-lg-1">
                    Lampiran
                </div>
                <div class="col-md-auto">
                    :
                </div>
                <div class="col-lg-3">
                    <input type="text" class="form-control" value="Satu Set" name='lampiran'>
                </div>
            </div>
            <div class="row my-3">
                <div class="col-lg-1">
                    Hal
                </div>
                <div class="col-md-auto">
                    :
                </div>
                <div class="col-6">
                    <textarea id="hal" name='hal'>Pemanggilan Peserta Program Upskilling dan Reskilling Guru Kejuruan Berstandar Industri bagi Guru SMK Pusat Keunggulan Tahun 2023
                    </textarea>
                </div>
            </div>
            <div class="row my-3 pt-5">
                <div class="col">
                    <textarea id="summernote2" name='salampembuka'>
                        <p>
                        </p>
                        <div style="text-indent: -1.26667px;">Yth.</div><ol><li style="text-indent: -0.95pt; line-height: 150%;">Kepala Dinas Pendidikan Provinsi Jawa Barat</li><li style="text-indent: -0.95pt; line-height: 150%;"><span style="text-indent: -1.26667px;">Kepala Dinas Pendidikan Provinsi Bengkulu</span><br></li><li style="text-indent: -0.95pt; line-height: 150%;"><span style="text-indent: -1.26667px;">Kepala Dinas Pendidikan Provinsi Lampung</span><br></li></ol>
                        <p><br></p>
                        <p>Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi melalui Balai Besar Pengembangan Penjaminan Mutu Pendidikan Vokasi Bidang Mesin dan Teknik Industri (BBPPMPV BMTI), akan menyelenggarakan Program Upskilling dan Reskilling Guru Kejuruan Berstandar Industri bagi Guru SMK Pusat Keunggulan (SMK PK) Tahun 2023. Sehubungan dengan hal tersebut, mohon bantuan Saudara untuk menugaskan nama-nama terlampir menjadi peserta kegiatan dimaksud, dengan penjelasan sebagai berikut:</p>
                    </textarea>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <span>1. Pelaksanaan kegiatan</span>
                </div>
            </div>
            <div class="row my-3">
                <div class="col">
                    <div class="row my-2">
                        <div class="col-lg-2">periode</div>
                        <div class="col-md-auto">:</div>
                        <div class="col">
                            <input type="text" class="form-control" value="9 s.d. 22 Juli 2023" name='periode'>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-lg-2">tempat pelatihan</div>
                        <div class="col-md-auto">:</div>
                        <div class="col">
                            <textarea class="form-control" aria-label="With textarea" name='tempatpelatihan'>BBMPV BMTI
Jalan Pasantren, Km. 2, Cibabat, Cimahi Utara 40513</textarea>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-lg-2"><i>Check in</i> dan Registrasi</div>
                        <div class="col-md-auto">:</div>
                        <div class="col">
                            <input type="text" class="form-control" value="Minggu, 9 Juli 2023, mulai pukul 14.00 WIB"
                                name='checkdanreg'>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-lg-2">pembukaan</div>
                        <div class="col-md-auto">:</div>
                        <div class="col">
                            <input type="text" class="form-control" value="Senin, 10 Juli 2023, pukul 08.30 WIB"
                                name='pembukaan'>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-lg-2">penutupan</div>
                        <div class="col-md-auto">:</div>
                        <div class="col">
                            <input type="text" class="form-control" value="Jumat, 21 Juli 2023, pukul 16.30 WIB"
                                name='penutupan'>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-lg-2"><i>Check out</i></div>
                        <div class="col-md-auto">:</div>
                        <div class="col">
                            <input type="text" class="form-control"
                                value="Sabtu, 22 Juli 2023 selambat-lambatnya pukul 12.00 WIB" name='checkout'>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <span>2. Persyaratan Peserta</span>
                </div>
            </div>
            <div class="row my-3">
                <div class="col">
                    <textarea id="summernote3" name='persyaratan'>
                        <p>a. Guru Program Keahlian dari SMK PK yang ditetapkan pada Tahun 2023 yang berada di wilayah Provinsi Jawabarat, Lampung, dan Bengkulu.</p><p>b. Usia maksimal 55 tahun.</p><p>c. Pendidikan minimal D4/S1.</p><p>d. Belum pernah mengikuti pelatihan sejenis.</p><p>e. Bersedia mengikuti pelatihan sampai dengan tuntas.</p><p>f. Bersedia melaksanakan Rencana Tindak Lanjut (RTL) dan mengimplementasikan hasil pelatihan di SMK tempat bertugas sesuai perjanjian/penugasan kerja di SMK.</p>
                    </textarea>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <span>3. Kehadiran Peserta</span>
                </div>
            </div>
            <div class="row my-3">
                <div class="col">
                    <textarea id="summernote4" name='kehadiranpeserta'>
                        <p><span style="letter-spacing: -0.0666667px;">a. Peserta wajib mengikuti seluruh rangkaian kegiatan dari mulai pembukaan sampai dengan penutupan.</span></p><p><span style="letter-spacing: -0.0666667px;">b. Apabila tidak mengikuti kegiatan dengan alasan sakit, harus menginformasikan kepada pengajar/instruktur atau petugas administrasi kelas.</span></p><p><span style="letter-spacing: -0.0666667px;">c Bersedia mengikuti aturan yang diterapkan.</span></p>
                    </textarea>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <span>4. Kelengkapan yang harus dibawa Peserta</span>
                </div>
            </div>
            <div class="row my-3">
                <div class="col">
                    <textarea id="summernote5" name='kelengkapan'>
                        <p>a. Membawa laptop.</p><p>b. Surat Tugas dari Dinas Pendidikan/Kepala Sekolah setempat.</p><p>c. Pasfoto bewarna ukuran 3x4cm sebanyak 3 (tiga).</p><p>d. Surat Keterangan Sehat dari Dokter.</p><p>e. Membawa SPPD dari BBPPMPV BMTI (terlampir), yang telah ditandatangani &amp; distempel (sesuai tanda √ pada SPPD) oleh pejabat yang berwenang. Nama pejabat dan NIP (bila ada) ditulis dengan pensil atau ditulis pada kertas secara terpisah. Guna keseragaman dan mencegah kesalahan, pengetikan akan dilakukan oleh BBPPMPV BMTI.</p><p>f. Kartu Askes/BPJS/Asuransi lain (bagi yang memiliki), yang akan digunakan oleh peserta untuk pemeriksaan dan/atau pengobatan di Klinik atau Rumah Sakit Umum terdekat.</p><p>g. Membawa obat-obatan pribadi.</p><p>h. Membawa perlengkapan mandi pribadi.</p><p>i. Membawa baju batik untuk pembukaan/penutupan, baju olahraga, dan sepatu olahraga.</p>
                    </textarea>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <span>5. Pembiayaan</span>
                </div>
            </div>
            <div class="row my-3">
                <div class="col">
                    <textarea id="summernote6" name='pembiayaan'>
                        <p>a. Biaya Perjalanan:</p><p style="margin-left: 25px;">-&nbsp;Biaya perjalanan dan uang saku peserta akan dibayarkan sesuai peraturan dalam&nbsp;DIPA BBPPMPV BMTI Tahun 2023.</p><p style="margin-left: 25px;">- Peserta yang menggunakan transportasi darat dibuktikan dengan karcis/tiket perjalanan (bus, travel, taksi, transportasi online) dan tanda bukti pengeluaran lainnya, lalu diserahkan ke panitia.</p><p style="margin-left: 25px;">- Peserta menggunakan pesawat kelas ekonomi, dibuktikan dengan tiket, boarding pass, airport tax dan tanda bukti pengeluaran lainnya, lalu diserahkan ke panitia.</p><p style="margin-left: 25px;">-&nbsp;Sesuai Surat Edaran dari Kemendikbud No. 75502/A.A2/KU/2017 tertanggal 28 November 2017, khusus pengguna jasa transportasi udara, panitia tidak akan mengganti tiket kepulangan peserta dengan referensi tiket kedatangan.</p><p style="margin-left: 25px;">-&nbsp;<span style="text-align: var(--bs-body-text-align);">BBPPMPV BMTI tidak dapat mengganti biaya perjalanan bagi peserta yang tidak menyerahkan karcis, tiket, boarding pass, serta bukti pengeluaran lainnya.</span></p><p style="margin-left: 25px;"><span style="text-align: var(--bs-body-text-align);">-&nbsp;</span><span style="text-align: var(--bs-body-text-align);">Bukti pertanggungjawaban perjalanan peserta (tiket, boarding pass, dll) harus sesuai dengan nama yang bersangkutan dan dipastikan nama yang bersangkutan telah terdaftar dalam database maskapai penerbangan (karena dalam pemeriksaan, Badan Pemeriksaan Keuangan RI akan melakukan crosscheck bukti perjalanan).</span></p><p style="margin-left: 25px;"><span style="text-align: var(--bs-body-text-align);">-&nbsp;</span><span style="text-align: var(--bs-body-text-align);">Peserta dihimbau membeli tiket pulang-pergi.</span></p><p style="">b.&nbsp;Akomodasi dan konsumsi:</p><p style="margin-left: 25px;">-&nbsp;Akomodasi dan konsumsi disesuaikan dengan standar pelayanan yang ditetapkan BBPPMPV BMTI.</p>
                    </textarea>
                </div>
            </div>

            <div class="row my-3">
                <div class="col">
                    <textarea id="summernote7" name='salampenutup'>
                        <p>Informasi terkait penyelenggaraan diklat dapat dilakukan pada hari kerja (Senin s.d Jum’at), antara pukul 07.30 s.d. 16.00 WIB melalui contact person: Sdr. Sardin S. (0812-1460-8063) dan Sdri. Aryati Kapilani, S.Pd. (085747563326).</p><p>Atas perhatian dan kerjasama yang baik diucapkan terima kasih.<br></p>
                    </textarea>
                </div>
            </div>

            <div class="row mb-5 pb-5">
                <div class="col"></div>
                <div class="col">Plt.Kepala</div>
            </div>
            <div class="row mt-5 pt-4">
                <div class="col">
                    Tembusan :
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col-6">
                            <input type="text" class="form-control" value="Supriyono, M.Si." name='nama_kepala'>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row my-3">
                <div class="col">
                    <div class="row">
                        <div class="col-9">
                            <input type="text" class="form-control" value="Direktur Jenderal Pendidikan Vokasi"
                                name='tembusan'>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col-auto">NIP</div>
                        <div class="col-6">
                            <input type="text" class="form-control" value="196308051985031005" name='nip'>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row my-3 mt-5">
                <div class="col">
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-primary" type="submit">Simpan</button>
                        <a class="btn btn-secondary" href="{{ route('suratpemanggilanmenu', $diklat->id) }}">Kembali</a>
                    </div>
                </div>
            </div>
        </form>

        <script>
            $('#hal').summernote({
                placeholder: 'Hello stand alone ui',
                tabsize: 2,
                height: 60,
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
                ['style', ['style']],
                toolbar: [
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
        </script>
    </div>
@endsection
