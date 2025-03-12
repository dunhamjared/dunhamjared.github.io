<script lang="ts">
    import logo from "$lib/assets/logo.webp"
    import qrcode from "$lib/assets/qr-code.svg?raw"
</script>

<div class="flex flex-col justify-center items-center h-screen px-10">
    <div
        class="flex flex-col md:flex-row items-center w-full gap-x-20 gap-y-5 max-w-3xl"
    >
        <div class="flip-box w-full md:w-6/12 flex justify-center relative">
            <div class="flip-box-inner relative flex justify-center">
                <img
                    src={logo}
                    alt="profile"
                    class="flip-box-front w-sm rounded-full"
                    style="box-shadow: 0 0 0 1px #ffffff36, 0 58px 20px -39px #5c919d33"
                    width="683"
                    height="683"
                />
                <div
                    class="flip-box-back absolute w-full rounded-4xl overflow-hidden"
                >
                    {@html qrcode}
                </div>
            </div>
        </div>
        <div
            class="w-full md:w-6/12 flex flex-col items-center md:items-start md:text-left"
        >
            <h1 class="text-4xl font-bold text-center">Jared Dunham</h1>
            <div class="text-sm font-bold text-center text-gray-400">
                <div>Developer and Maker</div>
            </div>
            <div>
                <h2 class="mt-4 mb-2 font-bold border-b border-gray-600">
                    Technology
                </h2>
                <div class="text-sm">
                    <p>I love to work with TypeScript, Svelte, & Adonis.</p>
                    <p>I'm also familiar with SQL, Elastic, & Docker.</p>
                </div>
                <h2 class="mt-4 mb-2 font-bold border-b border-gray-600">
                    Personal
                </h2>
                <div class="text-sm">
                    <p>
                        During my free time, I like to design, make, and restore
                        many different things.
                    </p>
                </div>
            </div>

            <div class="mt-7 flex gap-3">
                <a
                    href="https://www.linkedin.com/in/dunhamjared/"
                    title="LinkedIn"
                    class="hover:text-gray-400"
                    target="_blank"
                >
                    <svg
                        class="icon"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 448 512"
                        ><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path
                            d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"
                        /></svg
                    >
                </a>
                <a
                    href="https://github.com/dunhamjared"
                    title="GitHub"
                    class="hover:text-gray-400"
                    target="_blank"
                >
                    <svg
                        class="icon"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 448 512"
                        ><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path
                            d="M448 96c0-35.3-28.7-64-64-64H64C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96zM265.8 407.7c0-1.8 0-6 .1-11.6c.1-11.4 .1-28.8 .1-43.7c0-15.6-5.2-25.5-11.3-30.7c37-4.1 76-9.2 76-73.1c0-18.2-6.5-27.3-17.1-39c1.7-4.3 7.4-22-1.7-45c-13.9-4.3-45.7 17.9-45.7 17.9c-13.2-3.7-27.5-5.6-41.6-5.6s-28.4 1.9-41.6 5.6c0 0-31.8-22.2-45.7-17.9c-9.1 22.9-3.5 40.6-1.7 45c-10.6 11.7-15.6 20.8-15.6 39c0 63.6 37.3 69 74.3 73.1c-4.8 4.3-9.1 11.7-10.6 22.3c-9.5 4.3-33.8 11.7-48.3-13.9c-9.1-15.8-25.5-17.1-25.5-17.1c-16.2-.2-1.1 10.2-1.1 10.2c10.8 5 18.4 24.2 18.4 24.2c9.7 29.7 56.1 19.7 56.1 19.7c0 9 .1 21.7 .1 30.6c0 4.8 .1 8.6 .1 10c0 4.3-3 9.5-11.5 8C106 393.6 59.8 330.8 59.8 257.4c0-91.8 70.2-161.5 162-161.5s166.2 69.7 166.2 161.5c.1 73.4-44.7 136.3-110.7 158.3c-8.4 1.5-11.5-3.7-11.5-8zm-90.5-54.8c-.2-1.5 1.1-2.8 3-3.2c1.9-.2 3.7 .6 3.9 1.9c.3 1.3-1 2.6-3 3c-1.9 .4-3.7-.4-3.9-1.7zm-9.1 3.2c-2.2 .2-3.7-.9-3.7-2.4c0-1.3 1.5-2.4 3.5-2.4c1.9-.2 3.7 .9 3.7 2.4c0 1.3-1.5 2.4-3.5 2.4zm-14.3-2.2c-1.9-.4-3.2-1.9-2.8-3.2s2.4-1.9 4.1-1.5c2 .6 3.3 2.1 2.8 3.4c-.4 1.3-2.4 1.9-4.1 1.3zm-12.5-7.3c-1.5-1.3-1.9-3.2-.9-4.1c.9-1.1 2.8-.9 4.3 .6c1.3 1.3 1.8 3.3 .9 4.1c-.9 1.1-2.8 .9-4.3-.6zm-8.5-10c-1.1-1.5-1.1-3.2 0-3.9c1.1-.9 2.8-.2 3.7 1.3c1.1 1.5 1.1 3.3 0 4.1c-.9 .6-2.6 0-3.7-1.5zm-6.3-8.8c-1.1-1.3-1.3-2.8-.4-3.5c.9-.9 2.4-.4 3.5 .6c1.1 1.3 1.3 2.8 .4 3.5c-.9 .9-2.4 .4-3.5-.6zm-6-6.4c-1.3-.6-1.9-1.7-1.5-2.6c.4-.6 1.5-.9 2.8-.4c1.3 .7 1.9 1.8 1.5 2.6c-.4 .9-1.7 1.1-2.8 .4z"
                        /></svg
                    >
                </a>
                <a
                    href="https://bsky.app/profile/dja.red"
                    title="BlueSky"
                    class="hover:text-gray-400"
                    target="_blank"
                >
                    <svg
                        class="icon"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 448 512"
                        ><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path
                            d="M64 32C28.7 32 0 60.7 0 96L0 416c0 35.3 28.7 64 64 64l320 0c35.3 0 64-28.7 64-64l0-320c0-35.3-28.7-64-64-64L64 32zM224 247.4c14.5-30 54-85.8 90.7-113.3c26.5-19.9 69.3-35.2 69.3 13.7c0 9.8-5.6 82.1-8.9 93.8c-11.4 40.8-53 51.2-90 44.9c64.7 11 81.2 47.5 45.6 84c-67.5 69.3-97-17.4-104.6-39.6c0 0 0 0 0 0l-.3-.9c-.9-2.6-1.4-4.1-1.8-4.1s-.9 1.5-1.8 4.1c-.1 .3-.2 .6-.3 .9c0 0 0 0 0 0c-7.6 22.2-37.1 108.8-104.6 39.6c-35.5-36.5-19.1-73 45.6-84c-37 6.3-78.6-4.1-90-44.9c-3.3-11.7-8.9-84-8.9-93.8c0-48.9 42.9-33.5 69.3-13.7c36.7 27.5 76.2 83.4 90.7 113.3z"
                        /></svg
                    >
                </a>
            </div>
            <div class="mt-3">
                <div class="text-sm opacity-75">Contact me at:</div>
                <a
                    href="mailto:hello@djared.com"
                    class="font-bold hover:text-gray-400">hello@djared.com</a
                >
            </div>
        </div>
    </div>
</div>
