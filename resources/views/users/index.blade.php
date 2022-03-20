@extends('layouts.admin.app')
@section('contents')
    <div class="va jn teb vf ox uz ri">
        <!-- Page header -->
        <div class="_u _w _g ry">
            <!-- Left: Title -->
            <div class="rw kj">
                <h1 class="gc zc text-slate-800 font-bold">Customers ✨</h1>
            </div>

            <!-- Right: Actions -->
            <div class="sx fr _p fc _b fp">
                <div class="table-items-action hidden">
                    <div class="flex items-center">
                        <div class="hidden ttp text-sm gw mr-2 ct"><span class="table-items-count"></span> items selected</div>
                        <button class="btn bg-white border-slate-200 hover--border-slate-300 yi xc">Delete</button>
                    </div>
                </div>
                <div class="td" x-data="{ open: false, selected: 2 }">
                    <button
                        class="btn fh uw bg-white border-slate-200 hover--border-slate-300 text-slate-500 hover--text-slate-600"
                        aria-label="Select date range"
                        aria-haspopup="true"
                        @click.prevent="open = !open"
                        :aria-expanded="open"
                    >
                        <span class="flex items-center">
                            <svg class="o_ sq dd text-slate-500 af mr-2" viewBox="0 0 16 16">
                                <path d="M15 2h-2V0h-2v2H9V0H7v2H5V0H3v2H1a1 1 0 00-1 1v12a1 1 0 001 1h14a1 1 0 001-1V3a1 1 0 00-1-1zm-1 12H2V6h12v8z"></path>
                            </svg>
                            <span x-text="$refs.options.children[selected].children[1].innerHTML"></span>
                        </span>
                        <svg class="af rq dd yt" width="11" height="7" viewBox="0 0 11 7"><path d="M5.4 6.8L0 1.4 1.4 0l4 4 4-4 1.4 1.4z"></path></svg>
                    </button>
                    <div
                        class="nv tp tq tw ox bg-white border border-slate-200 vz rounded bh lw io"
                        @click.outside="open = false"
                        @keydown.escape.window="open = false"
                        x-show="open"
                        x-transition:enter="b_ ws wt a_"
                        x-transition:enter-start="opacity-0 am"
                        x-transition:enter-end="bf ag"
                        x-transition:leave="b_ ws wt"
                        x-transition:leave-start="bf"
                        x-transition:leave-end="opacity-0"
                        x-cloak=""
                    >
                        <div class="gm text-sm gz" x-ref="options">
                            <button tabindex="0" class="flex items-center ox wz vk vx aq" :class="selected === 0 &amp;&amp; 'text-indigo-500'" @click="selected = 0;open = false" @focus="open = true" @focusout="open = false">
                                <svg class="af mr-2 dd text-indigo-500" :class="selected !== 0 &amp;&amp; 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                                    <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z"></path>
                                </svg>
                                <span>Today</span>
                            </button>
                            <button tabindex="0" class="flex items-center ox wz vk vx aq" :class="selected === 1 &amp;&amp; 'text-indigo-500'" @click="selected = 1;open = false" @focus="open = true" @focusout="open = false">
                                <svg class="af mr-2 dd text-indigo-500" :class="selected !== 1 &amp;&amp; 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                                    <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z"></path>
                                </svg>
                                <span>Last 7 Days</span>
                            </button>
                            <button tabindex="0" class="flex items-center ox wz vk vx aq" :class="selected === 2 &amp;&amp; 'text-indigo-500'" @click="selected = 2;open = false" @focus="open = true" @focusout="open = false">
                                <svg class="af mr-2 dd text-indigo-500" :class="selected !== 2 &amp;&amp; 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                                    <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z"></path>
                                </svg>
                                <span>Last Month</span>
                            </button>
                            <button tabindex="0" class="flex items-center ox wz vk vx aq" :class="selected === 3 &amp;&amp; 'text-indigo-500'" @click="selected = 3;open = false" @focus="open = true" @focusout="open = false">
                                <svg class="af mr-2 dd text-indigo-500" :class="selected !== 3 &amp;&amp; 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                                    <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z"></path>
                                </svg>
                                <span>Last 12 Months</span>
                            </button>
                            <button tabindex="0" class="flex items-center ox wz vk vx aq" :class="selected === 4 &amp;&amp; 'text-indigo-500'" @click="selected = 4;open = false" @focus="open = true" @focusout="open = false">
                                <svg class="af mr-2 dd text-indigo-500" :class="selected !== 4 &amp;&amp; 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                                    <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z"></path>
                                </svg>
                                <span>All Time</span>
                            </button>
                        </div>
                    </div>
                </div>
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
                    <span class="hidden tnm r_">Add Customer</span>
                </button>
            </div>
        </div>

        <!-- Table -->
        <div class="bg-white bh rounded-sm border border-slate-200">
            <header class="v_ vj">
                <h2 class="gg text-slate-800">All Customers <span class="yt gm">248</span></h2>
            </header>
            <div x-data="handleSelect">
                <div class="lx">
                    <table class="ac ox">
                        <thead class="gp gg gb text-slate-500 hw cg cm border-slate-200">
                            <tr>
                                <th class="vg wv ww vl ct oj">
                                    <div class="flex items-center">
                                        <label class="inline-flex"> <span class="tc">Select all</span> <input id="parent-checkbox" class="to" type="checkbox" @click="toggleAll" /> </label>
                                    </div>
                                </th>
                                <th class="vg wv ww vl ct oj"><span class="tc">Favourite</span></th>
                                <th class="vg wv ww vl ct"><div class="gg go">Order</div></th>
                                <th class="vg wv ww vl ct"><div class="gg go">Email</div></th>
                                <th class="vg wv ww vl ct"><div class="gg go">Location</div></th>
                                <th class="vg wv ww vl ct"><div class="gg">Orders</div></th>
                                <th class="vg wv ww vl ct"><div class="gg go">Last order</div></th>
                                <th class="vg wv ww vl ct"><div class="gg go">Total spent</div></th>
                                <th class="vg wv ww vl ct"><div class="gg">Refunds</div></th>
                                <th class="vg wv ww vl ct"><span class="tc">Menu</span></th>
                            </tr>
                        </thead>
                        <tbody class="text-sm lh ld">
                            <tr>
                                <td class="vg wv ww vl ct oj">
                                    <div class="flex items-center">
                                        <label class="inline-flex"> <span class="tc">Select</span> <input class="table-item to" type="checkbox" @click="uncheckParent" /> </label>
                                    </div>
                                </td>
                                <td class="vg wv ww vl ct oj">
                                    <div class="flex items-center td">
                                        <button>
                                            <svg class="o_ sq af dd yl" viewBox="0 0 16 16"><path d="M8 0L6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934h-6L8 0z"></path></svg>
                                        </button>
                                    </div>
                                </td>
                                <td class="vg wv ww vl ct">
                                    <div class="flex items-center">
                                        <div class="ur oi af mr-2 kq"><img class="rounded-full" src="images/user-40-01.jpg" width="40" height="40" alt="User 01" /></div>
                                        <div class="gm text-slate-800">Patricia Semklo</div>
                                    </div>
                                </td>
                                <td class="vg wv ww vl ct"><div class="go">patricia.semklo@app.com</div></td>
                                <td class="vg wv ww vl ct"><div class="go">🇬🇧 London, UK</div></td>
                                <td class="vg wv ww vl ct"><div class="gu">24</div></td>
                                <td class="vg wv ww vl ct"><div class="go gm yy">#123567</div></td>
                                <td class="vg wv ww vl ct"><div class="go gm yf">$2,890.66</div></td>
                                <td class="vg wv ww vl ct"><div class="gu">-</div></td>
                                <td class="vg wv ww vl ct oj">
                                    <button class="yt xa rounded-full">
                                        <span class="tc">Menu</span>
                                        <svg class="un or dd" viewBox="0 0 32 32">
                                            <circle cx="16" cy="16" r="2"></circle>
                                            <circle cx="10" cy="16" r="2"></circle>
                                            <circle cx="22" cy="16" r="2"></circle>
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="vg wv ww vl ct oj">
                                    <div class="flex items-center">
                                        <label class="inline-flex"> <span class="tc">Select</span> <input class="table-item to" type="checkbox" @click="uncheckParent" /> </label>
                                    </div>
                                </td>
                                <td class="vg wv ww vl ct">
                                    <div class="flex items-center td">
                                        <button>
                                            <svg class="o_ sq af dd yd" viewBox="0 0 16 16"><path d="M8 0L6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934h-6L8 0z"></path></svg>
                                        </button>
                                    </div>
                                </td>
                                <td class="vg wv ww vl ct">
                                    <div class="flex items-center">
                                        <div class="ur oi af mr-2 kq"><img class="rounded-full" src="images/user-40-02.jpg" width="40" height="40" alt="User 02" /></div>
                                        <div class="gm text-slate-800">Dominik Lamakani</div>
                                    </div>
                                </td>
                                <td class="vg wv ww vl ct"><div class="go">dominik.lamakani@gmail.com</div></td>
                                <td class="vg wv ww vl ct"><div class="go">🇩🇪 Dortmund, DE</div></td>
                                <td class="vg wv ww vl ct"><div class="gu">77</div></td>
                                <td class="vg wv ww vl ct"><div class="go gm yy">#779912</div></td>
                                <td class="vg wv ww vl ct"><div class="go gm yf">$14,767.04</div></td>
                                <td class="vg wv ww vl ct"><div class="gu">4</div></td>
                                <td class="vg wv ww vl ct oj">
                                    <button class="yt xa rounded-full">
                                        <span class="tc">Menu</span>
                                        <svg class="un or dd" viewBox="0 0 32 32">
                                            <circle cx="16" cy="16" r="2"></circle>
                                            <circle cx="10" cy="16" r="2"></circle>
                                            <circle cx="22" cy="16" r="2"></circle>
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="vg wv ww vl ct oj">
                                    <div class="flex items-center">
                                        <label class="inline-flex"> <span class="tc">Select</span> <input class="table-item to" type="checkbox" @click="uncheckParent" /> </label>
                                    </div>
                                </td>
                                <td class="vg wv ww vl ct">
                                    <div class="flex items-center td">
                                        <button>
                                            <svg class="o_ sq af dd yl" viewBox="0 0 16 16"><path d="M8 0L6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934h-6L8 0z"></path></svg>
                                        </button>
                                    </div>
                                </td>
                                <td class="vg wv ww vl ct">
                                    <div class="flex items-center">
                                        <div class="ur oi af mr-2 kq"><img class="rounded-full" src="images/user-40-03.jpg" width="40" height="40" alt="User 03" /></div>
                                        <div class="gm text-slate-800">Ivan Mesaros</div>
                                    </div>
                                </td>
                                <td class="vg wv ww vl ct"><div class="go">imivanmes@gmail.com</div></td>
                                <td class="vg wv ww vl ct"><div class="go">🇫🇷 Paris, FR</div></td>
                                <td class="vg wv ww vl ct"><div class="gu">44</div></td>
                                <td class="vg wv ww vl ct"><div class="go gm yy">#889924</div></td>
                                <td class="vg wv ww vl ct"><div class="go gm yf">$4,996.00</div></td>
                                <td class="vg wv ww vl ct"><div class="gu">1</div></td>
                                <td class="vg wv ww vl ct oj">
                                    <button class="yt xa rounded-full">
                                        <span class="tc">Menu</span>
                                        <svg class="un or dd" viewBox="0 0 32 32">
                                            <circle cx="16" cy="16" r="2"></circle>
                                            <circle cx="10" cy="16" r="2"></circle>
                                            <circle cx="22" cy="16" r="2"></circle>
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="vg wv ww vl ct oj">
                                    <div class="flex items-center">
                                        <label class="inline-flex"> <span class="tc">Select</span> <input class="table-item to" type="checkbox" @click="uncheckParent" /> </label>
                                    </div>
                                </td>
                                <td class="vg wv ww vl ct">
                                    <div class="flex items-center td">
                                        <button>
                                            <svg class="o_ sq af dd yd" viewBox="0 0 16 16"><path d="M8 0L6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934h-6L8 0z"></path></svg>
                                        </button>
                                    </div>
                                </td>
                                <td class="vg wv ww vl ct">
                                    <div class="flex items-center">
                                        <div class="ur oi af mr-2 kq"><img class="rounded-full" src="images/user-40-04.jpg" width="40" height="40" alt="User 04" /></div>
                                        <div class="gm text-slate-800">Maria Martinez</div>
                                    </div>
                                </td>
                                <td class="vg wv ww vl ct"><div class="go">martinezhome@gmail.com</div></td>
                                <td class="vg wv ww vl ct"><div class="go">🇮🇹 Bologna, IT</div></td>
                                <td class="vg wv ww vl ct"><div class="gu">29</div></td>
                                <td class="vg wv ww vl ct"><div class="go gm yy">#897726</div></td>
                                <td class="vg wv ww vl ct"><div class="go gm yf">$3,220.66</div></td>
                                <td class="vg wv ww vl ct"><div class="gu">2</div></td>
                                <td class="vg wv ww vl ct oj">
                                    <button class="yt xa rounded-full">
                                        <span class="tc">Menu</span>
                                        <svg class="un or dd" viewBox="0 0 32 32">
                                            <circle cx="16" cy="16" r="2"></circle>
                                            <circle cx="10" cy="16" r="2"></circle>
                                            <circle cx="22" cy="16" r="2"></circle>
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="vg wv ww vl ct oj">
                                    <div class="flex items-center">
                                        <label class="inline-flex"> <span class="tc">Select</span> <input class="table-item to" type="checkbox" @click="uncheckParent" /> </label>
                                    </div>
                                </td>
                                <td class="vg wv ww vl ct">
                                    <div class="flex items-center td">
                                        <button>
                                            <svg class="o_ sq af dd yl" viewBox="0 0 16 16"><path d="M8 0L6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934h-6L8 0z"></path></svg>
                                        </button>
                                    </div>
                                </td>
                                <td class="vg wv ww vl ct">
                                    <div class="flex items-center">
                                        <div class="ur oi af mr-2 kq"><img class="rounded-full" src="images/user-40-05.jpg" width="40" height="40" alt="User 05" /></div>
                                        <div class="gm text-slate-800">Vicky Jung</div>
                                    </div>
                                </td>
                                <td class="vg wv ww vl ct"><div class="go">itsvicky@contact.com</div></td>
                                <td class="vg wv ww vl ct"><div class="go">🇬🇧 London, UK</div></td>
                                <td class="vg wv ww vl ct"><div class="gu">22</div></td>
                                <td class="vg wv ww vl ct"><div class="go gm yy">#123567</div></td>
                                <td class="vg wv ww vl ct"><div class="go gm yf">$2,890.66</div></td>
                                <td class="vg wv ww vl ct"><div class="gu">-</div></td>
                                <td class="vg wv ww vl ct oj">
                                    <button class="yt xa rounded-full">
                                        <span class="tc">Menu</span>
                                        <svg class="un or dd" viewBox="0 0 32 32">
                                            <circle cx="16" cy="16" r="2"></circle>
                                            <circle cx="10" cy="16" r="2"></circle>
                                            <circle cx="22" cy="16" r="2"></circle>
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="vg wv ww vl ct oj">
                                    <div class="flex items-center">
                                        <label class="inline-flex"> <span class="tc">Select</span> <input class="table-item to" type="checkbox" @click="uncheckParent" /> </label>
                                    </div>
                                </td>
                                <td class="vg wv ww vl ct">
                                    <div class="flex items-center td">
                                        <button>
                                            <svg class="o_ sq af dd yl" viewBox="0 0 16 16"><path d="M8 0L6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934h-6L8 0z"></path></svg>
                                        </button>
                                    </div>
                                </td>
                                <td class="vg wv ww vl ct">
                                    <div class="flex items-center">
                                        <div class="ur oi af mr-2 kq"><img class="rounded-full" src="images/user-40-06.jpg" width="40" height="40" alt="User 06" /></div>
                                        <div class="gm text-slate-800">Tisho Yanchev</div>
                                    </div>
                                </td>
                                <td class="vg wv ww vl ct"><div class="go">tisho.y@kurlytech.com</div></td>
                                <td class="vg wv ww vl ct"><div class="go">🇬🇧 London, UK</div></td>
                                <td class="vg wv ww vl ct"><div class="gu">14</div></td>
                                <td class="vg wv ww vl ct"><div class="go gm yy">#896644</div></td>
                                <td class="vg wv ww vl ct"><div class="go gm yf">$1,649.99</div></td>
                                <td class="vg wv ww vl ct"><div class="gu">1</div></td>
                                <td class="vg wv ww vl ct oj">
                                    <button class="yt xa rounded-full">
                                        <span class="tc">Menu</span>
                                        <svg class="un or dd" viewBox="0 0 32 32">
                                            <circle cx="16" cy="16" r="2"></circle>
                                            <circle cx="10" cy="16" r="2"></circle>
                                            <circle cx="22" cy="16" r="2"></circle>
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="vg wv ww vl ct oj">
                                    <div class="flex items-center">
                                        <label class="inline-flex"> <span class="tc">Select</span> <input class="table-item to" type="checkbox" @click="uncheckParent" /> </label>
                                    </div>
                                </td>
                                <td class="vg wv ww vl ct">
                                    <div class="flex items-center td">
                                        <button>
                                            <svg class="o_ sq af dd yl" viewBox="0 0 16 16"><path d="M8 0L6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934h-6L8 0z"></path></svg>
                                        </button>
                                    </div>
                                </td>
                                <td class="vg wv ww vl ct">
                                    <div class="flex items-center">
                                        <div class="ur oi af mr-2 kq"><img class="rounded-full" src="images/user-40-07.jpg" width="40" height="40" alt="User 07" /></div>
                                        <div class="gm text-slate-800">James Cameron</div>
                                    </div>
                                </td>
                                <td class="vg wv ww vl ct"><div class="go">james.ceo@james.tech</div></td>
                                <td class="vg wv ww vl ct"><div class="go">🇫🇷 Marseille, FR</div></td>
                                <td class="vg wv ww vl ct"><div class="gu">34</div></td>
                                <td class="vg wv ww vl ct"><div class="go gm yy">#136988</div></td>
                                <td class="vg wv ww vl ct"><div class="go gm yf">$3,569.87</div></td>
                                <td class="vg wv ww vl ct"><div class="gu">2</div></td>
                                <td class="vg wv ww vl ct oj">
                                    <button class="yt xa rounded-full">
                                        <span class="tc">Menu</span>
                                        <svg class="un or dd" viewBox="0 0 32 32">
                                            <circle cx="16" cy="16" r="2"></circle>
                                            <circle cx="10" cy="16" r="2"></circle>
                                            <circle cx="22" cy="16" r="2"></circle>
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="vg wv ww vl ct oj">
                                    <div class="flex items-center">
                                        <label class="inline-flex"> <span class="tc">Select</span> <input class="table-item to" type="checkbox" @click="uncheckParent" /> </label>
                                    </div>
                                </td>
                                <td class="vg wv ww vl ct">
                                    <div class="flex items-center td">
                                        <button>
                                            <svg class="o_ sq af dd yd" viewBox="0 0 16 16"><path d="M8 0L6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934h-6L8 0z"></path></svg>
                                        </button>
                                    </div>
                                </td>
                                <td class="vg wv ww vl ct">
                                    <div class="flex items-center">
                                        <div class="ur oi af mr-2 kq"><img class="rounded-full" src="images/user-40-08.jpg" width="40" height="40" alt="User 08" /></div>
                                        <div class="gm text-slate-800">Haruki Masuno</div>
                                    </div>
                                </td>
                                <td class="vg wv ww vl ct"><div class="go">haruki@supermail.jp</div></td>
                                <td class="vg wv ww vl ct"><div class="go">🇯🇵 Tokio, JP</div></td>
                                <td class="vg wv ww vl ct"><div class="gu">112</div></td>
                                <td class="vg wv ww vl ct"><div class="go gm yy">#442206</div></td>
                                <td class="vg wv ww vl ct"><div class="go gm yf">$19,246.07</div></td>
                                <td class="vg wv ww vl ct"><div class="gu">6</div></td>
                                <td class="vg wv ww vl ct oj">
                                    <button class="yt xa rounded-full">
                                        <span class="tc">Menu</span>
                                        <svg class="un or dd" viewBox="0 0 32 32">
                                            <circle cx="16" cy="16" r="2"></circle>
                                            <circle cx="10" cy="16" r="2"></circle>
                                            <circle cx="22" cy="16" r="2"></circle>
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="vg wv ww vl ct oj">
                                    <div class="flex items-center">
                                        <label class="inline-flex"> <span class="tc">Select</span> <input class="table-item to" type="checkbox" @click="uncheckParent" /> </label>
                                    </div>
                                </td>
                                <td class="vg wv ww vl ct">
                                    <div class="flex items-center td">
                                        <button>
                                            <svg class="o_ sq af dd yl" viewBox="0 0 16 16"><path d="M8 0L6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934h-6L8 0z"></path></svg>
                                        </button>
                                    </div>
                                </td>
                                <td class="vg wv ww vl ct">
                                    <div class="flex items-center">
                                        <div class="ur oi af mr-2 kq"><img class="rounded-full" src="images/user-40-09.jpg" width="40" height="40" alt="User 09" /></div>
                                        <div class="gm text-slate-800">Joe Huang</div>
                                    </div>
                                </td>
                                <td class="vg wv ww vl ct"><div class="go">joehuang@hotmail.com</div></td>
                                <td class="vg wv ww vl ct"><div class="go">🇨🇳 Shanghai, CN</div></td>
                                <td class="vg wv ww vl ct"><div class="gu">64</div></td>
                                <td class="vg wv ww vl ct"><div class="go gm yy">#764321</div></td>
                                <td class="vg wv ww vl ct"><div class="go gm yf">$12,276.92</div></td>
                                <td class="vg wv ww vl ct"><div class="gu">-</div></td>
                                <td class="vg wv ww vl ct oj">
                                    <button class="yt xa rounded-full">
                                        <span class="tc">Menu</span>
                                        <svg class="un or dd" viewBox="0 0 32 32">
                                            <circle cx="16" cy="16" r="2"></circle>
                                            <circle cx="10" cy="16" r="2"></circle>
                                            <circle cx="22" cy="16" r="2"></circle>
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="vg wv ww vl ct oj">
                                    <div class="flex items-center">
                                        <label class="inline-flex"> <span class="tc">Select</span> <input class="table-item to" type="checkbox" @click="uncheckParent" /> </label>
                                    </div>
                                </td>
                                <td class="vg wv ww vl ct">
                                    <div class="flex items-center td">
                                        <button>
                                            <svg class="o_ sq af dd yd" viewBox="0 0 16 16"><path d="M8 0L6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934h-6L8 0z"></path></svg>
                                        </button>
                                    </div>
                                </td>
                                <td class="vg wv ww vl ct">
                                    <div class="flex items-center">
                                        <div class="ur oi af mr-2 kq"><img class="rounded-full" src="images/user-40-10.jpg" width="40" height="40" alt="User 10" /></div>
                                        <div class="gm text-slate-800">Carolyn McNeail</div>
                                    </div>
                                </td>
                                <td class="vg wv ww vl ct"><div class="go">carolynlove@gmail.com</div></td>
                                <td class="vg wv ww vl ct"><div class="go">🇮🇹 Milan, IT</div></td>
                                <td class="vg wv ww vl ct"><div class="gu">19</div></td>
                                <td class="vg wv ww vl ct"><div class="go gm yy">#908764</div></td>
                                <td class="vg wv ww vl ct"><div class="go gm yf">$1,289.97</div></td>
                                <td class="vg wv ww vl ct"><div class="gu">2</div></td>
                                <td class="vg wv ww vl ct oj">
                                    <button class="yt xa rounded-full">
                                        <span class="tc">Menu</span>
                                        <svg class="un or dd" viewBox="0 0 32 32">
                                            <circle cx="16" cy="16" r="2"></circle>
                                            <circle cx="10" cy="16" r="2"></circle>
                                            <circle cx="22" cy="16" r="2"></circle>
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <script>
            document.addEventListener("alpine:init", () => {
                Alpine.data("handleSelect", () => ({
                    selectall: !1,
                    selectAction() {
                        (countEl = document.querySelector(".table-items-action")),
                            countEl &&
                                ((checkboxes = document.querySelectorAll("input.table-item:checked")),
                                (document.querySelector(".table-items-count").innerHTML = checkboxes.length),
                                checkboxes.length > 0 ? countEl.classList.remove("hidden") : countEl.classList.add("hidden"));
                    },
                    toggleAll() {
                        (this.selectall = !this.selectall),
                            (checkboxes = document.querySelectorAll("input.table-item")),
                            [...checkboxes].map((e) => {
                                e.checked = this.selectall;
                            }),
                            this.selectAction();
                    },
                    uncheckParent() {
                        (this.selectall = !1), (document.getElementById("parent-checkbox").checked = !1), this.selectAction();
                    },
                }));
            });
        </script>

        <!-- Pagination -->
        <div class="ie">
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

@endsection
