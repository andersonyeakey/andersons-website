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

        <svg id="left-item" class="floating" height="100" width="100">
            <circle r="45" cx="50" cy="50" fill="darkblue"/>
        </svg>

        <svg id="right-item" class="floating" height="100" width="100">
            <circle r="45" cx="50" cy="50" fill="darkblue"/>
        </svg>

        <svg id="bottom-item" class="floating" height="100" width="100">
            <circle r="45" cx="50" cy="50" fill="darkblue"/>
        </svg>
    </body>

    <script>
        //TODO: Rework entire orbit system to be rotation transforms in CSS. This is too much

        var orbitRadius = Number(getComputedStyle(document.documentElement).getPropertyValue('--orbit-radius').slice(0, -2)) / 100;
        var orbitPadding = Number(getComputedStyle(document.documentElement).getPropertyValue('--orbit-padding').slice(0, -2)) / 100;

        window.onload = function() {
            var topPadding = Math.min(orbitRadius * window.innerHeight, 0.5 * window.innerHeight - Math.sqrt((orbitRadius * window.innerHeight + orbitPadding * window.innerWidth) * (orbitRadius * window.innerHeight - orbitPadding * window.innerWidth)));
            document.getElementById("left-item").style.top = topPadding + "px";
            document.getElementById("right-item").style.top = topPadding + "px";
        }

        addEventListener("resize", (event) => {
            var topPadding = Math.min(orbitRadius * window.innerHeight, 0.5 * window.innerHeight - Math.sqrt((orbitRadius * window.innerHeight + orbitPadding * window.innerWidth) * (orbitRadius * window.innerHeight - orbitPadding * window.innerWidth)));
            document.getElementById("left-item").style.top = topPadding + "px";
            document.getElementById("right-item").style.top = topPadding + "px";
        })
    </script>
</html>