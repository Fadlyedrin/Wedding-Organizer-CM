@extends('layouts.app')
@section('title', 'About Us')

@section('content')

    <section
      class="scrollspy-example"
      data-bs-spy="scroll"
      data-bs-target="#navbar-example2"
      data-bs-root-margin="0px 0px -40%"
      data-bs-smooth-scroll="true"
      tabindex="0"
    >
      <!-- Header -->
    <!-- <section class="header d-flex justify-content-center align-items-center"></section> -->
    <section class="parallax">
        <div class="row">
            <div class="col-lg-12 parallax-1 position-relative">
                <span class="start-0 end-0 top-0 bottom-0 position-absolute d-flex justify-content-center align-items-center" style="background-color: rgba(37, 36, 27, 0.7);">
                    <h1 class="text-light">About Us</h1>
                </span>
            </div>
        </div>
    </section>

    <section class="about p-5" style="background-color: var(--bg) !important;">
        <div class="container">
          <h2 id="scrollAbout" class="text-center mb-5">About Us</h2>
          <div class="row">
            <div class="col-lg-6 pe-4 pb-4">
              <img
                data-aos="fade-right"
                data-aos-duration="2000"
                src="https://poetrafoto.wordpress.com/wp-content/uploads/2021/03/foto-wedding-adat-padang-dg-bajudekorasi-pelaminan-pengantin-minang-di-auditorium-uny-jogja-ririnfirman.jpg"
                alt="About Us"
                class="img-fluid"
              />
            </div>
            <div class="col-lg-6 mb-4">
              <div class="row">
                <div class="col-lg-11">
                  <p
                    class="px-4"
                    data-aos="fade-left"
                    data-aos-duration="2000"
                  >
                    Sanggar Cahaya Minang adalah perusahaan yang bergerak di
                    bidang wedding, seperti catering, dekorasi pelaminan, rias &
                    busana, entertainment, photo & video, WO, MC, tarian daerah,
                    serta layanan wedding lainnya. Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci repellat repudiandae maxime, animi quis dolore earum atque iste fugiat laudantium possimus repellendus nam voluptates assumenda tenetur sed alias culpa aspernatur natus id explicabo quidem officia. Temporibus possimus aliquid quas qui obcaecati, sunt totam eius distinctio blanditiis ipsa harum alias nam.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row pt-5 mt-5">
            <div class="col-lg-6 mb-4">
              <div class="row">
                <div class="col-lg-11 ">
                  <h2 class="text-center mb-5">Visi</h2>
                  <p
                    class="px-4"
                    data-aos="fade-right"
                    data-aos-duration="2000"
                  >
                    Sanggar Cahaya Minang adalah perusahaan yang bergerak di
                    bidang wedding, seperti catering, dekorasi pelaminan, rias &
                    busana, entertainment, photo & video, WO, MC, tarian daerah,
                    serta layanan wedding lainnya. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, esse quisquam? Optio, quo, praesentium beatae nihil est in aliquid tenetur impedit molestias cumque nulla sunt, expedita ea enim vel assumenda reprehenderit facilis non. Nesciunt nostrum provident perferendis autem porro laborum earum totam iusto ab voluptate facilis, similique sequi, accusantium amet.
                  </p>
                </div>
                <div class="col-lg-11 pt-3">
                  <h2 class="text-center mb-5">Misi</h2>
                  <p
                    class="px-4"
                    data-aos="fade-right"
                    data-aos-duration="2000"
                  >
                    Sanggar Cahaya Minang adalah perusahaan yang bergerak di
                    bidang wedding, seperti catering, dekorasi pelaminan, rias &
                    busana, entertainment, photo & video, WO, MC, tarian daerah,
                    serta layanan wedding lainnya. Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis cum a in eos exercitationem vel reprehenderit placeat praesentium voluptas nobis, est sequi aut eligendi quis, autem dolores quaerat, provident culpa corrupti ad aspernatur tempora laudantium delectus aperiam! Assumenda, inventore cumque, qui animi sunt, porro minima sint eos obcaecati at vero!
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center">
              <img
                data-aos="fade-left"
                data-aos-duration="2000"
                src="https://poetrafoto.wordpress.com/wp-content/uploads/2021/03/foto-wedding-adat-padang-dg-bajudekorasi-pelaminan-pengantin-minang-di-auditorium-uny-jogja-ririnfirman.jpg"
                alt="About Us"
                class="img-fluid"
              />
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
