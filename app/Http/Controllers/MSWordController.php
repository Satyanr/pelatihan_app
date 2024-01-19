<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;

class MSWordController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function generateDocx()
    {
        $phpWord = new \PhpOffice\PhpWord\PhpWord();

        $section = $phpWord->addSection();

        $section->addImage(public_path('asset/default/twh.png'));

        $description = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

        $section->addText($description);

        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        try {
            $objWriter->save(storage_path('surat_pemanggilan'). DIRECTORY_SEPARATOR .'surat pemanggilan'. date('Ymd_His') .'.docx');
        } catch (Exception $e) {
        }

        return response()->download(storage_path('surat_pemanggilan'). DIRECTORY_SEPARATOR .'surat pemanggilan'. date('Ymd_His') .'.docx');
    }
}