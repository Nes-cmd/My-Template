
@extends('layouts.admin.app')
@section('contents')
    <div class="va jn teb vf ox uz ri">
        <!-- Page header -->
        <div class="_u _w _g ry">
            <!-- Left: Title -->
            <div class="rw kj">
                <h1 class="gc zc text-slate-800 font-bold">Campaigns ✨</h1>
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
                <div class="td inline-flex">
                    <button class="btn bg-white border-slate-200 hover--border-slate-300 text-slate-500 hover--text-slate-600">
                        <span class="tc">Filter</span><wbr />
                        <svg class="o_ sq dd" viewBox="0 0 16 16">
                            <path d="M9 15H7a1 1 0 010-2h2a1 1 0 010 2zM11 11H5a1 1 0 010-2h6a1 1 0 010 2zM13 7H3a1 1 0 010-2h10a1 1 0 010 2zM15 3H1a1 1 0 010-2h14a1 1 0 010 2z"></path>
                        </svg>
                    </button>
                </div>
                <button class="btn hd wq ye">
                    <svg class="o_ sq dd bo af" viewBox="0 0 16 16"><path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"></path></svg>
                    <span class="hidden tnm r_">Create Campaign</span>
                </button>
            </div>
        </div>

        <!-- Cards -->
        <div class="sx fi fd">
            <!-- Campaign cards -->
            <div class="nk kx tto bg-white bh rounded-sm border border-slate-200">
                <div class="flex fu sz vi">
                    <header>
                        <div class="flex items-center fh">
                            <div class="ur oi rounded-full flex items-center justify-center af hq">
                                <svg class="uv ov dd ym" viewBox="0 0 36 36"><path d="M25 24H11a1 1 0 01-1-1v-5h2v4h12v-4h2v5a1 1 0 01-1 1zM14 13h8v2h-8z"></path></svg>
                            </div>
                            <div class="flex af lr se">
                                <a class="block" href="#0"> <img class="rounded-full cp c_ sw" src="images/user-28-01.jpg" width="28" height="28" alt="User 01" /> </a>
                                <a class="block" href="#0"> <img class="rounded-full cp c_ sw" src="images/user-28-02.jpg" width="28" height="28" alt="User 02" /> </a>
                                <a class="block" href="#0"> <img class="rounded-full cp c_ sw" src="images/user-28-03.jpg" width="28" height="28" alt="User 03" /> </a>
                            </div>
                        </div>
                    </header>
                    <div class="al iw">
                        <a class="inline-flex text-slate-800 xd rx" href="#0"> <h2 class="gh gk gg">Monitor progress in Real Time Value</h2> </a>
                        <div class="text-sm">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts.</div>
                    </div>
                    <footer class="id">
                        <div class="text-sm gm text-slate-500 in">Jan 20 <span class="yt">-&gt;</span> Jan 27</div>
                        <div class="flex fh items-center">
                            <div><div class="gp inline-flex gm hx yr rounded-full gu vm vk">One-Time</div></div>
                            <div><a class="text-sm gm text-indigo-500 xu" href="#0">View -&gt;</a></div>
                        </div>
                    </footer>
                </div>
            </div>
            <div class="nk kx tto bg-white bh rounded-sm border border-slate-200">
                <div class="flex fu sz vi">
                    <header>
                        <div class="flex items-center fh">
                            <div class="ur oi rounded-full flex items-center justify-center af hg">
                                <svg class="uv ov dd ys" viewBox="0 0 36 36"><path d="M15 13v-3l-5 4 5 4v-3h8a1 1 0 000-2h-8zM21 21h-8a1 1 0 000 2h8v3l5-4-5-4v3z"></path></svg>
                            </div>
                            <div class="flex af lr se">
                                <a class="block" href="#0"> <img class="rounded-full cp c_ sw" src="images/user-28-04.jpg" width="28" height="28" alt="User 04" /> </a>
                                <a class="block" href="#0"> <img class="rounded-full cp c_ sw" src="images/user-28-05.jpg" width="28" height="28" alt="User 05" /> </a>
                            </div>
                        </div>
                    </header>
                    <div class="al iw">
                        <a class="inline-flex text-slate-800 xd rx" href="#0"> <h2 class="gh gk gg">Monitor progress in Real Time Value</h2> </a>
                        <div class="text-sm">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts.</div>
                    </div>
                    <footer class="id">
                        <div class="text-sm gm text-slate-500 in">Jan 20 <span class="yt">-&gt;</span> Jan 27</div>
                        <div class="flex fh items-center">
                            <div><div class="gp inline-flex gm h_ yu rounded-full gu vm vk">Off-Track</div></div>
                            <div><a class="text-sm gm text-indigo-500 xu" href="#0">View -&gt;</a></div>
                        </div>
                    </footer>
                </div>
            </div>
            <div class="nk kx tto bg-white bh rounded-sm border border-slate-200">
                <div class="flex fu sz vi">
                    <header>
                        <div class="flex items-center fh">
                            <div class="ur oi rounded-full flex items-center justify-center af hm">
                                <svg class="uv ov dd yg" viewBox="0 0 36 36">
                                    <path
                                        d="M23 11v2.085c-2.841.401-4.41 2.462-5.8 4.315-1.449 1.932-2.7 3.6-5.2 3.6h-1v2h1c3.5 0 5.253-2.338 6.8-4.4 1.449-1.932 2.7-3.6 5.2-3.6h3l-4-4zM15.406 16.455c.066-.087.125-.162.194-.254.314-.419.656-.872 1.033-1.33C15.475 13.802 14.038 13 12 13h-1v2h1c1.471 0 2.505.586 3.406 1.455zM24 21c-1.471 0-2.505-.586-3.406-1.455-.066.087-.125.162-.194.254-.316.422-.656.873-1.028 1.328.959.878 2.108 1.573 3.628 1.788V25l4-4h-3z"
                                    ></path>
                                </svg>
                            </div>
                            <div class="flex af lr se">
                                <a class="block" href="#0"> <img class="rounded-full cp c_ sw" src="images/user-28-07.jpg" width="28" height="28" alt="User 07" /> </a>
                                <a class="block" href="#0"> <img class="rounded-full cp c_ sw" src="images/user-28-08.jpg" width="28" height="28" alt="User 08" /> </a>
                                <a class="block" href="#0"> <img class="rounded-full cp c_ sw" src="images/user-28-09.jpg" width="28" height="28" alt="User 09" /> </a>
                            </div>
                        </div>
                    </header>
                    <div class="al iw">
                        <a class="inline-flex text-slate-800 xd rx" href="#0"> <h2 class="gh gk gg">Monitor progress in Real Time Value</h2> </a>
                        <div class="text-sm">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts.</div>
                    </div>
                    <footer class="id">
                        <div class="text-sm gm text-slate-500 in">Jan 20 <span class="yt">-&gt;</span> Jan 27</div>
                        <div class="flex fh items-center">
                            <div><div class="gp inline-flex gm hk yo rounded-full gu vm vk">At Risk</div></div>
                            <div><a class="text-sm gm text-indigo-500 xu" href="#0">View -&gt;</a></div>
                        </div>
                    </footer>
                </div>
            </div>
            <div class="nk kx tto bg-white bh rounded-sm border border-slate-200">
                <div class="flex fu sz vi">
                    <header>
                        <div class="flex items-center fh">
                            <div class="ur oi rounded-full flex items-center justify-center af hq">
                                <svg class="uv ov dd ym" viewBox="0 0 36 36"><path d="M25 24H11a1 1 0 01-1-1v-5h2v4h12v-4h2v5a1 1 0 01-1 1zM14 13h8v2h-8z"></path></svg>
                            </div>
                            <div class="flex af lr se">
                                <a class="block" href="#0"> <img class="rounded-full cp c_ sw" src="images/user-28-10.jpg" width="28" height="28" alt="User 10" /> </a>
                            </div>
                        </div>
                    </header>
                    <div class="al iw">
                        <a class="inline-flex text-slate-800 xd rx" href="#0"> <h2 class="gh gk gg">Monitor progress in Real Time Value</h2> </a>
                        <div class="text-sm">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts.</div>
                    </div>
                    <footer class="id">
                        <div class="text-sm gm text-slate-500 in">Jan 20 <span class="yt">-&gt;</span> Jan 27</div>
                        <div class="flex fh items-center">
                            <div><div class="gp inline-flex gm hk yo rounded-full gu vm vk">At Risk</div></div>
                            <div><a class="text-sm gm text-indigo-500 xu" href="#0">View -&gt;</a></div>
                        </div>
                    </footer>
                </div>
            </div>
            <div class="nk kx tto bg-white bh rounded-sm border border-slate-200">
                <div class="flex fu sz vi">
                    <header>
                        <div class="flex items-center fh">
                            <div class="ur oi rounded-full flex items-center justify-center af hd">
                                <svg class="uv ov dd text-indigo-50" viewBox="0 0 36 36">
                                    <path d="M18 10c-4.4 0-8 3.1-8 7s3.6 7 8 7h.6l5.4 2v-4.4c1.2-1.2 2-2.8 2-4.6 0-3.9-3.6-7-8-7zm4 10.8v2.3L18.9 22H18c-3.3 0-6-2.2-6-5s2.7-5 6-5 6 2.2 6 5c0 2.2-2 3.8-2 3.8z"></path>
                                </svg>
                            </div>
                            <div class="flex af lr se">
                                <a class="block" href="#0"> <img class="rounded-full cp c_ sw" src="images/user-28-11.jpg" width="28" height="28" alt="User 11" /> </a>
                                <a class="block" href="#0"> <img class="rounded-full cp c_ sw" src="images/user-28-05.jpg" width="28" height="28" alt="User 05" /> </a>
                                <a class="block" href="#0"> <img class="rounded-full cp c_ sw" src="images/user-28-12.jpg" width="28" height="28" alt="User 12" /> </a>
                            </div>
                        </div>
                    </header>
                    <div class="al iw">
                        <a class="inline-flex text-slate-800 xd rx" href="#0"> <h2 class="gh gk gg">Monitor progress in Real Time Value</h2> </a>
                        <div class="text-sm">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts.</div>
                    </div>
                    <footer class="id">
                        <div class="text-sm gm text-slate-500 in">Jan 20 <span class="yt">-&gt;</span> Jan 27</div>
                        <div class="flex fh items-center">
                            <div><div class="gp inline-flex gm hx yr rounded-full gu vm vk">One-Time</div></div>
                            <div><a class="text-sm gm text-indigo-500 xu" href="#0">View -&gt;</a></div>
                        </div>
                    </footer>
                </div>
            </div>
            <div class="nk kx tto bg-white bh rounded-sm border border-slate-200">
                <div class="flex fu sz vi">
                    <header>
                        <div class="flex items-center fh">
                            <div class="ur oi rounded-full flex items-center justify-center af hg">
                                <svg class="uv ov dd ys" viewBox="0 0 36 36"><path d="M15 13v-3l-5 4 5 4v-3h8a1 1 0 000-2h-8zM21 21h-8a1 1 0 000 2h8v3l5-4-5-4v3z"></path></svg>
                            </div>
                            <div class="flex af lr se">
                                <a class="block" href="#0"> <img class="rounded-full cp c_ sw" src="images/user-28-07.jpg" width="28" height="28" alt="User 07" /> </a>
                                <a class="block" href="#0"> <img class="rounded-full cp c_ sw" src="images/user-28-04.jpg" width="28" height="28" alt="User 04" /> </a>
                                <a class="block" href="#0"> <img class="rounded-full cp c_ sw" src="images/user-28-11.jpg" width="28" height="28" alt="User 11" /> </a>
                            </div>
                        </div>
                    </header>
                    <div class="al iw">
                        <a class="inline-flex text-slate-800 xd rx" href="#0"> <h2 class="gh gk gg">Monitor progress in Real Time Value</h2> </a>
                        <div class="text-sm">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts.</div>
                    </div>
                    <footer class="id">
                        <div class="text-sm gm text-slate-500 in">Jan 20 <span class="yt">-&gt;</span> Jan 27</div>
                        <div class="flex fh items-center">
                            <div><div class="gp inline-flex gm hk yo rounded-full gu vm vk">At Risk</div></div>
                            <div><a class="text-sm gm text-indigo-500 xu" href="#0">View -&gt;</a></div>
                        </div>
                    </footer>
                </div>
            </div>
            <div class="nk kx tto bg-white bh rounded-sm border border-slate-200">
                <div class="flex fu sz vi">
                    <header>
                        <div class="flex items-center fh">
                            <div class="ur oi rounded-full flex items-center justify-center af hd">
                                <svg class="uv ov dd text-indigo-50" viewBox="0 0 36 36">
                                    <path d="M18 10c-4.4 0-8 3.1-8 7s3.6 7 8 7h.6l5.4 2v-4.4c1.2-1.2 2-2.8 2-4.6 0-3.9-3.6-7-8-7zm4 10.8v2.3L18.9 22H18c-3.3 0-6-2.2-6-5s2.7-5 6-5 6 2.2 6 5c0 2.2-2 3.8-2 3.8z"></path>
                                </svg>
                            </div>
                            <div class="flex af lr se">
                                <a class="block" href="#0"> <img class="rounded-full cp c_ sw" src="images/user-28-01.jpg" width="28" height="28" alt="User 01" /> </a>
                                <a class="block" href="#0"> <img class="rounded-full cp c_ sw" src="images/user-28-02.jpg" width="28" height="28" alt="User 02" /> </a>
                                <a class="block" href="#0"> <img class="rounded-full cp c_ sw" src="images/user-28-06.jpg" width="28" height="28" alt="User 06" /> </a>
                            </div>
                        </div>
                    </header>
                    <div class="al iw">
                        <a class="inline-flex text-slate-800 xd rx" href="#0"> <h2 class="gh gk gg">Monitor progress in Real Time Value</h2> </a>
                        <div class="text-sm">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts.</div>
                    </div>
                    <footer class="id">
                        <div class="text-sm gm text-slate-500 in">Jan 20 <span class="yt">-&gt;</span> Jan 27</div>
                        <div class="flex fh items-center">
                            <div><div class="gp inline-flex gm hx yr rounded-full gu vm vk">One-Time</div></div>
                            <div><a class="text-sm gm text-indigo-500 xu" href="#0">View -&gt;</a></div>
                        </div>
                    </footer>
                </div>
            </div>
            <div class="nk kx tto bg-white bh rounded-sm border border-slate-200">
                <div class="flex fu sz vi">
                    <header>
                        <div class="flex items-center fh">
                            <div class="ur oi rounded-full flex items-center justify-center af hq">
                                <svg class="uv ov dd ym" viewBox="0 0 36 36"><path d="M25 24H11a1 1 0 01-1-1v-5h2v4h12v-4h2v5a1 1 0 01-1 1zM14 13h8v2h-8z"></path></svg>
                            </div>
                            <div class="flex af lr se">
                                <a class="block" href="#0"> <img class="rounded-full cp c_ sw" src="images/user-28-09.jpg" width="28" height="28" alt="User 09" /> </a>
                                <a class="block" href="#0"> <img class="rounded-full cp c_ sw" src="images/user-28-01.jpg" width="28" height="28" alt="User 01" /> </a>
                            </div>
                        </div>
                    </header>
                    <div class="al iw">
                        <a class="inline-flex text-slate-800 xd rx" href="#0"> <h2 class="gh gk gg">Monitor progress in Real Time Value</h2> </a>
                        <div class="text-sm">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts.</div>
                    </div>
                    <footer class="id">
                        <div class="text-sm gm text-slate-500 in">Jan 20 <span class="yt">-&gt;</span> Jan 27</div>
                        <div class="flex fh items-center">
                            <div><div class="gp inline-flex gm h_ yu rounded-full gu vm vk">Off-Track</div></div>
                            <div><a class="text-sm gm text-indigo-500 xu" href="#0">View -&gt;</a></div>
                        </div>
                    </footer>
                </div>
            </div>
            <div class="nk kx tto bg-white bh rounded-sm border border-slate-200">
                <div class="flex fu sz vi">
                    <header>
                        <div class="flex items-center fh">
                            <div class="ur oi rounded-full flex items-center justify-center af hm">
                                <svg class="uv ov dd yg" viewBox="0 0 36 36">
                                    <path
                                        d="M23 11v2.085c-2.841.401-4.41 2.462-5.8 4.315-1.449 1.932-2.7 3.6-5.2 3.6h-1v2h1c3.5 0 5.253-2.338 6.8-4.4 1.449-1.932 2.7-3.6 5.2-3.6h3l-4-4zM15.406 16.455c.066-.087.125-.162.194-.254.314-.419.656-.872 1.033-1.33C15.475 13.802 14.038 13 12 13h-1v2h1c1.471 0 2.505.586 3.406 1.455zM24 21c-1.471 0-2.505-.586-3.406-1.455-.066.087-.125.162-.194.254-.316.422-.656.873-1.028 1.328.959.878 2.108 1.573 3.628 1.788V25l4-4h-3z"
                                    ></path>
                                </svg>
                            </div>
                            <div class="flex af lr se">
                                <a class="block" href="#0"> <img class="rounded-full cp c_ sw" src="images/user-28-07.jpg" width="28" height="28" alt="User 07" /> </a>
                                <a class="block" href="#0"> <img class="rounded-full cp c_ sw" src="images/user-28-08.jpg" width="28" height="28" alt="User 08" /> </a>
                                <a class="block" href="#0"> <img class="rounded-full cp c_ sw" src="images/user-28-09.jpg" width="28" height="28" alt="User 09" /> </a>
                                <a class="block" href="#0"> <img class="rounded-full cp c_ sw" src="images/user-28-06.jpg" width="28" height="28" alt="User 06" /> </a>
                            </div>
                        </div>
                    </header>
                    <div class="al iw">
                        <a class="inline-flex text-slate-800 xd rx" href="#0"> <h2 class="gh gk gg">Monitor progress in Real Time Value</h2> </a>
                        <div class="text-sm">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts.</div>
                    </div>
                    <footer class="id">
                        <div class="text-sm gm text-slate-500 in">Jan 20 <span class="yt">-&gt;</span> Jan 27</div>
                        <div class="flex fh items-center">
                            <div><div class="gp inline-flex gm hx yr rounded-full gu vm vk">One-Time</div></div>
                            <div><a class="text-sm gm text-indigo-500 xu" href="#0">View -&gt;</a></div>
                        </div>
                    </footer>
                </div>
            </div>
            <div class="nk kx tto bg-white bh rounded-sm border border-slate-200">
                <div class="flex fu sz vi">
                    <header>
                        <div class="flex items-center fh">
                            <div class="ur oi rounded-full flex items-center justify-center af hd">
                                <svg class="uv ov dd text-indigo-50" viewBox="0 0 36 36">
                                    <path d="M18 10c-4.4 0-8 3.1-8 7s3.6 7 8 7h.6l5.4 2v-4.4c1.2-1.2 2-2.8 2-4.6 0-3.9-3.6-7-8-7zm4 10.8v2.3L18.9 22H18c-3.3 0-6-2.2-6-5s2.7-5 6-5 6 2.2 6 5c0 2.2-2 3.8-2 3.8z"></path>
                                </svg>
                            </div>
                            <div class="flex af lr se">
                                <a class="block" href="#0"> <img class="rounded-full cp c_ sw" src="images/user-28-06.jpg" width="28" height="28" alt="User 06" /> </a>
                                <a class="block" href="#0"> <img class="rounded-full cp c_ sw" src="images/user-28-11.jpg" width="28" height="28" alt="User 11" /> </a>
                            </div>
                        </div>
                    </header>
                    <div class="al iw">
                        <a class="inline-flex text-slate-800 xd rx" href="#0"> <h2 class="gh gk gg">Monitor progress in Real Time Value</h2> </a>
                        <div class="text-sm">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts.</div>
                    </div>
                    <footer class="id">
                        <div class="text-sm gm text-slate-500 in">Jan 20 <span class="yt">-&gt;</span> Jan 27</div>
                        <div class="flex fh items-center">
                            <div><div class="gp inline-flex gm h_ yu rounded-full gu vm vk">Off-Track</div></div>
                            <div><a class="text-sm gm text-indigo-500 xu" href="#0">View -&gt;</a></div>
                        </div>
                    </footer>
                </div>
            </div>
            <div class="nk kx tto bg-white bh rounded-sm border border-slate-200">
                <div class="flex fu sz vi">
                    <header>
                        <div class="flex items-center fh">
                            <div class="ur oi rounded-full flex items-center justify-center af hg">
                                <svg class="uv ov dd ys" viewBox="0 0 36 36"><path d="M15 13v-3l-5 4 5 4v-3h8a1 1 0 000-2h-8zM21 21h-8a1 1 0 000 2h8v3l5-4-5-4v3z"></path></svg>
                            </div>
                            <div class="flex af lr se">
                                <a class="block" href="#0"> <img class="rounded-full cp c_ sw" src="images/user-28-05.jpg" width="28" height="28" alt="User 05" /> </a>
                            </div>
                        </div>
                    </header>
                    <div class="al iw">
                        <a class="inline-flex text-slate-800 xd rx" href="#0"> <h2 class="gh gk gg">Monitor progress in Real Time Value</h2> </a>
                        <div class="text-sm">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts.</div>
                    </div>
                    <footer class="id">
                        <div class="text-sm gm text-slate-500 in">Jan 20 <span class="yt">-&gt;</span> Jan 27</div>
                        <div class="flex fh items-center">
                            <div><div class="gp inline-flex gm h_ yu rounded-full gu vm vk">Off-Track</div></div>
                            <div><a class="text-sm gm text-indigo-500 xu" href="#0">View -&gt;</a></div>
                        </div>
                    </footer>
                </div>
            </div>
            <div class="nk kx tto bg-white bh rounded-sm border border-slate-200">
                <div class="flex fu sz vi">
                    <header>
                        <div class="flex items-center fh">
                            <div class="ur oi rounded-full flex items-center justify-center af hm">
                                <svg class="uv ov dd yg" viewBox="0 0 36 36">
                                    <path
                                        d="M23 11v2.085c-2.841.401-4.41 2.462-5.8 4.315-1.449 1.932-2.7 3.6-5.2 3.6h-1v2h1c3.5 0 5.253-2.338 6.8-4.4 1.449-1.932 2.7-3.6 5.2-3.6h3l-4-4zM15.406 16.455c.066-.087.125-.162.194-.254.314-.419.656-.872 1.033-1.33C15.475 13.802 14.038 13 12 13h-1v2h1c1.471 0 2.505.586 3.406 1.455zM24 21c-1.471 0-2.505-.586-3.406-1.455-.066.087-.125.162-.194.254-.316.422-.656.873-1.028 1.328.959.878 2.108 1.573 3.628 1.788V25l4-4h-3z"
                                    ></path>
                                </svg>
                            </div>
                            <div class="flex af lr se">
                                <a class="block" href="#0"> <img class="rounded-full cp c_ sw" src="images/user-28-07.jpg" width="28" height="28" alt="User 07" /> </a>
                                <a class="block" href="#0"> <img class="rounded-full cp c_ sw" src="images/user-28-08.jpg" width="28" height="28" alt="User 08" /> </a>
                                <a class="block" href="#0"> <img class="rounded-full cp c_ sw" src="images/user-28-09.jpg" width="28" height="28" alt="User 09" /> </a>
                            </div>
                        </div>
                    </header>
                    <div class="al iw">
                        <a class="inline-flex text-slate-800 xd rx" href="#0"> <h2 class="gh gk gg">Monitor progress in Real Time Value</h2> </a>
                        <div class="text-sm">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts.</div>
                    </div>
                    <footer class="id">
                        <div class="text-sm gm text-slate-500 in">Jan 20 <span class="yt">-&gt;</span> Jan 27</div>
                        <div class="flex fh items-center">
                            <div><div class="gp inline-flex gm hk yo rounded-full gu vm vk">At Risk</div></div>
                            <div><a class="text-sm gm text-indigo-500 xu" href="#0">View -&gt;</a></div>
                        </div>
                    </footer>
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