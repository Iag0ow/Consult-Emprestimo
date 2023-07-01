$('head').append('<style>\
		.daddySumcap:after { content: attr(data-logic); } \
		.daddySumcap + .daddySumcap:before { content: " + "; }\
		.formResponseOkay,\
		.formResponseError,\
		.formResponseWait { margin-top: 10px; padding:8px; border-radius:4px; }\
		.formResponseOkay    { background-color:#deffcc; border:1px solid #c8f3b1; color:#7fa26b; }\
		.formResponseOkay i  { color:#7fa26b; }\
		.formResponseError   { background-color:#ffeaea; border:1px solid #f7d9d9; color:#d07878; }\
		.formResponseError i { color:#d07878; }\
		.formResponseWait    { background-color:#faffcc; border:1px solid #f3e8b1; color:#cab772; }\
		.formResponseWait i  { color:#cab772; }\
	</style>');
	
	$a = Math.floor((Math.random() * 10) + 1)
	$b = Math.floor((Math.random() * 10) + 1)
	
	document.getElementById('capA').setAttribute("data-logic", $a)
	document.getElementById('capB').setAttribute("data-logic", $b)
	document.getElementById('capTokken').value = ($a  + $b)

	// Bloqueio botão após submit
	function disabledButton(idButton){
		var button = document.getElementById(idButton);
		button.disabled = true;
		button.style.opacity = '0.6';
		button.style.pointerEvents = 'none';
		button.style.cursor = 'not-allowed';
	}

	// Com timeout
	function enableButton(idButton){
		setTimeout(function() {
			var button = document.getElementById(idButton);
			button.disabled = false;
			button.style.opacity = '1.0';
			button.style.pointerEvents = 'auto';
			button.style.cursor = 'pointer';
		}, 3000);
	}
	// Sem timeout
	// function enableButton(idButton){
		// var button = document.getElementById(idButton);
		// button.disabled = false;
		// button.style.opacity = '1.0';
		// button.style.pointerEvents = 'auto';
		// button.style.cursor = 'pointer';
	// }

	function submitForm(e){
		e.preventDefault();
		if($('form#contatoConsultor').valid() == true) {

			disabledButton('btn-send-message-form'); // Bloqueio

			$('#formResponse').addClass('formResponseWait').html('<i class="fa fa-clock-o" aria-hidden="true"></i> Enviando...');
			$.post('/submit.php', $('form#contatoConsultor').serialize(),  function(data) {
				if(data.search('@MSGOK') >= 0) {
					$('#formResponse').removeClass('formResponseWait').removeClass('formResponseError');
					$('#formResponse').addClass('formResponseOkay').html('<i class="fa fa-check-circle" aria-hidden="true"></i> Mensagem enviada com sucesso!');
				} else if(data.search('@TOKKEN')){
					$('#formResponse').removeClass('formResponseWait');
					$('#formResponse').addClass('formResponseError').html('<i class="fa fa-minus-circle" aria-hidden="true"></i> Erro captcha.');
				} else if(data.search('@MSGFAIL')){
					$('#formResponse').removeClass('formResponseWait');
					$('#formResponse').addClass('formResponseError').html('<i class="fa fa-minus-circle" aria-hidden="true"></i> Mensagem não enviada! Tente novamente.');
				}

				enableButton('btn-send-message-form'); // Desbloqueio

			})
		}
	}
