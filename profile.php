<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

    <style>
        body {
            margin-top: 30px;
            background-image: url(https://i.pinimg.com/originals/8e/14/55/8e145599d4847e339828787162952035.gif);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .profile-card{
    width:550px;

  
        }
        .profile-info {
            text-align: left;
            margin-top: 15px;
            flex-grow: 1;
            border: solid black 1px;
            border-radius: 20px;
            padding: 10px;
            background-color: lavender;
        }

        .back-btn {
            margin-top: 20px;
            padding: 10px;
            border: none;
            border-radius: 6px;
            background: #333;
            color: white;
            cursor: pointer;
        }

        .back-btn:hover {
            background: black;
        }

        .profile-info p {
            margin: 6px 0;
            font-size: 20px;
        }
    </style>

</head>

<body>
    <div class="container">
        <?php
        if (isset($_POST['submit'])) {
            if (
                !empty($_POST['Name']) && 
                !empty($_POST['Age']) &&
                !empty($_POST['Course']) &&
                 !empty($_POST['Email']) &&
                !empty($_POST['Gender']) &&
                 !empty($_POST['Hobbies'])
            ) {
                $name = $_POST['Name'];
                $age = $_POST['Age'];
                $course = $_POST['Course'];
                $email = $_POST['Email'];
                $gender = $_POST['Gender'];
                $bio = $_POST['biography'];
                $hobby = implode(", ", $_POST['Hobbies']);
                $file_name = $_FILES['file']['name'];
                $file_tmp = $_FILES['file']['tmp_name'];
                $uploads_folder = "uploads/";
                $destination = $uploads_folder . basename($file_name);
                if ($_FILES['file']['error'] !== 0) {
                    $message = "Error uploading file: " . $_FILES['file']['error'];
                } else{
                    $message = "File uploaded successfully";
                }
                echo "
        <div class='profile-card'>
                <div class='profile-info'>
                <h2>Hello, $name!</h2> 
                <p><strong>Age:</strong> $age</p>
                <p><strong>Course:</strong> $course</p>
                <p><strong>Email:</strong> $email</p>
                <p><strong>Gender:</strong> $gender</p>
                <p><strong>Hobbies:</strong> $hobby</p>
                <p><strong>Bio:</strong> $bio</p>
                <p><strong>File Name:</strong> $file_name</p>
                <p><strong>File Path:</strong> $destination</p>
                <p><strong>Upload Status:</strong> $message</p>
            </div>
            <a href='index.php'><button class='back-btn'>Back to Form</button></a>
        </div>
        ";
            } else {
                echo "<a href='index.php'><button class='back-btn'>No Information Detected, Please click here to go back.</button></a>";
            }
        }
        ?>
    </div>
</body>

</html>