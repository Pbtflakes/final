<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" type="image/png" href="bauhaus.png">
    <script type="text/javascript" src="buildings.js"></script>
    <title>Bauhaus History</title>
  </head>
  <body>
    <div class=mainbox>
      <?php include "header.php" ?>
      <main>
        <div id=buttondiv>
          <button id=buttonhorn>Haus am Horn</button>
          <button id=buttongropius>Gropius House</button>
          <button id=buttondessau>Bauhaus Dessau</button>
        </div>
        <div id=buildings>
          <div id=hausamhorn class=building>
            <h2>Haus am Horn</h2>
            <figure class="wide">
              <picture>
                <source srcset="img/haus-am-horn.jpeg"
                        media="(max-width: 767px)">
                <img src="img/haus-am-horn-thumb.jpg"
                     alt="A small single-story building with flat
                          roof and raised cupola.  A gravel walkway
                          encircles it, with trees around.">
              </picture>
              <figcaption>
                Haus am Horn, opened in 1923, housed a Bauhaus exhibition
              </figcaption>
            </figure>
            <p>
            Haus am Horn, opened in 1923, is a small residential
            building in Weimar, Germany.  Constructed to hold the
            school's first <span lang="de">Werkschau</span> exhibition
            of art and craftsmanship, it is a classic example of
            Bauhaus modernism.  Low and built on a square footprint
            around a central room, Haus am Horn was built with
            post-World War I energy restrictions in mind.
            </p>
          </div>
          <div id=gropius class=building>
            <h2>Gropius House</h2>
            <figure class="wide">
              <picture>
                <source srcset="img/gropius-house-large.JPG"
                        media="(max-width: 767px)">
                <img src="img/gropius-house-thumb.JPG"
                     alt="A small, two-story house with a glass-block wall
                          shielding the entrance, and a spiral stair to the second
                          floor">
              </picture>
              <figcaption>
                Walter would reside at the Gropius House from 1938
                until his death in 1969.
              </figcaption>
            </figure>
            <p>
            Constructed in 1938, the Gropius House stands among the
            colonial homes and quiet forests of Lincoln, Massachusetts.
            It housed the Gropius family of Walter, his wife Ise, and
            their daughter, Ati.  Walter put much effort into integrating
            the house into local architecture, while ensuring the comfort
            of its inhabitants.
            </p>
            <p>
            Emphasizing practicality, the house was nearly completely
            decorated with items either purchased or given to the
            family as gifts, excepting a custom-made two-person
            desk in the office.  Glass block veils the entryway and
            lets light through from the office into the dining room,
            enveloping the house in the New England sunlight.
            Similarly, the south-facing windows of the second floor
            appear continuous, despite spanning from Ati's bedroom
            to the master bathroom, through the storage closet,
            second-floor landing, and second-floor bathroom.
            </p>
            <div class="videobox">
              <button id="videobutton">Show</button>
              <video 
                     id=gropius-doc
                     class="hidden"
                     controls
                     title="Walter Gropius: His New World Home"
                     poster="img/gropius-doc-thumb.jpg">
                <source src="img/gropius-doc.webm" type="video/webm">
                <source src="img/gropius-doc.mp4" type="video/mp4">
                <p>
                Your browser does not support this video.  <a
                href="https://www.youtube.com/watch?v=7weMep5FtFM">Watch
                on YouTube</a> instead.
                </p>
              </video>
            </div>
          </div>
          <div id=dessau class=building>
            <h2>Bauhaus Dessau</h2>
            <figure class="wide">
              <picture>
                <source srcset="img/dessau.jfif"
                        media="(max-width: 767px)">
                <img src="img/dessau.jfif"
                     alt="Bauhaus-Dessau, with lettering on gray background and
                          glass curtain wall">
              </picture>
              <figcaption>
                The iconic Bauhaus Dessau building.  It served as
                headquarters of the school from 1926 until its closure
                by the Nazi Party in 1932.
              </figcaption>
            </figure>
            <p>
            Constructed from 1925 to 1926, the Bauhaus Dessau
            building complex served as the headquarters of the
            Bauhaus until its closure by the Nazis in 1932.
            Thirteen departments were housed within it:
            </p>
            <p>
            Its facade features an innovative glass curtain wall,
            which exposes the load-bearing steel beams underneath.
            </p>
            <p>

            </p>
          </div>
        </div>
      </main>
      <?php include "footer.php" ?>
        </div>
  </body>
</html>
