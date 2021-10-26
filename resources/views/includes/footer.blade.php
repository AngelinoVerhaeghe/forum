<footer class="bg-gradient-to-t from-cyan-700 to-sky-700 text-white py-10 mt-20">
    <div class="container mx-auto grid grid-cols-1 px-4 lg:px-0 lg:grid-cols-4 gap-5">
        <div>
            <h3 class="font-lobster tracking-wider text-xl mb-5">About</h3>
            <p class="text-sm font-light leading-6 mb-4">A hotel is an establishment that provides paid lodging on a
                short-term basis.
                Facilities provided may
                range from a modest-quality.</p>
            <a href="#"
                class="uppercase tracking-wider font-bold text-xs leading-5 relative before:block before:h-px before:w-0 hover:before:w-full before:bg-white before:absolute before:bottom-0 before:left-0 before:transition-all before:duration-200 before:ease-in-out">Read
                more</a>
        </div>
        <div class="pl-10">
            <h3 class="font-lobster tracking-wider text-xl mb-5">Navigation</h3>
            <ul class="space-y-3">
                <li><a href="{{ route('discussions.create') }}"
                        class="font-light text-sm relative before:block before:h-px before:w-0 hover:before:w-full before:bg-white before:absolute before:bottom-0 before:left-0 before:transition-all before:duration-200 before:ease-in-out">Add
                        Discussion</a>
                </li>
            </ul>
        </div>
        <div class="col-span-2">
            <div class="grid grid-cols-2 mb-10">
                <div>
                    <h3 class="font-lobster tracking-wider text-xl mb-5">Address</h3>
                    <p class="text-sm font-light">273 South Riverview Rd.</p>
                    <p class="text-sm font-light">New York, NY 10011</p>
                </div>
                <div class="pl-10">
                    <h3 class="font-lobster tracking-wider text-xl mb-5">Telephone</h3>
                    <p class="text-sm font-light">+1 234 5678 910</p>
                    <p class="text-sm font-light">+2 234 5678 910</p>
                </div>
            </div>
            <div>
                <h3 class=" font-lobster tracking-wider text-xl">Join our
                    newsletter</h3>
                <p class="text-sm font-light mb-4">Be the first to know our latest updates and news!</p>
                <input type="email" name="email" id="email"
                    class="bg-transparent border border-white w-3/5 placeholder-white italic focus:outline-none focus:border-current focus:ring-transparent"
                    placeholder="Enter your email">
                <button type="submit"
                    class="bg-cyan-600 font-bold px-5 py-2 ml-2 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500 transition duration-300 ease-in-out">Subscribe</button>
            </div>
        </div>
    </div>
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-4 lg:gap-10 mt-12 pt-12 px-4 lg:px-0">
        <p class="text-sm text-center lg:text-left font-light tracking-wider">Copyright ©2021 All Rights Reserved.
        </p>
        <ul class="flex justify-center lg:justify-end items-center space-x-4">
            <li>
                <a href="https://github.com/AngelinoVerhaeghe"><i class="fab fa-github text-white text-2xl"></i></a>
            </li>
            <li>
                <a href="https://www.linkedin.com/in/angelino-verhaeghe/"><i
                        class="fab fa-linkedin-in text-white text-2xl"></i></a>
            </li>
        </ul>
    </div>
</footer>
