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
                    <!-- Forum entry -->
                    <article class="bg-white shadow-md rounded border border-slate-200 vi">
                        <div class="in">
                            <ul class="inline-flex flex-wrap text-sm gm">
                                <li class="flex items-center">
                                    <a class="text-slate-500 xf" href="forum.html">Home</a> <svg class="sq o_ dd yt rs" viewBox="0 0 16 16"><path d="M6.6 13.4L5.2 12l4-4-4-4 1.4-1.4L12 8z"></path></svg>
                                </li>
                                <li class="flex items-center"><a class="text-slate-500 xf" href="#0">Discussion</a></li>
                            </ul>
                        </div>
                        <header class="my">
                            <div class="flex ff lo it">
                                <h2 class="gc text-slate-800 font-bold">Besides Product Hunt, where else should I promote my new project? 🤔</h2>
                                <div class="af">
                                    <button class="gp gg gu oa ua border border-slate-200 hover--border-slate-300 rounded-sm flex fu justify-center items-center">
                                        <svg class="inline-flex dm ss so" width="12" height="6" xmlns="http://www.w3.org/2000/svg"><path d="m0 6 6-6 6 6z"></path></svg>
                                        <div>44</div>
                                    </button>
                                </div>
                            </div>
                            <div class="flex flex-wrap text-sm">
                                <div class="flex items-center wo wh w_ wf wl wa"><a class="gm text-indigo-500 xu" href="#0">katemerlu</a></div>
                                <div class="flex items-center wo wh w_ wf wl wa"><span class="text-slate-500">2h</span></div>
                                <div class="flex items-center wo wh w_ wf wl wa"><span class="text-slate-500">17 Comments</span></div>
                            </div>
                        </header>
                        <div class="fj rb">
                            <p>Looking for new ideas to get users, receive feedback, and increase exposure! Besides PH, where else do you showcase your product?</p>
                            <p>Please advise 🙌</p>
                        </div>
                        <div>
                            <div class="flex ff lo it">
                                <img class="rounded-full af" src="images/user-40-02.jpg" width="40" height="40" alt="User 02" />
                                <div class="al"><label for="comment" class="tc">Write a comment…</label> <textarea id="comment" class="tr ox xk" rows="4" placeholder="Write a comment…"></textarea></div>
                            </div>
                            <div class="ga"><button type="submit" class="tt hd wq ye ct">Reply -&gt;</button></div>
                        </div>
                        <div class="ix">
                            <h3 class="gg text-slate-800 rw">Comments</h3>
                            <ul class="la">
                                <li class="td mr la">
                                    <div class="flex ff">
                                        <div class="tp tk tb">
                                            <button class="gp gg go oz rounded-sm flex fu justify-center items-center xf">
                                                <svg class="inline-flex dm ss so" width="12" height="6" xmlns="http://www.w3.org/2000/svg"><path d="m0 6 6-6 6 6z"></path></svg>
                                                <div>44</div>
                                            </button>
                                        </div>
                                        <div>
                                            <div class="al text-sm text-slate-800 fz in">
                                                <p>
                                                    We've also had the same question to be honest. And for Appy.com launch we decided to go with Twitter as a primary medium and then Product Hunt as the other one. And I
                                                    have to say that it led to some great results as Twitter allows you to be super active and engage in many conversations.
                                                </p>
                                                <p>Also, users are there and everything is super active. So that will be my advice - invest time in Twitter</p>
                                            </div>
                                            <div class="flex flex-wrap gp">
                                                <div class="flex items-center wo wh w_ wf wl wa">
                                                    <a class="block mr-2" href="#0"> <img class="rounded-full" src="images/user-28-02.jpg" width="24" height="24" alt="User 02" /> </a>
                                                    <a class="gm text-indigo-500 xu" href="#0">ekuplu89</a>
                                                </div>
                                                <div class="flex items-center wo wh w_ wf wl wa"><a class="gm text-slate-500 hover--text-slate-600" href="#0">Reply</a></div>
                                                <div class="flex items-center wo wh w_ wf wl wa"><a class="gm text-slate-500 hover--text-slate-600" href="#0">Share</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="la">
                                        <li class="td mr la">
                                            <div class="flex ff">
                                                <div class="tp tk tb">
                                                    <button class="gp gg go oz rounded-sm flex fu justify-center items-center xf">
                                                        <svg class="inline-flex dm ss so" width="12" height="6" xmlns="http://www.w3.org/2000/svg"><path d="m0 6 6-6 6 6z"></path></svg>
                                                        <div>2</div>
                                                    </button>
                                                </div>
                                                <div>
                                                    <div class="al text-sm text-slate-800 fz in">
                                                        <p>That's great advice, <a class="gm text-indigo-500 xu" href="#0">@ekuplu89</a> 👏</p>
                                                    </div>
                                                    <div class="flex flex-wrap gp">
                                                        <div class="flex items-center wo wh w_ wf wl wa">
                                                            <a class="block mr-2" href="#0"> <img class="rounded-full" src="images/user-28-05.jpg" width="24" height="24" alt="User 05" /> </a>
                                                            <a class="gm text-indigo-500 xu" href="#0">ellielong</a>
                                                        </div>
                                                        <div class="flex items-center wo wh w_ wf wl wa"><a class="gm text-slate-500 hover--text-slate-600" href="#0">Reply</a></div>
                                                        <div class="flex items-center wo wh w_ wf wl wa"><a class="gm text-slate-500 hover--text-slate-600" href="#0">Share</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="td mr la">
                                    <div class="flex ff">
                                        <div class="tp tk tb">
                                            <button class="gp gg go oz rounded-sm flex fu justify-center items-center">
                                                <svg class="inline-flex dw ss so" width="12" height="6" xmlns="http://www.w3.org/2000/svg"><path d="m0 6 6-6 6 6z"></path></svg>
                                                <div>27</div>
                                            </button>
                                        </div>
                                        <div>
                                            <div class="al text-sm text-slate-800 fz in">
                                                <p>
                                                    If you are a SaaS product and are looking for early adopters, AppSumo seems to be a great place to list on. Most of the users there seem to be early-adopters. Life-time
                                                    deals seem to be the norm there.
                                                </p>
                                            </div>
                                            <div class="flex flex-wrap gp">
                                                <div class="flex items-center wo wh w_ wf wl wa">
                                                    <a class="block mr-2" href="#0"> <img class="rounded-full" src="images/user-28-01.jpg" width="24" height="24" alt="User 01" /> </a>
                                                    <a class="gm text-indigo-500 xu" href="#0">markcuttik</a>
                                                </div>
                                                <div class="flex items-center wo wh w_ wf wl wa"><a class="gm text-slate-500 hover--text-slate-600" href="#0">Reply</a></div>
                                                <div class="flex items-center wo wh w_ wf wl wa"><a class="gm text-slate-500 hover--text-slate-600" href="#0">Share</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="td mr la">
                                    <div class="flex ff">
                                        <div class="tp tk tb">
                                            <button class="gp gg go oz rounded-sm flex fu justify-center items-center xf">
                                                <svg class="inline-flex dm ss so" width="12" height="6" xmlns="http://www.w3.org/2000/svg"><path d="m0 6 6-6 6 6z"></path></svg>
                                                <div>24</div>
                                            </button>
                                        </div>
                                        <div>
                                            <div class="al text-sm text-slate-800 fz in">
                                                <p>
                                                    Thank you very much for all the people who are posting other alternatives! I will launch my free product design course in February and I will make a notion template
                                                    with all this information! :)
                                                </p>
                                            </div>
                                            <div class="flex flex-wrap gp">
                                                <div class="flex items-center wo wh w_ wf wl wa">
                                                    <a class="block mr-2" href="#0"> <img class="rounded-full" src="images/user-28-09.jpg" width="24" height="24" alt="User 09" /> </a>
                                                    <a class="gm text-indigo-500 xu" href="#0">davidp1</a>
                                                </div>
                                                <div class="flex items-center wo wh w_ wf wl wa"><a class="gm text-slate-500 hover--text-slate-600" href="#0">Reply</a></div>
                                                <div class="flex items-center wo wh w_ wf wl wa"><a class="gm text-slate-500 hover--text-slate-600" href="#0">Share</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="la">
                                        <li class="td mr la">
                                            <div class="flex ff">
                                                <div class="tp tk tb">
                                                    <button class="gp gg go oz rounded-sm flex fu justify-center items-center xf">
                                                        <svg class="inline-flex dm ss so" width="12" height="6" xmlns="http://www.w3.org/2000/svg"><path d="m0 6 6-6 6 6z"></path></svg>
                                                        <div>2</div>
                                                    </button>
                                                </div>
                                                <div>
                                                    <div class="al text-sm text-slate-800 fz in"><p>That sounds like an excellent idea. I'd love to take a look when you're ready!</p></div>
                                                    <div class="flex flex-wrap gp">
                                                        <div class="flex items-center wo wh w_ wf wl wa">
                                                            <a class="block mr-2" href="#0"> <img class="rounded-full" src="images/user-28-05.jpg" width="24" height="24" alt="User 05" /> </a>
                                                            <a class="gm text-indigo-500 xu" href="#0">ellielong</a>
                                                        </div>
                                                        <div class="flex items-center wo wh w_ wf wl wa"><a class="gm text-slate-500 hover--text-slate-600" href="#0">Reply</a></div>
                                                        <div class="flex items-center wo wh w_ wf wl wa"><a class="gm text-slate-500 hover--text-slate-600" href="#0">Share</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="la">
                                                <li class="td mr la">
                                                    <div class="flex ff">
                                                        <div class="tp tk tb">
                                                            <button class="gp gg go oz rounded-sm flex fu justify-center items-center xf">
                                                                <svg class="inline-flex dm ss so" width="12" height="6" xmlns="http://www.w3.org/2000/svg"><path d="m0 6 6-6 6 6z"></path></svg>
                                                                <div>1</div>
                                                            </button>
                                                        </div>
                                                        <div>
                                                            <div class="al text-sm text-slate-800 fz in"><p>Expect it! 👊</p></div>
                                                            <div class="flex flex-wrap gp">
                                                                <div class="flex items-center wo wh w_ wf wl wa">
                                                                    <a class="block mr-2" href="#0"> <img class="rounded-full" src="images/user-28-09.jpg" width="24" height="24" alt="User 09" /> </a>
                                                                    <a class="gm text-indigo-500 xu" href="#0">davidp1</a>
                                                                </div>
                                                                <div class="flex items-center wo wh w_ wf wl wa"><a class="gm text-slate-500 hover--text-slate-600" href="#0">Reply</a></div>
                                                                <div class="flex items-center wo wh w_ wf wl wa"><a class="gm text-slate-500 hover--text-slate-600" href="#0">Share</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="td mr la">
                                    <div class="flex ff">
                                        <div class="tp tk tb">
                                            <button class="gp gg go oz rounded-sm flex fu justify-center items-center xf">
                                                <svg class="inline-flex dm ss so" width="12" height="6" xmlns="http://www.w3.org/2000/svg"><path d="m0 6 6-6 6 6z"></path></svg>
                                                <div>19</div>
                                            </button>
                                        </div>
                                        <div>
                                            <div class="al text-sm text-slate-800 fz in"><p>Social Media (channels based on your target audience), and Slack channels</p></div>
                                            <div class="flex flex-wrap gp">
                                                <div class="flex items-center wo wh w_ wf wl wa">
                                                    <a class="block mr-2" href="#0"> <img class="rounded-full" src="images/user-28-10.jpg" width="24" height="24" alt="User 10" /> </a>
                                                    <a class="gm text-indigo-500 xu" href="#0">patrick2</a>
                                                </div>
                                                <div class="flex items-center wo wh w_ wf wl wa"><a class="gm text-slate-500 hover--text-slate-600" href="#0">Reply</a></div>
                                                <div class="flex items-center wo wh w_ wf wl wa"><a class="gm text-slate-500 hover--text-slate-600" href="#0">Share</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="gu id"><button class="text-sm gm text-indigo-500 xu">View More Comments</button></div>
                        </div>
                    </article>
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
                            <div class="gp gg yt gb rw">About the Author</div>
                            <div class="flex items-center rw">
                                <div class="ur oi af rk"><img class="rounded-full" src="images/user-40-04.jpg" width="40" height="40" alt="User 04" /></div>
                                <div>
                                    <div class="gg text-slate-800">Kate Merlu</div>
                                    <div class="text-sm text-slate-500 gw">Building SquareApp 🚀</div>
                                </div>
                            </div>
                            <ul class="text-sm fz">
                                <li>🤟 <span class="gm">1798</span> Karma</li>
                                <li>🔥 <span class="gm">39</span> Posts</li>
                                <li>✍️ <span class="gm">299</span> Comments</li>
                            </ul>
                            <div class="ix"><button class="tt ox bg-white border-slate-200 hover--border-slate-300 text-indigo-500 bp">Follow</button></div>
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