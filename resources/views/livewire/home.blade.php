<div class="w-full h-full">
    <div class="bg-white dark:bg-black w-full py-12 flex flex-col justify-center items-center" id="inicio">
        <div class="container mx-auto">
            <x-header />
            <div
                class="flex flex-row justify-between md:flex-col max-sm:flex-col-reverse sm:flex-col lg:flex-row items-center w-full py-5 md:pt-16 sm:pt-20">
                <div
                    class="w-[30%] max-sm:w-[80%] sm:w-full sm:text-center lg:w-[30%] lg:text-start md:w-[80%] md:text-center dark:text-white text-rick-bg-card-color space-y-10">
                    <h1 class="text-6xl max-sm:text-4xl font-bold max-sm:pt-5">
                        Saiba tudo em um só <span class="text-rick-text-color">lugar.</span>
                    </h1>
                    <p>Personagens, localizações, episódios e muito mais.
                    </p>

                    <div class="flex flex-row gap-2 pt-10 md:justify-center sm:justify-center lg:justify-start">
                        <button type="button" id="themeToggleDark"
                            class=" dark:bg-rick-text-color bg-gray-200 text-rick-bg-card-color  px-3 py-2 rounded-full dark:text-white">
                            <div class="flex flex-row gap-2 text-center">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M21.7622 13.4662C21.6899 13.3941 21.5994 13.343 21.5003 13.3184C21.4012 13.2938 21.2973 13.2966 21.1997 13.3266C19.7372 13.7686 18.1821 13.8055 16.7002 13.4335C15.2184 13.0614 13.8652 12.2942 12.785 11.2137C11.7048 10.1332 10.938 8.77982 10.5663 7.29785C10.1946 5.81589 10.2319 4.26084 10.6744 2.79843C10.7039 2.70091 10.7064 2.59719 10.6816 2.49836C10.6568 2.39952 10.6056 2.30928 10.5335 2.23727C10.4614 2.16526 10.3711 2.1142 10.2723 2.08952C10.1734 2.06485 10.0697 2.0675 9.97219 2.09718C8.03303 2.69211 6.33078 3.88326 5.1075 5.50124C3.72081 7.34258 3.04592 9.62285 3.20705 11.9223C3.36819 14.2217 4.35451 16.3856 5.98445 18.0155C7.61439 19.6455 9.77825 20.6318 12.0777 20.7929C14.3771 20.9541 16.6574 20.2792 18.4988 18.8925C20.1167 17.6692 21.3079 15.967 21.9028 14.0278C21.9325 13.9302 21.9351 13.8265 21.9103 13.7275C21.8855 13.6286 21.8343 13.5383 21.7622 13.4662ZM17.8247 17.9934C16.1999 19.2121 14.19 19.8037 12.1641 19.6597C10.1381 19.5157 8.23214 18.6458 6.79598 17.2096C5.35982 15.7735 4.4899 13.8675 4.34592 11.8416C4.20194 9.81563 4.79357 7.80576 6.01219 6.18093C6.88018 5.03008 8.0259 4.1182 9.34219 3.53062C9.06507 5.05276 9.1612 6.61941 9.62234 8.09625C10.0835 9.5731 10.8959 10.9161 11.9899 12.0101C13.0839 13.1041 14.4269 13.9165 15.9037 14.3777C17.3806 14.8388 18.9472 14.9349 20.4694 14.6578C19.8834 15.9758 18.9725 17.1235 17.8219 17.9934H17.8247Z"
                                        class="fill-rick-bg-card-color dark:fill-white" />
                                </svg>
                                Escuro
                            </div>
                        </button>
                        <button type="button" id="themeToggleLight"
                            class="bg-rick-text-color dark:bg-white dark:bg-opacity-20 px-3 py-2 rounded-full text-white">
                            <div class="flex flex-row gap-2 text-center">
                                <img src="{{ asset('images/sun-icon.svg') }}" alt="">
                                Claro
                            </div>
                        </button>
                    </div>
                    <p class="text-rick-text-color">Ai sim, Porr#@%&*</p>
                </div>
                <div class="px-28">
                    <img src="{{ asset('images/rick-landing-dark.svg') }}" alt=""
                        class="max-h-[500px] dark:flex hidden">
                    <img src="{{ asset('images/rick-and-morty.svg') }}" alt="" class="dark:hidden flex">
                </div>
            </div>
        </div>
    </div>
    <div class="w-full h-0.5 bg-rick-text-color dark:hidden">

    </div>
    <div class="bg-white dark:bg-rick-bg-gray-color w-full py-12 flex flex-col justify-center items-center">
        <div class="container mx-auto">
            <div
                class="flex flex-row justify-between md:flex-col md:gap-3 sm:flex-col sm:gap-3 lg:flex-row max-sm:flex-col max-sm:gap-5 items-center w-full ">
                <div class="bg-white dark:bg-rick-bg-gray-color-2 rounded-full px-3 flex flex-row gap-2">
                    <input type="text"
                        class="bg-white dark:bg-rick-bg-gray-color-2 py-2 w-80 focus:outline-none dark:text-white"
                        placeholder="Personagens, episódios ou localizações" />
                    <a href="">
                        <img src="{{ asset('images/search-icon.svg') }}" alt="">
                    </a>
                </div>

                <div class="flex flex-row max-sm:flex-col gap-3 text-center items-center ">
                    <h1 class="text-lg text-white text-opacity-40 md:hidden sm:hidden max-sm:hidden lg:flex">Filtrar
                        por:</h1>
                    <a href="#personagens" wire:click="setActive('personagens')"
                        class="{{ $active === 'personagens' ? 'bg-rick-text-color' : 'bg-white bg-opacity-20' }} px-3 py-2 rounded-full text-white">
                        <div class="flex flex-row gap-2 text-center">
                            <img src="{{ asset('images/person-icon.svg') }}" alt="" />
                            Personagens
                        </div>
                    </a>
                    <a href="#episodio" wire:click="setActive('episodio')"
                        class="{{ $active === 'episodio' ? 'bg-rick-text-color' : 'bg-white bg-opacity-20' }} px-3 py-2 rounded-full text-white">
                        <div class="flex flex-row gap-2 text-center">
                            <img src="{{ asset('images/episode-icon.svg') }}" alt="" />
                            Episódio
                        </div>
                    </a>
                    <a href="#localizacao" wire:click="setActive('localizacao')"
                        class="{{ $active === 'localizacao' ? 'bg-rick-text-color' : 'bg-white bg-opacity-20' }} px-3 py-2 rounded-full text-white">
                        <div class="flex flex-row gap-2 text-center">
                            <img src="{{ asset('images/localization-icon.svg') }}" alt="" />
                            Localização
                        </div>
                    </a>
                </div>
            </div>

            {{--  PERSONAGENS --}}
            <div class="flex flex-col max-sm:px-5">
                <div class="flex flex-row pt-10 gap-3" id="personagens">
                    <h1 class="text-3xl text-white font-bold">Personagens</h1>
                    <a href="" class=" bg-white bg-opacity-20 px-3 py-2 rounded-full text-white">
                        <div class="flex flex-row gap-2 text-center">
                            <img src="{{ asset('images/see-all-icon.svg') }}" alt="" />
                            Ver todos
                        </div>
                    </a>
                </div>
                <div
                    class="grid grid-cols-5 gap-3 pt-5 2xl:grid-cols-5 xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-2 max-sm:grid-cols-1">
                    @foreach ($characters->results as $character)
                        <div class="bg-rick-bg-card-color text-white  rounded-lg">
                            <img src="{{ url($character->image) }}" alt="" class="p-2 w-full rounded-lg">
                            <div class="p-3 flex flex-row justify-between">
                                <div class="flex flex-col gap-1 w-full">
                                    <div class="max-w-56">
                                        <h1 class="text-xl font-bold pb-2 truncate text-ellipsis">
                                            {{ $character->name }}
                                        </h1>
                                    </div>
                                    <div class="inline-flex gap-2">
                                        <img src="{{ asset('images/alive-icon.svg') }}" alt="">
                                        <p class="">
                                            {{ $character->status }}
                                        </p>
                                    </div>
                                    <div class="inline-flex gap-2">
                                        <img src="{{ asset('images/human-icon.svg') }}" alt="">
                                        <p class="">
                                            {{ $character->species }}
                                        </p>
                                    </div>
                                    <div class="inline-flex gap-2">
                                        <img src="{{ asset('images/planet-icon.svg') }}" alt="">
                                        <div class="max-w-56">
                                            <p class="truncate text-ellipsis">
                                                {{ $character->origin->name }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <img src="{{ asset('images/favorite-icon.svg') }}" alt="">
                                </div>
                            </div>
                            <div class="flex flex-row justify-end w-full gap-2 p-4 ">
                                <img src="{{ asset('images/know-more-icon.svg') }}" alt="">
                                <p>Saiba mais</p>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
            {{-- END PERSONAGENS --}}

            {{--  EPISODIOS --}}
            <div class="flex flex-col py-5 max-sm:px-5">
                <div class="flex flex-row pt-10 gap-3" id="episodio">
                    <h1 class="text-3xl text-white font-bold">Episódios</h1>
                    <a href="" class=" bg-white bg-opacity-20 px-3 py-2 rounded-full text-white">
                        <div class="flex flex-row gap-2 text-center">
                            <img src="{{ asset('images/see-all-icon.svg') }}" alt="">
                            Ver todos
                        </div>
                    </a>
                </div>

                <div
                    class="grid grid-cols-5 gap-3 pt-5 2xl:grid-cols-5 xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-2 max-sm:grid-cols-1 ">
                    @foreach ($episodes->results as $episode)
                        <div class="bg-black text-white  rounded-lg p-3">
                            <div class="flex flex-row items-center gap-2">
                                <img src="{{ asset('images/episode-icon-card.svg') }}" alt=""
                                    class="">
                                <div class="max-w-56">

                                    <h1 class="truncate text-ellipsis">{{ $episode->name }} | {{ $episode->episode }}
                                    </h1>
                                </div>
                            </div>
                            <div class="flex flex-row justify-between pt-5">
                                <a href="" class="bg-white bg-opacity-20 px-3 py-1 rounded-full text-white">
                                    <div class="flex flex-row gap-2 text-center">
                                        <img src="{{ asset('images/know-more-icon.svg') }}" alt="">
                                        Saiba mais
                                    </div>
                                </a>
                                <img src="{{ asset('images/no-favorite-heart-icon.svg') }}" alt="">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            {{-- END EPISODIOS --}}

            {{--  LOCALIZAÇÕES --}}
            <div class="flex flex-col max-sm:px-5">
                <div class="flex flex-row pt-10 gap-3" id="localizacao">
                    <h1 class="text-3xl text-white font-bold">Localizações</h1>
                    <a href="" class=" bg-white bg-opacity-20 px-3 py-2 rounded-full text-white">
                        <div class="flex flex-row gap-2 text-center">
                            <img src="{{ asset('images/see-all-icon.svg') }}" alt="">
                            Ver todos
                        </div>
                    </a>
                </div>

                <div
                    class="grid grid-cols-8 gap-3 pt-5 2xl:grid-cols-8 xl:grid-cols-6 lg:grid-cols-5 md:grid-cols-4 sm:grid-cols-3 max-sm:grid-cols-2">
                    @foreach ($locations->results as $location)
                        <div class=" text-white text-center p-3">
                            <div class="flex flex-col items-center gap-2 mb-[-15px]">
                                <img src="{{ asset('images/planet-icon-card.svg') }}" alt="">
                            </div>
                            <div class="flex rounded-lg bg-black flex-row justify-center pt-5 pb-2">
                                <div class="flex flex-col gap-3">
                                    <h1>{{ $location->type }}</h1>
                                    <div class="max-w-32">

                                        <h1 class="text-rick-text-color truncate text-ellipsis">{{ $location->name }}
                                        </h1>
                                    </div>
                                    <a href=""
                                        class="bg-white bg-opacity-20 px-3 py-1 rounded-full text-white">
                                        <div class="flex flex-row gap-2 text-center">
                                            <img src="{{ asset('images/know-more-icon.svg') }}" alt="">
                                            Saiba mais
                                        </div>
                                    </a>
                                    <img src="{{ asset('images/small-heart-icon.svg') }}" alt=""
                                        class="max-h-10">
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            {{-- END LOCALIZAÇÕES --}}


            <div class="flex flex-row max-sm:flex-col-reverse justify-between items-center w-full py-10">
                <img src="{{ asset('images/rick-and-morty-logo.svg') }}" alt="" class="max-h-14">
                <a href="#inicio" class=" px-3 py-1 rounded-full text-white max-sm:pb-10">
                    <div class="flex flex-row gap-2 text-center items-center text-lg">
                        Voltar ao topo
                        <img src="{{ asset('images/arrow-up-icon.svg') }}" alt="" class="h-12">
                    </div>
                </a>
            </div>

            <div class="h-0.5 w-full bg-white max-sm:px-5">
            </div>

            <div class="flex flex-row max-sm:flex-col justify-between items-center w-full text-white pt-10">
                <p>&copy; 2024</p>
                <div class="flex flex-row gap-2 items-center">
                    <img src="{{ asset('images/code-icon.svg') }}" alt="">
                    <p>Developed by <span class="font-bold text-rick-text-color">Ackalantys Dev</span></p>
                </div>
            </div>
        </div>
    </div>
