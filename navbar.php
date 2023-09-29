<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online HTML Code Editor</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.63.0/codemirror.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.63.0/addon/hint/show-hint.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .navbar {
            display: flex;
            flex-direction: row;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            /* background-color: rgb(74, 74, 74); */
            
            background: rgb(2,0,36);
            background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(17,62,255,1) 100%, rgba(0,212,255,1) 100%);
            overflow-x: auto;
            white-space: nowrap;
        }

        .nav-content {
            margin: 25px;
            padding: 10px;
        }

        .nav-link {
            text-decoration: none;
            color: #ffffff;
            padding: 10px 20px;
            border-right: 1px solid #555;
            transition: background-color 0.3s;
        }

        .nav-link:last-child {
            border-right: none;
        }

        .nav-link:hover {
            background-color: #00d4ff;
        }

        .nav-link.active {
            background-color: #00d4ff;
            font-weight: bold;
        }

        .content {
            margin-top: 40px;
            /* To create space for the fixed navbar */
            padding: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Online HTML Code Editor</h1>
    </header>

    <div class="navbar">
        <div class="logo-container">
            <img src="images/AK logo.png" alt="logo" height="100px" width="300px" />
        </div>
        <div class="nav-content" id="nav-content">
            <a href="index.php" class="nav-link">Intro</a>
            <a href="Editor.php" class="nav-link">Editors</a>
            <a href="Attribute.php" class="nav-link">Attributes</a>
            <a href="Heading.php" class="nav-link">Headings</a>
            <a href="paragraph.php" class="nav-link">Paragraphs</a>
            <a href="Style.php" class="nav-link">Styles</a>
            <a href="formatting.php" class="nav-link">Formatting</a>
            <a href="Quotations.php" class="nav-link">Quotation</a>
            <a href="Colors.php" class="nav-link">Colors</a>
            <a href="Css.php" class="nav-link">Css</a>
            <a href="Links.php" class="nav-link">Links</a>
            <a href="Images.php" class="nav-link">Images</a>
            <a href="Tables.php" class="nav-link">Tables</a>
            <a href="lists.php" class="nav-link">Lists</a>
            <a href="Iframes.php" class="nav-link">Iframes</a>
            <a href="Login.php" class="nav-link">Login</a>
            <a href="Media.php" class="nav-link">Media</a>
            <a href="Compiler.php" class="nav-link">Compiler</a>
            <!-- Add more links here -->
        </div>
    </div>
    <hr><hr><hr>
    <script type="text/javascript">
        // JavaScript to handle the active link
        const navLinks = document.querySelectorAll(".nav-link");

        navLinks.forEach((link) => {
            link.addEventListener("click", () => {
                // Remove the "active" class from all links
                navLinks.forEach((navLink) => {
                    navLink.classList.remove("active");
                });

                // Add the "active" class to the clicked link
                link.classList.add("active");
            });
        });
    </script>
</body>
</html>
