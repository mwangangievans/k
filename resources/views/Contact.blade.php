@extends('layouts.app1')

@section('content')
<div class="spacer"></div>
    <main>
        <div class="container">
            
            <div class="row contact-headding-row">
                
                <div class="col-sm">
                    <img src="images/purple.jpg" alt="a_hairtreatment_img"></img>
                </div>
                <div class="col-sm cont-headding">
                    <h4>Contact Us</h4>
                    <p class="contact-para">Please share with us any thoughts that you may have about your experience. If you would like a call back please be sure to include your phone number and we will contact you back.
                        <br /><br /> To schedule an appointment with one of our stylists give us a call.
                    </p>
                </div>
                
            </div>
            

        </div>
        <hr />
<div class="container">
    <div class="row contact-form-row">
        <div class="formfill col-sm">
            <p>* indicates required field</p>
            <form action="#">
<label for="name">Name:*</label><br> <input type="text" name="name" required><br><br>
<label for="email">Email:*</label><br> <input type="text" name="email" required><br><br>
<label for="subject">Subject:*</label><br> <input type="text" name="subject" required><br><br>
<label for="message">Message:*</label><br><textarea rows="4" cols="30" name="message" required></textarea><br>
<br>
<input type="submit" value="Submit">
</form>
        </div>
        <br>
        <div class="location col-sm">
           <h5>Location</h5> <br>
           <p><span class="hvr-icon-hang"><i class="fas fa-map-marker-alt hvr-icon"></i></span> &nbsp  667A Imenti Street Meru, MA 02118</p><br>
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2949.0299612882905!2d-71.07810138454431!3d42.34188457918814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e37a1371bcafdf%3A0xf97a764ea2f83a81!2s667a+Tremont+St%2C+Boston%2C+MA+02118%2C+USA!5e0!3m2!1sen!2sie!4v1538470985637" width="350" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div><br>
        <div class="hours col-sm">
           <h5>Salon Hours</h5> <br>
           <p>Monday 8 AM - 8 PM <br> 
           <hr>  Tuesday 8 AM - 8 PM <br> <hr>Wednesday 8 AM - 8 PM <br><hr> Thursday 8 AM - 8 PM <br><hr> Friday 8 AM - 8 PM <br><hr> Saturday 9 AM - 6PM <br><hr> Sunday 10 AM - 6 PM</p>
           <p>P: 617.236.4449</p>
           <p>E: pstudio@purpleboston.com</p>
           </div>
    </div>
</div>
    </main>

@endsection