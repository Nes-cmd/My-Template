@extends('layouts.guests.app')
@section('contents')
    <!-- ====== Banner Section Start -->
    <div
      class="
        relative
        z-10
        pt-[120px]
        md:pt-[130px]
        lg:pt-[160px]
        pb-[100px]
        bg-primary
        overflow-hidden
      "
    >
      <div class="container">
        <div class="flex flex-wrap items-center -mx-4">
          <div class="w-full px-4">
            <div class="text-center">
              <h1 class="font-semibold text-white text-4xl">Pricing Page</h1>
            </div>
          </div>
        </div>
      </div>
      <div>
        <span class="absolute top-0 left-0 z-[-1]">
          <svg
            width="495"
            height="470"
            viewBox="0 0 495 470"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <circle
              cx="55"
              cy="442"
              r="138"
              stroke="white"
              stroke-opacity="0.04"
              stroke-width="50"
            />
            <circle
              cx="446"
              r="39"
              stroke="white"
              stroke-opacity="0.04"
              stroke-width="20"
            />
            <path
              d="M245.406 137.609L233.985 94.9852L276.609 106.406L245.406 137.609Z"
              stroke="white"
              stroke-opacity="0.08"
              stroke-width="12"
            />
          </svg>
        </span>
        <span class="absolute top-0 right-0 z-[-1]">
          <svg
            width="493"
            height="470"
            viewBox="0 0 493 470"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <circle
              cx="462"
              cy="5"
              r="138"
              stroke="white"
              stroke-opacity="0.04"
              stroke-width="50"
            />
            <circle
              cx="49"
              cy="470"
              r="39"
              stroke="white"
              stroke-opacity="0.04"
              stroke-width="20"
            />
            <path
              d="M222.393 226.701L272.808 213.192L259.299 263.607L222.393 226.701Z"
              stroke="white"
              stroke-opacity="0.06"
              stroke-width="13"
            />
          </svg>
        </span>
      </div>
    </div>
    <!-- ====== Banner Section End -->

    <!-- ====== Pricing Section Start -->
    <section
      id="pricing"
      class="
        bg-white
        pt-20
        lg:pt-[120px]
        pb-12
        lg:pb-[90px]
        relative
        z-20
        overflow-hidden
      "
    >
      <div class="container">
        <div class="flex flex-wrap -mx-4">
          <div class="w-full px-4">
            <div class="text-center mx-auto mb-[60px] lg:mb-20 max-w-[620px]">
              <span class="font-semibold text-lg text-primary mb-2 block">
                Pricing Table
              </span>
              <h2
                class="
                  font-bold
                  text-3xl
                  sm:text-4xl
                  md:text-[40px]
                  text-dark
                  mb-4
                "
              >
                Our Pricing Plan
              </h2>
              <p
                class="
                  text-lg
                  sm:text-xl
                  leading-relaxed
                  sm:leading-relaxed
                  text-body-color
                "
              >
                There are many variations of passages of Lorem Ipsum available
                but the majority have suffered alteration in some form.
              </p>
            </div>
          </div>
        </div>

        <div class="flex flex-wrap items-center justify-center">
          <div class="w-full md:w-1/2 lg:w-1/3">
            <div
              class="
                bg-white
                rounded-xl
                relative
                z-10
                overflow-hidden
                border border-primary border-opacity-20
                shadow-pricing
                py-10
                px-8
                sm:p-12
                lg:py-10 lg:px-6
                xl:p-12
                mb-10
                text-center
                wow
                fadeInUp
              "
              data-wow-delay=".15s
              "
            >
              <span
                class="text-dark font-medium text-base uppercase block mb-2"
              >
                STARTING FROM
              </span>
              <h2 class="font-semibold text-primary mb-9 text-[28px]">
                € 19.99/mo
              </h2>

              <div class="mb-10">
                <p
                  class="
                    text-base
                    font-medium
                    text-body-color
                    leading-loose
                    mb-1
                  "
                >
                  1 User
                </p>
                <p
                  class="
                    text-base
                    font-medium
                    text-body-color
                    leading-loose
                    mb-1
                  "
                >
                  All UI components
                </p>
                <p
                  class="
                    text-base
                    font-medium
                    text-body-color
                    leading-loose
                    mb-1
                  "
                >
                  Lifetime access
                </p>
                <p
                  class="
                    text-base
                    font-medium
                    text-body-color
                    leading-loose
                    mb-1
                  "
                >
                  Free updates
                </p>
                <p
                  class="
                    text-base
                    font-medium
                    text-body-color
                    leading-loose
                    mb-1
                  "
                >
                  Use on 1 (one) project
                </p>
                <p
                  class="
                    text-base
                    font-medium
                    text-body-color
                    leading-loose
                    mb-1
                  "
                >
                  3 Months support
                </p>
              </div>
              <div class="w-full">
                <a
                  href="javascript:void(0)"
                  class="
                    inline-block
                    text-base
                    font-medium
                    text-primary
                    bg-transparent
                    border border-[#D4DEFF]
                    rounded-full
                    text-center
                    py-4
                    px-11
                    hover:text-white hover:bg-primary hover:border-primary
                    transition
                    duration-300
                    ease-in-out
                  "
                >
                  Purchase Now
                </a>
              </div>
              <span
                class="
                  absolute
                  left-0
                  bottom-0
                  z-[-1]
                  w-14
                  h-14
                  rounded-tr-full
                  block
                  bg-primary
                "
              >
              </span>
            </div>
          </div>
          <div class="w-full md:w-1/2 lg:w-1/3">
            <div
              class="
                bg-primary bg-gradient-to-b
                from-primary
                to-[#179BEE]
                rounded-xl
                relative
                z-10
                overflow-hidden
                shadow-pricing
                py-10
                px-8
                sm:p-12
                lg:py-10 lg:px-6
                xl:p-12
                mb-10
                text-center
                wow
                fadeInUp
              "
              data-wow-delay=".1s
              "
            >
              <span
                class="
                  inline-block
                  py-2
                  px-6
                  border border-white
                  rounded-full
                  text-base
                  font-semibold
                  text-primary
                  bg-white
                  uppercase
                  mb-5
                "
              >
                POPULAR
              </span>
              <span
                class="text-white font-medium text-base uppercase block mb-2"
              >
                STARTING FROM
              </span>
              <h2 class="font-semibold text-white mb-9 text-[28px]">
                € 19.99/mo
              </h2>

              <div class="mb-10">
                <p class="text-base font-medium text-white leading-loose mb-1">
                  5 User
                </p>
                <p class="text-base font-medium text-white leading-loose mb-1">
                  All UI components
                </p>
                <p class="text-base font-medium text-white leading-loose mb-1">
                  Lifetime access
                </p>
                <p class="text-base font-medium text-white leading-loose mb-1">
                  Free updates
                </p>
                <p class="text-base font-medium text-white leading-loose mb-1">
                  Use on 1 (one) project
                </p>
                <p class="text-base font-medium text-white leading-loose mb-1">
                  4 Months support
                </p>
              </div>
              <div class="w-full">
                <a
                  href="javascript:void(0)"
                  class="
                    inline-block
                    text-base
                    font-medium
                    text-dark
                    bg-white
                    border border-white
                    rounded-full
                    text-center
                    py-4
                    px-11
                    hover:text-white hover:bg-dark hover:border-dark
                    transition
                    duration-300
                    ease-in-out
                  "
                >
                  Purchase Now
                </a>
              </div>
            </div>
          </div>
          <div class="w-full md:w-1/2 lg:w-1/3">
            <div
              class="
                bg-white
                rounded-xl
                relative
                z-10
                overflow-hidden
                border border-primary border-opacity-20
                shadow-pricing
                py-10
                px-8
                sm:p-12
                lg:py-10 lg:px-6
                xl:p-12
                mb-10
                text-center
                wow
                fadeInUp
              "
              data-wow-delay=".15s
              "
            >
              <span
                class="text-dark font-medium text-base uppercase block mb-2"
              >
                STARTING FROM
              </span>
              <h2 class="font-semibold text-primary mb-9 text-[28px]">
                € 70.99/mo
              </h2>

              <div class="mb-10">
                <p
                  class="
                    text-base
                    font-medium
                    text-body-color
                    leading-loose
                    mb-1
                  "
                >
                  1 User
                </p>
                <p
                  class="
                    text-base
                    font-medium
                    text-body-color
                    leading-loose
                    mb-1
                  "
                >
                  All UI components
                </p>
                <p
                  class="
                    text-base
                    font-medium
                    text-body-color
                    leading-loose
                    mb-1
                  "
                >
                  Lifetime access
                </p>
                <p
                  class="
                    text-base
                    font-medium
                    text-body-color
                    leading-loose
                    mb-1
                  "
                >
                  Free updates
                </p>
                <p
                  class="
                    text-base
                    font-medium
                    text-body-color
                    leading-loose
                    mb-1
                  "
                >
                  Use on unlimited project
                </p>
                <p
                  class="
                    text-base
                    font-medium
                    text-body-color
                    leading-loose
                    mb-1
                  "
                >
                  4 Months support
                </p>
              </div>
              <div class="w-full">
                <a
                  href="javascript:void(0)"
                  class="
                    inline-block
                    text-base
                    font-medium
                    text-primary
                    bg-transparent
                    border border-[#D4DEFF]
                    rounded-full
                    text-center
                    py-4
                    px-11
                    hover:text-white hover:bg-primary hover:border-primary
                    transition
                    duration-300
                    ease-in-out
                  "
                >
                  Purchase Now
                </a>
              </div>

              <span
                class="
                  absolute
                  right-0
                  top-0
                  z-[-1]
                  w-14
                  h-14
                  rounded-bl-full
                  block
                  bg-secondary
                "
              >
              </span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Pricing Section End -->

    <!-- ====== Faq Section Start -->
    <section
      class="
        bg-[#f3f4ff]
        pt-20
        lg:pt-[120px]
        pb-12
        lg:pb-[90px]
        relative
        z-20
        overflow-hidden
      "
    >
      <div class="container">
        <div class="flex flex-wrap -mx-4">
          <div class="w-full px-4">
            <div class="text-center mx-auto mb-[60px] lg:mb-20 max-w-[620px]">
              <span class="font-semibold text-lg text-primary mb-2 block">
                FAQ
              </span>
              <h2
                class="
                  font-bold
                  text-3xl
                  sm:text-4xl
                  md:text-[42px]
                  text-dark
                  mb-4
                "
              >
                Any Questions? Answered
              </h2>
              <p
                class="
                  text-lg
                  sm:text-xl
                  leading-relaxed
                  sm:leading-relaxed
                  text-body-color
                "
              >
                There are many variations of passages of Lorem Ipsum available
                but the majority have suffered alteration in some form.
              </p>
            </div>
          </div>
        </div>

        <div class="flex flex-wrap -mx-4">
          <div class="w-full lg:w-1/2 px-4">
            <div
              class="
                single-faq
                w-full
                bg-white
                border border-[#F3F4FE]
                rounded-lg
                p-5
                sm:p-8
                mb-8
                wow
                fadeInUp
              "
              data-wow-delay=".1s
              "
            >
              <button class="faq-btn flex items-center w-full text-left">
                <div
                  class="
                    w-full
                    max-w-[40px]
                    h-10
                    flex
                    items-center
                    justify-center
                    rounded-lg
                    bg-primary
                    text-primary
                    bg-opacity-5
                    mr-5
                  "
                >
                  <svg
                    width="17"
                    height="10"
                    viewBox="0 0 17 10"
                    class="fill-current icon"
                  >
                    <path
                      d="M7.28687 8.43257L7.28679 8.43265L7.29496 8.43985C7.62576 8.73124 8.02464 8.86001 8.41472 8.86001C8.83092 8.86001 9.22376 8.69083 9.53447 8.41713L9.53454 8.41721L9.54184 8.41052L15.7631 2.70784L15.7691 2.70231L15.7749 2.69659C16.0981 2.38028 16.1985 1.80579 15.7981 1.41393C15.4803 1.1028 14.9167 1.00854 14.5249 1.38489L8.41472 7.00806L2.29995 1.38063L2.29151 1.37286L2.28271 1.36548C1.93092 1.07036 1.38469 1.06804 1.03129 1.41393L1.01755 1.42738L1.00488 1.44184C0.69687 1.79355 0.695778 2.34549 1.0545 2.69659L1.05999 2.70196L1.06565 2.70717L7.28687 8.43257Z"
                      fill="#3056D3"
                      stroke="#3056D3"
                    />
                  </svg>
                </div>
                <div class="w-full">
                  <h4 class="text-base sm:text-lg font-semibold text-black">
                    How to use UIdeck?
                  </h4>
                </div>
              </button>
              <div class="faq-content pl-[62px] hidden">
                <p class="text-base text-body-color leading-relaxed py-3">
                  It takes 2-3 weeks to get your first blog post ready. That
                  includes the in-depth research & creation of your monthly
                  content marketing strategy that we do before writing your
                  first blog post, Ipsum available .
                </p>
              </div>
            </div>
            <div
              class="
                single-faq
                w-full
                bg-white
                border border-[#F3F4FE]
                rounded-lg
                p-5
                sm:p-8
                mb-8
                wow
                fadeInUp
              "
              data-wow-delay=".15s
              "
            >
              <button class="faq-btn flex items-center w-full text-left">
                <div
                  class="
                    w-full
                    max-w-[40px]
                    h-10
                    flex
                    items-center
                    justify-center
                    rounded-lg
                    bg-primary
                    text-primary
                    bg-opacity-5
                    mr-5
                  "
                >
                  <svg
                    width="17"
                    height="10"
                    viewBox="0 0 17 10"
                    class="fill-current icon"
                  >
                    <path
                      d="M7.28687 8.43257L7.28679 8.43265L7.29496 8.43985C7.62576 8.73124 8.02464 8.86001 8.41472 8.86001C8.83092 8.86001 9.22376 8.69083 9.53447 8.41713L9.53454 8.41721L9.54184 8.41052L15.7631 2.70784L15.7691 2.70231L15.7749 2.69659C16.0981 2.38028 16.1985 1.80579 15.7981 1.41393C15.4803 1.1028 14.9167 1.00854 14.5249 1.38489L8.41472 7.00806L2.29995 1.38063L2.29151 1.37286L2.28271 1.36548C1.93092 1.07036 1.38469 1.06804 1.03129 1.41393L1.01755 1.42738L1.00488 1.44184C0.69687 1.79355 0.695778 2.34549 1.0545 2.69659L1.05999 2.70196L1.06565 2.70717L7.28687 8.43257Z"
                      fill="#3056D3"
                      stroke="#3056D3"
                    />
                  </svg>
                </div>
                <div class="w-full">
                  <h4 class="text-base sm:text-lg font-semibold text-black">
                    How to download icons from LineIcons?
                  </h4>
                </div>
              </button>
              <div class="faq-content pl-[62px] hidden">
                <p class="text-base text-body-color leading-relaxed py-3">
                  It takes 2-3 weeks to get your first blog post ready. That
                  includes the in-depth research & creation of your monthly
                  content marketing strategy that we do before writing your
                  first blog post, Ipsum available .
                </p>
              </div>
            </div>
            <div
              class="
                single-faq
                w-full
                bg-white
                border border-[#F3F4FE]
                rounded-lg
                p-5
                sm:p-8
                mb-8
                wow
                fadeInUp
              "
              data-wow-delay=".2s
              "
            >
              <button class="faq-btn flex items-center w-full text-left">
                <div
                  class="
                    w-full
                    max-w-[40px]
                    h-10
                    flex
                    items-center
                    justify-center
                    rounded-lg
                    bg-primary
                    text-primary
                    bg-opacity-5
                    mr-5
                  "
                >
                  <svg
                    width="17"
                    height="10"
                    viewBox="0 0 17 10"
                    class="fill-current icon"
                  >
                    <path
                      d="M7.28687 8.43257L7.28679 8.43265L7.29496 8.43985C7.62576 8.73124 8.02464 8.86001 8.41472 8.86001C8.83092 8.86001 9.22376 8.69083 9.53447 8.41713L9.53454 8.41721L9.54184 8.41052L15.7631 2.70784L15.7691 2.70231L15.7749 2.69659C16.0981 2.38028 16.1985 1.80579 15.7981 1.41393C15.4803 1.1028 14.9167 1.00854 14.5249 1.38489L8.41472 7.00806L2.29995 1.38063L2.29151 1.37286L2.28271 1.36548C1.93092 1.07036 1.38469 1.06804 1.03129 1.41393L1.01755 1.42738L1.00488 1.44184C0.69687 1.79355 0.695778 2.34549 1.0545 2.69659L1.05999 2.70196L1.06565 2.70717L7.28687 8.43257Z"
                      fill="#3056D3"
                      stroke="#3056D3"
                    />
                  </svg>
                </div>
                <div class="w-full">
                  <h4 class="text-base sm:text-lg font-semibold text-black">
                    Is GrayGrids part of UIdeck?
                  </h4>
                </div>
              </button>
              <div class="faq-content pl-[62px] hidden">
                <p class="text-base text-body-color leading-relaxed py-3">
                  It takes 2-3 weeks to get your first blog post ready. That
                  includes the in-depth research & creation of your monthly
                  content marketing strategy that we do before writing your
                  first blog post, Ipsum available .
                </p>
              </div>
            </div>
          </div>
          <div class="w-full lg:w-1/2 px-4">
            <div
              class="
                single-faq
                w-full
                bg-white
                border border-[#F3F4FE]
                rounded-lg
                p-5
                sm:p-8
                mb-8
                wow
                fadeInUp
              "
              data-wow-delay=".1s
              "
            >
              <button class="faq-btn flex items-center w-full text-left">
                <div
                  class="
                    w-full
                    max-w-[40px]
                    h-10
                    flex
                    items-center
                    justify-center
                    rounded-lg
                    bg-primary
                    text-primary
                    bg-opacity-5
                    mr-5
                  "
                >
                  <svg
                    width="17"
                    height="10"
                    viewBox="0 0 17 10"
                    class="fill-current icon"
                  >
                    <path
                      d="M7.28687 8.43257L7.28679 8.43265L7.29496 8.43985C7.62576 8.73124 8.02464 8.86001 8.41472 8.86001C8.83092 8.86001 9.22376 8.69083 9.53447 8.41713L9.53454 8.41721L9.54184 8.41052L15.7631 2.70784L15.7691 2.70231L15.7749 2.69659C16.0981 2.38028 16.1985 1.80579 15.7981 1.41393C15.4803 1.1028 14.9167 1.00854 14.5249 1.38489L8.41472 7.00806L2.29995 1.38063L2.29151 1.37286L2.28271 1.36548C1.93092 1.07036 1.38469 1.06804 1.03129 1.41393L1.01755 1.42738L1.00488 1.44184C0.69687 1.79355 0.695778 2.34549 1.0545 2.69659L1.05999 2.70196L1.06565 2.70717L7.28687 8.43257Z"
                      fill="#3056D3"
                      stroke="#3056D3"
                    />
                  </svg>
                </div>
                <div class="w-full">
                  <h4 class="text-base sm:text-lg font-semibold text-black">
                    Can I use this template for commercial project?
                  </h4>
                </div>
              </button>
              <div class="faq-content pl-[62px] hidden">
                <p class="text-base text-body-color leading-relaxed py-3">
                  It takes 2-3 weeks to get your first blog post ready. That
                  includes the in-depth research & creation of your monthly
                  content marketing strategy that we do before writing your
                  first blog post, Ipsum available .
                </p>
              </div>
            </div>
            <div
              class="
                single-faq
                w-full
                bg-white
                border border-[#F3F4FE]
                rounded-lg
                p-5
                sm:p-8
                mb-8
                wow
                fadeInUp
              "
              data-wow-delay=".15s
              "
            >
              <button class="faq-btn flex items-center w-full text-left">
                <div
                  class="
                    w-full
                    max-w-[40px]
                    h-10
                    flex
                    items-center
                    justify-center
                    rounded-lg
                    bg-primary
                    text-primary
                    bg-opacity-5
                    mr-5
                  "
                >
                  <svg
                    width="17"
                    height="10"
                    viewBox="0 0 17 10"
                    class="fill-current icon"
                  >
                    <path
                      d="M7.28687 8.43257L7.28679 8.43265L7.29496 8.43985C7.62576 8.73124 8.02464 8.86001 8.41472 8.86001C8.83092 8.86001 9.22376 8.69083 9.53447 8.41713L9.53454 8.41721L9.54184 8.41052L15.7631 2.70784L15.7691 2.70231L15.7749 2.69659C16.0981 2.38028 16.1985 1.80579 15.7981 1.41393C15.4803 1.1028 14.9167 1.00854 14.5249 1.38489L8.41472 7.00806L2.29995 1.38063L2.29151 1.37286L2.28271 1.36548C1.93092 1.07036 1.38469 1.06804 1.03129 1.41393L1.01755 1.42738L1.00488 1.44184C0.69687 1.79355 0.695778 2.34549 1.0545 2.69659L1.05999 2.70196L1.06565 2.70717L7.28687 8.43257Z"
                      fill="#3056D3"
                      stroke="#3056D3"
                    />
                  </svg>
                </div>
                <div class="w-full">
                  <h4 class="text-base sm:text-lg font-semibold text-black">
                    Do you have plan to releasing Play Pro?
                  </h4>
                </div>
              </button>
              <div class="faq-content pl-[62px] hidden">
                <p class="text-base text-body-color leading-relaxed py-3">
                  It takes 2-3 weeks to get your first blog post ready. That
                  includes the in-depth research & creation of your monthly
                  content marketing strategy that we do before writing your
                  first blog post, Ipsum available .
                </p>
              </div>
            </div>
            <div
              class="
                single-faq
                w-full
                bg-white
                border border-[#F3F4FE]
                rounded-lg
                p-5
                sm:p-8
                mb-8
                wow
                fadeInUp
              "
              data-wow-delay=".2s
              "
            >
              <button class="faq-btn flex items-center w-full text-left">
                <div
                  class="
                    w-full
                    max-w-[40px]
                    h-10
                    flex
                    items-center
                    justify-center
                    rounded-lg
                    bg-primary
                    text-primary
                    bg-opacity-5
                    mr-5
                  "
                >
                  <svg
                    width="17"
                    height="10"
                    viewBox="0 0 17 10"
                    class="fill-current icon"
                  >
                    <path
                      d="M7.28687 8.43257L7.28679 8.43265L7.29496 8.43985C7.62576 8.73124 8.02464 8.86001 8.41472 8.86001C8.83092 8.86001 9.22376 8.69083 9.53447 8.41713L9.53454 8.41721L9.54184 8.41052L15.7631 2.70784L15.7691 2.70231L15.7749 2.69659C16.0981 2.38028 16.1985 1.80579 15.7981 1.41393C15.4803 1.1028 14.9167 1.00854 14.5249 1.38489L8.41472 7.00806L2.29995 1.38063L2.29151 1.37286L2.28271 1.36548C1.93092 1.07036 1.38469 1.06804 1.03129 1.41393L1.01755 1.42738L1.00488 1.44184C0.69687 1.79355 0.695778 2.34549 1.0545 2.69659L1.05999 2.70196L1.06565 2.70717L7.28687 8.43257Z"
                      fill="#3056D3"
                      stroke="#3056D3"
                    />
                  </svg>
                </div>
                <div class="w-full">
                  <h4 class="text-base sm:text-lg font-semibold text-black">
                    Where and how to host this template?
                  </h4>
                </div>
              </button>
              <div class="faq-content pl-[62px] hidden">
                <p class="text-base text-body-color leading-relaxed py-3">
                  It takes 2-3 weeks to get your first blog post ready. That
                  includes the in-depth research & creation of your monthly
                  content marketing strategy that we do before writing your
                  first blog post, Ipsum available .
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="absolute bottom-0 right-0 z-[-1]">
        <svg
          width="1440"
          height="886"
          viewBox="0 0 1440 886"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            opacity="0.5"
            d="M193.307 -273.321L1480.87 1014.24L1121.85 1373.26C1121.85 1373.26 731.745 983.231 478.513 729.927C225.976 477.317 -165.714 85.6993 -165.714 85.6993L193.307 -273.321Z"
            fill="url(#paint0_linear)"
          />
          <defs>
            <linearGradient
              id="paint0_linear"
              x1="1308.65"
              y1="1142.58"
              x2="602.827"
              y2="-418.681"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#3056D3" stop-opacity="0.36" />
              <stop offset="1" stop-color="#F5F2FD" stop-opacity="0" />
              <stop offset="1" stop-color="#F5F2FD" stop-opacity="0.096144" />
            </linearGradient>
          </defs>
        </svg>
      </div>
    </section>
    <!-- ====== Faq Section End -->
@endsection
    