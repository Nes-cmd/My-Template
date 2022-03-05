@extends('layouts.admin.app')
@section('contents')
<div class="va jn teb vf ox uz ri">
    <!-- Page header -->
    <div class="ry">
        <h1 class="gc zc text-slate-800 font-bold">Tabs ✨</h1>
    </div>

    <div class="cg border-slate-200">
        <!-- Components -->
        <div class="ln ie">
            <!-- Simple -->
            <div>
                <h2 class="gc text-slate-800 font-bold rb">Simple</h2>
                <!-- Start -->
                <div class="ry cm border-slate-200">
                    <ul class="text-sm gm flex fa rl k_ zw lj ta">
                        <li class="mg ib last--mr-0 wm jf te_ wx jl tej">
                            <a class="text-indigo-500 ct" href="#0">Account</a>
                        </li>
                        <li class="mg ib last--mr-0 wm jf te_ wx jl tej">
                            <a class="text-slate-500 hover--text-slate-600 ct" href="#0">Notifications</a>
                        </li>
                        <li class="mg ib last--mr-0 wm jf te_ wx jl tej">
                            <a class="text-slate-500 hover--text-slate-600 ct" href="#0">Integrations</a>
                        </li>
                        <li class="mg ib last--mr-0 wm jf te_ wx jl tej">
                            <a class="text-slate-500 hover--text-slate-600 ct" href="#0">Plans</a>
                        </li>
                        <li class="mg ib last--mr-0 wm jf te_ wx jl tej">
                            <a class="text-slate-500 hover--text-slate-600 ct" href="#0">Billing</a>
                        </li>
                    </ul>
                </div>
                <!-- End -->
            </div>

            <!-- With Underline -->
            <div>
                <h2 class="gc text-slate-800 font-bold rb">With Underline</h2>
                <!-- Start -->
                <div class="td ry">
                    <div class="tp ty ox of hv" aria-hidden="true"></div>
                    <ul class="td text-sm gm flex fa rl k_ zw lj ta">
                        <li class="ib last--mr-0 wm jf te_ wx jl tej">
                            <a class="block mg text-indigo-500 ct cy hi" href="#0">Account</a>
                        </li>
                        <li class="ib last--mr-0 wm jf te_ wx jl tej">
                            <a class="block mg text-slate-500 hover--text-slate-600 ct" href="#0">Notifications</a>
                        </li>
                        <li class="ib last--mr-0 wm jf te_ wx jl tej">
                            <a class="block mg text-slate-500 hover--text-slate-600 ct" href="#0">Integrations</a>
                        </li>
                        <li class="ib last--mr-0 wm jf te_ wx jl tej">
                            <a class="block mg text-slate-500 hover--text-slate-600 ct" href="#0">Plans</a>
                        </li>
                        <li class="ib last--mr-0 wm jf te_ wx jl tej">
                            <a class="block mg text-slate-500 hover--text-slate-600 ct" href="#0">Billing</a>
                        </li>
                    </ul>
                </div>
                <!-- End -->
            </div>

            <!-- With Icons -->
            <div>
                <h2 class="gc text-slate-800 font-bold rb">With Icons</h2>
                <!-- Start -->
                <div class="ry cm border-slate-200">
                    <ul class="text-sm gm flex fa rl k_ zw lj ta">
                        <li class="mg ib last--mr-0 wm jf te_ wx jl tej">
                            <a class="text-indigo-500 ct flex items-center" href="#0">
                                <svg class="o_ sq af dd mr-2" viewBox="0 0 16 16">
                                    <path
                                        d="M12.311 9.527c-1.161-.393-1.85-.825-2.143-1.175A3.991 3.991 0 0012 5V4c0-2.206-1.794-4-4-4S4 1.794 4 4v1c0 1.406.732 2.639 1.832 3.352-.292.35-.981.782-2.142 1.175A3.942 3.942 0 001 13.26V16h14v-2.74c0-1.69-1.081-3.19-2.689-3.733zM6 4c0-1.103.897-2 2-2s2 .897 2 2v1c0 1.103-.897 2-2 2s-2-.897-2-2V4zm7 10H3v-.74c0-.831.534-1.569 1.33-1.838 1.845-.624 3-1.436 3.452-2.422h.436c.452.986 1.607 1.798 3.453 2.422A1.943 1.943 0 0113 13.26V14z"
                                    ></path>
                                </svg>
                                <span>Account</span>
                            </a>
                        </li>
                        <li class="mg ib last--mr-0 wm jf te_ wx jl tej">
                            <a class="text-slate-500 hover--text-slate-600 ct flex items-center" href="#0">
                                <svg class="o_ sq af dd yt mr-2" viewBox=" 0 0 16 16">
                                    <path
                                        d="M14.3.3c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4l-8 8c-.2.2-.4.3-.7.3-.3 0-.5-.1-.7-.3-.4-.4-.4-1 0-1.4l8-8zM15 7c.6 0 1 .4 1 1 0 4.4-3.6 8-8 8s-8-3.6-8-8 3.6-8 8-8c.6 0 1 .4 1 1s-.4 1-1 1C4.7 2 2 4.7 2 8s2.7 6 6 6 6-2.7 6-6c0-.6.4-1 1-1z"
                                    ></path>
                                </svg>
                                <span>Notifications</span>
                            </a>
                        </li>
                        <li class="mg ib last--mr-0 wm jf te_ wx jl tej">
                            <a class="text-slate-500 hover--text-slate-600 ct flex items-center" href="#0">
                                <svg class="o_ sq af dd yt mr-2" viewBox=" 0 0 16 16">
                                    <path d="M3.414 2L9 7.586V16H7V8.414l-5-5V6H0V1a1 1 0 011-1h5v2H3.414zM15 0a1 1 0 011 1v5h-2V3.414l-3.172 3.172-1.414-1.414L12.586 2H10V0h5z"></path>
                                </svg>
                                <span>Integrations</span>
                            </a>
                        </li>
                        <li class="mg ib last--mr-0 wm jf te_ wx jl tej">
                            <a class="text-slate-500 hover--text-slate-600 ct flex items-center" href="#0">
                                <svg class="o_ sq af dd yt mr-2" viewBox=" 0 0 16 16">
                                    <path d="M5 9h11v2H5V9zM0 9h3v2H0V9zm5 4h6v2H5v-2zm-5 0h3v2H0v-2zm5-8h7v2H5V5zM0 5h3v2H0V5zm5-4h11v2H5V1zM0 1h3v2H0V1z"></path>
                                </svg>
                                <span>Plans</span>
                            </a>
                        </li>
                        <li class="mg ib last--mr-0 wm jf te_ wx jl tej">
                            <a class="text-slate-500 hover--text-slate-600 ct flex items-center" href="#0">
                                <svg class="o_ sq af dd yt mr-2" viewBox=" 0 0 16 16">
                                    <path d="M15 4c.6 0 1 .4 1 1v10c0 .6-.4 1-1 1H3c-1.7 0-3-1.3-3-3V3c0-1.7 1.3-3 3-3h7c.6 0 1 .4 1 1v3h4zM2 3v1h7V2H3c-.6 0-1 .4-1 1zm12 11V6H2v7c0 .6.4 1 1 1h11zm-3-5h2v2h-2V9z"></path>
                                </svg>
                                <span>Billing</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- End -->
            </div>

            <!-- With Container -->
            <div>
                <h2 class="gc text-slate-800 font-bold rb">With Container</h2>
                <!-- Start -->
                <ul class="flex flex-wrap -m-1">
                    <li class="m-1">
                        <button class="inline-flex items-center justify-center text-sm gm gj rounded-full vx vk border ck bd hd ye we wi">Account</button>
                    </li>
                    <li class="m-1">
                        <button class="inline-flex items-center justify-center text-sm gm gj rounded-full vx vk border border-slate-200 hover--border-slate-300 bd bg-white text-slate-500 we wi">Notifications</button>
                    </li>
                    <li class="m-1">
                        <button class="inline-flex items-center justify-center text-sm gm gj rounded-full vx vk border border-slate-200 hover--border-slate-300 bd bg-white text-slate-500 we wi">Integrations</button>
                    </li>
                    <li class="m-1">
                        <button class="inline-flex items-center justify-center text-sm gm gj rounded-full vx vk border border-slate-200 hover--border-slate-300 bd bg-white text-slate-500 we wi">Plans</button>
                    </li>
                    <li class="m-1">
                        <button class="inline-flex items-center justify-center text-sm gm gj rounded-full vx vk border border-slate-200 hover--border-slate-300 bd bg-white text-slate-500 we wi">Billing</button>
                    </li>
                </ul>
                <!-- End -->
            </div>
        </div>
    </div>
</div>
@endsection