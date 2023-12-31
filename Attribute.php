<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="prism.css" />

    <title>Attribute</title>
  </head>
  <body>
    <?php include("navbar.php"); ?>
          <!-- This is for information -->
<div class="info">
    <h1>HTML Attributes</h1>
    <p>All HTML elements can have <doc>attributes</doc>

        Attributes provide <doc>additional information</doc> about elements
        
        Attributes are always specified in the <doc>start tag</doc>

        Attributes usually come in name/value pairs like: <doc>name="value"</doc>

    </p>
  
  </div>
  <hr>
<!-- This is for information -->
  <div class="info">
    <h1>The href Attribute</h1>
    <p>The <doc>&lt;a&gt;</doc> tag defines a hyperlink. 
    
        The href attribute specifies the URL of the page the link goes to:

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
    &lt;h2&gt;The href Attribute</h2>

    &lt;p&gt;HTML links are defined with the a tag. 
    The link address is specified in the href attribute:&lt;/p>

    &lt;a href="https://Google.com"&gt;Visit Google&lt;/a>
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
              <a href="https://www.google.com">
                <img src="images/href a.png" /></a>
  
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
    <h1>The src Attribute</h1>
    <p>The <doc>&lt;img&gt;</doc> tag is used to embed an image in an HTML page. 

        The src attribute specifies the path to the image to be displayed:
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
    &lt;h2&gt;The src Attribute&lt;/h2>

    &lt;p&gt;HTML images are defined with the img tag, <br>
    and the filename of the image source is specified in the src attribute:&lt;/p>

    &lt;img src="img_girl.jpg" width="500" height="600"&gt;&lt;/a>
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
              <a href="https://www.google.com"><img src="images/src img.png" /></a>
  
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
    <h1>The alt Attribute</h1>
    <p> The required <doc>alt</doc> attribute for the <doc>&lt;img&gt;</doc> tag specifies an alternate text for an image, if the image for some reason cannot be displayed.

        This can be due to a slow connection, or an error in the <doc> src </doc>attribute, or if the user uses a screen reader.
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
    &lt;h2&gt;The alt Attribute&lt;/h2>

&lt;p&gt;The alt attribute should reflect the image content, so users who <br>
cannot see the image get an understanding of what the image contains:&lt;/p>

&lt;img src="img_girl.jpg" alt="Girls Image"&gt;&lt;/a>
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
              <img src="images/alt attr.png" />
  
            </code>
          </pre>
          <button id="copy-button">Copy</button>
        </div>
      </div>
    </div>
  </div>

<hr >

<!-- This is for information -->
<div class="info">
    <h1>The style Attribute</h1>
    <p> The <doc>style</doc> attribute is used to add styles to an element, such as color, font, size, and more.
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
    &lt;h2&gt;The style Attribute&lt;/h2>

&lt;p&gt;The style attribute is used to add styles to an element, such as color:&lt;/p>

&lt;p style="color:red;"&gt;This is red paragraph&lt;/p>
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
              <img src="images/style attr.png" />
  
            </code>
          </pre>
          <button id="copy-button">Copy</button>
        </div>
      </div>
    </div>
  </div>

<hr >

<!-- This is for information -->
<div class="info">
    <h1>The title Attribute</h1>
    <p> The <span>title</span> attribute defines some extra information about an element.

        The value of the title attribute will be displayed as a tooltip when you mouse over the element:
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
    &lt;h2 title="I'm a header"&gt;The title Attribute&lt;/h2>

    &lt;p title="I'm a tooltip"&gt;Mouse over this paragraph, 
        to display the title attribute as a tooltip.&lt;/p>

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
              <img src="images/tittle attr.png" />
  
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
