<?php include 'header.php';
?> <section id="hero-area" class="bg-3 bg-cover" data-scroll-index="0">
    <div class="container">
        <div class="row calcDetails">
            <div class="col-sm-10" style="background-color: #2c2d36;
                padding:10px; 
                border-radius:10px;border:3px solid #ffd700;">
                <h3 style="color: #fff; text-align: center;">ORDER DETAILS</h3>
                <form id="mainCalc" action="ordersuccess" class="needs-validation" method="post">
                    <div class=" row">
                        <div class="col-sm">
                            <div class="form-group">
                                <label class="formLabel">First Name</label>
                                <input class="form-control" type="text" name="fname">
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group">
                                <label class="formLabel">Last Name</label>
                                <input class="form-control" type="text" name="lname">
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group">
                                <label class="formLabel">Email *</label>
                                <input class="form-control" type="text" name="email" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <div class="form-group">
                                <label class="formLabel">Topic *</label>
                                <input class="form-control" type="text" name="topic" required>
                            </div>
                        </div>
                        <div class="col-sm">
                            <label class="formLabel">Type of Paper *</label>
                            <select class="form-control" id="sel1" name="paperType">
                                <optgroup label="&nbsp;Essays">
                                    <option value="Annotated Bibliography" selected="">Annotated Bibliography </option>
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
                                    <option value="Dissertation hypothesis">Dissertatiopn hypothesis</option>
                                    <option value="Dissertation introduction">Dissertation introduction</option>
                                    <option value="Dissertation methodology">Dissertation methodology</option>
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
                        </div>
                        <div class="col-sm">
                            <label class="formLabel">Work Type *</label>
                            <select class="form-control" name="workType" id="workType" onchange="totalPrice()">
                                <option value="1">Writing from scratch</option>
                                <option value="2">Proofreading</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <div class="form-group">
                                <label class="formLabel">Course Unit Title</label>
                                <input class="form-control" type="text" name="unitTitle">
                            </div>
                        </div>
                        <div class="col-sm">
                            <label class="formLabel">Course Unit Code</label>
                            <input class="form-control" type="text" name="unitCode">
                        </div>
                        <div class="col-sm">
                            <div class="form-group">
                                <label class="formLabel">Subject area *</label>
                                <select class="form-control" name="subjectArea" id="subject" onchange="totalPrice()">
                                    <option value="Arts">Arts</option>
                                    <option value="Biology">Biology and Life Sciences</option>
                                    <option value="Business">Business</option>
                                    <option value="Business Maanagment">Business and Management</option>
                                    <option value="1">Chemistry</option>
                                    <option value="2">Computer Science</option>
                                    <option value="Economics">Economics</option>
                                    <option value="Education">Education</option>
                                    <option value="English">English</option>
                                    <option value="Environmental Science">Environmental Science</option>
                                    <option value="Finance, Accounting and Banking">Finance, Accounting and Banking
                                    </option>
                                    <option value="Geography">Geography</option>
                                    <option value="Healthcare and Nursing">Healthcare and Nursing</option>
                                    <option value="History and Anthropology">History and Anthropology</option>
                                    <option value="HRM">HRM</option>
                                    <option value="International Relations">International Relations</option>
                                    <option value="3">IT</option>
                                    <option value="Law">Law</option>
                                    <option value="Literature">Literature</option>
                                    <option value="Marketing and PR">Marketing and PR</option>
                                    <option value="4">Maths</option>
                                    <option value="Philosophy">Philosophy</option>
                                    <option value="Physics">Physics</option>
                                    <option value="Political Science">Political Science</option>
                                    <option value="Psychology">Psychology</option>
                                    <option value="Sociology">Sociology</option>
                                    <option value="Statistics">Statistics</option>
                                    <option value="Other- Include">Other- Include</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class=" row">
                        <div class="col-sm">
                            <label class="formLabel">Academic Level *</label>
                            <select class="form-control" name="academicLevel" id="academicLevel"
                                onchange="totalPrice()">
                                <option value="1" selected="">HighSchool</option>
                                <option value="2">Undergraduate</option>
                                <option value="3">Master</option>
                                <option value="4">PHD</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <label class="formLabel">Paper Format *</label>
                            <select class="form-control" name="paperFormat" id="sel1">
                                <option value="APA" selected="">APA</option>
                                <option value="Chicago">Chicago</option>
                                <option value="Havard">Harvard</option>
                                <option value="MLA">MLA</option>
                                <option value="Turabian">Turabian</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <div class="form-group">
                                <label class="formLabel" for="Pages">Preferred English *</label>
                                <select class="form-control" name="preferedEnglish" id="sel1">
                                    <option value="US" selected="">US</option>
                                    <option value="UK">UK English</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group">
                                <label class="formLabel">Phone Number</label>
                                <input class="form-control" type="text" name="phoneNumber">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8">
                            <div class=form-group>
                                <label class="formLabel">Paper Instructions *</label>
                                <textarea class="form-control" name="instructions" rows="3" required>
                              </textarea>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="formLabel">Attach paper documents</label>
                                <input type="file" class="form-control" name="file">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <label class="formLabel">Number of sources</label>
                            <input class="form-control" type="number" min="1" name="sources">
                        </div>
                        <div class="col-sm">
                            <label class="formLabel">Spacing *</label>
                            <select class="form-control" name="spacing" id="spacing" onchange="totalPrice()">
                                <option value="1" selected="">Double Spacing</option>
                                <option value="2">Single Spacing</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <div class="form-group">
                                <label class="formLabel" for="Pages">Pages *</label>
                                <input type="number" name="pages" class="form-control" id="Pages" required value="1"
                                    min="1" max="400" step="1" onchange="totalPrice()">
                            </div>
                        </div>
                        <div class="col-sm">
                            <label class="formLabel">Urgency *</label>
                            <select class="form-control" name="urgency" id="urgency" onchange="totalPrice()">
                                <option value="1" selected="">14 days</option>
                                <option value="2">10 days</option>
                                <option value="3">7 days</option>
                                <option value="4">5 days</option>
                                <option value="5">3 days</option>
                                <option value="6">2 days</option>
                                <option value="7">24 hours</option>
                                <option value="8">12 hours</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <input type="hidden" name="amount" id="amount" value="">
                        <div class=" col-sm">
                            <button type="submit" class="orderBtn" name="order">Continue to Order</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm-2">
                <div class="card totalPrice">
                    <h3>Total Price</h3>
                    <h2 id="totalPrice" value="">$0</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Calculator Js -->
<script src="assets/js/calculator.js">
</script> <?php include 'footer.php' ?>