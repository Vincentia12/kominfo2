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
        <tr>
            <td width="245" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                2)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="261" style="vertical-align:top; text-align:justify">
                Masa berlaku penawaran;
            </td>
        </tr>
        <tr>
            <td width="245" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                3)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="261" style="vertical-align:top; text-align:justify">
                Harga penawaran;
            </td>

        </tr>
        <tr>
            <td width="245" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                4)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="261" style="vertical-align:top; text-align:justify">
                Jangka waktu pelaksanaan pekerjaan; dan
            </td>

        </tr>
        <tr>
            <td width="245" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                5)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="261" style="vertical-align:top; text-align:justify">
                Tanda tangan:
            </td>
        </tr>
    </table>
    <table border="2">
        <tr>
            <td width="275" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                (a)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="230" style="vertical-align:top; text-align:justify">
                Direktur utama / pimpinan perusahaan;
            </td>
        <tr>
        <tr>
            <td width="275" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                (b)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="230" style="vertical-align:top; text-align:justify">
                Penerima kuasa dari direktur utama/pimpinan perusahaan yang penerima kuasanya tercantum dalam akte pendirian atau perubahannya;
            </td>
        <tr>
        <tr>
            <td width="275" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                (c)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="230" style="vertical-align:top; text-align:justify">
                Kepala cabang perusahaan yang diangkat oleh kantor pusat yang dibuktikan dengan dokumen otentik;
            </td>
        <tr>
        <tr>
            <td width="275" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                (d)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="230" style="vertical-align:top; text-align:justify">
                Pejabat yang menurut perjanjian kerjasama bentuk mewakili perusahaan yang bekerjasama; atau
            </td>
        <tr>
        <tr>
            <td width="275" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                (e)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="230" style="vertical-align:top; text-align:justify">
                Peserta perorangan.
            </td>
        <tr>
    </table>
    <table border="2">
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
                Daftar kuantitas dan harga
            </td>
        <tr>
    </table>
    <table border="2">
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
                Dokumen penawaran teknis yang terdiri dari :
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
                Spesifikasi teknis yang ditawarkan berdasarkan contoh, brosur dan gambar gambar;
            </td>
        <tr>
        <tr>
            <td width="245" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                2)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="261" style="vertical-align:top; text-align:justify">
                Jadwal waktu penyerahan/pengiriman barang;
            </td>
        <tr>
        <tr>
            <td width="245" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                3)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="261" style="vertical-align:top; text-align:justify">
                Identitas (jenis, tipe dan merk) yang ditawarkan tercantum dengan lengkap dan jelas (apabila dipersyaratkan)
            </td>
        <tr>
        <tr>
            <td width="245" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                4)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="261" style="vertical-align:top; text-align:justify">
                Jaminan purna jual (apabila dipersyaratkan);
            </td>
        <tr>
        <tr>
            <td width="245" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                5)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="261" style="vertical-align:top; text-align:justify">
                Asuransi (apabila dipersyaratkan);
            </td>
        <tr>
        <tr>
            <td width="245" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                6)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="261" style="vertical-align:top; text-align:justify">
                Tenaga teknis (apabila dipersyaratkan)
            </td>
        <tr>
        <tr>
            <td width="245" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                7)
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="261" style="vertical-align:top; text-align:justify">
                Bagian pekerjaan yang akan disubkontrakkan.
            </td>
        <tr>
    </table>
    <table border="2">
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
                Dokumen lain yang dipersyaratkan
            </td>
        <tr>
    </table>

    <!-- B2 -->
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
            <td width="100" style="vertical-align:top;">
                <b>Harga Penawaran</b>
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top;">
                2.1
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="325" style="vertical-align:top; text-align:justify">
                Harga penawaran ditulis dengan jelas dalam angka dan huruf.
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
                2.2
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="325" style="vertical-align:top; text-align:justify">
                Untuk kontrak harga satuan seerta kontrak gabungan harga satuan dan lump sum, peserta mencantumkan harga satuan dan harga total untuk tiap mata pembayaran/pekerjaan dalam Daftar Kuantitas dan Harga. Jika harga satuan ditulis nol atau tidak dicantumkan maka pekerjaan dalam mata pembayaran tersebut dianggap telah termasuk dalam harga satuan pekerjaan yang lain dan pekerjaan tersebut tetap harus dilaksanakan. <i>(untuk kontrak lump sum, peserta mencantumkan harga satuan untuk tiap mata pembayaran/pekerjaan Dalam Daftar Kuantitas dan Harga, apabila dipersyaratkan)</i>
            </td>
        <tr>
    </table>

    <!-- B3 -->
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
                <b>Mata Uang Penawaran dan Cara Pembayaran</b>
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
                Semua harga dalam penawaran harus dalam bentuk mata uang rupiah.
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
                3.2
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="325" style="vertical-align:top; text-align:justify">
                Pembayaran atas pelaksanaan pengadaan barang ini dilakukan sesuai dengan cara yang ditetapkan dalam LDP dan diuraikan dalam Syarat-syarat Umum/Khusus Kontrak.
            </td>
        <tr>
    </table>

    <!-- B4 -->
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
                <b>Masa Berlaku Penawaran dan Jangka Waktu Pelaksanaan</b>
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
                Masa berlaku penawaran sesuai dengan ketentuan dalam LDP.
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
                4.2
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="325" style="vertical-align:top; text-align:justify">
                Apabila evaluasi belum selesai dilaksanakan, sebelum akhir masa berlakunya penawaran, Panitia Penagadaan/Pejabat Pengadaan Dinas Komunikasi dan Informatika Provinsi Jawa Timur dapat meminta kepada seluruh peserta secara tertulis untuk memperpanjang masa berlakunya penawaran tersebut dalam jangka waktu tertentu.
            </td>
        <tr>
    </table>

    <!-- B5 -->
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
                <b>Pakta Integritas</b>
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
                Pakti integritas berisi ikrar untuk mencegah dan tidak melakukan dan akan melaporkan terjadinya kolusi, korupsi dan nepotisme (KKN) dalam pengadaan barang.
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
                Pakta integritas dimasukkan dalam Dokumen Penawaran.
            </td>
        <tr>
    </table>

    <!-- B6 -->
    <table border="2">
        <tr>
            <td width="30" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b>6.</b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="100" style="vertical-align:top; text-align:justify">
                <b>Bentuk Dokumen Penawaran</b>
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="359" style="vertical-align:top; text-align:justify">
                Dokumen Penawaran disampaikan sebanyak 2 (dua) rangkap, yang terdiri dari dokumen asli 1 (satu) rangkap dan salinannya 1 (satu) rangkap serta dio tandai <b>“ASLI”</b> dan <b>“REKAMAN”</b>. Jika terdapat ketidaksesuaian antara dokumen asli dan rekaman, maka dokumen asli yang berlaku.
            </td>
        <tr>
    </table>

    <!-- Section C -->
    <br><br>
    <table border="2">
        <tr>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b>c.</b>
            </td>
            <td width="10" style="vertical-align:top; text-transform: uppercase;">
                <b> </b>
            </td>
            <td width="510" style="vertical-align:top; text-transform: uppercase;">
                <b>PEMASUKAN DOKUMEN PENAWARAN</b>
            </td>
        <tr>
    </table>

    <!-- C1 -->
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
                <b>Penyampulan dan Penandaan Sampul Penawaran</b>
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
                Penyampulan Dokumen Penawaran dengan menggunakan metode 1 (satu) sampul.
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
                Dokumen penawaran terdiri dari ;
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
                Surat Penawaran;
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
                Daftar Kuantitas,
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
                Penawaran Teknis; dan
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
                Syarat lain yang dipersyaratkan.
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
                1.3
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="325" style="vertical-align:top; text-align:justify">
                Peserta memasukkan Dokumen Penawaran asli dan salinannya ke dalam 2 (dua) sampul yang masing masing ditandai <b>“ASLI”</b> dan <b>“REKAMAN”</b>, kemudian kedua sampul tersebut dimasukkan ke dalam 1 (satu) sampul untuk mendapat kerahasiaannya.
            </td>
        <tr>
    </table>

    <!-- C2 -->
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
                <b>Penyampaian Dokumen Penawaran</b>
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="359" style="vertical-align:top; text-align:justify">
                Peserta menyampaikan langsung Dokumen Penawaran kepada Panitia Pengadaan/Pejabat Pengadaan Dinas Komunikasi dan Informatika Provinsi Jawa Timur sesuai jadwal yang ditentukan dalam undangan.
            </td>
        <tr>
    </table>
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
                <b>Batas Akhir Waktu Pemasukan Penawaran</b>
            </td>
            <td width="10" style="vertical-align:top;">
                <b> </b>
            </td>
            <td width="359" style="vertical-align:top; text-align:justify">
                Penawaran harus disampaikan kepada atau harus sudah diterima oleh Panitia Pengadaan/Pejabat Pengadaan paling lambat ditempat dan pada waktu yang ditentukan dalam undangan
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