<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes da disciplina</title>
    <link rel="icon" href="icons/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="css/global.css">
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
    <div class="pb-28">
      <header class="flex flex-row">
        <a href="/">
          <img src="{{ asset('images/green_logo.png') }}" alt="Logo image" class="w-40">
        </a>
        
        <nav class="flex gap-20 text-[#FFFFFF] mt-[60px] ml-[72px]" role="group" aria-label="Basic outlined example">
          <a class="w-full h-full flex flex-col items-center font-bold text-[#1D1E8F]" href="/details.html">
            Aulas
            <span class="h-1 w-[100px] bg-[#1D1E8F]"></span>
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
      <div class="mt-[68px]">
        <div id="content" class="font-bold text-2xl flex flex-col items-center">
          
        </div>
    </div>
    <script src="js/details.js"></script>
  </body>
</html>