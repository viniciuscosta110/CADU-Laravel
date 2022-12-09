<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos e Períodos</title>
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
    <div>
      <header class="flex flex-row pb-28">
        <a href="/">
          <img src="{{ asset('images/green_logo.png') }}" alt="Logo image" class="w-40">
        </a>
        
        <nav class="flex gap-20 text-[#FFFFFF] mt-[60px] ml-[72px]" role="group" aria-label="Basic outlined example">
          <a class="w-full h-full flex flex-col items-center font-bold text-[#1D1E8F]" href="/">
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
      <div class="mt-[68px] ml-[184px] grid w-12/12 grid-cols-2 content-between self-auto">
        <div class="flex flex-col">
            <p class="w-2/4 py-7 bg-white rounded-[40px] border-4 border-[#4245DB] text-center">
                <strong>Engenharia da Computação</strong>
            </p>
            <div class="flex flex-col gap-6 mt-9 font-bold">
              <a href="/subjects" class="w-2/4 text-center text-white">1º Período</a>
              <a href="/subjects" class="w-2/4 text-center text-white">2º Período</a>
              <a href="/subjects" class="w-2/4 text-center text-white">3º Período</a>
              <a href="/subjects" class="w-2/4 text-center text-white">4º Período</a>
              <a href="/subjects" class="w-2/4 text-center text-white">5º Período</a>
              <a href="/subjects" class="w-2/4 text-center text-white">6º Período</a>
              <a href="/subjects" class="w-2/4 text-center text-white">7º Período</a>
              <a href="/subjects" class="w-2/4 text-center text-white">8º Período</a>
              <a href="/subjects" class="w-2/4 text-center text-white">9º Período</a>
              <a href="/subjects" class="w-2/4 text-center text-white">10º Período</a>
              <a href="/subjects" class="w-2/4 text-center text-white"> Eletivas</a>
            </div>
        </div>
        <div>
            <p class="w-2/4 py-7 bg-white rounded-[40px] border-4 border-[#4245DB] text-center">
                <strong>Ciência da Computação</strong>
            </p>
            <div class="flex flex-col gap-6 mt-9 font-bold">
              <a href="/subjects" class="w-2/4 text-center text-white">1º Período</a>
              <a href="/subjects" class="w-2/4 text-center text-white">2º Período</a>
              <a href="/subjects" class="w-2/4 text-center text-white">3º Período</a>
              <a href="/subjects" class="w-2/4 text-center text-white">4º Período</a>
              <a href="/subjects" class="w-2/4 text-center text-white">5º Período</a>
              <a href="/subjects" class="w-2/4 text-center text-white">6º Período</a>
              <a href="/subjects" class="w-2/4 text-center text-white">7º Período</a>
              <a href="/subjects" class="w-2/4 text-center text-white">8º Período</a>
              <a href="/subjects" class="w-2/4 text-center text-white"> Eletivas</a>
            </div>
        </div>
    </div>
  </body>
</html>