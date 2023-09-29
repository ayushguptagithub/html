<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="prism.css" />

    <title>Links</title>
  </head>
  <body>
  <?php include("navbar.php"); ?>

    <!-- This is for information -->
    <div class="info">
        <h1>HTML Links - The target Attribute</h1>
        <p>By default, the linked page will be displayed in the current browser window. To change this, you must specify another target for the link.

            The <doc>target</doc> attribute specifies where to open the linked document.
            
            The <doc>target</doc> attribute can have one of the following values:
            
            <doc>_self</doc> - Default. Opens the document in the same window/tab as it was clicked
           <doc> _blank</doc> - Opens the document in a new window or tab
           <doc> _parent</doc> - Opens the document in the parent frame
            <doc>_top</doc> - Opens the document in the full body of the window
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
&lt;body&gt;

&lt;h2&gt;The target Attribute&lt;/h2&gt;

&lt;a href="https://www.Gooogle.com/" target="_blank"&gt;Visit Google!&lt;/a&gt;

&lt;p&gt;If target="_blank", the link will open in a new browser window or tab.&lt;/p&gt;

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
                <img src="images/links target.png" />
    
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
        <h1>Absolute URLs vs. Relative URLs</h1>
        <p> Both examples above are using an <doc>absolute URL</doc> (a full web address) in the <doc>href</doc> attribute.
            
            A local link (a link to a page within the same website) is specified with a <doc>relative URL</doc> (without the "https://www" part):
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
&lt;body&gt;

&lt;h2&gt;Absolute URLs&lt;/h2&gt;
&lt;p&gt;&lt;a href="https://www.flipkart.com/"&gt;Flipkart&lt;/a&gt;&lt;/p&gt;
&lt;p&gt;&lt;a href="https://www.google.com/"&gt;Google&lt;/a&gt;&lt;/p&gt;

&lt;h2&gt;Relative URLs&lt;/h2&gt;
&lt;p&gt;&lt;a href="img.jpg"&gt;HTML Images&lt;/a&gt;&lt;/p&gt;
&lt;p&gt;&lt;a href="image.jpg"&gt;CSS Tutorial&lt;/a&gt;&lt;/p&gt;


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
                <img src="images/links urls.png" />
    
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
        <h1>HTML Links - Use an Image as a Link
            </h1>
        <p> To use an image as a link, just put the <doc>&lt;img&gt;</doc> tag inside the <doc>&lt;a&gt;</doc> tag:
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
&lt;body&gt;

    &lt;h2&gt;Image as a Link&lt;/h2&gt;

    &lt;p&gt;The image below is a link. Try to click on it.&lt;/p&gt;

    &lt;a href="https://www.google.com"&gt;&lt;img src="smiley.gif" alt="HTML tutorial" style="width:42px;height:42px;"&gt;&lt;/a&gt;

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
                <img src="images/links image link.png" />
    
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
        <h1>Link to an Email Address
            </h1>
        <p>Use<doc> mailto:</doc>  inside the href attribute to create a link that opens the user's email program (to let them send a new email):
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
&lt;body&gt;

    &lt;h2&gt;Link to an Email Address&lt;/h2&gt;

    &lt;p&gt;To create a link that opens in the user's email program (to let them send a new email), use mailto: inside the href attribute:&lt;/p&gt;

    &lt;p&gt;&lt;a href="mailto:someone@example.com"&gt;Send email&lt;/a&gt;&lt;/p&gt;


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
                <img src="images/links mailto.png" />
    
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
        <h1>Button as a Link
            </h1>
        <p>To use an HTML button as a link, you have to add some JavaScript code.
            
            JavaScript allows you to specify what happens at certain events, such as a click of a button:
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
&lt;body&gt;

    &lt;h2&gt;Button as a Links&lt;/h2&gt;

    &lt;p&gt;Click the button to go to the HTML tutorial.&lt;/p&gt;

    &lt;button onclick="document.location='page.html'">HTML Tutorial&lt;/button&gt;

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
                <img src="images/links button.png" />
    
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
        <h1>Button as a Link
            </h1>
        <p>To use an HTML button as a link, you have to add some JavaScript code.
            
            JavaScript allows you to specify what happens at certain events, such as a click of a button:
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
&lt;body&gt;

    &lt;h2&gt;Button as a Links&lt;/h2&gt;

    &lt;p&gt;Click the button to go to the HTML tutorial.&lt;/p&gt;

    &lt;button onclick="document.location='page.html'">HTML Tutorial&lt;/button&gt;

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
                <img src="images/links button.png" />
    
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
        <h1>Create a Bookmark in HTML</h1>
        <p>Bookmarks can be useful if a web page is very long.

            To create a bookmark - first create the bookmark, then add a link to it.
            
            When the link is clicked, the page will scroll down or up to the location with the bookmark.
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
&lt;body&gt;

    &lt;p&gt;&lt;a href="#C4"&gt;Jump to Chapter 4&lt;/a&gt;&lt;/p&gt;
    &lt;p&gt;&lt;a href="#C10"&gt;Jump to Chapter 10&lt;/a&gt;&lt;/p&gt;

    &lt;h2&gt;Chapter 1&lt;/h2&gt;
    &lt;p&gt;This chapter explains ba bla bla&lt;/p&gt;

    &lt;h2&gt;Chapter 2&lt;/h2&gt;
    &lt;p&gt;This chapter explains ba bla bla&lt;/p&gt;

    &lt;h2&gt;Chapter 3&lt;/h2&gt;
    &lt;p&gt;This chapter explains ba bla bla&lt;/p&gt;

    &lt;h2 id="C4"&gt;Chapter 4&lt;/h2&gt;
    &lt;p&gt;This chapter explains ba bla bla&lt;/p&gt;

    &lt;h2&gt;Chapter 5&lt;/h2&gt;
    &lt;p&gt;This chapter explains ba bla bla&lt;/p&gt;

    &lt;h2&gt;Chapter 6&lt;/h2&gt;
    &lt;p&gt;This chapter explains ba bla bla&lt;/p&gt;

    &lt;h2&gt;Chapter 7&lt;/h2&gt;
    &lt;p&gt;This chapter explains ba bla bla&lt;/p&gt;

    &lt;h2&gt;Chapter 8&lt;/h2&gt;
    &lt;p&gt;This chapter explains ba bla bla&lt;/p&gt;

    &lt;h2&gt;Chapter 9&lt;/h2&gt;
    &lt;p&gt;This chapter explains ba bla bla&lt;/p&gt;

    &lt;h2 id="C10"&gt;Chapter 10&lt;/h2&gt;
    &lt;p&gt;This chapter explains ba bla bla&lt;/p&gt;

    &lt;h2&gt;Chapter 11&lt;/h2&gt;
    &lt;p&gt;This chapter explains ba bla bla&lt;/p&gt;

    &lt;h2&gt;Chapter 12&lt;/h2&gt;
    &lt;p&gt;This chapter explains ba bla bla&lt;/p&gt;

    &lt;h2&gt;Chapter 13&lt;/h2&gt;
    &lt;p&gt;This chapter explains ba bla bla&lt;/p&gt;

    &lt;h2&gt;Chapter 14&lt;/h2&gt;
    &lt;p&gt;This chapter explains ba bla bla&lt;/p&gt;

    &lt;h2&gt;Chapter 15&lt;/h2&gt;
    &lt;p&gt;This chapter explains ba bla bla&lt;/p&gt;

    &lt;h2&gt;Chapter 16&lt;/h2&gt;
    &lt;p&gt;This chapter explains ba bla bla&lt;/p&gt;

    &lt;h2&gt;Chapter 17&lt;/h2&gt;
    &lt;p&gt;This chapter explains ba bla bla&lt;/p&gt;

    &lt;h2&gt;Chapter 18&lt;/h2&gt;
    &lt;p&gt;This chapter explains ba bla bla&lt;/p&gt;

    &lt;h2&gt;Chapter 19&lt;/h2&gt;
    &lt;p&gt;This chapter explains ba bla bla&lt;/p&gt;

    &lt;h2&gt;Chapter 20&lt;/h2&gt;
    &lt;p&gt;This chapter explains ba bla bla&lt;/p&gt;

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
                <img src="images/links bookmark.png" />
    
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
