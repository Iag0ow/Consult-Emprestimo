@extends('layouts.master')
@section('conteudo')
<section class="relative w-screen line">
  <div class="relative">
    <nav id="nav" class="absolute px-5 md:px-64 flex top-0 left-0 right-0 z-10">
      <img id="image-nav" src="./assets/images/logo-safra.png" class="w-32 md:w-48" alt="logo safra">
  
      <button class="ml-auto md:hidden">
        <img class="w-4" src="./assets/images/icon-menu.svg" alt="">
      </button>
  
      <ul id="lista-nav" class="hidden md:flex text-[#DCDCDC] text-xl items-center justify-end space-x-16 ml-auto ">
        <li class="hover:text-white transition duration-300 ease-out"><a href="#">Início</a></li>
        <li class="hover:text-white transition duration-300 ease-out"><a href="#certificado">Certificado</a></li>
        <li class="hover:text-white transition duration-300 ease-out"><a href="#section-simular">Contrate</a></li>
        <li class="hover:text-white transition duration-300 ease-out"><a href="#footer">Contato</a></li>
      </ul>
    </nav>
  </div>


  <div class="bg-cover bg-center h-screen w-screen" style="background-image: url('./assets/images/hero1.png'); z-index: 1;"></div>

  <div id="hero-informacoes" class="absolute hero-text px-[48px] md:px-64">
      <div id="hero" class="block items-center justify-center w-full max-w-md md:max-w-2xl">
        <h1 class="text-4xl text-white font-extrabold md:text-7xl">Crédito Digital <br> Safra</h1>
        <p class="text-white text-base font-base py-4 w-[80%] md:text-lg">Empréstimo fácil e rápido para sua empresa.</p>
        <button class="text-white p-3 px-5 font-bold w-full bg-[#23A6F0] text-xs rounded-full md:text-sm md:max-w-[200px] hover:bg-[#00003C] transition duration-300 ease-out"><a href="#section-simular">Simule e Contrate</a></button>
        <button href="#section-certificado" class="text-white p-3 mb-10 mt-2 px-5 font-bold w-full border border-[#ffff] md:text-sm text-xs md:max-w-[200px] rounded-full hover:shadow-xl hover:shadow-[#FFFFFF] transition duration-700 ease-out"><a href="#section-certificado">Saiba Mais</a></button>        
      </div>
  </div>
  <a href="#section-certificado">
    <svg class="iconScrol bounce" width="38" height="13" viewBox="0 0 38 13" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M36 2L22.005 9.62597C20.3523 10.5266 17.6477 10.5266 15.995 9.62597L2 2" stroke="white" stroke-width="4" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
    </svg> 
  </a>
</section>

<section id="section-certificado" class="bg-cover bg-center sm:py-12 md:py-24 w-screen px-[40px] md:px-64 {{-- py-44 --}}" style="background-image: url('./assets/images/background2.png');;">

  <div id="texto-certificado" class="justify-center items-center mt-[65px]">
    <h2 id="certificado" class="text-center text-xl md:text-6xl font-semibold text-black">Certificado Digital</h2>
    <p class="text-center text-xs md:text-lg pt-4 py-8">Adquira um certificado digital confiável para garantir a segurança e agilidade na <br>obtenção de empréstimos.</p>
  </div>

  {{-- Desktop --}}
  <div class="hidden md:block">
    <div class="grid grid-cols-3 gap-4 py-20">
      <div id="card-certificado" class="max-w-[414px] max-h-[273px] border border-[#B7B7B7] rounded-md p-8 mx-auto drop-shadow-2xl">
        <div class="iconsCertificado">
          <svg width="40" height="40" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M8.75 14.5833V11.6666C8.75 6.83954 10.2083 2.91663 17.5 2.91663C24.7917 2.91663 26.25 6.83954 26.25 11.6666V14.5833M13.8542 23.3333C13.8542 24.3002 14.2383 25.2276 14.922 25.9113C15.6057 26.595 16.5331 26.9791 17.5 26.9791C18.4669 26.9791 19.3943 26.595 20.078 25.9113C20.7617 25.2276 21.1458 24.3002 21.1458 23.3333C21.1458 22.3664 20.7617 21.439 20.078 20.7553C19.3943 20.0716 18.4669 19.6875 17.5 19.6875" stroke="#23A6F0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M32.0833 24.7917V21.875C32.0833 16.0417 30.625 14.5834 24.7917 14.5834H10.2083C4.37501 14.5834 2.91667 16.0417 2.91667 21.875V24.7917C2.91667 30.625 4.37501 32.0834 10.2083 32.0834H24.7917C27.3583 32.0834 29.0792 31.8063 30.2021 30.9896" stroke="#23A6F0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div> 
        <h3 class="text-center text-2xl font-bold">Confiabilidade e Autenticidade</h3>
        <p class="text-center text-base	 mt-3">Aumente a confiança dos seus clientes ao exibir o cadeado verde e o "https://" na barra de endereço, indicando um site autêntico e seguro.</p>
        <a type="button" class="button-certificado text-xs border border-[#23a6f0]  text-white font-bold py-0 px-12 rounded-full bg-[white] hover:bg-[#23a6f0] transition duration-300 ease-out cursor-pointer">
          <svg class="svg-hover" width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M17.4033 13.2491L27.7803 13.2491L27.7803 23.6261M13.2491 27.7803L27.635 13.3944" stroke="#23A6F0" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </a>
      </div>
      <div id="card-certificado" class="max-w-[414px] max-h-[273px] border border-[#B7B7B7] rounded-md p-8 mx-auto drop-shadow-2xl bg-[#23a6f0] text-white">
        <div id="iconsCertificadoBlue" class="iconsCertificado">
          <svg width="40" height="40" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M13.8542 20.0492C13.8542 21.4638 14.9479 22.6013 16.2896 22.6013H19.0313C20.1979 22.6013 21.1459 21.6096 21.1459 20.37C21.1459 19.0429 20.5625 18.5617 19.7021 18.2554L15.3125 16.7242C14.4521 16.4179 13.8688 15.9512 13.8688 14.6096C13.8688 13.3846 14.8167 12.3783 15.9834 12.3783H18.725C20.0667 12.3783 21.1604 13.5158 21.1604 14.9304M17.5 10.9375V24.0625" stroke="#23A6F0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M17.5 2.91663C9.45002 2.91663 2.91669 9.44996 2.91669 17.5C2.91669 23.2458 6.24169 28.2187 11.0834 30.5958M32.0834 17.5C32.0834 25.55 25.55 32.0833 17.5 32.0833M32.0834 8.74996V2.91663M32.0834 2.91663H26.25M32.0834 2.91663L24.7917 10.2083" stroke="#23A6F0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>        
        <h3 class="text-center text-2xl font-bold">Facilidade de Empréstimo</h3>
        <p class="text-center text-base	mt-3">Simplifique o processo de empréstimo com um certificado digital, agilizando solicitações e análises de crédito de forma segura e conveniente.</p>
        <a type="button" class="button-certificado button-certificado-middle  text-xs border border-[#ffffff]  text-white font-bold py-0 px-12 rounded-full bg-[#23a6f0] hover:bg-[#ffffff] transition duration-300 ease-out cursor-pointer">
          <svg class="svg-hover" width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M17.4033 13.2491L27.7803 13.2491L27.7803 23.6261M13.2491 27.7803L27.635 13.3944" stroke="#FFFFFF" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </a>
      </div>
      <div id="card-certificado" class="max-w-[414px] max-h-[273px] border border-[#B7B7B7] rounded-md p-8 mx-auto drop-shadow-2xl">
        <div class="iconsCertificado">
          <svg width="40" height="40" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M30.0271 10.3819C30.0271 8.58818 28.6562 6.60485 26.9791 5.97777L19.7021 3.25068C18.4917 2.7986 16.5083 2.7986 15.2979 3.25068L8.02082 5.99235C6.34373 6.61943 4.9729 8.60277 4.9729 10.3819V21.2173C4.9729 22.9382 6.1104 25.1986 7.49582 26.234L13.7666 30.9153C15.8229 32.4611 19.2062 32.4611 21.2625 30.9153L27.5333 26.234C28.9187 25.1986 30.0562 22.9382 30.0562 21.2173V16.084" stroke="#23A6F0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>        
        <h3 class="text-center text-2xl font-bold">Segurança Online</h3>
        <p class="text-center text-base	mt-3">Mantenha seu website protegido com um certificado digital que criptografa dados confidenciais, garantindo a segurança das informações.</p>
        <a type="button" class="button-certificado text-xs border border-[#23a6f0]  text-white font-bold py-0 px-12 rounded-full bg-[white] hover:bg-[#23a6f0] transition duration-300 ease-out cursor-pointer">
          <svg class="svg-hover" width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M17.4033 13.2491L27.7803 13.2491L27.7803 23.6261M13.2491 27.7803L27.635 13.3944" stroke="#23A6F0" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </a>
      </div>
    </div>
  </div>

  {{-- Mobile --}}
  <div class="md:hidden">
    <!-- Exibir como um carrossel Owl Carousel no modo mobile -->
    <div class="owl-carousel">
      <div class="w-full border border-[#B7B7B7] h-[209px] rounded-md p-5 max-w-[18rem] mx-auto carousel-item drop-shadow-lg">
        <div class="iconsCertificado">
          <svg width="40" height="40" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M8.75 14.5833V11.6666C8.75 6.83954 10.2083 2.91663 17.5 2.91663C24.7917 2.91663 26.25 6.83954 26.25 11.6666V14.5833M13.8542 23.3333C13.8542 24.3002 14.2383 25.2276 14.922 25.9113C15.6057 26.595 16.5331 26.9791 17.5 26.9791C18.4669 26.9791 19.3943 26.595 20.078 25.9113C20.7617 25.2276 21.1458 24.3002 21.1458 23.3333C21.1458 22.3664 20.7617 21.439 20.078 20.7553C19.3943 20.0716 18.4669 19.6875 17.5 19.6875" stroke="#23A6F0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M32.0833 24.7917V21.875C32.0833 16.0417 30.625 14.5834 24.7917 14.5834H10.2083C4.37501 14.5834 2.91667 16.0417 2.91667 21.875V24.7917C2.91667 30.625 4.37501 32.0834 10.2083 32.0834H24.7917C27.3583 32.0834 29.0792 31.8063 30.2021 30.9896" stroke="#23A6F0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div> 
        <h3 class="text-center mt-3 text-base font-bold">Confiabilidade e Autenticidade</h3>
        <p class="text-center text-sm my-3 mb-5">Aumente a confiança dos seus clientes ao exibir o cadeado verde e o "https://" na barra de endereço, indicando um site autêntico e seguro.</p>
        <a type="button" class="button-certificado text-xs border border-[#23a6f0]  text-white font-bold py-0 px-12 rounded-full bg-[white] hover:bg-[#23a6f0] transition duration-300 ease-out cursor-pointer">
          <svg class="svg-hover" width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M17.4033 13.2491L27.7803 13.2491L27.7803 23.6261M13.2491 27.7803L27.635 13.3944" stroke="#23A6F0" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </a>
      </div>
      <div class="w-full border border-[#B7B7B7] h-[209px] rounded-md p-5 max-w-[18rem] mx-auto carousel-item drop-shadow-lg">
        <div id="iconsCertificadoBlue" class="iconsCertificado">
          <svg width="40" height="40" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M13.8542 20.0492C13.8542 21.4638 14.9479 22.6013 16.2896 22.6013H19.0313C20.1979 22.6013 21.1459 21.6096 21.1459 20.37C21.1459 19.0429 20.5625 18.5617 19.7021 18.2554L15.3125 16.7242C14.4521 16.4179 13.8688 15.9512 13.8688 14.6096C13.8688 13.3846 14.8167 12.3783 15.9834 12.3783H18.725C20.0667 12.3783 21.1604 13.5158 21.1604 14.9304M17.5 10.9375V24.0625" stroke="#23A6F0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M17.5 2.91663C9.45002 2.91663 2.91669 9.44996 2.91669 17.5C2.91669 23.2458 6.24169 28.2187 11.0834 30.5958M32.0834 17.5C32.0834 25.55 25.55 32.0833 17.5 32.0833M32.0834 8.74996V2.91663M32.0834 2.91663H26.25M32.0834 2.91663L24.7917 10.2083" stroke="#23A6F0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>   
        <h3 class="text-center mt-3 text-base font-bold">Facilidade de Empréstimo</h3>
        <p class="text-center text-sm my-3">Simplifique o processo de empréstimo com um certificado digital, agilizando solicitações e análises de crédito de forma segura e conveniente.</p>
        <a type="button" class="button-certificado button-certificado-middle  text-xs border border-[#ffffff]  text-white font-bold py-0 px-12 rounded-full bg-[#23a6f0] hover:bg-[#ffffff] transition duration-300 ease-out cursor-pointer">
          <svg class="svg-hover" width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M17.4033 13.2491L27.7803 13.2491L27.7803 23.6261M13.2491 27.7803L27.635 13.3944" stroke="#FFFFFF" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </a>
      </div>
      <div class="w-full border border-[#B7B7B7] h-[209px] rounded-md p-5 max-w-[18rem] mx-auto carousel-item drop-shadow-lg">
        <div class="iconsCertificado">
          <svg width="40" height="40" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M30.0271 10.3819C30.0271 8.58818 28.6562 6.60485 26.9791 5.97777L19.7021 3.25068C18.4917 2.7986 16.5083 2.7986 15.2979 3.25068L8.02082 5.99235C6.34373 6.61943 4.9729 8.60277 4.9729 10.3819V21.2173C4.9729 22.9382 6.1104 25.1986 7.49582 26.234L13.7666 30.9153C15.8229 32.4611 19.2062 32.4611 21.2625 30.9153L27.5333 26.234C28.9187 25.1986 30.0562 22.9382 30.0562 21.2173V16.084" stroke="#23A6F0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>  
        <h3 class="text-center mt-3 text-base font-bold">Facilidade de Empréstimo</h3>
        <p class="text-center text-sm my-3">Simplifique o processo de empréstimo com um certificado digital, agilizando solicitações e análises de crédito de forma segura e conveniente.</p>
        <a type="button" class="button-certificado text-xs border border-[#23a6f0]  text-white font-bold py-0 px-12 rounded-full bg-[white] hover:bg-[#23a6f0] transition duration-300 ease-out cursor-pointer">
          <svg class="svg-hover" width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M17.4033 13.2491L27.7803 13.2491L27.7803 23.6261M13.2491 27.7803L27.635 13.3944" stroke="#23A6F0" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </a>
      </div>
    </div>
  </div>

</section >

{{-- Desktop --}}
<section id="section-simular" class="w-screen h-screen bg-cover bg-center hidden md:flex bg-[#DFEEF6] px-[40px] flex justify-end md:px-64" style="background-image: url('./assets/images/background3.png');">
    <div class="my-auto flex flex-end">
      <div id="card-form" class="bg-white px-14 py-10 pb-16 rounded-xl drop-shadow-md min-w-[38rem] max-w-[42rem]">
        <h2 class="text-center text-2xl font-bold">Empréstimo <span class="font-normal">de até</span> R$ 50.000</h2>
        <p class="text-center text-2xl font-bold text-[#23A6F0] mb-10">Simule já</p>

        <form id="formulario-simulacao" class="ajaxForm" method="POST">
          @csrf
          <div class="flex flex-wrap">
            <input type="text" name="nome" placeholder="Nome" autocomplete="off" class="mb-5 w-full px-5 py-5 border border-[#D9D9D9] rounded-lg focus:drop-shadow-lg focus:border-[#23A6F0] focus:border-2 focus:outline-none transition duration-500">
            <input type="text" name="cnpj" placeholder="CNPJ" autocomplete="off" class="cnpj mb-5 w-full px-5 py-5 border border-[#D9D9D9] rounded-lg focus:drop-shadow-lg focus:border-[#23A6F0] focus:border-2 focus:outline-none transition duration-500">
            <input name="faturamento" placeholder="Faturamento" autocomplete="off" class="faturamento mb-5 w-full px-5 py-5 border border-[#D9D9D9] rounded-lg focus:drop-shadow-lg focus:border-[#23A6F0] focus:border-2 focus:outline-none transition duration-500" maxlength="30">
          </div>

          <div class="grid grid-cols-6 gap-3">
            <input type="tel" name="ddd" placeholder="DDD" autocomplete="off" class="ddd col-span-1 mb-5 w-full px-5 py-5 border border-[#D9D9D9] rounded-lg focus:drop-shadow-lg focus:border-[#23A6F0] focus:border-2 focus:outline-none transition duration-500">
            <input type="tel" name="numero" placeholder="Telefone" autocomplete="off" class="js-phoneMask col-span-5 mb-5 w-full px-5 py-5 border border-[#D9D9D9] rounded-lg focus:drop-shadow-lg focus:border-[#23A6F0] focus:border-2 focus:outline-none transition duration-500">
          </div>

          <div class="flex">
            <input class="mr-2" type="checkbox" name="whatsapp" id="whatsapp" value="WhatsApp">
            <label class="text-[#B6B6B6] mr-2" for="whatsapp">WhatsApp</label>
            <img src="./assets/images/whatsapp.svg" alt="">
          </div>

        </form>
      </div>
      <input id="submit-simule" type="submit" class="text-xl text-white font-bold py-3 px-12 rounded-full bg-[#23A6F0] hover:bg-[#00003C] transition duration-300 ease-out cursor-pointer" value="SIMULE" form="formulario-simulacao">
    </div>
</section>

{{-- Mobile --}}
<section id="formulario-simulacao-mobile" class="flex w-screen h-screen bg-cover bg-center md:hidden bg-[#DFEEF6] px-[40px] md:px-64" style="background-image: url('./assets/images/background3.png');">
    <div class="my-auto">
        <div class="bg-white px-6 py-4 pb-14 rounded-xl drop-shadow-md">
          <h2 class="text-center text-md font-extrabold">Empréstimo <span class="font-normal">de até</span> R$ 50.000</h2>
          <p class="text-center text-md font-extrabold text-[#23A6F0] mb-5">Simule já</p>
  
          <form class="ajaxForm2" method="POST">
            @csrf
            <div class="flex flex-wrap">
              <input type="text" name="nome" placeholder="Nome" autocomplete="off" class="text-xs mb-2 w-full px-3 py-3 border border-[#D9D9D9] rounded-lg focus:drop-shadow-lg focus:border-[#23A6F0] focus:border-1 focus:outline-none transition duration-500">
              <input type="text" name="cnpj" placeholder="CNPJ" autocomplete="off" class="cnpj text-xs mb-2 w-full px-3 py-3 border border-[#D9D9D9] rounded-lg focus:drop-shadow-lg focus:border-[#23A6F0] focus:border-1 focus:outline-none transition duration-500">
              <input type="text" name="faturamento" placeholder="Faturamento" autocomplete="off" class="faturamento text-xs  mb-2 w-full px-3 py-3 border border-[#D9D9D9] rounded-lg focus:drop-shadow-lg focus:border-[#23A6F0] focus:border-1 focus:outline-none transition duration-500">
            </div>
  
            <div class="grid grid-cols-6 gap-3">
              <input type="tel" name="ddd" placeholder="DDD" class="ddd2 text-xs col-span-2 mb-2 w-full px-3 py-3 border border-[#D9D9D9] rounded-lg focus:drop-shadow-lg focus:border-[#23A6F0] focus:border-1 focus:outline-none transition duration-500">
              <input type="tel" name="numero" placeholder="Telefone" class="js-phoneMask2 text-xs col-span-4 mb-2 w-full px-3 py-3 border border-[#D9D9D9] rounded-lg focus:drop-shadow-lg focus:border-[#23A6F0] focus:border-1 focus:outline-none transition duration-500">
            </div>
  
            <div class="flex mt-2">
              <input class="mr-2" type="checkbox" name="whatsapp" id="whatsapp">
              <label class="text-[#B6B6B6] my-auto text-xs mr-2" for="whatsapp">WhatsApp</label>
              <img style="width: 16px;" src="./assets/images/whatsapp.svg" alt="">
            </div>
  
          </form>
        </div>
        <input id="submit-simule-mobile" type="button" class="text-xs text-white font-bold py-3 px-12 rounded-full bg-[#23A6F0] hover:bg-[#00003C] transition duration-300 ease-out cursor-pointer" value="SIMULE" form="formulario-simulacao-mobile">
      </div>
    </div>
 </section>


 {{-- Desktop/Mobile --}}

 <section id="section-melhor-opcao" class="flex px-[40px] py-10 md:py-28 md:px-64" style="background-image: url('./assets/images/background4.png');">
  <div class="md:grid md:grid-cols-2">

    <div class="md:hidden flex my-auto">
      <img class="w-[247px] mx-auto" src="./assets/images/imagemdinheiro.png" alt="">
    </div>
    
    <div class="my-auto">
      <div id="sua-melhor">
        <h2 id="melhor" class="text-3xl pt-4   text-center text-3xl font-bold text-black  md:text-5xl md:text-left">Sua melhor opção para <br><span class="text-[#23A6F0]"> Empréstimos</span></h2>
        <p class="font-semibold text-sm text-center md:text-left md:text-lg mt-7">O Banco Safra é uma instituição financeira renomada e confiável, com uma sólida reputação no mercado. Oferecem uma variedade de soluções de empréstimo para atender às necessidades individuais e empresariais, combinando taxas competitivas, flexibilidade e excelência no atendimento ao cliente.</p>
      </div>

      <ul id="lista" class="text-lg md:text-2xl py-8 font-bold space-y-10">
        <li class="flex items-center space-x-2">
          <img src="./assets/images/check.svg" class="w-8" alt="Ícone">
          <span>Taxas Competitivas</span>
        </li>
        <li class="flex items-center space-x-2">
          <img src="./assets/images/check.svg" class="w-8" alt="Ícone">
          <span>Flexibilidade nas Condições</span>
        </li>
        <li class="flex items-center space-x-2">
          <img src="./assets/images/check.svg" class="w-8" alt="Ícone">
          <span>Atendimento Personalizado</span>
        </li>
        <li class="flex items-center space-x-2">
          <img src="./assets/images/check.svg" class="w-8" alt="Ícone">
          <span>Experiência e Confiabilidade</span>
        </li>
      </ul>
    </div>
    <div class="hidden md:flex md:items-center">
      <img class="mx-auto" src="./assets/images/imagemdinheiro.png" alt="">
    </div>    
  </div>
</section>

{{-- Mobile --}}
<footer id="footer" class="py-4 md:hidden md:h-[238px] bg-[#23A6F0] px-[40px] md:px-64">

  <div class="grid grid-cols-3">
    <div class="flex">
      <img class="my-auto" src="./assets/images/logo-safra3.png" alt="">
    </div>

    <ul class="text-white text-[8px] mx-auto items-center space-y-[6px] md:text-lg md:flex md:justify-end md:space-x-16 md:ml-auto">
      <li class="transition duration-300 ease-out"><a href="https://www.safra.com.br/sobre/relacoes-com-investidores/informacoes-financeiras.htm" target="_blank">Sobre</a></li>
      <li class="transition duration-300 ease-out"><a href="https://www.safra.com.br/servicos/pessoa-fisica/seguros.htm" target="_blank">Seguro.</a></li>
      <li class="transition duration-300 ease-out"><a href="https://www.safra.com.br/servicos/pessoa-fisica/cambio.htm" target="_blank">Câmbio</a></li>
    </ul>
    
    <ul class="text-white text-[8px] mx-auto items-center space-y-[6px] md:text-lg md:flex md:justify-end md:space-x-16 md:ml-auto">
      <li class="transition duration-300 ease-out"><a href="https://www.safra.com.br/servicos/pessoa-fisica/cartoes.htm" target="_blank">Investimentos</a></li>
      <li class="transition duration-300 ease-out"><a href="https://www.safra.com.br/servicos/pessoa-fisica/cartoes.htm" target="_blank">Cartão de Crédito</a></li>
      <li class="transition duration-300 ease-out"><a href="https://www.safra.com.br/atendimento/atendimento-ao-cliente.htm" target="_blank">Atendimento ao cliente</a></li>
    </ul>
  </div>

  <div class="w-full h-[1px] bg-white mt-4 opacity-30"></div>

  <div class="flex mt-[8px] justify-between">
    <p class="text-white text-[6px]">© 2023 All rights reserved.</p>
    <p class="text-white text-[6px]">Banco Safra S/A - CNPJ: 58.160.789/0001-28</p>
  </div>

</footer>

{{-- Desktop --}}
<footer id="footer" class="hidden py-8 md:block h-auto bg-[#23A6F0] md:px-64">
  <div class="flex justify-between mb-4">
    <img id="logo-footer" class="my-auto w-48" src="./assets/images/logo-safra2.png" alt="">
  
    <ul id="lista-footer" class="text-white text-sm items-center flex justify-end space-x-8">
      <li class="transition duration-300 ease-out opacity-90 hover:opacity-100"><a href="https://www.safra.com.br/sobre/relacoes-com-investidores/informacoes-financeiras.htm" target="_blank">Sobre</a></li>
      <li class="transition duration-300 ease-out opacity-90 hover:opacity-100"><a href="https://www.safra.com.br/servicos/pessoa-fisica/seguros.htm" target="_blank">Seguro</a></li>
      <li class="transition duration-300 ease-out opacity-90 hover:opacity-100"><a href="https://www.safra.com.br/servicos/pessoa-fisica/cambio.htm" target="_blank">Câmbio</a></li>
      <li class="transition duration-300 ease-out opacity-90 hover:opacity-100"><a href="https://www.safra.com.br/servicos/pessoa-fisica/investimentos.htm" target="_blank">Investimentos</a></li>
      <li class="transition duration-300 ease-out opacity-90 hover:opacity-100"><a href="https://www.safra.com.br/servicos/pessoa-fisica/cartoes.htm" target="_blank">Cartão de Crédito</a></li>
      <li class="transition duration-300 ease-out opacity-90 hover:opacity-100"><a href="https://www.safra.com.br/atendimento/atendimento-ao-cliente.htm" target="_blank">Atendimento ao cliente</a></li>
    </ul>
  </div>

  <div class="w-full h-[1px] bg-white opacity-30"></div>

  <div id="direitos" class="flex mt-[10px] justify-between">
    <p class="text-white text-[12px]">© {{ date('Y') }} Todos os direitos reservados.</p>
    <p class="text-white text-[12px]">Banco Safra S/A - CNPJ: 58.160.789/0001-28</p>
  </div>
  
</footer>

<style>

  .line{
    position: relative;
  }
  .line::after{
    opacity: 0.5;
    content: '';
    position: absolute;
    top: 100px;
    left: calc(19%);
    height: 0.4rem;
    width: calc(50% - -171px);
    border-radius: 5px;
    border-bottom: white 1px solid;
  }
  #certificado{
    position: relative;
  }
  #certificado::after{
    content: '';
    position: absolute;
    top: calc(100% - -3px);
    left: calc(29.5%);
    height: 0.4rem;
    width: 22%;
    background-color: #23A6F0;
    border-radius: 5px;
  }

  #melhor::after{
    content: '';
    display: block;
    width: 12rem;
    height: 0.4rem;
    background-color: #23A6F0;
    margin: 0 auto;
    position: absolute;
    border-radius: 5px;
    margin-top: 10px
  }

  input[type="number"]::-webkit-inner-spin-button,
  input[type="number"]::-webkit-outer-spin-button {
  -webkit-appearance: none;
  margin: 0;
  }

  html {
    scroll-behavior: smooth;
  }

</style>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    var smoothScrollLinks = document.getElementsByClassName('scroll-smooth');
    for (var i = 0; i < smoothScrollLinks.length; i++) {
      smoothScrollLinks[i].addEventListener('click', function(event) {
        event.preventDefault();
        var target = this.getAttribute('href');
        document.querySelector(target).scrollIntoView({
          behavior: 'smooth'
        });
      });
    }
  });
</script>

<script src="./assets/js/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>
<script>
    $(document).ready(function() {
        $('.ajaxForm').on('submit', function(e) {
        e.preventDefault();
        let form = $(this);
        let data = form.serializeArray();
        $('#submit-simule').prop('disabled', true);           
            $.ajax({
                type: 'POST',
                url: '/simulacao',
                data: data,
                success: function(response) {
                    swal({
                        title: "Operação concluída com sucesso",
                        icon: "success",
                        button: "OK",
                    }).then(function () {
                        window.location.href = '/simulacao';
                    });
                },
                error: function(error) {
                    if(error.responseJSON.erro){
                        swal({
                            title: error.responseJSON.erro,
                            icon: "error",
                            button: "OK",
                        });
                    } else{
                        swal({
                            title: 'Preencha os dados',
                            icon: "error",
                            button: "OK",
                        });
                    }
                },
                complete: function() {
                    $('#submit-simule').prop('disabled', false);
                }
            });
        });
    });

    $(document).ready(function() {
        $('.ajaxForm2').on('submit', function(e) {
        e.preventDefault();
        let form = $(this);
        let data = form.serializeArray();
        $('#submit-simule-mobile').prop('disabled', true);           
            $.ajax({
                type: 'POST',
                url: '/simulacao',
                data: data,
                success: function(response) {
                    swal({
                        title: "Operação concluída com sucesso",
                        icon: "success",
                        button: "OK",
                    }).then(function () {
                        window.location.href = '/simulacao';
                    });
                },
                error: function(error) {
                    if(error.responseJSON.erro){
                        swal({
                            title: error.responseJSON.erro,
                            icon: "error",
                            button: "OK",
                        });
                    } else{
                        swal({
                            title: 'Preencha os dados',
                            icon: "error",
                            button: "OK",
                        });
                    }
                },
                complete: function() {
                    $('#submit-simule-mobile').prop('disabled', false);
                }
            });
        });
    });
</script>
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
<script>

    function inputPhoneMask(input) {
      var input = document.querySelector(input);
      $(input).mask("00000-00009");
      input.onkeyup = function () {
        var val = input.value;
        var isNine = val.slice(5, 6);

        if (isNine == 9) {
          $(input).mask("00 0000-0000");
        } else {
          $(input).mask("00000-0000");
        }
      };
  }
  inputPhoneMask(".js-phoneMask");
  inputPhoneMask(".js-phoneMask2");

  function inputPhoneMaskDDD(input) {
    var input = document.querySelector(input);
      $(input).mask("(00)");
      input.onkeyup = function () {
        var val = input.value;
        var isNine = val.slice(5, 6);

        if (isNine == 9) {
          $(input).mask("(00)");
        } else {
          $(input).mask("(00)");
        }
      };
  }
  inputPhoneMaskDDD(".ddd");
  inputPhoneMaskDDD(".ddd2");

  $(document).ready(function () {
      var $cnpj = $(".cnpj");
      $cnpj.mask('00.000.000/0000-00');
    });
    $(document).ready(function() {
    var $faturamento = $(".faturamento");
    $faturamento.maskMoney({
      prefix: "R$ ",
      thousands: ".",
      decimal: ",",
      precision: 2
    });
  });

</script>
@endsection
