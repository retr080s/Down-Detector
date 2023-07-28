<?php
$url = "https://www.google.com";
$headers = get_headers($url);
$status_code = $headers[0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Down Detector</title>
</head>

<body style="background-color: #2b3035;" class="">
    <div class="d-flex justify-content-center mt-5">
        <a href="index.php" class="text-decoration-none ">
            <div class="flex-column justify-content-center">
                <h1 class="text-light text-center">Down Detector</h1>
        </a>
        <div class="alert alert-warning m-5" data-bs-theme="dark" role="alert">
            Note: Your url must include the https:// part also
        </div>
    </div>
    </div>
    <form action="index.php" method="POST">

        <div class="d-flex justify-content-center">
            <div class="input-group flex-nowrap w-50 " data-bs-theme="dark">
                <span class="input-group-text" id="addon-wrapping">🔎</span>
                <input type="text" class="form-control" placeholder="Paste the url that you want to check" name="websitelink" aria-label="weburl" aria-describedby="addon-wrapping">
                <button type="submit" class="btn btn-success">Check</button>
                <?php
                error_reporting(0);
                $url = $_POST['websitelink'];
                $headers = get_headers($url);
                $status_code = $headers[0];
                ?>
            </div>
        </div>
    </form>
    <div class="d-flex justify-content-center">

        <div class="card mt-5 " data-bs-theme="dark">
            <div class="card-body text-center">
                <h3>Info
                </h3>
                <p class="card-text">Status: <?php if ($status_code == "HTTP/1.1 200 OK") {
                                                    echo "Website is up and running! ✔";
                                                } else {
                                                    echo "Website is down / Experiencing issues! ❌";
                                                } ?> </p>
            </div>
        </div>
    </div>
</body>

</html>