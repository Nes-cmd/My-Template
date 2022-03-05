@extends('layouts.admin.app')
@section('contents')
<div class="td flex">
    <!-- Profile sidebar -->
    <div id="profile-sidebar" class="tp ny tk ty ox qu jh jg jy sa qp a_ bq wn wi" :class="profileSidebarOpen ? 'translate-x-0' : '-translate-x-full'">
        <div class="tv np bg-white l_ lk ta af cb border-slate-200 qh tty om">
            <div>
                <div class="tv tk nv">
                    <div class="flex items-center bg-white cm border-slate-200 v_ ou">
                        <div class="ox flex items-center fh">
                            <div class="td">
                                <div class="al flex items-center lz">
                                    <img class="un or rounded-full mr-2" src="images/user-avatar-32.png" width="32" height="32" alt="Group 01" />
                                    <div class="lz"><span class="gg text-slate-800">Acme Inc.</span></div>
                                </div>
                            </div>
                            <button class="vu af rounded border border-slate-200 hover--border-slate-300 bd r_">
                                <svg class="o_ sq dd text-indigo-500" viewBox="0 0 16 16">
                                    <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1Z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="v_ vj">
                    <form class="td">
                        <label for="profile-search" class="tc">Search</label> <input id="profile-search" class="tn ox mr xk" type="search" placeholder="Search…" />
                        <button class="tp tm tg kr" type="submit" aria-label="Search">
                            <svg class="o_ sq af dd yt ks ml-3 mr-2" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 14c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7zM7 2C4.243 2 2 4.243 2 7s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5z"></path>
                                <path d="M15.707 14.293L13.314 11.9a8.019 8.019 0 01-1.414 1.414l2.393 2.393a.997.997 0 001.414 0 .999.999 0 000-1.414z"></path>
                            </svg>
                        </button>
                    </form>
                    <div class="ix">
                        <div class="gp gg yt gb it">Team members</div>
                        <ul class="rb">
                            <li class="rv">
                                <button class="ox vs rounded hz" @click="profileSidebarOpen = false">
                                    <div class="flex items-center">
                                        <div class="td mr-2"><img class="un or rounded-full" src="images/user-32-08.jpg" width="32" height="32" alt="User 08" /></div>
                                        <div class="lz"><span class="text-sm gm text-slate-800">Carolyn McNeail</span></div>
                                    </div>
                                </button>
                            </li>
                            <li class="rv">
                                <button class="ox vs rounded" @click="profileSidebarOpen = false">
                                    <div class="flex items-center lz">
                                        <div class="td mr-2"><img class="un or rounded-full" src="images/user-32-06.jpg" width="32" height="32" alt="User 06" /></div>
                                        <div class="lz"><span class="text-sm gm text-slate-800">Mary Roszczewski</span></div>
                                    </div>
                                </button>
                            </li>
                            <li class="rv">
                                <button class="ox vs rounded" @click="profileSidebarOpen = false">
                                    <div class="flex items-center lz">
                                        <div class="td mr-2"><img class="un or rounded-full" src="images/user-32-03.jpg" width="32" height="32" alt="User 03" /></div>
                                        <div class="lz"><span class="text-sm gm text-slate-800">Jerzy Wierzy</span></div>
                                    </div>
                                </button>
                            </li>
                            <li class="rv">
                                <button class="ox vs rounded" @click="profileSidebarOpen = false">
                                    <div class="flex items-center lz">
                                        <div class="td mr-2">
                                            <img class="un or rounded-full" src="images/user-32-02.jpg" width="32" height="32" alt="User 02" />
                                            <div class="tp tk tw ui os hg cp c_ rounded-full"></div>
                                        </div>
                                        <div class="lz"><span class="text-sm gm text-slate-800">Tisha Yanchev</span></div>
                                    </div>
                                </button>
                            </li>
                            <li class="rv">
                                <button class="ox vs rounded" @click="profileSidebarOpen = false">
                                    <div class="flex items-center lz">
                                        <div class="td mr-2">
                                            <img class="un or rounded-full" src="images/user-32-05.jpg" width="32" height="32" alt="User 05" />
                                            <div class="tp tk tw ui os hg cp c_ rounded-full"></div>
                                        </div>
                                        <div class="lz"><span class="text-sm gm text-slate-800">Simona Lürwer</span></div>
                                    </div>
                                </button>
                            </li>
                            <li class="rv">
                                <button class="ox vs rounded" @click="profileSidebarOpen = false">
                                    <div class="flex items-center lz">
                                        <div class="td mr-2"><img class="un or rounded-full" src="images/user-32-04.jpg" width="32" height="32" alt="User 04" /></div>
                                        <div class="lz"><span class="text-sm gm text-slate-800">Adrian Przetocki</span></div>
                                    </div>
                                </button>
                            </li>
                            <li class="rv">
                                <button class="ox vs rounded" @click="profileSidebarOpen = false">
                                    <div class="flex items-center lz">
                                        <div class="td mr-2">
                                            <img class="un or rounded-full" src="images/user-32-01.jpg" width="32" height="32" alt="User 01" />
                                            <div class="tp tk tw ui os hg cp c_ rounded-full"></div>
                                        </div>
                                        <div class="lz"><span class="text-sm gm text-slate-800">Brian Halligan</span></div>
                                    </div>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Profile body -->
    <div class="al flex fu qp a_ bq wr wi" :class="profileSidebarOpen ? 'translate-x-1/3' : 'translate-x-0'">
        <div class="td og hv">
            <img class="dj sz ox" src="images/profile-bg.jpg" width="979" height="220" alt="Profile background" />
            <button class="qs tp nd no kd ye bu xx" @click.stop="profileSidebarOpen = !profileSidebarOpen" aria-controls="profile-sidebar" :aria-expanded="profileSidebarOpen">
                <span class="tc">Close sidebar</span> <svg class="oz on dd" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M10.7 18.7l1.4-1.4L7.8 13H20v-2H7.8l4.3-4.3-1.4-1.4L4 12z"></path></svg>
            </button>
        </div>
        <div class="td va jn mx">
            <div class="sf rb _t">
                <div class="flex fu items-center _d _w _m">
                    <div class="inline-flex sl sc rw kj"><img class="rounded-full cd c_" src="images/user-128-01.jpg" width="128" height="128" alt="Avatar" /></div>
                    <div class="flex f_ _n">
                        <button class="vu af rounded border border-slate-200 hover--border-slate-300 bd">
                            <svg class="o_ od dd yt" viewBox="0 0 16 4">
                                <circle cx="8" cy="2" r="2"></circle>
                                <circle cx="2" cy="2" r="2"></circle>
                                <circle cx="14" cy="2" r="2"></circle>
                            </svg>
                        </button>
                        <button class="vu af rounded border border-slate-200 hover--border-slate-300 bd">
                            <svg class="o_ sq dd text-indigo-500" viewBox="0 0 16 16">
                                <path d="M8 0C3.6 0 0 3.1 0 7s3.6 7 8 7h.6l5.4 2v-4.4c1.2-1.2 2-2.8 2-4.6 0-3.9-3.6-7-8-7Zm4 10.8v2.3L8.9 12H8c-3.3 0-6-2.2-6-5s2.7-5 6-5 6 2.2 6 5c0 2.2-2 3.8-2 3.8Z"></path>
                            </svg>
                        </button>
                        <button class="tt hd wq ye">
                            <svg class="dd af" width="11" height="8" viewBox="0 0 11 8"><path d="m.457 4.516.969-.99 2.516 2.481L9.266.702l.985.99-6.309 6.284z"></path></svg> <span class="r_">Following</span>
                        </button>
                    </div>
                </div>
            </div>
            <header class="gu jo rb">
                <div class="inline-flex ff in">
                    <h1 class="gc text-slate-800 font-bold">Carolyn McNeail</h1>
                    <svg class="o_ sq dd af yl r_" viewBox="0 0 16 16">
                        <path
                            d="M13 6a.75.75 0 0 1-.75-.75 1.5 1.5 0 0 0-1.5-1.5.75.75 0 1 1 0-1.5 1.5 1.5 0 0 0 1.5-1.5.75.75 0 1 1 1.5 0 1.5 1.5 0 0 0 1.5 1.5.75.75 0 1 1 0 1.5 1.5 1.5 0 0 0-1.5 1.5A.75.75 0 0 1 13 6ZM6 16a1 1 0 0 1-1-1 4 4 0 0 0-4-4 1 1 0 0 1 0-2 4 4 0 0 0 4-4 1 1 0 1 1 2 0 4 4 0 0 0 4 4 1 1 0 0 1 0 2 4 4 0 0 0-4 4 1 1 0 0 1-1 1Z"
                        ></path>
                    </svg>
                </div>
                <div class="text-sm it">Fitness Fanatic, Design Enthusiast, Mentor, Meetup Organizer &amp; PHP Lover.</div>
                <div class="flex flex-wrap justify-center _y fq">
                    <div class="flex items-center">
                        <svg class="o_ sq dd af yt" viewBox="0 0 16 16">
                            <path
                                d="M8 8.992a2 2 0 1 1-.002-3.998A2 2 0 0 1 8 8.992Zm-.7 6.694c-.1-.1-4.2-3.696-4.2-3.796C1.7 10.69 1 8.892 1 6.994 1 3.097 4.1 0 8 0s7 3.097 7 6.994c0 1.898-.7 3.697-2.1 4.996-.1.1-4.1 3.696-4.2 3.796-.4.3-1 .3-1.4-.1Zm-2.7-4.995L8 13.688l3.4-2.997c1-1 1.6-2.198 1.6-3.597 0-2.798-2.2-4.996-5-4.996S3 4.196 3 6.994c0 1.399.6 2.698 1.6 3.697 0-.1 0-.1 0 0Z"
                            ></path>
                        </svg>
                        <span class="text-sm gm ct text-slate-500 r_">Milan, IT</span>
                    </div>
                    <div class="flex items-center">
                        <svg class="o_ sq dd af yt" viewBox="0 0 16 16">
                            <path
                                d="M11 0c1.3 0 2.6.5 3.5 1.5 1 .9 1.5 2.2 1.5 3.5 0 1.3-.5 2.6-1.4 3.5l-1.2 1.2c-.2.2-.5.3-.7.3-.2 0-.5-.1-.7-.3-.4-.4-.4-1 0-1.4l1.1-1.2c.6-.5.9-1.3.9-2.1s-.3-1.6-.9-2.2C12 1.7 10 1.7 8.9 2.8L7.7 4c-.4.4-1 .4-1.4 0-.4-.4-.4-1 0-1.4l1.2-1.1C8.4.5 9.7 0 11 0ZM8.3 12c.4-.4 1-.5 1.4-.1.4.4.4 1 0 1.4l-1.2 1.2C7.6 15.5 6.3 16 5 16c-1.3 0-2.6-.5-3.5-1.5C.5 13.6 0 12.3 0 11c0-1.3.5-2.6 1.5-3.5l1.1-1.2c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4L2.9 8.9c-.6.5-.9 1.3-.9 2.1s.3 1.6.9 2.2c1.1 1.1 3.1 1.1 4.2 0L8.3 12Zm1.1-6.8c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4l-4.2 4.2c-.2.2-.5.3-.7.3-.2 0-.5-.1-.7-.3-.4-.4-.4-1 0-1.4l4.2-4.2Z"
                            ></path>
                        </svg>
                        <a class="text-sm gm ct text-indigo-500 xu r_" href="#0">carolinmcneail.com</a>
                    </div>
                </div>
            </header>
            <div class="td rb">
                <div class="tp ty ox of hv" aria-hidden="true"></div>
                <ul class="td text-sm gm flex fa rl k_ zw lj ta">
                    <li class="ib last--mr-0 wm jf te_ wx jl tej"><a class="block mg text-indigo-500 ct cy hi" href="#0">General</a></li>
                    <li class="ib last--mr-0 wm jf te_ wx jl tej"><a class="block mg text-slate-500 hover--text-slate-600 ct" href="#0">Connections</a></li>
                    <li class="ib last--mr-0 wm jf te_ wx jl tej"><a class="block mg text-slate-500 hover--text-slate-600 ct" href="#0">Contributions</a></li>
                </ul>
            </div>
            <div class="flex fu ttz tnr">
                <div class="la ry tth">
                    <div>
                        <h2 class="text-slate-800 gg in">About Me</h2>
                        <div class="text-sm fz">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            </p>
                            <p>Consectetur adipiscing elit, sed do eiusmod tempor magna aliqua.</p>
                        </div>
                    </div>
                    <div>
                        <h2 class="text-slate-800 gg in">Departments</h2>
                        <div class="sx ttj fg">
                            <div class="bg-white vn border border-slate-200 rounded-sm bd">
                                <div class="al flex items-center lz in">
                                    <div class="un or af flex items-center justify-center pt rounded-full mr-2"><img class="rq" src="images/icon-03.svg" width="14" height="14" alt="Icon 03" /></div>
                                    <div class="lz"><span class="text-sm gm text-slate-800">Acme Marketing</span></div>
                                </div>
                                <div class="text-sm it">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</div>
                                <div class="flex fh items-center">
                                    <div class="flex lr iu">
                                        <img class="rounded-full cp c_ sw" src="images/avatar-02.jpg" width="24" height="24" alt="Avatar" />
                                        <img class="rounded-full cp c_ sw" src="images/avatar-03.jpg" width="24" height="24" alt="Avatar" />
                                        <img class="rounded-full cp c_ sw" src="images/avatar-04.jpg" width="24" height="24" alt="Avatar" />
                                        <img class="rounded-full cp c_ sw" src="images/avatar-05.jpg" width="24" height="24" alt="Avatar" />
                                    </div>
                                    <div><a class="text-sm gm text-indigo-500 xu" href="#0">View -&gt;</a></div>
                                </div>
                            </div>
                            <div class="bg-white vn border border-slate-200 rounded-sm bd">
                                <div class="al flex items-center lz in">
                                    <div class="un or af flex items-center justify-center pt rounded-full mr-2"><img class="rq" src="images/icon-02.svg" width="14" height="14" alt="Icon 02" /></div>
                                    <div class="lz"><span class="text-sm gm text-slate-800">Acme Product</span></div>
                                </div>
                                <div class="text-sm it">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</div>
                                <div class="flex fh items-center">
                                    <div class="flex lr iu">
                                        <img class="rounded-full cp c_ sw" src="images/avatar-06.jpg" width="24" height="24" alt="Avatar" />
                                        <img class="rounded-full cp c_ sw" src="images/avatar-03.jpg" width="24" height="24" alt="Avatar" />
                                        <img class="rounded-full cp c_ sw" src="images/avatar-01.jpg" width="24" height="24" alt="Avatar" />
                                    </div>
                                    <div><a class="text-sm gm text-indigo-500 xu" href="#0">View -&gt;</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h2 class="text-slate-800 gg in">Work History</h2>
                        <div class="bg-white vn border border-slate-200 rounded-sm bd">
                            <ul class="le">
                                <li class="_u _g _w">
                                    <div class="_h flex items-center text-sm">
                                        <div class="un or rounded-full af hb rd rk">
                                            <svg class="un or dd yw" viewBox="0 0 32 32">
                                                <path
                                                    d="M21 14a.75.75 0 0 1-.75-.75 1.5 1.5 0 0 0-1.5-1.5.75.75 0 1 1 0-1.5 1.5 1.5 0 0 0 1.5-1.5.75.75 0 1 1 1.5 0 1.5 1.5 0 0 0 1.5 1.5.75.75 0 1 1 0 1.5 1.5 1.5 0 0 0-1.5 1.5.75.75 0 0 1-.75.75Zm-7 10a1 1 0 0 1-1-1 4 4 0 0 0-4-4 1 1 0 0 1 0-2 4 4 0 0 0 4-4 1 1 0 0 1 2 0 4 4 0 0 0 4 4 1 1 0 0 1 0 2 4 4 0 0 0-4 4 1 1 0 0 1-1 1Z"
                                                ></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <div class="gm text-slate-800">Senior Product Designer</div>
                                            <div class="flex fa items-center f_ ct">
                                                <div>Remote</div>
                                                <div class="yt">·</div>
                                                <div>April, 2020 - Today</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="_r iw _i">
                                        <ul class="flex flex-wrap _b -m-1">
                                            <li class="m-1">
                                                <button class="inline-flex items-center justify-center gp gm gj rounded-full vm vh border border-slate-200 hover--border-slate-300 bd bg-white text-slate-500 we wi">
                                                    Marketing
                                                </button>
                                            </li>
                                            <li class="m-1">
                                                <button class="inline-flex items-center justify-center gp gm gj rounded-full vm vh border border-slate-200 hover--border-slate-300 bd bg-white text-slate-500 we wi">
                                                    +4
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="_u _g _w">
                                    <div class="_h flex items-center text-sm">
                                        <div class="un or rounded-full af hd rd rk">
                                            <svg class="un or dd text-indigo-50" viewBox="0 0 32 32">
                                                <path
                                                    d="M8.994 20.006a1 1 0 0 1-.707-1.707l4.5-4.5a1 1 0 0 1 1.414 0l3.293 3.293 4.793-4.793a1 1 0 1 1 1.414 1.414l-5.5 5.5a1 1 0 0 1-1.414 0l-3.293-3.293L9.7 19.713a1 1 0 0 1-.707.293Z"
                                                ></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <div class="gm text-slate-800">Product Designer</div>
                                            <div class="flex fa items-center f_ ct">
                                                <div>Milan, IT</div>
                                                <div class="yt">·</div>
                                                <div>April, 2018 - April 2020</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="_r iw _i">
                                        <ul class="flex flex-wrap _b -m-1">
                                            <li class="m-1">
                                                <button class="inline-flex items-center justify-center gp gm gj rounded-full vm vh border border-slate-200 hover--border-slate-300 bd bg-white text-slate-500 we wi">
                                                    Marketing
                                                </button>
                                            </li>
                                            <li class="m-1">
                                                <button class="inline-flex items-center justify-center gp gm gj rounded-full vm vh border border-slate-200 hover--border-slate-300 bd bg-white text-slate-500 we wi">
                                                    +4
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="_u _g _w">
                                    <div class="_h flex items-center text-sm">
                                        <div class="un or rounded-full af hd rd rk">
                                            <svg class="un or dd text-indigo-50" viewBox="0 0 32 32">
                                                <path
                                                    d="M8.994 20.006a1 1 0 0 1-.707-1.707l4.5-4.5a1 1 0 0 1 1.414 0l3.293 3.293 4.793-4.793a1 1 0 1 1 1.414 1.414l-5.5 5.5a1 1 0 0 1-1.414 0l-3.293-3.293L9.7 19.713a1 1 0 0 1-.707.293Z"
                                                ></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <div class="gm text-slate-800">Product Designer</div>
                                            <div class="flex fa items-center f_ ct">
                                                <div>Milan, IT</div>
                                                <div class="yt">·</div>
                                                <div>April, 2018 - April 2020</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="_r iw _i">
                                        <ul class="flex flex-wrap _b -m-1">
                                            <li class="m-1">
                                                <button class="inline-flex items-center justify-center gp gm gj rounded-full vm vh border border-slate-200 hover--border-slate-300 bd bg-white text-slate-500 we wi">
                                                    Marketing
                                                </button>
                                            </li>
                                            <li class="m-1">
                                                <button class="inline-flex items-center justify-center gp gm gj rounded-full vm vh border border-slate-200 hover--border-slate-300 bd bg-white text-slate-500 we wi">
                                                    +4
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <aside class="ttk ttx le">
                    <div class="text-sm">
                        <h3 class="gm text-slate-800">Title</h3>
                        <div>Senior Product Designer</div>
                    </div>
                    <div class="text-sm">
                        <h3 class="gm text-slate-800">Location</h3>
                        <div>Milan, IT - Remote</div>
                    </div>
                    <div class="text-sm">
                        <h3 class="gm text-slate-800">Email</h3>
                        <div>carolinmcneail@acme.com</div>
                    </div>
                    <div class="text-sm">
                        <h3 class="gm text-slate-800">Birthdate</h3>
                        <div>4 April, 1987</div>
                    </div>
                    <div class="text-sm">
                        <h3 class="gm text-slate-800">Joined Acme</h3>
                        <div>7 April, 2017</div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</div>
@endsection