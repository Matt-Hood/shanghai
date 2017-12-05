<body>
<div class="container">
<?php
 ob_start();
 session_start();
 require_once 'config.php';
 include "inc/admintop.inc";
 $currentTitle = $userRow['email'];
 
 // if session is not set this will redirect to login page
 if( !isset($_SESSION['user']) ) {
  header("Location: login.php");
  exit;
 }
 // select loggedin users detail
 $res = mysql_query("SELECT * FROM user WHERE userID = ".$_SESSION['user']);
 $userRow = mysql_fetch_array($res);
?>

<!-- Navigation -->
<nav class="main-menu">
    <span class="logo"><a href="#">HI! <?php echo $userRow['username']; ?></a></span>
    <ul>
        
        
        <li> <a href=login.php>Log in</a></li><li> <a href=createaccount.php>Sign up</a></li>
        <li><a class="slide" href="#summary">Summary</a></li>
        <li><a class="slide" href="#survey">Survey</a></li>
        <li><a class="slide" href="#credits">Credits</a></li>
        <li><a href="myprofile.php">User Account</a></li>
    </ul>
</nav>

<!-- Bio -->

<div class="summary" id="summary">
  
    <h2>Summary</h2>
    <div id="summary" class="row align-items-center" contenteditable="true">
        <div class="column col-md-4 col-sm-4 col-xs-12">
            <!-- Image from http://www.billboard.com/articles/columns/rock/7325484/linkin-park-2016-album-charity-poker-tournament-interview -->
            <img src="images/band.jpg" class="bandpic" alt="Linkin_Park">
        </div>

        <div class="column col-md-8 col-sm-8 col-xs-12">
            <p>We decided to do our survery on Linkin Park because it is a band that we thought most people would be familiar with. In recent news, lead localist Chester Bennington died and we thought that this survey would pay tribute to him and the band.</p>

            <p>Linkin Park is an American rock band. They formed in 1996, in the Los Angeles suburb of Agoura Hills, around the core of high school friends Mike Shinoda, Brad Delson, and Rob Bourdon. Joe Hahn and Dave Farrell soon joined, as well as a singer named Mark Wakefield, who left by 1999, when the group was called Hybrid Theory. He was replaced by Chester Bennington, an Arizonan who'd been in a group called Grey Daze.</p>
        </div>
    </div>
    <input type="button" value="save my edits" onclick="saveEdits()"/>

<div id="update"> Edit the text and click to save for next time</div>
</div>



<!-- End Bio -->

<!-- Albums -->
<div class="albums" id="albums">
    <h2>Albums</h2>

    <!-- Hybrid Theory -->
    <div class="row align-items-center">
        <div class="column col-md-4 col-sm-4 col-xs-12">
            <!-- Image from https://en.wikipedia.org/wiki/Hybrid_Theory -->
            <img src="images/hybrid_theory.jpg" alt="Hybrid_Thoery_Art">
        </div>

        <div class="column col-md-8 col-sm-8 col-xs-12">
            <h3>Hybrid Theory</h3>
            <p>Hybrid Theory is the debut studio album by American rock band Linkin Park, released on October 24, 2000 through Warner Bros. Records. As of 2017, the album has been certified diamond by the RIAA for sales in the United States of over eleven million units, and peaking at number two on the US Billboard 200.</p>

            <h4>Singles</h4>
            <ul>
                <li>"One Step Closer"</li>
                <audio controls>
  <source src="audio/onestepcloser.mp3" type="audio/mpeg">
  Your browser does not support the audio tag.
</audio>
                <li>"Crawling"</li>
                <audio controls>
  <source src="audio/crawling.mp3" type="audio/mpeg">
  Your browser does not support the audio tag.
</audio>
                <li>"In the End"</li>
                <audio controls>
  <source src="audio/intheend.mp3" type="audio/mpeg">
  Your browser does not support the audio tag.
</audio>
            </ul>
        </div>
    </div>
    <hr>
    <!-- End Hybrid Theory -->

    <!-- Meteora -->
    <div class="album_sect">
        <div class="row align-items-center">
            <div class="column col-md-4 col-sm-4 col-xs-12">

                <!-- Image from https://en.wikipedia.org/wiki/Meteora_(album) -->
                <img src="images/meteora.jpg" alt="Meteora_Art">
            </div>

            <div class="column col-md-8 col-sm-8 col-xs-12">
                <h3>Meteora</h3>
                <p>Meteora is the second studio album by American rock band Linkin Park. It was released on March 25, 2003 through Warner Bros. Records. The album was produced by the band alongside Don Gilmore.</p>

                <h4>Singles</h4>
                <ul>
                    <li>"Somewhere I belong"</li>
     
                    <li>"Faint"</li>
                    
                    <li>"Numb"</li>
                    <audio controls>
  <source src="audio/numb.mp3" type="audio/mpeg">
  Your browser does not support the audio tag.
</audio>
                </ul>
            </div>
        </div>
    </div>
    <hr>
    <!-- End Meteora  -->


    <!-- Minutes to Midnight -->
    <div class="row align-items-center">
        <div class="column col-md-4 col-sm-4 col-xs-12">
            <!-- Image From https://en.wikipedia.org/wiki/Minutes_to_Midnight_(Linkin_Park_album) -->
            <img src="images/minutes_to_midnight.jpg" alt="Minutes_to_Midnight_Art">
        </div>

        <div class="column col-md-8 col-sm-8 col-xs-12">
            <h3>Minutes to Midnight</h3>
            <p>Minutes to Midnight is the third studio album by American rock band Linkin Park, released on May 14, 2007, through Warner Bros. Records. The album was produced by Mike Shinoda and Rick Rubin.</p>

            <h4>Singles</h4>
            <ul>
                <li>"What I've Done"</li>
                
                <li>"Bleed It Out"</li>
                <audio controls>
  <source src="audio/bleeditout.mp3" type="audio/mpeg">
  Your browser does not support the audio tag.
</audio>
                <li>"Shadow of the Day"</li>
                
            </ul>
        </div>
    </div>
    <hr>
    <!-- End Minutes to Midnight -->

    <!-- A Thousand Suns -->
    <div class="row align-items-center">
        <div class="column col-md-4 col-sm-4 col-xs-12">

            <!-- Image From https://en.wikipedia.org/wiki/A_Thousand_Suns -->
            <img src="images/a_thousand_suns.jpg" alt="A_Thousand_Suns_Art">
        </div>

        <div class="column col-md-8 col-sm-8 col-xs-12">
            <h3>A Thousand Suns</h3>
            <p>A Thousand Suns is the fourth studio album by American rock band Linkin Park. It was released on September 8, 2010, by Warner Bros. Records. The album was written by the band and was produced by Linkin Park vocalist Mike Shinoda and Rick Rubin, who worked together to produce the band's previous studio album Minutes to Midnight (2007).</p>

            <h4>Singles</h4>
            <ul>
                <li>"The Catalyst"</li>
                <audio controls>
  <source src="audio/thecatalist.mp3" type="audio/mpeg">
  Your browser does not support the audio tag.
</audio>
                <li>"Waiting for the End"</li>
               
                <li>"Burning in the Skies"</li>
                
            </ul>
        </div>
    </div>
    <hr>
    <!-- End A Thousand Suns -->

    <!-- Living Things -->
    <div class="row align-items-center">
        <div class="column col-md-4 col-sm-4 col-xs-12">

            <!-- Image From https://en.wikipedia.org/wiki/Living_Things_(Linkin_Park_album) -->
            <img src="images/living_things.jpg" alt="Living_Things_Art">
        </div>

        <div class="column col-md-8 col-sm-8 col-xs-12">
            <h3>Living Things</h3>
            <p>Living Things is the fifth studio album by American rock band Linkin Park. It was released under Warner Bros. Records and Machine Shop Recordings on June 20, 2012, in Japan, and throughout the rest of the world during the following week. Production was handled by vocalist Mike Shinoda and Rick Rubin.</p>

            <h4>Singles</h4>
            <ul>
                <li>"Burn it Down"</li>
                <audio controls>
  <source src="audio/burnitdown.mp3" type="audio/mpeg">
  Your browser does not support the audio tag.
</audio>
                <li>"Lost in the Echo"</li>
                
                <li>"Powerless"</li>
                
            </ul>
        </div>
    </div>
    <hr>
    <!-- End Living Things -->

    <!-- The Hunting Party -->

    <div class="row align-items-center">
        <div class="column col-md-4 col-sm-4 col-xs-12">
            <!-- Image From https://en.wikipedia.org/wiki/The_Hunting_Party_(album) -->
            <img src="images/the_hunting_party.jpg" alt="The_Hunting_Party_Art">
        </div>

        <div class="column col-md-8 col-sm-8 col-xs-12">
            <h3>The Hunting Party</h3>
            <p>The Hunting Party is the sixth studio album by American rock band Linkin Park. The album, produced by band members Mike Shinoda and Brad Delson, was released by Warner Bros. Records and Machine Shop on June 13, 2014. It is the first album since Meteora (2003) not to be produced with Rick Rubin, after producing the band's previous three studio albums.</p>

            <h4>Singles</h4>
            <ul>
                <li>"Guitly All the Same"</li>
                
                <li>"Until It's Gone"</li>
                <audio controls>
  <source src="audio/untilitsgone.mp3" type="audio/mpeg">
  Your browser does not support the audio tag.
</audio>
                <li>"Wastelands"</li>
                
            </ul>
        </div>
    </div>
    <hr>
    <!-- End The Hunting Party -->

    <!-- One More Light -->

<div id="edit" contenteditable="true">
    <div class="row align-items-center">
        <div class="column col-md-4 col-sm-4 col-xs-12">
            <!-- Image From https://en.wikipedia.org/wiki/One_More_Light -->
            <img src="images/one_more_light.jpeg" alt="One_More_Light_Art">
        </div>

        <div class="column col-md-8 col-sm-8 col-xs-12">
            <h3>One More Light</h3>
            <p>One More Light is the seventh studio album by American rock band Linkin Park. It was released on May 19, 2017 through Warner Bros. and Machine Shop. It is the last Linkin Park record produced before lead vocalist Chester Bennington's death on July 20, 2017.</p>

            <h4>Singles</h4>
            <ul>
                <li>"Heavy"</li>
                
                <li>"Talking to Myself"</li>
               
                <li>"One More Light"</li>
                <audio controls>
  <source src="audio/onemorelight.mp3" type="audio/mpeg">
  Your browser does not support the audio tag.
</audio>
            </ul>
        </div>
    </div>
    </div>
    <input type="button" value="save my edits" onclick="saveEdits()"/>

<div id="update"> Edit the text and click to save for next time</div>
    <hr>
    <!-- End One More Light -->
</div>
<script>
function myFunction() {
    var x = document.getElementById("myDIV");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
</script>

<!-- Start Form -->
<div class="survey" id="survey">
    <form method="POST" action="survey-processor.php">

        <?php
        include "inc/survey.inc";
        ?>

    </form>
</div>
<!-- End Form -->

<?php
include "inc/bottom.inc";
?>
