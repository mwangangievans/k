@extends('layouts.app1')

@section('content')
<div class="spacer"></div>
    <main>
        <!-- Carousel
-------------------- -->
        <section>
            <div class="container">
                <div class="row section__carousel">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="images/car_1.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="images/car_5.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="images/car_4.jpg" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row section_about">
                    <div class="col-md">
                        <h4>About Judy-K Salon</h4>
                        <br />
                        <p>Judy-K  Hair Salon is a full service men and women’s hair salon located in Meru .<br /><br /> Our professional team is current with all the latest styles and trends to provide you with your best look. We specialize
                            in Deva cuts, single-process color, highlighting, and Pintura. Stop in to schedule a consultation or book online today!
                            <br /><br /> We strive for the highest quality of service, while maintaining a fun, friendly, non-pretentious environment.</p>
                    </div>
                    <!--<div class="col-md-4"> <h5>Salon Hours</h5>-->
                    <!--<p class="footer-para">Monday 12-8 <br /> Tuesday 12-8 <br > Wednesday 10-8 <br /> Thursday 10-8 <br /> Friday 10-8 <br /> Saturday 9-6 <br /> Sunday 10-6</p>-->

                    <!--</div>-->
                </div>
            </div>
        </section>
        <section>
            <div class="container review">
                <div class="row section_review">
                    <div class="col">
                        <h3>Our Customers Love Us</h3>
                    </div>
                </div>
                <div class="row section_review">
                    <div class="col">
                        <h6>Here Are A Few Reasons Why</h6>
                    </div>

                </div>
                <hr />
                <div class="container">
                    <div class="row ">
                        <div class="col-sm-4">
                            <div class="card cust_review">
                                <p>Best salon in Meru. The stylists here are amazing and professional and we can always trust that we will receive the same great cuts and colors each time we come here. We use Errin Ferreira and Cory Gardner but I know
                                    and have used the other stylists too and they are all fantastic. Don’t go away where else, come here, you won’t be disappointed!</p>
                            </div><br />
                            <p> Peter<br /> Meru County</p>
                        </div>
                        <div class="col-sm-4 ">
                            <div class="card cust_review">
                                <p> This salon is like the All Star Game, but for hair dressers. Nicole is amazing, truly the best hairdresser and a great person. My highlights are consistently amazing. If you are looking for a new salon don’t even waste
                                    your time reading other reviews; this. is. the. one.<br /><br /></p>
                            </div><br />
                            <p>Winnie F.<br /> Mutomo, Kitui county</p>
                        </div>
                        <div class="col-sm-4 ">
                            <div class="card cust_review">
                                <p>Absolutely the best salon experience in Boston! Reasonable prices, great location, and cool atmosphere. The staff makes you feel like a friend, not just a customer. I would confidently recommend Purple to anyone, best haircut
                                    I’ve ever had.<br /><br /><br /></p>

                            </div><br />
                            <p>Faith. <br /> Nairobi County</p>
                        </div>
                    </div>
                </div>
        </section>
    </main>
@endsection
