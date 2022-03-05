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
            <!-- Input Types -->
            <div>
                <h2 class="gc text-slate-800 font-bold rb">Input Types</h2>
                <div class="sx fm qd">
                    <div>
                        <!-- Start -->
                        <div>
                            <label class="block text-sm gm rx" for="default">Default</label>
                            <input id="default" class="tn ox" type="text" />
                        </div>
                        <!-- End -->
                    </div>

                    <div>
                        <!-- Start -->
                        <div>
                            <div class="flex items-center fh">
                                <label class="block text-sm gm rx" for="tooltip">W/ Tooltip</label>
                                <div class="td r_" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                                    <button class="block" aria-haspopup="true" :aria-expanded="open" @focus="open = true" @focusout="open = false" @click.prevent="">
                                        <svg class="o_ sq dd yt" viewBox="0 0 16 16">
                                            <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 12c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm1-3H7V4h2v5z"></path>
                                        </svg>
                                    </button>
                                    <div class="nv tp tz ne a_ ap">
                                        <div
                                            class="uk pr yn vg vk rounded lw in"
                                            x-show="open"
                                            x-transition:enter="b_ ws wn a_"
                                            x-transition:enter-start="opacity-0 ay"
                                            x-transition:enter-end="bf ag"
                                            x-transition:leave="b_ ws wn"
                                            x-transition:leave-start="bf"
                                            x-transition:leave-end="opacity-0"
                                            x-cloak=""
                                        >
                                            <div class="text-sm">Excepteur sint occaecat cupidata non proident, sunt in.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input id="tooltip" class="tn ox" type="text" />
                        </div>
                        <!-- End -->
                    </div>

                    <div>
                        <!-- Start -->
                        <div>
                            <label class="block text-sm gm rx" for="mandatory">Mandatory <span class="yi">*</span></label>
                            <input id="mandatory" class="tn ox" type="text" required="" />
                        </div>
                        <!-- End -->
                    </div>

                    <div>
                        <!-- Start -->
                        <div>
                            <label class="block text-sm gm rx" for="prefix">W/ Prefix</label>
                            <div class="td">
                                <input id="prefix" class="tn ox mc" type="text" />
                                <div class="tp tm tg flex items-center pointer-events-none">
                                    <span class="text-sm yt gm vx">USD</span>
                                </div>
                            </div>
                        </div>
                        <!-- End -->
                    </div>

                    <div>
                        <!-- Start -->
                        <div>
                            <label class="block text-sm gm rx" for="suffix">W/ Suffix</label>
                            <div class="td">
                                <input id="suffix" class="tn ox mh" type="text" />
                                <div class="tp tm nt flex items-center pointer-events-none">
                                    <span class="text-sm yt gm vx">%</span>
                                </div>
                            </div>
                        </div>
                        <!-- End -->
                    </div>

                    <div>
                        <!-- Start -->
                        <div>
                            <label class="block text-sm gm rx" for="placeholder">W/ Placeholder</label>
                            <input id="placeholder" class="tn ox" type="text" placeholder="Something cool..." />
                        </div>
                        <!-- End -->
                    </div>

                    <div>
                        <!-- Start -->
                        <form>
                            <label class="block text-sm gm rx" for="icon">W/ Icon</label>
                            <div class="td">
                                <input id="icon" class="tn ox mr" type="text" />
                                <div class="tp tm tg flex items-center pointer-events-none">
                                    <svg class="o_ sq dd yt af ml-3 mr-2" viewBox="0 0 16 16">
                                        <path
                                            d="M11.7.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM4.6 14H2v-2.6l6-6L10.6 8l-6 6zM12 6.6L9.4 4 11 2.4 13.6 5 12 6.6z"
                                        ></path>
                                    </svg>
                                </div>
                            </div>
                        </form>
                        <!-- End -->
                    </div>

                    <div>
                        <!-- Start -->
                        <div>
                            <div>
                                <label class="block text-sm gm rx" for="supporting-text">W/ Supporting Text</label>
                                <input id="supporting-text" class="tn ox" type="text" />
                            </div>
                            <div class="gp io">Supporting text goes here!</div>
                        </div>
                        <!-- End -->
                    </div>

                    <div>
                        <!-- Start -->
                        <form>
                            <label class="block text-sm gm rx" for="form-search">Search</label>
                            <div class="td">
                                <input id="form-search" class="tn ox mr" type="search" />
                                <button class="tp tm tg kr" type="submit" aria-label="Search">
                                    <svg class="o_ sq af dd yt ks ml-3 mr-2" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7 14c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7zM7 2C4.243 2 2 4.243 2 7s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5z"></path>
                                        <path d="M15.707 14.293L13.314 11.9a8.019 8.019 0 01-1.414 1.414l2.393 2.393a.997.997 0 001.414 0 .999.999 0 000-1.414z"></path>
                                    </svg>
                                </button>
                            </div>
                        </form>
                        <!-- End -->
                    </div>
                </div>
            </div>

            <!-- Input Sizes -->
            <div>
                <h2 class="gc text-slate-800 font-bold rb">Input Sizes</h2>
                <div class="sx fm qd">
                    <div>
                        <!-- Start -->
                        <div>
                            <label class="block text-sm gm rx" for="small">Small</label>
                            <input id="small" class="tn ox vg vk" type="text" />
                        </div>
                        <!-- End -->
                    </div>

                    <div>
                        <!-- Start -->
                        <div>
                            <label class="block text-sm gm rx" for="normal">Default</label>
                            <input id="normal" class="tn ox" type="text" />
                        </div>
                        <!-- End -->
                    </div>

                    <div>
                        <!-- Start -->
                        <div>
                            <label class="block text-sm gm rx" for="large">Large</label>
                            <input id="large" class="tn ox va vl" type="text" />
                        </div>
                        <!-- End -->
                    </div>
                </div>
            </div>

            <!-- Input States -->
            <div>
                <h2 class="gc text-slate-800 font-bold rb">Input States</h2>
                <div class="sx fm qd">
                    <div>
                        <!-- Start -->
                        <div>
                            <label class="block text-sm gm rx" for="disabled">Disabled</label>
                            <input id="disabled" class="tn ox xz ke kn xq" type="text" placeholder="Something cool..." disabled="disabled" />
                        </div>
                        <!-- End -->
                    </div>

                    <div>
                        <!-- Start -->
                        <div>
                            <div>
                                <label class="block text-sm gm rx" for="error">Error <span class="yi">*</span></label>
                                <input id="error" class="tn ox ht" type="text" />
                            </div>
                            <div class="gp io yi">This field is required!</div>
                        </div>
                        <!-- End -->
                    </div>

                    <div>
                        <!-- Start -->
                        <div>
                            <div>
                                <label class="block text-sm gm rx" for="success">Success <span class="yi">*</span></label>
                                <input id="success" class="tn ox hn" type="text" />
                            </div>
                            <div class="gp io yf">Sounds good!</div>
                        </div>
                        <!-- End -->
                    </div>
                </div>
            </div>

            <!-- Select -->
            <div>
                <h2 class="gc text-slate-800 font-bold rb">Select</h2>
                <label class="block text-sm gm rx" for="country">Country</label>
                <select id="country" class="ts">
                    <option>Italy</option>
                    <option>USA</option>
                    <option>United Kingdom</option>
                </select>
            </div>

            <!-- Checkbox -->
            <div>
                <h2 class="gc text-slate-800 font-bold rb">Checkbox</h2>
                <div class="flex flex-wrap items-center re">
                    <div class="rt">
                        <!-- Start -->
                        <label class="flex items-center">
                            <input type="checkbox" class="to" />
                            <span class="text-sm r_">Active</span>
                        </label>
                        <!-- End -->
                    </div>

                    <div class="rt">
                        <!-- Start -->
                        <label class="flex items-center">
                            <input type="checkbox" class="to" checked="checked" />
                            <span class="text-sm r_">Selected</span>
                        </label>
                        <!-- End -->
                    </div>

                    <div class="rt">
                        <!-- Start -->
                        <label class="flex items-center">
                            <input type="checkbox" class="to kt" disabled="disabled" />
                            <span class="text-sm r_">Disabled</span>
                        </label>
                        <!-- End -->
                    </div>
                </div>
            </div>

            <!-- Radio -->
            <div>
                <h2 class="gc text-slate-800 font-bold rb">Radio</h2>
                <div class="flex flex-wrap items-center re">
                    <div class="rt">
                        <!-- Start -->
                        <label class="flex items-center">
                            <input type="radio" name="radio-buttons" class="tu" />
                            <span class="text-sm r_">Active</span>
                        </label>
                        <!-- End -->
                    </div>

                    <div class="rt">
                        <!-- Start -->
                        <label class="flex items-center">
                            <input type="radio" name="radio-buttons" class="tu" checked="checked" />
                            <span class="text-sm r_">Selected</span>
                        </label>
                        <!-- End -->
                    </div>

                    <div class="rt">
                        <!-- Start -->
                        <label class="flex items-center">
                            <input type="radio" name="radio-buttons" class="tu kt" disabled="disabled" />
                            <span class="text-sm r_">Disabled</span>
                        </label>
                        <!-- End -->
                    </div>
                </div>
            </div>

            <!-- Toggle Switch -->
            <div>
                <h2 class="gc text-slate-800 font-bold rb">Toggle Switch</h2>
                <div class="flex flex-wrap items-center re">
                    <div class="rt uu">
                        <!-- Start -->
                        <div class="flex items-center" x-data="{ checked: true }">
                            <div class="tf">
                                <input type="checkbox" id="switch-1" class="tc" x-model="checked" />
                                <label class="pi" for="switch-1">
                                    <span class="bg-white bd" aria-hidden="true"></span>
                                    <span class="tc">Switch label</span>
                                </label>
                            </div>
                            <div class="text-sm yt gw r_" x-text="checked ? 'On' : 'Off'"></div>
                        </div>
                        <!-- End -->
                    </div>

                    <div class="rt uu">
                        <!-- Start -->
                        <div class="flex items-center" x-data="{ checked: false }">
                            <div class="tf">
                                <input type="checkbox" id="switch-2" class="tc" x-model="checked" />
                                <label class="pi" for="switch-2">
                                    <span class="bg-white bd" aria-hidden="true"></span>
                                    <span class="tc">Switch label</span>
                                </label>
                            </div>
                            <div class="text-sm yt gw r_" x-text="checked ? 'On' : 'Off'"></div>
                        </div>
                        <!-- End -->
                    </div>

                    <div class="rt ut">
                        <!-- Start -->
                        <div class="flex items-center" x-data="{ checked: false }">
                            <div class="tf">
                                <input type="checkbox" id="switch-3" class="tc" x-model="checked" disabled="disabled" />
                                <label class="pi" for="switch-3">
                                    <span class="bg-white bd" aria-hidden="true"></span>
                                    <span class="tc">Switch label</span>
                                </label>
                            </div>
                            <div class="text-sm yt gw r_">Disabled</div>
                        </div>
                        <!-- End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection