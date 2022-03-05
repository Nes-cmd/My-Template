@extends('layouts.admin.app')
@section('contents')
<div class="va jn teb vf ox uz ri">
        <!-- Page header -->
        <div class="ry">
            <h1 class="gc zc text-slate-800 font-bold">Dropdown ✨</h1>
        </div>

        <div class="cg border-slate-200">
            <!-- Components -->
            <div class="ln ie if">
                <!-- Classic Dropdown -->
                <div>
                    <h2 class="gc text-slate-800 font-bold rb">Classic Dropdown</h2>
                    <!-- Start -->
                    <div class="td inline-flex" x-data="{ open: false, selected: 2 }">
                        <button
                            class="btn fh uw bg-white border-slate-200 hover--border-slate-300 text-slate-500 hover--text-slate-600"
                            aria-label="Select date range"
                            aria-haspopup="true"
                            @click.prevent="open = !open"
                            :aria-expanded="open"
                        >
                            <span class="flex items-center">
                                <span x-text="$refs.options.children[selected].children[1].innerHTML"></span>
                            </span>
                            <svg class="af rq dd yt" width="11" height="7" viewBox="0 0 11 7">
                                <path d="M5.4 6.8L0 1.4 1.4 0l4 4 4-4 1.4 1.4z"></path>
                            </svg>
                        </button>
                        <div
                            class="nv tp tq tb ox bg-white border border-slate-200 vz rounded bh lw io"
                            @click.outside="open = false"
                            @keydown.escape.window="open = false"
                            x-show="open"
                            x-transition:enter="b_ ws wt a_"
                            x-transition:enter-start="opacity-0 am"
                            x-transition:enter-end="bf ag"
                            x-transition:leave="b_ ws wt"
                            x-transition:leave-start="bf"
                            x-transition:leave-end="opacity-0"
                            x-cloak=""
                        >
                            <div class="gm text-sm gz" x-ref="options">
                                <button
                                    tabindex="0"
                                    class="flex items-center ox wz vk vx aq"
                                    :class="selected === 0 &amp;&amp; 'text-indigo-500'"
                                    @click="selected = 0;open = false"
                                    @focus="open = true"
                                    @focusout="open = false"
                                >
                                    <svg class="af mr-2 dd text-indigo-400" :class="selected !== 0 &amp;&amp; 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                                        <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z"></path>
                                    </svg>
                                    <span>Today</span>
                                </button>
                                <button
                                    tabindex="0"
                                    class="flex items-center ox wz vk vx aq"
                                    :class="selected === 1 &amp;&amp; 'text-indigo-500'"
                                    @click="selected = 1;open = false"
                                    @focus="open = true"
                                    @focusout="open = false"
                                >
                                    <svg class="af mr-2 dd text-indigo-400" :class="selected !== 1 &amp;&amp; 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                                        <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z"></path>
                                    </svg>
                                    <span>Last 7 Days</span>
                                </button>
                                <button
                                    tabindex="0"
                                    class="flex items-center ox wz vk vx aq"
                                    :class="selected === 2 &amp;&amp; 'text-indigo-500'"
                                    @click="selected = 2;open = false"
                                    @focus="open = true"
                                    @focusout="open = false"
                                >
                                    <svg class="af mr-2 dd text-indigo-400" :class="selected !== 2 &amp;&amp; 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                                        <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z"></path>
                                    </svg>
                                    <span>Last Month</span>
                                </button>
                                <button
                                    tabindex="0"
                                    class="flex items-center ox wz vk vx aq"
                                    :class="selected === 3 &amp;&amp; 'text-indigo-500'"
                                    @click="selected = 3;open = false"
                                    @focus="open = true"
                                    @focusout="open = false"
                                >
                                    <svg class="af mr-2 dd text-indigo-400" :class="selected !== 3 &amp;&amp; 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                                        <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z"></path>
                                    </svg>
                                    <span>Last 12 Months</span>
                                </button>
                                <button
                                    tabindex="0"
                                    class="flex items-center ox wz vk vx aq"
                                    :class="selected === 4 &amp;&amp; 'text-indigo-500'"
                                    @click="selected = 4;open = false"
                                    @focus="open = true"
                                    @focusout="open = false"
                                >
                                    <svg class="af mr-2 dd text-indigo-400" :class="selected !== 4 &amp;&amp; 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                                        <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z"></path>
                                    </svg>
                                    <span>All Time</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- End -->
                </div>

                <!-- Full-width Dropdown -->
                <div class="uo">
                    <h2 class="gc text-slate-800 font-bold rb">Full-width Dropdown</h2>
                    <!-- Start -->
                    <div class="td inline-flex ox" x-data="{ open: false, selected: 0 }">
                        <button
                            class="btn ox fh uw bg-white border-slate-200 hover--border-slate-300 text-slate-500 hover--text-slate-600"
                            aria-label="Select date range"
                            aria-haspopup="true"
                            @click.prevent="open = !open"
                            :aria-expanded="open"
                        >
                            <span class="flex items-center">
                                <span x-text="$refs.options.children[selected].children[0].innerHTML"></span>
                            </span>
                            <svg class="af rq dd yt" width="11" height="7" viewBox="0 0 11 7">
                                <path d="M5.4 6.8L0 1.4 1.4 0l4 4 4-4 1.4 1.4z"></path>
                            </svg>
                        </button>
                        <div
                            class="nv tp tq tb ox bg-white border border-slate-200 vz rounded bh lw io"
                            @click.outside="open = false"
                            @keydown.escape.window="open = false"
                            x-show="open"
                            x-transition:enter="b_ ws wt a_"
                            x-transition:enter-start="opacity-0 am"
                            x-transition:enter-end="bf ag"
                            x-transition:leave="b_ ws wt"
                            x-transition:leave-start="bf"
                            x-transition:leave-end="opacity-0"
                            x-cloak=""
                        >
                            <div class="gm text-sm gz lh ld" x-ref="options">
                                <button
                                    tabindex="0"
                                    class="flex items-center fh ox wz vc vx aq"
                                    :class="selected === 0 &amp;&amp; 'text-indigo-500'"
                                    @click="selected = 0;open = false"
                                    @focus="open = true"
                                    @focusout="open = false"
                                >
                                    <span>Most Popular</span>
                                    <svg class="af r_ dd text-indigo-400" :class="selected !== 0 &amp;&amp; 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                                        <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z"></path>
                                    </svg>
                                </button>
                                <button
                                    tabindex="0"
                                    class="flex items-center fh ox wz vc vx aq"
                                    :class="selected === 1 &amp;&amp; 'text-indigo-500'"
                                    @click="selected = 1;open = false"
                                    @focus="open = true"
                                    @focusout="open = false"
                                >
                                    <span>Newest</span>
                                    <svg class="af r_ dd text-indigo-400" :class="selected !== 1 &amp;&amp; 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                                        <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z"></path>
                                    </svg>
                                </button>
                                <button
                                    tabindex="0"
                                    class="flex items-center fh ox wz vc vx aq"
                                    :class="selected === 2 &amp;&amp; 'text-indigo-500'"
                                    @click="selected = 2;open = false"
                                    @focus="open = true"
                                    @focusout="open = false"
                                >
                                    <span>Lowest Price</span>
                                    <svg class="af r_ dd text-indigo-400" :class="selected !== 2 &amp;&amp; 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                                        <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z"></path>
                                    </svg>
                                </button>
                                <button
                                    tabindex="0"
                                    class="flex items-center fh ox wz vc vx aq"
                                    :class="selected === 3 &amp;&amp; 'text-indigo-500'"
                                    @click="selected = 3;open = false"
                                    @focus="open = true"
                                    @focusout="open = false"
                                >
                                    <span>Highest Price</span>
                                    <svg class="af r_ dd text-indigo-400" :class="selected !== 3 &amp;&amp; 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                                        <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- End -->
                </div>

                <!-- Filter -->
                <div>
                    <h2 class="gc text-slate-800 font-bold rb">Filter</h2>
                    <!-- Start -->
                    <div class="td inline-flex" x-data="{ open: false }">
                        <button class="btn bg-white border-slate-200 hover--border-slate-300 text-slate-500 hover--text-slate-600" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open">
                            <span class="tc">Filter</span><wbr />
                            <svg class="o_ sq dd" viewBox="0 0 16 16">
                                <path d="M9 15H7a1 1 0 010-2h2a1 1 0 010 2zM11 11H5a1 1 0 010-2h6a1 1 0 010 2zM13 7H3a1 1 0 010-2h10a1 1 0 010 2zM15 3H1a1 1 0 010-2h14a1 1 0 010 2z"></path>
                            </svg>
                        </button>
                        <div
                            class="ah nv tp tq tb ux bg-white border border-slate-200 mo rounded bh lw io"
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
                            <div class="gp gg yt gb mo ma va">Filters</div>
                            <ul class="rw">
                                <li class="vk vx">
                                    <label class="flex items-center">
                                        <input type="checkbox" class="to" checked="checked" />
                                        <span class="text-sm gm r_">Direct VS Indirect</span>
                                    </label>
                                </li>
                                <li class="vk vx">
                                    <label class="flex items-center">
                                        <input type="checkbox" class="to" checked="checked" />
                                        <span class="text-sm gm r_">Real Time Value</span>
                                    </label>
                                </li>
                                <li class="vk vx">
                                    <label class="flex items-center">
                                        <input type="checkbox" class="to" checked="checked" />
                                        <span class="text-sm gm r_">Top Channels</span>
                                    </label>
                                </li>
                                <li class="vk vx">
                                    <label class="flex items-center">
                                        <input type="checkbox" class="to" />
                                        <span class="text-sm gm r_">Sales VS Refunds</span>
                                    </label>
                                </li>
                                <li class="vk vx">
                                    <label class="flex items-center">
                                        <input type="checkbox" class="to" />
                                        <span class="text-sm gm r_">Last Order</span>
                                    </label>
                                </li>
                                <li class="vk vx">
                                    <label class="flex items-center">
                                        <input type="checkbox" class="to" />
                                        <span class="text-sm gm r_">Total Spent</span>
                                    </label>
                                </li>
                            </ul>
                            <div class="vc vx cg border-slate-200 hw">
                                <ul class="flex items-center fh">
                                    <li>
                                        <button class="btn-xs bg-white border-slate-200 hover--border-slate-300 text-slate-500 hover--text-slate-600">Clear</button>
                                    </li>
                                    <li>
                                        <button class="btn-xs hd wq ye" @click="open = false" @focusout="open = false">Apply</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End -->
                </div>

                <!-- Profile -->
                <div>
                    <h2 class="gc text-slate-800 font-bold rb">Profile</h2>
                    <!-- Start -->
                    <div class="td inline-flex" x-data="{ open: false }">
                        <button class="inline-flex justify-center items-center kr" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open">
                            <img class="un or rounded-full" src="images/user-avatar-32.png" width="32" height="32" alt="User" />
                            <div class="flex items-center lz">
                                <span class="lz r_ text-sm gm ko">Acme Inc.</span>
                                <svg class="w-3 h-3 af rq dd yt" viewBox="0 0 12 12">
                                    <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                </svg>
                            </div>
                        </button>
                        <div
                            class="ah nv tp tq tb uw bg-white border border-slate-200 vz rounded bh lw io"
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
                            <div class="mf ma vx rx cm border-slate-200">
                                <div class="gm text-slate-800">Acme Inc.</div>
                                <div class="gp text-slate-500 gw">Administrator</div>
                            </div>
                            <ul>
                                <li>
                                    <a class="gm text-sm text-indigo-500 xu flex items-center vk vx" href="settings.html" @click="open = false" @focus="open = true" @focusout="open = false">Settings</a>
                                </li>
                                <li>
                                    <a class="gm text-sm text-indigo-500 xu flex items-center vk vx" href="signin.html" @click="open = false" @focus="open = true" @focusout="open = false">Sign Out</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End -->
                </div>

                <!-- Switch Account -->
                <div>
                    <h2 class="gc text-slate-800 font-bold rb">Switch Account</h2>
                    <!-- Start -->
                    <div class="td" x-data="{ open: false }">
                        <button class="al flex items-center lz" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open">
                            <img class="un or rounded-full mr-2" src="images/user-avatar-32.png" width="32" height="32" alt="Group 01" />
                            <div class="lz">
                                <span class="text-sm gm">Acme Inc.</span>
                            </div>
                            <svg class="w-3 h-3 af rq dd yt" viewBox="0 0 12 12">
                                <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                            </svg>
                        </button>
                        <div
                            class="ah nv tp tq tb uk bg-white border border-slate-200 vz rounded bh lw io"
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
                                <li>
                                    <a class="gm text-sm gz xl block vz vx" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">
                                        <div class="flex items-center fh">
                                            <div class="al flex items-center lz">
                                                <img class="us oo rounded-full mr-2" src="images/channel-01.png" width="28" height="28" alt="Channel 01" />
                                                <div class="lz">Acme Inc.</div>
                                            </div>
                                            <svg class="w-3 h-3 af dd text-indigo-400 rq" viewBox="0 0 12 12">
                                                <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z"></path>
                                            </svg>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="gm text-sm gz xl block vz vx" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">
                                        <div class="flex items-center fh">
                                            <div class="al flex items-center lz">
                                                <img class="us oo rounded-full mr-2" src="images/channel-02.png" width="28" height="28" alt="Channel 02" />
                                                <div class="lz">Acme Limited</div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="gm text-sm gz xl block vz vx" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">
                                        <div class="flex items-center fh">
                                            <div class="al flex items-center lz">
                                                <img class="us oo rounded-full mr-2" src="images/channel-03.png" width="28" height="28" alt="Channel 03" />
                                                <div class="lz">Acme Srl</div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End -->
                </div>

                <!-- Notification -->
                <div>
                    <h2 class="gc text-slate-800 font-bold rb">Notification</h2>
                    <!-- Start -->
                    <div class="td inline-flex" x-data="{ open: false }">
                        <button class="un or flex items-center justify-center hp xr b_ we rounded-full" :class="{ 'hv': open }" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open">
                            <span class="tc">Notifications</span>
                            <svg class="o_ sq" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                <path class="dd text-slate-500" d="M6.5 0C2.91 0 0 2.462 0 5.5c0 1.075.37 2.074 1 2.922V12l2.699-1.542A7.454 7.454 0 006.5 11c3.59 0 6.5-2.462 6.5-5.5S10.09 0 6.5 0z"></path>
                                <path
                                    class="dd yt"
                                    d="M16 9.5c0-.987-.429-1.897-1.147-2.639C14.124 10.348 10.66 13 6.5 13c-.103 0-.202-.018-.305-.021C7.231 13.617 8.556 14 10 14c.449 0 .886-.04 1.307-.11L15 16v-4h-.012C15.627 11.285 16 10.425 16 9.5z"
                                ></path>
                            </svg>
                            <div class="tp tk tw ui os hq cp c_ rounded-full"></div>
                        </button>
                        <div
                            class="ah nv tp tq tb il kz ub bg-white border border-slate-200 vz rounded bh lw io"
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
                            <div class="gp gg yt gb mo ma va">Notifications</div>
                            <ul>
                                <li class="cm border-slate-200 wb">
                                    <a class="block vc va wz" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">
                                        <span class="block text-sm in">
                                            📣 <span class="gm text-slate-800">Edit your information in a swipe</span> Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.
                                        </span>
                                        <span class="block gp gm yt">Feb 12, 2021</span>
                                    </a>
                                </li>
                                <li class="cm border-slate-200 wb">
                                    <a class="block vc va wz" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">
                                        <span class="block text-sm in">
                                            📣 <span class="gm text-slate-800">Edit your information in a swipe</span> Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.
                                        </span>
                                        <span class="block gp gm yt">Feb 9, 2021</span>
                                    </a>
                                </li>
                                <li class="cm border-slate-200 wb">
                                    <a class="block vc va wz" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">
                                        <span class="block text-sm in">
                                            🚀<span class="gm text-slate-800">Say goodbye to paper receipts!</span> Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.
                                        </span>
                                        <span class="block gp gm yt">Jan 24, 2020</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End -->
                </div>

                <!-- Help Center -->
                <div>
                    <h2 class="gc text-slate-800 font-bold rb">Help Center</h2>
                    <!-- Start -->
                    <div class="td inline-flex" x-data="{ open: false }">
                        <button class="un or flex items-center justify-center hp xr b_ we rounded-full" :class="{ 'hv': open }" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open">
                            <span class="tc">Info</span>
                            <svg class="o_ sq" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                <path class="dd text-slate-500" d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 12c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm1-3H7V4h2v5z"></path>
                            </svg>
                        </button>
                        <div
                            class="ah nv tp tq tb uw bg-white border border-slate-200 vz rounded bh lw io"
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
                            <div class="gp gg yt gb mo ma vx">Need help?</div>
                            <ul>
                                <li>
                                    <a class="gm text-sm text-indigo-500 xu flex items-center vk vx" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">
                                        <svg class="w-3 h-3 dd text-indigo-300 af mr-2" viewBox="0 0 12 12">
                                            <rect y="3" width="12" height="9" rx="1"></rect>
                                            <path d="M2 0h8v2H2z"></path>
                                        </svg>
                                        <span>Documentation</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="gm text-sm text-indigo-500 xu flex items-center vk vx" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">
                                        <svg class="w-3 h-3 dd text-indigo-300 af mr-2" viewBox="0 0 12 12">
                                            <path d="M10.5 0h-9A1.5 1.5 0 000 1.5v9A1.5 1.5 0 001.5 12h9a1.5 1.5 0 001.5-1.5v-9A1.5 1.5 0 0010.5 0zM10 7L8.207 5.207l-3 3-1.414-1.414 3-3L5 2h5v5z"></path>
                                        </svg>
                                        <span>Support Site</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="gm text-sm text-indigo-500 xu flex items-center vk vx" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">
                                        <svg class="w-3 h-3 dd text-indigo-300 af mr-2" viewBox="0 0 12 12">
                                            <path d="M11.854.146a.5.5 0 00-.525-.116l-11 4a.5.5 0 00-.015.934l4.8 1.921 1.921 4.8A.5.5 0 007.5 12h.008a.5.5 0 00.462-.329l4-11a.5.5 0 00-.116-.525z"></path>
                                        </svg>
                                        <span>Contact us</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End -->
                </div>

                <!-- Quick Selection -->
                <div>
                    <h2 class="gc text-slate-800 font-bold rb">Quick Selection</h2>
                    <!-- Start -->
                    <div class="td inline-flex" x-data="{ open: false }">
                        <button class="yt xa rounded-full" :class="{ 'hp text-slate-500': open }" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open">
                            <span class="tc">Menu</span>
                            <svg class="un or dd" viewBox="0 0 32 32">
                                <circle cx="16" cy="16" r="2"></circle>
                                <circle cx="10" cy="16" r="2"></circle>
                                <circle cx="22" cy="16" r="2"></circle>
                            </svg>
                        </button>
                        <div
                            class="ah nv tp tq tb u_ bg-white border border-slate-200 vz rounded bh lw io"
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
                                <li>
                                    <a class="gm text-sm gz xl flex vk vx" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">Option 1</a>
                                </li>
                                <li>
                                    <a class="gm text-sm gz xl flex vk vx" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">Option 2</a>
                                </li>
                                <li>
                                    <a class="gm text-sm yi xc flex vk vx" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">Remove</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End -->
                </div>

                <!-- Datepicker (built with flatpickr) -->
                <div>
                    <h2 class="gc text-slate-800 font-bold rb">Datepicker (built with <a class="bt xb" href="https://github.com/flatpickr/flatpickr" target="_blank">flatpickr</a>)</h2>
                    <!-- Start -->
                    <div class="td">
                        <input class="datepicker tn mr text-slate-500 hover--text-slate-600 gm xk ok" placeholder="Select dates" />
                        <div class="tp tm tg flex items-center pointer-events-none">
                            <svg class="o_ sq dd text-slate-500 ml-3" viewBox="0 0 16 16">
                                <path d="M15 2h-2V0h-2v2H9V0H7v2H5V0H3v2H1a1 1 0 00-1 1v12a1 1 0 001 1h14a1 1 0 001-1V3a1 1 0 00-1-1zm-1 12H2V6h12v8z"></path>
                            </svg>
                        </div>
                    </div>
                    <!-- End -->
                </div>
            </div>
        </div>
    </div>
@endsection