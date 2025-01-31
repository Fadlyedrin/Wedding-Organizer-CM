@extends('layouts.app')

@section('content')
    <section class="scrollspy-example" data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%"
        data-bs-smooth-scroll="true" tabindex="0">
        <!-- Header -->
        <section class="header d-flex justify-content-center align-items-center" id="scrollHome">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center justify-content-center">
                    <h1 class="text-light" data-aos="fade-down" data-aos-duration="3000">
                        “We can’t wait to make your dreams come true”
                    </h1>
                    <a href="https://drive.google.com/file/d/18FpMdhm-dmIn1kjmZ6MwIlwEQ9kSa68p/view?usp=sharing"
                        class="learn-more">
                        <span class="circle" aria-hidden="true">
                            <span class="icon arrow"></span>
                        </span>
                        <span class="button-text">More Information</span>
                    </a>
                </div>
            </div>
        </section>

        <!-- About Us -->
        <section class="about" style="padding-bottom: 150px;">
            <div class="container">
                <h2 id="scrollAbout" class="text-center mb-5">About Us</h2>
                <div class="row">
                    <div class="col-lg-6">
                        <img data-aos="fade-right" data-aos-duration="2000"
                            src="https://poetrafoto.wordpress.com/wp-content/uploads/2021/03/foto-wedding-adat-padang-dg-bajudekorasi-pelaminan-pengantin-minang-di-auditorium-uny-jogja-ririnfirman.jpg"
                            alt="About Us" class="img-fluid" />
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="row">
                            <div class="col-lg-9 ms-3 p-3">
                                <p class="px-4" data-aos="fade-left" data-aos-duration="2000">
                                    Sanggar Cahaya Minang adalah perusahaan yang bergerak di
                                    bidang wedding, seperti catering, dekorasi pelaminan, rias &
                                    busana, entertainment, photo & video, WO, MC, tarian daerah,
                                    serta layanan wedding lainnya.
                                </p>
                                <a href="about.html" class="text-decoration-none btn btn-dark" data-aos="fade-left"
                                    data-aos-duration="2000"><i class="fas fa-arrow-right"></i> Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="choose">
            <div class="container-fluid feature py-5">
                <div class="container py-5">
                    <div class="text-center mx-auto pb-5 " style="max-width: 800px;" data-aos="fade-down"
                        data-aos-duration="1000">
                        <p class="text-uppercase text-secondary fs-5 mb-0">WHy US</p>
                        <h2 class="display-4 text-capitalize mb-3">Why Choose Us</h2>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-4 " data-aos="fade-up" data-aos-duration="1000">
                            <div class="feature-item text-center border p-5">
                                <div class="feature-img bg-secondary d-inline-flex p-4">
                                    <i class="fas fa-city fa-5x"></i>
                                </div>
                                <a href="#" class="h4 d-block my-4">KERJASAMA TIM</a>
                                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod voluptatem
                                    provident incidunt obcaecati.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 " data-aos="fade-up" data-aos-duration="1000">
                            <div class="feature-item text-center border p-5">
                                <div class="feature-img bg-secondary d-inline-flex p-4">
                                    <i class="fas fa-funnel-dollar fa-5x"></i>
                                </div>
                                <a href="#" class="h4 d-block my-4">PROFESIONAL</a>
                                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod voluptatem
                                    provident incidunt obcaecati.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 " data-aos="fade-up" data-aos-duration="1000">
                            <div class="feature-item text-center border p-5">
                                <div class="feature-img bg-secondary d-inline-flex p-4">
                                    <i class="fas fa-tools fa-5x"></i>
                                </div>
                                <a href="#" class="h4 d-block my-4">KUALITAS</a>
                                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod voluptatem
                                    provident incidunt obcaecati.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Gallery -->
        <section class="gallery pb-5">
            <div class="container">
                <h2 id="scrollGallery" class="text-center mb-5">Gallery</h2>
                <div class="row justify-content-end mb-5">
                    <a href="gallery.html" class="text-decoration-none btn btn-dark"><i class="fas fa-arrow-right"></i> See
                        More</a>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="enkapculation position-relative overflow-hidden" data-aos="fade-right"
                            data-aos-duration="1000">
                            <img src="https://poetrafoto.wordpress.com/wp-content/uploads/2021/03/foto-wedding-adat-padang-dg-bajudekorasi-pelaminan-pengantin-minang-di-auditorium-uny-jogja-ririnfirman.jpg"
                                alt="img_gallery_1" class="card-img-top" />
                            <!-- <span
                      class="start-0 end-0 top-0 bottom-0 position-absolute d-flex justify-content-center align-items-center"
                    > -->
                            <a href="https://poetrafoto.wordpress.com/wp-content/uploads/2021/03/foto-wedding-adat-padang-dg-bajudekorasi-pelaminan-pengantin-minang-di-auditorium-uny-jogja-ririnfirman.jpg"
                                data-lightbox="image-1" data-title="Gallery 1" class="text-light ">
                            </a>
                            <!-- </span> -->
                            <!-- <a href="https://poetrafoto.wordpress.com/wp-content/uploads/2021/03/foto-wedding-adat-padang-dg-bajudekorasi-pelaminan-pengantin-minang-di-auditorium-uny-jogja-ririnfirman.jpg" data-lightbox="image-1" data-title="Gallery 1"><img src="img/Gallery/img_gallery_1.jpg" alt="img_gallery_1" class="card-img-top" ></a> -->
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="enkapculation position-relative overflow-hidden" data-aos="fade-right"
                            data-aos-duration="2000">
                            <img src="img/Gallery/header.jpeg" alt="img_gallery_2" class="card-img-top " />
                            <span
                                class="start-0 end-0 top-0 bottom-0 position-absolute d-flex justify-content-center align-items-center">
                                <a href="img/Gallery/header.jpeg" data-lightbox="image-1" data-title="Gallery 2"
                                    class="text-light">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </a>
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="enkapculation position-relative overflow-hidden" data-aos="fade-right"
                            data-aos-duration="3000">
                            <img src="https://poetrafoto.wordpress.com/wp-content/uploads/2021/03/foto-wedding-adat-padang-dg-bajudekorasi-pelaminan-pengantin-minang-di-auditorium-uny-jogja-ririnfirman.jpg"
                                alt="img_gallery_3" class="card-img-top" />
                            <span
                                class="start-0 end-0 top-0 bottom-0 position-absolute d-flex justify-content-center align-items-center">
                                <a href="https://poetrafoto.wordpress.com/wp-content/uploads/2021/03/foto-wedding-adat-padang-dg-bajudekorasi-pelaminan-pengantin-minang-di-auditorium-uny-jogja-ririnfirman.jpg"
                                    data-lightbox="image-1" data-title="Gallery 3" class="text-light">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </a>
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 h-100">
                        <div class="enkapculation position-relative overflow-hidden" data-aos="fade-right"
                            data-aos-duration="1000">
                            <img src="https://s4.bukalapak.com/bukalapak-kontenz-production/content_attachments/56859/original/FOTO_19.jpg"
                                alt="img_gallery_4" class="card-img-top" />
                            <span
                                class="start-0 end-0 top-0 bottom-0 position-absolute d-flex justify-content-center align-items-center">
                                <a href="https://s4.bukalapak.com/bukalapak-kontenz-production/content_attachments/56859/original/FOTO_19.jpg"
                                    data-lightbox="image-1" data-title="Gallery 4" class="text-light">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </a>
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="enkapculation position-relative overflow-hidden" data-aos="fade-right"
                            data-aos-duration="2000">
                            <img src="https://poetrafoto.wordpress.com/wp-content/uploads/2021/03/foto-wedding-adat-padang-dg-bajudekorasi-pelaminan-pengantin-minang-di-auditorium-uny-jogja-ririnfirman.jpg"
                                alt="img_gallery_5" class="card-img-top" />
                            <span
                                class="start-0 end-0 top-0 bottom-0 position-absolute d-flex justify-content-center align-items-center">
                                <a href="https://poetrafoto.wordpress.com/wp-content/uploads/2021/03/foto-wedding-adat-padang-dg-bajudekorasi-pelaminan-pengantin-minang-di-auditorium-uny-jogja-ririnfirman.jpg"
                                    data-lightbox="image-1" data-title="Gallery 5" class="text-light">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </a>
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="enkapculation position-relative overflow-hidden" data-aos="fade-right"
                            data-aos-duration="3000">
                            <img src="https://poetrafoto.wordpress.com/wp-content/uploads/2021/03/foto-wedding-adat-padang-dg-bajudekorasi-pelaminan-pengantin-minang-di-auditorium-uny-jogja-ririnfirman.jpg"
                                alt="img_gallery_6" class="card-img-top" />
                            <span
                                class="start-0 end-0 top-0 bottom-0 position-absolute d-flex justify-content-center align-items-center">
                                <a href="https://poetrafoto.wordpress.com/wp-content/uploads/2021/03/foto-wedding-adat-padang-dg-bajudekorasi-pelaminan-pengantin-minang-di-auditorium-uny-jogja-ririnfirman.jpg"
                                    data-lightbox="image-1" data-title="Gallery 6" class="text-light">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 1440 320"
            style="background-color: var(--bg)"
          >
            <path
              fill="#c8ae7d"
              fill-opacity="1"
              d="M0,32L48,48C96,64,192,96,288,101.3C384,107,480,85,576,74.7C672,64,768,64,864,80C960,96,1056,128,1152,144C1248,160,1344,160,1392,160L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
            ></path>
          </svg> -->

        <!-- Package -->
        <section class="package pt-5">
            <div class="container">
                <h2 id="scrollPackage" class="text-center mb-5 mt-3">Package</h2>
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="owl-carousel owl-theme text-center">
                            <div class="item p-3" data-aos="zoom-in" data-aos-duration="800">
                                <a href="akad-package.html" class="text-dark">
                                    <div class="card d-grid align-items-end position-relative">
                                        <img src="img/package/akad_package.png" class="card-img-top"
                                            alt="akad_package" />
                                        <div class="card-body position-absolute overflow-hidden start-0 end-0 py-5"
                                            style="background-color: rgba(255, 255, 255, 0.667)">
                                            <h4>Akad Package</h4>
                                            <h5>Rp.100.000.000</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="item p-3" data-aos="zoom-in" data-aos-duration="800">
                                <a href="jasmine-package.html" class="text-dark">
                                    <div class="card d-grid align-items-end position-relative">
                                        <img src="img/package/jasmine_package.png" class="card-img-top"
                                            alt="jasmine_package" />
                                        <div class="card-body position-absolute start-0 end-0 py-5"
                                            style="background-color: rgba(255, 255, 255, 0.667)">
                                            <h4>Jasmine Package</h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="item p-3" data-aos="zoom-in" data-aos-duration="800">
                                <a href="rose-package.html" class="text-dark">
                                    <div class="card d-grid align-items-end position-relative">
                                        <img src="img/package/rose_package.png" class="card-img-top"
                                            alt="rose_package" />
                                        <div class="card-body position-absolute start-0 end-0 py-5"
                                            style="background-color: rgba(255, 255, 255, 0.667)">
                                            <h4>Rose Package</h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="item p-3" data-aos="zoom-in" data-aos-duration="800">
                                <a href="edelweiss_package.html" class="text-dark">
                                    <div class="card d-grid align-items-end position-relative">
                                        <img src="img/package/edelweiss_package.png" class="card-img-top"
                                            alt="edelweiss_package" />
                                        <div class="card-body position-absolute start-0 end-0 py-5"
                                            style="background-color: rgba(255, 255, 255, 0.667)">
                                            <h4>Edelweiss Package</h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="item p-3" data-aos="zoom-in" data-aos-duration="800">
                                <a href="orchid-package.html" class="text-dark">
                                    <div class="card d-grid align-items-end position-relative">
                                        <img src="img/package/orchid_package.png" class="card-img-top"
                                            alt="orchid_package" />
                                        <div class="card-body position-absolute start-0 end-0 py-5"
                                            style="background-color: rgba(255, 255, 255, 0.667)">
                                            <h4>Orchid Package</h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="item p-3" data-aos="zoom-in" data-aos-duration="800">
                                <a href="cherry-blossom-package.html" class="text-dark">
                                    <div class="card d-grid align-items-end position-relative">
                                        <img src="img/package/cherry_blossom.png" class="card-img-top"
                                            alt="cherry_blossom" />
                                        <div class="card-body position-absolute start-0 end-0 py-5"
                                            style="background-color: rgba(255, 255, 255, 0.667)">
                                            <h4>Chery Blossom Package</h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- <svg
            xmlns="http://www.w3.org/2000/svg"
            style="background-color: #ddd"
            viewBox="0 0 1440 320"
          >
            <path
              fill="#EDEAE7"
              fill-opacity="1"
              d="M0,192L48,197.3C96,203,192,213,288,186.7C384,160,480,96,576,106.7C672,117,768,203,864,229.3C960,256,1056,224,1152,202.7C1248,181,1344,171,1392,165.3L1440,160L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"
            ></path>
          </svg> -->

        <!-- Logo Parallax -->
        <!-- <section class="bg-logo d-flex justify-content-center align-items-center">
            <div class="row justify-content-center">
              <div class="col-lg-7 text-center">
                <img
                  src="img/logo arunika_gold.PNG"
                  width="200"
                  height="200"
                  alt="Arunika"
                />
                <h1
                  style="
                color: #f0d06c;
                font-family: 'Salsa', cursive;
                text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
              "
                >
                  We can’t wait to make your dreams come true
                  <i class="fa-solid fa-heart"></i>
                </h1>
              </div>
            </div>
          </section> -->

        <!-- <svg
            xmlns="http://www.w3.org/2000/svg"
            style="background-color: #ddd"
            viewBox="0 0 1440 320"
          >
            <path
              fill="#EDEAE7"
              fill-opacity="1"
              d="M0,64L24,80C48,96,96,128,144,133.3C192,139,240,117,288,128C336,139,384,181,432,202.7C480,224,528,224,576,192C624,160,672,96,720,74.7C768,53,816,75,864,112C912,149,960,203,1008,202.7C1056,203,1104,149,1152,144C1200,139,1248,181,1296,192C1344,203,1392,181,1416,170.7L1440,160L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z"
            ></path>
          </svg> -->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="background-color: var(--bg)">
            <path fill="#c8ae7d" fill-opacity="1"
                d="M0,96L120,96C240,96,480,96,720,112C960,128,1200,160,1320,176L1440,192L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z">
            </path>
        </svg>
        <!-- Contact -->
        <!-- <section class="contact">
            <div class="container">
              <h2 id="scrollLocation" class="text-center mb-5">Location</h2>
              <div class="row justify-content-center">
                <div class="col-lg-8">
                  <div class="row iframe">
                    <iframe
                      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1607.3466059840616!2d106.76263910149233!3d-6.588242413503678!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5b3bb97e521%3A0x1f531ea15909e423!2sKebondjati%20coffee!5e0!3m2!1sid!2sid!4v1672382874382!5m2!1sid!2sid"
                      class="w-100"
                      height="500"
                      allowfullscreen=""
                      loading="lazy"
                      id="scrollLocation"
                      referrerpolicy="no-referrer-when-downgrade"
                    ></iframe>
                  </div>
                </div>
              </div>
            </div>
          </section> -->

        <section>
            <div class="container-fluid contact py-5">
                <div class="container py-5">
                    <div class="row g-5 mb-5">
                        <div class="col-lg-6 " data-aos="fade-left" data-aos-duration="1000">
                            <div class="text-center mx-auto pb-5" style="max-width: 800px;">
                                <p class="text-uppercase text-secondary fs-5 mb-0">Let’s Connect</p>
                                <h2 class="display-4 text-capitalize mb-3">Send Your Message</h2>
                                <p>Gunakan form di bawah ini dan costumer Service kami akan segera membantumu</p>
                                <!-- <p class="mb-0">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a class="text-primary fw-bold" href="https://htmlcodex.com/contact-form">Download Now</a>.</p> -->
                            </div>
                            <form>
                                <div class="row g-3">
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating border border-secondary">
                                            <input type="text" class="form-control" id="name"
                                                placeholder="Your Name">
                                            <label for="name">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating border border-secondary">
                                            <input type="email" class="form-control" id="email"
                                                placeholder="Your Email">
                                            <label for="email">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating border border-secondary">
                                            <input type="phone" class="form-control" id="phone"
                                                placeholder="Phone">
                                            <label for="phone">Your Phone</label>
                                        </div>
                                    </div>
                                    <!-- <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating border border-secondary">
                                            <input type="text" class="form-control" id="project" placeholder="Project">
                                            <label for="project">Your Project</label>
                                        </div>
                                    </div> -->
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating border border-secondary">
                                            <input type="text" class="form-control" id="subject"
                                                placeholder="Subject">
                                            <label for="subject">Subject</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating border border-secondary">
                                            <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 160px"></textarea>
                                            <label for="message">Message</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                            <div class="contact-map h-100 w-100">
                                <iframe class="h-100 w-100" style="height: 500px;"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d495.7868812479786!2d106.87038976664644!3d-6.224773138519009!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f37a15ce7447%3A0x9fd4ce3799807494!2sRaffi%20Pond!5e0!3m2!1sid!2sid!4v1725951494990!5m2!1sid!2sid"
                                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="row g-5">
                        <div class="col-xl-4" data-aos="fade-up" data-aos-duration="1000">
                            <div class="d-inline-flex bg-white w-100 border border-secondary p-4">
                                <i class="fas fa-map-marker-alt fa-2x text-secondary me-4"></i>
                                <div>
                                    <h4>Address</h4>
                                    <p class="mb-0">jalan pedati timur dalam</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-4" data-aos="fade-up" data-aos-duration="1000">
                            <div class="d-inline-flex bg-white w-100 border border-secondary p-4">
                                <i class="fas fa-envelope fa-2x text-secondary me-4"></i>
                                <div>
                                    <h4>Mail Us</h4>
                                    <p class="mb-0">cahayaminang@gmail.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-4" data-aos="fade-up" data-aos-duration="1000">
                            <div class="d-inline-flex bg-white w-100 border border-secondary p-4">
                                <i class="fa fa-phone-alt fa-2x text-secondary me-4"></i>
                                <div>
                                    <h4>Telephone</h4>
                                    <p class="mb-0">(+0812) 8997 5343</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="scroll-up text-end pb-4">
            <div class="container">
                <a href="#" class="button text-decoration-none"><i class="bi bi-arrow-up"></i> Scroll to top</a>
            </div>
        </section>

        <!-- <svg
          xmlns="http://www.w3.org/2000/svg"
          style="background-color: #ddd"
          viewBox="0 0 1440 320"
        >
          <path
            fill="#EDEAE7"
            fill-opacity="1"
            d="M0,192L48,208C96,224,192,256,288,250.7C384,245,480,203,576,197.3C672,192,768,224,864,240C960,256,1056,256,1152,234.7C1248,213,1344,171,1392,149.3L1440,128L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"
          ></path>
        </svg> -->

        <section class="sub-footer ">
            <div class="container ">
                <div class="row justify-content-between pt-5">
                    <!-- <div class="col-lg-3 mb-4">
                <h4>Package</h4>
                <a href="akad-package.html" class="text-decoration-none"
                  >Akad Package</a
                ><br />
                <a href="jasmine-package.html" class="text-decoration-none"
                  >Jasmine package</a
                ><br />
                <a href="rose-package.html" class="text-decoration-none"
                  >Rose Package</a
                ><br />
                <a href="edelweiss_package.html" class="text-decoration-none"
                  >Edelweiss Package</a
                ><br />
                <a href="orchid-package.html" class="text-decoration-none"
                  >Orchid Package</a
                ><br />
                <a href="cherry-blossom-package.html" class="text-decoration-none"
                  >Cherry Blossom Package</a
                >
              </div> -->
                    <div class="col-lg-3 mb-4 ">
                        <h4>Quick Links</h4>
                        <a href="#scrollHome" class="text-decoration-none">Home</a><br />
                        <a href="#scrollAbout" class="text-decoration-none">About Us</a><br />
                        <a href="#scrollGallery" class="text-decoration-none">Gallery</a><br />
                        <a href="#scrollPackage" class="text-decoration-none">Package</a><br />
                        <a href="#scrollLocation" class="text-decoration-none">Location</a>
                    </div>
                    <div class="col-lg-3 mb-4">
                        <h4>Contact Info</h4>
                        <span href="" class="text-decoration-none"><i class="fa-solid fa-phone"></i>
                            0812-8997-5343 (Admin)</span><br />
                        <a href="#scrollLocation" class="text-decoration-none"><i class="fa-solid fa-location-dot"></i>
                            Jl. Komp. Villa Ciomas,
                            Ciomas Rahayu, Kec. Ciomas, Kabupaten Bogor, Jawa Barat 16610</a><br />
                        <span class="text-decoration-none"><i class="fa-solid fa-envelope"></i>
                            arunikawedding@gmail.com</span><br />
                    </div>
                    <div class="col-lg-3 mb-4">
                        <h4>Follow Us</h4>
                        <a href="https://www.instagram.com/sanggarcahayaminang" class="text-decoration-none"><i
                                class="fa-brands fa-square-instagram"></i> Instagram</a><br />
                    </div>
                </div>
            </div>
        </section>



        <!-- Chat WhatsApp -->
        <div class="row chat-whatsapp justify-content-end fixed-bottom py-2 mx-2">
            <div class="chat text-center animate__animated animate__fadeInUpBig">
                <a href="https://api.whatsapp.com/send?phone=6282113336830&text=Ada%20yang%20bisa%20kami%20bantu?"
                    class="text-decoration-none"><i class="fa-brands fa-whatsapp fa-beat"
                        style="--fa-animation-duration: 2s"></i></a>
            </div>
        </div>
    @endsection
