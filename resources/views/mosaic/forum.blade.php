@extends('layouts.admin.app')
@section('contents')
<div class="va jn teb vf zo ox uz ri">
    <div class="ttd">
        <!-- Left + Middle content -->
        <div class="qn au">
            <!-- Left content -->
            <div class="ox ql ry jj">
                <div class="jp jm qo zr zn ta">
                    <div class="za">
                        <div class="flex fh items-center qe">
                            <header class="rb"><h1 class="gc zc text-slate-800 font-bold">Forum ✨</h1></header>
                            <div class="ttv rb"><button class="btn qc hd wq ye">Create Post</button></div>
                        </div>
                        <div class="flex fa lj ta qe zt va ze rl">
                            <div>
                                <div class="gp gg yt gb it jc">Menu</div>
                                <ul class="flex fa qe rk jq">
                                    <li class="sr jq jz">
                                        <a class="flex items-center vm vc rounded ct bg-white" href="#0">
                                            <svg class="o_ sq af dd text-indigo-500 mr-2" viewBox="0 0 16 16">
                                                <path
                                                    d="M10 16h4c.6 0 1-.4 1-.998V6.016c0-.3-.1-.6-.4-.8L8.6.226c-.4-.3-.9-.3-1.3 0l-6 4.992c-.2.2-.3.5-.3.799v8.986C1 15.6 1.4 16 2 16h4c.6 0 1-.4 1-.998v-2.996h2v2.996c0 .599.4.998 1 .998Zm-4-5.99c-.6 0-1 .399-1 .998v2.995H3V6.515L8 2.32l5 4.194v7.488h-2v-2.995c0-.6-.4-.999-1-.999H6Z"
                                                ></path>
                                            </svg>
                                            <span class="text-sm gm text-indigo-500">Home</span>
                                        </a>
                                    </li>
                                    <li class="sr jq jz">
                                        <a class="flex items-center vm vc rounded ct" href="#0">
                                            <svg class="o_ sq af dd yt mr-2" viewBox="0 0 16 16">
                                                <path
                                                    d="M14.682 2.318A4.485 4.485 0 0 0 11.5 1 4.377 4.377 0 0 0 8 2.707 4.383 4.383 0 0 0 4.5 1a4.5 4.5 0 0 0-3.182 7.682L8 15l6.682-6.318a4.5 4.5 0 0 0 0-6.364Zm-1.4 4.933L8 12.247l-5.285-5A2.5 2.5 0 0 1 4.5 3c1.437 0 2.312.681 3.5 2.625C9.187 3.681 10.062 3 11.5 3a2.5 2.5 0 0 1 1.785 4.251h-.003Z"
                                                ></path>
                                            </svg>
                                            <span class="text-sm gm gz">Reading List</span>
                                        </a>
                                    </li>
                                    <li class="sr jq jz">
                                        <a class="flex items-center vm vc rounded ct" href="#0">
                                            <svg class="o_ sq af dd yt mr-2" viewBox="0 0 16 16">
                                                <path d="M5 9h11v2H5V9zM0 9h3v2H0V9zm5 4h6v2H5v-2zm-5 0h3v2H0v-2zm5-8h7v2H5V5zM0 5h3v2H0V5zm5-4h11v2H5V1zM0 1h3v2H0V1z"></path>
                                            </svg>
                                            <span class="text-sm gm gz">Listings</span>
                                        </a>
                                    </li>
                                    <li class="sr jq jz">
                                        <a class="flex items-center vm vc rounded ct" href="#0">
                                            <svg class="o_ sq af dd yt mr-2" viewBox="0 0 16 16">
                                                <path
                                                    d="M1 12a1 1 0 0 1-.707-1.704l4.496-4.493a1 1 0 0 1 1.413 0l3.29 3.287 4.79-4.785a1 1 0 1 1 1.413 1.412l-5.496 5.491a1 1 0 0 1-1.413 0L5.496 7.92l-3.79 3.787A1 1 0 0 1 .999 12Z"
                                                ></path>
                                            </svg>
                                            <span class="text-sm gm gz">Podcasts</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <div class="gp gg yt gb it">My Groups</div>
                                <ul class="flex fa qe rk jq">
                                    <li class="sr jq jz">
                                        <a class="flex items-center vm vc rounded ct" href="#0">
                                            <svg class="w-3 h-3 af dd yf rk" viewBox="0 0 12 12"><path d="M6 10a4 4 0 1 0 0-8 4 4 0 0 0 0 8Zm0 2A6 6 0 1 1 6 0a6 6 0 0 1 0 12Z"></path></svg>
                                            <span class="text-sm gm gz">Startups</span>
                                        </a>
                                    </li>
                                    <li class="sr jq jz">
                                        <a class="flex items-center vm vc rounded ct" href="#0">
                                            <svg class="w-3 h-3 af dd yi rk" viewBox="0 0 12 12"><path d="M6 10a4 4 0 1 0 0-8 4 4 0 0 0 0 8Zm0 2A6 6 0 1 1 6 0a6 6 0 0 1 0 12Z"></path></svg>
                                            <span class="text-sm gm gz">Javascript</span>
                                        </a>
                                    </li>
                                    <li class="sr jq jz">
                                        <a class="flex items-center vm vc rounded ct" href="#0">
                                            <svg class="w-3 h-3 af dd yl rk" viewBox="0 0 12 12"><path d="M6 10a4 4 0 1 0 0-8 4 4 0 0 0 0 8Zm0 2A6 6 0 1 1 6 0a6 6 0 0 1 0 12Z"></path></svg>
                                            <span class="text-sm gm gz">Productivity</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Middle content -->
            <div class="au jk ttl 2xl:mx-8">
                <div class="za">
                    <!-- Buttons group -->
                    <div class="rw">
                        <div class="ox flex flex-wrap fk">
                            <button class="btn al bg-white border-slate-200 text-indigo-500 cn wp wy">Popular</button>
                            <button class="btn al bg-white border-slate-200 wz gz cn wp wy">Newest</button>
                            <button class="btn al bg-white border-slate-200 wz gz cn wp wy">Following</button>
                        </div>
                    </div>

                    <!-- Forum entries -->
                    <div class="fz">
                        <article class="bg-white shadow-md rounded border border-slate-200 vi">
                            <div class="flex flex-start fq">
                                <div class="af ss"><img class="un or rounded-full" src="images/user-avatar-32.png" width="32" height="32" alt="User avatar" /></div>
                                <div class="al">
                                    <h2 class="gg text-slate-800 in"><a href="forum-post.html">Share Your Startup - December 2021 - Upvote This For Maximum Visibility!</a></h2>
                                    <footer class="flex flex-wrap text-sm">
                                        <div class="flex items-center wo wh w_ wf wl wa">
                                            <a class="gm text-indigo-500 xu" href="#0">
                                                <div class="flex items-center">
                                                    <svg class="o_ sq mr-2 dd" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M15.686 5.708 10.291.313c-.4-.4-.999-.4-1.399 0s-.4 1 0 1.399l.6.6-6.794 3.696-1-1C1.299 4.61.7 4.61.3 5.009c-.4.4-.4 1 0 1.4l1.498 1.498 2.398 2.398L.6 14.001 2 15.4l3.696-3.697L9.692 15.7c.5.5 1.199.2 1.398 0 .4-.4.4-1 0-1.4l-.999-.998 3.697-6.695.6.6c.599.6 1.199.2 1.398 0 .3-.4.3-1.1-.1-1.499Zm-7.193 6.095L4.196 7.507l6.695-3.697 1.298 1.299-3.696 6.694Z"
                                                        ></path>
                                                    </svg>
                                                    ekuplu89
                                                </div>
                                            </a>
                                        </div>
                                        <div class="flex items-center wo wh w_ wf wl wa"><span class="text-slate-500">7d</span></div>
                                        <div class="flex items-center wo wh w_ wf wl wa"><span class="text-slate-500">688 Comments</span></div>
                                    </footer>
                                </div>
                                <div class="af">
                                    <button class="gp gg gu oa ua border hr rounded-sm flex fu justify-center items-center bv bm bg">
                                        <svg class="inline-flex dw ss so" width="12" height="6" xmlns="http://www.w3.org/2000/svg"><path d="m0 6 6-6 6 6z"></path></svg>
                                        <div>499</div>
                                    </button>
                                </div>
                            </div>
                        </article>
                        <article class="bg-white shadow-md rounded border border-slate-200 vi">
                            <div class="flex flex-start fq">
                                <div class="af ss"><img class="un or rounded-full" src="images/user-32-02.jpg" width="32" height="32" alt="User 02" /></div>
                                <div class="al">
                                    <h2 class="gg text-slate-800 in"><a href="forum-post.html">Failed for the past 12 years as a tech entrepreneur. My key takeaways.</a></h2>
                                    <footer class="flex flex-wrap text-sm">
                                        <div class="flex items-center wo wh w_ wf wl wa"><a class="gm text-indigo-500 xu" href="#0">ekuplu89</a></div>
                                        <div class="flex items-center wo wh w_ wf wl wa"><span class="text-slate-500">4h</span></div>
                                        <div class="flex items-center wo wh w_ wf wl wa"><span class="text-slate-500">14 Comments</span></div>
                                    </footer>
                                </div>
                                <div class="af">
                                    <button class="gp gg gu oa ua border hr rounded-sm flex fu justify-center items-center bv bm bg">
                                        <svg class="inline-flex dw ss so" width="12" height="6" xmlns="http://www.w3.org/2000/svg"><path d="m0 6 6-6 6 6z"></path></svg>
                                        <div>217</div>
                                    </button>
                                </div>
                            </div>
                        </article>
                        <article class="bg-white shadow-md rounded border border-slate-200 vi">
                            <div class="flex flex-start fq">
                                <div class="af ss"><img class="un or rounded-full" src="images/user-32-01.jpg" width="32" height="32" alt="User 01" /></div>
                                <div class="al">
                                    <h2 class="gg text-slate-800 in"><a href="forum-post.html">Besides Product Hunt, where else should I promote my new project? 🤔</a></h2>
                                    <footer class="flex flex-wrap text-sm">
                                        <div class="flex items-center wo wh w_ wf wl wa"><a class="gm text-indigo-500 xu" href="#0">katemerlu</a></div>
                                        <div class="flex items-center wo wh w_ wf wl wa"><span class="text-slate-500">2h</span></div>
                                        <div class="flex items-center wo wh w_ wf wl wa"><span class="text-slate-500">17 Comments</span></div>
                                    </footer>
                                </div>
                                <div class="af">
                                    <button class="gp gg gu oa ua border border-slate-200 hover--border-slate-300 rounded-sm flex fu justify-center items-center">
                                        <svg class="inline-flex dm ss so" width="12" height="6" xmlns="http://www.w3.org/2000/svg"><path d="m0 6 6-6 6 6z"></path></svg>
                                        <div>44</div>
                                    </button>
                                </div>
                            </div>
                        </article>
                        <article class="bg-white shadow-md rounded border border-slate-200 vi">
                            <div class="flex flex-start fq">
                                <div class="af ss"><img class="un or rounded-full" src="images/user-32-03.jpg" width="32" height="32" alt="User 03" /></div>
                                <div class="al">
                                    <h2 class="gg text-slate-800 in"><a href="forum-post.html">I built and sold 2 small SaaS products and quit my job in the last two years — AMA.</a></h2>
                                    <footer class="flex flex-wrap text-sm">
                                        <div class="flex items-center wo wh w_ wf wl wa"><a class="gm text-indigo-500 xu" href="#0">markusj</a></div>
                                        <div class="flex items-center wo wh w_ wf wl wa"><span class="text-slate-500">2d</span></div>
                                        <div class="flex items-center wo wh w_ wf wl wa"><span class="text-slate-500">298 Comments</span></div>
                                    </footer>
                                </div>
                                <div class="af">
                                    <button class="gp gg gu oa ua border border-slate-200 hover--border-slate-300 rounded-sm flex fu justify-center items-center">
                                        <svg class="inline-flex dm ss so" width="12" height="6" xmlns="http://www.w3.org/2000/svg"><path d="m0 6 6-6 6 6z"></path></svg>
                                        <div>217</div>
                                    </button>
                                </div>
                            </div>
                        </article>
                        <article class="bg-white shadow-md rounded border border-slate-200 vi">
                            <div class="flex flex-start fq">
                                <div class="af ss"><img class="un or rounded-full" src="images/user-32-04.jpg" width="32" height="32" alt="User 04" /></div>
                                <div class="al">
                                    <h2 class="gg text-slate-800 in"><a href="forum-post.html">Had a full-time job, bootstrapped a side project to 7 digit ARR, now building another side project—AMA</a></h2>
                                    <footer class="flex flex-wrap text-sm">
                                        <div class="flex items-center wo wh w_ wf wl wa"><a class="gm text-indigo-500 xu" href="#0">davidp1</a></div>
                                        <div class="flex items-center wo wh w_ wf wl wa"><span class="text-slate-500">2d</span></div>
                                        <div class="flex items-center wo wh w_ wf wl wa"><span class="text-slate-500">312 Comments</span></div>
                                    </footer>
                                </div>
                                <div class="af">
                                    <button class="gp gg gu oa ua border border-slate-200 hover--border-slate-300 rounded-sm flex fu justify-center items-center">
                                        <svg class="inline-flex dm ss so" width="12" height="6" xmlns="http://www.w3.org/2000/svg"><path d="m0 6 6-6 6 6z"></path></svg>
                                        <div>399</div>
                                    </button>
                                </div>
                            </div>
                        </article>
                        <article class="pc shadow-md rounded border hc vi">
                            <div class="flex flex-start fq">
                                <div class="af ss">
                                    <svg class="un or rounded-full" width="32" height="32" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="#3B82F6" d="M0 0h32v32H0z"></path>
                                        <path
                                            d="M16.561 22c3.061 0 5.327-2.088 5.939-4.642h-3.449c-.367.69-1.04 1.5-2.449 1.5-1.612 0-2.694-1.216-2.694-2.858 0-1.622 1.082-2.94 2.694-2.858 1.408 0 2.082.81 2.449 1.581h3.429c-.572-2.757-3-4.723-6-4.723-3.388 0-5.98 2.676-5.98 5.98 0 3.344 2.633 6.02 6.061 6.02Z"
                                            fill="#EFF6FF"
                                            fill-rule="nonzero"
                                        ></path>
                                    </svg>
                                </div>
                                <div class="al">
                                    <h2 class="gg text-slate-800 in"><a href="forum-post.html">💸 Trade crypto, fiat, and stablecoins with Crypto.io. Low fees and incredible performance!</a></h2>
                                    <footer class="flex flex-wrap text-sm">
                                        <div class="flex items-center wo wh w_ wf wl wa"><a class="gm text-indigo-500 xu" href="#0">crypto.io</a></div>
                                        <div class="flex items-center wo wh w_ wf wl wa"><span class="text-slate-500 gw">Promoted</span></div>
                                    </footer>
                                </div>
                            </div>
                        </article>
                        <article class="bg-white shadow-md rounded border border-slate-200 vi">
                            <div class="flex flex-start fq">
                                <div class="af ss"><img class="un or rounded-full" src="images/user-32-05.jpg" width="32" height="32" alt="User 05" /></div>
                                <div class="al">
                                    <h2 class="gg text-slate-800 in"><a href="forum-post.html">Which are the main channels you use to drive traffic to your website? 📈</a></h2>
                                    <footer class="flex flex-wrap text-sm">
                                        <div class="flex items-center wo wh w_ wf wl wa"><a class="gm text-indigo-500 xu" href="#0">sophiestar</a></div>
                                        <div class="flex items-center wo wh w_ wf wl wa"><span class="text-slate-500">3d</span></div>
                                        <div class="flex items-center wo wh w_ wf wl wa"><span class="text-slate-500">66 Comments</span></div>
                                    </footer>
                                </div>
                                <div class="af">
                                    <button class="gp gg gu oa ua border border-slate-200 hover--border-slate-300 rounded-sm flex fu justify-center items-center">
                                        <svg class="inline-flex dm ss so" width="12" height="6" xmlns="http://www.w3.org/2000/svg"><path d="m0 6 6-6 6 6z"></path></svg>
                                        <div>31</div>
                                    </button>
                                </div>
                            </div>
                        </article>
                        <article class="bg-white shadow-md rounded border border-slate-200 vi">
                            <div class="flex flex-start fq">
                                <div class="af ss"><img class="un or rounded-full" src="images/user-32-06.jpg" width="32" height="32" alt="User 06" /></div>
                                <div class="al">
                                    <h2 class="gg text-slate-800 in"><a href="forum-post.html">How to build a following on Twitter as a founder - A guide to growing your audience 🚀</a></h2>
                                    <footer class="flex flex-wrap text-sm">
                                        <div class="flex items-center wo wh w_ wf wl wa"><a class="gm text-indigo-500 xu" href="#0">molliehacks</a></div>
                                        <div class="flex items-center wo wh w_ wf wl wa"><span class="text-slate-500">3d</span></div>
                                        <div class="flex items-center wo wh w_ wf wl wa"><span class="text-slate-500">32 Comments</span></div>
                                    </footer>
                                </div>
                                <div class="af">
                                    <button class="gp gg gu oa ua border hr rounded-sm flex fu justify-center items-center bv bm bg">
                                        <svg class="inline-flex dw ss so" width="12" height="6" xmlns="http://www.w3.org/2000/svg"><path d="m0 6 6-6 6 6z"></path></svg>
                                        <div>24</div>
                                    </button>
                                </div>
                            </div>
                        </article>
                        <article class="bg-white shadow-md rounded border border-slate-200 vi">
                            <div class="flex flex-start fq">
                                <div class="af ss"><img class="un or rounded-full" src="images/user-32-04.jpg" width="32" height="32" alt="User 04" /></div>
                                <div class="al">
                                    <h2 class="gg text-slate-800 in"><a href="forum-post.html">What's the best way to get started building web 3 social products?</a></h2>
                                    <footer class="flex flex-wrap text-sm">
                                        <div class="flex items-center wo wh w_ wf wl wa"><a class="gm text-indigo-500 xu" href="#0">davidp1</a></div>
                                        <div class="flex items-center wo wh w_ wf wl wa"><span class="text-slate-500">4d</span></div>
                                        <div class="flex items-center wo wh w_ wf wl wa"><span class="text-slate-500">27 Comments</span></div>
                                    </footer>
                                </div>
                                <div class="af">
                                    <button class="gp gg gu oa ua border border-slate-200 hover--border-slate-300 rounded-sm flex fu justify-center items-center">
                                        <svg class="inline-flex dm ss so" width="12" height="6" xmlns="http://www.w3.org/2000/svg"><path d="m0 6 6-6 6 6z"></path></svg>
                                        <div>22</div>
                                    </button>
                                </div>
                            </div>
                        </article>
                        <article class="bg-white shadow-md rounded border border-slate-200 vi">
                            <div class="flex flex-start fq">
                                <div class="af ss"><img class="un or rounded-full" src="images/user-32-07.jpg" width="32" height="32" alt="User 07" /></div>
                                <div class="al">
                                    <h2 class="gg text-slate-800 in"><a href="forum-post.html">How important is customer feedback for the improvement of a product?</a></h2>
                                    <footer class="flex flex-wrap text-sm">
                                        <div class="flex items-center wo wh w_ wf wl wa"><a class="gm text-indigo-500 xu" href="#0">elenmisk</a></div>
                                        <div class="flex items-center wo wh w_ wf wl wa"><span class="text-slate-500">5d</span></div>
                                        <div class="flex items-center wo wh w_ wf wl wa"><span class="text-slate-500">61 Comments</span></div>
                                    </footer>
                                </div>
                                <div class="af">
                                    <button class="gp gg gu oa ua border border-slate-200 hover--border-slate-300 rounded-sm flex fu justify-center items-center">
                                        <svg class="inline-flex dm ss so" width="12" height="6" xmlns="http://www.w3.org/2000/svg"><path d="m0 6 6-6 6 6z"></path></svg>
                                        <div>34</div>
                                    </button>
                                </div>
                            </div>
                        </article>
                    </div>

                    <!-- Pagination -->
                    <div class="ir ga">
                        <nav class="inline-flex" role="navigation" aria-label="Navigation">
                            <ul class="flex justify-center">
                                <li class="ml-3 first--ml-0">
                                    <a class="btn bg-white border-slate-200 yd az" href="#0" disabled="disabled">&lt;- Previous</a>
                                </li>
                                <li class="ml-3 first--ml-0">
                                    <a class="btn bg-white border-slate-200 hover--border-slate-300 text-indigo-500" href="#0">Next -&gt;</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right content -->
        <div class="ox hidden ttp ttw">
            <div class="zd zv tee tem tev ta">
                <div class="za">
                    <div class="rb"><button class="btn ox hd wq ye">Create Post</button></div>
                    <div class="fj">
                        <div class="hw vn rounded border border-slate-200">
                            <div class="gp gg yt gb rw">Forum Meetups</div>
                            <ul>
                                <li class="td my wj">
                                    <div class="ge">
                                        <div class="gp gm gb text-indigo-600 im">Mon 27 Dec</div>
                                        <div class="text-sm in"><a class="gm text-slate-800" href="#0">Silicon Valley Bootstrapper Breakfast Online for 2021</a></div>
                                        <div class="flex items-center f_">
                                            <div class="flex lr iu">
                                                <img class="rounded-full cp c_ sw" src="images/avatar-02.jpg" width="28" height="28" alt="User 02" />
                                                <img class="rounded-full cp c_ sw" src="images/avatar-03.jpg" width="28" height="28" alt="User 03" />
                                                <img class="rounded-full cp c_ sw" src="images/avatar-04.jpg" width="28" height="28" alt="User 04" />
                                            </div>
                                            <div class="gp gm yt gw">+22</div>
                                        </div>
                                    </div>
                                    <div aria-hidden="true">
                                        <div class="tp t_ nc nh su uc hv"></div>
                                        <div class="tp t_ tb ml- w-2 h-2 rounded-full pi"></div>
                                    </div>
                                </li>
                                <li class="td my wj">
                                    <div class="ge">
                                        <div class="gp gm gb text-indigo-600 im">Mon 27 Dec</div>
                                        <div class="text-sm in"><a class="gm text-slate-800" href="#0">New York &amp; New Jersey Virtual Retreat</a></div>
                                        <div class="flex items-center f_">
                                            <div class="flex lr iu">
                                                <img class="rounded-full cp c_ sw" src="images/avatar-01.jpg" width="28" height="28" alt="User 01" />
                                                <img class="rounded-full cp c_ sw" src="images/avatar-04.jpg" width="28" height="28" alt="User 04" />
                                                <img class="rounded-full cp c_ sw" src="images/avatar-05.jpg" width="28" height="28" alt="User 05" />
                                            </div>
                                            <div class="gp gm yt gw">+132</div>
                                        </div>
                                    </div>
                                    <div aria-hidden="true">
                                        <div class="tp t_ nc nh su uc hv"></div>
                                        <div class="tp t_ tb ml- w-2 h-2 rounded-full pi"></div>
                                    </div>
                                </li>
                                <li class="td my wj">
                                    <div class="ge">
                                        <div class="gp gm gb text-indigo-600 im">Mon 29 Dec</div>
                                        <div class="text-sm in"><a class="gm text-slate-800" href="#0">The World of AI and Machine Learning - Open Chat</a></div>
                                        <div class="flex items-center f_">
                                            <div class="flex lr iu">
                                                <img class="rounded-full cp c_ sw" src="images/avatar-06.jpg" width="28" height="28" alt="User 06" />
                                                <img class="rounded-full cp c_ sw" src="images/avatar-03.jpg" width="28" height="28" alt="User 03" />
                                                <img class="rounded-full cp c_ sw" src="images/avatar-01.jpg" width="28" height="28" alt="User 01" />
                                            </div>
                                            <div class="gp gm yt gw">+12</div>
                                        </div>
                                    </div>
                                    <div aria-hidden="true">
                                        <div class="tp t_ nc nh su uc hv"></div>
                                        <div class="tp t_ tb ml- w-2 h-2 rounded-full pi"></div>
                                    </div>
                                </li>
                                <li class="td my wj">
                                    <div class="ge">
                                        <div class="gp gm gb text-indigo-600 im">Mon 29 Dec</div>
                                        <div class="text-sm in"><a class="gm text-slate-800" href="#0">NYC Code &amp; Coffee 2.0 @ Freehold Brooklyn</a></div>
                                        <div class="flex items-center f_">
                                            <div class="flex lr iu">
                                                <img class="rounded-full cp c_ sw" src="images/avatar-03.jpg" width="28" height="28" alt="User 03" />
                                                <img class="rounded-full cp c_ sw" src="images/avatar-05.jpg" width="28" height="28" alt="User 05" />
                                                <img class="rounded-full cp c_ sw" src="images/avatar-04.jpg" width="28" height="28" alt="User 04" />
                                            </div>
                                            <div class="gp gm yt gw">+17</div>
                                        </div>
                                    </div>
                                    <div aria-hidden="true">
                                        <div class="tp t_ nc nh su uc hv"></div>
                                        <div class="tp t_ tb ml- w-2 h-2 rounded-full pi"></div>
                                    </div>
                                </li>
                            </ul>
                            <div class="ix"><button class="tt ox bg-white border-slate-200 hover--border-slate-300 text-indigo-500 bp">View All</button></div>
                        </div>
                        <div class="hw vn rounded border border-slate-200">
                            <div class="gp gg yt gb rw">Popular Stories</div>
                            <ul class="le">
                                <li>
                                    <div class="text-sm rx"><a class="gm text-slate-800" href="#0">I built and sold 2 small SaaS products and quit my job in the last two years — AMA</a></div>
                                    <div class="gp text-slate-500"><a class="gm text-indigo-500 xu" href="#0">markusj</a> · 2d · 312 comments</div>
                                </li>
                                <li>
                                    <div class="text-sm rx"><a class="gm text-slate-800" href="#0">Besides Product Hunt, where else should I promote my new project? 🤔</a></div>
                                    <div class="gp text-slate-500"><a class="gm text-indigo-500 xu" href="#0">katemerlu</a> · 2h · 7 comments</div>
                                </li>
                                <li>
                                    <div class="text-sm rx"><a class="gm text-slate-800" href="#0">Which are the main channels you use to drive traffic to your website? 📈</a></div>
                                    <div class="gp text-slate-500"><a class="gm text-indigo-500 xu" href="#0">sophiestar</a> · 3d · 66 comments</div>
                                </li>
                                <li>
                                    <div class="text-sm rx"><a class="gm text-slate-800" href="#0">Failed for the past 12 years as a tech entrepreneur. My key takeaways.</a></div>
                                    <div class="gp text-slate-500"><a class="gm text-indigo-500 xu" href="#0">ekuplu89</a> · 4h · 14 comments</div>
                                </li>
                                <li>
                                    <div class="text-sm rx"><a class="gm text-slate-800" href="#0">How to build a following on Twitter as a founder - A guide to growing your audience 🚀</a></div>
                                    <div class="gp text-slate-500"><a class="gm text-indigo-500 xu" href="#0">molliehacks</a> · 3d · 32 comments</div>
                                </li>
                            </ul>
                            <div class="ix"><button class="tt ox bg-white border-slate-200 hover--border-slate-300 text-indigo-500 bp">View All</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection