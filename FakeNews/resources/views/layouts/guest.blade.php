

        <x-layout>

        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
            <div>
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div>

            <div class="w-full sm:max-w-md textColor mt-6 px-6 py-4 shadow-md back-color dark:bg-gray-200 overflow-hidden sm:rounded-lg" style="border: 1px solid black">
                {{ $slot }}
            </div>
        </div>

        </x-layout>
