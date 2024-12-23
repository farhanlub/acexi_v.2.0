<ul style="gap: 20px">
    <li class="unix-beranda">
        <a style="font-size: 14px" href="{{ route('beranda') }}">Beranda</a>
    </li>
    <li class="unix-tentang-kami has-dropdown">
        <a style="font-size: 14px" href="#">Tentang Kami</a>
        <ul class="sub-menu">
            <li class="unix-profil"><a style="font-size: 14px" href="{{ route('tentang-kami.profil') }}">Profil</a></li>
            <li class="unix-visi-misi"><a style="font-size: 14px" href="{{ route('tentang-kami.visi-misi') }}">Visi & Misi</a></li>
            <li class="unix-struktur-pengurus has-dropdown">
                <a style="font-size: 14px" href="#">Struktur Pengurus</a>
                <ul class="sub-menu">
                    <li class="unix-dewan-kehormatan"><a style="font-size: 14px" href="{{ route('tentang-kami.struktur-dewan') }}">Dewan Kehormatan, Penasihat, Pembina, Pendiri, Pakar</a></li>
                    <li class="unix-pengurus-pusat"><a style="font-size: 14px" href="{{ route('tentang-kami.struktur-pengurus') }}">Pengurus Pusat</a></li>
                </ul>
            </li>
            <li class="unix-lingkup-kepakaran"><a style="font-size: 14px" href="{{ route('tentang-kami.lingkup-kepakaran') }}">Lingkup Kepakaran</a></li>
            <li class="unix-galeri"><a style="font-size: 14px" href="{{ route('tentang-kami.galeri') }}">Galeri</a></li>
        </ul>
    </li>
    <li class="unix-tentang-kami has-dropdown">
        <a style="font-size: 14px" href="#">Program & Kegiatan</a>
        <ul class="sub-menu">
            <li class="unix-struktur-pengurus has-dropdown">
                <a style="font-size: 14px" href="#">Program</a>
                <ul class="sub-menu">
                    <li class="unix-dewan-kehormatan"><a style="font-size: 14px" href="#">Pendidikan Pengembangan Kapasitas</a></li>
                    <li class="unix-pengurus-pusat"><a style="font-size: 14px" href="#">Advokasi dan Kebijakan</a></li>
                    <li class="unix-pengurus-pusat"><a style="font-size: 14px" href="#">Program Kemitraan</a></li>
                </ul>
            </li>
            <li class="unix-struktur-pengurus has-dropdown">
                <a style="font-size: 14px" href="#">Kegiatan</a>
                <ul class="sub-menu">
                    <li class="unix-dewan-kehormatan"><a style="font-size: 14px" href="#">Pelatihan</a></li>
                    <li class="unix-pengurus-pusat"><a style="font-size: 14px" href="#">Sertifikasi</a></li>
                    <li class="unix-pengurus-pusat"><a style="font-size: 14px" href="#">Workshop</a></li>
                </ul>
            </li>
        </ul>
    </li>
    <li class="unix-anggota has-dropdown">
        <a style="font-size: 14px" href="#">
            @if (Auth::check())
                <i class="fa fa-crown text-warning"></i>
            @endif Anggota
        </a>
        <ul class="sub-menu">
            <li class="unix-struktur-pengurus has-dropdown">
                <a style="font-size: 14px" href="#">Anggota</a>
                <ul class="sub-menu">
                    <li class="unix-dewan-kehormatan"><a style="font-size: 14px" href="#">Manfaat Menjadi Anggota</a></li>
                    <li class="unix-pengurus-pusat"><a style="font-size: 14px" href="#">Cara Menjadi Anggota</a></li>
                    @if (Auth::check())
                        <li class="unix-pengurus-pusat"><a style="font-size: 14px" href="#"><i class="fa fa-crown text-warning"></i> Anggota yang Terdaftar</a></li>
                    @endif
                </ul>
            </li>
            <li class="unix-struktur-pengurus has-dropdown">
                <a style="font-size: 14px" href="#">Mitra</a>
                <ul class="sub-menu">
                    <li class="unix-dewan-kehormatan"><a style="font-size: 14px" href="#">Manfaat Menjadi Mitra</a></li>
                    <li class="unix-pengurus-pusat"><a style="font-size: 14px" href="#">Cara Menjadi Mitra</a></li>
                    <li class="unix-pengurus-pusat"><a style="font-size: 14px" href="#"><i class="fa fa-crown text-warning"></i> Mitra yang Terdaftar</a></li>
                </ul>
            </li>
        </ul>
    </li>
    <li class="unix-emisi-iklim has-dropdown">
        <a style="font-size: 14px" href="#">Emisi & Iklim</a>
        <ul class="sub-menu">
            <li class="unix-struktur-pengurus has-dropdown">
                <a style="font-size: 14px" href="#">Climate Change 101</a>
                <ul class="sub-menu">
                    <li class="unix-dewan-kehormatan"><a style="font-size: 14px" href="#">Climate Change Indonesia</a></li>
                    <li class="unix-dewan-kehormatan"><a style="font-size: 14px" href="#">Climate Change Global</a></li>
                    <li class="unix-pengurus-pusat"><a style="font-size: 14px" href="#">Peraturan Terbaru</a></li>
                </ul>
            </li>
            <li class="unix-kalkulator-emisi"><a style="font-size: 14px" href="{{ route('emisi-iklim.kalkulator') }}">Kalkulator Emisi</a></li>
            <li class="unix-kalkulator-emisi"><a style="font-size: 14px" href="{{ route('emisi-iklim.kalkulator') }}">Keberlanjutan & Pendampingan</a></li>

        </ul>
    </li>
    @if (Auth::check())
        <li class="unix-hubungi-kami">
            <a style="font-size: 14px" href="#">
                <i class="fa fa-crown text-warning"></i>
                Tren Terbaru</a>
        </li>
    @endif
    @if (Auth::check())
        <li class="unix-hubungi-kami">
            <a style="font-size: 14px" href="#">
                <i class="fa fa-crown text-warning"></i>
                Studi Kasus
            </a>
        </li>
    @endif
    @if (Auth::check())
        <li class="unix-hubungi-kami">
            <a style="font-size: 14px" href="#">
                <i class="fa fa-crown text-warning"></i>
                Regulasi & Kebijakan
            </a>
        </li>
    @endif
    <li class="unix-hubungi-kami">
        <a style="font-size: 14px" href="#">
            @if (Auth::check())
                <i class="fa fa-crown text-warning"></i>
            @endif
            Berita
        </a>
    </li>
    <li class="unix-hubungi-kami">
        <a style="font-size: 14px" href="{{ route('hubungi-kami') }}">Hubungi Kami</a>
    </li>
</ul>
