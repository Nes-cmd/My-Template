@extends('layouts.admin.app')
@section('contents')
    <div class="va jn teb vf ox uz ri">
        <!-- Page header -->
        <div class="ic">
            <!-- Title -->
            <h1 class="gc zc text-slate-800 font-bold">Find the right product for you ✨</h1>
        </div>

        <!-- Page content -->
        <div class="flex fu lc _d _q _x qg qq qz ttz tni tns sn">
            <!-- Sidebar -->
            <div>
                <div class="bg-white vi uk">
                    <div class="sx qv ttq fd">
                        <div>
                            <div class="text-sm text-slate-800 gg it">Discover</div>
                            <ul class="text-sm gm fz">
                                <li><a class="text-indigo-500" href="#0">View All</a></li>
                                <li><a class="gz xp" href="#0">Apps / Software</a></li>
                                <li><a class="gz xp" href="#0">Design / Tech Products</a></li>
                                <li><a class="gz xp" href="#0">Books &amp; Writing</a></li>
                                <li><a class="gz xp" href="#0">Education</a></li>
                                <li><a class="gz xp" href="#0">Drawing / Painting</a></li>
                            </ul>
                        </div>
                        <div>
                            <div class="text-sm text-slate-800 gg it">Price Range</div>
                            <label class="tc">Price</label>
                            <select class="ts ox">
                                <option>Less than $20</option>
                                <option>$20 - $40</option>
                                <option>$40 - $80</option>
                                <option>More than $80</option>
                            </select>
                        </div>
                        <div>
                            <div class="text-sm text-slate-800 gg it">Multi Select</div>
                            <ul class="fz">
                                <li>
                                    <label class="flex items-center"> <input type="checkbox" class="to" checked="checked" /> <span class="text-sm gz gm r_">Apps / Software</span> </label>
                                </li>
                                <li>
                                    <label class="flex items-center"> <input type="checkbox" class="to" checked="checked" /> <span class="text-sm gz gm r_">Education</span> </label>
                                </li>
                                <li>
                                    <label class="flex items-center"> <input type="checkbox" class="to" /> <span class="text-sm gz gm r_">Books &amp; Writing</span> </label>
                                </li>
                                <li>
                                    <label class="flex items-center"> <input type="checkbox" class="to" /> <span class="text-sm gz gm r_">Drawing / Painting</span> </label>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <div class="text-sm text-slate-800 gg it">Sort By Rating</div>
                            <ul class="fz">
                                <li>
                                    <button class="flex items-center f_ mr-2">
                                        <div class="flex lf">
                                            <svg class="o_ sq dd yl" viewBox="0 0 16 16"><path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path></svg>
                                            <svg class="o_ sq dd yl" viewBox="0 0 16 16"><path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path></svg>
                                            <svg class="o_ sq dd yl" viewBox="0 0 16 16"><path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path></svg>
                                            <svg class="o_ sq dd yl" viewBox="0 0 16 16"><path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path></svg>
                                            <svg class="o_ sq dd yd" viewBox="0 0 16 16"><path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path></svg>
                                        </div>
                                        <div class="inline-flex text-sm text-slate-500 gw"><span class="tc">4 Stars</span> And up</div>
                                    </button>
                                </li>
                                <li>
                                    <button class="flex items-center f_ mr-2">
                                        <div class="flex lf">
                                            <svg class="o_ sq dd yl" viewBox="0 0 16 16"><path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path></svg>
                                            <svg class="o_ sq dd yl" viewBox="0 0 16 16"><path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path></svg>
                                            <svg class="o_ sq dd yl" viewBox="0 0 16 16"><path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path></svg>
                                            <svg class="o_ sq dd yd" viewBox="0 0 16 16"><path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path></svg>
                                            <svg class="o_ sq dd yd" viewBox="0 0 16 16"><path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path></svg>
                                        </div>
                                        <div class="inline-flex text-sm text-slate-500 gw"><span class="tc">3 Stars</span> And up</div>
                                    </button>
                                </li>
                                <li>
                                    <button class="flex items-center f_ mr-2">
                                        <div class="flex lf">
                                            <svg class="o_ sq dd yl" viewBox="0 0 16 16"><path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path></svg>
                                            <svg class="o_ sq dd yl" viewBox="0 0 16 16"><path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path></svg>
                                            <svg class="o_ sq dd yd" viewBox="0 0 16 16"><path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path></svg>
                                            <svg class="o_ sq dd yd" viewBox="0 0 16 16"><path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path></svg>
                                            <svg class="o_ sq dd yd" viewBox="0 0 16 16"><path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path></svg>
                                        </div>
                                        <div class="inline-flex text-sm text-slate-500 gw"><span class="tc">2 Stars</span> And up</div>
                                    </button>
                                </li>
                                <li>
                                    <button class="flex items-center f_ mr-2">
                                        <div class="flex lf">
                                            <svg class="o_ sq dd yl" viewBox="0 0 16 16"><path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path></svg>
                                            <svg class="o_ sq dd yd" viewBox="0 0 16 16"><path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path></svg>
                                            <svg class="o_ sq dd yd" viewBox="0 0 16 16"><path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path></svg>
                                            <svg class="o_ sq dd yd" viewBox="0 0 16 16"><path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path></svg>
                                            <svg class="o_ sq dd yd" viewBox="0 0 16 16"><path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path></svg>
                                        </div>
                                        <div class="inline-flex text-sm text-slate-500 gw"><span class="tc">1 Stars</span> And up</div>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content -->
            <div>
                <!-- Filters -->
                <div class="ic">
                    <ul class="flex flex-wrap -m-1">
                        <li class="m-1">
                            <button class="inline-flex items-center justify-center text-sm gm gj rounded-full vx vk border ck bd hd ye we wi">View All</button>
                        </li>
                        <li class="m-1">
                            <button class="inline-flex items-center justify-center text-sm gm gj rounded-full vx vk border border-slate-200 hover--border-slate-300 bd bg-white text-slate-500 we wi">Featured</button>
                        </li>
                        <li class="m-1">
                            <button class="inline-flex items-center justify-center text-sm gm gj rounded-full vx vk border border-slate-200 hover--border-slate-300 bd bg-white text-slate-500 we wi">Newest</button>
                        </li>
                        <li class="m-1">
                            <button class="inline-flex items-center justify-center text-sm gm gj rounded-full vx vk border border-slate-200 hover--border-slate-300 bd bg-white text-slate-500 we wi">
                                Price - Low To High
                            </button>
                        </li>
                        <li class="m-1">
                            <button class="inline-flex items-center justify-center text-sm gm gj rounded-full vx vk border border-slate-200 hover--border-slate-300 bd bg-white text-slate-500 we wi">
                                Price - High to Low
                            </button>
                        </li>
                    </ul>
                </div>

                <div class="text-sm text-slate-500 gw rw">67.975 Items</div>

                <!-- Cards 1 (Video Courses) -->
                <div>
                    <div class="sx fi fd">
                        <div class="nk jw tto bg-white bh rounded-sm border border-slate-200 lw">
                            <div class="flex fu sz">
                                <div class="td">
                                    <img class="ox" src="images/applications-image-21.jpg" width="301" height="226" alt="Application 21" />
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
                                    <div class="tp ty tw rw mr-4">
                                        <div class="inline-flex items-center gp gm yh bg-slate-900 pv rounded-full gu vg vh">
                                            <svg class="w-3 h-3 af dd yl mr-1" viewBox="0 0 12 12">
                                                <path d="M11.953 4.29a.5.5 0 00-.454-.292H6.14L6.984.62A.5.5 0 006.12.173l-6 7a.5.5 0 00.379.825h5.359l-.844 3.38a.5.5 0 00.864.445l6-7a.5.5 0 00.075-.534z"></path>
                                            </svg>
                                            <span>Special Offer</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="al flex fu vi">
                                    <div class="al">
                                        <header class="in">
                                            <a href="#0"> <h3 class="gv text-slate-800 gg rx">Form Builder CP</h3> </a>
                                            <div class="text-sm">Lorem ipsum dolor sit amet adipiscing elit, sed do eiusmod.</div>
                                        </header>
                                    </div>
                                    <div class="flex flex-wrap fh items-center">
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
                                        <div><div class="inline-flex text-sm gm h_ yu rounded-full gu vg vh">$39.00</div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nk jw tto bg-white bh rounded-sm border border-slate-200 lw">
                            <div class="flex fu sz">
                                <div class="td">
                                    <img class="ox" src="images/applications-image-22.jpg" width="301" height="226" alt="Application 22" />
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
                                        <header class="in">
                                            <a href="#0"> <h3 class="gv text-slate-800 gg rx">Form Builder CP</h3> </a>
                                            <div class="text-sm">Lorem ipsum dolor sit amet adipiscing elit, sed do eiusmod.</div>
                                        </header>
                                    </div>
                                    <div class="flex flex-wrap fh items-center">
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
                                        <div><div class="inline-flex text-sm gm hx yr rounded-full gu vg vh">$69.00</div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nk jw tto bg-white bh rounded-sm border border-slate-200 lw">
                            <div class="flex fu sz">
                                <div class="td">
                                    <img class="ox" src="images/applications-image-23.jpg" width="301" height="226" alt="Application 23" />
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
                                    <div class="tp ty tw rw mr-4">
                                        <div class="inline-flex items-center gp gm yh bg-slate-900 pv rounded-full gu vg vh">
                                            <svg class="w-3 h-3 af dd yl mr-1" viewBox="0 0 12 12">
                                                <path d="M11.953 4.29a.5.5 0 00-.454-.292H6.14L6.984.62A.5.5 0 006.12.173l-6 7a.5.5 0 00.379.825h5.359l-.844 3.38a.5.5 0 00.864.445l6-7a.5.5 0 00.075-.534z"></path>
                                            </svg>
                                            <span>Special Offer</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="al flex fu vi">
                                    <div class="al">
                                        <header class="in">
                                            <a href="#0"> <h3 class="gv text-slate-800 gg rx">Form Builder CP</h3> </a>
                                            <div class="text-sm">Lorem ipsum dolor sit amet adipiscing elit, sed do eiusmod.</div>
                                        </header>
                                    </div>
                                    <div class="flex flex-wrap fh items-center">
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
                                        <div><div class="inline-flex text-sm gm h_ yu rounded-full gu vg vh">$39.00</div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nk jw tto bg-white bh rounded-sm border border-slate-200 lw">
                            <div class="flex fu sz">
                                <div class="td">
                                    <img class="ox" src="images/applications-image-24.jpg" width="301" height="226" alt="Application 24" />
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
                                        <header class="in">
                                            <a href="#0"> <h3 class="gv text-slate-800 gg rx">Form Builder CP</h3> </a>
                                            <div class="text-sm">Lorem ipsum dolor sit amet adipiscing elit, sed do eiusmod.</div>
                                        </header>
                                    </div>
                                    <div class="flex flex-wrap fh items-center">
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
                                        <div><div class="inline-flex text-sm gm hx yr rounded-full gu vg vh">$69.00</div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nk jw tto bg-white bh rounded-sm border border-slate-200 lw">
                            <div class="flex fu sz">
                                <div class="td">
                                    <img class="ox" src="images/applications-image-25.jpg" width="301" height="226" alt="Application 25" />
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
                                        <header class="in">
                                            <a href="#0"> <h3 class="gv text-slate-800 gg rx">Form Builder CP</h3> </a>
                                            <div class="text-sm">Lorem ipsum dolor sit amet adipiscing elit, sed do eiusmod.</div>
                                        </header>
                                    </div>
                                    <div class="flex flex-wrap fh items-center">
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
                                        <div><div class="inline-flex text-sm gm hx yr rounded-full gu vg vh">$69.00</div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nk jw tto bg-white bh rounded-sm border border-slate-200 lw">
                            <div class="flex fu sz">
                                <div class="td">
                                    <img class="ox" src="images/applications-image-26.jpg" width="301" height="226" alt="Application 26" />
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
                                    <div class="tp ty tw rw mr-4">
                                        <div class="inline-flex items-center gp gm yh bg-slate-900 pv rounded-full gu vg vh">
                                            <svg class="w-3 h-3 af dd yl mr-1" viewBox="0 0 12 12">
                                                <path d="M11.953 4.29a.5.5 0 00-.454-.292H6.14L6.984.62A.5.5 0 006.12.173l-6 7a.5.5 0 00.379.825h5.359l-.844 3.38a.5.5 0 00.864.445l6-7a.5.5 0 00.075-.534z"></path>
                                            </svg>
                                            <span>Special Offer</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="al flex fu vi">
                                    <div class="al">
                                        <header class="in">
                                            <a href="#0"> <h3 class="gv text-slate-800 gg rx">Form Builder CP</h3> </a>
                                            <div class="text-sm">Lorem ipsum dolor sit amet adipiscing elit, sed do eiusmod.</div>
                                        </header>
                                    </div>
                                    <div class="flex flex-wrap fh items-center">
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
                                        <div><div class="inline-flex text-sm gm h_ yu rounded-full gu vg vh">$39.00</div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nk jw tto bg-white bh rounded-sm border border-slate-200 lw">
                            <div class="flex fu sz">
                                <div class="td">
                                    <img class="ox" src="images/applications-image-27.jpg" width="301" height="226" alt="Application 27" />
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
                                        <header class="in">
                                            <a href="#0"> <h3 class="gv text-slate-800 gg rx">Form Builder CP</h3> </a>
                                            <div class="text-sm">Lorem ipsum dolor sit amet adipiscing elit, sed do eiusmod.</div>
                                        </header>
                                    </div>
                                    <div class="flex flex-wrap fh items-center">
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
                                        <div><div class="inline-flex text-sm gm hx yr rounded-full gu vg vh">$69.00</div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nk jw tto bg-white bh rounded-sm border border-slate-200 lw">
                            <div class="flex fu sz">
                                <div class="td">
                                    <img class="ox" src="images/applications-image-28.jpg" width="301" height="226" alt="Application 28" />
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
                                        <header class="in">
                                            <a href="#0"> <h3 class="gv text-slate-800 gg rx">Form Builder CP</h3> </a>
                                            <div class="text-sm">Lorem ipsum dolor sit amet adipiscing elit, sed do eiusmod.</div>
                                        </header>
                                    </div>
                                    <div class="flex flex-wrap fh items-center">
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
                                        <div><div class="inline-flex text-sm gm hx yr rounded-full gu vg vh">$69.00</div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nk jw tto bg-white bh rounded-sm border border-slate-200 lw">
                            <div class="flex fu sz">
                                <div class="td">
                                    <img class="ox" src="images/applications-image-29.jpg" width="301" height="226" alt="Application 29" />
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
                                        <header class="in">
                                            <a href="#0"> <h3 class="gv text-slate-800 gg rx">Form Builder CP</h3> </a>
                                            <div class="text-sm">Lorem ipsum dolor sit amet adipiscing elit, sed do eiusmod.</div>
                                        </header>
                                    </div>
                                    <div class="flex flex-wrap fh items-center">
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
                                        <div><div class="inline-flex text-sm gm hx yr rounded-full gu vg vh">$69.00</div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nk jb tti">
                            <div class="sz dz pr rounded-sm gu tna ttd tnn tnt">
                                <div class="rw tth ttc">
                                    <div class="gh text-slate-50 gg rx">Excepteur sint occaecat <span class="text-indigo-500">cupidatat</span> 🎁</div>
                                    <div class="nj text-sm yt">Excepteur sint occaecat cupidatat non proidentsunt in culpa qui officia deserunt mollit!</div>
                                </div>
                                <button class="btn hd wq ye af">Reedem Now!</button>
                            </div>
                        </div>
                        <div class="nk jw tto bg-white bh rounded-sm border border-slate-200 lw">
                            <div class="flex fu sz">
                                <div class="td">
                                    <img class="ox" src="images/applications-image-30.jpg" width="301" height="226" alt="Application 30" />
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
                                        <header class="in">
                                            <a href="#0"> <h3 class="gv text-slate-800 gg rx">Form Builder CP</h3> </a>
                                            <div class="text-sm">Lorem ipsum dolor sit amet adipiscing elit, sed do eiusmod.</div>
                                        </header>
                                    </div>
                                    <div class="flex flex-wrap fh items-center">
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
                                        <div><div class="inline-flex text-sm gm hx yr rounded-full gu vg vh">$69.00</div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nk jw tto bg-white bh rounded-sm border border-slate-200 lw">
                            <div class="flex fu sz">
                                <div class="td">
                                    <img class="ox" src="images/applications-image-31.jpg" width="301" height="226" alt="Application 31" />
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
                                        <header class="in">
                                            <a href="#0"> <h3 class="gv text-slate-800 gg rx">Form Builder CP</h3> </a>
                                            <div class="text-sm">Lorem ipsum dolor sit amet adipiscing elit, sed do eiusmod.</div>
                                        </header>
                                    </div>
                                    <div class="flex flex-wrap fh items-center">
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
                                        <div><div class="inline-flex text-sm gm h_ yu rounded-full gu vg vh">$39.00</div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nk jw tto bg-white bh rounded-sm border border-slate-200 lw">
                            <div class="flex fu sz">
                                <div class="td">
                                    <img class="ox" src="images/applications-image-32.jpg" width="301" height="226" alt="Application 32" />
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
                                        <header class="in">
                                            <a href="#0"> <h3 class="gv text-slate-800 gg rx">Form Builder CP</h3> </a>
                                            <div class="text-sm">Lorem ipsum dolor sit amet adipiscing elit, sed do eiusmod.</div>
                                        </header>
                                    </div>
                                    <div class="flex flex-wrap fh items-center">
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
                                        <div><div class="inline-flex text-sm gm hx yr rounded-full gu vg vh">$69.00</div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <div class="ir">
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
