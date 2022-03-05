@extends('layouts.admin.app')
@section('contents')
<div class="va jn teb vf ox uz ri">
    <!-- Page header -->
    <div class="ry">
        <h1 class="gc zc text-slate-800 font-bold">Accordion ✨</h1>
    </div>

    <div class="cg border-slate-200">
        <!-- Components -->
        <div class="ln ie">
            <!-- Basic Accordion -->
            <div>
                <h2 class="gc text-slate-800 font-bold rb">Basic Accordion</h2>
                <!-- Start -->
                <div class="v_ vj rounded-sm border border-slate-200" x-data="{ open: false }">
                    <button class="flex items-center fh ox kr rx" @click.prevent="open = !open" :aria-expanded="open">
                        <div class="text-sm text-slate-800 gm">Accordion Title</div>
                        <svg class="un or af dd yt ks ml-3" :class="{ 'ak': open }" viewBox="0 0 32 32">
                            <path d="M16 20l-5.4-5.4 1.4-1.4 4 4 4-4 1.4 1.4z"></path>
                        </svg>
                    </button>
                    <div class="text-sm" x-show="open" x-cloak="">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis. Ut enim ad minim veniam quis. Lorem ipsum
                        dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </div>
                </div>
                <!-- End -->
            </div>

            <!-- Table Row with Accordion -->
            <div>
                <h2 class="gc text-slate-800 font-bold rb">Table Row with Accordion</h2>
                <!-- Start -->
                <div class="rounded-sm border border-slate-200">
                    <div class="lx">
                        <table class="ac ox lh ld">
                            <!-- Table body -->
                            <tbody class="text-sm" x-data="{ open: false }">
                                <!-- Row -->
                                <tr>
                                    <td class="vg wv ww vl ct">
                                        <div class="flex items-center text-slate-800">
                                            <div class="ur oi af flex items-center justify-center hp rounded-full mr-2 kq">
                                                <img class="rounded-full rq" src="images/user-40-07.jpg" width="40" height="40" alt="User 01" />
                                            </div>
                                            <div class="gm text-slate-800">Mark Cameron</div>
                                        </div>
                                    </td>
                                    <td class="vg wv ww vl ct">
                                        <div class="go gm yf">$129.00</div>
                                    </td>
                                    <td class="vg wv ww vl ct">
                                        <div class="inline-flex gm hk yo rounded-full gu vm vh">Refunded</div>
                                    </td>
                                    <td class="vg wv ww vl ct">
                                        <div class="gu">1</div>
                                    </td>
                                    <td class="vg wv ww vl ct">
                                        <div class="go">🇲🇽 New Mexico, MX</div>
                                    </td>
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
                                                <span class="tc">Menu</span>
                                                <svg class="un or dd" viewBox="0 0 32 32">
                                                    <path d="M16 20l-5.4-5.4 1.4-1.4 4 4 4-4 1.4 1.4z"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <!--
                            Example of content revealing when clicking the button on the right side:
                            Note that you must set a "colspan" attribute on the <td> element,
                            and it should match the number of columns in your table
                            -->
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
                        </table>
                    </div>
                </div>
                <!-- End -->
            </div>

            <!-- Rich Table Row with Accordion -->
            <div>
                <h2 class="gc text-slate-800 font-bold rb">Rich Table Row with Accordion</h2>
                <!-- Start -->
                <div class="rounded-sm border border-slate-200">
                    <div class="lx">
                        <table class="ac ox lh ld">
                            <!-- Table body -->
                            <tbody class="text-sm" x-data="{ open: false }">
                                <!-- Row -->
                                <tr>
                                    <td class="vg wv ww vl ct">
                                        <div class="flex items-center text-slate-800">
                                            <div class="ur oi af flex items-center justify-center hp rounded-full mr-2 kq">
                                                <img class="rounded-full rq" src="images/user-40-07.jpg" width="40" height="40" alt="User 01" />
                                            </div>
                                            <div class="gm text-slate-800">Mark Cameron</div>
                                        </div>
                                    </td>
                                    <td class="vg wv ww vl ct">
                                        <div class="go">mark.cameron@app.com</div>
                                    </td>
                                    <td class="vg wv ww vl ct">
                                        <div class="go">🇬🇧 London, UK</div>
                                    </td>
                                    <td class="vg wv ww vl ct">
                                        <div class="go">22/01/2021</div>
                                    </td>
                                    <td class="vg wv ww vl ct">
                                        <div class="go yf gm">+249.88</div>
                                    </td>
                                    <td class="vg wv ww vl ct oj">
                                        <div class="flex items-center">
                                            <button class="yt xa a_" :class="{ 'ak': open }" @click.prevent="open = !open" :aria-expanded="open" aria-controls="description-01">
                                                <span class="tc">Menu</span>
                                                <svg class="un or dd" viewBox="0 0 32 32">
                                                    <path d="M16 20l-5.4-5.4 1.4-1.4 4 4 4-4 1.4 1.4z"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <!--
                            Example of content revealing when clicking the button on the right side:
                            Note that you must set a "colspan" attribute on the <td> element,
                            and it should match the number of columns in your table
                            -->
                                <tr id="description-01" role="region" x-show="open" x-cloak="">
                                    <td colspan="10" class="vg wv ww vl">
                                        <div class="hw vr ii">
                                            <div class="text-sm it">
                                                <div class="gm text-slate-800 rx">Excepteur sint occaecat cupidatat.</div>
                                                <div>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis. Ut enim ad
                                                    minim veniam quis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                </div>
                                            </div>
                                            <button class="btn-xs hd wq ye">Approve</button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- End -->
            </div>
        </div>
    </div>
</div>
@endsection