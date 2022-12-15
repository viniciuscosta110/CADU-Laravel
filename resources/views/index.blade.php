<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/global.css">
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
    <div class="mb-28">
      <header class="flex flex-row">
        <a href="/">
          <img src="{{ asset('images/green_logo.png') }}" alt="Logo image" class="w-40">
        </a>
        
        <nav class="flex gap-20 text-[#FFFFFF] mt-[60px] ml-[72px]" role="group" aria-label="Basic outlined example">
          <a class="w-full h-full flex flex-col items-center font-bold" href="/courses">
            Aulas
            <span class="h-1 w-[100px] bg-[#fff]"></span>
          </a>
          <a class="w-full h-full flex flex-col items-center font-bold" href="/teachers">
            Professores
            <span class="h-1 w-[100px] bg-[#fff]"></span>
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
      <div class="mt-[68px] ml-[184px] flex flex-col gap-10">
        @foreach($posts as $post)
          <article class="w-fit px-20 py-7 bg-white flex gap-[140px] rounded-[40px] border-4 border-[#4245DB] items-center">
            <p id="description" class="w-[400px] text-2xl">{{ $post->description }}</p>
            <img src="{{ $post->image }}" alt="${item.alt}" class="w-[200px] h-[200px] rounded-xl">
          </article>
        @endforeach 
      </div>
    </div>
  <!-- <script src="/js/index.js"></script> -->
  </body>
</html>