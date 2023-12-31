<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="prism.css" />

    <title>Formatting</title>
  </head>
  <body>

  <?php include("navbar.php"); ?>
          <!-- This is for information -->
<div class="info">
    <h1>HTML Formatting Elements</h1>
    <p>     <doc>&lt;b&gt;</doc><s></s><s></s>- Bold text
            <doc>&lt;strong&gt;</doc><s></s>   - Important text
            <doc>&lt;i&gt;</doc><s></s>        - Italic text
            <doc>&lt;em&gt;</doc>  <s></s>     - Emphasized text
            <doc>&lt;mark&gt;</doc> <s></s>    - Marked text
            <doc>&lt;small&gt;</doc>  <s></s>  - Smaller text
            <doc>&lt;del&gt;</doc>  <s></s>    - Deleted text
            <doc>&lt;ins&gt;</doc>  <s></s>    - Inserted text
            <doc>&lt;sub&gt;</doc>  <s></s>    - Subscript text
            <doc>&lt;sup&gt;</doc>  <s></s>    - Superscript text
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
                        &lt;p&gt;This text is normal.&lt;/p&gt;
                        &lt;p&gt;&lt;b&gt;This text is bold.&lt;/b&gt;&lt;/p&gt;
                        &lt;p&gt;&lt;strong&gt;This is Important text.&lt;/strong&gt;&lt;/p&gt;
                        &lt;p&gt;&lt;i&gt;This is italic text.&lt;/i&gt;&lt;/p&gt;
                        &lt;p&gt;&lt;em&gt;This is Emphasized text.&lt;/em&gt;&lt;/p&gt;
                        &lt;p&gt;&lt;mark&gt;This is Marked text&lt;/mark&gt;&lt;/p&gt;
                        &lt;p&gt;&lt;small&gt;This is smaller text.&lt;/small&gt;&lt;/p&gt;
                        &lt;p&gt;&lt;del&gt;This is deleted text.&lt;/del&gt;&lt;/p&gt;
                        &lt;p&gt;&lt;ins&gt;This is Inserted text&lt;/ins&gt;&lt;/p&gt;
                        &lt;p&gt;CO&lt;sub&gt;2&lt;/sub&gt;  &lt;s&gt; &lt;/s&gt;H&lt;sub&gt;2&lt;/sub&gt;O&lt;/p&gt;
                        &lt;p&gt;x&lt;sup&gt;2&lt;/sup&gt;+2ab+b&lt;sup&gt;2&lt;/sup&gt;&lt;/p&gt;
                
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
              <img src="images/formatting tags.png" />
  
            </code>
          </pre>
          <button id="copy-button">Copy</button>
        </div>
      </div>
    </div>
  </div>





    <script src="main.js" defer></script>
    <script src="prism.js"></script>
  </body>
</html>
