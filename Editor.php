<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="prism.css" />

    <title>Editors</title>
  </head>
  <body>


  <?php include("navbar.php"); ?>
  
    <div class="info">
    <h1>Learn HTML Using Notepad or TextEdit</h1>
    <p>Web pages can be created and modified by using professional HTML editors.

      However, for learning HTML we recommend a simple text editor like Notepad (PC) or TextEdit (Mac).
      
      We believe that using a simple text editor is a good way to learn HTML.
      
      Follow the steps below to create your first web page with Notepad or TextEdit.
    </p>
  </div>
<hr>


<div class="info">
  <h1>Step 1: Open Notepad (PC)</h1>
  <p><doc>Windows 8 or later:</doc>

    Open the Start Screen (the window symbol at the bottom left on your screen). Type Notepad.
    
    Windows 7 or earlier:
    
    <doc>Open Start > Programs > Accessories > Notepad</doc>
  </p>
</div>
<hr>



<div class="codeblock">
  <h1>Step 2: Write Some HTML</h1>
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
                &lt;h1&gt;My First Heading&lt;/h1&gt;
                &lt;p&gt;My first paragraph.&lt;/p&gt;
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
            <img src="images/notepadeg.png" />

          </code>
        </pre>
        <button id="copy-button">Copy</button>
      </div>
    </div>
  </div>
</div>

<hr>



<div class="info">
  <h1>Step 3: Save the HTML Page</h1>
  <p>
    Save the file on your computer. Select File > Save as in the Notepad menu.

    Name the file "index.htmt" and set the encoding to UTF-8 (which is the preferred encoding for HTML files).
  </p>
  <div class="imagesection">
    <pre>
      <code id="code" class="">
        <img src="images/notepadsavefile.png" />

      </code>
    </pre>
    <button id="copy-button">Copy</button>
  </div>
</div>
<hr>

  













    <script src="main.js" defer></script>
    <script src="prism.js"></script>
  </body>
</html>
