<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
    </script>

    <!-- JS -->
    <script>
        function showImage(event) {
            const reader = new FileReader();
            reader.onload = function() {
                let image = document.getElementById('qrcode-image');
                image.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>

    <title>QR Reader</title>
</head>

<body>
    <div class="container">
        <div class="h2 text-center">
            QR Code Detector and Decoder
        </div>
        <img src="" id="qrcode-image" style="width: 200px;" />
        <form action="<?= base_url() ?>qrdetector/decode" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="qrcode">QRCODE</label>
                <input type="file" name="qrcode" id="qrcode" class="form-control" onchange="showImage(event);">
            </div>
            <button class="btn btn-primary btn-small" type="submit">Decode</button>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <script type="text/javascript" src="<?= base_url() ?>assets/js/qrReader.js"></script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>