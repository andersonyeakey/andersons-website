<?php

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home</title>
        <link rel="stylesheet" href="/public/main.css">
        <link rel="stylesheet" href="/public/index.css">
    </head>

    <body role="main" aria-labelledby="main-header">
            <h1 id="main-header" aria-label="Anderson Yeakey">
                <span aria-hidden="true">A</span><span aria-hidden="true">n</span><span aria-hidden="true">d</span><span aria-hidden="true">e</span><span aria-hidden="true">r</span><span aria-hidden="true">s</span><span aria-hidden="true">o</span><span aria-hidden="true">n</span> <span aria-hidden="true">Y</span><span aria-hidden="true">e</span><span aria-hidden="true">a</span><span aria-hidden="true">k</span><span aria-hidden="true">e</span><span aria-hidden="true">y</span>
            </h1>

            <div id="flipcard" class="floating interactive" role="complementary" tabindex="1">
                <img id="profile-img" class="" src="../public/mainprofile.jpg" alt="Anderson Yeakey's Profile Picture" fetchpriority="high">

                <svg id="profile-desc" class="">
                    <circle id="profile-desc-background" r="50%" cx="15vh" cy="15vh" fill="tan"/>
                    <text shape-rendering="crispEdges" dominant-baseline="middle" text-anchor="middle" font-size="1.5em" x="15vh" y="15vh">
                        <tspan x="50%" y="40%">Hi! I'm Anderson.</tspan><tspan x="50%" y="60%">This is example text.</tspan>
                    </text>
                </svg>
            </div>

            <svg id="left-item" class="floating orbiting" height="16vh" width="16vh" aria-label="Projects Link">
                <a href="/projects">
                    <circle class="interactive" r="5vh" cx="8vh" cy="8vh" fill="darkblue"/>
                    <text dominant-baseline="middle" text-anchor="middle" font-size="1.5em" x="8vh" y="8vh" fill="white">Projects</text>
                </a>
            </svg>

            <svg id="right-item" class="floating orbiting" height="16vh" width="16vh" aria-label="Demos Link">
                <a href="/demos">
                    <circle class="interactive" r="5vh" cx="8vh" cy="8vh" fill="darkblue"/>
                    <text dominant-baseline="middle" text-anchor="middle" font-size="1.5em" x="8vh" y="8vh" fill="white">Demos</text>
                </a>
            </svg>

            <svg id="bottom-item" class="floating orbiting" height="16vh" width="16vh" aria-label="About Link">
                <a href="/about">
                    <circle class="interactive" r="5vh" cx="8vh" cy="8vh" fill="darkblue"/>
                    <text dominant-baseline="middle" text-anchor="middle" font-size="1.5em" x="8vh" y="8vh" fill="white">About</text>
                </a>
            </svg>
    </body>

    <script>
        window.onload = function() {
            document.documentElement.style.setProperty("--aspect-ratio", window.innerWidth / window.innerHeight);
        }

        addEventListener("resize", (event) => {
            document.documentElement.style.setProperty("--aspect-ratio", window.innerWidth / window.innerHeight);
        })

        document.getElementById("profile-img").addEventListener("click", (event) => {
            document.getElementById("profile-desc").classList.toggle("active");
            document.getElementById("profile-img").classList.toggle("active");
        })
        document.getElementById("profile-desc-background").addEventListener("click", (event) => {
            document.getElementById("profile-desc").classList.toggle("active");
            document.getElementById("profile-img").classList.toggle("active");
        })

        document.getElementById("flipcard").addEventListener("keydown", (event) => {
            if (event.key === 'Enter' || event.keyCode === 13) {
                document.getElementById("profile-desc").classList.toggle("active");
                document.getElementById("profile-img").classList.toggle("active");
            }
        })
    </script>
</html>