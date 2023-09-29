<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="prism.css" />

    <title>Headings</title>
  </head>
  <body>
  <?php include("navbar.php"); ?>
  <!-- This is for information -->
<div class="info">
    <h1>HTML Headings</h1>
    <p>HTML headings are defined with the  <doc>&lt;h1&gt;</doc> to <doc>&lt;h6&gt;</doc> tags.

        <doc>&lt;h1&gt;</doc> defines the most important heading. <doc>&lt;h6&gt;</doc> defines the least important heading.
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
        &lt;h1&gt;Heading 1&lt;/h1&gt;
        &lt;h2&gt;Heading 2&lt;/h2&gt;
        &lt;h3&gt;Heading 3&lt;/h3&gt;
        &lt;h4&gt;Heading 4&lt;/h4&gt;
        &lt;h5&gt;Heading 5&lt;/h5&gt;
        &lt;h6&gt;Heading 6&lt;/h6&gt;
    
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
              <img src="images/Headings tags.png" height="100px !important"  />
  
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
    <h1>Bigger Headings</h1>
    <p>Each HTML heading has a default size. However, you can specify the size for any heading with the style attribute, using the CSS font-size property:
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
        &lt;h1&gt;Heading&lt;/h1&gt;

        &lt;h1 style="font-size:60px;"&gt;Heading&lt;/h1&gt;
    
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
              <img src="images/Heading Size.png" height="100px !important"  />
  
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
