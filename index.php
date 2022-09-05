<html>
<title>IT STUDENTS PORTAL </title>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

 <style>
      .button {
    background-color: purple; /* Green */
    border: none;
    color: white;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    border-radius: 50%;
}
    </style>
<style>
img {
    width: 100%;
    height: auto;
}
</style>
<style>
input[type=text] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
}</style>
<style>
body {
    background-color: tan;
    color: black;
}

/* On screens that are 992px wide or less, the background color is blue */
@media screen and (max-width: 992px) {
    body {
        background-color: beige;
        color: black;
    }
}

/* On screens that are 600px wide or less, the background color is olive */
@media screen and (max-width: 600px) {
    body {
        background-color: olive;
        color: white;
    }
}</style>


</head>
<body>
    <script>
var x = document.getElementById("demo");
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}
function showPosition(position) {
    x.innerHTML = "Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude; 
}
</script>
<!-- <body style="background-color:beige;"> -->
<h1><a href="https://youtu.be/P2_6nN-67UQ"><img src="Capture.png" height='150px'></a></h1>





<div>
<form action ="insert.php" method="POST">
      
        <label>NAME</label>
        
        <input type ="text" id="name" name ="name" placeholder="Enter Name" required autofocus/>
      
      
      <label>ENROLL NO</label>
      
      
      <input type="text" id ="enroll" name ="enroll"placeholder="Enter Enroll number" required/>
        
        
        <label>MOBILE NO</label>
        <!-- <input type="text" name="user" placeholder="Email ID or Username" required autofocus /> -->
        <input type ="text" id="mob" name ="mob" placeholder="Enter Mobile number" required autofocus/>
      
      <label>SEMESTER</label>
      
      
      <input type="text" id ="sem" name ="sem" placeholder="SEMESTER" required/>
        
      <input type="submit"  name="click" class="button" value ="SAVE TO DATABASE"/>
      

    </form>
</div>
<div>
	<!-- <form action="search.php" method="POST">
	<input type "submit" class ="btn btn-primary" name "serach" value="Search"> -->
</div>
</form>

<div>







<form action="upload.php" method="post" enctype="multipart/form-data">
    <h4><mark>Select file to upload:</mark></h4>
    <input type="file" name="fileToUpload" class="button"id="fileToUpload">
    <!-- <input type="submit" value="Upload Image" name="submit"> -->
    <p><input type="submit" value="Upload Image"name="submit"class="button" value="Upload Image"></p>
</form>

</div>
<div>

<form action="game.html">
<p><input type="submit" value="game"name="game"class="button" value="Play Game"></p>
</form>
</div>
</script>



  
  
</script>


</body>
</head>
</html>