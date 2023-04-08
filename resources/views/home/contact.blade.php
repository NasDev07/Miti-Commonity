@extends('welcome')

@section('title', 'Contact')

@section('content')
{{-- about --}}
<section id="about" class="about">
    <div class="container aos-init aos-animate" data-aos="fade-up">

        <div class="row gy-4">
            <div class="col-lg-6">
                <h3>Voluptatem dignissimos provident quasi corporis</h3>
                <img src="assets_user/img/about.jpg" class="img-fluid rounded-4 mb-4" alt="">
                <p>Ut fugiat ut sunt quia veniam. Voluptate perferendis perspiciatis quod nisi et. Placeat debitis quia
                    recusandae odit et consequatur voluptatem. Dignissimos pariatur consectetur fugiat voluptas ea.</p>
                <p>Temporibus nihil enim deserunt sed ea. Provident sit expedita aut cupiditate nihil vitae quo officia
                    vel. Blanditiis eligendi possimus et in cum. Quidem eos ut sint rem veniam qui. Ut ut repellendus
                    nobis tempore doloribus debitis explicabo similique sit. Accusantium sed ut omnis beatae neque
                    deleniti repellendus.</p>
            </div>
            <div class="col-lg-6">
                <div class="content ps-0 ps-lg-5">
                    <p class="fst-italic">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore
                        magna aliqua.
                    </p>
                    <ul>
                        <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.</li>
                        <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in voluptate
                            velit.</li>
                        <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda
                            mastiro dolore eu fugiat nulla pariatur.</li>
                    </ul>
                    <p>
                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                        in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident
                    </p>

                    <div class="position-relative mt-4">
                        <img src="assets_user/img/about.jpg" class="img-fluid rounded-4 mb-4" alt="">
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
