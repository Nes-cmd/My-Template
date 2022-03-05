@extends('layouts.admin.app')
@section('contents')
<div class="va jn teb vf ox uz ri">
    <!-- Page header -->
    <div class="ry">
        <h1 class="gc zc text-slate-800 font-bold">Tooltip ✨</h1>
    </div>

    <div class="cg border-slate-200">
        <!-- Components -->
        <div class="ln ie">
            <!-- Tooltip Types -->
            <div>
                <h2 class="gc text-slate-800 font-bold rb">Tooltip Types</h2>
                <div class="flex flex-wrap items-center rn">
                    <div class="rr">
                        <div class="flex items-center f_">
                            <!-- Start -->
                            <div class="td" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                                <button class="block" aria-haspopup="true" :aria-expanded="open" @focus="open = true" @focusout="open = false" @click.prevent="">
                                    <svg class="o_ sq dd yt" viewBox="0 0 16 16">
                                        <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 12c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm1-3H7V4h2v5z"></path>
                                    </svg>
                                </button>
                                <div class="nv tp tz ne a_ ap">
                                    <div
                                        class="bg-white border border-slate-200 vs rounded bh lw in"
                                        x-show="open"
                                        x-transition:enter="b_ ws wn a_"
                                        x-transition:enter-start="opacity-0 ay"
                                        x-transition:enter-end="bf ag"
                                        x-transition:leave="b_ ws wn"
                                        x-transition:leave-start="bf"
                                        x-transition:leave-end="opacity-0"
                                        x-cloak=""
                                    >
                                        <div class="gp ct">Just a tip</div>
                                    </div>
                                </div>
                            </div>
                            <!-- End -->
                            <div class="text-sm gm text-slate-500">Label White</div>
                        </div>
                    </div>

                    <div class="rr">
                        <div class="flex items-center f_">
                            <!-- Start -->
                            <div class="td" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                                <button class="block" aria-haspopup="true" :aria-expanded="open" @focus="open = true" @focusout="open = false" @click.prevent="">
                                    <svg class="o_ sq dd yt" viewBox="0 0 16 16">
                                        <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 12c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm1-3H7V4h2v5z"></path>
                                    </svg>
                                </button>
                                <div class="nv tp tz ne a_ ap">
                                    <div
                                        class="pr vs rounded lw in"
                                        x-show="open"
                                        x-transition:enter="b_ ws wn a_"
                                        x-transition:enter-start="opacity-0 ay"
                                        x-transition:enter-end="bf ag"
                                        x-transition:leave="b_ ws wn"
                                        x-transition:leave-start="bf"
                                        x-transition:leave-end="opacity-0"
                                        x-cloak=""
                                    >
                                        <div class="gp yn ct">Just a tip</div>
                                    </div>
                                </div>
                            </div>
                            <!-- End -->
                            <div class="text-sm gm text-slate-500">Label Dark</div>
                        </div>
                    </div>

                    <div class="rr">
                        <div class="flex items-center f_">
                            <!-- Start -->
                            <div class="td" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                                <button class="block" aria-haspopup="true" :aria-expanded="open" @focus="open = true" @focusout="open = false" @click.prevent="">
                                    <svg class="o_ sq dd yt" viewBox="0 0 16 16">
                                        <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 12c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm1-3H7V4h2v5z"></path>
                                    </svg>
                                </button>
                                <div class="nv tp tz ne a_ ap">
                                    <div
                                        class="ux bg-white border border-slate-200 vs rounded bh lw in"
                                        x-show="open"
                                        x-transition:enter="b_ ws wn a_"
                                        x-transition:enter-start="opacity-0 ay"
                                        x-transition:enter-end="bf ag"
                                        x-transition:leave="b_ ws wn"
                                        x-transition:leave-start="bf"
                                        x-transition:leave-end="opacity-0"
                                        x-cloak=""
                                    >
                                        <div class="gp">Excepteur sint occaecat cupidata non proident, sunt in.</div>
                                    </div>
                                </div>
                            </div>
                            <!-- End -->
                            <div class="text-sm gm text-slate-500">Basic White</div>
                        </div>
                    </div>

                    <div class="rr">
                        <div class="flex items-center f_">
                            <!-- Start -->
                            <div class="td" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                                <button class="block" aria-haspopup="true" :aria-expanded="open" @focus="open = true" @focusout="open = false" @click.prevent="">
                                    <svg class="o_ sq dd yt" viewBox="0 0 16 16">
                                        <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 12c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm1-3H7V4h2v5z"></path>
                                    </svg>
                                </button>
                                <div class="nv tp tz ne a_ ap">
                                    <div
                                        class="ux pr vs rounded lw in"
                                        x-show="open"
                                        x-transition:enter="b_ ws wn a_"
                                        x-transition:enter-start="opacity-0 ay"
                                        x-transition:enter-end="bf ag"
                                        x-transition:leave="b_ ws wn"
                                        x-transition:leave-start="bf"
                                        x-transition:leave-end="opacity-0"
                                        x-cloak=""
                                    >
                                        <div class="gp yn">Excepteur sint occaecat cupidata non proident, sunt in.</div>
                                    </div>
                                </div>
                            </div>
                            <!-- End -->
                            <div class="text-sm gm text-slate-500">Basic Dark</div>
                        </div>
                    </div>

                    <div class="rr">
                        <div class="flex items-center f_">
                            <!-- Start -->
                            <div class="td" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                                <button class="block" aria-haspopup="true" :aria-expanded="open" @focus="open = true" @focusout="open = false" @click.prevent="">
                                    <svg class="o_ sq dd yt" viewBox="0 0 16 16">
                                        <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 12c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm1-3H7V4h2v5z"></path>
                                    </svg>
                                </button>
                                <div class="nv tp tz ne a_ ap">
                                    <div
                                        class="uj bg-white border border-slate-200 vr rounded bh lw in"
                                        x-show="open"
                                        x-transition:enter="b_ ws wn a_"
                                        x-transition:enter-start="opacity-0 ay"
                                        x-transition:enter-end="bf ag"
                                        x-transition:leave="b_ ws wn"
                                        x-transition:leave-start="bf"
                                        x-transition:leave-end="opacity-0"
                                        x-cloak=""
                                    >
                                        <div class="text-sm gm text-slate-500">Excepteur sint occaecat cupidata non proident, sunt in.</div>
                                    </div>
                                </div>
                            </div>
                            <!-- End -->
                            <div class="text-sm gm text-slate-500">Large White</div>
                        </div>
                    </div>

                    <div class="rr">
                        <div class="flex items-center f_">
                            <!-- Start -->
                            <div class="td" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                                <button class="block" aria-haspopup="true" :aria-expanded="open" @focus="open = true" @focusout="open = false" @click.prevent="">
                                    <svg class="o_ sq dd yt" viewBox="0 0 16 16">
                                        <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 12c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm1-3H7V4h2v5z"></path>
                                    </svg>
                                </button>
                                <div class="nv tp tz ne a_ ap">
                                    <div
                                        class="uj pr vr rounded lw in"
                                        x-show="open"
                                        x-transition:enter="b_ ws wn a_"
                                        x-transition:enter-start="opacity-0 ay"
                                        x-transition:enter-end="bf ag"
                                        x-transition:leave="b_ ws wn"
                                        x-transition:leave-start="bf"
                                        x-transition:leave-end="opacity-0"
                                        x-cloak=""
                                    >
                                        <div class="text-sm gm yn">Excepteur sint occaecat cupidata non proident, sunt in.</div>
                                    </div>
                                </div>
                            </div>
                            <!-- End -->
                            <div class="text-sm gm text-slate-500">Large Dark</div>
                        </div>
                    </div>

                    <div class="rr">
                        <div class="flex items-center f_">
                            <!-- Start -->
                            <div class="td" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                                <button class="block" aria-haspopup="true" :aria-expanded="open" @focus="open = true" @focusout="open = false" @click.prevent="">
                                    <svg class="o_ sq dd yt" viewBox="0 0 16 16">
                                        <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 12c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm1-3H7V4h2v5z"></path>
                                    </svg>
                                </button>
                                <div class="nv tp tz ne a_ ap">
                                    <div
                                        class="uj bg-white border border-slate-200 vr rounded bh lw in"
                                        x-show="open"
                                        x-transition:enter="b_ ws wn a_"
                                        x-transition:enter-start="opacity-0 ay"
                                        x-transition:enter-end="bf ag"
                                        x-transition:leave="b_ ws wn"
                                        x-transition:leave-start="bf"
                                        x-transition:leave-end="opacity-0"
                                        x-cloak=""
                                    >
                                        <div class="gp">
                                            <div class="gm text-slate-800 im">Let’s Talk Paragraph</div>
                                            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End -->
                            <div class="text-sm gm text-slate-500">Rich White</div>
                        </div>
                    </div>

                    <div class="rr">
                        <div class="flex items-center f_">
                            <!-- Start -->
                            <div class="td" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                                <button class="block" aria-haspopup="true" :aria-expanded="open" @focus="open = true" @focusout="open = false" @click.prevent="">
                                    <svg class="o_ sq dd yt" viewBox="0 0 16 16">
                                        <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 12c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm1-3H7V4h2v5z"></path>
                                    </svg>
                                </button>
                                <div class="nv tp tz ne a_ ap">
                                    <div
                                        class="uj pr vr rounded lw in"
                                        x-show="open"
                                        x-transition:enter="b_ ws wn a_"
                                        x-transition:enter-start="opacity-0 ay"
                                        x-transition:enter-end="bf ag"
                                        x-transition:leave="b_ ws wn"
                                        x-transition:leave-start="bf"
                                        x-transition:leave-end="opacity-0"
                                        x-cloak=""
                                    >
                                        <div class="gp">
                                            <div class="gm yn im">Let’s Talk Paragraph</div>
                                            <div class="yt">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End -->
                            <div class="text-sm gm text-slate-500">Rich Dark</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tooltip Position -->
            <div>
                <h2 class="gc text-slate-800 font-bold rb">Tooltip Position</h2>
                <div class="flex flex-wrap items-center rn">
                    <div class="rr">
                        <div class="flex items-center f_">
                            <!-- Start -->
                            <div class="td" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                                <button class="block" aria-haspopup="true" :aria-expanded="open" @focus="open = true" @focusout="open = false" @click.prevent="">
                                    <svg class="o_ sq dd yt" viewBox="0 0 16 16">
                                        <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 12c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm1-3H7V4h2v5z"></path>
                                    </svg>
                                </button>
                                <div class="nv tp tz ne a_ ap">
                                    <div
                                        class="bg-white border border-slate-200 vs rounded bh lw in"
                                        x-show="open"
                                        x-transition:enter="b_ ws wn a_"
                                        x-transition:enter-start="opacity-0 ay"
                                        x-transition:enter-end="bf ag"
                                        x-transition:leave="b_ ws wn"
                                        x-transition:leave-start="bf"
                                        x-transition:leave-end="opacity-0"
                                        x-cloak=""
                                    >
                                        <div class="gp ct">Just a tip</div>
                                    </div>
                                </div>
                            </div>
                            <!-- End -->
                            <div class="text-sm gm text-slate-500">Top</div>
                        </div>
                    </div>

                    <div class="rr">
                        <div class="flex items-center f_">
                            <!-- Start -->
                            <div class="td" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                                <button class="block" aria-haspopup="true" :aria-expanded="open" @focus="open = true" @focusout="open = false" @click.prevent="">
                                    <svg class="o_ sq dd yt" viewBox="0 0 16 16">
                                        <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 12c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm1-3H7V4h2v5z"></path>
                                    </svg>
                                </button>
                                <div class="nv tp tq ne a_ ap">
                                    <div
                                        class="bg-white border border-slate-200 vs rounded bh lw iw"
                                        x-show="open"
                                        x-transition:enter="b_ ws wn a_"
                                        x-transition:enter-start="opacity-0 ay"
                                        x-transition:enter-end="bf ag"
                                        x-transition:leave="b_ ws wn"
                                        x-transition:leave-start="bf"
                                        x-transition:leave-end="opacity-0"
                                        x-cloak=""
                                    >
                                        <div class="gp ct">Just a tip</div>
                                    </div>
                                </div>
                            </div>
                            <!-- End -->
                            <div class="text-sm gm text-slate-500">Bottom</div>
                        </div>
                    </div>

                    <div class="rr">
                        <div class="flex items-center f_">
                            <!-- Start -->
                            <div class="td" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                                <button class="block" aria-haspopup="true" :aria-expanded="open" @focus="open = true" @focusout="open = false" @click.prevent="">
                                    <svg class="o_ sq dd yt" viewBox="0 0 16 16">
                                        <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 12c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm1-3H7V4h2v5z"></path>
                                    </svg>
                                </button>
                                <div class="nv tp nr tx a_ ad">
                                    <div
                                        class="bg-white border border-slate-200 vs rounded bh lw mr-2"
                                        x-show="open"
                                        x-transition:enter="b_ ws wn a_"
                                        x-transition:enter-start="opacity-0 ay"
                                        x-transition:enter-end="bf ag"
                                        x-transition:leave="b_ ws wn"
                                        x-transition:leave-start="bf"
                                        x-transition:leave-end="opacity-0"
                                        x-cloak=""
                                    >
                                        <div class="gp ct">Just a tip</div>
                                    </div>
                                </div>
                            </div>
                            <!-- End -->
                            <div class="text-sm gm text-slate-500">Left</div>
                        </div>
                    </div>

                    <div class="rr">
                        <div class="flex items-center f_">
                            <!-- Start -->
                            <div class="td" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                                <button class="block" aria-haspopup="true" :aria-expanded="open" @focus="open = true" @focusout="open = false" @click.prevent="">
                                    <svg class="o_ sq dd yt" viewBox="0 0 16 16">
                                        <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 12c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm1-3H7V4h2v5z"></path>
                                    </svg>
                                </button>
                                <div class="nv tp ni tx a_ ad">
                                    <div
                                        class="bg-white border border-slate-200 vs rounded bh lw r_"
                                        x-show="open"
                                        x-transition:enter="b_ ws wn a_"
                                        x-transition:enter-start="opacity-0 ay"
                                        x-transition:enter-end="bf ag"
                                        x-transition:leave="b_ ws wn"
                                        x-transition:leave-start="bf"
                                        x-transition:leave-end="opacity-0"
                                        x-cloak=""
                                    >
                                        <div class="gp ct">Just a tip</div>
                                    </div>
                                </div>
                            </div>
                            <!-- End -->
                            <div class="text-sm gm text-slate-500">Right</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection