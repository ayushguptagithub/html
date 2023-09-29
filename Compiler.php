
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online HTML Code Editor</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.63.0/codemirror.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.63.0/addon/hint/show-hint.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.63.0/codemirror.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.63.0/mode/htmlmixed/htmlmixed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.63.0/addon/hint/show-hint.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.63.0/addon/hint/html-hint.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        h1 {
            margin: 0;
            font-size: 28px;
        }

        .container {
            display: flex;
            justify-content: space-between;
            margin: 20px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .code-editor {
            flex: 1;
            margin-right: 20px;
        }

        .CodeMirror {
            border: 1px solid #ccc;
        }

        .preview {
            flex: 1;
        }

        iframe {
            width: 100%;
            height: 300px;
            border: none;
        }
    </style>
</head>
<body>
    <?php include("navbar.php"); ?>
    <header>
        <h1>Compiler</h1>
    </header>

    <div class="container">
        <div class="code-editor">
            <h2>HTML Code</h2>
            <textarea id="code"></textarea>
        </div>
        <div class="preview">
            <h2>Preview</h2>
            <iframe id="output" frameborder="0"></iframe>
        </div>
    </div>

    <script>
        const codeTextarea = document.getElementById('code');
        const outputFrame = document.getElementById('output');

        // Initialize CodeMirror with HTML mode and real-time update
        const editor = CodeMirror.fromTextArea(codeTextarea, {
            mode: 'htmlmixed',
            theme: 'default',
            lineNumbers: true,
            lineWrapping: true,
            matchBrackets: true,
            autoCloseBrackets: true,
            extraKeys: { 'Ctrl-Space': 'autocomplete' },
        });

        editor.on('change', () => {
            const htmlCode = editor.getValue();
            outputFrame.srcdoc = htmlCode;
        });

        // Custom function to automatically add closing tags
        editor.on('beforeChange', (editor, changeObj) => {
            if (changeObj.text[0] === '<') {
                const cursorPos = editor.getCursor();
                const lineContent = editor.getLine(cursorPos.line);
                const cursorCol = cursorPos.ch;
                const tagStart = lineContent.lastIndexOf('<', cursorCol - 1);

                if (tagStart !== -1) {
                    const tagName = lineContent.slice(tagStart + 1, cursorCol);
                    const tag = `<${tagName}>`;
                    const closeTag = `</${tagName}>`;
                    const newText = changeObj.text[0] + closeTag + changeObj.text[0];

                    changeObj.update(changeObj.from, changeObj.to, [newText]);
                }
            }
        });
    </script>
</body>
</html>

