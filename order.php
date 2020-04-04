    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Order</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                </div>
                <div class="col-sm-6" style="background-color: #2d5ceb;
    padding:10px; 
    border-radius:10px;border:3px solid #ffd700;">

                    <h3 style="color: #fff">ORDER DETAILS</h3>

                    <form action="/action_page.php">

                        <div class="col-sm-12">
                            <div class="col-sm-6">
                                <label style="color: #fff" for="sel1">Currency</label>
                                <select class="form-control" id="sel1">
                                    <option>USD</option>
                                </select>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label style="color: #fff" for="sel1">Topic</label>
                                    <input class="form-control" type="text" name="topic">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="col-sm-6">
                                <label style="color: #fff" for="sel1">Work Type</label>
                                <select class="form-control" id="sel1">
                                    <option>Writing from scratch</option>
                                    <option>Proof Reading</option>
                                </select>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label style="color: #fff" for="sel1">Course Unit Title</label>
                                    <input class="form-control" type="text" name="topic">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="col-sm-6">
                                <label style="color: #fff" for="sel1">Course Unit Code</label>
                                <input class="form-control" type="text" name="topic">
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                <label style="color: #fff" for="sel1">Subject area</label>
                                    <select class="form-control" id="">
                                    <option value="">Arts</option>
                                    <option value="">Biology and Life Sciences</option>
                                    <option value="">Business</option>
                                    <option value="">Business and Management</option>
                                    <option value="">Chemistry Culture</option>
                                    <option value="">Economics</option>
                                    <option value="">Education</option>
                                    <option value="">English</option>
                                    <option value="">Environmental Science</option>
                                    <option value="">Finance, Accounting and Banking</option>
                                    <option value="">Geography</option>
                                    <option value="">Healthcare and Nursing</option>
                                    <option value="">History and Anthropology</option>
                                    <option value="">HRM</option>
                                    <option value="">International Relations</option>
                                    <option value="">IT</option>
                                    <option value="">Law</option>
                                    <option value="">Literature</option>
                                    <option value="">Marketing and PR</option>
                                    <option value="">Maths</option>
                                    <option value="">Philosophy</option>
                                    <option value="">Physics</option>
                                    <option value="">Political Science</option>
                                    <option value="">Psychology</option>
                                    <option value="">Sociology</option>
                                    <option value="">Statistics</option>
                                    <option value="">Other- Include</option>
                                    </select>
                                </div>
                            </div>
                        </div>





                        <div class="col-sm-12">
                            <div class="col-sm-6">
                                <label style="color: #fff" for="sel1">Academic Level</label>
                                <select class="form-control" id="sel1">
                                    <option value="HighSchool" selected="">HighSchool</option>
                                    <option value="Undergraduate">Undergraduate</option>
                                    <option value="Master">Master</option>
                                    <option value="Phd">PHD</option>
                                </select>
                            </div>

                            <div class="col-sm-6">
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
                        </div>


                        <div class="col-sm-12">
                            <div class="col-sm-6">
                                <label style="color: #fff" for="sel1">Urgency</label>
                                <select class="form-control" id="sel1">
                                    <option value="14days" selected="">14 days</option>
                                    <option value="9Days">9 days</option>
                                    <option value="7Days">7 days</option>
                                    <option value="5Days">5 days</option>
                                    <option value="3Days">3 days</option>
                                    <option value="2Days">2 days</option>
                                    <option value="24Hours">24 hours</option>
                                    <option value="12Hours">12 hours</option>
                                    <option value="6Hours">6 hours</option>
                                </select>

                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label style="color: #fff" for="Pages">Pages:</label>
                                    <input type="number" class="form-control" id="Pages" required value="Pages" min="1"
                                        max="400" step="1">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="col-sm-6">
                                <label style="color: #fff" for="sel1">Paper Format</label>
                                <select class="form-control" id="sel1">
                            
                                    <option value="14" selected="">APA</option>
                                    <option value="9">Chicago</option>
                                    <option value="7">Harvard</option>
                                    <option value="5">MLA</option>
                                    <option value="3">Turabian</option>
                                   
                                </select>

                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label style="color: #fff" for="Pages">Preferred English:</label>
                                    <select class="form-control" id="sel1">
                                    
                                    <option value="14" selected="">US</option>
                                    <option value="9">UK English</option>
                                  
                                </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="col-sm-6">
                                <label style="color: #fff" for="sel1">Number of sources</label>
                                <input class="form-control" type="number" min="1" name="topic">
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label style="color: #fff" for="Pages">Spacing:</label>
                                    <select class="form-control" id="sel1">
                                    
                                    <option value="14" selected="">Single Spaced</option>
                                    <option value="9">Double Spaced</option>
                                  
                                </select>
                                </div>
                            </div>
                        </div>
                        

                        <div class="col-sm-12">
                            <div class="col-sm-6">
                                <label style="color: #fff" for="sel1">Number of Pages</label>
                                <input class="form-control" type="number" min="1" name="topic">
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                <label>Attach paper documents</label>
                                <input type="file" class="form-control" name="file">
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-12">
                            <div class=form-group>
                                <label>Paper Instructions</label>

                                <textarea class="form-control" rows="3">
                              </textarea>
                            </div>
                        </div>

                       

                        <div class="col-sm-12">
                            <div style="width:auto;height:60px;border:1px solid #000;margin-bottom:10px;">
                                <h4 style="font-size:15px">Total Price :<span id="totalPrice"></span></h4>
                            </div>
                        </div>
<div class="col-sm-12">
                        <button type="submit" class="btn btn-warning pull-right" style="border-radius: 50px;">Continue
                            to Order</button>
                            </div>
                    </form>
                    <div class="col-sm-4">
                    </div>
                </div>
            </div>

            <script src="calculator.js"></script>
    </body>

    </html>