<x-app-layout>
    <div class="filters flex space-x-6">
        <div class="w-1/3">
            <select
                name="category"
                id="category"
                class="w-full rounded-xl border-none px-4 py-2"
            >
                <option value="Category One">Category One</option>
                <option value="Category One">Category Two</option>
                <option value="Category One">Category Three</option>
                <option value="Category One">Category Four</option>
            </select>
        </div>
        <div class="w-1/3">
            <select
                name="other_filters"
                id="other_filters"
                class="w-full rounded-xl border-none px-4 py-2"
            >
                <option value="Category One">Filters One</option>
                <option value="Category One">Filters Two</option>
                <option value="Category One">Filters Three</option>
                <option value="Category One">Filters Four</option>
            </select>
        </div>
        <div class="w-2/3 relative">
            <input
                type="search"
                placeholder="Find an idea"
                class="w-full rounded-xl bg-white border-none placeholder-gray-900 px-4 py-2 pl-8"
            />
            <div class="absolute top-0 flex items-center h-full ml-2">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="w-4 text-gray-700"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
                    />
                </svg>
            </div>
        </div>
    </div>
    <!------ end filters ------->

    <div class="ideas-container space-y-6 my-6">
        <div
            class="idea-container hover:shadow-card transition duration-150 ease-in bg-white rounded-xl flex cursor-pointer"
        >
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-500">Votes</div>
                </div>

                <div class="mt-8">
                    <button
                        class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-900 font-bold text-xxs uppercase rounded-xl transition duration-150 ease-in px-4 py-3"
                    >
                        Vote
                    </button>
                </div>
            </div>
            <div class="flex px-2 py-6 w-full">
                <a href="#">
                    <img
                        src="https://source.unsplash.com/200x200/?face&crop=face&v=1"
                        alt="avatar"
                        class="w-14 h-14 rounded-xl flex-none"
                    />
                </a>
            </div>
            <div class="mx-4 py-6">
                <h4 class="text-xl font-semibold">
                    <a href="#" class="hover:underline"
                        >A random title can go here</a
                    >
                </h4>
                <div class="text-gray-600 mt-3 line-clamp-3">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Dolore deleniti eligendi provident voluptatum consequatur
                    voluptates optio et earum vitae, natus aliquid delectus ut
                    dolorum ipsa culpa veritatis labore quaerat, ex est
                    recusandae laudantium id sapiente? Dicta maxime asperiores
                    harum earum esse illo voluptatum, voluptates iusto
                    cupiditate recusandae consectetur, aperiam dolorum tenetur
                    in accusamus itaque inventore dolor ad necessitatibus
                    doloremque tempore. Reprehenderit nulla blanditiis ex saepe
                    distinctio optio doloremque. Velit commodi ipsam pariatur
                    rem ut esse cupiditate non maxime cum obcaecati, accusantium
                    voluptatum, iure, blanditiis placeat! Unde veniam,
                    perferendis possimus odio, quod totam facere nemo veritatis
                    ab, itaque voluptatibus ea vitae!
                </div>

                <div class="flex items-center justify-between mt-6">
                    <div
                        class="flex items-center text-xs text-gray-400 font-semibold space-x-2"
                    >
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
                            class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2 px-3"
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
                                class="absolute w-44 text-left font-semibold bg-white shadow-dialogue rounded-xl py-3 ml-4"
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
        <div
            class="idea-container hover:shadow-card transition duration-150 ease-in bg-white rounded-xl flex cursor-pointer"
        >
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl text-blue">66</div>
                    <div class="text-gray-500">Votes</div>
                </div>

                <div class="mt-8">
                    <button
                        class="w-20 bg-blue border text-white border-gray-200 hover:border-gray-900 font-bold text-xxs uppercase rounded-xl transition duration-150 ease-in px-4 py-3"
                    >
                        Votes
                    </button>
                </div>
            </div>
            <div class="flex px-2 py-6 w-full">
                <a href="#">
                    <img
                        src="https://source.unsplash.com/200x200/?face&crop=face&v=1"
                        alt="avatar"
                        class="w-14 h-14 rounded-xl flex-none"
                    />
                </a>
            </div>
            <div class="mx-4 py-6">
                <h4 class="text-xl font-semibold">
                    <a href="#" class="hover:underline"
                        >Another random title can go here</a
                    >
                </h4>
                <div class="text-gray-600 mt-3 line-clamp-3">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Dolore deleniti eligendi provident voluptatum consequatur
                    voluptates optio et earum vitae, natus aliquid delectus ut
                    dolorum ipsa culpa veritatis labore quaerat, ex est
                    recusandae laudantium id sapiente? Dicta maxime asperiores
                    harum earum esse illo voluptatum, voluptates iusto
                    cupiditate recusandae consectetur, aperiam dolorum tenetur
                    in accusamus itaque inventore dolor ad necessitatibus
                    doloremque tempore. Reprehenderit nulla blanditiis ex saepe
                    distinctio optio doloremque. Velit commodi ipsam pariatur
                    rem ut esse cupiditate non maxime cum obcaecati, accusantium
                    voluptatum, iure, blanditiis placeat! Unde veniam,
                    perferendis possimus odio, quod totam facere nemo veritatis
                    ab, itaque voluptatibus ea vitae!
                </div>

                <div class="flex items-center justify-between mt-6">
                    <div
                        class="flex items-center text-xs text-gray-400 font-semibold space-x-2"
                    >
                        <div>10 hours ago</div>
                        <div>&bull;</div>
                        <div>Category 1</div>
                        <div>&bull;</div>
                        <div class="text-gray-900">3 Comments</div>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div
                            class="bg-yellow text-white text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4"
                        >
                            In progress
                        </div>
                        <button
                            class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2 px-3"
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
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!------ end idea container ------->

        <div
            class="idea-container hover:shadow-card transition duration-150 ease-in bg-white rounded-xl flex cursor-pointer"
        >
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">32</div>
                    <div class="text-gray-500">Votes</div>
                </div>

                <div class="mt-8">
                    <button
                        class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-900 font-bold text-xxs uppercase rounded-xl transition duration-150 ease-in px-4 py-3"
                    >
                        Vote
                    </button>
                </div>
            </div>
            <div class="flex px-2 py-6 w-full">
                <a href="#">
                    <img
                        src="https://source.unsplash.com/200x200/?face&crop=face&v=1"
                        alt="avatar"
                        class="w-14 h-14 rounded-xl flex-none"
                    />
                </a>
            </div>
            <div class="mx-4 py-6">
                <h4 class="text-xl font-semibold">
                    <a href="#" class="hover:underline"
                        >Yet another random title can go here</a
                    >
                </h4>
                <div class="text-gray-600 mt-3 line-clamp-3">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Dolore deleniti eligendi provident voluptatum consequatur
                    voluptates optio et earum vitae, natus aliquid delectus ut
                    dolorum ipsa culpa veritatis labore quaerat, ex est
                    recusandae laudantium id sapiente? Dicta maxime asperiores
                    harum earum esse illo voluptatum, voluptates iusto
                    cupiditate recusandae consectetur, aperiam dolorum tenetur
                    in accusamus itaque inventore dolor ad necessitatibus
                    doloremque tempore. Reprehenderit nulla blanditiis ex saepe
                    distinctio optio doloremque. Velit commodi ipsam pariatur
                    rem ut esse cupiditate non maxime cum obcaecati, accusantium
                    voluptatum, iure, blanditiis placeat! Unde veniam,
                    perferendis possimus odio, quod totam facere nemo veritatis
                    ab, itaque voluptatibus ea vitae!
                </div>

                <div class="flex items-center justify-between mt-6">
                    <div
                        class="flex items-center text-xs text-gray-400 font-semibold space-x-2"
                    >
                        <div>10 hours ago</div>
                        <div>&bull;</div>
                        <div>Category 1</div>
                        <div>&bull;</div>
                        <div class="text-gray-900">3 Comments</div>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div
                            class="bg-red text-white text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4"
                        >
                            Closed
                        </div>
                        <button
                            class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2 px-3"
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
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!------ end idea container ------->

        <div
            class="idea-container hover:shadow-card transition duration-150 ease-in bg-white rounded-xl flex cursor-pointer"
        >
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">22</div>
                    <div class="text-gray-500">Voted</div>
                </div>

                <div class="mt-8">
                    <button
                        class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-900 font-bold text-xxs uppercase rounded-xl transition duration-150 ease-in px-4 py-3"
                    >
                        Vote
                    </button>
                </div>
            </div>
            <div class="flex px-2 py-6 w-full">
                <a href="#">
                    <img
                        src="https://source.unsplash.com/200x200/?face&crop=face&v=1"
                        alt="avatar"
                        class="w-14 h-14 rounded-xl flex-none"
                    />
                </a>
            </div>
            <div class="mx-4 py-6">
                <h4 class="text-xl font-semibold">
                    <a href="#" class="hover:underline"
                        >One more random title can go here</a
                    >
                </h4>
                <div class="text-gray-600 mt-3 line-clamp-3">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Dolore deleniti eligendi provident voluptatum consequatur
                    voluptates optio et earum vitae, natus aliquid delectus ut
                    dolorum ipsa culpa veritatis labore quaerat, ex est
                    recusandae laudantium id sapiente? Dicta maxime asperiores
                    harum earum esse illo voluptatum, voluptates iusto
                    cupiditate recusandae consectetur, aperiam dolorum tenetur
                    in accusamus itaque inventore dolor ad necessitatibus
                    doloremque tempore. Reprehenderit nulla blanditiis ex saepe
                    distinctio optio doloremque. Velit commodi ipsam pariatur
                    rem ut esse cupiditate non maxime cum obcaecati, accusantium
                    voluptatum, iure, blanditiis placeat! Unde veniam,
                    perferendis possimus odio, quod totam facere nemo veritatis
                    ab, itaque voluptatibus ea vitae!
                </div>

                <div class="flex items-center justify-between mt-6">
                    <div
                        class="flex items-center text-xs text-gray-400 font-semibold space-x-2"
                    >
                        <div>10 hours ago</div>
                        <div>&bull;</div>
                        <div>Category 1</div>
                        <div>&bull;</div>
                        <div class="text-gray-900">3 Comments</div>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div
                            class="bg-green text-white text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4"
                        >
                            Implemented
                        </div>
                        <button
                            class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2 px-3"
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
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!------ end idea container ------->
    </div>
    <!------ end ideas container ------->
</x-app-layout>
