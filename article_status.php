<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Article</title>
    <style>
        body {
            font-family: sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }

        .submission-container {
            background-color: white;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        input[type="text"] {
            padding: 10px;
            margin-bottom: 20px;
            width: 300px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <div class="submission-container">
        <h2>Your Article</h2>
        <input type="text" id="articleTitleInput" placeholder="Enter Article Title">
        <button id="submitButton">Submit</button>
    </div>

    <script>
        document.getElementById('submitButton').addEventListener('click', function() {
            const articleTitle = document.getElementById('articleTitleInput').value;

            if (articleTitle.trim() !== "") {
                localStorage.setItem('articleTitle', articleTitle);
                window.location.href = 'status.html'; // Link to your status page
            } else {
                alert("Please enter an article title.");
            }
        });
    </script>
</body>
</html>