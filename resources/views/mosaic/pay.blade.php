<!DOCTYPE html><html lang="en">
<!-- Mirrored from preview.cruip.com/mosaic/pay.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Mar 2022 08:17:56 GMT -->
<head>
    <meta charset="utf-8">
    <title>Mosaic HTML Demo - Pay</title>
<meta name="viewport" content="width=device-width,initial-scale=1"><link href="admin/css/cssof_index.css" rel="stylesheet"></head>

<body class="gl br hp gz">

    <script>
        if (localStorage.getItem('sidebar-expanded') == 'true') {
            document.querySelector('body').classList.add('sidebar-expanded');
        } else {
            document.querySelector('body').classList.remove('sidebar-expanded');
        }
    </script>

    <!-- Page wrapper -->
    <div class="flex sj lw">

        <!-- Content area -->
        <div class="td flex fu au lk l_">

            <!-- Site header -->
            <header class="bg-white cm border-slate-200">
                <div class="va jn teb">
                    <div class="flex items-center fh ou iq">

                        <!-- Logo -->
                        <a class="block" href="index.html">
                            <svg width="32" height="32" viewBox="0 0 32 32">
                                <defs>
                                    <linearGradient x1="28.538%" y1="20.229%" x2="100%" y2="108.156%" id="logo-a">
                                        <stop stop-color="#A5B4FC" stop-opacity="0" offset="0%"></stop>
                                        <stop stop-color="#A5B4FC" offset="100%"></stop>
                                    </linearGradient>
                                    <linearGradient x1="88.638%" y1="29.267%" x2="22.42%" y2="100%" id="logo-b">
                                        <stop stop-color="#38BDF8" stop-opacity="0" offset="0%"></stop>
                                        <stop stop-color="#38BDF8" offset="100%"></stop>
                                    </linearGradient>
                                </defs>
                                <rect fill="#6366F1" width="32" height="32" rx="16"></rect>
                                <path d="M18.277.16C26.035 1.267 32 7.938 32 16c0 8.837-7.163 16-16 16a15.937 15.937 0 01-10.426-3.863L18.277.161z" fill="#4F46E5"></path>
                                <path d="M7.404 2.503l18.339 26.19A15.93 15.93 0 0116 32C7.163 32 0 24.837 0 16 0 10.327 2.952 5.344 7.404 2.503z" fill="url(#logo-a)"></path>
                                <path d="M2.223 24.14L29.777 7.86A15.926 15.926 0 0132 16c0 8.837-7.163 16-16 16-5.864 0-10.991-3.154-13.777-7.86z" fill="url(#logo-b)"></path>
                            </svg>
                        </a>

                        <a class="block rounded-full hp text-slate-500 hover--text-slate-600" href="cart.html">
                            <span class="tc">Back</span>
                            <svg width="32" height="32" viewBox="0 0 32 32">
                                <path class="dd" d="M15.95 14.536l4.242-4.243a1 1 0 111.415 1.414l-4.243 4.243 4.243 4.242a1 1 0 11-1.415 1.415l-4.242-4.243-4.243 4.243a1 1 0 01-1.414-1.415l4.243-4.242-4.243-4.243a1 1 0 011.414-1.414l4.243 4.243z"></path>
                            </svg>
                        </a>

                    </div>
                </div>
            </header>

            
            <main>

                <div class="td mk">
                    <div class="tp tm pr lw" aria-hidden="true">
                        <img class="dj sz ox bx by bl" src="images/pay-bg.jpg" width="460" height="180" alt="Pay background">
                    </div>
                    <div class="td va jn teb ai ri">
                        <img class="ca bh" src="images/pay-bg.jpg" width="460" height="180" alt="Pay background">
                    </div>
                </div>

                <div class="td va jn teb mx ai ri" x-data="{ card: true }">
                    <div class="bg-white mn ms cf bh">

                        <!-- Card header -->
                        <div class="gu rb">
                            <div class="in">
                                <img class="iz inline-flex rounded-full" src="images/user-64-13.jpg" width="64" height="64" alt="User">
                            </div>
                            <h1 class="gh gk text-slate-800 gg in">Front-End Learning 🔥</h1>
                            <div class="text-sm">
                                Learn how to create real web apps using HTML &amp; CSS. Code templates included.
                            </div>
                        </div>

                        <!-- Toggle -->
                        <div class="flex justify-center rb">
                            <div class="td flex ox vo hw rounded">
                                <span class="tp tm m-1 pointer-events-none" aria-hidden="true">
                                    <span class="tp tm ul bg-white rounded border border-slate-200 bd a_ b_ we wi" :class="card ? 'translate-x-0' : 'aw'"></span>
                                </span>
                                <button class="td au text-sm gm vo we wi" @click.prevent="card = true">Pay With Card</button>
                                <button class="td au text-sm gm vo we wi" @click.prevent="card = false">Pay With PayPal</button>
                            </div>
                        </div>

                        <!-- Card form -->
                        <div x-show="card">
                            <div class="fj">
                                <!-- Card Number -->
                                <div>
                                    <label class="block text-sm gm rx" for="card-nr">Card Number <span class="yi">*</span></label>
                                    <input id="card-nr" class="tn ox" type="text" placeholder="1234 1234 1234 1234">
                                </div>
                                <!-- Expiry and CVC -->
                                <div class="flex fq">
                                    <div class="au">
                                        <label class="block text-sm gm rx" for="card-expiry">Expiry Date <span class="yi">*</span></label>
                                        <input id="card-expiry" class="tn ox" type="text" placeholder="MM/YY">
                                    </div>
                                    <div class="au">
                                        <label class="block text-sm gm rx" for="card-cvc">CVC <span class="yi">*</span></label>
                                        <input id="card-cvc" class="tn ox" type="text" placeholder="CVC">
                                    </div>
                                </div>
                                <!-- Name on Card -->
                                <div>
                                    <label class="block text-sm gm rx" for="card-name">Name on Card <span class="yi">*</span></label>
                                    <input id="card-name" class="tn ox" type="text" placeholder="John Doe">
                                </div>
                                <!-- Email -->
                                <div>
                                    <label class="block text-sm gm rx" for="card-email">Email <span class="yi">*</span></label>
                                    <input id="card-email" class="tn ox" type="email" placeholder="john@company.com">
                                </div>
                            </div>
                            <!-- Form footer -->
                            <div class="ir">
                                <div class="rw">
                                    <button class="btn ox hd wq ye" href="#0">Pay $253.00</button>
                                </div>
                                <div class="gp text-slate-500 gw gu">You'll be charged $253, including $48 for VAT in Italy</div>
                            </div>
                        </div>

                        <!-- PayPal form -->
                        <div x-show="!card" x-cloak="">
                            <div>
                                <div class="rw">
                                    <button class="btn ox hd wq ye" href="#0">Pay with PayPal - $253.00</button>
                                </div>
                                <div class="gp text-slate-500 gw gu">You'll be charged $253, including $48 for VAT in Italy</div>
                            </div>
                        </div>

                    </div>
                </div>
            </main>

        </div>

    </div>

<script src="admin/js/jsof_index.js"></script>

<script async src='https://www.googletagmanager.com/gtag/js?id=UA-125021779-1'></script><script>window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('config', 'UA-125021779-1', { 'anonymize_ip': true });</script><script>console.log("%cImportant!", "color: blue; font-size: x-large");console.log("%cThe page you are viewing is for demo purposes only. CSS and HTML have been minified and class names have been shortened to improve the page load time. Download our templates from https://cruip.com/ 😉", "font-size: large");</script><script>const pagesList = [{"name":"Dashboard","url":"https://preview.cruip.com/mosaic/index.html","active":false},{"name":"Analytics","url":"https://preview.cruip.com/mosaic/analytics.html","active":false},{"name":"Fintech","url":"https://preview.cruip.com/mosaic/fintech.html","active":false},{"name":"Customers","url":"https://preview.cruip.com/mosaic/customers.html","active":false},{"name":"Orders","url":"https://preview.cruip.com/mosaic/orders.html","active":false},{"name":"Invoices","url":"https://preview.cruip.com/mosaic/invoices.html","active":false},{"name":"Shop","url":"https://preview.cruip.com/mosaic/shop.html","active":false},{"name":"Shop 2","url":"https://preview.cruip.com/mosaic/shop-2.html","active":false},{"name":"Single Product","url":"https://preview.cruip.com/mosaic/product.html","active":false},{"name":"Cart","url":"https://preview.cruip.com/mosaic/cart.html","active":false},{"name":"Cart 2","url":"https://preview.cruip.com/mosaic/cart-2.html","active":false},{"name":"Cart 3","url":"https://preview.cruip.com/mosaic/cart-3.html","active":false},{"name":"Pay","url":"https://preview.cruip.com/mosaic/pay.html","active":true},{"name":"Campaigns","url":"https://preview.cruip.com/mosaic/campaigns.html","active":false},{"name":"Users Tabs","url":"https://preview.cruip.com/mosaic/users-tabs.html","active":false},{"name":"Users Tiles","url":"https://preview.cruip.com/mosaic/users-tiles.html","active":false},{"name":"Profile","url":"https://preview.cruip.com/mosaic/profile.html","active":false},{"name":"Feed","url":"https://preview.cruip.com/mosaic/feed.html","active":false},{"name":"Forum","url":"https://preview.cruip.com/mosaic/forum.html","active":false},{"name":"Forum Post","url":"https://preview.cruip.com/mosaic/forum-post.html","active":false},{"name":"Meetups","url":"https://preview.cruip.com/mosaic/meetups.html","active":false},{"name":"Meetups Post","url":"https://preview.cruip.com/mosaic/meetups-post.html","active":false},{"name":"Cards","url":"https://preview.cruip.com/mosaic/credit-cards.html","active":false},{"name":"Transactions","url":"https://preview.cruip.com/mosaic/transactions.html","active":false},{"name":"Transaction Details","url":"https://preview.cruip.com/mosaic/transaction-details.html","active":false},{"name":"Messages","url":"https://preview.cruip.com/mosaic/messages.html","active":false},{"name":"Tasks","url":"https://preview.cruip.com/mosaic/tasks.html","active":false},{"name":"Inbox","url":"https://preview.cruip.com/mosaic/inbox.html","active":false},{"name":"Calendar","url":"https://preview.cruip.com/mosaic/calendar.html","active":false},{"name":"Applications","url":"https://preview.cruip.com/mosaic/applications.html","active":false},{"name":"My Account","url":"https://preview.cruip.com/mosaic/settings.html","active":false},{"name":"My Notifications","url":"https://preview.cruip.com/mosaic/notifications.html","active":false},{"name":"Connected Apps","url":"https://preview.cruip.com/mosaic/connected-apps.html","active":false},{"name":"Plans","url":"https://preview.cruip.com/mosaic/plans.html","active":false},{"name":"Billing & Invoices","url":"https://preview.cruip.com/mosaic/billing.html","active":false},{"name":"Give Feedback","url":"https://preview.cruip.com/mosaic/feedback.html","active":false},{"name":"Changelog","url":"https://preview.cruip.com/mosaic/changelog.html","active":false},{"name":"Roadmap","url":"https://preview.cruip.com/mosaic/roadmap.html","active":false},{"name":"FAQs","url":"https://preview.cruip.com/mosaic/faqs.html","active":false},{"name":"Empty State","url":"https://preview.cruip.com/mosaic/empty-state.html","active":false},{"name":"Page Not Found","url":"https://preview.cruip.com/mosaic/404.html","active":false},{"name":"Sign in","url":"https://preview.cruip.com/mosaic/signin.html","active":false},{"name":"Sign up","url":"https://preview.cruip.com/mosaic/signup.html","active":false},{"name":"Reset password","url":"https://preview.cruip.com/mosaic/reset-password.html","active":false},{"name":"Onboarding 1","url":"https://preview.cruip.com/mosaic/onboarding-01.html","active":false},{"name":"Onboarding 2","url":"https://preview.cruip.com/mosaic/onboarding-02.html","active":false},{"name":"Onboarding 3","url":"https://preview.cruip.com/mosaic/onboarding-03.html","active":false},{"name":"Onboarding 4","url":"https://preview.cruip.com/mosaic/onboarding-04.html","active":false},{"name":"Button","url":"https://preview.cruip.com/mosaic/component-button.html","active":false},{"name":"Input Form","url":"https://preview.cruip.com/mosaic/component-form.html","active":false},{"name":"Dropdown","url":"https://preview.cruip.com/mosaic/component-dropdown.html","active":false},{"name":"Alert & Banner","url":"https://preview.cruip.com/mosaic/component-alert.html","active":false},{"name":"Modal","url":"https://preview.cruip.com/mosaic/component-modal.html","active":false},{"name":"Pagination","url":"https://preview.cruip.com/mosaic/component-pagination.html","active":false},{"name":"Tabs","url":"https://preview.cruip.com/mosaic/component-tabs.html","active":false},{"name":"Breadcrumb","url":"https://preview.cruip.com/mosaic/component-breadcrumb.html","active":false},{"name":"Badge","url":"https://preview.cruip.com/mosaic/component-badge.html","active":false},{"name":"Avatar","url":"https://preview.cruip.com/mosaic/component-avatar.html","active":false},{"name":"Tooltip","url":"https://preview.cruip.com/mosaic/component-tooltip.html","active":false},{"name":"Accordion","url":"https://preview.cruip.com/mosaic/component-accordion.html","active":false},{"name":"Icons","url":"https://preview.cruip.com/mosaic/component-icons.html","active":false}];if(window != top){window.parent.postMessage(pagesList, "https://cruip.com/")};</script></body>
<!-- Mirrored from preview.cruip.com/mosaic/pay.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Mar 2022 08:17:57 GMT -->
</html>