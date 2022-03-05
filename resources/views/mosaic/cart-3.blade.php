@extends('layouts.admin.app')
@section('contents')
    <div class="zp z_">
        <!-- Content -->
        <div class="va jn teb vf tea tew tno 2xl:mlcvalstart80cvalend">
            <div class="tes zb">
                <!-- Cart items -->
                <div class="rb zx">
                    <div class="it">
                        <div class="flex text-sm gm yt f_">
                            <span class="text-slate-500">Review</span>
                            <span>-&gt;</span>
                            <span class="text-slate-500">Payment</span>
                            <span>-&gt;</span>
                            <span class="text-indigo-500">Confirm</span>
                        </div>
                    </div>
                    <header class="rb">
                        <!-- Title -->
                        <h1 class="gc zc text-slate-800 font-bold in">Thank you for your order ✨</h1>
                        <p>You will soon receive a confirmation email with details of your order and a link to download the files.</p>
                    </header>
                    <!-- Billing Information -->
                    <div>
                        <div class="text-slate-800 gg rw">Billing Information</div>
                        <form>
                            <div class="fj">
                                <!-- 1st row -->
                                <div class="qn fj qk q_">
                                    <div class="au">
                                        <label class="block text-sm gm rx" for="card-name">Name</label>
                                        <input id="card-name" class="tn ox" type="text" value="Patrick" />
                                    </div>
                                    <div class="au">
                                        <label class="block text-sm gm rx" for="card-surname">Surname</label>
                                        <input id="card-surname" class="tn ox" type="text" value="Sullivan" />
                                    </div>
                                </div>
                                <!-- 2nd row -->
                                <div class="qn fj qk q_">
                                    <div class="au">
                                        <label class="block text-sm gm rx" for="card-address">Address</label>
                                        <input id="card-address" class="tn ox" type="text" />
                                    </div>
                                    <div class="au">
                                        <label class="block text-sm gm rx" for="card-city">Town/City</label>
                                        <input id="card-city" class="tn ox" type="text" />
                                    </div>
                                </div>
                                <!-- 3rd row -->
                                <div class="qn fj qk q_">
                                    <div class="au">
                                        <label class="block text-sm gm rx" for="card-state">State/Country</label>
                                        <input id="card-state" class="tn ox" type="text" />
                                    </div>
                                    <div class="au">
                                        <label class="block text-sm gm rx" for="card-country">Country <span class="yi">*</span></label>
                                        <select id="card-country" class="ts ox">
                                            <option>Italy</option>
                                            <option>USA</option>
                                            <option>United Kingdom</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- 4th row -->
                                <div class="qn fj qk q_">
                                    <div class="au">
                                        <label class="block text-sm gm rx" for="card-postcode">Postcode</label>
                                        <input id="card-postcode" class="tn ox" type="text" />
                                    </div>
                                    <div class="au">
                                        <label class="block text-sm gm rx" for="card-vat">VAT ID</label>
                                        <input id="card-vat" class="tn ox" type="text" />
                                    </div>
                                </div>
                                <div class="ga">
                                    <button type="submit" class="btn bg-white border-slate-200 hover--border-slate-300 text-indigo-500">Download Invoice</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Divider -->
                    <hr class="ru cg border-slate-200" />
                    <!-- Billing footer -->
                    <div class="bg-white rounded border border-slate-200 vn">
                        <div class="gu zl qn qy qx fz qk qj">
                            <div class="text-sm">Enjoy a <span class="gm text-slate-800">20% OFF</span> discount on your next order 🎉</div>
                            <div class="td inline-flex gu vx vk rounded hg">
                                <div class="tp w-3 h-3 rounded-full bg-white tb ap tx ad" aria-hidden="true"></div>
                                <div class="tp w-3 h-3 rounded-full bg-white tw av tx ad" aria-hidden="true"></div>
                                <span class="text-sm ys gm gb">XMAS22</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <div>
            <div class="zd zv hw tem tev ta teu cg teg tey border-slate-200 tet ttm 2xl:wcalcstart352sum80pxcalcend tee">
                <div class="vf va teb 2xl:px-12">
                    <div class="at ri teo">
                        <h2 class="gc text-slate-800 font-bold rb">Order Summary</h2>
                        <div class="fx">
                            <!-- Order Details -->
                            <div>
                                <div class="text-slate-800 gg in">Order Details</div>
                                <!-- Cart items -->
                                <ul>
                                    <!-- Cart item -->
                                    <li class="flex items-center vl cm border-slate-200">
                                        <a class="block mr-2 ttc af" href="#0">
                                            <img class="ue ttg" src="images/related-product-01.jpg" width="200" height="142" alt="Product 01" />
                                        </a>
                                        <div class="al">
                                            <a href="#0">
                                                <h4 class="text-sm gm text-slate-800 g_">The Complete Front-End Development Course!</h4>
                                            </a>
                                        </div>
                                        <div class="text-sm gm text-slate-800 r_">$69</div>
                                    </li>
                                    <!-- Cart item -->
                                    <li class="flex items-center vl cm border-slate-200">
                                        <a class="block mr-2 ttc af" href="#0">
                                            <img class="ue ttg" src="images/related-product-02.jpg" width="200" height="142" alt="Product 02" />
                                        </a>
                                        <div class="al">
                                            <a href="#0">
                                                <h4 class="text-sm gm text-slate-800 g_">Web Development Ultimate Course 2021</h4>
                                            </a>
                                        </div>
                                        <div class="text-sm gm text-slate-800 r_">$69</div>
                                    </li>
                                    <!-- Cart item -->
                                    <li class="flex items-center vl cm border-slate-200">
                                        <a class="block mr-2 ttc af" href="#0">
                                            <img class="ue ttg" src="images/related-product-03.jpg" width="200" height="142" alt="Product 03" />
                                        </a>
                                        <div class="al">
                                            <a href="#0">
                                                <h4 class="text-sm gm text-slate-800 g_">Full-Stack JavaScript Course!</h4>
                                            </a>
                                        </div>
                                        <div class="text-sm gm text-slate-800 r_">$69</div>
                                    </li>
                                </ul>
                                <!-- Fees, discount and total -->
                                <ul>
                                    <li class="flex items-center fh vl cm border-slate-200">
                                        <div class="text-sm">Subtotal</div>
                                        <div class="text-sm gm text-slate-800 r_">$205</div>
                                    </li>
                                    <li class="flex items-center fh vl cm border-slate-200">
                                        <div class="text-sm">Taxes</div>
                                        <div class="text-sm gm text-slate-800 r_">$48</div>
                                    </li>
                                    <li class="flex items-center fh vl cm border-slate-200">
                                        <div class="flex items-center">
                                            <span class="text-sm mr-2">Discount</span>
                                            <span class="gp inline-flex ct gm gb hv text-slate-500 rounded-full gu vm vk">XMAS22</span>
                                        </div>
                                        <div class="text-sm gm text-slate-800 r_">-$25</div>
                                    </li>
                                    <li class="flex items-center fh vl cm border-slate-200">
                                        <div class="text-sm">Total</div>
                                        <div class="text-sm gm yr r_">$205</div>
                                    </li>
                                </ul>
                            </div>

                            <!-- Payment Details -->
                            <div>
                                <div class="text-slate-800 gg rw">Payment Details</div>
                                <div class="text-sm rounded border border-slate-200 vr">
                                    <div class="flex items-center fh f_">
                                        <!-- CC details -->
                                        <div class="flex items-center">
                                            <!-- Mastercard icon -->
                                            <svg class="af rk" width="32" height="24" xmlns="http://www.w3.org/2000/svg">
                                                <rect fill="#1E293B" width="32" height="24" rx="3"></rect>
                                                <ellipse fill="#E61C24" cx="12.522" cy="12" rx="5.565" ry="5.647"></ellipse>
                                                <ellipse fill="#F99F1B" cx="19.432" cy="12" rx="5.565" ry="5.647"></ellipse>
                                                <path d="M15.977 7.578A5.667 5.667 0 0 0 13.867 12c0 1.724.777 3.353 2.11 4.422A5.667 5.667 0 0 0 18.087 12a5.667 5.667 0 0 0-2.11-4.422Z" fill="#F26622"></path>
                                            </svg>
                                            <div>Ending with <span class="text-slate-800">2478</span></div>
                                        </div>
                                        <!-- Expiry -->
                                        <div class="gw r_">Expires 12/23</div>
                                    </div>
                                </div>
                            </div>

                            <div class="ir">
                                <div class="rw">
                                    <a href="pay.html" class="btn ox hd wq ye">View Your Order</a>
                                </div>
                                <div class="gp text-slate-500 gw gu">Should you ever change your mind, we offer a 14-day, no-questions-asked refund policy.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
