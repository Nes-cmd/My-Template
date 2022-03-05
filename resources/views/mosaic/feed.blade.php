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
                        <header class="rb"><h1 class="gc zc text-slate-800 font-bold">Feed ✨</h1></header>
                        <div class="ttv rb">
                            <form class="td">
                                <label for="feed-search-mobile" class="tc">Search</label> <input id="feed-search-mobile" class="tn ox mr xk" type="search" placeholder="Search…" />
                                <button class="tp tm tg kr" type="submit" aria-label="Search">
                                    <svg class="o_ sq af dd yt ks ml-3 mr-2" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7 14c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7zM7 2C4.243 2 2 4.243 2 7s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5z"></path>
                                        <path d="M15.707 14.293L13.314 11.9a8.019 8.019 0 01-1.414 1.414l2.393 2.393a.997.997 0 001.414 0 .999.999 0 000-1.414z"></path>
                                    </svg>
                                </button>
                            </form>
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
                                                    d="M14.14 9.585h-.002a2.5 2.5 0 0 1-2 4.547 6.91 6.91 0 0 1-6.9 1.165 4.436 4.436 0 0 0 1.343-1.682c.365.087.738.132 1.113.135a4.906 4.906 0 0 0 2.924-.971 2.5 2.5 0 0 1 3.522-3.194Zm-4.015-7.397a7.023 7.023 0 0 1 4.47 5.396 4.5 4.5 0 0 0-1.7-.334c-.15.002-.299.012-.447.03a5.027 5.027 0 0 0-2.723-3.078 2.5 2.5 0 1 1 .4-2.014ZM4.663 10.5a2.5 2.5 0 1 1-3.859-.584 6.888 6.888 0 0 1-.11-1.166c0-2.095.94-4.08 2.56-5.407.093.727.364 1.419.788 2.016A4.97 4.97 0 0 0 2.694 8.75c.003.173.015.345.037.516A2.49 2.49 0 0 1 4.663 10.5Z"
                                                ></path>
                                            </svg>
                                            <span class="text-sm gm gz">Explore</span>
                                        </a>
                                    </li>
                                    <li class="sr jq jz">
                                        <a class="flex items-center vm vc rounded ct" href="#0">
                                            <svg class="o_ sq af dd yt mr-2" viewBox="0 0 16 16">
                                                <path d="M5 9h11v2H5V9zM0 9h3v2H0V9zm5 4h6v2H5v-2zm-5 0h3v2H0v-2zm5-8h7v2H5V5zM0 5h3v2H0V5zm5-4h11v2H5V1zM0 1h3v2H0V1z"></path>
                                            </svg>
                                            <span class="text-sm gm gz">Notifications</span>
                                        </a>
                                    </li>
                                    <li class="sr jq jz">
                                        <a class="flex items-center vm vc rounded ct" href="#0">
                                            <svg class="o_ sq af dd yt mr-2" viewBox="0 0 16 16">
                                                <path d="M10.59 7.658 8 5.5 5.41 7.658A.25.25 0 0 1 5 7.466V0h6v7.466a.25.25 0 0 1-.41.192Z"></path>
                                                <path d="M14 16H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2v2H2v12h12V2h-2V0h2a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2Z"></path>
                                            </svg>
                                            <span class="text-sm gm gz">Bookmarks</span>
                                        </a>
                                    </li>
                                    <li class="sr jq jz">
                                        <a class="flex items-center vm vc rounded ct" href="#0">
                                            <svg class="o_ sq af dd yt mr-2" viewBox="0 0 16 16">
                                                <path
                                                    d="M12.311 9.527c-1.161-.393-1.85-.825-2.143-1.175A3.991 3.991 0 0012 5V4c0-2.206-1.794-4-4-4S4 1.794 4 4v1c0 1.406.732 2.639 1.832 3.352-.292.35-.981.782-2.142 1.175A3.942 3.942 0 001 13.26V16h14v-2.74c0-1.69-1.081-3.19-2.689-3.733zM6 4c0-1.103.897-2 2-2s2 .897 2 2v1c0 1.103-.897 2-2 2s-2-.897-2-2V4zm7 10H3v-.74c0-.831.534-1.569 1.33-1.838 1.845-.624 3-1.436 3.452-2.422h.436c.452.986 1.607 1.798 3.453 2.422A1.943 1.943 0 0113 13.26V14z"
                                                ></path>
                                            </svg>
                                            <span class="text-sm gm gz">Profile</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <div class="gp gg yt gb it">My Groups</div>
                                <ul class="flex fa qe rk jq">
                                    <li class="sr jq jz">
                                        <a class="flex items-center vm vc rounded ct" href="#0">
                                            <svg class="o_ sq af dd yt mr-2" viewBox="0 0 16 16">
                                                <path
                                                    d="M7.3 8.7c-.4-.4-.4-1 0-1.4l7-7c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4l-7 7c-.4.4-1 .4-1.4 0ZM7.3 14.7c-.4-.4-.4-1 0-1.4l7-7c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4l-7 7c-.4.4-1 .4-1.4 0ZM.3 9.7c-.4-.4-.4-1 0-1.4l7-7c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4l-7 7c-.4.4-1 .4-1.4 0Z"
                                                ></path>
                                            </svg>
                                            <span class="text-sm gm gz">Productivity</span>
                                        </a>
                                    </li>
                                    <li class="sr jq jz">
                                        <a class="flex items-center vm vc rounded ct" href="#0">
                                            <svg class="o_ sq af dd yt mr-2" viewBox="0 0 16 16">
                                                <path
                                                    d="M7.3 8.7c-.4-.4-.4-1 0-1.4l7-7c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4l-7 7c-.4.4-1 .4-1.4 0ZM7.3 14.7c-.4-.4-.4-1 0-1.4l7-7c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4l-7 7c-.4.4-1 .4-1.4 0ZM.3 9.7c-.4-.4-.4-1 0-1.4l7-7c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4l-7 7c-.4.4-1 .4-1.4 0Z"
                                                ></path>
                                            </svg>
                                            <span class="text-sm gm gz">Self Development</span>
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
                    <!-- Blocks -->
                    <div class="fj">
                        <!-- Post Block -->
                        <div class="bg-white shadow-md rounded border border-slate-200 vi">
                            <div class="flex items-center lo ic">
                                <img class="rounded-full af" src="images/user-40-02.jpg" width="40" height="40" alt="User 02" />
                                <div class="al">
                                    <label for="status-input" class="tc">What's happening, Mark?</label>
                                    <input id="status-input" class="tn ox hp ck x_ xk bs" type="text" placeholder="What's happening, Mark?" />
                                </div>
                            </div>
                            <div class="flex fh items-center">
                                <div class="al flex lu">
                                    <button class="inline-flex items-center text-sm gm gz xp">
                                        <svg class="o_ sq dv mr-2" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M0 0h2v16H0V0Zm14 0h2v16h-2V0Zm-3 7H5c-.6 0-1-.4-1-1V1c0-.6.4-1 1-1h6c.6 0 1 .4 1 1v5c0 .6-.4 1-1 1ZM6 5h4V2H6v3Zm5 11H5c-.6 0-1-.4-1-1v-5c0-.6.4-1 1-1h6c.6 0 1 .4 1 1v5c0 .6-.4 1-1 1Zm-5-2h4v-3H6v3Z"
                                            ></path>
                                        </svg>
                                        <span>Media</span>
                                    </button>
                                    <button class="inline-flex items-center text-sm gm gz xp">
                                        <svg class="o_ sq dv mr-2" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6.974 14c-.3 0-.7-.2-.9-.5l-2.2-3.7-2.1 2.8c-.3.4-1 .5-1.4.2-.4-.3-.5-1-.2-1.4l3-4c.2-.3.5-.4.9-.4.3 0 .6.2.8.5l2 3.3 3.3-8.1c0-.4.4-.7.8-.7s.8.2.9.6l4 8c.2.5 0 1.1-.4 1.3-.5.2-1.1 0-1.3-.4l-3-6-3.2 7.9c-.2.4-.6.6-1 .6Z"
                                            ></path>
                                        </svg>
                                        <span>GIF</span>
                                    </button>
                                    <button class="inline-flex items-center text-sm gm gz xp">
                                        <svg class="o_ sq dv mr-2" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.793 10.002a.5.5 0 0 1 .353.853l-1.792 1.793a.5.5 0 0 1-.708 0l-1.792-1.793a.5.5 0 0 1 .353-.853h3.586Zm5.014-4.63c1.178 2.497 1.833 5.647.258 7.928-1.238 1.793-3.615 2.702-7.065 2.702S2.173 15.092.935 13.3c-1.575-2.28-.92-5.431.258-7.927A2.962 2.962 0 0 1 0 3.002a3 3 0 0 1 3-3c.787 0 1.496.309 2.029.806a5.866 5.866 0 0 1 5.942 0A2.96 2.96 0 0 1 13 .002a3 3 0 0 1 3 3c0 .974-.472 1.827-1.193 2.37Zm-1.387 6.79c1.05-1.522.417-3.835-.055-5.078C12.915 5.89 11.192 2.002 8 2.002s-4.914 3.89-5.365 5.082c-.472 1.243-1.106 3.556-.055 5.079.843 1.22 2.666 1.839 5.42 1.839s4.577-.62 5.42-1.84ZM6.67 6.62c.113.443.102.68-.433 1.442-.535.761-1.06 1.297-1.658 1.297-.597 0-1.08-.772-1.07-1.483.01-.71.916-2.306 1.997-2.306.784 0 1.05.607 1.163 1.05Zm3.824-1.05c1.08 0 1.987 1.596 1.997 2.306.01.71-.473 1.483-1.07 1.483-.598 0-1.123-.536-1.658-1.297-.535-.762-.546-1-.432-1.442.113-.443.38-1.05 1.163-1.05Z"
                                            ></path>
                                        </svg>
                                        <span>Emoji</span>
                                    </button>
                                </div>
                                <div>
                                    <button type="submit" class="tt hd wq ye ct">Send -&gt;</button>
                                </div>
                            </div>
                        </div>

                        <!-- Posts -->
                        <div class="bg-white shadow-md rounded border border-slate-200 vi">
                            <header class="flex fh ff lo it">
                                <div class="flex ff lo">
                                    <img class="rounded-full af" src="images/user-40-03.jpg" width="40" height="40" alt="User 03" />
                                    <div>
                                        <div class="g_"><a class="text-sm gg text-slate-800" href="#0">Dominik Lamakani</a></div>
                                        <div class="gp text-slate-500">Yesterday at 10:48 AM</div>
                                    </div>
                                </div>
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
                            </header>
                            <div class="text-sm text-slate-800 fz ic">
                                <p>👋</p>
                                <p>
                                    It's more likely that people reading your blog will opt in with their email addresses if you give them something highly relevant in return. Ditch that too-general lead magnet and
                                    create "content upgrades" for your highest-traffic articles.
                                </p>
                                <p>Thread 👇</p>
                            </div>
                            <footer class="flex items-center fq">
                                <button class="flex items-center yt xf">
                                    <svg class="o_ sq af dd ik" viewBox="0 0 16 16">
                                        <path
                                            d="M14.682 2.318A4.485 4.485 0 0011.5 1 4.377 4.377 0 008 2.707 4.383 4.383 0 004.5 1a4.5 4.5 0 00-3.182 7.682L8 15l6.682-6.318a4.5 4.5 0 000-6.364zm-1.4 4.933L8 12.247l-5.285-5A2.5 2.5 0 014.5 3c1.437 0 2.312.681 3.5 2.625C9.187 3.681 10.062 3 11.5 3a2.5 2.5 0 011.785 4.251h-.003z"
                                        ></path>
                                    </svg>
                                    <div class="text-sm text-slate-500">4</div>
                                </button>
                                <button class="flex items-center yt xf">
                                    <svg class="o_ sq af dd ik" viewBox="0 0 16 16"><path d="M13 7h2v6a1 1 0 0 1-1 1H4v2l-4-3 4-3v2h9V7ZM3 9H1V3a1 1 0 0 1 1-1h10V0l4 3-4 3V4H3v5Z"></path></svg>
                                    <div class="text-sm text-slate-500">44</div>
                                </button>
                                <button class="flex items-center yt xf">
                                    <svg class="o_ sq af dd ik" viewBox="0 0 16 16">
                                        <path d="M8 0C3.6 0 0 3.1 0 7s3.6 7 8 7h.6l5.4 2v-4.4c1.2-1.2 2-2.8 2-4.6 0-3.9-3.6-7-8-7zm4 10.8v2.3L8.9 12H8c-3.3 0-6-2.2-6-5s2.7-5 6-5 6 2.2 6 5c0 2.2-2 3.8-2 3.8z"></path>
                                    </svg>
                                    <div class="text-sm text-slate-500">7</div>
                                </button>
                            </footer>
                        </div>
                        <div class="bg-white shadow-md rounded border border-slate-200 vi">
                            <header class="flex fh ff lo it">
                                <div class="flex ff lo">
                                    <img class="rounded-full af" src="images/user-40-06.jpg" width="40" height="40" alt="User 06" />
                                    <div>
                                        <div class="g_"><a class="text-sm gg text-slate-800" href="#0">Mark Karimani</a></div>
                                        <div class="inline-flex items-center">
                                            <svg class="w-3 h-3 af dy mr-1" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.953 4.29a.5.5 0 0 0-.454-.29H6.14L6.984.62A.5.5 0 0 0 6.12.174l-6 7A.5.5 0 0 0 .499 8h5.359l-.844 3.38a.5.5 0 0 0 .864.445l6-7a.5.5 0 0 0 .075-.534Z"></path>
                                            </svg>
                                            <div class="gp text-slate-500">Sponsored</div>
                                        </div>
                                    </div>
                                </div>
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
                            </header>
                            <div class="text-sm text-slate-800 fz ic">
                                <p>Designing an Earth-positive future, together 🌿</p>
                                <div class="td !my-4">
                                    <img class="block ox" src="images/feed-image-01.jpg" width="590" height="332" alt="Feed 01" />
                                    <div class="tp tb tw ty vn pu pm bk">
                                        <div class="flex items-center fh">
                                            <div class="gp gm yd">togethernature.com</div>
                                            <a class="gp gm text-indigo-400 xv" href="#0">Learn More -&gt;</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <footer class="flex items-center fq">
                                <button class="flex items-center yt xf">
                                    <svg class="o_ sq af dd ik" viewBox="0 0 16 16">
                                        <path
                                            d="M14.682 2.318A4.485 4.485 0 0011.5 1 4.377 4.377 0 008 2.707 4.383 4.383 0 004.5 1a4.5 4.5 0 00-3.182 7.682L8 15l6.682-6.318a4.5 4.5 0 000-6.364zm-1.4 4.933L8 12.247l-5.285-5A2.5 2.5 0 014.5 3c1.437 0 2.312.681 3.5 2.625C9.187 3.681 10.062 3 11.5 3a2.5 2.5 0 011.785 4.251h-.003z"
                                        ></path>
                                    </svg>
                                    <div class="text-sm text-slate-500">4</div>
                                </button>
                                <button class="flex items-center yt xf">
                                    <svg class="o_ sq af dd ik" viewBox="0 0 16 16"><path d="M13 7h2v6a1 1 0 0 1-1 1H4v2l-4-3 4-3v2h9V7ZM3 9H1V3a1 1 0 0 1 1-1h10V0l4 3-4 3V4H3v5Z"></path></svg>
                                    <div class="text-sm text-slate-500">44</div>
                                </button>
                                <button class="flex items-center yt xf">
                                    <svg class="o_ sq af dd ik" viewBox="0 0 16 16">
                                        <path d="M8 0C3.6 0 0 3.1 0 7s3.6 7 8 7h.6l5.4 2v-4.4c1.2-1.2 2-2.8 2-4.6 0-3.9-3.6-7-8-7zm4 10.8v2.3L8.9 12H8c-3.3 0-6-2.2-6-5s2.7-5 6-5 6 2.2 6 5c0 2.2-2 3.8-2 3.8z"></path>
                                    </svg>
                                    <div class="text-sm text-slate-500">7</div>
                                </button>
                            </footer>
                        </div>
                        <div class="bg-white shadow-md rounded border border-slate-200 vi">
                            <header class="flex fh ff lo it">
                                <div class="flex ff lo">
                                    <img class="rounded-full af" src="images/user-40-04.jpg" width="40" height="40" alt="User 04" />
                                    <div>
                                        <div class="g_"><a class="text-sm gg text-slate-800" href="#0">Erica Spriggs</a></div>
                                        <div class="gp text-slate-500">Yesterday at 2:34 PM</div>
                                    </div>
                                </div>
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
                            </header>
                            <div class="text-sm text-slate-800 fz ic"><p>Any book recommendations for a first-time entrepreneur? 📚</p></div>
                            <footer class="flex items-center fq">
                                <button class="flex items-center yt xf">
                                    <svg class="o_ sq af dd ik" viewBox="0 0 16 16">
                                        <path
                                            d="M14.682 2.318A4.485 4.485 0 0011.5 1 4.377 4.377 0 008 2.707 4.383 4.383 0 004.5 1a4.5 4.5 0 00-3.182 7.682L8 15l6.682-6.318a4.5 4.5 0 000-6.364zm-1.4 4.933L8 12.247l-5.285-5A2.5 2.5 0 014.5 3c1.437 0 2.312.681 3.5 2.625C9.187 3.681 10.062 3 11.5 3a2.5 2.5 0 011.785 4.251h-.003z"
                                        ></path>
                                    </svg>
                                    <div class="text-sm text-slate-500">122</div>
                                </button>
                                <button class="flex items-center yt xf">
                                    <svg class="o_ sq af dd ik" viewBox="0 0 16 16"><path d="M13 7h2v6a1 1 0 0 1-1 1H4v2l-4-3 4-3v2h9V7ZM3 9H1V3a1 1 0 0 1 1-1h10V0l4 3-4 3V4H3v5Z"></path></svg>
                                    <div class="text-sm text-slate-500">7</div>
                                </button>
                                <button class="flex items-center yt xf">
                                    <svg class="o_ sq af dd ik" viewBox="0 0 16 16">
                                        <path d="M8 0C3.6 0 0 3.1 0 7s3.6 7 8 7h.6l5.4 2v-4.4c1.2-1.2 2-2.8 2-4.6 0-3.9-3.6-7-8-7zm4 10.8v2.3L8.9 12H8c-3.3 0-6-2.2-6-5s2.7-5 6-5 6 2.2 6 5c0 2.2-2 3.8-2 3.8z"></path>
                                    </svg>
                                    <div class="text-sm text-slate-500">298</div>
                                </button>
                            </footer>
                            <div class="id mq cg border-slate-200">
                                <ul class="fz it">
                                    <li class="vr hw rounded">
                                        <div class="flex ff lo">
                                            <img class="rounded-full af" src="images/user-32-04.jpg" width="32" height="32" alt="User 04" />
                                            <div>
                                                <div class="gp text-slate-500"><a class="gg text-slate-800" href="#0">Sophie Wenner</a> · 44min</div>
                                                <div class="text-sm"><a class="gm text-indigo-500 xu" href="#0">@EricaSpriggs</a> Reading through and really enjoying "Zero to Sold" by Arvid.</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="vr hw rounded">
                                        <div class="flex ff lo">
                                            <img class="rounded-full af" src="images/user-32-05.jpg" width="32" height="32" alt="User 05" />
                                            <div>
                                                <div class="gp text-slate-500"><a class="gg text-slate-800" href="#0">Kyla Scanlon</a> · 1h</div>
                                                <div class="text-sm">Depends on the company you're running, but if I had to choose just one book, it'd be The Personal MBA by Josh Kaufman.</div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="flex fh f_">
                                    <div class="text-sm text-slate-500"><span class="gm gz">2</span> of <span class="gm gz">67</span> comments</div>
                                    <button class="text-sm gm text-indigo-500 xu">View More Comments</button>
                                </div>
                                <div class="flex items-center lo ip">
                                    <img class="rounded-full af" src="images/user-40-02.jpg" width="32" height="32" alt="User 02" />
                                    <div class="al"><label for="comment-form" class="tc">Write a comment…</label> <input id="comment-form" class="tn ox hp ck x_ xk bs" type="text" placeholder="Write a comment…" /></div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white shadow-md rounded border border-slate-200 vi">
                            <header class="flex fh ff lo it">
                                <div class="flex ff lo">
                                    <img class="rounded-full af" src="images/user-40-08.jpg" width="40" height="40" alt="User 08" />
                                    <div>
                                        <div class="g_"><a class="text-sm gg text-slate-800" href="#0">Margaret Sullivan</a></div>
                                        <div class="gp text-slate-500">Yesterday at 4:56 PM</div>
                                    </div>
                                </div>
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
                            </header>
                            <div class="text-sm text-slate-800 fz ic">
                                <p>Kyla Network - Make new connections, join communities, and access exclusive experiences. 🧑‍🤝‍🧑</p>
                                <div class="td flex items-center justify-center !my-4">
                                    <img class="block ox" src="images/feed-image-02.jpg" width="590" height="332" alt="Feed 01" />
                                    <button class="tp kr">
                                        <svg class="ue ou" width="64" height="64" xmlns="http://www.w3.org/2000/svg">
                                            <circle class="db bu kl b_" cx="32" cy="32" r="32"></circle>
                                            <path class="dw" d="M40 33a.999.999 0 0 0-.427-.82l-10-7A1 1 0 0 0 28 26v14.002a.999.999 0 0 0 1.573.819l10-7A.995.995 0 0 0 40 33V33c0 .002 0 .002 0 0Z"></path>
                                        </svg>
                                    </button>
                                    <div class="tp no nu na">
                                        <div class="flex items-center lf">
                                            <div class="gp gm yd vg vk pu pm">0:48</div>
                                            <div class="gp gm yd vg vk pu pm">1M Views</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <footer class="flex items-center fq">
                                <button class="flex items-center text-indigo-400">
                                    <svg class="o_ sq af dd ik" viewBox="0 0 16 16">
                                        <path
                                            d="M14.682 2.318A4.485 4.485 0 0011.5 1 4.377 4.377 0 008 2.707 4.383 4.383 0 004.5 1a4.5 4.5 0 00-3.182 7.682L8 15l6.682-6.318a4.5 4.5 0 000-6.364zm-1.4 4.933L8 12.247l-5.285-5A2.5 2.5 0 014.5 3c1.437 0 2.312.681 3.5 2.625C9.187 3.681 10.062 3 11.5 3a2.5 2.5 0 011.785 4.251h-.003z"
                                        ></path>
                                    </svg>
                                    <div class="text-sm text-indigo-500">2.2K</div>
                                </button>
                                <button class="flex items-center yt xf">
                                    <svg class="o_ sq af dd ik" viewBox="0 0 16 16"><path d="M13 7h2v6a1 1 0 0 1-1 1H4v2l-4-3 4-3v2h9V7ZM3 9H1V3a1 1 0 0 1 1-1h10V0l4 3-4 3V4H3v5Z"></path></svg>
                                    <div class="text-sm text-slate-500">4.3K</div>
                                </button>
                                <button class="flex items-center yt xf">
                                    <svg class="o_ sq af dd ik" viewBox="0 0 16 16">
                                        <path d="M8 0C3.6 0 0 3.1 0 7s3.6 7 8 7h.6l5.4 2v-4.4c1.2-1.2 2-2.8 2-4.6 0-3.9-3.6-7-8-7zm4 10.8v2.3L8.9 12H8c-3.3 0-6-2.2-6-5s2.7-5 6-5 6 2.2 6 5c0 2.2-2 3.8-2 3.8z"></path>
                                    </svg>
                                    <div class="text-sm text-slate-500">92</div>
                                </button>
                            </footer>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right content -->
        <div class="ox hidden ttp ttw">
            <div class="zd zv tee tem tev ta">
                <div class="za">
                    <div class="rb">
                        <form class="td">
                            <label for="feed-search-desktop" class="tc">Search</label> <input id="feed-search-desktop" class="tn ox mr xk" type="search" placeholder="Search…" />
                            <button class="tp tm tg kr" type="submit" aria-label="Search">
                                <svg class="o_ sq af dd yt ks ml-3 mr-2" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7 14c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7zM7 2C4.243 2 2 4.243 2 7s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5z"></path>
                                    <path d="M15.707 14.293L13.314 11.9a8.019 8.019 0 01-1.414 1.414l2.393 2.393a.997.997 0 001.414 0 .999.999 0 000-1.414z"></path>
                                </svg>
                            </button>
                        </form>
                    </div>
                    <div class="fj">
                        <div class="hw vn rounded border border-slate-200">
                            <div class="gp gg yt gb rw">Top Communities</div>
                            <ul class="le">
                                <li>
                                    <div class="flex items-center fh">
                                        <div class="al flex items-center">
                                            <div class="td rk"><img class="un or rounded-full" src="images/group-avatar-01.png" width="32" height="32" alt="Group 01" /></div>
                                            <div class="lz"><span class="text-sm gm text-slate-800">Introductions</span></div>
                                        </div>
                                        <button class="gp inline-flex gm hz text-indigo-600 rounded-full gu vm vk">Join</button>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex items-center fh">
                                        <div class="al flex items-center">
                                            <div class="td rk"><img class="un or rounded-full" src="images/group-avatar-02.png" width="32" height="32" alt="Group 02" /></div>
                                            <div class="lz"><span class="text-sm gm text-slate-800">HackerNews</span></div>
                                        </div>
                                        <button class="gp inline-flex gm hz text-indigo-600 rounded-full gu vm vk">Join</button>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex items-center fh">
                                        <div class="al flex items-center">
                                            <div class="td rk"><img class="un or rounded-full" src="images/group-avatar-03.png" width="32" height="32" alt="Group 03" /></div>
                                            <div class="lz"><span class="text-sm gm text-slate-800">ReactJs</span></div>
                                        </div>
                                        <button class="gp inline-flex gm hx yr rounded-full gu vm vk">
                                            <svg class="o_ sq dd af" viewBox="0 0 16 16"><path d="m2.457 8.516.969-.99 2.516 2.481 5.324-5.304.985.989-6.309 6.284z"></path></svg>
                                        </button>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex items-center fh">
                                        <div class="al flex items-center">
                                            <div class="td rk"><img class="un or rounded-full" src="images/group-avatar-04.png" width="32" height="32" alt="Group 04" /></div>
                                            <div class="lz"><span class="text-sm gm text-slate-800">JustChatting</span></div>
                                        </div>
                                        <button class="gp inline-flex gm hz text-indigo-600 rounded-full gu vm vk">Join</button>
                                    </div>
                                </li>
                            </ul>
                            <div class="ix"><button class="tt ox bg-white border-slate-200 hover--border-slate-300 text-indigo-500 bp">View All</button></div>
                        </div>
                        <div class="hw vn rounded border border-slate-200">
                            <div class="gp gg yt gb rw">Who to follow</div>
                            <ul class="le">
                                <li>
                                    <div class="flex items-center fh">
                                        <div class="al flex items-center">
                                            <div class="td rk"><img class="un or rounded-full" src="images/user-32-02.jpg" width="32" height="32" alt="User 02" /></div>
                                            <div class="lz"><span class="text-sm gm text-slate-800">Elly Boutin</span></div>
                                        </div>
                                        <button class="gp inline-flex gm hz text-indigo-600 rounded-full gu vm vk">Follow</button>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex items-center fh">
                                        <div class="al flex items-center">
                                            <div class="td rk"><img class="un or rounded-full" src="images/user-32-04.jpg" width="32" height="32" alt="User 04" /></div>
                                            <div class="lz"><span class="text-sm gm text-slate-800">Rich Harris</span></div>
                                        </div>
                                        <button class="gp inline-flex gm hz text-indigo-600 rounded-full gu vm vk">Follow</button>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex items-center fh">
                                        <div class="al flex items-center">
                                            <div class="td rk"><img class="un or rounded-full" src="images/user-32-05.jpg" width="32" height="32" alt="User 05" /></div>
                                            <div class="lz"><span class="text-sm gm text-slate-800">Mary Porzio</span></div>
                                        </div>
                                        <button class="gp inline-flex gm hz text-indigo-600 rounded-full gu vm vk">Follow</button>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex items-center fh">
                                        <div class="al flex items-center">
                                            <div class="td rk"><img class="un or rounded-full" src="images/user-32-01.jpg" width="32" height="32" alt="User 01" /></div>
                                            <div class="lz"><span class="text-sm gm text-slate-800">Brian Lovin</span></div>
                                        </div>
                                        <button class="gp inline-flex gm hz text-indigo-600 rounded-full gu vm vk">Follow</button>
                                    </div>
                                </li>
                            </ul>
                            <div class="ix"><button class="tt ox bg-white border-slate-200 hover--border-slate-300 text-indigo-500 bp">View All</button></div>
                        </div>
                        <div class="hw vn rounded border border-slate-200">
                            <div class="gp gg yt gb rw">Trends for you</div>
                            <ul class="le">
                                <li>
                                    <div class="text-sm rx"><a class="gm text-slate-800" href="#0">Tracking your website traffic on launch day 📈</a></div>
                                    <div class="gp text-slate-500">248 comments</div>
                                </li>
                                <li>
                                    <div class="text-sm rx"><a class="gm text-slate-800" href="#0">Freemium model questions</a></div>
                                    <div class="gp text-slate-500">47 comments</div>
                                </li>
                                <li>
                                    <div class="text-sm rx"><a class="gm text-slate-800" href="#0">Slack and Community</a></div>
                                    <div class="gp text-slate-500">24 comments</div>
                                </li>
                                <li>
                                    <div class="text-sm rx"><a class="gm text-slate-800" href="#0">Who owns user onboarding in your company?</a></div>
                                    <div class="gp text-slate-500">17 comments</div>
                                </li>
                                <li>
                                    <div class="text-sm rx"><a class="gm text-slate-800" href="#0">Questions from a very confused Web3 startup founder 🤔</a></div>
                                    <div class="gp text-slate-500">9 comments</div>
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