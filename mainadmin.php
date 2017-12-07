<body>

<div class="container">
<?php
 ob_start();
 session_start();
 require_once 'include/config.php';
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
    <span class="logo"><a href="#">Welcome To The Site! <?php echo $userRow['username']; ?></a></span>
    <ul>
        
       <li> <?php if(isset($_SESSION['user'])){ ?>
  <a class="link" href="logout.php" style="text-decoration:none">logout</a>
<?php }else{ ?>
  <a class="link" href="login.php" style="text-decoration:none">login</a>
<?php } ?> </li>
       <!-- <li> <a href=login.php>Log in</a></li><li> <a href=createaccount.php>Sign up</a></li> -->
        <li><a class="slide" href="#summary">Summary</a></li>
        <li><a class="slide" href="#survey">Survey</a></li>
        <li><a class="slide" href="#credits">Credits</a></li>
        <li><a href="myprofile.php">User Account</a></li>
    </ul>
</nav>
   <!-- Bio -->
        <div class="summary" id="summary">
            <div class="jumbotron">
                <h1 class="display-3">LINKIN PARK SURVEY SITE</h1>

                <img style="height:350px; width:450px;" src="https://up-1.cdn-fullscreendirect.com/production/photos/10272/original/20170502_173225_10272_989344.jpeg">

                <p class="lead">PRE ORDER ONE MORE LIGHT LIVE - AVAILABLE DECEMBER 15TH!</p>
                <hr class="my-4">
                <p>We decided to do our survery on Linkin Park because it is a band that we thought most people would be familiar with. In recent news, lead localist Chester Bennington died and we thought that this survey would pay tribute to him and the band.</p>
                  <p class="lead">
                    <a class="btn btn-primary btn-lg" href="http://bit.ly/2AxXScN" role="button">PRE ORDER</a>
                </p>

            </div>
        </div>
        <!--<div class="summary" id="summary">
<!-- Bio -->

<div class="summary" id="summary">
  
    <h2>Summary</h2>
    <div id="summary" class="row align-items-center" contenteditable="true">
        <div class="column col-md-4 col-sm-4 col-xs-12">
            <!-- Image from http://www.billboard.com/articles/columns/rock/7325484/linkin-park-2016-album-charity-poker-tournament-interview -->
            <img style="height:270px; width:350px;" src="images/band.jpg" class="bandpic" alt="Linkin_Park">
        </div>

        <div class="column col-md-8 col-sm-8 col-xs-12">
            <p>Linkin Park was founded by three high school friends: Mike Shinoda, Rob Bourdon, and Brad Delson.[21] The three attended Agoura High School in Agoura Hills, California, a suburb of Los Angeles. After graduating from high school, the three began to take their musical interests more seriously, recruiting Joe Hahn, Dave "Phoenix" Farrell, and Mark Wakefield to perform in their band, then called Xero. Though limited in resources, the band began recording and producing songs within Shinoda's makeshift bedroom studio in 1996, resulting in a four-track demo tape, entitled Xero.[21][22] Tensions and frustration within the band grew however after they failed to land a record deal.[21] The lack of success and stalemate in progress prompted Wakefield, at that time the band's vocalist, to leave the band in search of other projects.[21][22] Farrell also left to tour with Tasty Snax, a Christian punk and ska band</p>

            <p>After spending a considerable time searching for Wakefield's replacement, Xero recruited Arizona vocalist Chester Bennington, who was recommended by Jeff Blue, the vice president of Zomba Music in March 1999.[25][26] Bennington, formerly of a post-grunge band by the name of Grey Daze, became a standout among applicants because of the dynamic in his singing style.[21] The band then agreed on changing its name from Xero to Hybrid Theory; the newborn vocal chemistry between Shinoda and Bennington helped revive the band, inciting them to work on new material.[21] In 1999 the band released a self-titled extended play, which they circulated across internet chat-rooms and forums with the help of an online 'street team'.[27][28] The band's renaissance culminated with another change in name, this time to Linkin Park, a play on and homage to Santa Monica's Lincoln Park[21] (now called Christine Emerson Reed Park[29]). The band initially wanted to use the name "Lincoln Park", however they changed it to "Linkin" to acquire the internet domain "linkinpark.com".[30] The band still struggled to sign a record deal. Linkin Park turned to Jeff Blue for additional help after facing numerous rejections from several major record labels. After failing to catch Warner Bros. Records on three previous reviews, Jeff Blue, who had negotiated his employment contract with Warner Brothers to include signing Linkin Park, and was now the vice president of Warner Bros. Records, helped the band sign a deal with the company in 1999. The band released its breakthrough album, Hybrid Theory, the following year</p>
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
            <img style="height:250px; width:250px;" src="images/hybrid_theory.jpg" alt="Hybrid_Thoery_Art">
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
                <img style="height:250px; width:250px;" src="images/meteora.jpg" alt="Meteora_Art">
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
            <img style="height:250px; width:250px;" src="images/minutes_to_midnight.jpg" alt="Minutes_to_Midnight_Art">
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
            <img style="height:250px; width:250px;" src="images/a_thousand_suns.jpg" alt="A_Thousand_Suns_Art">
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
            <img style="height:250px; width:250px;" src="images/living_things.jpg" alt="Living_Things_Art">
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
            <img style="height:250px; width:250px;" src="images/the_hunting_party.jpg" alt="The_Hunting_Party_Art">
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
            <img style="height:250px; width:250px;" src="images/one_more_light.jpeg" alt="One_More_Light_Art">
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
