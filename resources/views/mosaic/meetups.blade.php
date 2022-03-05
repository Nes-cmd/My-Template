@extends('layouts.admin.app')
@section('contents')
<div class="va jn teb vf ox uz ri">
    <!-- Page header -->
    <div class="_u _w _g ic">
        <!-- Left: Title -->
        <div class="rw kj">
            <h1 class="gc zc text-slate-800 font-bold">Discover Meetups ✨</h1>
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
                <span class="hidden tnm r_">Add Meetup</span>
            </button>
        </div>
    </div>

    <!-- Filters -->
    <div class="ic">
        <ul class="flex flex-wrap -m-1">
            <li class="m-1">
                <button class="inline-flex items-center justify-center text-sm gm gj rounded-full vx vk border ck bd hd ye we wi">View All</button>
            </li>
            <li class="m-1">
                <button class="inline-flex items-center justify-center text-sm gm gj rounded-full vx vk border border-slate-200 hover--border-slate-300 bd bg-white text-slate-500 we wi">Online</button>
            </li>
            <li class="m-1">
                <button class="inline-flex items-center justify-center text-sm gm gj rounded-full vx vk border border-slate-200 hover--border-slate-300 bd bg-white text-slate-500 we wi">Local</button>
            </li>
            <li class="m-1">
                <button class="inline-flex items-center justify-center text-sm gm gj rounded-full vx vk border border-slate-200 hover--border-slate-300 bd bg-white text-slate-500 we wi">This Week</button>
            </li>
            <li class="m-1">
                <button class="inline-flex items-center justify-center text-sm gm gj rounded-full vx vk border border-slate-200 hover--border-slate-300 bd bg-white text-slate-500 we wi">This Month</button>
            </li>
            <li class="m-1">
                <button class="inline-flex items-center justify-center text-sm gm gj rounded-full vx vk border border-slate-200 hover--border-slate-300 bd bg-white text-slate-500 we wi">Following</button>
            </li>
        </ul>
    </div>
    <div class="text-sm text-slate-500 gw rw">289 Meetups</div>

    <!-- Content -->
    <div class="sx ttj fd ry">
        <article class="flex bg-white bh rounded-sm border border-slate-200 lw">
            <a class="td block uu _f tnv 2xl:sidebar-expanded:w-56 af" href="meetups-post.html">
                <img class="tp dj dq ox sz" src="images/meetups-thumb-01.jpg" width="220" height="236" alt="Meetup 01" />
                <button class="tp tk tw ix mr-4">
                    <div class="yh bg-slate-900 pv rounded-full">
                        <span class="tc">Like</span>
                        <svg class="or un dd" viewBox="0 0 32 32">
                            <path
                                d="M22.682 11.318A4.485 4.485 0 0019.5 10a4.377 4.377 0 00-3.5 1.707A4.383 4.383 0 0012.5 10a4.5 4.5 0 00-3.182 7.682L16 24l6.682-6.318a4.5 4.5 0 000-6.364zm-1.4 4.933L16 21.247l-5.285-5A2.5 2.5 0 0112.5 12c1.437 0 2.312.681 3.5 2.625C17.187 12.681 18.062 12 19.5 12a2.5 2.5 0 011.785 4.251h-.003z"
                            ></path>
                        </svg>
                    </div>
                </button>
            </a>
            <div class="al vi flex fu">
                <div class="al">
                    <div class="text-sm gg text-indigo-500 gb in">Mon 27 Dec, 2021</div>
                    <a class="inline-flex in" href="meetups-post.html"> <h3 class="gv font-bold text-slate-800">Silicon Valley Bootstrapper Breakfast Online for 2021</h3> </a>
                    <div class="text-sm">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts.</div>
                </div>
                <div class="flex fh ip">
                    <div class="gp inline-flex items-center gm hp gz rounded-full gu vm vk">
                        <svg class="o_ h-3 dm mr-2" viewBox="0 0 16 12"><path d="m16 2-4 2.4V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V7.6l4 2.4V2ZM2 10V2h8v8H2Z"></path></svg>
                        <span>Online Event</span>
                    </div>
                    <div class="flex items-center f_">
                        <div class="flex lr iu">
                            <img class="rounded-full cp c_ sw" src="images/avatar-01.jpg" width="28" height="28" alt="User 01" />
                            <img class="rounded-full cp c_ sw" src="images/avatar-04.jpg" width="28" height="28" alt="User 04" />
                            <img class="rounded-full cp c_ sw" src="images/avatar-05.jpg" width="28" height="28" alt="User 05" />
                        </div>
                        <div class="gp gm yt gw">+22</div>
                    </div>
                </div>
            </div>
        </article>
        <article class="flex bg-white bh rounded-sm border border-slate-200 lw">
            <a class="td block uu _f tnv 2xl:sidebar-expanded:w-56 af" href="meetups-post.html">
                <img class="tp dj dq ox sz" src="images/meetups-thumb-02.jpg" width="220" height="236" alt="Meetup 02" />
                <button class="tp tk tw ix mr-4">
                    <div class="yh bg-slate-900 pv rounded-full">
                        <span class="tc">Like</span>
                        <svg class="or un dd" viewBox="0 0 32 32">
                            <path
                                d="M22.682 11.318A4.485 4.485 0 0019.5 10a4.377 4.377 0 00-3.5 1.707A4.383 4.383 0 0012.5 10a4.5 4.5 0 00-3.182 7.682L16 24l6.682-6.318a4.5 4.5 0 000-6.364zm-1.4 4.933L16 21.247l-5.285-5A2.5 2.5 0 0112.5 12c1.437 0 2.312.681 3.5 2.625C17.187 12.681 18.062 12 19.5 12a2.5 2.5 0 011.785 4.251h-.003z"
                            ></path>
                        </svg>
                    </div>
                </button>
            </a>
            <div class="al vi flex fu">
                <div class="al">
                    <div class="text-sm gg text-indigo-500 gb in">Mon 27 Dec, 2021</div>
                    <a class="inline-flex in" href="meetups-post.html"> <h3 class="gv font-bold text-slate-800">New York &amp; New Jersey Virtual Retreat 2021</h3> </a>
                    <div class="text-sm">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts.</div>
                </div>
                <div class="flex fh ip">
                    <div class="gp inline-flex items-center gm hp gz rounded-full gu vm vk">
                        <svg class="o_ h-3 dm mr-2" viewBox="0 0 16 12"><path d="m16 2-4 2.4V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V7.6l4 2.4V2ZM2 10V2h8v8H2Z"></path></svg>
                        <span>Online Event</span>
                    </div>
                    <div class="flex items-center f_">
                        <div class="flex lr iu">
                            <img class="rounded-full cp c_ sw" src="images/avatar-02.jpg" width="28" height="28" alt="User 02" />
                            <img class="rounded-full cp c_ sw" src="images/avatar-03.jpg" width="28" height="28" alt="User 03" />
                            <img class="rounded-full cp c_ sw" src="images/avatar-04.jpg" width="28" height="28" alt="User 04" />
                        </div>
                        <div class="gp gm yt gw">+132</div>
                    </div>
                </div>
            </div>
        </article>
        <article class="flex bg-white bh rounded-sm border border-slate-200 lw">
            <a class="td block uu _f tnv 2xl:sidebar-expanded:w-56 af" href="meetups-post.html">
                <img class="tp dj dq ox sz" src="images/meetups-thumb-03.jpg" width="220" height="236" alt="Meetup 03" />
                <button class="tp tk tw ix mr-4">
                    <div class="yh bg-slate-900 pv rounded-full">
                        <span class="tc">Like</span>
                        <svg class="or un dd" viewBox="0 0 32 32">
                            <path
                                d="M22.682 11.318A4.485 4.485 0 0019.5 10a4.377 4.377 0 00-3.5 1.707A4.383 4.383 0 0012.5 10a4.5 4.5 0 00-3.182 7.682L16 24l6.682-6.318a4.5 4.5 0 000-6.364zm-1.4 4.933L16 21.247l-5.285-5A2.5 2.5 0 0112.5 12c1.437 0 2.312.681 3.5 2.625C17.187 12.681 18.062 12 19.5 12a2.5 2.5 0 011.785 4.251h-.003z"
                            ></path>
                        </svg>
                    </div>
                </button>
            </a>
            <div class="al vi flex fu">
                <div class="al">
                    <div class="text-sm gg text-indigo-500 gb in">Wed 29 Dec, 2021</div>
                    <a class="inline-flex in" href="meetups-post.html"> <h3 class="gv font-bold text-slate-800">The World of AI and Machine Learning — Open Chat</h3> </a>
                    <div class="text-sm">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts.</div>
                </div>
                <div class="flex fh ip">
                    <div class="gp inline-flex items-center gm hp gz rounded-full gu vm vk">
                        <svg class="o_ h-3 dm mr-2" viewBox="0 0 16 12"><path d="m16 2-4 2.4V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V7.6l4 2.4V2ZM2 10V2h8v8H2Z"></path></svg>
                        <span>Online Event</span>
                    </div>
                    <div class="flex items-center f_">
                        <div class="flex lr iu">
                            <img class="rounded-full cp c_ sw" src="images/avatar-06.jpg" width="28" height="28" alt="User 06" />
                            <img class="rounded-full cp c_ sw" src="images/avatar-03.jpg" width="28" height="28" alt="User 03" />
                            <img class="rounded-full cp c_ sw" src="images/avatar-01.jpg" width="28" height="28" alt="User 01" />
                        </div>
                        <div class="gp gm yt gw">+12</div>
                    </div>
                </div>
            </div>
        </article>
        <article class="flex bg-white bh rounded-sm border border-slate-200 lw">
            <a class="td block uu _f tnv 2xl:sidebar-expanded:w-56 af" href="meetups-post.html">
                <img class="tp dj dq ox sz" src="images/meetups-thumb-04.jpg" width="220" height="236" alt="Meetup 04" />
                <button class="tp tk tw ix mr-4">
                    <div class="yh bg-slate-900 pv rounded-full">
                        <span class="tc">Like</span>
                        <svg class="or un dd" viewBox="0 0 32 32">
                            <path
                                d="M22.682 11.318A4.485 4.485 0 0019.5 10a4.377 4.377 0 00-3.5 1.707A4.383 4.383 0 0012.5 10a4.5 4.5 0 00-3.182 7.682L16 24l6.682-6.318a4.5 4.5 0 000-6.364zm-1.4 4.933L16 21.247l-5.285-5A2.5 2.5 0 0112.5 12c1.437 0 2.312.681 3.5 2.625C17.187 12.681 18.062 12 19.5 12a2.5 2.5 0 011.785 4.251h-.003z"
                            ></path>
                        </svg>
                    </div>
                </button>
            </a>
            <div class="al vi flex fu">
                <div class="al">
                    <div class="text-sm gg text-indigo-500 gb in">Wed 29 Dec, 2021</div>
                    <a class="inline-flex in" href="meetups-post.html"> <h3 class="gv font-bold text-slate-800">NYC Code &amp; Coffee 2.0 @ Freehold Brooklyn</h3> </a>
                    <div class="text-sm">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts.</div>
                </div>
                <div class="flex fh ip">
                    <div class="gp inline-flex items-center gm hp gz rounded-full gu vm vk">
                        <svg class="o_ h-3 dm mr-2" viewBox="0 0 16 12"><path d="m16 2-4 2.4V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V7.6l4 2.4V2ZM2 10V2h8v8H2Z"></path></svg>
                        <span>Online Event</span>
                    </div>
                    <div class="flex items-center f_">
                        <div class="flex lr iu">
                            <img class="rounded-full cp c_ sw" src="images/avatar-05.jpg" width="28" height="28" alt="User 05" />
                            <img class="rounded-full cp c_ sw" src="images/avatar-02.jpg" width="28" height="28" alt="User 02" />
                        </div>
                        <div class="gp gm yt gw">+17</div>
                    </div>
                </div>
            </div>
        </article>
        <article class="flex bg-white bh rounded-sm border border-slate-200 lw">
            <a class="td block uu _f tnv 2xl:sidebar-expanded:w-56 af" href="meetups-post.html">
                <img class="tp dj dq ox sz" src="images/meetups-thumb-05.jpg" width="220" height="236" alt="Meetup 05" />
                <button class="tp tk tw ix mr-4">
                    <div class="yh bg-slate-900 pv rounded-full">
                        <span class="tc">Like</span>
                        <svg class="or un dd" viewBox="0 0 32 32">
                            <path
                                d="M22.682 11.318A4.485 4.485 0 0019.5 10a4.377 4.377 0 00-3.5 1.707A4.383 4.383 0 0012.5 10a4.5 4.5 0 00-3.182 7.682L16 24l6.682-6.318a4.5 4.5 0 000-6.364zm-1.4 4.933L16 21.247l-5.285-5A2.5 2.5 0 0112.5 12c1.437 0 2.312.681 3.5 2.625C17.187 12.681 18.062 12 19.5 12a2.5 2.5 0 011.785 4.251h-.003z"
                            ></path>
                        </svg>
                    </div>
                </button>
            </a>
            <div class="al vi flex fu">
                <div class="al">
                    <div class="text-sm gg text-indigo-500 gb in">Mon 3 Jan, 2022</div>
                    <a class="inline-flex in" href="meetups-post.html"> <h3 class="gv font-bold text-slate-800">Acme Inc. London Meetup: Women in Tech Night</h3> </a>
                    <div class="text-sm">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts.</div>
                </div>
                <div class="flex fh ip">
                    <div class="gp inline-flex items-center gm hp gz rounded-full gu vm vk">
                        <svg class="o_ h-3 dm mr-2" viewBox="0 0 16 12"><path d="m16 2-4 2.4V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V7.6l4 2.4V2ZM2 10V2h8v8H2Z"></path></svg>
                        <span>Online Event</span>
                    </div>
                    <div class="flex items-center f_">
                        <div class="flex lr iu">
                            <img class="rounded-full cp c_ sw" src="images/avatar-02.jpg" width="28" height="28" alt="User 02" />
                            <img class="rounded-full cp c_ sw" src="images/avatar-01.jpg" width="28" height="28" alt="User 01" />
                        </div>
                        <div class="gp gm yt gw">+117</div>
                    </div>
                </div>
            </div>
        </article>
        <article class="flex bg-white bh rounded-sm border border-slate-200 lw">
            <a class="td block uu _f tnv 2xl:sidebar-expanded:w-56 af" href="meetups-post.html">
                <img class="tp dj dq ox sz" src="images/meetups-thumb-06.jpg" width="220" height="236" alt="Meetup 06" />
                <button class="tp tk tw ix mr-4">
                    <div class="yh bg-slate-900 pv rounded-full">
                        <span class="tc">Like</span>
                        <svg class="or un dd" viewBox="0 0 32 32">
                            <path
                                d="M22.682 11.318A4.485 4.485 0 0019.5 10a4.377 4.377 0 00-3.5 1.707A4.383 4.383 0 0012.5 10a4.5 4.5 0 00-3.182 7.682L16 24l6.682-6.318a4.5 4.5 0 000-6.364zm-1.4 4.933L16 21.247l-5.285-5A2.5 2.5 0 0112.5 12c1.437 0 2.312.681 3.5 2.625C17.187 12.681 18.062 12 19.5 12a2.5 2.5 0 011.785 4.251h-.003z"
                            ></path>
                        </svg>
                    </div>
                </button>
            </a>
            <div class="al vi flex fu">
                <div class="al">
                    <div class="text-sm gg text-indigo-500 gb in">Thu 6 Jan, 2022</div>
                    <a class="inline-flex in" href="meetups-post.html"> <h3 class="gv font-bold text-slate-800">Founder Worldwide - First Meetup of 2022!</h3> </a>
                    <div class="text-sm">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts.</div>
                </div>
                <div class="flex fh ip">
                    <div class="gp inline-flex items-center gm hp gz rounded-full gu vm vk">
                        <svg class="o_ h-3 dm mr-2" viewBox="0 0 16 12"><path d="m16 2-4 2.4V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V7.6l4 2.4V2ZM2 10V2h8v8H2Z"></path></svg>
                        <span>Online Event</span>
                    </div>
                    <div class="flex items-center f_">
                        <div class="flex lr iu">
                            <img class="rounded-full cp c_ sw" src="images/avatar-03.jpg" width="28" height="28" alt="User 03" />
                            <img class="rounded-full cp c_ sw" src="images/avatar-05.jpg" width="28" height="28" alt="User 05" />
                            <img class="rounded-full cp c_ sw" src="images/avatar-04.jpg" width="28" height="28" alt="User 04" />
                        </div>
                        <div class="gp gm yt gw">+64</div>
                    </div>
                </div>
            </div>
        </article>
        <article class="flex bg-white bh rounded-sm border border-slate-200 lw">
            <a class="td block uu _f tnv 2xl:sidebar-expanded:w-56 af" href="meetups-post.html">
                <img class="tp dj dq ox sz" src="images/meetups-thumb-07.jpg" width="220" height="236" alt="Meetup 07" />
                <button class="tp tk tw ix mr-4">
                    <div class="yh bg-slate-900 pv rounded-full">
                        <span class="tc">Like</span>
                        <svg class="or un dd" viewBox="0 0 32 32">
                            <path
                                d="M22.682 11.318A4.485 4.485 0 0019.5 10a4.377 4.377 0 00-3.5 1.707A4.383 4.383 0 0012.5 10a4.5 4.5 0 00-3.182 7.682L16 24l6.682-6.318a4.5 4.5 0 000-6.364zm-1.4 4.933L16 21.247l-5.285-5A2.5 2.5 0 0112.5 12c1.437 0 2.312.681 3.5 2.625C17.187 12.681 18.062 12 19.5 12a2.5 2.5 0 011.785 4.251h-.003z"
                            ></path>
                        </svg>
                    </div>
                </button>
            </a>
            <div class="al vi flex fu">
                <div class="al">
                    <div class="text-sm gg text-indigo-500 gb in">Thu 6 Jan, 2022</div>
                    <a class="inline-flex in" href="meetups-post.html"> <h3 class="gv font-bold text-slate-800">NYC Blockchain Network - Monthly 3rd Thursday Meetup</h3> </a>
                    <div class="text-sm">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts.</div>
                </div>
                <div class="flex fh ip">
                    <div class="gp inline-flex items-center gm hp gz rounded-full gu vm vk">
                        <svg class="o_ h-3 dm mr-2" viewBox="0 0 16 12"><path d="m16 2-4 2.4V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V7.6l4 2.4V2ZM2 10V2h8v8H2Z"></path></svg>
                        <span>Online Event</span>
                    </div>
                    <div class="flex items-center f_">
                        <div class="flex lr iu">
                            <img class="rounded-full cp c_ sw" src="images/avatar-02.jpg" width="28" height="28" alt="User 02" />
                            <img class="rounded-full cp c_ sw" src="images/avatar-04.jpg" width="28" height="28" alt="User 04" />
                        </div>
                        <div class="gp gm yt gw">+112</div>
                    </div>
                </div>
            </div>
        </article>
        <article class="flex bg-white bh rounded-sm border border-slate-200 lw">
            <a class="td block uu _f tnv 2xl:sidebar-expanded:w-56 af" href="meetups-post.html">
                <img class="tp dj dq ox sz" src="images/meetups-thumb-08.jpg" width="220" height="236" alt="Meetup 08" />
                <button class="tp tk tw ix mr-4">
                    <div class="yh bg-slate-900 pv rounded-full">
                        <span class="tc">Like</span>
                        <svg class="or un dd" viewBox="0 0 32 32">
                            <path
                                d="M22.682 11.318A4.485 4.485 0 0019.5 10a4.377 4.377 0 00-3.5 1.707A4.383 4.383 0 0012.5 10a4.5 4.5 0 00-3.182 7.682L16 24l6.682-6.318a4.5 4.5 0 000-6.364zm-1.4 4.933L16 21.247l-5.285-5A2.5 2.5 0 0112.5 12c1.437 0 2.312.681 3.5 2.625C17.187 12.681 18.062 12 19.5 12a2.5 2.5 0 011.785 4.251h-.003z"
                            ></path>
                        </svg>
                    </div>
                </button>
            </a>
            <div class="al vi flex fu">
                <div class="al">
                    <div class="text-sm gg text-indigo-500 gb in">Fri 7 Jan, 2022</div>
                    <a class="inline-flex in" href="meetups-post.html"> <h3 class="gv font-bold text-slate-800">Build a Personal Brand and Boost Your Career in AI!</h3> </a>
                    <div class="text-sm">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts.</div>
                </div>
                <div class="flex fh ip">
                    <div class="gp inline-flex items-center gm hp gz rounded-full gu vm vk">
                        <svg class="o_ h-3 dm mr-2" viewBox="0 0 16 12"><path d="m16 2-4 2.4V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V7.6l4 2.4V2ZM2 10V2h8v8H2Z"></path></svg>
                        <span>Online Event</span>
                    </div>
                    <div class="flex items-center f_">
                        <div class="flex lr iu">
                            <img class="rounded-full cp c_ sw" src="images/avatar-01.jpg" width="28" height="28" alt="User 01" />
                            <img class="rounded-full cp c_ sw" src="images/avatar-05.jpg" width="28" height="28" alt="User 05" />
                            <img class="rounded-full cp c_ sw" src="images/avatar-06.jpg" width="28" height="28" alt="User 06" />
                        </div>
                        <div class="gp gm yt gw">+32</div>
                    </div>
                </div>
            </div>
        </article>
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