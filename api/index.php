<?php

?>

<!DOCTYPE html>
<html style="height:100%">
    <head>
        <title>Home</title>
        <link rel="stylesheet" href="/public/index.css">
    </head>

    <body style="height:100%; display:flex">
        <!--<a href="/about">About</a>
        <a href="/projects">Projects</a>
        <a href="/demos">Demos</a>-->

        <img class="floating" src="../public/mainprofile.jpg" alt="Anderson Yeakey's Profile Picture" fetchpriority="high" style="top: 50%; left: 50%; width:30vh; border-radius: 50%; border: 4px solid black;">

        <svg id="left-item" class="floating orbiting" height="100" width="100">
            <circle r="45" cx="50" cy="50" fill="darkblue"/>
        </svg>

        <svg id="right-item" class="floating orbiting" height="100" width="100">
            <circle r="45" cx="50" cy="50" fill="darkblue"/>
        </svg>

        <svg id="bottom-item" class="floating orbiting" height="100" width="100">
            <circle r="45" cx="50" cy="50" fill="darkblue"/>
        </svg>
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