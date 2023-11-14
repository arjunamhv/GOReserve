@extends('layouts.app')

@section('content')
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.3/tailwind.min.css" integrity="sha512-wl80ucxCRpLkfaCnbM88y4AxnutbGk327762eM9E/rRTvY/ZGAHWMZrYUq66VQBYMIYDFpDdJAOGSLyIPHZ2IQ==" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@600&display=swap" rel="stylesheet"> 
</head>
 
<style>
    * {
    font-family: 'Quicksand', sans-serif;
    }
</style>   


<body>

    <article id="the-article">

<div>
    <div class="mx-auto max-w-6xl">
        <div class="p-2 rounded">
            <div class="flex flex-col md:flex-row">
                <div class="md:w-1/3 p-4 text-sm">

            <div class="sticky inset-x-0 top-0 left-0 py-12">
                
                    <div class="text-4xl text-neutral-950 mb-8">Frequently asked questions.</div>
                    <div class="mb-2">Have questions about our platform? </div>
                    <div class="font-thin text-gray-600">We have answers! Here are some general responses that may be helpful.</div>
                    </div>
                </div>
                <div class="md:w-2/3 py-12 ">
                    <div class="p-4">

            <div class="item px-6 py-6" x-data="{isOpen : false}">
                <a class="flex items-center justify-between" @click.prevent="isOpen = true">
                    <h4 :class="{'text-green-400 font-medium' : isOpen == true}">Why do UMKM businesses need a sports hall rental ?</h4>
                    <svg 
                    :class="{'transform rotate-180' : isOpen == true}"
                    class="w-5 h-5 text-gray-500"
                        fill="none" stroke-linecap="round" 
                        stroke-linejoin="round" stroke-width="2" 
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M19 9l-7 7-7-7"></path>
                    </svg>
                </a>
                <div x-show="isOpen" @click.away="isOpen = false" class="mt-3" :class="{'text-gray-600' : isOpen == true}">
                    <p>UMKM business actors need a sports hall rental website to help make it easier for people to find sports halls, make it easier to make reservations, and also see which sports halls are still empty and find out the overall sport schedule.</p>
                </div>
            </div>
            
            <div class="item px-6 py-6" x-data="{isOpen : false}">
                <a class="flex items-center justify-between" @click.prevent="isOpen = true">
                    <h4 :class="{'text-green-400 font-medium' : isOpen == true}">How to use the ticket ?</h4>
                    <svg 
                    :class="{'transform rotate-180' : isOpen == true}"
                    class="w-5 h-5 text-gray-500"
                        fill="none" stroke-linecap="round" 
                        stroke-linejoin="round" stroke-width="2" 
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M19 9l-7 7-7-7"></path>
                    </svg>
                </a>
                <div x-show="isOpen" @click.away="isOpen = false" class="mt-3" :class="{'text-gray-600' : isOpen == true}">
                    <p>
                        <li>If you received a ticket, bring it with you to the sports hall on the specified date and time.</li>
                        <li>If your reservation is tied to your account on the platform, ensure you have the necessary details for verification.</li></p>
                </div>
            </div>

            <div class="item px-6 py-6" x-data="{isOpen : false}">
                <a href="#" class="flex items-center justify-between" @click.prevent="isOpen = true">
                    <h4 :class="{'text-green-400 font-medium' : isOpen == true}">How can I make payment ?</h4>
                    <svg 
                    :class="{'transform rotate-180' : isOpen == true}"
                    class="w-5 h-5 text-gray-500"
                        fill="none" stroke-linecap="round" 
                        stroke-linejoin="round" stroke-width="2" 
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M19 9l-7 7-7-7"></path>
                    </svg>
                </a>
                <div x-show="isOpen" @click.away="isOpen = false" class="mt-3" :class="{'text-gray-600' : isOpen == true}">
                    <p>Select an available payment method
                        <br>Enter payment details and confirm the order after verification.</p>
                </div>
            </div>

            <div class="item px-6 py-6" x-data="{isOpen : false}">
                <a href="#" class="flex items-center justify-between" @click.prevent="isOpen = true">
                    <h4 :class="{'text-green-400 font-medium' : isOpen == true}">How to become a partner ?</h4>
                    <svg 
                    :class="{'transform rotate-180' : isOpen == true}"
                    class="w-5 h-5 text-gray-500"
                        fill="none" stroke-linecap="round" 
                        stroke-linejoin="round" stroke-width="2" 
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M19 9l-7 7-7-7"></path>
                    </svg>
                </a>
                <div x-show="isOpen" @click.away="isOpen = false" class="mt-3" :class="{'text-gray-600' : isOpen == true}">
                    <p>
                        1. Select Company or Platform:
                            <li>Decide which companies or platforms you want to partner with. This could be an online ordering platform, delivery service, or other business that offers a partner program.</li>

                        2. Visit Website or App:
                            <li>Visit the website or download the app of the company or platform you want to partner with.</li>

                        3. Search Partner Information:
                            <li>Find sections or pages on a website or app that contain information about partner programs.</li>

                        4. Read the Terms and Conditions:
                            <li>Research partner program terms and conditions. This may include eligibility requirements, fee requirements, or other commitments.</li>

                        5. Register or Apply:
                            <li>If you agree to the terms and conditions, follow the registration process or submit a partner application according to the instructions provided.</li>

                        6. Fill in Personal or Business Information:
                            <li>During the registration process, you may be asked to fill in your personal or business information. Make sure to provide accurate and complete information.</li>

                        7. Identity or Business Verification:
                            <li>Some companies or platforms may request verification of your identity or business as a security measure.</li>

                        8. Wait for Approval:
                            <li>After submitting the application, wait for approval from the company or platform. This process may take varying amounts of time depending on their policies.</li>
                    </p>
                </div>
            </div>

            <div class="item px-6 py-6" x-data="{isOpen : false}">
                <a href="#" class="flex items-center justify-between" @click.prevent="isOpen = true">
                    <h4 :class="{'text-green-400 font-medium' : isOpen == true}">Lorem Ipsum ?</h4>
                    <svg 
                    :class="{'transform rotate-180' : isOpen == true}"
                    class="w-5 h-5 text-gray-500"
                        fill="none" stroke-linecap="round" 
                        stroke-linejoin="round" stroke-width="2" 
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M19 9l-7 7-7-7"></path>
                    </svg>
                </a>
                <div x-show="isOpen" @click.away="isOpen = false" class="mt-3" :class="{'text-gray-600' : isOpen == true}">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
            
            <div class="item px-6 py-6" x-data="{isOpen : false}">
                <a href="#" class="flex items-center justify-between" @click.prevent="isOpen = true">
                    <h4 :class="{'text-green-400 font-medium' : isOpen == true}">Lorem Ipsum ?</h4>
                    <svg 
                    :class="{'transform rotate-180' : isOpen == true}"
                    class="w-5 h-5 text-gray-500"
                        fill="none" stroke-linecap="round" 
                        stroke-linejoin="round" stroke-width="2" 
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M19 9l-7 7-7-7"></path>
                    </svg>
                </a>
                <div x-show="isOpen" @click.away="isOpen = false" class="mt-3" :class="{'text-gray-600' : isOpen == true}">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
            
            <div class="item px-6 py-6" x-data="{isOpen : false}">
                <a href="#" class="flex items-center justify-between" @click.prevent="isOpen = true">
                    <h4 :class="{'text-green-400 font-medium' : isOpen == true}">Lorem Ipsum ?</h4>
                    <svg 
                    :class="{'transform rotate-180' : isOpen == true}"
                    class="w-5 h-5 text-gray-500"
                        fill="none" stroke-linecap="round" 
                        stroke-linejoin="round" stroke-width="2" 
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M19 9l-7 7-7-7"></path>
                    </svg>
                </a>
                <div x-show="isOpen" @click.away="isOpen = false" class="mt-3" :class="{'text-gray-600' : isOpen == true}">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>

            <div class="item px-6 py-6" x-data="{isOpen : false}">
                <a href="#" class="flex items-center justify-between" @click.prevent="isOpen = true">
                    <h4 :class="{'text-green-400 font-medium' : isOpen == true}">Lorem Ipsum ?</h4>
                    <svg 
                    :class="{'transform rotate-180' : isOpen == true}"
                    class="w-5 h-5 text-gray-500"
                        fill="none" stroke-linecap="round" 
                        stroke-linejoin="round" stroke-width="2" 
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M19 9l-7 7-7-7"></path>
                    </svg>
                </a>
                <div x-show="isOpen" @click.away="isOpen = false" class="mt-3" :class="{'text-gray-600' : isOpen == true}">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>

                </div>
            </div>
        </div>
    </div>
</div>

</article>

<div
	x-data="scrollHandler(document.getElementById('the-article'))"
	x-cloak
	aria-hidden="true"
	@scroll.window="calculateHeight(window.scrollY)"
	class="fixed h-screen w-1 hover:bg-gray-200 top-0 left-0 bg-gray-300">
	<div :style="`max-height:${height}%`" class="h-full bg-green-400"></div>
</div>

<div
	id="alpine-devtools"
	x-data="devtools()"
	x-show="alpines.length"
	x-init="start()">
</div>
<script>
function scrollHandler(element = null) {
	return {
		height: 0,
		element: element,
		calculateHeight(position) {
			const distanceFromTop = this.element.offsetTop
			const contentHeight = this.element.clientHeight
			const visibleContent = contentHeight - window.innerHeight
			const start = Math.max(0, position - distanceFromTop)
			const percent = (start / visibleContent) * 100;
			requestAnimationFrame(() => {
				this.height = percent;
			});
		},
		init() {
			this.element = this.element || document.body;
			this.calculateHeight(window.scrollY);
		}
	};
}

</script>
</body>
@include('layouts.footer')
@endsection