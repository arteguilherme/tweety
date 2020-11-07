@extends('layouts.app')

@section('content')
<div class="flex justify-center mb-4">
    <div class="md:w-1/6">
        <ul class="">
            <li class="flex">
                <a href="#" class="my-1 font-bold py-2 text-base leading-6 font-medium rounded-md text-indigo-700 hover:text-white text-decoration-none align-content-center justify-content-start hover:bg-indigo-600 focus:outline-none focus:shadow-outline-indigo focus:border-indigo-300 transition duration-150 ease-in-out md:py-2 md:text-lg md:px-5">
                    <i class="fas fa-home"></i> Home
                </a>
            </li>
            <li class="flex">
                <a href="#" class="my-1 font-bold py-2 text-base leading-6 font-medium rounded-md text-indigo-700 hover:text-white text-decoration-none align-content-center justify-content-start hover:bg-indigo-600 focus:outline-none focus:shadow-outline-indigo focus:border-indigo-300 transition duration-150 ease-in-out md:py-2 md:text-lg md:px-5">
                    <i class="fab fa-slack-hash"></i> Explore
                </a>
            </li>
            <li class="flex">
                <a href="#" class="my-1 font-bold py-2 text-base leading-6 font-medium rounded-md text-indigo-700 hover:text-white text-decoration-none align-content-center justify-content-start hover:bg-indigo-600 focus:outline-none focus:shadow-outline-indigo focus:border-indigo-300 transition duration-150 ease-in-out md:py-2 md:text-lg md:px-5">
                    <i class="fas fa-bell"></i> Notification
                </a>
            </li>
            <li class="flex">
                <a href="#" class="my-1 font-bold py-2 text-base leading-6 font-medium rounded-md text-indigo-700 hover:text-white text-decoration-none align-content-center justify-content-start hover:bg-indigo-600 focus:outline-none focus:shadow-outline-indigo focus:border-indigo-300 transition duration-150 ease-in-out md:py-2 md:text-lg md:px-5">
                    <i class="fas fa-envelope"></i> Messages
                </a>
            </li>
            <li class="flex">
                <a href="#" class="my-1 font-bold py-2 text-base leading-6 font-medium rounded-md text-indigo-700 hover:text-white text-decoration-none align-content-center justify-content-start hover:bg-indigo-600 focus:outline-none focus:shadow-outline-indigo focus:border-indigo-300 transition duration-150 ease-in-out md:py-2 md:text-lg md:px-5">
                    <i class="fas fa-bookmark"></i> Bookmarks
                </a>
            </li>
            <li class="flex">
                <a href="#" class="my-1 font-bold py-2 text-base leading-6 font-medium rounded-md text-indigo-700 hover:text-white text-decoration-none align-content-center justify-content-start hover:bg-indigo-600 focus:outline-none focus:shadow-outline-indigo focus:border-indigo-300 transition duration-150 ease-in-out md:py-2 md:text-lg md:px-5">
                    <i class="fas fa-list-alt"></i> Lists
                </a>
            </li>
            <li class="flex">
                <a href="#" class="my-1 font-bold py-2 text-base leading-6 font-medium rounded-md text-indigo-700 hover:text-white text-decoration-none align-content-center justify-content-start hover:bg-indigo-600 focus:outline-none focus:shadow-outline-indigo focus:border-indigo-300 transition duration-150 ease-in-out md:py-2 md:text-lg md:px-5">
                    <i class="fas fa-user"></i> Profile
                </a>
            </li>
            <li class="flex">
                <a href="#" class="my-1 font-bold py-2 text-base leading-6 font-medium rounded-md text-indigo-700 hover:text-white text-decoration-none align-content-center justify-content-start hover:bg-indigo-600 focus:outline-none focus:shadow-outline-indigo focus:border-indigo-300 transition duration-150 ease-in-out md:py-2 md:text-lg md:px-5">
                    <i class="fas fa-align-left"></i> More
                </a>
            </li>
        </ul>
        <div class="mt-3 rounded-md shadow">
            <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base text-decoration-none leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo transition duration-150 ease-in-out md:py-3 md:text-lg md:px-10">
                Tweet-a-row!
            </a>
        </div>
    </div>
    <div class="md:w-1/2 md:mx-4">
        <div class="border border-indigo-500 rounded-md px-2 mb-4">
            <textarea
                class="w-full focus:outline-none p-3"
                name="body"
                id="body"
                placeholder="What's up doc?"
                rows="3"></textarea>
            <hr>
            <div class="flex justify-between items-center my-3">
                <div class="">
                    <img class="rounded-full mr-2" src="https://i.pravatar.cc/50?u=fake@pravatar.com" alt="">
                </div>
                <div class="rounded-md shadow">
                    <a href="#" class="w-full flex items-center justify-center px-4 py-3 border border-transparent text-base text-decoration-none leading-6 rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo transition duration-150 ease-in-out md:py-2 md:text-lg md:px-5">
                        Tweet-a-row!
                    </a>
                </div>
            </div>
        </div>
        <div class="">
            <ul class=" border border-gray-300 rounded-md mt-4">
                <li class="flex p-4 border-b border-b-gray-300">
                    <div class="mr- flex-shrink-0">
                        <img class="rounded-full mr-2" src="https://i.pravatar.cc/40?u=fake@pravatar.com" alt="">
                    </div>
                    <div class="">
                        <div class="flex">
                            <h5 class="font-bold mb-4 mt-2">Guilherme Camilo Almeida</h5>
                            <span class="text-gray-600 text-xs items-bottom font-semibold tracking-wide ml-2 mt-2">1h ago</span>
                        </div>
                        <p class="text-sm mb-4">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a commodo neque. Fusce id cursus nisi. Nam interdum turpis ut sapien volutpat convallis. Vestibulum ac eros diam.
                        </p>
                        <img class="h-48 w-full object-cover mt-4 mb-4 rounded-md" src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__340.jpg" alt="">
                        <div class="flex">
                            <button type="submit" class="rounded-full py-2 px-4 bg-blue-300 hover:bg-blue-400 text-blue-700 mr-2 transition duration-150 ease-in-out"><i class="fas fa-thumbs-up"></i> 8</button>
                            <button type="submit" class="rounded-full py-2 px-4 bg-gray-300 hover:bg-gray-400 text-gray-700 transition duration-150 ease-in-out"><i class="fas fa-thumbs-down"></i> 10</button>
                        </div>
                    </div>
                </li>
                <li class="flex p-4 border-b border-b-gray-300">
                    <div class="mr- flex-shrink-0">
                        <img class="rounded-full mr-2" src="https://i.pravatar.cc/40?u=fake@pravatar.com" alt="">
                    </div>
                    <div class="">
                        <div class="flex">
                            <h5 class="font-bold mb-4 mt-2">Guilherme Camilo Almeida</h5>
                            <span class="text-gray-600 text-xs items-bottom font-semibold tracking-wide ml-2 mt-2">1h ago</span>
                        </div>
                        <p class="text-sm mb-4">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a commodo neque. Fusce id cursus nisi. Nam interdum turpis ut sapien volutpat convallis. Vestibulum ac eros diam.
                        </p>
                        <div class="flex">
                            <button type="submit" class="rounded-full py-2 px-4 bg-gray-300 hover:bg-gray-400 text-gray-700 mr-2 transition duration-150 ease-in-out"><i class="fas fa-thumbs-up"></i> 8</button>
                            <button type="submit" class="rounded-full py-2 px-4 bg-red-300 hover:bg-red-400 text-red-700 transition duration-150 ease-in-out"><i class="fas fa-thumbs-down"></i> 10</button>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="md:w-1/4">
        <div class="p-4 bg-gray-200 rounded-md">
            <h2 class="font-bold text-gray-800 text-2xl mb-4">Friends</h2>
            <ul>
                <li class="flex my-1">
                    <a href="" class="flex items-center text-decoration-none leading-6 w-full rounded-md hover:bg-gray-300 focus:outline-none focus:border-gray-200 focus:shadow-outline-gray transition duration-150 ease-in-out md:py-2 md:text-lg md:px-4 text-gray-900 hover:text-gray-900">
                        <img class="rounded-full mr-2" src="https://i.pravatar.cc/50?u=fake@pravatar.com" alt="">
                        <h3 class="text-base">Guilherme Camilo Almeida</h3>
                    </a>
                </li>
                <li class="flex my-1">
                    <a href="" class="flex items-center text-decoration-none leading-6 w-full rounded-md hover:bg-gray-300 focus:outline-none focus:border-gray-200 focus:shadow-outline-gray transition duration-150 ease-in-out md:py-2 md:text-lg md:px-4 text-gray-900 hover:text-gray-900">
                        <img class="rounded-full mr-2" src="https://i.pravatar.cc/50?u=fake@pravatar.com" alt="">
                        <h3 class="text-base">Guilherme Camilo</h3>
                    </a>
                </li>
            </ul>

        </div>
    </div>
</div>
@endsection

