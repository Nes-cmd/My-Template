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
                        <div>
                            <h2 class="gc text-slate-800 font-bold rw">Billing &amp; Invoices</h2>
                            <div class="text-sm">This workspace’s Basic Plan is set to <strong class="gm">$34</strong> per month and will renew on <strong class="gm">July 9, 2021</strong>.</div>
                        </div>

                        <!-- Billing Information -->
                        <section>
                            <h3 class="gh gk text-slate-800 font-bold rx">Billing Information</h3>
                            <ul>
                                <li class="qn qx qy vl cm border-slate-200">
                                    <!-- Left -->
                                    <div class="text-sm text-slate-800 gm">Payment Method</div>
                                    <!-- Right -->
                                    <div class="text-sm text-slate-800ml-4">
                                        <span class="rk">Mastercard ending 9282</span>
                                        <a class="gm text-indigo-500 xu" href="#0">Edit</a>
                                    </div>
                                </li>
                                <li class="qn qx qy vl cm border-slate-200">
                                    <!-- Left -->
                                    <div class="text-sm text-slate-800 gm">Billing Interval</div>
                                    <!-- Right -->
                                    <div class="text-sm text-slate-800ml-4">
                                        <span class="rk">Annually</span>
                                        <a class="gm text-indigo-500 xu" href="#0">Edit</a>
                                    </div>
                                </li>
                                <li class="qn qx qy vl cm border-slate-200">
                                    <!-- Left -->
                                    <div class="text-sm text-slate-800 gm">VAT/GST Number</div>
                                    <!-- Right -->
                                    <div class="text-sm text-slate-800ml-4">
                                        <span class="rk">UK849700927</span>
                                        <a class="gm text-indigo-500 xu" href="#0">Edit</a>
                                    </div>
                                </li>
                                <li class="qn qx qy vl cm border-slate-200">
                                    <!-- Left -->
                                    <div class="text-sm text-slate-800 gm">Your Address</div>
                                    <!-- Right -->
                                    <div class="text-sm text-slate-800ml-4">
                                        <span class="rk">34 Savoy Street, London, UK, 24E8X</span>
                                        <a class="gm text-indigo-500 xu" href="#0">Edit</a>
                                    </div>
                                </li>
                                <li class="qn qx qy vl cm border-slate-200">
                                    <!-- Left -->
                                    <div class="text-sm text-slate-800 gm">Billing Address</div>
                                    <!-- Right -->
                                    <div class="text-sm text-slate-800ml-4">
                                        <span class="rk">hello@cruip.com</span>
                                        <a class="gm text-indigo-500 xu" href="#0">Edit</a>
                                    </div>
                                </li>
                            </ul>
                        </section>

                        <!-- Invoices -->
                        <section>
                            <h3 class="gh gk text-slate-800 font-bold rx">Invoices</h3>
                            <!-- Table -->
                            <table class="ac ox">
                                <!-- Table header -->
                                <thead class="gp gb yt">
                                    <tr class="flex flex-wrap qi md:flex-no-wrap">
                                        <th class="ox block qu qr vc">
                                            <div class="gg go">Year</div>
                                        </th>
                                        <th class="ox hidden qu qr vc">
                                            <div class="gg go">Plan</div>
                                        </th>
                                        <th class="ox hidden qu qr vc">
                                            <div class="gg go">Amount</div>
                                        </th>
                                        <th class="ox hidden qu qr vc">
                                            <div class="gg ga"></div>
                                        </th>
                                    </tr>
                                </thead>
                                <!-- Table body -->
                                <tbody class="text-sm">
                                    <!-- Row -->
                                    <tr class="flex flex-wrap qi md:flex-no-wrap cm border-slate-200 vc zo">
                                        <td class="ox block qu qr vh zu">
                                            <div class="go gm text-slate-800">2021</div>
                                        </td>
                                        <td class="ox block qu qr vh zu">
                                            <div class="go">Basic Plan - Annualy</div>
                                        </td>
                                        <td class="ox block qu qr vh zu">
                                            <div class="go gm">$349.00</div>
                                        </td>
                                        <td class="ox block qu qr vh zu">
                                            <div class="ga flex items-center qw">
                                                <a class="gm text-indigo-500 xu" href="#0">HTML</a>
                                                <span class="block oj sq hv rs" aria-hidden="true"></span>
                                                <a class="gm text-indigo-500 xu" href="#0">PDF</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Row -->
                                    <tr class="flex flex-wrap qi md:flex-no-wrap cm border-slate-200 vc zo">
                                        <td class="ox block qu qr vh zu">
                                            <div class="go gm text-slate-800">2020</div>
                                        </td>
                                        <td class="ox block qu qr vh zu">
                                            <div class="go">Basic Plan - Annualy</div>
                                        </td>
                                        <td class="ox block qu qr vh zu">
                                            <div class="go gm">$349.00</div>
                                        </td>
                                        <td class="ox block qu qr vh zu">
                                            <div class="ga flex items-center qw">
                                                <a class="gm text-indigo-500 xu" href="#0">HTML</a>
                                                <span class="block oj sq hv rs" aria-hidden="true"></span>
                                                <a class="gm text-indigo-500 xu" href="#0">PDF</a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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