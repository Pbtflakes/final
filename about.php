<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" type="image/png" href="bauhaus.png">
    <title>Bauhaus History</title>
    <script type="text/javascript" src="weather.js"></script>
  </head>
  <body>
    <div class=mainbox>
      <?php include "header.php" ?>
      <main>
        <h2>Weather report</h2>
        <div id="wxdiv">
          <p id="wxreport"></p>
        </div>
        <h2>Contact</h2>
        <p>
        If you would like to contact me regarding the content of
        this site with comments or complaints, fill out the form
        below.  It really does get filed to a database!
        </p>
        <form action="comment.php" method="post">
          <div id=namediv>
            <label for=name>Name:</label>
            <input required="required" type=text id=name name=name>
          </div>
          <br>
          <div>
            <label for=mail>E-mail:</label>
            <input required="required" type=email id=mail name=mail>
          </div>
          <div>
            <label for=msg>Message:</label>
            <br>
            <textarea name=comment required="required" placeholder="Write a message here"></textarea>
          </div>
          <br>
          <button>Submit</button>
        </form>
      </main>
      <?php include "footer.php" ?>
    </div>
  </body>
</html>
