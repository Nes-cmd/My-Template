@extends('layouts.admin.app')
@section('contents')
<div class="va jn teb vf ox uz ri">
        <!-- Page header -->
        <div class="_u _w _g ry">
            <!-- Left: Title -->
            <div class="rw kj">
                <h1 class="gc zc text-slate-800 font-bold">Orders ✨</h1>
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
        <div class="bg-white bh rounded-sm border border-slate-200 ry">
            <header class="v_ vj">
                <h2 class="gg text-slate-800">All Orders <span class="yt gm">442</span></h2>
            </header>
            <div x-data="handleSelect">
                <div class="lx">
                    <table class="ac ox lh ld">
                        <thead class="gp gb text-slate-500 hw cg border-slate-200">
                            <tr>
                                <th class="vg wv ww vl ct oj">
                                    <div class="flex items-center">
                                        <label class="inline-flex"> <span class="tc">Select all</span> <input id="parent-checkbox" class="to" type="checkbox" @click="toggleAll" /> </label>
                                    </div>
                                </th>
                                <th class="vg wv ww vl ct"><div class="gg go">Order</div></th>
                                <th class="vg wv ww vl ct"><div class="gg go">Date</div></th>
                                <th class="vg wv ww vl ct"><div class="gg go">Customer</div></th>
                                <th class="vg wv ww vl ct"><div class="gg go">Total</div></th>
                                <th class="vg wv ww vl ct"><div class="gg go">Status</div></th>
                                <th class="vg wv ww vl ct"><div class="gg">Items</div></th>
                                <th class="vg wv ww vl ct"><div class="gg go">Location</div></th>
                                <th class="vg wv ww vl ct"><div class="gg go">Payment type</div></th>
                                <th class="vg wv ww vl ct"><span class="tc">Menu</span></th>
                            </tr>
                        </thead>
                        <tbody class="text-sm" x-data="{ open: false }">
                            <tr>
                                <td class="vg wv ww vl ct oj">
                                    <div class="flex items-center">
                                        <label class="inline-flex"> <span class="tc">Select</span> <input class="table-item to" type="checkbox" @click="uncheckParent" /> </label>
                                    </div>
                                </td>
                                <td class="vg wv ww vl ct">
                                    <div class="flex items-center text-slate-800">
                                        <div class="ur oi af flex items-center justify-center hp rounded-full mr-2 kq"><img class="rq" src="images/icon-01.svg" width="20" height="20" alt="Icon 01" /></div>
                                        <div class="gm yy">#143567</div>
                                    </div>
                                </td>
                                <td class="vg wv ww vl ct"><div>22/01/2021</div></td>
                                <td class="vg wv ww vl ct"><div class="gm text-slate-800">Dominik Lamakani</div></td>
                                <td class="vg wv ww vl ct"><div class="go gm yf">$129.00</div></td>
                                <td class="vg wv ww vl ct"><div class="inline-flex gm hk yo rounded-full gu vm vh">Refunded</div></td>
                                <td class="vg wv ww vl ct"><div class="gu">1</div></td>
                                <td class="vg wv ww vl ct"><div class="go">🇨🇳 Shanghai, CN</div></td>
                                <td class="vg wv ww vl ct">
                                    <div class="flex items-center">
                                        <svg class="o_ sq dd yt af mr-2" viewBox="0 0 16 16">
                                            <path
                                                d="M4.3 4.5c1.9-1.9 5.1-1.9 7 0 .7.7 1.2 1.7 1.4 2.7l2-.3c-.2-1.5-.9-2.8-1.9-3.8C10.1.4 5.7.4 2.9 3.1L.7.9 0 7.3l6.4-.7-2.1-2.1zM15.6 8.7l-6.4.7 2.1 2.1c-1.9 1.9-5.1 1.9-7 0-.7-.7-1.2-1.7-1.4-2.7l-2 .3c.2 1.5.9 2.8 1.9 3.8 1.4 1.4 3.1 2 4.9 2 1.8 0 3.6-.7 4.9-2l2.2 2.2.8-6.4z"
                                            ></path>
                                        </svg>
                                        <div>Subscription</div>
                                    </div>
                                </td>
                                <td class="vg wv ww vl ct oj">
                                    <div class="flex items-center">
                                        <button class="yt xa a_" :class="{ 'ak': open }" @click.prevent="open = !open" :aria-expanded="open" aria-controls="description-01">
                                            <span class="tc">Menu</span> <svg class="un or dd" viewBox="0 0 32 32"><path d="M16 20l-5.4-5.4 1.4-1.4 4 4 4-4 1.4 1.4z"></path></svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr id="description-01" role="region" x-show="open" x-cloak="">
                                <td colspan="10" class="vg wv ww vl">
                                    <div class="flex items-center hw vr ii">
                                        <svg class="o_ sq af dd yt mr-2">
                                            <path d="M1 16h3c.3 0 .5-.1.7-.3l11-11c.4-.4.4-1 0-1.4l-3-3c-.4-.4-1-.4-1.4 0l-11 11c-.2.2-.3.4-.3.7v3c0 .6.4 1 1 1zm1-3.6l10-10L13.6 4l-10 10H2v-1.6z"></path>
                                        </svg>
                                        <div class="gw">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        <tbody class="text-sm" x-data="{ open: false }">
                            <tr>
                                <td class="vg wv ww vl ct oj">
                                    <div class="flex items-center">
                                        <label class="inline-flex"> <span class="tc">Select</span> <input class="table-item to" type="checkbox" @click="uncheckParent" /> </label>
                                    </div>
                                </td>
                                <td class="vg wv ww vl ct">
                                    <div class="flex items-center text-slate-800">
                                        <div class="ur oi af flex items-center justify-center hp rounded-full mr-2 kq"><img class="rq" src="images/icon-01.svg" width="20" height="20" alt="Icon 01" /></div>
                                        <div class="gm yy">#227799</div>
                                    </div>
                                </td>
                                <td class="vg wv ww vl ct"><div>22/01/2021</div></td>
                                <td class="vg wv ww vl ct"><div class="gm text-slate-800">Mark Cameron</div></td>
                                <td class="vg wv ww vl ct"><div class="go gm yf">$89.00</div></td>
                                <td class="vg wv ww vl ct"><div class="inline-flex gm hx yr rounded-full gu vm vh">Approved</div></td>
                                <td class="vg wv ww vl ct"><div class="gu">2</div></td>
                                <td class="vg wv ww vl ct"><div class="go">🇲🇽 Mexico City, MX</div></td>
                                <td class="vg wv ww vl ct">
                                    <div class="flex items-center">
                                        <svg class="o_ sq dd yt af mr-2" viewBox="0 0 16 16">
                                            <path
                                                d="M4.3 4.5c1.9-1.9 5.1-1.9 7 0 .7.7 1.2 1.7 1.4 2.7l2-.3c-.2-1.5-.9-2.8-1.9-3.8C10.1.4 5.7.4 2.9 3.1L.7.9 0 7.3l6.4-.7-2.1-2.1zM15.6 8.7l-6.4.7 2.1 2.1c-1.9 1.9-5.1 1.9-7 0-.7-.7-1.2-1.7-1.4-2.7l-2 .3c.2 1.5.9 2.8 1.9 3.8 1.4 1.4 3.1 2 4.9 2 1.8 0 3.6-.7 4.9-2l2.2 2.2.8-6.4z"
                                            ></path>
                                        </svg>
                                        <div>Subscription</div>
                                    </div>
                                </td>
                                <td class="vg wv ww vl ct oj">
                                    <div class="flex items-center">
                                        <button class="yt xa a_" :class="{ 'ak': open }" @click.prevent="open = !open" :aria-expanded="open" aria-controls="description-02">
                                            <span class="tc">Menu</span> <svg class="un or dd" viewBox="0 0 32 32"><path d="M16 20l-5.4-5.4 1.4-1.4 4 4 4-4 1.4 1.4z"></path></svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr id="description-02" role="region" x-show="open" x-cloak="">
                                <td colspan="10" class="vg wv ww vl">
                                    <div class="flex items-center hw vr ii">
                                        <svg class="o_ sq af dd yt mr-2">
                                            <path d="M1 16h3c.3 0 .5-.1.7-.3l11-11c.4-.4.4-1 0-1.4l-3-3c-.4-.4-1-.4-1.4 0l-11 11c-.2.2-.3.4-.3.7v3c0 .6.4 1 1 1zm1-3.6l10-10L13.6 4l-10 10H2v-1.6z"></path>
                                        </svg>
                                        <div class="gw">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        <tbody class="text-sm" x-data="{ open: false }">
                            <tr>
                                <td class="vg wv ww vl ct oj">
                                    <div class="flex items-center">
                                        <label class="inline-flex"> <span class="tc">Select</span> <input class="table-item to" type="checkbox" @click="uncheckParent" /> </label>
                                    </div>
                                </td>
                                <td class="vg wv ww vl ct">
                                    <div class="flex items-center text-slate-800">
                                        <div class="ur oi af flex items-center justify-center hp rounded-full mr-2 kq"><img class="rq" src="images/icon-02.svg" width="20" height="20" alt="Icon 02" /></div>
                                        <div class="gm yy">#143567</div>
                                    </div>
                                </td>
                                <td class="vg wv ww vl ct"><div>22/01/2021</div></td>
                                <td class="vg wv ww vl ct"><div class="gm text-slate-800">Carolyn McNeail</div></td>
                                <td class="vg wv ww vl ct"><div class="go gm yf">$89.00</div></td>
                                <td class="vg wv ww vl ct"><div class="inline-flex gm hx yr rounded-full gu vm vh">Approved</div></td>
                                <td class="vg wv ww vl ct"><div class="gu">2</div></td>
                                <td class="vg wv ww vl ct"><div class="go">🇮🇹 Milan, IT</div></td>
                                <td class="vg wv ww vl ct">
                                    <div class="flex items-center">
                                        <svg class="o_ sq dd yt af mr-2" viewBox="0 0 16 16">
                                            <path
                                                d="M11.4 0L10 1.4l2 2H8.4c-2.8 0-5 2.2-5 5V12l-2-2L0 11.4l3.7 3.7c.2.2.4.3.7.3.3 0 .5-.1.7-.3l3.7-3.7L7.4 10l-2 2V8.4c0-1.7 1.3-3 3-3H12l-2 2 1.4 1.4 3.7-3.7c.4-.4.4-1 0-1.4L11.4 0z"
                                            ></path>
                                        </svg>
                                        <div>One-time</div>
                                    </div>
                                </td>
                                <td class="vg wv ww vl ct oj">
                                    <div class="flex items-center">
                                        <button class="yt xa a_" :class="{ 'ak': open }" @click.prevent="open = !open" :aria-expanded="open" aria-controls="description-03">
                                            <span class="tc">Menu</span> <svg class="un or dd" viewBox="0 0 32 32"><path d="M16 20l-5.4-5.4 1.4-1.4 4 4 4-4 1.4 1.4z"></path></svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr id="description-03" role="region" x-show="open" x-cloak="">
                                <td colspan="10" class="vg wv ww vl">
                                    <div class="flex items-center hw vr ii">
                                        <svg class="o_ sq af dd yt mr-2">
                                            <path d="M1 16h3c.3 0 .5-.1.7-.3l11-11c.4-.4.4-1 0-1.4l-3-3c-.4-.4-1-.4-1.4 0l-11 11c-.2.2-.3.4-.3.7v3c0 .6.4 1 1 1zm1-3.6l10-10L13.6 4l-10 10H2v-1.6z"></path>
                                        </svg>
                                        <div class="gw">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        <tbody class="text-sm" x-data="{ open: false }">
                            <tr>
                                <td class="vg wv ww vl ct oj">
                                    <div class="flex items-center">
                                        <label class="inline-flex"> <span class="tc">Select</span> <input class="table-item to" type="checkbox" @click="uncheckParent" /> </label>
                                    </div>
                                </td>
                                <td class="vg wv ww vl ct">
                                    <div class="flex items-center text-slate-800">
                                        <div class="ur oi af flex items-center justify-center hp rounded-full mr-2 kq"><img class="rq" src="images/icon-01.svg" width="20" height="20" alt="Icon 01" /></div>
                                        <div class="gm yy">#664491</div>
                                    </div>
                                </td>
                                <td class="vg wv ww vl ct"><div>22/01/2021</div></td>
                                <td class="vg wv ww vl ct"><div class="gm text-slate-800">Brian Halligan</div></td>
                                <td class="vg wv ww vl ct"><div class="go gm yf">$59.00</div></td>
                                <td class="vg wv ww vl ct"><div class="inline-flex gm hp text-slate-500 rounded-full gu vm vh">Pending</div></td>
                                <td class="vg wv ww vl ct"><div class="gu">1</div></td>
                                <td class="vg wv ww vl ct"><div class="go">🇨🇳 Shanghai, CN</div></td>
                                <td class="vg wv ww vl ct">
                                    <div class="flex items-center">
                                        <svg class="o_ sq dd yt af mr-2" viewBox="0 0 16 16">
                                            <path
                                                d="M11.4 0L10 1.4l2 2H8.4c-2.8 0-5 2.2-5 5V12l-2-2L0 11.4l3.7 3.7c.2.2.4.3.7.3.3 0 .5-.1.7-.3l3.7-3.7L7.4 10l-2 2V8.4c0-1.7 1.3-3 3-3H12l-2 2 1.4 1.4 3.7-3.7c.4-.4.4-1 0-1.4L11.4 0z"
                                            ></path>
                                        </svg>
                                        <div>One-time</div>
                                    </div>
                                </td>
                                <td class="vg wv ww vl ct oj">
                                    <div class="flex items-center">
                                        <button class="yt xa a_" :class="{ 'ak': open }" @click.prevent="open = !open" :aria-expanded="open" aria-controls="description-04">
                                            <span class="tc">Menu</span> <svg class="un or dd" viewBox="0 0 32 32"><path d="M16 20l-5.4-5.4 1.4-1.4 4 4 4-4 1.4 1.4z"></path></svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr id="description-04" role="region" x-show="open" x-cloak="">
                                <td colspan="10" class="vg wv ww vl">
                                    <div class="flex items-center hw vr ii">
                                        <svg class="o_ sq af dd yt mr-2">
                                            <path d="M1 16h3c.3 0 .5-.1.7-.3l11-11c.4-.4.4-1 0-1.4l-3-3c-.4-.4-1-.4-1.4 0l-11 11c-.2.2-.3.4-.3.7v3c0 .6.4 1 1 1zm1-3.6l10-10L13.6 4l-10 10H2v-1.6z"></path>
                                        </svg>
                                        <div class="gw">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        <tbody class="text-sm" x-data="{ open: false }">
                            <tr>
                                <td class="vg wv ww vl ct oj">
                                    <div class="flex items-center">
                                        <label class="inline-flex"> <span class="tc">Select</span> <input class="table-item to" type="checkbox" @click="uncheckParent" /> </label>
                                    </div>
                                </td>
                                <td class="vg wv ww vl ct">
                                    <div class="flex items-center text-slate-800">
                                        <div class="ur oi af flex items-center justify-center hp rounded-full mr-2 kq"><img class="rq" src="images/icon-03.svg" width="20" height="20" alt="Icon 03" /></div>
                                        <div class="gm yy">#780044</div>
                                    </div>
                                </td>
                                <td class="vg wv ww vl ct"><div>22/01/2021</div></td>
                                <td class="vg wv ww vl ct"><div class="gm text-slate-800">Cool Robot</div></td>
                                <td class="vg wv ww vl ct"><div class="go gm yf">$39.00</div></td>
                                <td class="vg wv ww vl ct"><div class="inline-flex gm hk yo rounded-full gu vm vh">Refunded</div></td>
                                <td class="vg wv ww vl ct"><div class="gu">1</div></td>
                                <td class="vg wv ww vl ct"><div class="go">🇫🇷 Marseille, FR</div></td>
                                <td class="vg wv ww vl ct">
                                    <div class="flex items-center">
                                        <svg class="o_ sq dd yt af mr-2" viewBox="0 0 16 16">
                                            <path
                                                d="M4.3 4.5c1.9-1.9 5.1-1.9 7 0 .7.7 1.2 1.7 1.4 2.7l2-.3c-.2-1.5-.9-2.8-1.9-3.8C10.1.4 5.7.4 2.9 3.1L.7.9 0 7.3l6.4-.7-2.1-2.1zM15.6 8.7l-6.4.7 2.1 2.1c-1.9 1.9-5.1 1.9-7 0-.7-.7-1.2-1.7-1.4-2.7l-2 .3c.2 1.5.9 2.8 1.9 3.8 1.4 1.4 3.1 2 4.9 2 1.8 0 3.6-.7 4.9-2l2.2 2.2.8-6.4z"
                                            ></path>
                                        </svg>
                                        <div>Subscription</div>
                                    </div>
                                </td>
                                <td class="vg wv ww vl ct oj">
                                    <div class="flex items-center">
                                        <button class="yt xa a_" :class="{ 'ak': open }" @click.prevent="open = !open" :aria-expanded="open" aria-controls="description-05">
                                            <span class="tc">Menu</span> <svg class="un or dd" viewBox="0 0 32 32"><path d="M16 20l-5.4-5.4 1.4-1.4 4 4 4-4 1.4 1.4z"></path></svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr id="description-05" role="region" x-show="open" x-cloak="">
                                <td colspan="10" class="vg wv ww vl">
                                    <div class="flex items-center hw vr ii">
                                        <svg class="o_ sq af dd yt mr-2">
                                            <path d="M1 16h3c.3 0 .5-.1.7-.3l11-11c.4-.4.4-1 0-1.4l-3-3c-.4-.4-1-.4-1.4 0l-11 11c-.2.2-.3.4-.3.7v3c0 .6.4 1 1 1zm1-3.6l10-10L13.6 4l-10 10H2v-1.6z"></path>
                                        </svg>
                                        <div class="gw">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        <tbody class="text-sm" x-data="{ open: false }">
                            <tr>
                                <td class="vg wv ww vl ct oj">
                                    <div class="flex items-center">
                                        <label class="inline-flex"> <span class="tc">Select</span> <input class="table-item to" type="checkbox" @click="uncheckParent" /> </label>
                                    </div>
                                </td>
                                <td class="vg wv ww vl ct">
                                    <div class="flex items-center text-slate-800">
                                        <div class="ur oi af flex items-center justify-center hp rounded-full mr-2 kq"><img class="rq" src="images/icon-01.svg" width="20" height="20" alt="Icon 01" /></div>
                                        <div class="gm yy">#786512</div>
                                    </div>
                                </td>
                                <td class="vg wv ww vl ct"><div>21/01/2021</div></td>
                                <td class="vg wv ww vl ct"><div class="gm text-slate-800">Sergio Gonnelli</div></td>
                                <td class="vg wv ww vl ct"><div class="go gm yf">$59.00</div></td>
                                <td class="vg wv ww vl ct"><div class="inline-flex gm hx yr rounded-full gu vm vh">Approved</div></td>
                                <td class="vg wv ww vl ct"><div class="gu">1</div></td>
                                <td class="vg wv ww vl ct"><div class="go">🇮🇹 Bologna, IT</div></td>
                                <td class="vg wv ww vl ct">
                                    <div class="flex items-center">
                                        <svg class="o_ sq dd yt af mr-2" viewBox="0 0 16 16">
                                            <path
                                                d="M11.4 0L10 1.4l2 2H8.4c-2.8 0-5 2.2-5 5V12l-2-2L0 11.4l3.7 3.7c.2.2.4.3.7.3.3 0 .5-.1.7-.3l3.7-3.7L7.4 10l-2 2V8.4c0-1.7 1.3-3 3-3H12l-2 2 1.4 1.4 3.7-3.7c.4-.4.4-1 0-1.4L11.4 0z"
                                            ></path>
                                        </svg>
                                        <div>One-time</div>
                                    </div>
                                </td>
                                <td class="vg wv ww vl ct oj">
                                    <div class="flex items-center">
                                        <button class="yt xa a_" :class="{ 'ak': open }" @click.prevent="open = !open" :aria-expanded="open" aria-controls="description-06">
                                            <span class="tc">Menu</span> <svg class="un or dd" viewBox="0 0 32 32"><path d="M16 20l-5.4-5.4 1.4-1.4 4 4 4-4 1.4 1.4z"></path></svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr id="description-06" role="region" x-show="open" x-cloak="">
                                <td colspan="10" class="vg wv ww vl">
                                    <div class="flex items-center hw vr ii">
                                        <svg class="o_ sq af dd yt mr-2">
                                            <path d="M1 16h3c.3 0 .5-.1.7-.3l11-11c.4-.4.4-1 0-1.4l-3-3c-.4-.4-1-.4-1.4 0l-11 11c-.2.2-.3.4-.3.7v3c0 .6.4 1 1 1zm1-3.6l10-10L13.6 4l-10 10H2v-1.6z"></path>
                                        </svg>
                                        <div class="gw">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        <tbody class="text-sm" x-data="{ open: false }">
                            <tr>
                                <td class="vg wv ww vl ct oj">
                                    <div class="flex items-center">
                                        <label class="inline-flex"> <span class="tc">Select</span> <input class="table-item to" type="checkbox" @click="uncheckParent" /> </label>
                                    </div>
                                </td>
                                <td class="vg wv ww vl ct">
                                    <div class="flex items-center text-slate-800">
                                        <div class="ur oi af flex items-center justify-center hp rounded-full mr-2 kq"><img class="rq" src="images/icon-03.svg" width="20" height="20" alt="Icon 03" /></div>
                                        <div class="gm yy">#664679</div>
                                    </div>
                                </td>
                                <td class="vg wv ww vl ct"><div>21/01/2021</div></td>
                                <td class="vg wv ww vl ct"><div class="gm text-slate-800">James Gill</div></td>
                                <td class="vg wv ww vl ct"><div class="go gm yf">$89.00</div></td>
                                <td class="vg wv ww vl ct"><div class="inline-flex gm hx yr rounded-full gu vm vh">Approved</div></td>
                                <td class="vg wv ww vl ct"><div class="gu">1</div></td>
                                <td class="vg wv ww vl ct"><div class="go">🇫🇷 Paris, FR</div></td>
                                <td class="vg wv ww vl ct">
                                    <div class="flex items-center">
                                        <svg class="o_ sq dd yt af mr-2" viewBox="0 0 16 16">
                                            <path
                                                d="M4.3 4.5c1.9-1.9 5.1-1.9 7 0 .7.7 1.2 1.7 1.4 2.7l2-.3c-.2-1.5-.9-2.8-1.9-3.8C10.1.4 5.7.4 2.9 3.1L.7.9 0 7.3l6.4-.7-2.1-2.1zM15.6 8.7l-6.4.7 2.1 2.1c-1.9 1.9-5.1 1.9-7 0-.7-.7-1.2-1.7-1.4-2.7l-2 .3c.2 1.5.9 2.8 1.9 3.8 1.4 1.4 3.1 2 4.9 2 1.8 0 3.6-.7 4.9-2l2.2 2.2.8-6.4z"
                                            ></path>
                                        </svg>
                                        <div>Subscription</div>
                                    </div>
                                </td>
                                <td class="vg wv ww vl ct oj">
                                    <div class="flex items-center">
                                        <button class="yt xa a_" :class="{ 'ak': open }" @click.prevent="open = !open" :aria-expanded="open" aria-controls="description-07">
                                            <span class="tc">Menu</span> <svg class="un or dd" viewBox="0 0 32 32"><path d="M16 20l-5.4-5.4 1.4-1.4 4 4 4-4 1.4 1.4z"></path></svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr id="description-07" role="region" x-show="open" x-cloak="">
                                <td colspan="10" class="vg wv ww vl">
                                    <div class="flex items-center hw vr ii">
                                        <svg class="o_ sq af dd yt mr-2">
                                            <path d="M1 16h3c.3 0 .5-.1.7-.3l11-11c.4-.4.4-1 0-1.4l-3-3c-.4-.4-1-.4-1.4 0l-11 11c-.2.2-.3.4-.3.7v3c0 .6.4 1 1 1zm1-3.6l10-10L13.6 4l-10 10H2v-1.6z"></path>
                                        </svg>
                                        <div class="gw">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        <tbody class="text-sm" x-data="{ open: false }">
                            <tr>
                                <td class="vg wv ww vl ct oj">
                                    <div class="flex items-center">
                                        <label class="inline-flex"> <span class="tc">Select</span> <input class="table-item to" type="checkbox" @click="uncheckParent" /> </label>
                                    </div>
                                </td>
                                <td class="vg wv ww vl ct">
                                    <div class="flex items-center text-slate-800">
                                        <div class="ur oi af flex items-center justify-center hp rounded-full mr-2 kq"><img class="rq" src="images/icon-03.svg" width="20" height="20" alt="Icon 03" /></div>
                                        <div class="gm yy">#112467</div>
                                    </div>
                                </td>
                                <td class="vg wv ww vl ct"><div>21/01/2021</div></td>
                                <td class="vg wv ww vl ct"><div class="gm text-slate-800">Alex Brooks</div></td>
                                <td class="vg wv ww vl ct"><div class="go gm yf">$129.00</div></td>
                                <td class="vg wv ww vl ct"><div class="inline-flex gm hx yr rounded-full gu vm vh">Approved</div></td>
                                <td class="vg wv ww vl ct"><div class="gu">2</div></td>
                                <td class="vg wv ww vl ct"><div class="go">🇬🇧 London, UK</div></td>
                                <td class="vg wv ww vl ct">
                                    <div class="flex items-center">
                                        <svg class="o_ sq dd yt af mr-2" viewBox="0 0 16 16">
                                            <path
                                                d="M4.3 4.5c1.9-1.9 5.1-1.9 7 0 .7.7 1.2 1.7 1.4 2.7l2-.3c-.2-1.5-.9-2.8-1.9-3.8C10.1.4 5.7.4 2.9 3.1L.7.9 0 7.3l6.4-.7-2.1-2.1zM15.6 8.7l-6.4.7 2.1 2.1c-1.9 1.9-5.1 1.9-7 0-.7-.7-1.2-1.7-1.4-2.7l-2 .3c.2 1.5.9 2.8 1.9 3.8 1.4 1.4 3.1 2 4.9 2 1.8 0 3.6-.7 4.9-2l2.2 2.2.8-6.4z"
                                            ></path>
                                        </svg>
                                        <div>Subscription</div>
                                    </div>
                                </td>
                                <td class="vg wv ww vl ct oj">
                                    <div class="flex items-center">
                                        <button class="yt xa a_" :class="{ 'ak': open }" @click.prevent="open = !open" :aria-expanded="open" aria-controls="description-08">
                                            <span class="tc">Menu</span> <svg class="un or dd" viewBox="0 0 32 32"><path d="M16 20l-5.4-5.4 1.4-1.4 4 4 4-4 1.4 1.4z"></path></svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr id="description-08" role="region" x-show="open" x-cloak="">
                                <td colspan="10" class="vg wv ww vl">
                                    <div class="flex items-center hw vr ii">
                                        <svg class="o_ sq af dd yt mr-2">
                                            <path d="M1 16h3c.3 0 .5-.1.7-.3l11-11c.4-.4.4-1 0-1.4l-3-3c-.4-.4-1-.4-1.4 0l-11 11c-.2.2-.3.4-.3.7v3c0 .6.4 1 1 1zm1-3.6l10-10L13.6 4l-10 10H2v-1.6z"></path>
                                        </svg>
                                        <div class="gw">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        <tbody class="text-sm" x-data="{ open: false }">
                            <tr>
                                <td class="vg wv ww vl ct oj">
                                    <div class="flex items-center">
                                        <label class="inline-flex"> <span class="tc">Select</span> <input class="table-item to" type="checkbox" @click="uncheckParent" /> </label>
                                    </div>
                                </td>
                                <td class="vg wv ww vl ct">
                                    <div class="flex items-center text-slate-800">
                                        <div class="ur oi af flex items-center justify-center hp rounded-full mr-2 kq"><img class="rq" src="images/icon-02.svg" width="20" height="20" alt="Icon 02" /></div>
                                        <div class="gm yy">#379912</div>
                                    </div>
                                </td>
                                <td class="vg wv ww vl ct"><div>21/01/2021</div></td>
                                <td class="vg wv ww vl ct"><div class="gm text-slate-800">Manuel Garbaya</div></td>
                                <td class="vg wv ww vl ct"><div class="go gm yf">$89.00</div></td>
                                <td class="vg wv ww vl ct"><div class="inline-flex gm hp text-slate-500 rounded-full gu vm vh">Pending</div></td>
                                <td class="vg wv ww vl ct"><div class="gu">2</div></td>
                                <td class="vg wv ww vl ct"><div class="go">🇺🇸 New York, USA</div></td>
                                <td class="vg wv ww vl ct">
                                    <div class="flex items-center">
                                        <svg class="o_ sq dd yt af mr-2" viewBox="0 0 16 16">
                                            <path
                                                d="M11.4 0L10 1.4l2 2H8.4c-2.8 0-5 2.2-5 5V12l-2-2L0 11.4l3.7 3.7c.2.2.4.3.7.3.3 0 .5-.1.7-.3l3.7-3.7L7.4 10l-2 2V8.4c0-1.7 1.3-3 3-3H12l-2 2 1.4 1.4 3.7-3.7c.4-.4.4-1 0-1.4L11.4 0z"
                                            ></path>
                                        </svg>
                                        <div>One-time</div>
                                    </div>
                                </td>
                                <td class="vg wv ww vl ct oj">
                                    <div class="flex items-center">
                                        <button class="yt xa a_" :class="{ 'ak': open }" @click.prevent="open = !open" :aria-expanded="open" aria-controls="description-09">
                                            <span class="tc">Menu</span> <svg class="un or dd" viewBox="0 0 32 32"><path d="M16 20l-5.4-5.4 1.4-1.4 4 4 4-4 1.4 1.4z"></path></svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr id="description-09" role="region" x-show="open" x-cloak="">
                                <td colspan="10" class="vg wv ww vl">
                                    <div class="flex items-center hw vr ii">
                                        <svg class="o_ sq af dd yt mr-2">
                                            <path d="M1 16h3c.3 0 .5-.1.7-.3l11-11c.4-.4.4-1 0-1.4l-3-3c-.4-.4-1-.4-1.4 0l-11 11c-.2.2-.3.4-.3.7v3c0 .6.4 1 1 1zm1-3.6l10-10L13.6 4l-10 10H2v-1.6z"></path>
                                        </svg>
                                        <div class="gw">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        <tbody class="text-sm" x-data="{ open: false }">
                            <tr>
                                <td class="vg wv ww vl ct oj">
                                    <div class="flex items-center">
                                        <label class="inline-flex"> <span class="tc">Select</span> <input class="table-item to" type="checkbox" @click="uncheckParent" /> </label>
                                    </div>
                                </td>
                                <td class="vg wv ww vl ct">
                                    <div class="flex items-center text-slate-800">
                                        <div class="ur oi af flex items-center justify-center hp rounded-full mr-2 kq"><img class="rq" src="images/icon-01.svg" width="20" height="20" alt="Icon 01" /></div>
                                        <div class="gm yy">#664499</div>
                                    </div>
                                </td>
                                <td class="vg wv ww vl ct"><div>21/01/2021</div></td>
                                <td class="vg wv ww vl ct"><div class="gm text-slate-800">Glenn Thomas</div></td>
                                <td class="vg wv ww vl ct"><div class="go gm yf">$59.00</div></td>
                                <td class="vg wv ww vl ct"><div class="inline-flex gm hk yo rounded-full gu vm vh">Refunded</div></td>
                                <td class="vg wv ww vl ct"><div class="gu">1</div></td>
                                <td class="vg wv ww vl ct"><div class="go">🇬🇧 Sheffield, UK</div></td>
                                <td class="vg wv ww vl ct">
                                    <div class="flex items-center">
                                        <svg class="o_ sq dd yt af mr-2" viewBox="0 0 16 16">
                                            <path
                                                d="M4.3 4.5c1.9-1.9 5.1-1.9 7 0 .7.7 1.2 1.7 1.4 2.7l2-.3c-.2-1.5-.9-2.8-1.9-3.8C10.1.4 5.7.4 2.9 3.1L.7.9 0 7.3l6.4-.7-2.1-2.1zM15.6 8.7l-6.4.7 2.1 2.1c-1.9 1.9-5.1 1.9-7 0-.7-.7-1.2-1.7-1.4-2.7l-2 .3c.2 1.5.9 2.8 1.9 3.8 1.4 1.4 3.1 2 4.9 2 1.8 0 3.6-.7 4.9-2l2.2 2.2.8-6.4z"
                                            ></path>
                                        </svg>
                                        <div>Subscription</div>
                                    </div>
                                </td>
                                <td class="vg wv ww vl ct oj">
                                    <div class="flex items-center">
                                        <button class="yt xa a_" :class="{ 'ak': open }" @click.prevent="open = !open" :aria-expanded="open" aria-controls="description-10">
                                            <span class="tc">Menu</span> <svg class="un or dd" viewBox="0 0 32 32"><path d="M16 20l-5.4-5.4 1.4-1.4 4 4 4-4 1.4 1.4z"></path></svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr id="description-10" role="region" x-show="open" x-cloak="">
                                <td colspan="10" class="vg wv ww vl">
                                    <div class="flex items-center hw vr ii">
                                        <svg class="o_ sq af dd yt mr-2" viewBox="0 0 16 16">
                                            <path d="M1 16h3c.3 0 .5-.1.7-.3l11-11c.4-.4.4-1 0-1.4l-3-3c-.4-.4-1-.4-1.4 0l-11 11c-.2.2-.3.4-.3.7v3c0 .6.4 1 1 1zm1-3.6l10-10L13.6 4l-10 10H2v-1.6z"></path>
                                        </svg>
                                        <div class="gw">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                                    </div>
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
@endsection