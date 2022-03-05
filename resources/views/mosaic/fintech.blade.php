@extends('layouts.admin.app')
@section('contents')
    <div class="va jn teb vf ox uz ri">
        <!-- Page header -->
        <div class="_u _w _g ic">
            <!-- Left: Title -->
            <div class="rw kj">
                <h1 class="gc zc text-slate-800 font-bold">Fintech ✨</h1>
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

                <!-- Add account button -->
                <button class="btn hd wq ye">
                    <svg class="o_ sq dd bo af" viewBox="0 0 16 16">
                        <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"></path>
                    </svg>
                    <span class="hidden tnm r_">Add Account</span>
                </button>
            </div>
        </div>

        <!-- Cards -->
        <div class="sx fi fd">
            <!-- Page Intro -->
            <div class="flex fu nk bg-white bh rounded-sm border border-slate-200">
                <div class="v_ mt">
                    <div class="qn qx qy">
                        <div class="flex items-center rw jj">
                            <div class="mr-4"><img class="inline-flex rounded-full" src="images/user-64-14.jpg" width="64" height="64" alt="User" /></div>
                            <div>
                                <div class="in">Hey <strong class="gm text-slate-800">Mary</strong> 👋, this is your current balance:</div>
                                <div class="text-3xl font-bold yf">$47,347.09</div>
                            </div>
                        </div>
                        <ul class="af flex flex-wrap justify-end qb lr se">
                            <li>
                                <a class="block" href="#0"> <img class="uv ov rounded-full" src="images/fintech-icon-01.svg" width="36" height="36" alt="Account 01" /> </a>
                            </li>
                            <li>
                                <a class="block" href="#0"> <img class="uv ov rounded-full" src="images/fintech-icon-02.svg" width="36" height="36" alt="Account 02" /> </a>
                            </li>
                            <li>
                                <a class="block" href="#0"> <img class="uv ov rounded-full" src="images/fintech-icon-03.svg" width="36" height="36" alt="Account 03" /> </a>
                            </li>
                            <li>
                                <a class="block" href="#0"> <img class="uv ov rounded-full" src="images/fintech-icon-04.svg" width="36" height="36" alt="Account 04" /> </a>
                            </li>
                            <li>
                                <button class="flex justify-center items-center uv ov rounded-full bg-white border border-slate-200 hover--border-slate-300 text-indigo-500 bd b_ we">
                                    <span class="tc">Add new user</span>
                                    <svg class="o_ sq dd" viewBox="0 0 16 16"><path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"></path></svg>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Line chart (Portfolio Returns) -->
            <div class="flex fu nk ttu bg-white bh rounded-sm border border-slate-200">
                <header class="v_ vj cm ha flex items-center"><h2 class="gg text-slate-800">Portfolio Returns</h2></header>
                <div class="v_ vl">
                    <div class="flex flex-wrap fh fl">
                        <div class="flex items-center">
                            <div class="text-3xl font-bold text-slate-800 mr-2">244.7%</div>
                            <div class="text-sm"><span class="gm text-slate-800">17.4%</span> AVG</div>
                        </div>
                        <div id="fintech-card-01-legend" class="al r_ rx"><ul class="flex flex-wrap justify-end"></ul></div>
                    </div>
                </div>
                <div class="al"><canvas id="fintech-card-01" width="800" height="300"></canvas></div>
            </div>
            <!-- Credit Card -->
            <div class="flex fu nk tto pb dn dc bh rounded-sm border hf">
                <header class="v_ vj cm hl flex items-center"><h2 class="gg yn">Active Cards</h2></header>
                <div class="sz flex fu v_ mt">
                    <div class="td ox at ri pr vr ci">
                        <div class="td sk py px dp vi cr lw">
                            <div class="tp tb nf um s_" aria-hidden="true">
                                <svg class="ox sz" width="398" height="392" viewBox="0 0 398 392" xmlns="http://www.w3.org/2000/svg">
                                    <defs>
                                        <filter x="-88.2%" y="-88.2%" width="276.5%" height="276.5%" filterUnits="objectBoundingBox" id="glow-a"><feGaussianBlur stdDeviation="50" in="SourceGraphic"></feGaussianBlur></filter>
                                    </defs>
                                    <circle class="dx bc" filter="url(#glow-a)" cx="85" cy="85" r="85" transform="translate(0 216)"></circle>
                                </svg>
                            </div>
                            <div class="tp tw nl um s_" aria-hidden="true">
                                <svg class="ox sz" width="398" height="392" viewBox="0 0 398 392" xmlns="http://www.w3.org/2000/svg">
                                    <defs>
                                        <filter x="-88.2%" y="-88.2%" width="276.5%" height="276.5%" filterUnits="objectBoundingBox" id="glow-b"><feGaussianBlur stdDeviation="50" in="SourceGraphic"></feGaussianBlur></filter>
                                    </defs>
                                    <circle class="dk bc" filter="url(#glow-b)" cx="85" cy="85" r="85" transform="translate(228 0)"></circle>
                                </svg>
                            </div>
                            <div class="td sz flex fu fh">
                                <svg width="32" height="32" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <defs>
                                        <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="icon1-b">
                                            <stop stop-color="#A5B4FC" offset="0%"></stop>
                                            <stop stop-color="#E0E7FF" offset="100%"></stop>
                                        </linearGradient>
                                        <linearGradient x1="50%" y1="24.537%" x2="50%" y2="100%" id="icon1-c">
                                            <stop stop-color="#4338CA" offset="0%"></stop>
                                            <stop stop-color="#6366F1" stop-opacity="0" offset="100%"></stop>
                                        </linearGradient>
                                        <path id="icon1-a" d="M16 0l16 32-16-5-16 5z"></path>
                                    </defs>
                                    <g transform="rotate(90 16 16)" fill="none" fill-rule="evenodd">
                                        <mask id="icon1-d" fill="#fff"><use xlink:href="#icon1-a"></use></mask>
                                        <use fill="url(#icon1-b)" xlink:href="#icon1-a"></use>
                                        <path fill="url(#icon1-c)" mask="url(#icon1-d)" d="M16-6h20v38H16z"></path>
                                    </g>
                                </svg>
                                <div class="flex fh gv font-bold yn gq bb"><span>****</span> <span>****</span> <span>****</span> <span>7328</span></div>
                                <div class="td flex fh items-center nv im">
                                    <div class="text-sm font-bold yn gq bb lo"><span>EXP 12/24</span> <span>CVC ***</span></div>
                                </div>
                                <svg class="tp ty tw" width="48" height="28" viewBox="0 0 48 28">
                                    <circle fill="#F59E0B" cx="34" cy="14" r="14" fill-opacity=".8"></circle>
                                    <circle fill="#F43F5E" cx="14" cy="14" r="14" fill-opacity=".8"></circle>
                                </svg>
                            </div>
                        </div>
                        <div class="tp tk tw inline-flex" x-data="{ open: false }">
                            <button class="bg-white yt xa rounded-full" :class="{ 'hp text-slate-500': open }" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open">
                                <span class="tc">Menu</span>
                                <svg class="un or dd" viewBox="0 0 32 32">
                                    <circle cx="16" cy="16" r="2"></circle>
                                    <circle cx="10" cy="16" r="2"></circle>
                                    <circle cx="22" cy="16" r="2"></circle>
                                </svg>
                            </button>
                            <div
                                class="ah nv tp tq tw u_ bg-white border border-slate-200 vz rounded bh lw io"
                                @click.outside="open = false"
                                @keydown.escape.window="open = false"
                                x-show="open"
                                x-transition:enter="b_ ws wn a_"
                                x-transition:enter-start="opacity-0 am"
                                x-transition:enter-end="bf ag"
                                x-transition:leave="b_ ws wn"
                                x-transition:leave-start="bf"
                                x-transition:leave-end="opacity-0"
                                x-cloak=""
                            >
                                <ul>
                                    <li><a class="gm text-sm gz xl flex vk vx" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">Option 1</a></li>
                                    <li><a class="gm text-sm gz xl flex vk vx" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">Option 2</a></li>
                                    <li><a class="gm text-sm yi xc flex vk vx" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">Remove</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="al flex fu justify-center ip">
                        <div class="gp text-slate-500 gg gb it">Details</div>
                        <div class="fz">
                            <div>
                                <div class="flex fh text-sm in">
                                    <div class="yd">Payment Limits</div>
                                    <div class="yt gw">$780,00 <span class="text-slate-500">/</span> $1,500.00</div>
                                </div>
                                <div class="td ox h-2 pa"><div class="tp tm hg" aria-hidden="true" style="width: 50%;"></div></div>
                            </div>
                            <div>
                                <div class="flex fh text-sm in">
                                    <div class="yd">ATM Limits</div>
                                    <div class="yt gw">$179,00 <span class="text-slate-500">/</span> $1,000.00</div>
                                </div>
                                <div class="td ox h-2 pa"><div class="tp tm hg" aria-hidden="true" style="width: 35%;"></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bar chart (Cash Flow) -->
            <div class="flex fu nk kx bg-white bh rounded-sm border border-slate-200">
                <header class="v_ vj cm ha"><h2 class="gg text-slate-800">Cash Flow</h2></header>
                <div class="v_ vl">
                    <div class="flex flex-wrap fh items-center">
                        <div class="flex items-center">
                            <div class="text-3xl font-bold text-slate-800 mr-2">$1,347.09</div>
                            <div class="text-sm">Net</div>
                        </div>
                        <div id="fintech-card-03-legend" class="al r_ rx"><ul class="flex flex-wrap justify-end"></ul></div>
                    </div>
                </div>
                <div class="al"><canvas id="fintech-card-03" width="595" height="248"></canvas></div>
            </div>
            <!-- Horizontal bar chart (Cash Flow by Account) -->
            <div class="flex fu nk kx bg-white bh rounded-sm border border-slate-200">
                <header class="v_ vj cm ha"><h2 class="gg text-slate-800">Cash Flow by Account</h2></header>
                <div id="fintech-card-04-legend" class="v_ vj"><ul class="flex flex-wrap"></ul></div>
                <div class="al"><canvas id="fintech-card-04" width="595" height="248"></canvas></div>
            </div>
            <!-- Table (Recent Expenses) -->
            <div class="nk tts bg-white bh rounded-sm border border-slate-200">
                <header class="v_ vj cm ha"><h2 class="gg text-slate-800">Recent Expenses</h2></header>
                <div class="vr">
                    <div class="lx">
                        <table class="ac ox">
                            <thead class="gp gb yt hw rounded-sm">
                                <tr>
                                    <th class="vs ct"><div class="gg go">Counterparty</div></th>
                                    <th class="vs ct"><div class="gg go">Account</div></th>
                                    <th class="vs ct"><div class="gg go">Date</div></th>
                                    <th class="vs ct"><div class="gg ga">Amount</div></th>
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
                                    <td class="vs ct"><div>Revolut</div></td>
                                    <td class="vs ct"><div>22/01/2022</div></td>
                                    <td class="vs ct"><div class="gm text-slate-800 ga">-$1,299.22</div></td>
                                </tr>
                                <tr>
                                    <td class="vs ct">
                                        <div class="flex items-center">
                                            <div class="af rounded-full mr-2 kq bg-slate-900">
                                                <svg class="uv ov dd yt" viewBox="0 0 36 36">
                                                    <path
                                                        d="M12.014 25.752v-4.998c.196.42.495.749.896.987s.877.357 1.428.357a3.08 3.08 0 0 0 1.694-.483c.504-.322.9-.789 1.19-1.4.29-.611.434-1.328.434-2.149s-.145-1.535-.434-2.142c-.29-.607-.686-1.071-1.19-1.393a3.08 3.08 0 0 0-1.694-.483c-.55 0-1.027.119-1.428.357a2.21 2.21 0 0 0-.896.987v-1.246H9.256v11.606h2.758Zm1.414-6.062a1.34 1.34 0 0 1-1.022-.434c-.27-.29-.406-.686-.406-1.19 0-.495.135-.887.406-1.176a1.34 1.34 0 0 1 1.022-.434c.43 0 .777.142 1.043.427.266.285.399.679.399 1.183 0 .513-.133.912-.399 1.197-.266.285-.614.427-1.043.427Zm10.108 2.408c.924 0 1.771-.217 2.541-.651a4.8 4.8 0 0 0 1.827-1.813c.448-.775.672-1.647.672-2.618 0-.97-.222-1.843-.665-2.618a4.75 4.75 0 0 0-1.82-1.813 5.113 5.113 0 0 0-2.555-.651c-.924 0-1.773.217-2.548.651a4.786 4.786 0 0 0-1.834 1.813c-.448.775-.672 1.647-.672 2.618 0 .97.224 1.843.672 2.618a4.786 4.786 0 0 0 1.834 1.813 5.125 5.125 0 0 0 2.548.651Zm0-2.562c-.7 0-1.25-.229-1.652-.686-.401-.457-.602-1.069-.602-1.834 0-.784.2-1.402.602-1.855.401-.453.952-.679 1.652-.679s1.248.226 1.645.679c.397.453.595 1.071.595 1.855 0 .765-.2 1.377-.602 1.834-.401.457-.947.686-1.638.686Z"
                                                    ></path>
                                                </svg>
                                            </div>
                                            <div class="gm text-slate-800">PublicOne Inc.</div>
                                        </div>
                                    </td>
                                    <td class="vs ct"><div>Qonto</div></td>
                                    <td class="vs ct"><div>22/01/2022</div></td>
                                    <td class="vs ct"><div class="gm text-slate-800 ga">-$272.88</div></td>
                                </tr>
                                <tr>
                                    <td class="vs ct">
                                        <div class="flex items-center">
                                            <div class="af rounded-full mr-2 kq hg">
                                                <svg class="uv ov dd ys" viewBox="0 0 36 36">
                                                    <path
                                                        d="M15 17h-3v-5a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v5h-3v-2.5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0-.5.5V17Zm10 2a1 1 0 0 1 1 1v4a1 1 0 0 1-2 0v-1H12v1a1 1 0 0 1-2 0v-4a1 1 0 0 1 1-1h14Z"
                                                    ></path>
                                                </svg>
                                            </div>
                                            <div class="gm text-slate-800">Imperial Hotel ****</div>
                                        </div>
                                    </td>
                                    <td class="vs ct"><div>Revolut</div></td>
                                    <td class="vs ct"><div>22/01/2022</div></td>
                                    <td class="vs ct"><div class="gm text-slate-800 ga">-$999.44</div></td>
                                </tr>
                                <tr>
                                    <td class="vs ct">
                                        <div class="flex items-center">
                                            <div class="af rounded-full mr-2 kq hm">
                                                <svg class="uv ov dd yg" viewBox="0 0 36 36">
                                                    <path
                                                        d="m26.3 16.1-2.6-.9-1.8-4.6c-.1-.4-.5-.6-.9-.6h-9c-.6 0-1 .4-1 1v12c0 .6.4 1 1 1h3.3c.6 1.2 1.8 2 3.2 2 1.4 0 2.6-.8 3.2-2.1.1 0 .2.1.3.1h4c.6 0 1-.4 1-1v-6c0-.4-.3-.8-.7-.9ZM25 22h-3c-.2-1.7-1.7-3-3.5-3s-3.2 1.3-3.4 3H13V12h7.3l1.7 4.4c.1.3.3.5.6.6l2.4.7V22Z"
                                                    ></path>
                                                </svg>
                                            </div>
                                            <div class="gm text-slate-800">Uber</div>
                                        </div>
                                    </td>
                                    <td class="vs ct"><div>N26</div></td>
                                    <td class="vs ct"><div>22/01/2022</div></td>
                                    <td class="vs ct"><div class="gm text-slate-800 ga">-$1,029.77</div></td>
                                </tr>
                                <tr>
                                    <td class="vs ct">
                                        <div class="flex items-center">
                                            <div class="af rounded-full mr-2 kq pf">
                                                <svg class="uv ov dd ye" viewBox="0 0 36 36">
                                                    <path
                                                        d="M18 17v2.4h4.1c-.2 1-1.2 3-4 3-2.4 0-4.3-2-4.3-4.4 0-2.4 2-4.4 4.3-4.4 1.4 0 2.3.6 2.8 1.1l1.9-1.8C21.6 11.7 20 11 18.1 11c-3.9 0-7 3.1-7 7s3.1 7 7 7c4 0 6.7-2.8 6.7-6.8 0-.5 0-.8-.1-1.2H18Z"
                                                    ></path>
                                                </svg>
                                            </div>
                                            <div class="gm text-slate-800">Google Limited UK</div>
                                        </div>
                                    </td>
                                    <td class="vs ct"><div>N26</div></td>
                                    <td class="vs ct"><div>22/01/2022</div></td>
                                    <td class="vs ct"><div class="gm text-slate-800 ga">-$1,921.26</div></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="gu cg ha vg"><a class="block text-sm gm text-indigo-500 xu mp md" href="#0">View All -&gt;</a></div>
                </div>
            </div>
            <!-- Table (Recent Earnings) -->
            <div class="nk tts bg-white bh rounded-sm border border-slate-200">
                <header class="v_ vj cm ha"><h2 class="gg text-slate-800">Recent Earnings</h2></header>
                <div class="vr">
                    <div class="lx">
                        <table class="ac ox">
                            <thead class="gp gb yt hw rounded-sm">
                                <tr>
                                    <th class="vs ct"><div class="gg go">Counterparty</div></th>
                                    <th class="vs ct"><div class="gg go">Account</div></th>
                                    <th class="vs ct"><div class="gg go">Date</div></th>
                                    <th class="vs ct"><div class="gg ga">Amount</div></th>
                                </tr>
                            </thead>
                            <tbody class="text-sm lh lv">
                                <tr>
                                    <td class="vs ct">
                                        <div class="flex items-center">
                                            <div class="af rounded-full mr-2 kq hm">
                                                <svg class="uv ov dd yg" viewBox="0 0 36 36"><path d="M18 26a8 8 0 1 1 8-8 8.009 8.009 0 0 1-8 8Zm0-14a6 6 0 1 0 0 12 6 6 0 0 0 0-12Z"></path></svg>
                                            </div>
                                            <div class="gm text-slate-800">Acme LTD UK</div>
                                        </div>
                                    </td>
                                    <td class="vs ct"><div>Revolut</div></td>
                                    <td class="vs ct"><div>22/01/2022</div></td>
                                    <td class="vs ct"><div class="gm yf ga">+$1,299.22</div></td>
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
                                            <div class="gm text-slate-800">Web.com</div>
                                        </div>
                                    </td>
                                    <td class="vs ct"><div>Qonto</div></td>
                                    <td class="vs ct"><div>22/01/2022</div></td>
                                    <td class="vs ct"><div class="gm yf ga">+$1,200.88</div></td>
                                </tr>
                                <tr>
                                    <td class="vs ct">
                                        <div class="flex items-center">
                                            <div class="af rounded-full mr-2 kq pl">
                                                <svg class="uv ov dd ye" viewBox="0 0 36 36">
                                                    <path
                                                        d="M18 10.2c-4.4 0-8 3.6-8 8 0 3.5 2.3 6.5 5.5 7.6.4.1.5-.2.5-.4V24c-2.2.5-2.7-1-2.7-1-.4-.9-.9-1.2-.9-1.2-.7-.5.1-.5.1-.5.8.1 1.2.8 1.2.8.7 1.3 1.9.9 2.3.7.1-.5.3-.9.5-1.1-1.8-.2-3.6-.9-3.6-4 0-.9.3-1.6.8-2.1-.1-.2-.4-1 .1-2.1 0 0 .7-.2 2.2.8.6-.2 1.3-.3 2-.3s1.4.1 2 .3c1.5-1 2.2-.8 2.2-.8.4 1.1.2 1.9.1 2.1.5.6.8 1.3.8 2.1 0 3.1-1.9 3.7-3.7 3.9.3.4.6.9.6 1.6v2.2c0 .2.1.5.6.4 3.2-1.1 5.5-4.1 5.5-7.6-.1-4.4-3.7-8-8.1-8Z"
                                                    ></path>
                                                </svg>
                                            </div>
                                            <div class="gm text-slate-800">Github Inc.</div>
                                        </div>
                                    </td>
                                    <td class="vs ct"><div>N26</div></td>
                                    <td class="vs ct"><div>22/01/2022</div></td>
                                    <td class="vs ct"><div class="gm yf ga">+$499.99</div></td>
                                </tr>
                                <tr>
                                    <td class="vs ct">
                                        <div class="flex items-center">
                                            <div class="af rounded-full mr-2 kq"><img class="uv ov rounded-full" src="images/user-36-05.jpg" width="36" height="36" alt="User 05" /></div>
                                            <div class="gm text-slate-800">Aprilynne Pills</div>
                                        </div>
                                    </td>
                                    <td class="vs ct"><div>Revolut</div></td>
                                    <td class="vs ct"><div>22/01/2022</div></td>
                                    <td class="vs ct"><div class="gm yf ga">+$2,179.36</div></td>
                                </tr>
                                <tr>
                                    <td class="vs ct">
                                        <div class="flex items-center">
                                            <div class="af rounded-full mr-2 kq hq">
                                                <svg class="uv ov dd ym" viewBox="0 0 36 36">
                                                    <path
                                                        d="M18 21a3 3 0 1 1 0-6 3 3 0 0 1 0 6Zm-4.95 3.363-.707-.707a8 8 0 0 1 0-11.312l.707-.707 1.414 1.414-.707.707a6 6 0 0 0 0 8.484l.707.707-1.414 1.414Zm9.9 0-1.414-1.414.707-.707a6 6 0 0 0 0-8.484l-.707-.707 1.414-1.414.707.707a8 8 0 0 1 0 11.312l-.707.707Z"
                                                    ></path>
                                                </svg>
                                            </div>
                                            <div class="gm text-slate-800">Form Builder PRO</div>
                                        </div>
                                    </td>
                                    <td class="vs ct"><div>Revolut</div></td>
                                    <td class="vs ct"><div>22/01/2022</div></td>
                                    <td class="vs ct"><div class="gm yf ga">+$249.88</div></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="gu cg ha vg"><a class="block text-sm gm text-indigo-500 xu mp md" href="#0">View All -&gt;</a></div>
                </div>
            </div>
            <!-- Line chart (Saving Goals) -->
            <div class="flex fu nk kk tto bg-white bh rounded-sm border border-slate-200">
                <header class="v_ vj cm ha flex items-center"><h2 class="gg text-slate-800">Portfolio Returns</h2></header>
                <div class="v_ vl">
                    <div class="text-sm gw in">Hey Mark, you're very close to your goal:</div>
                    <div class="flex items-center">
                        <div class="text-3xl font-bold text-slate-800 mr-2">$5,247.09</div>
                        <div class="text-sm"><span class="gm yl">97.4%</span></div>
                    </div>
                    <div class="text-sm text-slate-500">Out of $6,000</div>
                </div>
                <div class="al"><canvas id="fintech-card-07" width="389" height="262"></canvas></div>
            </div>
            <!-- Line chart (Growth Portfolio) -->
            <div class="flex fu nk kx tto bg-white bh rounded-sm border border-slate-200">
                <header class="v_ vj cm ha flex items-center"><h2 class="gg text-slate-800">Growth Portfolio</h2></header>
                <div class="v_ vl">
                    <div class="text-sm gw in">Hey Mark, by age 65 you could have:</div>
                    <div class="text-3xl font-bold text-slate-800">$2M - $3.5M</div>
                    <div class="text-sm text-slate-500">Risk level 8</div>
                </div>
                <div class="al"><canvas id="fintech-card-08" width="389" height="262"></canvas></div>
            </div>
            <!-- Pie chart (Portfolio Value) -->
            <div class="flex fu nk kx tto bg-white bh rounded-sm border border-slate-200">
                <header class="v_ vj cm ha flex items-center"><h2 class="gg text-slate-800">Portfolio Value</h2></header>
                <div class="v_ vl">
                    <div class="text-sm gw in">Hey Mark, here is the value of your portfolio:</div>
                    <div class="text-3xl font-bold text-slate-800">$224,807.27</div>
                </div>
                <div class="al flex fu justify-center">
                    <div><canvas id="fintech-card-09" width="389" height="220"></canvas></div>
                    <div id="fintech-card-09-legend" class="v_ vj"><ul class="flex flex-wrap justify-center -m-1"></ul></div>
                </div>
            </div>
            <!-- Line charts (Stock graphs) -->
            <div class="flex fu nk kx tta bg-white bh rounded-sm border border-slate-200">
                <div class="v_ m_">
                    <header>
                        <h3 class="text-sm gg text-slate-500 gb rx"><span class="text-slate-800">Google</span> - Alphabet</h3>
                        <div class="gc font-bold text-slate-800 rx">$2,860.96</div>
                        <div class="text-sm"><span class="gm yb">-$49 (4,7%)</span> - Today</div>
                    </header>
                </div>
                <div class="al"><canvas id="fintech-card-10" width="286" height="98"></canvas></div>
            </div>
            <div class="flex fu nk kx tta bg-white bh rounded-sm border border-slate-200">
                <div class="v_ m_">
                    <header>
                        <h3 class="text-sm gg text-slate-500 gb rx"><span class="text-slate-800">Amzn</span> - Amazon Inc.</h3>
                        <div class="gc font-bold text-slate-800 rx">$3,400.35</div>
                        <div class="text-sm"><span class="gm yf">+$142 (3,7%)</span> - Today</div>
                    </header>
                </div>
                <div class="al"><canvas id="fintech-card-11" width="286" height="98"></canvas></div>
            </div>
            <div class="flex fu nk kx tta bg-white bh rounded-sm border border-slate-200">
                <div class="v_ m_">
                    <header>
                        <h3 class="gp gg text-slate-500 gb rx"><span class="text-slate-800">Twtr</span> - Twitter Inc.</h3>
                        <div class="gc font-bold text-slate-800 rx">$43.07</div>
                        <div class="text-sm"><span class="gm yf">+$4,20 (9,2%)</span> - Today</div>
                    </header>
                </div>
                <div class="al"><canvas id="fintech-card-12" width="286" height="98"></canvas></div>
            </div>
            <div class="flex fu nk kx tta bg-white bh rounded-sm border border-slate-200">
                <div class="v_ m_">
                    <header>
                        <h3 class="text-sm gg text-slate-500 gb rx"><span class="text-slate-800">Facebook</span> - Meta Inc.</h3>
                        <div class="gc font-bold text-slate-800 rx">$333.79</div>
                        <div class="text-sm"><span class="gm yf">+$19,70 (4%)</span> - Today</div>
                    </header>
                </div>
                <div class="al"><canvas id="fintech-card-13" width="286" height="98"></canvas></div>
            </div>
            <!-- Table (Market Trends) -->
            <div class="nk bg-white bh rounded-sm border border-slate-200">
                <header class="v_ vj cm ha"><h2 class="gg text-slate-800">Market Trends</h2></header>
                <div class="vr">
                    <div class="lx">
                        <table class="ac ox">
                            <thead class="gp gb yt hw rounded-sm">
                                <tr>
                                    <th class="vs ct"><div class="gg go">Market</div></th>
                                    <th class="vs ct"><div class="gg go">Mkt Cap</div></th>
                                    <th class="vs ct"><div class="gg go">Chart</div></th>
                                    <th class="vs ct"><div class="gg go">Price</div></th>
                                    <th class="vs ct"><div class="gg go">Chg. (24h)</div></th>
                                </tr>
                            </thead>
                            <tbody class="text-sm gm lh lv">
                                <tr>
                                    <td class="vs ct qa">
                                        <div class="flex items-center">
                                            <svg class="af mr-2 kq" width="36" height="36" viewBox="0 0 36 36">
                                                <circle fill="#1DA1F2" cx="18" cy="18" r="18"></circle>
                                                <path
                                                    d="M26 13.5c-.6.3-1.2.4-1.9.5.7-.4 1.2-1 1.4-1.8-.6.4-1.3.6-2.1.8-.6-.6-1.5-1-2.4-1-1.7 0-3.2 1.5-3.2 3.3 0 .3 0 .5.1.7-2.7-.1-5.2-1.4-6.8-3.4-.3.5-.4 1-.4 1.7 0 1.1.6 2.1 1.5 2.7-.5 0-1-.2-1.5-.4 0 1.6 1.1 2.9 2.6 3.2-.3.1-.6.1-.9.1-.2 0-.4 0-.6-.1.4 1.3 1.6 2.3 3.1 2.3-1.1.9-2.5 1.4-4.1 1.4H10c1.5.9 3.2 1.5 5 1.5 6 0 9.3-5 9.3-9.3v-.4c.7-.5 1.3-1.1 1.7-1.8z"
                                                    fill="#FFF"
                                                    fill-rule="nonzero"
                                                ></path>
                                            </svg>
                                            <div>
                                                <div class="text-slate-800 gb">Twtr</div>
                                                <div class="gp text-slate-500">Twitter Inc.</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="vs ct"><div class="gy go">33.94B</div></td>
                                    <td class="vs ct">
                                        <div class="ug"><canvas id="fintech-card-14-a" width="96" height="32"></canvas></div>
                                    </td>
                                    <td class="vs ct"><div class="go">$43.07</div></td>
                                    <td class="vs ct"><div class="go yf">+$4.20 (4%)</div></td>
                                </tr>
                                <tr>
                                    <td class="vs ct qa">
                                        <div class="flex items-center">
                                            <svg class="af mr-2 kq" width="36" height="36" viewBox="0 0 36 36">
                                                <circle fill="#1877F2" cx="18" cy="18" r="18"></circle>
                                                <path
                                                    d="M16.023 26 16 19h-3v-3h3v-2c0-2.7 1.672-4 4.08-4 1.153 0 2.144.086 2.433.124v2.821h-1.67c-1.31 0-1.563.623-1.563 1.536V16H23l-1 3h-2.72v7h-3.257Z"
                                                    fill="#FFF"
                                                    fill-rule="nonzero"
                                                ></path>
                                            </svg>
                                            <div>
                                                <div class="text-slate-800 gb">Fb</div>
                                                <div class="gp text-slate-500">Meta Inc.</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="vs ct"><div class="gy go">903.71B</div></td>
                                    <td class="vs ct">
                                        <div class="ug"><canvas id="fintech-card-14-b" width="96" height="32"></canvas></div>
                                    </td>
                                    <td class="vs ct"><div class="go">$324.81</div></td>
                                    <td class="vs ct"><div class="go yf">+$12.20 (3.7%)</div></td>
                                </tr>
                                <tr>
                                    <td class="vs ct qa">
                                        <div class="flex items-center">
                                            <svg class="af mr-2 kq" width="36" height="36" viewBox="0 0 36 36">
                                                <circle fill="#EA4335" cx="18" cy="18" r="18"></circle>
                                                <path
                                                    d="M18 17v2.4h4.1c-.2 1-1.2 3-4 3-2.4 0-4.3-2-4.3-4.4 0-2.4 2-4.4 4.3-4.4 1.4 0 2.3.6 2.8 1.1l1.9-1.8C21.6 11.7 20 11 18.1 11c-3.9 0-7 3.1-7 7s3.1 7 7 7c4 0 6.7-2.8 6.7-6.8 0-.5 0-.8-.1-1.2H18Z"
                                                    fill="#FFF"
                                                    fill-rule="nonzero"
                                                ></path>
                                            </svg>
                                            <div>
                                                <div class="text-slate-800 gb">Googl</div>
                                                <div class="gp text-slate-500">Alphabet Inc.</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="vs ct"><div class="gy go">1.70T</div></td>
                                    <td class="vs ct">
                                        <div class="ug"><canvas id="fintech-card-14-c" width="96" height="32"></canvas></div>
                                    </td>
                                    <td class="vs ct"><div class="go">$2,860.96</div></td>
                                    <td class="vs ct"><div class="go yi">-$12.20 (3.7%)</div></td>
                                </tr>
                                <tr>
                                    <td class="vs ct qa">
                                        <div class="flex items-center">
                                            <svg class="af mr-2 kq" width="36" height="36" viewBox="0 0 36 36">
                                                <circle fill="#1E293B" cx="18" cy="18" r="18"></circle>
                                                <path
                                                    d="M18.725 10.48C19.853 9.006 21.422 9 21.422 9s.233 1.384-.888 2.717c-1.197 1.424-2.557 1.191-2.557 1.191s-.256-1.12.748-2.429Zm-.605 3.398c.58 0 1.658-.79 3.06-.79 2.414 0 3.364 1.7 3.364 1.7s-1.858.94-1.858 3.221c0 2.573 2.314 3.46 2.314 3.46s-1.617 4.506-3.802 4.506c-1.003 0-1.783-.67-2.84-.67-1.078 0-2.147.695-2.843.695C13.52 26 11 21.725 11 18.29c0-3.381 2.133-5.155 4.134-5.155 1.3 0 2.31.743 2.986.743Z"
                                                    fill="#FFF"
                                                    fill-opacity=".9"
                                                    fill-rule="nonzero"
                                                ></path>
                                            </svg>
                                            <div>
                                                <div class="text-slate-800 gb">Aapl</div>
                                                <div class="gp text-slate-500">Apple Inc.</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="vs ct"><div class="gy go">2.77T</div></td>
                                    <td class="vs ct">
                                        <div class="ug"><canvas id="fintech-card-14-d" width="96" height="32"></canvas></div>
                                    </td>
                                    <td class="vs ct"><div class="go">$168.55</div></td>
                                    <td class="vs ct"><div class="go yf">+$7.44 (1.4%)</div></td>
                                </tr>
                                <tr>
                                    <td class="vs ct qa">
                                        <div class="flex items-center">
                                            <svg class="af mr-2 kq" width="36" height="36" viewBox="0 0 36 36">
                                                <circle fill="#0052FF" cx="18" cy="18" r="18"></circle>
                                                <path
                                                    d="M18.12 13.894c1.673 0 3.002 1.016 3.506 2.528H25C24.389 13.19 21.679 11 18.146 11 14.135 11 11 13.998 11 18.013S14.055 25 18.146 25c3.454 0 6.216-2.19 6.828-5.449h-3.348c-.478 1.512-1.807 2.555-3.48 2.555-2.312 0-3.932-1.747-3.932-4.093 0-2.372 1.595-4.12 3.905-4.12Z"
                                                    fill="#FFF"
                                                    fill-rule="nonzero"
                                                ></path>
                                            </svg>
                                            <div>
                                                <div class="text-slate-800 gb">Coin</div>
                                                <div class="gp text-slate-500">Coinbase Global Inc.</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="vs ct"><div class="gy go">50.89B</div></td>
                                    <td class="vs ct">
                                        <div class="ug"><canvas id="fintech-card-14-e" width="96" height="32"></canvas></div>
                                    </td>
                                    <td class="vs ct"><div class="go">$236.48</div></td>
                                    <td class="vs ct"><div class="go yi">-$24,30 (6.2%)</div></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
