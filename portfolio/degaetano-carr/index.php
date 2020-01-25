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

    <meta name="keywords" content="willcarr.dev, will carr, william carr, carr, web, website, software, developer, engineer, full-stack, full stack, frontend, front-end, front end, backend, back-end, back end, portfolio, github, linkedin">
    <meta name="description" content="">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="/portfolio/style.css">

    <title>Will Carr: DeGaetano & Carr</title>
    <link href="/images/favicon.png" rel="icon" type="image/jpeg" />
</head>

<body>

    <div class="container-fluid">
        <div class="row">

            <?php $active_page = "portfolio"; include "{$_SERVER['DOCUMENT_ROOT']}/includes/sidebar.php"; ?>

            <!-- MAIN CONTENT -->
            <div id="main" class="col-12 col-md-9">

                <h1 id="degaetano-carr-title" class="display-4">DeGaetano & Carr</h1>

                <a href="https://degaetanocarr.com" class="text-muted min-link">
                    <h2 id="degaetano-carr-link" class="display-6">degaetanocarr.com</h2>
                </a>

                <picture>
                    <source type="image/webp" srcset="/images/degaetanocarr.webp">
                    <source type="image/jp2" srcset="/images/degaetanocarr.jp2">
                    <source type="image/jxr" srcset="/images/degaetanocarr.jxr">
                    <img class="img img-fluid rounded-lg border border-info portfolio-img-lg" src="/images/degaetanocarr.png" alt="DeGaetano & Carr Website" />
                </picture>

                <p>DeGaetano & Carr LLP is a New York based law firm. Their attorneys focus on residential real estate transactions, commercial and residential leases, business law, not-for-profit law, trust and estate planning, trust administration,
                    and estate administration.</p>
                <p>Over the summer of 2018, I worked to develop the website for the company, allowing them to solely focus on what they do best: representing their clients.</p>
                <p>In summary, what I developed was:</p>
                <ul>
                    <li>A responsive front-end</li>
                    <li>A method to migrate their previous systems to this upgraded one</li>
                    <li>Interactive methods to reach the firm</li>
                </ul>

                <div class="technologies">
                    <h4>Technologies Used:</h4>
                    <span class="badge badge-pill badge-info">HTML</span>
                    <span class="badge badge-pill badge-info">CSS</span>
                    <span class="badge badge-pill badge-info">PHP</span>
                    <span class="badge badge-pill badge-info">Javascript</span>
                    <span class="badge badge-pill badge-info">Leaflet</span>
                </div>

                <div class="mt-4 d-flex justify-content-between flex-wrap">
                    <a href="/portfolio/bullseye-redevelopment/" class="btn btn-clear mr-md-2 d-flex justify-content-between">
                        <?php include "{$_SERVER['DOCUMENT_ROOT']}/includes/left-arrow.php"; ?>
                        <span class="ml-1 arrow-text">Bullseye Redevelopment</span>
                    </a>
                    <a href="/portfolio/will-carr-dev/" class="btn btn-clear d-flex justify-content-between">
                        <span class="mr-1 arrow-text">WillCarr.dev</span>
                        <?php include "{$_SERVER['DOCUMENT_ROOT']}/includes/right-arrow.php"; ?>
                    </a>
                </div>

            </div>

        </div>
    </div>




    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="/scripts/index.js"></script>
</body>

</html>
