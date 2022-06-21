<x-app-layout>
    <div>
        <a href="/" class="flex items-center font-semibold hover:underline">
            <svg
                class="h-4 w-4"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="2"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M15 19l-7-7 7-7"
                />
            </svg>
            <span class="ml-2">All ideas</span>
        </a>
    </div>

    <div class="idea-container bg-white rounded-xl flex mt-4">
        <div class="px-4 py-6">
            <div class="flex-none">
                <a href="#">
                    <img
                        src="https://source.unsplash.com/200x200/?face&crop=face&v=1"
                        alt="avatar"
                        class="w-20 h-auto rounded-xl"
                    />
                </a>
            </div>
        </div>
        <div class="w-full mx-4 py-6">
            <h4 class="text-xl font-semibold">
                <a href="#" class="hover:underline"
                    >A random title can go here
                </a>
            </h4>
            <div class="text-gray-600 mt-3">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum
                corporis ipsam, inventore iure vel dolor debitis delectus eius
                dolorem maiores esse, nostrum officia autem hic explicabo ad
                est! Saepe a cum debitis dolorum perspiciatis, ducimus quia,
                mollitia laborum quam possimus ipsum iste, nesciunt ab commodi
                maxime aspernatur adipisci culpa est expedita id ea libero.
                Tempore, repellendus blanditiis. Cupiditate, veniam quod?
            </div>
            <div class="flex items-center justify-between mt-6">
                <div
                    class="flex items-center text-xs text-gray-400 font-semibold space-x-2"
                >
                    <div class="font-semibold text-gray-900">John Doe</div>
                    <div>&bull;</div>
                    <div>10 hours ago</div>
                    <div>&bull;</div>
                    <div>Category 1</div>
                    <div>&bull;</div>
                    <div class="text-gray-900">3 Comments</div>
                </div>
                <div class="flex items-center space-x-2">
                    <div
                        class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4"
                    >
                        Open
                    </div>
                    <button
                        class="relative bg-gray-100 border hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2 px-3"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="16"
                            height="16"
                            fill="currentColor"
                            style="color: rgba(163, 163, 163, 0.5)"
                            class="bi bi-three-dots"
                            viewBox="0 0 16 16"
                        >
                            <path
                                d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"
                            />
                        </svg>
                        <ul
                            class="hidden w-44 text-left font-semibold bg-white shadow-dialogue rounded-xl py-3 ml-4"
                        >
                            <li>
                                <a
                                    href="#"
                                    class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in"
                                    >Mark as Spam</a
                                >
                            </li>
                            <li>
                                <a
                                    href="#"
                                    class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in"
                                    >Delete Post</a
                                >
                            </li>
                        </ul>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!------ end idea container ------->

    <div class="buttons-container flex items-center justify-between mt-5">
        <div class="flex items-center space-x-4 ml-6">
            <button
                type="button"
                class="flex items-center justify-center h-11 w-32 text-xs bg-blue text-white font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3"
            >
                <span class="ml-1">Reply</span>
            </button>
            <button
                type="button"
                class="flex items-center justify-center w-36 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3"
            >
                <span>Set Status</span>
                <svg
                    class="h-4 w-4 ml-2"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                >
                    <path
                        fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd"
                    />
                </svg>
            </button>
        </div>
        <div class="flex items-center space-x-3">
            <div
                class="bg-white font-semibold text-center rounded-xl px-3 py-2"
            >
                <div class="text-xl leading-snug">12</div>
                <div class="text-gray-400 text-xs leading-none">Votes</div>
            </div>
            <button
                type="button"
                class="items-center justify-center w-32 h-11 text-xs bg-gray-200 font-semibold uppercase rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3"
            >
                <span>Vote</span>
            </button>
        </div>
    </div>
    <!------ end buttons container ------->

    <div class="comments-container relative space-y-6 ml-22 pt-4 my-8 mt-1">
        <div class="comment-container relative bg-white rounded-xl flex mt-4">
            <div class="px-4 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img
                            src="https://source.unsplash.com/200x200/?face&crop=face&v=2"
                            alt="avatar"
                            class="w-20 h-auto rounded-xl"
                        />
                    </a>
                </div>
            </div>
            <div class="w-full mx-4 py-6">
                <!-- <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline"
                            >A random title can go here</a
                        >
                    </h4> -->
                <div class="text-gray-600 mt-3 line-clamp-3">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </div>
                <div class="flex items-center justify-between mt-6">
                    <div
                        class="flex items-center text-xs text-gray-400 font-semibold space-x-2"
                    >
                        <div class="font-semibold text-gray-900">John Doe</div>
                        <div>&bull;</div>
                        <div>10 hours ago</div>
                    </div>
                    <div class="flex items-center space-x-2">
                        <button
                            class="relative bg-gray-100 border hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2 px-3"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="16"
                                height="16"
                                fill="currentColor"
                                style="color: rgba(163, 163, 163, 0.5)"
                                class="bi bi-three-dots"
                                viewBox="0 0 16 16"
                            >
                                <path
                                    d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"
                                />
                            </svg>
                            <ul
                                class="hidden w-44 text-left font-semibold bg-white shadow-dialogue rounded-xl py-3 ml-4"
                            >
                                <li>
                                    <a
                                        href="#"
                                        class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in"
                                        >Mark as Spam</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="#"
                                        class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in"
                                        >Delete Post</a
                                    >
                                </li>
                            </ul>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="is-admin comment-container relative bg-white rounded-xl flex mt-4"
        >
            <div class="px-4 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img
                            src="https://source.unsplash.com/200x200/?face&crop=face&v=3"
                            alt="avatar"
                            class="w-20 h-auto rounded-xl"
                        />
                    </a>
                    <div
                        class="text-center uppercase text-blue text-xxs font-bold mt-1"
                    >
                        Admin
                    </div>
                </div>
            </div>
            <div class="w-full mx-4 py-6">
                <h4 class="text-xl font-semibold">
                    <a href="#" class="hover:underline"
                        >Status changed to 'Under Construction'</a
                    >
                </h4>
                <div class="text-gray-600 mt-3 line-clamp-3">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </div>
                <div class="flex items-center justify-between mt-6">
                    <div
                        class="flex items-center text-xs text-gray-400 font-semibold space-x-2"
                    >
                        <div class="font-semibold text-blue">Andrea</div>
                        <div>&bull;</div>
                        <div>10 hours ago</div>
                    </div>
                    <div class="flex items-center space-x-2">
                        <button
                            class="relative bg-gray-100 border hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2 px-3"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="16"
                                height="16"
                                fill="currentColor"
                                style="color: rgba(163, 163, 163, 0.5)"
                                class="bi bi-three-dots"
                                viewBox="0 0 16 16"
                            >
                                <path
                                    d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"
                                />
                            </svg>
                            <ul
                                class="hidden w-44 text-left font-semibold bg-white shadow-dialogue rounded-xl py-3 ml-4"
                            >
                                <li>
                                    <a
                                        href="#"
                                        class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in"
                                        >Mark as Spam</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="#"
                                        class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in"
                                        >Delete Post</a
                                    >
                                </li>
                            </ul>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="comment-container relative bg-white rounded-xl flex mt-4">
            <div class="px-4 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img
                            src="https://source.unsplash.com/200x200/?face&crop=face&v=4"
                            alt="avatar"
                            class="w-20 h-auto rounded-xl"
                        />
                    </a>
                </div>
            </div>
            <div class="w-full mx-4 py-6">
                <!-- <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline"
                            >A random title can go here</a
                        >
                    </h4> -->
                <div class="text-gray-600 mt-3 line-clamp-3">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </div>
                <div class="flex items-center justify-between mt-6">
                    <div
                        class="flex items-center text-xs text-gray-400 font-semibold space-x-2"
                    >
                        <div class="font-semibold text-gray-900">John Doe</div>
                        <div>&bull;</div>
                        <div>10 hours ago</div>
                    </div>
                    <div class="flex items-center space-x-2">
                        <button
                            class="relative bg-gray-100 border hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2 px-3"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="16"
                                height="16"
                                fill="currentColor"
                                style="color: rgba(163, 163, 163, 0.5)"
                                class="bi bi-three-dots"
                                viewBox="0 0 16 16"
                            >
                                <path
                                    d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"
                                />
                            </svg>
                            <ul
                                class="hidden w-44 text-left font-semibold bg-white shadow-dialogue rounded-xl py-3 ml-4"
                            >
                                <li>
                                    <a
                                        href="#"
                                        class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in"
                                        >Mark as Spam</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="#"
                                        class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in"
                                        >Delete Post</a
                                    >
                                </li>
                            </ul>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!------ end comments container ------->
    </div>
</x-app-layout>
