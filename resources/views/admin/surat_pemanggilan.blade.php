@extends('layouts.admin')

@section('content')
    <div class="container">
        <form action="{{ route('suratpemanggilan.store') }}" method="post">
            @csrf
            <input type="text" name="diklat_id" value="{{ $diklat->id }}" hidden readonly>
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
                        <input type="text" class="form-control" value="{{ old('date', \Carbon\Carbon::now()->format('d M Y')) }}" name='tanggal'>
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
                    <textarea id="hal" name='hal'>Pemanggilan Peserta Program Upskilling dan Reskilling
                        Guru Kejuruan Berstandar Industri bagi Guru SMK
                        Pusat Keunggulan Tahun 2023
                    </textarea>
                </div>
            </div>
            <div class="row my-3 pt-5">
                <div class="col">
                    <textarea id="summernote2" name='salampembuka'>
                        <p>
                        </p>
                        <p class="MsoNormal" style="text-indent: -0.95pt; line-height: 150%;">
                            <span lang="IN" style="font-size:12.0pt; line-height:150%;mso-ansi-language:IN">
                                Yth.&nbsp; &nbsp;</span><span style="font-size:12.0pt;line-height:150%">1. Kepala Dinas
                                Pendidikan Provinsi
                                Jawa Barat<b>
                                    <o:p></o:p>
                                </b></span>
                        </p>
                        <p class="MsoNormal" style="text-indent: -0.95pt; line-height: 150%;">
                            <span style="font-size:12.0pt; line-height:150%">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                2. Kepala
                                Dinas Pendidikan Provinsi Bengkulu<o:p></o:p>
                            </span>
                        </p>
                        <p>



                        </p>
                        <p class="MsoNormal" style="text-indent: -0.95pt; line-height: 150%;">
                            <span style="font-size:12.0pt; line-height:150%">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                3. Kepala
                                Dinas Pendidikan Provinsi Lampung<o:p></o:p>
                            </span>
                        </p>
                        <p><br></p>
                        <p><br></p>
                        <p>Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi melalui Balai Besar Pengembangan
                            Penjaminan
                            Mutu Pendidikan Vokasi Bidang Mesin dan Teknik Industri (BBPPMPV BMTI), akan menyelenggarakan
                            Program
                            Upskilling dan Reskilling Guru Kejuruan Berstandar Industri bagi Guru SMK Pusat Keunggulan (SMK
                            PK)
                            Tahun 2023.
                            Sehubungan dengan hal tersebut, mohon bantuan Saudara untuk menugaskan nama-nama terlampir
                            menjadi
                            peserta kegiatan dimaksud, dengan penjelasan sebagai berikut:
                        </p>
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

                        <p class="MsoListParagraph"
                            style="margin: 2.05pt 38.25pt 0.0001pt 22px; text-align: justify; text-indent: -18pt; line-height: 115%;">
                            <!--[if !supportLists]--><span
                                style="font-size:12.0pt;line-height:115%;letter-spacing:-.05pt">a.<span
                                    style="font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </span></span><!--[endif]--><span
                                style="font-size:12.0pt;mso-bidi-font-size: 11.0pt;line-height:115%">Guru Program Keahlian
                                dari
                                SMK PK yang ditetapkan pada
                                Tahun 2023 yang berada di wilayah Provinsi Jawa Barat, Lampung, dan Bengkulu.<o:p></o:p>
                            </span>
                        </p>

                        <p class="MsoListParagraph"
                            style="margin: 2.05pt 24.3pt 0.0001pt 22px; text-indent: -18pt; line-height: 115%;">
                            <!--[if !supportLists]--><span
                                style="font-size:12.0pt;line-height:115%;letter-spacing:-.05pt">b.<span
                                    style="font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </span></span><!--[endif]--><span
                                style="font-size:12.0pt;mso-bidi-font-size: 11.0pt;line-height:115%">Usia maksimal 55
                                tahun;
                                <o:p></o:p>
                            </span>
                        </p>

                        <p class="MsoListParagraph"
                            style="margin: 2.05pt 24.3pt 0.0001pt 22px; text-indent: -18pt; line-height: 115%;">
                            <!--[if !supportLists]--><span
                                style="font-size:12.0pt;line-height:115%;letter-spacing:-.05pt">c.<span
                                    style="font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </span></span><!--[endif]--><span
                                style="font-size:12.0pt;mso-bidi-font-size: 11.0pt;line-height:115%">Pendidikan minimal
                                D4/S1;
                                <o:p></o:p>
                            </span>
                        </p>

                        <p class="MsoListParagraph"
                            style="margin: 2.05pt 24.3pt 0.0001pt 22px; text-indent: -18pt; line-height: 115%;">
                            <!--[if !supportLists]--><span
                                style="font-size:12.0pt;line-height:115%;letter-spacing:-.05pt">d.<span
                                    style="font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </span></span><!--[endif]--><span
                                style="font-size:12.0pt;mso-bidi-font-size: 11.0pt;line-height:115%">
                                Belum pernah mengikuti
                                pelatihan sejenis;<o:p></o:p>
                            </span>
                        </p>

                        <p class="MsoListParagraph"
                            style="margin: 2.05pt 24.3pt 0.0001pt 22px; text-indent: -18pt; line-height: 115%;">
                            <!--[if !supportLists]--><span
                                style="font-size:12.0pt;line-height:115%;letter-spacing:-.05pt">e.<span
                                    style="font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </span></span><!--[endif]--><span
                                style="font-size:12.0pt;mso-bidi-font-size: 11.0pt;line-height:115%">
                                Bersedia mengikuti
                                pelatihan sampai dengan tuntas;</span><span
                                style="font-size: 12pt; text-indent: 0cm; background-color: var(--bs-body-bg); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);">&nbsp;</span>
                        </p>

                        <p class="MsoListParagraph"
                            style="margin: 2.05pt 38.25pt 0.0001pt 22px; text-align: justify; text-indent: -18pt; line-height: 115%;">
                            <!--[if !supportLists]--><span
                                style="font-size:12.0pt;line-height:115%;letter-spacing:-.05pt">f.<span
                                    style="font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;</span></span><span
                                style="font-size:12.0pt;mso-bidi-font-size: 11.0pt;line-height:115%">Bersedia melaksanakan
                                Rencana Tindak Lanjut (RTL) dan
                                mengimplementasikan hasil pelatihan di SMK tempat bertugas sesuai
                                perjanjian/penugasan kerja di SMK.<o:p></o:p>
                            </span>
                        </p>

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
                        <p class="MsoListParagraph"
                            style="text-align: left; margin: 2.05pt 38.25pt 0.0001pt 25px; text-indent: -18pt; line-height: 115%;">
                            <!--[if !supportLists]--><span
                                style="font-size:12.0pt;line-height:115%;letter-spacing:-.05pt">a.<span
                                    style="font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </span></span><!--[endif]--><span
                                style="font-size:12.0pt;mso-bidi-font-size:
                        11.0pt;line-height:115%">Peserta
                                wajib mengikuti seluruh rangkaian kegiatan
                                dari mulai pembukaan sampai<span style="letter-spacing:-2.85pt"> </span>dengan<span
                                    style="letter-spacing:-.05pt"> </span>penutupan;&nbsp;<o:p></o:p></span>
                        </p>

                        <p class="MsoListParagraph"
                            style="margin: 2.05pt 38.25pt 0.0001pt 25px; text-align: justify; text-indent: -18pt; line-height: 115%;">
                            <!--[if !supportLists]--><span
                                style="font-size:12.0pt;line-height:115%;letter-spacing:-.05pt">b.<span
                                    style="font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </span></span><!--[endif]--><span
                                style="font-size:12.0pt;mso-bidi-font-size:
                        11.0pt;line-height:115%">Apabila
                                tidak mengikuti kegiatan dengan alasan sakit,
                                harus menginformasikan kepada pengajar/ instruktur atau petugas administrasi kelas;<o:p>
                                </o:p>
                            </span>
                        </p>

                        <p class="MsoListParagraph"
                            style="margin: 2.05pt 38.25pt 0.0001pt 25px; text-align: justify; text-indent: -18pt; line-height: 115%;">
                            <!--[if !supportLists]--><span
                                style="font-size:12.0pt;line-height:115%;letter-spacing:-.05pt">c.<span
                                    style="font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </span></span><!--[endif]--><span
                                style="font-size:12.0pt;mso-bidi-font-size:
                        11.0pt;line-height:115%">Bersedia
                                mengikuti aturan yang diterapkan.<o:p></o:p></span>
                        </p>
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
                        <p class="MsoListParagraph"
                            style="margin-top:2.05pt;line-height:115%;mso-list: l0 level2 lfo1;tab-stops:92.05pt">
                            <!--[if !supportLists]-->
                            <span style="font-size: 12.0pt;line-height:115%;letter-spacing:-.05pt">a.<span
                                    style="font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </span></span><!--[endif]--><span
                                style="font-size:12.0pt;mso-bidi-font-size:11.0pt;line-height:115%">Membawa<span
                                    style="letter-spacing:-.1pt"> </span>laptop;<o:p></o:p></span>
                        </p>

                        <p class="MsoListParagraph"
                            style="line-height:115%;mso-list:l0 level2 lfo1; tab-stops:92.0pt 92.05pt">
                            <!--[if !supportLists]-->
                            <span style="font-size:12.0pt; line-height:115%;letter-spacing:-.05pt">b.<span
                                    style="font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </span></span><!--[endif]--><span
                                style="font-size:12.0pt;mso-bidi-font-size:11.0pt;line-height:115%">Surat<span
                                    style="letter-spacing:-.05pt"> </span>Tugas dari<span style="letter-spacing: -.05pt">
                                </span>Dinas Pendidikan/Kepala<span style="letter-spacing:-.05pt"> </span>Sekolah
                                setempat;<o:p></o:p></span>
                        </p>

                        <p class="MsoListParagraph"
                            style="margin-top:2.0pt;line-height:115%;mso-list: l0 level2 lfo1;tab-stops:92.05pt">
                            <!--[if !supportLists]-->
                            <span style="font-size: 12.0pt;line-height:115%;letter-spacing:-.05pt">c.<span
                                    style="font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </span></span><!--[endif]--><span
                                style="font-size:12.0pt;mso-bidi-font-size:11.0pt;line-height:115%">Pasfoto<span
                                    style="letter-spacing:-.05pt"> </span>berwarna<span style="letter-spacing:-.15pt">
                                </span>ukuran<span style="letter-spacing:.15pt"> </span>3<span
                                    style="letter-spacing:-.05pt">
                                </span>x 4<span style="letter-spacing:-.05pt"> </span>cm
                                sebanyak<span style="letter-spacing:-.05pt"> </span>3<span style="letter-spacing:.1pt">
                                </span>(tigas);<o:p></o:p></span>
                        </p>

                        <p class="MsoListParagraph"
                            style="margin-top:2.2pt;line-height:115%;mso-list: l0 level2 lfo1;tab-stops:92.05pt">
                            <!--[if !supportLists]--><span
                                style="font-size:12.0pt;line-height:115%;letter-spacing:-.05pt">d.<span
                                    style="font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </span></span><!--[endif]--><span
                                style="font-size:12.0pt;mso-bidi-font-size:11.0pt;line-height:115%">Surat<span
                                    style="letter-spacing:-.1pt"> </span>Keterangan<span style="letter-spacing:-.05pt">
                                </span>Sehat<span style="letter-spacing:-.1pt"> </span>dari<span
                                    style="letter-spacing:-.05pt"> </span>Dokter;</span>
                        </p>
                        <p class="MsoListParagraph"
                            style="margin-top:2.2pt;line-height:115%;mso-list: l0 level2 lfo1;tab-stops:92.05pt"><span
                                style="text-align: justify; text-indent: -18pt; background-color: var(--bs-body-bg); font-size: 12pt; font-weight: var(--bs-body-font-weight); line-height: 115%; letter-spacing: -0.05pt;">e.<span
                                    style="font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </span></span><span
                                style="text-align: justify; text-indent: -18pt; background-color: var(--bs-body-bg); font-size: 12pt; font-weight: var(--bs-body-font-weight); line-height: 115%;">Membawa
                                SPPD dari BBPPMPV BMTI (terlampir), yang telah
                                ditandatangani &amp;<span style="letter-spacing:.05pt"> </span>distempel
                                (sesuai tanda √ pada SPPD) oleh pejabat yang berwenang. Nama pejabat<span
                                    style="letter-spacing:.05pt"> </span>dan NIP (bila ada) ditulis dengan pensil
                                atau ditulis pada kertas secara terpisah.Guna<span style="letter-spacing:-2.85pt">
                                </span>keseragaman dan mencegah kesalahan, pengetikan akan dilakukan oleh
                                BBPPMPV<span style="letter-spacing:.05pt"> </span>BMTI;</span></p>
                        <p class="MsoListParagraph"
                            style="margin-top:2.2pt;line-height:115%;mso-list: l0 level2 lfo1;tab-stops:92.05pt"><span
                                style="text-align: justify; text-indent: -18pt; background-color: var(--bs-body-bg); font-size: 12pt; font-weight: var(--bs-body-font-weight); line-height: 115%; letter-spacing: -0.05pt;">f.<span
                                    style="font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </span></span><span
                                style="text-align: justify; text-indent: -18pt; background-color: var(--bs-body-bg); font-size: 12pt; font-weight: var(--bs-body-font-weight); line-height: 115%;">Kartu
                                Askes/BPJS/Asuransi lain (bagi yang memiliki),
                                yang akan digunakan oleh<span style="letter-spacing:.05pt"> </span>peserta
                                untuk pemeriksaan dan/atau pengobatan di Klinik atau Rumah Sakit Umum<span
                                    style="letter-spacing:-2.85pt"> </span>terdekat;</span></p>

                        <p class="MsoListParagraph"
                            style="margin-top:.05pt;line-height:115%;mso-list: l0 level2 lfo1;tab-stops:92.0pt 92.05pt">
                            <!--[if !supportLists]--><span
                                style="font-size:12.0pt;line-height:115%;letter-spacing:-.05pt">g.<span
                                    style="font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </span></span><!--[endif]--><span
                                style="font-size:12.0pt;mso-bidi-font-size: 11.0pt;line-height:115%">Membawa<span
                                    style="letter-spacing:-.1pt"> </span>obat-obatan<span style="letter-spacing:-.05pt">
                                </span>pribadi;<o:p></o:p></span>
                        </p>

                        <p class="MsoListParagraph"
                            style="margin-top:2.05pt;line-height:115%;mso-list: l0 level2 lfo1;tab-stops:92.05pt">
                            <!--[if !supportLists]-->
                            <span style="font-size: 12.0pt;line-height:115%;letter-spacing:-.05pt">h.<span
                                    style="font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </span></span><!--[endif]--><span
                                style="font-size:12.0pt;mso-bidi-font-size:11.0pt;line-height:115%">Membawa<span
                                    style="letter-spacing:-.15pt"> </span>perlengkapan<span style="letter-spacing: .05pt">
                                </span>mandi<span style="letter-spacing:-.05pt"> </span>pribadi;</span>
                        </p>
                        <p class="MsoListParagraph"
                            style="margin-top:2.05pt;line-height:115%;mso-list: l0 level2 lfo1;tab-stops:92.05pt"><span
                                style="text-align: justify; text-indent: -18pt; background-color: var(--bs-body-bg); font-size: 12pt; font-weight: var(--bs-body-font-weight); line-height: 115%; letter-spacing: -0.05pt;">i.<span
                                    style="font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </span></span><span
                                style="text-align: justify; text-indent: -18pt; background-color: var(--bs-body-bg); font-size: 12pt; font-weight: var(--bs-body-font-weight); line-height: 115%;">Membawa
                                baju batik untuk pembukaan/penutupan, baju
                                olahraga, dan sepatu olahraga.</span></p>
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
                        <p class="MsoListParagraph" style="margin: 2.05pt 0cm 0.0001pt 19px; line-height: 115%;">
                            <!--[if !supportLists]--><span
                                style="font-size:12.0pt; line-height:115%;letter-spacing:-.05pt">a.<span
                                    style="font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </span></span><!--[endif]--><span
                                style="font-size:12.0pt;mso-bidi-font-size:11.0pt;line-height:115%">Biaya<span
                                    style="letter-spacing:-.25pt"> </span>Perjalanan:<o:p></o:p></span>
                        </p>

                        <p class="MsoListParagraph"
                            style="margin: 2pt 38.25pt 0.0001pt 93px; text-align: justify; text-indent: -18pt; line-height: 115%;">
                            <!--[if !supportLists]--><span
                                style="font-size:12.0pt;line-height:115%;mso-font-width:97%">-<span
                                    style="font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </span></span><!--[endif]--><span
                                style="font-size:12.0pt;mso-bidi-font-size: 11.0pt;line-height:115%">Biaya<span
                                    style="letter-spacing:1.65pt"> </span>perjalanan<span style="letter-spacing:1.75pt">
                                </span>dan<span style="letter-spacing:1.75pt"> </span>uang<span
                                    style="letter-spacing:1.75pt">
                                </span>saku<span style="letter-spacing:1.7pt"> </span>peserta<span
                                    style="letter-spacing:1.7pt"> </span>akan<span style="letter-spacing:1.75pt">
                                </span>dibayarkan<span style="letter-spacing:1.85pt"> </span>sesuai<span
                                    style="letter-spacing:1.8pt">
                                </span>peraturan<span style="letter-spacing:1.7pt"> </span>dalam<span
                                    style="letter-spacing:-2.85pt">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>DIPA<span
                                    style="letter-spacing:-.05pt"> </span>BBPPMPV<span style="letter-spacing:-.15pt">
                                </span>BMTI<span style="letter-spacing:-.05pt"> </span>Tahun 2023;<o:p></o:p></span>
                        </p>

                        <p class="MsoListParagraph"
                            style="margin: 2pt 38.25pt 0.0001pt 93px; text-align: justify; text-indent: -18pt; line-height: 115%;">
                            <!--[if !supportLists]--><span
                                style="font-size:12.0pt;line-height:115%;mso-font-width:97%">-<span
                                    style="font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </span></span><!--[endif]-->
                            <span style="font-size:12.0pt;mso-bidi-font-size: 11.0pt;line-height:115%">Peserta yang
                                menggunakan
                                transportasi darat dibuktikan
                                dengan karcis/tiket perjalanan (bus, travel, taksi, transportasi online) dan tanda
                                bukti pengeluaran lainnya, lalu diserahkan ke panitia;<o:p></o:p></span>
                        </p>

                        <p class="MsoListParagraph"
                            style="margin: 2pt 38.25pt 0.0001pt 93px; text-align: justify; text-indent: -18pt; line-height: 115%;">
                            <!--[if !supportLists]--><span
                                style="font-size:12.0pt;line-height:115%;mso-font-width:97%">-<span
                                    style="font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </span></span><!--[endif]--><span
                                style="font-size:12.0pt;mso-bidi-font-size: 11.0pt;line-height:115%">Peserta menggunakan
                                pesawat kelas ekonomi, dibuktikan
                                dengan tiket, boarding pass, airport tax dan tanda bukti pengeluaran lainnya,
                                lalu diserahkan ke panitia;<o:p></o:p></span>
                        </p>

                        <p class="MsoListParagraph"
                            style="margin: 2pt 38.25pt 0.0001pt 93px; text-align: justify; text-indent: -18pt; line-height: 115%;">
                            <!--[if !supportLists]--><span
                                style="font-size:12.0pt;line-height:115%;mso-font-width:97%">-<span
                                    style="font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </span></span><!--[endif]--><span
                                style="font-size:12.0pt;mso-bidi-font-size: 11.0pt;line-height:115%">Sesuai Surat Edaran
                                dari
                                Kemendikbud No.
                                75502/A.A2/KU/2017 tertanggal 28 November 2017, khusus pengguna jasa transportasi
                                udara, panitia tidak akan mengganti tiket kepulangan peserta dengan referensi
                                tiket kedatangan;<o:p></o:p></span>
                        </p>

                        <p class="MsoListParagraph"
                            style="margin: 2pt 38.25pt 0.0001pt 93px; text-align: justify; text-indent: -18pt; line-height: 115%;">
                            <!--[if !supportLists]--><span
                                style="font-size:12.0pt;line-height:115%;mso-font-width:97%">-<span
                                    style="font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </span></span><!--[endif]--><span
                                style="font-size:12.0pt;mso-bidi-font-size: 11.0pt;line-height:115%">BBPPMPV BMTI tidak
                                dapat
                                mengganti biaya perjalanan
                                bagi peserta yang tidak menyerahkan karcis, tiket, boarding pass, serta bukti pengeluaran
                                lainnya.<o:p></o:p></span>
                        </p>

                        <p class="MsoListParagraph"
                            style="margin: 2pt 38.25pt 0.0001pt 93px; text-align: justify; text-indent: -18pt; line-height: 115%;">
                            <!--[if !supportLists]--><span
                                style="font-size:12.0pt;line-height:115%;mso-font-width:97%">-<span
                                    style="font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </span></span><!--[endif]--><span
                                style="font-size:12.0pt;mso-bidi-font-size: 11.0pt;line-height:115%">Bukti
                                pertanggungjawaban
                                perjalanan peserta (tiket, boarding
                                pass, dll) harus sesuai dengan nama yang bersangkutan dan dipastikan nama yang
                                bersangkutan telah terdaftar dalam database maskapai penerbangan (karena dalam
                                pemeriksaan, Badan Pemeriksaan Keuangan RI akan melakukan crosscheck bukti
                                perjalanan);<o:p></o:p></span>
                        </p>

                        <p class="MsoListParagraph"
                            style="margin: 2pt 38.25pt 0.0001pt 93px; text-align: justify; text-indent: -18pt; line-height: 115%;">
                            <!--[if !supportLists]--><span
                                style="font-size:12.0pt;line-height:115%;mso-font-width:97%">-<span
                                    style="font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </span></span><!--[endif]--><span
                                style="font-size:12.0pt;mso-bidi-font-size: 11.0pt;line-height:115%">Peserta dihimbau
                                membeli
                                tiket pulang-pergi.<o:p></o:p></span>
                        </p>

                        <p class="MsoListParagraph"
                            style="margin-top:2.0pt;margin-right:38.25pt; margin-bottom:0cm;margin-left:107.6pt;margin-bottom:.0001pt;text-indent:0cm; line-height:115%;tab-stops:107.65pt">
                            <span style="font-size:12.0pt;mso-bidi-font-size: 11.0pt;line-height:115%">&nbsp;</span>
                        </p>

                        <p class="MsoListParagraph"
                            style="margin: 2.05pt 0cm 0.0001pt 19px; text-align: justify; line-height: 115%;">
                            <!--[if !supportLists]--><span
                                style="font-size:12.0pt;line-height:115%;letter-spacing:-.05pt">b.<span
                                    style="font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </span></span><!--[endif]--><span
                                style="font-size:12.0pt;mso-bidi-font-size: 11.0pt;line-height:115%">Akomodasi<span
                                    style="letter-spacing:-.05pt"> </span>dan
                                konsumsi:<o:p></o:p></span>
                        </p>

                        <p class="MsoListParagraph"
                            style="margin: 2pt 38.25pt 0.0001pt 93px; text-align: justify; text-indent: -18pt; line-height: 115%;">
                            <!--[if !supportLists]--><span
                                style="font-size:12.0pt;line-height:115%;mso-font-width:97%">-<span
                                    style="font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </span></span><!--[endif]--><span
                                style="font-size:12.0pt;mso-bidi-font-size: 11.0pt;line-height:115%">Akomodasi dan konsumsi
                                disesuaikan dengan standar
                                pelayanan yang ditetapkan<span style="letter-spacing:.05pt"> </span>BBPPMPV<span
                                    style="letter-spacing:-.05pt"> </span>BMTI.<o:p></o:p></span>
                        </p>
                    </textarea>
                </div>
            </div>

            <div class="row my-3">
                <div class="col">
                    <textarea id="summernote7" name='salampenutup'>
                        <p class="MsoBodyText"
                            style="margin-top: 10.25pt; margin-right: 38.25pt; margin-bottom: 0.0001pt; text-align: justify; text-indent: -0.6pt; line-height: 115%;">
                            Informasi terkait penyelenggaraan diklat dapat
                            dilakukan pada hari kerja (Senin s.d Jum’at),<span style="letter-spacing:.05pt">
                            </span>antara pukul 07.30 s.d. 16.00 WIB melalui <i>contact person</i>: Sdr. Sardin S.
                            (0812-1460-8063) dan<span style="letter-spacing:.05pt"> </span>Sdri.<span
                                style="letter-spacing:-.05pt"> </span>Aryati
                            Kapilani, S.Pd. (085747563326).</p>
                        <p class="MsoBodyText"
                            style="margin-top: 10.25pt; margin-right: 38.25pt; margin-bottom: 0.0001pt; text-align: justify; text-indent: -0.6pt; line-height: 115%;">
                            <br>
                        </p>
                        <p class="MsoBodyText" style="margin-top:.2pt;line-height:115%"><span
                                style="text-align: right; background-color: var(--bs-body-bg); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight);">Atas</span><span
                                style="text-align: right; background-color: var(--bs-body-bg); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); letter-spacing: -0.1pt;">
                            </span><span
                                style="text-align: right; background-color: var(--bs-body-bg); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight);">perhatian</span><span
                                style="text-align: right; background-color: var(--bs-body-bg); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); letter-spacing: -0.05pt;">
                            </span><span
                                style="text-align: right; background-color: var(--bs-body-bg); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight);">dan</span><span
                                style="text-align: right; background-color: var(--bs-body-bg); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); letter-spacing: -0.05pt;">
                            </span><span
                                style="text-align: right; background-color: var(--bs-body-bg); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight);">kerjasama</span><span
                                style="text-align: right; background-color: var(--bs-body-bg); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); letter-spacing: -0.05pt;">
                            </span><span
                                style="text-align: right; background-color: var(--bs-body-bg); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight);">yang</span><span
                                style="text-align: right; background-color: var(--bs-body-bg); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); letter-spacing: -0.05pt;">
                            </span><span
                                style="text-align: right; background-color: var(--bs-body-bg); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight);">baik</span><span
                                style="text-align: right; background-color: var(--bs-body-bg); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); letter-spacing: -0.1pt;">
                            </span><span
                                style="text-align: right; background-color: var(--bs-body-bg); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight);">diucapkan</span><span
                                style="text-align: right; background-color: var(--bs-body-bg); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); letter-spacing: 0.05pt;">
                            </span><span
                                style="text-align: right; background-color: var(--bs-body-bg); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight);">terima</span><span
                                style="text-align: right; background-color: var(--bs-body-bg); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); letter-spacing: -0.1pt;">
                            </span><span
                                style="text-align: right; background-color: var(--bs-body-bg); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight);">kasih.</span>
                        </p>
                        <p class="MsoBodyText" align="right"
                            style="margin-top: 0.05pt; margin-right: 182.05pt; margin-bottom: 0.0001pt; text-align: right; line-height: 115%;">
                            <o:p></o:p>
                        </p>

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
                            <input type="text" class="form-control" value="Supriyono, M.Si." name='tembusan'>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row my-3">
                <div class="col">
                    <div class="row">
                        <div class="col-9">
                            <input type="text" class="form-control" value="Direktur Jenderal Pendidikan Vokasi"
                                name='nama_kepala'>
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
                        <a class="btn btn-secondary" href="{{ route('suratpemanggilanmenu') }}">Kembali</a>
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
        </script>
    </div>
@endsection
