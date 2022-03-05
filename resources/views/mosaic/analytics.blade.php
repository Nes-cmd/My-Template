@extends('layouts.admin.app')
@section('contents')
    <div class="va jn teb vf ox uz ri">
        <!-- Page header -->
        <div class="_u _w _g ry">
            <!-- Left: Title -->
            <div class="rw kj">
                <h1 class="gc zc text-slate-800 font-bold">Analytics ✨</h1>
            </div>

            <!-- Right: Actions -->
            <div class="sx fr _p fc _b fp">
                <!-- Datepicker built with flatpickr -->
                <div class="td">
                    <input class="datepicker tn mr text-slate-500 hover--text-slate-600 gm xk ok" placeholder="Select dates" data-class="flatpickr-right" />
                    <div class="tp tm tg flex items-center pointer-events-none">
                        <svg class="o_ sq dd text-slate-500 ml-3" viewBox="0 0 16 16">
                            <path d="M15 2h-2V0h-2v2H9V0H7v2H5V0H3v2H1a1 1 0 00-1 1v12a1 1 0 001 1h14a1 1 0 001-1V3a1 1 0 00-1-1zm-1 12H2V6h12v8z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cards -->
        <div class="sx fi fd">
            <!-- Line chart (Analytics) -->
            <div class="flex fu nk ttu bg-white bh rounded-sm border border-slate-200">
                <header class="v_ vj cm ha flex items-center"><h2 class="gg text-slate-800">Analytics</h2></header>
                <div class="v_ vk">
                    <div class="flex flex-wrap">
                        <div class="flex items-center vc">
                            <div class="iv">
                                <div class="flex items-center">
                                    <div class="text-3xl font-bold text-slate-800 mr-2">24.7K</div>
                                    <div class="text-sm gm yf">+49%</div>
                                </div>
                                <div class="text-sm text-slate-500">Unique Visitors</div>
                            </div>
                            <div class="hidden qe oj or hv iv" aria-hidden="true"></div>
                        </div>
                        <div class="flex items-center vc">
                            <div class="iv">
                                <div class="flex items-center">
                                    <div class="text-3xl font-bold text-slate-800 mr-2">56.9K</div>
                                    <div class="text-sm gm yf">+7%</div>
                                </div>
                                <div class="text-sm text-slate-500">Total Pageviews</div>
                            </div>
                            <div class="hidden qe oj or hv iv" aria-hidden="true"></div>
                        </div>
                        <div class="flex items-center vc">
                            <div class="iv">
                                <div class="flex items-center">
                                    <div class="text-3xl font-bold text-slate-800 mr-2">54%</div>
                                    <div class="text-sm gm yl">-7%</div>
                                </div>
                                <div class="text-sm text-slate-500">Bounce Rate</div>
                            </div>
                            <div class="hidden qe oj or hv iv" aria-hidden="true"></div>
                        </div>
                        <div class="flex items-center">
                            <div>
                                <div class="flex items-center">
                                    <div class="text-3xl font-bold text-slate-800 mr-2">2m 56s</div>
                                    <div class="text-sm gm yl">+7%</div>
                                </div>
                                <div class="text-sm text-slate-500">Visit Duration</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="al"><canvas id="analytics-card-01" width="800" height="300"></canvas></div>
            </div>
            <!--  Line chart (Active Users Right Now) -->
            <div class="flex fu nk tto bg-white bh rounded-sm border border-slate-200">
                <header class="v_ vj cm ha"><h2 class="gg text-slate-800">Active Users Right Now</h2></header>
                <div class="flex fu sz">
                    <div class="v_ vl">
                        <div class="flex items-center">
                            <div class="td flex items-center justify-center o_ sq rounded-full h_ rk" aria-hidden="true"><div class="tp ud op rounded-full hq"></div></div>
                            <div>
                                <div class="text-3xl font-bold text-slate-800 mr-2">347</div>
                                <div class="text-sm text-slate-500">Live visitors</div>
                            </div>
                        </div>
                    </div>
                    <div><canvas id="analytics-card-02" width="389" height="70"></canvas></div>
                    <div class="al v_ mq md">
                        <div class="lx">
                            <table class="ac ox">
                                <thead class="gp gb yt">
                                    <tr>
                                        <th class="vc"><div class="gg go">Top pages</div></th>
                                        <th class="vc"><div class="gg ga">Active users</div></th>
                                    </tr>
                                </thead>
                                <tbody class="text-sm lh lv">
                                    <tr>
                                        <td class="vc"><div class="go">preview.cruip.com/open-pro/</div></td>
                                        <td class="vc"><div class="gm ga text-slate-800">94</div></td>
                                    </tr>
                                    <tr>
                                        <td class="vc"><div class="go">preview.cruip.com/simple/</div></td>
                                        <td class="vc"><div class="gm ga text-slate-800">42</div></td>
                                    </tr>
                                    <tr>
                                        <td class="vc"><div class="go">cruip.com/unlimited/</div></td>
                                        <td class="vc"><div class="gm ga text-slate-800">12</div></td>
                                    </tr>
                                    <tr>
                                        <td class="vc"><div class="go">preview.cruip.com/twist/</div></td>
                                        <td class="vc"><div class="gm ga text-slate-800">4</div></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="ga v_ my"><a class="text-sm gm text-indigo-500 xu" href="#0">Real-Time Report -&gt;</a></div>
                </div>
            </div>
            <!-- Stacked bar chart (Acquisition Channels) -->
            <div class="flex fu nk kx bg-white bh rounded-sm border border-slate-200">
                <header class="v_ vj cm ha flex items-center"><h2 class="gg text-slate-800">Acquisition Channels</h2></header>
                <div class="v_ vj">
                    <div id="analytics-card-03-legend" class="al rx"><ul class="flex flex-wrap"></ul></div>
                </div>
                <div class="al"><canvas id="analytics-card-03" width="595" height="248"></canvas></div>
            </div>
            <!-- Horizontal bar chart (Audience Overview) -->
            <div class="flex fu nk kx bg-white bh rounded-sm border border-slate-200">
                <header class="v_ vj cm ha"><h2 class="gg text-slate-800">Audience Overview</h2></header>
                <div id="analytics-card-04-legend" class="v_ vj"><ul class="flex flex-wrap"></ul></div>
                <div class="al"><canvas id="analytics-card-04" width="595" height="248"></canvas></div>
            </div>
            <!-- Report card (Top Channels) -->
            <div class="flex fu nk kx tto bg-white bh rounded-sm border border-slate-200">
                <header class="v_ vj cm ha"><h2 class="gg text-slate-800">Top Channels</h2></header>
                <div class="al vr">
                    <div class="flex fu sz">
                        <div class="al">
                            <ul class="flex fh gp gb yt gg vg f_">
                                <li>Source</li>
                                <li>Visitors</li>
                            </ul>
                            <ul class="lt text-sm text-slate-800 ip rw">
                                <li class="td vg vk">
                                    <div class="tp tm hz" aria-hidden="true" style="width: 82%;"></div>
                                    <div class="td flex fh f_">
                                        <div>Google</div>
                                        <div class="gm">4.7K</div>
                                    </div>
                                </li>
                                <li class="td vg vk">
                                    <div class="tp tm hz" aria-hidden="true" style="width: 70%;"></div>
                                    <div class="td flex fh f_">
                                        <div>Indiehackers.com</div>
                                        <div class="gm">4.2K</div>
                                    </div>
                                </li>
                                <li class="td vg vk">
                                    <div class="tp tm hz" aria-hidden="true" style="width: 60%;"></div>
                                    <div class="td flex fh f_">
                                        <div>DuckDuckGo</div>
                                        <div class="gm">3.4K</div>
                                    </div>
                                </li>
                                <li class="td vg vk">
                                    <div class="tp tm hz" aria-hidden="true" style="width: 44%;"></div>
                                    <div class="td flex fh f_">
                                        <div>Hacker News</div>
                                        <div class="gm">3.1K</div>
                                    </div>
                                </li>
                                <li class="td vg vk">
                                    <div class="tp tm hz" aria-hidden="true" style="width: 40%;"></div>
                                    <div class="td flex fh f_">
                                        <div>Github.com</div>
                                        <div class="gm">2.2K</div>
                                    </div>
                                </li>
                                <li class="td vg vk">
                                    <div class="tp tm hz" aria-hidden="true" style="width: 30%;"></div>
                                    <div class="td flex fh f_">
                                        <div>Madewithvuejs.com</div>
                                        <div class="gm">1.7K</div>
                                    </div>
                                </li>
                                <li class="td vg vk">
                                    <div class="tp tm hz" aria-hidden="true" style="width: 22%;"></div>
                                    <div class="td flex fh f_">
                                        <div>Producthunt.com</div>
                                        <div class="gm">924</div>
                                    </div>
                                </li>
                                <li class="td vg vk">
                                    <div class="tp tm hz" aria-hidden="true" style="width: 12%;"></div>
                                    <div class="td flex fh f_">
                                        <div>Dev.to</div>
                                        <div class="gm">696</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="gu mp md cg ha"><a class="text-sm gm text-indigo-500 xu" href="#0">Channels Report -&gt;</a></div>
                    </div>
                </div>
            </div>
            <!-- Report card (Top Pages) -->
            <div class="flex fu nk kx tto bg-white bh rounded-sm border border-slate-200">
                <header class="v_ vj cm ha"><h2 class="gg text-slate-800">Top Pages</h2></header>
                <div class="al vr">
                    <div class="flex fu sz">
                        <div class="al">
                            <ul class="flex fh gp gb yt gg vg f_">
                                <li>Source</li>
                                <li>Pageviews</li>
                            </ul>
                            <ul class="lt text-sm text-slate-800 ip rw">
                                <li class="td vg vk">
                                    <div class="tp tm hx" aria-hidden="true" style="width: 82%;"></div>
                                    <div class="td flex fh f_">
                                        <div>cruip.com/</div>
                                        <div class="gm">28K</div>
                                    </div>
                                </li>
                                <li class="td vg vk">
                                    <div class="tp tm hx" aria-hidden="true" style="width: 70%;"></div>
                                    <div class="td flex fh f_">
                                        <div>preview.cruip.com/open-pro/</div>
                                        <div class="gm">12K</div>
                                    </div>
                                </li>
                                <li class="td vg vk">
                                    <div class="tp tm hx" aria-hidden="true" style="width: 60%;"></div>
                                    <div class="td flex fh f_">
                                        <div>preview.cruip.com/appy/</div>
                                        <div class="gm">9.7K</div>
                                    </div>
                                </li>
                                <li class="td vg vk">
                                    <div class="tp tm hx" aria-hidden="true" style="width: 44%;"></div>
                                    <div class="td flex fh f_">
                                        <div>cruip.com/unlimited/</div>
                                        <div class="gm">9.2K</div>
                                    </div>
                                </li>
                                <li class="td vg vk">
                                    <div class="tp tm hx" aria-hidden="true" style="width: 40%;"></div>
                                    <div class="td flex fh f_">
                                        <div>preview.cruip.com/simple/</div>
                                        <div class="gm">7K</div>
                                    </div>
                                </li>
                                <li class="td vg vk">
                                    <div class="tp tm hx" aria-hidden="true" style="width: 30%;"></div>
                                    <div class="td flex fh f_">
                                        <div>cruip.com/about-us/</div>
                                        <div class="gm">6.4K</div>
                                    </div>
                                </li>
                                <li class="td vg vk">
                                    <div class="tp tm hx" aria-hidden="true" style="width: 22%;"></div>
                                    <div class="td flex fh f_">
                                        <div>docs.cruip.com/</div>
                                        <div class="gm">5.4K</div>
                                    </div>
                                </li>
                                <li class="td vg vk">
                                    <div class="tp tm hx" aria-hidden="true" style="width: 12%;"></div>
                                    <div class="td flex fh f_">
                                        <div>preview.cruip.com/twist/</div>
                                        <div class="gm">2.2K</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="gu mp md cg ha"><a class="text-sm gm text-indigo-500 xu" href="#0">Page Report -&gt;</a></div>
                    </div>
                </div>
            </div>
            <!-- Report card (Top Countries) -->
            <div class="flex fu nk kx tto bg-white bh rounded-sm border border-slate-200">
                <header class="v_ vj cm ha"><h2 class="gg text-slate-800">Top Countries</h2></header>
                <div class="al vr">
                    <div class="flex fu sz">
                        <div class="al">
                            <ul class="flex fh gp gb yt gg vg f_">
                                <li>Source</li>
                                <li>Sessions</li>
                            </ul>
                            <ul class="lt text-sm text-slate-800 ip rw">
                                <li class="td vg vk">
                                    <div class="tp tm hj" aria-hidden="true" style="width: 82%;"></div>
                                    <div class="td flex fh f_">
                                        <div>🇨🇮 Ireland</div>
                                        <div class="gm">4.2K</div>
                                    </div>
                                </li>
                                <li class="td vg vk">
                                    <div class="tp tm hj" aria-hidden="true" style="width: 70%;"></div>
                                    <div class="td flex fh f_">
                                        <div>🇺🇸 United States</div>
                                        <div class="gm">3.4K</div>
                                    </div>
                                </li>
                                <li class="td vg vk">
                                    <div class="tp tm hj" aria-hidden="true" style="width: 60%;"></div>
                                    <div class="td flex fh f_">
                                        <div>🇩🇪 Germany</div>
                                        <div class="gm">1.6k</div>
                                    </div>
                                </li>
                                <li class="td vg vk">
                                    <div class="tp tm hj" aria-hidden="true" style="width: 44%;"></div>
                                    <div class="td flex fh f_">
                                        <div>🇮🇹 Italy</div>
                                        <div class="gm">1.2k</div>
                                    </div>
                                </li>
                                <li class="td vg vk">
                                    <div class="tp tm hj" aria-hidden="true" style="width: 40%;"></div>
                                    <div class="td flex fh f_">
                                        <div>🇬🇧 United Kingdom</div>
                                        <div class="gm">912</div>
                                    </div>
                                </li>
                                <li class="td vg vk">
                                    <div class="tp tm hj" aria-hidden="true" style="width: 30%;"></div>
                                    <div class="td flex fh f_">
                                        <div>🇫🇷 France</div>
                                        <div class="gm">677</div>
                                    </div>
                                </li>
                                <li class="td vg vk">
                                    <div class="tp tm hj" aria-hidden="true" style="width: 22%;"></div>
                                    <div class="td flex fh f_">
                                        <div>🇮🇳 India</div>
                                        <div class="gm">449</div>
                                    </div>
                                </li>
                                <li class="td vg vk">
                                    <div class="tp tm hj" aria-hidden="true" style="width: 12%;"></div>
                                    <div class="td flex fh f_">
                                        <div>🇸🇬 Singapore</div>
                                        <div class="gm">269</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="gu mp md cg ha"><a class="text-sm gm text-indigo-500 xu" href="#0">Countries Report -&gt;</a></div>
                    </div>
                </div>
            </div>
            <!-- Doughnut chart (Sessions By Device) -->
            <div class="flex fu nk kx tto bg-white bh rounded-sm border border-slate-200">
                <header class="v_ vj cm ha"><h2 class="gg text-slate-800">Sessions By Device</h2></header>
                <div class="al flex fu justify-center">
                    <div><canvas id="analytics-card-08" width="389" height="260"></canvas></div>
                    <div id="analytics-card-08-legend" class="v_ mz ms"><ul class="flex flex-wrap justify-center -m-1"></ul></div>
                </div>
            </div>
            <!-- Doughnut chart (Visit By Age Category) -->
            <div class="flex fu nk kx tto bg-white bh rounded-sm border border-slate-200">
                <header class="v_ vj cm ha"><h2 class="gg text-slate-800">Sessions By Age</h2></header>
                <div class="al flex fu justify-center">
                    <div><canvas id="analytics-card-09" width="389" height="260"></canvas></div>
                    <div id="analytics-card-09-legend" class="v_ mz ms"><ul class="flex flex-wrap justify-center -m-1"></ul></div>
                </div>
            </div>
            <!-- Polar chart (Sessions By Gender) -->
            <div class="flex fu nk kx tto bg-white bh rounded-sm border border-slate-200">
                <header class="v_ vj cm ha"><h2 class="gg text-slate-800">Sessions By Gender</h2></header>
                <div class="al flex fu justify-center">
                    <div><canvas id="analytics-card-10" width="389" height="260"></canvas></div>
                    <div id="analytics-card-10-legend" class="v_ mz ms"><ul class="flex flex-wrap justify-center -m-1"></ul></div>
                </div>
            </div>
            <!-- Table (Top Products) -->
            <div class="nk bg-white bh rounded-sm border border-slate-200">
                <header class="v_ vj cm ha"><h2 class="gg text-slate-800">Top Products</h2></header>
                <div class="vr">
                    <div class="lx">
                        <table class="ac ox">
                            <thead class="gp gb yt hw rounded-sm">
                                <tr>
                                    <th class="vs ct"><div class="gg go">Product</div></th>
                                    <th class="vs ct"><div class="gg go">Created by</div></th>
                                    <th class="vs ct"><div class="gg go">Category</div></th>
                                    <th class="vs ct"><div class="gg gu">Total impressions</div></th>
                                    <th class="vs ct"><div class="gg gu">Top country</div></th>
                                    <th class="vs ct"><div class="gg gu">CR</div></th>
                                    <th class="vs ct"><div class="gg go">Value</div></th>
                                </tr>
                            </thead>
                            <tbody class="text-sm lh lv">
                                <tr>
                                    <td class="vs ct">
                                        <div class="flex items-center">
                                            <div class="af rounded-full mr-2 kq hd">
                                                <svg class="uv ov dd text-indigo-50" viewBox="0 0 36 36">
                                                    <path
                                                        d="M24.446 19.335a2.5 2.5 0 00-3.522 3.194c-.845.63-1.87.97-2.924.971a4.979 4.979 0 01-1.113-.135 4.436 4.436 0 01-1.343 1.682 6.91 6.91 0 006.9-1.165 2.5 2.5 0 002-4.547h.002zM20.431 11.938a2.5 2.5 0 10-.4 2.014 5.027 5.027 0 012.723 3.078c.148-.018.297-.028.446-.03a4.5 4.5 0 011.7.334 7.023 7.023 0 00-4.469-5.396zM14.969 20.25a2.49 2.49 0 00-1.932-1.234A4.624 4.624 0 0113 18.5a4.97 4.97 0 011.348-3.391 4.456 4.456 0 01-.788-2.016A6.989 6.989 0 0011 18.5c.003.391.04.781.11 1.166a2.5 2.5 0 103.859.584z"
                                                    ></path>
                                                </svg>
                                            </div>
                                            <div class="gm text-slate-800">Form Builder CP</div>
                                        </div>
                                    </td>
                                    <td class="vs ct">
                                        <div class="flex af lr se">
                                            <a class="block" href="#0"> <img class="rounded-full cp c_ sw" src="images/user-28-01.jpg" width="28" height="28" alt="User 01" /> </a>
                                            <a class="block" href="#0"> <img class="rounded-full cp c_ sw" src="images/user-28-02.jpg" width="28" height="28" alt="User 02" /> </a>
                                            <a class="block" href="#0"> <img class="rounded-full cp c_ sw" src="images/user-28-03.jpg" width="28" height="28" alt="User 03" /> </a>
                                        </div>
                                    </td>
                                    <td class="vs ct">
                                        <div class="flex items-center">
                                            <svg class="o_ sq dd yt af mr-2" viewBox="0 0 16 16">
                                                <path
                                                    d="M4.3 4.5c1.9-1.9 5.1-1.9 7 0 .7.7 1.2 1.7 1.4 2.7l2-.3c-.2-1.5-.9-2.8-1.9-3.8C10.1.4 5.7.4 2.9 3.1L.7.9 0 7.3l6.4-.7-2.1-2.1zM15.6 8.7l-6.4.7 2.1 2.1c-1.9 1.9-5.1 1.9-7 0-.7-.7-1.2-1.7-1.4-2.7l-2 .3c.2 1.5.9 2.8 1.9 3.8 1.4 1.4 3.1 2 4.9 2 1.8 0 3.6-.7 4.9-2l2.2 2.2.8-6.4z"
                                                ></path>
                                            </svg>
                                            <div>Subscription</div>
                                        </div>
                                    </td>
                                    <td class="vs ct"><div class="gu">20,929</div></td>
                                    <td class="vs ct"><div class="gv gu">🇺🇸</div></td>
                                    <td class="vs ct"><div class="gu">27.4%</div></td>
                                    <td class="vs ct"><div class="go gm yf">$12,499.77</div></td>
                                </tr>
                                <tr>
                                    <td class="vs ct">
                                        <div class="flex items-center">
                                            <div class="af rounded-full mr-2 kq hg">
                                                <svg class="uv ov dd ys" viewBox="0 0 36 36">
                                                    <path
                                                        d="M11 22.012a1 1 0 01-.707-1.707l4.5-4.5a1 1 0 011.414 0l3.293 3.293 4.793-4.793a1 1 0 111.414 1.414l-5.5 5.5a1 1 0 01-1.414 0L15.5 17.926l-3.793 3.793a1 1 0 01-.707.293z"
                                                    ></path>
                                                </svg>
                                            </div>
                                            <div class="gm text-slate-800">Machine Learning A-Z</div>
                                        </div>
                                    </td>
                                    <td class="vs ct">
                                        <div class="flex af lr se">
                                            <a class="block" href="#0"> <img class="rounded-full cp c_ sw" src="images/user-28-07.jpg" width="28" height="28" alt="User 07" /> </a>
                                            <a class="block" href="#0"> <img class="rounded-full cp c_ sw" src="images/user-28-04.jpg" width="28" height="28" alt="User 04" /> </a>
                                            <a class="block" href="#0"> <img class="rounded-full cp c_ sw" src="images/user-28-11.jpg" width="28" height="28" alt="User 11" /> </a>
                                        </div>
                                    </td>
                                    <td class="vs ct">
                                        <div class="flex items-center">
                                            <svg class="o_ sq dd yt af mr-2" viewBox="0 0 16 16">
                                                <path
                                                    d="M4.3 4.5c1.9-1.9 5.1-1.9 7 0 .7.7 1.2 1.7 1.4 2.7l2-.3c-.2-1.5-.9-2.8-1.9-3.8C10.1.4 5.7.4 2.9 3.1L.7.9 0 7.3l6.4-.7-2.1-2.1zM15.6 8.7l-6.4.7 2.1 2.1c-1.9 1.9-5.1 1.9-7 0-.7-.7-1.2-1.7-1.4-2.7l-2 .3c.2 1.5.9 2.8 1.9 3.8 1.4 1.4 3.1 2 4.9 2 1.8 0 3.6-.7 4.9-2l2.2 2.2.8-6.4z"
                                                ></path>
                                            </svg>
                                            <div>Subscription</div>
                                        </div>
                                    </td>
                                    <td class="vs ct"><div class="gu">17,944</div></td>
                                    <td class="vs ct"><div class="gv gu">🇬🇧</div></td>
                                    <td class="vs ct"><div class="gu">22.6%</div></td>
                                    <td class="vs ct"><div class="go gm yf">$4,227.09</div></td>
                                </tr>
                                <tr>
                                    <td class="vs ct">
                                        <div class="flex items-center">
                                            <div class="af rounded-full mr-2 kq hd">
                                                <svg class="uv ov dd text-indigo-50" viewBox="0 0 36 36">
                                                    <path
                                                        d="M24.446 19.335a2.5 2.5 0 00-3.522 3.194c-.845.63-1.87.97-2.924.971a4.979 4.979 0 01-1.113-.135 4.436 4.436 0 01-1.343 1.682 6.91 6.91 0 006.9-1.165 2.5 2.5 0 002-4.547h.002zM20.431 11.938a2.5 2.5 0 10-.4 2.014 5.027 5.027 0 012.723 3.078c.148-.018.297-.028.446-.03a4.5 4.5 0 011.7.334 7.023 7.023 0 00-4.469-5.396zM14.969 20.25a2.49 2.49 0 00-1.932-1.234A4.624 4.624 0 0113 18.5a4.97 4.97 0 011.348-3.391 4.456 4.456 0 01-.788-2.016A6.989 6.989 0 0011 18.5c.003.391.04.781.11 1.166a2.5 2.5 0 103.859.584z"
                                                    ></path>
                                                </svg>
                                            </div>
                                            <div class="gm text-slate-800">2021 Web Bootcamp</div>
                                        </div>
                                    </td>
                                    <td class="vs ct">
                                        <div class="flex af lr se">
                                            <a class="block" href="#0"> <img class="rounded-full cp c_ sw" src="images/user-28-05.jpg" width="28" height="28" alt="User 05" /> </a>
                                        </div>
                                    </td>
                                    <td class="vs ct">
                                        <div class="flex items-center">
                                            <svg class="o_ sq dd yt af mr-2" viewBox="0 0 16 16">
                                                <path
                                                    d="M4.3 4.5c1.9-1.9 5.1-1.9 7 0 .7.7 1.2 1.7 1.4 2.7l2-.3c-.2-1.5-.9-2.8-1.9-3.8C10.1.4 5.7.4 2.9 3.1L.7.9 0 7.3l6.4-.7-2.1-2.1zM15.6 8.7l-6.4.7 2.1 2.1c-1.9 1.9-5.1 1.9-7 0-.7-.7-1.2-1.7-1.4-2.7l-2 .3c.2 1.5.9 2.8 1.9 3.8 1.4 1.4 3.1 2 4.9 2 1.8 0 3.6-.7 4.9-2l2.2 2.2.8-6.4z"
                                                ></path>
                                            </svg>
                                            <div>Subscription</div>
                                        </div>
                                    </td>
                                    <td class="vs ct"><div class="gu">16,097</div></td>
                                    <td class="vs ct"><div class="gv gu">🇫🇷</div></td>
                                    <td class="vs ct"><div class="gu">22.4%</div></td>
                                    <td class="vs ct"><div class="go gm yf">$2,499.77</div></td>
                                </tr>
                                <tr>
                                    <td class="vs ct">
                                        <div class="flex items-center">
                                            <div class="af rounded-full mr-2 kq hm">
                                                <svg class="uv ov dd text-indigo-50" viewBox="0 0 36 36"><path d="M18 26a8 8 0 118-8 8.009 8.009 0 01-8 8zm0-14a6 6 0 100 12 6 6 0 000-12z"></path></svg>
                                            </div>
                                            <div class="gm text-slate-800">Digital Marketing Course</div>
                                        </div>
                                    </td>
                                    <td class="vs ct">
                                        <div class="flex af lr se">
                                            <a class="block" href="#0"> <img class="rounded-full cp c_ sw" src="images/user-28-06.jpg" width="28" height="28" alt="User 06" /> </a>
                                            <a class="block" href="#0"> <img class="rounded-full cp c_ sw" src="images/user-28-11.jpg" width="28" height="28" alt="User 11" /> </a>
                                        </div>
                                    </td>
                                    <td class="vs ct">
                                        <div class="flex items-center">
                                            <svg class="o_ sq dd yt af mr-2" viewBox="0 0 16 16">
                                                <path
                                                    d="M4.3 4.5c1.9-1.9 5.1-1.9 7 0 .7.7 1.2 1.7 1.4 2.7l2-.3c-.2-1.5-.9-2.8-1.9-3.8C10.1.4 5.7.4 2.9 3.1L.7.9 0 7.3l6.4-.7-2.1-2.1zM15.6 8.7l-6.4.7 2.1 2.1c-1.9 1.9-5.1 1.9-7 0-.7-.7-1.2-1.7-1.4-2.7l-2 .3c.2 1.5.9 2.8 1.9 3.8 1.4 1.4 3.1 2 4.9 2 1.8 0 3.6-.7 4.9-2l2.2 2.2.8-6.4z"
                                                ></path>
                                            </svg>
                                            <div>Subscription</div>
                                        </div>
                                    </td>
                                    <td class="vs ct"><div class="gu">12,996</div></td>
                                    <td class="vs ct"><div class="gv gu">🇮🇹</div></td>
                                    <td class="vs ct"><div class="gu">22.1%</div></td>
                                    <td class="vs ct"><div class="go gm yf">$2,224.09</div></td>
                                </tr>
                                <tr>
                                    <td class="vs ct">
                                        <div class="flex items-center">
                                            <div class="af rounded-full mr-2 kq hq">
                                                <svg class="uv ov dd text-indigo-50" viewBox="0 0 36 36">
                                                    <circle cx="18" cy="18" r="3"></circle>
                                                    <path
                                                        d="M13.05 24.363l-.707-.707a8 8 0 010-11.312l.707-.707 1.414 1.414-.707.707a6 6 0 000 8.484l.707.707-1.414 1.414zM22.95 24.363l-1.414-1.414.707-.707a6 6 0 000-8.484l-.707-.707 1.414-1.414.707.707a8 8 0 010 11.312l-.707.707z"
                                                    ></path>
                                                </svg>
                                            </div>
                                            <div class="gm text-slate-800">Form Builder PRO</div>
                                        </div>
                                    </td>
                                    <td class="vs ct">
                                        <div class="flex af lr se">
                                            <a class="block" href="#0"> <img class="rounded-full cp c_ sw" src="images/user-28-09.jpg" width="28" height="28" alt="User 09" /> </a>
                                            <a class="block" href="#0"> <img class="rounded-full cp c_ sw" src="images/user-28-01.jpg" width="28" height="28" alt="User 01" /> </a>
                                        </div>
                                    </td>
                                    <td class="vs ct">
                                        <div class="flex items-center">
                                            <svg class="o_ sq dd yt af mr-2" viewBox="0 0 16 16">
                                                <path
                                                    d="M4.3 4.5c1.9-1.9 5.1-1.9 7 0 .7.7 1.2 1.7 1.4 2.7l2-.3c-.2-1.5-.9-2.8-1.9-3.8C10.1.4 5.7.4 2.9 3.1L.7.9 0 7.3l6.4-.7-2.1-2.1zM15.6 8.7l-6.4.7 2.1 2.1c-1.9 1.9-5.1 1.9-7 0-.7-.7-1.2-1.7-1.4-2.7l-2 .3c.2 1.5.9 2.8 1.9 3.8 1.4 1.4 3.1 2 4.9 2 1.8 0 3.6-.7 4.9-2l2.2 2.2.8-6.4z"
                                                ></path>
                                            </svg>
                                            <div>Subscription</div>
                                        </div>
                                    </td>
                                    <td class="vs ct"><div class="gu">7,097</div></td>
                                    <td class="vs ct"><div class="gv gu">🇩🇪</div></td>
                                    <td class="vs ct"><div class="gu">17.4%</div></td>
                                    <td class="vs ct"><div class="go gm yf">$1,949.72</div></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection