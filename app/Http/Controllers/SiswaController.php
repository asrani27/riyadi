<?php

namespace App\Http\Controllers;

use App\Nilai;
use App\Siswa;
use App\Periode;
use App\PKGsiswa;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class SiswaController extends Controller
{
    public function beranda()
    {
        $periode = Periode::get();
        return view('siswa.beranda', compact('periode'));
    }
    public function cetakraport(Request $req)
    {
        $id_periode = $req->periode_id;
        $nis = Siswa::where('nis', $req->nis)->first();
        if ($nis == null) {
            toastr()->error('NIS tidak ada');
            return back();
        }

        $pkg_siswa = PKGsiswa::where('periode_id', $req->periode_id)->where('siswa_id', $nis->id)->first();
        if ($pkg_siswa == null) {
            toastr()->error('Data Nilai Tidak ada');
            return back();
        }
        $pkg = $pkg_siswa->pkg;
        $mapel = $pkg_siswa->pkg->PKGmapel;
        $mapel->map(function ($item) use ($id_periode, $nis) {
            $nilai_siswa = Nilai::where('periode_id', $id_periode)->where('mapel_id', $item->id)->where('siswa_id', $nis->id)->first();
            $item->tugas = $nilai_siswa == null ? 0 : $nilai_siswa->tugas;
            $item->uts = $nilai_siswa == null ? 0 : $nilai_siswa->uts;
            $item->uas = $nilai_siswa == null ? 0 : $nilai_siswa->uas;
            $item->na = $nilai_siswa == null ? 0 : $nilai_siswa->na;
            $item->huruf = $nilai_siswa == null ? 0 : $nilai_siswa->huruf;
            return $item;
        });

        $pdf = PDF::loadView('superadmin.laporan.pdf_raport', compact('mapel', 'nis', 'pkg'))->setPaper('legal');
        return $pdf->stream();
    }
}
