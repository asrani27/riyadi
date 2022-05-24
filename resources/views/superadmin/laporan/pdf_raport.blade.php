<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta content="en-us" http-equiv="Content-Language" />
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>Untitled 1</title>
    {{-- <style type="text/css">
        .auto-style1 {
            font-family: Arial, Helvetica, sans-serif;
            font-size: x-small;
        }
    </style> --}}
    <style>
        @page {
            margin-top: 80px;
            margin-left: 50px;
        }

        header {
            position: fixed;
            top: -60px;
            left: 0px;
            right: 0px;
            height: 0px;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 12px;
            /** Extra personal styles **/
            /* background-color: #03a9f4;
            color: white;
            text-align: center; 
            line-height: 35px;*/
        }

        tr,
        th,
            {
            border: 2px solid #000;
            font-size: 10px;
            font-family: Arial, Helvetica, sans-serif;
        }

        td {
            font-weight: bold;
            border: 2px solid #000;
            font-size: 10px;
        }

        footer {
            position: fixed;
            bottom: -60px;
            left: 0px;
            right: 0px;
            height: 50px;
            font-size: 8px;
            font-family: Arial, Helvetica, sans-serif;
            /** Extra personal styles **/
            /* background-color: #03a9f4;
            color: white;
            text-align: center;
            line-height: 35px; */
        }
    </style>
</head>

<body>
    <header>
        <table border="0" width="100%">
            <tr style="border: 0px;">
                <td style="border: 0px;" width="15%">Nama Sekolah</td>
                <td style="border: 0px;" width="55%">: SMAN 1 SUNGAI PANDAN</td>
                <td style="border: 0px;" width="10%">Kelas</td>
                <td style="border: 0px;">: {{$pkg->kelas->nama}}</td>
            </tr>
            <tr style="border: 0px;">
                <td style="border: 0px;">Alamat</td>
                <td style="border: 0px;">: Jl. Jalan Banyu Tajun Pangkalan,
                    Kabupaten Hulu Sungai Utara</td>
                <td style="border: 0px;">Semester</td>
                <td style="border: 0px;">: {{$pkg->periode->semester == '1'?'Ganjil':'Genap'}} </td>
            </tr>
            <tr style="border: 0px;">
                <td style="border: 0px;">Nama Peserta Didik</td>
                <td style="border: 0px;">: {{$nis->nama}}</td>
                <td style="border: 0px;">Tahun ajaran</td>
                <td style="border: 0px;">: {{$pkg->periode->tahun}}</td>
            </tr>
            <tr style="border: 0px;">
                <td style="border: 0px;">NISN</td>
                <td style="border: 0px;">: {{$nis->nis}}</td>
                <td style="border: 0px;"></td>
                <td style="border: 0px;"></td>
            </tr>
        </table>
        <hr>
        {{-- <p><span class="auto-style1"><strong>LAPORAN DATA SISWA </strong></span></p> --}}
    </header>
    <footer>
        <hr>
        <p>Tanggal Cetak : {{\Carbon\Carbon::now()->format('d-m-Y H:i:s')}}
        </p>
    </footer>
    <br />
    <br />
    <main>
        <table cellpadding="5" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th rowspan=2>No</th>
                    <th rowspan=2>Mata Pelajaran</th>
                    <th colspan="3">Pengetahuan</th>
                </tr>
                <tr>
                    <th>Nilai</th>
                    <th>Predikat</th>
                    <th>Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                @php
                $no = 1;
                @endphp
                @foreach ($mapel as $item)
                <tr>
                    <td style="text-align: center">{{$no++}}</td>
                    <td>{{$item->mapel->nama}}</td>
                    <td style="text-align: center">{{$item->na}}</td>
                    <td style="text-align: center">{{$item->huruf}}</td>
                    <td>{{$item->mapel->deskripsi}}</td>

                </tr>
                @endforeach

            </tbody>
        </table>
        <br />
        <table width="100%" border="0">
            <tr style="border: 0px;">
                <td width="70%" style="border: 0px;"></td>
                <td width="30%" style="border: 0px;">
                    Hulu Sungai Utara, {{\Carbon\Carbon::now()->format('d M Y')}}<br />
                    Wali Kelas,
                    <br />
                    <br />
                    <br />
                    <br />
                    {{$pkg->guru->nama}}<br />
                    NIK.{{$pkg->guru->nik}}


                </td>
            </tr>
        </table>

    </main>
</body>

</html>