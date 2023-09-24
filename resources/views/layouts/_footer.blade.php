
<div class="bg-gray-900 text-white mt-14 lg:mt-40">
    <div class="container mx-auto pt-7 pb-8 lg:pt-20 lg:px-16">
        <div class="mx-4 md:mx-0">
            <div class="flex flex-col pb-8 mb-8 border-b lg:pb-16 border-gray-800 lg:flex-row">
                <div class="w-full mb-6 lg:w-2/5 lg:pr-20 lg:mb-0">
                    <img loading="lazy" src="{{ asset('images/archlinux.svg') }}" alt="{{ config('app.name') }}" width="78" height="78" class="block mb-5" />

                    <p class="text-gray-100 lg:leading-loose">
                        The ArchGeek Portal  for problem solving, knowledge sharing and community building related to ArchLinux.
                    </p>
                </div>

                <div class="lg:w-full lg:flex lg:justify-between">
                    <div class="grow mb-6 lg:mb-0">
                        <p class="text-lg mb-4 lg:mb-6">
                            ArchGeek
                        </p>

                        <div class="flex flex-wrap lg:flex-col lg:flex-no-wrap">
                            <a href="{{ route('forum') }}" class="w-1/2 text-gray-400 mb-4 hover:text-gray-200 lg:mb-6">
                                Forum
                            </a>

                            <a href="{{ route('articles') }}" class="w-1/2 text-gray-400 mb-4 hover:text-gray-200 lg:mb-6">
                                Articles
                            </a>

                            <a href="https://paste.laravel.io" class="w-1/2 text-gray-400 mb-4 hover:text-gray-200 lg:mb-6">
                                Pastebin
                            </a>
                        </div>
                    </div>

                    <div class="grow mb-6 lg:mb-0">
                        <p class="text-lg mb-4 lg:mb-6">
                            Socials
                        </p>

                        <div class="flex flex-wrap lg:flex-col lg:flex-no-wrap">
                            <a href="https://github.com/archlinux" class="w-1/2 text-gray-400 mb-4 hover:text-gray-200 lg:mb-6">
                                <x-icon-github class="text-white w-4 h-4 inline mr-3.5"/>
                                GitHub
                            </a>
                            <a href="https://gitlab.com/archlinux" class="w-1/2 text-gray-400 mb-4 hover:text-gray-200 lg:mb-6">
                                <img loading="lazy" src="{{ asset('images/gitlab.png') }}" alt="Laravel" class="w-4 h-4 inline mr-3.5" />
                                Gitlab
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="text-gray-100 flex flex-col lg:flex-row">
                <span class="mb-5 lg:mb-0 lg:mr-5">
                    &copy; {{ date('Y') }} ArchGeek - All rights reserved.
                </span>
            </div>
        </div>
    </div>
</div>
