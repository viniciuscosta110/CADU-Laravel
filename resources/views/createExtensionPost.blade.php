<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Extension Post</title>
    <link rel="stylesheet" href="{{ URL::asset('css/global.css'); }} ">
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body">
    <div class="mb-28" >
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
      <div class="mt-[68px] ml-[184px]">
        <form action="/extensions/create" method="POST" class="flex flex-col items-start gap-5">
          @csrf
          <div class="flex flex-col w-[350px]">
            <label class="text-white">Título</label>
            <input type="text" name="title" id="title" placeholder="Título">
          </div>

          <div class="flex flex-col w-[350px]">
            <label class="text-white">Descrição</label>
            <textarea class="min-h-[100px]" name="description" id="description" placeholder="Descrição">

            </textarea>
          </div>
          <div class="flex flex-col w-[350px]">
            <label class="text-white">Imagem</label>
            <input type="text" name="image" id="image" placeholder="Imagem">
          </div>
          
          <div class="flex flex-col w-[350px]">
            <label class="text-white">Link</label>
            <input type="text" name="link" id="link" placeholder="Link">
          </div>

          <button class="p-2 border-4 border-[#4245DB] bg-white rounded" type="submit">Enviar</button>
        </form>
      </div>
    </div>
  <!-- <script src="/js/index.js"></script> -->
  </body>
</html>