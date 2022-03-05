@extends('layouts.admin.app')
@section('contents')
<div class="va jn teb vf ox uz ri" x-data="calendar" x-init="initCalendar">
        <!-- Page header -->
        <div class="_u _w _g rw">
            <!-- Left: Title -->
            <div class="rw kj">
                <h1 class="gc zc text-slate-800 font-bold"><span x-text="`${monthNames[month]} ${year}`"></span> ✨</h1>
            </div>

            <!-- Right: Actions -->
            <div class="sx fr _p fc _b fp">
                <!-- Previous month button -->
                <button class="btn vm bg-white border-slate-200 hover--border-slate-300 text-slate-500 hover--text-slate-600 xz ke kn xq" :disabled="month === 0 ? true : false" @click="month--; getDays()">
                    <span class="tc">Previous month</span><wbr />
                    <svg class="sq o_ dd" viewBox="0 0 16 16">
                        <path d="M9.4 13.4l1.4-1.4-4-4 4-4-1.4-1.4L4 8z"></path>
                    </svg>
                </button>

                <!-- Next month button -->
                <button class="btn vm bg-white border-slate-200 hover--border-slate-300 text-slate-500 hover--text-slate-600 xz ke kn xq" :disabled="month === 11 ? true : false" @click="month++; getDays()">
                    <span class="tc">Next month</span><wbr />
                    <svg class="sq o_ dd" viewBox="0 0 16 16">
                        <path d="M6.6 13.4L5.2 12l4-4-4-4 1.4-1.4L12 8z"></path>
                    </svg>
                </button>

                <hr class="oj sz hv ro" />

                <!-- Create event button -->
                <button class="btn hd wq ye">
                    <svg class="o_ sq dd bo af" viewBox="0 0 16 16">
                        <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"></path>
                    </svg>
                    <span class="hidden tnm r_">Create Event</span>
                </button>
            </div>
        </div>

        <!-- Filters and view buttons -->
        <div class="_u _w _g rw">
            <!-- Filters  -->
            <div class="rw kj mr-2">
                <ul class="flex flex-wrap items-center -m-1">
                    <li class="m-1">
                        <button class="tt bg-white border-slate-200 hover--border-slate-300 text-slate-500">
                            <div class="oq oe hm af"></div>
                            <span class="rj">Acme Inc.</span>
                        </button>
                    </li>
                    <li class="m-1">
                        <button class="tt bg-white border-slate-200 hover--border-slate-300 text-slate-500">
                            <div class="oq oe hg af"></div>
                            <span class="rj">Life &amp; Family</span>
                        </button>
                    </li>
                    <li class="m-1">
                        <button class="tt bg-white border-slate-200 hover--border-slate-300 text-slate-500">
                            <div class="oq oe hd af"></div>
                            <span class="rj">Reservations</span>
                        </button>
                    </li>
                    <li class="m-1">
                        <button class="tt bg-white border-slate-200 hover--border-slate-300 text-slate-500">
                            <div class="oq oe hy af"></div>
                            <span class="rj">Events</span>
                        </button>
                    </li>
                    <li class="m-1">
                        <button class="tt bg-white border-slate-200 hover--border-slate-300 text-slate-500">
                            <div class="oq oe hb af"></div>
                            <span class="rj">Misc</span>
                        </button>
                    </li>
                    <li class="m-1">
                        <button class="tt bg-white border-slate-200 hover--border-slate-300 text-indigo-500">+Add New</button>
                    </li>
                </ul>
            </div>

            <!-- View buttons (requires custom integration) -->
            <div class="flex fa fk">
                <button class="btn hw border-slate-200 wz text-indigo-500 cn wp wy">Month</button>
                <button class="btn bg-white border-slate-200 wz gz cn wp wy">Week</button>
                <button class="btn bg-white border-slate-200 wz gz cn wp wy">Day</button>
            </div>
        </div>

        <!-- Calendar table -->
        <div class="bg-white rounded-sm shadow lw" x-cloak="">
            <!-- Days of the week -->
            <div class="sx fs fv cm border-slate-200">
                <template x-for="(day, index) in dayNames" :key="index">
                    <div class="vy vl">
                        <div class="text-slate-500 text-sm gm gu zq" x-text="day.substring(0,3)"></div>
                        <div class="text-slate-500 text-sm gm gu hidden zk" x-text="day"></div>
                    </div>
                </template>
            </div>

            <!-- Day cells -->
            <div class="sx fs fv hv">
                <!-- Diagonal stripes pattern -->
                <svg class="tc">
                    <defs>
                        <pattern id="stripes" patternUnits="userSpaceOnUse" width="5" height="5" patternTransform="rotate(135)">
                            <line class="d_ yn bo" x1="0" y="0" x2="0" y2="5" stroke-width="2"></line>
                        </pattern>
                    </defs>
                </svg>
                <!-- Empty cells (previous month) -->
                <template x-for="blankday in startingBlankDays">
                    <div class="hw ot _a zz">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
                            <rect width="100%" height="100%" fill="url(#stripes)"></rect>
                        </svg>
                    </div>
                </template>
                <!-- Days of the current month -->
                <template x-for="(day, dayIndex) in daysInMonth" :key="dayIndex">
                    <div class="td bg-white ot _a zz lw">
                        <div class="sz flex fu fh">
                            <!-- Events -->
                            <div class="al flex fu td ve _z lw">
                                <template x-for="event in getEvents(day)">
                                    <button class="td ox go rx">
                                        <div
                                            class="vg vh rounded lw"
                                            :class="{
                                            'ye hm': event.eventColor === 'sky',
                                            'ye hd': event.eventColor === 'indigo',
                                            'ye hb': event.eventColor === 'yellow',
                                            'ye hg': event.eventColor === 'emerald',
                                            'ye hy': event.eventColor === 'red',
                                        }"
                                        >
                                            <!-- Event name -->
                                            <div class="gp gg lz" x-text="event.eventName"></div>
                                            <!-- Event time -->
                                            <div class="gp gb lz hidden _s">
                                                <!-- Start date -->
                                                <template x-if="event.eventStart">
                                                    <span x-text="event.eventStart.toLocaleTimeString([], {hour12: true, hour: 'numeric', minute:'numeric'})"></span>
                                                </template>
                                                <!-- End date -->
                                                <template x-if="event.eventEnd">
                                                    <span> - <span x-text="event.eventEnd.toLocaleTimeString([], {hour12: true, hour: 'numeric', minute:'numeric'})"></span> </span>
                                                </template>
                                            </div>
                                        </div>
                                    </button>
                                </template>
                                <div class="tp ty tb tw sq pg pw di pointer-events-none" aria-hidden="true"></div>
                            </div>
                            <!-- Cell footer -->
                            <div class="flex fh items-center ve _z">
                                <!-- More button (if more than 2 events) -->
                                <template x-if="getEvents(day).length > 2">
                                    <button class="gp text-slate-500 gm ct gu jr vb ji border border-slate-200 rounded">
                                        <span class="qs">+</span><span x-text="getEvents(day).length - 2"></span> <span class="hidden qt">more</span>
                                    </button>
                                </template>
                                <!-- Day number -->
                                <button class="inline-flex rz oz on items-center justify-center gp ja gm gu rounded-full xe" :class="{'text-indigo-500': isToday(day) }" x-text="day"></button>
                            </div>
                        </div>
                    </div>
                </template>
                <!-- Empty cells (next month) -->
                <template x-for="blankday in endingBlankDays">
                    <div class="hw ot _a zz">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
                            <rect width="100%" height="100%" fill="url(#stripes)"></rect>
                        </svg>
                    </div>
                </template>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("alpine:init", () => {
            Alpine.data("calendar", () => ({
                month: null,
                year: null,
                daysInMonth: [],
                startingBlankDays: [],
                endingBlankDays: [],
                monthNames: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                dayNames: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                events: [
                    // Previous month
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth() - 1, 8, 3),
                        eventEnd: new Date(new Date().getFullYear(), new Date().getMonth() - 1, 8, 7),
                        eventName: "⛱️ Relax for 2 at Marienbad",
                        eventColor: "indigo",
                    },
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth() - 1, 12, 10),
                        eventEnd: new Date(new Date().getFullYear(), new Date().getMonth(), 12, 11),
                        eventName: "Team Catch-up",
                        eventColor: "sky",
                    },
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth() - 1, 18, 2),
                        eventEnd: "",
                        eventName: "✍️ New Project (2)",
                        eventColor: "yellow",
                    },
                    // Current month
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 1, 10),
                        eventEnd: new Date(new Date().getFullYear(), new Date().getMonth(), 1, 11),
                        eventName: "Meeting w/ Patrick Lin",
                        eventColor: "sky",
                    },
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 1, 19),
                        eventEnd: "",
                        eventName: "Reservation at La Ginestre",
                        eventColor: "indigo",
                    },
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 3, 9),
                        eventEnd: new Date(new Date().getFullYear(), new Date().getMonth(), 3, 10),
                        eventName: "✍️ New Project",
                        eventColor: "yellow",
                    },
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 7, 21),
                        eventEnd: new Date(new Date().getFullYear(), new Date().getMonth(), 7, 22),
                        eventName: "⚽ 2021 - Semi-final",
                        eventColor: "red",
                    },
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 9, 10),
                        eventEnd: new Date(new Date().getFullYear(), new Date().getMonth(), 9, 11),
                        eventName: "Meeting w/Carolyn",
                        eventColor: "sky",
                    },
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 9, 13),
                        eventEnd: "",
                        eventName: "Pick up Marta at school",
                        eventColor: "emerald",
                    },
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 9, 14),
                        eventEnd: new Date(new Date().getFullYear(), new Date().getMonth(), 9, 15),
                        eventName: "Meeting w/ Patrick Lin",
                        eventColor: "emerald",
                    },
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 9, 19),
                        eventEnd: "",
                        eventName: "Reservation at La Ginestre",
                        eventColor: "indigo",
                    },
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 11, 10),
                        eventEnd: new Date(new Date().getFullYear(), new Date().getMonth(), 11, 11),
                        eventName: "⛱️ Relax for 2 at Marienbad",
                        eventColor: "indigo",
                    },
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 11, 19),
                        eventEnd: "",
                        eventName: "⚽ 2021 - Semi-final",
                        eventColor: "red",
                    },
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 14, 10),
                        eventEnd: new Date(new Date().getFullYear(), new Date().getMonth(), 14, 11),
                        eventName: "Team Catch-up",
                        eventColor: "sky",
                    },
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 21, 2),
                        eventEnd: "",
                        eventName: "Pick up Marta at school",
                        eventColor: "emerald",
                    },
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 21, 3),
                        eventEnd: new Date(new Date().getFullYear(), new Date().getMonth(), 21, 7),
                        eventName: "✍️ New Project (2)",
                        eventColor: "yellow",
                    },
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 22, 10),
                        eventEnd: new Date(new Date().getFullYear(), new Date().getMonth(), 22, 11),
                        eventName: "Team Catch-up",
                        eventColor: "sky",
                    },
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 22, 19),
                        eventEnd: "",
                        eventName: "⚽ 2021 - Semi-final",
                        eventColor: "red",
                    },
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 23, 0),
                        eventEnd: new Date(new Date().getFullYear(), new Date().getMonth(), 23, 23),
                        eventName: "You stay at Meridiana B&B",
                        eventColor: "indigo",
                    },
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 25, 10),
                        eventEnd: new Date(new Date().getFullYear(), new Date().getMonth(), 25, 11),
                        eventName: "Meeting w/ Kylie Joh",
                        eventColor: "sky",
                    },
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 29, 10),
                        eventEnd: new Date(new Date().getFullYear(), new Date().getMonth(), 29, 11),
                        eventName: "Call Request ->",
                        eventColor: "sky",
                    },
                    // Next month
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth() + 1, 2, 3),
                        eventEnd: new Date(new Date().getFullYear(), new Date().getMonth() + 1, 2, 7),
                        eventName: "✍️ New Project (2)",
                        eventColor: "yellow",
                    },
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth() + 1, 14, 10),
                        eventEnd: new Date(new Date().getFullYear(), new Date().getMonth(), 14, 11),
                        eventName: "Team Catch-up",
                        eventColor: "sky",
                    },
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth() + 1, 25, 2),
                        eventEnd: new Date(new Date().getFullYear(), new Date().getMonth() + 1, 25, 3),
                        eventName: "Pick up Marta at school",
                        eventColor: "emerald",
                    },
                    {
                        eventStart: new Date(new Date().getFullYear(), new Date().getMonth() + 1, 27, 21),
                        eventEnd: new Date(new Date().getFullYear(), new Date().getMonth() + 1, 27, 22),
                        eventName: "⚽ 2021 - Semi-final",
                        eventColor: "red",
                    },
                ],

                initCalendar() {
                    const today = new Date();
                    this.month = today.getMonth();
                    this.year = today.getFullYear();
                    this.getDays();
                },

                isToday(date) {
                    const today = new Date();
                    const day = new Date(this.year, this.month, date);
                    return today.toDateString() === day.toDateString() ? true : false;
                },

                getEvents(date) {
                    return this.events.filter((e) => new Date(e.eventStart).toDateString() === new Date(this.year, this.month, date).toDateString());
                },

                getDays() {
                    const daysInMonth = new Date(this.year, this.month + 1, 0).getDate();

                    // starting empty cells (previous month)
                    const startingDayOfWeek = new Date(this.year, this.month).getDay();
                    let startingBlankDaysArray = [];
                    for (let i = 1; i <= startingDayOfWeek; i++) {
                        startingBlankDaysArray.push(i);
                    }

                    // ending empty cells (next month)
                    const endingDayOfWeek = new Date(this.year, this.month + 1, 0).getDay();
                    let endingBlankDaysArray = [];
                    for (let i = 1; i < 7 - endingDayOfWeek; i++) {
                        endingBlankDaysArray.push(i);
                    }

                    // current month cells
                    let daysArray = [];
                    for (let i = 1; i <= daysInMonth; i++) {
                        daysArray.push(i);
                    }

                    this.startingBlankDays = startingBlankDaysArray;
                    this.endingBlankDays = endingBlankDaysArray;
                    this.daysInMonth = daysArray;
                },
            }));
        });
    </script>

    <script src="main.0cc859b75746f970b09f.js"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-125021779-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());
        gtag("config", "UA-125021779-1", { anonymize_ip: true });
    </script>
    <script>
        console.log("%cImportant!", "color: blue; font-size: x-large");
        console.log(
            "%cThe page you are viewing is for demo purposes only. CSS and HTML have been minified and class names have been shortened to improve the page load time. Download our templates from https://cruip.com/ 😉",
            "font-size: large"
        );
    </script>
@endsection
    