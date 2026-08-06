<?php

?>

<!DOCTYPE html>
<html style="height:100%">
    <head>
        <title>Home</title>
        <link rel="stylesheet" href="/public/main.css">
        <link rel="stylesheet" href="/public/index.css">
    </head>

    <body>
        <main>
            <h1 style="font-size:6em;">Anderson Yeakey</h1>

            <img id="profile-img" class="floating interactive" src="../public/mainprofile.jpg" alt="Anderson Yeakey's Profile Picture" fetchpriority="high">

            <svg id="left-item" class="floating orbiting" height="16vh" width="16vh">
                <a href="/projects">
                    <circle class="interactive" r="5vh" cx="8vh" cy="8vh" fill="darkblue"/>
                    <text dominant-baseline="middle" text-anchor="middle" font-size="1.5em" x="8vh" y="8vh" fill="white">Projects</text>
                </a>
            </svg>

            <svg id="right-item" class="floating orbiting" height="16vh" width="16vh">
                <a href="/demos">
                    <circle class="interactive" r="5vh" cx="8vh" cy="8vh" fill="darkblue"/>
                    <text dominant-baseline="middle" text-anchor="middle" font-size="1.5em" x="8vh" y="8vh" fill="white">Demos</text>
                </a>
            </svg>

            <svg id="bottom-item" class="floating orbiting" height="16vh" width="16vh">
                <a href="/about">
                    <circle class="interactive" r="5vh" cx="8vh" cy="8vh" fill="darkblue"/>
                    <text dominant-baseline="middle" text-anchor="middle" font-size="1.5em" x="8vh" y="8vh" fill="white">About</text>
                </a>
            </svg>
        </main>
    </body>

    <script>
        window.onload = function() {
            document.documentElement.style.setProperty("--aspect-ratio", window.innerWidth / window.innerHeight);
        }

        addEventListener("resize", (event) => {
            document.documentElement.style.setProperty("--aspect-ratio", window.innerWidth / window.innerHeight);
        })
    </script>
</html>