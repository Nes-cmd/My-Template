@extends('layouts.admin.app')
@section('contents')
<div class="va jn teb vf ox uz ri">
        <!-- Page header -->
        <div class="_u _w _g ry">
            <!-- Left: Title -->
            <div class="rw kj">
                <h1 class="gc zc text-slate-800 font-bold">Changelog ✨</h1>
            </div>

            <!-- Right: Actions -->
            <div class="sx fr _p fc _b fp">
                <!-- Add board button -->
                <button class="btn hd wq ye">
                    <svg class="o_ sq dd bo af" viewBox="0 0 16 16">
                        <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"></path>
                    </svg>
                    <span class="r_">Add Entry</span>
                </button>
            </div>
        </div>

        <div class="cg border-slate-200">
            <div class="ar nj ie">
                <!-- Filters -->
                <div class="tnu tt_ in">
                    <ul class="flex flex-wrap -m-1">
                        <li class="m-1">
                            <button class="inline-flex items-center justify-center text-sm gm gj rounded-full vx vk border ck bd hd ye we wi">View All</button>
                        </li>
                        <li class="m-1">
                            <button class="inline-flex items-center justify-center text-sm gm gj rounded-full vx vk border border-slate-200 hover--border-slate-300 bd bg-white text-slate-500 we wi">Announcements</button>
                        </li>
                        <li class="m-1">
                            <button class="inline-flex items-center justify-center text-sm gm gj rounded-full vx vk border border-slate-200 hover--border-slate-300 bd bg-white text-slate-500 we wi">Bug Fix</button>
                        </li>
                        <li class="m-1">
                            <button class="inline-flex items-center justify-center text-sm gm gj rounded-full vx vk border border-slate-200 hover--border-slate-300 bd bg-white text-slate-500 we wi">Product</button>
                        </li>
                        <li class="m-1">
                            <button class="inline-flex items-center justify-center text-sm gm gj rounded-full vx vk border border-slate-200 hover--border-slate-300 bd bg-white text-slate-500 we wi">Exciting News</button>
                        </li>
                    </ul>
                </div>

                <!-- Posts -->
                <div class="tt_">
                    <!-- Post -->
                    <article class="mi">
                        <div class="ttd">
                            <div class="ut af">
                                <div class="gp gg gb yt tnf">8 July, 2021</div>
                            </div>
                            <div class="al ms cm border-slate-200">
                                <header>
                                    <h2 class="gc text-slate-800 font-bold it">Released version 2.0</h2>
                                    <div class="flex fa items-center f_ rw">
                                        <div class="flex items-center">
                                            <a class="block mr-2 af" href="#0">
                                                <img class="rounded-full cp c_ sw" src="images/user-32-07.jpg" width="32" height="32" alt="User 04" />
                                            </a>
                                            <a class="block text-sm gg text-slate-800" href="#0">
                                                Simona Lürwer
                                            </a>
                                        </div>
                                        <div class="yt">·</div>
                                        <div>
                                            <div class="gp inline-flex gm hx yr rounded-full gu vm vk">Product</div>
                                        </div>
                                    </div>
                                </header>
                                <div class="le">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                        laboris nisi ut aliquip ex ea commodo consequat.
                                    </p>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur excepteur sint occaecat cupidatat non proident.</p>
                                </div>
                            </div>
                        </div>
                    </article>
                    <!-- Post -->
                    <article class="mi">
                        <div class="ttd">
                            <div class="ut af">
                                <div class="gp gg gb yt tnf">6 July, 2021</div>
                            </div>
                            <div class="al ms cm border-slate-200">
                                <header>
                                    <h2 class="gc text-slate-800 font-bold it">Feature Name is now public 🎉</h2>
                                    <div class="flex fa items-center f_ rw">
                                        <div class="flex items-center">
                                            <a class="block mr-2 af" href="#0">
                                                <img class="rounded-full cp c_ sw" src="images/user-32-02.jpg" width="32" height="32" alt="User 04" />
                                            </a>
                                            <a class="block text-sm gg text-slate-800" href="#0">
                                                Danielle Cohen
                                            </a>
                                        </div>
                                        <div class="yt">·</div>
                                        <div>
                                            <div class="gp inline-flex gm hk yo rounded-full gu vm vk">Announcement</div>
                                        </div>
                                    </div>
                                </header>
                                <div class="le">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                        laboris nisi ut aliquip ex ea commodo consequat.
                                    </p>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur excepteur sint occaecat cupidatat non proident.</p>
                                </div>
                            </div>
                        </div>
                    </article>
                    <!-- Post -->
                    <article class="mi">
                        <div class="ttd">
                            <div class="ut af">
                                <div class="gp gg gb yt tnf">4 July, 2021</div>
                            </div>
                            <div class="al ms cm border-slate-200">
                                <header>
                                    <h2 class="gc text-slate-800 font-bold it">Bugs fixed, issues, and more</h2>
                                    <div class="flex fa items-center f_ rw">
                                        <div class="flex items-center">
                                            <a class="block mr-2 af" href="#0">
                                                <img class="rounded-full cp c_ sw" src="images/user-32-01.jpg" width="32" height="32" alt="User 04" />
                                            </a>
                                            <a class="block text-sm gg text-slate-800" href="#0">
                                                Patrick Kumar
                                            </a>
                                        </div>
                                        <div class="yt">·</div>
                                        <div>
                                            <div class="gp inline-flex gm h_ yu rounded-full gu vm vk">Bug Fix</div>
                                        </div>
                                    </div>
                                </header>
                                <div class="le">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                        laboris nisi ut aliquip ex ea commodo consequat.
                                    </p>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur excepteur sint occaecat cupidatat non proident.</p>
                                    <ul class="ft fe lt">
                                        <li>E-commerce: Better lorem ipsum generator.</li>
                                        <li>Booking: Lorem ipsum post generator.</li>
                                        <li>Retail: Better lorem ipsum generator.</li>
                                        <li>Services: Better lorem ipsum generator.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </article>
                    <!-- Post -->
                    <article class="mi">
                        <div class="ttd">
                            <div class="ut af">
                                <div class="gp gg gb yt tnf">2 July, 2021</div>
                            </div>
                            <div class="al ms cm border-slate-200">
                                <header>
                                    <h2 class="gc text-slate-800 font-bold it">Thanks, everyone 🙌</h2>
                                    <div class="flex fa items-center f_ rw">
                                        <div class="flex items-center">
                                            <a class="block mr-2 af" href="#0">
                                                <img class="rounded-full cp c_ sw" src="images/user-32-02.jpg" width="32" height="32" alt="User 04" />
                                            </a>
                                            <a class="block text-sm gg text-slate-800" href="#0">
                                                Danielle Cohen
                                            </a>
                                        </div>
                                        <div class="yt">·</div>
                                        <div>
                                            <div class="gp inline-flex gm hj ya rounded-full gu vm vk">Exciting News</div>
                                        </div>
                                    </div>
                                </header>
                                <div class="le">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                        laboris nisi ut aliquip ex ea commodo consequat.
                                    </p>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur excepteur sint occaecat cupidatat non proident.</p>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- Pagination -->
                <div class="tnu tt_ ir">
                    <div class="flex fu _d _g _w">
                        <nav class="rw kj km" role="navigation" aria-label="Navigation">
                            <ul class="flex justify-center">
                                <li class="ml-3 first--ml-0"><a class="btn bg-white border-slate-200 yd az" href="#0" disabled="disabled">&lt;- Previous</a></li>
                                <li class="ml-3 first--ml-0"><a class="btn bg-white border-slate-200 hover--border-slate-300 text-indigo-500" href="#0">Next -&gt;</a></li>
                            </ul>
                        </nav>
                        <div class="text-sm text-slate-500 gu jo">Showing <span class="gm gz">1</span> to <span class="gm gz">10</span> of <span class="gm gz">467</span> results</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection