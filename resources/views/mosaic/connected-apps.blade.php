@extends('layouts.admin.app')
@section('contents')
<div class="va jn teb vf ox uz ri">
    <!-- Page header -->
    <div class="ry">
        <!-- Title -->
        <h1 class="gc zc text-slate-800 font-bold">Account Settings ✨</h1>
    </div>

    <div class="bg-white bh rounded-sm ry">
        <div class="flex fu qm jx">
            <!-- Sidebar -->
            <div class="flex fa lj ta qe zt vx mt cm zi zs border-slate-200 uk ze">
                <div>
                    <div class="gp gg yt gb it">Business settings</div>
                    <ul class="flex fa qe rk jq">
                        <li class="sr jq jz">
                            <a class="flex items-center vm vc rounded ct" :class="settingsPanel === 'account' &amp;&amp; 'po'" href="settings.html">
                                <svg class="o_ sq af dd yt mr-2" :class="settingsPanel === 'account' &amp;&amp; 'text-indigo-400'" viewBox="0 0 16 16">
                                    <path
                                        d="M12.311 9.527c-1.161-.393-1.85-.825-2.143-1.175A3.991 3.991 0 0012 5V4c0-2.206-1.794-4-4-4S4 1.794 4 4v1c0 1.406.732 2.639 1.832 3.352-.292.35-.981.782-2.142 1.175A3.942 3.942 0 001 13.26V16h14v-2.74c0-1.69-1.081-3.19-2.689-3.733zM6 4c0-1.103.897-2 2-2s2 .897 2 2v1c0 1.103-.897 2-2 2s-2-.897-2-2V4zm7 10H3v-.74c0-.831.534-1.569 1.33-1.838 1.845-.624 3-1.436 3.452-2.422h.436c.452.986 1.607 1.798 3.453 2.422A1.943 1.943 0 0113 13.26V14z"
                                    ></path>
                                </svg>
                                <span class="text-sm gm gz" :class="settingsPanel === 'account' ? 'text-indigo-500' : 'xp'">My Account</span>
                            </a>
                        </li>
                        <li class="sr jq jz">
                            <a class="flex items-center vm vc rounded ct" :class="settingsPanel === 'notifications' &amp;&amp; 'po'" href="notifications.html">
                                <svg class="o_ sq af dd yt mr-2" :class="settingsPanel === 'notifications' &amp;&amp; 'text-indigo-400'" viewBox="0 0 16 16">
                                    <path
                                        d="M14.3.3c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4l-8 8c-.2.2-.4.3-.7.3-.3 0-.5-.1-.7-.3-.4-.4-.4-1 0-1.4l8-8zM15 7c.6 0 1 .4 1 1 0 4.4-3.6 8-8 8s-8-3.6-8-8 3.6-8 8-8c.6 0 1 .4 1 1s-.4 1-1 1C4.7 2 2 4.7 2 8s2.7 6 6 6 6-2.7 6-6c0-.6.4-1 1-1z"
                                    ></path>
                                </svg>
                                <span class="text-sm gm gz" :class="settingsPanel === 'notifications' ? 'text-indigo-500' : 'xp'">My Notifications</span>
                            </a>
                        </li>
                        <li class="sr jq jz">
                            <a class="flex items-center vm vc rounded ct" :class="settingsPanel === 'apps' &amp;&amp; 'po'" href="connected-apps.html">
                                <svg class="o_ sq af dd yt mr-2" :class="settingsPanel === 'apps' &amp;&amp; 'text-indigo-400'" viewBox="0 0 16 16">
                                    <path d="M3.414 2L9 7.586V16H7V8.414l-5-5V6H0V1a1 1 0 011-1h5v2H3.414zM15 0a1 1 0 011 1v5h-2V3.414l-3.172 3.172-1.414-1.414L12.586 2H10V0h5z"></path>
                                </svg>
                                <span class="text-sm gm gz" :class="settingsPanel === 'apps' ? 'text-indigo-500' : 'xp'">Connected Apps</span>
                            </a>
                        </li>
                        <li class="sr jq jz">
                            <a class="flex items-center vm vc rounded ct" :class="settingsPanel === 'plans' &amp;&amp; 'po'" href="plans.html">
                                <svg class="o_ sq af dd yt mr-2" :class="settingsPanel === 'plans' &amp;&amp; 'text-indigo-400'" viewBox="0 0 16 16">
                                    <path d="M5 9h11v2H5V9zM0 9h3v2H0V9zm5 4h6v2H5v-2zm-5 0h3v2H0v-2zm5-8h7v2H5V5zM0 5h3v2H0V5zm5-4h11v2H5V1zM0 1h3v2H0V1z"></path>
                                </svg>
                                <span class="text-sm gm gz" :class="settingsPanel === 'plans' ? 'text-indigo-500' : 'xp'">Plans</span>
                            </a>
                        </li>
                        <li class="sr jq jz">
                            <a class="flex items-center vm vc rounded ct" :class="settingsPanel === 'billing' &amp;&amp; 'po'" href="billing.html">
                                <svg class="o_ sq af dd yt mr-2" :class="settingsPanel === 'billing' &amp;&amp; 'text-indigo-400'" viewBox="0 0 16 16">
                                    <path d="M15 4c.6 0 1 .4 1 1v10c0 .6-.4 1-1 1H3c-1.7 0-3-1.3-3-3V3c0-1.7 1.3-3 3-3h7c.6 0 1 .4 1 1v3h4zM2 3v1h7V2H3c-.6 0-1 .4-1 1zm12 11V6H2v7c0 .6.4 1 1 1h11zm-3-5h2v2h-2V9z"></path>
                                </svg>
                                <span class="text-sm gm gz" :class="settingsPanel === 'billing' ? 'text-indigo-500' : 'xp'">Billing &amp; Invoices</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <div class="gp gg yt gb it">Experience</div>
                    <ul class="flex fa qe rk jq">
                        <li class="sr jq jz">
                            <a class="flex items-center vm vc rounded ct" :class="settingsPanel === 'feedback' &amp;&amp; 'po'" href="feedback.html">
                                <svg class="o_ sq af dd yt mr-2" :class="settingsPanel === 'feedback' &amp;&amp; 'text-indigo-400'" viewBox="0 0 16 16">
                                    <path
                                        d="M7.001 3h2v4h-2V3zm1 7a1 1 0 110-2 1 1 0 010 2zM15 16a1 1 0 01-.6-.2L10.667 13H1a1 1 0 01-1-1V1a1 1 0 011-1h14a1 1 0 011 1v14a1 1 0 01-1 1zM2 11h9a1 1 0 01.6.2L14 13V2H2v9z"
                                    ></path>
                                </svg>
                                <span class="text-sm gm gz" :class="settingsPanel === 'feedback' ? 'text-indigo-500' : 'xp'">Give Feedback</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Panel -->
            <div class="al">
                <!-- Panel body -->
                <div class="dz">
                    <h2 class="gc text-slate-800 font-bold ic">Connected Apps</h2>

                    <!-- General -->
                    <div class="rb">
                        <!-- Filters -->
                        <div class="rw cm border-slate-200">
                            <ul class="text-sm gm flex fa rl k_ zw lj ta">
                                <li class="mg ib last--mr-0 wm jf te_ wx jl tej">
                                    <a class="text-indigo-500 ct" href="#0">View All</a>
                                </li>
                                <li class="mg ib last--mr-0 wm jf te_ wx jl tej">
                                    <a class="text-slate-500 hover--text-slate-600 ct" href="#0">Utility</a>
                                </li>
                                <li class="mg ib last--mr-0 wm jf te_ wx jl tej">
                                    <a class="text-slate-500 hover--text-slate-600 ct" href="#0">Marketing</a>
                                </li>
                                <li class="mg ib last--mr-0 wm jf te_ wx jl tej">
                                    <a class="text-slate-500 hover--text-slate-600 ct" href="#0">Development</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Connected Apps cards -->
                    <section class="ms cm border-slate-200">
                        <div class="sx fi fd">
                            <!-- Card 1 -->
                            <div class="nk tts 2xl:col-span-4 bg-white shadow-md rounded-sm border border-slate-200">
                                <!-- Card content -->
                                <div class="flex fu sz vi">
                                    <div class="al">
                                        <header class="flex items-center rw">
                                            <div class="ur oi rounded-full af py px ds rk">
                                                <svg class="ur oi dd ye" viewBox="0 0 40 40">
                                                    <path
                                                        d="M26.946 18.005a.583.583 0 00-.53-.34h-6.252l.985-3.942a.583.583 0 00-1.008-.52l-7 8.167a.583.583 0 00.442.962h6.252l-.984 3.943a.583.583 0 001.008.52l7-8.167a.583.583 0 00.087-.623z"
                                                    ></path>
                                                </svg>
                                            </div>
                                            <h3 class="gv text-slate-800 gg">MaterialStack</h3>
                                        </header>
                                        <div class="text-sm">Lorem ipsum dolor sit amet eiusmod sed do eiusmod tempor.</div>
                                    </div>
                                    <!-- Card footer -->
                                    <footer class="ix">
                                        <div class="flex flex-wrap fh items-center">
                                            <!-- Left side -->
                                            <div class="flex lo">
                                                <div class="flex items-center yt">
                                                    <svg class="o_ sq af dd ik" viewBox="0 0 16 16">
                                                        <path
                                                            d="M14.14 9.585a2.5 2.5 0 00-3.522 3.194c-.845.63-1.87.97-2.924.971a4.979 4.979 0 01-1.113-.135 4.436 4.436 0 01-1.343 1.682 6.91 6.91 0 006.9-1.165 2.5 2.5 0 002-4.547h.002zM10.125 2.188a2.5 2.5 0 10-.4 2.014 5.027 5.027 0 012.723 3.078c.148-.018.297-.028.446-.03a4.5 4.5 0 011.7.334 7.023 7.023 0 00-4.469-5.396zM4.663 10.5a2.49 2.49 0 00-1.932-1.234 4.624 4.624 0 01-.037-.516 4.97 4.97 0 011.348-3.391 4.456 4.456 0 01-.788-2.016A6.989 6.989 0 00.694 8.75c.004.391.04.781.11 1.166a2.5 2.5 0 103.86.584z"
                                                        ></path>
                                                    </svg>
                                                    <div class="text-sm text-slate-500">4K+</div>
                                                </div>
                                                <div class="flex items-center yl">
                                                    <svg class="o_ sq af dd ik" viewBox="0 0 16 16">
                                                        <path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path>
                                                    </svg>
                                                    <div class="text-sm yo">4.7</div>
                                                </div>
                                            </div>
                                            <!-- Right side -->
                                            <button class="tt border-slate-200 hover--border-slate-300 bd flex items-center">
                                                <svg class="w-3 h-3 af dd yf mr-2" viewBox="0 0 12 12">
                                                    <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z"></path>
                                                </svg>
                                                <span>Connected</span>
                                            </button>
                                        </div>
                                    </footer>
                                </div>
                            </div>
                            <!-- Card 2 -->
                            <div class="nk tts 2xl:col-span-4 bg-white shadow-md rounded-sm border border-slate-200">
                                <!-- Card content -->
                                <div class="flex fu sz vi">
                                    <div class="al">
                                        <header class="flex items-center rw">
                                            <div class="ur oi rounded-full af py pk do rk">
                                                <svg class="ur oi dd ye" viewBox="0 0 40 40">
                                                    <path
                                                        d="M26.946 18.005a.583.583 0 00-.53-.34h-6.252l.985-3.942a.583.583 0 00-1.008-.52l-7 8.167a.583.583 0 00.442.962h6.252l-.984 3.943a.583.583 0 001.008.52l7-8.167a.583.583 0 00.087-.623z"
                                                    ></path>
                                                </svg>
                                            </div>
                                            <h3 class="gv text-slate-800 gg">MaterialStack</h3>
                                        </header>
                                        <div class="text-sm">Lorem ipsum dolor sit amet eiusmod sed do eiusmod tempor.</div>
                                    </div>
                                    <!-- Card footer -->
                                    <footer class="ix">
                                        <div class="flex flex-wrap fh items-center">
                                            <!-- Left side -->
                                            <div class="flex lo">
                                                <div class="flex items-center yt">
                                                    <svg class="o_ sq af dd ik" viewBox="0 0 16 16">
                                                        <path
                                                            d="M14.14 9.585a2.5 2.5 0 00-3.522 3.194c-.845.63-1.87.97-2.924.971a4.979 4.979 0 01-1.113-.135 4.436 4.436 0 01-1.343 1.682 6.91 6.91 0 006.9-1.165 2.5 2.5 0 002-4.547h.002zM10.125 2.188a2.5 2.5 0 10-.4 2.014 5.027 5.027 0 012.723 3.078c.148-.018.297-.028.446-.03a4.5 4.5 0 011.7.334 7.023 7.023 0 00-4.469-5.396zM4.663 10.5a2.49 2.49 0 00-1.932-1.234 4.624 4.624 0 01-.037-.516 4.97 4.97 0 011.348-3.391 4.456 4.456 0 01-.788-2.016A6.989 6.989 0 00.694 8.75c.004.391.04.781.11 1.166a2.5 2.5 0 103.86.584z"
                                                        ></path>
                                                    </svg>
                                                    <div class="text-sm text-slate-500">4K+</div>
                                                </div>
                                                <div class="flex items-center yl">
                                                    <svg class="o_ sq af dd ik" viewBox="0 0 16 16">
                                                        <path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path>
                                                    </svg>
                                                    <div class="text-sm yo">4.7</div>
                                                </div>
                                            </div>
                                            <!-- Right side -->
                                            <button class="tt border-slate-200 hover--border-slate-300 bd flex items-center">
                                                <svg class="w-3 h-3 af dd yf mr-2" viewBox="0 0 12 12">
                                                    <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z"></path>
                                                </svg>
                                                <span>Connected</span>
                                            </button>
                                        </div>
                                    </footer>
                                </div>
                            </div>
                            <!-- Card 3 -->
                            <div class="nk tts 2xl:col-span-4 bg-white shadow-md rounded-sm border border-slate-200">
                                <!-- Card content -->
                                <div class="flex fu sz vi">
                                    <div class="al">
                                        <header class="flex items-center rw">
                                            <div class="ur oi rounded-full af py p_ du rk">
                                                <svg class="ur oi dd ye" viewBox="0 0 40 40">
                                                    <path
                                                        d="M26.946 18.005a.583.583 0 00-.53-.34h-6.252l.985-3.942a.583.583 0 00-1.008-.52l-7 8.167a.583.583 0 00.442.962h6.252l-.984 3.943a.583.583 0 001.008.52l7-8.167a.583.583 0 00.087-.623z"
                                                    ></path>
                                                </svg>
                                            </div>
                                            <h3 class="gv text-slate-800 gg">MaterialStack</h3>
                                        </header>
                                        <div class="text-sm">Lorem ipsum dolor sit amet eiusmod sed do eiusmod tempor.</div>
                                    </div>
                                    <!-- Card footer -->
                                    <footer class="ix">
                                        <div class="flex flex-wrap fh items-center">
                                            <!-- Left side -->
                                            <div class="flex lo">
                                                <div class="flex items-center yt">
                                                    <svg class="o_ sq af dd ik" viewBox="0 0 16 16">
                                                        <path
                                                            d="M14.14 9.585a2.5 2.5 0 00-3.522 3.194c-.845.63-1.87.97-2.924.971a4.979 4.979 0 01-1.113-.135 4.436 4.436 0 01-1.343 1.682 6.91 6.91 0 006.9-1.165 2.5 2.5 0 002-4.547h.002zM10.125 2.188a2.5 2.5 0 10-.4 2.014 5.027 5.027 0 012.723 3.078c.148-.018.297-.028.446-.03a4.5 4.5 0 011.7.334 7.023 7.023 0 00-4.469-5.396zM4.663 10.5a2.49 2.49 0 00-1.932-1.234 4.624 4.624 0 01-.037-.516 4.97 4.97 0 011.348-3.391 4.456 4.456 0 01-.788-2.016A6.989 6.989 0 00.694 8.75c.004.391.04.781.11 1.166a2.5 2.5 0 103.86.584z"
                                                        ></path>
                                                    </svg>
                                                    <div class="text-sm text-slate-500">4K+</div>
                                                </div>
                                                <div class="flex items-center yl">
                                                    <svg class="o_ sq af dd ik" viewBox="0 0 16 16">
                                                        <path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path>
                                                    </svg>
                                                    <div class="text-sm yo">4.7</div>
                                                </div>
                                            </div>
                                            <!-- Right side -->
                                            <button class="tt border-slate-200 hover--border-slate-300 bd flex items-center">
                                                <svg class="w-3 h-3 af dd yf mr-2" viewBox="0 0 12 12">
                                                    <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z"></path>
                                                </svg>
                                                <span>Connected</span>
                                            </button>
                                        </div>
                                    </footer>
                                </div>
                            </div>
                            <!-- Card 4 -->
                            <div class="nk tts 2xl:col-span-4 bg-white shadow-md rounded-sm border border-slate-200">
                                <!-- Card content -->
                                <div class="flex fu sz vi">
                                    <div class="al">
                                        <header class="flex items-center rw">
                                            <div class="ur oi rounded-full af py pj da rk">
                                                <svg class="ur oi dd ye" viewBox="0 0 40 40">
                                                    <path
                                                        d="M26.946 18.005a.583.583 0 00-.53-.34h-6.252l.985-3.942a.583.583 0 00-1.008-.52l-7 8.167a.583.583 0 00.442.962h6.252l-.984 3.943a.583.583 0 001.008.52l7-8.167a.583.583 0 00.087-.623z"
                                                    ></path>
                                                </svg>
                                            </div>
                                            <h3 class="gv text-slate-800 gg">MaterialStack</h3>
                                        </header>
                                        <div class="text-sm">Lorem ipsum dolor sit amet eiusmod sed do eiusmod tempor.</div>
                                    </div>
                                    <!-- Card footer -->
                                    <footer class="ix">
                                        <div class="flex flex-wrap fh items-center">
                                            <!-- Left side -->
                                            <div class="flex lo">
                                                <div class="flex items-center yt">
                                                    <svg class="o_ sq af dd ik" viewBox="0 0 16 16">
                                                        <path
                                                            d="M14.14 9.585a2.5 2.5 0 00-3.522 3.194c-.845.63-1.87.97-2.924.971a4.979 4.979 0 01-1.113-.135 4.436 4.436 0 01-1.343 1.682 6.91 6.91 0 006.9-1.165 2.5 2.5 0 002-4.547h.002zM10.125 2.188a2.5 2.5 0 10-.4 2.014 5.027 5.027 0 012.723 3.078c.148-.018.297-.028.446-.03a4.5 4.5 0 011.7.334 7.023 7.023 0 00-4.469-5.396zM4.663 10.5a2.49 2.49 0 00-1.932-1.234 4.624 4.624 0 01-.037-.516 4.97 4.97 0 011.348-3.391 4.456 4.456 0 01-.788-2.016A6.989 6.989 0 00.694 8.75c.004.391.04.781.11 1.166a2.5 2.5 0 103.86.584z"
                                                        ></path>
                                                    </svg>
                                                    <div class="text-sm text-slate-500">4K+</div>
                                                </div>
                                                <div class="flex items-center yl">
                                                    <svg class="o_ sq af dd ik" viewBox="0 0 16 16">
                                                        <path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path>
                                                    </svg>
                                                    <div class="text-sm yo">4.7</div>
                                                </div>
                                            </div>
                                            <!-- Right side -->
                                            <button class="tt border-slate-200 hover--border-slate-300 bd flex items-center">
                                                <svg class="w-3 h-3 af dd yf mr-2" viewBox="0 0 12 12">
                                                    <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z"></path>
                                                </svg>
                                                <span>Connected</span>
                                            </button>
                                        </div>
                                    </footer>
                                </div>
                            </div>
                            <!-- Card 5 -->
                            <div class="nk tts 2xl:col-span-4 bg-white shadow-md rounded-sm border border-slate-200">
                                <!-- Card content -->
                                <div class="flex fu sz vi">
                                    <div class="al">
                                        <header class="flex items-center rw">
                                            <div class="ur oi rounded-full af py pq df rk">
                                                <svg class="ur oi dd ye" viewBox="0 0 40 40">
                                                    <path
                                                        d="M26.946 18.005a.583.583 0 00-.53-.34h-6.252l.985-3.942a.583.583 0 00-1.008-.52l-7 8.167a.583.583 0 00.442.962h6.252l-.984 3.943a.583.583 0 001.008.52l7-8.167a.583.583 0 00.087-.623z"
                                                    ></path>
                                                </svg>
                                            </div>
                                            <h3 class="gv text-slate-800 gg">MaterialStack</h3>
                                        </header>
                                        <div class="text-sm">Lorem ipsum dolor sit amet eiusmod sed do eiusmod tempor.</div>
                                    </div>
                                    <!-- Card footer -->
                                    <footer class="ix">
                                        <div class="flex flex-wrap fh items-center">
                                            <!-- Left side -->
                                            <div class="flex lo">
                                                <div class="flex items-center yt">
                                                    <svg class="o_ sq af dd ik" viewBox="0 0 16 16">
                                                        <path
                                                            d="M14.14 9.585a2.5 2.5 0 00-3.522 3.194c-.845.63-1.87.97-2.924.971a4.979 4.979 0 01-1.113-.135 4.436 4.436 0 01-1.343 1.682 6.91 6.91 0 006.9-1.165 2.5 2.5 0 002-4.547h.002zM10.125 2.188a2.5 2.5 0 10-.4 2.014 5.027 5.027 0 012.723 3.078c.148-.018.297-.028.446-.03a4.5 4.5 0 011.7.334 7.023 7.023 0 00-4.469-5.396zM4.663 10.5a2.49 2.49 0 00-1.932-1.234 4.624 4.624 0 01-.037-.516 4.97 4.97 0 011.348-3.391 4.456 4.456 0 01-.788-2.016A6.989 6.989 0 00.694 8.75c.004.391.04.781.11 1.166a2.5 2.5 0 103.86.584z"
                                                        ></path>
                                                    </svg>
                                                    <div class="text-sm text-slate-500">4K+</div>
                                                </div>
                                                <div class="flex items-center yl">
                                                    <svg class="o_ sq af dd ik" viewBox="0 0 16 16">
                                                        <path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path>
                                                    </svg>
                                                    <div class="text-sm yo">4.7</div>
                                                </div>
                                            </div>
                                            <!-- Right side -->
                                            <button class="tt border-slate-200 hover--border-slate-300 bd flex items-center">
                                                <svg class="w-3 h-3 af dd yf mr-2" viewBox="0 0 12 12">
                                                    <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z"></path>
                                                </svg>
                                                <span>Connected</span>
                                            </button>
                                        </div>
                                    </footer>
                                </div>
                            </div>
                            <!-- Card 6 -->
                            <div class="nk tts 2xl:col-span-4 bg-white shadow-md rounded-sm border border-slate-200">
                                <!-- Card content -->
                                <div class="flex fu sz vi">
                                    <div class="al">
                                        <header class="flex items-center rw">
                                            <div class="ur oi rounded-full af py pz dl rk">
                                                <svg class="ur oi dd ye" viewBox="0 0 40 40">
                                                    <path
                                                        d="M26.946 18.005a.583.583 0 00-.53-.34h-6.252l.985-3.942a.583.583 0 00-1.008-.52l-7 8.167a.583.583 0 00.442.962h6.252l-.984 3.943a.583.583 0 001.008.52l7-8.167a.583.583 0 00.087-.623z"
                                                    ></path>
                                                </svg>
                                            </div>
                                            <h3 class="gv text-slate-800 gg">MaterialStack</h3>
                                        </header>
                                        <div class="text-sm">Lorem ipsum dolor sit amet eiusmod sed do eiusmod tempor.</div>
                                    </div>
                                    <!-- Card footer -->
                                    <footer class="ix">
                                        <div class="flex flex-wrap fh items-center">
                                            <!-- Left side -->
                                            <div class="flex lo">
                                                <div class="flex items-center yt">
                                                    <svg class="o_ sq af dd ik" viewBox="0 0 16 16">
                                                        <path
                                                            d="M14.14 9.585a2.5 2.5 0 00-3.522 3.194c-.845.63-1.87.97-2.924.971a4.979 4.979 0 01-1.113-.135 4.436 4.436 0 01-1.343 1.682 6.91 6.91 0 006.9-1.165 2.5 2.5 0 002-4.547h.002zM10.125 2.188a2.5 2.5 0 10-.4 2.014 5.027 5.027 0 012.723 3.078c.148-.018.297-.028.446-.03a4.5 4.5 0 011.7.334 7.023 7.023 0 00-4.469-5.396zM4.663 10.5a2.49 2.49 0 00-1.932-1.234 4.624 4.624 0 01-.037-.516 4.97 4.97 0 011.348-3.391 4.456 4.456 0 01-.788-2.016A6.989 6.989 0 00.694 8.75c.004.391.04.781.11 1.166a2.5 2.5 0 103.86.584z"
                                                        ></path>
                                                    </svg>
                                                    <div class="text-sm text-slate-500">4K+</div>
                                                </div>
                                                <div class="flex items-center yl">
                                                    <svg class="o_ sq af dd ik" viewBox="0 0 16 16">
                                                        <path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path>
                                                    </svg>
                                                    <div class="text-sm yo">4.7</div>
                                                </div>
                                            </div>
                                            <!-- Right side -->
                                            <button class="tt border-slate-200 hover--border-slate-300 bd flex items-center">
                                                <svg class="w-3 h-3 af dd yf mr-2" viewBox="0 0 12 12">
                                                    <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z"></path>
                                                </svg>
                                                <span>Connected</span>
                                            </button>
                                        </div>
                                    </footer>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Trending Categories cards -->
                    <section>
                        <h3 class="gh gk text-slate-800 font-bold ir ic">Trending Categories</h3>
                        <div class="sx fi fd">
                            <!-- Card 1 -->
                            <div class="nk tto bg-white shadow-md rounded-sm border border-slate-200">
                                <!-- Card content -->
                                <div class="flex fu sz vi">
                                    <div class="al">
                                        <header>
                                            <h3 class="gv text-slate-800 gg rx">Programming</h3>
                                        </header>
                                    </div>
                                    <!-- Card footer -->
                                    <footer class="iw">
                                        <div class="flex flex-wrap fh items-center">
                                            <!-- Left side -->
                                            <div class="text-sm text-slate-500 gw">400+ Apps</div>
                                            <!-- Right side -->
                                            <a class="text-sm gm text-indigo-500 xu" href="#0">Explore -&gt;</a>
                                        </div>
                                    </footer>
                                </div>
                            </div>
                            <!-- Card 2 -->
                            <div class="nk tto bg-white shadow-md rounded-sm border border-slate-200">
                                <!-- Card content -->
                                <div class="flex fu sz vi">
                                    <div class="al">
                                        <header>
                                            <h3 class="gv text-slate-800 gg rx">Digital Marketing</h3>
                                        </header>
                                    </div>
                                    <!-- Card footer -->
                                    <footer class="iw">
                                        <div class="flex flex-wrap fh items-center">
                                            <!-- Left side -->
                                            <div class="text-sm text-slate-500 gw">320+ Apps</div>
                                            <!-- Right side -->
                                            <a class="text-sm gm text-indigo-500 xu" href="#0">Explore -&gt;</a>
                                        </div>
                                    </footer>
                                </div>
                            </div>
                            <!-- Card 3 -->
                            <div class="nk tto bg-white shadow-md rounded-sm border border-slate-200">
                                <!-- Card content -->
                                <div class="flex fu sz vi">
                                    <div class="al">
                                        <header>
                                            <h3 class="gv text-slate-800 gg rx">Music &amp; Audio</h3>
                                        </header>
                                    </div>
                                    <!-- Card footer -->
                                    <footer class="iw">
                                        <div class="flex flex-wrap fh items-center">
                                            <!-- Left side -->
                                            <div class="text-sm text-slate-500 gw">270+ Apps</div>
                                            <!-- Right side -->
                                            <a class="text-sm gm text-indigo-500 xu" href="#0">Explore -&gt;</a>
                                        </div>
                                    </footer>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection