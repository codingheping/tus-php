<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TusPHP - Demo</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        body {
            background: #eee;
            letter-spacing: 1px;
            line-height: 1.5em;
            font-family: Lato, Helvetica Neue, Helvetica, Arial, sans-serif;
            margin-top: 40px;
        }

        .container {
            position: relative;
            background: #fff;
            margin: 0 auto;
            font-weight: 300;
            font-size: 1.1em;
            border-top: 5px solid #70B7FD;
        }

        h1 {
            font-size: 2em;
            line-height: 1.3em;
        }

        h3 {
            font-size: 1.5em;
        }

        .gutter-bottom {
            margin-bottom: 15px;
        }

        ol, ul {
            margin-top: 5px;
            padding-bottom: 2.5rem;
        }

        ol li, ul li {
            margin: 1rem 0;
            padding-left: 5px;
        }

        .progress span {
            font-weight: bold;
            display: inline-block;
            margin-top: 5px;
            padding: 0 5px;
        }

        .file-input input[type=file] {
            position: absolute;
            top: 0;
            right: 0;
            margin: 0;
            padding: 0;
            font-size: 20px;
            cursor: pointer;
            opacity: 0;
            filter: alpha(opacity=0);
        }

        .project-info {
            text-align: center;
            padding: 5px;
            margin-top: 10px;
        }

        a.github-corner svg {
            z-index: 9999;
        }

        .github-corner:hover .octo-arm {
            animation: octocat-wave 560ms ease-in-out
        }

        @keyframes octocat-wave {
            0%, 100% {
                transform: rotate(0)
            }
            20%, 60% {
                transform: rotate(-25deg)
            }
            40%, 80% {
                transform: rotate(10deg)
            }
        }

        @media (max-width: 500px) {
            .github-corner:hover .octo-arm {
                animation: none
            }

            .github-corner .octo-arm {
                animation: octocat-wave 560ms ease-in-out
            }
        }
    </style>
</head>
<body>
<div class="container">
    <a href="https://github.com/ankitpokhrel/tus-php" class="github-corner" aria-label="View source on Github">
        <svg width="80" height="80" viewBox="0 0 250 250"
             style="fill:#70B7FD; color:#fff; position: absolute; top: 0; border: 0; right: 0;" aria-hidden="true">
            <path d="M0,0 L115,115 L130,115 L142,142 L250,250 L250,0 Z"></path>
            <path d="M128.3,109.0 C113.8,99.7 119.0,89.6 119.0,89.6 C122.0,82.7 120.5,78.6 120.5,78.6 C119.2,72.0 123.4,76.3 123.4,76.3 C127.3,80.9 125.5,87.3 125.5,87.3 C122.9,97.6 130.6,101.9 134.4,103.2"
                  fill="currentColor" style="transform-origin: 130px 106px;" class="octo-arm"></path>
            <path d="M115.0,115.0 C114.9,115.1 118.7,116.5 119.8,115.4 L133.7,101.6 C136.9,99.2 139.9,98.4 142.2,98.6 C133.8,88.0 127.5,74.4 143.8,58.0 C148.5,53.4 154.0,51.2 159.7,51.0 C160.3,49.4 163.2,43.6 171.4,40.1 C171.4,40.1 176.1,42.5 178.8,56.2 C183.1,58.6 187.2,61.8 190.9,65.4 C194.5,69.0 197.7,73.2 200.1,77.6 C213.8,80.2 216.3,84.9 216.3,84.9 C212.7,93.1 206.9,96.0 205.4,96.6 C205.1,102.4 203.0,107.8 198.3,112.5 C181.9,128.9 168.3,122.5 157.7,114.1 C157.9,116.9 156.7,120.9 152.7,124.9 L141.0,136.5 C139.8,137.7 141.6,141.9 141.8,141.8 Z"
                  fill="currentColor" class="octo-body"></path>
        </svg>
    </a>
    <div class="row">
        <div class="col-md-12">
            <h1>Tus-php Demos</h1>
            <h3 class="gutter-bottom">Instructions</h3>

            <ol>
                <li>Select a large file.</li>
                <li>Watch it upload for a bit, then close tab before it finishes.</li>
                <li>Come back to the tab, select the same file again, the upload should resume where it left off.</li>
            </ol>

            <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">Simple demo</div>
                    <div class="panel-body">
                        <p>This demo shows you how to perform basic upload using Tus-php client and server.</p>
                        <a href="/basic/" class="btn btn-primary btn-sm">Visit demo page</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="panel panel-info">
                    <div class="panel-heading">Partial Chunk Upload</div>
                    <div class="panel-body">
                        <p>This demo shows you how to perform chunk upload using tus-php protocol.</p>
                        <a href="/partial/" class="btn btn-primary btn-sm">Visit demo page</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="panel panel-warning">
                    <div class="panel-heading">Uppy Client & Tus-php Server</div>
                    <div class="panel-body">
                        <p>This demo shows you how to use Uppy Client with Tus-php server.</p>
                        <a href="/uppy/" class="btn btn-primary btn-sm">Visit demo page</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="project-info">
    <a href="https://github.com/ankitpokhrel/tus-php">View this project in GitHub &#8594</a>
</div>
</body>
</html>
