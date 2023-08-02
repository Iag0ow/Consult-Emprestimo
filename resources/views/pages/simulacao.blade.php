@extends('layouts.master')
@section('conteudo')
@php
    $valorTotal = isset($valorTotal) ? $valorTotal : 50000;
@endphp

<section id="app" class="relative w-screen line">
  <div class="relative">
    <nav id="nav" class="absolute px-5 md:px-64 flex top-0 left-0 right-0 z-10">
      <a href="/"><img id="image-nav" src="./assets/images/logo-safra.png" class="w-32 md:w-48" alt="logo safra"></a>
  
      <button id="sidenav-trigger" class="ml-auto md:hidden" onclick="openNav()">
        <img class="w-4" src="./assets/images/icon-menu.svg" alt="">
      </button>
  
      <ul id="lista-nav" class="hidden md:flex text-[#DCDCDC] text-xl items-center justify-end space-x-16 ml-auto ">
        <li class="hover:text-white transition duration-300 ease-out"><a href="#">Início</a></li>
        <li class="hover:text-white transition duration-300 ease-out"><a href="/#certificado">Certificado</a></li>
        <li class="hover:text-white transition duration-300 ease-out"><a href="/#section-simular">Contrate</a></li>
        <li class="hover:text-white transition duration-300 ease-out"><a href="/#footer">Contato</a></li>
      </ul>
    </nav>
  </div>

  <div id="mySidenav" class="sidenav md:hidden">
    <button href="javascript:void(0)" class="closebtn" onclick="closeNav()" >&times;</button>
    <ul class="opcoes">
      <li>
        <a class="link" onclick="closeNav()" href="#"><span>Início</span></a>
      </li>
      <li>
        <a class="link" onclick="closeNav()" href="#certificado"><span>Certificado</span></a>
      </li>
      <li class="nav-item opcao">
        <a class="link" onclick="closeNav()" href="#formulario-simulacao-mobile"><span>Contrate</span></a>
      </li>
      <li class="nav-item opcao">
        <a class="link" onclick="closeNav()" href="#footer"><span>Contato</span></a>
      </li>
    </ul>
  </div>

  {{-- Desktop --}}
  <div class="hidden md:flex items-center align-middle justify-center bg-cover bg-center h-screen w-screen" style="background-image: url('./assets/images/Bg-contrate.png'); z-index: 1;">
    <div>
        <div id="hero" class="block items-center justify-center w-full">
        <h1 class="my-5 text-white md:text-4xl font-extrabold text-center">Empréstimo de R$ <span v-text="exibirTotal"></span><span class="block">Aprovado!</span></h1>  
            <div class="relative bg-white p-3 mb-10 mt-2 px-20 pt-6 pb-12 rounded-2xl align-middle intems-center min-w-[700px] text-center">
                <span class="text-[#7B7B7B]">De quanto quer o empréstimo?</span>
                <h2 class="text-5xl text-[#23A6F0] font-extrabold py-2" v-text="'R$ ' +valorRange"></h2>
                <input type="range" class="appearance-none w-full h-3 bg-[#E7E7E7] rounded-md focus:outline-none my-2" :max="valorTotal" id="range" step="100" v-model="valorRange">
                <span class="text-[#7B7B7B]">De quanto quer o empréstimo?</span>
                <div id="parcelas" class="grid grid-cols-4 gap-4 py-2">
                    <button v-for="(parcela, index) in parcelasPadrao" :key="index" @click="selecionarParcela($event.target.value)" :value="parcela" class="bg-[#23A6F0] rounded-xl select-none py-2 px-4 text-white text-2xl font-bold hover:bg-[#00003C] transition duration-300 ease-out" :class="{'disabled': parcelaSelecionada == parcela}" v-text="parcela + 'x'"></button>
                </div>
                <span class="text-[#7B7B7B]">Sua parcela mensal será de</span>
                <div class="flex justify-center items-baseline">
                  <h2 class="text-3xl text-[#23A6F0] font-extrabold pt-2" v-text="parcelaValue"></h2>
                  <span class="text-[#7B7B7B] text-xl font-extrabold" v-text="'x'+ parcelaSelecionada"></span>
                </div>
                <input @click="contratar()" id="submit-contrate" type="submit" class="text-xl text-white drop-shadow-2xl font-bold py-3 px-12 rounded-full bg-[#23A6F0] hover:bg-[#00003C] transition duration-300 ease-out cursor-pointer" value="CONTRATAR" form="formulario-simulacao">
            </div>  
        </div>
    </div>
   </div>

   {{-- Mobile --}}
   <div class="flex md:hidden items-center align-middle justify-center bg-cover bg-center h-screen w-screen" style="background-image: url('./assets/images/Bg-contrate.png'); z-index: 1;">
    <div>
        <div id="contrate-mobile" class="block px-2 items-center justify-center w-full">
        <h1 class="my-5 text-white text-2xl font-extrabold text-center">Empréstimo de <span v-text="valorTotal.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' })"></span><span class="block">Aprovado!</span></h1>  
            <div class="relative bg-white rounded-2xl px-6 py-6 pb-10 align-middle intems-center w-full text-center">
                <span class="text-[#7B7B7B] text-sm">De quanto quer o empréstimo?</span>
                <h2 class=" text-3xl text-[#23A6F0] font-extrabold py-2">R$ 25.000</h2>
                <input type="range" class="appearance-none w-full h-3 bg-[#E7E7E7] rounded-md focus:outline-none my-2" min="100" max="50000" id="range" value="25000" step="100" v-model="valorRange">
                <span class="text-[#7B7B7B] text-sm">De quanto quer o empréstimo?</span>
                <div id="parcelas" class="grid grid-cols-4 gap-4 py-2">
                  <button v-for="(parcela, index) in parcelasPadrao" :key="index" @click="selecionarParcela($event.target.value)" :value="parcela" class="bg-[#23A6F0] rounded-xl select-none py-2 px-4 text-white text-2xl font-bold hover:bg-[#00003C] transition duration-300 ease-out" :class="{'disabled': parcelaSelecionada == parcela}" v-text="parcela + 'x'"></button>
                </div>
                <span class="text-[#7B7B7B] text-sm">Sua parcela mensal será de</span>
                <div class="flex justify-center items-baseline">
                  <h2 class="text-3xl text-[#23A6F0] font-extrabold pt-2" v-text="parcelaValue"></h2>
                  <span class="text-[#7B7B7B] text-xl font-extrabold" v-text="'x'+ parcelaSelecionada"></span>
                </div>
                <input @click="contratar()" id="submit-contrate" type="submit" class="text-lg text-white drop-shadow-2xl font-bold py-2 px-8 rounded-full bg-[#23A6F0] hover:bg-[#00003C] transition duration-300 ease-out cursor-pointer" value="CONTRATAR" form="formulario-simulacao">
            </div>  
        </div>
    </div>
   </div>

</section>


<footer id="footer" class="py-4 md:hidden md:h-[238px] bg-[#7B7B7B] px-[40px] md:px-64">





    <div class="grid grid-cols-3">
      <div class="flex">
        <img class="my-auto" src="./assets/images/logo-safra3.png" alt="">
      </div>
  
      <ul class="text-white text-[8px] mx-auto items-center space-y-[6px] md:text-lg md:flex md:justify-end md:space-x-16 md:ml-auto">
        <li class="transition duration-300 ease-out"><a href="https://www.safra.com.br/sobre/relacoes-com-investidores/informacoes-financeiras.htm" target="_blank">Sobre</a></li>
        <li class="transition duration-300 ease-out"><a href="https://www.safra.com.br/servicos/pessoa-fisica/seguros.htm" target="_blank">Seguro</a></li>
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
  <footer id="footer" class="hidden py-8 md:block h-auto bg-[#7B7B7B] md:px-64">
    <div class="flex justify-between mb-4">
      <img id="logo-footer" class="my-auto w-48" src="./assets/images/logo-safra2.png" alt="">
    
      <ul id="lista-footer" class="text-white text-sm items-center flex justify-end space-x-8">
        <li class="transition duration-300 ease-out"><a href="https://www.safra.com.br/sobre/relacoes-com-investidores/informacoes-financeiras.htm" target="_blank">Sobre</a></li>
        <li class="transition duration-300 ease-out"><a href="https://www.safra.com.br/servicos/pessoa-fisica/seguros.htm" target="_blank">Seguro</a></li>
        <li class="transition duration-300 ease-out"><a href="https://www.safra.com.br/servicos/pessoa-fisica/cambio.htm" target="_blank">Câmbio</a></li>
        <li class="transition duration-300 ease-out"><a href="https://www.safra.com.br/servicos/pessoa-fisica/investimentos.htm" target="_blank">Investimentos</a></li>
        <li class="transition duration-300 ease-out"><a href="https://www.safra.com.br/servicos/pessoa-fisica/cartoes.htm" target="_blank">Cartão de Crédito</a></li>
        <li class="transition duration-300 ease-out"><a href="https://www.safra.com.br/atendimento/atendimento-ao-cliente.htm" target="_blank">Atendimento ao cliente</a></li>
      </ul>
    </div>
  
    <div class="w-full h-[1px] bg-white opacity-30"></div>
  
    <div id="direitos" class="flex mt-[10px] justify-between">
      <p class="text-white text-[12px]">© {{ date('Y') }} Todos os direitos reservados.</p>
      <p class="text-white text-[12px]">Banco Safra S/A - CNPJ: 58.160.789/0001-28</p>
    </div>
    
</footer>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="./assets/js/sweetalert.min.js"></script>

<style>
    input[type=range]::-webkit-slider-thumb {
        appearance: none;
        width: 25px;
        height: 25px;
        border: solid 6px #23A6F0;
        border-radius: 50%;
        display: block;
        background: #ffffff;
    }
    .disabled{
        opacity: 0.5;
        cursor: not-allowed;
        pointer-events: none;
        background-color: gray;
        border-color: gray;
    }
    
</style>
<script>
  new Vue({
      el: '#app',
      data: {
        valorTotal: 0,
        exibirTotal: 0,
        valorRange: 0,
        active: false,
        parcelasPadrao: [9, 12, 18, 24, 36, 48, 60, 96],
        parcelaValue: 0,
        parcelaSelecionada: 9
      },
      methods: {
          selecionarParcela(parcela) {
          this.parcelaSelecionada = parcela;
        },
        contratar() {
            swal({
              title: "Você já possui certificado digital?",
              icon: "info",
              buttons: {
                  cancel: {
                      text: "Não",
                      value: false,
                      visible: true,
                      className: "swal-button--cancel",
                      closeModal: true,
                  },
                  confirm: {
                      text: "Sim",
                      value: true,
                      visible: true,
                      className: "swal-button--confirm",
                      closeModal: true,
                  },
              },
          }).then((value) => {
            const data = {
              _token: $('meta[name="csrf-token"]').attr('content'),
              parcela: this.parcelaSelecionada,
              valorParcela: this.parcelaValue,
              valorSolicitado: this.valorRange
            }
              if (value) {
                  swal("Contrato solicitado!", "Obrigado, entraremos em contato em breve.", "success");
                  
                  $.ajax({
                      type: 'POST',
                      url: '/parcelas',
                      data: data,
                      success: function(response) {
                          // window.location.href = '/';
                      }
                  });
              } else {
                  swal("Não possui certificado?", "Entraremos em contato para disponibilizar seu certificado digital.", "success");
                  $.ajax({
                      type: 'POST',
                      url: '/parcelas',
                      data: data,
                      success: function(response) {
                          // window.location.href = '/';
                      }
                  });
              }
          });
        },
        formatarParcela(){
          this.parcelaValue = this.valorRange / this.parcelaSelecionada;
          this.parcelaValue = this.parcelaValue.toFixed(2);
          this.parcelaValue = this.parcelaValue.toLocaleString('pt-BR', {
            style: 'currency',
            currency: 'BRL',
            minimumFractionDigits: 0,
            maximumFractionDigits: 0 
          });  
        },
        formatarValor(valor) {
          valor = Number(valor.toFixed(2));
          this.exibirTotal = valor.toLocaleString('pt-BR', {
            style: 'currency',
            currency: 'BRL',
            minimumFractionDigits: 0,
            maximumFractionDigits: 0 
          });  
        }
      },
      mounted() {
        let valor = @json($simulacao);
        // let total = valor.replace(/[R$\s.]/g, '').replace(',', '.');
        valor = Math.floor(valor * 0.70); //caso o calculo mude, basta alterar esse valor
        this.valorTotal = valor;
        this.formatarValor(valor);
        this.valorRange = valor / 2;
        this.formatarParcela();
      },
      watch: {
        valorRange() {
          this.formatarParcela();
        },
        parcelaSelecionada() {
          this.formatarParcela();
        }
      }
    });
</script>
<script>
    function openNav() {
    document.getElementById("mySidenav").style.width = "320px";
    document.getElementById("sidenav-trigger").style.display = "none";
    }

    function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("sidenav-trigger").style.display = "block";
    }

</script>
<style>
  .swal-text {
    text-align: center;
  }
  .swal-footer {
      display: flex;
      justify-content: center;
  }

  .swal-button--confirm {
      background-color: #28a745;
      transition: 1s;
  }
  .swal-button--confirm:hover {
      background-color: #1d7030;
      transition: 1s;
  }
  .swal-button:not([disabled]):hover {
      background-color: #1d7030;
      transition: 1s;
  }

  .swal-button--cancel {
      background-color: #dc3545;
      color: white;
      transition: 1s;
  }
  .swal-button--cancel:not([disabled]):hover {
      background-color: #9e2632;
      color: white;
      transition: 1s;
  }
  .swal-button--cancel:hover {
      background-color: #9e2632;
      color: white;
      transition: 1s;
  }
</style>
