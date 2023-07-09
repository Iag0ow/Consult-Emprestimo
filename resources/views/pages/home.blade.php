@extends('layouts.master')
@section('conteudo')
<section class="relative w-screen">
  <nav class="absolute px-5 md:px-64 flex top-0 left-0 right-0 z-10">
    <img src="./assets/images/logo-safra.png" class="w-32 md:w-48" alt="logo safra">

    <button class="ml-auto md:hidden">
      <img class="w-4" src="./assets/images/icon-menu.svg" alt="">
    </button>

    <ul class="hidden md:flex text-[#DCDCDC] text-xl	 items-center justify-end space-x-16 ml-auto ">
      <li class="hover:text-white transition duration-300 ease-out"><a href="#">Início</a></li>
      <li class="hover:text-white transition duration-300 ease-out"><a href="#certificado">Certificado</a></li>
      <li class="hover:text-white transition duration-300 ease-out"><a href="#section-simular">Contrate</a></li>
      <li class="hover:text-white transition duration-300 ease-out"><a href="#footer">Contato</a></li>
    </ul>
  </nav>

  <div class="bg-cover bg-center h-screen w-screen" style="background-image: url('./assets/images/hero1.png'); z-index: 1;"></div>

  <div class="absolute px-[40px] inset-x-0 bottom-0 flex md:px-64 md:top-0 md:items-center md:justify-start">
      <div class="block items-center justify-center w-full max-w-md md:max-w-2xl">
        <h1 class="text-4xl text-white font-extrabold md:text-7xl">Crédito Digital <br> Safra</h1>
        <p class="text-white text-base font-base py-4 w-[80%] md:text-lg">Empréstimo fácil e rápido para sua empresa.</p>
        <a href="#section-simular" class="text-white p-3 px-5 font-bold w-full bg-[#23A6F0] text-xs rounded-full md:text-sm md:max-w-[200px] hover:bg-[#00003C] transition duration-300 ease-out">Simule e Contrate</a>
        <a class="text-white p-3 mb-10 mt-2 px-5 font-bold w-full border border-[#ffff] md:text-sm text-xs md:max-w-[200px] rounded-full hover:shadow-xl hover:shadow-[#FFFFFF] transition duration-700 ease-out">Saiba Mais</a>
        {{-- <div class="flex justify-center align-center mb-5 md:hidden">
          <img class="animate-pulse w-7" src="./assets/images/arrow-down.svg" alt="">
        </div> --}}
      </div>
  </div>
</section>

<section class="bg-cover bg-center h-screen w-screen px-[40px] md:px-64 {{-- py-44 --}}" style="background-image: url('./assets/images/background2.png');;">

<div class="justify-center items-center mb-16">
  <h2 id="certificado" class="text-center text-4xl md:text-6xl font-semibold text-black">Certificado Digital</h2>
  <p class="text-center text-xs md:text-lg pt-4">Adquira um certificado digital confiável para garantir a segurança e agilidade na <br>obtenção de empréstimos.</p>
</div>

  {{-- Desktop --}}
  <div class="hidden md:block">
    <div class="grid grid-cols-3 gap-4">
      <div class="max-w-[414px] max-h-[273px] border border-[#B7B7B7] rounded-md p-8 mx-auto drop-shadow-2xl">
        <h3 class="text-center text-2xl font-bold">Confiabilidade e Autenticidade</h3>
        <p class="text-center text-base	 mt-3">Aumente a confiança dos seus clientes ao exibir o cadeado verde e o "https://" na barra de endereço, indicando um site autêntico e seguro.</p>
      </div>
      <div class="max-w-[414px] max-h-[273px] border border-[#B7B7B7] rounded-md p-8 mx-auto drop-shadow-2xl">
        <h3 class="text-center text-2xl font-bold">Facilidade de Empréstimo</h3>
        <p class="text-center text-base	mt-3">Simplifique o processo de empréstimo com um certificado digital, agilizando solicitações e análises de crédito de forma segura e conveniente.</p>
      </div>
      <div class="max-w-[414px] max-h-[273px] border border-[#B7B7B7] rounded-md p-8 mx-auto drop-shadow-2xl">
        <h3 class="text-center text-2xl font-bold">Segurança Online</h3>
        <p class="text-center text-base	mt-3">Mantenha seu website protegido com um certificado digital que criptografa dados confidenciais, garantindo a segurança das informações.</p>
      </div>
    </div>
  </div>

  {{-- Mobile --}}
  <div class="md:hidden">
    <!-- Exibir como um carrossel Owl Carousel no modo mobile -->
    <div class="owl-carousel">
      <div class="w-full border border-[#B7B7B7] h-[209px] rounded-md p-5 max-w-[18rem] mx-auto carousel-item drop-shadow-lg">
        <h3 class="text-center text-base font-bold">Confiabilidade e Autenticidade</h3>
        <p class="text-center text-sm mt-3">Aumente a confiança dos seus clientes ao exibir o cadeado verde e o "https://" na barra de endereço, indicando um site autêntico e seguro.</p>
      </div>
      <div class="w-full border border-[#B7B7B7] h-[209px] rounded-md p-5 max-w-[18rem] mx-auto carousel-item drop-shadow-lg">
        <h3 class="text-center text-base font-bold">Facilidade de Empréstimo</h3>
        <p class="text-center text-sm mt-3">Simplifique o processo de empréstimo com um certificado digital, agilizando solicitações e análises de crédito de forma segura e conveniente.</p>
      </div>
      <div class="w-full border border-[#B7B7B7] h-[209px] rounded-md p-5 max-w-[18rem] mx-auto carousel-item drop-shadow-lg">
        <h3 class="text-center text-base font-bold">Facilidade de Empréstimo</h3>
        <p class="text-center text-sm mt-3">Simplifique o processo de empréstimo com um certificado digital, agilizando solicitações e análises de crédito de forma segura e conveniente.</p>
      </div>
    </div>
  </div>

</section >

{{-- Desktop --}}
<section id="section-simular" class="w-screen h-screen bg-cover bg-center hidden md:flex bg-[#DFEEF6] px-[40px] md:px-64 mb-16" style="background-image: url('./assets/images/background3.png');">

 <div class="grid grid-cols-2">

  <div></div>

    <div class="my-auto">
      <div id class="bg-white px-14 py-10 pb-16 rounded-xl drop-shadow-md min-w-[38rem] max-w-[42rem]">
        <h2 class="text-center text-2xl font-bold">Empréstimo <span class="font-normal">de até</span> R$ 50.000</h2>
        <p class="text-center text-2xl font-bold text-[#23A6F0] mb-10">Simule já</p>

        <form class="ajaxForm" method="POST">
          @csrf
          <div class="flex flex-wrap">
            <input type="text" name="nome" placeholder="Nome" autocomplete="off" class="mb-5 w-full px-5 py-5 border border-[#D9D9D9] rounded-lg focus:drop-shadow-lg focus:border-[#23A6F0] focus:border-2 focus:outline-none transition duration-500">
            <input type="number" name="cnpj" placeholder="CNPJ" autocomplete="off" class="mb-5 w-full px-5 py-5 border border-[#D9D9D9] rounded-lg focus:drop-shadow-lg focus:border-[#23A6F0] focus:border-2 focus:outline-none transition duration-500">
            <input type="number" name="faturamento" placeholder="Faturamento" autocomplete="off" class="mb-5 w-full px-5 py-5 border border-[#D9D9D9] rounded-lg focus:drop-shadow-lg focus:border-[#23A6F0] focus:border-2 focus:outline-none transition duration-500">
          </div>

          <div class="grid grid-cols-6 gap-3">
            <input type="number" name="ddd" placeholder="DDD" class="col-span-1 mb-5 w-full px-5 py-5 border border-[#D9D9D9] rounded-lg focus:drop-shadow-lg focus:border-[#23A6F0] focus:border-2 focus:outline-none transition duration-500">
            <input type="number" name="numero" placeholder="Telefone" class="col-span-5 mb-5 w-full px-5 py-5 border border-[#D9D9D9] rounded-lg focus:drop-shadow-lg focus:border-[#23A6F0] focus:border-2 focus:outline-none transition duration-500">
          </div>

          <div class="flex">
            <input class="mr-2" type="checkbox" name="whatsapp" id="whatsapp">
            <label class="text-[#B6B6B6] mr-2" for="whatsapp">WhatsApp</label>
            <img src="./assets/images/whatsapp.svg" alt="">
          </div>

        </form>
      </div>
      <input id="submit-simule" type="button" class="text-xl text-white font-bold py-3 px-12 rounded-full bg-[#23A6F0] hover:bg-[#00003C] transition duration-300 ease-out cursor-pointer" value="SIMULE">
  </div>
</section>

{{-- Desktop/Mobile --}}
<section class="flex px-[40px] h-screen md:px-64" style="background-image: url('./assets/images/background4.png');">
  <div class="md:grid md:grid-cols-2">

    <div class="md:hidden flex">
      <img class="w-[247px] mx-auto" src="./assets/images/imagemdinheiro.png" alt="">
    </div>

    <div class="my-auto">
      <div>
        <h2 id="melhor" class="text-3xl text-center text-3xl font-bold text-black  md:text-5xl md:text-left">Sua melhor opção para <br><span class="text-[#23A6F0]"> Empréstimos</span></h2>
        <p class="font-semibold text-sm text-center md:text-left md:text-lg mt-7">O Banco Safra é uma instituição financeira renomada e confiável, com uma sólida reputação no mercado. Oferecem uma variedade de soluções de empréstimo para atender às necessidades individuais e empresariais, combinando taxas competitivas, flexibilidade e excelência no atendimento ao cliente.</p>
      </div>

      <ul class="text-lg md:text-2xl py-8 font-bold space-y-10">
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

<footer id="footer" class="py-4 md:hidden md:h-[238px] bg-[#23A6F0] px-[40px] md:px-64">

  <div class="grid grid-cols-3">
    <div>
      <img src="./assets/images/logo-safra.png" alt="">
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

</footer>

<style>
  nav{
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
    width: 15rem;
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
