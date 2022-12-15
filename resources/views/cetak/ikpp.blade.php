<!-- Content Row -->

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div>
    <table border="0" align="center">
        <tr>
            <td style="vertical-align:top" style="text-align: center">
                <b>INSTRUKSI KEPADA PESERTA PENGADAAN (IKPP)</b>
            </td>
        <tr>
    </table>

    <!-- Section A -->
    <br>
    <table border="2">
        <tr>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b>a.</b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="510" style="vertical-align:top; text-transform: uppercase;">
                <b>umum</b>
            </td>
        <tr>
    </table>

    <!-- A1 -->
    <table border="2">
        <tr>
            <td width="30" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b>1.</b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="100" style="vertical-align:top;">
                <b>Lingkup Pekerjaan</b>
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                1.1
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="325" style="vertical-align:top; text-align:justify">
                Pejabat Pengadaan mengundang peserta yang dianggap mampu untuk menyampaikan penawaran atas pengadaan {{$pengadaan->pengadaan->jenis_pengadaan}}
            </td>
        <tr>
        <tr>
            <td width="30" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="100" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                1.2
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="325" style="vertical-align:top; text-align:justify">
                Lingkup pekerjaan PPK melalui Pejabat Pengadaan mengundang Penyedia Barang untuk menyampaikan penawaran atas paket pengadaan barang yang tercantum dalam Spesifikasi Teknis, Daftar Kuantitas dan Harga serta nomor pekerjaan yang tercantum dalam LDP. Penyedia Barang yang ditunjuk berkewajiban untuk menyelesaikan pekerjaan dalam jangka waktu dan perkiraan batas akhir waktu penyelesaian yang tercantum dalam LDP.
            </td>
        <tr>
        <tr>
            <td width="30" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="100" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                1.3
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="325" style="vertical-align:top; text-align:justify">
                Penyedia yang ditunjuk berkewajiban untuk menyelesaikan pekerjaan dalam jangka waktu yang ditentukan, berdasarkan Standar Ketentuan dan Syarat Umum dengan mutu sesuai spesifikasi teknis dan harga sesuai Surat Perintah Kerja.
            </td>
        <tr>
    </table>

    <!-- A2 -->
    <table border="2">
        <tr>
            <td width="30" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b>2.</b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="100" style="vertical-align:top; text-align:justify">
                <b>Sumber Dana</b>
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="359" style="vertical-align:top; text-align:justify">
                Pejabat Pengadaan mengundang peserta yang dianggap mampu untuk menyampaikan penawaran atas pengadaan {{$pengadaan->pengadaan->jenis_pengadaan}}
            </td>
        <tr>
    </table>

    <!-- A3 -->
    <table border="2">
        <tr>
            <td width="30" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b>3.</b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="100" style="vertical-align:top;">
                <b>Peserta Pengadaan</b>
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                3.1
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="325" style="vertical-align:top; text-align:justify">
                Pengadaan Barang / Jasa ini diikuti oleh Penyedia Barang/Jasa yang telah diundang dan telah dinilai mampu untuk melaksanakan pekerjaan.
            </td>
        <tr>
    </table>

    <!-- A4 -->
    <table border="2">
        <tr>
            <td width="30" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b>4.</b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="100" style="vertical-align:top;">
                <b>Larangan Korupsi, Kolusi, dan Nepotisme (KKN) serta Penipuan</b>
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                4.1
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="325" style="vertical-align:top; text-align:justify">
                Peserta dan pihak yang terkait dengan pengadaan ini berkewajiban untuk mematuhi etika pengadaan dengan tidak melakukan tindakan sebagai berikut :
            </td>
        <tr>
    </table>
    <table border="2">
        <tr>
            <td width="212" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                (a)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="293" style="vertical-align:top; text-align:justify">
                Berusaha mempengaruhi anggota Panitia Pengadaan/Pejabat Pengadaan Dinas Komunikasi dan Informatika Provinsi Jawa Timur dalam bentuk dan cara apapun, untuk memenuhi keinginan peserta yang bertentangan dengan Dokumen Pengadaan dan /atau peraturan perundang-undangan ;
            </td>
        <tr>
        <tr>
            <td width="212" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                (b)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="293" style="vertical-align:top; text-align:justify">
                Membuat dan/atau menyampaikan dokumen dan/atau keterangan lain yang tidak benar untuk memenuhi persyaratan dalam Dokumen Pengadaan, termasuk di antaranya Non-Usaha Kecil yang menyalah gunakan kesempatan dan/atau kemudahan yang diperuntukkan bagi Usaha Kecil termasuk Koperasi Kecil.
            </td>
        <tr>

    </table>
    <table border="2">
        <tr>
            <td width="30" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="100" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                4.2
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="325" style="vertical-align:top; text-align:justify">
                Peserta yang menurut penilaian Panitia Pengadaan/ Pejabat Pengadaan terbukti melakukan tindakan sebagaimana dimaksud dalam angka 4.1 dikenakan sanksi sebagai berikut :
            </td>
        <tr>

    </table>
    <table border="2">
        <tr>
            <td width="212" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                (a)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="293" style="vertical-align:top; text-align:justify">
                Sanksi administratif, seperti digugurkan dari proses pengadaan langsung atau pembatalan penetapan penyedia barang/jasa;
            </td>
        <tr>
        <tr>
            <td width="212" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                (b)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="293" style="vertical-align:top; text-align:justify">
                Sanksi pencatuman dalam Daftar Hitam;
            </td>
        <tr>
        <tr>
            <td width="212" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                (c)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="293" style="vertical-align:top; text-align:justify">
                Gugatan secara perdata; dan/atau
            </td>
        <tr>
        <tr>
            <td width="212" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                (d)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="293" style="vertical-align:top; text-align:justify">
                Pelaporan secara pidana kepada pihak berwenang.
            </td>
        <tr>

    </table>
    <table border="2">
        <tr>
            <td width="30" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="100" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                4.3
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="325" style="vertical-align:top; text-align:justify">
                Pengenalan sanksi dilaporkan oleh Panitia Pengadaan/Pejabat Pengadaan Dinas Komunikasi dan Informatika Provinsi Jawa Timur.
            </td>
        <tr>

    </table>

    <!-- A5 -->
    <table border="2">
        <tr>
            <td width="30" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b>5.</b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="100" style="vertical-align:top;">
                <b>Larangan Pertentangan Kepentingan</b>
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                5.1
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="325" style="vertical-align:top; text-align:justify">
                Para pihak dalam melaksanakan tugas, fungsi dan perannya dilarang memiliki/melakukan peran ganda atau terafiliasi.
            </td>
        <tr>
        <tr>
            <td width="30" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="100" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                5.2
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="325" style="vertical-align:top; text-align:justify">
                Peran ganda sebagaimana dimaksud pada angka 5.1 antara lain meliputi :
            </td>
        <tr>
        <tr>
            <td width="30" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="100" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">

            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="325" style="vertical-align:top; text-align:justify">
                Pengurus koperasi pegawai dalam suatu K/L/D/I atau anak perusahaan pada BUMN/BUMD yang mengikuti pengadaan dan bersaing dengan lainnya merangkap sebagai anggota Panitia Pengadaan/Pejabat Pengadaan Dinas Komunikasi dan Informatika Provinsi Jawa Timur.
            </td>
        <tr>
        <tr>
            <td width="30" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="100" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                5.3
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="325" style="vertical-align:top; text-align:justify">
                Keterkaitan hubungan, baik antar peserta maupun antara peserta dengan PPK dan/atau anggota Panitia Pengadaan/Pejabat Pengadaan Dinas Komunikasi dan Informatika Provinsi Jawa Timur yang antara lain meliputi :
            </td>
        <tr>
    </table>
    <table border="2">
        <tr>
            <td width="212" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                (a)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="293" style="vertical-align:top; text-align:justify">
                Hubungan keluarga karena perkawinan dan keturunan sampai dengan derjat kedua, baik secara horizontal maupun vertical;
            </td>
        <tr>
        <tr>
            <td width="212" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                (b)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="293" style="vertical-align:top; text-align:justify">
                PPK dan/atau anggota, baik langsung maupun tidak langsung mengendalikan atau menjalankan perusahaan peserta;
            </td>
        <tr>

    </table>
    <table border="2">
        <tr>
            <td width="30" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="100" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                5.4
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="325" style="vertical-align:top; text-align:justify">
                Pegawai K/L/D/I dilarang menjadi peserta kecuali dari luar tanggungan K/L/D/I.
            </td>
        <tr>
    </table>

    <!-- Section B -->
    <br><br>
    <table border="2">
        <tr>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b>b.</b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="510" style="vertical-align:top; text-transform: uppercase;">
                <b>DOKUMEN PENGADAAN</b>
            </td>
        <tr>
    </table>

    <!-- B1 -->
    <table border="2">
        <tr>
            <td width="30" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b>1.</b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="100" style="vertical-align:top;">
                <b>Pembukaan Penawaran</b>
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                1.1
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="325" style="vertical-align:top; text-align:justify">
                Dokumen Penawaran meliputi :
            </td>
        <tr>
    </table>
    <table border="2">
        <tr>
            <td width="212" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                (a)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="293" style="vertical-align:top; text-align:justify">
                Surat penawaran yang didalamnya mencantumkan :
            </td>
        <tr>
    </table>
    <table border="2">
        <tr>
            <td width="245" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                1)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="261" style="vertical-align:top; text-align:justify">
                Tanggal ;
            </td>
        <tr>
    </table>



    @php
    use App\Models\Jadwal;
    use App\Models\pejabat;

    $png = $pengadaan->pengadaan_id;

    $KuitansiKontrak = Jadwal::where('jadwals.pengadaan_id', 'like', "%" . $png . "%")
    ->where('jadwals.kegiatan', '=', 'Kuitansi Kontrak')
    ->get();
    $pejabat = Pejabat::all();
    @endphp





    @foreach ($pejabat as $pjb)

    @endforeach




</div>