<!DOCTYPE html>
<html>
<head>
  <title></title>
   
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   
   <style type="text/css">
     @import url(https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic);
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-font-smoothing: antialiased;
  -moz-font-smoothing: antialiased;
  -o-font-smoothing: antialiased;
  font-smoothing: antialiased;
  text-rendering: optimizeLegibility;
}

body {
  font-family: "Roboto", Helvetica, Arial, sans-serif;
  font-weight: 100;
  font-size: 12px;
  line-height: 30px;
  color: #777;
  background: #4CAF50;
}

.container {
  max-width: 400px;
  width: 100%;
  margin: 0 auto;
  position: relative;
}

#contact input[type="text"],
#contact input[type="email"],
#contact input[type="tel"],
#contact input[type="url"],
#contact textarea,
#contact button[type="submit"] {
  font: 400 12px/16px "Roboto", Helvetica, Arial, sans-serif;
}

#contact {
  background: #F9F9F9;
  padding: 25px;
  margin: 150px -225px;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
  border-radius:10px;
}

label {
  font-size: 15px;
  font-weight: 600px;
  text-decoration: underline;
}


#contact h3 {
  display: block;
  font-size: 30px;
  font-weight: 300;
  margin-bottom: 10px;
}

#contact h4 {
  margin: 5px 0 15px;
  display: block;
  font-size: 13px;
  font-weight: 400;
}

fieldset {
  border: medium none !important;
  margin: 0 0 10px;
  min-width: 100%;
  padding: 0;
  width: 100%;
}

#contact input[type="text"],
#contact input[type="email"],
#contact input[type="tel"],
#contact input[type="url"],
#contact textarea {
  width: 100%;
  border: 1px solid #ccc;
  background: #FFF;
  margin: 0 0 5px;
  padding: 10px;
}

#contact input[type="text"]:hover,
#contact input[type="email"]:hover,
#contact input[type="tel"]:hover,
#contact input[type="url"]:hover,
#contact textarea:hover {
  -webkit-transition: border-color 0.3s ease-in-out;
  -moz-transition: border-color 0.3s ease-in-out;
  transition: border-color 0.3s ease-in-out;
  border: 1px solid #aaa;
}

#contact textarea {
  height: 100px;
  max-width: 100%;
  resize: none;
}

#contact button[type="submit"] {
  cursor: pointer;
  width: 100%;
  border: none;
  background: #4CAF50;
  color: #FFF;
  margin: 0 0 5px;
  padding: 10px;
  font-size: 15px;
}

#contact button[type="submit"]:hover {
  background: #43A047;
  -webkit-transition: background 0.3s ease-in-out;
  -moz-transition: background 0.3s ease-in-out;
  transition: background-color 0.3s ease-in-out;
}

#contact button[type="submit"]:active {
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
}

.copyright {
  text-align: center;
}

#contact input:focus,
#contact textarea:focus {
  outline: 0;
  border: 1px solid #aaa;
}

::-webkit-input-placeholder {
  color: #888;
}

:-moz-placeholder {
  color: #888;
}

::-moz-placeholder {
  color: #888;
}

:-ms-input-placeholder {
  color: #888;
}
   </style>

</head>
<body>

    <div class="container">  
  <form id="contact" action="{{ url('add-marks') }}" method="post">
   

   @if(session()->has('alert-success'))
  
    <div class="alert alert-success"> 
    <a href="#" class="close" data-dismiss="alert" aria-label="close" style="text-decoration: none">&times;</a>
    <i class="fa fa-check"></i> 
     {{ session()->get('alert-success') }}
  </div>
   @endif
   
   <a href="{{ url('students-list') }}" class="btn btn-primary" style="float:right;">View Students</a> <br>


    <h3>Update Student Details</h3>

@csrf

  <label>Student Name</label>
      <select name="name" style="width: 100%;" class="form-control">
       @foreach ($Students as $user)
  
         <option value="{{ $user->id }}" >{{ $user->name }}<option>

       @endforeach   
       </select>
    


    <fieldset>
      <label>Term</label>
       <select name="term" style="width: 100%;" class="form-control">
         
         <option value="One"  >One<option>
          <option value="Two"  >Two</option>
       </select>
    </fieldset>
   
   

   <fieldset>
   <center><h2>Marks</h2></center>

  <label>Maths</label>
      <input  value="" name="maths" placeholder="Enter mark" type="text" tabindex="1" required autofocus>
    </fieldset>

   <fieldset>
    <label>Science</label>
      <input  value="" name="science" placeholder="Enter mark" type="text" tabindex="1" required autofocus>
    </fieldset> 

    <fieldset>
   <label>History</label>
      <input  value="" name="history" placeholder="Enter mark" type="text" tabindex="1" required autofocus>
    </fieldset>
   
    

    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  
  </form>
</div>

</body>
</html>