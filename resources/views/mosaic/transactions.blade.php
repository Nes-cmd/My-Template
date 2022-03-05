@extends('layouts.admin.app')
@section('contents')
<!-- Content -->
<div class="va jn teb vf ox uz ri">
    <!-- Page header -->
    <div class="_u _w _g rw j_">
        <!-- Left: Title -->
        <div class="rw kj">
            <h1 class="gc zc text-slate-800 font-bold">$47,347.09</h1>
        </div>

        <!-- Right: Actions -->
        <div class="sx fr _p fc _b fp">
            <div class="table-items-action hidden">
                <div class="flex items-center">
                    <div class="hidden ttp text-sm gw mr-2 ct"><span class="table-items-count"></span> items selected</div>
                    <button class="btn bg-white border-slate-200 hover--border-slate-300 yi xc">Delete</button>
                </div>
            </div>
            <div class="hidden _s">
                <form class="td">
                    <label for="action-search" class="tc">Search</label> <input id="action-search" class="tn mr xk" type="search" placeholder="Search…" />
                    <button class="tp tm tg kr" type="submit" aria-label="Search">
                        <svg class="o_ sq af dd yt ks ml-3 mr-2" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 14c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7zM7 2C4.243 2 2 4.243 2 7s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5z"></path>
                            <path d="M15.707 14.293L13.314 11.9a8.019 8.019 0 01-1.414 1.414l2.393 2.393a.997.997 0 001.414 0 .999.999 0 000-1.414z"></path>
                        </svg>
                    </button>
                </form>
            </div>
            <button class="btn hd wq ye">Export Transactions</button>
        </div>
    </div>

    <div class="ic">
        <span>Transactions from </span>
        <div class="td inline-flex" x-data="{ open: false }">
            <button class="inline-flex justify-center items-center kr" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open">
                <div class="flex items-center lz">
                    <span class="lz gm text-indigo-500 ka">My Personal Account</span>
                    <svg class="w-3 h-3 af rq dd text-indigo-400" viewBox="0 0 12 12">
                        <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                    </svg>
                </div>
            </button>
            <div
                class="ah nv tp tq tb uw bg-white border border-slate-200 vz rounded bh lw io"
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
                        <a class="gm text-sm gz xl flex items-center vk vx" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">Business Account</a>
                    </li>
                    <li>
                        <a class="gm text-sm gz xl flex items-center vk vx" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">Family Account</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Filters -->
    <div class="ic">
        <ul class="flex flex-wrap -m-1">
            <li class="m-1">
                <button class="inline-flex items-center justify-center text-sm gm gj rounded-full vx vk border ck bd hd ye we wi">View All</button>
            </li>
            <li class="m-1">
                <button class="inline-flex items-center justify-center text-sm gm gj rounded-full vx vk border border-slate-200 hover--border-slate-300 bd bg-white text-slate-500 we wi">Completed</button>
            </li>
            <li class="m-1">
                <button class="inline-flex items-center justify-center text-sm gm gj rounded-full vx vk border border-slate-200 hover--border-slate-300 bd bg-white text-slate-500 we wi">Pending</button>
            </li>
            <li class="m-1">
                <button class="inline-flex items-center justify-center text-sm gm gj rounded-full vx vk border border-slate-200 hover--border-slate-300 bd bg-white text-slate-500 we wi">Canceled</button>
            </li>
        </ul>
    </div>

    <!-- Table -->
    <div class="bg-white">
        <div x-data="handleSelect">
            <div class="lx">
                <table class="ac ox" @click.stop="$dispatch('set-transactionopen', true)">
                    <thead class="gp gg gb text-slate-500 cg cm border-slate-200">
                        <tr>
                            <th class="vg wv ww vl ct oj">
                                <div class="flex items-center">
                                    <label class="inline-flex"> <span class="tc">Select all</span> <input id="parent-checkbox" class="to" type="checkbox" @click="toggleAll" /> </label>
                                </div>
                            </th>
                            <th class="vg wv ww vl ct"><div class="gg go">Counterparty</div></th>
                            <th class="vg wv ww vl ct"><div class="gg go">Payment Date</div></th>
                            <th class="vg wv ww vl ct"><div class="gg go">Status</div></th>
                            <th class="vg wv ww vl ct"><div class="gg ga">Amount</div></th>
                        </tr>
                    </thead>
                    <tbody class="text-sm lh ld cm border-slate-200">
                        <tr>
                            <td class="vg wv ww vl ct oj">
                                <div class="flex items-center">
                                    <label class="inline-flex"> <span class="tc">Select</span> <input class="table-item to" type="checkbox" @click.stop="uncheckParent" /> </label>
                                </div>
                            </td>
                            <td class="vg wv ww vl ct qa">
                                <div class="flex items-center">
                                    <div class="uv ov af mr-2 kq"><img class="uv ov rounded-full" src="images/transactions-image-01.svg" width="36" height="36" alt="Transaction 01" /></div>
                                    <div class="gm text-slate-800">Form Builder CP</div>
                                </div>
                            </td>
                            <td class="vg wv ww vl ct"><div class="go">22/01/2022</div></td>
                            <td class="vg wv ww vl ct">
                                <div class="go"><div class="gp inline-flex gm hp text-slate-500 rounded-full gu vm vk">Pending</div></div>
                            </td>
                            <td class="vg wv ww vl ct oj"><div class="ga be gm">-$1,299.22</div></td>
                        </tr>
                        <tr>
                            <td class="vg wv ww vl ct oj">
                                <div class="flex items-center">
                                    <label class="inline-flex"> <span class="tc">Select</span> <input class="table-item to" type="checkbox" @click.stop="uncheckParent" /> </label>
                                </div>
                            </td>
                            <td class="vg wv ww vl ct qa">
                                <div class="flex items-center">
                                    <div class="uv ov af mr-2 kq"><img class="uv ov rounded-full" src="images/transactions-image-02.svg" width="36" height="36" alt="Transaction 02" /></div>
                                    <div class="gm text-slate-800">Imperial Hotel ****</div>
                                </div>
                            </td>
                            <td class="vg wv ww vl ct"><div class="go">22/01/2022</div></td>
                            <td class="vg wv ww vl ct">
                                <div class="go"><div class="gp inline-flex gm hx yr rounded-full gu vm vk">Completed</div></div>
                            </td>
                            <td class="vg wv ww vl ct oj"><div class="ga be gm">-$1,029.77</div></td>
                        </tr>
                        <tr>
                            <td class="vg wv ww vl ct oj">
                                <div class="flex items-center">
                                    <label class="inline-flex"> <span class="tc">Select</span> <input class="table-item to" type="checkbox" @click.stop="uncheckParent" /> </label>
                                </div>
                            </td>
                            <td class="vg wv ww vl ct qa">
                                <div class="flex items-center">
                                    <div class="uv ov af mr-2 kq"><img class="uv ov rounded-full" src="images/user-36-05.jpg" width="36" height="36" alt="Transaction 03" /></div>
                                    <div class="gm text-slate-800">Aprilynne Pills</div>
                                </div>
                            </td>
                            <td class="vg wv ww vl ct"><div class="go">22/01/2022</div></td>
                            <td class="vg wv ww vl ct">
                                <div class="go"><div class="gp inline-flex gm hp text-slate-500 rounded-full gu vm vk">Pending</div></div>
                            </td>
                            <td class="vg wv ww vl ct oj"><div class="ga yf gm">+$499.99</div></td>
                        </tr>
                        <tr>
                            <td class="vg wv ww vl ct oj">
                                <div class="flex items-center">
                                    <label class="inline-flex"> <span class="tc">Select</span> <input class="table-item to" type="checkbox" @click.stop="uncheckParent" /> </label>
                                </div>
                            </td>
                            <td class="vg wv ww vl ct qa">
                                <div class="flex items-center">
                                    <div class="uv ov af mr-2 kq"><img class="uv ov rounded-full" src="images/transactions-image-03.svg" width="36" height="36" alt="Transaction 03" /></div>
                                    <div class="gm text-slate-800">Google Limited UK</div>
                                </div>
                            </td>
                            <td class="vg wv ww vl ct"><div class="go">22/01/2022</div></td>
                            <td class="vg wv ww vl ct">
                                <div class="go"><div class="gp inline-flex gm hx yr rounded-full gu vm vk">Completed</div></div>
                            </td>
                            <td class="vg wv ww vl ct oj"><div class="ga be gm">-$1,029.77</div></td>
                        </tr>
                        <tr>
                            <td class="vg wv ww vl ct oj">
                                <div class="flex items-center">
                                    <label class="inline-flex"> <span class="tc">Select</span> <input class="table-item to" type="checkbox" @click.stop="uncheckParent" /> </label>
                                </div>
                            </td>
                            <td class="vg wv ww vl ct qa">
                                <div class="flex items-center">
                                    <div class="uv ov af mr-2 kq"><img class="uv ov rounded-full" src="images/transactions-image-04.svg" width="36" height="36" alt="Transaction 04" /></div>
                                    <div class="gm text-slate-800">Acme LTD UK</div>
                                </div>
                            </td>
                            <td class="vg wv ww vl ct"><div class="go">22/01/2022</div></td>
                            <td class="vg wv ww vl ct">
                                <div class="go"><div class="gp inline-flex gm hp text-slate-500 rounded-full gu vm vk">Pending</div></div>
                            </td>
                            <td class="vg wv ww vl ct oj"><div class="ga yf gm">+$2,179.36</div></td>
                        </tr>
                        <tr>
                            <td class="vg wv ww vl ct oj">
                                <div class="flex items-center">
                                    <label class="inline-flex"> <span class="tc">Select</span> <input class="table-item to" type="checkbox" @click.stop="uncheckParent" /> </label>
                                </div>
                            </td>
                            <td class="vg wv ww vl ct qa">
                                <div class="flex items-center">
                                    <div class="uv ov af mr-2 kq"><img class="uv ov rounded-full" src="images/transactions-image-03.svg" width="36" height="36" alt="Transaction 03" /></div>
                                    <div class="gm text-slate-800">Google Limited UK</div>
                                </div>
                            </td>
                            <td class="vg wv ww vl ct"><div class="go">22/01/2022</div></td>
                            <td class="vg wv ww vl ct">
                                <div class="go"><div class="gp inline-flex gm h_ yi rounded-full gu vm vk">Canceled</div></div>
                            </td>
                            <td class="vg wv ww vl ct oj"><div class="ga be gm">-$1,029.77</div></td>
                        </tr>
                        <tr>
                            <td class="vg wv ww vl ct oj">
                                <div class="flex items-center">
                                    <label class="inline-flex"> <span class="tc">Select</span> <input class="table-item to" type="checkbox" @click.stop="uncheckParent" /> </label>
                                </div>
                            </td>
                            <td class="vg wv ww vl ct qa">
                                <div class="flex items-center">
                                    <div class="uv ov af mr-2 kq"><img class="uv ov rounded-full" src="images/transactions-image-05.svg" width="36" height="36" alt="Transaction 05" /></div>
                                    <div class="gm text-slate-800">Uber</div>
                                </div>
                            </td>
                            <td class="vg wv ww vl ct"><div class="go">22/01/2022</div></td>
                            <td class="vg wv ww vl ct">
                                <div class="go"><div class="gp inline-flex gm hx yr rounded-full gu vm vk">Completed</div></div>
                            </td>
                            <td class="vg wv ww vl ct oj"><div class="ga be gm">-$272.88</div></td>
                        </tr>
                        <tr>
                            <td class="vg wv ww vl ct oj">
                                <div class="flex items-center">
                                    <label class="inline-flex"> <span class="tc">Select</span> <input class="table-item to" type="checkbox" @click.stop="uncheckParent" /> </label>
                                </div>
                            </td>
                            <td class="vg wv ww vl ct qa">
                                <div class="flex items-center">
                                    <div class="uv ov af mr-2 kq"><img class="uv ov rounded-full" src="images/transactions-image-06.svg" width="36" height="36" alt="Transaction 06" /></div>
                                    <div class="gm text-slate-800">PublicOne Inc.</div>
                                </div>
                            </td>
                            <td class="vg wv ww vl ct"><div class="go">22/01/2022</div></td>
                            <td class="vg wv ww vl ct">
                                <div class="go"><div class="gp inline-flex gm hx yr rounded-full gu vm vk">Completed</div></div>
                            </td>
                            <td class="vg wv ww vl ct oj"><div class="ga be gm">-$199.87</div></td>
                        </tr>
                        <tr>
                            <td class="vg wv ww vl ct oj">
                                <div class="flex items-center">
                                    <label class="inline-flex"> <span class="tc">Select</span> <input class="table-item to" type="checkbox" @click.stop="uncheckParent" /> </label>
                                </div>
                            </td>
                            <td class="vg wv ww vl ct qa">
                                <div class="flex items-center">
                                    <div class="uv ov af mr-2 kq"><img class="uv ov rounded-full" src="images/transactions-image-07.svg" width="36" height="36" alt="Transaction 07" /></div>
                                    <div class="gm text-slate-800">Github Inc.</div>
                                </div>
                            </td>
                            <td class="vg wv ww vl ct"><div class="go">22/01/2022</div></td>
                            <td class="vg wv ww vl ct">
                                <div class="go"><div class="gp inline-flex gm hx yr rounded-full gu vm vk">Completed</div></div>
                            </td>
                            <td class="vg wv ww vl ct oj"><div class="ga be gm">-$42.87</div></td>
                        </tr>
                        <tr>
                            <td class="vg wv ww vl ct oj">
                                <div class="flex items-center">
                                    <label class="inline-flex"> <span class="tc">Select</span> <input class="table-item to" type="checkbox" @click.stop="uncheckParent" /> </label>
                                </div>
                            </td>
                            <td class="vg wv ww vl ct qa">
                                <div class="flex items-center">
                                    <div class="uv ov af mr-2 kq"><img class="uv ov rounded-full" src="images/transactions-image-08.svg" width="36" height="36" alt="Transaction 07" /></div>
                                    <div class="gm text-slate-800">Form Builder PRO</div>
                                </div>
                            </td>
                            <td class="vg wv ww vl ct"><div class="go">22/01/2022</div></td>
                            <td class="vg wv ww vl ct">
                                <div class="go"><div class="gp inline-flex gm hx yr rounded-full gu vm vk">Completed</div></div>
                            </td>
                            <td class="vg wv ww vl ct oj"><div class="ga be gm">-$112.44</div></td>
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