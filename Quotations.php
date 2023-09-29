<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="prism.css" />

    <title>Quotations</title>
  </head>
  <body>

  <?php include("navbar.php"); ?>
          <!-- This is for information -->
<div class="info">
    <h1>HTML &lt;blockquote&gt; for Quotations</h1>
    <p>The HTML <doc>&lt;blockquote&gt;</doc> element defines a section that is quoted from another source.
        
        Browsers usually indent <doc>&lt;blockquote&gt;</doc>  elements.
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
                    &lt;p&gt;Here is a quote from WWF's website: &lt;/p&gt;

                    &lt;blockquote cite="http://www.worldwildlife.org/who/index.html"&gt;
                    For 60 years, WWF has worked to help people and nature thrive. As the world's leading conservation organization, WWF 
                    works in nearly 100 countries. At every level, we collaborate with people around the world to develop and deliver 
                    innovative solutions that protect communities, wildlife, and the places in which they live.
                    &lt;/blockquote&gt;
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
              <img src="images/quotation blockquote.png" style="height:250px" />
  
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
    <h1>HTML &lt;q&gt; for Short Quotations</h1>
    <p>The HTML <doc>&lt;q&gt;</doc> tag defines a short quotation.
        
        Browsers normally insert quotation marks around the quotation.
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
                    
                    &lt;p&gt;Browsers usually insert quotation marks around the q element.&lt;/p&gt;

                    &lt;p&gt; Phrase &lt;q&gt;harmony is nature.&lt;/q&gt;&lt;/p&gt;
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
              <img src="images/quotation q tag.png" />
  
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
    <h1>HTML &lt;abbr&gt; for Abbreviations</h1>
    <p>The HTML <doc>&lt;abbr&gt;</doc>  tag defines an abbreviation or an acronym, like "HTML", "CSS", "Mr.", "Dr.", "ASAP", "ATM".
        
        Marking abbreviations can give useful information to browsers, translation systems and search-engines.
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
                    
                    &lt;p&gt;The &lt;abbr title="World Health Organization"&gt;WHO &lt;/abbr&gt; was founded in 1948.&lt;/p&gt;

                    &lt;p&gt;Marking up abbreviations can give useful information to browsers, translation systems and search-engines.&lt;/p&gt;

                    
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
              <img src="images/quotation abbr tag.png" style="height:250px"/>
  
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
    <h1>HTML &lt;address&gt; for Contact Information</h1>
    <p>The HTML <doc>&lt;address&gt;</doc> tag defines the contact information for the author/owner of a document or an article.
        
        The contact information can be an email address, URL, physical address, phone number, social media handle, etc.
        
        The text in the <doc>&lt;address&gt;</doc> element usually renders in italic, and browsers will always add a line break before and after the <doc>&lt;address&gt;</doc> element.
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
                        &lt;address&gt;
                        Written by Ayush Gupta.&lt;br&gt; 
                        Visit us at:&lt;br&gt;
                        Example.com&lt;br&gt;
                        Worli, Lower Parel&lt;br&gt;
                        Mumbai
                        &lt;/address&gt;
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
              <img src="images/quotation address tag.png"/>
  
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
    <h1>HTML &lt;bdo&gt; for Bi-Directional Override</h1>
    <p>BDO stands for <doc>Bi-Directional Override.</doc>
        
        The HTML <doc>&lt;bdo&gt;</doc> tag is used to override the current text direction:
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
                        &lt;p&gt;If your browser supports bi-directional override (bdo),&lt;br&gt; the next line will be written from right to left (rtl):&lt;/p&gt;

                        &lt;bdo dir="rtl"&gt;This line will be written from right to left&lt;/bdo&gt;
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
              <img src="images/quotation  bdo tag.png"/>
  
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
    <h1>HTML Comments Tags</h1>
    <p> <doc>&lt;!-- Write your comments here --&gt;</doc> tag is used to place notifications and reminders in your HTML code:</p>
  
  </div>
  <hr>


    <script src="main.js" defer></script>
    <script src="prism.js"></script>
  </body>
</html>
