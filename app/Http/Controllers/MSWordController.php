<?php

namespace App\Http\Controllers;

use App\Models\SuratPemanggilan;
use Exception;
use PhpOffice\PhpWord\Element\Section;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\Shared\Html;
use Illuminate\Http\Request;

class MSWordController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function generateDocx($id)
    {
        $surat_pemanggilan = SuratPemanggilan::find($id);
        $salampembuka = str_replace('<br>', '<br></br>', str_replace(['&amp;', '&'], htmlspecialchars('&amp;'), $surat_pemanggilan->salampembuka));
        $persyaratan = str_replace('<br>', '<br></br>', str_replace(['&amp;', '&'], htmlspecialchars('&amp;'), $surat_pemanggilan->persyaratan));
        $kehadiranpeserta = str_replace('<br>', '<br></br>', str_replace(['&amp;', '&'], htmlspecialchars('&amp;'), $surat_pemanggilan->kehadiranpeserta));
        $kelengkapan = str_replace('<br>', '<br></br>', str_replace(['&amp;', '&'], htmlspecialchars('&amp;'), $surat_pemanggilan->kelengkapan));
        $pembiayaan = str_replace('<br>', '<br></br>', str_replace(['&amp;', '&'], htmlspecialchars('&amp;'), $surat_pemanggilan->pembiayaan));
        $nomor_surat = str_replace('<br>', '<br></br>', str_replace(['&amp;', '&'], htmlspecialchars('&amp;'), $surat_pemanggilan->nomor_surat));
        $lampiran = str_replace('<br>', '<br></br>', str_replace(['&amp;', '&'], htmlspecialchars('&amp;'), $surat_pemanggilan->lampiran));
        $hal = str_replace('<br>', '<br></br>', str_replace(['&amp;', '&'], htmlspecialchars('&amp;'), $surat_pemanggilan->hal));
        $periode = str_replace('<br>', '<br></br>', str_replace(['&amp;', '&'], htmlspecialchars('&amp;'), $surat_pemanggilan->periode));
        $tempatpelatihan = str_replace('<br>', '<br></br>', str_replace(['&amp;', '&'], htmlspecialchars('&amp;'), $surat_pemanggilan->tempatpelatihan));
        $checkdanreg = str_replace('<br>', '<br></br>', str_replace(['&amp;', '&'], htmlspecialchars('&amp;'), $surat_pemanggilan->checkdanreg));
        $pembukaan = str_replace('<br>', '<br></br>', str_replace(['&amp;', '&'], htmlspecialchars('&amp;'), $surat_pemanggilan->pembukaan));
        $penutupan = str_replace('<br>', '<br></br>', str_replace(['&amp;', '&'], htmlspecialchars('&amp;'), $surat_pemanggilan->penutupan));
        $checkout = str_replace('<br>', '<br></br>', str_replace(['&amp;', '&'], htmlspecialchars('&amp;'), $surat_pemanggilan->checkout));
        $salampenutup = str_replace('<br>', '<br></br>', str_replace(['&amp;', '&'], htmlspecialchars('&amp;'), $surat_pemanggilan->salampenutup));
        $tanggal = str_replace('<br>', '<br></br>', str_replace(['&amp;', '&'], htmlspecialchars('&amp;'), $surat_pemanggilan->tanggal));
        $nama_kepala = str_replace('<br>', '<br></br>', str_replace(['&amp;', '&'], htmlspecialchars('&amp;'), $surat_pemanggilan->nama_kepala));
        $nip = str_replace('<br>', '<br></br>', str_replace(['&amp;', '&'], htmlspecialchars('&amp;'), $surat_pemanggilan->nip));
        $tembusan = str_replace('<br>', '<br></br>', str_replace(['&amp;', '&'], htmlspecialchars('&amp;'), $surat_pemanggilan->tembusan));

        $phpWord = new PhpWord();
        $phpWord->addTitleStyle(0, ['name' => 'Times New Roman', 'size' => 16], ['align' => 'center', 'indentation' => ['left' => 2510, 'right' => 634], 'spaceAfter' => 0]);
        // margin in cm for multiple with twips
        $topMarginCm = 1.9;
        $bottomMarginCm = 1.48;
        $leftMarginCm = 1.09;
        $rightMarginCm = 1.06;

        $section = $phpWord->addSection(['marginLeft' => $leftMarginCm * 567, 'marginRight' => $rightMarginCm * 567, 'marginTop' => $topMarginCm * 567, $bottomMarginCm * 567]);
        $section->addImage(public_path('asset/default/twh.png'), [
            'positioning' => 'relative',
            'wrappingStyle' => 'infront',
            'marginLeft' => 1,
            'width' => 83,
            'height' => 81,
        ]);

        $section->addTitle('KEMENTERIAN PENDIDIKAN, KEBUDAYAAN, RISET, DAN TEKNOLOGI', 0);
        $section->addText('BALAI BESAR PENGEMBANGAN PENJAMINAN MUTU PENDIDIKAN VOKASI BIDANG MESIN DAN TEKNIK INDUSTRI', ['name' => 'Times New Roman', 'size' => 14, 'bold' => true], ['align' => 'center', 'indentation' => ['left' => 5.5 * 566.92913385827, 'right' => 1661], 'spaceAfter' => 0]);
        $section->addText('Jalan Pasantren Km 2, Cimahi 40513 Telepon (022) 6652326; Faksimile (022) 6654698, 6650540 Laman : bbppmpvbmti.kemdikbud.go.id ~ Posel : bbppmpv.bmti@kemdikbud.go.id', ['name' => 'Times New Roman', 'size' => 10.5], ['align' => 'center', 'indentation' => ['left' => 3.5 * 566.92913385827, 'right' => 210], 'spaceAfter' => 0]);

        $section->addText('', [], ['borderBottomSize' => 16]);

        $html = '<html><body style="font-family: Times New Roman; font-size: 12pt;">';
        $html .= '<table>';
        $html .= '<tr><td style="width: 150px;">Nomor</td><td>:</td><td> ' . str_replace(['<o:p>', '</o:p>', '<!--[if !supportLists]-->', '<!--[endif]-->'], '', $nomor_surat) . '</td><td style="width:250px;">' . str_replace(['<o:p>', '</o:p>', '<!--[if !supportLists]-->', '<!--[endif]-->'], '', $tanggal) . '</td></tr>';
        $html .= '<tr><td style="width: 150px;">Lampiran</td><td>:</td><td> ' . str_replace(['<o:p>', '</o:p>', '<!--[if !supportLists]-->', '<!--[endif]-->'], '', $lampiran) . '</td></tr>';
        $html .= '<tr><td style="width: 150px;">Hal</td><td>:</td><td> ' . str_replace(['<o:p>', '</o:p>', '<!--[if !supportLists]-->', '<!--[endif]-->'], '', $hal) . '</td></tr>';
        $html .= '</table>';
        $html .= str_replace(['<o:p>', '</o:p>', '<!--[if !supportLists]-->', '<!--[endif]-->'], '', $salampembuka);
        $html .= '<ol><li style="text-indent: -0.95pt; line-height: 150%;">Pelaksanaan Kegiatan</li>';
        $html .= '<table><tr><td style="width: 55px;"></td><td><table>';
        $html .= '<tr><td>Periode</td><td>:</td><td> ' . str_replace(['<o:p>', '</o:p>', '<!--[if !supportLists]-->', '<!--[endif]-->'], '', $periode) . '</td></tr>';
        $html .= '<tr><td>Tempat Pelatihan</td><td>:</td><td> ' . str_replace(['<o:p>', '</o:p>', '<!--[if !supportLists]-->', '<!--[endif]-->'], '', $tempatpelatihan) . '</td></tr>';
        $html .= '<tr><td><i>Check in</i> dan Registrasi</td><td>:</td><td> ' . str_replace(['<o:p>', '</o:p>', '<!--[if !supportLists]-->', '<!--[endif]-->'], '', $checkdanreg) . '</td></tr>';
        $html .= '<tr><td>Pembukaan</td><td>:</td><td> ' . str_replace(['<o:p>', '</o:p>', '<!--[if !supportLists]-->', '<!--[endif]-->'], '', $pembukaan) . '</td></tr>';
        $html .= '<tr><td>Penutupan</td><td>:</td><td> ' . str_replace(['<o:p>', '</o:p>', '<!--[if !supportLists]-->', '<!--[endif]-->'], '', $penutupan) . '</td></tr>';
        $html .= '<tr><td><i>Check out</i></td><td>:</td><td> ' . str_replace(['<o:p>', '</o:p>', '<!--[if !supportLists]-->', '<!--[endif]-->'], '', $checkout) . '</td></tr>';
        $html .= '</table></td></tr></table>';
        $html .= '<li style="text-indent: -0.95pt; line-height: 150%;">Persyaratan Peserta</li>';
        $html .= '<table><tr><td style="width: 80px;"></td><td>' . str_replace(['<o:p>', '</o:p>', '<!--[if !supportLists]-->', '<!--[endif]-->'], '', $persyaratan) . '</td></tr></table>';
        $html .= '<li style="text-indent: -0.95pt; line-height: 150%;">Kehadiran Peserta</li>';
        $html .= '<table><tr><td style="width: 70px;"></td><td>' . str_replace(['<o:p>', '</o:p>', '<!--[if !supportLists]-->', '<!--[endif]-->'], '', $kehadiranpeserta) . '</td></tr></table>';
        $html .= '<li style="text-indent: -0.95pt; line-height: 150%;">Kelengkapan yang harus dibawa Peserta dan </li>';
        $html .= '<table><tr><td style="width: 150px;"></td><td>' . str_replace(['<o:p>', '</o:p>', '<!--[if !supportLists]-->', '<!--[endif]-->'], '', $kelengkapan) . '</td></tr></table>';
        $html .= '<li style="text-indent: -0.95pt; line-height: 150%;">Pembiayaan</li></ol>';
        $html .= '<table><tr><td style="width: 150px;"></td><td>' . str_replace(['<o:p>', '</o:p>', '<!--[if !supportLists]-->', '<!--[endif]-->'], '', $pembiayaan) . '</td></tr></table>';
        $html .= '<br></br>' . str_replace(['<o:p>', '</o:p>', '<!--[if !supportLists]-->', '<!--[endif]-->'], '', $salampenutup);
        $html .= '<br></br> <table>';
        $html .= '<tr style="height: 150px;"><td style="width: 250px;"></td><td style="width: 250px;"></td><td style="width: 250px;">Plt. Kepala.</td></tr>';
        $html .= '<tr><td style="width: 250px;">Tembusan:</td><td style="width: 250px;"></td><td style="width: 250px;">' . $nama_kepala . '</td></tr>';
        $html .= '<tr><td style="width: 350px;">' . $tembusan . '</td><td style="width: 150px;"></td><td style="width: 250px;">' . $nip . '</td></tr>';
        $html .= '</table>';
        $html .= '</body></html>';

        $html .= '<style>';
        $html .= 'table { border-collapse: collapse;}';
        $html .= 'table td { padding: 5px; border: 1px solid #000;}';
        $html .= '</style>';

        Html::addHtml($section, $html, false, false);

        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        try {
            $filePath = storage_path('surat_pemanggilan') . DIRECTORY_SEPARATOR . 'surat_pemanggilan' . date('Ymd_His') . '.docx';
            $objWriter->save($filePath);
        } catch (Exception $e) {
        }

        return response()->download($filePath);
    }
}
