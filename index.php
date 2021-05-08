<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">

    <title>Frontend Mentor | Stats preview card component</title>

    <style>
        :root {
            --color-darkblue: #1b1b32;
        }

        .attribution {
            font-size: 11px;
            text-align: center;
            background-color: blueviolet;
            color: white;
            padding: 20px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .attribution a {
            color: white;
            font-style: normal;
        }

        .main-box {
            display: flex;
            color: white;
            margin-right: 10%;
            margin-left: 10%;
            margin-top: 5%;
            align-items: center;
            justify-content: stretch;
        }

        body {
            background-color: black;
        }

        .image {
            background: hsl(259°, 37%, 48%);
            z-index: 1;
            /* width: auto; */
            opacity: 0.5;
            /* flex-shrink: 2; */
        }

        .insights {
            color: blueviolet;
        }

        .main-text {
            display: flex;
            flex-direction: column;
            background: #fff;
            background: hsl(244, 38%, 16%);
            line-height: 1.5;
            padding: 30px;
            align-self: stretch;

        }



        .imgcontainer {
            background-image: linear-gradient(115deg,
                    rgba(113, 76, 148, 0.8),
                    rgba(179, 128, 236, 0.877))
        }

        .one-more {
            display: flex;
            text-align: center;
        }

        .lbox {
            text-align: center;
            padding: calc(150px/12);
            line-height: 1;
        }




        @media screen and (min-width: 575px) {
            .lbox:first-of-type {
                margin-left: 40px;
            }

            #text {
                padding-left: 60px;
                padding-right: 60px;
            }

            #heading {
                padding-left: 60px;
                padding-right: 60px;
            }
        }


        @media screen and (max-width: 575px) {
            .main-box {
                flex-direction: column-reverse;
                margin: 10%;
                justify-content: flex-start;
                align-items: flex-start;
                border-radius: 15%;
            }

            .one-more {
                flex-direction: column;
            }

            .imgcontainer {
                /* width: 100%; */
                justify-self: center;
            }

            .image {
                width: 100%;
            }

            .main-text {
                text-align: center;
            }

            .lbox {
                text-align: center;
                padding: calc(100px/12);
            }
        }
    </style>
</head>

<body>

    <div class='main-box'>
        <div class="main-text">
            <h2 id="heading">Get <span class="insights">insights</span> that help your business grow.</h2>

            <p id="text"> Discover the benefits of data analytics and make better decisions regarding revenue, customer
                experience, and overall efficiency.</p>

            <div class="one-more">
                <div class="lbox">
                    <h2>10k+</h2>
                    <p>COMPANIES</p>
                </div>
                <div class="lbox">
                    <h2>314</h2>
                    <p>TEMPLATES</p>
                </div>
                <div class="lbox">
                    <h2>12M+</h2>
                    <p>QUERIES</p>
                </div>
            </div>
        </div>
        <div class="imgcontainer">
            <img class="image" src='./images/image-header-desktop.jpg'>
        </div>
    </div>

    <footer class="attribution">
        Challenge by <a href="https://www.frontendmentor.io?ref=challenge" target="_blank">Frontend Mentor</a>.
        <br />
        Coded with &#10084; by <a href="#">Pradeepa</a>.
    </footer>
</body>

</html>