@extends('layouts.admin.app')
@section('contents')
<div class="va jn teb vf ox uz ri">
    <!-- Page header -->
    <div class="_u _w _g ry">
        <!-- Left: Title -->
        <div class="rw kj">
            <h1 class="gc zc text-slate-800 font-bold">Acme Inc. Tasks ✨</h1>
        </div>

        <!-- Right: Actions -->
        <div class="sx fr _p fc _b fp">
            <!-- Add board button -->
            <button class="btn hd wq ye">
                <svg class="o_ sq dd bo af" viewBox="0 0 16 16">
                    <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"></path>
                </svg>
                <span class="r_">Add Board</span>
            </button>
        </div>
    </div>

    <!-- Filters -->
    <div class="rw cm border-slate-200">
        <ul class="text-sm gm flex fa rl k_ zw lj ta">
            <li class="mg ib last--mr-0 wm jf te_ wx jl tej">
                <a class="text-indigo-500 ct" href="#0">View All</a>
            </li>
            <li class="mg ib last--mr-0 wm jf te_ wx jl tej">
                <a class="text-slate-500 hover--text-slate-600 ct" href="#0">Web Sprint</a>
            </li>
            <li class="mg ib last--mr-0 wm jf te_ wx jl tej">
                <a class="text-slate-500 hover--text-slate-600 ct" href="#0">Marketing</a>
            </li>
            <li class="mg ib last--mr-0 wm jf te_ wx jl tej">
                <a class="text-slate-500 hover--text-slate-600 ct" href="#0">Development</a>
            </li>
        </ul>
    </div>

    <!-- Cards -->
    <div class="sx fi fb fw">
        <!-- Tasks cards -->
        <div class="nk kx tta">
            <header>
                <div class="flex items-center fh in">
                    <h2 class="al gg text-slate-800 lz">To Do’s 🖋️</h2>
                    <button class="af text-indigo-500 xu r_">
                        <svg class="o_ sq dd" viewBox="0 0 16 16"><path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"></path></svg>
                    </button>
                </div>
                <div class="sx fp">
                    <div class="bg-white bh rounded-sm border border-slate-200 vn">
                        <div class="it">
                            <h2 class="gg text-slate-800 rx">Managing teams (book)</h2>
                            <div>
                                <div class="text-sm">#7764 created by <a class="gm text-slate-800 xy" href="#0">markus-james</a></div>
                            </div>
                        </div>
                        <div class="flex items-center fh">
                            <div class="flex af lr se">
                                <a class="block" href="#0"> <img class="rounded-full cp c_ sw" src="images/user-28-07.jpg" width="28" height="28" alt="User 07" /> </a>
                                <a class="block" href="#0"> <img class="rounded-full cp c_ sw" src="images/user-28-11.jpg" width="28" height="28" alt="User 11" /> </a>
                            </div>
                            <div class="flex items-center">
                                <button class="flex items-center yt xf ml-3">
                                    <svg class="o_ sq af dd ik" viewBox="0 0 16 16">
                                        <path
                                            d="M14.682 2.318A4.485 4.485 0 0011.5 1 4.377 4.377 0 008 2.707 4.383 4.383 0 004.5 1a4.5 4.5 0 00-3.182 7.682L8 15l6.682-6.318a4.5 4.5 0 000-6.364zm-1.4 4.933L8 12.247l-5.285-5A2.5 2.5 0 014.5 3c1.437 0 2.312.681 3.5 2.625C9.187 3.681 10.062 3 11.5 3a2.5 2.5 0 011.785 4.251h-.003z"
                                        ></path>
                                    </svg>
                                    <div class="text-sm text-slate-500">4</div>
                                </button>
                                <button class="flex items-center yt xf ml-3">
                                    <svg class="o_ sq af dd ik" viewBox="0 0 16 16">
                                        <path d="M8 0C3.6 0 0 3.1 0 7s3.6 7 8 7h.6l5.4 2v-4.4c1.2-1.2 2-2.8 2-4.6 0-3.9-3.6-7-8-7zm4 10.8v2.3L8.9 12H8c-3.3 0-6-2.2-6-5s2.7-5 6-5 6 2.2 6 5c0 2.2-2 3.8-2 3.8z"></path>
                                    </svg>
                                    <div class="text-sm text-slate-500">7</div>
                                </button>
                                <button class="yt xf ml-3">
                                    <svg class="o_ sq af dd ik" viewBox="0 0 16 16">
                                        <path
                                            d="M11 0c1.3 0 2.6.5 3.5 1.5 1 .9 1.5 2.2 1.5 3.5 0 1.3-.5 2.6-1.4 3.5l-1.2 1.2c-.2.2-.5.3-.7.3-.2 0-.5-.1-.7-.3-.4-.4-.4-1 0-1.4l1.1-1.2c.6-.5.9-1.3.9-2.1s-.3-1.6-.9-2.2C12 1.7 10 1.7 8.9 2.8L7.7 4c-.4.4-1 .4-1.4 0-.4-.4-.4-1 0-1.4l1.2-1.1C8.4.5 9.7 0 11 0zM8.3 12c.4-.4 1-.5 1.4-.1.4.4.4 1 0 1.4l-1.2 1.2C7.6 15.5 6.3 16 5 16c-1.3 0-2.6-.5-3.5-1.5C.5 13.6 0 12.3 0 11c0-1.3.5-2.6 1.5-3.5l1.1-1.2c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4L2.9 8.9c-.6.5-.9 1.3-.9 2.1s.3 1.6.9 2.2c1.1 1.1 3.1 1.1 4.2 0L8.3 12zm1.1-6.8c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4l-4.2 4.2c-.2.2-.5.3-.7.3-.2 0-.5-.1-.7-.3-.4-.4-.4-1 0-1.4l4.2-4.2z"
                                        ></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white bh rounded-sm border border-slate-200 vn">
                        <div class="it">
                            <h2 class="gg text-slate-800 rx">User should receive a daily digest email</h2>
                            <div><div class="text-sm">Dedicated form for a category of users that will perform actions.</div></div>
                        </div>
                        <div class="flex items-center fh">
                            <button class="vs af rounded-full bg-white border border-slate-200 hover--border-slate-300 text-indigo-500 b_ we">
                                <span class="tc">Add</span> <svg class="w-3 h-3 dd" viewBox="0 0 12 12"><path d="M11 5H7V1a1 1 0 00-2 0v4H1a1 1 0 000 2h4v4a1 1 0 002 0V7h4a1 1 0 000-2z"></path></svg>
                            </button>
                            <div class="flex items-center">
                                <div class="flex items-center yl ml-3">
                                    <svg class="o_ sq af dd ik" viewBox="0 0 16 16"><path d="M15 2h-2V0h-2v2H9V0H7v2H5V0H3v2H1a1 1 0 00-1 1v12a1 1 0 001 1h14a1 1 0 001-1V3a1 1 0 00-1-1zm-1 12H2V6h12v8z"></path></svg>
                                    <div class="text-sm yo">Mar 27</div>
                                </div>
                                <button class="flex items-center yt xf ml-3">
                                    <svg class="o_ sq af dd ik" viewBox="0 0 16 16">
                                        <path d="M8 0C3.6 0 0 3.1 0 7s3.6 7 8 7h.6l5.4 2v-4.4c1.2-1.2 2-2.8 2-4.6 0-3.9-3.6-7-8-7zm4 10.8v2.3L8.9 12H8c-3.3 0-6-2.2-6-5s2.7-5 6-5 6 2.2 6 5c0 2.2-2 3.8-2 3.8z"></path>
                                    </svg>
                                    <div class="text-sm text-slate-500">6</div>
                                </button>
                                <button class="yt xf ml-3">
                                    <svg class="o_ sq af dd ik" viewBox="0 0 16 16">
                                        <path
                                            d="M11 0c1.3 0 2.6.5 3.5 1.5 1 .9 1.5 2.2 1.5 3.5 0 1.3-.5 2.6-1.4 3.5l-1.2 1.2c-.2.2-.5.3-.7.3-.2 0-.5-.1-.7-.3-.4-.4-.4-1 0-1.4l1.1-1.2c.6-.5.9-1.3.9-2.1s-.3-1.6-.9-2.2C12 1.7 10 1.7 8.9 2.8L7.7 4c-.4.4-1 .4-1.4 0-.4-.4-.4-1 0-1.4l1.2-1.1C8.4.5 9.7 0 11 0zM8.3 12c.4-.4 1-.5 1.4-.1.4.4.4 1 0 1.4l-1.2 1.2C7.6 15.5 6.3 16 5 16c-1.3 0-2.6-.5-3.5-1.5C.5 13.6 0 12.3 0 11c0-1.3.5-2.6 1.5-3.5l1.1-1.2c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4L2.9 8.9c-.6.5-.9 1.3-.9 2.1s.3 1.6.9 2.2c1.1 1.1 3.1 1.1 4.2 0L8.3 12zm1.1-6.8c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4l-4.2 4.2c-.2.2-.5.3-.7.3-.2 0-.5-.1-.7-.3-.4-.4-.4-1 0-1.4l4.2-4.2z"
                                        ></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white bh rounded-sm border border-slate-200 vn">
                        <div class="it"><h2 class="gg text-slate-800 rx">Change license and remove references to products</h2></div>
                        <div class="flex items-center fh">
                            <div class="flex af lr se">
                                <a class="block" href="#0"> <img class="rounded-full cp c_ sw" src="images/user-28-03.jpg" width="28" height="28" alt="User 03" /> </a>
                                <a class="block" href="#0"> <img class="rounded-full cp c_ sw" src="images/user-28-10.jpg" width="28" height="28" alt="User 10" /> </a>
                            </div>
                            <div class="flex items-center">
                                <button class="flex items-center yt xf ml-3">
                                    <svg class="o_ sq af dd ik" viewBox="0 0 16 16">
                                        <path d="M8 0C3.6 0 0 3.1 0 7s3.6 7 8 7h.6l5.4 2v-4.4c1.2-1.2 2-2.8 2-4.6 0-3.9-3.6-7-8-7zm4 10.8v2.3L8.9 12H8c-3.3 0-6-2.2-6-5s2.7-5 6-5 6 2.2 6 5c0 2.2-2 3.8-2 3.8z"></path>
                                    </svg>
                                    <div class="text-sm text-slate-500">4</div>
                                </button>
                                <button class="yt xf ml-3">
                                    <svg class="o_ sq af dd ik" viewBox="0 0 16 16">
                                        <path
                                            d="M11 0c1.3 0 2.6.5 3.5 1.5 1 .9 1.5 2.2 1.5 3.5 0 1.3-.5 2.6-1.4 3.5l-1.2 1.2c-.2.2-.5.3-.7.3-.2 0-.5-.1-.7-.3-.4-.4-.4-1 0-1.4l1.1-1.2c.6-.5.9-1.3.9-2.1s-.3-1.6-.9-2.2C12 1.7 10 1.7 8.9 2.8L7.7 4c-.4.4-1 .4-1.4 0-.4-.4-.4-1 0-1.4l1.2-1.1C8.4.5 9.7 0 11 0zM8.3 12c.4-.4 1-.5 1.4-.1.4.4.4 1 0 1.4l-1.2 1.2C7.6 15.5 6.3 16 5 16c-1.3 0-2.6-.5-3.5-1.5C.5 13.6 0 12.3 0 11c0-1.3.5-2.6 1.5-3.5l1.1-1.2c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4L2.9 8.9c-.6.5-.9 1.3-.9 2.1s.3 1.6.9 2.2c1.1 1.1 3.1 1.1 4.2 0L8.3 12zm1.1-6.8c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4l-4.2 4.2c-.2.2-.5.3-.7.3-.2 0-.5-.1-.7-.3-.4-.4-.4-1 0-1.4l4.2-4.2z"
                                        ></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>
        <div class="nk kx tta">
            <header>
                <div class="flex items-center fh in">
                    <h2 class="al gg text-slate-800 lz">In Progress ✌️</h2>
                    <button class="af text-indigo-500 xu r_">
                        <svg class="o_ sq dd" viewBox="0 0 16 16"><path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"></path></svg>
                    </button>
                </div>
                <div class="sx fp">
                    <div class="bg-white bh rounded-sm border border-slate-200 vn">
                        <div class="it"><h2 class="gg text-slate-800 rx">Managing teams (book)</h2></div>
                        <div class="flex items-center fh">
                            <div class="flex af lr se">
                                <a class="block" href="#0"> <img class="rounded-full cp c_ sw" src="images/user-28-06.jpg" width="28" height="28" alt="User 06" /> </a>
                            </div>
                            <div class="flex items-center">
                                <div class="flex items-center yt ml-3">
                                    <svg class="o_ sq af dd ik" viewBox="0 0 16 16">
                                        <path
                                            d="M6.974 14c-.3 0-.7-.2-.9-.5l-2.2-3.7-2.1 2.8c-.3.4-1 .5-1.4.2-.4-.3-.5-1-.2-1.4l3-4c.2-.3.5-.4.9-.4.3 0 .6.2.8.5l2 3.3 3.3-8.1c0-.4.4-.7.8-.7s.8.2.9.6l4 8c.2.5 0 1.1-.4 1.3-.5.2-1.1 0-1.3-.4l-3-6-3.2 7.9c-.2.4-.6.6-1 .6z"
                                        ></path>
                                    </svg>
                                    <div class="text-sm text-slate-500">1/3</div>
                                </div>
                                <button class="yt xf ml-3">
                                    <svg class="o_ sq af dd ik" viewBox="0 0 16 16">
                                        <path
                                            d="M11 0c1.3 0 2.6.5 3.5 1.5 1 .9 1.5 2.2 1.5 3.5 0 1.3-.5 2.6-1.4 3.5l-1.2 1.2c-.2.2-.5.3-.7.3-.2 0-.5-.1-.7-.3-.4-.4-.4-1 0-1.4l1.1-1.2c.6-.5.9-1.3.9-2.1s-.3-1.6-.9-2.2C12 1.7 10 1.7 8.9 2.8L7.7 4c-.4.4-1 .4-1.4 0-.4-.4-.4-1 0-1.4l1.2-1.1C8.4.5 9.7 0 11 0zM8.3 12c.4-.4 1-.5 1.4-.1.4.4.4 1 0 1.4l-1.2 1.2C7.6 15.5 6.3 16 5 16c-1.3 0-2.6-.5-3.5-1.5C.5 13.6 0 12.3 0 11c0-1.3.5-2.6 1.5-3.5l1.1-1.2c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4L2.9 8.9c-.6.5-.9 1.3-.9 2.1s.3 1.6.9 2.2c1.1 1.1 3.1 1.1 4.2 0L8.3 12zm1.1-6.8c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4l-4.2 4.2c-.2.2-.5.3-.7.3-.2 0-.5-.1-.7-.3-.4-.4-.4-1 0-1.4l4.2-4.2z"
                                        ></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <ul class="ip">
                            <li class="flex items-center cg border-slate-200 vc">
                                <svg class="w-3 h-3 af dd yf mr-2" viewBox="0 0 12 12"><path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z"></path></svg>
                                <div class="text-sm yt bn">Implement new designs</div>
                            </li>
                            <li class="flex items-center cg border-slate-200 vc">
                                <svg class="w-3 h-3 af dd yt mr-2" viewBox="0 0 12 12"><path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z"></path></svg>
                                <div class="text-sm">Usability testing</div>
                            </li>
                            <li class="flex items-center cg border-slate-200 vc">
                                <svg class="w-3 h-3 af dd yt mr-2" viewBox="0 0 12 12"><path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z"></path></svg>
                                <div class="text-sm">Design navigation changes</div>
                            </li>
                        </ul>
                    </div>
                    <div class="bg-white bh rounded-sm border border-slate-200 vn">
                        <div class="it">
                            <h2 class="gg text-slate-800 rx">Product Update - Q4 2021</h2>
                            <div>
                                <div class="text-sm">Dedicated form for a category of users that will perform actions.</div>
                                <img class="ox ip" src="images/task-image-01.jpg" width="259" height="142" alt="Task 01" />
                            </div>
                        </div>
                        <div class="flex items-center fh">
                            <div class="flex af lr se">
                                <a class="block" href="#0"> <img class="rounded-full cp c_ sw" src="images/user-28-05.jpg" width="28" height="28" alt="User 05" /> </a>
                                <a class="block" href="#0"> <img class="rounded-full cp c_ sw" src="images/user-28-02.jpg" width="28" height="28" alt="User 02" /> </a>
                            </div>
                            <div class="flex items-center">
                                <div class="flex items-center yl ml-3">
                                    <svg class="o_ sq af dd ik" viewBox="0 0 16 16"><path d="M15 2h-2V0h-2v2H9V0H7v2H5V0H3v2H1a1 1 0 00-1 1v12a1 1 0 001 1h14a1 1 0 001-1V3a1 1 0 00-1-1zm-1 12H2V6h12v8z"></path></svg>
                                    <div class="text-sm yo">Mar 27</div>
                                </div>
                                <button class="yt xf ml-3">
                                    <svg class="o_ sq af dd ik" viewBox="0 0 16 16">
                                        <path
                                            d="M11 0c1.3 0 2.6.5 3.5 1.5 1 .9 1.5 2.2 1.5 3.5 0 1.3-.5 2.6-1.4 3.5l-1.2 1.2c-.2.2-.5.3-.7.3-.2 0-.5-.1-.7-.3-.4-.4-.4-1 0-1.4l1.1-1.2c.6-.5.9-1.3.9-2.1s-.3-1.6-.9-2.2C12 1.7 10 1.7 8.9 2.8L7.7 4c-.4.4-1 .4-1.4 0-.4-.4-.4-1 0-1.4l1.2-1.1C8.4.5 9.7 0 11 0zM8.3 12c.4-.4 1-.5 1.4-.1.4.4.4 1 0 1.4l-1.2 1.2C7.6 15.5 6.3 16 5 16c-1.3 0-2.6-.5-3.5-1.5C.5 13.6 0 12.3 0 11c0-1.3.5-2.6 1.5-3.5l1.1-1.2c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4L2.9 8.9c-.6.5-.9 1.3-.9 2.1s.3 1.6.9 2.2c1.1 1.1 3.1 1.1 4.2 0L8.3 12zm1.1-6.8c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4l-4.2 4.2c-.2.2-.5.3-.7.3-.2 0-.5-.1-.7-.3-.4-.4-.4-1 0-1.4l4.2-4.2z"
                                        ></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>
        <div class="nk kx tta">
            <header>
                <div class="flex items-center fh in">
                    <h2 class="al gg text-slate-800 lz">Completed 🎉</h2>
                    <button class="af text-indigo-500 xu r_">
                        <svg class="o_ sq dd" viewBox="0 0 16 16"><path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"></path></svg>
                    </button>
                </div>
                <div class="sx fp">
                    <div class="bg-white bh rounded-sm border border-slate-200 vn">
                        <div class="it">
                            <h2 class="gg text-slate-800 rx">Design new diagrams</h2>
                            <div>
                                <div class="text-sm">#7896 created by <a class="gm text-slate-800 xy" href="#0">jerzy-wierzy</a></div>
                            </div>
                        </div>
                        <div class="flex items-center fh">
                            <div class="flex af lr se">
                                <a class="block" href="#0"> <img class="rounded-full cp c_ sw" src="images/user-28-12.jpg" width="28" height="28" alt="User 12" /> </a>
                                <a class="block" href="#0"> <img class="rounded-full cp c_ sw" src="images/user-28-02.jpg" width="28" height="28" alt="User 02" /> </a>
                            </div>
                            <div class="flex items-center">
                                <button class="flex items-center yt xf ml-3">
                                    <svg class="o_ sq af dd ik" viewBox="0 0 16 16">
                                        <path
                                            d="M14.682 2.318A4.485 4.485 0 0011.5 1 4.377 4.377 0 008 2.707 4.383 4.383 0 004.5 1a4.5 4.5 0 00-3.182 7.682L8 15l6.682-6.318a4.5 4.5 0 000-6.364zm-1.4 4.933L8 12.247l-5.285-5A2.5 2.5 0 014.5 3c1.437 0 2.312.681 3.5 2.625C9.187 3.681 10.062 3 11.5 3a2.5 2.5 0 011.785 4.251h-.003z"
                                        ></path>
                                    </svg>
                                    <div class="text-sm text-slate-500">4</div>
                                </button>
                                <button class="flex items-center yt xf ml-3">
                                    <svg class="o_ sq af dd ik" viewBox="0 0 16 16">
                                        <path d="M8 0C3.6 0 0 3.1 0 7s3.6 7 8 7h.6l5.4 2v-4.4c1.2-1.2 2-2.8 2-4.6 0-3.9-3.6-7-8-7zm4 10.8v2.3L8.9 12H8c-3.3 0-6-2.2-6-5s2.7-5 6-5 6 2.2 6 5c0 2.2-2 3.8-2 3.8z"></path>
                                    </svg>
                                    <div class="text-sm text-slate-500">7</div>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white bh rounded-sm border border-slate-200 vn">
                        <div class="it"><h2 class="gg text-slate-800 rx">Manage internal feedback</h2></div>
                        <div class="flex items-center fh">
                            <div class="flex af lr se">
                                <a class="block" href="#0"> <img class="rounded-full cp c_ sw" src="images/user-28-08.jpg" width="28" height="28" alt="User 08" /> </a>
                            </div>
                            <div class="flex items-center">
                                <div class="flex items-center yt ml-3">
                                    <svg class="o_ sq af dd ik" viewBox="0 0 16 16">
                                        <path
                                            d="M6.974 14c-.3 0-.7-.2-.9-.5l-2.2-3.7-2.1 2.8c-.3.4-1 .5-1.4.2-.4-.3-.5-1-.2-1.4l3-4c.2-.3.5-.4.9-.4.3 0 .6.2.8.5l2 3.3 3.3-8.1c0-.4.4-.7.8-.7s.8.2.9.6l4 8c.2.5 0 1.1-.4 1.3-.5.2-1.1 0-1.3-.4l-3-6-3.2 7.9c-.2.4-.6.6-1 .6z"
                                        ></path>
                                    </svg>
                                    <div class="text-sm text-slate-500">2/2</div>
                                </div>
                                <button class="yt xf ml-3">
                                    <svg class="o_ sq af dd ik" viewBox="0 0 16 16">
                                        <path
                                            d="M11 0c1.3 0 2.6.5 3.5 1.5 1 .9 1.5 2.2 1.5 3.5 0 1.3-.5 2.6-1.4 3.5l-1.2 1.2c-.2.2-.5.3-.7.3-.2 0-.5-.1-.7-.3-.4-.4-.4-1 0-1.4l1.1-1.2c.6-.5.9-1.3.9-2.1s-.3-1.6-.9-2.2C12 1.7 10 1.7 8.9 2.8L7.7 4c-.4.4-1 .4-1.4 0-.4-.4-.4-1 0-1.4l1.2-1.1C8.4.5 9.7 0 11 0zM8.3 12c.4-.4 1-.5 1.4-.1.4.4.4 1 0 1.4l-1.2 1.2C7.6 15.5 6.3 16 5 16c-1.3 0-2.6-.5-3.5-1.5C.5 13.6 0 12.3 0 11c0-1.3.5-2.6 1.5-3.5l1.1-1.2c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4L2.9 8.9c-.6.5-.9 1.3-.9 2.1s.3 1.6.9 2.2c1.1 1.1 3.1 1.1 4.2 0L8.3 12zm1.1-6.8c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4l-4.2 4.2c-.2.2-.5.3-.7.3-.2 0-.5-.1-.7-.3-.4-.4-.4-1 0-1.4l4.2-4.2z"
                                        ></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <ul class="ip">
                            <li class="flex items-center cg border-slate-200 vc">
                                <svg class="w-3 h-3 af dd yf mr-2" viewBox="0 0 12 12"><path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z"></path></svg>
                                <div class="text-sm yt bn">Call with incoming clients</div>
                            </li>
                            <li class="flex items-center cg border-slate-200 vc">
                                <svg class="w-3 h-3 af dd yf mr-2" viewBox="0 0 12 12"><path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z"></path></svg>
                                <div class="text-sm yt bn">Manage inbound deals</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </header>
        </div>
        <div class="nk kx tta">
            <header>
                <div class="flex items-center fh in">
                    <h2 class="al gg text-slate-800 lz">Notes 📒</h2>
                    <button class="af text-indigo-500 xu r_">
                        <svg class="o_ sq dd" viewBox="0 0 16 16"><path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"></path></svg>
                    </button>
                </div>
                <div class="sx fp">
                    <div class="bg-white bh rounded-sm border border-slate-200 vn">
                        <div class="it">
                            <div class="flex items-center in">
                                <div class="flex af lr se mr-2">
                                    <a class="block" href="#0"> <img class="rounded-full cp c_ sw" src="images/user-28-12.jpg" width="28" height="28" alt="User 12" /> </a>
                                </div>
                                <div class="al">
                                    <a class="inline-flex text-slate-800 xd" href="#0"> <h2 class="gg text-slate-800">Adrian Przetocki</h2> </a>
                                    <div class="gp gm text-slate-500">11:51 AM Jan 12</div>
                                </div>
                            </div>
                            <div>
                                <div class="text-sm">Publishing industries for previewing layouts and visual <a class="gm text-indigo-500 xu" href="#0">#family</a> 🔥</div>
                                <img class="ox ip" src="images/task-image-02.jpg" width="259" height="142" alt="Task 02" />
                            </div>
                        </div>
                        <div class="flex items-center fh">
                            <div></div>
                            <div class="flex items-center">
                                <button class="flex items-center yt xf ml-3">
                                    <svg class="o_ sq af dd ik" viewBox="0 0 16 16">
                                        <path
                                            d="M14.682 2.318A4.485 4.485 0 0011.5 1 4.377 4.377 0 008 2.707 4.383 4.383 0 004.5 1a4.5 4.5 0 00-3.182 7.682L8 15l6.682-6.318a4.5 4.5 0 000-6.364zm-1.4 4.933L8 12.247l-5.285-5A2.5 2.5 0 014.5 3c1.437 0 2.312.681 3.5 2.625C9.187 3.681 10.062 3 11.5 3a2.5 2.5 0 011.785 4.251h-.003z"
                                        ></path>
                                    </svg>
                                    <div class="text-sm text-slate-500">4</div>
                                </button>
                                <button class="flex items-center yt xf ml-3">
                                    <svg class="o_ sq af dd ik" viewBox="0 0 16 16">
                                        <path d="M8 0C3.6 0 0 3.1 0 7s3.6 7 8 7h.6l5.4 2v-4.4c1.2-1.2 2-2.8 2-4.6 0-3.9-3.6-7-8-7zm4 10.8v2.3L8.9 12H8c-3.3 0-6-2.2-6-5s2.7-5 6-5 6 2.2 6 5c0 2.2-2 3.8-2 3.8z"></path>
                                    </svg>
                                    <div class="text-sm text-slate-500">16</div>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white bh rounded-sm border border-slate-200 vn">
                        <div class="it">
                            <div class="flex items-center in">
                                <div class="flex af lr se mr-2">
                                    <a class="block" href="#0"> <img class="rounded-full cp c_ sw" src="images/user-28-12.jpg" width="28" height="28" alt="User 12" /> </a>
                                </div>
                                <div class="al">
                                    <a class="inline-flex text-slate-800 xd" href="#0"> <h2 class="gg text-slate-800">Adrian Przetocki</h2> </a>
                                    <div class="gp gm text-slate-500">11:51 AM Jan 12</div>
                                </div>
                            </div>
                            <div>
                                <div class="text-sm">Dedicated form for a category of users that will perform actions? <a class="gm text-indigo-500 xu" href="#0">#viewall</a></div>
                            </div>
                        </div>
                        <div class="flex items-center fh">
                            <div></div>
                            <div class="flex items-center">
                                <button class="flex items-center yt xf ml-3">
                                    <svg class="o_ sq af dd ik" viewBox="0 0 16 16">
                                        <path
                                            d="M14.682 2.318A4.485 4.485 0 0011.5 1 4.377 4.377 0 008 2.707 4.383 4.383 0 004.5 1a4.5 4.5 0 00-3.182 7.682L8 15l6.682-6.318a4.5 4.5 0 000-6.364zm-1.4 4.933L8 12.247l-5.285-5A2.5 2.5 0 014.5 3c1.437 0 2.312.681 3.5 2.625C9.187 3.681 10.062 3 11.5 3a2.5 2.5 0 011.785 4.251h-.003z"
                                        ></path>
                                    </svg>
                                    <div class="text-sm text-slate-500">6</div>
                                </button>
                                <button class="flex items-center yt xf ml-3">
                                    <svg class="o_ sq af dd ik" viewBox="0 0 16 16">
                                        <path d="M8 0C3.6 0 0 3.1 0 7s3.6 7 8 7h.6l5.4 2v-4.4c1.2-1.2 2-2.8 2-4.6 0-3.9-3.6-7-8-7zm4 10.8v2.3L8.9 12H8c-3.3 0-6-2.2-6-5s2.7-5 6-5 6 2.2 6 5c0 2.2-2 3.8-2 3.8z"></path>
                                    </svg>
                                    <div class="text-sm text-slate-500">7</div>
                                </button>
                                <button class="yt xf ml-3">
                                    <svg class="o_ sq af dd ik" viewBox="0 0 16 16">
                                        <path
                                            d="M11 0c1.3 0 2.6.5 3.5 1.5 1 .9 1.5 2.2 1.5 3.5 0 1.3-.5 2.6-1.4 3.5l-1.2 1.2c-.2.2-.5.3-.7.3-.2 0-.5-.1-.7-.3-.4-.4-.4-1 0-1.4l1.1-1.2c.6-.5.9-1.3.9-2.1s-.3-1.6-.9-2.2C12 1.7 10 1.7 8.9 2.8L7.7 4c-.4.4-1 .4-1.4 0-.4-.4-.4-1 0-1.4l1.2-1.1C8.4.5 9.7 0 11 0zM8.3 12c.4-.4 1-.5 1.4-.1.4.4.4 1 0 1.4l-1.2 1.2C7.6 15.5 6.3 16 5 16c-1.3 0-2.6-.5-3.5-1.5C.5 13.6 0 12.3 0 11c0-1.3.5-2.6 1.5-3.5l1.1-1.2c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4L2.9 8.9c-.6.5-.9 1.3-.9 2.1s.3 1.6.9 2.2c1.1 1.1 3.1 1.1 4.2 0L8.3 12zm1.1-6.8c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4l-4.2 4.2c-.2.2-.5.3-.7.3-.2 0-.5-.1-.7-.3-.4-.4-.4-1 0-1.4l4.2-4.2z"
                                        ></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>
    </div>
</div>
@endsection