<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ __('Document') }}</title>
</head>

<body>
    <!-- Pricing -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Title -->
        <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
            <h2 class="text-2xl font-bold md:text-4xl md:leading-tight dark:text-white">{{ __('Pricing') }}</h2>
            <p class="mt-1 text-gray-600 dark:text-neutral-400">
                {{ __('Whatever your status, our offers evolve according to your needs.') }}</p>
        </div>
        <!-- End Title -->

        <!-- Switch -->
        <div class="flex justify-center items-center gap-x-3">
            <label for="pricing-switch" class="text-sm text-gray-800 dark:text-neutral-200">{{ __('Monthly') }}</label>
            <label for="pricing-switch" class="relative inline-block w-11 h-6 cursor-pointer">
                <input type="checkbox" id="pricing-switch" class="peer sr-only" checked>
                <span
                    class="absolute inset-0 bg-gray-200 rounded-full transition-colors duration-200 ease-in-out peer-checked:bg-blue-600 dark:bg-neutral-700 dark:peer-checked:bg-blue-500 peer-disabled:opacity-50 peer-disabled:pointer-events-none"></span>
                <span
                    class="absolute top-1/2 start-0.5 -translate-y-1/2 size-5 bg-white rounded-full shadow-xs transition-transform duration-200 ease-in-out peer-checked:translate-x-full dark:bg-neutral-400 dark:peer-checked:bg-white"></span>
            </label>
            <label for="pricing-switch" class="relative text-sm text-gray-800 dark:text-neutral-200">
                {{ __('Annually') }}
                <span class="absolute -top-10 start-auto -end-28">
                    <span class="flex items-center">
                        <svg class="w-14 h-8 -me-6" width="45" height="25" viewBox="0 0 45 25" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M43.2951 3.47877C43.8357 3.59191 44.3656 3.24541 44.4788 2.70484C44.5919 2.16427 44.2454 1.63433 43.7049 1.52119L43.2951 3.47877ZM4.63031 24.4936C4.90293 24.9739 5.51329 25.1423 5.99361 24.8697L13.8208 20.4272C14.3011 20.1546 14.4695 19.5443 14.1969 19.0639C13.9242 18.5836 13.3139 18.4152 12.8336 18.6879L5.87608 22.6367L1.92723 15.6792C1.65462 15.1989 1.04426 15.0305 0.563943 15.3031C0.0836291 15.5757 -0.0847477 16.1861 0.187863 16.6664L4.63031 24.4936ZM43.7049 1.52119C32.7389 -0.77401 23.9595 0.99522 17.3905 5.28788C10.8356 9.57127 6.58742 16.2977 4.53601 23.7341L6.46399 24.2659C8.41258 17.2023 12.4144 10.9287 18.4845 6.96211C24.5405 3.00476 32.7611 1.27399 43.2951 3.47877L43.7049 1.52119Z"
                                fill="currentColor" class="fill-gray-300 dark:fill-neutral-700" />
                        </svg>
                        <span
                            class="mt-3 inline-block whitespace-nowrap text-[11px] leading-5 font-semibold uppercase bg-blue-600 text-white rounded-full py-1 px-2.5">{{ __('Save up to 10%') }}</span>
                    </span>
                </span>
            </label>
        </div>
        <!-- End Switch -->

        <!-- Grid -->
        <div class="mt-12 grid sm:grid-cols-2 lg:grid-cols-4 gap-6 lg:items-center">
            <!-- Card -->
            <div class="flex flex-col border border-gray-200 text-center rounded-xl p-8 dark:border-neutral-800">
                <h4 class="font-medium text-lg text-gray-800 dark:text-neutral-200">{{ __('Free') }}</h4>
                <span class="mt-7 font-bold text-5xl text-gray-800 dark:text-neutral-200">{{ __('Free') }}</span>
                <p class="mt-2 text-sm text-gray-500 dark:text-neutral-500">{{ __('Forever free') }}</p>

                <ul class="mt-7 space-y-2.5 text-sm">
                    <li class="flex gap-x-2">
                        <svg class="shrink-0 mt-0.5 size-4 text-blue-600 dark:text-blue-500"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12" />
                        </svg>
                        <span class="text-gray-800 dark:text-neutral-400">
                            {{ __('1 user') }}
                        </span>
                    </li>

                    <li class="flex gap-x-2">
                        <svg class="shrink-0 mt-0.5 size-4 text-blue-600 dark:text-blue-500"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12" />
                        </svg>
                        <span class="text-gray-800 dark:text-neutral-400">
                            {{ __('Plan features') }}
                        </span>
                    </li>

                    <li class="flex gap-x-2">
                        <svg class="shrink-0 mt-0.5 size-4 text-blue-600 dark:text-blue-500"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12" />
                        </svg>
                        <span class="text-gray-800 dark:text-neutral-400">
                            {{ __('Product support') }}
                        </span>
                    </li>
                </ul>

                <a class="mt-5 py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-50 dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                    href="#">
                    {{ __('Sign up') }}
                </a>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div
                class="flex flex-col border-2 border-blue-600 text-center shadow-xl rounded-xl p-8 dark:border-blue-700">
                <p class="mb-3"><span
                        class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-lg text-xs uppercase font-semibold bg-blue-100 text-blue-800 dark:bg-blue-600 dark:text-white">{{ __('Most popular') }}</span>
                </p>
                <h4 class="font-medium text-lg text-gray-800 dark:text-neutral-200">{{ __('Startup') }}</h4>
                <span class="mt-5 font-bold text-5xl text-gray-800 dark:text-neutral-200">
                    <span class="font-bold text-2xl -me-2">$</span>
                    39
                </span>
                <p class="mt-2 text-sm text-gray-500 dark:text-neutral-500">
                    {{ __('All the basics for starting a new business') }}
                </p>

                <ul class="mt-7 space-y-2.5 text-sm">
                    <li class="flex gap-x-2">
                        <svg class="shrink-0 mt-0.5 size-4 text-blue-600 dark:text-blue-500"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12" />
                        </svg>
                        <span class="text-gray-800 dark:text-neutral-400">
                            {{ __('2 users') }}
                        </span>
                    </li>

                    <li class="flex gap-x-2">
                        <svg class="shrink-0 mt-0.5 size-4 text-blue-600 dark:text-blue-500"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12" />
                        </svg>
                        <span class="text-gray-800 dark:text-neutral-400">
                            {{ __('Plan features') }}
                        </span>
                    </li>

                    <li class="flex gap-x-2">
                        <svg class="shrink-0 mt-0.5 size-4 text-blue-600 dark:text-blue-500"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12" />
                        </svg>
                        <span class="text-gray-800 dark:text-neutral-400">
                            {{ __('Product support') }}
                        </span>
                    </li>
                </ul>

                <a class="mt-5 py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                    href="#">
                    {{ __('Sign up') }}
                </a>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="flex flex-col border border-gray-200 text-center rounded-xl p-8 dark:border-neutral-800">
                <h4 class="font-medium text-lg text-gray-800 dark:text-neutral-200">{{ __('Team') }}</h4>
                <span class="mt-5 font-bold text-5xl text-gray-800 dark:text-neutral-200">
                    <span class="font-bold text-2xl -me-2">$</span>
                    89
                </span>
                <p class="mt-2 text-sm text-gray-500 dark:text-neutral-500">
                    {{ __('Everything you need for a growing business') }}
                </p>

                <ul class="mt-7 space-y-2.5 text-sm">
                    <li class="flex gap-x-2">
                        <svg class="shrink-0 mt-0.5 size-4 text-blue-600 dark:text-blue-500"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12" />
                        </svg>
                        <span class="text-gray-800 dark:text-neutral-400">
                            {{ __('5 users') }}
                        </span>
                    </li>

                    <li class="flex gap-x-2">
                        <svg class="shrink-0 mt-0.5 size-4 text-blue-600 dark:text-blue-500"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12" />
                        </svg>
                        <span class="text-gray-800 dark:text-neutral-400">
                            {{ __('Plan features') }}
                        </span>
                    </li>

                    <li class="flex gap-x-2">
                        <svg class="shrink-0 mt-0.5 size-4 text-blue-600 dark:text-blue-500"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12" />
                        </svg>
                        <span class="text-gray-800 dark:text-neutral-400">
                            {{ __('Product support') }}
                        </span>
                    </li>
                </ul>

                <a class="mt-5 py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-50 dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                    href="#">
                    {{ __('Sign up') }}
                </a>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="flex flex-col border border-gray-200 text-center rounded-xl p-8 dark:border-neutral-800">
                <h4 class="font-medium text-lg text-gray-800 dark:text-neutral-200">{{ __('Enterprise') }}</h4>
                <span class="mt-5 font-bold text-5xl text-gray-800 dark:text-neutral-200">
                    <span class="font-bold text-2xl -me-2">$</span>
                    149
                </span>
                <p class="mt-2 text-sm text-gray-500 dark:text-neutral-500">
                    {{ __('Advanced features for scaling your business') }}
                </p>

                <ul class="mt-7 space-y-2.5 text-sm">
                    <li class="flex gap-x-2">
                        <svg class="shrink-0 mt-0.5 size-4 text-blue-600 dark:text-blue-500"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12" />
                        </svg>
                        <span class="text-gray-800 dark:text-neutral-400">
                            {{ __('10 users') }}
                        </span>
                    </li>

                    <li class="flex gap-x-2">
                        <svg class="shrink-0 mt-0.5 size-4 text-blue-600 dark:text-blue-500"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12" />
                        </svg>
                        <span class="text-gray-800 dark:text-neutral-400">
                            {{ __('Plan features') }}
                        </span>
                    </li>

                    <li class="flex gap-x-2">
                        <svg class="shrink-0 mt-0.5 size-4 text-blue-600 dark:text-blue-500"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12" />
                        </svg>
                        <span class="text-gray-800 dark:text-neutral-400">
                            {{ __('Product support') }}
                        </span>
                    </li>
                </ul>

                <a class="mt-5 py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-50 dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                    href="#">
                    {{ __('Sign up') }}
                </a>
            </div>
            <!-- End Card -->
        </div>
        <!-- End Grid -->

        <!-- Comparison table -->
        <div class="mt-20 lg:mt-32">
            <div class="lg:text-center mb-10 lg:mb-20">
                <h3 class="text-2xl font-semibold dark:text-white">{{ __('Compare plans') }}</h3>
            </div>

            <!-- xs to lg -->
            <div class="space-y-24 lg:hidden">
                <section>
                    <div class="px-4 mb-4">
                        <h2 class="text-lg leading-6 font-medium text-gray-800 dark:text-neutral-200">
                            {{ __('Free') }}</h2>
                    </div>
                    <table class="w-full">
                        <caption
                            class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-bold text-gray-800 text-start dark:bg-neutral-700 dark:border-neutral-700 dark:text-white">
                            {{ __('Financial data') }}
                        </caption>
                        <thead>
                            <tr>
                                <th class="sr-only" scope="col">{{ __('Feature') }}</th>
                                <th class="sr-only" scope="col">{{ __('Included') }}</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                            <tr class="border-t border-gray-200 dark:border-neutral-700">
                                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                    scope="row">{{ __('Open/High/Low/Close') }}</th>
                                <td class="py-5 pe-4">
                                    <!-- Check -->
                                    <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">{{ __('Yes') }}</span>
                                </td>
                            </tr>

                            <tr class="border-t border-gray-200 dark:border-neutral-700">
                                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                    scope="row">{{ __('Price-volume difference indicator') }}</th>
                                <td class="py-5 pe-4">
                                    <!-- Minus -->
                                    <svg class="shrink-0 ms-auto size-5 text-gray-400 dark:text-neutral-600"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14" />
                                    </svg>
                                    <!-- Minus -->
                                    <span class="sr-only">{{ __('No') }}</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="w-full">
                        <caption
                            class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-bold text-gray-800 text-start dark:bg-neutral-700 dark:border-neutral-700 dark:text-white">
                            {{ __('On-chain data') }}
                        </caption>
                        <thead>
                            <tr>
                                <th class="sr-only" scope="col">{{ __('Feature') }}</th>
                                <th class="sr-only" scope="col">{{ __('Included') }}</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                            <tr class="border-t border-gray-200 dark:border-neutral-700">
                                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                    scope="row">{{ __('Network growth') }}</th>
                                <td class="py-5 pe-4">
                                    <!-- Minus -->
                                    <svg class="shrink-0 ms-auto size-5 text-gray-400 dark:text-neutral-600"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14" />
                                    </svg>
                                    <!-- Minus -->
                                    <span class="sr-only">{{ __('No') }}</span>
                                </td>
                            </tr>

                            <tr class="border-t border-gray-200 dark:border-neutral-700">
                                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                    scope="row">{{ __('Average token age consumed') }}</th>
                                <td class="py-5 pe-4">
                                    <!-- Check -->
                                    <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">{{ __('Yes') }}</span>
                                </td>
                            </tr>

                            <tr class="border-t border-gray-200 dark:border-neutral-700">
                                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                    scope="row">{{ __('Exchange flow') }}</th>
                                <td class="py-5 pe-4">
                                    <!-- Minus -->
                                    <svg class="shrink-0 ms-auto size-5 text-gray-400 dark:text-neutral-600"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14" />
                                    </svg>
                                    <!-- Minus -->
                                    <span class="sr-only">{{ __('No') }}</span>
                                </td>
                            </tr>

                            <tr class="border-t border-gray-200 dark:border-neutral-700">
                                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                    scope="row">{{ __('Total ERC20 exchange funds flow') }}</th>
                                <td class="py-5 pe-4">
                                    <!-- Minus -->
                                    <svg class="shrink-0 ms-auto size-5 text-gray-400 dark:text-neutral-600"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14" />
                                    </svg>
                                    <!-- Minus -->
                                    <span class="sr-only">{{ __('No') }}</span>
                                </td>
                            </tr>

                            <tr class="border-t border-gray-200 dark:border-neutral-700">
                                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                    scope="row">{{ __('Transaction volume') }}</th>
                                <td class="py-5 pe-4">
                                    <!-- Check -->
                                    <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">{{ __('Yes') }}</span>
                                </td>
                            </tr>

                            <tr class="border-t border-gray-200 dark:border-neutral-700">
                                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                    scope="row">Total circulation (beta)</th>
                                <td class="py-5 pe-4">
                                    <!-- Minus -->
                                    <svg class="shrink-0 ms-auto size-5 text-gray-400 dark:text-neutral-600"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14" />
                                    </svg>
                                    <!-- Minus -->
                                    <span class="sr-only">{{ __('No') }}</span>
                                </td>
                            </tr>

                            <tr class="border-t border-gray-200 dark:border-neutral-700">
                                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                    scope="row">Velocity of tokens (beta)</th>
                                <td class="py-5 pe-4">
                                    <!-- Check -->
                                    <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">{{ __('Yes') }}</span>
                                </td>
                            </tr>

                            <tr class="border-t border-gray-200 dark:border-neutral-700">
                                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                    scope="row">{{ __('ETH gas used') }}</th>
                                <td class="py-5 pe-4">
                                    <!-- Minus -->
                                    <svg class="shrink-0 ms-auto size-5 text-gray-400 dark:text-neutral-600"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14" />
                                    </svg>
                                    <!-- Minus -->
                                    <span class="sr-only">{{ __('No') }}</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="w-full">
                        <caption
                            class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-bold text-gray-800 text-start dark:bg-neutral-700 dark:border-neutral-700 dark:text-white">
                            {{ __('Social data') }}
                        </caption>
                        <thead>
                            <tr>
                                <th class="sr-only" scope="col">{{ __('Feature') }}</th>
                                <th class="sr-only" scope="col">{{ __('Included') }}</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                            <tr class="border-t border-gray-200 dark:border-neutral-700">
                                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                    scope="row">{{ __('Dev activity') }}</th>
                                <td class="py-5 pe-4">
                                    <!-- Minus -->
                                    <svg class="shrink-0 ms-auto size-5 text-gray-400 dark:text-neutral-600"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14" />
                                    </svg>
                                    <!-- Minus -->
                                    <span class="sr-only">{{ __('No') }}</span>
                                </td>
                            </tr>

                            <tr class="border-t border-gray-200 dark:border-neutral-700">
                                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                    scope="row">{{ __('Topic search') }}</th>
                                <td class="py-5 pe-4">
                                    <!-- Check -->
                                    <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">{{ __('Yes') }}</span>
                                </td>
                            </tr>

                            <tr class="border-t border-gray-200 dark:border-neutral-700">
                                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                    scope="row">{{ __('Relative social dominance') }}</th>
                                <td class="py-5 pe-4">
                                    <!-- Minus -->
                                    <svg class="shrink-0 ms-auto size-5 text-gray-400 dark:text-neutral-600"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14" />
                                    </svg>
                                    <!-- Minus -->
                                    <span class="sr-only">{{ __('No') }}</span>
                                </td>
                            </tr>

                            <tr class="border-t border-gray-200 dark:border-neutral-700">
                                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                    scope="row">{{ __('Total social volume') }}</th>
                                <td class="py-5 pe-4">
                                    <!-- Minus -->
                                    <svg class="shrink-0 ms-auto size-5 text-gray-400 dark:text-neutral-600"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14" />
                                    </svg>
                                    <!-- Minus -->
                                    <span class="sr-only">{{ __('No') }}</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </section>

                <section>
                    <div class="px-4 mb-4">
                        <h2 class="text-lg leading-6 font-medium text-gray-800 dark:text-neutral-200">
                            {{ __('Startup') }}</h2>
                    </div>
                    <table class="w-full">
                        <caption
                            class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-bold text-gray-800 text-start dark:bg-neutral-700 dark:border-neutral-700 dark:text-white">
                            {{ __('Financial data') }}
                        </caption>
                        <thead>
                            <tr>
                                <th class="sr-only" scope="col">{{ __('Feature') }}</th>
                                <th class="sr-only" scope="col">{{ __('Included') }}</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                            <tr class="border-t border-gray-200 dark:border-neutral-700">
                                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                    scope="row">{{ __('Open/High/Low/Close') }}</th>
                                <td class="py-5 pe-4">
                                    <!-- Check -->
                                    <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">{{ __('Yes') }}</span>
                                </td>
                            </tr>

                            <tr class="border-t border-gray-200 dark:border-neutral-700">
                                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                    scope="row">{{ __('Price-volume difference indicator') }}</th>
                                <td class="py-5 pe-4">
                                    <!-- Check -->
                                    <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">{{ __('Yes') }}</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="w-full">
                        <caption
                            class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-bold text-gray-800 text-start dark:bg-neutral-700 dark:border-neutral-700 dark:text-white">
                            {{ __('On-chain data') }}
                        </caption>
                        <thead>
                            <tr>
                                <th class="sr-only" scope="col">{{ __('Feature') }}</th>
                                <th class="sr-only" scope="col">{{ __('Included') }}</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                            <tr class="border-t border-gray-200 dark:border-neutral-700">
                                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                    scope="row">{{ __('Network growth') }}</th>
                                <td class="py-5 pe-4">
                                    <!-- Minus -->
                                    <svg class="shrink-0 ms-auto size-5 text-gray-400 dark:text-neutral-600"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14" />
                                    </svg>
                                    <!-- Minus -->
                                    <span class="sr-only">{{ __('No') }}</span>
                                </td>
                            </tr>

                            <tr class="border-t border-gray-200 dark:border-neutral-700">
                                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                    scope="row">{{ __('Average token age consumed') }}</th>
                                <td class="py-5 pe-4">
                                    <!-- Minus -->
                                    <svg class="shrink-0 ms-auto size-5 text-gray-400 dark:text-neutral-600"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14" />
                                    </svg>
                                    <!-- Minus -->
                                    <span class="sr-only">{{ __('No') }}</span>
                                </td>
                            </tr>

                            <tr class="border-t border-gray-200 dark:border-neutral-700">
                                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                    scope="row">{{ __('Exchange flow') }}</th>
                                <td class="py-5 pe-4">
                                    <!-- Minus -->
                                    <svg class="shrink-0 ms-auto size-5 text-gray-400 dark:text-neutral-600"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14" />
                                    </svg>
                                    <!-- Minus -->
                                    <span class="sr-only">{{ __('No') }}</span>
                                </td>
                            </tr>

                            <tr class="border-t border-gray-200 dark:border-neutral-700">
                                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                    scope="row">{{ __('Total ERC20 exchange funds flow') }}</th>
                                <td class="py-5 pe-4">
                                    <!-- Minus -->
                                    <svg class="shrink-0 ms-auto size-5 text-gray-400 dark:text-neutral-600"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14" />
                                    </svg>
                                    <!-- Minus -->
                                    <span class="sr-only">{{ __('No') }}</span>
                                </td>
                            </tr>

                            <tr class="border-t border-gray-200 dark:border-neutral-700">
                                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                    scope="row">{{ __('Transaction volume') }}</th>
                                <td class="py-5 pe-4">
                                    <!-- Check -->
                                    <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">{{ __('Yes') }}</span>
                                </td>
                            </tr>

                            <tr class="border-t border-gray-200 dark:border-neutral-700">
                                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                    scope="row">Total circulation (beta)</th>
                                <td class="py-5 pe-4">
                                    <!-- Check -->
                                    <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">{{ __('Yes') }}</span>
                                </td>
                            </tr>

                            <tr class="border-t border-gray-200 dark:border-neutral-700">
                                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                    scope="row">Velocity of tokens (beta)</th>
                                <td class="py-5 pe-4">
                                    <!-- Check -->
                                    <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">{{ __('Yes') }}</span>
                                </td>
                            </tr>

                            <tr class="border-t border-gray-200 dark:border-neutral-700">
                                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                    scope="row">{{ __('ETH gas used') }}</th>
                                <td class="py-5 pe-4">
                                    <!-- Check -->
                                    <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">{{ __('Yes') }}</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="w-full">
                        <caption
                            class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-bold text-gray-800 text-start dark:bg-neutral-700 dark:border-neutral-700 dark:text-white">
                            {{ __('Social data') }}
                        </caption>
                        <thead>
                            <tr>
                                <th class="sr-only" scope="col">{{ __('Feature') }}</th>
                                <th class="sr-only" scope="col">{{ __('Included') }}</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                            <tr class="border-t border-gray-200 dark:border-neutral-700">
                                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                    scope="row">{{ __('Dev activity') }}</th>
                                <td class="py-5 pe-4">
                                    <!-- Check -->
                                    <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">{{ __('Yes') }}</span>
                                </td>
                            </tr>

                            <tr class="border-t border-gray-200 dark:border-neutral-700">
                                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                    scope="row">{{ __('Topic search') }}</th>
                                <td class="py-5 pe-4">
                                    <!-- Check -->
                                    <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">{{ __('Yes') }}</span>
                                </td>
                            </tr>

                            <tr class="border-t border-gray-200 dark:border-neutral-700">
                                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                    scope="row">{{ __('Relative social dominance') }}</th>
                                <td class="py-5 pe-4">
                                    <!-- Minus -->
                                    <svg class="shrink-0 ms-auto size-5 text-gray-400 dark:text-neutral-600"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14" />
                                    </svg>
                                    <!-- Minus -->
                                    <span class="sr-only">{{ __('No') }}</span>
                                </td>
                            </tr>

                            <tr class="border-t border-gray-200 dark:border-neutral-700">
                                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                    scope="row">{{ __('Total social volume') }}</th>
                                <td class="py-5 pe-4">
                                    <!-- Check -->
                                    <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">{{ __('Yes') }}</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </section>

                <section>
                    <div class="px-4 mb-4">
                        <h2 class="text-lg leading-6 font-medium text-gray-800 dark:text-neutral-200">
                            {{ __('Team') }}</h2>
                    </div>
                    <table class="w-full">
                        <caption
                            class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-bold text-gray-800 text-start dark:bg-neutral-700 dark:border-neutral-700 dark:text-white">
                            {{ __('Financial data') }}
                        </caption>
                        <thead>
                            <tr>
                                <th class="sr-only" scope="col">{{ __('Feature') }}</th>
                                <th class="sr-only" scope="col">{{ __('Included') }}</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                            <tr class="border-t border-gray-200 dark:border-neutral-700">
                                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                    scope="row">{{ __('Open/High/Low/Close') }}</th>
                                <td class="py-5 pe-4">
                                    <!-- Check -->
                                    <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">{{ __('Yes') }}</span>
                                </td>
                            </tr>

                            <tr class="border-t border-gray-200 dark:border-neutral-700">
                                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                    scope="row">{{ __('Price-volume difference indicator') }}</th>
                                <td class="py-5 pe-4">
                                    <!-- Check -->
                                    <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">{{ __('Yes') }}</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="w-full">
                        <caption
                            class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-bold text-gray-800 text-start dark:bg-neutral-700 dark:border-neutral-700 dark:text-white">
                            {{ __('On-chain data') }}
                        </caption>
                        <thead>
                            <tr>
                                <th class="sr-only" scope="col">{{ __('Feature') }}</th>
                                <th class="sr-only" scope="col">{{ __('Included') }}</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                            <tr class="border-t border-gray-200 dark:border-neutral-700">
                                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                    scope="row">{{ __('Network growth') }}</th>
                                <td class="py-5 pe-4">
                                    <!-- Check -->
                                    <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">{{ __('Yes') }}</span>
                                </td>
                            </tr>

                            <tr class="border-t border-gray-200 dark:border-neutral-700">
                                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                    scope="row">{{ __('Average token age consumed') }}</th>
                                <td class="py-5 pe-4">
                                    <!-- Check -->
                                    <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">{{ __('Yes') }}</span>
                                </td>
                            </tr>

                            <tr class="border-t border-gray-200 dark:border-neutral-700">
                                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                    scope="row">{{ __('Exchange flow') }}</th>
                                <td class="py-5 pe-4">
                                    <!-- Check -->
                                    <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">{{ __('Yes') }}</span>
                                </td>
                            </tr>

                            <tr class="border-t border-gray-200 dark:border-neutral-700">
                                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                    scope="row">{{ __('Total ERC20 exchange funds flow') }}</th>
                                <td class="py-5 pe-4">
                                    <!-- Check -->
                                    <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">{{ __('Yes') }}</span>
                                </td>
                            </tr>

                            <tr class="border-t border-gray-200 dark:border-neutral-700">
                                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                    scope="row">{{ __('Transaction volume') }}</th>
                                <td class="py-5 pe-4">
                                    <!-- Check -->
                                    <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">{{ __('Yes') }}</span>
                                </td>
                            </tr>

                            <tr class="border-t border-gray-200 dark:border-neutral-700">
                                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                    scope="row">Total circulation (beta)</th>
                                <td class="py-5 pe-4">
                                    <!-- Check -->
                                    <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">{{ __('Yes') }}</span>
                                </td>
                            </tr>

                            <tr class="border-t border-gray-200 dark:border-neutral-700">
                                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                    scope="row">Velocity of tokens (beta)</th>
                                <td class="py-5 pe-4">
                                    <!-- Minus -->
                                    <svg class="shrink-0 ms-auto size-5 text-gray-400 dark:text-neutral-600"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14" />
                                    </svg>
                                    <!-- Minus -->
                                    <span class="sr-only">{{ __('No') }}</span>
                                </td>
                            </tr>

                            <tr class="border-t border-gray-200 dark:border-neutral-700">
                                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                    scope="row">{{ __('ETH gas used') }}</th>
                                <td class="py-5 pe-4">
                                    <!-- Check -->
                                    <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">{{ __('Yes') }}</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="w-full">
                        <caption
                            class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-bold text-gray-800 text-start dark:bg-neutral-700 dark:border-neutral-700 dark:text-white">
                            {{ __('Social data') }}
                        </caption>
                        <thead>
                            <tr>
                                <th class="sr-only" scope="col">{{ __('Feature') }}</th>
                                <th class="sr-only" scope="col">{{ __('Included') }}</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                            <tr class="border-t border-gray-200 dark:border-neutral-700">
                                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                    scope="row">{{ __('Dev activity') }}</th>
                                <td class="py-5 pe-4">
                                    <!-- Minus -->
                                    <svg class="shrink-0 ms-auto size-5 text-gray-400 dark:text-neutral-600"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14" />
                                    </svg>
                                    <!-- Minus -->
                                    <span class="sr-only">{{ __('No') }}</span>
                                </td>
                            </tr>

                            <tr class="border-t border-gray-200 dark:border-neutral-700">
                                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                    scope="row">{{ __('Topic search') }}</th>
                                <td class="py-5 pe-4">
                                    <!-- Check -->
                                    <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">{{ __('Yes') }}</span>
                                </td>
                            </tr>

                            <tr class="border-t border-gray-200 dark:border-neutral-700">
                                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                    scope="row">{{ __('Relative social dominance') }}</th>
                                <td class="py-5 pe-4">
                                    <!-- Check -->
                                    <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">{{ __('Yes') }}</span>
                                </td>
                            </tr>

                            <tr class="border-t border-gray-200 dark:border-neutral-700">
                                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                    scope="row">{{ __('Total social volume') }}</th>
                                <td class="py-5 pe-4">
                                    <!-- Minus -->
                                    <svg class="shrink-0 ms-auto size-5 text-gray-400 dark:text-neutral-600"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14" />
                                    </svg>
                                    <!-- Minus -->
                                    <span class="sr-only">{{ __('No') }}</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </section>

                <section>
                    <div class="px-4 mb-4">
                        <h2 class="text-lg leading-6 font-medium text-gray-800 dark:text-neutral-200">
                            {{ __('Enterprise') }}</h2>
                    </div>
                    <table class="w-full">
                        <caption
                            class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-bold text-gray-800 text-start dark:bg-neutral-700 dark:border-neutral-700 dark:text-white">
                            {{ __('Financial data') }}
                        </caption>
                        <thead>
                            <tr>
                                <th class="sr-only" scope="col">{{ __('Feature') }}</th>
                                <th class="sr-only" scope="col">{{ __('Included') }}</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                            <tr class="border-t border-gray-200 dark:border-neutral-700">
                                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                    scope="row">{{ __('Open/High/Low/Close') }}</th>
                                <td class="py-5 pe-4">
                                    <!-- Check -->
                                    <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">{{ __('Yes') }}</span>
                                </td>
                            </tr>

                            <tr class="border-t border-gray-200 dark:border-neutral-700">
                                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                    scope="row">{{ __('Price-volume difference indicator') }}</th>
                                <td class="py-5 pe-4">
                                    <!-- Check -->
                                    <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">{{ __('Yes') }}</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="w-full">
                        <caption
                            class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-bold text-gray-800 text-start dark:bg-neutral-700 dark:border-neutral-700 dark:text-white">
                            {{ __('On-chain data') }}
                        </caption>
                        <thead>
                            <tr>
                                <th class="sr-only" scope="col">{{ __('Feature') }}</th>
                                <th class="sr-only" scope="col">{{ __('Included') }}</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                            <tr class="border-t border-gray-200 dark:border-neutral-700">
                                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                    scope="row">{{ __('Network growth') }}</th>
                                <td class="py-5 pe-4">
                                    <!-- Check -->
                                    <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">{{ __('Yes') }}</span>
                                </td>
                            </tr>

                            <tr class="border-t border-gray-200 dark:border-neutral-700">
                                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                    scope="row">{{ __('Average token age consumed') }}</th>
                                <td class="py-5 pe-4">
                                    <!-- Check -->
                                    <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">{{ __('Yes') }}</span>
                                </td>
                            </tr>

                            <tr class="border-t border-gray-200 dark:border-neutral-700">
                                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                    scope="row">{{ __('Exchange flow') }}</th>
                                <td class="py-5 pe-4">
                                    <!-- Check -->
                                    <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">{{ __('Yes') }}</span>
                                </td>
                            </tr>

                            <tr class="border-t border-gray-200 dark:border-neutral-700">
                                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                    scope="row">{{ __('Total ERC20 exchange funds flow') }}</th>
                                <td class="py-5 pe-4">
                                    <!-- Check -->
                                    <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">{{ __('Yes') }}</span>
                                </td>
                            </tr>

                            <tr class="border-t border-gray-200 dark:border-neutral-700">
                                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                    scope="row">{{ __('Transaction volume') }}</th>
                                <td class="py-5 pe-4">
                                    <!-- Check -->
                                    <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">{{ __('Yes') }}</span>
                                </td>
                            </tr>

                            <tr class="border-t border-gray-200 dark:border-neutral-700">
                                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                    scope="row">Total circulation (beta)</th>
                                <td class="py-5 pe-4">
                                    <!-- Check -->
                                    <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">{{ __('Yes') }}</span>
                                </td>
                            </tr>

                            <tr class="border-t border-gray-200 dark:border-neutral-700">
                                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                    scope="row">Velocity of tokens (beta)</th>
                                <td class="py-5 pe-4">
                                    <!-- Check -->
                                    <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">{{ __('Yes') }}</span>
                                </td>
                            </tr>

                            <tr class="border-t border-gray-200 dark:border-neutral-700">
                                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                    scope="row">{{ __('ETH gas used') }}</th>
                                <td class="py-5 pe-4">
                                    <!-- Check -->
                                    <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">{{ __('Yes') }}</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="w-full">
                        <caption
                            class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-bold text-gray-800 text-start dark:bg-neutral-700 dark:border-neutral-700 dark:text-white">
                            {{ __('Social data') }}
                        </caption>
                        <thead>
                            <tr>
                                <th class="sr-only" scope="col">{{ __('Feature') }}</th>
                                <th class="sr-only" scope="col">{{ __('Included') }}</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                            <tr class="border-t border-gray-200 dark:border-neutral-700">
                                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                    scope="row">{{ __('Dev activity') }}</th>
                                <td class="py-5 pe-4">
                                    <!-- Check -->
                                    <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">{{ __('Yes') }}</span>
                                </td>
                            </tr>

                            <tr class="border-t border-gray-200 dark:border-neutral-700">
                                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                    scope="row">{{ __('Topic search') }}</th>
                                <td class="py-5 pe-4">
                                    <!-- Check -->
                                    <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">{{ __('Yes') }}</span>
                                </td>
                            </tr>

                            <tr class="border-t border-gray-200 dark:border-neutral-700">
                                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                    scope="row">{{ __('Relative social dominance') }}</th>
                                <td class="py-5 pe-4">
                                    <!-- Check -->
                                    <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">{{ __('Yes') }}</span>
                                </td>
                            </tr>

                            <tr class="border-t border-gray-200 dark:border-neutral-700">
                                <th class="py-5 px-4 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                    scope="row">{{ __('Total social volume') }}</th>
                                <td class="py-5 pe-4">
                                    <!-- Check -->
                                    <svg class="shrink-0 ms-auto size-5 text-blue-600 dark:text-blue-500"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                    <!-- End Solid Check -->
                                    <span class="sr-only">{{ __('Yes') }}</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </section>
            </div>
            <!-- End xs to lg -->

            <!-- lg+ -->
            <div class="hidden lg:block">
                <table class="w-full h-px">
                    <caption class="sr-only">
                        {{ __('Pricing plan comparison') }}
                    </caption>
                    <thead class="sticky top-0 inset-x-0 bg-white dark:bg-neutral-900">
                        <tr>
                            <th class="py-4 ps-6 pe-6 text-sm font-medium text-gray-800 text-start" scope="col">
                                <span class="sr-only">{{ __('Feature by') }}</span>
                                <span class="dark:text-white">{{ __('Plans') }}</span>
                            </th>

                            <th class="w-1/4 py-4 px-6 text-lg leading-6 font-medium text-gray-800 text-center dark:text-white"
                                scope="col">{{ __('Free') }}</th>
                            <th class="w-1/4 py-4 px-6 text-lg leading-6 font-medium text-gray-800 text-center dark:text-white"
                                scope="col">{{ __('Startup') }}</th>
                            <th class="w-1/4 py-4 px-6 text-lg leading-6 font-medium text-gray-800 text-center dark:text-white"
                                scope="col">{{ __('Team') }}</th>
                            <th class="w-1/4 py-4 px-6 text-lg leading-6 font-medium text-gray-800 text-center dark:text-white"
                                scope="col">{{ __('Enterprise') }}</th>
                        </tr>
                    </thead>
                    <tbody
                        class="border-t border-gray-200 divide-y divide-gray-200 dark:border-neutral-700 dark:divide-neutral-700">
                        <tr>
                            <th class="py-3 ps-6 bg-gray-50 font-bold text-gray-800 text-start dark:bg-neutral-800 dark:text-white"
                                colspan="5" scope="colgroup">{{ __('Financial data') }}</th>
                        </tr>

                        <tr>
                            <th class="py-5 ps-6 pe-6 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                scope="row">{{ __('Open/High/Low/Close') }}</th>

                            <td class="py-5 px-6">
                                <!-- Check -->
                                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12" />
                                </svg>
                                <!-- End Solid Check -->
                                <span class="sr-only">{{ __('Included in Free') }}</span>
                            </td>

                            <td class="py-5 px-6">
                                <!-- Check -->
                                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12" />
                                </svg>
                                <!-- End Solid Check -->
                                <span class="sr-only">{{ __('Included in Startup') }}</span>
                            </td>

                            <td class="py-5 px-6">
                                <!-- Check -->
                                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12" />
                                </svg>
                                <!-- End Solid Check -->
                                <span class="sr-only">{{ __('Included in Team') }}</span>
                            </td>

                            <td class="py-5 px-6">
                                <!-- Check -->
                                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12" />
                                </svg>
                                <!-- End Solid Check -->
                                <span class="sr-only">{{ __('Included in Enterprise') }}</span>
                            </td>
                        </tr>

                        <tr>
                            <th class="py-5 ps-6 pe-6 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                scope="row">{{ __('Price-volume difference indicator') }}</th>

                            <td class="py-5 px-6">
                                <!-- Minus -->
                                <svg class="mx-auto shrink-0 size-5 text-gray-400 dark:text-neutral-600"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14" />
                                </svg>
                                <!-- Minus -->
                                <span class="sr-only">{{ __('Not included in Free') }}</span>
                            </td>

                            <td class="py-5 px-6">
                                <!-- Check -->
                                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12" />
                                </svg>
                                <!-- End Solid Check -->
                                <span class="sr-only">{{ __('Included in Startup') }}</span>
                            </td>

                            <td class="py-5 px-6">
                                <!-- Check -->
                                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12" />
                                </svg>
                                <!-- End Solid Check -->
                                <span class="sr-only">{{ __('Included in Team') }}</span>
                            </td>

                            <td class="py-5 px-6">
                                <!-- Check -->
                                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12" />
                                </svg>
                                <!-- End Solid Check -->
                                <span class="sr-only">{{ __('Included in Enterprise') }}</span>
                            </td>
                        </tr>

                        <tr>
                            <th class="py-3 ps-6 bg-gray-50 font-bold text-gray-800 text-start dark:bg-neutral-800 dark:text-white"
                                colspan="5" scope="colgroup">{{ __('On-chain data') }}</th>
                        </tr>

                        <tr>
                            <th class="py-5 ps-6 pe-6 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                scope="row">{{ __('Network growth') }}</th>

                            <td class="py-5 px-6">
                                <!-- Check -->
                                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12" />
                                </svg>
                                <!-- End Solid Check -->
                                <span class="sr-only">{{ __('Included in Free') }}</span>
                            </td>

                            <td class="py-5 px-6">
                                <!-- Check -->
                                <svg class="mx-auto shrink-0 size-5 text-gray-400 dark:text-neutral-600"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14" />
                                </svg>
                                <!-- End Solid Check -->
                                <span class="sr-only">{{ __('Included in Startup') }}</span>
                            </td>

                            <td class="py-5 px-6">
                                <!-- Check -->
                                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12" />
                                </svg>
                                <!-- End Solid Check -->
                                <span class="sr-only">{{ __('Included in Team') }}</span>
                            </td>

                            <td class="py-5 px-6">
                                <!-- Check -->
                                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12" />
                                </svg>
                                <!-- End Solid Check -->
                                <span class="sr-only">{{ __('Included in Enterprise') }}</span>
                            </td>
                        </tr>

                        <tr>
                            <th class="py-5 ps-6 pe-6 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                scope="row">{{ __('Average token age consumed') }}</th>

                            <td class="py-5 px-6">
                                <!-- Check -->
                                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12" />
                                </svg>
                                <!-- End Solid Check -->
                                <span class="sr-only">{{ __('Not included in Free') }}</span>
                            </td>

                            <td class="py-5 px-6">
                                <!-- Check -->
                                <svg class="mx-auto shrink-0 size-5 text-gray-400 dark:text-neutral-600"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14" />
                                </svg>
                                <!-- End Solid Check -->
                                <span class="sr-only">{{ __('Included in Startup') }}</span>
                            </td>

                            <td class="py-5 px-6">
                                <!-- Check -->
                                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12" />
                                </svg>
                                <!-- End Solid Check -->
                                <span class="sr-only">{{ __('Included in Team') }}</span>
                            </td>

                            <td class="py-5 px-6">
                                <!-- Check -->
                                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12" />
                                </svg>
                                <!-- End Solid Check -->
                                <span class="sr-only">{{ __('Included in Enterprise') }}</span>
                            </td>
                        </tr>

                        <tr>
                            <th class="py-5 ps-6 pe-6 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                scope="row">{{ __('Exchange flow') }}</th>

                            <td class="py-5 px-6">
                                <!-- Minus -->
                                <svg class="mx-auto shrink-0 size-5 text-gray-400 dark:text-neutral-600"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14" />
                                </svg>
                                <!-- Minus -->
                                <span class="sr-only">{{ __('Not included in Free') }}</span>
                            </td>

                            <td class="py-5 px-6">
                                <!-- Check -->
                                <svg class="mx-auto shrink-0 size-5 text-gray-400 dark:text-neutral-600"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14" />
                                </svg>
                                <!-- End Solid Check -->
                                <span class="sr-only">{{ __('Included in Startup') }}</span>
                            </td>

                            <td class="py-5 px-6">
                                <!-- Check -->
                                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12" />
                                </svg>
                                <!-- End Solid Check -->
                                <span class="sr-only">{{ __('Included in Team') }}</span>
                            </td>

                            <td class="py-5 px-6">
                                <!-- Check -->
                                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12" />
                                </svg>
                                <!-- End Solid Check -->
                                <span class="sr-only">{{ __('Included in Enterprise') }}</span>
                            </td>
                        </tr>

                        <tr>
                            <th class="py-5 ps-6 pe-6 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                scope="row">{{ __('Total ERC20 exchange funds flow') }}</th>

                            <td class="py-5 px-6">
                                <!-- Minus -->
                                <svg class="mx-auto shrink-0 size-5 text-gray-400 dark:text-neutral-600"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14" />
                                </svg>
                                <!-- Minus -->
                                <span class="sr-only">{{ __('Not included in Free') }}</span>
                            </td>

                            <td class="py-5 px-6">
                                <!-- Check -->
                                <svg class="mx-auto shrink-0 size-5 text-gray-400 dark:text-neutral-600"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14" />
                                </svg>
                                <!-- End Solid Check -->
                                <span class="sr-only">{{ __('Included in Startup') }}</span>
                            </td>

                            <td class="py-5 px-6">
                                <!-- Check -->
                                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12" />
                                </svg>
                                <!-- End Solid Check -->
                                <span class="sr-only">{{ __('Included in Team') }}</span>
                            </td>

                            <td class="py-5 px-6">
                                <!-- Check -->
                                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12" />
                                </svg>
                                <!-- End Solid Check -->
                                <span class="sr-only">{{ __('Included in Enterprise') }}</span>
                            </td>
                        </tr>

                        <tr>
                            <th class="py-5 ps-6 pe-6 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                scope="row">{{ __('Transaction volume') }}</th>

                            <td class="py-5 px-6">
                                <!-- Check -->
                                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12" />
                                </svg>
                                <!-- End Solid Check -->
                                <span class="sr-only">{{ __('Included in Free') }}</span>
                            </td>

                            <td class="py-5 px-6">
                                <!-- Check -->
                                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12" />
                                </svg>
                                <!-- End Solid Check -->
                                <span class="sr-only">{{ __('Included in Startup') }}</span>
                            </td>

                            <td class="py-5 px-6">
                                <!-- Check -->
                                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12" />
                                </svg>
                                <!-- End Solid Check -->
                                <span class="sr-only">{{ __('Included in Team') }}</span>
                            </td>

                            <td class="py-5 px-6">
                                <!-- Check -->
                                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12" />
                                </svg>
                                <!-- End Solid Check -->
                                <span class="sr-only">{{ __('Included in Enterprise') }}</span>
                            </td>
                        </tr>

                        <tr>
                            <th class="py-5 ps-6 pe-6 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                scope="row">Total circulation (beta)</th>

                            <td class="py-5 px-6">
                                <!-- Minus -->
                                <svg class="mx-auto shrink-0 size-5 text-gray-400 dark:text-neutral-600"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14" />
                                </svg>
                                <!-- Minus -->
                                <span class="sr-only">{{ __('Not included in Free') }}</span>
                            </td>

                            <td class="py-5 px-6">
                                <!-- Check -->
                                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12" />
                                </svg>
                                <!-- End Solid Check -->
                                <span class="sr-only">{{ __('Included in Startup') }}</span>
                            </td>

                            <td class="py-5 px-6">
                                <!-- Check -->
                                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12" />
                                </svg>
                                <!-- End Solid Check -->
                                <span class="sr-only">{{ __('Included in Team') }}</span>
                            </td>

                            <td class="py-5 px-6">
                                <!-- Check -->
                                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12" />
                                </svg>
                                <!-- End Solid Check -->
                                <span class="sr-only">{{ __('Included in Enterprise') }}</span>
                            </td>
                        </tr>

                        <tr>
                            <th class="py-5 ps-6 pe-6 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                scope="row">Velocity of tokens (beta)</th>

                            <td class="py-5 px-6">
                                <!-- Check -->
                                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12" />
                                </svg>
                                <!-- End Solid Check -->
                                <span class="sr-only">{{ __('Not included in Free') }}</span>
                            </td>

                            <td class="py-5 px-6">
                                <!-- Check -->
                                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12" />
                                </svg>
                                <!-- End Solid Check -->
                                <span class="sr-only">{{ __('Included in Startup') }}</span>
                            </td>

                            <td class="py-5 px-6">
                                <!-- Check -->
                                <svg class="mx-auto shrink-0 size-5 text-gray-400 dark:text-neutral-600"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14" />
                                </svg>
                                <!-- End Solid Check -->
                                <span class="sr-only">{{ __('Included in Team') }}</span>
                            </td>

                            <td class="py-5 px-6">
                                <!-- Check -->
                                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12" />
                                </svg>
                                <!-- End Solid Check -->
                                <span class="sr-only">{{ __('Included in Enterprise') }}</span>
                            </td>
                        </tr>

                        <tr>
                            <th class="py-5 ps-6 pe-6 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                scope="row">{{ __('ETH gas used') }}</th>

                            <td class="py-5 px-6">
                                <!-- Minus -->
                                <svg class="mx-auto shrink-0 size-5 text-gray-400 dark:text-neutral-600"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14" />
                                </svg>
                                <!-- Minus -->
                                <span class="sr-only">{{ __('Not included in Free') }}</span>
                            </td>

                            <td class="py-5 px-6">
                                <!-- Check -->
                                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12" />
                                </svg>
                                <!-- End Solid Check -->
                                <span class="sr-only">{{ __('Included in Startup') }}</span>
                            </td>

                            <td class="py-5 px-6">
                                <!-- Check -->
                                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12" />
                                </svg>
                                <!-- End Solid Check -->
                                <span class="sr-only">{{ __('Included in Team') }}</span>
                            </td>

                            <td class="py-5 px-6">
                                <!-- Check -->
                                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12" />
                                </svg>
                                <!-- End Solid Check -->
                                <span class="sr-only">{{ __('Included in Enterprise') }}</span>
                            </td>
                        </tr>

                        <tr>
                            <th class="py-3 ps-6 bg-gray-50 font-bold text-gray-800 text-start dark:bg-neutral-800 dark:text-white"
                                colspan="5" scope="colgroup">{{ __('Social data') }}</th>
                        </tr>

                        <tr>
                            <th class="py-5 ps-6 pe-6 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                scope="row">{{ __('Dev activity') }}</th>

                            <td class="py-5 px-6">
                                <!-- Minus -->
                                <svg class="mx-auto shrink-0 size-5 text-gray-400 dark:text-neutral-600"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14" />
                                </svg>
                                <!-- Minus -->
                                <span class="sr-only">{{ __('Included in Free') }}</span>
                            </td>

                            <td class="py-5 px-6">
                                <!-- Check -->
                                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12" />
                                </svg>
                                <!-- End Solid Check -->
                                <span class="sr-only">{{ __('Included in Startup') }}</span>
                            </td>

                            <td class="py-5 px-6">
                                <!-- Check -->
                                <svg class="mx-auto shrink-0 size-5 text-gray-400 dark:text-neutral-600"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14" />
                                </svg>
                                <!-- End Solid Check -->
                                <span class="sr-only">{{ __('Included in Team') }}</span>
                            </td>

                            <td class="py-5 px-6">
                                <!-- Check -->
                                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12" />
                                </svg>
                                <!-- End Solid Check -->
                                <span class="sr-only">{{ __('Included in Enterprise') }}</span>
                            </td>
                        </tr>

                        <tr>
                            <th class="py-5 ps-6 pe-6 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                scope="row">{{ __('Topic search') }}</th>

                            <td class="py-5 px-6">
                                <!-- Check -->
                                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12" />
                                </svg>
                                <!-- End Solid Check -->
                                <span class="sr-only">{{ __('Included in Free') }}</span>
                            </td>

                            <td class="py-5 px-6">
                                <!-- Check -->
                                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12" />
                                </svg>
                                <!-- End Solid Check -->
                                <span class="sr-only">{{ __('Included in Startup') }}</span>
                            </td>

                            <td class="py-5 px-6">
                                <!-- Check -->
                                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12" />
                                </svg>
                                <!-- End Solid Check -->
                                <span class="sr-only">{{ __('Included in Team') }}</span>
                            </td>

                            <td class="py-5 px-6">
                                <!-- Check -->
                                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12" />
                                </svg>
                                <!-- End Solid Check -->
                                <span class="sr-only">{{ __('Included in Enterprise') }}</span>
                            </td>
                        </tr>

                        <tr>
                            <th class="py-5 ps-6 pe-6 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                scope="row">{{ __('Relative social dominance') }}</th>

                            <td class="py-5 px-6">
                                <!-- Minus -->
                                <svg class="mx-auto shrink-0 size-5 text-gray-400 dark:text-neutral-600"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14" />
                                </svg>
                                <!-- Minus -->
                                <span class="sr-only">{{ __('Included in Free') }}</span>
                            </td>

                            <td class="py-5 px-6">
                                <!-- Minus -->
                                <svg class="mx-auto shrink-0 size-5 text-gray-400 dark:text-neutral-600"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14" />
                                </svg>
                                <!-- Minus -->
                                <span class="sr-only">{{ __('Included in Startup') }}</span>
                            </td>

                            <td class="py-5 px-6">
                                <!-- Minus -->
                                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12" />
                                </svg>
                                <!-- Minus -->
                                <span class="sr-only">{{ __('Included in Team') }}</span>
                            </td>

                            <td class="py-5 px-6">
                                <!-- Minus -->
                                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12" />
                                </svg>
                                <!-- Minus -->
                                <span class="sr-only">{{ __('Included in Enterprise') }}</span>
                            </td>
                        </tr>

                        <tr>
                            <th class="py-5 ps-6 pe-6 text-sm font-normal text-gray-600 text-start whitespace-nowrap dark:text-neutral-400"
                                scope="row">{{ __('Relative social dominance') }}</th>

                            <td class="py-5 px-6">
                                <!-- Check -->
                                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12" />
                                </svg>
                                <!-- End Solid Check -->
                                <span class="sr-only">{{ __('Included in Free') }}</span>
                            </td>

                            <td class="py-5 px-6">
                                <!-- Check -->
                                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12" />
                                </svg>
                                <!-- End Solid Check -->
                                <span class="sr-only">{{ __('Included in Startup') }}</span>
                            </td>

                            <td class="py-5 px-6">
                                <!-- Check -->
                                <svg class="mx-auto shrink-0 size-5 text-gray-400 dark:text-neutral-600"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14" />
                                </svg>
                                <!-- End Solid Check -->
                                <span class="sr-only">{{ __('Included in Team') }}</span>
                            </td>

                            <td class="py-5 px-6">
                                <!-- Check -->
                                <svg class="mx-auto shrink-0 size-5 text-blue-600 dark:text-blue-500"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12" />
                                </svg>
                                <!-- End Solid Check -->
                                <span class="sr-only">{{ __('Included in Enterprise') }}</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- End lg+ -->
        </div>
        <!-- End Comparison table -->
    </div>
    <!-- End Pricing -->
    <div>
        {{ __('Hello world added one') }}
    </div>

    <div>
        {{ __('testing webhooks') }}
    </div>

</body>

</html>
