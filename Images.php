  
  <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
      <link rel="stylesheet" href="style.css" />
      <link rel="stylesheet" href="prism.css" />
  
      <title>Images</title>
    </head>
    <body>
    <?php include("navbar.php"); ?>
   <!-- This is for information -->
   <div class="info">
    <h1>HTML Images Syntax </h1>
    <p>The HTML <doc>&lt;img&gt;</doc> tag is used to embed an image in a web page.

        Images are not technically inserted into a web page; images are linked to web pages. The <doc>&lt;img&gt;</doc> tag creates a holding space for the referenced image.
        
        The <doc>&lt;img&gt;</doc> tag is empty, it contains attributes only, and does not have a closing tag.
        
        The <doc>&lt;img&gt;</doc> tag has two required attributes:
        
        <doc>src</doc> - Specifies the path to the image
        <doc>alt</doc> - Specifies an alternate text for the image
    </p>
  
  </div>
<!-- this is for code block with its out put -->
  <div class="codeblock">
    <h1>Example</h1>
  <div class="block">
      <div class="container">
        <div class="code-wrapper">
          <pre>
            <code id="code" class="language-markup">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;Page Title&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h2&gt;Alternative text&lt;/h2&gt;

    &lt;p&gt;The alt attribute should reflect the image content, so users who cannot see the image get an understanding of what the image contains:&lt;/p&gt;
    
    &lt;img src="img_chania.jpg" alt="Flowers in Chania" width="460" height="345"&gt;
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
              <img src="images/images src alt.png" />
  
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
    <h1>Image Size - Width and Height</h1>
    <p>You can use the <doc>style</doc> attribute to specify the width and height of an image.
    </p>
  
  </div>
<!-- this is for code block with its out put -->
  <div class="codeblock">
    <h1>Example</h1>
  <div class="block">
      <div class="container">
        <div class="code-wrapper">
          <pre>
            <code id="code" class="language-markup">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;Page Title&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h2&gt;Image Size&lt;/h2&gt;

    &lt;p&gt;Here we use the style attribute to specify the width and height of an image:&lt;/p&gt;

    &lt;img src="img_girl.jpg" alt="Girl in a jacket" style="width:200px;height:200px;"&gt;
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
              <img src="images/images height width.png" />
  
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
    <h1>Image Floating</h1>
    <p>You can use the <doc>float</doc> property to let the image float to the right or to the left of a text:
    </p>
  
  </div>
<!-- this is for code block with its out put -->
  <div class="codeblock">
    <h1>Example</h1>
  <div class="block">
      <div class="container">
        <div class="code-wrapper">
          <pre>
            <code id="code" class="language-markup">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;Page Title&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;

    &lt;h2&gt;Floating Images&lt;/h2&gt;
    &lt;p&gt;&lt;strong&gt;Float the image to the right:&lt;/strong&gt;&lt;/p&gt;

    &lt;p&gt;
    &lt;img src="smiley.gif" alt="Smiley face" style="float:right;width:42px;height:42px;"&gt;
    A paragraph with a floating image. A paragraph with a floating image. A paragraph with a floating image.
    &lt;/p&gt;

    &lt;p&gt;&lt;strong&gt;Float the image to the left:&lt;/strong&gt;&lt;/p&gt;
    &lt;p&gt;
    &lt;img src="smiley.gif" alt="Smiley face" style="float:left;width:42px;height:42px;"&gt;
    A paragraph with a floating image. A paragraph with a floating image. A paragraph with a floating image.  
    &lt;/p&gt;

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
              <img src="images/images float.png" />
  
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
    <h1>Common Image Formats</h1>
    <p>Here are the most common image file types, which are supported in all browsers (Chrome, Edge, Firefox, Safari, Opera):
    </p>
  
  </div>
<!-- this is for code block with its out put -->
  <div class="codeblock">
  <div class="block">
      <div class="containerimg" >
        <div class="code-wrapper" >
          <pre>
            <code id="code" >
              <img src="images/images format.png" />
  
            </code>
          </pre>
          <button id="copy-button">Copy</button>
        </div>
      </div>
    </div>
  </div>
  <hr>
  
      <script src="main.js" defer></script>
      <script src="prism.js"></script>
    </body>
  </html>
  
  
 