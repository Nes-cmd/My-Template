@extends('layouts.admin.app')
@section('contents')

        <div class="va jn teb vf ox uz ri">
            <!-- Page header -->
            <div class="ic">
                <!-- Title -->
                <h1 class="gc zc text-slate-800 font-bold">Find the right product for you ✨</h1>
            </div>

            <!-- Search form -->
            <div class="as ic">
                <form class="td">
                    <label for="app-search" class="tc">Search</label>
                    <input id="app-search" class="tn ox mr vl xk" type="search" placeholder="Search…" />
                    <button class="tp tm tg kr" type="submit" aria-label="Search">
                        <svg class="o_ sq af dd yt ks ml-3 mr-2" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 14c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7zM7 2C4.243 2 2 4.243 2 7s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5z"></path>
                            <path d="M15.707 14.293L13.314 11.9a8.019 8.019 0 01-1.414 1.414l2.393 2.393a.997.997 0 001.414 0 .999.999 0 000-1.414z"></path>
                        </svg>
                    </button>
                </form>
            </div>

            <!-- Filters -->
            <div class="rw cm border-slate-200">
                <ul class="text-sm gm flex fa rl k_ zw lj ta">
                    <li class="mg ib last--mr-0 wm jf te_ wx jl tej">
                        <a class="text-indigo-500 ct" href="#0">View All</a>
                    </li>
                    <li class="mg ib last--mr-0 wm jf te_ wx jl tej">
                        <a class="text-slate-500 hover--text-slate-600 ct" href="#0">Courses</a>
                    </li>
                    <li class="mg ib last--mr-0 wm jf te_ wx jl tej">
                        <a class="text-slate-500 hover--text-slate-600 ct" href="#0">Digital Goods</a>
                    </li>
                    <li class="mg ib last--mr-0 wm jf te_ wx jl tej">
                        <a class="text-slate-500 hover--text-slate-600 ct" href="#0">Online Events</a>
                    </li>
                    <li class="mg ib last--mr-0 wm jf te_ wx jl tej">
                        <a class="text-slate-500 hover--text-slate-600 ct" href="#0">Crowdfunding</a>
                    </li>
                </ul>
            </div>

            <!-- Page content -->
            <div>
                <!-- Cards 1 (Video Courses) -->
                <div class="ie">
                    <h2 class="gh gk text-slate-800 font-bold ic">Video Courses</h2>
                    <div class="sx fi fd">
                        <div class="nk kx tta bg-white bh rounded-sm border border-slate-200 lw">
                            <div class="flex fu sz">
                                <img class="ox" src="images/applications-image-01.jpg" width="286" height="160" alt="Application 01" />
                                <div class="al flex fu vi">
                                    <div class="al">
                                        <header class="it"><h3 class="gv text-slate-800 gg">HTML, CSS, JavaScript - Build 6 Creative Projects</h3></header>
                                        <div class="flex flex-wrap fh items-center rw">
                                            <div class="flex items-center f_ mr-2">
                                                <div class="flex lf">
                                                    <button>
                                                        <span class="tc">1 star</span>
                                                        <svg class="o_ sq dd yl" viewBox="0 0 16 16"><path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path></svg>
                                                    </button>
                                                    <button>
                                                        <span class="tc">2 stars</span>
                                                        <svg class="o_ sq dd yl" viewBox="0 0 16 16"><path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path></svg>
                                                    </button>
                                                    <button>
                                                        <span class="tc">3 stars</span>
                                                        <svg class="o_ sq dd yl" viewBox="0 0 16 16"><path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path></svg>
                                                    </button>
                                                    <button>
                                                        <span class="tc">4 stars</span>
                                                        <svg class="o_ sq dd yl" viewBox="0 0 16 16"><path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path></svg>
                                                    </button>
                                                    <button>
                                                        <span class="tc">5 stars</span>
                                                        <svg class="o_ sq dd yd" viewBox="0 0 16 16"><path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path></svg>
                                                    </button>
                                                </div>
                                                <div class="inline-flex text-sm gm yo">4.2</div>
                                            </div>
                                            <div><div class="inline-flex text-sm gm hx yr rounded-full gu vg vh">$89.00</div></div>
                                        </div>
                                        <ul class="text-sm fz ic">
                                            <li class="flex items-center">
                                                <svg class="o_ sq dd yt af rk" viewBox="0 0 16 16">
                                                    <path
                                                        d="M15.686 5.695L10.291.3c-.4-.4-.999-.4-1.399 0s-.4.999 0 1.399l.6.599-6.794 3.697-1-1c-.4-.399-.999-.399-1.398 0-.4.4-.4 1 0 1.4l1.498 1.498 2.398 2.398L.6 13.988 2 15.387l3.696-3.697 3.997 3.996c.5.5 1.199.2 1.398 0 .4-.4.4-.999 0-1.398l-.999-1 3.697-6.694.6.6c.599.6 1.199.2 1.398 0 .3-.4.3-1.1-.1-1.499zM8.493 11.79L4.196 7.494l6.695-3.697 1.298 1.299-3.696 6.694z"
                                                    ></path>
                                                </svg>
                                                <div>23 hours on-demand video</div>
                                            </li>
                                            <li class="flex items-center">
                                                <svg class="o_ sq dd yt af rk" viewBox="0 0 16 16"><path d="M15 15V5l-5-5H2c-.6 0-1 .4-1 1v14c0 .6.4 1 1 1h12c.6 0 1-.4 1-1zM3 2h6v4h4v8H3V2z"></path></svg>
                                                <div>37 articles</div>
                                            </li>
                                            <li class="flex items-center">
                                                <svg class="o_ sq dd yt af rk" viewBox="0 0 16 16"><path d="M13 7h2v6a1 1 0 01-1 1H4v2l-4-3 4-3v2h9V7zM3 9H1V3a1 1 0 011-1h10V0l4 3-4 3V4H3v5z"></path></svg>
                                                <div>Access on mobile and TV</div>
                                            </li>
                                            <li class="flex items-center">
                                                <svg class="o_ sq dd yt af rk" viewBox="0 0 16 16">
                                                    <path
                                                        d="M7.3 8.7c-.4-.4-.4-1 0-1.4l7-7c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4l-7 7c-.4.4-1 .4-1.4 0zm0 6c-.4-.4-.4-1 0-1.4l7-7c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4l-7 7c-.4.4-1 .4-1.4 0zm-7-5c-.4-.4-.4-1 0-1.4l7-7c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4l-7 7c-.4.4-1 .4-1.4 0z"
                                                    ></path>
                                                </svg>
                                                <div>8K+ active installations</div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div><a class="tt ox hd wq ye" href="#0">Buy Now</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="nk kx tta bg-white bh rounded-sm border border-slate-200 lw">
                            <div class="flex fu sz">
                                <img class="ox" src="images/applications-image-02.jpg" width="286" height="160" alt="Application 02" />
                                <div class="al flex fu vi">
                                    <div class="al">
                                        <header class="it"><h3 class="gv text-slate-800 gg">HTML, CSS, JavaScript - Build 6 Creative Projects</h3></header>
                                        <div class="flex flex-wrap fh items-center rw">
                                            <div class="flex items-center f_ mr-2">
                                                <div class="flex lf">
                                                    <button>
                                                        <span class="tc">1 star</span>
                                                        <svg class="o_ sq dd yl" viewBox="0 0 16 16"><path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path></svg>
                                                    </button>
                                                    <button>
                                                        <span class="tc">2 stars</span>
                                                        <svg class="o_ sq dd yl" viewBox="0 0 16 16"><path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path></svg>
                                                    </button>
                                                    <button>
                                                        <span class="tc">3 stars</span>
                                                        <svg class="o_ sq dd yl" viewBox="0 0 16 16"><path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path></svg>
                                                    </button>
                                                    <button>
                                                        <span class="tc">4 stars</span>
                                                        <svg class="o_ sq dd yl" viewBox="0 0 16 16"><path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path></svg>
                                                    </button>
                                                    <button>
                                                        <span class="tc">5 stars</span>
                                                        <svg class="o_ sq dd yd" viewBox="0 0 16 16"><path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path></svg>
                                                    </button>
                                                </div>
                                                <div class="inline-flex text-sm gm yo">3.9</div>
                                            </div>
                                            <div><div class="inline-flex text-sm gm hx yr rounded-full gu vg vh">$49.00</div></div>
                                        </div>
                                        <ul class="text-sm fz ic">
                                            <li class="flex items-center">
                                                <svg class="o_ sq dd yt af rk" viewBox="0 0 16 16">
                                                    <path
                                                        d="M15.686 5.695L10.291.3c-.4-.4-.999-.4-1.399 0s-.4.999 0 1.399l.6.599-6.794 3.697-1-1c-.4-.399-.999-.399-1.398 0-.4.4-.4 1 0 1.4l1.498 1.498 2.398 2.398L.6 13.988 2 15.387l3.696-3.697 3.997 3.996c.5.5 1.199.2 1.398 0 .4-.4.4-.999 0-1.398l-.999-1 3.697-6.694.6.6c.599.6 1.199.2 1.398 0 .3-.4.3-1.1-.1-1.499zM8.493 11.79L4.196 7.494l6.695-3.697 1.298 1.299-3.696 6.694z"
                                                    ></path>
                                                </svg>
                                                <div>23 hours on-demand video</div>
                                            </li>
                                            <li class="flex items-center">
                                                <svg class="o_ sq dd yt af rk" viewBox="0 0 16 16"><path d="M15 15V5l-5-5H2c-.6 0-1 .4-1 1v14c0 .6.4 1 1 1h12c.6 0 1-.4 1-1zM3 2h6v4h4v8H3V2z"></path></svg>
                                                <div>37 articles</div>
                                            </li>
                                            <li class="flex items-center">
                                                <svg class="o_ sq dd yt af rk" viewBox="0 0 16 16"><path d="M13 7h2v6a1 1 0 01-1 1H4v2l-4-3 4-3v2h9V7zM3 9H1V3a1 1 0 011-1h10V0l4 3-4 3V4H3v5z"></path></svg>
                                                <div>Access on mobile and TV</div>
                                            </li>
                                            <li class="flex items-center">
                                                <svg class="o_ sq dd yt af rk" viewBox="0 0 16 16">
                                                    <path
                                                        d="M7.3 8.7c-.4-.4-.4-1 0-1.4l7-7c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4l-7 7c-.4.4-1 .4-1.4 0zm0 6c-.4-.4-.4-1 0-1.4l7-7c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4l-7 7c-.4.4-1 .4-1.4 0zm-7-5c-.4-.4-.4-1 0-1.4l7-7c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4l-7 7c-.4.4-1 .4-1.4 0z"
                                                    ></path>
                                                </svg>
                                                <div>8K+ active installations</div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div><a class="tt ox hd wq ye" href="#0">Buy Now</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="nk kx tta bg-white bh rounded-sm border border-slate-200 lw">
                            <div class="flex fu sz">
                                <img class="ox" src="images/applications-image-03.jpg" width="286" height="160" alt="Application 03" />
                                <div class="al flex fu vi">
                                    <div class="al">
                                        <header class="it"><h3 class="gv text-slate-800 gg">HTML, CSS, JavaScript - Build 6 Creative Projects</h3></header>
                                        <div class="flex flex-wrap fh items-center rw">
                                            <div class="flex items-center f_ mr-2">
                                                <div class="flex lf">
                                                    <button>
                                                        <span class="tc">1 star</span>
                                                        <svg class="o_ sq dd yl" viewBox="0 0 16 16"><path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path></svg>
                                                    </button>
                                                    <button>
                                                        <span class="tc">2 stars</span>
                                                        <svg class="o_ sq dd yl" viewBox="0 0 16 16"><path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path></svg>
                                                    </button>
                                                    <button>
                                                        <span class="tc">3 stars</span>
                                                        <svg class="o_ sq dd yl" viewBox="0 0 16 16"><path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path></svg>
                                                    </button>
                                                    <button>
                                                        <span class="tc">4 stars</span>
                                                        <svg class="o_ sq dd yl" viewBox="0 0 16 16"><path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path></svg>
                                                    </button>
                                                    <button>
                                                        <span class="tc">5 stars</span>
                                                        <svg class="o_ sq dd yd" viewBox="0 0 16 16"><path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path></svg>
                                                    </button>
                                                </div>
                                                <div class="inline-flex text-sm gm yo">4.6</div>
                                            </div>
                                            <div><div class="inline-flex text-sm gm hx yr rounded-full gu vg vh">$129.00</div></div>
                                        </div>
                                        <ul class="text-sm fz ic">
                                            <li class="flex items-center">
                                                <svg class="o_ sq dd yt af rk" viewBox="0 0 16 16">
                                                    <path
                                                        d="M15.686 5.695L10.291.3c-.4-.4-.999-.4-1.399 0s-.4.999 0 1.399l.6.599-6.794 3.697-1-1c-.4-.399-.999-.399-1.398 0-.4.4-.4 1 0 1.4l1.498 1.498 2.398 2.398L.6 13.988 2 15.387l3.696-3.697 3.997 3.996c.5.5 1.199.2 1.398 0 .4-.4.4-.999 0-1.398l-.999-1 3.697-6.694.6.6c.599.6 1.199.2 1.398 0 .3-.4.3-1.1-.1-1.499zM8.493 11.79L4.196 7.494l6.695-3.697 1.298 1.299-3.696 6.694z"
                                                    ></path>
                                                </svg>
                                                <div>23 hours on-demand video</div>
                                            </li>
                                            <li class="flex items-center">
                                                <svg class="o_ sq dd yt af rk" viewBox="0 0 16 16"><path d="M15 15V5l-5-5H2c-.6 0-1 .4-1 1v14c0 .6.4 1 1 1h12c.6 0 1-.4 1-1zM3 2h6v4h4v8H3V2z"></path></svg>
                                                <div>37 articles</div>
                                            </li>
                                            <li class="flex items-center">
                                                <svg class="o_ sq dd yt af rk" viewBox="0 0 16 16"><path d="M13 7h2v6a1 1 0 01-1 1H4v2l-4-3 4-3v2h9V7zM3 9H1V3a1 1 0 011-1h10V0l4 3-4 3V4H3v5z"></path></svg>
                                                <div>Access on mobile and TV</div>
                                            </li>
                                            <li class="flex items-center">
                                                <svg class="o_ sq dd yt af rk" viewBox="0 0 16 16">
                                                    <path
                                                        d="M7.3 8.7c-.4-.4-.4-1 0-1.4l7-7c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4l-7 7c-.4.4-1 .4-1.4 0zm0 6c-.4-.4-.4-1 0-1.4l7-7c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4l-7 7c-.4.4-1 .4-1.4 0zm-7-5c-.4-.4-.4-1 0-1.4l7-7c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4l-7 7c-.4.4-1 .4-1.4 0z"
                                                    ></path>
                                                </svg>
                                                <div>8K+ active installations</div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div><a class="tt ox hd wq ye" href="#0">Buy Now</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="nk kx tta bg-white bh rounded-sm border border-slate-200 lw">
                            <div class="flex fu sz">
                                <img class="ox" src="images/applications-image-04.jpg" width="286" height="160" alt="Application 04" />
                                <div class="al flex fu vi">
                                    <div class="al">
                                        <header class="it"><h3 class="gv text-slate-800 gg">HTML, CSS, JavaScript - Build 6 Creative Projects</h3></header>
                                        <div class="flex flex-wrap fh items-center rw">
                                            <div class="flex items-center f_ mr-2">
                                                <div class="flex lf">
                                                    <button>
                                                        <span class="tc">1 star</span>
                                                        <svg class="o_ sq dd yl" viewBox="0 0 16 16"><path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path></svg>
                                                    </button>
                                                    <button>
                                                        <span class="tc">2 stars</span>
                                                        <svg class="o_ sq dd yl" viewBox="0 0 16 16"><path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path></svg>
                                                    </button>
                                                    <button>
                                                        <span class="tc">3 stars</span>
                                                        <svg class="o_ sq dd yl" viewBox="0 0 16 16"><path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path></svg>
                                                    </button>
                                                    <button>
                                                        <span class="tc">4 stars</span>
                                                        <svg class="o_ sq dd yl" viewBox="0 0 16 16"><path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path></svg>
                                                    </button>
                                                    <button>
                                                        <span class="tc">5 stars</span>
                                                        <svg class="o_ sq dd yd" viewBox="0 0 16 16"><path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path></svg>
                                                    </button>
                                                </div>
                                                <div class="inline-flex text-sm gm yo">4.7</div>
                                            </div>
                                            <div><div class="inline-flex text-sm gm hx yr rounded-full gu vg vh">$129.00</div></div>
                                        </div>
                                        <ul class="text-sm fz ic">
                                            <li class="flex items-center">
                                                <svg class="o_ sq dd yt af rk" viewBox="0 0 16 16">
                                                    <path
                                                        d="M15.686 5.695L10.291.3c-.4-.4-.999-.4-1.399 0s-.4.999 0 1.399l.6.599-6.794 3.697-1-1c-.4-.399-.999-.399-1.398 0-.4.4-.4 1 0 1.4l1.498 1.498 2.398 2.398L.6 13.988 2 15.387l3.696-3.697 3.997 3.996c.5.5 1.199.2 1.398 0 .4-.4.4-.999 0-1.398l-.999-1 3.697-6.694.6.6c.599.6 1.199.2 1.398 0 .3-.4.3-1.1-.1-1.499zM8.493 11.79L4.196 7.494l6.695-3.697 1.298 1.299-3.696 6.694z"
                                                    ></path>
                                                </svg>
                                                <div>23 hours on-demand video</div>
                                            </li>
                                            <li class="flex items-center">
                                                <svg class="o_ sq dd yt af rk" viewBox="0 0 16 16"><path d="M15 15V5l-5-5H2c-.6 0-1 .4-1 1v14c0 .6.4 1 1 1h12c.6 0 1-.4 1-1zM3 2h6v4h4v8H3V2z"></path></svg>
                                                <div>37 articles</div>
                                            </li>
                                            <li class="flex items-center">
                                                <svg class="o_ sq dd yt af rk" viewBox="0 0 16 16"><path d="M13 7h2v6a1 1 0 01-1 1H4v2l-4-3 4-3v2h9V7zM3 9H1V3a1 1 0 011-1h10V0l4 3-4 3V4H3v5z"></path></svg>
                                                <div>Access on mobile and TV</div>
                                            </li>
                                            <li class="flex items-center">
                                                <svg class="o_ sq dd yt af rk" viewBox="0 0 16 16">
                                                    <path
                                                        d="M7.3 8.7c-.4-.4-.4-1 0-1.4l7-7c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4l-7 7c-.4.4-1 .4-1.4 0zm0 6c-.4-.4-.4-1 0-1.4l7-7c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4l-7 7c-.4.4-1 .4-1.4 0zm-7-5c-.4-.4-.4-1 0-1.4l7-7c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4l-7 7c-.4.4-1 .4-1.4 0z"
                                                    ></path>
                                                </svg>
                                                <div>8K+ active installations</div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div><a class="tt ox hd wq ye" href="#0">Buy Now</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Cards 2 (Digital Goods) -->
                <div class="ie">
                    <h2 class="gh gk text-slate-800 font-bold ic">Digital Goods</h2>
                    <div class="sx fi fd">
                        <div class="nk kx tta bg-white bh rounded-sm border border-slate-200 lw">
                            <div class="flex fu sz">
                                <div class="td">
                                    <img class="ox" src="images/applications-image-05.jpg" width="286" height="160" alt="Application 05" />
                                    <div class="tp tk tw ix mr-4">
                                        <div class="inline-flex items-center gp gm yh bg-slate-900 pv rounded-full gu vg vh">
                                            <svg class="w-3 h-3 af dd yl mr-1" viewBox="0 0 12 12">
                                                <path d="M11.953 4.29a.5.5 0 00-.454-.292H6.14L6.984.62A.5.5 0 006.12.173l-6 7a.5.5 0 00.379.825h5.359l-.844 3.38a.5.5 0 00.864.445l6-7a.5.5 0 00.075-.534z"></path>
                                            </svg>
                                            <span>Popular</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="al flex fu vi">
                                    <div class="al">
                                        <header class="in">
                                            <h3 class="gv text-slate-800 gg rx">Form Builder CP</h3>
                                            <div class="text-sm">Master Digital Marketing Strategy, Social Media Marketing, Analytics &amp; More!</div>
                                        </header>
                                        <div class="flex flex-wrap items-center fh ic">
                                            <div class="flex items-center f_ mr-2">
                                                <svg class="o_ sq dd yl" viewBox="0 0 16 16"><path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path></svg>
                                                <div class="text-sm gm ct"><span>4.7</span> <span class="yt">(478)</span></div>
                                            </div>
                                            <div class="flex items-center f_"><div class="inline-flex text-sm gm hx yr rounded-full gu vg vh">$89.00</div></div>
                                        </div>
                                    </div>
                                    <div><a class="tt ox hd wq ye" href="#0">Buy Now</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="nk kx tta bg-white bh rounded-sm border border-slate-200 lw">
                            <div class="flex fu sz">
                                <div class="td"><img class="ox" src="images/applications-image-06.jpg" width="286" height="160" alt="Application 06" /></div>
                                <div class="al flex fu vi">
                                    <div class="al">
                                        <header class="in">
                                            <h3 class="gv text-slate-800 gg rx">Form Builder CP</h3>
                                            <div class="text-sm">Master Digital Marketing Strategy, Social Media Marketing, Analytics &amp; More!</div>
                                        </header>
                                        <div class="flex flex-wrap items-center fh ic">
                                            <div class="flex items-center f_ mr-2">
                                                <svg class="o_ sq dd yl" viewBox="0 0 16 16"><path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path></svg>
                                                <div class="text-sm gm ct"><span>4.7</span> <span class="yt">(478)</span></div>
                                            </div>
                                            <div class="flex items-center f_"><div class="inline-flex text-sm gm hx yr rounded-full gu vg vh">$89.00</div></div>
                                        </div>
                                    </div>
                                    <div><a class="tt ox hd wq ye" href="#0">Buy Now</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="nk kx tta bg-white bh rounded-sm border border-slate-200 lw">
                            <div class="flex fu sz">
                                <div class="td"><img class="ox" src="images/applications-image-07.jpg" width="286" height="160" alt="Application 07" /></div>
                                <div class="al flex fu vi">
                                    <div class="al">
                                        <header class="in">
                                            <h3 class="gv text-slate-800 gg rx">Form Builder CP</h3>
                                            <div class="text-sm">Master Digital Marketing Strategy, Social Media Marketing, Analytics &amp; More!</div>
                                        </header>
                                        <div class="flex flex-wrap items-center fh ic">
                                            <div class="flex items-center f_ mr-2">
                                                <svg class="o_ sq dd yl" viewBox="0 0 16 16"><path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path></svg>
                                                <div class="text-sm gm ct"><span>4.7</span> <span class="yt">(478)</span></div>
                                            </div>
                                            <div class="flex items-center f_">
                                                <div class="inline-flex text-sm gm h_ yu rounded-full gu vg vh">$39.00</div>
                                                <div class="inline-flex text-sm gm text-slate-500 bn">$199.00</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div><a class="tt ox hd wq ye" href="#0">Buy Now</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="nk kx tta bg-white bh rounded-sm border border-slate-200 lw">
                            <div class="flex fu sz">
                                <div class="td"><img class="ox" src="images/applications-image-08.jpg" width="286" height="160" alt="Application 08" /></div>
                                <div class="al flex fu vi">
                                    <div class="al">
                                        <header class="in">
                                            <h3 class="gv text-slate-800 gg rx">Form Builder CP</h3>
                                            <div class="text-sm">Master Digital Marketing Strategy, Social Media Marketing, Analytics &amp; More!</div>
                                        </header>
                                        <div class="flex flex-wrap items-center fh ic">
                                            <div class="flex items-center f_ mr-2">
                                                <svg class="o_ sq dd yl" viewBox="0 0 16 16"><path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path></svg>
                                                <div class="text-sm gm ct"><span>4.7</span> <span class="yt">(478)</span></div>
                                            </div>
                                            <div class="flex items-center f_"><div class="inline-flex text-sm gm hx yr rounded-full gu vg vh">$89.00</div></div>
                                        </div>
                                    </div>
                                    <div><a class="tt ox hd wq ye" href="#0">Buy Now</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Cards 3 (Online Events) -->
                <div class="ie">
                    <h2 class="gh gk text-slate-800 font-bold ic">Online Events</h2>
                    <div class="sx fi fd">
                        <div class="nk kx tta bg-white bh rounded-sm border border-slate-200 lw">
                            <div class="flex fu sz">
                                <div class="td">
                                    <img class="ox" src="images/applications-image-09.jpg" width="286" height="160" alt="Application 09" />
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
                                </div>
                                <div class="al flex fu vi">
                                    <div class="al">
                                        <header class="in"><h3 class="gv text-slate-800 gg">Health and Happiness Workshop</h3></header>
                                        <ul class="text-sm fz ic">
                                            <li class="flex items-center">
                                                <svg class="o_ sq dd yt af rk" viewBox="0 0 16 16">
                                                    <path d="M15 2h-2V0h-2v2H9V0H7v2H5V0H3v2H1a1 1 0 00-1 1v12a1 1 0 001 1h14a1 1 0 001-1V3a1 1 0 00-1-1zm-1 12H2V6h12v8z"></path>
                                                </svg>
                                                <div class="yi">Fri 7 Aug 2021 23:00 CEST</div>
                                            </li>
                                            <li class="flex items-center">
                                                <svg class="o_ sq dd yt af rk" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 6c2.9 0 6-.9 6-3s-3.1-3-6-3-6 .9-6 3 3.1 3 6 3zM2 6.5V8c0 2.1 3.1 3 6 3s6-.9 6-3V6.5C12.6 7.4 10.5 8 8 8s-4.6-.6-6-1.5zM2 11.5V13c0 2.1 3.1 3 6 3s6-.9 6-3v-1.5c-1.4 1-3.5 1.5-6 1.5s-4.6-.6-6-1.5z"
                                                    ></path>
                                                </svg>
                                                <div>Starts at $16.24 / person</div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div><a class="tt ox hd wq ye" href="#0">Buy Tickets</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="nk kx tta bg-white bh rounded-sm border border-slate-200 lw">
                            <div class="flex fu sz">
                                <div class="td">
                                    <img class="ox" src="images/applications-image-10.jpg" width="286" height="160" alt="Application 10" />
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
                                </div>
                                <div class="al flex fu vi">
                                    <div class="al">
                                        <header class="in"><h3 class="gv text-slate-800 gg">Health and Happiness Workshop</h3></header>
                                        <ul class="text-sm fz ic">
                                            <li class="flex items-center">
                                                <svg class="o_ sq dd yt af rk" viewBox="0 0 16 16">
                                                    <path d="M15 2h-2V0h-2v2H9V0H7v2H5V0H3v2H1a1 1 0 00-1 1v12a1 1 0 001 1h14a1 1 0 001-1V3a1 1 0 00-1-1zm-1 12H2V6h12v8z"></path>
                                                </svg>
                                                <div class="yi">Fri 7 Aug 2021 23:00 CEST</div>
                                            </li>
                                            <li class="flex items-center">
                                                <svg class="o_ sq dd yt af rk" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 6c2.9 0 6-.9 6-3s-3.1-3-6-3-6 .9-6 3 3.1 3 6 3zM2 6.5V8c0 2.1 3.1 3 6 3s6-.9 6-3V6.5C12.6 7.4 10.5 8 8 8s-4.6-.6-6-1.5zM2 11.5V13c0 2.1 3.1 3 6 3s6-.9 6-3v-1.5c-1.4 1-3.5 1.5-6 1.5s-4.6-.6-6-1.5z"
                                                    ></path>
                                                </svg>
                                                <div>Starts at $16.24 / person</div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div><a class="tt ox hd wq ye" href="#0">Buy Tickets</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="nk kx tta bg-white bh rounded-sm border border-slate-200 lw">
                            <div class="flex fu sz">
                                <div class="td">
                                    <img class="ox" src="images/applications-image-11.jpg" width="286" height="160" alt="Application 11" />
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
                                </div>
                                <div class="al flex fu vi">
                                    <div class="al">
                                        <header class="in"><h3 class="gv text-slate-800 gg">Health and Happiness Workshop</h3></header>
                                        <ul class="text-sm fz ic">
                                            <li class="flex items-center">
                                                <svg class="o_ sq dd yt af rk" viewBox="0 0 16 16">
                                                    <path d="M15 2h-2V0h-2v2H9V0H7v2H5V0H3v2H1a1 1 0 00-1 1v12a1 1 0 001 1h14a1 1 0 001-1V3a1 1 0 00-1-1zm-1 12H2V6h12v8z"></path>
                                                </svg>
                                                <div class="yi">Fri 7 Aug 2021 23:00 CEST</div>
                                            </li>
                                            <li class="flex items-center">
                                                <svg class="o_ sq dd yt af rk" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 6c2.9 0 6-.9 6-3s-3.1-3-6-3-6 .9-6 3 3.1 3 6 3zM2 6.5V8c0 2.1 3.1 3 6 3s6-.9 6-3V6.5C12.6 7.4 10.5 8 8 8s-4.6-.6-6-1.5zM2 11.5V13c0 2.1 3.1 3 6 3s6-.9 6-3v-1.5c-1.4 1-3.5 1.5-6 1.5s-4.6-.6-6-1.5z"
                                                    ></path>
                                                </svg>
                                                <div>Starts at $16.24 / person</div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div><a class="tt ox hd wq ye" href="#0">Buy Tickets</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="nk kx tta bg-white bh rounded-sm border border-slate-200 lw">
                            <div class="flex fu sz">
                                <div class="td">
                                    <img class="ox" src="images/applications-image-12.jpg" width="286" height="160" alt="Application 12" />
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
                                </div>
                                <div class="al flex fu vi">
                                    <div class="al">
                                        <header class="in"><h3 class="gv text-slate-800 gg">Health and Happiness Workshop</h3></header>
                                        <ul class="text-sm fz ic">
                                            <li class="flex items-center">
                                                <svg class="o_ sq dd yt af rk" viewBox="0 0 16 16">
                                                    <path d="M15 2h-2V0h-2v2H9V0H7v2H5V0H3v2H1a1 1 0 00-1 1v12a1 1 0 001 1h14a1 1 0 001-1V3a1 1 0 00-1-1zm-1 12H2V6h12v8z"></path>
                                                </svg>
                                                <div class="yi">Fri 7 Aug 2021 23:00 CEST</div>
                                            </li>
                                            <li class="flex items-center">
                                                <svg class="o_ sq dd yt af rk" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 6c2.9 0 6-.9 6-3s-3.1-3-6-3-6 .9-6 3 3.1 3 6 3zM2 6.5V8c0 2.1 3.1 3 6 3s6-.9 6-3V6.5C12.6 7.4 10.5 8 8 8s-4.6-.6-6-1.5zM2 11.5V13c0 2.1 3.1 3 6 3s6-.9 6-3v-1.5c-1.4 1-3.5 1.5-6 1.5s-4.6-.6-6-1.5z"
                                                    ></path>
                                                </svg>
                                                <div>Starts at $16.24 / person</div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div><a class="tt ox hd wq ye" href="#0">Buy Tickets</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Cards 4 (Crowdfunding) -->
                <div class="ie">
                    <h2 class="gh gk text-slate-800 font-bold ic">Crowdfunding</h2>
                    <div class="sx fi fd">
                        <div class="nk kx tta bg-white bh rounded-sm border border-slate-200 lw">
                            <div class="flex fu sz">
                                <div class="td">
                                    <img class="ox" src="images/applications-image-13.jpg" width="286" height="160" alt="Application 13" />
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
                                </div>
                                <div class="al flex fu vi">
                                    <div class="al">
                                        <header class="rw">
                                            <a class="gp yf xm gg gb gq rx" href="#0">Funding</a>
                                            <h3 class="gv text-slate-800 gg rx">SwiftNight Home Plus</h3>
                                            <div class="text-sm">Lorem ipsum is placeholder text commonly used.</div>
                                        </header>
                                        <div class="ic">
                                            <div class="flex fh text-sm f_ in">
                                                <div><span class="gg text-slate-800">$789,784</span> <span class="gw">raised</span></div>
                                                <div>64%</div>
                                            </div>
                                            <div class="td ox h-2 rounded-full hv in"><div class="tp tb tk ty hg rounded-full" style="width: 55%;"></div></div>
                                            <div class="gm gp">30 Days Left</div>
                                        </div>
                                    </div>
                                    <div><a class="tt ox hd wq ye" href="#0">Back It</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="nk kx tta bg-white bh rounded-sm border border-slate-200 lw">
                            <div class="flex fu sz">
                                <div class="td">
                                    <img class="ox" src="images/applications-image-14.jpg" width="286" height="160" alt="Application 14" />
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
                                </div>
                                <div class="al flex fu vi">
                                    <div class="al">
                                        <header class="rw">
                                            <a class="gp yf xm gg gb gq rx" href="#0">Funding</a>
                                            <h3 class="gv text-slate-800 gg rx">SwiftNight Home Plus</h3>
                                            <div class="text-sm">Lorem ipsum is placeholder text commonly used.</div>
                                        </header>
                                        <div class="ic">
                                            <div class="flex fh text-sm f_ in">
                                                <div><span class="gg text-slate-800">$789,784</span> <span class="gw">raised</span></div>
                                                <div>64%</div>
                                            </div>
                                            <div class="td ox h-2 rounded-full hv in"><div class="tp tb tk ty hg rounded-full" style="width: 55%;"></div></div>
                                            <div class="gm gp">30 Days Left</div>
                                        </div>
                                    </div>
                                    <div><a class="tt ox hd wq ye" href="#0">Back It</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="nk kx tta bg-white bh rounded-sm border border-slate-200 lw">
                            <div class="flex fu sz">
                                <div class="td">
                                    <img class="ox" src="images/applications-image-15.jpg" width="286" height="160" alt="Application 15" />
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
                                </div>
                                <div class="al flex fu vi">
                                    <div class="al">
                                        <header class="rw">
                                            <a class="gp yf xm gg gb gq rx" href="#0">Funding</a>
                                            <h3 class="gv text-slate-800 gg rx">SwiftNight Home Plus</h3>
                                            <div class="text-sm">Lorem ipsum is placeholder text commonly used.</div>
                                        </header>
                                        <div class="ic">
                                            <div class="flex fh text-sm f_ in">
                                                <div><span class="gg text-slate-800">$789,784</span> <span class="gw">raised</span></div>
                                                <div>64%</div>
                                            </div>
                                            <div class="td ox h-2 rounded-full hv in"><div class="tp tb tk ty hg rounded-full" style="width: 55%;"></div></div>
                                            <div class="gm gp">30 Days Left</div>
                                        </div>
                                    </div>
                                    <div><a class="tt ox hd wq ye" href="#0">Back It</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="nk kx tta bg-white bh rounded-sm border border-slate-200 lw">
                            <div class="flex fu sz">
                                <div class="td">
                                    <img class="ox" src="images/applications-image-16.jpg" width="286" height="160" alt="Application 16" />
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
                                </div>
                                <div class="al flex fu vi">
                                    <div class="al">
                                        <header class="rw">
                                            <a class="gp yf xm gg gb gq rx" href="#0">Funding</a>
                                            <h3 class="gv text-slate-800 gg rx">SwiftNight Home Plus</h3>
                                            <div class="text-sm">Lorem ipsum is placeholder text commonly used.</div>
                                        </header>
                                        <div class="ic">
                                            <div class="flex fh text-sm f_ in">
                                                <div><span class="gg text-slate-800">$789,784</span> <span class="gw">raised</span></div>
                                                <div>64%</div>
                                            </div>
                                            <div class="td ox h-2 rounded-full hv in"><div class="tp tb tk ty hg rounded-full" style="width: 55%;"></div></div>
                                            <div class="gm gp">30 Days Left</div>
                                        </div>
                                    </div>
                                    <div><a class="tt ox hd wq ye" href="#0">Back It</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Cards 5 (Popular Categories) -->
                <div class="ie">
                    <h2 class="gh gk text-slate-800 font-bold ic">Popular Categories</h2>
                    <div class="sx fi fd">
                        <div class="nk kx tta bg-white bh rounded-sm border border-slate-200">
                            <div class="flex fu sz gu vi">
                                <div class="al rx">
                                    <div class="inline-flex justify-center items-center ua oa hp rounded-full in">
                                        <svg class="oz on dd" viewBox="0 0 24 24">
                                            <path class="text-indigo-300" d="M13 15l11-7L11.504.136a1 1 0 00-1.019.007L0 7l13 8z"></path>
                                            <path class="text-indigo-600" d="M13 15L0 7v9c0 .355.189.685.496.864L13 24v-9z"></path>
                                            <path class="text-indigo-500" d="M13 15.047V24l10.573-7.181A.999.999 0 0024 16V8l-11 7.047z"></path>
                                        </svg>
                                    </div>
                                    <h3 class="gv text-slate-800 gg rx">Merchandise</h3>
                                </div>
                                <div><a class="text-sm gm text-indigo-500 xu" href="#0">Explore -&gt;</a></div>
                            </div>
                        </div>
                        <div class="nk kx tta bg-white bh rounded-sm border border-slate-200">
                            <div class="flex fu sz gu vi">
                                <div class="al rx">
                                    <div class="inline-flex justify-center items-center ua oa hp rounded-full in">
                                        <svg class="oz on dd" viewBox="0 0 24 24">
                                            <circle class="yx" cx="15" cy="15" r="9" fill-rule="nonzero"></circle>
                                            <circle class="yk" cx="9" cy="9" r="9"></circle>
                                        </svg>
                                    </div>
                                    <h3 class="gv text-slate-800 gg rx">Audiobooks</h3>
                                </div>
                                <div><a class="text-sm gm text-indigo-500 xu" href="#0">Explore -&gt;</a></div>
                            </div>
                        </div>
                        <div class="nk kx tta bg-white bh rounded-sm border border-slate-200">
                            <div class="flex fu sz gu vi">
                                <div class="al rx">
                                    <div class="inline-flex justify-center items-center ua oa hp rounded-full in">
                                        <svg class="oz on dd" viewBox="0 0 24 24">
                                            <path class="yf" d="M3 .998h6a2 2 0 012 2v6a2 2 0 01-2 2H3a2 2 0 01-2-2v-6a2 2 0 012-2z"></path>
                                            <path
                                                class="y_"
                                                d="M23.428 4.616L19.381.57a1.957 1.957 0 00-2.762 0l-4.047 4.046c-.76.765-.76 2 0 2.764l4.047 4.047c.764.76 1.998.76 2.762 0l4.047-4.046c.761-.764.761-2 0-2.765z"
                                            ></path>
                                            <path class="yf" d="M15 12.998h6a2 2 0 012 2v6a2 2 0 01-2 2h-6a2 2 0 01-2-2v-6a2 2 0 012-2z"></path>
                                            <path class="yj" d="M3 12.998h6a2 2 0 012 2v6a2 2 0 01-2 2H3a2 2 0 01-2-2v-6a2 2 0 012-2z"></path>
                                        </svg>
                                    </div>
                                    <h3 class="gv text-slate-800 gg rx">Design &amp; Tech</h3>
                                </div>
                                <div><a class="text-sm gm text-indigo-500 xu" href="#0">Explore -&gt;</a></div>
                            </div>
                        </div>
                        <div class="nk kx tta bg-white bh rounded-sm border border-slate-200">
                            <div class="flex fu sz gu vi">
                                <div class="al rx">
                                    <div class="inline-flex justify-center items-center ua oa hp rounded-full in">
                                        <svg class="oz on dd" viewBox="0 0 24 24">
                                            <path class="yq" d="M12 10l12 7-12 7-12-7z"></path>
                                            <path class="yz" d="M12 5l12 7-12 7-12-7z"></path>
                                            <path class="yi" d="M12 0l12 7-12 7L0 7z"></path>
                                        </svg>
                                    </div>
                                    <h3 class="gv text-slate-800 gg rx">Apps &amp; Software</h3>
                                </div>
                                <div><a class="text-sm gm text-indigo-500 xu" href="#0">Explore -&gt;</a></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Cards 6 (Trending Now) -->
                <div class="ie">
                    <h2 class="gh gk text-slate-800 font-bold ic">Trending Now</h2>
                    <div class="sx fi fd">
                        <div class="td nk kx tta bg-white bh rounded-sm border border-slate-200 lw">
                            <img class="tp ox sz dj" src="images/applications-image-17.jpg" width="286" height="160" alt="Application 17" />
                            <div class="tp tm pg dr di" aria-hidden="true"></div>
                            <div class="td sz vi flex fu justify-end">
                                <h3 class="gv ye gg rg im">Merchandise</h3>
                                <a class="text-sm gm text-indigo-400 xv" href="#0">Explore -&gt;</a>
                            </div>
                        </div>
                        <div class="td nk kx tta bg-white bh rounded-sm border border-slate-200 lw">
                            <img class="tp ox sz dj" src="images/applications-image-18.jpg" width="286" height="160" alt="Application 18" />
                            <div class="tp tm pg dr di" aria-hidden="true"></div>
                            <div class="td sz vi flex fu justify-end">
                                <h3 class="gv ye gg rg im">Audiobooks</h3>
                                <a class="text-sm gm text-indigo-400 xv" href="#0">Explore -&gt;</a>
                            </div>
                        </div>
                        <div class="td nk kx tta bg-white bh rounded-sm border border-slate-200 lw">
                            <img class="tp ox sz dj" src="images/applications-image-19.jpg" width="286" height="160" alt="Application 19" />
                            <div class="tp tm pg dr di" aria-hidden="true"></div>
                            <div class="td sz vi flex fu justify-end">
                                <h3 class="gv ye gg rg im">Design &amp; Tech</h3>
                                <a class="text-sm gm text-indigo-400 xv" href="#0">Explore -&gt;</a>
                            </div>
                        </div>
                        <div class="td nk kx tta bg-white bh rounded-sm border border-slate-200 lw">
                            <img class="tp ox sz dj" src="images/applications-image-20.jpg" width="286" height="160" alt="Application 20" />
                            <div class="tp tm pg dr di" aria-hidden="true"></div>
                            <div class="td sz vi flex fu justify-end">
                                <h3 class="gv ye gg rg im">Apps &amp; Software</h3>
                                <a class="text-sm gm text-indigo-400 xv" href="#0">Explore -&gt;</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection