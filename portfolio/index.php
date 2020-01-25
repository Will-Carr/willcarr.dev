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
    <link rel="stylesheet" href="style.css">

    <title>Will Carr: Portfolio</title>
    <link href="/images/favicon.png" rel="icon" type="image/jpeg" />
</head>

<body>

    <div class="container-fluid">
        <div class="row">

            <?php $active_page = "portfolio"; include "{$_SERVER['DOCUMENT_ROOT']}/includes/sidebar.php"; ?>

            <!-- MAIN CONTENT -->
            <div id="main" class="col-12 col-md-9">
                <div id="solo">
                    <h1 class="display-4">Solo Projects</h1>
                    <div class="projects d-flex flex-wrap">

                        <div class="project" id="bullseye">
                            <a href="/portfolio/bullseye-redevelopment/" class="text-muted">
                                <h4>Bullseye Redevelopment</h4>
                            </a>
                            <a href="/portfolio/bullseye-redevelopment/">
                                <div title="Bullseye Redevelopment" class="project-image rounded-lg border border-info"></div>
                            </a>
                        </div>

                        <div class="project" id="degaetano-carr">
                            <a href="/portfolio/degaetano-carr/" class="text-muted">
                                <h4>DeGaetano & Carr</h4>
                            </a>
                            <a href="/portfolio/degaetano-carr/">
                                <div title="DeGaetano & Carr" class="project-image rounded-lg border border-info"></div>
                            </a>
                        </div>

                        <div class="project" id="will-carr-dev">
                            <a href="/portfolio/will-carr-dev/" class="text-muted">
                                <h4>WillCarr.dev</h4>
                            </a>
                            <a href="/portfolio/will-carr-dev/">
                                <div title="WillCarr.dev" class="project-image rounded-lg border border-info"></div>
                            </a>
                        </div>

                    </div>
                </div>

                <div id="contributions" class="mt-5">
                    <h1 class="display-4">Contributions</h1>
                    <div class="projects d-flex flex-wrap">

                        <div class="project" id="team-lyders">
                            <a href="/portfolio/team-lyders/" class="text-muted">
                                <h4>Team Lyders</h4>
                            </a>
                            <a href="/portfolio/team-lyders/">
                                <div title="Team Lyders" class="project-image rounded-lg border border-info"></div>
                            </a>
                        </div>

                        <div class="project" id="asterisk">
                            <a href="/portfolio/asterisk/" class="text-muted">
                                <h4>Asterisk</h4>
                            </a>
                            <a href="/portfolio/asterisk/">
                                <div title="Asterisk" class="project-image rounded-lg border border-info"></div>
                            </a>
                        </div>

                        <div class="project" id="konstru">
                            <a href="/portfolio/konstru/" class="text-muted">
                                <h4>Konstru</h4>
                            </a>
                            <a href="/portfolio/konstru/">
                                <div title="Konstru" class="project-image rounded-lg border border-info"></div>
                            </a>
                        </div>

                    </div>
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
