@extends('layouts.admin.app')
@section('contents')
<div class="va jn teb vf ox uz ri">
    <!-- Page header -->
    <div class="ry">
        <h1 class="gc zc text-slate-800 font-bold">Button ✨</h1>
    </div>

    <div class="cg border-slate-200">
        <!-- Components -->
        <div class="ln ie">
            <!-- Appearances -->
            <div>
                <h2 class="gc text-slate-800 font-bold rb">Appearances</h2>
                <div class="flex flex-wrap items-center nq">
                    <div class="nz">
                        <!-- Start -->
                        <button class="btn hd wq ye">Primary</button>
                        <!-- End -->
                    </div>
                    <div class="nz">
                        <!-- Start -->
                        <button class="btn border-slate-200 hover--border-slate-300 text-indigo-500">Secondary</button>
                        <!-- End -->
                    </div>
                    <div class="nz">
                        <!-- Start -->
                        <button class="btn border-slate-200 hover--border-slate-300 gz">Tertiary</button>
                        <!-- End -->
                    </div>
                    <div class="nz">
                        <!-- Start -->
                        <button class="btn hq xt ye">Danger</button>
                        <!-- End -->
                    </div>
                    <div class="nz">
                        <!-- Start -->
                        <button class="btn border-slate-200 hover--border-slate-300 yi">Danger</button>
                        <!-- End -->
                    </div>
                    <div class="nz">
                        <!-- Start -->
                        <button class="btn hg xn ye">Success</button>
                        <!-- End -->
                    </div>
                    <div class="nz">
                        <!-- Start -->
                        <button class="btn border-slate-200 hover--border-slate-300 yf">Success</button>
                        <!-- End -->
                    </div>
                </div>
            </div>

            <!-- States -->
            <div>
                <h2 class="gc text-slate-800 font-bold rb">States</h2>
                <div class="flex flex-wrap items-center nq">
                    <div class="nz">
                        <!-- Start -->
                        <button class="btn hd wq ye xz ke kn xq bp" disabled="disabled">Disabled</button>
                        <!-- End -->
                    </div>
                    <div class="nz">
                        <!-- Start -->
                        <button class="btn hd wq ye xz ke kn xq bp" disabled="disabled">
                            <svg class="aj o_ sq dd af" viewBox="0 0 16 16">
                                <path
                                    d="M8 16a7.928 7.928 0 01-3.428-.77l.857-1.807A6.006 6.006 0 0014 8c0-3.309-2.691-6-6-6a6.006 6.006 0 00-5.422 8.572l-1.806.859A7.929 7.929 0 010 8c0-4.411 3.589-8 8-8s8 3.589 8 8-3.589 8-8 8z"
                                ></path>
                            </svg>
                            <span class="r_">Loading</span>
                        </button>
                        <!-- End -->
                    </div>
                </div>
            </div>

            <!-- Sizes -->
            <div>
                <h2 class="gc text-slate-800 font-bold rb">Sizes</h2>
                <div class="flex flex-wrap items-center nq">
                    <div class="nz">
                        <!-- Start -->
                        <button class="btn-xs hd wq ye">Button</button>
                        <!-- End -->
                    </div>
                    <div class="nz">
                        <!-- Start -->
                        <button class="tt hd wq ye">Button</button>
                        <!-- End -->
                    </div>
                    <div class="nz">
                        <!-- Start -->
                        <button class="btn hd wq ye">Button</button>
                        <!-- End -->
                    </div>
                    <div class="nz">
                        <!-- Start -->
                        <button class="te hd wq ye">Button</button>
                        <!-- End -->
                    </div>
                </div>
            </div>

            <!-- Buttons with an Icon -->
            <div>
                <h2 class="gc text-slate-800 font-bold rb">Buttons with an Icon</h2>
                <div class="flex flex-wrap items-center nq">
                    <div class="nz">
                        <!-- Start -->
                        <button class="btn hd wq ye">
                            <svg class="o_ sq dd bo af" viewBox="0 0 16 16">
                                <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"></path>
                            </svg>
                            <span class="r_">Add Event</span>
                        </button>
                        <!-- End -->
                    </div>
                    <div class="nz">
                        <!-- Start -->
                        <button class="btn border-slate-200 hover--border-slate-300 gz">
                            <svg class="o_ sq dd text-slate-500 af" viewBox="0 0 16 16">
                                <path
                                    d="M11.7.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM4.6 14H2v-2.6l6-6L10.6 8l-6 6zM12 6.6L9.4 4 11 2.4 13.6 5 12 6.6z"
                                ></path>
                            </svg>
                            <span class="r_">Edit Content</span>
                        </button>
                        <!-- End -->
                    </div>
                    <div class="nz">
                        <!-- Start -->
                        <button class="btn border-slate-200 hover--border-slate-300 yi">
                            <svg class="o_ sq dd af" viewBox="0 0 16 16">
                                <path d="M5 7h2v6H5V7zm4 0h2v6H9V7zm3-6v2h4v2h-1v10c0 .6-.4 1-1 1H2c-.6 0-1-.4-1-1V5H0V3h4V1c0-.6.4-1 1-1h6c.6 0 1 .4 1 1zM6 2v1h4V2H6zm7 3H3v9h10V5z"></path>
                            </svg>
                            <span class="r_">Delete</span>
                        </button>
                        <!-- End -->
                    </div>
                </div>
            </div>

            <!-- Icon Buttons -->
            <div>
                <h2 class="gc text-slate-800 font-bold rb">Icon Buttons</h2>
                <div class="flex flex-wrap items-center nq">
                    <div class="nz">
                        <!-- Start -->
                        <button class="btn border-slate-200 hover--border-slate-300">
                            <svg class="o_ sq dd text-slate-500 af" viewBox="0 0 16 16">
                                <path
                                    d="M11.7.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM4.6 14H2v-2.6l6-6L10.6 8l-6 6zM12 6.6L9.4 4 11 2.4 13.6 5 12 6.6z"
                                ></path>
                            </svg>
                        </button>
                        <!-- End -->
                    </div>
                    <div class="nz">
                        <!-- Start -->
                        <button class="btn border-slate-200 hover--border-slate-300">
                            <svg class="o_ sq dd yi af" viewBox="0 0 16 16">
                                <path d="M5 7h2v6H5V7zm4 0h2v6H9V7zm3-6v2h4v2h-1v10c0 .6-.4 1-1 1H2c-.6 0-1-.4-1-1V5H0V3h4V1c0-.6.4-1 1-1h6c.6 0 1 .4 1 1zM6 2v1h4V2H6zm7 3H3v9h10V5z"></path>
                            </svg>
                        </button>
                        <!-- End -->
                    </div>
                    <div class="nz">
                        <!-- Start -->
                        <button class="btn border-slate-200 hover--border-slate-300">
                            <svg class="o_ sq dd text-indigo-500 af" viewBox="0 0 16 16">
                                <path d="M14.3 2.3L5 11.6 1.7 8.3c-.4-.4-1-.4-1.4 0-.4.4-.4 1 0 1.4l4 4c.2.2.4.3.7.3.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4-.4-.4-1-.4-1.4 0z"></path>
                            </svg>
                        </button>
                        <!-- End -->
                    </div>
                </div>
            </div>

            <!-- Button Groups -->
            <div>
                <h2 class="gc text-slate-800 font-bold rb">Button Groups</h2>
                <div class="flex flex-wrap items-center nq">
                    <div class="nz">
                        <!-- Start -->
                        <div class="flex flex-wrap fk">
                            <button class="btn pn ye cn hh wp wy wd">Weekly</button>
                            <button class="btn hd wq yp cn hh wp wy wd">Monthly</button>
                            <button class="btn hd wq yp cn hh wp wy wd">Yearly</button>
                        </div>
                        <!-- End -->
                    </div>
                    <div class="nz">
                        <!-- Start -->
                        <div class="flex flex-wrap fk">
                            <button class="btn hw border-slate-200 wz text-indigo-500 cn wp wy">Weekly</button>
                            <button class="btn bg-white border-slate-200 wz gz cn wp wy">Monthly</button>
                            <button class="btn bg-white border-slate-200 wz gz cn wp wy">Yearly</button>
                        </div>
                        <!-- End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection