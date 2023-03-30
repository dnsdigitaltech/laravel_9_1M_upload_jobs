<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de 1 milhão de dados</title>
</head>
<body>
    <main class="container">
        <form action="/upload" method="post" enctype="multipart/form-data">
            @csrf
            <input type="file" name="mycsv" id="mycsv">
            <input type="submit" value="Upload">
        </form>
    </main>
</body>
</html>