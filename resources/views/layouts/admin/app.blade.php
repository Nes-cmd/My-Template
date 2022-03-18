<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Mosaic HTML Demo - Home</title>
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <link href="css/app.css" rel="stylesheet" />
        <!-- <link href="admin/css/cssof_index.css" rel="stylesheet" /> -->
    </head>

    <body
        class="gl br hp gz"
        :class="{ 'sidebar-expanded': sidebarExpanded }"
        x-data="{ page: 'dashboard-main', sidebarOpen: false, sidebarExpanded: localStorage.getItem('sidebar-expanded') == 'true' }"
        x-init="$watch('sidebarExpanded', value => localStorage.setItem('sidebar-expanded', value))"
    >
        <script>
            if (localStorage.getItem("sidebar-expanded") == "true") {
                document.querySelector("body").classList.add("sidebar-expanded");
            } else {
                document.querySelector("body").classList.remove("sidebar-expanded");
            }
        </script>

        <!-- Page wrapper -->
        <div class="flex sj lw">
            <!-- Sidebar -->
            @include('layouts.admin.sidebar')
            <!-- Content area -->
            <div class="td flex fu au lk l_">
                <!-- Site header -->
                @include('layouts.admin.navbar')

                <main>
                    @yield('contents')
                </main>
            </div>
        </div>

        <script src="admin/js/jsof_index.js"></script>

        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-125021779-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag("js", new Date());
            gtag("config", "UA-125021779-1", { anonymize_ip: true });
        </script>
        <script>
            console.log("%cImportant!", "color: blue; font-size: x-large");
            console.log(
                "%cThe page you are viewing is for demo purposes only. CSS and HTML have been minified and class names have been shortened to improve the page load time. Download our templates from https://cruip.com/ 😉",
                "font-size: large"
            );
        </script>
    </body>
</html>
