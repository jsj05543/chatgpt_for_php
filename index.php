<!doctype html>
<html lang="en">

<head>
    <title>M-IT ChatGPT</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/chatapi.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container-sm">
        <div class="bg-primary">
            <p class="text-light text-center font-weight-bold h1">M-IT ChatGPT</p>
        </div>
        <div class="container pt-4">
            <form>
                <div class="form-group">
                    <input id="message" name="message" required class="form-control form-control-lg col-sm-2"
                        type="text">
                </div>
                <input type="submit" class="btn btn-primary mb-2" value="入力内容を送信" onclick="showLoadingAnimation()">
                <a class="btn btn-primary mb-2" href="php/reset.php">会話をリセット</a>
                <div id="loading">
                    <div class="spinner-border text-primary" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>
            </form>
            <div class="form-group">
                <div id="chat-history"></div>
            </div>
        </div>
    </div>
</body>

</html>