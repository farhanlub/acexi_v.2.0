<ul style="gap: 20px">
    <li class="beranda">
        <a style="font-size: 14px" href="{{ route('beranda') }}">Beranda</a>
    </li>
    <li class="tentang-kami has-dropdown">
        <a style="font-size: 14px" href="#">Tentang Kami</a>
        <ul class="sub-menu">
            <li class="profil"><a style="font-size: 14px" href="{{ route('tentang-kami.profil') }}">Profil</a></li>
            <li class="visi-misi"><a style="font-size: 14px" href="{{ route('tentang-kami.visi-misi') }}">Visi & Misi</a></li>
            <li class="struktur-pengurus has-dropdown">
                <a style="font-size: 14px" href="#">Struktur Pengurus</a>
                <ul class="sub-menu">
                    <li class="dewan-kehormatan"><a style="font-size: 14px" href="{{ route('tentang-kami.struktur-dewan') }}">Dewan Kehormatan</a></li>
                    <li class="dewan-kehormatan"><a style="font-size: 14px" href="{{ route('tentang-kami.struktur-dewan') }}">Dewan Penasihat</a></li>
                    <li class="dewan-kehormatan"><a style="font-size: 14px" href="{{ route('tentang-kami.struktur-dewan') }}">Dewan Pembina</a></li>
                    <li class="dewan-kehormatan"><a style="font-size: 14px" href="{{ route('tentang-kami.struktur-dewan') }}">Dewan Pendiri</a></li>
                    <li class="dewan-kehormatan"><a style="font-size: 14px" href="{{ route('tentang-kami.struktur-dewan') }}">Dewan Pakar</a></li>
                    <li class="pengurus-pusat"><a style="font-size: 14px" href="{{ route('tentang-kami.struktur-pengurus') }}">Pengurus Pusat</a></li>
                </ul>
            </li>
            <li class="lingkup-kepakaran"><a style="font-size: 14px" href="{{ route('tentang-kami.lingkup-kepakaran') }}">Lingkup Kepakaran</a></li>
            <li class="galeri"><a style="font-size: 14px" href="{{ route('tentang-kami.galeri') }}">Galeri</a></li>
        </ul>
    </li>
    <li class="program-kegiatan has-dropdown">
        <a style="font-size: 14px" href="#">Program & Kegiatan</a>
        <ul class="sub-menu">
            <li class="program has-dropdown">
                <a style="font-size: 14px" href="#">Program</a>
                <ul class="sub-menu">
                    <li class="pendidikan-kapasitas"><a style="font-size: 14px" href="{{ route('program-kegiatan-kategori','pendidikan-pengembangan-kapasitas') }}">Pendidikan Pengembangan Kapasitas</a></li>
                    <li class="advokasi-kebijakan"><a style="font-size: 14px" href="{{ route('program-kegiatan-kategori','advokasi-dan-kebijakan') }}">Advokasi dan Kebijakan</a></li>
                    <li class="kemitraan"><a style="font-size: 14px" href="{{ route('program-kegiatan-kategori','program-kemitraan') }}">Program Kemitraan</a></li>
                </ul>
            </li>
            <li class="kegiatan has-dropdown">
                <a style="font-size: 14px" href="#">Kegiatan</a>
                <ul class="sub-menu">
                    <li class="pelatihan"><a style="font-size: 14px" href="{{ route('program-kegiatan-kategori','pelatihan') }}">Pelatihan</a></li>
                    <li class="sertifikasi"><a style="font-size: 14px" href="{{ route('program-kegiatan-kategori','sertifikasi') }}">Sertifikasi</a></li>
                    <li class="workshop"><a style="font-size: 14px" href="{{ route('program-kegiatan-kategori','workshop') }}">Workshop</a></li>
                </ul>
            </li>
        </ul>
    </li>
    <li class="anggota has-dropdown">
        <a style="font-size: 14px" href="#">
            @if (Auth::check())
                <i class="fa fa-crown text-warning"></i>
            @endif Anggota
        </a>
        <ul class="sub-menu">
            <li class="anggota-menu has-dropdown">
                <a style="font-size: 14px" href="#">Anggota</a>
                <ul class="sub-menu">
                    <li class="manfaat-anggota"><a style="font-size: 14px" href="{{ route('anggota.manfaat') }}">Manfaat Menjadi Anggota</a></li>
                    <li class="cara-anggota"><a style="font-size: 14px" href="{{ route('anggota.cara') }}">Cara Menjadi Anggota</a></li>
                    @if (Auth::check())
                        <li class="anggota-terdaftar"><a style="font-size: 14px" href="{{ route('anggota.anggota-terdaftar') }}"><i class="fa fa-crown text-warning"></i> Anggota yang Terdaftar</a></li>
                    @endif
                </ul>
            </li>
            
            <li class="mitra-menu has-dropdown">
                <a style="font-size: 14px" href="#">Mitra</a>
                <ul class="sub-menu">
                    <li class="manfaat-mitra"><a style="font-size: 14px" href="{{ route('mitra.manfaat') }}">Manfaat Menjadi Mitra</a></li>
                    <li class="cara-mitra"><a style="font-size: 14px" href="{{ route('mitra.cara') }}">Cara Menjadi Mitra</a></li>
                    <li class="mitra-terdaftar"><a style="font-size: 14px" href="{{ route('mitra.mitra-terdaftar') }}"><i class="fa fa-crown text-warning"></i> Mitra yang Terdaftar</a></li>
                </ul>
            </li>
            
        </ul>
    </li>
    <li class="emisi-iklim has-dropdown">
        <a style="font-size: 14px" href="#">Emisi & Iklim</a>
        <ul class="sub-menu">
            <li class="climate-change has-dropdown">
                <a style="font-size: 14px" href="#">Climate Change 101</a>
                <ul class="sub-menu">
                    <li class="climate-change-indonesia"><a style="font-size: 14px" href="#">Climate Change Indonesia</a></li>
                    <li class="climate-change-global"><a style="font-size: 14px" href="#">Climate Change Global</a></li>
                    <li class="peraturan-terbaru"><a style="font-size: 14px" href="#">Peraturan Terbaru</a></li>
                </ul>
            </li>
            <li class="kalkulator-emisi"><a style="font-size: 14px" href="{{ route('emisi-iklim.kalkulator') }}">Kalkulator Emisi</a></li>
            <li class="keberlanjutan-pendampingan"><a style="font-size: 14px" href="{{ route('emisi-iklim.kalkulator') }}">Keberlanjutan & Pendampingan</a></li>
        </ul>
    </li>
    @if (Auth::check())
        <li class="tren-terbaru">
            <a style="font-size: 14px" href="#">
                <i class="fa fa-crown text-warning"></i>
                Tren Terbaru</a>
        </li>
    @endif
    @if (Auth::check())
        <li class="studi-kasus">
            <a style="font-size: 14px" href="#">
                <i class="fa fa-crown text-warning"></i>
                Studi Kasus
            </a>
        </li>
    @endif
    @if (Auth::check())
        <li class="regulasi-kebijakan">
            <a style="font-size: 14px" href="#">
                <i class="fa fa-crown text-warning"></i>
                Regulasi & Kebijakan
            </a>
        </li>
    @endif
    <li class="berita">
        <a style="font-size: 14px" href="{{ route('berita') }}">
            @if (Auth::check())
                <i class="fa fa-crown text-warning"></i>
            @endif
            Kumpulan Berita
        </a>
    </li>
    <li class="hubungi-kami">
        <a style="font-size: 14px" href="{{ route('hubungi-kami') }}">Hubungi Kami</a>
    </li>
</ul>
