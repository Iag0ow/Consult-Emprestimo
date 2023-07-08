@extends('layouts.master')
@section('conteudo')
<section class="relative w-screen">
  <nav class="absolute px-5 md:px-48 flex top-0 left-0 right-0 z-10">
    <img src="./assets/images/logo-safra-2-1.png" class="w-32" alt="logo safra">

    <button class="ml-auto md:hidden">
      <img class="w-4" src="./assets/images/🦆 icon _menu_.svg" alt="">
    </button>

    <ul class="hidden md:flex text-[#DCDCDC] items-center justify-end space-x-16 ml-auto ">
      <li class="hover:text-white transition duration-300 ease-out"><a href="#">Início</a></li>
      <li class="hover:text-white transition duration-300 ease-out"><a href="#">Certificado</a></li>
      <li class="hover:text-white transition duration-300 ease-out"><a href="#">Contrate</a></li>
      <li class="hover:text-white transition duration-300 ease-out"><a href="#">Contato</a></li>
    </ul>
  </nav>

  <div class="bg-cover bg-center h-screen w-screen" style="background-image: url('./assets/images/hero1.png'); z-index: 1;">
    
  </div>

  <div class="absolute px-[40px] inset-x-0 bottom-0 flex md:px-48 md:top-0 md:items-center md:justify-start">
      <div class="block items-center justify-center w-full max-w-md md:max-w-2xl">
        <h1 class="text-4xl text-white font-extrabold md:text-5xl">Crédito Digital <br> Safra</h1>
        <p class="text-white text-base font-base py-4 w-[80%]">Empréstimo fácil e rápido <br> para sua empresa.</p>
        <button class="text-white p-3 px-5 font-bold w-full bg-[#23A6F0] text-xs rounded-full md:max-w-[200px] hover:bg-[#00003C] transition duration-300 ease-out">Simule e Contrate</button>
        <button class="text-white p-3 mb-10 mt-2 px-5 font-bold w-full border border-[#ffff] text-xs md:max-w-[200px] rounded-full hover:shadow-xl hover:shadow-[#FFFFFF] transition duration-700 ease-out">Saiba Mais</button>
        <div class="flex justify-center align-center mb-5 md:hidden">
          <img class="animate-bounce w-7" src="./assets/images/Vector.svg" alt="">
        </div>
      </div>
  </div>

  <div id="esse aqui" class="hidden md:flex bottom-0 justify-center items-center mb-5">
    <img class="animate-bounce w-7" src="./assets/images/Vector.svg" alt="">
  </div>




</section>

<section class="px-[40px] md:px-48 mt-16 mb-16">

  <div class="justify-center items-center mb-16">
    <h2 class="text-center text-3xl font-semibold text-black">Certificado Digital</h2>
    <p class="text-center text-xs md:text-sm">Adquira um certificado digital confiável para garantir a segurança e agilidade na <br>obtenção de empréstimos.</p>
  </div>

  {{-- Desktop --}}
  <div class="hidden md:block">
    <div class="grid grid-cols-3 gap-4">
      <div class="w-full border border-[#B7B7B7] rounded-md p-5 max-w-[18rem] mx-auto">
        <h3 class="text-center text-base font-bold">Confiabilidade e Autenticidade</h3>
        <p class="text-center text-sm mt-3">Aumente a confiança dos seus clientes ao exibir o cadeado verde e o "https://" na barra de endereço, indicando um site autêntico e seguro.</p>
      </div>
      <div class="w-full border border-[#B7B7B7] rounded-md p-5 max-w-[18rem] mx-auto">
        <h3 class="text-center text-base font-bold">Facilidade de Empréstimo</h3>
        <p class="text-center text-sm mt-3">Simplifique o processo de empréstimo com um certificado digital, agilizando solicitações e análises de crédito de forma segura e conveniente.</p>
      </div>
      <div class="w-full border border-[#B7B7B7] rounded-md p-5 max-w-[18rem] mx-auto">
        <h3 class="text-center text-base font-bold">Facilidade de Empréstimo</h3>
        <p class="text-center text-sm mt-3">Simplifique o processo de empréstimo com um certificado digital, agilizando solicitações e análises de crédito de forma segura e conveniente.</p>
      </div>
    </div>
  </div>

  {{-- Mobile --}}
  <div class="md:hidden">
    <!-- Exibir como um carrossel Owl Carousel no modo mobile -->
    <div class="owl-carousel">
      <div class="w-full border border-[#B7B7B7] rounded-md p-5 max-w-[18rem] mx-auto carousel-item">
        <h3 class="text-center text-base font-bold">Confiabilidade e Autenticidade</h3>
        <p class="text-center text-sm mt-3">Aumente a confiança dos seus clientes ao exibir o cadeado verde e o "https://" na barra de endereço, indicando um site autêntico e seguro.</p>
      </div>
      <div class="w-full border border-[#B7B7B7] rounded-md p-5 max-w-[18rem] mx-auto carousel-item">
        <h3 class="text-center text-base font-bold">Facilidade de Empréstimo</h3>
        <p class="text-center text-sm mt-3">Simplifique o processo de empréstimo com um certificado digital, agilizando solicitações e análises de crédito de forma segura e conveniente.</p>
      </div>
      <div class="w-full border border-[#B7B7B7] rounded-md p-5 max-w-[18rem] mx-auto carousel-item">
        <h3 class="text-center text-base font-bold">Facilidade de Empréstimo</h3>
        <p class="text-center text-sm mt-3">Simplifique o processo de empréstimo com um certificado digital, agilizando solicitações e análises de crédito de forma segura e conveniente.</p>
      </div>
    </div>
  </div>

</section >

<section class="w-screen h-screen bg-[#DFEEF6] px-[40px] md:px-48 mt-16 mb-16">

</section>













<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
$(document).ready(function(){
  $('.owl-carousel').owlCarousel({
    items: 1,
    loop: true,
    nav: false,
    dots: false,
    autoplay: true,
    responsive: {
      0: {
        items: 1
      },
      768: {
        items: 3
      }
    }
  });
});
</script>
@endsection
