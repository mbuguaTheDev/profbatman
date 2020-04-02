                    <!DOCTYPE html>
                    <html lang="en">
                    <head>
                    <title>Calc</title>
                    <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
                    </head>
                    <body>

                    <div class="jumbotron text-center">
                    <h3>OUR PRICE CALCULATOR</h3>

                    </div>

                    <div class="container">
                    <div class="row">
                    <div class="col-sm-6">
                    </div>
                    <div class="col-sm-4" 
                    style="background-color: #2d5ceb;
                    padding:10px; 
                    border-radius:10px">

                    <h3 style = "color: #fff">PRICE CALCULATOR</h3>

                    <form action="/action_page.php">

                    <label style = "color: #fff" for="sel1">Currency</label>
                    <select class="form-control" id="sel1">
                    <option>USD</option>
                    </select>

                    <label style = "color: #fff" for="sel1">Academic Level</label>
                    <select class="form-control" id="sel1">
                    <option value="1" selected="">HighSchool</option>
                    <option value="2">Undergraduate</option>
                    <option value="3">Master</option>
                    <option value="4">PHD</option>
                    </select>

                    <label style = "color: #fff" for="sel1">Type of Paper</label>
                    <select class="form-control" id="sel1">
                    <optgroup label="&nbsp;Essays">
                    <option value="Annotated Bibliography" selected="">Annotated Bibliography</option>
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



                    <label style = "color: #fff" for="sel1">Deadline</label>
                    <select class="form-control" id="sel1">
                    <option value="14" selected="">14 days</option>
                    <option value="9">9 days</option>
                    <option value="7">7 days</option>
                    <option value="5">5 days</option>
                    <option value="3">3 days</option>
                    <option value="2">2 days</option>
                    <option value="24">24 hours</option>
                    <option value="12">12 hours</option>
                    <option value="6">6 hours</option>
                    </select>

                    <div class="form-group">
                    <label style = "color: #fff" for="Pages">Pages:</label>
                    <input type="number" class="form-control" id="Pages" required value="1" min="1" max="400" step="1">
                    </div>
                    <div style="width:auto;height:60px;border:1px solid #000;margin-bottom:10px;">
                    <h4 style="font-size:15px">Total Price :<span id="totalPrice"></span></h4>
                    </div>

                    <button type="submit" class="btn btn-warning pull-right" style="border-radius: 50px;">Continue to Order</button>
                    </form>
                    <div class="col-sm-2">
                    </div>
                    </div>
                    </div>
                    
                    <script src = "calculator.js"></script>
                    </body>
                    </html>
