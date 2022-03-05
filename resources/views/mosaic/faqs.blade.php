@extends('layouts.admin.app')
@section('contents')
<div class="va jn teb vf ox uz ri">
        <div class="ar nj">
            <!-- Page title -->
            <div class="ic">
                <h1 class="gc zc text-slate-800 font-bold">👋 How we can help you today?</h1>
            </div>

            <!-- Search form -->
            <div class="rb">
                <form class="td">
                    <label for="action-search" class="tc">Search</label>
                    <input id="action-search" class="tn mr vl xk ox" type="search" />
                    <button class="tp tm tg kr" type="submit" aria-label="Search">
                        <svg class="o_ sq af dd yt ks ml-3 mr-2" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 14c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7zM7 2C4.243 2 2 4.243 2 7s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5z"></path>
                            <path d="M15.707 14.293L13.314 11.9a8.019 8.019 0 01-1.414 1.414l2.393 2.393a.997.997 0 001.414 0 .999.999 0 000-1.414z"></path>
                        </svg>
                    </button>
                </form>
            </div>

            <!-- Filters -->
            <div class="ry cm border-slate-200">
                <ul class="text-sm gm flex fa rl k_ zw lj ta">
                    <li class="mg ib last--mr-0 wm jf te_ wx jl tej">
                        <a class="text-indigo-500 ct" href="#0">Popular</a>
                    </li>
                    <li class="mg ib last--mr-0 wm jf te_ wx jl tej">
                        <a class="text-slate-500 hover--text-slate-600 ct" href="#0">Accessibility</a>
                    </li>
                    <li class="mg ib last--mr-0 wm jf te_ wx jl tej">
                        <a class="text-slate-500 hover--text-slate-600 ct" href="#0">Marketing</a>
                    </li>
                    <li class="mg ib last--mr-0 wm jf te_ wx jl tej">
                        <a class="text-slate-500 hover--text-slate-600 ct" href="#0">Development</a>
                    </li>
                    <li class="mg ib last--mr-0 wm jf te_ wx jl tej">
                        <a class="text-slate-500 hover--text-slate-600 ct" href="#0">Account</a>
                    </li>
                </ul>
            </div>

            <!-- Posts -->
            <div>
                <h2 class="gc text-slate-800 font-bold rw">Popular Questions</h2>
                <!-- Post -->
                <article class="vj cm border-slate-200">
                    <header class="flex ff in">
                        <div class="iw rk">
                            <svg class="o_ sq af dd" viewBox="0 0 16 16">
                                <path class="text-indigo-300" d="M4 8H0v4.9c0 1 .7 1.9 1.7 2.1 1.2.2 2.3-.8 2.3-2V8z"></path>
                                <path class="text-indigo-500" d="M15 1H7c-.6 0-1 .4-1 1v11c0 .7-.2 1.4-.6 2H13c1.7 0 3-1.3 3-3V2c0-.6-.4-1-1-1z"></path>
                            </svg>
                        </div>
                        <h3 class="gh gk text-slate-800 font-bold">How can the widget to my website?</h3>
                    </header>
                    <div class="mb">
                        <div class="in">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam, quis nostrud exercitation ullamco.
                        </div>
                        <ul class="flex flex-wrap">
                            <li class="flex items-center wo wh w_ wf wl wa">
                                <a class="text-sm gm text-indigo-500 xu" href="#0">General</a>
                            </li>
                            <li class="flex items-center wo wh w_ wf wl wa">
                                <a class="text-sm gm text-indigo-500 xu" href="#0">Marketing</a>
                            </li>
                        </ul>
                    </div>
                </article>
                <!-- Post -->
                <article class="vj cm border-slate-200">
                    <header class="flex ff in">
                        <div class="iw rk">
                            <svg class="o_ sq af dd" viewBox="0 0 16 16">
                                <path class="text-indigo-300" d="M4 8H0v4.9c0 1 .7 1.9 1.7 2.1 1.2.2 2.3-.8 2.3-2V8z"></path>
                                <path class="text-indigo-500" d="M15 1H7c-.6 0-1 .4-1 1v11c0 .7-.2 1.4-.6 2H13c1.7 0 3-1.3 3-3V2c0-.6-.4-1-1-1z"></path>
                            </svg>
                        </div>
                        <h3 class="gh gk text-slate-800 font-bold">What would happen if I choose not to pay after the usage?</h3>
                    </header>
                    <div class="mb">
                        <div class="in">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam, quis nostrud exercitation ullamco.
                        </div>
                        <ul class="flex flex-wrap">
                            <li class="flex items-center wo wh w_ wf wl wa">
                                <a class="text-sm gm text-indigo-500 xu" href="#0">Development</a>
                            </li>
                            <li class="flex items-center wo wh w_ wf wl wa">
                                <a class="text-sm gm text-indigo-500 xu" href="#0">Acessibility</a>
                            </li>
                        </ul>
                    </div>
                </article>
                <!-- Post -->
                <article class="vj cm border-slate-200">
                    <header class="flex ff in">
                        <div class="iw rk">
                            <svg class="o_ sq af dd" viewBox="0 0 16 16">
                                <path class="text-indigo-300" d="M4 8H0v4.9c0 1 .7 1.9 1.7 2.1 1.2.2 2.3-.8 2.3-2V8z"></path>
                                <path class="text-indigo-500" d="M15 1H7c-.6 0-1 .4-1 1v11c0 .7-.2 1.4-.6 2H13c1.7 0 3-1.3 3-3V2c0-.6-.4-1-1-1z"></path>
                            </svg>
                        </div>
                        <h3 class="gh gk text-slate-800 font-bold">What limitations do trial accounts have?</h3>
                    </header>
                    <div class="mb">
                        <div class="in">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam, quis nostrud exercitation ullamco.
                        </div>
                        <ul class="flex flex-wrap">
                            <li class="flex items-center wo wh w_ wf wl wa">
                                <a class="text-sm gm text-indigo-500 xu" href="#0">Development</a>
                            </li>
                            <li class="flex items-center wo wh w_ wf wl wa">
                                <a class="text-sm gm text-indigo-500 xu" href="#0">Plans</a>
                            </li>
                        </ul>
                    </div>
                </article>
                <!-- Post -->
                <article class="vj cm border-slate-200">
                    <header class="flex ff in">
                        <div class="iw rk">
                            <svg class="o_ sq af dd" viewBox="0 0 16 16">
                                <path class="text-indigo-300" d="M4 8H0v4.9c0 1 .7 1.9 1.7 2.1 1.2.2 2.3-.8 2.3-2V8z"></path>
                                <path class="text-indigo-500" d="M15 1H7c-.6 0-1 .4-1 1v11c0 .7-.2 1.4-.6 2H13c1.7 0 3-1.3 3-3V2c0-.6-.4-1-1-1z"></path>
                            </svg>
                        </div>
                        <h3 class="gh gk text-slate-800 font-bold">Is there any difference between Standard and Plus licenses?</h3>
                    </header>
                    <div class="mb">
                        <div class="in">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam, quis nostrud exercitation ullamco.
                        </div>
                        <ul class="flex flex-wrap">
                            <li class="flex items-center wo wh w_ wf wl wa">
                                <a class="text-sm gm text-indigo-500 xu" href="#0">Development</a>
                            </li>
                            <li class="flex items-center wo wh w_ wf wl wa">
                                <a class="text-sm gm text-indigo-500 xu" href="#0">Account</a>
                            </li>
                        </ul>
                    </div>
                </article>
                <!-- Post -->
                <article class="vj cm border-slate-200">
                    <header class="flex ff in">
                        <div class="iw rk">
                            <svg class="o_ sq af dd" viewBox="0 0 16 16">
                                <path class="text-indigo-300" d="M4 8H0v4.9c0 1 .7 1.9 1.7 2.1 1.2.2 2.3-.8 2.3-2V8z"></path>
                                <path class="text-indigo-500" d="M15 1H7c-.6 0-1 .4-1 1v11c0 .7-.2 1.4-.6 2H13c1.7 0 3-1.3 3-3V2c0-.6-.4-1-1-1z"></path>
                            </svg>
                        </div>
                        <h3 class="gh gk text-slate-800 font-bold">Is my personal information protected?</h3>
                    </header>
                    <div class="mb">
                        <div class="in">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam, quis nostrud exercitation ullamco.
                        </div>
                        <ul class="flex flex-wrap">
                            <li class="flex items-center wo wh w_ wf wl wa">
                                <a class="text-sm gm text-indigo-500 xu" href="#0">General</a>
                            </li>
                            <li class="flex items-center wo wh w_ wf wl wa">
                                <a class="text-sm gm text-indigo-500 xu" href="#0">Accessibility</a>
                            </li>
                        </ul>
                    </div>
                </article>
                <!-- Post -->
                <article class="vj cm border-slate-200">
                    <header class="flex ff in">
                        <div class="iw rk">
                            <svg class="o_ sq af dd" viewBox="0 0 16 16">
                                <path class="text-indigo-300" d="M4 8H0v4.9c0 1 .7 1.9 1.7 2.1 1.2.2 2.3-.8 2.3-2V8z"></path>
                                <path class="text-indigo-500" d="M15 1H7c-.6 0-1 .4-1 1v11c0 .7-.2 1.4-.6 2H13c1.7 0 3-1.3 3-3V2c0-.6-.4-1-1-1z"></path>
                            </svg>
                        </div>
                        <h3 class="gh gk text-slate-800 font-bold">What can I create with with this product?</h3>
                    </header>
                    <div class="mb">
                        <div class="in">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam, quis nostrud exercitation ullamco.
                        </div>
                        <ul class="flex flex-wrap">
                            <li class="flex items-center wo wh w_ wf wl wa">
                                <a class="text-sm gm text-indigo-500 xu" href="#0">Marketing</a>
                            </li>
                            <li class="flex items-center wo wh w_ wf wl wa">
                                <a class="text-sm gm text-indigo-500 xu" href="#0">Plans</a>
                            </li>
                        </ul>
                    </div>
                </article>
            </div>

            <!-- Pagination -->
            <div class="ir">
                <div class="flex justify-end">
                    <a class="btn bg-white border-slate-200 hover--border-slate-300 text-indigo-500" href="#0">See All Questions -&gt;</a>
                </div>
            </div>
        </div>
    </div>
@endsection