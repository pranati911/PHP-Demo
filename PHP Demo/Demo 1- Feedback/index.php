<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

 <Body style="background-color:DarkslateGrey">
<body>
    <div class="container">
        <div class="row col-md-offset">
            <div class="panel panel-info">
                <div class="panel-heading text-center">
                    <h1>STUDENT FEEDBACK FORM</h1>
                </div>

                <div class="panel-body">
                    <form action="connect.php" method="POST">
                        <div class="form-group">
                            Select Teacher :
                            <select id="rt" name="Teacher">
                                <option>
                                    Prof. A
                                </option>
                                <option>
                                    Prof. B
                                </option>
                                <option>
                                    Prof. C
                                </option>
                                <option>
                                    Prof. D
                                </option>
                                <option>
                                    Prof. E
                                </option>
                                <option>
                                    Prof. F
                                </option>
                            </select>
                        </div>
                    <br> 
                            # Sends form data to a page in Xampp Server
                            <form class="form-inline" action="/action_page.php">
                            <div class="form-group">
                            <label for="email">EmailAddress:</label>
                            <input type="email" class="form-control" name="EmailAddress" id="email">
                            </div>
                      <div class="form-group">
                                <label for="Competency">Competency &emsp; </label>
                                <label for="1" class="radio-inline"><input type="radio" name="Competency" value="1">1</label>
                                <label for="2" class="radio-inline"><input type="radio" name="Competency" value="2">2</label>
                                <label for="3" class="radio-inline"><input type="radio" name="Competency" value="3">3</label>
                                <label for="4" class="radio-inline"><input type="radio" name="Competency" value="4">4</label>
                                <label for="5" class="radio-inline"><input type="radio" name="Competency" value="5">5</label>
                                <label for="6" class="radio-inline"><input type="radio" name="Competency" value="6">6</label>
                                <label for="7" class="radio-inline"><input type="radio" name="Competency" value="7">7</label>
                                <label for="8" class="radio-inline"><input type="radio" name="Competency" value="8">8</label>
                                <label for="9" class="radio-inline"><input type="radio" name="Competency" value="9">9</label>
                                <label for="10"class="radio-inline"><input type="radio" name="Competency"value="10">10</label>
                            </div>


                            <br> 
                            <div class="form-group">
                                <label for="TeachingSkills">Teaching Skills &emsp; </label>
                                <label for="1" class="radio-inline"><input type="radio" name="TeachingSkills" value="1">1</label>
                                <label for="2" class="radio-inline"><input type="radio" name="TeachingSkills" value="2">2</label>
                                <label for="3" class="radio-inline"><input type="radio" name="TeachingSkills" value="3">3</label>
                                <label for="4" class="radio-inline"><input type="radio" name="TeachingSkills" value="4">4</label>
                                <label for="5" class="radio-inline"><input type="radio" name="TeachingSkills" value="5">5</label>
                                <label for="6" class="radio-inline"><input type="radio" name="TeachingSkills" value="6">6</label>
                                <label for="7" class="radio-inline"><input type="radio" name="TeachingSkills" value="7">7</label>
                                <label for="8" class="radio-inline"><input type="radio" name="TeachingSkills" value="8">8</label>
                                <label for="9" class="radio-inline"><input type="radio" name="TeachingSkills" value="9">9</label>
                                <label for="10" class="radio-inline"><input type="radio" name="TeachingSkills" value="10">10</label>
                            </div>

                            <br> 
                            <div class="form-group">
                                <label for="Punctuality">Punctuality &emsp; </label>
                                <label for="1" class="radio-inline"><input type="radio" name="Punctuality" value="1">1</label>
                                <label for="2" class="radio-inline"><input type="radio" name="Punctuality" value="2">2</label>
                                <label for="3" class="radio-inline"><input type="radio" name="Punctuality" value="3">3</label>
                                <label for="4" class="radio-inline"><input type="radio" name="Punctuality" value="4">4</label>
                                <label for="5" class="radio-inline"><input type="radio" name="Punctuality" value="5">5</label>
                                <label for="6" class="radio-inline"><input type="radio" name="Punctuality" value="6">6</label>
                                <label for="7" class="radio-inline"><input type="radio" name="Punctuality" value="7">7</label>
                                <label for="8" class="radio-inline"><input type="radio" name="Punctuality" value="8">8</label>
                                <label for="9" class="radio-inline"><input type="radio" name="Punctuality" value="9">9</label>
                                <label for="10" class="radio-inline"><input type="radio" name="Punctuality"  value="10">10</label>
                            </div>

                            <br> 
                            <div class="form-group">
                                <label for="PracticalKnowledge">Practical Knowledge &emsp; </label>
                                <label for="1" class="radio-inline"><input type="radio" name="PracticalKnowledge" value="1">1</label>
                                <label for="2" class="radio-inline"><input type="radio" name="PracticalKnowledge" value="2">2</label>
                                <label for="3" class="radio-inline"><input type="radio" name="PracticalKnowledge" value="3">3</label>
                                <label for="4" class="radio-inline"><input type="radio" name="PracticalKnowledge" value="4">4</label>
                                <label for="5" class="radio-inline"><input type="radio" name="PracticalKnowledge" value="5">5</label>
                                <label for="6" class="radio-inline"><input type="radio" name="PracticalKnowledge" value="6">6</label>
                                <label for="7" class="radio-inline"><input type="radio" name="PracticalKnowledge" value="7">7</label>
                                <label for="8" class="radio-inline"><input type="radio" name="PracticalKnowledge" value="8">8</label>
                                <label for="9" class="radio-inline"><input type="radio" name="PracticalKnowledge" value="9">9</label>
                                <label for="10" class="radio-inline"><input type="radio" name="PracticalKnowledge"  value="10">10</label>
                            </div>

                                <br> 
                            <div class="form-group">
                                <label for="Approachability">Approachability &emsp; </label>
                                <label for="1" class="radio-inline"><input type="radio" name="Approachability" value="1">1</label>
                                <label for="2" class="radio-inline"><input type="radio" name="Approachability" value="2">2</label>
                                <label for="3" class="radio-inline"><input type="radio" name="Approachability" value="3">3</label>
                                <label for="4" class="radio-inline"><input type="radio" name="Approachability" value="4">4</label>
                                <label for="5" class="radio-inline"><input type="radio" name="Approachability" value="5">5</label>
                                <label for="6" class="radio-inline"><input type="radio" name="Approachability" value="6">6</label>
                                <label for="7" class="radio-inline"><input type="radio" name="Approachability" value="7">7</label>
                                <label for="8" class="radio-inline"><input type="radio" name="Approachability" value="8">8</label>
                                <label for="9" class="radio-inline"><input type="radio" name="Approachability" value="9">9</label>
                                <label for="10" class="radio-inline"><input type="radio" name="Approachability"  value="10">10</label>
                            </div>

                            <br> 
                            <div class="form-group">
                                <label for="ClassControl">Class Control &emsp; </label>
                                <label for="1" class="radio-inline"><input type="radio" name="ClassControl" value="1">1</label>
                                <label for="2" class="radio-inline"><input type="radio" name="ClassControl" value="2">2</label>
                                <label for="3" class="radio-inline"><input type="radio" name="ClassControl" value="3">3</label>
                                <label for="4" class="radio-inline"><input type="radio" name="ClassControl" value="4">4</label>
                                <label for="5" class="radio-inline"><input type="radio" name="ClassControl" value="5">5</label>
                                <label for="6" class="radio-inline"><input type="radio" name="ClassControl" value="6">6</label>
                                <label for="7" class="radio-inline"><input type="radio" name="ClassControl" value="7">7</label>
                                <label for="8" class="radio-inline"><input type="radio" name="ClassControl" value="8">8</label>
                                <label for="9" class="radio-inline"><input type="radio" name="ClassControl" value="9">9</label>
                                <label for="10" class="radio-inline"><input type="radio" name="ClassControl"  value="10">10</label>
                                		       <br><br>  
                                                       <b>Comments and Suggestions:</b> <br /> 
                                                         <textarea name='Comments' id='comment'></textarea><br /> 
                            </div>
                            <div>
                                <button type="Submit" class="btn btn-success" value="Insert">Submit</button>
                            </div>
                    </form>
                    
                </div>

              
                
            </div>
        </div>


    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
