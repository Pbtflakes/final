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
        <div id="osm">
          <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=-71.32743179798128%2C42.42645409204142%2C-71.32537722587587%2C42.42765981293335&amp;layer=mapnik&amp;marker=42.427056955386206%2C-71.32640451192856" style="border: 1px solid black"></iframe><br/><small><a href="https://www.openstreetmap.org/?mlat=42.42706&amp;mlon=-71.32640#map=19/42.42706/-71.32640">View Larger Map</a></small>
        </div>
        <h2 id="wx">Weather report</h2>
        <div id="wxdiv">
          <p id="wxreport">Loading...</p>
        </div>
        <h2>Contact</h2>
        <p>
        If you would like to contact me regarding the content of this
        site with comments or complaints, fill out the form below.
        It really does get filed to a database, you'll join the
<?php
require_once('database.php');
$query = 'SELECT COUNT(id) AS comment_count FROM comments;';
$statement = $db->prepare($query);
$statement->execute();
$sum = $statement->fetch();
$statement->closeCursor();
echo $sum['comment_count'];
?>
        users who have commented on this site!
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
