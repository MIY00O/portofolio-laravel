<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="flex flex-col mt-20">
        <div class="mb-32">
            <article>
                <h1 class="text-3xl mb-4">About Me</h1>
                <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">Personal details.
                <div class="max-w-screen-sm">
                    <div>
                        <div class="px-4 sm:px-0">
                            </p>
                        </div>
                        <div class="mt-6 border-t border-gray-100">
                            <dl class="divide-y divide-gray-100">
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-sm font-medium leading-6 text-gray-900">Full name</dt>
                                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">Damar Juliano
                                        Justin
                                    </dd>
                                </div>
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-sm font-medium leading-6 text-gray-900">Email address</dt>
                                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                        damarjulijustin@example.com</dd>
                                </div>
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-sm font-medium leading-6 text-gray-900">Github</dt>
                                    <a href="https://github.com/MIY00O/"
                                        class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">github</a>
                                </div>
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-sm font-medium leading-6 text-gray-900">About</dt>
                                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">I'm student
                                        in SMK N 2 KARANGANYAR</dd>
                                </div>
                            </dl>
                        </div>
                    </div>

                </div>
            </article>
        </div>
    </div>
</x-layout>
