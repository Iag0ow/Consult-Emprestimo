@extends('layouts.master')
@section('conteudo')
<section class="relative  w-screen">
  <nav class="absolute px-5 flex top-0 left-0 right-0">
    <img src="./assets/images/logo-safra-2-1.png" class="w-32" alt="logo safra">

    <button class="ml-auto md:hidden">
      <img class="w-4" src="./assets/images/🦆 icon _menu_.svg" alt="">
    </button>
  </nav>

  <div class="bg-cover bg-center h-screen w-screen" style="background-image: url('./assets/images/hero1.png')">
    
  </div>

  <div class="absolute px-[40px] inset-x-0 bottom-0 flex md:items-start md:justify-start">
      <div class="block items-center justify-center w-full max-w-md md:max-w-2xl">
        <h1 class="text-4xl text-white font-extrabold md:text-6xl">Crédito Digital <br> Safra</h1>
        <p class="text-white text-base font-base py-4 w-[80%]">Empréstimo fácil e rápido <br> para sua empresa.</p>
        <button class="text-white p-3 px-5 font-bold w-full bg-[#23A6F0] text-xs rounded-full md:max-w-[200px] hover:bg-[#00003C] transition duration-300 ease-out">Simule e Contrate</button>
        <button class="text-white p-3 mb-10 mt-2 px-5 font-bold w-full border border-[#ffff] text-xs md:max-w-[200px] rounded-full hover:shadow-xl hover:shadow-[#FFFFFF] transition duration-700 ease-out">Saiba Mais</button>
        <div class="flex justify-center align-center mb-5 md:hidden">
          <img class="animate-bounce w-7" src="./assets/images/Vector.svg" alt="">
        </div>
      </div>
  </div>

</section>

<section class="relative px-[40px] mt-16 mb-16">

  <div class="relative">
      <div class="justify-center items-center relative">
        <h2 class="text-center text-3xl font-semibold text-black">Certificado Digital</h2>
        <p class="text-center text-sm">Adquira um certificado digital confiável para garantir a segurança e agilidade na obtenção de empréstimos.</p>
      </div>
  </div>

  <div class="w-full border-2	border-[#23A6F0] rounded-md p-5 max-w-[18rem] mx-auto">
      <h3 class="text-center text-base font-bold">Facilidade de Empréstimo</h3>
      <p class="text-center text-sm mt-3">Simplifique o processo de empréstimo com um certificado digital, agilizando solicitações e análises de crédito de forma segura e conveniente.</p>
  </div>
  </div>

</section>
@endsection
