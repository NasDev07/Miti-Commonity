@extends('welcome')

@section('title', 'Contact')

@section('content')
{{-- about --}}
<section id="about" class="about">
    <div class="container aos-init aos-animate" data-aos="fade-up">

        <div class="row gy-4">
            <div class="col-lg-6">
                <p class="fw-bold">Miti Community (Mahasiswa IT Indonesia) Adalah komunitas yang bertujuan untuk
                    mengasah skil mahasiswa dalam bidang IT.</p>
                <img src="/img/miti1.jpg" class="img-fluid rounded-4 mb-4" alt="">
                <p>komunitas yang berfokus pada pengembangan keterampilan mahasiswa di bidang IT di Indonesia. Komunitas
                    ini dapat memberikan dukungan dan sumber daya untuk mahasiswa yang tertarik untuk meningkatkan
                    keterampilan mereka di bidang IT.</p>
                <p>Dalam Miti Community, mahasiswa dapat berpartisipasi dalam berbagai kegiatan dan program, seperti
                    pelatihan, workshop, seminar, dan kompetisi. Dalam kegiatan-kegiatan tersebut, mahasiswa dapat
                    belajar tentang topik-topik seperti pemrograman, pengembangan web, desain grafis, keamanan siber,
                    dan banyak lagi. Dengan berpartisipasi dalam kegiatan-kegiatan ini, mahasiswa dapat mengembangkan
                    keterampilan mereka dan memperluas pengetahuan mereka di bidang IT.</p>
                <p>
                    Selain itu, Miti Community juga dapat memberikan kesempatan bagi mahasiswa untuk menjalin hubungan
                    dengan sesama mahasiswa dan profesional di bidang IT. Ini dapat membuka peluang untuk magang atau
                    bekerja di perusahaan IT yang terkait dengan Miti Community.
                </p>
                <p>
                    Secara keseluruhan, Miti Community dapat memberikan manfaat yang sangat besar bagi mahasiswa di
                    Indonesia yang tertarik dalam bidang IT. Dengan dukungan dan sumber daya yang tersedia melalui
                    komunitas ini, mahasiswa dapat mengasah keterampilan mereka dan membangun jaringan yang berguna di
                    industri IT.
                </p>
            </div>
            <div class="col-lg-6">
                <div class="content ps-0 ps-lg-5">
                    <p class="fw-bold">
                        Bergabung dalam Miti Community (Mahasiswa IT Indonesia)
                    </p>
                    <p>
                        Untuk bergabung dengan Miti Community (Mahasiswa IT Indonesia), ada beberapa langkah yang harus
                        diikuti.
                    </p>
                    <ul>
                        <li><i class="bi bi-check-circle-fill"></i> pendaftaran yang tersedia di situs web Miti
                            Community, Pendaftaran berisi informasi seperti nama, email, universitas, NoHp, dll.</li>
                        <li><i class="bi bi-check-circle-fill"></i> Bergabung dengan grup media sosial: Setelah menerima
                            konfirmasi, peserta dapat bergabung dengan grup media sosial Miti Community, seperti grup
                            WhatsApp.</li>
                        <li><i class="bi bi-check-circle-fill"></i> Ikuti acara Miti Community: Miti Community sering
                            mengadakan acara seperti workshop, seminar, dan kompetisi yang dapat diikuti oleh anggota.
                        </li>
                    </ul>
                    <p>
                        Dengan mengikuti langkah-langkah di atas, peserta dapat bergabung dengan Miti Community dan
                        menjadi bagian dari komunitas mahasiswa IT yang aktif dan berkembang di Indonesia.
                    </p>

                    <div class="position-relative mt-4">
                        <img src="/img/miti2.jpg" class="img-fluid rounded-4 mb-4" alt="">
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

{{-- contact --}}
<section id="contact" class="contact">
    <div class="container aos-init aos-animate" data-aos="fade-up">

        <div class="row gx-lg-0 gy-4">

            <div class="col-lg-5">

                <div class="info-container d-flex flex-column align-items-center justify-content-center">
                    <div class="info-item d-flex">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h4>Location:</h4>
                            <p>A108 Adam Street, New York, NY 535022</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h4>Email:</h4>
                            <p>info@example.com</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex">
                        <i class="bi bi-phone flex-shrink-0"></i>
                        <div>
                            <h4>Call:</h4>
                            <p>+1 5589 55488 55</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex">
                        <i class="bi bi-clock flex-shrink-0"></i>
                        <div>
                            <h4>Open Hours:</h4>
                            <p>Mon-Sat: 11AM - 23PM</p>
                        </div>
                    </div><!-- End Info Item -->
                </div>

            </div>

            <div class="col-lg-7">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.32163526291!2d98.62757231414557!3d3.512883351789981!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303125b8e1e6d45d%3A0x45ca307f4073f5f0!2sKrueng%20geukueh%20Aceh%20Utara!5e0!3m2!1sen!2sid!4v1678978845129!5m2!1sen!2sid"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div><!-- End Contact Form -->

        </div>

    </div>
</section>
@endsection
