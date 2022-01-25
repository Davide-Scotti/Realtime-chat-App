<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <title>Encrypt/Decrypt</title>
</head>
<body class="bg-info">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 bg-light p-4 mt-5 rounded">
                <form action="action.php" method="POST">
                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea name="text" class="form-control" id="msg" rows="3" placeholder="Enter Message"></textarea>
                    </div>
                    <button type="submit" name="encrypt" class="btn btn-primary">Encrypt</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>