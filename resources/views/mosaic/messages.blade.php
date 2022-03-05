@extends('layouts.admin.app')
@section('contents')
    <div class="td flex">
        <!-- Messages sidebar -->
        <div id="messages-sidebar" class="tp ny tk ty ox qu jh jg jy sa qp a_ bq wn wi" :class="msgSidebarOpen ? 'translate-x-0' : '-translate-x-full'">
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
                            <label for="msg-search" class="tc">Search</label> <input id="msg-search" class="tn ox mr xk" type="search" placeholder="Search…" />
                            <button class="tp tm tg kr" type="submit" aria-label="Search">
                                <svg class="o_ sq af dd yt ks ml-3 mr-2" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7 14c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7zM7 2C4.243 2 2 4.243 2 7s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5z"></path>
                                    <path d="M15.707 14.293L13.314 11.9a8.019 8.019 0 01-1.414 1.414l2.393 2.393a.997.997 0 001.414 0 .999.999 0 000-1.414z"></path>
                                </svg>
                            </button>
                        </form>
                        <div class="ix">
                            <div class="gp gg yt gb it">Direct messages</div>
                            <ul class="rb">
                                <li class="rv">
                                    <button class="flex items-center fh ox vs rounded hz" @click="msgSidebarOpen = false; $refs.contentarea.scrollTop = 99999999;">
                                        <div class="flex items-center lz">
                                            <img class="un or rounded-full mr-2" src="images/user-32-01.jpg" width="32" height="32" alt="User 01" />
                                            <div class="lz"><span class="text-sm gm text-slate-800">Dominik Lamakani</span></div>
                                        </div>
                                        <div class="flex items-center r_"><div class="gp inline-flex gm ph ye rounded-full gu gj vg">2</div></div>
                                    </button>
                                </li>
                                <li class="rv">
                                    <button class="flex items-center fh ox vs rounded" @click="msgSidebarOpen = false; $refs.contentarea.scrollTop = 99999999;">
                                        <div class="flex items-center lz">
                                            <img class="un or rounded-full mr-2" src="images/user-32-02.jpg" width="32" height="32" alt="User 02" />
                                            <div class="lz"><span class="text-sm gm text-slate-800">Tisha Yanchev</span></div>
                                        </div>
                                        <div class="flex items-center r_"><div class="gp inline-flex gm ph ye rounded-full gu gj vg">4</div></div>
                                    </button>
                                </li>
                                <li class="rv">
                                    <button class="flex items-center fh ox vs rounded" @click="msgSidebarOpen = false; $refs.contentarea.scrollTop = 99999999;">
                                        <div class="flex items-center lz">
                                            <img class="un or rounded-full mr-2" src="images/user-32-03.jpg" width="32" height="32" alt="User 03" />
                                            <div class="lz"><span class="text-sm gm text-slate-800">Jerzy Wierzy</span></div>
                                        </div>
                                        <div class="flex items-center r_"><img class="uf oh rounded-full af" src="images/user-32-03.jpg" width="20" height="20" alt="User 03" /></div>
                                    </button>
                                </li>
                                <li class="rv">
                                    <button class="flex items-center fh ox vs rounded" @click="msgSidebarOpen = false; $refs.contentarea.scrollTop = 99999999;">
                                        <div class="flex items-center lz">
                                            <img class="un or rounded-full mr-2" src="images/user-32-04.jpg" width="32" height="32" alt="User 04" />
                                            <div class="lz"><span class="text-sm gm text-slate-800">Adrian Przetocki</span></div>
                                        </div>
                                        <div class="flex items-center r_">
                                            <svg class="w-3 h-3 af dd yt" viewBox="0 0 12 12"><path d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z"></path></svg>
                                        </div>
                                    </button>
                                </li>
                                <li class="rv">
                                    <button class="flex items-center fh ox vs rounded" @click="msgSidebarOpen = false; $refs.contentarea.scrollTop = 99999999;">
                                        <div class="flex items-center lz">
                                            <img class="un or rounded-full mr-2" src="images/user-32-05.jpg" width="32" height="32" alt="User 05" />
                                            <div class="lz"><span class="text-sm gm text-slate-800">Simona Lürwer</span></div>
                                        </div>
                                        <div class="flex items-center r_">
                                            <svg class="w-3 h-3 af dd yt" viewBox="0 0 12 12"><path d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z"></path></svg>
                                        </div>
                                    </button>
                                </li>
                                <li class="rv">
                                    <button class="flex items-center fh ox vs rounded" @click="msgSidebarOpen = false; $refs.contentarea.scrollTop = 99999999;">
                                        <div class="flex items-center lz">
                                            <img class="un or rounded-full mr-2" src="images/user-32-06.jpg" width="32" height="32" alt="User 06" />
                                            <div class="lz"><span class="text-sm gm text-slate-800">Mary Roszczewski</span></div>
                                        </div>
                                        <div class="flex items-center r_">
                                            <svg class="w-3 h-3 af dd yt" viewBox="0 0 12 12"><path d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z"></path></svg>
                                        </div>
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <div class="ix">
                            <div class="gp gg yt gb it">Channels</div>
                            <ul class="rb">
                                <li class="rv">
                                    <button class="flex items-center fh ox vs rounded" @click="msgSidebarOpen = false; $refs.contentarea.scrollTop = 99999999;">
                                        <div class="flex items-center">
                                            <div class="lz"><span class="text-sm gm text-slate-800">#New Leads</span></div>
                                        </div>
                                        <div class="flex items-center r_"><div class="w-2 h-2 ph rounded-full"></div></div>
                                    </button>
                                </li>
                                <li class="rv">
                                    <button class="flex items-center fh ox vs rounded" @click="msgSidebarOpen = false; $refs.contentarea.scrollTop = 99999999;">
                                        <div class="flex items-center lz">
                                            <div class="lz"><span class="text-sm gm text-slate-800">#Development Team</span></div>
                                        </div>
                                    </button>
                                </li>
                                <li class="rv">
                                    <button class="flex items-center fh ox vs rounded" @click="msgSidebarOpen = false; $refs.contentarea.scrollTop = 99999999;">
                                        <div class="flex items-center lz">
                                            <div class="lz"><span class="text-sm gm text-slate-800">#Product Tips</span></div>
                                        </div>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Messages body -->
        <div class="al flex fu qp a_ bq wr wi" :class="msgSidebarOpen ? 'translate-x-1/3' : 'translate-x-0'">
            <div class="tv np">
                <div class="flex items-center fh bg-white cm border-slate-200 va jn zf ou">
                    <div class="flex items-center">
                        <button class="qs yt xa mr-4" @click.stop="msgSidebarOpen = !msgSidebarOpen" aria-controls="messages-sidebar" :aria-expanded="msgSidebarOpen">
                            <span class="tc">Close sidebar</span> <svg class="oz on dd" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M10.7 18.7l1.4-1.4L7.8 13H20v-2H7.8l4.3-4.3-1.4-1.4L4 12z"></path></svg>
                        </button>
                        <div class="flex lr se">
                            <a class="block" href="#0"> <img class="rounded-full cp c_ sw" src="images/user-32-01.jpg" width="32" height="32" alt="User 01" /> </a>
                            <a class="block" href="#0"> <img class="rounded-full cp c_ sw" src="images/user-32-07.jpg" width="32" height="32" alt="User 04" /> </a>
                        </div>
                    </div>
                    <div class="flex">
                        <button class="vu af rounded border border-slate-200 hover--border-slate-300 bd r_">
                            <svg class="o_ sq dd yt" viewBox="0 0 16 16"><path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 12c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm1-3H7V4h2v5z"></path></svg>
                        </button>
                        <button class="vu af rounded border border-slate-200 hover--border-slate-300 bd r_">
                            <svg class="o_ sq dd text-indigo-500" viewBox="0 0 16 16">
                                <path d="M14.3 2.3L5 11.6 1.7 8.3c-.4-.4-1-.4-1.4 0-.4.4-.4 1 0 1.4l4 4c.2.2.4.3.7.3.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4-.4-.4-1-.4-1.4 0z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="al va jn zf mt">
                <div class="flex ff rw wg">
                    <img class="rounded-full mr-4" src="images/user-40-11.jpg" width="40" height="40" alt="User 01" />
                    <div>
                        <div class="text-sm bg-white text-slate-800 vr cs ch border border-slate-200 shadow-md rx">Can anyone help? I have a question about Acme Professional</div>
                        <div class="flex items-center fh"><div class="gp text-slate-500 gm">2:40 PM</div></div>
                    </div>
                </div>
                <div class="flex ff rw wg">
                    <img class="rounded-full mr-4" src="images/user-40-12.jpg" width="40" height="40" alt="User 02" />
                    <div>
                        <div class="text-sm hd ye vr cs ch border ck shadow-md rx">
                            Hey Dominik Lamakani 👋<br />
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est 🙌
                        </div>
                        <div class="flex items-center fh">
                            <div class="gp text-slate-500 gm">2:40 PM</div>
                            <svg class="uf h-3 af dd yf" viewBox="0 0 20 12">
                                <path
                                    d="M10.402 6.988l1.586 1.586L18.28 2.28a1 1 0 011.414 1.414l-7 7a1 1 0 01-1.414 0L8.988 8.402l-2.293 2.293a1 1 0 01-1.414 0l-3-3A1 1 0 013.695 6.28l2.293 2.293L12.28 2.28a1 1 0 011.414 1.414l-3.293 3.293z"
                                ></path>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="flex ff rw wg">
                    <img class="rounded-full mr-4" src="images/user-40-11.jpg" width="40" height="40" alt="User 01" />
                    <div>
                        <div class="flex items-center">
                            <img class="cs shadow-md rx" src="images/chat-image.jpg" width="240" height="180" alt="Chat image" />
                            <button class="vu rounded-full border border-slate-200 iy xo b_ we">
                                <span class="tc">Download</span>
                                <svg class="o_ sq af dd yt" viewBox="0 0 16 16"><path d="M15 15H1a1 1 0 01-1-1V2a1 1 0 011-1h4v2H2v10h12V3h-3V1h4a1 1 0 011 1v12a1 1 0 01-1 1zM9 7h3l-4 4-4-4h3V1h2v6z"></path></svg>
                            </button>
                        </div>
                        <div class="flex items-center fh"><div class="gp text-slate-500 gm">2:48 PM</div></div>
                    </div>
                </div>
                <div class="flex ff rw wg">
                    <img class="rounded-full mr-4" src="images/user-40-11.jpg" width="40" height="40" alt="User 01" />
                    <div>
                        <div class="text-sm bg-white text-slate-800 vr cs ch border border-slate-200 shadow-md rx">What do you think? Duis aute irure dolor in reprehenderit 🔥</div>
                        <div class="flex items-center fh"><div class="gp text-slate-500 gm">2:48 PM</div></div>
                    </div>
                </div>
                <div class="flex ff rw wg">
                    <img class="rounded-full mr-4" src="images/user-40-12.jpg" width="40" height="40" alt="User 02" />
                    <div>
                        <div class="text-sm hd ye vr cs ch border ck shadow-md rx">
                            Sed euismod nisi porta lorem mollis. Tellus elementum sagittis vitae et leo duis. Viverra justo nec ultrices dui.<br />
                            Sed lectus vestibulum mattis ullamcorper velit sed. Ut sem nulla pharetra diam sit amet 🎁
                        </div>
                        <div class="flex items-center fh">
                            <div class="gp text-slate-500 gm">2:55 PM</div>
                            <svg class="w-3 h-3 af dd yt" viewBox="0 0 12 12"><path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z"></path></svg>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center"><div class="inline-flex items-center justify-center gp gm vm vk bg-white border border-slate-200 rounded-full rm">Tuesday, 20 January</div></div>
                <div class="flex ff rw wg">
                    <img class="rounded-full mr-4" src="images/user-40-12.jpg" width="40" height="40" alt="User 02" />
                    <div>
                        <div class="text-sm hd ye vr cs ch border ck shadow-md rx">Can you join <a class="gm" href="#0">@dominik</a>? <a class="bt" href="#0">https://meet.google.com/haz-r3gt-idj</a></div>
                        <div class="flex items-center fh">
                            <div class="gp text-slate-500 gm">10:15 AM</div>
                            <svg class="w-3 h-3 af dd yt" viewBox="0 0 12 12"><path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z"></path></svg>
                        </div>
                    </div>
                </div>
                <div class="flex ff rw wg">
                    <img class="rounded-full mr-4" src="images/user-40-11.jpg" width="40" height="40" alt="User 01" />
                    <div>
                        <div class="text-sm bg-white text-slate-800 vr cs ch border border-slate-200 shadow-md rx">
                            <svg class="dd yt" viewBox="0 0 15 3" width="15" height="3">
                                <circle cx="1.5" cy="1.5" r="1.5"><animate attributeName="opacity" dur="1s" values="0;1;0" repeatCount="indefinite" begin="0.1"></animate></circle>
                                <circle cx="7.5" cy="1.5" r="1.5"><animate attributeName="opacity" dur="1s" values="0;1;0" repeatCount="indefinite" begin="0.2"></animate></circle>
                                <circle cx="13.5" cy="1.5" r="1.5"><animate attributeName="opacity" dur="1s" values="0;1;0" repeatCount="indefinite" begin="0.3"></animate></circle>
                            </svg>
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
