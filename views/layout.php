<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Japier Framework</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="https://www.flaticon.es/svg/vstatic/svg/4404/4404873.svg?token=exp=1616607173~hmac=284875b079d487da0b694665a546c329" width="30" height="30" class="d-inline-block align-top" alt="">
                Japier
            </a>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <?php echo $content ?>
        </div>
    </div>

</body>

</html>