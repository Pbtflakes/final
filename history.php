<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" type="image/png" href="bauhaus.png">
    <title>Bauhaus History</title>
  </head>
  <body>
    <div class="mainbox">
      <?php include "header.php" ?>
      <main>
        <h2>A timeline of the Bauhaus</h2>
        <figure class="wide">
          <picture>
            <source srcset="img/bauhaus-full.jpg" media="(max-width: 767px)">
            <img src="img/dessau.jfif"
                 alt="Bauhaus-Dessau, with lettering on gray background
                      and glass curtain wall">
          </picture>
          <figcaption>
            The iconic Bauhaus Dessau building.  It served as
            headquarters of the school from 1926 until its closure
            by the Nazi Party in 1932.
          </figcaption>
        </figure>
        <dl>
          <dt>1919</dt>
          <dd>
          Walter Gropius founds the Bauhaus, wanting "to create a new guild of
          craftsmen, without the class distinctions which raise an arrogant
          barrier between craftsman and artist." The school merges the Weimar
          Academy of Fine Art and the Weimar Saxon Grand Ducal Art School.
          </dd>
          <dt>1922</dt>
          <dd>
          Wassily Kandinsky joins the Bauhaus faculty.  He would continue
          teaching until the school's closure in 1933.
          </dd>
          <dt>1925</dt>
          <dd>
          The Bauhaus shuts down its Weimar campus, and moves to Dessau.  The
          Weimar building remained in use, and is currently the home of the
              <span lang=de>Bauhaus-Universität Weimar<span>.
          </dd>
          <dt>1928</dt>
          <dd>
          Gropius resigns as director, and is replaced by socialist
          architect Hannes Meyer.
          </dd>
          <dt>1930</dt>
          <dd>
          Ludwig Mies van der Rohe takes over as director, at the
          recommendation of Gropius.
          </dd>
          <dt>1932</dt>
          <dd>
          Political pressure from the Nazi party forces the Bauhaus campus in
          Dessau to be shut down.  As an attempt to keep the school
          functioning, Mies selects a former telephone factory as a new campus.
          </dd>
          <dt>1933</dt>
          <dd>
          The Gestapo raids the beleaguered school in April, and in July
          faculty vote to close down.
          </dd>
        </dl>
      </main>
      <?php include "footer.php" ?>
    </div>
  </body>
</html>
