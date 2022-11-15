<?php

include 'functions.php';

if (isset($_POST['form_button'])){

  $email = $_POST['email'];
  $comment = $_POST['comment'];

  $sql = "INSERT INTO section (email, comment)
VALUES ('$email', '$comment')";

if ($conn->query($sql) === TRUE) {
  echo "comment Terkirim";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

}

?>

<!DOCTYPE html>
<html lang="id">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles.css">
        <title>Contact</title>
    </head>

    <body>

        <div class="header">
            <div class="topnav">
              <h1 class="judul">Contact Me</h1>
              <ul>
                <li><a href="home.html">Home</a></li>
                <li><a href="../SourceLeo/CVleo.pdf">Download CV</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="about.html">About Me</a></li>
              </ul>
            </div>
          </div>
        <div class="isi">
            <hr>

            <div class="contact">
          <div class="wrap">
            <form action="" method="post" class="form">
              <h2>Contact Me</h2>
              <input type="text" class="email" name="email" placeholder="Email">
              <br>
              <textarea name="comment" class="massage" cols="30" rows="10" placeholder="Massage"></textarea>
              <br>
              <button type="submit" class="form-button" name="form_button">Post Comment</button>
            </form>
          </div>
          <div class="Komentar">
            <h4>john</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo, consequatur. Id amet cumque ipsa rem eius beatae labore provident consequatur assumenda, dolore nostrum incidunt impedit earum aperiam cupiditate suscipit quisquam.</p>
          </div>
      </div>
    </div>

  <footer>
    <hr>
    <p>Copyright 2022 By Leonardo</p></footer>
</footer>
</body>
</html>