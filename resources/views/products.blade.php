@extends('layouts.app1')

@section('content')
<div class="spacer"></div>
    <main>
        <div class="container">
            <div class="row product-img-row">
                <div class="col">
                <img src="{{url('/images/products.jpg')}}" alt="a_product_img"/>
                    
                </div>
            </div>
            <div class="row product-headding-row">
                <div class="col">
                    <h3>Salon Products</h3>
                </div>
            </div>
            <div class="row product-para-row">
                <div class="col">
                    <p>The stylists at Purple studio Hair Salon stay current on all the latest hairstyling trends. To achieve the best look possible for you we use only the industries top quality products. Our product lines include:</p>
                </div>
            </div>

        </div>
        <div class="container">
            <div class="row product_logo_row">
                <div class="col-sm-4">
                    <a class="card hvr-ripple-out product_logo" href="https://www.devacurl.com/" target="_blank">
                    <img src="{{url('/images/deva.jpg')}}" alt="devaCurl_logo"/>
		
	</a>
                </div>
                <div class="col-sm-4">

                    <a class="card hvr-ripple-out product_logo " href="https://www.wella.com/professional/countryselector" target="_blank"> 
                            
                              <img src="{{url('/images/logo-wella.jpg')}}" alt="wella_logo"/>
                              </a>

                </div>
                <div class="col-sm-4">

                    <a class="card hvr-ripple-out product_logo " href="https://www.sebastianprofessional.com/en-EN/home" target="_blank"> 
                             
                              <img src="{{url('/images/sebastianlogo.jpg')}}" alt="sebastian_logo"/>
                              </a>

                </div>
            </div>
            <div class="row product_logo_row">
                <div class="col-sm-4">

                    <a class="card hvr-ripple-out product_logo " href="https://www.goldwell.us/" target="_blank">  
                            
                              <img src="{{url('/images/godwell.png')}}" alt="goldwell_logo"/>
                              </a>
                </div>
                <div class="col-sm-4">

                    <a class="card hvr-ripple-out product_logo " href="https://www.americancrew.com/" target="_blank"> 
                               <img src="{{url('/images/american-crew-logo.jpg')}}" alt="amrCrew_logo"/>
                               </a>
                </div>
                <div class="col-sm-4">

                    <a class="card hvr-ripple-out product_logo " href="https://www.lomahaircare.com/" target="_blank">
                                  
                                    <img src="{{url('/images/Loma_Organic_Logo_b761.jpg')}}" alt="loma_logo"/>
                                    </a>
                </div>
            </div>
        </div>
    </main>

@endsection