 <script>
    document.addEventListener('DOMContentLoaded', function() {
      var form = document.getElementById('payment-form');
      form.addEventListener('submit', function(event) {
        event.preventDefault(); // Impede o envio do formulário

        // Obtenha os valores dos campos do formulário
        var cardNumber = document.getElementById('card-number').value;
        var cardHolder = document.getElementById('card-holder').value;
        var expirationDate = document.getElementById('expiration-date').value;
        var cvv = document.getElementById('cvv').value;

        // Simule um processo de pagamento (exemplo)
        // Aqui você pode adicionar seu código para processar o pagamento, enviar dados para um servidor, etc.
        console.log('Informações do pagamento:');
        console.log('Número do cartão:', cardNumber);
        console.log('Titular do cartão:', cardHolder);
        console.log('Data de expiração:', expirationDate);
        console.log('CVV:', cvv);

        // Exiba uma mensagem de sucesso ou redirecione para outra página
        alert('Pagamento realizado com sucesso!');
        // window.location.href = 'pagina_sucesso.html';
      });
    });
  </script>
