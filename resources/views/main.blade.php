@extends('layouts.app')

@section('content')
    <!-- This is for title card -->
    <section class="flex justify-center" id="Home">
        <div class="flex flex-col items-center w-300 h-110 px-25 py-18 bg-gray-800 text-white border-3 border-yellow-200 rounded-2xl shadow-lg shadow-yellow-500">
            <img src="/build/assets/img/ame.jpg" alt="Gura pfp" class="center w-42 h-42 rounded-full">
            <h1 class="text-3xl">Hello Im cake...👋</h1>
            <h1 class="text-xl m-1">Data Nerd</h1>
            <div class="flex flex-row">
                <a href="https://www.linkedin.com/" class="m-1">
                    <img src="/build/assets/svg/linkedin-svgrepo-com.svg" class="w-7 h-7">
                </a>
                <a href="https://github.com/cakethehuman" class="m-1">
                   <img src="/build/assets/svg/github-svgrepo-com.svg" class="w-7 h-7">
                </a>
            </div>
        </div> 
    </section>  
    <!-- This if for my skill cards -->
    <section class="py-5" id="Skills">
        <div class="flex justify-center">
            <h1 class="text-white font-bold text-3xl w-50 h-15 py-2 text-center border-2 bg-gray-800 border-emerald-500 rounded-full m-5 shadow-lg shadow-emerald-500">
                SKILLS
            </h1>
        </div>
        <div class="flex flex-row gap-20">
            <div class="flex-col border items-center w-140 h-90 bg-gray-800 border-5 border-emerald-500 rounded-3xl shadow-xl shadow-emerald-500/50">
                <div class="grid grid-cols-3 gap-5 my-15 place-items-center">
                    <img src="/build/assets/svg/scikit-learn.svg" class="w-25 h-25">
                    <img src="/build/assets/svg/tensorflow-svgrepo-com.svg" class="w-25 h-25">
                    <img src="/build/assets/svg/pytorch-svgrepo-com.svg" class="w-25 h-25">
                    <img src="/build/assets/svg/statsmodels-logo-v2.svg" class="w-25 h-25">
                    <img src="/build/assets/svg/opencv-svgrepo-com.svg" class="w-25 h-25">
                    <img src="/build/assets/svg/tableau-icon-svgrepo-com.svg" class="w-25 h-25">
                </div>
            </div>
            <div class="flex-col border items-center w-140 h-90 bg-gray-800 border-5 border-emerald-500 rounded-3xl shadow-xl shadow-emerald-500/50">
                <div class="grid grid-cols-3 gap-5 my-15 place-items-center">
                    <img src="/build/assets/svg/scikit-learn.svg" class="w-30 h-30">
                    <img src="/build/assets/svg/tensorflow-svgrepo-com.svg" class="w-30 h-30">
                    <img src="/build/assets/svg/pytorch-svgrepo-com.svg" class="w-30 h-30">
                    <img src="/build/assets/svg/statsmodels-logo-v2.svg" class="w-30 h-30">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="flex justify-center">
                <h1 class="text-white font-bold text-3xl w-60 h-15 py-2 text-center border-2 bg-gray-800 border-red-700 rounded-full m-5 shadow-xl shadow-red-700/50">
                    EXPRERIENCE
                </h1>
            </div>
        </div>
        <div class="flex justify-center">
            <div class="border border-3 border-red-700 w-300 h-110 px-25 py-18 bg-gray-800 rounded-2xl shadow-lg">
                
            </div>
        </div>
    </section>

    <section>
        <div class="flex justify-center">
                <h1 class="text-white font-bold text-3xl w-60 h-15 py-2 text-center border-2 bg-gray-800 border-blue-500 rounded-full m-5 shadow-xl shadow-blue-500/50">
                    PROJECTS
                </h1>
            </div>
        </div>
        <div class="flex justify-center">
            <div class="border border-3 border-blue-700 w-300 h-110 px-25 py-18 bg-gray-800 rounded-2xl shadow-lg">
                
            </div>
        </div>
    </section>
@endsection