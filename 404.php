<?
session_start();
$_SESSION["recursion"] = 0;
session_write_close();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#17a2b8" />
    <meta name="description" content="Page not found">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">

    <title>Will Carr: Page Not Found</title>
    <link href="/images/favicon.png" rel="icon" type="image/png" />
</head>

<body>

    <div class="container-fluid">
        <div class="row">

            <?php $active_page = ""; include "{$_SERVER['DOCUMENT_ROOT']}/includes/sidebar.php"; ?>

            <!-- MAIN CONTENT -->
            <div id="main" class="col-12 col-md-9 d-flex align-items-center">
                <div class="w-100">
                    <h1 class="display-4">Sorry, that page was not found!</h1>
                    <hr class="my-3">
                    <div class="d-flex d-md-block justify-content-between flex-wrap">
                        <a href="/" class="btn btn-clear mr-md-2 mb-2 mb-md-0">Home</a>
                        <a href="/portfolio/" class="btn btn-clear mr-md-2 mb-2 mb-md-0">Portfolio</a>
                        <a href="/skills/" class="btn btn-clear mr-md-2">Skills</a>
                        <a href="/contact/" class="btn btn-clear">Contact</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
