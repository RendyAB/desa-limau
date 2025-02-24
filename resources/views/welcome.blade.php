@extends('template.header')

@section('konten')
    {{-- <div class="d-flex justify-content-center align-items-center">
        <div class="position-absolute m-5" style="z-index: 1;">
            <div class="row">
                <div class="me-5 col-2">
                    <img src="{{asset('img/Banyuasin [koleksilogo (1).svg')}}" class="" style="height: 200px" alt="">

                </div>
                <div class="col">

                    <b class="text-light text-center " style="font-size: 50px">Selamat Datang Di Website </b><br>
                    <b class="text-light text-center " style="font-size: 50px"> Desa Limau</b><br>
                </div>
            </div>


        </div>
        <video src="{{ asset('img/profile.mp4') }}" autoplay loop muted class="w-100"
            style="height: 400px; object-fit: cover; z-index: -2;">
        </video>

    </div> --}}
    <div class="d-flex justify-content-center align-items-center">
        <div class="position-absolute m-5" style="z-index: 1;">
            <div class="row">
                <!-- Mengatur kolom untuk tampilan besar dan kecil -->
                <div class="me-5 col-12 col-md-2 d-flex justify-content-center">
                    <img src="{{asset('img/Banyuasin [koleksilogo (1).svg')}}" class="" style="height: 200px" alt="">
                </div>
                <div class="col text-center">
                    <b class="text-light" style="font-size: 50px">Selamat Datang Di Website </b><br>
                    <b class="text-light" style="font-size: 50px"> Desa Limau</b><br>
                </div>
            </div>
        </div>
        <video src="{{ asset('img/profile.mp4') }}" autoplay loop muted class="w-100"
               style="height: 400px; object-fit: cover; z-index: -2;">
        </video>
    </div>


    {{-- <video src="{{ asset('img/profile.mp4') }}" autoplay loop muted class="w-100"
        style="height: 400px; object-fit: cover; z-index: -2;">
    </video> --}}

    </div>
    {{-- <video src="{{ asset('img/profile.mp4') }}" autoplay loop muted class="w-100"
        style="height: 400px; object-fit: cover; z-index: -2;"></video>
    </div> --}}

    <div class="mt-3 p-4 shadow rounded bg-primary">
        <div class="d-flex justify-content-center">
            <h4 class="text-center text-light p-2 rounded bg-success">Sejarah Desa</h4>
        </div>
        <p style="text-align: justify" class="text-light">
            Menurut sejarah yang masih dipercayai masyarakat sampai saat ini,
            Desa Limau
            adalah Desa Tertua di Kabupaten
            Banyuasin . Konon Menurut cerita para tetua adat dusun Limau didirikan oleh Lima orang pengembara dari tanah
            jawa
            yang mengendarai perahu dan singgah di sebuah tempat yang sekarang menjadi makan leluhur yang dikeramatkan oleh
            masyarakat Desa Limau.

            Dan dari tempat tersebutlah kelima orang pengembara tersebut mendirikan sebuah kampung yang kemudian diberi nama
            Kampung Limo. Kelima pengembara tersebut adalah Muning Godek, sebagai pimpinan pasukan,

            Muning Resmi adalah istri dari Muning Godek, Muning Sakti sebagai penasehat dan seorang Hulu balang yang tidak
            diketahui namanya. Kelima orang tersebut di makamkan dalam satu tempat pemakaman yang sekarang disebut Makam
            Keramat
            Limau.
        </p>
    </div>

    <div class="row gap-2 justify-content-center mt-3 p-3 shadow rounded position-relative"
        style="background-image: url('{{ asset('img/tugu1.jpg') }}'); background-size: cover; background-position: center; height: auto;">

        <div class="position-absolute top-0 w-100 h-100" style="background-color: rgba(0, 0, 0, 0.5); z-index: 0;"></div>

        <div class="position-relative text-light">
            <div class="d-flex justify-content-center">
                <h3 class="text-center bg-success rounded px-3 mt-3 text-light">Visi</h3>
            </div>
            <p class="text-light" style="font-size: 20px">
                Terwujudnya Tata Kelola Pemerintah Desa Yang Transparan. Amanah, Jujur, Adil dan Bijaksana Demi
                Menciptakan Pemerintah Desa Yang Bersih, Akuntabel, Menuju Desa Limau Desa Wisata.
            </p>

            <div class="d-flex justify-content-center">
                <h3 class="text-center bg-success rounded px-3 mt-3 text-light">Misi</h3>
            </div>
            <p class="text-light  " style="font-size: 20px">
                1. Memberikan pelayanan yang baik dan informasi seluas-luasnya kepada masyarakat secara Transparan, efektif,
                efisien, cepat dan akuntabel tentang pelaksanaan optimalisasi pemerintah desa. <br>
                2. Melanjutkan pembangunan desa disegala bidang dalam tujuan meningkatkan pendapatan masyarakat
                (Transportasi Perekonomian Masyarakat).<br>
                3. Memperdayakan sumberdaya manusia dan semua potensi masyarakat dalam bidang kepemudaan, pertanian,
                perikanan, dan teknologi, guna meningkatkan kesejahteraan masyarakat Desa Limau.<br>
                4. Mewujudkan rasa aman, nyaman, tertib di lingkungan warga sehingga terciptanya rasa kedamaian dalam
                berinteraksi sesama masyarakat dan meningkatkan rasa kegotongroyongan.<br>
                5. Mempertahankan dan meningkatkan operasional Lembaga Pendidikan Desa.<br>
                6. Meningkatkan peran Fungsi Lembaga Masyarakat Desa BPD, TP.PKK, KPMD, LPMD, Kader Desa dan Karang Taruna
                serta lembaga Desa yang sah.<br>
                7. Mengupayakan pengentasan kemiskinan dengan mengoptimalkan Bansos bagi masyarakat layak dan meningkatkan
                pembangunan Rumah Tidak Layak Huni.<br>
                8. Meningkatkan budaya masyarakat sesuai tradisi nenek moyang yang tidak bertentangan dengan Agama, adat
                Budaya dan pemerintah.<br>
                9. Memberantas Narkoba dan peredaran obat-obatan terlarang untuk mewujudkan Desa Limau Bebas Narkoba.<br>
                10. Memanfaatkan sumberdaya alam dan sumberdaya manusia dalam rangka meningkatkan perekonomian
                masyarakat.<br>
            </p>
        </div>
    </div>
    <h2 class="text-center mt-4">Perangkat Desa</h2>
    <div class="row d-flex justify-content-center shadow rounded">
        <img src="{{asset('img/perangkat desa.drawio.svg')}}" class="img-fluid" alt="">
    </div>

    <div class="my-3 bg-primary p-3 rounded shadow">
        <div class="d-flex justify-content-center">
            <h2 class="text-center my-3 text-light p-2 rounded bg-success">Berita Terkini</h2>
        </div>
        <div class="row d-flex justify-content-center">
            @if ($beritaHead)
                <div class="col-12 col-md-6">
                    <div class="card shadow p-2">
                        <img src="{{ asset('uploads/berita/' . $beritaHead->gambar->first()->gambar) }}" class="w-100 rounded"
                            style="height: 250px; object-fit: cover;" alt="Gambar berita">
                        <a href="{{route('berita.isiBerita', $beritaHead->id)}}"
                            class="h5 link-underline link-underline-opacity-0">{{ $beritaHead->judul }}</a>
                        <div class="hstack gap-3">
                            <h6 class="text-secondary bg-warning-subtle p-1 rounded"><b
                                    class="bi bi-pen me-1"></b>{{ $beritaHead->penulis }}</h6>
                            <h6 class="text-secondary border rounded p-1 bg-success-subtle"><b
                                    class="bi bi-tag me-1"></b>{{ $beritaHead->kategori }}</h6>
                        </div>
                    </div>
                </div>
            @else
                <p>Tidak ada berita tersedia.</p>
            @endif
            <div class="col-12 col-md-3">
                <div class="vstack gap-2">
                    @foreach ($beritaRandom as $item)
                        <div class="card shadow p-2">
                            <img src="{{ asset('uploads/berita/' . $item->gambar->first()->gambar) }}" class="w-100 rounded">
                            <a href="{{route('berita.isiBerita', $item->id)}}"
                                class="h6 link-underline link-underline-opacity-0">{{ $item->judul }}</a>
                            <div class="hstack gap-3">
                                <small class="text-secondary bg-warning-subtle p-1 rounded"><b
                                        class="bi bi-pen me-1"></b>{{ $item->penulis }}</small>
                                <div class="d-flex align-items-center">
                                    <small class="text-secondary border p-1 rounded bg-success-subtle"><b
                                            class="bi bi-tag me-1"></b>{{ $item->kategori }}</small>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <h2 class="text-center" id="lokasi">Lokasi Desa</h2>
    <div class="d-flex p-4 justify-content-center">
        <iframe id="mapFrame"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d37911.614507259364!2d104.49741877608183!3d-2.8255861888525504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b11ca4effd877%3A0xbc049609b330e044!2sLimau%2C%20Sembawa%2C%20Banyuasin%20Regency%2C%20South%20Sumatra!5e0!3m2!1sen!2sid!4v1740154884436!5m2!1sen!2sid"
            class="border p-2 rounded" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>

    <script>
        document.getElementById("mapFrame").addEventListener("click", function () {
            document.getElementById("lokasi").scrollIntoView({ behavior: "smooth" });
        });
    </script>
@endsection
