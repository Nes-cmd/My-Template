@extends('layouts.admin.app')
@section('contents')
<div class="va jn teb vf ox uz ri">
    <!-- Page header -->
    <div class="ry">
        <h1 class="gc zc text-slate-800 font-bold">Breadcrumb ✨</h1>
    </div>

    <div class="cg border-slate-200">
        <!-- Components -->
        <div class="ln ie">
            <!-- With Slashes -->
            <div>
                <h2 class="gc text-slate-800 font-bold rb">With Slashes</h2>
                <div class="vd vf hw border border-slate-200 rounded-sm">
                    <div class="gu">
                        <!-- Start -->
                        <ul class="inline-flex flex-wrap text-sm gm">
                            <li class="wc wk wl wa">
                                <a class="text-slate-500 xf" href="#0">Home</a>
                            </li>
                            <li class="wc wk wl wa">
                                <a class="text-slate-500 xf" href="#0">Settings</a>
                            </li>
                            <li class="wc wk wl wa">
                                <a class="text-slate-500 xf" href="#0">Notifications</a>
                            </li>
                        </ul>
                        <!-- End -->
                    </div>
                </div>
            </div>

            <!-- With Dots -->
            <div>
                <h2 class="gc text-slate-800 font-bold rb">With Dots</h2>
                <div class="vd vf hw border border-slate-200 rounded-sm">
                    <div class="gu">
                        <!-- Start -->
                        <ul class="inline-flex flex-wrap text-sm gm">
                            <li class="wh wk wl wa">
                                <a class="text-slate-500 xf" href="#0">Home</a>
                            </li>
                            <li class="wh wk wl wa">
                                <a class="text-slate-500 xf" href="#0">Settings</a>
                            </li>
                            <li class="wh wk wl wa">
                                <a class="text-slate-500 xf" href="#0">Notifications</a>
                            </li>
                        </ul>
                        <!-- End -->
                    </div>
                </div>
            </div>

            <!-- With Chevrons -->
            <div>
                <h2 class="gc text-slate-800 font-bold rb">With Chevrons</h2>
                <div class="vd vf hw border border-slate-200 rounded-sm">
                    <div class="gu">
                        <!-- Start -->
                        <ul class="inline-flex flex-wrap text-sm gm">
                            <li class="flex items-center">
                                <a class="text-slate-500 xf" href="#0">Home</a>
                                <svg class="sq o_ dd yt ra" viewBox="0 0 16 16">
                                    <path d="M6.6 13.4L5.2 12l4-4-4-4 1.4-1.4L12 8z"></path>
                                </svg>
                            </li>
                            <li class="flex items-center">
                                <a class="text-slate-500 xf" href="#0">Settings</a>
                                <svg class="sq o_ dd yt ra" viewBox="0 0 16 16">
                                    <path d="M6.6 13.4L5.2 12l4-4-4-4 1.4-1.4L12 8z"></path>
                                </svg>
                            </li>
                            <li class="flex items-center">
                                <a class="text-slate-500 xf" href="#0">Notifications</a>
                            </li>
                        </ul>
                        <!-- End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection