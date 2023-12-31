<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="prism.css" />

    <title>Information</title>
  </head>
  <body>
    

  <?php include("navbar.php"); ?>
      <!-- This is for information -->
<div class="info">
    <h1>HTML Paragraphs</h1>
    <p>The HTML <doc>&lt;p&gt;</doc> element defines a paragraph.

        A paragraph always starts on a new line, and browsers automatically add some white space (a margin) before and after a paragraph.
    
        You cannot be sure how HTML will be displayed.

        Large or small screens, and resized windows will create different results.
        
        With HTML, you cannot change the display by adding extra spaces or extra lines in your HTML code.
        
        The browser will automatically remove any extra spaces and lines when the page is displayed:
    </p>
  
</div>
<hr>

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
    &lt;p&gt;
    This paragraph
    contains a lot of lines
    in the source code,
    but the browser
    ignores it.
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
              <img src="images/paratag.png" />
  
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
    <h1>HTML Horizontal Rules</h1>
    <p>The <doc>&lt;hr&gt;</doc> tag defines a thematic break in an HTML page, and is most often displayed as a horizontal rule.

        The <doc>&lt;hr&gt;</doc> element is used to separate content (or define a change) in an HTML page:
    </p>
  
</div>
<hr>

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
    &lt;p&gt;This paragraph
    &lt;/p&gt;
    &lt;hr&gt;

    &lt;h1&gt;Heading&lt;/h1&gt;
    &lt;p&gt;This paragraph
    &lt;/p&gt;
    &lt;hr&gt;
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
              <img src="images/hr tag.png" />
  
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
    <h1>HTML Line Breaks</h1>
    <p>The HTML <doc>&lt;br&gt;</doc> element defines a line break.

        Use <doc>&lt;br&gt;</doc> if you want a line break (a new line) without starting a new paragraph:
    </p>
  
</div>
<hr>

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
    &lt;p&gt;
    This paragraph&lt;br&gt;
    contains a lot of lines&lt;br&gt;
    in the source code,&lt;br&gt;
    but the browser&lt;br&gt;
    ignores it.&lt;br&gt;
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
              <img src="images/br tag.png" />
  
            </code>
          </pre>
          <button id="copy-button">Copy</button>
        </div>
      </div>
    </div>
  </div>
  <hr>

  <div class="info">
    <h1>The Poem Problem</h1>
    <p>This poem will display on a single line:
        
        The HTML <doc>&lt;p&gt;</doc> element display sentence in single line.

        The HTML <doc>&lt;pre&gt;</doc> element defines preformatted text.

        The text inside a <doc>&lt;pre&gt;</doc> element is displayed in a fixed-width font (usually Courier), and it preserves both spaces and line breaks:
    </p>
  
</div>
<hr>

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
    &lt;pre&gt;
    My Bonnie lies over the ocean.

    My Bonnie lies over the sea.

    My Bonnie lies over the ocean.

    Oh, bring back my Bonnie to me.
    &lt;/pre&gt;
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
              <img src="images/pre tag.png" />
  
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
