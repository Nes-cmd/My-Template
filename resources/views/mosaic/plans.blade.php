@extends('layouts.admin.app')
@section('contents')
<div class="va jn teb vf ox uz ri">
    <!-- Page header -->
    <div class="ry">
        <!-- Title -->
        <h1 class="gc zc text-slate-800 font-bold">Account Settings ✨</h1>
    </div>

    <div class="bg-white bh rounded-sm ry">
        <div class="flex fu qm jx">
            <!-- Sidebar -->
            <div class="flex fa lj ta qe zt vx mt cm zi zs border-slate-200 uk ze">
                <div>
                    <div class="gp gg yt gb it">Business settings</div>
                    <ul class="flex fa qe rk jq">
                        <li class="sr jq jz">
                            <a class="flex items-center vm vc rounded ct" :class="settingsPanel === 'account' &amp;&amp; 'po'" href="settings.html">
                                <svg class="o_ sq af dd yt mr-2" :class="settingsPanel === 'account' &amp;&amp; 'text-indigo-400'" viewBox="0 0 16 16">
                                    <path
                                        d="M12.311 9.527c-1.161-.393-1.85-.825-2.143-1.175A3.991 3.991 0 0012 5V4c0-2.206-1.794-4-4-4S4 1.794 4 4v1c0 1.406.732 2.639 1.832 3.352-.292.35-.981.782-2.142 1.175A3.942 3.942 0 001 13.26V16h14v-2.74c0-1.69-1.081-3.19-2.689-3.733zM6 4c0-1.103.897-2 2-2s2 .897 2 2v1c0 1.103-.897 2-2 2s-2-.897-2-2V4zm7 10H3v-.74c0-.831.534-1.569 1.33-1.838 1.845-.624 3-1.436 3.452-2.422h.436c.452.986 1.607 1.798 3.453 2.422A1.943 1.943 0 0113 13.26V14z"
                                    ></path>
                                </svg>
                                <span class="text-sm gm gz" :class="settingsPanel === 'account' ? 'text-indigo-500' : 'xp'">My Account</span>
                            </a>
                        </li>
                        <li class="sr jq jz">
                            <a class="flex items-center vm vc rounded ct" :class="settingsPanel === 'notifications' &amp;&amp; 'po'" href="notifications.html">
                                <svg class="o_ sq af dd yt mr-2" :class="settingsPanel === 'notifications' &amp;&amp; 'text-indigo-400'" viewBox="0 0 16 16">
                                    <path
                                        d="M14.3.3c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4l-8 8c-.2.2-.4.3-.7.3-.3 0-.5-.1-.7-.3-.4-.4-.4-1 0-1.4l8-8zM15 7c.6 0 1 .4 1 1 0 4.4-3.6 8-8 8s-8-3.6-8-8 3.6-8 8-8c.6 0 1 .4 1 1s-.4 1-1 1C4.7 2 2 4.7 2 8s2.7 6 6 6 6-2.7 6-6c0-.6.4-1 1-1z"
                                    ></path>
                                </svg>
                                <span class="text-sm gm gz" :class="settingsPanel === 'notifications' ? 'text-indigo-500' : 'xp'">My Notifications</span>
                            </a>
                        </li>
                        <li class="sr jq jz">
                            <a class="flex items-center vm vc rounded ct" :class="settingsPanel === 'apps' &amp;&amp; 'po'" href="connected-apps.html">
                                <svg class="o_ sq af dd yt mr-2" :class="settingsPanel === 'apps' &amp;&amp; 'text-indigo-400'" viewBox="0 0 16 16">
                                    <path d="M3.414 2L9 7.586V16H7V8.414l-5-5V6H0V1a1 1 0 011-1h5v2H3.414zM15 0a1 1 0 011 1v5h-2V3.414l-3.172 3.172-1.414-1.414L12.586 2H10V0h5z"></path>
                                </svg>
                                <span class="text-sm gm gz" :class="settingsPanel === 'apps' ? 'text-indigo-500' : 'xp'">Connected Apps</span>
                            </a>
                        </li>
                        <li class="sr jq jz">
                            <a class="flex items-center vm vc rounded ct" :class="settingsPanel === 'plans' &amp;&amp; 'po'" href="plans.html">
                                <svg class="o_ sq af dd yt mr-2" :class="settingsPanel === 'plans' &amp;&amp; 'text-indigo-400'" viewBox="0 0 16 16">
                                    <path d="M5 9h11v2H5V9zM0 9h3v2H0V9zm5 4h6v2H5v-2zm-5 0h3v2H0v-2zm5-8h7v2H5V5zM0 5h3v2H0V5zm5-4h11v2H5V1zM0 1h3v2H0V1z"></path>
                                </svg>
                                <span class="text-sm gm gz" :class="settingsPanel === 'plans' ? 'text-indigo-500' : 'xp'">Plans</span>
                            </a>
                        </li>
                        <li class="sr jq jz">
                            <a class="flex items-center vm vc rounded ct" :class="settingsPanel === 'billing' &amp;&amp; 'po'" href="billing.html">
                                <svg class="o_ sq af dd yt mr-2" :class="settingsPanel === 'billing' &amp;&amp; 'text-indigo-400'" viewBox="0 0 16 16">
                                    <path d="M15 4c.6 0 1 .4 1 1v10c0 .6-.4 1-1 1H3c-1.7 0-3-1.3-3-3V3c0-1.7 1.3-3 3-3h7c.6 0 1 .4 1 1v3h4zM2 3v1h7V2H3c-.6 0-1 .4-1 1zm12 11V6H2v7c0 .6.4 1 1 1h11zm-3-5h2v2h-2V9z"></path>
                                </svg>
                                <span class="text-sm gm gz" :class="settingsPanel === 'billing' ? 'text-indigo-500' : 'xp'">Billing &amp; Invoices</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <div class="gp gg yt gb it">Experience</div>
                    <ul class="flex fa qe rk jq">
                        <li class="sr jq jz">
                            <a class="flex items-center vm vc rounded ct" :class="settingsPanel === 'feedback' &amp;&amp; 'po'" href="feedback.html">
                                <svg class="o_ sq af dd yt mr-2" :class="settingsPanel === 'feedback' &amp;&amp; 'text-indigo-400'" viewBox="0 0 16 16">
                                    <path
                                        d="M7.001 3h2v4h-2V3zm1 7a1 1 0 110-2 1 1 0 010 2zM15 16a1 1 0 01-.6-.2L10.667 13H1a1 1 0 01-1-1V1a1 1 0 011-1h14a1 1 0 011 1v14a1 1 0 01-1 1zM2 11h9a1 1 0 01.6.2L14 13V2H2v9z"
                                    ></path>
                                </svg>
                                <span class="text-sm gm gz" :class="settingsPanel === 'feedback' ? 'text-indigo-500' : 'xp'">Give Feedback</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Panel -->
            <div class="al">
                <!-- Panel body -->
                <div class="dz fx">
                    <!-- Plans -->
                    <section>
                        <div class="ry">
                            <h2 class="gc text-slate-800 font-bold rw">Plans</h2>
                            <div class="text-sm">This workspace’s Basic Plan is set to <strong class="gm">$34</strong> per month and will renew on <strong class="gm">July 9, 2021</strong>.</div>
                        </div>

                        <!-- Pricing -->
                        <div x-data="{ annual: true }">
                            <!-- Toggle switch -->
                            <div class="flex items-center lo rb">
                                <div class="text-sm text-slate-500 gm">Monthly</div>
                                <div class="tf">
                                    <input type="checkbox" id="toggle" class="tc" x-model="annual" />
                                    <label class="pi" for="toggle">
                                        <span class="bg-white bd" aria-hidden="true"></span>
                                        <span class="tc">Pay annually</span>
                                    </label>
                                </div>
                                <div class="text-sm text-slate-500 gm">Annually <span class="yf">(-20%)</span></div>
                            </div>
                            <!-- Pricing tabs -->
                            <div class="sx fi fd">
                                <!-- Tab 1 -->
                                <div class="td nk tto bg-white shadow-md rounded-sm border border-slate-200">
                                    <div class="tp tk tb tw ol hg" aria-hidden="true"></div>
                                    <div class="v_ m_ ms cm border-slate-200">
                                        <header class="flex items-center in">
                                            <div class="oz on rounded-full af py pk do rk">
                                                <svg class="oz on dd ye" viewBox="0 0 24 24">
                                                    <path
                                                        d="M12 17a.833.833 0 01-.833-.833 3.333 3.333 0 00-3.334-3.334.833.833 0 110-1.666 3.333 3.333 0 003.334-3.334.833.833 0 111.666 0 3.333 3.333 0 003.334 3.334.833.833 0 110 1.666 3.333 3.333 0 00-3.334 3.334c0 .46-.373.833-.833.833z"
                                                    ></path>
                                                </svg>
                                            </div>
                                            <h3 class="gv text-slate-800 gg">Basic</h3>
                                        </header>
                                        <div class="text-sm in">Ideal for individuals that need a custom solution with custom tools.</div>
                                        <!-- Price -->
                                        <div class="text-slate-800 font-bold rw">
                                            <span class="gc">$</span><span class="text-3xl" x-text="annual ? '14' : '19'">14</span><span class="text-slate-500 gm text-sm">/mo</span>
                                        </div>
                                        <!-- CTA -->
                                        <button class="btn border-slate-200 hover--border-slate-300 gz ox">Downgrade</button>
                                    </div>
                                    <div class="v_ mp mj">
                                        <div class="gp text-slate-800 gg gb rw">What's included</div>
                                        <!-- List -->
                                        <ul>
                                            <li class="flex items-center vk">
                                                <svg class="w-3 h-3 af dd yf mr-2" viewBox="0 0 12 12">
                                                    <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z"></path>
                                                </svg>
                                                <div class="text-sm">Lorem ipsum dolor sit amet</div>
                                            </li>
                                            <li class="flex items-center vk">
                                                <svg class="w-3 h-3 af dd yf mr-2" viewBox="0 0 12 12">
                                                    <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z"></path>
                                                </svg>
                                                <div class="text-sm">Quis nostrud exercitation</div>
                                            </li>
                                            <li class="flex items-center vk">
                                                <svg class="w-3 h-3 af dd yf mr-2" viewBox="0 0 12 12">
                                                    <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z"></path>
                                                </svg>
                                                <div class="text-sm">Lorem ipsum dolor sit amet</div>
                                            </li>
                                            <li class="flex items-center vk">
                                                <svg class="w-3 h-3 af dd yf mr-2" viewBox="0 0 12 12">
                                                    <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z"></path>
                                                </svg>
                                                <div class="text-sm">Quis nostrud exercitation</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Tab 2 -->
                                <div class="td nk tto bg-white shadow-md rounded-sm border border-slate-200">
                                    <div class="tp tk tb tw ol hm" aria-hidden="true"></div>
                                    <div class="v_ m_ ms cm border-slate-200">
                                        <header class="flex items-center in">
                                            <div class="oz on rounded-full af py p_ du rk">
                                                <svg class="oz on dd ye" viewBox="0 0 24 24">
                                                    <path
                                                        d="M12 17a.833.833 0 01-.833-.833 3.333 3.333 0 00-3.334-3.334.833.833 0 110-1.666 3.333 3.333 0 003.334-3.334.833.833 0 111.666 0 3.333 3.333 0 003.334 3.334.833.833 0 110 1.666 3.333 3.333 0 00-3.334 3.334c0 .46-.373.833-.833.833z"
                                                    ></path>
                                                </svg>
                                            </div>
                                            <h3 class="gv text-slate-800 gg">Standard</h3>
                                        </header>
                                        <div class="text-sm in">Ideal for individuals that need a custom solution with custom tools.</div>
                                        <!-- Price -->
                                        <div class="text-slate-800 font-bold rw">
                                            <span class="gc">$</span><span class="text-3xl" x-text="annual ? '34' : '39'">34</span><span class="text-slate-500 gm text-sm">/mo</span>
                                        </div>
                                        <!-- CTA -->
                                        <button class="btn border-slate-200 hp yt ox az flex items-center" disabled="disabled">
                                            <svg class="w-3 h-3 af dd mr-2" viewBox="0 0 12 12">
                                                <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z"></path>
                                            </svg>
                                            <span>Current Plan</span>
                                        </button>
                                    </div>
                                    <div class="v_ mp mj">
                                        <div class="gp text-slate-800 gg gb rw">What's included</div>
                                        <!-- List -->
                                        <ul>
                                            <li class="flex items-center vk">
                                                <svg class="w-3 h-3 af dd yf mr-2" viewBox="0 0 12 12">
                                                    <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z"></path>
                                                </svg>
                                                <div class="text-sm">Lorem ipsum dolor sit amet</div>
                                            </li>
                                            <li class="flex items-center vk">
                                                <svg class="w-3 h-3 af dd yf mr-2" viewBox="0 0 12 12">
                                                    <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z"></path>
                                                </svg>
                                                <div class="text-sm">Quis nostrud exercitation</div>
                                            </li>
                                            <li class="flex items-center vk">
                                                <svg class="w-3 h-3 af dd yf mr-2" viewBox="0 0 12 12">
                                                    <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z"></path>
                                                </svg>
                                                <div class="text-sm">Lorem ipsum dolor sit amet</div>
                                            </li>
                                            <li class="flex items-center vk">
                                                <svg class="w-3 h-3 af dd yf mr-2" viewBox="0 0 12 12">
                                                    <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z"></path>
                                                </svg>
                                                <div class="text-sm">Quis nostrud exercitation</div>
                                            </li>
                                            <li class="flex items-center vk">
                                                <svg class="w-3 h-3 af dd yf mr-2" viewBox="0 0 12 12">
                                                    <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z"></path>
                                                </svg>
                                                <div class="text-sm">Lorem ipsum dolor sit amet</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Tab 3 -->
                                <div class="td nk tto bg-white shadow-md rounded-sm border border-slate-200">
                                    <div class="tp tk tb tw ol hd" aria-hidden="true"></div>
                                    <div class="v_ m_ ms cm border-slate-200">
                                        <header class="flex items-center in">
                                            <div class="oz on rounded-full af py px ds rk">
                                                <svg class="oz on dd ye" viewBox="0 0 24 24">
                                                    <path
                                                        d="M12 17a.833.833 0 01-.833-.833 3.333 3.333 0 00-3.334-3.334.833.833 0 110-1.666 3.333 3.333 0 003.334-3.334.833.833 0 111.666 0 3.333 3.333 0 003.334 3.334.833.833 0 110 1.666 3.333 3.333 0 00-3.334 3.334c0 .46-.373.833-.833.833z"
                                                    ></path>
                                                </svg>
                                            </div>
                                            <h3 class="gv text-slate-800 gg">Plus</h3>
                                        </header>
                                        <div class="text-sm in">Ideal for individuals that need a custom solution with custom tools.</div>
                                        <!-- Price -->
                                        <div class="text-slate-800 font-bold rw">
                                            <span class="gc">$</span><span class="text-3xl" x-text="annual ? '74' : '79'">74</span><span class="text-slate-500 gm text-sm">/mo</span>
                                        </div>
                                        <!-- CTA -->
                                        <button class="btn hd wq ye ox">Upgrade</button>
                                    </div>
                                    <div class="v_ mp mj">
                                        <div class="gp text-slate-800 gg gb rw">What's included</div>
                                        <!-- List -->
                                        <ul>
                                            <li class="flex items-center vk">
                                                <svg class="w-3 h-3 af dd yf mr-2" viewBox="0 0 12 12">
                                                    <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z"></path>
                                                </svg>
                                                <div class="text-sm">Lorem ipsum dolor sit amet</div>
                                            </li>
                                            <li class="flex items-center vk">
                                                <svg class="w-3 h-3 af dd yf mr-2" viewBox="0 0 12 12">
                                                    <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z"></path>
                                                </svg>
                                                <div class="text-sm">Quis nostrud exercitation</div>
                                            </li>
                                            <li class="flex items-center vk">
                                                <svg class="w-3 h-3 af dd yf mr-2" viewBox="0 0 12 12">
                                                    <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z"></path>
                                                </svg>
                                                <div class="text-sm">Lorem ipsum dolor sit amet</div>
                                            </li>
                                            <li class="flex items-center vk">
                                                <svg class="w-3 h-3 af dd yf mr-2" viewBox="0 0 12 12">
                                                    <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z"></path>
                                                </svg>
                                                <div class="text-sm">Quis nostrud exercitation</div>
                                            </li>
                                            <li class="flex items-center vk">
                                                <svg class="w-3 h-3 af dd yf mr-2" viewBox="0 0 12 12">
                                                    <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z"></path>
                                                </svg>
                                                <div class="text-sm">Lorem ipsum dolor sit amet</div>
                                            </li>
                                            <li class="flex items-center vk">
                                                <svg class="w-3 h-3 af dd yf mr-2" viewBox="0 0 12 12">
                                                    <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z"></path>
                                                </svg>
                                                <div class="text-sm">Quis nostrud exercitation</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Contact Sales -->
                    <section>
                        <div class="v_ vl po border hu rounded-sm gu tna ttd tne tnn tnt">
                            <div class="text-slate-800 gg in tth">Looking for different configurations?</div>
                            <button class="btn hd wq ye">Contact Sales</button>
                        </div>
                    </section>

                    <!-- FAQs -->
                    <section>
                        <div class="rc">
                            <h2 class="gc text-slate-800 font-bold">FAQs</h2>
                        </div>
                        <ul class="la">
                            <li>
                                <div class="gg text-slate-800 rx">
                                    What is the difference between the three versions?
                                </div>
                                <div class="text-sm">
                                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.
                                </div>
                            </li>
                            <li>
                                <div class="gg text-slate-800 rx">
                                    Is there any difference between Basic and Plus licenses?
                                </div>
                                <div class="text-sm">
                                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                </div>
                            </li>
                            <li>
                                <div class="gg text-slate-800 rx">
                                    Got more questions?
                                </div>
                                <div class="text-sm">
                                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum in voluptate velit esse cillum dolore eu fugiat
                                    <a class="gm text-indigo-500 xu" href="#0">contact us</a>.
                                </div>
                            </li>
                        </ul>
                    </section>
                </div>

                <!-- Panel footer -->
                <footer>
                    <div class="flex fu vd vv cg border-slate-200">
                        <div class="flex lg">
                            <button class="btn border-slate-200 hover--border-slate-300 gz">Cancel</button>
                            <button class="btn hd wq ye ml-3">Save Changes</button>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
</div>
@endsection