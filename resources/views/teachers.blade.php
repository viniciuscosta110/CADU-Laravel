<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professores</title>
    <link rel="stylesheet" href="{{ URL::asset('css/global.css'); }} ">>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
    <div class="pb-28">
      <header class="flex flex-row ml-8">
        <a href="/">
          <img src="{{ asset('images/green_logo.png') }}" alt="Logo image" class="w-40">
        </a>
        
        <nav class="flex gap-20 text-[#FFFFFF] mt-[60px] ml-[72px]" role="group" aria-label="Basic outlined example">
          <a class="w-full h-full flex flex-col items-center font-bold" href="/courses">
            Aulas
            <span class="h-1 w-[100px] bg-[#fff]"></span>
          </a>
          <a class="w-full h-full flex flex-col items-center font-bold text-[#1D1E8F]"  href="/teachers">
            Professores
            <span class="h-1 w-[100px] bg-[#1D1E8F]"></span>
          </a>
          <a class="w-full h-full flex flex-col items-center font-bold" href="/researchs">
            Pesquisa
            <span class="h-1 w-[100px] bg-[#fff]"></span>
          </a>
          <a class="w-full h-full flex flex-col items-center font-bold" href="/extensions">
            Extensão
            <span class="h-1 w-[100px] bg-[#fff]"></span>
          </a>
        </nav>
      </header>
      <div class="mt-[68px] ml-[264px] flex gap-6">
        @foreach ($teachers as $teacher)
        <article class="w-[400px] h-[600px] min-w-[400px] px-20 py-9 bg-white flex flex-col items-center rounded-[40px] border-4 border-[#4245DB]">
          <div class="flex flex-col gap-[52px] overflow-y-scroll">
            <div class="w-[200px]">
              <img src="{{ $teacher->image }}" alt="Imagem de um professor" class="rounded-xl">
            </div>
            <h1 class="text-2xl font-bold leading-7">
              {{ $teacher->name }}
            </h1>
            <p class="text-2xl text-left font-bold leading-7 tracking-wide">
              {{ $teacher->description }}
            </p>
          </div>
        </article>
        @endforeach
      </div>
    </div>
    <!-- <script src="js/teachers.js"></script> -->
  </body>
</html>