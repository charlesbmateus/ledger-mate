<x-app-layout>
        <div class="mx-auto">
            <div class="bg-white overflow-hidden shadow-xl">
                <div class="flex mt-16">
                    <x-sidebar />
                    <div class="">
                        <main>
                            <div class="mx-5 mt-5 mb-5 grid grid-cols-1 gap-4 md:grid-cols-2 md:gap-6 xl:grid-cols-4 2xl:gap-7.5">
                                <x-cards class="col-span-4 md:col-span-1 xl:col-span-1 rounded-sm border border-stroke bg-white px-7.5 py-6 shadow-default dark:border-strokedark dark:bg-boxdark" />
                                <x-cards class="col-span-4 md:col-span-1 xl:col-span-1 rounded-sm border border-stroke bg-white px-7.5 py-6 shadow-default dark:border-strokedark dark:bg-boxdark" />
                                <x-cards class="col-span-4 md:col-span-1 xl:col-span-1 rounded-sm border border-stroke bg-white px-7.5 py-6 shadow-default dark:border-strokedark dark:bg-boxdark" />
                                <x-cards class="col-span-4 md:col-span-1 xl:col-span-1 rounded-sm border border-stroke bg-white px-7.5 py-6 shadow-default dark:border-strokedark dark:bg-boxdark" />
                            </div>
                            <div class="mx-5 mt-5 grid grid-cols-12 gap-4">
                                <div class="col-span-12 xl:col-span-8">
                                    <x-chart />
                                </div>
                                <div class="col-span-12 xl:col-span-4">
                                    <x-stats />
                                </div>
                                <div class="col-span-12 xl:col-span-3">
                                    <x-traffic />
                                </div>
                            </div>
    {{--                        <x-welcome />--}}
                        </main>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
