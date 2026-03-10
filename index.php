<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>

    <style>
      body{
    
    background-image: url(https://i.pinimg.com/originals/e5/b1/c0/e5b1c0aada67d51b10f681404abd440a.gif);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
      }
    .form{
    text-align: center;
    background-color: beige;
    border: 2px solid black;
    margin: auto;
    padding: 30px;
    width: 500px;
    border-radius: 20px;
    margin-top: 125px;
    }
       
    </style>
</head>
<body>
   
    <div class="form">
    <h1>
        Profile Form Page
    </h1>
    <form action="profile.php" method=post enctype="multipart/form-data">

    <label for="Name">Full Name: </label>
    <input type="text" maxlength ="50" id = "Name" name="Name"/>

  <br> <br>

    <label for="Age">Age:</label>
   <input type="Number" id="Age" name="Age">

    <br><br>

    <label for="Course">Course:</label>
    <input type="text" id="Course" name="Course"/>

    <br> <br>

    <label for="Email">Email</label>
    <input type="email" id="Email" name="Email">

    <br> <br>

    <label for="gend_Male">Male</label>
    <input type="radio" name="Gender" value="Male" id="gend_Male" checked>
    <label for="gend_Female">Female</label>
    <input type="radio" name="Gender" value="Female" id="gend_Female">

    <br> <br>

    <label for="Hobbies">Hobbies</label> 

    <br> 

    <label for="Gaming">Gaming</label>
    <input type="checkbox" id="Gaming" name="Hobbies[]" value="Gaming">
    <label for="Music">Music</label>
    <input type="checkbox" id="Music" name="Hobbies[]" value="Music">
    <label for="Travel">Travel</label>
    <input type="checkbox" id="Travel"name="Hobbies[]" value="Travel">
    <label for="Cooking">Cooking</label>
    <input type="checkbox" id="Cooking" name="Hobbies[]" value="Cooking">
    <label for="WatchingMovies">Watching Movies</label>
    <input type="checkbox" id="WatchingMovies" name="Hobbies[]" value="Watching Movies">
    <br>
    <br>

    <textarea name="biography" id="biography">Hiiiii welcome to my laypp</textarea> <br>

    <br>
    <label for="file">Choose File:</label>
    <input type="file" id="file" name="file"> <br>
    <br>
    <input type="submit" id= "submit" name="submit" value= "Submit">

</form> 
</div>


    
</body>
</html>