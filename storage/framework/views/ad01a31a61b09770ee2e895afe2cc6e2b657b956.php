<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='https://fonts.googleapis.com/css?family=Lato:300,400|Montserrat:700' rel='stylesheet' type='text/css'>
    <script src="https://kit.fontawesome.com/f5887f9b2d.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/ThankSignup.css">
    <link rel="stylesheet" href="css/signup.css">
    <title>complete signup</title>
</head>

<body>
    <?php if(session('loggedIn')): ?>
    <header>
        <div class="container">
            <a href="#">
                <img src="images/logo.png" alt="logo">
            </a>
            <nav>
                <ul>
                    <li><i class="fas fa-map-marker-alt"></i>
                        <p>
                            <span>Adress: </span>
                            198 West 21th Street,
                            <br>
                            Suite 721 New York NY 10016.
                        </p>
                    </li>
                    <li><i class="fas fa-phone-square-alt"></i>
                        <p>
                            <span>Phone: </span>
                            <a href="tel://1234567920">+ 1235 2355 98</a>
                        </p>
                    </li>
                    <li><i class="fas fa-home"></i>
                        <p>
                            <span>Website: </span>
                            <a href="#">wecare.com</a>
                        </p>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- end header -->



    <!-- Start second-section -->
    <div class="second-section">
        <div class="overlay">
            <div class="text">
                <div class="content">
                    <h1> services </h1>
                    <a href="/logout">Home ></a>
                    <span>services ></span>
                </div>
            </div>
        </div>
    </div>
    <!-- End second-section -->


    <!-- Start third-section -->

    <div class="third-section">
        <svg class="animated" id="freepik_stories-welcome" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs">
            <style>
                svg#freepik_stories-welcome:not(.animated) .animable {
                    opacity: 0;
                }

                svg#freepik_stories-welcome.animated #freepik--Plants--inject-26 {
                    animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideUp;
                    animation-delay: 0s;
                }

                svg#freepik_stories-welcome.animated #freepik--Ribbon--inject-26 {
                    animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideUp, 1.5s Infinite linear floating;
                    animation-delay: 0s, 1s;
                }

                svg#freepik_stories-welcome.animated #freepik--Character--inject-26 {
                    animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideUp;
                    animation-delay: 0s;
                }

                @keyframes  slideUp {
                    0% {
                        opacity: 0;
                        transform: translateY(30px);
                    }

                    100% {
                        opacity: 1;
                        transform: inherit;
                    }
                }

                @keyframes  floating {
                    0% {
                        opacity: 1;
                        transform: translateY(0px);
                    }

                    50% {
                        transform: translateY(-10px);
                    }

                    100% {
                        opacity: 1;
                        transform: translateY(0px);
                    }
                }

                .animator-hidden {
                    display: none;
                }
            </style>
            <g id="freepik--background-simple--inject-26" class="animable animator-hidden" style="transform-origin: 252.536px 230.346px;">
                <path d="M183.69,390q3.51,0,7.17,0c6.08-.12,11.69-.51,16.93-1.11V274.67h-24.1Z" style="fill: #90CAF9; transform-origin: 195.74px 332.335px;" id="elv7hn4kdzrjg" class="animable"></path>
                <path d="M228.27,385a119.07,119.07,0,0,0,24.09-9.38v-101H228.27Z" style="fill: #90CAF9; transform-origin: 240.315px 329.81px;" id="elbgw8zvwrtu" class="animable"></path>
                <path d="M272.84,363.22c8-5.17,15.38-9.67,24.1-11.92V274.67h-24.1Z" style="fill: #90CAF9; transform-origin: 284.89px 318.945px;" id="el3aup1uq2gxi" class="animable"></path>
                <path d="M317.42,350.23c8.62,1,16.48,3.29,24.1,5.76V274.67h-24.1Z" style="fill: #90CAF9; transform-origin: 329.47px 315.33px;" id="elze6hgba7vyk" class="animable"></path>
                <path d="M69.5,311.08q2.1,5.75,4.55,11.24V274.67H61.32A151.69,151.69,0,0,0,69.5,311.08Z" style="fill: #90CAF9; transform-origin: 67.685px 298.495px;" id="elpdnmdwud9m" class="animable"></path>
                <path d="M94.53,354.79a96.75,96.75,0,0,0,24.1,19.59V274.67H94.53Z" style="fill: #90CAF9; transform-origin: 106.58px 324.525px;" id="el9z1etp54inj" class="animable"></path>
                <path d="M139.11,383.35a135.15,135.15,0,0,0,24.1,5.25V274.67h-24.1Z" style="fill: #90CAF9; transform-origin: 151.16px 331.635px;" id="elwgykpvcul7" class="animable"></path>
                <path d="M362,362.17a61.7,61.7,0,0,0,24.1,1.16V274.67H362Z" style="fill: #90CAF9; transform-origin: 374.05px 319.34px;" id="elw9uik5tb1mh" class="animable"></path>
                <path d="M420.52,140.63a194.86,194.86,0,0,0-24.87-38.14C354.7,54,272,69.12,240.16,94.15s-33.37,59.92-60.68,69-48.54-8.34-84.95,13.66c-24.64,14.89-35,50.28-34,85.71H443.89c.19-2.89.35-5.72.46-8.46A230.31,230.31,0,0,0,420.52,140.63ZM96.59,214.32,92,211.91l-4.59,2.41.88-5.11-3.72-3.62,5.13-.75,2.3-4.65,2.3,4.65,5.13.75-3.72,3.62Zm104.79,10.09L194.76,233,192,222.5l-10.17-3.65,9.09-5.86.33-10.8,8.37,6.83L210,206l-3.91,10.08,6.08,8.93Zm51.2-66.69-.86,6.24-4.43-4.48-6.2,1.1L244,155l-3-5.56,6.22,1,4.37-4.54,1,6.22,5.66,2.76ZM276,253.91l-5-2.64-5,2.64,1-5.59-4.07-4,5.62-.82,2.51-5.08,2.51,5.08,5.62.82-4.07,4ZM345.63,89.62,343,88.24l-2.63,1.38.5-2.93-2.12-2.07,2.94-.43L343,81.53l1.31,2.66,2.94.43-2.12,2.07Zm78,138.53L417,224.66l-6.65,3.49,1.27-7.4-5.38-5.25,7.43-1.08,3.33-6.73,3.33,6.73,7.43,1.08-5.38,5.25Z" style="fill: #90CAF9; transform-origin: 252.536px 166.606px;" id="el8srjvfs90d8" class="animable"></path>
                <path d="M406.58,356.24c1.15-.6,2.31-1.24,3.49-1.93,8.95-5.21,15.63-14.58,20.61-26.09V274.67h-24.1Z" style="fill: #90CAF9; transform-origin: 418.63px 315.455px;" id="elrljnpvt962" class="animable"></path>
                <g id="elfa951etymzs">
                    <g style="opacity: 0.7; transform-origin: 252.536px 230.346px;" class="animable" id="elcnzsv1dg7e">
                        <path d="M183.69,390q3.51,0,7.17,0c6.08-.12,11.69-.51,16.93-1.11V274.67h-24.1Z" style="fill: rgb(255, 255, 255); transform-origin: 195.74px 332.335px;" id="elgyqrpceqrft" class="animable"></path>
                        <path d="M228.27,385a119.07,119.07,0,0,0,24.09-9.38v-101H228.27Z" style="fill: rgb(255, 255, 255); transform-origin: 240.315px 329.81px;" id="elepubkzhpgj" class="animable"></path>
                        <path d="M272.84,363.22c8-5.17,15.38-9.67,24.1-11.92V274.67h-24.1Z" style="fill: rgb(255, 255, 255); transform-origin: 284.89px 318.945px;" id="elf06xpl9mzlj" class="animable"></path>
                        <path d="M317.42,350.23c8.62,1,16.48,3.29,24.1,5.76V274.67h-24.1Z" style="fill: rgb(255, 255, 255); transform-origin: 329.47px 315.33px;" id="elx5tn87x2e0e" class="animable"></path>
                        <path d="M69.5,311.08q2.1,5.75,4.55,11.24V274.67H61.32A151.69,151.69,0,0,0,69.5,311.08Z" style="fill: rgb(255, 255, 255); transform-origin: 67.685px 298.495px;" id="elebc2gilma36" class="animable"></path>
                        <path d="M94.53,354.79a96.75,96.75,0,0,0,24.1,19.59V274.67H94.53Z" style="fill: rgb(255, 255, 255); transform-origin: 106.58px 324.525px;" id="el7jsl8ho8iul" class="animable"></path>
                        <path d="M139.11,383.35a135.15,135.15,0,0,0,24.1,5.25V274.67h-24.1Z" style="fill: rgb(255, 255, 255); transform-origin: 151.16px 331.635px;" id="el7rd2mtd4b75" class="animable"></path>
                        <path d="M362,362.17a61.7,61.7,0,0,0,24.1,1.16V274.67H362Z" style="fill: rgb(255, 255, 255); transform-origin: 374.05px 319.34px;" id="elw9v6poprqc8" class="animable"></path>
                        <path d="M420.52,140.63a194.86,194.86,0,0,0-24.87-38.14C354.7,54,272,69.12,240.16,94.15s-33.37,59.92-60.68,69-48.54-8.34-84.95,13.66c-24.64,14.89-35,50.28-34,85.71H443.89c.19-2.89.35-5.72.46-8.46A230.31,230.31,0,0,0,420.52,140.63ZM96.59,214.32,92,211.91l-4.59,2.41.88-5.11-3.72-3.62,5.13-.75,2.3-4.65,2.3,4.65,5.13.75-3.72,3.62Zm104.79,10.09L194.76,233,192,222.5l-10.17-3.65,9.09-5.86.33-10.8,8.37,6.83L210,206l-3.91,10.08,6.08,8.93Zm51.2-66.69-.86,6.24-4.43-4.48-6.2,1.1L244,155l-3-5.56,6.22,1,4.37-4.54,1,6.22,5.66,2.76ZM276,253.91l-5-2.64-5,2.64,1-5.59-4.07-4,5.62-.82,2.51-5.08,2.51,5.08,5.62.82-4.07,4ZM345.63,89.62,343,88.24l-2.63,1.38.5-2.93-2.12-2.07,2.94-.43L343,81.53l1.31,2.66,2.94.43-2.12,2.07Zm78,138.53L417,224.66l-6.65,3.49,1.27-7.4-5.38-5.25,7.43-1.08,3.33-6.73,3.33,6.73,7.43,1.08-5.38,5.25Z" style="fill: rgb(255, 255, 255); transform-origin: 252.536px 166.606px;" id="eln7ckjp2t9a" class="animable"></path>
                        <path d="M406.58,356.24c1.15-.6,2.31-1.24,3.49-1.93,8.95-5.21,15.63-14.58,20.61-26.09V274.67h-24.1Z" style="fill: rgb(255, 255, 255); transform-origin: 418.63px 315.455px;" id="elllvct09yc4m" class="animable"></path>
                    </g>
                </g>
            </g>
            <g id="freepik--Shadow--inject-26" class="animable animator-hidden" style="transform-origin: 258.365px 414.235px;">
                <ellipse cx="335.35" cy="420.3" rx="54.99" ry="8.34" style="fill: #90CAF9; transform-origin: 335.35px 420.3px;" id="elaecmhnxtc25" class="animable"></ellipse>
                <g id="elxzjtq3zpymd">
                    <ellipse cx="335.35" cy="420.3" rx="54.99" ry="8.34" style="fill: rgb(255, 255, 255); opacity: 0.5; transform-origin: 335.35px 420.3px;" class="animable" id="elulzahhbhkcp"></ellipse>
                </g>
                <ellipse cx="167.73" cy="408.17" rx="41.34" ry="8.34" style="fill: #90CAF9; transform-origin: 167.73px 408.17px;" id="elc6ovu0y6g7j" class="animable"></ellipse>
                <g id="elkm7pr9tkga">
                    <ellipse cx="167.73" cy="408.17" rx="41.34" ry="8.34" style="fill: rgb(255, 255, 255); opacity: 0.5; transform-origin: 167.73px 408.17px;" class="animable" id="elzv30plzmmj"></ellipse>
                </g>
            </g>
            <g id="freepik--Plants--inject-26" class="animable" style="transform-origin: 177.525px 327.434px;">
                <path d="M147.63,386.51l21.05-8.76c-1.47-2.41-2.94-1.27-4.82-5.17-1-2-.12-5.22-1.38-7.8-1-2.11-4.11-3.45-5.31-5.87-1.09-2.18-.3-5.43-1.48-7.78s-4.21-3.51-5.39-5.8-.41-5.51-1.6-7.76-4.3-3.49-5.49-5.71-.56-5.55-1.78-7.72-4.43-3.43-5.66-5.52c-1.38-2.34-.87-5.65-2.14-7.64-1.55-2.42-4.78-3.3-6.09-5-2.46-3.2-3.78-6.72-5-6.48s-.16,3.78.51,8c.34,2.1-1.24,5-.54,7.81.56,2.26,3.32,4.14,4.08,6.72.67,2.31-.67,5.36.12,7.85s3.57,4.08,4.38,6.51-.46,5.46.36,7.85,3.7,4.06,4.53,6.41-.34,5.52.5,7.84,3.79,4.08,4.62,6.35c.93,2.51-.22,5.63.6,7.82,1,2.66,3.93,4.28,4.7,6.29,1.67,4.39-.68,4.31.7,7.83Z" style="fill: rgb(46, 53, 58); transform-origin: 145.331px 343.134px;" id="elykc0ilzixfk" class="animable"></path>
                <line x1="124.96" y1="306.59" x2="156.26" y2="381.78" style="fill: none; stroke: rgb(255, 255, 255); stroke-miterlimit: 10; stroke-width: 0.360849px; transform-origin: 140.61px 344.185px;" id="el5o7gcunmtnu" class="animable"></line>
                <polyline points="131.53 313.11 129.33 317.49 124.97 314.92" style="fill: none; stroke: rgb(255, 255, 255); stroke-miterlimit: 10; stroke-width: 0.360849px; transform-origin: 128.25px 315.3px;" id="elpnbuqobth4b" class="animable"></polyline>
                <polyline points="136.97 326.19 134.78 330.58 130.42 328.01" style="fill: none; stroke: rgb(255, 255, 255); stroke-miterlimit: 10; stroke-width: 0.360849px; transform-origin: 133.695px 328.385px;" id="el8c7k5kjy95q" class="animable"></polyline>
                <polyline points="142.1 338.5 139.91 342.89 135.54 340.32" style="fill: none; stroke: rgb(255, 255, 255); stroke-miterlimit: 10; stroke-width: 0.360849px; transform-origin: 138.82px 340.695px;" id="el65mqp1pha9i" class="animable"></polyline>
                <polyline points="148.2 353.14 146 357.53 141.64 354.96" style="fill: none; stroke: rgb(255, 255, 255); stroke-miterlimit: 10; stroke-width: 0.360849px; transform-origin: 144.92px 355.335px;" id="el8j7zpjn97af" class="animable"></polyline>
                <polyline points="154.36 367.94 152.17 372.33 147.81 369.76" style="fill: none; stroke: rgb(255, 255, 255); stroke-miterlimit: 10; stroke-width: 0.360849px; transform-origin: 151.085px 370.135px;" id="elkhfz8xarbr" class="animable"></polyline>
                <path d="M145.25,380.7l34.34-1.09c-.79-4.18-3.46-3.36-4-9.85-.28-3.28,2.62-7.43,2.22-11.73-.33-3.54-3.94-7.06-4.34-11.11-.36-3.65,2.49-7.81,2.08-11.75-.4-3.72-4.06-7.19-4.49-11.05s2.36-8,1.9-11.79-4.19-7.21-4.69-11,2.18-8.12,1.62-11.82c-.58-3.92-4.4-7.21-5-10.82-.69-4,1.8-8.42,1.07-11.88-.89-4.25-5-7.22-5.9-10.34-1.74-5.82-1.73-11.49-3.58-11.8s-2.25,5.23-3.54,11.48c-.65,3.14-4.44,6.42-4.94,10.72-.41,3.48,2.47,7.6,2.15,11.63-.29,3.62-3.8,7.2-4,11.12-.21,3.7,2.86,7.67,2.69,11.53s-3.56,7.43-3.68,11.24,3,7.69,2.95,11.45-3.43,7.6-3.49,11.31c-.06,3.92,3.16,7.77,3.12,11.41,0,4-3.32,7.82-3.33,11.35,0,4.27,3.24,8.11,3.25,11.37,0,7.06-3.26,5.7-3.2,11.39Z" style="fill: rgb(46, 53, 58); transform-origin: 162px 312.679px;" id="el888pxzi06u" class="animable"></path>
                <line x1="156.04" y1="256.01" x2="159.95" y2="378.65" style="fill: none; stroke: rgb(255, 255, 255); stroke-miterlimit: 10; stroke-width: 0.543628px; transform-origin: 157.995px 317.33px;" id="el6rttj5dlc18" class="animable"></line>
                <polyline points="161.81 268.7 156.37 273.7 151.6 267.75" style="fill: none; stroke: rgb(255, 255, 255); stroke-miterlimit: 10; stroke-width: 0.543628px; transform-origin: 156.705px 270.725px;" id="elsn7x44amvs" class="animable"></polyline>
                <polyline points="162.49 290.04 157.05 295.05 152.28 289.1" style="fill: none; stroke: rgb(255, 255, 255); stroke-miterlimit: 10; stroke-width: 0.543628px; transform-origin: 157.385px 292.075px;" id="el155gqr5y9jb" class="animable"></polyline>
                <polyline points="163.13 310.12 157.69 315.12 152.92 309.17" style="fill: none; stroke: rgb(255, 255, 255); stroke-miterlimit: 10; stroke-width: 0.543628px; transform-origin: 158.025px 312.145px;" id="elzp2e5v1zyq" class="animable"></polyline>
                <polyline points="163.89 334 158.45 339.01 153.69 333.06" style="fill: none; stroke: rgb(255, 255, 255); stroke-miterlimit: 10; stroke-width: 0.543628px; transform-origin: 158.79px 336.035px;" id="el3r48b8lvo16" class="animable"></polyline>
                <polyline points="164.66 358.14 159.22 363.15 154.45 357.2" style="fill: none; stroke: rgb(255, 255, 255); stroke-miterlimit: 10; stroke-width: 0.543628px; transform-origin: 159.555px 360.175px;" id="eldhcish5ym5p" class="animable"></polyline>
                <path d="M165.93,303.56c1.76,1.21,6.5,2,6.51,2s-.42-3.28-.47-3.49c-.62-2.37-3.2-6.58-5.93-6.73a3.24,3.24,0,0,0-3.33,3.49C162.79,300.78,164.42,302.52,165.93,303.56Z" style="fill: rgb(46, 53, 58); transform-origin: 167.57px 300.449px;" id="elp4tx7liovu" class="animable"></path>
                <path d="M213.46,313.85s1.47-3,1.54-3.17c.79-2.31,1-7.25-1.23-8.89a3.24,3.24,0,0,0-4.7,1.08c-1,1.66-.6,4,.08,5.7C210,310.56,213.46,313.85,213.46,313.85Z" style="fill: rgb(46, 53, 58); transform-origin: 212.009px 307.525px;" id="elpy9d3nre72s" class="animable"></path>
                <path d="M230.87,299.48c-2.62-.8-6.51,2.24-7.91,4.25-.12.17-1.71,3.1-1.66,3.11h.06c-.62.47-1.27,1-2,1.57-1.29,1.08-2.75,2.32-4.24,3.77a58.12,58.12,0,0,0-4.59,4.9,42.54,42.54,0,0,0-4.3,6.16l0,.08c.17-.78.56-3,.57-3.16.15-2.44-1-7.25-3.54-8.25A3.24,3.24,0,0,0,199,314.2c-.52,1.86.49,4,1.59,5.47,1.25,1.64,5.18,3.76,5.5,3.93a58.15,58.15,0,0,0-3.19,7c-.53,1.39-1,2.8-1.51,4.23.12-.68.23-1.3.23-1.38.15-2.44-1-7.25-3.53-8.25a3.24,3.24,0,0,0-4.25,2.28c-.53,1.86.48,4,1.58,5.47s4.44,3.35,5.33,3.83l-.54,1.65c-.85,2.63-1.68,5.27-2.57,7.83-.32.9-.66,1.78-1,2.65.1-.6.19-1.12.2-1.19.15-2.45-1-7.25-3.54-8.25a3.23,3.23,0,0,0-4.25,2.28c-.52,1.86.48,4,1.59,5.47s4.12,3.17,5.16,3.75c-.37.88-.75,1.78-1.15,2.62-.29.57-.53,1.14-.85,1.7s-.61,1.11-.91,1.65c-.62,1-1.26,2.1-1.89,3.1-.43.69-.85,1.34-1.28,2,.32-.9.92-2.66,1-2.81a12.59,12.59,0,0,0-.5-6.33,3.57,3.57,0,0,0,.1-.72,3.24,3.24,0,0,0-3.37-3.45c-2.73.19-5.27,4.43-5.85,6.8,0,.14-.24,1.7-.36,2.69,0-.59,0-1.16-.06-1.77,0-1.2-.14-2.4-.22-3.69-.07-.62-.13-1.25-.2-1.88s-.18-1.29-.27-1.94c-.24-1.51-.56-3-.92-4.54,1.06,0,4.79-.26,6.43-1.08s3.49-2.31,3.85-4.21a3.24,3.24,0,0,0-2.81-3.92c-2.73-.23-5.87,3.58-6.81,5.83-.06.15-.55,1.84-.81,2.78-.22-.91-.43-1.82-.68-2.74-.73-2.63-1.55-5.28-2.36-7.93l-.72-2.43c.37,0,4.82-.17,6.66-1.09,1.63-.81,3.49-2.31,3.84-4.21a3.23,3.23,0,0,0-2.8-3.92c-2.73-.23-5.88,3.58-6.82,5.84-.07.17-.78,2.61-.93,3.24-.52-1.79-1-3.57-1.46-5.35a56.18,56.18,0,0,1-1.31-7.29c.17,0,4.81-.15,6.7-1.09,1.63-.81,3.49-2.31,3.84-4.21a3.23,3.23,0,0,0-2.8-3.92c-2.73-.23-5.88,3.58-6.82,5.83-.06.15-.6,2-.84,2.9h-.15a42.06,42.06,0,0,1,0-7.45c.11-1.36.29-2.66.49-3.92.87.06,4.84.3,6.63-.36s3.72-1.91,4.28-3.76a3.24,3.24,0,0,0-2.36-4.21c-2.69-.53-6.23,2.91-7.41,5.05-.07.12-.59,1.37-1,2.29.1-.56.19-1.15.3-1.69.4-2,.89-3.87,1.34-5.49.26-.92.51-1.75.76-2.52.88-.39,4.42-2,5.68-3.36s2.42-3.41,2.07-5.32a3.24,3.24,0,0,0-4-2.64c-2.62.77-4.18,5.45-4.25,7.9,0,.21.29,3.52.34,3.5l0,0c-.25.74-.52,1.53-.78,2.41-.49,1.61-1,3.44-1.46,5.48a56.59,56.59,0,0,0-1.12,6.62,41.35,41.35,0,0,0-.19,7.51.28.28,0,0,0,0,.09c-.3-.74-1.19-2.8-1.28-2.95-1.21-2.12-4.82-5.51-7.49-4.94a3.25,3.25,0,0,0-2.29,4.25c.59,1.84,2.62,3.09,4.34,3.69,1.95.68,6.4.28,6.75.24a56.33,56.33,0,0,0,1.19,7.57c.31,1.45.68,2.91,1.07,4.36-.28-.64-.53-1.2-.57-1.28-1.22-2.12-4.82-5.5-7.5-4.93a3.24,3.24,0,0,0-2.29,4.25c.59,1.84,2.62,3.08,4.35,3.69s5.55.34,6.55.26c.16.55.3,1.11.46,1.66.75,2.67,1.51,5.33,2.17,7.95.24.93.43,1.85.63,2.77-.24-.56-.45-1-.49-1.11-1.22-2.12-4.82-5.5-7.5-4.93a3.25,3.25,0,0,0-2.29,4.25c.59,1.84,2.62,3.09,4.35,3.69s5.18.37,6.37.27c.18.95.36,1.9.48,2.83.08.63.19,1.24.23,1.88s.1,1.26.15,1.89c.06,1.2.12,2.44.14,3.61,0,.82,0,1.6,0,2.38-.22-.92-.69-2.72-.75-2.87-.88-2.28-3.93-6.17-6.66-6a3.25,3.25,0,0,0-2.91,3.85c.31,1.91,2.12,3.45,3.74,4.31,1.77.94,6.06,1.23,6.59,1.26,0,1.3,0,2.56,0,3.75-.06,3.74-.24,6.9-.41,9.24l1.81.36c.12-2.4.24-5.69.23-9.59,0-1.32,0-2.72-.08-4.17a33.85,33.85,0,0,0,4-1c1.09,1.76,4.28,4.19,4.69,4.5-.71,1.09-1.41,2.14-2.08,3.12-2.1,3.05-4,5.56-5.41,7.42l2,.38c1.33-1.82,3-4.15,4.77-6.9.73-1.1,1.48-2.29,2.24-3.52.49.2,4.46,1.85,6.47,1.79,1.83-.06,4.14-.64,5.26-2.22a3.24,3.24,0,0,0-.9-4.73c-2.39-1.35-6.84.79-8.64,2.44-.11.1-1.14,1.29-1.78,2,.31-.51.61-1,.92-1.52.63-1,1.22-2.07,1.86-3.19l.87-1.68c.31-.55.56-1.18.84-1.77.63-1.39,1.2-2.83,1.74-4.29.91.55,4.14,2.43,6,2.65s4.19,0,5.53-1.39a3.24,3.24,0,0,0-.17-4.82c-2.15-1.7-6.88-.26-8.91,1.11-.12.08-1.47,1.22-2.2,1.86.32-.88.64-1.75.94-2.66.84-2.6,1.62-5.26,2.41-7.91.24-.81.49-1.62.74-2.42.32.19,4.11,2.51,6.15,2.76,1.82.22,4.19,0,5.53-1.39a3.24,3.24,0,0,0-.17-4.82c-2.15-1.7-6.88-.26-8.91,1.11-.15.1-2.09,1.75-2.56,2.19.54-1.78,1.1-3.55,1.73-5.27a57,57,0,0,1,2.92-6.8c.15.09,4.1,2.53,6.19,2.78,1.82.23,4.19,0,5.53-1.39a3.24,3.24,0,0,0-.17-4.82c-2.15-1.69-6.88-.25-8.91,1.11-.13.09-1.61,1.34-2.3,2l-.12-.1a42,42,0,0,1,4.13-6.2c.84-1.07,1.71-2.06,2.57-3,.69.52,3.87,2.91,5.73,3.35s4.16.45,5.65-.78a3.24,3.24,0,0,0,.35-4.81c-1.95-1.92-6.8-1-9,.12-.12.07-1.25.82-2.06,1.39.39-.42.79-.86,1.18-1.25,1.46-1.47,2.88-2.74,4.15-3.84.72-.63,1.39-1.18,2-1.68.95.16,4.78.78,6.59.33s3.91-1.51,4.66-3.29A3.25,3.25,0,0,0,230.87,299.48Z" style="fill: rgb(46, 53, 58); transform-origin: 196.705px 328.71px;" id="el4ej9jvfea83" class="animable"></path>
                <rect x="131.7" y="372.04" width="74.43" height="9.85" style="fill: rgb(46, 53, 58); transform-origin: 168.915px 376.965px;" id="elmlbx9wmlwpg" class="animable"></rect>
                <polygon points="194.43 410.21 143.39 410.21 137.01 380.8 200.81 380.8 194.43 410.21" style="fill: rgb(46, 53, 58); transform-origin: 168.91px 395.505px;" id="ell3iq8toqka" class="animable"></polygon>
            </g>
            <g id="freepik--Ribbon--inject-26" class="animable" style="transform-origin: 251.559px 189.703px;">
                <path d="M132.33,223l-.75,70.94s-3,1.51-11.32,1.51-11.32-1.51-11.32-1.51l3-28.68S101.39,263,101.39,260s23.39-86,23.39-86S136.86,195.07,132.33,223Z" style="fill: #90CAF9; stroke: rgb(46, 53, 58); stroke-miterlimit: 10; transform-origin: 117.368px 234.725px;" id="elnjwsbukbaod" class="animable"></path>
                <line x1="111.95" y1="265.25" x2="121.73" y2="220.05" style="fill: none; stroke: rgb(46, 53, 58); stroke-miterlimit: 10; transform-origin: 116.84px 242.65px;" id="elkolrc3w1hl9" class="animable"></line>
                <path d="M115.73,173.94s13.58,18.11,15.09,25.66S132.33,223,132.33,223a123.8,123.8,0,0,0,8.3-34.71c1.51-18.87-13.58-28.68-13.58-28.68Z" style="fill: rgb(46, 53, 58); stroke: rgb(46, 53, 58); stroke-miterlimit: 10; transform-origin: 128.233px 191.305px;" id="elzd7vv28hqjq" class="animable"></path>
                <path d="M370.92,223l.75,70.94s3,1.51,11.32,1.51,11.32-1.51,11.32-1.51l-3-28.68S401.86,263,401.86,260s-23.4-86-23.4-86S366.39,195.07,370.92,223Z" style="fill: #90CAF9; stroke: rgb(46, 53, 58); stroke-miterlimit: 10; transform-origin: 385.881px 234.725px;" id="elauhi0iaodq4" class="animable"></path>
                <line x1="391.29" y1="265.25" x2="382.22" y2="212.69" style="fill: none; stroke: rgb(46, 53, 58); stroke-miterlimit: 10; transform-origin: 386.755px 238.97px;" id="eln7rsvy6g6ua" class="animable"></line>
                <path d="M387.52,173.94s-13.59,18.11-15.1,25.66-1.5,23.39-1.5,23.39a123.61,123.61,0,0,1-8.31-34.71c-1.51-18.87,13.59-28.68,13.59-28.68Z" style="fill: rgb(46, 53, 58); stroke: rgb(46, 53, 58); stroke-miterlimit: 10; transform-origin: 375.012px 191.295px;" id="el2ymdne19eay" class="animable"></path>
                <path d="M387.41,173.94a266.85,266.85,0,0,0-271.68,0L91.91,133.66c-1.71-2.86-.1-7,3.65-9.06a319.7,319.7,0,0,1,312,0c3.74,2.09,5.36,6.2,3.65,9.06Z" style="fill: #90CAF9; transform-origin: 251.559px 128.948px;" id="elb7hv79g8sy" class="animable"></path>
                <path d="M387.41,173.94a266.85,266.85,0,0,0-271.68,0L91.91,133.66c-1.71-2.86-.1-7,3.65-9.06a319.7,319.7,0,0,1,312,0c3.74,2.09,5.36,6.2,3.65,9.06Z" style="fill: none; stroke: rgb(46, 53, 58); stroke-miterlimit: 10; transform-origin: 251.559px 128.948px;" id="elgwhbglilxf4" class="animable"></path><text transform="translate(138.94 147.69) rotate(-17.76)" style="font-size:43.82455062866211px;fill:#2e353a;font-family:Nunito-Black, Nunito;font-weight:800">W</text><text transform="matrix(0.98, -0.21, 0.21, 0.98, 183.03, 134.02)" style="font-size:43.82455062866211px;fill:#2e353a;font-family:Nunito-Black, Nunito;font-weight:800">E</text><text transform="matrix(0.99, -0.13, 0.13, 0.99, 208.59, 128.51)" style="font-size:43.82455062866211px;fill:#2e353a;font-family:Nunito-Black, Nunito;font-weight:800">L</text><text transform="translate(233.1 125.05) rotate(-2.05)" style="font-size:43.82455062866211px;fill:#2e353a;font-family:Nunito-Black, Nunito;font-weight:800">C</text><text transform="matrix(1, 0.09, -0.09, 1, 262.17, 123.79)" style="font-size:43.82455062866211px;fill:#2e353a;font-family:Nunito-Black, Nunito;font-weight:800">O</text><text transform="translate(296.01 126.64) rotate(13.58)" style="font-size:43.82455062866211px;fill:#2e353a;font-family:Nunito-Black, Nunito;font-weight:800">M</text><text transform="translate(336.7 136.92) rotate(21.16)" style="font-size:43.82455062866211px;fill:#2e353a;font-family:Nunito-Black, Nunito;font-weight:800">E</text>
            </g>
            <g id="freepik--Character--inject-26" class="animable" style="transform-origin: 313.737px 291.448px;">
                <path d="M338.18,220.6s-12.72-9.4-18.83-14S302.77,188.8,300.15,183a91,91,0,0,0-4.36-8.73S297,168.44,297,167s-1.17-3.34-1.91-4.56c-.37-.61-3-4.1-3-1.44,0,2.08,1.25,3.12,1.25,4.37h0a10.21,10.21,0,0,1-4-4c-1.46-2.7-2.08-3.75-2.92-3.12-1.49,1.12.42,4,.42,4s-.42-4-2.5-3.34c-1.2.36.42,3.75,1.25,5.21s-.42-1-.21,1.46c.15,1.83,2.24,6.33,4.17,8.54.7.81,2.33.56,2.5.84.62,1,7.29,16.46,11.87,24.17s7.3,10,11.05,13.75,8.75,10.21,13.12,13.33,6.67,1.88,9.17-.21S340.13,222.72,338.18,220.6Z" style="fill: rgb(255, 255, 255); stroke: rgb(46, 53, 58); stroke-linecap: round; stroke-linejoin: round; transform-origin: 311.668px 193.084px;" id="elzlrqk41tmt" class="animable"></path>
                <path d="M293.27,165.36s-1.88,3.55-1,5" style="fill: none; stroke: rgb(46, 53, 58); stroke-linecap: round; stroke-linejoin: round; transform-origin: 292.653px 167.86px;" id="elnvqjjcipbof" class="animable"></path>
                <line x1="286.81" y1="162.24" x2="288.48" y2="165.36" style="fill: none; stroke: rgb(46, 53, 58); stroke-linecap: round; stroke-linejoin: round; transform-origin: 287.645px 163.8px;" id="elut0zlxspvr" class="animable"></line>
                <path d="M288.68,172.45a35.92,35.92,0,0,1-3.75-5.84c-.83-2.08-.2-6.66,1.05-5.83s.83,5.42.83,5.42l2.5,2.91" style="fill: rgb(255, 255, 255); stroke: rgb(46, 53, 58); stroke-linecap: round; stroke-linejoin: round; transform-origin: 286.932px 166.565px;" id="elir4j8sii2ch" class="animable"></path>
                <path d="M340.87,194.62s-6.39-2.33-5.23-10.47,8.14-4.07,8.14-4.07-7-9.31,7.27-11.34,24.73,10.76,28.22,25-18.62,15.7-15.42,26.47,15.71,23,13.67,37.81-22.39,23-31.7,15.12S332.73,253.08,338,242s8.14-24.14,9.59-30S340.87,194.62,340.87,194.62Z" style="fill: rgb(46, 53, 58); stroke: rgb(46, 53, 58); stroke-linecap: round; stroke-linejoin: round; transform-origin: 357.572px 222.361px;" id="elqarkoz78z5s" class="animable"></path>
                <path d="M363.75,205.5C355,202,350.5,187.75,350.5,179.75s11.25-4,11.25-4-11,2-5.5,12.75,15.25,14,20.25,10.75" style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 363.5px 190.125px;" id="eluh5xjcaqx2b" class="animable"></path>
                <path d="M362,213.25s-7.75,2.5-5.5,12.25S376,247.5,371,260s-13.75,17.5-24.25,13.75" style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 359.327px 244.109px;" id="eleazddalulwb" class="animable"></path>
                <path d="M358.25,215.25s-8.5,3.5-9.5,16,9.25,23.25,4.5,29.5-12.5,5.5-15,1.75" style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 348.25px 240.317px;" id="elwnky8xkz7vj" class="animable"></path>
                <path d="M338.84,208.29s.87,3.2-2,8.15-4.36,6.1-4.36,6.1l10.47-.87,6.69-12.22S339.42,210.33,338.84,208.29Z" style="fill: rgb(255, 255, 255); stroke: rgb(46, 53, 58); stroke-linecap: round; stroke-linejoin: round; transform-origin: 341.06px 215.415px;" id="elq0nh670k1h" class="animable"></path>
                <path d="M349.31,181.24s-10.18,9.31-12.22,17.45.58,13.38,4.37,13.38,11.63-3.2,11.63-3.2,2.33,2,4.65.88a4.14,4.14,0,0,0,2.33-3.49S344.07,190.55,349.31,181.24Z" style="fill: rgb(255, 255, 255); stroke: rgb(46, 53, 58); stroke-linecap: round; stroke-linejoin: round; transform-origin: 348.224px 196.655px;" id="eljn39y1r69p" class="animable"></path>
                <path d="M345,195.21c-.7.89-1.54,1.39-1.89,1.12s-.07-1.21.63-2.1,1.54-1.39,1.88-1.12S345.69,194.32,345,195.21Z" style="fill: rgb(46, 53, 58); transform-origin: 344.363px 194.72px;" id="elgkzfvur8nah" class="animable"></path>
                <path d="M349.84,200.28c-.69.9-1.54,1.4-1.89,1.13s-.06-1.21.63-2.1,1.54-1.4,1.89-1.13S350.53,199.39,349.84,200.28Z" style="fill: rgb(46, 53, 58); transform-origin: 349.21px 199.795px;" id="elv1z4048usnr" class="animable"></path>
                <path d="M344.54,197.11a18.93,18.93,0,0,0-3.41,1.6c-.91.68.68,1.59.68,1.59" style="fill: none; stroke: rgb(46, 53, 58); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 342.694px 198.705px;" id="el12ry7t5z4su" class="animable"></path>
                <path d="M339.08,202.57a3.49,3.49,0,0,0,3.19,2.73,5.83,5.83,0,0,0,4.09-.91" style="fill: none; stroke: rgb(46, 53, 58); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 342.72px 203.967px;" id="eloml98tztlm" class="animable"></path>
                <path d="M344.77,189.38a2.79,2.79,0,0,1,3.18,2.28" style="fill: none; stroke: rgb(46, 53, 58); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 346.36px 190.503px;" id="elvj770dtifm" class="animable"></path>
                <path d="M350,195.07s3.86,1.36,2.73,4.32" style="fill: none; stroke: rgb(46, 53, 58); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 351.469px 197.23px;" id="el03vrxrdilehc" class="animable"></path>
                <path d="M311.84,407.19s-5.38,3.59-7.18,4.48-9.41,2.24-9.64,4.26,3.81,3.14,8.3,3.14,9.86,0,12.55.45,4.49,1.34,5.61-1.57-.68-10.54-.68-10.54S316.1,409.21,311.84,407.19Z" style="fill: #90CAF9; stroke: rgb(46, 53, 58); stroke-linecap: round; stroke-linejoin: round; transform-origin: 308.429px 413.599px;" id="elwnvfew9qtsp" class="animable"></path>
                <path d="M313.85,327.38s-3.13,14.57-3.13,19.28,1.79,35.2,2.24,43.71a80.31,80.31,0,0,1-1.12,16.82s3.81,1.79,5.38,1.79,3.58-1.57,3.58-1.57,4.49-19.73,4.49-30.26.89-16.59,0-23.32-4-19.05-2.92-23.54S317.22,320.65,313.85,327.38Z" style="fill: rgb(46, 53, 58); stroke: rgb(46, 53, 58); stroke-linecap: round; stroke-linejoin: round; transform-origin: 318.203px 366.561px;" id="elecbt8pn7to" class="animable"></path>
                <path d="M313.82,263S310,288.86,310,308.05s8.15,42.18,10.18,45.38,19.78,35.19,23.85,41.88a90.79,90.79,0,0,1,7.12,15.94,21.94,21.94,0,0,0,4.36.87c1.46,0,3.49-1.74,3.49-1.74s-9.44-36.89-13.22-46.48S334.18,346.74,332.15,343s-2.91-18.33-2.91-18.33,11.92-18.9,14-29.08S339.71,274,337.38,270a78.64,78.64,0,0,1-4.07-8.43S321.1,268.79,313.82,263Z" style="fill: rgb(46, 53, 58); stroke: rgb(46, 53, 58); stroke-linecap: round; stroke-linejoin: round; transform-origin: 334.5px 336.845px;" id="elf0qlle1kioq" class="animable"></path>
                <path d="M335.93,252.5s7.27-22.39,9-27.63-.88-7.27-8.73-6.4-21.52,7-22.1,13.67,2,10.47,2,13.67S311.5,263,315,265.88s14.54,2,17.74-2S335.93,252.5,335.93,252.5Z" style="fill: #90CAF9; stroke: rgb(46, 53, 58); stroke-linecap: round; stroke-linejoin: round; transform-origin: 329.563px 242.924px;" id="el4nmrvasoz6f" class="animable"></path>
                <path d="M338.18,220.6A15.43,15.43,0,0,1,335.64,231c-3.49,5.52-11.34,3.49-10.76-2.62S332.86,217.2,338.18,220.6Z" style="fill: rgb(255, 255, 255); stroke: rgb(46, 53, 58); stroke-linecap: round; stroke-linejoin: round; transform-origin: 331.566px 226.864px;" id="el502cvzcq77" class="animable"></path>
                <path d="M333.22,229.26a6.44,6.44,0,0,0,5-8.66,3.71,3.71,0,0,0-2.83-2.42c-5-.87-26.76.87-32.29.29s-26.46-13.38-32-18.32-7.56-7.56-7.56-9.6-1.46-6.69-2.62-8.14-3.2-4.37-3.2-4.37-2,0-1.74,1.17a24.92,24.92,0,0,0,1.74,3.78s-5.82-3.49-7.27-5a1.78,1.78,0,0,0-2.62-.29l3.2,3.49s-.29,2.33,2,6.11a27,27,0,0,0,6.4,6.69s11.63,13.67,20.36,21.23,16.86,12.22,24.14,13.38C310.35,229.68,320.37,231.61,333.22,229.26Z" style="fill: rgb(255, 255, 255); stroke: rgb(46, 53, 58); stroke-linecap: round; stroke-linejoin: round; transform-origin: 293.237px 203.814px;" id="elwpd4640xfh" class="animable"></path>
                <path d="M351.19,411.25s-4.6,4.91-7.74,6.92-7.18,3.37-6.5,5.16,9,1.57,13,1.34,12.1-4,13.45-4.93-4.36-9.36-4.36-9.36S354.67,412.84,351.19,411.25Z" style="fill: #90CAF9; stroke: rgb(46, 53, 58); stroke-linecap: round; stroke-linejoin: round; transform-origin: 350.24px 417.601px;" id="elg67g673nx48" class="animable"></path>
                <path d="M350,424.67c4-.22,12.1-4,13.45-4.93.37-.25.19-1.09-.25-2.16a63.81,63.81,0,0,1-14.32,5.08c-6.56,1.4-10.28.74-11.95.21a1.26,1.26,0,0,0,.07.46C337.62,425.12,345.91,424.9,350,424.67Z" style="fill: rgb(46, 53, 58); stroke: rgb(46, 53, 58); stroke-linecap: round; stroke-linejoin: round; transform-origin: 350.289px 421.201px;" id="eldqucbke07lj" class="animable"></path>
                <path d="M321.48,418a6.37,6.37,0,0,0,.33-1.84c-1.78,1.44-3.07.76-5.94.94-3.59.23-4.93.23-12.33.23a22.92,22.92,0,0,1-8.5-1.41.14.14,0,0,1,0,.06c-.22,2,3.81,3.14,8.3,3.14s9.86,0,12.55.45S320.36,420.86,321.48,418Z" style="fill: rgb(46, 53, 58); stroke: rgb(46, 53, 58); stroke-linecap: round; stroke-linejoin: round; transform-origin: 308.421px 417.981px;" id="elp4dg9usaj38" class="animable"></path>
                <path d="M329.24,324.63s.83-13.84,2.36-16.58,5.17-6.39,7.6-8.52" style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 334.22px 312.08px;" id="eliwago0c4uu" class="animable"></path>
            </g>
            <defs>
                <filter id="active" height="200%">
                    <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2"></feMorphology>
                    <feFlood flood-color="#32DFEC" flood-opacity="1" result="PINK"></feFlood>
                    <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>
                    <feMerge>
                        <feMergeNode in="OUTLINE"></feMergeNode>
                        <feMergeNode in="SourceGraphic"></feMergeNode>
                    </feMerge>
                </filter>
                <filter id="hover" height="200%">
                    <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2"></feMorphology>
                    <feFlood flood-color="#ff0000" flood-opacity="0.5" result="PINK"></feFlood>
                    <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>
                    <feMerge>
                        <feMergeNode in="OUTLINE"></feMergeNode>
                        <feMergeNode in="SourceGraphic"></feMergeNode>
                    </feMerge>
                    <feColorMatrix type="matrix" values="0   0   0   0   0                0   1   0   0   0                0   0   0   0   0                0   0   0   1   0 "></feColorMatrix>
                </filter>
            </defs>
        </svg>
        <div>
            <a class="aaa" href="./appointment">Make An Appointment</a>
            <a class="aaa" href="./departments">Departments</a>
            <a class="aaa" href="./doctors">Doctors</a>

            <a class="aaa" href="./radiologyupload">Radiology Upload</a>

        </div>

    </div>

    <!-- End third-section -->



    <!-- Start Footer -->
    <div class="footer">
        <div class="container">
            <img src="images/logo3.png" alt="Logo" />
            <p>We Are Social</p>
            <div class="social-icons">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
                <i class="fas fa-home"></i>
                <i class="fab fa-linkedin"></i>
            </div>
            <p class="copyright">&copy; 2022 <span>We care hospital</span> All Right Reserved</p>
        </div>
    </div>
    <!-- End Footer -->
    <?php endif; ?>

</body>

</html>
<?php /**PATH C:\Users\CompuMisr\Desktop\Team 14\we care final\resources\views/ThankSignup.blade.php ENDPATH**/ ?>