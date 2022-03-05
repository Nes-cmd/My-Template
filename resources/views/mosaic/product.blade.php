<!DOCTYPE html><html lang="en">
<!-- Mirrored from preview.cruip.com/mosaic/product.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Mar 2022 08:17:53 GMT -->
<head>
    <meta charset="utf-8">
    <title>Mosaic HTML Demo - Single Product</title>
<meta name="viewport" content="width=device-width,initial-scale=1"><link href="admin/css/cssof_index.css" rel="stylesheet"></head>

<body class="gl br hp gz" :class="{ 'sidebar-expanded': sidebarExpanded }" x-data="{ page: 'ecommerce-product', sidebarOpen: false, sidebarExpanded: localStorage.getItem('sidebar-expanded') == 'true' }" x-init="$watch('sidebarExpanded', value => localStorage.setItem('sidebar-expanded', value))">

    <script>
        if (localStorage.getItem('sidebar-expanded') == 'true') {
            document.querySelector('body').classList.add('sidebar-expanded');
        } else {
            document.querySelector('body').classList.remove('sidebar-expanded');
        }
    </script>

    <!-- Page wrapper -->
    <div class="flex sj lw">

        <!-- Sidebar -->
        <div> <div class="th tm bg-slate-900 pd nb zq zy bj wn" :class="sidebarOpen ? 'bf' : 'opacity-0 pointer-events-none'" aria-hidden="true" x-cloak=""></div> <div id="sidebar" class="flex fu tp nb tb tk zh zm zg tef a_ sj lq tev ta uy tei ttn 2xl:!w-64 af pr vn bz wn wi" :class="sidebarOpen ? 'translate-x-0' : '-translate-x-64'" @click.outside="sidebarOpen = false" @keydown.escape.window="sidebarOpen = false" x-cloak="lg"> <div class="flex fh ih gt ji"> <button class="zq text-slate-500 xg" @click.stop="sidebarOpen = !sidebarOpen" aria-controls="sidebar" :aria-expanded="sidebarOpen"> <span class="tc">Close sidebar</span> <svg class="oz on dd" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"> <path d="M10.7 18.7l1.4-1.4L7.8 13H20v-2H7.8l4.3-4.3-1.4-1.4L4 12z"></path> </svg> </button> <a class="block" href="index.html"> <svg width="32" height="32" viewBox="0 0 32 32"> <defs> <linearGradient x1="28.538%" y1="20.229%" x2="100%" y2="108.156%" id="logo-a"> <stop stop-color="#A5B4FC" stop-opacity="0" offset="0%"></stop> <stop stop-color="#A5B4FC" offset="100%"></stop> </linearGradient> <linearGradient x1="88.638%" y1="29.267%" x2="22.42%" y2="100%" id="logo-b"> <stop stop-color="#38BDF8" stop-opacity="0" offset="0%"></stop> <stop stop-color="#38BDF8" offset="100%"></stop> </linearGradient> </defs> <rect fill="#6366F1" width="32" height="32" rx="16"></rect> <path d="M18.277.16C26.035 1.267 32 7.938 32 16c0 8.837-7.163 16-16 16a15.937 15.937 0 01-10.426-3.863L18.277.161z" fill="#4F46E5"></path> <path d="M7.404 2.503l18.339 26.19A15.93 15.93 0 0116 32C7.163 32 0 24.837 0 16 0 10.327 2.952 5.344 7.404 2.503z" fill="url(#logo-a)"></path> <path d="M2.223 24.14L29.777 7.86A15.926 15.926 0 0132 16c0 8.837-7.163 16-16 16-5.864 0-10.991-3.154-13.777-7.86z" fill="url(#logo-b)"></path> </svg> </a> </div> <div class="ln"> <div> <h3 class="gp gb text-slate-500 gg gn"> <span class="hidden zk tte 2xl:hidden gu oz" aria-hidden="true">•••</span> <span class="zq tez 2xl:block">Pages</span> </h3> <ul class="ip"> <li class="vx vc rounded-sm im wg" :class="{ 'bg-slate-900': page.startsWith('dashboard-') }" x-data="{ open: false }" x-init="$nextTick(() => open = page.startsWith('dashboard-'))"> <a class="block yn xh lz b_ we" :class="page.startsWith('dashboard-') &amp;&amp; 'hover--text-slate-200'" href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true"> <div class="flex items-center fh"> <div class="flex items-center"> <svg class="af on oz" viewBox="0 0 24 24"> <path class="dd yt" :class="page.startsWith('dashboard-') &amp;&amp; '!text-indigo-500'" d="M12 0C5.383 0 0 5.383 0 12s5.383 12 12 12 12-5.383 12-12S18.617 0 12 0z"></path> <path class="dd gz" :class="page.startsWith('dashboard-') &amp;&amp; 'text-indigo-600'" d="M12 3c-4.963 0-9 4.037-9 9s4.037 9 9 9 9-4.037 9-9-4.037-9-9-9z"></path> <path class="dd yt" :class="page.startsWith('dashboard-') &amp;&amp; 'text-indigo-200'" d="M12 15c-1.654 0-3-1.346-3-3 0-.462.113-.894.3-1.285L6 6l4.714 3.301A2.973 2.973 0 0112 9c1.654 0 3 1.346 3 3s-1.346 3-3 3z"></path> </svg> <span class="text-sm gm ml-3 tek ttr 2xl:opacity--100 wn">Dashboard</span> </div> <div class="flex af r_ tek ttr 2xl:opacity--100 wn"> <svg class="w-3 h-3 af rq dd yt" :class="open &amp;&amp; 'a_ ak'" viewBox="0 0 12 12"> <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path> </svg> </div> </div> </a> <div class="zq tez 2xl:block"> <ul class="mr io" :class="!open &amp;&amp; 'hidden'" x-cloak=""> <li class="rx wg"> <a class="block yt hover--text-slate-200 b_ we lz" :class="page === 'dashboard-main' &amp;&amp; '!text-indigo-500'" href="index.html"> <span class="text-sm gm tek ttr 2xl:opacity--100 wn">Main</span> </a> </li> <li class="rx wg"> <a class="block yt hover--text-slate-200 b_ we lz" :class="page === 'dashboard-analytics' &amp;&amp; '!text-indigo-500'" href="analytics.html"> <span class="text-sm gm tek ttr 2xl:opacity--100 wn">Analytics</span> </a> </li> <li class="rx wg"> <a class="block yt hover--text-slate-200 b_ we lz" :class="page === 'dashboard-fintech' &amp;&amp; '!text-indigo-500'" href="fintech.html"> <span class="text-sm gm tek ttr 2xl:opacity--100 wn">Fintech</span> </a> </li> </ul> </div> </li> <li class="vx vc rounded-sm im wg" :class="{ 'bg-slate-900': page.startsWith('ecommerce-') }" x-data="{ open: false }" x-init="$nextTick(() => open = page.startsWith('ecommerce-'))"> <a class="block yn xh lz b_ we" :class="page.startsWith('ecommerce-') &amp;&amp; 'hover--text-slate-200'" href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true"> <div class="flex items-center fh"> <div class="flex items-center"> <svg class="af on oz" viewBox="0 0 24 24"> <path class="dd yt" :class="page.startsWith('ecommerce-') &amp;&amp; 'text-indigo-300'" d="M13 15l11-7L11.504.136a1 1 0 00-1.019.007L0 7l13 8z"></path> <path class="dd be" :class="page.startsWith('ecommerce-') &amp;&amp; '!text-indigo-600'" d="M13 15L0 7v9c0 .355.189.685.496.864L13 24v-9z"></path> <path class="dd gz" :class="page.startsWith('ecommerce-') &amp;&amp; 'text-indigo-500'" d="M13 15.047V24l10.573-7.181A.999.999 0 0024 16V8l-11 7.047z"></path> </svg> <span class="text-sm gm ml-3 tek ttr 2xl:opacity--100 wn">E-Commerce</span> </div> <div class="flex af r_ tek ttr 2xl:opacity--100 wn"> <svg class="w-3 h-3 af rq dd yt" :class="open &amp;&amp; 'a_ ak'" viewBox="0 0 12 12"> <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path> </svg> </div> </div> </a> <div class="zq tez 2xl:block"> <ul class="mr io" :class="!open &amp;&amp; 'hidden'" x-cloak=""> <li class="rx wg"> <a class="block yt hover--text-slate-200 b_ we lz" :class="page === 'ecommerce-customers' &amp;&amp; '!text-indigo-500'" href="customers.html"> <span class="text-sm gm tek ttr 2xl:opacity--100 wn">Customers</span> </a> </li> <li class="rx wg"> <a class="block yt hover--text-slate-200 b_ we lz" :class="page === 'ecommerce-orders' &amp;&amp; '!text-indigo-500'" href="orders.html"> <span class="text-sm gm tek ttr 2xl:opacity--100 wn">Orders</span> </a> </li> <li class="rx wg"> <a class="block yt hover--text-slate-200 b_ we lz" :class="page === 'ecommerce-invoices' &amp;&amp; '!text-indigo-500'" href="invoices.html"> <span class="text-sm gm tek ttr 2xl:opacity--100 wn">Invoices</span> </a> </li> <li class="rx wg"> <a class="block yt hover--text-slate-200 b_ we lz" :class="page === 'ecommerce-shop' &amp;&amp; '!text-indigo-500'" href="shop.html"> <span class="text-sm gm tek ttr 2xl:opacity--100 wn">Shop</span> </a> </li> <li class="rx wg"> <a class="block yt hover--text-slate-200 b_ we lz" :class="page === 'ecommerce-shop-2' &amp;&amp; '!text-indigo-500'" href="shop-2.html"> <span class="text-sm gm tek ttr 2xl:opacity--100 wn">Shop 2</span> </a> </li> <li class="rx wg"> <a class="block yt hover--text-slate-200 b_ we lz" :class="page === 'ecommerce-product' &amp;&amp; '!text-indigo-500'" href="product.html"> <span class="text-sm gm tek ttr 2xl:opacity--100 wn">Single Product</span> </a> </li> <li class="rx wg"> <a class="block yt hover--text-slate-200 b_ we lz" :class="page === 'ecommerce-cart' &amp;&amp; '!text-indigo-500'" href="cart.html"> <span class="text-sm gm tek ttr 2xl:opacity--100 wn">Cart</span> </a> </li> <li class="rx wg"> <a class="block yt hover--text-slate-200 b_ we lz" :class="page === 'ecommerce-cart-2' &amp;&amp; '!text-indigo-500'" href="cart-2.html"> <span class="text-sm gm tek ttr 2xl:opacity--100 wn">Cart 2</span> </a> </li> <li class="rx wg"> <a class="block yt hover--text-slate-200 b_ we lz" :class="page === 'ecommerce-cart-3' &amp;&amp; '!text-indigo-500'" href="cart-3.html"> <span class="text-sm gm tek ttr 2xl:opacity--100 wn">Cart 3</span> </a> </li> <li class="rx wg"> <a class="block yt hover--text-slate-200 b_ we lz" href="pay.html"> <span class="text-sm gm tek ttr 2xl:opacity--100 wn">Pay</span> </a> </li> </ul> </div> </li> <li class="vx vc rounded-sm im wg" :class="{ 'bg-slate-900': page.startsWith('community-') }" x-data="{ open: false }" x-init="$nextTick(() => open = page.startsWith('community-'))"> <a class="block yn xh lz b_ we" :class="page.startsWith('community-') &amp;&amp; 'hover--text-slate-200'" href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true"> <div class="flex items-center fh"> <div class="flex items-center"> <svg class="af on oz" viewBox="0 0 24 24"> <path class="dd gz" :class="page.startsWith('community-') &amp;&amp; 'text-indigo-500'" d="M18.974 8H22a2 2 0 012 2v6h-2v5a1 1 0 01-1 1h-2a1 1 0 01-1-1v-5h-2v-6a2 2 0 012-2h.974zM20 7a2 2 0 11-.001-3.999A2 2 0 0120 7zM2.974 8H6a2 2 0 012 2v6H6v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5H0v-6a2 2 0 012-2h.974zM4 7a2 2 0 11-.001-3.999A2 2 0 014 7z"></path> <path class="dd yt" :class="page.startsWith('community-') &amp;&amp; 'text-indigo-300'" d="M12 6a3 3 0 110-6 3 3 0 010 6zm2 18h-4a1 1 0 01-1-1v-6H6v-6a3 3 0 013-3h6a3 3 0 013 3v6h-3v6a1 1 0 01-1 1z"></path> </svg> <span class="text-sm gm ml-3 tek ttr 2xl:opacity--100 wn">Community</span> </div> <div class="flex af r_ tek ttr 2xl:opacity--100 wn"> <svg class="w-3 h-3 af rq dd yt" :class="open &amp;&amp; 'a_ ak'" viewBox="0 0 12 12"> <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path> </svg> </div> </div> </a> <div class="zq tez 2xl:block"> <ul class="mr io" :class="!open &amp;&amp; 'hidden'" x-cloak=""> <li class="rx wg"> <a class="block yt hover--text-slate-200 b_ we lz" :class="page === 'community-tabs' &amp;&amp; '!text-indigo-500'" href="users-tabs.html"> <span class="text-sm gm tek ttr 2xl:opacity--100 wn">Users - Tabs</span> </a> </li> <li class="rx wg"> <a class="block yt hover--text-slate-200 b_ we lz" :class="page === 'community-tiles' &amp;&amp; '!text-indigo-500'" href="users-tiles.html"> <span class="text-sm gm tek ttr 2xl:opacity--100 wn">Users - Tiles</span> </a> </li> <li class="rx wg"> <a class="block yt hover--text-slate-200 b_ we lz" :class="page === 'community-profile' &amp;&amp; '!text-indigo-500'" href="profile.html"> <span class="text-sm gm tek ttr 2xl:opacity--100 wn">Profile</span> </a> </li> <li class="rx wg"> <a class="block yt hover--text-slate-200 b_ we lz" :class="page === 'community-feed' &amp;&amp; '!text-indigo-500'" href="feed.html"> <span class="text-sm gm tek ttr 2xl:opacity--100 wn">Feed</span> </a> </li> <li class="rx wg"> <a class="block yt hover--text-slate-200 b_ we lz" :class="page === 'community-forum' &amp;&amp; '!text-indigo-500'" href="forum.html"> <span class="text-sm gm tek ttr 2xl:opacity--100 wn">Forum</span> </a> </li> <li class="rx wg"> <a class="block yt hover--text-slate-200 b_ we lz" :class="page === 'community-forum-post' &amp;&amp; '!text-indigo-500'" href="forum-post.html"> <span class="text-sm gm tek ttr 2xl:opacity--100 wn">Forum - Post</span> </a> </li> <li class="rx wg"> <a class="block yt hover--text-slate-200 b_ we lz" :class="page === 'community-meetups' &amp;&amp; '!text-indigo-500'" href="meetups.html"> <span class="text-sm gm tek ttr 2xl:opacity--100 wn">Meetups</span> </a> </li> <li class="rx wg"> <a class="block yt hover--text-slate-200 b_ we lz" :class="page === 'community-meetups-post' &amp;&amp; '!text-indigo-500'" href="meetups-post.html"> <span class="text-sm gm tek ttr 2xl:opacity--100 wn">Meetups - Post</span> </a> </li> </ul> </div> </li> <li class="vx vc rounded-sm im wg" :class="{ 'bg-slate-900': page.startsWith('finance-') }" x-data="{ open: false }" x-init="$nextTick(() => open = page.startsWith('finance-'))"> <a class="block yn xh lz b_ we" :class="page.startsWith('finance-') &amp;&amp; 'hover--text-slate-200'" href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true"> <div class="flex items-center fh"> <div class="flex items-center"> <svg class="af on oz" viewBox="0 0 24 24"> <path class="dd yt" :class="page.startsWith('finance-') &amp;&amp; 'text-indigo-300'" d="M13 6.068a6.035 6.035 0 0 1 4.932 4.933H24c-.486-5.846-5.154-10.515-11-11v6.067Z"></path> <path class="dd be" :class="page.startsWith('finance-') &amp;&amp; '!text-indigo-500'" d="M18.007 13c-.474 2.833-2.919 5-5.864 5a5.888 5.888 0 0 1-3.694-1.304L4 20.731C6.131 22.752 8.992 24 12.143 24c6.232 0 11.35-4.851 11.857-11h-5.993Z"></path> <path class="dd gz" :class="page.startsWith('finance-') &amp;&amp; 'text-indigo-600'" d="M6.939 15.007A5.861 5.861 0 0 1 6 11.829c0-2.937 2.167-5.376 5-5.85V0C4.85.507 0 5.614 0 11.83c0 2.695.922 5.174 2.456 7.17l4.483-3.993Z"></path> </svg> <span class="text-sm gm ml-3 tek ttr 2xl:opacity--100 wn">Finance</span> </div> <div class="flex af r_ tek ttr 2xl:opacity--100 wn"> <svg class="w-3 h-3 af rq dd yt" :class="open &amp;&amp; 'a_ ak'" viewBox="0 0 12 12"> <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path> </svg> </div> </div> </a> <div class="zq tez 2xl:block"> <ul class="mr io" :class="!open &amp;&amp; 'hidden'" x-cloak=""> <li class="rx wg"> <a class="block yt hover--text-slate-200 b_ we lz" :class="page === 'finance-cards' &amp;&amp; '!text-indigo-500'" href="credit-cards.html"> <span class="text-sm gm tek ttr 2xl:opacity--100 wn">Cards</span> </a> </li> <li class="rx wg"> <a class="block yt hover--text-slate-200 b_ we lz" :class="page === 'finance-transactions' &amp;&amp; '!text-indigo-500'" href="transactions.html"> <span class="text-sm gm tek ttr 2xl:opacity--100 wn">Transactions</span> </a> </li> <li class="rx wg"> <a class="block yt hover--text-slate-200 b_ we lz" :class="page === 'finance-transaction-details' &amp;&amp; '!text-indigo-500'" href="transaction-details.html"> <span class="text-sm gm tek ttr 2xl:opacity--100 wn">Transaction Details</span> </a> </li> </ul> </div> </li> <li class="vx vc rounded-sm im wg" :class="page === 'messages' &amp;&amp; 'bg-slate-900'"> <a class="block yn xh lz b_ we" :class="page === 'messages' &amp;&amp; 'hover--text-slate-200'" href="messages.html"> <div class="flex items-center fh"> <div class="al flex items-center"> <svg class="af on oz" viewBox="0 0 24 24"> <path class="dd gz" :class="page === 'messages' &amp;&amp; 'text-indigo-500'" d="M14.5 7c4.695 0 8.5 3.184 8.5 7.111 0 1.597-.638 3.067-1.7 4.253V23l-4.108-2.148a10 10 0 01-2.692.37c-4.695 0-8.5-3.184-8.5-7.11C6 10.183 9.805 7 14.5 7z"></path> <path class="dd yt" :class="page === 'messages' &amp;&amp; 'text-indigo-300'" d="M11 1C5.477 1 1 4.582 1 9c0 1.797.75 3.45 2 4.785V19l4.833-2.416C8.829 16.85 9.892 17 11 17c5.523 0 10-3.582 10-8s-4.477-8-10-8z"></path> </svg> <span class="text-sm gm ml-3 tek ttr 2xl:opacity--100 wn">Messages</span> </div> <div class="flex aa r_"> <span class="inline-flex items-center justify-center oh gp gm ye hd vg rounded">4</span> </div> </div> </a> </li> <li class="vx vc rounded-sm im wg" :class="page === 'tasks' &amp;&amp; 'bg-slate-900'"> <a class="block yn xh lz b_ we" :class="page === 'tasks' &amp;&amp; 'hover--text-slate-200'" href="tasks.html"> <div class="flex items-center"> <svg class="af on oz" viewBox="0 0 24 24"> <path class="dd gz" :class="page === 'tasks' &amp;&amp; 'text-indigo-500'" d="M8 1v2H3v19h18V3h-5V1h7v23H1V1z"></path> <path class="dd gz" :class="page === 'tasks' &amp;&amp; 'text-indigo-500'" d="M1 1h22v23H1z"></path> <path class="dd yt" :class="page === 'tasks' &amp;&amp; 'text-indigo-300'" d="M15 10.586L16.414 12 11 17.414 7.586 14 9 12.586l2 2zM5 0h14v4H5z"></path> </svg> <span class="text-sm gm ml-3 tek ttr 2xl:opacity--100 wn">Tasks</span> </div> </a> </li> <li class="vx vc rounded-sm im wg" :class="page === 'inbox' &amp;&amp; 'bg-slate-900'"> <a class="block yn xh lz b_ we" :class="page === 'inbox' &amp;&amp; 'hover--text-slate-200'" href="inbox.html"> <div class="flex items-center"> <svg class="af on oz" viewBox="0 0 24 24"> <path class="dd gz" :class="page === 'inbox' &amp;&amp; 'text-indigo-500'" d="M16 13v4H8v-4H0l3-9h18l3 9h-8Z"></path> <path class="dd yt" :class="page === 'inbox' &amp;&amp; 'text-indigo-300'" d="m23.72 12 .229.686A.984.984 0 0 1 24 13v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1v-8c0-.107.017-.213.051-.314L.28 12H8v4h8v-4H23.72ZM13 0v7h3l-4 5-4-5h3V0h2Z"></path> </svg> <span class="text-sm gm ml-3 tek ttr 2xl:opacity--100 wn">Inbox</span> </div> </a> </li> <li class="vx vc rounded-sm im wg" :class="page === 'calendar' &amp;&amp; 'bg-slate-900'"> <a class="block yn xh lz b_ we" :class="page === 'calendar' &amp;&amp; 'hover--text-slate-200'" href="calendar.html"> <div class="flex items-center"> <svg class="af on oz" viewBox="0 0 24 24"> <path class="dd gz" :class="page === 'calendar' &amp;&amp; 'text-indigo-500'" d="M1 3h22v20H1z"></path> <path class="dd yt" :class="page === 'calendar' &amp;&amp; 'text-indigo-300'" d="M21 3h2v4H1V3h2V1h4v2h10V1h4v2Z"></path> </svg> <span class="text-sm gm ml-3 tek ttr 2xl:opacity--100 wn">Calendar</span> </div> </a> </li> <li class="vx vc rounded-sm im wg" :class="page === 'campaigns' &amp;&amp; 'bg-slate-900'"> <a class="block yn xh lz b_ we" :class="page === 'campaigns' &amp;&amp; 'hover--text-slate-200'" href="campaigns.html"> <div class="flex items-center"> <svg class="af on oz" viewBox="0 0 24 24"> <path class="dd gz" :class="page === 'campaigns' &amp;&amp; 'text-indigo-500'" d="M20 7a.75.75 0 01-.75-.75 1.5 1.5 0 00-1.5-1.5.75.75 0 110-1.5 1.5 1.5 0 001.5-1.5.75.75 0 111.5 0 1.5 1.5 0 001.5 1.5.75.75 0 110 1.5 1.5 1.5 0 00-1.5 1.5A.75.75 0 0120 7zM4 23a.75.75 0 01-.75-.75 1.5 1.5 0 00-1.5-1.5.75.75 0 110-1.5 1.5 1.5 0 001.5-1.5.75.75 0 111.5 0 1.5 1.5 0 001.5 1.5.75.75 0 110 1.5 1.5 1.5 0 00-1.5 1.5A.75.75 0 014 23z"></path> <path class="dd yt" :class="page === 'campaigns' &amp;&amp; 'text-indigo-300'" d="M17 23a1 1 0 01-1-1 4 4 0 00-4-4 1 1 0 010-2 4 4 0 004-4 1 1 0 012 0 4 4 0 004 4 1 1 0 010 2 4 4 0 00-4 4 1 1 0 01-1 1zM7 13a1 1 0 01-1-1 4 4 0 00-4-4 1 1 0 110-2 4 4 0 004-4 1 1 0 112 0 4 4 0 004 4 1 1 0 010 2 4 4 0 00-4 4 1 1 0 01-1 1z"></path> </svg> <span class="text-sm gm ml-3 tek ttr 2xl:opacity--100 wn">Campaigns</span> </div> </a> </li> <li class="vx vc rounded-sm im wg" :class="{ 'bg-slate-900': page.startsWith('settings-') }" x-data="{ open: false }" x-init="$nextTick(() => open = page.startsWith('settings-'))"> <a class="block yn xh lz b_ we" :class="page.startsWith('settings-') &amp;&amp; 'hover--text-slate-200'" href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true"> <div class="flex items-center fh"> <div class="flex items-center"> <svg class="af on oz" viewBox="0 0 24 24"> <path class="dd gz" :class="page.startsWith('settings-') &amp;&amp; 'text-indigo-500'" d="M19.714 14.7l-7.007 7.007-1.414-1.414 7.007-7.007c-.195-.4-.298-.84-.3-1.286a3 3 0 113 3 2.969 2.969 0 01-1.286-.3z"></path> <path class="dd yt" :class="page.startsWith('settings-') &amp;&amp; 'text-indigo-300'" d="M10.714 18.3c.4-.195.84-.298 1.286-.3a3 3 0 11-3 3c.002-.446.105-.885.3-1.286l-6.007-6.007 1.414-1.414 6.007 6.007z"></path> <path class="dd gz" :class="page.startsWith('settings-') &amp;&amp; 'text-indigo-500'" d="M5.7 10.714c.195.4.298.84.3 1.286a3 3 0 11-3-3c.446.002.885.105 1.286.3l7.007-7.007 1.414 1.414L5.7 10.714z"></path> <path class="dd yt" :class="page.startsWith('settings-') &amp;&amp; 'text-indigo-300'" d="M19.707 9.292a3.012 3.012 0 00-1.415 1.415L13.286 5.7c-.4.195-.84.298-1.286.3a3 3 0 113-3 2.969 2.969 0 01-.3 1.286l5.007 5.006z"></path> </svg> <span class="text-sm gm ml-3 tek ttr 2xl:opacity--100 wn">Settings</span> </div> <div class="flex af r_ tek ttr 2xl:opacity--100 wn"> <svg class="w-3 h-3 af rq dd yt" :class="open &amp;&amp; 'a_ ak'" viewBox="0 0 12 12"> <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path> </svg> </div> </div> </a> <div class="zq tez 2xl:block"> <ul class="mr io" :class="!open &amp;&amp; 'hidden'" x-cloak=""> <li class="rx wg"> <a class="block yt hover--text-slate-200 b_ we lz" :class="page === 'settings-account' &amp;&amp; '!text-indigo-500'" href="settings.html"> <span class="text-sm gm tek ttr 2xl:opacity--100 wn">My Account</span> </a> </li> <li class="rx wg"> <a class="block yt hover--text-slate-200 b_ we lz" :class="page === 'settings-notifications' &amp;&amp; '!text-indigo-500'" href="notifications.html"> <span class="text-sm gm tek ttr 2xl:opacity--100 wn">My Notifications</span> </a> </li> <li class="rx wg"> <a class="block yt hover--text-slate-200 b_ we lz" :class="page === 'settings-apps' &amp;&amp; '!text-indigo-500'" href="connected-apps.html"> <span class="text-sm gm tek ttr 2xl:opacity--100 wn">Connected Apps</span> </a> </li> <li class="rx wg"> <a class="block yt hover--text-slate-200 b_ we lz" :class="page === 'settings-plans' &amp;&amp; '!text-indigo-500'" href="plans.html"> <span class="text-sm gm tek ttr 2xl:opacity--100 wn">Plans</span> </a> </li> <li class="rx wg"> <a class="block yt hover--text-slate-200 b_ we lz" :class="page === 'settings-billing' &amp;&amp; '!text-indigo-500'" href="billing.html"> <span class="text-sm gm tek ttr 2xl:opacity--100 wn">Billing &amp; Invoices</span> </a> </li> <li class="rx wg"> <a class="block yt hover--text-slate-200 b_ we lz" :class="page === 'settings-feedback' &amp;&amp; '!text-indigo-500'" href="feedback.html"> <span class="text-sm gm tek ttr 2xl:opacity--100 wn">Give Feedback</span> </a> </li> </ul> </div> </li> <li class="vx vc rounded-sm im wg" :class="{ 'bg-slate-900': page.startsWith('utility-') }" x-data="{ open: false }" x-init="$nextTick(() => open = page.startsWith('utility-'))"> <a class="block yn xh lz b_ we" :class="page.startsWith('utility-') &amp;&amp; 'hover--text-slate-200'" href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true"> <div class="flex items-center fh"> <div class="flex items-center"> <svg class="af on oz" viewBox="0 0 24 24"> <circle class="dd yt" :class="page.startsWith('utility-') &amp;&amp; 'text-indigo-300'" cx="18.5" cy="5.5" r="4.5"></circle> <circle class="dd gz" :class="page.startsWith('utility-') &amp;&amp; 'text-indigo-500'" cx="5.5" cy="5.5" r="4.5"></circle> <circle class="dd gz" :class="page.startsWith('utility-') &amp;&amp; 'text-indigo-500'" cx="18.5" cy="18.5" r="4.5"></circle> <circle class="dd yt" :class="page.startsWith('utility-') &amp;&amp; 'text-indigo-300'" cx="5.5" cy="18.5" r="4.5"></circle> </svg> <span class="text-sm gm ml-3 tek ttr 2xl:opacity--100 wn">Utility</span> </div> <div class="flex af r_ tek ttr 2xl:opacity--100 wn"> <svg class="w-3 h-3 af rq dd yt" :class="open &amp;&amp; 'a_ ak'" viewBox="0 0 12 12"> <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path> </svg> </div> </div> </a> <div class="zq tez 2xl:block"> <ul class="mr io" :class="!open &amp;&amp; 'hidden'" x-cloak=""> <li class="rx wg"> <a class="block yt hover--text-slate-200 b_ we lz" :class="page === 'utility-changelog' &amp;&amp; '!text-indigo-500'" href="changelog.html"> <span class="text-sm gm tek ttr 2xl:opacity--100 wn">Changelog</span> </a> </li> <li class="rx wg"> <a class="block yt hover--text-slate-200 b_ we lz" :class="page === 'utility-roadmap' &amp;&amp; '!text-indigo-500'" href="roadmap.html"> <span class="text-sm gm tek ttr 2xl:opacity--100 wn">Roadmap</span> </a> </li> <li class="rx wg"> <a class="block yt hover--text-slate-200 b_ we lz" :class="page === 'utility-faqs' &amp;&amp; '!text-indigo-500'" href="faqs.html"> <span class="text-sm gm tek ttr 2xl:opacity--100 wn">FAQs</span> </a> </li> <li class="rx wg"> <a class="block yt hover--text-slate-200 b_ we lz" :class="page === 'utility-empty-state' &amp;&amp; '!text-indigo-500'" href="empty-state.html"> <span class="text-sm gm tek ttr 2xl:opacity--100 wn">Empty State</span> </a> </li> <li class="rx wg"> <a class="block yt hover--text-slate-200 b_ we lz" :class="page === 'utility-404' &amp;&amp; '!text-indigo-500'" href="404.html"> <span class="text-sm gm tek ttr 2xl:opacity--100 wn">404</span> </a> </li> </ul> </div> </li> </ul> </div> <div> <h3 class="gp gb text-slate-500 gg gn"> <span class="hidden zk tte 2xl:hidden gu oz" aria-hidden="true">•••</span> <span class="zq tez 2xl:block">More</span> </h3> <ul class="ip"> <li class="vx vc rounded-sm im wg" x-data="{ open: false }"> <a class="sidebar-expander-link block yn xh b_ we" :class="open &amp;&amp; 'hover--text-slate-200'" href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true"> <div class="flex items-center fh"> <div class="flex items-center"> <svg class="af on oz" viewBox="0 0 24 24"> <path class="dd gz" d="M8.07 16H10V8H8.07a8 8 0 110 8z"></path> <path class="dd yt" d="M15 12L8 6v5H0v2h8v5z"></path> </svg> <span class="text-sm gm ml-3 tek ttr 2xl:opacity--100 wn">Authentication</span> </div> <div class="flex af r_ tek ttr 2xl:opacity--100 wn"> <svg class="w-3 h-3 af rq dd yt" :class="{ 'a_ ak': open }" viewBox="0 0 12 12"> <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path> </svg> </div> </div> </a> <div class="zq tez 2xl:block"> <ul class="mr io" :class="{ 'hidden': !open }" x-cloak=""> <li class="rx wg"> <a class="block yt hover--text-slate-200 b_ we lz" href="signin.html"> <span class="text-sm gm tek ttr 2xl:opacity--100 wn">Sign In</span> </a> </li> <li class="rx wg"> <a class="block yt hover--text-slate-200 b_ we lz" href="signup.html"> <span class="text-sm gm tek ttr 2xl:opacity--100 wn">Sign up</span> </a> </li> <li class="rx wg"> <a class="block yt hover--text-slate-200 b_ we lz" href="reset-password.html"> <span class="text-sm gm tek ttr 2xl:opacity--100 wn">Reset Password</span> </a> </li> </ul> </div> </li> <li class="vx vc rounded-sm im wg" x-data="{ open: false }"> <a class="sidebar-expander-link block yn xh b_ we" :class="open &amp;&amp; 'hover--text-slate-200'" href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true"> <div class="flex items-center fh"> <div class="flex items-center"> <svg class="af on oz" viewBox="0 0 24 24"> <path class="dd gz" d="M19 5h1v14h-2V7.414L5.707 19.707 5 19H4V5h2v11.586L18.293 4.293 19 5Z"></path> <path class="dd yt" d="M5 9a4 4 0 1 1 0-8 4 4 0 0 1 0 8Zm14 0a4 4 0 1 1 0-8 4 4 0 0 1 0 8ZM5 23a4 4 0 1 1 0-8 4 4 0 0 1 0 8Zm14 0a4 4 0 1 1 0-8 4 4 0 0 1 0 8Z"></path> </svg> <span class="text-sm gm ml-3 tek ttr 2xl:opacity--100 wn">Onboarding</span> </div> <div class="flex af r_ tek ttr 2xl:opacity--100 wn"> <svg class="w-3 h-3 af rq dd yt" :class="{ 'a_ ak': open }" viewBox="0 0 12 12"> <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path> </svg> </div> </div> </a> <div class="zq tez 2xl:block"> <ul class="mr io" :class="{ 'hidden': !open }" x-cloak=""> <li class="rx wg"> <a class="block yt hover--text-slate-200 b_ we lz" href="onboarding-01.html"> <span class="text-sm gm tek ttr 2xl:opacity--100 wn">Step 1</span> </a> </li> <li class="rx wg"> <a class="block yt hover--text-slate-200 b_ we lz" href="onboarding-02.html"> <span class="text-sm gm tek ttr 2xl:opacity--100 wn">Step 2</span> </a> </li> <li class="rx wg"> <a class="block yt hover--text-slate-200 b_ we lz" href="onboarding-03.html"> <span class="text-sm gm tek ttr 2xl:opacity--100 wn">Step 3</span> </a> </li> <li class="rx wg"> <a class="block yt hover--text-slate-200 b_ we lz" href="onboarding-04.html"> <span class="text-sm gm tek ttr 2xl:opacity--100 wn">Step 4</span> </a> </li> </ul> </div> </li> <li class="vx vc rounded-sm im wg" :class="{ 'bg-slate-900': page.startsWith('component-') }" x-data="{ open: false }" x-init="$nextTick(() => open = page.startsWith('component-'))"> <a class="sidebar-expander-link block yn xh b_ we" :class="open &amp;&amp; 'hover--text-slate-200'" href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true"> <div class="flex items-center fh"> <div class="flex items-center"> <svg class="af on oz" viewBox="0 0 24 24"> <circle class="dd gz" :class="page.startsWith('component-') &amp;&amp; 'text-indigo-500'" cx="16" cy="8" r="8"></circle> <circle class="dd yt" :class="page.startsWith('component-') &amp;&amp; 'text-indigo-300'" cx="8" cy="16" r="8"></circle> </svg> <span class="text-sm gm ml-3 tek ttr 2xl:opacity--100 wn">Components</span> </div> <div class="flex af r_ tek ttr 2xl:opacity--100 wn"> <svg class="w-3 h-3 af rq dd yt" :class="{ 'a_ ak': open }" viewBox="0 0 12 12"> <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path> </svg> </div> </div> </a> <div class="zq tez 2xl:block"> <ul class="mr io" :class="{ 'hidden': !open }" x-cloak=""> <li class="rx wg"> <a class="block yt hover--text-slate-200 b_ we lz" :class="page === 'component-button' &amp;&amp; '!text-indigo-500'" href="component-button.html"> <span class="text-sm gm tek ttr 2xl:opacity--100 wn">Button</span> </a> </li> <li class="rx wg"> <a class="block yt hover--text-slate-200 b_ we lz" :class="page === 'component-form' &amp;&amp; '!text-indigo-500'" href="component-form.html"> <span class="text-sm gm tek ttr 2xl:opacity--100 wn">Input Form</span> </a> </li> <li class="rx wg"> <a class="block yt hover--text-slate-200 b_ we lz" :class="page === 'component-dropdown' &amp;&amp; '!text-indigo-500'" href="component-dropdown.html"> <span class="text-sm gm tek ttr 2xl:opacity--100 wn">Dropdown</span> </a> </li> <li class="rx wg"> <a class="block yt hover--text-slate-200 b_ we lz" :class="page === 'component-alert' &amp;&amp; '!text-indigo-500'" href="component-alert.html"> <span class="text-sm gm tek ttr 2xl:opacity--100 wn">Alert &amp; Banner</span> </a> </li> <li class="rx wg"> <a class="block yt hover--text-slate-200 b_ we lz" :class="page === 'component-modal' &amp;&amp; '!text-indigo-500'" href="component-modal.html"> <span class="text-sm gm tek ttr 2xl:opacity--100 wn">Modal</span> </a> </li> <li class="rx wg"> <a class="block yt hover--text-slate-200 b_ we lz" :class="page === 'component-pagination' &amp;&amp; '!text-indigo-500'" href="component-pagination.html"> <span class="text-sm gm tek ttr 2xl:opacity--100 wn">Pagination</span> </a> </li> <li class="rx wg"> <a class="block yt hover--text-slate-200 b_ we lz" :class="page === 'component-tabs' &amp;&amp; '!text-indigo-500'" href="component-tabs.html"> <span class="text-sm gm tek ttr 2xl:opacity--100 wn">Tabs</span> </a> </li> <li class="rx wg"> <a class="block yt hover--text-slate-200 b_ we lz" :class="page === 'component-breadcrumb' &amp;&amp; '!text-indigo-500'" href="component-breadcrumb.html"> <span class="text-sm gm tek ttr 2xl:opacity--100 wn">Breadcrumb</span> </a> </li> <li class="rx wg"> <a class="block yt hover--text-slate-200 b_ we lz" :class="page === 'component-badge' &amp;&amp; '!text-indigo-500'" href="component-badge.html"> <span class="text-sm gm tek ttr 2xl:opacity--100 wn">Badge</span> </a> </li> <li class="rx wg"> <a class="block yt hover--text-slate-200 b_ we lz" :class="page === 'component-avatar' &amp;&amp; '!text-indigo-500'" href="component-avatar.html"> <span class="text-sm gm tek ttr 2xl:opacity--100 wn">Avatar</span> </a> </li> <li class="rx wg"> <a class="block yt hover--text-slate-200 b_ we lz" :class="page === 'component-tooltip' &amp;&amp; '!text-indigo-500'" href="component-tooltip.html"> <span class="text-sm gm tek ttr 2xl:opacity--100 wn">Tooltip</span> </a> </li> <li class="rx wg"> <a class="block yt hover--text-slate-200 b_ we lz" :class="page === 'component-accordion' &amp;&amp; '!text-indigo-500'" href="component-accordion.html"> <span class="text-sm gm tek ttr 2xl:opacity--100 wn">Accordion</span> </a> </li> <li class="rx wg"> <a class="block yt hover--text-slate-200 b_ we lz" :class="page === 'component-icons' &amp;&amp; '!text-indigo-500'" href="component-icons.html"> <span class="text-sm gm tek ttr 2xl:opacity--100 wn">Icons</span> </a> </li> </ul> </div> </li> </ul> </div> </div> <div class="mq hidden zj 2xl:hidden justify-end sh"> <div class="vx vc"> <button @click="sidebarExpanded = !sidebarExpanded"> <span class="tc">Expand / collapse sidebar</span> <svg class="oz on dd kp" viewBox="0 0 24 24"> <path class="yt" d="M19.586 11l-5-5L16 4.586 23.414 12 16 19.414 14.586 18l5-5H7v-2z"></path> <path class="gz" d="M3 23H1V1h2z"></path> </svg> </button> </div> </div> </div> </div>

        <!-- Content area -->
        <div class="td flex fu au lk l_">

            <!-- Site header -->
            <header class="tv tk bg-white cm border-slate-200 ng"> <div class="va jn teb"> <div class="flex items-center fh ou iq"> <div class="flex"> <button class="text-slate-500 hover--text-slate-600 zq" @click.stop="sidebarOpen = !sidebarOpen" aria-controls="sidebar" :aria-expanded="sidebarOpen"> <span class="tc">Open sidebar</span> <svg class="oz on dd" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"> <rect x="4" y="5" width="16" height="2"></rect> <rect x="4" y="11" width="16" height="2"></rect> <rect x="4" y="17" width="16" height="2"></rect> </svg> </button> </div> <div class="flex items-center lo"> <div x-data="{ searchOpen: false }"> <button class="un or flex items-center justify-center hp xr b_ we rounded-full" :class="{ 'hv': searchOpen }" @click.prevent="searchOpen = true;if (searchOpen) $nextTick(()=>{$refs.searchInput.focus()});" aria-controls="search-modal"> <span class="tc">Search</span> <svg class="o_ sq" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"> <path class="dd text-slate-500" d="M7 14c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7zM7 2C4.243 2 2 4.243 2 7s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5z"></path> <path class="dd yt" d="M15.707 14.293L13.314 11.9a8.019 8.019 0 01-1.414 1.414l2.393 2.393a.997.997 0 001.414 0 .999.999 0 000-1.414z"></path> </svg> </button> <div class="th tm bg-slate-900 pd nm bj" x-show="searchOpen" x-transition:enter="b_ ws wn" x-transition:enter-start="opacity-0" x-transition:enter-end="bf" x-transition:leave="b_ ws wt" x-transition:leave-start="bf" x-transition:leave-end="opacity-0" aria-hidden="true" x-cloak=""></div> <div id="search-modal" class="th tm nm lw flex ff nn rw justify-center a_ va jn" role="dialog" aria-modal="true" x-show="searchOpen" x-transition:enter="b_ wi wn" x-transition:enter-start="opacity-0 ab" x-transition:enter-end="bf ag" x-transition:leave="b_ wi wn" x-transition:leave-start="bf ag" x-transition:leave-end="opacity-0 ab" x-cloak=""> <div class="bg-white lb ae ox oy rounded bh" @click.outside="searchOpen = false" @keydown.escape.window="searchOpen = false"> <form class="cm border-slate-200"> <div class="td"> <label for="modal-search" class="tc">Search</label> <input id="modal-search" class="ox cv xj bi fn vl mv mm" type="search" placeholder="Search Anything…" x-ref="searchInput"> <button class="tp tm tg kr" type="submit" aria-label="Search"> <svg class="o_ sq af dd yt ks iy mr-2" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"> <path d="M7 14c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7zM7 2C4.243 2 2 4.243 2 7s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5z"></path> <path d="M15.707 14.293L13.314 11.9a8.019 8.019 0 01-1.414 1.414l2.393 2.393a.997.997 0 001.414 0 .999.999 0 000-1.414z"></path> </svg> </button> </div> </form> <div class="vj vg"> <div class="it wg"> <div class="gp gg yt gb vg in">Recent searches</div> <ul class="text-sm"> <li> <a class="flex items-center vs text-slate-800 xh xs rounded kr" href="#0" @click="searchOpen = false" @focus="searchOpen = true" @focusout="searchOpen = false"> <svg class="o_ sq dd yt ku kf af rk" viewBox="0 0 16 16"> <path d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z"></path> </svg> <span>Form Builder - 23 hours on-demand video</span> </a> </li> <li> <a class="flex items-center vs text-slate-800 xh xs rounded kr" href="#0" @click="searchOpen = false" @focus="searchOpen = true" @focusout="searchOpen = false"> <svg class="o_ sq dd yt ku kf af rk" viewBox="0 0 16 16"> <path d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z"></path> </svg> <span>Access Mosaic on mobile and TV</span> </a> </li> <li> <a class="flex items-center vs text-slate-800 xh xs rounded kr" href="#0" @click="searchOpen = false" @focus="searchOpen = true" @focusout="searchOpen = false"> <svg class="o_ sq dd yt ku kf af rk" viewBox="0 0 16 16"> <path d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z"></path> </svg> <span>Product Update - Q4 2021</span> </a> </li> <li> <a class="flex items-center vs text-slate-800 xh xs rounded kr" href="#0" @click="searchOpen = false" @focus="searchOpen = true" @focusout="searchOpen = false"> <svg class="o_ sq dd yt ku kf af rk" viewBox="0 0 16 16"> <path d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z"></path> </svg> <span>Master Digital Marketing Strategy course</span> </a> </li> <li> <a class="flex items-center vs text-slate-800 xh xs rounded kr" href="#0" @click="searchOpen = false" @focus="searchOpen = true" @focusout="searchOpen = false"> <svg class="o_ sq dd yt ku kf af rk" viewBox="0 0 16 16"> <path d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z"></path> </svg> <span>Dedicated forms for products</span> </a> </li> <li> <a class="flex items-center vs text-slate-800 xh xs rounded kr" href="#0" @click="searchOpen = false" @focus="searchOpen = true" @focusout="searchOpen = false"> <svg class="o_ sq dd yt ku kf af rk" viewBox="0 0 16 16"> <path d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z"></path> </svg> <span>Product Update - Q4 2021</span> </a> </li> </ul> </div> <div class="it wg"> <div class="gp gg yt gb vg in">Recent pages</div> <ul class="text-sm"> <li> <a class="flex items-center vs text-slate-800 xh xs rounded kr" href="#0" @click="searchOpen = false" @focus="searchOpen = true" @focusout="searchOpen = false"> <svg class="o_ sq dd yt ku kf af rk" viewBox="0 0 16 16"> <path d="M14 0H2c-.6 0-1 .4-1 1v14c0 .6.4 1 1 1h8l5-5V1c0-.6-.4-1-1-1zM3 2h10v8H9v4H3V2z"></path> </svg> <span><span class="gm text-slate-800 ku">Messages</span> - Conversation / … / Mike Mills</span> </a> </li> <li> <a class="flex items-center vs text-slate-800 xh xs rounded kr" href="#0" @click="searchOpen = false" @focus="searchOpen = true" @focusout="searchOpen = false"> <svg class="o_ sq dd yt ku kf af rk" viewBox="0 0 16 16"> <path d="M14 0H2c-.6 0-1 .4-1 1v14c0 .6.4 1 1 1h8l5-5V1c0-.6-.4-1-1-1zM3 2h10v8H9v4H3V2z"></path> </svg> <span><span class="gm text-slate-800 ku">Messages</span> - Conversation / … / Eva Patrick</span> </a> </li> </ul> </div> </div> </div> </div> </div> <div class="td inline-flex" x-data="{ open: false }"> <button class="un or flex items-center justify-center hp xr b_ we rounded-full" :class="{ 'hv': open }" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open"> <span class="tc">Notifications</span> <svg class="o_ sq" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"> <path class="dd text-slate-500" d="M6.5 0C2.91 0 0 2.462 0 5.5c0 1.075.37 2.074 1 2.922V12l2.699-1.542A7.454 7.454 0 006.5 11c3.59 0 6.5-2.462 6.5-5.5S10.09 0 6.5 0z"></path> <path class="dd yt" d="M16 9.5c0-.987-.429-1.897-1.147-2.639C14.124 10.348 10.66 13 6.5 13c-.103 0-.202-.018-.305-.021C7.231 13.617 8.556 14 10 14c.449 0 .886-.04 1.307-.11L15 16v-4h-.012C15.627 11.285 16 10.425 16 9.5z"></path> </svg> <div class="tp tk tw ui os hq cp c_ rounded-full"></div> </button> <div class="ah nv tp tq tw il kz ub bg-white border border-slate-200 vz rounded bh lw io" @click.outside="open = false" @keydown.escape.window="open = false" x-show="open" x-transition:enter="b_ ws wn a_" x-transition:enter-start="opacity-0 am" x-transition:enter-end="bf ag" x-transition:leave="b_ ws wn" x-transition:leave-start="bf" x-transition:leave-end="opacity-0" x-cloak=""> <div class="gp gg yt gb mo ma va">Notifications</div> <ul> <li class="cm border-slate-200 wb"> <a class="block vc va wz" href="#0" @click="open = false" @focus="open = true" @focusout="open = false"> <span class="block text-sm in">📣 <span class="gm text-slate-800">Edit your information in a swipe</span> Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.</span> <span class="block gp gm yt">Feb 12, 2021</span> </a> </li> <li class="cm border-slate-200 wb"> <a class="block vc va wz" href="#0" @click="open = false" @focus="open = true" @focusout="open = false"> <span class="block text-sm in">📣 <span class="gm text-slate-800">Edit your information in a swipe</span> Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.</span> <span class="block gp gm yt">Feb 9, 2021</span> </a> </li> <li class="cm border-slate-200 wb"> <a class="block vc va wz" href="#0" @click="open = false" @focus="open = true" @focusout="open = false"> <span class="block text-sm in">🚀<span class="gm text-slate-800">Say goodbye to paper receipts!</span> Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.</span> <span class="block gp gm yt">Jan 24, 2020</span> </a> </li> </ul> </div> </div> <div class="td inline-flex" x-data="{ open: false }"> <button class="un or flex items-center justify-center hp xr b_ we rounded-full" :class="{ 'hv': open }" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open"> <span class="tc">Info</span> <svg class="o_ sq" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"> <path class="dd text-slate-500" d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 12c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm1-3H7V4h2v5z"></path> </svg> </button> <div class="ah nv tp tq tw uw bg-white border border-slate-200 vz rounded bh lw io" @click.outside="open = false" @keydown.escape.window="open = false" x-show="open" x-transition:enter="b_ ws wn a_" x-transition:enter-start="opacity-0 am" x-transition:enter-end="bf ag" x-transition:leave="b_ ws wn" x-transition:leave-start="bf" x-transition:leave-end="opacity-0" x-cloak=""> <div class="gp gg yt gb mo ma vx">Need help?</div> <ul> <li> <a class="gm text-sm text-indigo-500 xu flex items-center vk vx" href="#0" @click="open = false" @focus="open = true" @focusout="open = false"> <svg class="w-3 h-3 dd text-indigo-300 af mr-2" viewBox="0 0 12 12"> <rect y="3" width="12" height="9" rx="1"></rect> <path d="M2 0h8v2H2z"></path> </svg> <span>Documentation</span> </a> </li> <li> <a class="gm text-sm text-indigo-500 xu flex items-center vk vx" href="#0" @click="open = false" @focus="open = true" @focusout="open = false"> <svg class="w-3 h-3 dd text-indigo-300 af mr-2" viewBox="0 0 12 12"> <path d="M10.5 0h-9A1.5 1.5 0 000 1.5v9A1.5 1.5 0 001.5 12h9a1.5 1.5 0 001.5-1.5v-9A1.5 1.5 0 0010.5 0zM10 7L8.207 5.207l-3 3-1.414-1.414 3-3L5 2h5v5z"></path> </svg> <span>Support Site</span> </a> </li> <li> <a class="gm text-sm text-indigo-500 xu flex items-center vk vx" href="#0" @click="open = false" @focus="open = true" @focusout="open = false"> <svg class="w-3 h-3 dd text-indigo-300 af mr-2" viewBox="0 0 12 12"> <path d="M11.854.146a.5.5 0 00-.525-.116l-11 4a.5.5 0 00-.015.934l4.8 1.921 1.921 4.8A.5.5 0 007.5 12h.008a.5.5 0 00.462-.329l4-11a.5.5 0 00-.116-.525z"></path> </svg> <span>Contact us</span> </a> </li> </ul> </div> </div> <hr class="oj on hv"> <div class="td inline-flex" x-data="{ open: false }"> <button class="inline-flex justify-center items-center kr" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open"> <img class="un or rounded-full" src="images/user-avatar-32.png" width="32" height="32" alt="User"> <div class="flex items-center lz"> <span class="lz r_ text-sm gm ko">Acme Inc.</span> <svg class="w-3 h-3 af rq dd yt" viewBox="0 0 12 12"> <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path> </svg> </div> </button> <div class="ah nv tp tq tw uw bg-white border border-slate-200 vz rounded bh lw io" @click.outside="open = false" @keydown.escape.window="open = false" x-show="open" x-transition:enter="b_ ws wn a_" x-transition:enter-start="opacity-0 am" x-transition:enter-end="bf ag" x-transition:leave="b_ ws wn" x-transition:leave-start="bf" x-transition:leave-end="opacity-0" x-cloak=""> <div class="mf ma vx rx cm border-slate-200"> <div class="gm text-slate-800">Acme Inc.</div> <div class="gp text-slate-500 gw">Administrator</div> </div> <ul> <li> <a class="gm text-sm text-indigo-500 xu flex items-center vk vx" href="settings.html" @click="open = false" @focus="open = true" @focusout="open = false">Settings</a> </li> <li> <a class="gm text-sm text-indigo-500 xu flex items-center vk vx" href="signin.html" @click="open = false" @focus="open = true" @focusout="open = false">Sign Out</a> </li> </ul> </div> </div> </div> </div> </div> </header>
            
            <main>
                <div class="va jn teb vf ox">

                    <!-- Page content -->
                    <div class="an ri flex fu tel teh tnr">

                        <!-- Content -->
                        <div>
                            <div class="it">
                                <a class="text-sm gm text-indigo-500 xu" href="#0">&lt;- Back To Listing</a>
                            </div>
                            <header class="rw">
                                <!-- Title -->
                                <h1 class="gc zc text-slate-800 font-bold in">Front-End Learning: Hands-On HTML &amp; CSS In Real Web Apps ✨</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam.</p>
                            </header>

                            <!-- Meta -->
                            <div class="le _u _g _w _x rb">
                                <!-- Author -->
                                <div class="flex items-center _e">
                                    <a class="block mr-2 af" href="#0">
                                        <img class="rounded-full cp c_ sw" src="images/user-32-07.jpg" width="32" height="32" alt="User 04">
                                    </a>
                                    <a class="block text-sm gg text-slate-800 ct" href="#0">
                                        Simona Lürwer
                                    </a>
                                </div>
                                <!-- Right side -->
                                <div class="flex flex-wrap items-center _b fq">
                                    <!-- Tag -->
                                    <div class="inline-flex items-center gp gm yh bg-slate-900 pv rounded-full gu vg vh">
                                        <svg class="w-3 h-3 af dd yl mr-1" viewBox="0 0 12 12">
                                            <path d="M11.953 4.29a.5.5 0 00-.454-.292H6.14L6.984.62A.5.5 0 006.12.173l-6 7a.5.5 0 00.379.825h5.359l-.844 3.38a.5.5 0 00.864.445l6-7a.5.5 0 00.075-.534z"></path>
                                        </svg>
                                        <span>Special Offer</span>
                                    </div>
                                    <!-- Rating -->
                                    <div class="flex items-center f_ mr-2">
                                        <!-- Stars -->
                                        <div class="flex lf">
                                            <button>
                                                <span class="tc">1 star</span>
                                                <svg class="o_ sq dd yl" viewBox="0 0 16 16">
                                                    <path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path>
                                                </svg>
                                            </button>
                                            <button>
                                                <span class="tc">2 stars</span>
                                                <svg class="o_ sq dd yl" viewBox="0 0 16 16">
                                                    <path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path>
                                                </svg>
                                            </button>
                                            <button>
                                                <span class="tc">3 stars</span>
                                                <svg class="o_ sq dd yl" viewBox="0 0 16 16">
                                                    <path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path>
                                                </svg>
                                            </button>
                                            <button>
                                                <span class="tc">4 stars</span>
                                                <svg class="o_ sq dd yl" viewBox="0 0 16 16">
                                                    <path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path>
                                                </svg>
                                            </button>
                                            <button>
                                                <span class="tc">5 stars</span>
                                                <svg class="o_ sq dd yd" viewBox="0 0 16 16">
                                                    <path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path>
                                                </svg>
                                            </button>
                                        </div>
                                        <!-- Rate -->
                                        <div class="inline-flex text-sm gm yo">4.2</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Image -->
                            <figure class="rb">
                                <img class="ox rounded-sm" src="images/product-image.jpg" width="640" height="360" alt="Product">
                            </figure>

                            <!-- Product content -->
                            <div>
                                <h2 class="gh gk text-slate-800 font-bold in">Overview</h2>
                                <p class="rb">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua u t enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <p class="rb">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                <ul class="ft fe lt rb">
                                    <li>E-commerce: Better lorem ipsum generator.</li>
                                    <li>Booking: Lorem ipsum post generator.</li>
                                    <li>Retail: Better lorem ipsum generator.</li>
                                    <li>Services: Better lorem ipsum generator.</li>
                                </ul>
                                <blockquote class="text-slate-800 gw rb">
                                    “Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.”
                                </blockquote>
                            </div>

                            <hr class="ru cg border-slate-200">

                            <!-- Reviews -->
                            <div>
                                <h2 class="gh gk text-slate-800 font-bold in">Featured Reviews (44)</h2>
                                <ul class="la ru">
                                    <!-- Review -->
                                    <li>
                                        <div class="flex items-center in">
                                            <img class="un or rounded-full rk" src="images/user-32-07.jpg" width="32" height="32" alt="User 07">
                                            <div>
                                                <div class="text-sm gg text-slate-800 rx">Danielle Mark</div>
                                                <!-- Rating -->
                                                <div class="flex items-center f_">
                                                    <!-- Stars -->
                                                    <div class="flex lf">
                                                        <button>
                                                            <span class="tc">1 star</span>
                                                            <svg class="o_ sq dd yl" viewBox="0 0 16 16">
                                                                <path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path>
                                                            </svg>
                                                        </button>
                                                        <button>
                                                            <span class="tc">2 stars</span>
                                                            <svg class="o_ sq dd yl" viewBox="0 0 16 16">
                                                                <path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path>
                                                            </svg>
                                                        </button>
                                                        <button>
                                                            <span class="tc">3 stars</span>
                                                            <svg class="o_ sq dd yl" viewBox="0 0 16 16">
                                                                <path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path>
                                                            </svg>
                                                        </button>
                                                        <button>
                                                            <span class="tc">4 stars</span>
                                                            <svg class="o_ sq dd yl" viewBox="0 0 16 16">
                                                                <path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path>
                                                            </svg>
                                                        </button>
                                                        <button>
                                                            <span class="tc">5 stars</span>
                                                            <svg class="o_ sq dd yd" viewBox="0 0 16 16">
                                                                <path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <!-- Rate -->
                                                    <div class="inline-flex text-sm gm yo">4.6</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-sm gw">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.”</div>                                            
                                    </li>
                                    <!-- Review -->
                                    <li>
                                        <div class="flex items-center in">
                                            <img class="un or rounded-full rk" src="images/user-32-05.jpg" width="32" height="32" alt="User 05">
                                            <div>
                                                <div class="text-sm gg text-slate-800 rx">Marija Urkjulz</div>
                                                <!-- Rating -->
                                                <div class="flex items-center f_">
                                                    <!-- Stars -->
                                                    <div class="flex lf">
                                                        <button>
                                                            <span class="tc">1 star</span>
                                                            <svg class="o_ sq dd yl" viewBox="0 0 16 16">
                                                                <path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path>
                                                            </svg>
                                                        </button>
                                                        <button>
                                                            <span class="tc">2 stars</span>
                                                            <svg class="o_ sq dd yl" viewBox="0 0 16 16">
                                                                <path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path>
                                                            </svg>
                                                        </button>
                                                        <button>
                                                            <span class="tc">3 stars</span>
                                                            <svg class="o_ sq dd yl" viewBox="0 0 16 16">
                                                                <path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path>
                                                            </svg>
                                                        </button>
                                                        <button>
                                                            <span class="tc">4 stars</span>
                                                            <svg class="o_ sq dd yl" viewBox="0 0 16 16">
                                                                <path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path>
                                                            </svg>
                                                        </button>
                                                        <button>
                                                            <span class="tc">5 stars</span>
                                                            <svg class="o_ sq dd yl" viewBox="0 0 16 16">
                                                                <path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <!-- Rate -->
                                                    <div class="inline-flex text-sm gm yo">4.9</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-sm gw">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.”</div>
                                    </li>
                                    <!-- Review -->
                                    <li>
                                        <div class="flex items-center in">
                                            <img class="un or rounded-full rk" src="images/user-32-03.jpg" width="32" height="32" alt="User 03">
                                            <div>
                                                <div class="text-sm gg text-slate-800 rx">Rodrigo Pantoja</div>
                                                <!-- Rating -->
                                                <div class="flex items-center f_">
                                                    <!-- Stars -->
                                                    <div class="flex lf">
                                                        <button>
                                                            <span class="tc">1 star</span>
                                                            <svg class="o_ sq dd yl" viewBox="0 0 16 16">
                                                                <path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path>
                                                            </svg>
                                                        </button>
                                                        <button>
                                                            <span class="tc">2 stars</span>
                                                            <svg class="o_ sq dd yl" viewBox="0 0 16 16">
                                                                <path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path>
                                                            </svg>
                                                        </button>
                                                        <button>
                                                            <span class="tc">3 stars</span>
                                                            <svg class="o_ sq dd yl" viewBox="0 0 16 16">
                                                                <path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path>
                                                            </svg>
                                                        </button>
                                                        <button>
                                                            <span class="tc">4 stars</span>
                                                            <svg class="o_ sq dd yl" viewBox="0 0 16 16">
                                                                <path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path>
                                                            </svg>
                                                        </button>
                                                        <button>
                                                            <span class="tc">5 stars</span>
                                                            <svg class="o_ sq dd yd" viewBox="0 0 16 16">
                                                                <path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <!-- Rate -->
                                                    <div class="inline-flex text-sm gm yo">4.4</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-sm gw">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.”</div>
                                    </li>
                                    <!-- Review -->
                                    <li>
                                        <div class="flex items-center in">
                                            <img class="un or rounded-full rk" src="images/user-32-04.jpg" width="32" height="32" alt="User 04">
                                            <div>
                                                <div class="text-sm gg text-slate-800 rx">Juan Johnson</div>
                                                <!-- Rating -->
                                                <div class="flex items-center f_">
                                                    <!-- Stars -->
                                                    <div class="flex lf">
                                                        <button>
                                                            <span class="tc">1 star</span>
                                                            <svg class="o_ sq dd yl" viewBox="0 0 16 16">
                                                                <path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path>
                                                            </svg>
                                                        </button>
                                                        <button>
                                                            <span class="tc">2 stars</span>
                                                            <svg class="o_ sq dd yl" viewBox="0 0 16 16">
                                                                <path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path>
                                                            </svg>
                                                        </button>
                                                        <button>
                                                            <span class="tc">3 stars</span>
                                                            <svg class="o_ sq dd yl" viewBox="0 0 16 16">
                                                                <path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path>
                                                            </svg>
                                                        </button>
                                                        <button>
                                                            <span class="tc">4 stars</span>
                                                            <svg class="o_ sq dd yl" viewBox="0 0 16 16">
                                                                <path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path>
                                                            </svg>
                                                        </button>
                                                        <button>
                                                            <span class="tc">5 stars</span>
                                                            <svg class="o_ sq dd yl" viewBox="0 0 16 16">
                                                                <path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <!-- Rate -->
                                                    <div class="inline-flex text-sm gm yo">4.9</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-sm gw">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.”</div>
                                    </li>
                                </ul>
                                <!-- Load More -->
                                <div class="gu">
                                    <button class="btn bg-white border-slate-200 hover--border-slate-300 text-indigo-500 hover--text-slate-600">Load More Reviews</button>
                                </div>
                            </div>

                            <hr class="ru cg border-slate-200">

                            <!-- Related -->
                            <div>
                                <h2 class="gh gk text-slate-800 font-bold in">Frequently Bought Together</h2>
                                <ul class="ln _k ru">
                                    <!-- Related item -->
                                    <li class="_u items-center">
                                        <a class="block rw kj iv qf ttb af" href="#0">
                                            <img class="rounded-sm" src="images/related-product-01.jpg" width="200" height="142" alt="Product 01">
                                        </a>
                                        <div class="al">
                                            <a href="#0">
                                                <h3 class="gv gg text-slate-800 rx">The Complete Front-End Development Course!</h3>
                                            </a>
                                            <div class="text-sm in">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</div>
                                            <!-- Rating and price -->
                                            <div class="flex flex-wrap items-center f_">
                                                <!-- Rating -->
                                                <div class="flex items-center f_">
                                                    <!-- Stars -->
                                                    <div class="flex lf">
                                                        <button>
                                                            <span class="tc">1 star</span>
                                                            <svg class="o_ sq dd yl" viewBox="0 0 16 16">
                                                                <path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path>
                                                            </svg>
                                                        </button>
                                                        <button>
                                                            <span class="tc">2 stars</span>
                                                            <svg class="o_ sq dd yl" viewBox="0 0 16 16">
                                                                <path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path>
                                                            </svg>
                                                        </button>
                                                        <button>
                                                            <span class="tc">3 stars</span>
                                                            <svg class="o_ sq dd yl" viewBox="0 0 16 16">
                                                                <path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path>
                                                            </svg>
                                                        </button>
                                                        <button>
                                                            <span class="tc">4 stars</span>
                                                            <svg class="o_ sq dd yl" viewBox="0 0 16 16">
                                                                <path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path>
                                                            </svg>
                                                        </button>
                                                        <button>
                                                            <span class="tc">5 stars</span>
                                                            <svg class="o_ sq dd yd" viewBox="0 0 16 16">
                                                                <path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <!-- Rate -->
                                                    <div class="inline-flex text-sm gm yo">4.2</div>
                                                </div>
                                                <div class="yt">·</div>
                                                <!-- Price -->
                                                <div>
                                                    <div class="inline-flex text-sm gm hx yr rounded-full gu vg vh">$89.00</div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- Related item -->
                                    <li class="_u items-center">
                                        <a class="block rw kj iv qf ttb af" href="#0">
                                            <img class="rounded-sm" src="images/related-product-02.jpg" width="200" height="142" alt="Product 02">
                                        </a>
                                        <div class="al">
                                            <a href="#0">
                                                <h3 class="gv gg text-slate-800 rx">Web Development Ultimate Course 2021</h3>
                                            </a>
                                            <div class="text-sm in">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</div>
                                            <!-- Rating and price -->
                                            <div class="flex flex-wrap items-center f_">
                                                <!-- Rating -->
                                                <div class="flex items-center f_">
                                                    <!-- Stars -->
                                                    <div class="flex lf">
                                                        <button>
                                                            <span class="tc">1 star</span>
                                                            <svg class="o_ sq dd yl" viewBox="0 0 16 16">
                                                                <path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path>
                                                            </svg>
                                                        </button>
                                                        <button>
                                                            <span class="tc">2 stars</span>
                                                            <svg class="o_ sq dd yl" viewBox="0 0 16 16">
                                                                <path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path>
                                                            </svg>
                                                        </button>
                                                        <button>
                                                            <span class="tc">3 stars</span>
                                                            <svg class="o_ sq dd yl" viewBox="0 0 16 16">
                                                                <path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path>
                                                            </svg>
                                                        </button>
                                                        <button>
                                                            <span class="tc">4 stars</span>
                                                            <svg class="o_ sq dd yl" viewBox="0 0 16 16">
                                                                <path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path>
                                                            </svg>
                                                        </button>
                                                        <button>
                                                            <span class="tc">5 stars</span>
                                                            <svg class="o_ sq dd yd" viewBox="0 0 16 16">
                                                                <path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <!-- Rate -->
                                                    <div class="inline-flex text-sm gm yo">4.2</div>
                                                </div>
                                                <div class="yt">·</div>
                                                <!-- Price -->
                                                <div>
                                                    <div class="inline-flex text-sm gm hx yr rounded-full gu vg vh">$89.00</div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- Related item -->
                                    <li class="_u items-center">
                                        <a class="block rw kj iv qf ttb af" href="#0">
                                            <img class="rounded-sm" src="images/related-product-03.jpg" width="200" height="142" alt="Product 03">
                                        </a>
                                        <div class="al">
                                            <a href="#0">
                                                <h3 class="gv gg text-slate-800 rx">Full-Stack JavaScript Course!</h3>
                                            </a>
                                            <div class="text-sm in">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</div>
                                            <!-- Rating and price -->
                                            <div class="flex flex-wrap items-center f_">
                                                <!-- Rating -->
                                                <div class="flex items-center f_">
                                                    <!-- Stars -->
                                                    <div class="flex lf">
                                                        <button>
                                                            <span class="tc">1 star</span>
                                                            <svg class="o_ sq dd yl" viewBox="0 0 16 16">
                                                                <path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path>
                                                            </svg>
                                                        </button>
                                                        <button>
                                                            <span class="tc">2 stars</span>
                                                            <svg class="o_ sq dd yl" viewBox="0 0 16 16">
                                                                <path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path>
                                                            </svg>
                                                        </button>
                                                        <button>
                                                            <span class="tc">3 stars</span>
                                                            <svg class="o_ sq dd yl" viewBox="0 0 16 16">
                                                                <path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path>
                                                            </svg>
                                                        </button>
                                                        <button>
                                                            <span class="tc">4 stars</span>
                                                            <svg class="o_ sq dd yl" viewBox="0 0 16 16">
                                                                <path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path>
                                                            </svg>
                                                        </button>
                                                        <button>
                                                            <span class="tc">5 stars</span>
                                                            <svg class="o_ sq dd yd" viewBox="0 0 16 16">
                                                                <path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <!-- Rate -->
                                                    <div class="inline-flex text-sm gm yo">4.2</div>
                                                </div>
                                                <div class="yt">·</div>
                                                <!-- Price -->
                                                <div>
                                                    <div class="inline-flex text-sm gm hx yr rounded-full gu vg vh">$89.00</div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <!-- Load More -->
                                <div class="gu">
                                    <button class="btn bg-white border-slate-200 hover--border-slate-300 text-indigo-500 hover--text-slate-600">Load More Stuff</button>
                                </div>
                            </div>

                            <hr class="ru cg border-slate-200">
                            
                        </div>

                        <!-- Sidebar -->
                        <div>
                            <div class="bg-white vi bh rounded-sm border border-slate-200 ten tty">
                                <div class="text-sm text-slate-800 gg it">Select a Package</div>
                                <ul class="fz _u _x _j tep ted tec rw">
                                    <li>
                                        <button class="ox sz go vl va rounded bg-white border border-slate-200 hover--border-slate-300 bd we wi">
                                            <div class="flex flex-wrap items-center fh im">
                                                <span class="gg text-slate-800">Essential</span>
                                                <span class="gm yr">$39.00</span>
                                            </div>
                                            <div class="text-sm">Lorem ipsum dolor sit amet elit sed do eiusmod.</div>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="ox sz go vl va rounded bg-white cp hr bd we wi">
                                            <div class="flex flex-wrap items-center fh im">
                                                <span class="gg text-slate-800">Premium <span class="gp gw text-indigo-500 gf">Best Value ✨</span></span>
                                                <span class="gm yr">$69.00</span>
                                            </div>
                                            <div class="text-sm">Lorem ipsum dolor sit amet elit sed do eiusmod.</div>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="ox sz go vl va rounded bg-white border border-slate-200 hover--border-slate-300 bd we wi">
                                            <div class="flex flex-wrap items-center fh im">
                                                <span class="gg text-slate-800">Complete</span>
                                                <span class="gm yr">$89.00</span>
                                            </div>
                                            <div class="text-sm">Lorem ipsum dolor sit amet elit sed do eiusmod.</div>
                                        </button>
                                    </li>
                                </ul>
                                <div class="rw">
                                    <button class="btn ox hd wq ye" href="#0">Buy Now - $69.00</button>
                                </div>
                                <div class="gp text-slate-500 gw gu">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do <a class="bt xb" href="#0">Terms</a>.</div>
                            </div>
                        </div>

                    </div>

                </div>
            </main>

        </div>

    </div>

<script src="admin/js/jsof_index.js"></script>

<script async src='https://www.googletagmanager.com/gtag/js?id=UA-125021779-1'></script><script>window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('config', 'UA-125021779-1', { 'anonymize_ip': true });</script><script>console.log("%cImportant!", "color: blue; font-size: x-large");console.log("%cThe page you are viewing is for demo purposes only. CSS and HTML have been minified and class names have been shortened to improve the page load time. Download our templates from https://cruip.com/ 😉", "font-size: large");</script><script>const pagesList = [{"name":"Dashboard","url":"https://preview.cruip.com/mosaic/index.html","active":false},{"name":"Analytics","url":"https://preview.cruip.com/mosaic/analytics.html","active":false},{"name":"Fintech","url":"https://preview.cruip.com/mosaic/fintech.html","active":false},{"name":"Customers","url":"https://preview.cruip.com/mosaic/customers.html","active":false},{"name":"Orders","url":"https://preview.cruip.com/mosaic/orders.html","active":false},{"name":"Invoices","url":"https://preview.cruip.com/mosaic/invoices.html","active":false},{"name":"Shop","url":"https://preview.cruip.com/mosaic/shop.html","active":false},{"name":"Shop 2","url":"https://preview.cruip.com/mosaic/shop-2.html","active":false},{"name":"Single Product","url":"https://preview.cruip.com/mosaic/product.html","active":true},{"name":"Cart","url":"https://preview.cruip.com/mosaic/cart.html","active":false},{"name":"Cart 2","url":"https://preview.cruip.com/mosaic/cart-2.html","active":false},{"name":"Cart 3","url":"https://preview.cruip.com/mosaic/cart-3.html","active":false},{"name":"Pay","url":"https://preview.cruip.com/mosaic/pay.html","active":false},{"name":"Campaigns","url":"https://preview.cruip.com/mosaic/campaigns.html","active":false},{"name":"Users Tabs","url":"https://preview.cruip.com/mosaic/users-tabs.html","active":false},{"name":"Users Tiles","url":"https://preview.cruip.com/mosaic/users-tiles.html","active":false},{"name":"Profile","url":"https://preview.cruip.com/mosaic/profile.html","active":false},{"name":"Feed","url":"https://preview.cruip.com/mosaic/feed.html","active":false},{"name":"Forum","url":"https://preview.cruip.com/mosaic/forum.html","active":false},{"name":"Forum Post","url":"https://preview.cruip.com/mosaic/forum-post.html","active":false},{"name":"Meetups","url":"https://preview.cruip.com/mosaic/meetups.html","active":false},{"name":"Meetups Post","url":"https://preview.cruip.com/mosaic/meetups-post.html","active":false},{"name":"Cards","url":"https://preview.cruip.com/mosaic/credit-cards.html","active":false},{"name":"Transactions","url":"https://preview.cruip.com/mosaic/transactions.html","active":false},{"name":"Transaction Details","url":"https://preview.cruip.com/mosaic/transaction-details.html","active":false},{"name":"Messages","url":"https://preview.cruip.com/mosaic/messages.html","active":false},{"name":"Tasks","url":"https://preview.cruip.com/mosaic/tasks.html","active":false},{"name":"Inbox","url":"https://preview.cruip.com/mosaic/inbox.html","active":false},{"name":"Calendar","url":"https://preview.cruip.com/mosaic/calendar.html","active":false},{"name":"Applications","url":"https://preview.cruip.com/mosaic/applications.html","active":false},{"name":"My Account","url":"https://preview.cruip.com/mosaic/settings.html","active":false},{"name":"My Notifications","url":"https://preview.cruip.com/mosaic/notifications.html","active":false},{"name":"Connected Apps","url":"https://preview.cruip.com/mosaic/connected-apps.html","active":false},{"name":"Plans","url":"https://preview.cruip.com/mosaic/plans.html","active":false},{"name":"Billing & Invoices","url":"https://preview.cruip.com/mosaic/billing.html","active":false},{"name":"Give Feedback","url":"https://preview.cruip.com/mosaic/feedback.html","active":false},{"name":"Changelog","url":"https://preview.cruip.com/mosaic/changelog.html","active":false},{"name":"Roadmap","url":"https://preview.cruip.com/mosaic/roadmap.html","active":false},{"name":"FAQs","url":"https://preview.cruip.com/mosaic/faqs.html","active":false},{"name":"Empty State","url":"https://preview.cruip.com/mosaic/empty-state.html","active":false},{"name":"Page Not Found","url":"https://preview.cruip.com/mosaic/404.html","active":false},{"name":"Sign in","url":"https://preview.cruip.com/mosaic/signin.html","active":false},{"name":"Sign up","url":"https://preview.cruip.com/mosaic/signup.html","active":false},{"name":"Reset password","url":"https://preview.cruip.com/mosaic/reset-password.html","active":false},{"name":"Onboarding 1","url":"https://preview.cruip.com/mosaic/onboarding-01.html","active":false},{"name":"Onboarding 2","url":"https://preview.cruip.com/mosaic/onboarding-02.html","active":false},{"name":"Onboarding 3","url":"https://preview.cruip.com/mosaic/onboarding-03.html","active":false},{"name":"Onboarding 4","url":"https://preview.cruip.com/mosaic/onboarding-04.html","active":false},{"name":"Button","url":"https://preview.cruip.com/mosaic/component-button.html","active":false},{"name":"Input Form","url":"https://preview.cruip.com/mosaic/component-form.html","active":false},{"name":"Dropdown","url":"https://preview.cruip.com/mosaic/component-dropdown.html","active":false},{"name":"Alert & Banner","url":"https://preview.cruip.com/mosaic/component-alert.html","active":false},{"name":"Modal","url":"https://preview.cruip.com/mosaic/component-modal.html","active":false},{"name":"Pagination","url":"https://preview.cruip.com/mosaic/component-pagination.html","active":false},{"name":"Tabs","url":"https://preview.cruip.com/mosaic/component-tabs.html","active":false},{"name":"Breadcrumb","url":"https://preview.cruip.com/mosaic/component-breadcrumb.html","active":false},{"name":"Badge","url":"https://preview.cruip.com/mosaic/component-badge.html","active":false},{"name":"Avatar","url":"https://preview.cruip.com/mosaic/component-avatar.html","active":false},{"name":"Tooltip","url":"https://preview.cruip.com/mosaic/component-tooltip.html","active":false},{"name":"Accordion","url":"https://preview.cruip.com/mosaic/component-accordion.html","active":false},{"name":"Icons","url":"https://preview.cruip.com/mosaic/component-icons.html","active":false}];if(window != top){window.parent.postMessage(pagesList, "https://cruip.com/")};</script></body>
<!-- Mirrored from preview.cruip.com/mosaic/product.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Mar 2022 08:17:56 GMT -->
</html>