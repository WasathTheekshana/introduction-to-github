<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My First Repo</title>
    <link rel="stylesheet" href="./src/styles/global.css">
    <link rel="stylesheet" href="./src/styles/index.css">

    <script>
        const scrollToNext = () => {
            var nextSection = document.getElementById('nextSection');
            nextSection.scrollIntoView({ behavior: 'smooth'});
        }
    </script>

</head>

<body>
    <div class="container">
            <h1>This is my First Repo</h1>
            <button onclick="scrollToNext()">Scrol Down</button>
    </div>
    <div class="container" id="nextSection">
        <h1>Hello Welcome to Next Section</h1>
    </div>
</body>

</html>
