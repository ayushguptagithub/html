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
    <div class="info">
    <h1>HTML</h1>
    <p>HTML stands for Hyper Text Markup Language
    HTML is the standard markup language for creating Web pages
    HTML describes the structure of a Web page
    HTML consists of a series of elements
        HTML elements tell the browser how to display the content
        HTML elements label pieces of content such as "this is a heading", "this is a paragraph", "this is a link",
        etc.
    </p>
  </div>
<hr>
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
            <!DOCTYPE html>
            <html>
            <head>
                <title>Page Title</title>
                  </head>
                  <body>

                    <h1>My First Heading</h1>
                      <p>My first paragraph.</p>

                  </body>
                    </html>

          </code>
        </pre>
        <button id="copy-button">Copy</button>
      </div>
    </div>
  </div>
</div>

<hr>



<div class="info">
  <h1>Explanation</h1>
  <p>
    The <doc>&lt;!DOCTYPE html&gt;</doc> declaration defines that this document is an HTML5 document.<br>
    The <doc>&lt;html&gt;</doc> element is the root element of an HTML page.<br>
    The <doc>&lt;head&gt;</doc> element contains meta information about the HTML page.<br>
    The <doc>&lt;body&gt;</doc> element containstitle&gt; element specifies a title for the HTML page (which is shown in the browser's title bar or in the page's tab).<br>
    The <doc>&lt;body&gt;</doc> element defines the document's body and is a container for all the visible contents, such as headings, paragraphs, images, hyperlinks, tables, lists, etc.<br>
    The <doc>&lt;h1&gt;</doc> element defines a large heading.<br>
    The <doc>&lt;p&gt; </doc>element defines a paragraph.
  </p>
</div>
<hr>

  <div class="info">
    <h1>What is an HTML Element?</h1>
    <p>
      An HTML element is defined by a start tag, some content, and an end tag:
    </p>
  
    <p>
      <doc>&lt;tagname&gt;</doc> Content goes here... <doc>&lt;/tagname&gt;</doc>
    </p>
  
    <p>
      The HTML element is everything from the start tag to the end tag:
    </p>
  
    <p>
      <doc>&lt;h1&gt;</doc>My First Heading<doc>&lt;/h1&gt;</doc>
      <doc>&lt;p&gt;</doc>My first paragraph.<doc>&lt;/p&gt;</doc>
    </p>
  
  </div>
  
<hr>

  <!-- This is for information -->
  <div class="info">
    <h1>HTML Links</h1>
    <p>
      HTML links are defined with the <doc>&lt;a&gt;</doc> tag:
    </p>
  
  </div>
  
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
              &lt;h1&gt;HTML Links&lt;/h1&gt;
              &lt;h1&gt;HTML links are defined with the a tag:&lt;/h1&gt;
                &lt;a href="https://www.google.com"&gt;This is a link&lt;/a&gt;
                
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
            <img src="images/a tag img.png"/>

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
    <h1>HTML Images</h1>
    <p>
      HTML images are defined with the <doc>&lt;img&gt;</doc> tag.

      The source file <doc>(src)</doc>, alternative text <doc>(alt)</doc>, width, and height are provided as attributes:
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
        &lt;h1&gt;HTML Images&lt;/h1&gt;
        &lt;p&gt;HTML images are defined with the img tag:&lt;/p&gt;
        &lt;img src="img.jpg" alt="Image" width="104" height="142"&gt;&lt;/h1&gt;
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
              <img src="images/img tag.png"/>
  
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
