<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Grid - Landing Page</title>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet" />

    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        * {
            font-family: "Roboto", sans-serif;
            font-optical-sizing: auto;
            font-style: normal;
            font-variation-settings: "wdth" 100;
        }

        html {
            background-color: #fbfbfd;
        }

        h2 {
            font-size: 1.1rem;
            font-weight: bold;
            margin: 0.8rem 0;
        }

        .item-icon {
            width: 2.5rem;
            margin-bottom: 8px;
        }

        .text-periwinkle {
            color: #97a0c7;
        }

        .font-weight-semibold {
            font-weight: 500;
        }
    </style>
</head>

<body>
    <div class="container vh-100">
        <div class="row vh-100">
            <!-- Left section -->
            <div class="col-12 col-md-6 align-self-center pr-md-4 mb-4 mb-md-0">
                <!-- Title -->
                <div class="row mb-5">
                    <h1 class="mb-4 font-weight-bold">
                        Design & Build Your Own Landing Pages
                    </h1>
                    <p class="text-periwinkle font-weight-semibold">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                        commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                        penatibus et magnis dis parturient montes, nascetur ridiculus
                    </p>
                    <p class="text-periwinkle font-weight-semibold">
                        mus. Donec quam felis, ultricies nec, pellentesque eu, pretium
                        quis, sem. Nulla consequat massa quis enim.
                    </p>
                </div>

                <!-- Items row 1 -->
                <div class="row">
                    <div class="col-12 col-md-6 px-0 mb-3 mb-md-0 pr-md-3">
                        <img class="item-icon" src="{{ asset('assets/icon.png') }}" alt="Paper icon" />
                        <h2>Title Goes Here</h2>
                        <p class="small text-secondary">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                            commodo ligula eget dolor.
                        </p>
                    </div>
                    <div class="col-12 col-md-6 px-0 pl-md-3">
                        <img class="item-icon" src="{{ asset('assets/icon.png') }}" alt="Paper icon" />
                        <h2>Title Goes Here</h2>
                        <p class="small text-secondary">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                            commodo ligula eget dolor.
                        </p>
                    </div>
                </div>

                <!-- Items row 2 -->
                <div class="row">
                    <div class="col-12 col-md-6 px-0 mb-3 mb-md-0 pr-md-3">
                        <img class="item-icon" src="{{ asset('assets/icon.png') }}" alt="Paper icon" />
                        <h2>Title Goes Here</h2>
                        <p class="small text-secondary">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                            commodo ligula eget dolor.
                        </p>
                    </div>
                    <div class="col-12 col-md-6 px-0 pl-md-3">
                        <img class="item-icon" src="{{ asset('assets/icon.png') }}" alt="Paper icon" />
                        <h2>Title Goes Here</h2>
                        <p class="small text-secondary">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                            commodo ligula eget dolor.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Right Section -->
            <div class="col-12 col-md-6 align-self-end pl-md-4">
                <img class="img-fluid align-self-end float-right" src="{{ asset('assets/Vert.png') }}" alt="" />
            </div>
        </div>
    </div>
</body>

</html>
