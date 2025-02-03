@extends('layouts.app')
@section('title', 'Package')

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
                    <h1 class="text-light">Package</h1>
                </span>
            </div>
        </div>
    </section>
      <!-- Header -->
    <!-- <section class="header d-flex justify-content-center align-items-center"></section> -->
        <!-- catalogue section -->
    <div class="catalogue pb-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <div class="mb-5 fw-bold">
              <h2 class="text-uppercase">Package</h2>
            </div>
          </div>
        </div>
        <ul class="catalogue_filter">
          <li>
            <a class="is_active text-decoration-none" href="#!" data-filter="*">Show All</a>
          </li>
          <li>
            <a href="#!" class="text-decoration-none" data-filter=".wedding">Wedding</a>
          </li>
          <li>
            <a href="#!" class="text-decoration-none" data-filter=".Makeup">Makeup</a>
          </li>
          <li>
            <a href="#!" class="text-decoration-none" data-filter=".Akad">Akad Nikah</a>
          </li>
        </ul>
        <div class="row catalogue_box">
          <div class="col-lg-4 col-md-6 align-self-center mb-3 catalogue_outer wedding">
            <div class="catalogue_item">
              <div class="thumb">
                <a href="detail_paket.html"><img src="https://i.pinimg.com/736x/b1/9a/87/b19a87b1d16ad34c3c6ebefe388851be.jpg" alt=""></a>
                <!-- <span class="category">All in One</span> -->
              </div>
              <div class="down-content">
                <h4>All in One Package</h4>
                <p>Rp. 200.000.000</p>
                <a href="#" class="detail">Detail klik disini</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 align-self-center mb-3 catalogue_outer Makeup">
            <div class="catalogue_item">
              <div class="thumb">
                <a href="#"><img src="https://i.pinimg.com/736x/b1/9a/87/b19a87b1d16ad34c3c6ebefe388851be.jpg" alt=""></a>
                <!-- <span class="category">Makeup</span> -->
              </div>
              <div class="down-content">
                <h4>Intimate Package</h4>
                <p>Rp. 100.000.000</p>
                <a href="#" class="detail">Detail klik disini</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 align-self-center mb-3 catalogue_outer Akad">
            <div class="catalogue_item">
              <div class="thumb">
                <a href="#"><img src="https://i.pinimg.com/736x/b1/9a/87/b19a87b1d16ad34c3c6ebefe388851be.jpg" alt=""></a>
                <!-- <span class="category">Organize Only</span> -->
              </div>
              <div class="down-content">
                <h4>Organize Only Package</h4>
                <p>Rp. 50.000.000</p>
                <a href="#" class="detail">Detail klik disini</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 align-self-center mb-3 catalogue_outer Akad">
            <div class="catalogue_item">
              <div class="thumb">
                <a href="#"><img src="https://i.pinimg.com/736x/b1/9a/87/b19a87b1d16ad34c3c6ebefe388851be.jpg" alt=""></a>
                <!-- <span class="category">Organize Only</span> -->
              </div>
              <div class="down-content">
                <h4>Organize Only Package</h4>
                <p>Rp. 50.000.000</p>
                <a href="#" class="detail">Detail klik disini</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 align-self-center mb-3 catalogue_outer Akad">
            <div class="catalogue_item">
              <div class="thumb">
                <a href="#"><img src="https://i.pinimg.com/736x/b1/9a/87/b19a87b1d16ad34c3c6ebefe388851be.jpg" alt=""></a>
                <!-- <span class="category">Organize Only</span> -->
              </div>
              <div class="down-content">
                <h4>Organize Only Package</h4>
                <p>Rp. 50.000.000</p>
                <a href="#" class="detail">Detail klik disini</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


        <!-- Chat WhatsApp -->
        <div class="row chat-whatsapp justify-content-end fixed-bottom py-2 mx-2">
            <div class="chat text-center animate__animated animate__fadeInUpBig">
                <a href="https://api.whatsapp.com/send?phone=6282113336830&text=Ada%20yang%20bisa%20kami%20bantu?"
                    class="text-decoration-none"><i class="fa-brands fa-whatsapp fa-beat"
                        style="--fa-animation-duration: 2s"></i></a>
            </div>
        </div>
    @endsection

    @push('js')
        <script>
    document.addEventListener('DOMContentLoaded', function() {
    // Initial show all items
    document.querySelectorAll('.catalogue_outer').forEach(item => item.style.display = 'block');

    const filters = document.querySelectorAll('.catalogue_filter a');
    filters.forEach(filter => {
        filter.addEventListener('click', function(event) {
            event.preventDefault();

            // Remove is_active class from all filters
            filters.forEach(f => f.classList.remove('is_active'));

            // Add is_active class to the clicked filter
            this.classList.add('is_active');

            const filterValue = this.getAttribute('data-filter');
            const items = document.querySelectorAll('.catalogue_outer');

            // Show or hide items based on the filter
            if (filterValue === '*') {
                items.forEach(item => item.style.display = 'block');
            } else {
                items.forEach(item => {
                    if (item.classList.contains(filterValue.substring(1))) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            }
        });
    });
});

</script>
    @endpush
