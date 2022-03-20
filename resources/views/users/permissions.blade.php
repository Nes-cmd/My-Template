@extends('layouts.admin.app')
@section('contents')
<style>
    .pb-3 {
        padding-bottom: 0.75rem/* 12px */;}
    .text-red-400 {
            --tw-text-opacity: 1;
            color: rgb(248 113 113 / var(--tw-text-opacity));
        } 
        .w-1\/2 {
            width: 50%;
        }
</style>
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
                <h2 class="gc text-slate-800 font-bold rw">Impacts of creating Role</h2>
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
                        <h3 class="gh gk font-bold" style="color:red">Are you sure to create Permissions? it's Here</h3>
                    </header>
                    <div class="w-2/3">
                        <div class="in">
                            
                        <div class="flex flex-row justify-between">
                            <div>Permissions</div>
                            <div>Descreption</div>
                            <div>Slug</div>
                        </div>
                        @foreach($permissions as $permission)
                           <div class="ox fh ff ml5">
                                <div class="flex flex-row justify-between">
                                    <div class="flex">
                                        <svg class="o_ sq af dd yf is rk" viewBox="0 0 16 16">
                                            <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zM7 11.4L3.6 8 5 6.6l2 2 4-4L12.4 6 7 11.4z"></path>
                                        </svg>
                                    
                                        <div>{{ $permission->name }}</div>
                                    </div>
                                    <div>
                                        {{ $permission->descreption }}
                                    </div>
                                    <div>
                                        {{ $permission->slug }}
                                    </div>
                                </div>
                            </div>
                        
                        @endforeach
                            
                            <form action="{{ url('permission/store') }}" method="post">
                                @csrf 
                                <label class="block text-sm gm rx" for="icon">Write name of Permission</label>
                                <div class="pb-3">
                                    <div class="td">
                                        <input id="icon" class="tn ox mr" type="text" name="name" placeholder="Name of permission">
                                        <div class="tp tm tg flex items-center pointer-events-none">
                                            <svg class="o_ sq dd yt af ml-3 mr-2" viewBox="0 0 16 16">
                                                <path d="M11.7.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM4.6 14H2v-2.6l6-6L10.6 8l-6 6zM12 6.6L9.4 4 11 2.4 13.6 5 12 6.6z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    @error('name')
                                       <span class="text-red-400">{{ $message }}</span> 
                                    @enderror
                                    <div class="td">
                                        <input id="icon" class="tn ox mr" type="text" name="descreption" placeholder="Descreption...">
                                        <div class="tp tm tg flex items-center pointer-events-none">
                                            <svg class="o_ sq dd yt af ml-3 mr-2" viewBox="0 0 16 16">
                                                <path d="M11.7.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM4.6 14H2v-2.6l6-6L10.6 8l-6 6zM12 6.6L9.4 4 11 2.4 13.6 5 12 6.6z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start -->
                                <button type="submit"  class="btn hd wq ye">
                                    <svg class="o_ sq dd bo af" viewBox="0 0 16 16">
                                        <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"></path>
                                    </svg>
                                    <span class="r_">Add Permission</span>
                                </button>
                                <!-- End -->
                    
                        
                            </form>
                        </div>
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
