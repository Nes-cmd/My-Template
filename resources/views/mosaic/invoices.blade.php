@extends('layouts.admin.app')
@section('contents')
<div class="va jn teb vf ox uz ri">
        <!-- Page header -->
        <div class="_u _w _g ic">
            <!-- Left: Title -->
            <div class="rw kj">
                <h1 class="gc zc text-slate-800 font-bold">Invoices ✨</h1>
            </div>

            <!-- Right: Actions -->
            <div class="sx fr _p fc _b fp">
                <form class="td">
                    <label for="action-search" class="tc">Search</label> <input id="action-search" class="tn mr xk" type="search" placeholder="Search by invoice ID…" />
                    <button class="tp tm tg kr" type="submit" aria-label="Search">
                        <svg class="o_ sq af dd yt ks ml-3 mr-2" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 14c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7zM7 2C4.243 2 2 4.243 2 7s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5z"></path>
                            <path d="M15.707 14.293L13.314 11.9a8.019 8.019 0 01-1.414 1.414l2.393 2.393a.997.997 0 001.414 0 .999.999 0 000-1.414z"></path>
                        </svg>
                    </button>
                </form>
                <button class="btn hd wq ye">
                    <svg class="o_ sq dd bo af" viewBox="0 0 16 16"><path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"></path></svg>
                    <span class="hidden tnm r_">Create Invoice</span>
                </button>
            </div>
        </div>

        <!-- More actions -->
        <div class="_u _w _g ic">
            <!-- Left side -->
            <div class="rw kj">
                <ul class="flex flex-wrap -m-1">
                    <li class="m-1">
                        <button class="inline-flex items-center justify-center text-sm gm gj rounded-full vx vk border ck bd hd ye we wi">All <span class="rq text-indigo-200">67</span></button>
                    </li>
                    <li class="m-1">
                        <button class="inline-flex items-center justify-center text-sm gm gj rounded-full vx vk border border-slate-200 hover--border-slate-300 bd bg-white text-slate-500 we wi">
                            Paid <span class="rq yt">14</span>
                        </button>
                    </li>
                    <li class="m-1">
                        <button class="inline-flex items-center justify-center text-sm gm gj rounded-full vx vk border border-slate-200 hover--border-slate-300 bd bg-white text-slate-500 we wi">
                            Due <span class="rq yt">34</span>
                        </button>
                    </li>
                    <li class="m-1">
                        <button class="inline-flex items-center justify-center text-sm gm gj rounded-full vx vk border border-slate-200 hover--border-slate-300 bd bg-white text-slate-500 we wi">
                            Overdue <span class="rq yt">19</span>
                        </button>
                    </li>
                </ul>
            </div>

            <!-- Right side -->
            <div class="sx fr _p fc _b fp">
                <!-- Delete button -->
                <div class="table-items-action hidden">
                    <div class="flex items-center">
                        <div class="hidden ttp text-sm gw mr-2 ct"><span class="table-items-count"></span> items selected</div>
                        <button class="btn bg-white border-slate-200 hover--border-slate-300 yi xc">Delete</button>
                    </div>
                </div>

                <!-- Dropdown -->
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
                        <svg class="af rq dd yt" width="11" height="7" viewBox="0 0 11 7">
                            <path d="M5.4 6.8L0 1.4 1.4 0l4 4 4-4 1.4 1.4z"></path>
                        </svg>
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

                <!-- Filter button -->
                <div class="td inline-flex">
                    <button class="btn bg-white border-slate-200 hover--border-slate-300 text-slate-500 hover--text-slate-600">
                        <span class="tc">Filter</span><wbr />
                        <svg class="o_ sq dd" viewBox="0 0 16 16">
                            <path d="M9 15H7a1 1 0 010-2h2a1 1 0 010 2zM11 11H5a1 1 0 010-2h6a1 1 0 010 2zM13 7H3a1 1 0 010-2h10a1 1 0 010 2zM15 3H1a1 1 0 010-2h14a1 1 0 010 2z"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Table -->
        <div class="bg-white bh rounded-sm border border-slate-200 ry">
            <header class="v_ vj">
                <h2 class="gg text-slate-800">Invoices <span class="yt gm">67</span></h2>
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
                                <th class="vg wv ww vl ct"><div class="gg go">Invoice</div></th>
                                <th class="vg wv ww vl ct"><div class="gg go">Total</div></th>
                                <th class="vg wv ww vl ct"><div class="gg go">Status</div></th>
                                <th class="vg wv ww vl ct"><div class="gg go">Customer</div></th>
                                <th class="vg wv ww vl ct"><div class="gg go">Issued on</div></th>
                                <th class="vg wv ww vl ct"><div class="gg go">Paid on</div></th>
                                <th class="vg wv ww vl ct"><div class="gg go">Type</div></th>
                                <th class="vg wv ww vl ct"><div class="gg go">Actions</div></th>
                            </tr>
                        </thead>
                        <tbody class="text-sm lh ld">
                            <tr>
                                <td class="vg wv ww vl ct oj">
                                    <div class="flex items-center">
                                        <label class="inline-flex"> <span class="tc">Select</span> <input class="table-item to" type="checkbox" @click="uncheckParent" /> </label>
                                    </div>
                                </td>
                                <td class="vg wv ww vl ct"><div class="gm yy">#143567</div></td>
                                <td class="vg wv ww vl ct"><div class="gm yi">$129.00</div></td>
                                <td class="vg wv ww vl ct"><div class="inline-flex gm h_ yi rounded-full gu vm vh">Overdue</div></td>
                                <td class="vg wv ww vl ct"><div class="gm text-slate-800">Dominik Lamakani</div></td>
                                <td class="vg wv ww vl ct"><div>22/07/2021</div></td>
                                <td class="vg wv ww vl ct"><div>-</div></td>
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
                                    <div class="lf">
                                        <button class="yt xa rounded-full">
                                            <span class="tc">Edit</span>
                                            <svg class="un or dd" viewBox="0 0 32 32">
                                                <path
                                                    d="M19.7 8.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM12.6 22H10v-2.6l6-6 2.6 2.6-6 6zm7.4-7.4L17.4 12l1.6-1.6 2.6 2.6-1.6 1.6z"
                                                ></path>
                                            </svg>
                                        </button>
                                        <button class="yt xa rounded-full">
                                            <span class="tc">Download</span>
                                            <svg class="un or dd" viewBox="0 0 32 32"><path d="M16 20c.3 0 .5-.1.7-.3l5.7-5.7-1.4-1.4-4 4V8h-2v8.6l-4-4L9.6 14l5.7 5.7c.2.2.4.3.7.3zM9 22h14v2H9z"></path></svg>
                                        </button>
                                        <button class="yi xc rounded-full">
                                            <span class="tc">Delete</span>
                                            <svg class="un or dd" viewBox="0 0 32 32">
                                                <path d="M13 15h2v6h-2zM17 15h2v6h-2z"></path>
                                                <path d="M20 9c0-.6-.4-1-1-1h-6c-.6 0-1 .4-1 1v2H8v2h1v10c0 .6.4 1 1 1h12c.6 0 1-.4 1-1V13h1v-2h-4V9zm-6 1h4v1h-4v-1zm7 3v9H11v-9h10z"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="vg wv ww vl ct oj">
                                    <div class="flex items-center">
                                        <label class="inline-flex"> <span class="tc">Select</span> <input class="table-item to" type="checkbox" @click="uncheckParent" /> </label>
                                    </div>
                                </td>
                                <td class="vg wv ww vl ct"><div class="gm yy">#143536</div></td>
                                <td class="vg wv ww vl ct"><div class="gm yf">$59.00</div></td>
                                <td class="vg wv ww vl ct"><div class="inline-flex gm hx yr rounded-full gu vm vh">Paid</div></td>
                                <td class="vg wv ww vl ct"><div class="gm text-slate-800">Mark Cameron</div></td>
                                <td class="vg wv ww vl ct"><div>19/07/2021</div></td>
                                <td class="vg wv ww vl ct"><div>20/07/2021</div></td>
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
                                    <div class="lf">
                                        <button class="yt xa rounded-full">
                                            <span class="tc">Edit</span>
                                            <svg class="un or dd" viewBox="0 0 32 32">
                                                <path
                                                    d="M19.7 8.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM12.6 22H10v-2.6l6-6 2.6 2.6-6 6zm7.4-7.4L17.4 12l1.6-1.6 2.6 2.6-1.6 1.6z"
                                                ></path>
                                            </svg>
                                        </button>
                                        <button class="yt xa rounded-full">
                                            <span class="tc">Download</span>
                                            <svg class="un or dd" viewBox="0 0 32 32"><path d="M16 20c.3 0 .5-.1.7-.3l5.7-5.7-1.4-1.4-4 4V8h-2v8.6l-4-4L9.6 14l5.7 5.7c.2.2.4.3.7.3zM9 22h14v2H9z"></path></svg>
                                        </button>
                                        <button class="yi xc rounded-full">
                                            <span class="tc">Delete</span>
                                            <svg class="un or dd" viewBox="0 0 32 32">
                                                <path d="M13 15h2v6h-2zM17 15h2v6h-2z"></path>
                                                <path d="M20 9c0-.6-.4-1-1-1h-6c-.6 0-1 .4-1 1v2H8v2h1v10c0 .6.4 1 1 1h12c.6 0 1-.4 1-1V13h1v-2h-4V9zm-6 1h4v1h-4v-1zm7 3v9H11v-9h10z"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="vg wv ww vl ct oj">
                                    <div class="flex items-center">
                                        <label class="inline-flex"> <span class="tc">Select</span> <input class="table-item to" type="checkbox" @click="uncheckParent" /> </label>
                                    </div>
                                </td>
                                <td class="vg wv ww vl ct"><div class="gm yy">#143599</div></td>
                                <td class="vg wv ww vl ct"><div class="gm yf">$89.00</div></td>
                                <td class="vg wv ww vl ct"><div class="inline-flex gm hx yr rounded-full gu vm vh">Paid</div></td>
                                <td class="vg wv ww vl ct"><div class="gm text-slate-800">Sergio Gonnelli</div></td>
                                <td class="vg wv ww vl ct"><div>17/07/2021</div></td>
                                <td class="vg wv ww vl ct"><div>19/07/2021</div></td>
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
                                    <div class="lf">
                                        <button class="yt xa rounded-full">
                                            <span class="tc">Edit</span>
                                            <svg class="un or dd" viewBox="0 0 32 32">
                                                <path
                                                    d="M19.7 8.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM12.6 22H10v-2.6l6-6 2.6 2.6-6 6zm7.4-7.4L17.4 12l1.6-1.6 2.6 2.6-1.6 1.6z"
                                                ></path>
                                            </svg>
                                        </button>
                                        <button class="yt xa rounded-full">
                                            <span class="tc">Download</span>
                                            <svg class="un or dd" viewBox="0 0 32 32"><path d="M16 20c.3 0 .5-.1.7-.3l5.7-5.7-1.4-1.4-4 4V8h-2v8.6l-4-4L9.6 14l5.7 5.7c.2.2.4.3.7.3zM9 22h14v2H9z"></path></svg>
                                        </button>
                                        <button class="yi xc rounded-full">
                                            <span class="tc">Delete</span>
                                            <svg class="un or dd" viewBox="0 0 32 32">
                                                <path d="M13 15h2v6h-2zM17 15h2v6h-2z"></path>
                                                <path d="M20 9c0-.6-.4-1-1-1h-6c-.6 0-1 .4-1 1v2H8v2h1v10c0 .6.4 1 1 1h12c.6 0 1-.4 1-1V13h1v-2h-4V9zm-6 1h4v1h-4v-1zm7 3v9H11v-9h10z"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="vg wv ww vl ct oj">
                                    <div class="flex items-center">
                                        <label class="inline-flex"> <span class="tc">Select</span> <input class="table-item to" type="checkbox" @click="uncheckParent" /> </label>
                                    </div>
                                </td>
                                <td class="vg wv ww vl ct"><div class="gm yy">#143567</div></td>
                                <td class="vg wv ww vl ct"><div class="gm yl">$129.00</div></td>
                                <td class="vg wv ww vl ct"><div class="inline-flex gm hk yo rounded-full gu vm vh">Due</div></td>
                                <td class="vg wv ww vl ct"><div class="gm text-slate-800">Manuel Garbaya</div></td>
                                <td class="vg wv ww vl ct"><div>04/07/2021</div></td>
                                <td class="vg wv ww vl ct"><div>-</div></td>
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
                                    <div class="lf">
                                        <button class="yt xa rounded-full">
                                            <span class="tc">Edit</span>
                                            <svg class="un or dd" viewBox="0 0 32 32">
                                                <path
                                                    d="M19.7 8.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM12.6 22H10v-2.6l6-6 2.6 2.6-6 6zm7.4-7.4L17.4 12l1.6-1.6 2.6 2.6-1.6 1.6z"
                                                ></path>
                                            </svg>
                                        </button>
                                        <button class="yt xa rounded-full">
                                            <span class="tc">Download</span>
                                            <svg class="un or dd" viewBox="0 0 32 32"><path d="M16 20c.3 0 .5-.1.7-.3l5.7-5.7-1.4-1.4-4 4V8h-2v8.6l-4-4L9.6 14l5.7 5.7c.2.2.4.3.7.3zM9 22h14v2H9z"></path></svg>
                                        </button>
                                        <button class="yi xc rounded-full">
                                            <span class="tc">Delete</span>
                                            <svg class="un or dd" viewBox="0 0 32 32">
                                                <path d="M13 15h2v6h-2zM17 15h2v6h-2z"></path>
                                                <path d="M20 9c0-.6-.4-1-1-1h-6c-.6 0-1 .4-1 1v2H8v2h1v10c0 .6.4 1 1 1h12c.6 0 1-.4 1-1V13h1v-2h-4V9zm-6 1h4v1h-4v-1zm7 3v9H11v-9h10z"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="vg wv ww vl ct oj">
                                    <div class="flex items-center">
                                        <label class="inline-flex"> <span class="tc">Select</span> <input class="table-item to" type="checkbox" @click="uncheckParent" /> </label>
                                    </div>
                                </td>
                                <td class="vg wv ww vl ct"><div class="gm yy">#143636</div></td>
                                <td class="vg wv ww vl ct"><div class="gm yl">$129.00</div></td>
                                <td class="vg wv ww vl ct"><div class="inline-flex gm hk yo rounded-full gu vm vh">Due</div></td>
                                <td class="vg wv ww vl ct"><div class="gm text-slate-800">Cool Robot</div></td>
                                <td class="vg wv ww vl ct"><div>04/07/2021</div></td>
                                <td class="vg wv ww vl ct"><div>-</div></td>
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
                                    <div class="lf">
                                        <button class="yt xa rounded-full">
                                            <span class="tc">Edit</span>
                                            <svg class="un or dd" viewBox="0 0 32 32">
                                                <path
                                                    d="M19.7 8.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM12.6 22H10v-2.6l6-6 2.6 2.6-6 6zm7.4-7.4L17.4 12l1.6-1.6 2.6 2.6-1.6 1.6z"
                                                ></path>
                                            </svg>
                                        </button>
                                        <button class="yt xa rounded-full">
                                            <span class="tc">Download</span>
                                            <svg class="un or dd" viewBox="0 0 32 32"><path d="M16 20c.3 0 .5-.1.7-.3l5.7-5.7-1.4-1.4-4 4V8h-2v8.6l-4-4L9.6 14l5.7 5.7c.2.2.4.3.7.3zM9 22h14v2H9z"></path></svg>
                                        </button>
                                        <button class="yi xc rounded-full">
                                            <span class="tc">Delete</span>
                                            <svg class="un or dd" viewBox="0 0 32 32">
                                                <path d="M13 15h2v6h-2zM17 15h2v6h-2z"></path>
                                                <path d="M20 9c0-.6-.4-1-1-1h-6c-.6 0-1 .4-1 1v2H8v2h1v10c0 .6.4 1 1 1h12c.6 0 1-.4 1-1V13h1v-2h-4V9zm-6 1h4v1h-4v-1zm7 3v9H11v-9h10z"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="vg wv ww vl ct oj">
                                    <div class="flex items-center">
                                        <label class="inline-flex"> <span class="tc">Select</span> <input class="table-item to" type="checkbox" @click="uncheckParent" /> </label>
                                    </div>
                                </td>
                                <td class="vg wv ww vl ct"><div class="gm yy">#143535</div></td>
                                <td class="vg wv ww vl ct"><div class="gm yf">$129.00</div></td>
                                <td class="vg wv ww vl ct"><div class="inline-flex gm hx yr rounded-full gu vm vh">Paid</div></td>
                                <td class="vg wv ww vl ct"><div class="gm text-slate-800">Mark Cameron</div></td>
                                <td class="vg wv ww vl ct"><div>04/07/2021</div></td>
                                <td class="vg wv ww vl ct"><div>09/07/2021</div></td>
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
                                    <div class="lf">
                                        <button class="yt xa rounded-full">
                                            <span class="tc">Edit</span>
                                            <svg class="un or dd" viewBox="0 0 32 32">
                                                <path
                                                    d="M19.7 8.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM12.6 22H10v-2.6l6-6 2.6 2.6-6 6zm7.4-7.4L17.4 12l1.6-1.6 2.6 2.6-1.6 1.6z"
                                                ></path>
                                            </svg>
                                        </button>
                                        <button class="yt xa rounded-full">
                                            <span class="tc">Download</span>
                                            <svg class="un or dd" viewBox="0 0 32 32"><path d="M16 20c.3 0 .5-.1.7-.3l5.7-5.7-1.4-1.4-4 4V8h-2v8.6l-4-4L9.6 14l5.7 5.7c.2.2.4.3.7.3zM9 22h14v2H9z"></path></svg>
                                        </button>
                                        <button class="yi xc rounded-full">
                                            <span class="tc">Delete</span>
                                            <svg class="un or dd" viewBox="0 0 32 32">
                                                <path d="M13 15h2v6h-2zM17 15h2v6h-2z"></path>
                                                <path d="M20 9c0-.6-.4-1-1-1h-6c-.6 0-1 .4-1 1v2H8v2h1v10c0 .6.4 1 1 1h12c.6 0 1-.4 1-1V13h1v-2h-4V9zm-6 1h4v1h-4v-1zm7 3v9H11v-9h10z"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="vg wv ww vl ct oj">
                                    <div class="flex items-center">
                                        <label class="inline-flex"> <span class="tc">Select</span> <input class="table-item to" type="checkbox" @click="uncheckParent" /> </label>
                                    </div>
                                </td>
                                <td class="vg wv ww vl ct"><div class="gm yy">#143523</div></td>
                                <td class="vg wv ww vl ct"><div class="gm yf">$69.00</div></td>
                                <td class="vg wv ww vl ct"><div class="inline-flex gm hx yr rounded-full gu vm vh">Paid</div></td>
                                <td class="vg wv ww vl ct"><div class="gm text-slate-800">Glenn Thomas</div></td>
                                <td class="vg wv ww vl ct"><div>01/07/2021</div></td>
                                <td class="vg wv ww vl ct"><div>01/07/2021</div></td>
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
                                    <div class="lf">
                                        <button class="yt xa rounded-full">
                                            <span class="tc">Edit</span>
                                            <svg class="un or dd" viewBox="0 0 32 32">
                                                <path
                                                    d="M19.7 8.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM12.6 22H10v-2.6l6-6 2.6 2.6-6 6zm7.4-7.4L17.4 12l1.6-1.6 2.6 2.6-1.6 1.6z"
                                                ></path>
                                            </svg>
                                        </button>
                                        <button class="yt xa rounded-full">
                                            <span class="tc">Download</span>
                                            <svg class="un or dd" viewBox="0 0 32 32"><path d="M16 20c.3 0 .5-.1.7-.3l5.7-5.7-1.4-1.4-4 4V8h-2v8.6l-4-4L9.6 14l5.7 5.7c.2.2.4.3.7.3zM9 22h14v2H9z"></path></svg>
                                        </button>
                                        <button class="yi xc rounded-full">
                                            <span class="tc">Delete</span>
                                            <svg class="un or dd" viewBox="0 0 32 32">
                                                <path d="M13 15h2v6h-2zM17 15h2v6h-2z"></path>
                                                <path d="M20 9c0-.6-.4-1-1-1h-6c-.6 0-1 .4-1 1v2H8v2h1v10c0 .6.4 1 1 1h12c.6 0 1-.4 1-1V13h1v-2h-4V9zm-6 1h4v1h-4v-1zm7 3v9H11v-9h10z"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="vg wv ww vl ct oj">
                                    <div class="flex items-center">
                                        <label class="inline-flex"> <span class="tc">Select</span> <input class="table-item to" type="checkbox" @click="uncheckParent" /> </label>
                                    </div>
                                </td>
                                <td class="vg wv ww vl ct"><div class="gm yy">#143567</div></td>
                                <td class="vg wv ww vl ct"><div class="gm yi">$129.00</div></td>
                                <td class="vg wv ww vl ct"><div class="inline-flex gm h_ yi rounded-full gu vm vh">Overdue</div></td>
                                <td class="vg wv ww vl ct"><div class="gm text-slate-800">Dominik Lamakani</div></td>
                                <td class="vg wv ww vl ct"><div>22/06/2021</div></td>
                                <td class="vg wv ww vl ct"><div>-</div></td>
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
                                    <div class="lf">
                                        <button class="yt xa rounded-full">
                                            <span class="tc">Edit</span>
                                            <svg class="un or dd" viewBox="0 0 32 32">
                                                <path
                                                    d="M19.7 8.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM12.6 22H10v-2.6l6-6 2.6 2.6-6 6zm7.4-7.4L17.4 12l1.6-1.6 2.6 2.6-1.6 1.6z"
                                                ></path>
                                            </svg>
                                        </button>
                                        <button class="yt xa rounded-full">
                                            <span class="tc">Download</span>
                                            <svg class="un or dd" viewBox="0 0 32 32"><path d="M16 20c.3 0 .5-.1.7-.3l5.7-5.7-1.4-1.4-4 4V8h-2v8.6l-4-4L9.6 14l5.7 5.7c.2.2.4.3.7.3zM9 22h14v2H9z"></path></svg>
                                        </button>
                                        <button class="yi xc rounded-full">
                                            <span class="tc">Delete</span>
                                            <svg class="un or dd" viewBox="0 0 32 32">
                                                <path d="M13 15h2v6h-2zM17 15h2v6h-2z"></path>
                                                <path d="M20 9c0-.6-.4-1-1-1h-6c-.6 0-1 .4-1 1v2H8v2h1v10c0 .6.4 1 1 1h12c.6 0 1-.4 1-1V13h1v-2h-4V9zm-6 1h4v1h-4v-1zm7 3v9H11v-9h10z"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="vg wv ww vl ct oj">
                                    <div class="flex items-center">
                                        <label class="inline-flex"> <span class="tc">Select</span> <input class="table-item to" type="checkbox" @click="uncheckParent" /> </label>
                                    </div>
                                </td>
                                <td class="vg wv ww vl ct"><div class="gm yy">#143599</div></td>
                                <td class="vg wv ww vl ct"><div class="gm yf">$89.00</div></td>
                                <td class="vg wv ww vl ct"><div class="inline-flex gm hx yr rounded-full gu vm vh">Paid</div></td>
                                <td class="vg wv ww vl ct"><div class="gm text-slate-800">Brian Halligan</div></td>
                                <td class="vg wv ww vl ct"><div>21/06/2021</div></td>
                                <td class="vg wv ww vl ct"><div>29/06/2021</div></td>
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
                                    <div class="lf">
                                        <button class="yt xa rounded-full">
                                            <span class="tc">Edit</span>
                                            <svg class="un or dd" viewBox="0 0 32 32">
                                                <path
                                                    d="M19.7 8.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM12.6 22H10v-2.6l6-6 2.6 2.6-6 6zm7.4-7.4L17.4 12l1.6-1.6 2.6 2.6-1.6 1.6z"
                                                ></path>
                                            </svg>
                                        </button>
                                        <button class="yt xa rounded-full">
                                            <span class="tc">Download</span>
                                            <svg class="un or dd" viewBox="0 0 32 32"><path d="M16 20c.3 0 .5-.1.7-.3l5.7-5.7-1.4-1.4-4 4V8h-2v8.6l-4-4L9.6 14l5.7 5.7c.2.2.4.3.7.3zM9 22h14v2H9z"></path></svg>
                                        </button>
                                        <button class="yi xc rounded-full">
                                            <span class="tc">Delete</span>
                                            <svg class="un or dd" viewBox="0 0 32 32">
                                                <path d="M13 15h2v6h-2zM17 15h2v6h-2z"></path>
                                                <path d="M20 9c0-.6-.4-1-1-1h-6c-.6 0-1 .4-1 1v2H8v2h1v10c0 .6.4 1 1 1h12c.6 0 1-.4 1-1V13h1v-2h-4V9zm-6 1h4v1h-4v-1zm7 3v9H11v-9h10z"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="vg wv ww vl ct oj">
                                    <div class="flex items-center">
                                        <label class="inline-flex"> <span class="tc">Select</span> <input class="table-item to" type="checkbox" @click="uncheckParent" /> </label>
                                    </div>
                                </td>
                                <td class="vg wv ww vl ct"><div class="gm yy">#143262</div></td>
                                <td class="vg wv ww vl ct"><div class="gm yl">$129.00</div></td>
                                <td class="vg wv ww vl ct"><div class="inline-flex gm hk yo rounded-full gu vm vh">Due</div></td>
                                <td class="vg wv ww vl ct"><div class="gm text-slate-800">Carolyn McNeail</div></td>
                                <td class="vg wv ww vl ct"><div>17/06/2021</div></td>
                                <td class="vg wv ww vl ct"><div>-</div></td>
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
                                    <div class="lf">
                                        <button class="yt xa rounded-full">
                                            <span class="tc">Edit</span>
                                            <svg class="un or dd" viewBox="0 0 32 32">
                                                <path
                                                    d="M19.7 8.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM12.6 22H10v-2.6l6-6 2.6 2.6-6 6zm7.4-7.4L17.4 12l1.6-1.6 2.6 2.6-1.6 1.6z"
                                                ></path>
                                            </svg>
                                        </button>
                                        <button class="yt xa rounded-full">
                                            <span class="tc">Download</span>
                                            <svg class="un or dd" viewBox="0 0 32 32"><path d="M16 20c.3 0 .5-.1.7-.3l5.7-5.7-1.4-1.4-4 4V8h-2v8.6l-4-4L9.6 14l5.7 5.7c.2.2.4.3.7.3zM9 22h14v2H9z"></path></svg>
                                        </button>
                                        <button class="yi xc rounded-full">
                                            <span class="tc">Delete</span>
                                            <svg class="un or dd" viewBox="0 0 32 32">
                                                <path d="M13 15h2v6h-2zM17 15h2v6h-2z"></path>
                                                <path d="M20 9c0-.6-.4-1-1-1h-6c-.6 0-1 .4-1 1v2H8v2h1v10c0 .6.4 1 1 1h12c.6 0 1-.4 1-1V13h1v-2h-4V9zm-6 1h4v1h-4v-1zm7 3v9H11v-9h10z"></path>
                                            </svg>
                                        </button>
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