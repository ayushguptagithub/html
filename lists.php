<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="prism.css" />

    <title>Lists</title>
  </head>
  <body>


  <?php include("navbar.php"); ?>
    <!-- This is for information -->
<div class="info">
    <h1>Unordered HTML List
        </h1>
    <p>An unordered list starts with the <doc>&lt;ul&gt;</doc> tag. Each list item starts with the <doc>&lt;li&gt;</doc> tag.
        
        The list items will be marked with bullets (small black circles) by default:
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
    &lt;ul&gt;
        &lt;li&gt;Coffee&lt;/li&gt;
        &lt;li&gt;Tea&lt;/li&gt;
        &lt;li&gt;Milk&lt;/li&gt;
    &lt;/ul&gt;

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
              <img src="images/.png" />
              
  
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
        <h1>Ordered HTML List
            </h1>
        <p>An ordered list starts with the <doc>&lt;ol&gt;</doc>  tag. Each list item starts with the <doc>&lt;li&gt;</doc>  tag.
            
            The list items will be marked with numbers by default:
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
        &lt;ol&gt;
            &lt;li&gt;Coffee&lt;/li&gt;
            &lt;li&gt;Tea&lt;/li&gt;
            &lt;li&gt;Milk&lt;/li&gt;
        &lt;/ol&gt;
    
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
                  <img src="images/.png" />
                  
      
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
        <p>The CSS <doc>type</doc> attribute is used to define the style of the list item marker. 

            It can have one of the following values:
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
        &lt;ul type="disc"&gt;
            &lt;li&gt;Coffee&lt;/li&gt;
            &lt;li&gt;Tea&lt;/li&gt;
            &lt;li&gt;Milk&lt;/li&gt;
        &lt;/ul&gt;
    
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
                  <img src="images/.png" />
                  
      
                </code>
              </pre>
              <button id="copy-button">Copy</button>
            </div>
          </div>
        </div>
      </div>
        
    <hr>
    <div class="info">
        <p>There are more type=values you can try like circle,square,none
        </p>
      
      </div>
      <hr>
      <div class="info">
        <h1>Nested HTML Lists</h1>
        <p>Lists can be nested (list inside list):
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
        &lt;ul type="disc"&gt;
            &lt;li&gt;Coffee&lt;/li&gt;
            &lt;li&gt;Tea&lt;/li&gt;
                    &lt;ul type="disc"&gt;
                        &lt;li&gt;black tea&lt;/li&gt;
                        &lt;li&gt;Green tea&lt;/li&gt;
                        &lt;li&gt;Mat pi Tea&lt;/li&gt;
                    &lt;/ul&gt;
            &lt;li&gt;Milk&lt;/li&gt;
        &lt;/ul&gt;
    
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
                  <img src="images/.png" />
                  
      
                </code>
              </pre>
              <button id="copy-button">Copy</button>
            </div>
          </div>
        </div>
      </div>

      <hr>

      <div class="info">
        <h1>Ordered HTML List - The Type Attribute
            </h1>
        <p>The type attribute of the <doc>&lt;ol&gt;</doc> tag, defines the type of the list item marker:
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
        &lt;ol type="1"&gt;
            &lt;li&gt;Coffee&lt;/li&gt;
            &lt;li&gt;Tea&lt;/li&gt;
            &lt;li&gt;Milk&lt;/li&gt;
        &lt;/ol&gt;
    
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
                  <img src="images/.png" />
                  
      
                </code>
              </pre>
              <button id="copy-button">Copy</button>
            </div>
          </div>
        </div>
      </div>
      <hr>

      <div class="info">
        <h1>Ordered HTML List - The Type Values
            </h1>
        <p>type="1"	The list items will be numbered with numbers (default)

            type="A"	The list items will be numbered with uppercase letters

            type="a"	The list items will be numbered with lowercase letters

            type="I"	The list items will be numbered with uppercase roman numbers

            type="i"	The list items will be numbered with lowercase roman numbers
        </p>
      
      </div>

      <hr>
      <div class="info">
        <h1>Ordered HTML List - The Start Values
            </h1>
        <p>start="5" you can specify where you want to start the order from .
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
        &lt;ol type="1" start="5"&gt;
            &lt;li&gt;Coffee&lt;/li&gt;
            &lt;li&gt;Tea&lt;/li&gt;
            &lt;li&gt;Milk&lt;/li&gt;
        &lt;/ol&gt;
    
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
                  <img src="images/.png" />
                  
      
                </code>
              </pre>
              <button id="copy-button">Copy</button>
            </div>
          </div>
        </div>
      </div>

      <hr>

      <div class="info">
        <h1>HTML Description Lists
            </h1>
        <p> A description list is a list of terms, with a description of each term.
            
            The <doc>&lt;dl&gt;</doc> tag defines the description list, the <doc>&lt;dt&gt;</doc> tag defines the term (name), and the <doc>&lt;dd&gt;</doc> tag describes each term:
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
        &lt;dl&gt;
            &lt;dt&gt;Coffee&lt;/dt&gt;
            &lt;dd&gt;-Cold&lt;/dd&gt;
            &lt;dt&gt;Tea&lt;/dt&gt;
            &lt;dd&gt;-Warm&lt;/dd&gt;
        &lt;/dl&gt;
    
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
                  <img src="images/.png" />
                  
      
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
