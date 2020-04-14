<?php include 'header.php' ?>

<!--start hero area-->
<section id="hero-area" class="bg-3 bg-cover" data-scroll-index="0">
    <div class="container">
        <div class="row">
            <!--start hero content-->
            <div class="col-lg-7 col-md-6">
                <div class="hero-content dark">
                    <p class="text-light font-weight-normal">"THY FRIEND HAS A FRIEND, AND THY FRIEND'S FRIEND HAS A
                        FRIEND. BE DISCREET." <i>~RA'S AL GHUL</i><br>JUST LIKE THE BATMAN.<br>PROFESSOR BATMAN IS
                        HERE TO ANONYMOUSLY BE YOUR ACADEMIC HERO.<br>YOUR CONFIDENCE IN US IS NOT MISPLACED.</p>
                    <div class="hero-down-icons">
                        <a href="#"><i class="icofont-instagram"></i></a><a href="#"><i class="icofont-twitter"></i></a>
                    </div>
                </div>
            </div>
            <!--end hero content-->
            <!--start hero image-->
            <div class="col-lg-5 col-md-6">
                <div class="hero-image dark text-center">
                    <div style="background-color: #2c2d36;
                        border: 2px solid #fff;
                        padding:10px; 
                        border-radius:10px;">

                        <h3 style="color: #fff; border-bottom: 1px solid #ffd700;">PRICE CALCULATOR</h3>

                        <form id="calcForm" action="/action_page.php">

                            <label style="color: #fff" for="sel1">Currency</label>
                            <select class="form-control" id="sel1">
                                <option>USD</option>
                            </select>

                            <label style="color: #fff" for="sel1">Academic Level</label>
                            <select class="form-control" id="academicLevel" onchange="prePrice()">
                                <option value="1" selected="">HighSchool</option>
                                <option value="2">Undergraduate</option>
                                <option value="3">Master</option>
                                <option value="4">PHD</option>
                            </select>

                            <label style="color: #fff" for="sel1">Type of Paper</label>
                            <select class="form-control" id="sel1">
                                <optgroup label="&nbsp;Essays">
                                    <option value="Annotated Bibliography" selected="">Annotated Bibliography
                                    </option>
                                    <option value="Argumentative Essay">Argumentative Essay</option>
                                    <option value="Article">Article</option>
                                    <option value="Article review">Article review</option>
                                    <option value="Biography">Biography</option>
                                    <option value="Book review">Book review</option>
                                    <option value="Business plan">Business plan</option>
                                    <option value="Case study">Case study</option>
                                    <option value="Course work">Course work</option>
                                    <option value="Creative writing">Creative writing</option>
                                    <option value="Critical thinking">Critical thinking</option>
                                    <option value="Essay">Essay</option>
                                    <option value="Literature review">Literature review</option>
                                    <option value="Movie review">Movie review</option>
                                    <option value="Presentation">Presentation</option>
                                    <option value="Report">Report</option>
                                    <option value="Research paper">Research paper</option>
                                    <option value="Research proposal">Research proposal</option>
                                    <option value="Term paper">Term paper</option>
                                    <option value="Thesis">Thesis</option>
                                    <option value="Thesis proposal">Thesis proposal</option>
                                    <option value="Thesis statement">Thesis statement</option>
                                </optgroup>

                                <optgroup label="&nbsp;Dissertation">
                                    <option value="Dissertation">Dissertation</option>
                                    <option value="Dissertation abstract">Dissertation abstract</option>
                                    <option value="Dissertation chapter">Dissertation chapter</option>
                                    <option value="Dissertation conclusion">Dissertation conclusion</option>
                                    <option value="Dissertation hypothesis">Dissertatiopn hypothesis
                                    </option>
                                    <option value="Dissertation introduction">Dissertation introduction
                                    </option>
                                    <option value="Dissertation methodology">Dissertation methodology
                                    </option>
                                    <option value="Dissertation proposal">Dissertation proposal</option>
                                    <option value="Dissertation results">Dissertation results</option>
                                </optgroup>

                                <optgroup label="&nbsp;Problem">
                                    <option value="Problem solving">Problem solving</option>
                                </optgroup>

                                <optgroup label="&nbsp;Admission">
                                    <option value="Admission essay">Admission essay</option>
                                    <option value="Application letter">Application letter</option>
                                    <option value="Cover letter">Cover letter</option>
                                    <option value="Curriculum vitae">Curriculum vitae</option>
                                    <option value="Personal statement">Personal statement</option>
                                    <option value="Resume">Resume</option>
                                </optgroup>

                            </select>



                            <label style="color: #fff" for="sel1">Deadline</label>
                            <select class="form-control" id="urgency" onchange="prePrice()">
                                <option value="1" selected="">14 days</option>
                                <option value="2">10 days</option>
                                <option value="3">7 days</option>
                                <option value="4">5 days</option>
                                <option value="5">3 days</option>
                                <option value="6">2 days</option>
                                <option value="7">24 hours</option>
                                <option value="8">12 hours</option>
                            </select>

                            <div class="form-group">
                                <label style="color: #fff" for="Pages">Pages:</label>
                                <input type="number" class="form-control" onchange="prePrice()" id="Pages" required
                                    value="1" min="1" max="400" step="1">
                            </div>
                            <div
                                style="width:auto;height:60px;border:2px solid #ffd700;margin-bottom:10px; background-color:#121954; border-radius: 50px;">
                                <h4 style="font-size:15px; color:#fff; padding-bottom:5px;">Total Price :<br><span
                                        id="prePrice"></span>
                                </h4>
                            </div>

                            <button type="submit" class="btn btn-warning pull-right"
                                style="border-radius: 50px;">Continue to
                                Order</button>
                        </form>

                    </div>
                </div>
            </div>
            <!--end hero content-->
        </div>
    </div>
</section>
<!--end hero area-->
<!--start download info area-->
<section id="download-info-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="row">
                    <!--start download info single-->
                    <div class="col-md-4 col-4">
                        <div class="download-info-single dark">
                            <div class="icon float-left"><i class="icofont-bat"></i></div>
                            <div class="content float-left">
                                <h2>7000 +</h2>
                                <h5 class="text-light font-weight-normal">Projects Completed</h5>
                            </div>
                        </div>
                    </div>
                    <!--end download info single-->
                    <!--start download info single-->
                    <div class="col-md-4 col-4">
                        <div class="download-info-single dark">
                            <div class="icon float-left"><i class="icofont-bat"></i></div>
                            <div class="content float-left">
                                <h2>600 +</h2>
                                <h5 class="text-light font-weight-normal">Students Assisted</h5>
                            </div>
                        </div>
                    </div>
                    <!--end download info single-->
                    <!--start download info single-->
                    <div class="col-md-4 col-4">
                        <div class="download-info-single dark">
                            <div class="icon float-left"><i class="icofont-bat"></i></div>
                            <div class="content float-left">
                                <h2>TEXT</h2>
                                <h5 class="text-light font-weight-normal">Text: +1 (413) 461-0009</h5>
                            </div>
                        </div>
                    </div>
                    <!--end download info single-->
                </div>
            </div>
        </div>
    </div>
</section>
<!--end download info area-->
<!--start about area-->
<section id="about-area" class="bg-dark">
    <div class="container">
        <div class="row">
            <!--start section heading-->
            <div class="col-lg-8 offset-lg-2">
                <div class="section-heading text-center">
                    <h2 class="text-white">About US</h2>
                    <p class="text-light font-weight-normal">ProfessorBatman.com is a reputable virtual academic
                        service provider. We are comprised of a team of qualified superhero academic professionals
                        specializing in different fields of study. We believe in customer satisfaction in order to
                        keep and maintain our clientele.
                        <br>Our work ethic is of the highest standard; we maintain the highest threshold of
                        professionalism. Quality assurance is guaranteed. Ownership rights of any material is
                        immediately transferred to the client upon due delivery of the assigned
                        project.</p>
                    <p class="text-light font-weight-normal">Why would you be robin yourself of the peace of mind to
                        create lifetime memories with friends and at the same time, score excellent academic grades?
                        Holy mackerel!!<br>
                        Don’t be a joker
                    </p>
                </div>
            </div>
            <!--end section heading-->
        </div>
    </div>
</section>
<!--end about area-->


<!--start features area-->
<section id="features-area" class="bg-2 bg-cover" data-scroll-index="1">
    <div class="container">
        <div class="row">
            <!--start section heading-->
            <div class="col-lg-6">
                <div class="section-heading text-center">
                    <h2 class="text-white">HOW IT WORKS</h2>
                </div>
            </div>
            <!--end section heading-->
        </div>
        <div class="row">
            <!--start features items area-->
            <div class="col-lg-6 col-md-6">
                <!--start features single-->
                <div class="features-single v3">
                    <a data-owl-item="1" class="feature-link active">
                        <div class="icon">
                            <i class="icofont-send-mail"></i>
                        </div>
                        <div class="content">
                            <h4 class="text-white">Submit Your Assignment</h4>
                            <p class="text-light font-weight-normal">Fill out the ORDER FORM with specific
                                instructions as provided by your professor. The more detailed your instructions are,
                                the more accurate the final paper will be.</p>
                        </div>
                    </a>
                </div>
                <!--end features single-->
                <!--start features single-->
                <div class="features-single v3">
                    <a data-owl-item="2" class="feature-link">
                        <div class="icon">
                            <i class="icofont-notepad"></i>
                        </div>
                        <div class="content">
                            <h4 class="text-white">Writing Process</h4>
                            <p class="text-light font-weight-normal">The right expert is assigned to write your
                                paper. Each order is written from scratch and verified by a separate internal
                                independent editor who thoroughly checks the material to ensure the final paper is
                                plagiarism free and satisfies all underlying client instructions.</p>
                        </div>
                    </a>
                </div>
                <!--end features single-->
                <!--start features single-->
                <div class="features-single v3">
                    <a data-owl-item="3" class="feature-link">
                        <div class="icon">
                            <i class="icofont-download"></i>
                        </div>
                        <div class="content">
                            <h4 class="text-white">Receive your paper</h4>
                            <p class="text-light font-weight-normal">The complete paper is sent to the E-Mail
                                provided in the order form.</p>
                        </div>
                    </a>
                </div>
                <!--end features single-->
            </div>
            <!--end features items area-->

            <!--start features carousel-->
            <div class="col-lg-4 offset-lg-2 col-md-6">
                <div class="batservices-card">
                    <div class="container">
                        <h4 class="text-white">BatServices</h4>
                        <ul class="text-white">
                            <li>Essay Writing (Any type)</li>
                            <li>Research Ppaer Writing</li>
                            <li>Course Work</li>
                            <li>Math Help</li>
                            <li>Powerpoint Prsentation</li>
                            <li>Book/Movie Riview</li>
                            <li>Thesis Help</li>
                            <li>Dissertation</li>
                        </ul>
                        <h4 class="text-white">BatFreebies</h4>
                        <ul class="text-white">
                            <li>Free Title Page</li>
                            <li>Free Outline</li>
                            <li>Free Academic Formating</li>
                            <li>Free Reference Page</li>
                            <li>Free unlimited Revisions</li>
                        </ul>
                        <h4 class="text-white">BatGuarantee</h4>
                        <ul class="text-white">
                            <li>Free Title Page</li>
                            <li>100% Plagiarism Free Material</li>
                            <li>Safe and secure payment</li>
                            <li>24/7 awesome superhero support team</li>
                            <li>Free unlimited Revisions</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--end features carousel-->
        </div>
    </div>
</section>
<!--end features area-->

<!-- Start Bat Confidential -->
<section id="batconfidential-area" class="bg-2 bg-cover" data-scroll-index="1">
    <div class="container">
        <div class="row">
            <!--start info area-->
            <div class="col-lg-8 offset-lg-2">
                <div class="batconfidential-card">
                    <div class="container">
                        <h4 class="text-white">BatConfidential</h4>
                        <p class="text-light font-weight-normal">Don’t be a Joker!!! Professor Batman is here to
                            anonymously be your academic hero.
                            Discretion and privacy is assured.</p>
                    </div>
                </div>
                <div class="watch-btns v3">
                    <a href="#"><i class="icofont-phone"></i> Contact Us</a>
                </div>
            </div>
            <!--end info area-->
        </div>
    </div>
</section>
<!-- End Batconfidential -->

<!--start contact area-->
<section id="contact-area" class="bg-2 bg-dark-2 bg-cover" data-scroll-index="7">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6">
                <div class="section-heading">
                    <h2 class="text-white">Get in Touch</h2>
                    <p class="text-light">Got questions? We’re here to help you out if you’re experiencing any
                        issues or if you’re just curious about things.</p>
                </div>
                <!--start contact form-->
                <div class="contact-form v2">
                    <form id="ajax-contact" action="#" method="post">
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email*"
                                required="required" data-error="valid email is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Your name*"
                                required="required" data-error="name is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="message" name="message" placeholder="How can we help?"
                                required="required" data-error="Please, leave us a message."></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                        <button type="submit">Submit</button>
                        <div class="messages"></div>
                    </form>
                </div>
                <!--end contact form-->
            </div>
        </div>
        <div class="row">
            <!--start contact info single-->
            <div class="col-lg-3 col-md-4">
                <div class="contact-info-single">
                    <p class="text-light">Batman Virtual University, <br>Springfield, Massachusetts.</p>
                </div>
            </div>
            <!--end contact info single-->
        </div>
    </div>
    <div class="map-pin dark">
        <span class="marker"></span>
        <span class="marker two"></span>
        <span class="marker three"></span>
    </div>
</section>
<!--end contact area-->

<!-- pre-Calculator Js -->
<script src="assets/js/preCalc.js"></script>
<?php include 'footer.php' ?>