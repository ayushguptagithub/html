<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="prism.css" />

    <title>Login Form</title>
  </head>
  <body>

  <?php include("navbar.php"); ?>
    <!-- This is for information -->
<div class="info">
  <h1>HTML Forms
    </h1>
    <h1>&lt;form&gt;</h1>
  <p>An HTML form is used to collect user input. The user input is most often sent to a server for processing. 
  </p>

</div>
<hr>
    <!-- This is for information -->
    <div class="info">
      <h1>The &lt;input&gt; Element
        </h1>
      <p>The HTML <doc>&lt;input&gt;</doc> element is the most used form element.
        
        An <doc>&lt;input&gt;</doc> element can be displayed in many ways, depending on the type attribute.
      </p>
      <img src="images/form inputs.png" width="80%" height="20%" style="margin-left: 50px; "/>
    
    </div>
    <hr>

    <!-- This is for information -->
<div class="info">
  <h1>Text Fields
  </h1>
  <p>The <doc>&lt;input&gt;</doc> form type="text"&gt; defines a single-line input field for text input.
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

&lt;h2&gt;Text input fields&lt;/h2&gt;

&lt;form&gt;
  &lt;label for="fname"&gt;First name:&lt;/label&gt;&lt;br&gt;
  &lt;input type="text" id="fname" name="fname" value="John" placeholder="Enter your first name"&gt;
  &lt;br&gt;
  &lt;label for="lname"&gt;Last name:&lt;/label&gt;&lt;br&gt;
  &lt;input type="text" id="lname" name="lname" value="Doe" placeholder="Enter your last name"&gt;
&lt;/form&gt;
&lt;br&gt;
&lt;form&gt;
  &lt;label for="fname2"&gt;First name:&lt;/label&gt;&lt;br&gt;
  &lt;input type="text" id="fname2" name="fname2" placeholder="Enter your first name"&gt;
  &lt;br&gt;
  &lt;label for="lname2"&gt;Last name:&lt;/label&gt;&lt;br&gt;
  &lt;input type="text" id="lname2" name="lname2" placeholder="Enter your last name"&gt;
&lt;/form&gt;

&lt;p&gt;Note that the form itself is not visible.&lt;/p&gt;

&lt;p&gt;Also note that the default width of text input fields is 20 characters.&lt;/p&gt;

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
            <img src="images/form input text field.png" />

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
      <h1>The &lt;label&gt; Element
      </h1>
      <p>Notice the use of the <doc>&lt;label&gt;</doc> element in the example above.

The <doc>&lt;label&gt;</doc> tag defines a label for many form elements.

The <doc>&lt;label&gt;</doc> element is useful for screen-reader users, because the screen-reader will read out loud the label when the user focuses on the input element.

The <doc>&lt;label&gt;</doc> element also helps users who have difficulty clicking on very small regions (such as radio buttons or checkboxes) - because when the user clicks the text within the <doc>&lt;label&gt;</doc> element, it toggles the radio button/checkbox.

The <doc>for</doc> attribute of the <doc>&lt;label&gt;</doc> tag should be equal to the id attribute of the <doc>&lt;input&gt;</doc> element to bind them together.
      </p>
    
    </div>
    <hr>
    <!-- This is for information -->
    <div class="info">
      <h1>Radio Buttons
        
      </h1>
      <p> <doc>&lt;input type="radio"&gt;</doc> defines a radio button.
        
        Radio buttons let a user select ONE of a limited number of choices.
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

&lt;h2&gt;Radio Buttons&lt;/h2&gt;

&lt;p&gt;Choose your favorite Web language:&lt;/p&gt;

&lt;form&gt;
  &lt;input type="radio" id="html" name="fav_language" value="HTML"&gt;
  &lt;label for="html"&gt;HTML&lt;/label&gt;&lt;br&gt;
  &lt;input type="radio" id="css" name="fav_language" value="CSS"&gt;
  &lt;label for="css"&gt;CSS&lt;/label&gt;&lt;br&gt;
  &lt;input type="radio" id="javascript" name="fav_language" value="JavaScript"&gt;
  &lt;label for="javascript"&gt;JavaScript&lt;/label&gt;
&lt;/form&gt;

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
                <img src="images/form input radio field.png" />
    
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
      <h1>Checkboxes
      </h1>
      <p>The <doc>&lt;input type="checkbox"&gt;</doc> defines a checkbox.
        
        Checkboxes let a user select ZERO or MORE options of a limited number of choices.
        
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

&lt;h2&gt;Checkboxes&lt;/h2&gt;
&lt;p&gt;The &lt;strong&gt;input type="checkbox"&lt;/strong&gt; defines a checkbox:&lt;/p&gt;

&lt;form&gt;
  &lt;input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"&gt;
  &lt;label for="vehicle1"&gt; I have a bike&lt;/label&gt;&lt;br&gt;
  &lt;input type="checkbox" id="vehicle2" name="vehicle2" value="Car"&gt;
  &lt;label for="vehicle2"&gt; I have a car&lt;/label&gt;&lt;br&gt;
  &lt;input type="checkbox" id="vehicle3" name="vehicle3" value="Boat"&gt;
  &lt;label for="vehicle3"&gt; I have a boat&lt;/label&gt;&lt;br&gt;&lt;br&gt;
  &lt;input type="submit" value="Submit"&gt;
&lt;/form&gt;

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
                <img src="images/form input checkbox field.png" />
    
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
      <h1>The Action Attribute
      </h1>
      <p>The action attribute defines the action to be performed when the form is submitted.
        
        Usually, the form data is sent to a file on the server when the user clicks on the submit button.
        
      </p>
    
    </div>
    <hr>
    <!-- This is for information -->
    <div class="info">
      <h1>The Method Attribute
      </h1>
      <p>The <doc>method</doc> attribute specifies the HTTP method to be used when submitting the form data.
        
        The form-data can be sent as URL variables <doc>(with method="get")</doc> or as HTTP post transaction <doc>(with method="post")</doc>
        
        The default HTTP method when submitting form data is GET. </p>
    
    </div>
    <hr>
    <h1>Notes on GET:</h1>
<p>Appends the form data to the URL, in name/value pairs

NEVER use GET to send sensitive data! (the submitted form data is visible in the URL!)

The length of a URL is limited (2048 characters)

Useful for form submissions where a user wants to bookmark the result

GET is good for non-secure data, like query strings in Google</p>

<h1>Notes on POST:</h1>
<p>Appends the form data inside the body of the HTTP request (the submitted form data is not shown in the URL)

POST has no size limitations, and can be used to send large amounts of data.

Form submissions with POST cannot be bookmarked</p>
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
&lt;body&gt; 

&lt;h2&gt;The method Attribute&lt;/h2&gt;

&lt;p&gt;This form will be submitted using the GET method:&lt;/p&gt;

&lt;form action="/action_page.php" target="_blank" method="get"&gt;
  &lt;label for="fname"&gt;First name:&lt;/label&gt;&lt;br&gt;
  &lt;input type="text" id="fname" name="fname" value="Ayush"&gt;&lt;br&gt;
  &lt;label for="lname"&gt;Last name:&lt;/label&gt;&lt;br&gt;
  &lt;input type="text" id="lname" name="lname" value="Gupta"&gt;&lt;br&gt;&lt;br&gt;
  &lt;input type="submit" value="Submit"&gt;
&lt;/form&gt;

&lt;p&gt;This form will be submitted using the POST method:&lt;/p&gt;

&lt;form action="/action_page.php" target="_blank" method="post"&gt;
  &lt;label for="fname"&gt;First name:&lt;/label&gt;&lt;br&gt;
  &lt;input type="text" id="fname" name="fname" value="Sairaj"&gt;&lt;br&gt;
  &lt;label for="lname"&gt;Last name:&lt;/label&gt;&lt;br&gt;
  &lt;input type="text" id="lname" name="lname" value="Sawant"&gt;&lt;br&gt;&lt;br&gt;
  &lt;input type="submit" value="Submit"&gt;
&lt;/form&gt;

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
                <img src="images/form method.png" />
    
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
      <h1>Sign Up Form
      </h1>
  
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
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
    &lt;title&gt;Signup Form&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h2&gt;Signup Form&lt;/h2&gt;
    &lt;form action="process_signup.php" method="post"&gt;
        &lt;!-- Text Input --&gt;
        &lt;label for="username"&gt;Username:&lt;/label&gt;
        &lt;input type="text" id="username" name="username" value="Default Text"&gt;&lt;br&gt;&lt;br&gt;

        &lt;!-- Password Input --&gt;
        &lt;label for="password"&gt;Password:&lt;/label&gt;
        &lt;input type="password" id="password" name="password"&gt;&lt;br&gt;&lt;br&gt;

        &lt;!-- Checkbox --&gt;
        &lt;input type="checkbox" id="subscribe" name="subscribe" value="yes"&gt;
        &lt;label for="subscribe"&gt;Subscribe to newsletter&lt;/label&gt;&lt;br&gt;&lt;br&gt;

        &lt;!-- Radio Buttons --&gt;
        &lt;label&gt;Choose Gender:&lt;/label&gt;&lt;br&gt;
        &lt;input type="radio" id="male" name="gender" value="male"&gt;
        &lt;label for="male"&gt;Male&lt;/label&gt;&lt;br&gt;
        &lt;input type="radio" id="female" name="gender" value="female"&gt;
        &lt;label for="female"&gt;Female&lt;/label&gt;&lt;br&gt;
        &lt;input type="radio" id="other" name="gender" value="other"&gt;
        &lt;label for="other"&gt;Other&lt;/label&gt;&lt;br&gt;&lt;br&gt;

        &lt;!-- Color Input --&gt;
        &lt;label for="color"&gt;Favorite Color:&lt;/label&gt;
        &lt;input type="color" id="color" name="color"&gt;&lt;br&gt;&lt;br&gt;

        &lt;!-- Date Input --&gt;
        &lt;label for="birthdate"&gt;Birthdate:&lt;/label&gt;
        &lt;input type="date" id="birthdate" name="birthdate"&gt;&lt;br&gt;&lt;br&gt;

        &lt;!-- Datetime-local Input --&gt;
        &lt;label for="appointment"&gt;Appointment Date and Time:&lt;/label&gt;
        &lt;input type="datetime-local" id="appointment" name="appointment"&gt;&lt;br&gt;&lt;br&gt;

        &lt;!-- Email Input --&gt;
        &lt;label for="email"&gt;Email:&lt;/label&gt;
        &lt;input type="email" id="email" name="email"&gt;&lt;br&gt;&lt;br&gt;

        &lt;!-- File Input --&gt;
        &lt;label for="avatar"&gt;Avatar (Image):&lt;/label&gt;
        &lt;input type="file" id="avatar" name="avatar"&gt;&lt;br&gt;&lt;br&gt;

        &lt;!-- Hidden Input --&gt;
        &lt;input type="hidden" id="user_id" name="user_id" value="12345"&gt;

        &lt;!-- Image Input --&gt;
        &lt;label for="profile_pic"&gt;Profile Picture (Image):&lt;/label&gt;
        &lt;input type="image" id="profile_pic" name="profile_pic" src="default.jpg" alt="Profile Picture"&gt;&lt;br&gt;&lt;br&gt;

        &lt;!-- Month Input --&gt;
        &lt;label for="anniversary"&gt;Anniversary Month:&lt;/label&gt;
        &lt;input type="month" id="anniversary" name="anniversary"&gt;&lt;br&gt;&lt;br&gt;

        &lt;!-- Number Input --&gt;
        &lt;label for="age"&gt;Age:&lt;/label&gt;
        &lt;input type="number" id="age" name="age" min="18" max="100"&gt;&lt;br&gt;&lt;br&gt;

        &lt;!-- Range Input --&gt;
        &lt;label for="rating"&gt;Rating:&lt;/label&gt;
        &lt;input type="range" id="rating" name="rating" min="1" max="10"&gt;&lt;br&gt;&lt;br&gt;

        &lt;!-- Reset and Submit Buttons --&gt;
        &lt;input type="reset" value="Reset"&gt;
        &lt;input type="submit" value="Submit"&gt;&lt;br&gt;&lt;br&gt;

        &lt;!-- Search Input --&gt;
        &lt;label for="search"&gt;Search:&lt;/label&gt;
        &lt;input type="search" id="search" name="search"&gt;&lt;br&gt;&lt;br&gt;

        &lt;!-- Tel Input --&gt;
        &lt;label for="phone"&gt;Phone Number:&lt;/label&gt;
        &lt;input type="tel" id="phone" name="phone"&gt;&lt;br&gt;&lt;br&gt;

        &lt;!-- Time Input --&gt;
        &lt;label for="meeting_time"&gt;Preferred Meeting Time:&lt;/label&gt;
        &lt;input type="time" id="meeting_time" name="meeting_time"&gt;&lt;br&gt;&lt;br&gt;

        &lt;!-- URL Input --&gt;
        &lt;label for="website"&gt;Website URL:&lt;/label&gt;
        &lt;input type="url" id="website" name="website"&gt;&lt;br&gt;&lt;br&gt;

        &lt;!-- Week Input --&gt;
        &lt;label for="vacation_week"&gt;Vacation Week:&lt;/label&gt;
        &lt;input type="week" id="vacation_week" name="vacation_week"&gt;&lt;br&gt;&lt;br&gt;

        &lt;!-- Textarea --&gt;
        &lt;label for="comments"&gt;Comments:&lt;/label&gt;&lt;br&gt;
        &lt;textarea id="comments" name="comments" rows="4" cols="50"&gt;&lt;/textarea&gt;&lt;br&gt;&lt;br&gt;

        &lt;!-- Select Options --&gt;
        &lt;label for="country"&gt;Country:&lt;/label&gt;
        &lt;select id="country" name="country"&gt;
            &lt;option value="usa"&gt;United States&lt;/option&gt;
            &lt;option value="canada"&gt;Canada&lt;/option&gt;
            &lt;option value="uk"&gt;United Kingdom&lt;/option&gt;
        &lt;/select&gt;&lt;br&gt;&lt;br&gt;

        &lt;!-- Select Optgroup --&gt;
        &lt;label for="city"&gt;City:&lt;/label&gt;
        &lt;select id="city" name="city"&gt;
            &lt;optgroup label="USA"&gt;
                &lt;option value="nyc"&gt;New York City&lt;/option&gt;
                &lt;option value="la"&gt;Los Angeles&lt;/option&gt;
            &lt;/optgroup&gt;
            &lt;optgroup label="Canada"&gt;
                &lt;option value="toronto"&gt;Toronto&lt;/option&gt;
                &lt;option value="vancouver"&gt;Vancouver&lt;/option&gt;
            &lt;/optgroup&gt;
            &lt;optgroup label="UK"&gt;
                &lt;option value="london"&gt;London&lt;/option&gt;
                &lt;option value="manchester"&gt;Manchester&lt;/option&gt;
            &lt;/optgroup&gt;
        &lt;/select&gt;&lt;br&gt;&lt;br&gt;

    &lt;/form&gt;
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
                <img src="images/signup pagejpg.png" />
    
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
