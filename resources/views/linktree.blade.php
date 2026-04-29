<!doctype html>
<html lang="en">

<head>
    <title>SOCALITY</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function showMenu() {
            Swal.fire({
                title: 'Menu',
                text: 'Menu clicked',
                icon: 'success',
                confirmButtonText: 'OK',
            });
            console.log('Menu clicked');
        }

        function changeText() {
            const element = document.getElementById('intro');
            element.innerHTML = 'Sistem Informasi ITS';
        }

        function changeStyle() {
            const element = document.getElementById('button-1');
            element.style.backgroundColor = 'red';
        }
    </script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #363c3e;
            min-height: 100vh;
        }

        .main-card {
            background-color: black;
            min-height: 100vh;
            max-width: 580px;
            margin: 0 auto;
            position: relative;
            box-shadow: 0 0 6.25rem rgba(0, 0, 0, 0.2);
        }

        @media (min-width: 768px) {
            .main-card {
                margin: 2.5rem auto 0 auto;
                border-radius: 1.5rem 1.5rem 0 0;
                min-height: calc(100vh - 2.5rem);
            }
        }

        .link-card {
            background-color: #212121;
            border: none;
            transition: background-color 0.2s;
            text-decoration: none !important;
            border-radius: 0.75rem !important;
            padding: 1rem !important;
            display: flex;
            align-items: center;
            min-height: 5rem;
        }

        .link-card:hover {
            background-color: #2a2a2a;
        }

        .link-thumbnail {
            width: 3rem;
            height: 3rem;
            object-fit: cover;
            border-radius: 0.25rem;
        }

        .menu-icon {
            opacity: 0.5;
            margin-left: 1rem;
        }

        .top-bar-custom {
            background: rgba(0, 0, 0, 0.6);
            backdrop-filter: blur(10px);
            z-index: 1030;
        }

        .profile-img {
            width: 6rem;
            height: 6rem;
            border: 0.125rem solid rgba(255, 255, 255, 0.1);
        }

        .btn-join {
            background-color: #fff;
            color: #000 !important;
            font-weight: 700;
            border-radius: 6rem;
            padding: 0.875rem 2rem;
            transition: background-color 0.2s;
            text-decoration: none !important;
            display: block;
            max-width: 20rem;
            margin: 0 auto;
        }

        .btn-join:hover {
            background-color: #e6e6e6;
        }

        .footer-link {
            color: #fff;
            text-decoration: none !important;
            font-size: 0.8125rem;
            opacity: 0.9;
            margin: 0 0.5rem;
        }

        .header-btn {
            width: 2.5rem;
            height: 2.5rem;
            border-radius: 50%;
            background-color: #d1d1d1;
            display: flex;
            align-items: center;
            justify-content: center;
            border: none;
            transition: opacity 0.2s;
            text-decoration: none !important;
        }

        .header-btn:hover {
            opacity: 0.8;
        }

        .header-btn img {
            display: block;
            width: 1.125rem;
            height: 1.125rem;
        }

        .profile-title {
            letter-spacing: 0.0625rem;
            font-weight: 800;
            text-transform: uppercase;
        }

        .profile-bio {
            line-height: 1.6;
            font-size: 0.85rem;
        }

        .link-spacer {
            width: 3rem;
        }

        .spotify-subtitle {
            font-size: 0.6875rem;
        }

        .footer-dot {
            font-size: 0.5rem;
        }
    </style>
</head>

<body class="text-white">
    <div class="main-card overflow-hidden">
        <nav class="top-bar-custom sticky-top p-4 d-flex justify-content-between align-items-center">
            <a href="#" class="header-btn">
                <img
                    src="https://assets.streamlinehq.com/image/private/w_300,h_300,ar_1/f_auto/v1/icons/logos/linktree-hrggdeqdzll06zjl9h6j.png/linktree-bafynmeua3noot52xbu71.png?_a=DATAiZAAZAA0" />
            </a>
            <div class="d-flex align-items-center">
                <a href="#" class="header-btn mr-2">
                    <img src="https://api.iconify.design/material-symbols:notifications-outline-rounded.svg?color=black"
                        alt="" />
                </a>
                <a href="#" class="header-btn">
                    <img src="https://api.iconify.design/material-symbols:ios-share-rounded.svg?color=black"
                        alt="" />
                </a>
            </div>
        </nav>

        <div class="px-3 px-md-4 py-4">
            <!-- Profile Header -->
            <div class="text-center mb-5 mt-2">
                <img src="https://ugc.production.linktr.ee/yxkxIxKbS7OV16Wu8sTt_VMeFp82g1GJJDm0K?io=true&size=avatar-v3_0"
                    alt="SOCALITY" class="profile-img rounded-circle mb-4 border-0" />
                <h1 id="intro" class="h6 font-weight-bold mb-2 text-uppercase profile-title">
                    SOCALITY
                </h1>
                <p class="small font-weight-normal text-white px-4 profile-bio">
                    Your Creative Community. #Socality #ThisIsMyCommunity
                </p>
                <div>
                    <button onclick="showMenu()" class="btn btn-dark">Show Menu</button>
                    <button onclick="changeText()" class="btn btn-dark">
                        Change Text
                    </button>
                    <button onclick="changeStyle()" class="btn btn-dark">
                        Change Style
                    </button>
                </div>
            </div>

            <!-- Link Items -->
            <div class="list-unstyled">
                <a id="button-1"
                    href="https://www.canoncreatorlab.ca/events/vancouver-creative-experience-at-grouse-mountain"
                    target="_blank" class="link-card mb-3">
                    <img src="https://ugc.production.linktr.ee/88211e6b-ab01-4168-8b8a-5b7f1c6757c9_4x5-IG-Post-Slide-01--English-v2-.png?io=true&size=thumbnail-stack_v1_0"
                        class="link-thumbnail mr-3" alt="" />
                    <span class="small font-weight-bold flex-grow-1 text-center text-white px-2">03/21 - Vancouver
                        Creative<br />Experience at Grouse
                        Mountain</span>
                    <div class="menu-icon">
                        <img src="https://api.iconify.design/material-symbols-light:more-vert.svg?color=white"
                            width="18" height="18" alt="" />
                    </div>
                </a>

                <a href="https://www.canoncreatorlab.ca/events/toronto-creative-experience-at-cjs-skatepark"
                    target="_blank" class="link-card mb-3">
                    <div class="link-spacer mr-3"></div>
                    <span class="small font-weight-bold flex-grow-1 text-center text-white px-2">04/10 - Toronto
                        Creative Experience at CJs Skatepark</span>
                    <div class="menu-icon">
                        <img src="https://api.iconify.design/material-symbols-light:more-vert.svg?color=white"
                            width="18" height="18" alt="" />
                    </div>
                </a>

                <a href="https://www.thegatheringfestival.com/tickets" target="_blank" class="link-card mb-3">
                    <img src="https://ugc.production.linktr.ee/92013704-d207-4eee-a01f-f97c9453cf8d_67d1f1e24f49b439e7e8ecfb-TGS-2025-HubspotPreview-1200x630-1.png?io=true&size=thumbnail-stack_v1_0"
                        class="link-thumbnail mr-3" alt="" />
                    <span class="small font-weight-bold flex-grow-1 text-center text-white px-2">Buy tickets for The
                        Gathering 2026</span>
                    <div class="menu-icon">
                        <img src="https://api.iconify.design/material-symbols-light:more-vert.svg?color=white"
                            width="18" height="18" alt="" />
                    </div>
                </a>

                <a href="https://socality.substack.com/" target="_blank" class="link-card mb-3">
                    <img src="https://ugc.production.linktr.ee/e267c285-40fb-4c24-868e-f80b47f85160_subscribe-card.jpg-v--1713993154-version-9.jpeg?io=true&size=thumbnail-stack_v1_0"
                        class="link-thumbnail mr-3" alt="" />
                    <span class="small font-weight-bold flex-grow-1 text-center text-white px-2">The Socality Newsletter
                        | Substack</span>
                    <div class="menu-icon">
                        <img src="https://api.iconify.design/material-symbols-light:more-vert.svg?color=white"
                            width="18" height="18" alt="" />
                    </div>
                </a>

                <a href="https://youtu.be/sjHSiHTl6ms?si=GtkWZRYhdVMCxP1I" target="_blank" class="link-card mb-3">
                    <img src="https://ugc.production.linktr.ee/8e4b2837-33f2-4398-aebc-420480e56438_maxresdefault.jpeg?io=true&size=thumbnail-stack_v1_0"
                        class="link-thumbnail mr-3" alt="" />
                    <span class="small font-weight-bold flex-grow-1 text-center text-white px-2">Watch Ep. 0037 - The
                        Pricing Puzzle<br />with Joey and Christy
                        Speers</span>
                    <div class="menu-icon">
                        <img src="https://api.iconify.design/material-symbols-light:more-vert.svg?color=white"
                            width="18" height="18" alt="" />
                    </div>
                </a>

                <a href="https://open.spotify.com/episode/4ar2n9WJbRnBGepkRK1vGW?si=a3d26932abf04e90" target="_blank"
                    class="link-card mb-3">
                    <img src="https://ugc.production.linktr.ee/48974042-2aca-4a15-83db-c33b9677a1aa_ab6765630000ba8a96b5ccebbcc518f36fcc771c.jpeg?io=true&size=thumbnail-stack_v1_0"
                        class="link-thumbnail mr-3" alt="" />
                    <div class="flex-grow-1 text-center px-2">
                        <div class="small font-weight-bold text-white">
                            Listen to The Socality Show
                        </div>
                        <div class="d-flex align-items-center justify-content-center mt-1">
                            <img src="https://api.iconify.design/material-symbols:mic-rounded.svg?color=white"
                                width="12" height="12" class="mr-1 opacity-50" alt="" />
                            <small class="text-white-50 spotify-subtitle">Podcast • Socality • Mar 11, 2025</small>
                        </div>
                    </div>
                    <div class="menu-icon">
                        <img src="https://api.iconify.design/material-symbols-light:more-vert.svg?color=white"
                            width="18" height="18" alt="" />
                    </div>
                </a>

                <a href="https://lu.ma/socality" target="_blank" class="link-card mb-3">
                    <img src="https://ugc.production.linktr.ee/316382f1-96d7-402a-a4b8-7a52f149f633_7e11a048-b31d-414f-831f-d7b3dd00738e.jpeg?io=true&size=thumbnail-stack_v1_0"
                        class="link-thumbnail mr-3" alt="" />
                    <span class="small font-weight-bold flex-grow-1 text-center text-white px-2">Socality Community
                        Calendar - Events Calendar</span>
                    <div class="menu-icon">
                        <img src="https://api.iconify.design/material-symbols-light:more-vert.svg?color=white"
                            width="18" height="18" alt="" />
                    </div>
                </a>

                <a href="https://www.canoncreatorlab.ca/" target="_blank" class="link-card mb-3">
                    <div class="link-spacer mr-3"></div>
                    <span class="small font-weight-bold flex-grow-1 text-center text-white px-2">Canon Creator Lab -
                        sign up to access past online workshops,
                        upcoming events and more!</span>
                    <div class="menu-icon">
                        <img src="https://api.iconify.design/material-symbols-light:more-vert.svg?color=white"
                            width="18" height="18" alt="" />
                    </div>
                </a>

                <a href="http://www.socality.org" target="_blank" class="link-card mb-3">
                    <div class="link-spacer mr-3"></div>
                    <span class="small font-weight-bold flex-grow-1 text-center text-white px-2">Learn more about the
                        community at Socality.org</span>
                    <div class="menu-icon">
                        <img src="https://api.iconify.design/material-symbols-light:more-vert.svg?color=white"
                            width="18" height="18" alt="" />
                    </div>
                </a>
            </div>

            <!-- Footer -->
            <div class="text-center mt-5 pb-5">
                <a href="https://linktr.ee/?utm_source=linktree" class="btn-join mb-5">
                    Join socality on Linktree
                </a>

                <div class="d-flex justify-content-center align-items-center mb-4">
                    <a href="#" class="footer-link">Cookie Preferences</a>
                    <span class="text-white opacity-50 footer-dot">•</span>
                    <a href="#" class="footer-link">Report</a>
                    <span class="text-white opacity-50 footer-dot">•</span>
                    <a href="#" class="footer-link">Privacy</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
