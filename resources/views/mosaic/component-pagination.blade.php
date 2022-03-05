@extends('layouts.admin.app')
@section('contents')
<div class="va jn teb vf ox uz ri">
    <!-- Page header -->
    <div class="ry">
        <h1 class="gc zc text-slate-800 font-bold">Pagination ✨</h1>
    </div>

    <div class="cg border-slate-200">
        <!-- Components -->
        <div class="ln ie">
            <!-- Option 1 -->
            <div>
                <h2 class="gc text-slate-800 font-bold rb">Option 1</h2>
                <div class="vd vf hw border border-slate-200 rounded-sm">
                    <!-- Start -->
                    <div class="flex justify-center">
                        <nav class="flex" role="navigation" aria-label="Navigation">
                            <div class="mr-2">
                                <span class="inline-flex items-center justify-center rounded gj vm vc bg-white border border-slate-200 yd">
                                    <span class="tc">Previous</span><wbr />
                                    <svg class="sq o_ dd" viewBox="0 0 16 16">
                                        <path d="M9.4 13.4l1.4-1.4-4-4 4-4-1.4-1.4L4 8z"></path>
                                    </svg>
                                </span>
                            </div>
                            <ul class="inline-flex text-sm gm fk bd">
                                <li>
                                    <span class="inline-flex items-center justify-center co gj me vc bg-white border border-slate-200 text-indigo-500">1</span>
                                </li>
                                <li>
                                    <a class="inline-flex items-center justify-center gj me vc bg-white xs border border-slate-200 gz xh" href="#0">2</a>
                                </li>
                                <li>
                                    <a class="inline-flex items-center justify-center gj me vc bg-white xs border border-slate-200 gz xh" href="#0">3</a>
                                </li>
                                <li>
                                    <span class="inline-flex items-center justify-center gj me vc bg-white border border-slate-200 yt">…</span>
                                </li>
                                <li>
                                    <a class="inline-flex items-center justify-center cu gj me vc bg-white xs border border-slate-200 gz xh" href="#0">9</a>
                                </li>
                            </ul>
                            <div class="r_">
                                <a href="#0" class="inline-flex items-center justify-center rounded gj vm vc bg-white xs border border-slate-200 gz xh bd">
                                    <span class="tc">Next</span><wbr />
                                    <svg class="sq o_ dd" viewBox="0 0 16 16">
                                        <path d="M6.6 13.4L5.2 12l4-4-4-4 1.4-1.4L12 8z"></path>
                                    </svg>
                                </a>
                            </div>
                        </nav>
                    </div>
                    <!-- End -->
                </div>
            </div>

            <!-- Option 2 -->
            <div>
                <h2 class="gc text-slate-800 font-bold rb">Option 2</h2>
                <div class="vd vf hw border border-slate-200 rounded-sm">
                    <!-- Start -->
                    <div class="flex fu _d _g _w">
                        <nav class="rw kj km" role="navigation" aria-label="Navigation">
                            <ul class="flex justify-center">
                                <li class="ml-3 first--ml-0">
                                    <a class="btn bg-white border-slate-200 yd az" href="#0" disabled="disabled">&lt;- Previous</a>
                                </li>
                                <li class="ml-3 first--ml-0">
                                    <a class="btn bg-white border-slate-200 hover--border-slate-300 text-indigo-500" href="#0">Next -&gt;</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="text-sm text-slate-500 gu jo">Showing <span class="gm gz">1</span> to <span class="gm gz">10</span> of <span class="gm gz">467</span> results</div>
                    </div>
                    <!-- End -->
                </div>
            </div>

            <!-- Option 3 -->
            <div>
                <h2 class="gc text-slate-800 font-bold rb">Option 3</h2>
                <div class="vd vf hw border border-slate-200 rounded-sm">
                    <!-- Start -->
                    <div>
                        <nav class="flex fh" role="navigation" aria-label="Navigation">
                            <div class="au mr-2">
                                <a class="btn bg-white border-slate-200 yd az" href="#0" disabled="disabled">&lt;-<span class="hidden _o">&nbsp;Previous</span></a>
                            </div>
                            <div class="al gu">
                                <ul class="inline-flex text-sm gm fk">
                                    <li>
                                        <span class="inline-flex items-center justify-center rounded-full gj vg vc bg-white border border-slate-200 text-indigo-500 bd"><span class="uf">1</span></span>
                                    </li>
                                    <li>
                                        <a class="inline-flex items-center justify-center gj vg vc gz xf border ck" href="#0"><span class="uf">2</span></a>
                                    </li>
                                    <li>
                                        <a class="inline-flex items-center justify-center gj vg vc gz xf border ck" href="#0"><span class="uf">3</span></a>
                                    </li>
                                    <li>
                                        <span class="inline-flex items-center justify-center gj vg vc yt">…</span>
                                    </li>
                                    <li>
                                        <a class="inline-flex items-center justify-center cu gj vg vc gz xf border ck" href="#0"><span class="uf">9</span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="au ga r_">
                                <a class="btn bg-white border-slate-200 hover--border-slate-300 text-indigo-500" href="#0"><span class="hidden _o">Next&nbsp;</span>-&gt;</a>
                            </div>
                        </nav>
                    </div>
                    <!-- End -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection