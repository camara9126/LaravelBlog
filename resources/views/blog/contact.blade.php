
@include('partials.entete')

    @if(Session::has('success'))
        <div class="alert alert-success mt-3" role="alert">
            <h5 class="text-center text-success">{{ Session::get('success') }}</h5>
        </div>
    @elseif(Session::has('danger'))
        <div class="alert alert-danger mt-3" role="alert">
            <h5 class="text-center text-danger">{{ Session::get('danger') }}</h5>
        </div>
    @endif
    <!-- Start Contact Us  -->
    <div class="contact-box-main mt-5">
        <div class="container mb-5">
            <div class="row">
                <div class="col-lg-8 col-sm-12">
                    <div class="contact-form-right">
                        <h2>Parlons de Vos Objectifs et Défis !</h2>
                        <p>Que vous ayez une question, besoin de conseils personnalisés, ou que vous souhaitiez discuter de vos projets professionnels, notre équipe est à votre écoute. Remplissez le formulaire ci-dessous, et nous vous répondrons dans les plus brefs délais pour vous accompagner dans vos démarches.</p>
                        <form method="post" action="{{route('contact.store')}}" id="contactForm">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="Your Name" required data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="email" placeholder="Your Email" class="form-control" name="email" required data-error="Please enter your email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="subject" placeholder="Subject" required data-error="Please enter your Subject">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" name="message" placeholder="Your Message" rows="4" data-error="Write your message" required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <b>NB: </b><i class="text-info">Nous respectons votre vie privée et vos informations seront traitées de manière confidentielle.</i>
                                    <p>Prenez contact dès aujourd’hui et avançons ensemble vers vos objectifs !</p><br>
                                    <div class="submit-button text-center">
                                        <button class="btn btn-blue" id="submit" type="submit">Send Message</button>
                                    </div>
                                </div>
                                
                            </div>
                        </form>
                    </div>
                </div>
				<div class="col-lg-4 col-sm-12">
                    <div class="contact-info-left">
                        <h2>CONTACT INFO</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent urna diam, maximus ut ullamcorper quis, placerat id eros. Duis semper justo sed condimentum rutrum. Nunc tristique purus turpis. Maecenas vulputate. </p>
                        <ul type="none">
                            <li>
                                <p><i class="fa fa-map-marker"></i>Address: Michael I. Days 9000 <br>Preston Street Wichita,<br> KS 87213 </p>
                            </li>
                            <li>
                                <p><i class="fa fa-phone-square"></i>Phone: <a href="tel:+1-888705770">+1-888 705 770</a></p>
                            </li>
                            <li>
                                <p><i class="fa fa-envelope"></i>Email: <a href="mailto:contactinfo@gmail.com">contactinfo@gmail.com</a></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('partials.footer')