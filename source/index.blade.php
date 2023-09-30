@extends('_layouts.main')

@section('body')
<div class="min-h-screen flex flex-col justify-center items-center bg-gradient-to-b from-gray-900 to-gray-600">
    <div class="lg:max-w-7xl max-w-full mx-auto">
        <div class="lg:grid lg:grid-cols-12 lg:place-items-center flex flex-col-reverse">
            <div class="p-8 lg:col-span-6 place-items-center text-center -m-10 mx-10 lg:mx-0">
                <h1 class="lg:text-5xl font-bold text-white">Mauro Merconchini</h1>
                <p class="lg:text-lg lg:tracking-wide lg:leading-loose text-white pt-4">Always challenging myself to solve new, complex problems, as well as build robust, maintainable solutions. Most of all, I enjoy creating useful things!</p>
                <div class="mt-5 flex flex-col gap-5 justify-center md:flex-row">
                    <a class="bg-white border border-white rounded-2xl md:mx-0 mx-auto w-40 px-3 py-3 hover:bg-gray-300" href="/about">More about me</a>
                    <a class="bg-white border border-white rounded-2xl md:mx-0 mx-auto w-40 px-3 py-3 hover:bg-gray-300" href="/assets/Mauro Merconchini - Resume.pdf" download >Download Resume</a>
                </div>
            </div>

            <div class="lg:col-span-6 py-10 drop-shadow-xl">
                <img class="lg:m-0 mx-auto rounded-2xl lg:max-h-96 max-h-64" src="/assets/images/pfp.jpg" alt="Mauro Merconchini photo">
            </div>
        </div>
    </div>
</div>
@endsection
