@extends('layouts.admin.app')
@section('contents')
<div class="zp z_">
    <!-- Content -->
    <div class="va jn teb vf ox uz ri">
        <!-- Page header -->
        <div class="_u _w _g ic">
            <!-- Left: Title -->
            <div class="rw kj">
                <h1 class="gc zc text-slate-800 font-bold">Cards ✨</h1>
            </div>

            <!-- Add card button -->
            <button class="btn hd wq ye">
                <svg class="o_ sq dd bo af" viewBox="0 0 16 16">
                    <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"></path>
                </svg>
                <span class="hidden tnm r_">Add Card</span>
            </button>
        </div>

        <!-- Filters -->
        <div class="ic">
            <ul class="flex flex-wrap -m-1">
                <li class="m-1">
                    <button class="inline-flex items-center justify-center text-sm gm gj rounded-full vx vk border ck bd hd ye we wi">View All</button>
                </li>
                <li class="m-1">
                    <button class="inline-flex items-center justify-center text-sm gm gj rounded-full vx vk border border-slate-200 hover--border-slate-300 bd bg-white text-slate-500 we wi">Physical Cards</button>
                </li>
                <li class="m-1">
                    <button class="inline-flex items-center justify-center text-sm gm gj rounded-full vx vk border border-slate-200 hover--border-slate-300 bd bg-white text-slate-500 we wi">Virtual Cards</button>
                </li>
            </ul>
        </div>

        <!-- Credit cards -->
        <div class="fz">
            <!-- Card 1 -->
            <label class="td block aq go ox">
                <input type="radio" name="radio-buttons" class="kc tc" checked="checked" />
                <div class="vn rounded border border-slate-200 hover--border-slate-300 bd we wi">
                    <div class="sx fi items-center fy">
                        <!-- Card -->
                        <div class="n_ nw kg ky flex items-center fq teq tnc">
                            <svg class="af" width="32" height="24" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <linearGradient x1="1.829%" y1="100%" x2="100%" y2="2.925%" id="c1-a">
                                        <stop stop-color="#475569" offset="0%"></stop>
                                        <stop stop-color="#1E293B" offset="100%"></stop>
                                        <stop stop-color="#9FA1FF" offset="100%"></stop>
                                    </linearGradient>
                                </defs>
                                <g fill="none" fill-rule="evenodd">
                                    <rect fill="url(#c1-a)" width="32" height="24" rx="3"></rect>
                                    <ellipse fill="#E61C24" fill-rule="nonzero" cx="12.522" cy="12" rx="5.565" ry="5.647"></ellipse>
                                    <ellipse fill="#F99F1B" fill-rule="nonzero" cx="19.432" cy="12" rx="5.565" ry="5.647"></ellipse>
                                    <path d="M15.977 7.578A5.667 5.667 0 0 0 13.867 12c0 1.724.777 3.353 2.11 4.422A5.667 5.667 0 0 0 18.087 12a5.667 5.667 0 0 0-2.11-4.422Z" fill="#F26622" fill-rule="nonzero"></path>
                                </g>
                            </svg>
                            <div>
                                <div class="text-sm gm text-slate-800">_Metal</div>
                                <div class="gp">**7328</div>
                            </div>
                        </div>
                        <!-- Name -->
                        <div class="n_ nx kg ky go ju tte tnp">
                            <div class="text-sm gm text-slate-800 lz">Dominik Lamakani</div>
                        </div>
                        <!-- Card limits -->
                        <div class="n_ nw kg kb ga ju teq tnh">
                            <div class="text-sm">$780,00 / $20,000</div>
                        </div>
                        <!-- Card status -->
                        <div class="n_ nx kg kw ga tte tnp">
                            <div class="gp inline-flex gm hx yr rounded-full gu vm vk">Active</div>
                        </div>
                    </div>
                </div>
                <div class="tp tm cp ck kh rounded pointer-events-none" aria-hidden="true"></div>
            </label>

            <!-- Card 2 -->
            <label class="td block aq go ox">
                <input type="radio" name="radio-buttons" class="kc tc" />
                <div class="vn rounded border border-slate-200 hover--border-slate-300 bd we wi">
                    <div class="sx fi items-center fy">
                        <!-- Card -->
                        <div class="n_ nw kg ky flex items-center fq teq tnc">
                            <svg class="af" width="32" height="24" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <linearGradient x1="1.829%" y1="100%" x2="100%" y2="2.925%" id="c2a">
                                        <stop stop-color="#6366F1" offset="0%"></stop>
                                        <stop stop-color="#9FA1FF" offset="100%"></stop>
                                        <stop stop-color="#9FA1FF" offset="100%"></stop>
                                    </linearGradient>
                                </defs>
                                <g fill="none" fill-rule="evenodd">
                                    <rect fill="url(#c2a)" width="32" height="24" rx="3"></rect>
                                    <ellipse fill="#E61C24" fill-rule="nonzero" cx="12.522" cy="12" rx="5.565" ry="5.647"></ellipse>
                                    <ellipse fill="#F99F1B" fill-rule="nonzero" cx="19.432" cy="12" rx="5.565" ry="5.647"></ellipse>
                                    <path d="M15.977 7.578A5.667 5.667 0 0 0 13.867 12c0 1.724.777 3.353 2.11 4.422A5.667 5.667 0 0 0 18.087 12a5.667 5.667 0 0 0-2.11-4.422Z" fill="#F26622" fill-rule="nonzero"></path>
                                </g>
                            </svg>
                            <div>
                                <div class="text-sm gm text-slate-800">_Virtual</div>
                                <div class="gp">**7377</div>
                            </div>
                        </div>
                        <!-- Name -->
                        <div class="n_ nx kg ky go ju tte tnp">
                            <div class="text-sm gm text-slate-800 lz">Dominik Lamakani</div>
                        </div>
                        <!-- Card limits -->
                        <div class="n_ nw kg kb ga ju teq tnh">
                            <div class="text-sm">$0 / $20,000</div>
                        </div>
                        <!-- Card status -->
                        <div class="n_ nx kg kw ga tte tnp">
                            <div class="gp inline-flex gm hk yo rounded-full gu vm vk">Blocked</div>
                        </div>
                    </div>
                </div>
                <div class="tp tm cp ck kh rounded pointer-events-none" aria-hidden="true"></div>
            </label>
        </div>
    </div>

    <!-- Sidebar -->
    <div>
        <div class="zd zv hw tem tev ta teu cg teg tey border-slate-200 ter tee">
            <div class="vf va teb">
                <div class="at ri teo">
                    <div class="text-slate-800 gg gu rb">Physical Metal Card Summary</div>

                    <!-- Credit Card -->
                    <div class="td sk py de dc vi cr bh lw">
                        <!-- Illustration on card -->
                        <div class="tp tm ox sz" aria-hidden="true">
                            <svg class="ox sz" width="326" height="190" viewBox="0 0 326 190" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <filter x="-59.5%" y="-73.1%" width="219%" height="246.3%" filterUnits="objectBoundingBox" id="ccill-a">
                                        <feGaussianBlur stdDeviation="7" in="SourceGraphic"></feGaussianBlur>
                                    </filter>
                                    <filter x="-34.5%" y="-62.5%" width="169%" height="225.1%" filterUnits="objectBoundingBox" id="ccill-b">
                                        <feGaussianBlur stdDeviation="7" in="SourceGraphic"></feGaussianBlur>
                                    </filter>
                                    <filter x="-23.3%" y="-43.5%" width="146.7%" height="186.9%" filterUnits="objectBoundingBox" id="ccill-c">
                                        <feGaussianBlur stdDeviation="7" in="SourceGraphic"></feGaussianBlur>
                                    </filter>
                                    <filter x="-15.9%" y="-46.1%" width="131.7%" height="192.1%" filterUnits="objectBoundingBox" id="ccill-d">
                                        <feGaussianBlur stdDeviation="7" in="SourceGraphic"></feGaussianBlur>
                                    </filter>
                                    <filter x="-21.8%" y="-58.4%" width="143.6%" height="216.8%" filterUnits="objectBoundingBox" id="ccill-e">
                                        <feGaussianBlur stdDeviation="7" in="SourceGraphic"></feGaussianBlur>
                                    </filter>
                                    <filter x="-21.1%" y="-77.5%" width="142.1%" height="254.9%" filterUnits="objectBoundingBox" id="ccill-f">
                                        <feGaussianBlur stdDeviation="7" in="SourceGraphic"></feGaussianBlur>
                                    </filter>
                                    <filter x="-19.1%" y="-66%" width="138.3%" height="232.1%" filterUnits="objectBoundingBox" id="ccill-g">
                                        <feGaussianBlur stdDeviation="7" in="SourceGraphic"></feGaussianBlur>
                                    </filter>
                                    <filter x="-20%" y="-75.6%" width="140%" height="251.3%" filterUnits="objectBoundingBox" id="ccill-h">
                                        <feGaussianBlur stdDeviation="7" in="SourceGraphic"></feGaussianBlur>
                                    </filter>
                                    <filter x="-32.1%" y="-78.2%" width="164.1%" height="256.5%" filterUnits="objectBoundingBox" id="ccill-i">
                                        <feGaussianBlur stdDeviation="7" in="SourceGraphic"></feGaussianBlur>
                                    </filter>
                                    <filter x="-24.3%" y="-48.7%" width="148.6%" height="197.4%" filterUnits="objectBoundingBox" id="ccill-j">
                                        <feGaussianBlur stdDeviation="7" in="SourceGraphic"></feGaussianBlur>
                                    </filter>
                                    <filter x="-29.7%" y="-67.7%" width="159.4%" height="235.4%" filterUnits="objectBoundingBox" id="ccill-k">
                                        <feGaussianBlur stdDeviation="7" in="SourceGraphic"></feGaussianBlur>
                                    </filter>
                                    <filter x="-22.9%" y="-39.7%" width="145.9%" height="179.3%" filterUnits="objectBoundingBox" id="ccill-l">
                                        <feGaussianBlur stdDeviation="7" in="SourceGraphic"></feGaussianBlur>
                                    </filter>
                                    <filter x="-27.4%" y="-72%" width="154.8%" height="243.9%" filterUnits="objectBoundingBox" id="ccill-m">
                                        <feGaussianBlur stdDeviation="7" in="SourceGraphic"></feGaussianBlur>
                                    </filter>
                                    <filter x="-20.4%" y="-66.7%" width="140.9%" height="233.3%" filterUnits="objectBoundingBox" id="ccill-n">
                                        <feGaussianBlur stdDeviation="7" in="SourceGraphic"></feGaussianBlur>
                                    </filter>
                                    <filter x="-70.1%" y="-93.6%" width="240.1%" height="287.2%" filterUnits="objectBoundingBox" id="ccill-o">
                                        <feGaussianBlur stdDeviation="7" in="SourceGraphic"></feGaussianBlur>
                                    </filter>
                                    <filter x="-52.4%" y="-122.3%" width="204.7%" height="344.6%" filterUnits="objectBoundingBox" id="ccill-p">
                                        <feGaussianBlur stdDeviation="7" in="SourceGraphic"></feGaussianBlur>
                                    </filter>
                                    <filter x="-38.5%" y="-87.5%" width="177%" height="275%" filterUnits="objectBoundingBox" id="ccill-q">
                                        <feGaussianBlur stdDeviation="7" in="SourceGraphic"></feGaussianBlur>
                                    </filter>
                                    <filter x="-46.2%" y="-46.4%" width="192.4%" height="192.8%" filterUnits="objectBoundingBox" id="ccill-r">
                                        <feGaussianBlur stdDeviation="48" in="SourceGraphic"></feGaussianBlur>
                                    </filter>
                                </defs>
                                <g fill="none" fill-rule="evenodd">
                                    <g stroke="#FFF">
                                        <path d="m74.649 51.429 35.813-29.245" filter="url(#ccill-a)" transform="translate(23.168 10.2)"></path>
                                        <path d="m95.001 48.454 61.614-34.273" style="mix-blend-mode: overlay;" filter="url(#ccill-b)" transform="translate(23.168 10.2)"></path>
                                        <path d="m102.738 59.711 90.966-49.333" filter="url(#ccill-c)" transform="translate(23.168 10.2)"></path>
                                        <path d="M132.402 56.164c51.89-27.442 9.677-6.22 133.867-46.582" style="mix-blend-mode: overlay;" filter="url(#ccill-d)" transform="translate(23.168 10.2)"></path>
                                        <path d="M192.973 49.441c63.823-28.1 31.403-15.88 97.219-36.765" filter="url(#ccill-e)" transform="translate(23.168 10.2)"></path>
                                        <path d="M174.906 63.986 275.21 36.252" filter="url(#ccill-f)" transform="translate(23.168 10.2)"></path>
                                        <path d="M78.484 90.425 188.905 57.9" style="mix-blend-mode: overlay;" filter="url(#ccill-g)" transform="translate(23.168 10.2)"></path>
                                        <path d="M107.59 120.722 213.167 92.32" filter="url(#ccill-h)" transform="translate(23.168 10.2)"></path>
                                        <path d="m44.001 139.184 66.091-27.432" filter="url(#ccill-i)" transform="translate(23.168 10.2)"></path>
                                        <path d="m25.233 108.035 87.289-44.052" filter="url(#ccill-j)" transform="translate(23.168 10.2)"></path>
                                        <path d="m0 78.862 71.407-31.693" filter="url(#ccill-k)" transform="translate(23.168 10.2)"></path>
                                        <path d="M41.3 54.036 133.926 0" filter="url(#ccill-l)" transform="translate(23.168 10.2)"></path>
                                        <path d="M177.385 128.372c38.41-17.811 13.059-6.784 77.387-29.83" style="mix-blend-mode: overlay;" filter="url(#ccill-m)" transform="translate(23.168 10.2)"></path>
                                        <path d="m190.745 154.661 103.507-32.222" filter="url(#ccill-n)" transform="translate(23.168 10.2)"></path>
                                        <path d="m235.764 74.579 30.397-22.87" filter="url(#ccill-o)" transform="translate(23.168 10.2)"></path>
                                        <path d="M29.686 21.19 70.172 3.645" style="mix-blend-mode: overlay;" filter="url(#ccill-p)" transform="translate(23.168 10.2)"></path>
                                        <path d="M17.977 79.61 73.04 55.091" filter="url(#ccill-q)" transform="translate(23.168 10.2)"></path>
                                    </g>
                                    <path fill-opacity=".24" fill="#FFF" style="mix-blend-mode: overlay;" filter="url(#ccill-r)" d="M156 .573 331.59 311H75L20 .573z" transform="translate(0 -40)"></path>
                                </g>
                            </svg>
                        </div>
                        <div class="td sz flex fu fh">
                            <!-- Logo on card -->
                            <svg width="32" height="32" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <defs>
                                    <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="icon1-b">
                                        <stop stop-color="#E2E8F0" offset="0%"></stop>
                                        <stop stop-color="#94A3B8" offset="100%"></stop>
                                    </linearGradient>
                                    <linearGradient x1="50%" y1="24.537%" x2="50%" y2="99.142%" id="icon1-c">
                                        <stop stop-color="#334155" offset="0%"></stop>
                                        <stop stop-color="#334155" stop-opacity="0" offset="100%"></stop>
                                    </linearGradient>
                                    <path id="icon1-a" d="M16 0l16 32-16-5-16 5z"></path>
                                </defs>
                                <g transform="rotate(90 16 16)" fill="none" fill-rule="evenodd">
                                    <mask id="icon1-d" fill="#fff">
                                        <use xlink:href="#icon1-a"></use>
                                    </mask>
                                    <use fill="url(#icon1-b)" xlink:href="#icon1-a"></use>
                                    <path fill="url(#icon1-c)" mask="url(#icon1-d)" d="M16-6h20v38H16z"></path>
                                </g>
                            </svg>
                            <!-- Card number -->
                            <div class="flex fh gv font-bold yn gq bb">
                                <span>****</span>
                                <span>****</span>
                                <span>****</span>
                                <span>7328</span>
                            </div>
                            <!-- Card footer -->
                            <div class="td flex fh items-center nv im">
                                <!-- Card expiration -->
                                <div class="text-sm font-bold yn gq bb lo">
                                    <span>EXP 12/24</span>
                                    <span>CVC ***</span>
                                </div>
                            </div>
                            <!-- Mastercard logo -->
                            <svg class="tp ty tw" width="48" height="28" viewBox="0 0 48 28">
                                <circle fill="#F59E0B" cx="34" cy="14" r="14" fill-opacity=".8"></circle>
                                <circle fill="#F43F5E" cx="14" cy="14" r="14" fill-opacity=".8"></circle>
                            </svg>
                        </div>
                    </div>

                    <!-- Details -->
                    <div class="ir">
                        <div class="text-sm gg text-slate-800 rx">Details</div>
                        <ul>
                            <li class="flex items-center fh vl cm border-slate-200">
                                <div class="text-sm">Card Name</div>
                                <div class="text-sm gm text-slate-800 r_">Physical Metal Card</div>
                            </li>
                            <li class="flex items-center fh vl cm border-slate-200">
                                <div class="text-sm">Status</div>
                                <div class="flex items-center ct">
                                    <div class="w-2 h-2 rounded-full hg mr-2"></div>
                                    <div class="text-sm gm text-slate-800">Active</div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <!-- Payment Limits -->
                    <div class="ir">
                        <div class="text-sm gg text-slate-800 rw">Payment Limits</div>
                        <div class="my cm border-slate-200">
                            <div class="flex fh text-sm in">
                                <div>Spent This Month</div>
                                <div class="gw">$750,00 <span class="yt">/</span> $1,500.00</div>
                            </div>
                            <div class="td ox h-2 ps">
                                <div class="tp tm hg" aria-hidden="true" style="width: 50%;"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Withdrawal Limits -->
                    <div class="ir">
                        <div class="text-sm gg text-slate-800 rw">Withdrawal Limits</div>
                        <div class="my cm border-slate-200">
                            <div class="flex fh text-sm in">
                                <div>Withdrawn This Month</div>
                                <div class="gw">$100,00 <span class="yt">/</span> $1,500.00</div>
                            </div>
                            <div class="td ox h-2 ps">
                                <div class="tp tm hg" aria-hidden="true" style="width: 7.5%;"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Edit / Delete -->
                    <div class="flex items-center lo ir">
                        <div class="ul">
                            <button class="btn ox border-slate-200 hover--border-slate-300 gz">
                                <svg class="o_ sq dd text-slate-500 af" viewBox="0 0 16 16">
                                    <path
                                        d="M11.7.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM4.6 14H2v-2.6l6-6L10.6 8l-6 6zM12 6.6L9.4 4 11 2.4 13.6 5 12 6.6z"
                                    ></path>
                                </svg>
                                <span class="r_">Edit Card</span>
                            </button>
                        </div>
                        <div class="ul">
                            <button class="btn ox border-slate-200 hover--border-slate-300 yi">
                                <svg class="o_ sq dd af" viewBox="0 0 16 16">
                                    <path
                                        d="M14.574 5.67a13.292 13.292 0 0 1 1.298 1.842 1 1 0 0 1 0 .98C15.743 8.716 12.706 14 8 14a6.391 6.391 0 0 1-1.557-.2l1.815-1.815C10.97 11.82 13.06 9.13 13.82 8c-.163-.243-.39-.56-.669-.907l1.424-1.424ZM.294 15.706a.999.999 0 0 1-.002-1.413l2.53-2.529C1.171 10.291.197 8.615.127 8.49a.998.998 0 0 1-.002-.975C.251 7.29 3.246 2 8 2c1.331 0 2.515.431 3.548 1.038L14.293.293a.999.999 0 1 1 1.414 1.414l-14 14a.997.997 0 0 1-1.414 0ZM2.18 8a12.603 12.603 0 0 0 2.06 2.347l1.833-1.834A1.925 1.925 0 0 1 6 8a2 2 0 0 1 2-2c.178 0 .348.03.512.074l1.566-1.566C9.438 4.201 8.742 4 8 4 5.146 4 2.958 6.835 2.181 8Z"
                                    ></path>
                                </svg>
                                <span class="r_">Block Card</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection