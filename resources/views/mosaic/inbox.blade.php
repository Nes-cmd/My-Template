@extends('layouts.admin.app')
@section('contents')
<div class="td flex">
    <!-- Inbox sidebar -->
    <div id="inbox-sidebar" class="tp ny tk ty ox qu jh jg jy sa qp a_ bq wn wi" :class="inboxSidebarOpen ? 'translate-x-0' : '-translate-x-full'">
        <div class="tv np bg-white l_ lk ta af cb border-slate-200 qh tty om">
            <!-- #Marketing group -->
            <div>
                <div class="tv tk nv">
                    <div class="flex items-center bg-white cm border-slate-200 v_ ou">
                        <div class="ox flex items-center fh">
                            <div class="td" x-data="{ open: false }">
                                <button class="al flex items-center lz" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open">
                                    <img class="un or rounded-full mr-2" src="images/user-avatar-32.png" width="32" height="32" alt="Group 01" />
                                    <div class="lz"><span class="gg text-slate-800">#Marketing</span></div>
                                    <svg class="w-3 h-3 af rq dd yt" viewBox="0 0 12 12"><path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path></svg>
                                </button>
                                <div
                                    class="ah nv tp tq tb uk bg-white border border-slate-200 vz rounded bh lw io"
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
                                        <li>
                                            <a class="gm text-sm gz xl block vz vx" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">
                                                <div class="flex items-center fh">
                                                    <div class="al flex items-center lz">
                                                        <img class="us oo rounded-full mr-2" src="images/channel-01.png" width="28" height="28" alt="Channel 01" />
                                                        <div class="lz">#Marketing</div>
                                                    </div>
                                                    <svg class="w-3 h-3 af dd text-indigo-500 rq" viewBox="0 0 12 12">
                                                        <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z"></path>
                                                    </svg>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="gm text-sm gz xl block vz vx" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">
                                                <div class="flex items-center fh">
                                                    <div class="al flex items-center lz">
                                                        <img class="us oo rounded-full mr-2" src="images/channel-02.png" width="28" height="28" alt="Channel 02" />
                                                        <div class="lz">#Developing</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="gm text-sm gz xl block vz vx" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">
                                                <div class="flex items-center fh">
                                                    <div class="al flex items-center lz">
                                                        <img class="us oo rounded-full mr-2" src="images/channel-03.png" width="28" height="28" alt="Channel 03" />
                                                        <div class="lz">#ProductSupport</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <button class="vu af rounded border border-slate-200 hover--border-slate-300 bd r_">
                                <svg class="o_ sq dd text-slate-500" viewBox="0 0 16 16">
                                    <path
                                        d="M11.7.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM4.6 14H2v-2.6l6-6L10.6 8l-6 6zM12 6.6L9.4 4 11 2.4 13.6 5 12 6.6z"
                                    ></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="v_ vj">
                    <form class="td">
                        <label for="inbox-search" class="tc">Search</label> <input id="inbox-search" class="tn ox mr xk" type="search" placeholder="Search…" />
                        <button class="tp tm tg kr" type="submit" aria-label="Search">
                            <svg class="o_ sq af dd yt ks ml-3 mr-2" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 14c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7zM7 2C4.243 2 2 4.243 2 7s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5z"></path>
                                <path d="M15.707 14.293L13.314 11.9a8.019 8.019 0 01-1.414 1.414l2.393 2.393a.997.997 0 001.414 0 .999.999 0 000-1.414z"></path>
                            </svg>
                        </button>
                    </form>
                    <div class="td ix">
                        <div class="tp ty ox of hv" aria-hidden="true"></div>
                        <ul class="td text-sm gm flex fa rl k_ zw lj ta">
                            <li class="ib last--mr-0 wm jf te_ wx jl tej"><a class="block mg text-indigo-500 ct cy hi" href="#0">Primary</a></li>
                            <li class="ib last--mr-0 wm jf te_ wx jl tej"><a class="block mg text-slate-500 hover--text-slate-600 ct" href="#0">Social</a></li>
                            <li class="ib last--mr-0 wm jf te_ wx jl tej"><a class="block mg text-slate-500 hover--text-slate-600 ct" href="#0">Promotions</a></li>
                        </ul>
                    </div>
                    <div class="ix">
                        <div class="gp gg yt gb it">Inbox (44)</div>
                        <ul class="rb">
                            <li class="rv">
                                <button class="flex ox vs rounded hz go" @click="inboxSidebarOpen = false">
                                    <img class="un or rounded-full mr-2" src="images/user-32-01.jpg" width="32" height="32" alt="User 01" />
                                    <div class="al lz">
                                        <div class="flex items-center fh so">
                                            <div class="lz"><span class="text-sm gg text-slate-800">Dominik Lamakani</span></div>
                                            <div class="gp text-slate-500 gm">4 Aug</div>
                                        </div>
                                        <div class="gp gm text-slate-800 lz im">Chill your mind with this amazing offer 🎉</div>
                                        <div class="gp ce">Lorem ipsum dolor sit amet, consecte adipiscing elit aute irure dolor…</div>
                                    </div>
                                </button>
                            </li>
                            <li class="rv">
                                <button class="flex ox vs rounded go" @click="inboxSidebarOpen = false">
                                    <img class="un or rounded-full mr-2" src="images/user-32-05.jpg" width="32" height="32" alt="User 05" />
                                    <div class="al lz">
                                        <div class="flex items-center fh so">
                                            <div class="lz"><span class="text-sm gg text-slate-800">Simona Lürwer</span></div>
                                            <div class="gp text-slate-500 gm">4 Aug</div>
                                        </div>
                                        <div class="gp gm text-slate-800 lz im">🙌 Help us improve Mosaic by giving…</div>
                                        <div class="gp ce">Lorem ipsum dolor sit amet, consecte adipiscing elit aute irure dolor…</div>
                                    </div>
                                </button>
                            </li>
                            <li class="rv">
                                <button class="flex ox vs rounded go" @click="inboxSidebarOpen = false">
                                    <img class="un or rounded-full mr-2" src="images/user-32-06.jpg" width="32" height="32" alt="User 05" />
                                    <div class="al lz">
                                        <div class="flex items-center fh so">
                                            <div class="lz"><span class="text-sm gg text-slate-800">Mary Roszczewski</span></div>
                                            <div class="gp text-slate-500 gm">1 Aug</div>
                                        </div>
                                        <div class="gp gm text-slate-800 lz im">[Urgent] Changes to links for public…</div>
                                        <div class="gp ce">👋 Lorem ipsum dolor sit amet, consecte adipiscing elit aute irure dolor…</div>
                                    </div>
                                </button>
                            </li>
                            <li class="rv">
                                <button class="flex ox vs rounded go" @click="inboxSidebarOpen = false">
                                    <img class="un or rounded-full mr-2" src="images/user-32-04.jpg" width="32" height="32" alt="User 05" />
                                    <div class="al lz">
                                        <div class="flex items-center fh so">
                                            <div class="lz"><span class="text-sm gg text-slate-800">Adrian Przetocki</span></div>
                                            <div class="gp text-slate-500 gm">1 Aug</div>
                                        </div>
                                        <div class="gp gm text-slate-800 lz im">🙌 Help us improve Mosaic by giving…</div>
                                        <div class="gp ce">Lorem ipsum dolor sit amet, consecte adipiscing elit aute irure dolor…</div>
                                    </div>
                                </button>
                            </li>
                            <li class="rv">
                                <button class="flex ox vs rounded go" @click="inboxSidebarOpen = false">
                                    <img class="un or rounded-full mr-2" src="images/user-32-02.jpg" width="32" height="32" alt="User 05" />
                                    <div class="al lz">
                                        <div class="flex items-center fh so">
                                            <div class="lz"><span class="text-sm gg text-slate-800">Tisha Yanchev</span></div>
                                            <div class="gp text-slate-500 gm">1 Aug</div>
                                        </div>
                                        <div class="gp gm text-slate-800 lz im">Re: Here’s an extra 25% OFF 🎉</div>
                                        <div class="gp ce">Excepteur sint occaecat cupidatat non proident sunt in culpa qui deserunt…</div>
                                    </div>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Inbox body -->
    <div class="al flex fu qp a_ bq wr wi" :class="inboxSidebarOpen ? 'translate-x-1/3' : 'translate-x-0'">
        <div class="tv np">
            <div class="flex items-center fh hw cm border-slate-200 va jn zf ou">
                <div class="flex">
                    <button class="qs yt xa mr-4" @click.stop="inboxSidebarOpen = !inboxSidebarOpen" aria-controls="inbox-sidebar" :aria-expanded="inboxSidebarOpen">
                        <span class="tc">Close sidebar</span> <svg class="oz on dd" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M10.7 18.7l1.4-1.4L7.8 13H20v-2H7.8l4.3-4.3-1.4-1.4L4 12z"></path></svg>
                    </button>
                    <button class="vu af rounded bg-white border border-slate-200 hover--border-slate-300 bd r_">
                        <svg class="o_ sq dd yt" viewBox="0 0 16 16">
                            <path d="M5 7h2v6H5V7zm4 0h2v6H9V7zm3-6v2h4v2h-1v10c0 .6-.4 1-1 1H2c-.6 0-1-.4-1-1V5H0V3h4V1c0-.6.4-1 1-1h6c.6 0 1 .4 1 1zM6 2v1h4V2H6zm7 3H3v9h10V5z"></path>
                        </svg>
                    </button>
                    <button class="vu af rounded bg-white border border-slate-200 hover--border-slate-300 bd r_">
                        <svg class="o_ sq dd yl" viewBox="0 0 16 16"><path d="M10 5.934 8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path></svg>
                    </button>
                    <button class="vu af rounded bg-white border border-slate-200 hover--border-slate-300 bd r_">
                        <svg class="o_ sq dd yt" viewBox="0 0 16 16"><path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 12c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm1-3H7V4h2v5z"></path></svg>
                    </button>
                    <button class="vu af rounded bg-white border border-slate-200 hover--border-slate-300 bd r_">
                        <svg class="o_ sq dd text-indigo-500" viewBox="0 0 16 16">
                            <path d="M14.3 2.3L5 11.6 1.7 8.3c-.4-.4-1-.4-1.4 0-.4.4-.4 1 0 1.4l4 4c.2.2.4.3.7.3.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4-.4-.4-1-.4-1.4 0z"></path>
                        </svg>
                    </button>
                </div>
                <div class="flex items-center">
                    <div class="gp mr-1"><span class="gm">10</span> <span class="text-slate-500">of</span> <span class="gm">467</span></div>
                    <button class="vu af rounded bg-white border border-slate-200 hover--border-slate-300 bd r_">
                        <svg class="o_ sq dd" viewBox="0 0 16 16"><path d="m10 13.4 1.4-1.4-4-4 4-4L10 2.6 4.6 8z"></path></svg>
                    </button>
                    <button class="vu af rounded bg-white border border-slate-200 hover--border-slate-300 bd r_">
                        <svg class="o_ sq dd" viewBox="0 0 16 16"><path d="M7 13.4 5.6 12l4-4-4-4L7 2.6 12.4 8z"></path></svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="al va jn zf vj">
            <header class="_u _v _w rw">
                <h1 class="gh gk text-slate-800 font-bold rx kj r_">Chill your mind with this amazing offer 🎉</h1>
                <button class="gp inline-flex gm hj ya rounded-full gu vm vk ct">Exciting news</button>
            </header>
            <div class="bg-white bh rounded-sm border border-slate-200 vd lh ld">
                <div class="mt" x-data="{ open: false }">
                    <header class="flex ff">
                        <img class="rounded-full af rk" src="images/user-40-11.jpg" width="40" height="40" alt="User 11" />
                        <div class="al">
                            <div class="_u ff fh im">
                                <div class="ttd items-center in kj">
                                    <button class="text-sm gg text-slate-800 go lz" @click.prevent="open = !open">Dominik Lamakani</button>
                                    <div class="text-sm yt hidden ttp ro" x-show="open" x-cloak="">·</div>
                                    <div class="gp" x-show="open" x-cloak="">dominiklama@acme.com</div>
                                </div>
                                <div class="gp gm text-slate-500 ct in kj">Sep 3, 3:18 PM</div>
                            </div>
                            <div class="gp gm text-slate-500" x-show="open" x-cloak="">To me, Carolyn</div>
                            <div class="text-sm" x-show="!open">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore…</div>
                        </div>
                    </header>
                    <div class="text-sm text-slate-800 ix fz" x-show="open" x-cloak="">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        </p>
                        <p>Consectetur adipiscing elit, sed do eiusmod aliqua? Check below:</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        <p>Cheers,</p>
                        <p class="gm">Dominik Lamakani</p>
                    </div>
                </div>
                <div class="mt" x-data="{ open: false }">
                    <header class="flex ff">
                        <img class="rounded-full af rk" src="images/user-avatar-80.png" width="40" height="40" alt="User 11" />
                        <div class="al">
                            <div class="_u ff fh im">
                                <div class="ttd items-center in kj">
                                    <button class="text-sm gg text-slate-800 go lz" @click.prevent="open = !open">Acme Inc.</button>
                                    <div class="text-sm yt hidden ttp ro" x-show="open" x-cloak="">·</div>
                                    <div class="gp" x-show="open" x-cloak="">acmeinc@acme.com</div>
                                </div>
                                <div class="gp gm text-slate-500 ct in kj">Sep 3, 3:18 PM</div>
                            </div>
                            <div class="gp gm text-slate-500" x-show="open" x-cloak="">To me, Dominik</div>
                            <div class="text-sm" x-show="!open">Dominik, lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt…</div>
                        </div>
                    </header>
                    <div class="text-sm text-slate-800 ix fz" x-show="open" x-cloak="">
                        <p>
                            Dominik, lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis laboris nisi ut aliquip ex ea
                            commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        </p>
                        <p>Consectetur adipiscing elit, sed do eiusmod aliqua? Check below:</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        <p>Cheers,</p>
                        <p class="gm">Acme Inc.</p>
                    </div>
                </div>
                <div class="mt" x-data="{ open: true }">
                    <header class="flex ff">
                        <img class="rounded-full af rk" src="images/user-40-11.jpg" width="40" height="40" alt="User 11" />
                        <div class="al">
                            <div class="_u ff fh im">
                                <div class="ttd items-center in kj">
                                    <button class="text-sm gg text-slate-800 go lz" @click.prevent="open = !open">Dominik Lamakani</button>
                                    <div class="text-sm yt hidden ttp ro" x-show="open" x-cloak="">·</div>
                                    <div class="gp" x-show="open" x-cloak="">dominiklama@acme.com</div>
                                </div>
                                <div class="gp gm text-slate-500 ct in kj">Sep 4, 3:37 AM</div>
                            </div>
                            <div class="gp gm text-slate-500" x-show="open" x-cloak="">To me, Carolyn</div>
                            <div class="text-sm" x-show="!open">Hey Acme 👋 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt…</div>
                        </div>
                    </header>
                    <div class="text-sm text-slate-800 ix fz" x-show="open" x-cloak="">
                        <p>Hey Acme 👋</p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                            <span class="bt">nostrud exercitation ullamco</span> laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                            nulla pariatur.
                        </p>
                        <p>Consectetur adipiscing elit, sed do eiusmod <a class="gm text-indigo-500 xu" href="#0">tempor magna</a> aliqua? Check below:</p>
                        <p><img src="images/inbox-image.jpg" width="320" height="190" alt="Inbox image" /></p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        <p>Cheers,</p>
                        <p class="gm">Dominik Lamakani</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="tv ty">
            <div class="flex items-center fh bg-white cg border-slate-200 va jn zf ou">
                <button class="af yt xa rk">
                    <span class="tc">Add</span>
                    <svg class="oz on dd" viewBox="0 0 24 24"><path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12C23.98 5.38 18.62.02 12 0zm6 13h-5v5h-2v-5H6v-2h5V6h2v5h5v2z"></path></svg>
                </button>
                <form class="al flex">
                    <div class="al rk"><label for="message-input" class="tc">Type a message</label> <input id="message-input" class="tn ox hp ck x_ xk" type="text" placeholder="Aa" /></div>
                    <button type="submit" class="btn hd wq ye ct">Send -&gt;</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection