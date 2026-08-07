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
            <h1>
                <span>A</span><span>n</span><span>d</span><span>e</span><span>r</span><span>s</span><span>o</span><span>n</span> <span>Y</span><span>e</span><span>a</span><span>k</span><span>e</span><span>y</span>
            </h1>

            <div class="floating interactive">
                <img id="profile-img" class="" src="../public/mainprofile.jpg" alt="Anderson Yeakey's Profile Picture" fetchpriority="high">

                <svg id="profile-desc" class="">
                    <circle id="profile-desc-background" r="50%" cx="15vh" cy="15vh" fill="tan"/>
                    <text dominant-baseline="middle" text-anchor="middle" font-size="1.5em" x="15vh" y="15vh">
                        <tspan x="50%" y="40%">Hi! I'm Anderson.</tspan><tspan x="50%" y="60%">This is example text.</tspan>
                    </text>
                </svg>
            </div>

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
    </body>

    <script>
        window.onload = function() {
            document.documentElement.style.setProperty("--aspect-ratio", window.innerWidth / window.innerHeight);
        }

        addEventListener("resize", (event) => {
            document.documentElement.style.setProperty("--aspect-ratio", window.innerWidth / window.innerHeight);
        })

        document.getElementById("profile-img").addEventListener("click", (event) => {
            event.target.classList.toggle("active");
            document.getElementById("profile-desc").classList.toggle("active");
        })
        document.getElementById("profile-desc-background").addEventListener("click", (event) => {
            document.getElementById("profile-desc").classList.toggle("active");
            document.getElementById("profile-img").classList.toggle("active");
        })
    </script>
</html>