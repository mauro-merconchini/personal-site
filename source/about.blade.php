@extends('_layouts.main')

@section('body')
<div class="bg-gradient-to-b from-gray-900 to-gray-600 text-white">
    <div class="py-10 lg:max-w-5xl lg:mx-auto mx-5">
        <a href="/" class="text-xl font-semibold hover:underline">Home</a>
        <h1 class="text-3xl font-bold text-center">About Me</h1>
    
        <div class="mt-8">
            <h2 class="text-xl font-semibold mb-4">Languages and Frameworks</h2>
            <div class="flex flex-wrap gap-2">
                <div class="bg-white text-black px-4 py-2 rounded-full">C#</div>
                <div class="bg-white text-black px-4 py-2 rounded-full">.NET Framework</div>
                <div class="bg-white text-black px-4 py-2 rounded-full">ASP.NET</div>
                <div class="bg-white text-black px-4 py-2 rounded-full">Java</div>
                <div class="bg-white text-black px-4 py-2 rounded-full">Python</div>
                <div class="bg-white text-black px-4 py-2 rounded-full">PHP</div>
                <div class="bg-white text-black px-4 py-2 rounded-full">Laravel</div>
                <div class="bg-white text-black px-4 py-2 rounded-full">JavaScript</div>
            </div>
        </div>

        <div class="mt-8">
            <h2 class="text-xl font-semibold mb-4">Other Technologies</h2>
            <div class="flex flex-wrap gap-2">
                <div class="bg-white text-black px-4 py-2 rounded-full">Docker</div>
                <div class="bg-white text-black px-4 py-2 rounded-full">MySQL</div>
                <div class="bg-white text-black px-4 py-2 rounded-full">SQL</div>
                <div class="bg-white text-black px-4 py-2 rounded-full">Tailwind CSS</div>
                <div class="bg-white text-black px-4 py-2 rounded-full">Bootstrap</div>
            </div>
        </div>
    
        <div class="mt-8">
            <h2 class="text-xl font-semibold mb-4">Development Practices</h2>
            <div class="flex flex-wrap gap-2">
                <div class="bg-white text-black px-4 py-2 rounded-full">Unit Testing</div>
                <div class="bg-white text-black px-4 py-2 rounded-full">Git</div>
                <div class="bg-white text-black px-4 py-2 rounded-full">Agile</div>
                <div class="bg-white text-black px-4 py-2 rounded-full">SCRUM</div>
                <div class="bg-white text-black px-4 py-2 rounded-full">CI/CD</div>
            </div>
        </div>
    
        <div class="mt-8">
            <h2 class="text-xl font-semibold mb-4">Featured Project</h2>
            <a href="https://gametally.io/" class="text-lg font-semibold mb-2 hover:underline">GameTally</a>
            <p class="text-gray-200 mb-4">I felt the need to create a basic web application to keep track of my growing backlog of games to play. Other previously-existing solutions felt bloated, with too many integrations of stat-tracking and social features that didn't appeal to me. I decided to create my own, much more simplified solution, and used the development of this application as an excuse to continue practicing my skills with the Laravel framework for PHP.</p>
            <a href="https://gametally.io/">
                <img src="/assets/images/screenshot_feature_2.png" alt="App screenshot" class="rounded-md shadow-lg ring-2 ring-gray-900/10">
            </a>
            
        </div>
    </div>
</div>
@endsection
