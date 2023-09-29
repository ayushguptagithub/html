<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="prism.css" />

    <title>Colors</title>
  </head>
  <body>
    
  <?php include("navbar.php"); ?>
    <!-- This is for single image down stairs -->
<div class="info">

  <h1>Color Names</h1>
  <p>In HTML, a color can be specified by using a color name:
  </p>
  <div class="imagesectionfull">
    <pre>
      <code id="code" >
        <img src="images/colors name.png" />

      </code>
    </pre>
    <button id="copy-button">Copy</button>
  </div>
</div>

<hr>

  <!-- This is for single image down stairs -->
  <div class="info">

    <h1>Color Values</h1>
    <p>In HTML, colors can also be specified using <doc>RGB values</doc>, <doc>HEX values</doc>, <doc>HSL(Hue, Saturation, and Lightness) values</doc>, <doc>RGBA(Red, Green, Blue, and Alpha) values</doc>, and <doc>HSLA( Hue, Saturation, Lightness, and Alpha) values</doc>.

      The following three <doc>&lt;div&gt;</doc> elements have their background color set with RGB, HEX, and HSL values:
      
      
    </p>
    <div class="imagesectionfull">
      <pre>
        <code id="code" >
          <img src="images/colors values.png" />
  
        </code>
      </pre>
      <button id="copy-button">Copy</button>
    </div>
  </div>
  
  <hr>


  <!-- This is for information -->
  <div class="info">
    <h1>RGB Color Values</h1>
    <p>In HTML, a color can be specified as an RGB value, using this formula:

      <doc>rgb(red, green, blue)</doc>
      
      Each parameter (red, green, and blue) defines the intensity of the color with a value between 0 and 255.
      
      This means that there are 256 x 256 x 256 = 16777216 possible colors!
      
      For example, rgb(255, 0, 0) is displayed as red, because red is set to its highest value (255), and the other two (green and blue) are set to 0.
      
      Another example, rgb(0, 255, 0) is displayed as green, because green is set to its highest value (255), and the other two (red and blue) are set to 0.
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
      &lt;h1 style="background-color:rgb(255, 0, 0);"&gt;rgb(255, 0, 0)&lt;/h1&gt;
      &lt;h1 style="background-color:rgb(0, 0, 255);"&gt;rgb(0, 0, 255)&lt;/h1&gt;
      &lt;h1 style="background-color:rgb(60, 179, 113);"&gt;rgb(60, 179, 113)&lt;/h1&gt;
      &lt;h1 style="background-color:rgb(238, 130, 238);"&gt;rgb(238, 130, 238)&lt;/h1&gt;
      &lt;h1 style="background-color:rgb(255, 165, 0);"&gt;rgb(255, 165, 0)&lt;/h1&gt;
      &lt;h1 style="background-color:rgb(106, 90, 205);"&gt;rgb(106, 90, 205)&lt;/h1&gt;
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
              <img src="images/colors rgb.png" />
  
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
      <h1>Shades of Gray</h1>
      <p>Shades of gray are often defined using equal values for all three parameters:
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
          &lt;h1 style="background-color:rgb(60, 60, 60);"&gt;rgb(60, 60, 60)&lt;/h1&gt;
          &lt;h1 style="background-color:rgb(100, 100, 100);"&gt;rgb(100, 100, 100)&lt;/h1&gt;
          &lt;h1 style="background-color:rgb(140, 140, 140);"&gt;rgb(140, 140, 140)&lt;/h1&gt;
          &lt;h1 style="background-color:rgb(180, 180, 180);"&gt;rgb(180, 180, 180)&lt;/h1&gt;
          &lt;h1 style="background-color:rgb(200, 200, 200);"&gt;rgb(200, 200, 200)&lt;/h1&gt;
          &lt;h1 style="background-color:rgb(240, 240, 240);"&gt;rgb(240, 240, 240)&lt;/h1&gt;
    
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
                <img src="images/colors rgb gray shade.png" />
    
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
      <h1>RGBA Color Values</h1>
      <p>RGBA color values are an extension of RGB color values with an Alpha channel - which specifies the opacity for a color.

        An RGBA color value is specified with:
        
        <doc>rgba(red, green, blue, alpha)</doc>
        
        The alpha parameter is a number between 0.0 (fully transparent) and 1.0 (not transparent at all):
        
        Experiment by mixing the RGBA values below:
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
          &lt;h1 style="background-color:rgba(255, 99, 71, 0);"&gt;rgba(255, 99, 71, 0)&lt;/h1&gt;
          &lt;h1 style="background-color:rgba(255, 99, 71, 0.2);"&gt;rgba(255, 99, 71, 0.2)&lt;/h1&gt;
          &lt;h1 style="background-color:rgba(255, 99, 71, 0.4);"&gt;rgba(255, 99, 71, 0.4)&lt;/h1&gt;
          &lt;h1 style="background-color:rgba(255, 99, 71, 0.6);"&gt;rgba(255, 99, 71, 0.6)&lt;/h1&gt;
          &lt;h1 style="background-color:rgba(255, 99, 71, 0.8);"&gt;rgba(255, 99, 71, 0.8)&lt;/h1&gt;
          &lt;h1 style="background-color:rgba(255, 99, 71, 1);"&gt;rgba(255, 99, 71, 1)&lt;/h1&gt;
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
                <img src="images/colors rgba.png" />
    
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
      <h1>HEX Color Values</h1>
      <p>In HTML, a color can be specified using a hexadecimal value in the form:
        
        <doc>#rrggbb</doc>
        
        Where rr (red), gg (green) and bb (blue) are hexadecimal values between 00 and ff (same as decimal 0-255).

For example, #ff0000 is displayed as red, because red is set to its highest value (ff), and the other two (green and blue) are set to 00.

Another example, #00ff00 is displayed as green, because green is set to its highest value (ff), and the other two (red and blue) are set to 00.
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
          &lt;h1 style="background-color:#ff0000;"&gt;#ff0000&lt;/h1&gt;
          &lt;h1 style="background-color:#0000ff;"&gt;#0000ff&lt;/h1&gt;
          &lt;h1 style="background-color:#3cb371;"&gt;#3cb371&lt;/h1&gt;
          &lt;h1 style="background-color:#ee82ee;"&gt;#ee82ee&lt;/h1&gt;
          &lt;h1 style="background-color:#ffa500;"&gt;#ffa500&lt;/h1&gt;
          &lt;h1 style="background-color:#6a5acd;"&gt;#6a5acd&lt;/h1&gt;
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
                <img src="images/colors hex.png" />
    
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
      <h1>Shades of Gray</h1>
      <p>Shades of gray are often defined using equal values for all three parameters:
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
          &lt;h1 style="background-color:#404040;"&gt;#404040&lt;/h1&gt;
          &lt;h1 style="background-color:#686868;"&gt;#686868&lt;/h1&gt;
          &lt;h1 style="background-color:#a0a0a0;"&gt;#a0a0a0&lt;/h1&gt;
          &lt;h1 style="background-color:#bebebe;"&gt;#bebebe&lt;/h1&gt;
          &lt;h1 style="background-color:#dcdcdc;"&gt;#dcdcdc&lt;/h1&gt;
          &lt;h1 style="background-color:#f8f8f8;"&gt;#f8f8f8&lt;/h1&gt;
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
                <img src="images/colors hex gray shade.png" />
    
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
      <h1>HSL Color Values</h1>
      <p>In HTML, a color can be specified using hue, saturation, and lightness (HSL) in the form:

       <doc> hsl(hue, saturation, lightness)</doc>
        
        Hue is a degree on the color wheel from 0 to 360. 0 is red, 120 is green, and 240 is blue.
        
        Saturation is a percentage value. 0% means a shade of gray, and 100% is the full color.
        
        Lightness is also a percentage value. 0% is black, and 100% is white.
        
        Experiment by mixing the HSL values below:
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
          &lt;h1 style="background-color:hsl(0, 100%, 50%);"&gt;hsl(0, 100%, 50%)&lt;/h1&gt;
          &lt;h1 style="background-color:hsl(240, 100%, 50%);"&gt;hsl(240, 100%, 50%)&lt;/h1&gt;
          &lt;h1 style="background-color:hsl(147, 50%, 47%);"&gt;hsl(147, 50%, 47%)&lt;/h1&gt;
          &lt;h1 style="background-color:hsl(300, 76%, 72%);"&gt;hsl(300, 76%, 72%)&lt;/h1&gt;
          &lt;h1 style="background-color:hsl(39, 100%, 50%);"&gt;hsl(39, 100%, 50%)&lt;/h1&gt;
          &lt;h1 style="background-color:hsl(248, 53%, 58%);"&gt;hsl(248, 53%, 58%)&lt;/h1&gt;
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
                <img src="images/colors hsl.png" />
    
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
      <h1>Shades of Gray</h1>
      <p>Shades of gray are often defined by setting the hue and saturation to 0, and adjusting the lightness from 0% to 100% to get darker/lighter shades:
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
          &lt;h1 style="background-color:hsl(0, 0%, 20%);"&gt;hsl(0, 0%, 20%)&lt;/h1&gt;
          &lt;h1 style="background-color:hsl(0, 0%, 30%);"&gt;hsl(0, 0%, 30%)&lt;/h1&gt;
          &lt;h1 style="background-color:hsl(0, 0%, 40%);"&gt;hsl(0, 0%, 40%)&lt;/h1&gt;
          &lt;h1 style="background-color:hsl(0, 0%, 60%);"&gt;hsl(0, 0%, 60%)&lt;/h1&gt;
          &lt;h1 style="background-color:hsl(0, 0%, 70%);"&gt;hsl(0, 0%, 70%)&lt;/h1&gt;
          &lt;h1 style="background-color:hsl(0, 0%, 90%);"&gt;hsl(0, 0%, 90%)&lt;/h1&gt;
    
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
                <img src="images/colors hsl gray shade.png" />
    
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
      <h1>HSLA Color Values</h1>
      <p>HSLA color values are an extension of HSL color values, with an Alpha channel - which specifies the opacity for a color.

        An HSLA color value is specified with:
        
       <doc> hsla(hue, saturation, lightness, alpha)</doc>
        
        The alpha parameter is a number between 0.0 (fully transparent) and 1.0 (not transparent at all):
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

          &lt;h1 style="background-color:hsla(9, 100%, 64%, 0);"&gt;hsla(9, 100%, 64%, 0)&lt;/h1&gt;
          &lt;h1 style="background-color:hsla(9, 100%, 64%, 0.2);"&gt;hsla(9, 100%, 64%, 0.2)&lt;/h1&gt;
          &lt;h1 style="background-color:hsla(9, 100%, 64%, 0.4);"&gt;hsla(9, 100%, 64%, 0.4)&lt;/h1&gt;
          &lt;h1 style="background-color:hsla(9, 100%, 64%, 0.6);"&gt;hsla(9, 100%, 64%, 0.6)&lt;/h1&gt;
          &lt;h1 style="background-color:hsla(9, 100%, 64%, 0.8);"&gt;hsla(9, 100%, 64%, 0.8)&lt;/h1&gt;
          &lt;h1 style="background-color:hsla(9, 100%, 64%, 1);"&gt;hsla(9, 100%, 64%, 1)&lt;/h1&gt;
    
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
                <img src="images/colors hsla.png" />
    
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
