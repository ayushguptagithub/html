<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="prism.css" />

    <title>Css</title>
  </head>
  <body>
    
  <?php include("navbar.php"); ?>
      <!-- This is for information -->
<div class="info">
  <h1>HTML Styles - CSS</h1>
  <p>Cascading Style Sheets (CSS) is used to format the layout of a webpage.

    With CSS, you can control the color, font, the size of text, the spacing between elements, how elements are positioned and laid out, what background images or background colors are to be used, different displays for different devices and screen sizes, and much more!
  </p>

</div>
<hr>
 <!-- This is for information -->
 <div class="info">
  <h1>Using CSS</h1>
  <p>CSS can be added to HTML documents in 3 ways:

    <doc>Inline</doc> - by using the style attribute inside HTML elements

    <doc>Internal</doc> - by using a <doc>&lt;style&gt;</doc> element in the <doc>&lt;head&gt;</doc> section

    <doc>External</doc> - by using a <doc>&lt;link&gt;</doc> element to link to an external CSS file
  </p>

</div>
<hr>
    <!-- This is for information -->
    <div class="info">
      <h1>Inline CSS</h1>
        
      <p>An inline CSS is used to apply a unique style to a single HTML element.
        
        An inline CSS uses the style attribute of an HTML element.
        
        The following example sets the text color of the <doc>&lt;h1&gt;</doc> element to blue, and the text color of the <doc>&lt;p&gt;</doc> element to red:<doc>&lt;/h1&gt;</doc>
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
      &lt;h1 style="color:blue;"&gt;A Blue Heading&lt;/h1&gt;
      &lt;p style="color:red;"&gt;A red paragraph.&lt;/p&gt;
  
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
              <img src="images/css inline.png" />
  
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
  <h1>Internal CSS</h1>
    
  <p>An internal CSS is used to define a style for a single HTML page.
    
    An internal CSS is defined in the <doc>&lt;head&gt;</doc> section of an HTML page, within a <doc>&lt;style&gt;</doc> element.
    
    The following example sets the text color of ALL the <doc>&lt;h1&gt;</doc> elements (on that page) to blue, and the text color of ALL the <doc>&lt;p&gt;</doc> elements to red. In addition, the page will be displayed with a "powderblue" background color:
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
  &lt;style&gt;
        body {background-color: powderblue;}
        h1   {color: blue;}
        p    {color: red;}
  &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;

        &lt;h1&gt;This is a heading&lt;/h1&gt;
        &lt;p&gt;This is a paragraph.&lt;/p&gt;

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
          <img src="images/css internal.png" />

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
  <h1>External CSS</h1>
    
  <p>An external style sheet is used to define the style for many HTML pages.
    
    To use an external style sheet, add a link to it in the <doc>&lt;head&gt;</doc> section of each HTML page: 
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
        &lt;link rel="stylesheet" href="styles.css"&gt;
&lt;/head&gt;
&lt;body&gt;

        &lt;h1&gt;This is a heading&lt;/h1&gt;
        &lt;p&gt;This is a paragraph.&lt;/p&gt;

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
          <img src="images/css internal.png" />

        </code>
      </pre>
      <button id="copy-button">Copy</button>
    </div>
  </div>
</div>
</div>



<!-- This is for single image down stairs with 50% width-->
<div class="info">
  <p>
    The external style sheet can be written in any text editor. The file must not contain any HTML code, and must be saved with a .css extension.

    Here is what the "styles.css" file looks like:
  </p>
  
  <div class="codeblock">
    <h1>style.css</h1>
    <div class="block">
      <div class="container">
        <div class="code-wrapper">
          <pre>
            <code id="code" class="language-css">
  body {
    background-color: powderblue;
  }
  h1 {
    color: blue;
  }
  p {
    color: red;
  }
              
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
      <h1>CSS Colors, Fonts and Sizes</h1>
      <p>Here, we will demonstrate some commonly used CSS properties. You will learn more about them later.

        The CSS <doc>color</doc> property defines the text color to be used.
        
        The CSS <doc>font-family</doc> property defines the font to be used.
        
        The CSS <doc>font-size</doc> property defines the text size to be used.
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
    &lt;style&gt;
    h1 {
      color: blue;
      font-family: verdana;
      font-size: 300%;
    }
    p  {
      color: red;
      font-family: courier;
      font-size: 160%;
    }
    &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;

      &lt;h1&gt;This is a heading&lt;/h1&gt;
      &lt;p&gt;This is a paragraph.&lt;/p&gt;

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
              <img src="images/css font.png" />
  
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
        <h1>CSS Border</h1>
        <p>The CSS border property defines a border around an HTML element.
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
      &lt;style&gt;
      p {
        border: 2px solid powderblue;
      }
      &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;

    &lt;h1&gt;This is a heading&lt;/h1&gt;

    &lt;p&gt;This is a paragraph.&lt;/p&gt;
    &lt;p&gt;This is a paragraph.&lt;/p&gt;
    &lt;p&gt;This is a paragraph.&lt;/p&gt;

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
                <img src="images/css border.png" />
    
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
      <h1>CSS Padding</h1>
      <p>The CSS <doc>padding</doc> property defines a padding (space) between the text and the border.
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
    &lt;style&gt;
    p {
      border: 2px solid powderblue;
      padding: 30px;
    }
    &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;

  &lt;h1&gt;This is a heading&lt;/h1&gt;

  &lt;p&gt;This is a paragraph.&lt;/p&gt;
  &lt;p&gt;This is a paragraph.&lt;/p&gt;
  &lt;p&gt;This is a paragraph.&lt;/p&gt;

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
              <img src="images/css padding.png" />
  
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
    <h1>CSS Margin</h1>
    <p>The CSS <doc>margin</doc> property defines a margin (space) outside the border.
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
  &lt;style&gt;
  p {
    border: 2px solid powderblue;
    margin: 50px;
  }
  &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;

&lt;h1&gt;This is a heading&lt;/h1&gt;

&lt;p&gt;This is a paragraph.&lt;/p&gt;
&lt;p&gt;This is a paragraph.&lt;/p&gt;
&lt;p&gt;This is a paragraph.&lt;/p&gt;

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
            <img src="images/css margin.png" />

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
