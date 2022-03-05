@extends('layouts.admin.app')
@section('contents')
<div class="va jn teb vf ox uz ri">
    <!-- Page header -->
    <div class="_u _w _g ry">
        <!-- Left: Title -->
        <div class="rw kj">
            <h1 class="gc zc text-slate-800 font-bold">Acme Inc. ✨</h1>
        </div>

        <!-- Right: Actions -->
        <div class="sx fr _p fc _b fp">
            <form class="td">
                <label for="action-search" class="tc">Search</label> <input id="action-search" class="tn mr xk" type="search" placeholder="Search…" />
                <button class="tp tm tg kr" type="submit" aria-label="Search">
                    <svg class="o_ sq af dd yt ks ml-3 mr-2" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 14c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7zM7 2C4.243 2 2 4.243 2 7s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5z"></path>
                        <path d="M15.707 14.293L13.314 11.9a8.019 8.019 0 01-1.414 1.414l2.393 2.393a.997.997 0 001.414 0 .999.999 0 000-1.414z"></path>
                    </svg>
                </button>
            </form>
            <button class="btn hd wq ye">
                <svg class="o_ sq dd bo af" viewBox="0 0 16 16"><path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"></path></svg>
                <span class="hidden tnm r_">Add Member</span>
            </button>
        </div>
    </div>

    <!-- Cards -->
    <div class="sx fi fd">
        <!-- Users cards -->
        <div class="nk kx tta bg-white bh rounded-sm border border-slate-200">
            <div class="flex fu sz">
                <div class="al vi">
                    <div class="td">
                        <div class="tp tk tw inline-flex" x-data="{ open: false }">
                            <button class="yt xa rounded-full" :class="{ 'hp text-slate-500': open }" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open">
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
                    <header>
                        <div class="flex justify-center in">
                            <a class="td inline-flex ff" href="#0">
                                <div class="tp tk tw sv bg-white rounded-full shadow" aria-hidden="true">
                                    <svg class="un or dd yl" viewBox="0 0 32 32">
                                        <path
                                            d="M21 14.077a.75.75 0 01-.75-.75 1.5 1.5 0 00-1.5-1.5.75.75 0 110-1.5 1.5 1.5 0 001.5-1.5.75.75 0 111.5 0 1.5 1.5 0 001.5 1.5.75.75 0 010 1.5 1.5 1.5 0 00-1.5 1.5.75.75 0 01-.75.75zM14 24.077a1 1 0 01-1-1 4 4 0 00-4-4 1 1 0 110-2 4 4 0 004-4 1 1 0 012 0 4 4 0 004 4 1 1 0 010 2 4 4 0 00-4 4 1 1 0 01-1 1z"
                                        ></path>
                                    </svg>
                                </div>
                                <img class="rounded-full" src="images/user-64-01.jpg" width="64" height="64" alt="User 01" />
                            </a>
                        </div>
                        <div class="gu">
                            <a class="inline-flex text-slate-800 xd" href="#0"> <h2 class="gh gk justify-center gg">Dominik McNeail</h2> </a>
                        </div>
                        <div class="flex justify-center items-center"><span class="text-sm gm yt sm mr-1">-&gt;</span> <span>🇮🇹</span></div>
                    </header>
                    <div class="gu iw"><div class="text-sm">Fitness Fanatic, Design Enthusiast, Mentor, Meetup Organizer &amp; PHP Lover.</div></div>
                </div>
                <div class="cg border-slate-200">
                    <a class="block gu text-sm text-indigo-500 xu gm vx vj" href="messages.html">
                        <div class="flex items-center justify-center">
                            <svg class="o_ sq dd af mr-2" viewBox="0 0 16 16">
                                <path d="M8 0C3.6 0 0 3.1 0 7s3.6 7 8 7h.6l5.4 2v-4.4c1.2-1.2 2-2.8 2-4.6 0-3.9-3.6-7-8-7zm4 10.8v2.3L8.9 12H8c-3.3 0-6-2.2-6-5s2.7-5 6-5 6 2.2 6 5c0 2.2-2 3.8-2 3.8z"></path>
                            </svg>
                            <span>Send Message</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="nk kx tta bg-white bh rounded-sm border border-slate-200">
            <div class="flex fu sz">
                <div class="al vi">
                    <div class="td">
                        <div class="tp tk tw inline-flex" x-data="{ open: false }">
                            <button class="yt xa rounded-full" :class="{ 'hp text-slate-500': open }" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open">
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
                    <header>
                        <div class="flex justify-center in">
                            <a class="td inline-flex ff" href="#0">
                                <div class="tp tk tw sv bg-white rounded-full shadow" aria-hidden="true">
                                    <svg class="un or dd yl" viewBox="0 0 32 32">
                                        <path
                                            d="M21 14.077a.75.75 0 01-.75-.75 1.5 1.5 0 00-1.5-1.5.75.75 0 110-1.5 1.5 1.5 0 001.5-1.5.75.75 0 111.5 0 1.5 1.5 0 001.5 1.5.75.75 0 010 1.5 1.5 1.5 0 00-1.5 1.5.75.75 0 01-.75.75zM14 24.077a1 1 0 01-1-1 4 4 0 00-4-4 1 1 0 110-2 4 4 0 004-4 1 1 0 012 0 4 4 0 004 4 1 1 0 010 2 4 4 0 00-4 4 1 1 0 01-1 1z"
                                        ></path>
                                    </svg>
                                </div>
                                <img class="rounded-full" src="images/user-64-02.jpg" width="64" height="64" alt="User 02" />
                            </a>
                        </div>
                        <div class="gu">
                            <a class="inline-flex text-slate-800 xd" href="#0"> <h2 class="gh gk justify-center gg">Ivan Mesaros</h2> </a>
                        </div>
                        <div class="flex justify-center items-center"><span class="text-sm gm yt sm mr-1">-&gt;</span> <span>🇫🇷</span></div>
                    </header>
                    <div class="gu iw"><div class="text-sm">Fitness Fanatic, Design Enthusiast, Mentor, Meetup Organizer &amp; PHP Lover.</div></div>
                </div>
                <div class="cg border-slate-200">
                    <a class="block gu text-sm text-indigo-500 xu gm vx vj" href="messages.html">
                        <div class="flex items-center justify-center">
                            <svg class="o_ sq dd af mr-2" viewBox="0 0 16 16">
                                <path d="M8 0C3.6 0 0 3.1 0 7s3.6 7 8 7h.6l5.4 2v-4.4c1.2-1.2 2-2.8 2-4.6 0-3.9-3.6-7-8-7zm4 10.8v2.3L8.9 12H8c-3.3 0-6-2.2-6-5s2.7-5 6-5 6 2.2 6 5c0 2.2-2 3.8-2 3.8z"></path>
                            </svg>
                            <span>Send Message</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="nk kx tta bg-white bh rounded-sm border border-slate-200">
            <div class="flex fu sz">
                <div class="al vi">
                    <div class="td">
                        <div class="tp tk tw inline-flex" x-data="{ open: false }">
                            <button class="yt xa rounded-full" :class="{ 'hp text-slate-500': open }" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open">
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
                    <header>
                        <div class="flex justify-center in">
                            <a class="td inline-flex ff" href="#0">
                                <div class="tp tk tw sv bg-white rounded-full shadow" aria-hidden="true">
                                    <svg class="un or dd yl" viewBox="0 0 32 32">
                                        <path
                                            d="M21 14.077a.75.75 0 01-.75-.75 1.5 1.5 0 00-1.5-1.5.75.75 0 110-1.5 1.5 1.5 0 001.5-1.5.75.75 0 111.5 0 1.5 1.5 0 001.5 1.5.75.75 0 010 1.5 1.5 1.5 0 00-1.5 1.5.75.75 0 01-.75.75zM14 24.077a1 1 0 01-1-1 4 4 0 00-4-4 1 1 0 110-2 4 4 0 004-4 1 1 0 012 0 4 4 0 004 4 1 1 0 010 2 4 4 0 00-4 4 1 1 0 01-1 1z"
                                        ></path>
                                    </svg>
                                </div>
                                <img class="rounded-full" src="images/user-64-03.jpg" width="64" height="64" alt="User 03" />
                            </a>
                        </div>
                        <div class="gu">
                            <a class="inline-flex text-slate-800 xd" href="#0"> <h2 class="gh gk justify-center gg">Tisha Yanchev</h2> </a>
                        </div>
                        <div class="flex justify-center items-center"><span class="text-sm gm yt sm mr-1">-&gt;</span> <span>🇩🇪</span></div>
                    </header>
                    <div class="gu iw"><div class="text-sm">Fitness Fanatic, Design Enthusiast, Mentor, Meetup Organizer &amp; PHP Lover.</div></div>
                </div>
                <div class="cg border-slate-200">
                    <a class="block gu text-sm text-indigo-500 xu gm vx vj" href="messages.html">
                        <div class="flex items-center justify-center">
                            <svg class="o_ sq dd af mr-2" viewBox="0 0 16 16">
                                <path d="M8 0C3.6 0 0 3.1 0 7s3.6 7 8 7h.6l5.4 2v-4.4c1.2-1.2 2-2.8 2-4.6 0-3.9-3.6-7-8-7zm4 10.8v2.3L8.9 12H8c-3.3 0-6-2.2-6-5s2.7-5 6-5 6 2.2 6 5c0 2.2-2 3.8-2 3.8z"></path>
                            </svg>
                            <span>Send Message</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="nk kx tta bg-white bh rounded-sm border border-slate-200">
            <div class="flex fu sz">
                <div class="al vi">
                    <div class="td">
                        <div class="tp tk tw inline-flex" x-data="{ open: false }">
                            <button class="yt xa rounded-full" :class="{ 'hp text-slate-500': open }" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open">
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
                    <header>
                        <div class="flex justify-center in">
                            <a class="td inline-flex ff" href="#0">
                                <div class="tp tk tw sv bg-white rounded-full shadow" aria-hidden="true">
                                    <svg class="un or dd yl" viewBox="0 0 32 32">
                                        <path
                                            d="M21 14.077a.75.75 0 01-.75-.75 1.5 1.5 0 00-1.5-1.5.75.75 0 110-1.5 1.5 1.5 0 001.5-1.5.75.75 0 111.5 0 1.5 1.5 0 001.5 1.5.75.75 0 010 1.5 1.5 1.5 0 00-1.5 1.5.75.75 0 01-.75.75zM14 24.077a1 1 0 01-1-1 4 4 0 00-4-4 1 1 0 110-2 4 4 0 004-4 1 1 0 012 0 4 4 0 004 4 1 1 0 010 2 4 4 0 00-4 4 1 1 0 01-1 1z"
                                        ></path>
                                    </svg>
                                </div>
                                <img class="rounded-full" src="images/user-64-04.jpg" width="64" height="64" alt="User 04" />
                            </a>
                        </div>
                        <div class="gu">
                            <a class="inline-flex text-slate-800 xd" href="#0"> <h2 class="gh gk justify-center gg">Sergio Gonnelli</h2> </a>
                        </div>
                        <div class="flex justify-center items-center"><span class="text-sm gm yt sm mr-1">-&gt;</span> <span>🇮🇹</span></div>
                    </header>
                    <div class="gu iw"><div class="text-sm">Fitness Fanatic, Design Enthusiast, Mentor, Meetup Organizer &amp; PHP Lover.</div></div>
                </div>
                <div class="cg border-slate-200">
                    <a class="block gu text-sm text-indigo-500 xu gm vx vj" href="messages.html">
                        <div class="flex items-center justify-center">
                            <svg class="o_ sq dd af mr-2" viewBox="0 0 16 16">
                                <path d="M8 0C3.6 0 0 3.1 0 7s3.6 7 8 7h.6l5.4 2v-4.4c1.2-1.2 2-2.8 2-4.6 0-3.9-3.6-7-8-7zm4 10.8v2.3L8.9 12H8c-3.3 0-6-2.2-6-5s2.7-5 6-5 6 2.2 6 5c0 2.2-2 3.8-2 3.8z"></path>
                            </svg>
                            <span>Send Message</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="nk kx tta bg-white bh rounded-sm border border-slate-200">
            <div class="flex fu sz">
                <div class="al vi">
                    <div class="td">
                        <div class="tp tk tw inline-flex" x-data="{ open: false }">
                            <button class="yt xa rounded-full" :class="{ 'hp text-slate-500': open }" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open">
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
                    <header>
                        <div class="flex justify-center in">
                            <a class="td inline-flex ff" href="#0">
                                <div class="tp tk tw sv bg-white rounded-full shadow" aria-hidden="true">
                                    <svg class="un or dd yl" viewBox="0 0 32 32">
                                        <path
                                            d="M21 14.077a.75.75 0 01-.75-.75 1.5 1.5 0 00-1.5-1.5.75.75 0 110-1.5 1.5 1.5 0 001.5-1.5.75.75 0 111.5 0 1.5 1.5 0 001.5 1.5.75.75 0 010 1.5 1.5 1.5 0 00-1.5 1.5.75.75 0 01-.75.75zM14 24.077a1 1 0 01-1-1 4 4 0 00-4-4 1 1 0 110-2 4 4 0 004-4 1 1 0 012 0 4 4 0 004 4 1 1 0 010 2 4 4 0 00-4 4 1 1 0 01-1 1z"
                                        ></path>
                                    </svg>
                                </div>
                                <img class="rounded-full" src="images/user-64-05.jpg" width="64" height="64" alt="User 05" />
                            </a>
                        </div>
                        <div class="gu">
                            <a class="inline-flex text-slate-800 xd" href="#0"> <h2 class="gh gk justify-center gg">Jerzy Wierzy</h2> </a>
                        </div>
                        <div class="flex justify-center items-center"><span class="text-sm gm yt sm mr-1">-&gt;</span> <span>🇪🇸</span></div>
                    </header>
                    <div class="gu iw"><div class="text-sm">Fitness Fanatic, Design Enthusiast, Mentor, Meetup Organizer &amp; PHP Lover.</div></div>
                </div>
                <div class="cg border-slate-200">
                    <a class="block gu text-sm text-indigo-500 xu gm vx vj" href="messages.html">
                        <div class="flex items-center justify-center">
                            <svg class="o_ sq dd af mr-2" viewBox="0 0 16 16">
                                <path d="M8 0C3.6 0 0 3.1 0 7s3.6 7 8 7h.6l5.4 2v-4.4c1.2-1.2 2-2.8 2-4.6 0-3.9-3.6-7-8-7zm4 10.8v2.3L8.9 12H8c-3.3 0-6-2.2-6-5s2.7-5 6-5 6 2.2 6 5c0 2.2-2 3.8-2 3.8z"></path>
                            </svg>
                            <span>Send Message</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="nk kx tta bg-white bh rounded-sm border border-slate-200">
            <div class="flex fu sz">
                <div class="al vi">
                    <div class="td">
                        <div class="tp tk tw inline-flex" x-data="{ open: false }">
                            <button class="yt xa rounded-full" :class="{ 'hp text-slate-500': open }" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open">
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
                    <header>
                        <div class="flex justify-center in">
                            <a class="td inline-flex ff" href="#0">
                                <div class="tp tk tw sv bg-white rounded-full shadow" aria-hidden="true">
                                    <svg class="un or dd yl" viewBox="0 0 32 32">
                                        <path
                                            d="M21 14.077a.75.75 0 01-.75-.75 1.5 1.5 0 00-1.5-1.5.75.75 0 110-1.5 1.5 1.5 0 001.5-1.5.75.75 0 111.5 0 1.5 1.5 0 001.5 1.5.75.75 0 010 1.5 1.5 1.5 0 00-1.5 1.5.75.75 0 01-.75.75zM14 24.077a1 1 0 01-1-1 4 4 0 00-4-4 1 1 0 110-2 4 4 0 004-4 1 1 0 012 0 4 4 0 004 4 1 1 0 010 2 4 4 0 00-4 4 1 1 0 01-1 1z"
                                        ></path>
                                    </svg>
                                </div>
                                <img class="rounded-full" src="images/user-64-06.jpg" width="64" height="64" alt="User 06" />
                            </a>
                        </div>
                        <div class="gu">
                            <a class="inline-flex text-slate-800 xd" href="#0"> <h2 class="gh gk justify-center gg">Mirko Grubisic</h2> </a>
                        </div>
                        <div class="flex justify-center items-center"><span class="text-sm gm yt sm mr-1">-&gt;</span> <span>🇩🇪</span></div>
                    </header>
                    <div class="gu iw"><div class="text-sm">Fitness Fanatic, Design Enthusiast, Mentor, Meetup Organizer &amp; PHP Lover.</div></div>
                </div>
                <div class="cg border-slate-200">
                    <a class="block gu text-sm text-indigo-500 xu gm vx vj" href="messages.html">
                        <div class="flex items-center justify-center">
                            <svg class="o_ sq dd af mr-2" viewBox="0 0 16 16">
                                <path d="M8 0C3.6 0 0 3.1 0 7s3.6 7 8 7h.6l5.4 2v-4.4c1.2-1.2 2-2.8 2-4.6 0-3.9-3.6-7-8-7zm4 10.8v2.3L8.9 12H8c-3.3 0-6-2.2-6-5s2.7-5 6-5 6 2.2 6 5c0 2.2-2 3.8-2 3.8z"></path>
                            </svg>
                            <span>Send Message</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="nk kx tta bg-white bh rounded-sm border border-slate-200">
            <div class="flex fu sz">
                <div class="al vi">
                    <div class="td">
                        <div class="tp tk tw inline-flex" x-data="{ open: false }">
                            <button class="yt xa rounded-full" :class="{ 'hp text-slate-500': open }" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open">
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
                    <header>
                        <div class="flex justify-center in">
                            <a class="td inline-flex ff" href="#0">
                                <div class="tp tk tw sv bg-white rounded-full shadow" aria-hidden="true">
                                    <svg class="un or dd yl" viewBox="0 0 32 32">
                                        <path
                                            d="M21 14.077a.75.75 0 01-.75-.75 1.5 1.5 0 00-1.5-1.5.75.75 0 110-1.5 1.5 1.5 0 001.5-1.5.75.75 0 111.5 0 1.5 1.5 0 001.5 1.5.75.75 0 010 1.5 1.5 1.5 0 00-1.5 1.5.75.75 0 01-.75.75zM14 24.077a1 1 0 01-1-1 4 4 0 00-4-4 1 1 0 110-2 4 4 0 004-4 1 1 0 012 0 4 4 0 004 4 1 1 0 010 2 4 4 0 00-4 4 1 1 0 01-1 1z"
                                        ></path>
                                    </svg>
                                </div>
                                <img class="rounded-full" src="images/user-64-07.jpg" width="64" height="64" alt="User 07" />
                            </a>
                        </div>
                        <div class="gu">
                            <a class="inline-flex text-slate-800 xd" href="#0"> <h2 class="gh gk justify-center gg">Alisha Acharya</h2> </a>
                        </div>
                        <div class="flex justify-center items-center"><span class="text-sm gm yt sm mr-1">-&gt;</span> <span>🇬🇧</span></div>
                    </header>
                    <div class="gu iw"><div class="text-sm">Fitness Fanatic, Design Enthusiast, Mentor, Meetup Organizer &amp; PHP Lover.</div></div>
                </div>
                <div class="cg border-slate-200">
                    <a class="block gu text-sm text-indigo-500 xu gm vx vj" href="messages.html">
                        <div class="flex items-center justify-center">
                            <svg class="o_ sq dd af mr-2" viewBox="0 0 16 16">
                                <path d="M8 0C3.6 0 0 3.1 0 7s3.6 7 8 7h.6l5.4 2v-4.4c1.2-1.2 2-2.8 2-4.6 0-3.9-3.6-7-8-7zm4 10.8v2.3L8.9 12H8c-3.3 0-6-2.2-6-5s2.7-5 6-5 6 2.2 6 5c0 2.2-2 3.8-2 3.8z"></path>
                            </svg>
                            <span>Send Message</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="nk kx tta bg-white bh rounded-sm border border-slate-200">
            <div class="flex fu sz">
                <div class="al vi">
                    <div class="td">
                        <div class="tp tk tw inline-flex" x-data="{ open: false }">
                            <button class="yt xa rounded-full" :class="{ 'hp text-slate-500': open }" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open">
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
                    <header>
                        <div class="flex justify-center in">
                            <a class="td inline-flex ff" href="#0">
                                <div class="tp tk tw sv bg-white rounded-full shadow" aria-hidden="true">
                                    <svg class="un or dd yl" viewBox="0 0 32 32">
                                        <path
                                            d="M21 14.077a.75.75 0 01-.75-.75 1.5 1.5 0 00-1.5-1.5.75.75 0 110-1.5 1.5 1.5 0 001.5-1.5.75.75 0 111.5 0 1.5 1.5 0 001.5 1.5.75.75 0 010 1.5 1.5 1.5 0 00-1.5 1.5.75.75 0 01-.75.75zM14 24.077a1 1 0 01-1-1 4 4 0 00-4-4 1 1 0 110-2 4 4 0 004-4 1 1 0 012 0 4 4 0 004 4 1 1 0 010 2 4 4 0 00-4 4 1 1 0 01-1 1z"
                                        ></path>
                                    </svg>
                                </div>
                                <img class="rounded-full" src="images/user-64-08.jpg" width="64" height="64" alt="User 08" />
                            </a>
                        </div>
                        <div class="gu">
                            <a class="inline-flex text-slate-800 xd" href="#0"> <h2 class="gh gk justify-center gg">Brian Halligan</h2> </a>
                        </div>
                        <div class="flex justify-center items-center"><span class="text-sm gm yt sm mr-1">-&gt;</span> <span>🇺🇸</span></div>
                    </header>
                    <div class="gu iw"><div class="text-sm">Fitness Fanatic, Design Enthusiast, Mentor, Meetup Organizer &amp; PHP Lover.</div></div>
                </div>
                <div class="cg border-slate-200">
                    <a class="block gu text-sm text-indigo-500 xu gm vx vj" href="messages.html">
                        <div class="flex items-center justify-center">
                            <svg class="o_ sq dd af mr-2" viewBox="0 0 16 16">
                                <path d="M8 0C3.6 0 0 3.1 0 7s3.6 7 8 7h.6l5.4 2v-4.4c1.2-1.2 2-2.8 2-4.6 0-3.9-3.6-7-8-7zm4 10.8v2.3L8.9 12H8c-3.3 0-6-2.2-6-5s2.7-5 6-5 6 2.2 6 5c0 2.2-2 3.8-2 3.8z"></path>
                            </svg>
                            <span>Send Message</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="nk kx tta bg-white bh rounded-sm border border-slate-200">
            <div class="flex fu sz">
                <div class="al vi">
                    <div class="td">
                        <div class="tp tk tw inline-flex" x-data="{ open: false }">
                            <button class="yt xa rounded-full" :class="{ 'hp text-slate-500': open }" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open">
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
                    <header>
                        <div class="flex justify-center in">
                            <a class="td inline-flex ff" href="#0">
                                <div class="tp tk tw sv bg-white rounded-full shadow" aria-hidden="true">
                                    <svg class="un or dd yl" viewBox="0 0 32 32">
                                        <path
                                            d="M21 14.077a.75.75 0 01-.75-.75 1.5 1.5 0 00-1.5-1.5.75.75 0 110-1.5 1.5 1.5 0 001.5-1.5.75.75 0 111.5 0 1.5 1.5 0 001.5 1.5.75.75 0 010 1.5 1.5 1.5 0 00-1.5 1.5.75.75 0 01-.75.75zM14 24.077a1 1 0 01-1-1 4 4 0 00-4-4 1 1 0 110-2 4 4 0 004-4 1 1 0 012 0 4 4 0 004 4 1 1 0 010 2 4 4 0 00-4 4 1 1 0 01-1 1z"
                                        ></path>
                                    </svg>
                                </div>
                                <img class="rounded-full" src="images/user-64-09.jpg" width="64" height="64" alt="User 09" />
                            </a>
                        </div>
                        <div class="gu">
                            <a class="inline-flex text-slate-800 xd" href="#0"> <h2 class="gh gk justify-center gg">Patricia Semklo</h2> </a>
                        </div>
                        <div class="flex justify-center items-center"><span class="text-sm gm yt sm mr-1">-&gt;</span> <span>🇮🇳</span></div>
                    </header>
                    <div class="gu iw"><div class="text-sm">Fitness Fanatic, Design Enthusiast, Mentor, Meetup Organizer &amp; PHP Lover.</div></div>
                </div>
                <div class="cg border-slate-200">
                    <a class="block gu text-sm text-indigo-500 xu gm vx vj" href="messages.html">
                        <div class="flex items-center justify-center">
                            <svg class="o_ sq dd af mr-2" viewBox="0 0 16 16">
                                <path d="M8 0C3.6 0 0 3.1 0 7s3.6 7 8 7h.6l5.4 2v-4.4c1.2-1.2 2-2.8 2-4.6 0-3.9-3.6-7-8-7zm4 10.8v2.3L8.9 12H8c-3.3 0-6-2.2-6-5s2.7-5 6-5 6 2.2 6 5c0 2.2-2 3.8-2 3.8z"></path>
                            </svg>
                            <span>Send Message</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="nk kx tta bg-white bh rounded-sm border border-slate-200">
            <div class="flex fu sz">
                <div class="al vi">
                    <div class="td">
                        <div class="tp tk tw inline-flex" x-data="{ open: false }">
                            <button class="yt xa rounded-full" :class="{ 'hp text-slate-500': open }" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open">
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
                    <header>
                        <div class="flex justify-center in">
                            <a class="td inline-flex ff" href="#0">
                                <div class="tp tk tw sv bg-white rounded-full shadow" aria-hidden="true">
                                    <svg class="un or dd yl" viewBox="0 0 32 32">
                                        <path
                                            d="M21 14.077a.75.75 0 01-.75-.75 1.5 1.5 0 00-1.5-1.5.75.75 0 110-1.5 1.5 1.5 0 001.5-1.5.75.75 0 111.5 0 1.5 1.5 0 001.5 1.5.75.75 0 010 1.5 1.5 1.5 0 00-1.5 1.5.75.75 0 01-.75.75zM14 24.077a1 1 0 01-1-1 4 4 0 00-4-4 1 1 0 110-2 4 4 0 004-4 1 1 0 012 0 4 4 0 004 4 1 1 0 010 2 4 4 0 00-4 4 1 1 0 01-1 1z"
                                        ></path>
                                    </svg>
                                </div>
                                <img class="rounded-full" src="images/user-64-10.jpg" width="64" height="64" alt="User 10" />
                            </a>
                        </div>
                        <div class="gu">
                            <a class="inline-flex text-slate-800 xd" href="#0"> <h2 class="gh gk justify-center gg">Maria Martinez</h2> </a>
                        </div>
                        <div class="flex justify-center items-center"><span class="text-sm gm yt sm mr-1">-&gt;</span> <span>🇮🇹</span></div>
                    </header>
                    <div class="gu iw"><div class="text-sm">Fitness Fanatic, Design Enthusiast, Mentor, Meetup Organizer &amp; PHP Lover.</div></div>
                </div>
                <div class="cg border-slate-200">
                    <a class="block gu text-sm text-indigo-500 xu gm vx vj" href="messages.html">
                        <div class="flex items-center justify-center">
                            <svg class="o_ sq dd af mr-2" viewBox="0 0 16 16">
                                <path d="M8 0C3.6 0 0 3.1 0 7s3.6 7 8 7h.6l5.4 2v-4.4c1.2-1.2 2-2.8 2-4.6 0-3.9-3.6-7-8-7zm4 10.8v2.3L8.9 12H8c-3.3 0-6-2.2-6-5s2.7-5 6-5 6 2.2 6 5c0 2.2-2 3.8-2 3.8z"></path>
                            </svg>
                            <span>Send Message</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="nk kx tta bg-white bh rounded-sm border border-slate-200">
            <div class="flex fu sz">
                <div class="al vi">
                    <div class="td">
                        <div class="tp tk tw inline-flex" x-data="{ open: false }">
                            <button class="yt xa rounded-full" :class="{ 'hp text-slate-500': open }" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open">
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
                    <header>
                        <div class="flex justify-center in">
                            <a class="td inline-flex ff" href="#0">
                                <div class="tp tk tw sv bg-white rounded-full shadow" aria-hidden="true">
                                    <svg class="un or dd yl" viewBox="0 0 32 32">
                                        <path
                                            d="M21 14.077a.75.75 0 01-.75-.75 1.5 1.5 0 00-1.5-1.5.75.75 0 110-1.5 1.5 1.5 0 001.5-1.5.75.75 0 111.5 0 1.5 1.5 0 001.5 1.5.75.75 0 010 1.5 1.5 1.5 0 00-1.5 1.5.75.75 0 01-.75.75zM14 24.077a1 1 0 01-1-1 4 4 0 00-4-4 1 1 0 110-2 4 4 0 004-4 1 1 0 012 0 4 4 0 004 4 1 1 0 010 2 4 4 0 00-4 4 1 1 0 01-1 1z"
                                        ></path>
                                    </svg>
                                </div>
                                <img class="rounded-full" src="images/user-64-11.jpg" width="64" height="64" alt="User 11" />
                            </a>
                        </div>
                        <div class="gu">
                            <a class="inline-flex text-slate-800 xd" href="#0"> <h2 class="gh gk justify-center gg">Vedad Siljak</h2> </a>
                        </div>
                        <div class="flex justify-center items-center"><span class="text-sm gm yt sm mr-1">-&gt;</span> <span>🇨🇦</span></div>
                    </header>
                    <div class="gu iw"><div class="text-sm">Fitness Fanatic, Design Enthusiast, Mentor, Meetup Organizer &amp; PHP Lover.</div></div>
                </div>
                <div class="cg border-slate-200">
                    <a class="block gu text-sm text-indigo-500 xu gm vx vj" href="messages.html">
                        <div class="flex items-center justify-center">
                            <svg class="o_ sq dd af mr-2" viewBox="0 0 16 16">
                                <path d="M8 0C3.6 0 0 3.1 0 7s3.6 7 8 7h.6l5.4 2v-4.4c1.2-1.2 2-2.8 2-4.6 0-3.9-3.6-7-8-7zm4 10.8v2.3L8.9 12H8c-3.3 0-6-2.2-6-5s2.7-5 6-5 6 2.2 6 5c0 2.2-2 3.8-2 3.8z"></path>
                            </svg>
                            <span>Send Message</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="nk kx tta bg-white bh rounded-sm border border-slate-200">
            <div class="flex fu sz">
                <div class="al vi">
                    <div class="td">
                        <div class="tp tk tw inline-flex" x-data="{ open: false }">
                            <button class="yt xa rounded-full" :class="{ 'hp text-slate-500': open }" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open">
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
                    <header>
                        <div class="flex justify-center in">
                            <a class="td inline-flex ff" href="#0">
                                <div class="tp tk tw sv bg-white rounded-full shadow" aria-hidden="true">
                                    <svg class="un or dd yl" viewBox="0 0 32 32">
                                        <path
                                            d="M21 14.077a.75.75 0 01-.75-.75 1.5 1.5 0 00-1.5-1.5.75.75 0 110-1.5 1.5 1.5 0 001.5-1.5.75.75 0 111.5 0 1.5 1.5 0 001.5 1.5.75.75 0 010 1.5 1.5 1.5 0 00-1.5 1.5.75.75 0 01-.75.75zM14 24.077a1 1 0 01-1-1 4 4 0 00-4-4 1 1 0 110-2 4 4 0 004-4 1 1 0 012 0 4 4 0 004 4 1 1 0 010 2 4 4 0 00-4 4 1 1 0 01-1 1z"
                                        ></path>
                                    </svg>
                                </div>
                                <img class="rounded-full" src="images/user-64-12.jpg" width="64" height="64" alt="User 12" />
                            </a>
                        </div>
                        <div class="gu">
                            <a class="inline-flex text-slate-800 xd" href="#0"> <h2 class="gh gk justify-center gg">Dominik Lamakani</h2> </a>
                        </div>
                        <div class="flex justify-center items-center"><span class="text-sm gm yt sm mr-1">-&gt;</span> <span>🇧🇪</span></div>
                    </header>
                    <div class="gu iw"><div class="text-sm">Fitness Fanatic, Design Enthusiast, Mentor, Meetup Organizer &amp; PHP Lover.</div></div>
                </div>
                <div class="cg border-slate-200">
                    <a class="block gu text-sm text-indigo-500 xu gm vx vj" href="messages.html">
                        <div class="flex items-center justify-center">
                            <svg class="o_ sq dd af mr-2" viewBox="0 0 16 16">
                                <path d="M8 0C3.6 0 0 3.1 0 7s3.6 7 8 7h.6l5.4 2v-4.4c1.2-1.2 2-2.8 2-4.6 0-3.9-3.6-7-8-7zm4 10.8v2.3L8.9 12H8c-3.3 0-6-2.2-6-5s2.7-5 6-5 6 2.2 6 5c0 2.2-2 3.8-2 3.8z"></path>
                            </svg>
                            <span>Send Message</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Pagination -->
    <div class="ie">
        <div class="flex justify-center">
            <nav class="flex" role="navigation" aria-label="Navigation">
                <div class="mr-2">
                    <span class="inline-flex items-center justify-center rounded gj vm vc bg-white border border-slate-200 yd">
                        <span class="tc">Previous</span><wbr /> <svg class="sq o_ dd" viewBox="0 0 16 16"><path d="M9.4 13.4l1.4-1.4-4-4 4-4-1.4-1.4L4 8z"></path></svg>
                    </span>
                </div>
                <ul class="inline-flex text-sm gm fk bd">
                    <li><span class="inline-flex items-center justify-center co gj me vc bg-white border border-slate-200 text-indigo-500">1</span></li>
                    <li><a class="inline-flex items-center justify-center gj me vc bg-white xs border border-slate-200 gz xh" href="#0">2</a></li>
                    <li><a class="inline-flex items-center justify-center gj me vc bg-white xs border border-slate-200 gz xh" href="#0">3</a></li>
                    <li><span class="inline-flex items-center justify-center gj me vc bg-white border border-slate-200 yt">…</span></li>
                    <li><a class="inline-flex items-center justify-center cu gj me vc bg-white xs border border-slate-200 gz xh" href="#0">9</a></li>
                </ul>
                <div class="r_">
                    <a href="#0" class="inline-flex items-center justify-center rounded gj vm vc bg-white xs border border-slate-200 gz xh bd">
                        <span class="tc">Next</span><wbr /> <svg class="sq o_ dd" viewBox="0 0 16 16"><path d="M6.6 13.4L5.2 12l4-4-4-4 1.4-1.4L12 8z"></path></svg>
                    </a>
                </div>
            </nav>
        </div>
    </div>
</div>
@endsection