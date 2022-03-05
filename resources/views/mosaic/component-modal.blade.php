@extends('layouts.admin.app')
@section('contents')
<div class="va jn teb vf ox uz ri">
    <!-- Page header -->
    <div class="ry">
        <h1 class="gc zc text-slate-800 font-bold">Modal ✨</h1>
    </div>

    <div class="cg border-slate-200">
        <!-- Components -->
        <div class="ln ie">
            <!-- Basic -->
            <div>
                <h2 class="gc text-slate-800 font-bold rb">Basic</h2>
                <div class="flex flex-wrap items-center nq">
                    <!-- Basic Modal -->
                    <div class="nz">
                        <!-- Start -->
                        <div x-data="{ modalOpen: false }">
                            <button class="btn hd wq ye" @click.prevent="modalOpen = true" aria-controls="basic-modal">Basic Modal</button>
                            <!-- Modal backdrop -->
                            <div
                                class="th tm bg-slate-900 pd nm bj"
                                x-show="modalOpen"
                                x-transition:enter="b_ ws wn"
                                x-transition:enter-start="opacity-0"
                                x-transition:enter-end="bf"
                                x-transition:leave="b_ ws wt"
                                x-transition:leave-start="bf"
                                x-transition:leave-end="opacity-0"
                                aria-hidden="true"
                                x-cloak=""
                            ></div>
                            <!-- Modal dialog -->
                            <div
                                id="basic-modal"
                                class="th tm nm lw flex items-center rf justify-center a_ va jn"
                                role="dialog"
                                aria-modal="true"
                                x-show="modalOpen"
                                x-transition:enter="b_ wi wn"
                                x-transition:enter-start="opacity-0 ab"
                                x-transition:enter-end="bf ag"
                                x-transition:leave="b_ wi wn"
                                x-transition:leave-start="bf ag"
                                x-transition:leave-end="opacity-0 ab"
                                x-cloak=""
                            >
                                <div class="bg-white rounded bh lb ai ox oy" @click.outside="modalOpen = false" @keydown.escape.window="modalOpen = false">
                                    <!-- Modal header -->
                                    <div class="v_ vl cm border-slate-200">
                                        <div class="flex fh items-center">
                                            <div class="gg text-slate-800">Basic Modal</div>
                                            <button class="yt xa" @click="modalOpen = false">
                                                <div class="tc">Close</div>
                                                <svg class="o_ sq dd">
                                                    <path
                                                        d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"
                                                    ></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- Modal content -->
                                    <div class="v_ mp md">
                                        <div class="text-sm">
                                            <div class="gm text-slate-800 in">Let’s Talk Paragraph</div>
                                            <div class="fz">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                <p>
                                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                                    officia deserunt mollit anim id est laborum.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal footer -->
                                    <div class="v_ vj">
                                        <div class="flex flex-wrap justify-end f_">
                                            <button class="tt border-slate-200 hover--border-slate-300 gz" @click="modalOpen = false">Close</button>
                                            <button class="tt hd wq ye">I Understand</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End -->
                    </div>

                    <!-- Modal w/ Scroll Bar -->
                    <div class="nz">
                        <!-- Start -->
                        <div x-data="{ modalOpen: false }">
                            <button class="btn hd wq ye" @click.prevent="modalOpen = true" aria-controls="scrollbar-modal">Modal w/ Scroll Bar</button>
                            <!-- Modal backdrop -->
                            <div
                                class="th tm bg-slate-900 pd nm bj"
                                x-show="modalOpen"
                                x-transition:enter="b_ ws wn"
                                x-transition:enter-start="opacity-0"
                                x-transition:enter-end="bf"
                                x-transition:leave="b_ ws wt"
                                x-transition:leave-start="bf"
                                x-transition:leave-end="opacity-0"
                                aria-hidden="true"
                                x-cloak=""
                            ></div>
                            <!-- Modal dialog -->
                            <div
                                id="scrollbar-modal"
                                class="th tm nm lw flex items-center rf justify-center a_ va jn"
                                role="dialog"
                                aria-modal="true"
                                x-show="modalOpen"
                                x-transition:enter="b_ wi wn"
                                x-transition:enter-start="opacity-0 ab"
                                x-transition:enter-end="bf ag"
                                x-transition:leave="b_ wi wn"
                                x-transition:leave-start="bf ag"
                                x-transition:leave-end="opacity-0 ab"
                                x-cloak=""
                            >
                                <div class="bg-white rounded bh lb ai ox ob" @click.outside="modalOpen = false" @keydown.escape.window="modalOpen = false">
                                    <!-- Modal header -->
                                    <div class="tv tk v_ vl bg-white cm border-slate-200">
                                        <div class="flex fh items-center">
                                            <div class="gg text-slate-800">Modal w/ Scroll Bar</div>
                                            <button class="yt xa" @click="modalOpen = false">
                                                <div class="tc">Close</div>
                                                <svg class="o_ sq dd">
                                                    <path
                                                        d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"
                                                    ></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- Modal content -->
                                    <div class="v_ vj">
                                        <div class="text-sm">
                                            <div class="gm text-slate-800 in">Let’s Talk Paragraph</div>
                                            <div class="fz">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                <p>
                                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                                    officia deserunt mollit anim id est laborum.
                                                </p>
                                                <p>
                                                    Ullamcorper malesuada proin libero nunc consequat interdum varius sit. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Mattis enim ut
                                                    tellus elementum el fringilla est ullamcorper eget nulla. Enim eu turpis egestas pretium aenean pharetra magna. Aliquam id diam maecenas ultricies mi eget us mauris
                                                    vitae ultricies leo integer t malesuada fames ac turpis egestas maecenas pharetra volutpat lacus laoreet non.
                                                </p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                <p>
                                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                                    officia deserunt mollit anim id est laborum.
                                                </p>
                                                <p>
                                                    Ullamcorper malesuada proin libero nunc consequat interdum varius sit. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Mattis enim ut
                                                    tellus elementum el fringilla est ullamcorper eget nulla. Enim eu turpis egestas pretium aenean pharetra magna. Aliquam id diam maecenas ultricies mi eget us mauris
                                                    vitae ultricies leo integer t malesuada fames ac turpis egestas maecenas pharetra volutpat lacus laoreet non.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal footer -->
                                    <div class="tv ty v_ vj bg-white cg border-slate-200">
                                        <div class="flex flex-wrap justify-end f_">
                                            <button class="tt border-slate-200 hover--border-slate-300 gz" @click="modalOpen = false">Close</button>
                                            <button class="tt hd wq ye">I Understand</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End -->
                    </div>

                    <!-- Cookies -->
                    <div class="nz">
                        <!-- Start -->
                        <div x-data="{ modalOpen: false }">
                            <button class="btn hd wq ye" @click.prevent="modalOpen = true" aria-controls="cookies-modal">Cookies</button>
                            <!-- Modal backdrop -->
                            <div
                                class="th tm bg-slate-900 pd nm bj"
                                x-show="modalOpen"
                                x-transition:enter="b_ ws wn"
                                x-transition:enter-start="opacity-0"
                                x-transition:enter-end="bf"
                                x-transition:leave="b_ ws wt"
                                x-transition:leave-start="bf"
                                x-transition:leave-end="opacity-0"
                                aria-hidden="true"
                                x-cloak=""
                            ></div>
                            <!-- Modal dialog -->
                            <div
                                id="cookies-modal"
                                class="th tm nm lw flex items-center rf justify-center a_ va jn"
                                role="dialog"
                                aria-modal="true"
                                x-show="modalOpen"
                                x-transition:enter="b_ wi wn"
                                x-transition:enter-start="opacity-0 ab"
                                x-transition:enter-end="bf ag"
                                x-transition:leave="b_ wi wn"
                                x-transition:leave-start="bf ag"
                                x-transition:leave-end="opacity-0 ab"
                                x-cloak=""
                            >
                                <div class="bg-white rounded bh lb ai ox oy" @click.outside="modalOpen = false" @keydown.escape.window="modalOpen = false">
                                    <div class="vi">
                                        <!-- Modal header -->
                                        <div class="in">
                                            <div class="flex fh items-center">
                                                <div class="gv gg text-slate-800">We use cookies 🍪</div>
                                                <button class="yt xa" @click="modalOpen = false">
                                                    <div class="tc">Close</div>
                                                    <svg class="o_ sq dd">
                                                        <path
                                                            d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"
                                                        ></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                        <!-- Modal content -->
                                        <div class="text-sm ic">
                                            <div class="fz">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                <p>
                                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                                    officia deserunt mollit anim id est laborum.
                                                </p>
                                            </div>
                                        </div>
                                        <!-- Modal footer -->
                                        <div class="flex flex-wrap justify-end f_">
                                            <button class="tt border-slate-200 hover--border-slate-300 gz" @click="modalOpen = false">Decline</button>
                                            <button class="tt hd wq ye" @click="modalOpen = false">I Accept</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End -->
                    </div>
                </div>
            </div>

            <!-- Feedback -->
            <div>
                <h2 class="gc text-slate-800 font-bold rb">Feedback</h2>
                <div class="flex flex-wrap items-center nq">
                    <!-- Success Modal -->
                    <div class="nz">
                        <!-- Start -->
                        <div x-data="{ modalOpen: false }">
                            <button class="btn hd wq ye" @click.prevent="modalOpen = true" aria-controls="success-modal">Success Modal</button>
                            <!-- Modal backdrop -->
                            <div
                                class="th tm bg-slate-900 pd nm bj"
                                x-show="modalOpen"
                                x-transition:enter="b_ ws wn"
                                x-transition:enter-start="opacity-0"
                                x-transition:enter-end="bf"
                                x-transition:leave="b_ ws wt"
                                x-transition:leave-start="bf"
                                x-transition:leave-end="opacity-0"
                                aria-hidden="true"
                                x-cloak=""
                            ></div>
                            <!-- Modal dialog -->
                            <div
                                id="success-modal"
                                class="th tm nm lw flex items-center rf justify-center a_ va jn"
                                role="dialog"
                                aria-modal="true"
                                x-show="modalOpen"
                                x-transition:enter="b_ wi wn"
                                x-transition:enter-start="opacity-0 ab"
                                x-transition:enter-end="bf ag"
                                x-transition:leave="b_ wi wn"
                                x-transition:leave-start="bf ag"
                                x-transition:leave-end="opacity-0 ab"
                                x-cloak=""
                            >
                                <div class="bg-white rounded bh lb ai ox oy" @click.outside="modalOpen = false" @keydown.escape.window="modalOpen = false">
                                    <div class="vi flex fq">
                                        <!-- Icon -->
                                        <div class="ur oi rounded-full flex items-center justify-center af hx">
                                            <svg class="o_ sq af dd yf" viewBox="0 0 16 16">
                                                <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zM7 11.4L3.6 8 5 6.6l2 2 4-4L12.4 6 7 11.4z"></path>
                                            </svg>
                                        </div>
                                        <!-- Content -->
                                        <div>
                                            <!-- Modal header -->
                                            <div class="in">
                                                <div class="gv gg text-slate-800">Upgrade your Subscription?</div>
                                            </div>
                                            <!-- Modal content -->
                                            <div class="text-sm ih">
                                                <div class="fz">
                                                    <p>Semper eget duis at tellus at urna condimentum mattis pellentesque lacus suspendisse faucibus interdum.</p>
                                                </div>
                                            </div>
                                            <!-- Modal footer -->
                                            <div class="flex flex-wrap justify-end f_">
                                                <button class="tt border-slate-200 hover--border-slate-300 gz" @click="modalOpen = false">Cancel</button>
                                                <button class="tt hd wq ye">Yes, Upgrade it</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End -->
                    </div>

                    <!-- Danger Modal -->
                    <div class="nz">
                        <!-- Start -->
                        <div x-data="{ modalOpen: false }">
                            <button class="btn hd wq ye" @click.prevent="modalOpen = true" aria-controls="danger-modal">Danger Modal</button>
                            <!-- Modal backdrop -->
                            <div
                                class="th tm bg-slate-900 pd nm bj"
                                x-show="modalOpen"
                                x-transition:enter="b_ ws wn"
                                x-transition:enter-start="opacity-0"
                                x-transition:enter-end="bf"
                                x-transition:leave="b_ ws wt"
                                x-transition:leave-start="bf"
                                x-transition:leave-end="opacity-0"
                                aria-hidden="true"
                                x-cloak=""
                            ></div>
                            <!-- Modal dialog -->
                            <div
                                id="danger-modal"
                                class="th tm nm lw flex items-center rf justify-center a_ va jn"
                                role="dialog"
                                aria-modal="true"
                                x-show="modalOpen"
                                x-transition:enter="b_ wi wn"
                                x-transition:enter-start="opacity-0 ab"
                                x-transition:enter-end="bf ag"
                                x-transition:leave="b_ wi wn"
                                x-transition:leave-start="bf ag"
                                x-transition:leave-end="opacity-0 ab"
                                x-cloak=""
                            >
                                <div class="bg-white rounded bh lb ai ox oy" @click.outside="modalOpen = false" @keydown.escape.window="modalOpen = false">
                                    <div class="vi flex fq">
                                        <!-- Icon -->
                                        <div class="ur oi rounded-full flex items-center justify-center af h_">
                                            <svg class="o_ sq af dd yi" viewBox="0 0 16 16">
                                                <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 12c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm1-3H7V4h2v5z"></path>
                                            </svg>
                                        </div>
                                        <!-- Content -->
                                        <div>
                                            <!-- Modal header -->
                                            <div class="in">
                                                <div class="gv gg text-slate-800">Delete 1 customer?</div>
                                            </div>
                                            <!-- Modal content -->
                                            <div class="text-sm ih">
                                                <div class="fz">
                                                    <p>Semper eget duis at tellus at urna condimentum mattis pellentesque lacus suspendisse faucibus interdum.</p>
                                                </div>
                                            </div>
                                            <!-- Modal footer -->
                                            <div class="flex flex-wrap justify-end f_">
                                                <button class="tt border-slate-200 hover--border-slate-300 gz" @click="modalOpen = false">Cancel</button>
                                                <button class="tt hq xt ye">Yes, Delete it</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End -->
                    </div>

                    <!-- Info Modal -->
                    <div class="nz">
                        <!-- Start -->
                        <div x-data="{ modalOpen: false }">
                            <button class="btn hd wq ye" @click.prevent="modalOpen = true" aria-controls="info-modal">Info Modal</button>
                            <!-- Modal backdrop -->
                            <div
                                class="th tm bg-slate-900 pd nm bj"
                                x-show="modalOpen"
                                x-transition:enter="b_ ws wn"
                                x-transition:enter-start="opacity-0"
                                x-transition:enter-end="bf"
                                x-transition:leave="b_ ws wt"
                                x-transition:leave-start="bf"
                                x-transition:leave-end="opacity-0"
                                aria-hidden="true"
                                x-cloak=""
                            ></div>
                            <!-- Modal dialog -->
                            <div
                                id="info-modal"
                                class="th tm nm lw flex items-center rf justify-center a_ va jn"
                                role="dialog"
                                aria-modal="true"
                                x-show="modalOpen"
                                x-transition:enter="b_ wi wn"
                                x-transition:enter-start="opacity-0 ab"
                                x-transition:enter-end="bf ag"
                                x-transition:leave="b_ wi wn"
                                x-transition:leave-start="bf ag"
                                x-transition:leave-end="opacity-0 ab"
                                x-cloak=""
                            >
                                <div class="bg-white rounded bh lb ai ox oy" @click.outside="modalOpen = false" @keydown.escape.window="modalOpen = false">
                                    <div class="vi flex fq">
                                        <!-- Icon -->
                                        <div class="ur oi rounded-full flex items-center justify-center af hz">
                                            <svg class="o_ sq af dd text-indigo-500" viewBox="0 0 16 16">
                                                <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm1 12H7V7h2v5zM8 6c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1z"></path>
                                            </svg>
                                        </div>
                                        <!-- Content -->
                                        <div>
                                            <!-- Modal header -->
                                            <div class="in">
                                                <div class="gv gg text-slate-800">Create new Event?</div>
                                            </div>
                                            <!-- Modal content -->
                                            <div class="text-sm ih">
                                                <div class="fz">
                                                    <p>Semper eget duis at tellus at urna condimentum mattis pellentesque lacus suspendisse faucibus interdum.</p>
                                                </div>
                                            </div>
                                            <!-- Modal footer -->
                                            <div class="flex flex-wrap justify-end f_">
                                                <button class="tt border-slate-200 hover--border-slate-300 gz" @click="modalOpen = false">Cancel</button>
                                                <button class="tt hd wq ye">Yes, Create it</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End -->
                    </div>
                </div>
            </div>

            <!-- Product -->
            <div>
                <h2 class="gc text-slate-800 font-bold rb">Product</h2>
                <div class="flex flex-wrap items-center nq">
                    <!-- Send Feedback -->
                    <div class="nz">
                        <!-- Start -->
                        <div x-data="{ modalOpen: false }">
                            <button class="btn hd wq ye" @click.prevent="modalOpen = true" aria-controls="feedback-modal">Send Feedback</button>
                            <!-- Modal backdrop -->
                            <div
                                class="th tm bg-slate-900 pd nm bj"
                                x-show="modalOpen"
                                x-transition:enter="b_ ws wn"
                                x-transition:enter-start="opacity-0"
                                x-transition:enter-end="bf"
                                x-transition:leave="b_ ws wt"
                                x-transition:leave-start="bf"
                                x-transition:leave-end="opacity-0"
                                aria-hidden="true"
                                x-cloak=""
                            ></div>
                            <!-- Modal dialog -->
                            <div
                                id="feedback-modal"
                                class="th tm nm lw flex items-center rf justify-center a_ va jn"
                                role="dialog"
                                aria-modal="true"
                                x-show="modalOpen"
                                x-transition:enter="b_ wi wn"
                                x-transition:enter-start="opacity-0 ab"
                                x-transition:enter-end="bf ag"
                                x-transition:leave="b_ wi wn"
                                x-transition:leave-start="bf ag"
                                x-transition:leave-end="opacity-0 ab"
                                x-cloak=""
                            >
                                <div class="bg-white rounded bh lb ai ox oy" @click.outside="modalOpen = false" @keydown.escape.window="modalOpen = false">
                                    <!-- Modal header -->
                                    <div class="v_ vl cm border-slate-200">
                                        <div class="flex fh items-center">
                                            <div class="gg text-slate-800">Send Feedback</div>
                                            <button class="yt xa" @click="modalOpen = false">
                                                <div class="tc">Close</div>
                                                <svg class="o_ sq dd">
                                                    <path
                                                        d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"
                                                    ></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- Modal content -->
                                    <div class="v_ vj">
                                        <div class="text-sm">
                                            <div class="gm text-slate-800 it">Let us know what you think 🙌</div>
                                        </div>
                                        <div class="le">
                                            <div>
                                                <label class="block text-sm gm rx" for="name">Name <span class="yi">*</span></label>
                                                <input id="name" class="tn ox vg vk" type="text" required="" />
                                            </div>
                                            <div>
                                                <label class="block text-sm gm rx" for="email">Email <span class="yi">*</span></label>
                                                <input id="email" class="tn ox vg vk" type="email" required="" />
                                            </div>
                                            <div>
                                                <label class="block text-sm gm rx" for="feedback">Message <span class="yi">*</span></label>
                                                <textarea id="feedback" class="tr ox vg vk" rows="4" required=""></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal footer -->
                                    <div class="v_ vj cg border-slate-200">
                                        <div class="flex flex-wrap justify-end f_">
                                            <button class="tt border-slate-200 hover--border-slate-300 gz" @click="modalOpen = false">Cancel</button>
                                            <button class="tt hd wq ye">Send</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End -->
                    </div>

                    <!-- Newsletter -->
                    <div class="nz">
                        <!-- Start -->
                        <div x-data="{ modalOpen: false }">
                            <button class="btn hd wq ye" @click.prevent="modalOpen = true" aria-controls="newsletter-modal">Newsletter</button>
                            <!-- Modal backdrop -->
                            <div
                                class="th tm bg-slate-900 pd nm bj"
                                x-show="modalOpen"
                                x-transition:enter="b_ ws wn"
                                x-transition:enter-start="opacity-0"
                                x-transition:enter-end="bf"
                                x-transition:leave="b_ ws wt"
                                x-transition:leave-start="bf"
                                x-transition:leave-end="opacity-0"
                                aria-hidden="true"
                                x-cloak=""
                            ></div>
                            <!-- Modal dialog -->
                            <div
                                id="newsletter-modal"
                                class="th tm nm lw flex items-center rf justify-center a_ va jn"
                                role="dialog"
                                aria-modal="true"
                                x-show="modalOpen"
                                x-transition:enter="b_ wi wn"
                                x-transition:enter-start="opacity-0 ab"
                                x-transition:enter-end="bf ag"
                                x-transition:leave="b_ wi wn"
                                x-transition:leave-start="bf ag"
                                x-transition:leave-end="opacity-0 ab"
                                x-cloak=""
                            >
                                <div class="bg-white rounded bh lb ai ox oy" @click.outside="modalOpen = false" @keydown.escape.window="modalOpen = false">
                                    <div class="dz">
                                        <div class="td">
                                            <!-- Close button -->
                                            <button class="tp tk tw yt xa" @click="modalOpen = false">
                                                <div class="tc">Close</div>
                                                <svg class="o_ sq dd">
                                                    <path
                                                        d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"
                                                    ></path>
                                                </svg>
                                            </button>
                                            <!-- Modal header -->
                                            <div class="in gu">
                                                <!-- Icon -->
                                                <div class="it">
                                                    <svg class="inline-flex ua oa rounded-full af dd" viewBox="0 0 48 48">
                                                        <rect class="yp" width="48" height="48" rx="24"></rect>
                                                        <path class="text-indigo-300" d="M19 16h7a8 8 0 110 16h-7V16z"></path>
                                                        <path class="text-indigo-500" d="M26 24l-7-6v5h-8v2h8v5z"></path>
                                                    </svg>
                                                </div>
                                                <div class="gv gg text-slate-800">Subscribe to the Newsletter!</div>
                                            </div>
                                            <!-- Modal content -->
                                            <div class="gu">
                                                <div class="text-sm rb">
                                                    Semper eget duis at tellus at urna condimentum mattis pellentesque lacus suspendisse faucibus interdum.
                                                </div>
                                                <!-- Submit form -->
                                                <form class="flex at nj">
                                                    <div class="al mr-2">
                                                        <label for="subscribe-form" class="tc">Leave your Email</label>
                                                        <input id="subscribe-form" class="tn ox vg vk" type="email" />
                                                    </div>
                                                    <button type="submit" class="tt hd wq ye ct">Subscribe</button>
                                                </form>
                                                <div class="gp text-slate-500 gw ip">
                                                    I respect your privacy. No spam. Unsubscribe at any time!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End -->
                    </div>

                    <!-- Announcement -->
                    <div class="nz">
                        <!-- Start -->
                        <div x-data="{ modalOpen: false }">
                            <button class="btn hd wq ye" @click.prevent="modalOpen = true" aria-controls="announcement-modal">Announcement</button>
                            <!-- Modal backdrop -->
                            <div
                                class="th tm bg-slate-900 pd nm bj"
                                x-show="modalOpen"
                                x-transition:enter="b_ ws wn"
                                x-transition:enter-start="opacity-0"
                                x-transition:enter-end="bf"
                                x-transition:leave="b_ ws wt"
                                x-transition:leave-start="bf"
                                x-transition:leave-end="opacity-0"
                                aria-hidden="true"
                                x-cloak=""
                            ></div>
                            <!-- Modal dialog -->
                            <div
                                id="announcement-modal"
                                class="th tm nm lw flex items-center rf justify-center a_ va jn"
                                role="dialog"
                                aria-modal="true"
                                x-show="modalOpen"
                                x-transition:enter="b_ wi wn"
                                x-transition:enter-start="opacity-0 ab"
                                x-transition:enter-end="bf ag"
                                x-transition:leave="b_ wi wn"
                                x-transition:leave-start="bf ag"
                                x-transition:leave-end="opacity-0 ab"
                                x-cloak=""
                            >
                                <div class="bg-white rounded bh lb ai ox oy" @click.outside="modalOpen = false" @keydown.escape.window="modalOpen = false">
                                    <div class="dz">
                                        <div class="td">
                                            <!-- Close button -->
                                            <button class="tp tk tw yt xa" @click="modalOpen = false">
                                                <div class="tc">Close</div>
                                                <svg class="o_ sq dd">
                                                    <path
                                                        d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"
                                                    ></path>
                                                </svg>
                                            </button>
                                            <!-- Modal header -->
                                            <div class="in gu">
                                                <!-- Icon -->
                                                <div class="inline-flex in">
                                                    <img src="images/announcement-icon.svg" width="80" height="80" alt="Announcement" />
                                                </div>
                                                <div class="gv gg text-slate-800">You Unlocked Level 2!</div>
                                            </div>
                                            <!-- Modal content -->
                                            <div class="gu">
                                                <div class="text-sm ic">
                                                    Semper eget duis at tellus at urna condimentum mattis pellentesque lacus suspendisse faucibus interdum.
                                                </div>
                                                <!-- CTAs -->
                                                <div class="le">
                                                    <button class="tt hd wq ye">Claim your Reward -&gt;</button>
                                                    <div>
                                                        <a class="gm text-sm text-indigo-500 xu" href="#0" @click.prevent="modalOpen = false">Not Now!</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End -->
                    </div>

                    <!-- Integration -->
                    <div class="nz">
                        <!-- Start -->
                        <div x-data="{ modalOpen: false }">
                            <button class="btn hd wq ye" @click.prevent="modalOpen = true" aria-controls="integration-modal">Integration</button>
                            <!-- Modal backdrop -->
                            <div
                                class="th tm bg-slate-900 pd nm bj"
                                x-show="modalOpen"
                                x-transition:enter="b_ ws wn"
                                x-transition:enter-start="opacity-0"
                                x-transition:enter-end="bf"
                                x-transition:leave="b_ ws wt"
                                x-transition:leave-start="bf"
                                x-transition:leave-end="opacity-0"
                                aria-hidden="true"
                                x-cloak=""
                            ></div>
                            <!-- Modal dialog -->
                            <div
                                id="integration-modal"
                                class="th tm nm lw flex items-center rf justify-center a_ va jn"
                                role="dialog"
                                aria-modal="true"
                                x-show="modalOpen"
                                x-transition:enter="b_ wi wn"
                                x-transition:enter-start="opacity-0 ab"
                                x-transition:enter-end="bf ag"
                                x-transition:leave="b_ wi wn"
                                x-transition:leave-start="bf ag"
                                x-transition:leave-end="opacity-0 ab"
                                x-cloak=""
                            >
                                <div class="bg-white rounded bh lb ai ox oy" @click.outside="modalOpen = false" @keydown.escape.window="modalOpen = false">
                                    <div class="dz">
                                        <div class="td">
                                            <!-- Close button -->
                                            <button class="tp tk tw yt xa" @click="modalOpen = false">
                                                <div class="tc">Close</div>
                                                <svg class="o_ sq dd">
                                                    <path
                                                        d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"
                                                    ></path>
                                                </svg>
                                            </button>
                                            <!-- Modal header -->
                                            <div class="ic gu">
                                                <!-- Icons -->
                                                <div class="inline-flex items-center justify-center lo rw">
                                                    <!-- Mosaic logo -->
                                                    <svg width="48" height="48" viewBox="0 0 32 32">
                                                        <defs>
                                                            <linearGradient x1="28.538%" y1="20.229%" x2="100%" y2="108.156%" id="nl-a">
                                                                <stop stop-color="#A5B4FC" stop-opacity="0" offset="0%"></stop>
                                                                <stop stop-color="#A5B4FC" offset="100%"></stop>
                                                            </linearGradient>
                                                            <linearGradient x1="88.638%" y1="29.267%" x2="22.42%" y2="100%" id="nl-b">
                                                                <stop stop-color="#38BDF8" stop-opacity="0" offset="0%"></stop>
                                                                <stop stop-color="#38BDF8" offset="100%"></stop>
                                                            </linearGradient>
                                                        </defs>
                                                        <rect fill="#6366F1" width="32" height="32" rx="16"></rect>
                                                        <path d="M18.277.16C26.035 1.267 32 7.938 32 16c0 8.837-7.163 16-16 16a15.937 15.937 0 01-10.426-3.863L18.277.161z" fill="#4F46E5"></path>
                                                        <path d="M7.404 2.503l18.339 26.19A15.93 15.93 0 0116 32C7.163 32 0 24.837 0 16 0 10.327 2.952 5.344 7.404 2.503z" fill="url(#nl-a)"></path>
                                                        <path d="M2.223 24.14L29.777 7.86A15.926 15.926 0 0132 16c0 8.837-7.163 16-16 16-5.864 0-10.991-3.154-13.777-7.86z" fill="url(#nl-b)"></path>
                                                    </svg>
                                                    <!-- Arrows -->
                                                    <svg class="sq o_ dd yt" viewBox="0 0 16 16">
                                                        <path d="M5 3V0L0 4l5 4V5h8a1 1 0 000-2H5zM11 11H3a1 1 0 000 2h8v3l5-4-5-4v3z"></path>
                                                    </svg>
                                                    <!-- Cruip logo -->
                                                    <svg width="48" height="48" viewBox="0 0 48 48">
                                                        <rect fill="#E0E7FF" width="48" height="48" rx="24"></rect>
                                                        <path d="M34 24c0-1.38-1.126-2.5-2.515-2.5A2.507 2.507 0 0028.97 24c0 1.38 1.126 2.5 2.515 2.5A2.507 2.507 0 0034 24" fill="#34D399"></path>
                                                        <path
                                                            d="M31.112 31.07a10.024 10.024 0 01-4.582 2.615c-.8.205-1.64.315-2.506.315a10.007 10.007 0 01-7.553-3.426A9.943 9.943 0 0114 24c0-2.517.932-4.816 2.471-6.574A10.007 10.007 0 0124.024 14a10.024 10.024 0 017.088 2.93l-3.544 3.535A5.003 5.003 0 0024.024 19a5.006 5.006 0 00-5.012 5l.001.13A5.007 5.007 0 0024.024 29c1.384 0 2.637-.56 3.544-1.465l3.544 3.536z"
                                                            fill="#6366F1"
                                                        ></path>
                                                    </svg>
                                                </div>
                                                <div class="gv gg text-slate-800">Connect Mosaic with your Cruip account</div>
                                            </div>
                                            <!-- Modal content -->
                                            <div class="text-sm ic">
                                                <div class="gm text-slate-800 it">Mosaic would like to:</div>
                                                <ul class="fz ic">
                                                    <li class="flex items-center">
                                                        <svg class="w-3 h-3 af dd yf mr-2" viewBox="0 0 12 12">
                                                            <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z"></path>
                                                        </svg>
                                                        <div>Lorem ipsum dolor sit amet</div>
                                                    </li>
                                                    <li class="flex items-center">
                                                        <svg class="w-3 h-3 af dd yf mr-2" viewBox="0 0 12 12">
                                                            <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z"></path>
                                                        </svg>
                                                        <div>Semper eget duis at tellus at urna</div>
                                                    </li>
                                                    <li class="flex items-center">
                                                        <svg class="w-3 h-3 af dd yf mr-2" viewBox="0 0 12 12">
                                                            <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z"></path>
                                                        </svg>
                                                        <div>Lorem ipsum dolor sit amet</div>
                                                    </li>
                                                    <li class="flex items-center">
                                                        <svg class="w-3 h-3 af dd yf mr-2" viewBox="0 0 12 12">
                                                            <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z"></path>
                                                        </svg>
                                                        <div>Suspendisse faucibus interdum</div>
                                                    </li>
                                                </ul>
                                                <div class="gp text-slate-500">
                                                    By clicking on Allow access, you authorize Mosaic to use your information in accordance with its <a class="text-indigo-500 xu" href="#0">Privacy Policy</a>. You can
                                                    stop it at any time on the integrations page of your Mosaic account.
                                                </div>
                                            </div>
                                            <!-- Modal footer -->
                                            <div class="flex flex-wrap justify-end f_">
                                                <button class="tt border-slate-200 hover--border-slate-300 gz" @click="modalOpen = false">Cancel</button>
                                                <button class="tt hd wq ye">Allow Access</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End -->
                    </div>

                    <!-- What’s New -->
                    <div class="nz">
                        <!-- Start -->
                        <div x-data="{ modalOpen: false }">
                            <button class="btn hd wq ye" @click.prevent="modalOpen = true" aria-controls="news-modal">What’s New</button>
                            <!-- Modal backdrop -->
                            <div
                                class="th tm bg-slate-900 pd nm bj"
                                x-show="modalOpen"
                                x-transition:enter="b_ ws wn"
                                x-transition:enter-start="opacity-0"
                                x-transition:enter-end="bf"
                                x-transition:leave="b_ ws wt"
                                x-transition:leave-start="bf"
                                x-transition:leave-end="opacity-0"
                                aria-hidden="true"
                                x-cloak=""
                            ></div>
                            <!-- Modal dialog -->
                            <div
                                id="news-modal"
                                class="th tm nm lw flex items-center rf justify-center a_ va jn"
                                role="dialog"
                                aria-modal="true"
                                x-show="modalOpen"
                                x-transition:enter="b_ wi wn"
                                x-transition:enter-start="opacity-0 ab"
                                x-transition:enter-end="bf ag"
                                x-transition:leave="b_ wi wn"
                                x-transition:leave-start="bf ag"
                                x-transition:leave-end="opacity-0 ab"
                                x-cloak=""
                            >
                                <div class="bg-white rounded bh lb ai ox oy" @click.outside="modalOpen = false" @keydown.escape.window="modalOpen = false">
                                    <div class="td">
                                        <img class="ox" src="images/modal-image.jpg" width="460" height="200" alt="New on Mosaic" />
                                        <!-- Close button -->
                                        <button class="tp tk tw id iv text-slate-50 xh" @click="modalOpen = false">
                                            <div class="tc">Close</div>
                                            <svg class="o_ sq dd">
                                                <path
                                                    d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"
                                                ></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="vi">
                                        <!-- Modal header -->
                                        <div class="in">
                                            <div class="it">
                                                <div class="gp inline-flex gm hz text-indigo-600 rounded-full gu vm vk">New on Mosaic</div>
                                            </div>
                                            <div class="gv gg text-slate-800">Help your team work faster with X 🏃‍♂️</div>
                                        </div>
                                        <!-- Modal content -->
                                        <div class="text-sm ic">
                                            <div class="fz">
                                                <p>
                                                    You might not be aware of this fact, but every frame, digital video, canvas, responsive design, and image often has a rectangular shape that is exceptionally precise in
                                                    proportion (or ratio).
                                                </p>
                                                <p>The ratio has to be well-defined to make shapes fit into different and distinct mediums, such as computer, movies, television and camera screens.</p>
                                            </div>
                                        </div>
                                        <!-- Modal footer -->
                                        <div class="flex flex-wrap justify-end f_">
                                            <button class="tt hd wq ye" @click="modalOpen = false">Cool, I Got it</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End -->
                    </div>

                    <!-- Change your Plan -->
                    <div class="nz">
                        <!-- Start -->
                        <div x-data="{ modalOpen: false }">
                            <button class="btn hd wq ye" @click.prevent="modalOpen = true" aria-controls="plan-modal">Change your Plan</button>
                            <!-- Modal backdrop -->
                            <div
                                class="th tm bg-slate-900 pd nm bj"
                                x-show="modalOpen"
                                x-transition:enter="b_ ws wn"
                                x-transition:enter-start="opacity-0"
                                x-transition:enter-end="bf"
                                x-transition:leave="b_ ws wt"
                                x-transition:leave-start="bf"
                                x-transition:leave-end="opacity-0"
                                aria-hidden="true"
                                x-cloak=""
                            ></div>
                            <!-- Modal dialog -->
                            <div
                                id="plan-modal"
                                class="th tm nm lw flex items-center rf justify-center a_ va jn"
                                role="dialog"
                                aria-modal="true"
                                x-show="modalOpen"
                                x-transition:enter="b_ wi wn"
                                x-transition:enter-start="opacity-0 ab"
                                x-transition:enter-end="bf ag"
                                x-transition:leave="b_ wi wn"
                                x-transition:leave-start="bf ag"
                                x-transition:leave-end="opacity-0 ab"
                                x-cloak=""
                            >
                                <div class="bg-white rounded bh lb ai ox oy" @click.outside="modalOpen = false" @keydown.escape.window="modalOpen = false">
                                    <!-- Modal header -->
                                    <div class="v_ vl cm border-slate-200">
                                        <div class="flex fh items-center">
                                            <div class="gg text-slate-800">Change your Plan</div>
                                            <button class="yt xa" @click="modalOpen = false">
                                                <div class="tc">Close</div>
                                                <svg class="o_ sq dd">
                                                    <path
                                                        d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"
                                                    ></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- Modal content -->
                                    <div class="v_ mp md">
                                        <div class="text-sm">
                                            <div class="rw">Upgrade or downgrade your plan:</div>
                                            <!-- Options -->
                                            <ul class="fz rw">
                                                <li>
                                                    <button class="ox sz go vl va rounded bg-white cp hr bd we wi">
                                                        <div class="flex items-center">
                                                            <div class="o_ sq cd hi rounded-full rk"></div>
                                                            <div class="al">
                                                                <div class="flex flex-wrap items-center fh im">
                                                                    <span class="gm text-slate-800">Mosaic Light <span class="gp gw text-slate-500 gf">Current Plan</span></span>
                                                                    <span><span class="gm yr">$39.00</span>/mo</span>
                                                                </div>
                                                                <div class="text-sm">2 MB · 1 member · 500 block limits</div>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </li>
                                                <li>
                                                    <button class="ox sz go vl va rounded bg-white border border-slate-200 hover--border-slate-300 bd we wi">
                                                        <div class="flex items-center">
                                                            <div class="o_ sq cp hs rounded-full rk"></div>
                                                            <div class="al">
                                                                <div class="flex flex-wrap items-center fh im">
                                                                    <span class="gg text-slate-800">Mosaic Basic <span class="gp gw text-indigo-500 gf">Best Value ✨</span></span>
                                                                    <span><span class="gm yr">$59.00</span>/mo</span>
                                                                </div>
                                                                <div class="text-sm">5 MB · 2 members · 1000 block limits</div>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </li>
                                                <li>
                                                    <button class="ox sz go vl va rounded bg-white border border-slate-200 hover--border-slate-300 bd we wi">
                                                        <div class="flex items-center">
                                                            <div class="o_ sq cp hs rounded-full rk"></div>
                                                            <div class="al">
                                                                <div class="flex flex-wrap items-center fh im">
                                                                    <span class="gg text-slate-800">Mosaic Plus</span>
                                                                    <span><span class="gm yr">$79.00</span>/mo</span>
                                                                </div>
                                                                <div class="text-sm">10 MB · 5 members · Unlimited block limits</div>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </li>
                                            </ul>
                                            <div class="gp text-slate-500">Your workspace’s Mosaic Light Plan is set to $39 per month and will renew on August 9, 2021.</div>
                                        </div>
                                    </div>
                                    <!-- Modal footer -->
                                    <div class="v_ vj">
                                        <div class="flex flex-wrap justify-end f_">
                                            <button class="tt border-slate-200 hover--border-slate-300 gz" @click="modalOpen = false">Cancel</button>
                                            <button class="tt hd wq ye">Change Plan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End -->
                    </div>

                    <!-- Quick Find -->
                    <div class="nz">
                        <!-- Start -->
                        <div x-data="{ searchOpen: false }">
                            <button class="btn hd wq ye" @click.prevent="searchOpen = true;if (searchOpen) $nextTick(()=>{$refs.searchInput.focus()});" aria-controls="find-modal">Quick Find</button>
                            <!-- Modal backdrop -->
                            <div
                                class="th tm bg-slate-900 pd nm bj"
                                x-show="searchOpen"
                                x-transition:enter="b_ ws wn"
                                x-transition:enter-start="opacity-0"
                                x-transition:enter-end="bf"
                                x-transition:leave="b_ ws wt"
                                x-transition:leave-start="bf"
                                x-transition:leave-end="opacity-0"
                                aria-hidden="true"
                                x-cloak=""
                            ></div>
                            <!-- Modal dialog -->
                            <div
                                id="find-modal"
                                class="th tm nm lw flex ff nn rw justify-center a_ va jn"
                                role="dialog"
                                aria-modal="true"
                                x-show="searchOpen"
                                x-transition:enter="b_ wi wn"
                                x-transition:enter-start="opacity-0 ab"
                                x-transition:enter-end="bf ag"
                                x-transition:leave="b_ wi wn"
                                x-transition:leave-start="bf ag"
                                x-transition:leave-end="opacity-0 ab"
                                x-cloak=""
                            >
                                <div class="bg-white lb ae ox oy rounded bh" @click.outside="searchOpen = false" @keydown.escape.window="searchOpen = false">
                                    <!-- Search form -->
                                    <form class="cm border-slate-200">
                                        <div class="td">
                                            <label for="modal-search" class="tc">Search</label>
                                            <input id="modal-search" class="ox cv xj bi fn vl mv mm" type="search" placeholder="Search Anything…" x-ref="searchInput" />
                                            <button class="tp tm tg kr" type="submit" aria-label="Search">
                                                <svg class="o_ sq af dd yt ks iy mr-2" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7 14c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7zM7 2C4.243 2 2 4.243 2 7s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5z"></path>
                                                    <path d="M15.707 14.293L13.314 11.9a8.019 8.019 0 01-1.414 1.414l2.393 2.393a.997.997 0 001.414 0 .999.999 0 000-1.414z"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </form>
                                    <div class="vj vg">
                                        <!-- Recent searches -->
                                        <div class="it wg">
                                            <div class="gp gg yt gb vg in">Recent searches</div>
                                            <ul class="text-sm">
                                                <li>
                                                    <a class="flex items-center vs text-slate-800 xh xs rounded kr" href="#0" @click="searchOpen = false" @focus="searchOpen = true" @focusout="searchOpen = false">
                                                        <svg class="o_ sq dd yt ku kf af rk" viewBox="0 0 16 16">
                                                            <path
                                                                d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z"
                                                            ></path>
                                                        </svg>
                                                        <span>Form Builder - 23 hours on-demand video</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="flex items-center vs text-slate-800 xh xs rounded kr" href="#0" @click="searchOpen = false" @focus="searchOpen = true" @focusout="searchOpen = false">
                                                        <svg class="o_ sq dd yt ku kf af rk" viewBox="0 0 16 16">
                                                            <path
                                                                d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z"
                                                            ></path>
                                                        </svg>
                                                        <span>Access Mosaic on mobile and TV</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="flex items-center vs text-slate-800 xh xs rounded kr" href="#0" @click="searchOpen = false" @focus="searchOpen = true" @focusout="searchOpen = false">
                                                        <svg class="o_ sq dd yt ku kf af rk" viewBox="0 0 16 16">
                                                            <path
                                                                d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z"
                                                            ></path>
                                                        </svg>
                                                        <span>Product Update - Q4 2021</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="flex items-center vs text-slate-800 xh xs rounded kr" href="#0" @click="searchOpen = false" @focus="searchOpen = true" @focusout="searchOpen = false">
                                                        <svg class="o_ sq dd yt ku kf af rk" viewBox="0 0 16 16">
                                                            <path
                                                                d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z"
                                                            ></path>
                                                        </svg>
                                                        <span>Master Digital Marketing Strategy course</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="flex items-center vs text-slate-800 xh xs rounded kr" href="#0" @click="searchOpen = false" @focus="searchOpen = true" @focusout="searchOpen = false">
                                                        <svg class="o_ sq dd yt ku kf af rk" viewBox="0 0 16 16">
                                                            <path
                                                                d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z"
                                                            ></path>
                                                        </svg>
                                                        <span>Dedicated forms for products</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="flex items-center vs text-slate-800 xh xs rounded kr" href="#0" @click="searchOpen = false" @focus="searchOpen = true" @focusout="searchOpen = false">
                                                        <svg class="o_ sq dd yt ku kf af rk" viewBox="0 0 16 16">
                                                            <path
                                                                d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z"
                                                            ></path>
                                                        </svg>
                                                        <span>Product Update - Q4 2021</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Recent pages -->
                                        <div class="it wg">
                                            <div class="gp gg yt gb vg in">Recent pages</div>
                                            <ul class="text-sm">
                                                <li>
                                                    <a class="flex items-center vs text-slate-800 xh xs rounded kr" href="#0" @click="searchOpen = false" @focus="searchOpen = true" @focusout="searchOpen = false">
                                                        <svg class="o_ sq dd yt ku kf af rk" viewBox="0 0 16 16">
                                                            <path d="M14 0H2c-.6 0-1 .4-1 1v14c0 .6.4 1 1 1h8l5-5V1c0-.6-.4-1-1-1zM3 2h10v8H9v4H3V2z"></path>
                                                        </svg>
                                                        <span><span class="gm text-slate-800 ku">Messages</span> - Conversation / … / Mike Mills</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="flex items-center vs text-slate-800 xh xs rounded kr" href="#0" @click="searchOpen = false" @focus="searchOpen = true" @focusout="searchOpen = false">
                                                        <svg class="o_ sq dd yt ku kf af rk" viewBox="0 0 16 16">
                                                            <path d="M14 0H2c-.6 0-1 .4-1 1v14c0 .6.4 1 1 1h8l5-5V1c0-.6-.4-1-1-1zM3 2h10v8H9v4H3V2z"></path>
                                                        </svg>
                                                        <span><span class="gm text-slate-800 ku">Messages</span> - Conversation / … / Eva Patrick</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@ebdsection