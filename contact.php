<!DOCTYPE html>
<html lang="en">
<head><meta charset="utf-8">
	<title>Messer's Landscaping</title>
	<link crossorigin="anonymous" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet" type="text/css" />
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <header>
    <div class = "container">
        <div class = "row">
            <h1 class = "col-sm-4.5 text-left">Messer's Landscaping</h1>
            <nav class = "col-sm-8 text-right">
                <a href = "index.html">Home Page</a>
                <a href = "help.html">Our Services</a>
                <a href = "gallery.html">Gallery of Landscaping Excellence</a>
                <a href = "custreview.html">Customer Reviews</a>
                <a href = "about.html">About Us</a>
            </nav>
        </div>
    </div>
    </header>

    <section class = "jumbotron">
        <div class = "container">
            <div class = "row">
                <h2 class = text-left>Get a Quote Today!</h2>
            </div>
        </div>
    </section>


    <form action = "" method = "POST">
        <div class = "form-group">
            <label for = "CustomerName">First Name</label>
            <input type = "name" name = "first_name"  class = "form-control" id = "CustomerName" placeholder = "Name">  
        </div>
        <div class = "form-group">
            <label for = "CustomerName">Last Name</label>
            <input type = "name" name = "last_name" class = "form-control" id = "CustomerName" placeholder = "Name">  
        </div>
        <div class = "form-group">
            <label for = "CustomerEmail">Email Address</label>
            <input type = "email" name = "email" class = "form-control" id = "CustomerEmail" aria-describedby = "emailHelp" placeholder = "Enter">
            <small id = "emailHelp" class = "form-text text-muted">Your email will only be used to contact you and won't be shared with anyone else.</small>
        </div>
        <div class = "form-group">
            <label for = "CustomerPhone">Phone Number</label>
            <input type = "phonenumber" name = "phonenumber" class = "form-control" id = "CustomerPhone" aria-describedby = "phoneHelp" placeholder = "Enter">
            <small id = "phoneHelp" class = "form-text text-muted">Your phone number will only be used to contact you and won't be shared with anyone else.</small>
        </div>
        <div class = "form-group">
            <label for = "custmessage">How can we help you?</label>
            <input type = "message" name = "message" class = "form-control" id = "custmessage" aria-describedby="messageHelp" placeholder = "Enter">
            <small id = "messageHelp" class = "form-text text-muted">A short list is all that is needed. We will go into further detail when we get into contact with you.</small>
            <button id = "buttoninfo" class = "btn btn-primary" type = "submit">Submit Form</button>
            <small id = "buttoninfo" class = "form-text text-muted">We will get back to you soon. We are looking forward to Keeping your Lawn Green and Clean.</small>
        </div>
    </form>

    <footer class="container">
        <div class="row">
        <p class="col-sm-4">&copy;Messer's Landscaping</p>
        
        <div class="col-sm-2"><a href="contact.html" target = "_blank">Contact Us</a></div>
        
        <div class="col-sm-2"><a href="https://www.facebook.com/MesserLandscaping/" target = "_blank">Facebook</a></div>
        
        <div class="col-sm-2"><a href="https://www.thumbtack.com/pa/northampton/lawn-care/messers-landscaping/service/301893213161636019?service_pk=301893213161636019&category_pk=124319844707721647&lp_request_pk=392312435023798282&zip_code=17901&keyword_pk=102906936632830819&category_pks%5B0%5D=124319844707721647&category_pks%5B1%5D=240123621172183344&category_pks%5B2%5D=124319547394474414&category_pks%5B3%5D=195372380267143671&click_origin=pro%20list%2Fclick%20pro%20name" target = "_blank">Thumbtack</a></div>
        
        <div class="col-sm-2"><a href="https://www.instagram.com/messers_landscaping/?hl=en" target = "_blank">Instagram </a></div>
        </div>
        </footer>
</body>

</html>