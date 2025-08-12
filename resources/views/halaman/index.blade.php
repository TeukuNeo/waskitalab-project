@extends("layouts.layout")

@section("title","Waskita Landing Page")

@section("content")
    <main class="hero-section">
        <div class="content-left">
            <h1>Kembangkan<br>Potensi Diri Bersama<br>Waskita Lab</h1>
            <p>Siap hadapi dunia profesional dengan kemampuan sosial yang terasah? Di Waskita Lab, kami bantu Anda mengembangkan kemampuan interpersonal langsung dari rumah, tingkatkan daya saing dan jadilah pribadi yang siap bersinar.</p>
            <div class="cta-buttons">
                <a href="#" class="btn btn-primary">Tentang Kami</a>
                <a href="#" class="btn btn-secondary">Kontak Kami</a>
            </div>
        </div>
        <div class="content-right">
            <div class="image-container">
                <img src="{{ URL::to('/') }}/images/premium_landing_page.jpg" width="600" height="400" alt="Tim Waskita Lab">
                <div class="image-caption">
                    <p class="date" style="color:black; font-weight: bold;">Juli 4</p>
                    <p class="title-caption" style="color: black; font-family: 'Times New Roman', Times, serif; font-weight: lighter;">Mari Galih Lebih Dalam<br>Potensi Ananda Dengan<br>Waskita Lab</p>
                    <a href="#" class="cta-link">Temukan Acara <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </main>

    <section class="second-landing-page">
        <div class="title-landing-page">
            <p>Tentang Visi </br>Dan Misi Kami</p>
        </div>
        <div class="first-section">
            <img src="{{ URL::to('/') }}/images/vission-template.jpg" alt="vission template">
            <div class="second-landing-page-caption">
                <div class="title-caption">
                    <p>Visi</p>
                </div>
                <p class="content-caption-title">Visi Kami Adalah Memberikan Solusi Keterampilan Terkemuka</p>
                <p class="content-caption">
                    Kami memiliki sebuah visi yang besar yaitu mengarahkan ananda kepada kemampuan keterampilan interpersonal yang bertujuan menjadi bekal dan persiapan yang dapat digunakan untuk beradaptasi di masa era society 5.0
                </p>
            </div>
        </div>
        <div class="second-section">
            <img src="{{ URL::to('/') }}/images/mission-template.jpg" alt="mission template">
            <div class="second-landing-page-caption">
                <div class="title-caption">
                    <p>Misi</p>
                </div>
                <p class="content-caption-title">Misi Kami Adalah Mempersiapkan Kemampuan Beradaptasi Di Masyarakat 5.0</p>
                <p class="content-caption">
                    Kami memiliki sebuah misi yang besar yaitu mengarahkan ananda kepada kemampuan soft skill yang bertujuan menjadi bekal dan persiapan yang dapat digunakan untuk beradaptasi di masa era society 5.0
                </p>
            </div>
        </div>
    </section>

    <section class="third-landing-page">
        <div class="title-landing-page">
            <p>Sumber Utama </br>Untuk Siswa</p>
        </div>
        <div class="source-of-student">
            <div class="source-of-student-card">
                <div class="logo-source-of-student">
                    <i class="fa-solid fa-microphone"></i>
                </div>
                <div class="title-source-of-student">
                    <p>Public </br>Speaking</p>
                </div>
                <div class="content-source-of-student">
                    <p>Public speaking adalah kemampuan </br>
                        berbicara di depan umum untuk </br>
                        menyampaikan pesan secara efektif, </br>
                        baik untuk menginformasikan, </br>
                        membujuk, menghibur, </br>
                        atau menginspirasi audiens.
                    </p>
                </div>
                <div class="button-source-of-student">
                    <a href="/halaman/pubspeak" class="cta-link">Selengkapnya <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="source-of-student-card">
                <div class="logo-source-of-student">
                    <i class="fa-solid fa-robot" style="padding: 8px;"></i>
                </div>
                <div class="title-source-of-student">
                    <p>Literasi Kecerdasan </br>Buatan</p>
                </div>
                <div class="content-source-of-student">
                    <p>Literasi kecerdasan buatan (AI literacy) </br>
                        adalah soft skill penting di era digital, </br>
                        yang berarti memiliki pemahaman dasar </br>
                        tentang apa itu AI, cara kerjanya, </br>
                        manfaat, serta potensi risiko dan </br>
                        batasannya.
                    </p>
                </div>
                <div class="button-source-of-student">
                    <a href="/halaman/ailiterature" class="cta-link">Selengkapnya <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="source-of-student-card">
                <div class="logo-source-of-student">
                    <i class="fa-solid fa-user-tie"></i>
                </div>
                <div class="title-source-of-student">
                    <p>Personal </br>Branding</p>
                </div>
                <div class="content-source-of-student">
                    <p>Personal branding adalah proses aktif di </br>
                        mana Anda secara sadar dan strategis </br>
                        membentuk serta mempromosikan citra </br>
                        diri, reputasi, dan nilai unik yang Anda </br>
                        tawarkan, baik di lingkungan profesional </br>
                        maupun sosial.
                    </p>
                </div>
                <div class="button-source-of-student">
                    <a href="/halaman/personalbranding" class="cta-link">Selengkapnya <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="source-of-student-card">
                <div class="logo-source-of-student">
                    <i class="fa-solid fa-briefcase"></i>
                </div>
                <div class="title-source-of-student">
                    <p>Freelancing Secara </br>Mandiri</p>
                </div>
                <div class="content-source-of-student">
                    <p>Freelancing secara mandiri adalah </br>
                        proses di mana individu bekerja secara </br>
                        independen, menawarkan jasa atau </br>
                        keahlian mereka kepada berbagai klien </br>
                        tanpa terikat pada satu perusahaan.
                    </p>
                </div>
                <div class="button-source-of-student">
                    <a href="/halaman/freelancing" class="cta-link">Selengkapnya <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <section class="fourth-landing-page">
        <div class="title-landing-page">
            <p>Tantangan Proyek </br>Untuk Siswa</p>
        </div>
        <div class="button-source-of-challenge">
            <a href="#" style="font-weight: 600; color:black;">Selengkapnya</a>
        </div>
        <div class="source-of-challenge">
            <div class="source-of-challenge-card" style="background-color: #91dbff;">
                <div class="source-of-challenge-image">
                    <img style="border-radius: 10px;" src="{{ URL::to('/') }}/images/proyek-klien-template.png" width="300" height="300" alt="client-challenge-template">
                </div>
                <div class="title-source-of-challenge">
                    <p>Proyek Klien</p>
                </div>
                <hr style="border: 1px solid black;">
                <div class="content-source-of-challenge">
                    <p>Kategori ini mensimulasikan pekerjaan freelance </br>
                        nyata. Siswa belajar berinteraksi dengan "klien" </br>
                        fiktif, memahami brief, dan menghasilkan output </br>
                        sesuai permintaan.
                    </p>
                </div>
            </div>
            <div class="source-of-challenge-card" style="background-color: #EF476F;">
                <div class="source-of-challenge-image">
                    <img style="border-radius: 10px;" src="{{ URL::to('/') }}/images/chatgpt-template.jpg" width="300" height="300" alt="client-challenge-template">
                </div>
                <div class="title-source-of-challenge">
                    <p>Proyek Otomasi & A.I</p>
                </div>
                <hr style="border: 1px solid black;">
                <div class="content-source-of-challenge">
                    <p>Fokus utama kategori ini adalah melatih siswa </br>
                        untuk memanfaatkan literasi kecerdasan </br>
                        buatan untuk efisiensi dan inovasi.
                    </p>
                </div>
            </div>
            <div class="source-of-challenge-card" style="background-color: #FFD166;">
                <div class="source-of-challenge-image">
                    <img style="border-radius: 10px;" src="{{ URL::to('/') }}/images/personal-branding-template.jpg" width="300" height="300" alt="client-challenge-template">
                </div>
                <div class="title-source-of-challenge">
                    <p>Proyek Personal Branding</p>
                </div>
                <hr style="border: 1px solid black;">
                <div class="content-source-of-challenge">
                    <p>Kategori ini dirancang untuk membantu siswa </br>
                        membangun dan mempromosikan diri mereka di </br>
                        dunia digital.
                    </p>
                </div>
            </div>
        </div>
        <div class="title-landing-page">
            <p>Artikel </br>Waskita Lab</p>
        </div>
        <div class="article-frame">
            <div class="article-container">
                <img src="{{ URL::to('/') }}/images/education-1.jpg" width="580" height="356" alt="">
                <div class="article-caption">
                    <p class="article-type">EDUCATION</p>
                    <p class="article-title">Tips & Trik Melakukan Journaling</p>
                    <p class="article-date">Penulis - <span>7 Agustus, 2025</span></p>
                </div>
            </div>
        </div>
    </section>
@endsection