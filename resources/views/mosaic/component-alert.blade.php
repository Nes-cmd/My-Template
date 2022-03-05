@extends('layouts.admin.app')
@section('contents')
<div class="va jn teb vf ox uz ri">
    <!-- Page header -->
    <div class="ry">
        <h1 class="gc zc text-slate-800 font-bold">Alert &amp; Banner ✨</h1>
    </div>

    <div class="cg border-slate-200">
        <!-- Components -->
        <div class="ln ie">
            <!-- Banner -->
            <div>
                <h2 class="gc text-slate-800 font-bold rb">Banner</h2>
                <div class="le">
                    <!-- Start -->
                    <div x-show="open" x-data="{ open: true }">
                        <div class="va vc rounded-sm text-sm hb ye">
                            <div class="flex ox fh ff">
                                <div class="flex">
                                    <svg class="o_ sq af dd bu is rk" viewBox="0 0 16 16">
                                        <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 12c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm1-3H7V4h2v5z"></path>
                                    </svg>
                                    <div class="gm">We’re currently experiencing an increase in inquiries. There may be a delay in responses from the Support.</div>
                                </div>
                                <button class="ba xw ml-3 is" @click="open = false">
                                    <div class="tc">Close</div>
                                    <svg class="o_ sq dd">
                                        <path
                                            d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"
                                        ></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- End -->

                    <!-- Start -->
                    <div x-show="open" x-data="{ open: true }">
                        <div class="va vc rounded-sm text-sm hg ye">
                            <div class="flex ox fh ff">
                                <div class="flex">
                                    <svg class="o_ sq af dd bu is rk" viewBox="0 0 16 16">
                                        <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zM7 11.4L3.6 8 5 6.6l2 2 4-4L12.4 6 7 11.4z"></path>
                                    </svg>
                                    <div class="gm">All Systems are operational. Sorry for any inconvenience this might cause!</div>
                                </div>
                                <button class="ba xw ml-3 is" @click="open = false">
                                    <div class="tc">Close</div>
                                    <svg class="o_ sq dd">
                                        <path
                                            d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"
                                        ></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- End -->

                    <!-- Start -->
                    <div x-show="open" x-data="{ open: true }">
                        <div class="va vc rounded-sm text-sm hq ye">
                            <div class="flex ox fh ff">
                                <div class="flex">
                                    <svg class="o_ sq af dd bu is rk" viewBox="0 0 16 16">
                                        <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm3.5 10.1l-1.4 1.4L8 9.4l-2.1 2.1-1.4-1.4L6.6 8 4.5 5.9l1.4-1.4L8 6.6l2.1-2.1 1.4 1.4L9.4 8l2.1 2.1z"></path>
                                    </svg>
                                    <div class="gm">Customers are experiencing a delay in withdrawing their funds!</div>
                                </div>
                                <button class="ba xw ml-3 is" @click="open = false">
                                    <div class="tc">Close</div>
                                    <svg class="o_ sq dd">
                                        <path
                                            d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"
                                        ></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- End -->

                    <!-- Start -->
                    <div x-show="open" x-data="{ open: true }">
                        <div class="va vc rounded-sm text-sm hd ye">
                            <div class="flex ox fh ff">
                                <div class="flex">
                                    <svg class="o_ sq af dd bu is rk" viewBox="0 0 16 16">
                                        <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm1 12H7V7h2v5zM8 6c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1z"></path>
                                    </svg>
                                    <div class="gm">There are over 200 apps available in the store!</div>
                                </div>
                                <button class="ba xw ml-3 is" @click="open = false">
                                    <div class="tc">Close</div>
                                    <svg class="o_ sq dd">
                                        <path
                                            d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"
                                        ></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- End -->
                </div>
            </div>

            <!-- Banner 2 -->
            <div>
                <h2 class="gc text-slate-800 font-bold rb">Banner 2</h2>
                <div class="le">
                    <!-- Start -->
                    <div x-show="open" x-data="{ open: true }">
                        <div class="va vc rounded-sm text-sm hk border cj yo">
                            <div class="flex ox fh ff">
                                <div class="flex">
                                    <svg class="o_ sq af dd bu is rk" viewBox="0 0 16 16">
                                        <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 12c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm1-3H7V4h2v5z"></path>
                                    </svg>
                                    <div>We’re currently experiencing an increase in inquiries. There may be a delay in responses from the Support.</div>
                                </div>
                                <button class="ba xw ml-3 is" @click="open = false">
                                    <div class="tc">Close</div>
                                    <svg class="o_ sq dd">
                                        <path
                                            d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"
                                        ></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- End -->

                    <!-- Start -->
                    <div x-show="open" x-data="{ open: true }">
                        <div class="va vc rounded-sm text-sm hx border cq yr">
                            <div class="flex ox fh ff">
                                <div class="flex">
                                    <svg class="o_ sq af dd bu is rk" viewBox="0 0 16 16">
                                        <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zM7 11.4L3.6 8 5 6.6l2 2 4-4L12.4 6 7 11.4z"></path>
                                    </svg>
                                    <div>All Systems are operational. Sorry for any inconvenience this might cause!</div>
                                </div>
                                <button class="ba xw ml-3 is" @click="open = false">
                                    <div class="tc">Close</div>
                                    <svg class="o_ sq dd">
                                        <path
                                            d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"
                                        ></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- End -->

                    <!-- Start -->
                    <div x-show="open" x-data="{ open: true }">
                        <div class="va vc rounded-sm text-sm h_ border cz yu">
                            <div class="flex ox fh ff">
                                <div class="flex">
                                    <svg class="o_ sq af dd bu is rk" viewBox="0 0 16 16">
                                        <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm3.5 10.1l-1.4 1.4L8 9.4l-2.1 2.1-1.4-1.4L6.6 8 4.5 5.9l1.4-1.4L8 6.6l2.1-2.1 1.4 1.4L9.4 8l2.1 2.1z"></path>
                                    </svg>
                                    <div>Customers are experiencing a delay in withdrawing their funds!</div>
                                </div>
                                <button class="ba xw ml-3 is" @click="open = false">
                                    <div class="tc">Close</div>
                                    <svg class="o_ sq dd">
                                        <path
                                            d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"
                                        ></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- End -->

                    <!-- Start -->
                    <div x-show="open" x-data="{ open: true }">
                        <div class="va vc rounded-sm text-sm hz border he text-indigo-500">
                            <div class="flex ox fh ff">
                                <div class="flex">
                                    <svg class="o_ sq af dd bu is rk" viewBox="0 0 16 16">
                                        <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm1 12H7V7h2v5zM8 6c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1z"></path>
                                    </svg>
                                    <div>There are over 200 apps available in the store!</div>
                                </div>
                                <button class="ba xw ml-3 is" @click="open = false">
                                    <div class="tc">Close</div>
                                    <svg class="o_ sq dd">
                                        <path
                                            d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"
                                        ></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- End -->
                </div>
            </div>

            <!-- Toast -->
            <div>
                <h2 class="gc text-slate-800 font-bold rb">Toast</h2>
                <div class="le">
                    <!-- Start -->
                    <div x-show="open" x-data="{ open: true }">
                        <div class="inline-flex ub va vc rounded-sm text-sm hb ye">
                            <div class="flex ox fh ff">
                                <div class="flex">
                                    <svg class="o_ sq af dd bu is rk" viewBox="0 0 16 16">
                                        <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 12c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm1-3H7V4h2v5z"></path>
                                    </svg>
                                    <div class="gm">A warning toast.</div>
                                </div>
                                <button class="ba xw ml-3 is" @click="open = false">
                                    <div class="tc">Close</div>
                                    <svg class="o_ sq dd">
                                        <path
                                            d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"
                                        ></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <!-- End -->
                    </div>

                    <!-- Start -->
                    <div x-show="open" x-data="{ open: true }">
                        <div class="inline-flex ub va vc rounded-sm text-sm hg ye">
                            <div class="flex ox fh ff">
                                <div class="flex">
                                    <svg class="o_ sq af dd bu is rk" viewBox="0 0 16 16">
                                        <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zM7 11.4L3.6 8 5 6.6l2 2 4-4L12.4 6 7 11.4z"></path>
                                    </svg>
                                    <div class="gm">A successful toast.</div>
                                </div>
                                <button class="ba xw ml-3 is" @click="open = false">
                                    <div class="tc">Close</div>
                                    <svg class="o_ sq dd">
                                        <path
                                            d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"
                                        ></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- End -->

                    <!-- Start -->
                    <div x-show="open" x-data="{ open: true }">
                        <div class="inline-flex ub va vc rounded-sm text-sm hq ye">
                            <div class="flex ox fh ff">
                                <div class="flex">
                                    <svg class="o_ sq af dd bu is rk" viewBox="0 0 16 16">
                                        <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm3.5 10.1l-1.4 1.4L8 9.4l-2.1 2.1-1.4-1.4L6.6 8 4.5 5.9l1.4-1.4L8 6.6l2.1-2.1 1.4 1.4L9.4 8l2.1 2.1z"></path>
                                    </svg>
                                    <div class="gm">A dangerous toast.</div>
                                </div>
                                <button class="ba xw ml-3 is" @click="open = false">
                                    <div class="tc">Close</div>
                                    <svg class="o_ sq dd">
                                        <path
                                            d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"
                                        ></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- End -->

                    <!-- Start -->
                    <div x-show="open" x-data="{ open: true }">
                        <div class="inline-flex ub va vc rounded-sm text-sm hd ye">
                            <div class="flex ox fh ff">
                                <div class="flex">
                                    <svg class="o_ sq af dd bu is rk" viewBox="0 0 16 16">
                                        <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm1 12H7V7h2v5zM8 6c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1z"></path>
                                    </svg>
                                    <div class="gm">An informational toast.</div>
                                </div>
                                <button class="ba xw ml-3 is" @click="open = false">
                                    <div class="tc">Close</div>
                                    <svg class="o_ sq dd">
                                        <path
                                            d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"
                                        ></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- End -->
                </div>
            </div>

            <!-- Toast 2 -->
            <div>
                <h2 class="gc text-slate-800 font-bold rb">Toast 2</h2>
                <div class="le">
                    <!-- Start -->
                    <div x-show="open" x-data="{ open: true }">
                        <div class="inline-flex ub va vc rounded-sm text-sm hk border cj yo">
                            <div class="flex ox fh ff">
                                <div class="flex">
                                    <svg class="o_ sq af dd bu is rk" viewBox="0 0 16 16">
                                        <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 12c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm1-3H7V4h2v5z"></path>
                                    </svg>
                                    <div>A warning toast.</div>
                                </div>
                                <button class="ba xw ml-3 is" @click="open = false">
                                    <div class="tc">Close</div>
                                    <svg class="o_ sq dd">
                                        <path
                                            d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"
                                        ></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <!-- End -->
                    </div>

                    <!-- Start -->
                    <div x-show="open" x-data="{ open: true }">
                        <div class="inline-flex ub va vc rounded-sm text-sm hx border cq yr">
                            <div class="flex ox fh ff">
                                <div class="flex">
                                    <svg class="o_ sq af dd bu is rk" viewBox="0 0 16 16">
                                        <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zM7 11.4L3.6 8 5 6.6l2 2 4-4L12.4 6 7 11.4z"></path>
                                    </svg>
                                    <div>A successful toast.</div>
                                </div>
                                <button class="ba xw ml-3 is" @click="open = false">
                                    <div class="tc">Close</div>
                                    <svg class="o_ sq dd">
                                        <path
                                            d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"
                                        ></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- End -->

                    <!-- Start -->
                    <div x-show="open" x-data="{ open: true }">
                        <div class="inline-flex ub va vc rounded-sm text-sm h_ border cz yu">
                            <div class="flex ox fh ff">
                                <div class="flex">
                                    <svg class="o_ sq af dd bu is rk" viewBox="0 0 16 16">
                                        <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm3.5 10.1l-1.4 1.4L8 9.4l-2.1 2.1-1.4-1.4L6.6 8 4.5 5.9l1.4-1.4L8 6.6l2.1-2.1 1.4 1.4L9.4 8l2.1 2.1z"></path>
                                    </svg>
                                    <div>A dangerous toast.</div>
                                </div>
                                <button class="ba xw ml-3 is" @click="open = false">
                                    <div class="tc">Close</div>
                                    <svg class="o_ sq dd">
                                        <path
                                            d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"
                                        ></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- End -->

                    <!-- Start -->
                    <div x-show="open" x-data="{ open: true }">
                        <div class="inline-flex ub va vc rounded-sm text-sm hz border he text-indigo-500">
                            <div class="flex ox fh ff">
                                <div class="flex">
                                    <svg class="o_ sq af dd bu is rk" viewBox="0 0 16 16">
                                        <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm1 12H7V7h2v5zM8 6c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1z"></path>
                                    </svg>
                                    <div>An informational toast.</div>
                                </div>
                                <button class="ba xw ml-3 is" @click="open = false">
                                    <div class="tc">Close</div>
                                    <svg class="o_ sq dd">
                                        <path
                                            d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"
                                        ></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- End -->
                </div>
            </div>

            <!-- Toast 3 -->
            <div>
                <h2 class="gc text-slate-800 font-bold rb">Toast 3</h2>
                <div class="le">
                    <!-- Start -->
                    <div x-show="open" x-data="{ open: true }">
                        <div class="inline-flex ub va vc rounded-sm text-sm bg-white bh border border-slate-200 gz">
                            <div class="flex ox fh ff">
                                <div class="flex">
                                    <svg class="o_ sq af dd yl is rk" viewBox="0 0 16 16">
                                        <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 12c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm1-3H7V4h2v5z"></path>
                                    </svg>
                                    <div>A warning toast.</div>
                                </div>
                                <button class="ba xw ml-3 is" @click="open = false">
                                    <div class="tc">Close</div>
                                    <svg class="o_ sq dd">
                                        <path
                                            d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"
                                        ></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <!-- End -->
                    </div>

                    <!-- Start -->
                    <div x-show="open" x-data="{ open: true }">
                        <div class="inline-flex ub va vc rounded-sm text-sm bg-white bh border border-slate-200 gz">
                            <div class="flex ox fh ff">
                                <div class="flex">
                                    <svg class="o_ sq af dd yf is rk" viewBox="0 0 16 16">
                                        <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zM7 11.4L3.6 8 5 6.6l2 2 4-4L12.4 6 7 11.4z"></path>
                                    </svg>
                                    <div>A successful toast.</div>
                                </div>
                                <button class="ba xw ml-3 is" @click="open = false">
                                    <div class="tc">Close</div>
                                    <svg class="o_ sq dd">
                                        <path
                                            d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"
                                        ></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- End -->

                    <!-- Start -->
                    <div x-show="open" x-data="{ open: true }">
                        <div class="inline-flex ub va vc rounded-sm text-sm bg-white bh border border-slate-200 gz">
                            <div class="flex ox fh ff">
                                <div class="flex">
                                    <svg class="o_ sq af dd yi is rk" viewBox="0 0 16 16">
                                        <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm3.5 10.1l-1.4 1.4L8 9.4l-2.1 2.1-1.4-1.4L6.6 8 4.5 5.9l1.4-1.4L8 6.6l2.1-2.1 1.4 1.4L9.4 8l2.1 2.1z"></path>
                                    </svg>
                                    <div>A dangerous toast.</div>
                                </div>
                                <button class="ba xw ml-3 is" @click="open = false">
                                    <div class="tc">Close</div>
                                    <svg class="o_ sq dd">
                                        <path
                                            d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"
                                        ></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- End -->

                    <!-- Start -->
                    <div x-show="open" x-data="{ open: true }">
                        <div class="inline-flex ub va vc rounded-sm text-sm bg-white bh border border-slate-200 gz">
                            <div class="flex ox fh ff">
                                <div class="flex">
                                    <svg class="o_ sq af dd text-indigo-500 is rk" viewBox="0 0 16 16">
                                        <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm1 12H7V7h2v5zM8 6c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1z"></path>
                                    </svg>
                                    <div>An informational toast.</div>
                                </div>
                                <button class="ba xw ml-3 is" @click="open = false">
                                    <div class="tc">Close</div>
                                    <svg class="o_ sq dd">
                                        <path
                                            d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"
                                        ></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- End -->
                </div>
            </div>

            <!-- Notification -->
            <div>
                <h2 class="gc text-slate-800 font-bold rb">Notification</h2>
                <div class="le">
                    <!-- Start -->
                    <div x-show="open" x-data="{ open: true }">
                        <div class="inline-flex fu ai va vc rounded-sm text-sm bg-white bh border border-slate-200 gz">
                            <div class="flex ox fh ff">
                                <div class="flex">
                                    <svg class="o_ sq af dd yl is rk" viewBox="0 0 16 16">
                                        <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 12c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm1-3H7V4h2v5z"></path>
                                    </svg>
                                    <div>
                                        <div class="gm text-slate-800 rx">Merged Pull Request</div>
                                        <div>Lorem ipsum dolor sit amet, consectetur adipiscing sed do eiusmod tempor incididunt ut labore et dolore.</div>
                                    </div>
                                </div>
                                <button class="ba xw ml-3 is" @click="open = false">
                                    <div class="tc">Close</div>
                                    <svg class="o_ sq dd">
                                        <path
                                            d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"
                                        ></path>
                                    </svg>
                                </button>
                            </div>
                            <div class="ga io">
                                <a class="gm text-indigo-500 xu" href="#0">Action -&gt;</a>
                            </div>
                        </div>
                        <!-- End -->
                    </div>

                    <!-- Start -->
                    <div x-show="open" x-data="{ open: true }">
                        <div class="inline-flex fu ai va vc rounded-sm text-sm bg-white bh border border-slate-200 gz">
                            <div class="flex ox fh ff">
                                <div class="flex">
                                    <svg class="o_ sq af dd yf is rk" viewBox="0 0 16 16">
                                        <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zM7 11.4L3.6 8 5 6.6l2 2 4-4L12.4 6 7 11.4z"></path>
                                    </svg>
                                    <div>
                                        <div class="gm text-slate-800 rx">Merged Pull Request</div>
                                        <div>Lorem ipsum dolor sit amet, consectetur adipiscing sed do eiusmod tempor incididunt ut labore et dolore.</div>
                                    </div>
                                </div>
                                <button class="ba xw ml-3 is" @click="open = false">
                                    <div class="tc">Close</div>
                                    <svg class="o_ sq dd">
                                        <path
                                            d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"
                                        ></path>
                                    </svg>
                                </button>
                            </div>
                            <div class="ga io">
                                <a class="gm text-indigo-500 xu" href="#0">Action -&gt;</a>
                            </div>
                        </div>
                    </div>
                    <!-- End -->

                    <!-- Start -->
                    <div x-show="open" x-data="{ open: true }">
                        <div class="inline-flex fu ai va vc rounded-sm text-sm bg-white bh border border-slate-200 gz">
                            <div class="flex ox fh ff">
                                <div class="flex">
                                    <svg class="o_ sq af dd yi is rk" viewBox="0 0 16 16">
                                        <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm3.5 10.1l-1.4 1.4L8 9.4l-2.1 2.1-1.4-1.4L6.6 8 4.5 5.9l1.4-1.4L8 6.6l2.1-2.1 1.4 1.4L9.4 8l2.1 2.1z"></path>
                                    </svg>
                                    <div>
                                        <div class="gm text-slate-800 rx">Merged Pull Request</div>
                                        <div>Lorem ipsum dolor sit amet, consectetur adipiscing sed do eiusmod tempor incididunt ut labore et dolore.</div>
                                    </div>
                                </div>
                                <button class="ba xw ml-3 is" @click="open = false">
                                    <div class="tc">Close</div>
                                    <svg class="o_ sq dd">
                                        <path
                                            d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"
                                        ></path>
                                    </svg>
                                </button>
                            </div>
                            <div class="ga io">
                                <a class="gm text-indigo-500 xu" href="#0">Action -&gt;</a>
                            </div>
                        </div>
                    </div>
                    <!-- End -->

                    <!-- Start -->
                    <div x-show="open" x-data="{ open: true }">
                        <div class="inline-flex fu ai va vc rounded-sm text-sm bg-white bh border border-slate-200 gz">
                            <div class="flex ox fh ff">
                                <div class="flex">
                                    <svg class="o_ sq af dd text-indigo-500 is rk" viewBox="0 0 16 16">
                                        <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm1 12H7V7h2v5zM8 6c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1z"></path>
                                    </svg>
                                    <div>
                                        <div class="gm text-slate-800 rx">Merged Pull Request</div>
                                        <div>Lorem ipsum dolor sit amet, consectetur adipiscing sed do eiusmod tempor incididunt ut labore et dolore.</div>
                                    </div>
                                </div>
                                <button class="ba xw ml-3 is" @click="open = false">
                                    <div class="tc">Close</div>
                                    <svg class="o_ sq dd">
                                        <path
                                            d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"
                                        ></path>
                                    </svg>
                                </button>
                            </div>
                            <div class="ga io">
                                <a class="gm text-indigo-500 xu" href="#0">Action -&gt;</a>
                            </div>
                        </div>
                    </div>
                    <!-- End -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection