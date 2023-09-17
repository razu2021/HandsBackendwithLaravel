@extends('layouts.master')
@section('content')
<!-- === content start here ============================= -->
<section class="sectionbg2 pb-5 pt-5">
<div class="container-fluid mt-3 mb-5">
    <!-- Section: Block Content -->
    <section class="mb-4">
      <div class="card">
        <div class="row">
          <div class="col-10 col-md-4 mx-auto align-self-center py-4  col-lg-10" >>
            <div class="section_content text-center">
                <h1 class="pt-2 pb-2"> where we work </h1>
            </div>
            <div class="accordion" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-mdb-toggle="collapse"
                      data-mdb-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                      Dhaka Division
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne">
                    <div class="accordion-body">
                      <strong>This is the first item's accordion body.</strong> It is shown by default,
                      until the collapse plugin adds the appropriate classes that we use to style each
                      element. These classes control the overall appearance, as well as the showing and
                      hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                      our default variables. It's also worth noting that just about any HTML can go within
                      the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse"
                      data-mdb-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                      aria-controls="panelsStayOpen-collapseTwo">
                      Rangpur Division 
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo">
                    <div class="accordion-body">
                      <strong>This is the second item's accordion body.</strong> It is hidden by default,
                      until the collapse plugin adds the appropriate classes that we use to style each
                      element. These classes control the overall appearance, as well as the showing and
                      hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                      our default variables. It's also worth noting that just about any HTML can go within
                      the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse"
                      data-mdb-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                      aria-controls="panelsStayOpen-collapseThree">
                      Rajshahi Division 
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree">
                    <div class="accordion-body">
                      <strong>This is the third item's accordion body.</strong> It is hidden by default,
                      until the collapse plugin adds the appropriate classes that we use to style each
                      element. These classes control the overall appearance, as well as the showing and
                      hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                      our default variables. It's also worth noting that just about any HTML can go within
                      the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Section: Block Content -->
  </div>
</section>
<!-- map -->
<section>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="ourmap">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.782082134252!2d90.37892627577766!3d23.755149188593244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b939a3e2fafb%3A0xaa239ede1a79e04c!2sMd%20Razu%20Hossain%20Raj!5e0!3m2!1sen!2sbd!4v1685081673089!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection 