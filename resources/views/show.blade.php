@extends('layouts.main')
@section('content')
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <img src="https://images-na.ssl-images-amazon.com/images/S/pv-target-images/fb4358b042adbf87a337f58bfc44ca6516388f7d6ed9c69f174cc71e473dab08._RI_V_TTW_.jpg"
                alt="Parasite" class="w-64 md:w-96">

            <div class="md:ml-24">
                <h2 class="text-4xl font-semibold">Parasite</h2>

                <div class="flex flex-wrap items-center text-gray-400 text-sm ">
                    <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                        <g data-name="Layer 2">
                            <path
                                d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z"
                                data-name="star" />
                        </g>
                    </svg>

                    <span class="ml-1">85%</span>
                    <span class="mx-2">|</span>
                    <span> Feb 20, 2020</span>
                    <span class="mx-2">|</span>
                    <span class="m2-2">Action, Thriller, Comedy</span>
                </div>

                <p class="text-gray-300 mt-8">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, sunt at? Pariatur, aliquam atque.
                    Perspiciatis, nihil, laudantium illum illo voluptatem mollitia totam quibusdam saepe nostrum repellendus
                    natus voluptatum aperiam quod.
                </p>

                <div class="mt-12">
                    <h4 class="text-white font-semibold">Featured Cast</h4>

                    <div class="flex mt-4">
                        <div>
                            <div>Bong Joon-ho</div>
                            <div class="text-sm text-gray-400">
                                Screenplay, Director, Story
                            </div>
                        </div>
                        <div class="ml-8">
                            <div>Bong Joon-ho</div>
                            <div class="text-sm text-gray-400">
                                Screenplay, Director, Story
                            </div>
                        </div>
                    </div>

                    <div class=" mt-12">
                        <button
                            class="flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-orange-600 transition ease duration-150">
                            <svg class="w-6 fill-current" viewBox="0 0 24 24">
                                <path d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M10 16.5l6-4.5-6-4.5v9zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z" />
                            </svg>
                            <span class="ml-2">Play Trailer</span>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Cast</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-16 justify-center">







                <div class="mt-8">
                    <a href="#">
                        <img src="http://t1.gstatic.com/licensed-image?q=tbn:ANd9GcQfDAmIFWkgkMlQv5_qSIAliam_LgMtX3G8c4TTvrRbcfACtkdPh_JPX5TSEcxt"
                            alt="Actor" class="hover:opacity-75 transition ease duration-2">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Parasite</a>

                        <div class="flex items-center text-gray-400 text-sm mt-1">

                            <span> John Smith</span>
                        </div>


                    </div>
                </div>



                <div class="mt-8">
                    <a href="#">
                        <img src="http://t1.gstatic.com/licensed-image?q=tbn:ANd9GcQfDAmIFWkgkMlQv5_qSIAliam_LgMtX3G8c4TTvrRbcfACtkdPh_JPX5TSEcxt"
                            alt="Actor" class="hover:opacity-75 transition ease duration-2">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Parasite</a>

                        <div class="flex items-center text-gray-400 text-sm mt-1">

                            <span> John Smith</span>
                        </div>


                    </div>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="http://t1.gstatic.com/licensed-image?q=tbn:ANd9GcQfDAmIFWkgkMlQv5_qSIAliam_LgMtX3G8c4TTvrRbcfACtkdPh_JPX5TSEcxt"
                            alt="Actor" class="hover:opacity-75 transition ease duration-2">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Parasite</a>

                        <div class="flex items-center text-gray-400 text-sm mt-1">

                            <span> John Smith</span>
                        </div>


                    </div>
                </div>


                <div class="mt-8">
                    <a href="#">
                        <img src="http://t1.gstatic.com/licensed-image?q=tbn:ANd9GcQfDAmIFWkgkMlQv5_qSIAliam_LgMtX3G8c4TTvrRbcfACtkdPh_JPX5TSEcxt"
                            alt="Actor" class="hover:opacity-75 transition ease duration-2">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Parasite</a>

                        <div class="flex items-center text-gray-400 text-sm mt-1">

                            <span> John Smith</span>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="image-movie border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Images</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-16 justify-center">







                <div class="mt-8">
                    <a href="#">
                        <img src="https://ogimg.infoglobo.com.br/in/24241246-844-e12/FT1086A/x25106a9c09.jpg,qposicaoFoto1.pagespeed.ic.9ie0fy3tEU.jpg"
                            alt="" class="hover:opacity-75 transition ease duration-2">
                    </a>

                </div>



                <div class="mt-8">
                    <a href="#">
                        <img src="https://cdn.culturagenial.com/imagens/parasita-final-0-cke.jpg" alt="Actor"
                            class="hover:opacity-75 transition ease duration-2">
                    </a>

                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="https://cdn.culturagenial.com/imagens/parasita-final-0-cke.jpg" alt="Actor"
                            class="hover:opacity-75 transition ease duration-2">
                    </a>


                </div>


                <div class="mt-8">
                    <a href="#">
                        <img src="https://cdn.culturagenial.com/imagens/parasita-final-0-cke.jpg" alt="Actor"
                            class="hover:opacity-75 transition ease duration-2">
                    </a>

                </div>
            </div>
        </div>
    </div>
@endsection
