<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes da disciplina</title>
    <link rel="icon" href="icons/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="{{ URL::asset('css/global.css'); }} ">
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
    <div class="pb-28">
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
      <div class="mt-[68px]">
        <div id="content" class="font-bold text-2xl flex flex-col items-center">
          @if($subject != null) 
          <p class="py-9 px-[224px] bg-white rounded-[40px] border-4 border-[#4245DB] text-center">
            <strong>{{ $subject->title }}</strong>
          </p>
          <div class="w-full flex flex-col gap-5 pt-9 font-bold px-[112px]">
            <div id="content" class="flex gap-36">
              <section class="w-full h-[300px] bg-white px-6 py-6 flex flex-col items-center rounded-[40px] gap-8 border-4 border-[#4245DB]">
                <h3>Sala</h3>
                <div class="w-full h-full break-all gap-10 font-normal text-lg flex flex-col justify-center items-center">
                  <a href="">
                    {{ $subject->room }}
                  </a>
                </div>
              </section>

              <section class="w-full h-[300px] bg-white px-6 py-6 flex flex-col items-center rounded-[40px] gap-8 border-4 border-[#4245DB]">
                <h3>Professor responsável</h3>
                <div class="w-full h-full break-all gap-4 font-normal text-lg flex flex-col justify-center items-center flex flex-col justify-center items-center">
                  <a href="">
                    {{ $subject->teacher }}
                  </a>
                </div>
              </section>

              <section class="w-full h-[300px] bg-white px-6 py-6 flex flex-col items-center rounded-[40px] gap-8 border-4 border-[#4245DB]">
                <h3>Contatos</h3>
                <div class="w-full h-full break-all gap-4 font-normal text-lg flex flex-col justify-center items-center">
                  @foreach (explode(",", $subject->contacts) as $contact)
                    <p>
                      {{ $contact }}
                    </p>
                  @endforeach
                  <p></p>
                </div>
              </section>
            </div>
            <div class="flex justify-center ">
              <section class="w-full h-[300px] bg-white px-8 py-6 flex flex-col items-center rounded-[40px] gap-8 border-4 border-[#4245DB]">
                <h3>Links Uteis</h3>
                <div class="w-full h-full break-all gap-4 font-normal text-lg flex flex-col justify-center items-center">
                  @foreach (explode(",", $subject->links) as $link)
                    <a href="{{ $link }}">
                      {{ $link }}
                    </a>
                  @endforeach
                </div>
              </section>
            </div>
          </div>
          @endif
        </div>
    </div>
  </body>
</html>