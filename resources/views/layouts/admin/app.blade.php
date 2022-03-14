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
       <!--  <script>
            const pagesList = [
                { name: "Dashboard", url: "https://preview.cruip.com/mosaic/index.html", active: true },
                { name: "Analytics", url: "https://preview.cruip.com/mosaic/analytics.html", active: false },
                { name: "Fintech", url: "https://preview.cruip.com/mosaic/fintech.html", active: false },
                { name: "Customers", url: "https://preview.cruip.com/mosaic/customers.html", active: false },
                { name: "Orders", url: "https://preview.cruip.com/mosaic/orders.html", active: false },
                { name: "Invoices", url: "https://preview.cruip.com/mosaic/invoices.html", active: false },
                { name: "Shop", url: "https://preview.cruip.com/mosaic/shop.html", active: false },
                { name: "Shop 2", url: "https://preview.cruip.com/mosaic/shop-2.html", active: false },
                { name: "Single Product", url: "https://preview.cruip.com/mosaic/product.html", active: false },
                { name: "Cart", url: "https://preview.cruip.com/mosaic/cart.html", active: false },
                { name: "Cart 2", url: "https://preview.cruip.com/mosaic/cart-2.html", active: false },
                { name: "Cart 3", url: "https://preview.cruip.com/mosaic/cart-3.html", active: false },
                { name: "Pay", url: "https://preview.cruip.com/mosaic/pay.html", active: false },
                { name: "Campaigns", url: "https://preview.cruip.com/mosaic/campaigns.html", active: false },
                { name: "Users Tabs", url: "https://preview.cruip.com/mosaic/users-tabs.html", active: false },
                { name: "Users Tiles", url: "https://preview.cruip.com/mosaic/users-tiles.html", active: false },
                { name: "Profile", url: "https://preview.cruip.com/mosaic/profile.html", active: false },
                { name: "Feed", url: "https://preview.cruip.com/mosaic/feed.html", active: false },
                { name: "Forum", url: "https://preview.cruip.com/mosaic/forum.html", active: false },
                { name: "Forum Post", url: "https://preview.cruip.com/mosaic/forum-post.html", active: false },
                { name: "Meetups", url: "https://preview.cruip.com/mosaic/meetups.html", active: false },
                { name: "Meetups Post", url: "https://preview.cruip.com/mosaic/meetups-post.html", active: false },
                { name: "Cards", url: "https://preview.cruip.com/mosaic/credit-cards.html", active: false },
                { name: "Transactions", url: "https://preview.cruip.com/mosaic/transactions.html", active: false },
                { name: "Transaction Details", url: "https://preview.cruip.com/mosaic/transaction-details.html", active: false },
                { name: "Messages", url: "https://preview.cruip.com/mosaic/messages.html", active: false },
                { name: "Tasks", url: "https://preview.cruip.com/mosaic/tasks.html", active: false },
                { name: "Inbox", url: "https://preview.cruip.com/mosaic/inbox.html", active: false },
                { name: "Calendar", url: "https://preview.cruip.com/mosaic/calendar.html", active: false },
                { name: "Applications", url: "https://preview.cruip.com/mosaic/applications.html", active: false },
                { name: "My Account", url: "https://preview.cruip.com/mosaic/settings.html", active: false },
                { name: "My Notifications", url: "https://preview.cruip.com/mosaic/notifications.html", active: false },
                { name: "Connected Apps", url: "https://preview.cruip.com/mosaic/connected-apps.html", active: false },
                { name: "Plans", url: "https://preview.cruip.com/mosaic/plans.html", active: false },
                { name: "Billing & Invoices", url: "https://preview.cruip.com/mosaic/billing.html", active: false },
                { name: "Give Feedback", url: "https://preview.cruip.com/mosaic/feedback.html", active: false },
                { name: "Changelog", url: "https://preview.cruip.com/mosaic/changelog.html", active: false },
                { name: "Roadmap", url: "https://preview.cruip.com/mosaic/roadmap.html", active: false },
                { name: "FAQs", url: "https://preview.cruip.com/mosaic/faqs.html", active: false },
                { name: "Empty State", url: "https://preview.cruip.com/mosaic/empty-state.html", active: false },
                { name: "Page Not Found", url: "https://preview.cruip.com/mosaic/404.html", active: false },
                { name: "Sign in", url: "https://preview.cruip.com/mosaic/signin.html", active: false },
                { name: "Sign up", url: "https://preview.cruip.com/mosaic/signup.html", active: false },
                { name: "Reset password", url: "https://preview.cruip.com/mosaic/reset-password.html", active: false },
                { name: "Onboarding 1", url: "https://preview.cruip.com/mosaic/onboarding-01.html", active: false },
                { name: "Onboarding 2", url: "https://preview.cruip.com/mosaic/onboarding-02.html", active: false },
                { name: "Onboarding 3", url: "https://preview.cruip.com/mosaic/onboarding-03.html", active: false },
                { name: "Onboarding 4", url: "https://preview.cruip.com/mosaic/onboarding-04.html", active: false },
                { name: "Button", url: "https://preview.cruip.com/mosaic/component-button.html", active: false },
                { name: "Input Form", url: "https://preview.cruip.com/mosaic/component-form.html", active: false },
                { name: "Dropdown", url: "https://preview.cruip.com/mosaic/component-dropdown.html", active: false },
                { name: "Alert & Banner", url: "https://preview.cruip.com/mosaic/component-alert.html", active: false },
                { name: "Modal", url: "https://preview.cruip.com/mosaic/component-modal.html", active: false },
                { name: "Pagination", url: "https://preview.cruip.com/mosaic/component-pagination.html", active: false },
                { name: "Tabs", url: "https://preview.cruip.com/mosaic/component-tabs.html", active: false },
                { name: "Breadcrumb", url: "https://preview.cruip.com/mosaic/component-breadcrumb.html", active: false },
                { name: "Badge", url: "https://preview.cruip.com/mosaic/component-badge.html", active: false },
                { name: "Avatar", url: "https://preview.cruip.com/mosaic/component-avatar.html", active: false },
                { name: "Tooltip", url: "https://preview.cruip.com/mosaic/component-tooltip.html", active: false },
                { name: "Accordion", url: "https://preview.cruip.com/mosaic/component-accordion.html", active: false },
                { name: "Icons", url: "https://preview.cruip.com/mosaic/component-icons.html", active: false },
            ];
            if (window != top) {
                window.parent.postMessage(pagesList, "https://cruip.com");
            }
        </script> -->
    </body>
</html>
