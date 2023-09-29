<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="prism.css" />

    <title>Media</title>
  </head>
  <body>
    

  <?php include("navbar.php"); ?>
 <!-- This is for information -->
<div class="info">
  <h1>What is Multimedia?
  </h1>
  <p>Multimedia comes in many different formats. It can be almost anything you can hear or see, like images, music, sound, videos, records, films, animations, and more.
    
    Web pages often contain multimedia elements of different types and formats.</p>
</div>

<hr>

<!-- This is for information -->
<div class="info">
  <h1>Browser Support</h1>
  <p>The first web browsers had support for text only, limited to a single font in a single color.
    
    Later came browsers with support for colors, fonts, images, and multimedia!</p>
</div>

<hr>


<!-- This is for information -->
<div class="info">
  <h1>Multimedia Formats
    </h1>
  <p>Multimedia elements (like audio or video) are stored in media files.
    
    The most common way to discover the type of a file, is to look at the file extension.
    
    Multimedia files have formats and different extensions like: .wav, .mp3, .mp4, .mpg, .wmv, and .avi.</p>
</div>

<hr>

<!-- This is for information -->
<div class="info">
  <h1>Common Video Formats</h1>
  <p>There are many video formats out there.
    
    The MP4, WebM, and Ogg formats are supported by HTML.
    
    The MP4 format is recommended by YouTube.</p>
</div>



<!-- for single image -->
<img src="images/media video format.png" width="80%" height="70%" style="margin-left: 50px; "/>

<hr>

<!-- This is for information -->
<div class="info">
  <h1>Common Audio Formats
    </h1>
  <p>MP3 is the best format for compressed recorded music. The term MP3 has become synonymous with digital music.
    
    If your website is about recorded music, MP3 is the choice.</p>
</div>



<!-- for single image -->
<img src="images/media audio format.png" width="80%" height="70%" style="margin-left: 50px; "/>

<hr>
<!-- This is for information -->
<div class="info">
  <h1>The HTML <doc>&lt;video&lt;</doc> Element
    </h1>
  <p>To show a video in HTML, use the <doc>&lt;video&lt;</doc> element:</p>
</div>
<!-- this is for code block with its out put -->
<div class="codeblock">
  <h1>Example</h1>
<div class="block">
    <div class="container">
      <div class="code-wrapper">
        <pre>
          <code id="code" class="language-markup">
&lt;DOCTYPE html&gt;
&lt;html&gt;
&lt;body&gt;

&lt;video width="320" height="240" controls&gt;
  &lt;source src="movie.mp4" type="video/mp4"&gt;
  &lt;source src="movie.ogg" type="video/ogg"&gt;
  Your browser does not support the video tag.
&lt;/video&gt;

&lt;/body&gt;
&lt;/html&gt;

          </code>
        </pre>
        <button id="copy-button">Copy</button>
      </div>
    </div>

    <span style='font-size:100px; margin-top:100px;'>&#8594;</span>

    <div class="container">
      <div class="code-wrapper">
        <pre>
          <code id="code" class="">
            <video width="500" height="500" controls>
              <source src="images/video tag movie.mp4" type="video/mp4">
              <source src="movie.ogg" type="video/ogg">
              Your browser does not support the video tag.
            </video>

          </code>
        </pre>
        <button id="copy-button">Copy</button>
      </div>
    </div>
  </div>
</div>
<hr>




  <!-- This is for information -->
<div class="info">
  <p> The controls attribute adds video controls, like play, pause, and volume.

    It is a good idea to always include width and height attributes. If height and width are not set, the page might flicker while the video loads.
    
    The <doc>&lt;source&gt;</doc> element allows you to specify alternative video files which the browser may choose from. The browser will use the first recognized format.
    
    The text between the <doc>&lt;video&gt;</doc> and <doc>&lt;/video&gt;</doc> tags will only be displayed in browsers that do not support the <doc>&lt;video&gt;</doc> element.</p>
</div>
  <hr>

<!-- This is for information -->
<div class="info">
  <h1>The HTML <doc>&lt;video&gt;</doc> Autoplay
    </h1>
  <p>To start a video automatically, use the autoplay attribute:</p>
</div>
<!-- this is for code block with its out put -->
<div class="codeblock">
  <h1>Example</h1>
<div class="block">
    <div class="container">
      <div class="code-wrapper">
        <pre>
          <code id="code" class="language-markup" >
&lt;DOCTYPE html&gt;
&lt;html&gt;
&lt;body&gt;

&lt;video width="320" height="240" autoplay&gt;
  &lt;source src="images/video tag movie.mp4" type="video/mp4"&gt;
  &lt;source src="movie.ogg" type="video/ogg"&gt;
  Your browser does not support the video tag.
&lt;/video&gt;

&lt;/body&gt;
&lt;/html&gt;

          </code>
        </pre>
        <button id="copy-button">Copy</button>
      </div>
    </div>    
          <span style='font-size:100px; margin-top:100px;'>&#8594;</span>
          <div class="container">
              <div class="code-wrapper">
                <video width="500" height="500" autoplay>
                  <source src="images/video tag movie.mp4" type="video/mp4">
                  <source src="movie.ogg" type="video/ogg">
                  Your browser does not support the video tag.
                </video>
              </div>
          </div>
      </div>
  </div>
<hr>
<!-- This is for information -->
<div class="info">
  <p>Add muted after autoplay to let your video start playing automatically (but muted):
  </p>
</div>

<!-- this is for code block with its out put -->
<div class="codeblock">
  <h1>Example</h1>
<div class="block">
    <div class="container">
      <div class="code-wrapper">
        <pre>
          <code id="code" class="language-markup" >
&lt;DOCTYPE html&gt;
&lt;html&gt;
&lt;body&gt;

&lt;video width="320" height="240" autoplay muted&gt;
  &lt;source src="images/video tag movie.mp4" type="video/mp4"&gt;
  &lt;source src="movie.ogg" type="video/ogg"&gt;
  Your browser does not support the video tag.
&lt;/video&gt;

&lt;/body&gt;
&lt;/html&gt;

          </code>
        </pre>
        <button id="copy-button">Copy</button>
      </div>
    </div>    
          <span style='font-size:100px; margin-top:100px;'>&#8594;</span>
          <div class="container">
              <div class="code-wrapper">
                <video width="500" height="500" autoplay muted>
                  <source src="images/video tag movie.mp4" type="video/mp4">
                  <source src="movie.ogg" type="video/ogg">
                  Your browser does not support the video tag.
                </video>
              </div>
          </div>
      </div>
  </div>
<hr>

<!-- This is for information -->
<div class="info">
  <h1>The HTML <doc>&lt;audio&gt;</doc> Element
    </h1>
  <p>To play an audio file in HTML, use the <doc>&lt;audio&gt;</doc> element:
  </p>
</div>

<!-- this is for code block with its out put -->
<div class="codeblock">
  <h1>Example</h1>
<div class="block">
    <div class="container">
      <div class="code-wrapper">
        <pre>
          <code id="code" class="language-markup" >
&lt;DOCTYPE html&gt;
&lt;html&gt;
&lt;body&gt;

&lt;audio controls&gt;

  &lt;source src="images/lukrembo.mp3" type="audio/mpeg"&gt;
 
  Your browser does not support the video tag.
&lt;/audio&gt;

&lt;/body&gt;
&lt;/html&gt;

          </code>
        </pre>
        <button id="copy-button">Copy</button>
      </div>
    </div>    
          <span style='font-size:100px; margin-top:100px;'>&#8594;</span>
          <div class="container">
              <div class="code-wrapper">
                <audio controls>
                  <source src="images/Lukrembo.mp3" type="audio/mpeg">
                Your browser does not support the audio element.
                </audio>
              </div>
          </div>
      </div>
  </div>
<hr>

<!-- This is for information -->
<div class="info">
  <h1>The HTML <doc>&lt;audio&gt;</doc> Element
    </h1>
  <p>The controls attribute adds audio controls, like play, pause, and volume.

    It is a good idea to always include width and height attributes. If height and width are not set, the page might flicker while the audio loads.
    
    The <doc>&lt;source&gt;</doc> element allows you to specify alternative audio files which the browser may choose from. The browser will use the first recognized format.
    
    The text between the <doc>&lt;audio&gt;</doc> and <doc>&lt;/audio&gt;</doc> tags will only be displayed in browsers that do not support the <doc>&lt;audio&gt;</doc> element.
  </p>
</div>

<!-- this is for code block with its out put -->
<div class="codeblock">
  <h1>Example</h1>
<div class="block">
    <div class="container">
      <div class="code-wrapper">
        <pre>
          <code id="code" class="language-markup" >
&lt;DOCTYPE html&gt;
&lt;html&gt;
&lt;body&gt;

&lt;audio autoplay&gt;

  &lt;source src="images/lukrembo.mp3" type="audio/mpeg"&gt;
 
  Your browser does not support the video tag.
&lt;/audio&gt;

&lt;/body&gt;
&lt;/html&gt;

          </code>
        </pre>
        <button id="copy-button">Copy</button>
      </div>
    </div>    
          <span style='font-size:100px; margin-top:100px;'>&#8594;</span>
          <div class="container">
            <div class="code-wrapper">
              <audio autoplay>
                <source src="images/Lukrembo.mp3" type="audio/mpeg">
              Your browser does not support the audio element.
              </audio>
            </div>
        </div>
      </div>
  </div>
<hr>

<!-- This is for information -->
<div class="info">
  <p>Add muted after autoplay to let your audio start playing automatically (but muted):
  </p>
</div>

<!-- this is for code block with its out put -->
<div class="codeblock">
  <h1>Example</h1>
<div class="block">
    <div class="container">
      <div class="code-wrapper">
        <pre>
          <code id="code" class="language-markup" >
&lt;DOCTYPE html&gt;
&lt;html&gt;
&lt;body&gt;

&lt;audio autoplay muted&gt;

  &lt;source src="images/lukrembo.mp3" type="audio/mpeg"&gt;
 
  Your browser does not support the video tag.
&lt;/audio&gt;

&lt;/body&gt;
&lt;/html&gt;

          </code>
        </pre>
        <button id="copy-button">Copy</button>
      </div>
    </div>    
          <span style='font-size:100px; margin-top:100px;'>&#8594;</span>
          <div class="container">
              <div class="code-wrapper">
                <audio autoplay muted>
                  <source src="images/Lukrembo.mp3" type="audio/mpeg">
                Your browser does not support the audio element.
                </audio>
              </div>
          </div>
      </div>
  </div>
<hr>
<!-- This is for information -->
<div class="info">
  <h1>Playing a YouTube Video in HTML</h1>
  <p>Upload the video to YouTube

    Take a note of the video id

    Define an <doc>&lt;iframe&gt;</doc> element in your web page

    Let the src attribute point to the video URL

    Use the width and height attributes to specify the dimension of the player

  </p>
</div>

<!-- this is for code block with its out put -->
<div class="codeblock">
  <h1>Example</h1>
<div class="block">
    <div class="container">
      <div class="code-wrapper">
        <pre>
          <code id="code" class="language-markup" >
&lt;DOCTYPE html&gt;
&lt;html&gt;
&lt;body&gt;

      &lt;iframe width="420" height="315"
      src="https://www.youtube.com/embed/tgbNymZ7vqY"&gt;
      &lt;/iframe&gt;

&lt;/body&gt;
&lt;/html&gt;

          </code>
        </pre>
        <button id="copy-button">Copy</button>
      </div>
    </div>    
          <span style='font-size:100px; margin-top:100px;'>&#8594;</span>
          <div class="container">
              <div class="code-wrapper">
                <iframe width="420" height="315"
                  src="https://www.youtube.com/embed/tgbNymZ7vqY">
                  </iframe>
              </div>
          </div>
      </div>
  </div>
<hr>

    <script src="main.js" defer></script>
    <script src="prism.js"></script>
  </body>
</html>
