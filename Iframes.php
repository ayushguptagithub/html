<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="prism.css" />

    <title>Iframe</title>
  </head>
  <body>
    
  <?php include("navbar.php"); ?>
     <!-- This is for information -->
     <div class="info">
        <h1>HTML Iframe Syntax
            </h1>
        <p>The HTML <doc>&lt;iframe&gt;</doc> tag specifies an inline frame.
            
            An inline frame is used to embed another document within the current HTML document.
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
    &lt;h2&gt;HTML Iframes&lt;/h2&gt;
    &lt;p&gt;You can use the height and width attributes to specify the size of the iframe:&lt;/p&gt;
    
    &lt;iframe src="demo_iframe.htm" height="200" width="300" title="Iframe Example"&gt;&lt;/iframe&gt;
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
                <img src="images/iframes height and width.png" />
    
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
        <h1>Iframe - Remove the Border
            </h1>
        <p>By default, an <doc>iframe</doc> has a border around it.
            
            To remove the border, add the <doc>style</doc> attribute and use the CSS <doc>border</doc> property:
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
        &lt;h2&gt;Remove the Iframe Border&lt;/h2&gt;
        &lt;p&gt;To remove the default border of the iframe, use CSS:&lt;/p&gt;

        &lt;iframe src="demo_iframe.htm" style="border:none;" title="Iframe Example"&gt;&lt;/iframe&gt;


        &lt;h2&gt;Custom Iframe Border&lt;/h2&gt;
        &lt;p&gt;With CSS, you can also change the size, style and color of the iframe's border:&lt;/p&gt;

        &lt;iframe src="demo_iframe.htm" style="border:2px solid red;" title="Iframe Example"&gt;&lt;/iframe&gt;
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
                <img src="images/iframes borderless and bordered.png" />
    
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
        <h1>Iframe - Target for a Link
            </h1>
        <p>An <doc>iframe</doc> can be used as the target frame for a link.
            
            The target attribute of the link must refer to the name attribute of the iframe:
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
        &lt;h2&gt;Iframe - Target for a Link&lt;/h2&gt;

        &lt;iframe src="demo_iframe.htm" name="iframe_a" height="300px" width="100%" title="Iframe Example"&gt;&lt;/iframe&gt;
        
        &lt;p&gt;&lt;a href="https://www.w3schools.com" target="iframe_a"&gt;W3Schools.com&lt;/a&gt;&lt;/p&gt;
        
        &lt;p&gt;When the target attribute of a link matches the name of an iframe, the link will open in the iframe.&lt;/p&gt;
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
                <img src="images/Iframes target links.png" />
    
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
