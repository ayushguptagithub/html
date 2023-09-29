<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="prism.css" />

    <title>Style</title>
  </head>
  <body>
    
  <?php include("navbar.php"); ?>
  <!-- This is for information -->
<div class="info">
    <h1>HTML Styles</h1>
    <p>
        The HTML <doc>style</doc> attribute is used to add styles to an element, such as <doc>color, font, size, and more.</doc>

        Setting the style of an HTML element, can be done with the <doc>style</doc> attribute.

        The HTML style attribute has the following syntax:
    
        &lt;tagname <doc>style="property:value;"</doc>&gt; Content goes here... &lt;/tagname&gt;
    </p>
  
  </div>
  <hr>
 <!-- This is for information -->
  <div class="info">
    <h1>Background Color</h1>
    <p>The CSS <doc>background-color</doc> property defines the background color for an HTML element.
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
                &lt;body style="background-color:powderblue;"&gt;
                  &lt;h1 style="background-color:green;"&gt;My First Heading&lt;/h1&gt;
                  &lt;p style="background-color:tomato;"&gt;My first paragraph.&lt;/p&gt;
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
              <img src="images/style bg-color.png" />
  
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
    <h1>Text Color</h1>
    <p>The CSS <doc>color</doc> property defines the text color for an HTML element:
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
                  &lt;h1 style="color:blue;"&gt;My First Heading&lt;/h1&gt;
                  &lt;p style="color:red;"&gt;My first paragraph.&lt;/p&gt;
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
              <img src="images/style text-color.png" />
  
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
    <h1>Fonts</h1>
    <p>The CSS <doc>font-family</doc> property defines the font to be used for an HTML element:
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
                  &lt;h1 style="font-family:verdana;"&gt;My First Heading&lt;/h1&gt;
                  &lt;p style="font-family:courier;"&gt;My first paragraph.&lt;/p&gt;
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
              <img src="images/style fonts.png" />
  
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
    <h1>Text Size</h1>
    <p>The CSS <doc>font-size</doc> property defines the text size for an HTML element:
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
                  &lt;h1 style="font-size:300%;"&gt;My First Heading&lt;/h1&gt;
                  &lt;p style="font-size:160%;"&gt;My first paragraph.&lt;/p&gt;
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
              <img src="images/style fontsize.png" />
  
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
    <h1>Text Alignment
        </h1>
    <p>The CSS <doc>text-align</doc> property defines the horizontal text alignment for an HTML element:
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
                  &lt;h1 style="text-align:center;"&gt;Centered Heading&lt;/h1&gt;
                  &lt;p style="text-align:center;"&gt;Centered paragraph.&lt;/p&gt;
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
              <img src="images/style text-align.png" />
  
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
