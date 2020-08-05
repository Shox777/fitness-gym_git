@extends('layouts.app')

@section('content')
<section class="about section" id="about">
    <div class="container">
         <div class="row">

                 <div class="mt-lg-5 mb-lg-0 mb-4 col-lg-5 col-md-10 mx-auto col-12">
                     <h2 class="mb-4" data-aos="fade-up" data-aos-delay="300">Hello {{Auth::user()->name}} , wellcome to <span style="color: #ed563b;">STUDIO </span> GYM</h2>

                     <p data-aos="fade-up" data-aos-delay="400">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione voluptas facere beatae, animi vel, saepe eveniet incidunt obcaecati fuga illum, expedita necessitatibus distinctio cumque excepturi.</p>

                     <p data-aos="fade-up" data-aos-delay="500">If you have any question regarding <a rel="nofollow" href="https://www.tooplate.com/view/2119-gymso-fitness" target="_parent">Training Studio Fitness Club</a>, you can <a rel="nofollow" href="#" target="_parent">contact Link</a> immediately. Thank you.</p>

                 </div>

                 <div class="ml-lg-auto col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="700">
                     <div class="team-thumb">
                         <img src="profileAsset/images/team/team-image.jpg" class="img-fluid" alt="Trainer">

                         <div class="team-info d-flex flex-column">

                             <h3>Mary Yan</h3>
                             <span>Yoga Instructor</span>

                             <ul class="social-icon mt-3">
                                 <li><a href="#" class="fa fa-twitter"></a></li>
                                 <li><a href="https://www.instagram.com/iamtv.fit/" class="fa fa-instagram"></a></li>
                             </ul>
                         </div>
                     </div>
                 </div>

                 <div class="mr-lg-auto mt-5 mt-lg-0 mt-md-0 col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="800">
                     <div class="team-thumb">
                         <img src="profileAsset/images/team/team-image01.jpg" class="img-fluid" alt="Trainer">

                         <div class="team-info d-flex flex-column">

                             <h3>Andrei Deiu</h3>
                             <span>Body trainer</span>

                             <ul class="social-icon mt-3">
                                 <li><a href="https://www.instagram.com/andreideiu_/" class="fa fa-instagram"></a></li>
                                 <li><a href="#" class="fa fa-facebook"></a></li>
                             </ul>
                         </div>
                     </div>
                 </div>

         </div>
    </div>
</section>


<!-- CLASS -->
<section class="class section" id="class">
    <div class="container">
         <div class="row">

                 <div class="col-lg-12 col-12 text-center mb-5">
                     <h6 data-aos="fade-up">Get A Perfect Body</h6>

                     <h2 data-aos="fade-up" data-aos-delay="200">Our Training Classes</h2>
                  </div>

                 <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                     <div class="class-thumb">
                         <img src="profileAsset/images/class/yoga-class.jpg" class="img-fluid" alt="Class">

                         <div class="class-info">
                             <h3 class="mb-1">Yoga</h3>

                             <span><strong>Trained by</strong> - Bella</span>

                             <span class="class-price">$50</span>

                             <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                         </div>
                     </div>
                 </div>

                 <div class="mt-5 mt-lg-0 mt-md-0 col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="500">
                     <div class="class-thumb">
                         <img src="profileAsset/images/class/crossfit-class.jpg" class="img-fluid" alt="Class">

                         <div class="class-info">
                             <h3 class="mb-1">Areobic</h3>

                             <span><strong>Trained by</strong> - Mary</span>

                             <span class="class-price">$66</span>

                             <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                         </div>
                     </div>
                 </div>

                 <div class="mt-5 mt-lg-0 col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="600">
                     <div class="class-thumb">
                         <img src="profileAsset/images/class/cardio-class.jpg" class="img-fluid" alt="Class">

                         <div class="class-info">
                             <h3 class="mb-1">Cardio</h3>

                             <span><strong>Trained by</strong> - Cathe</span>

                             <span class="class-price">$75</span>

                             <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                         </div>
                     </div>
                 </div>

         </div>
    </div>
</section>
<!-- ***** Footer Start ***** -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; 2020 Training Studio
                
                - Designed by <a rel="nofollow" href="#" class="tm-text-link" target="_parent">User Name</a></p>
                                    
            </div>
        </div>
    </div>
</footer>
@endsection
