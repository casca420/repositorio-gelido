document.addEventListener('DOMContentLoaded', function () {
  const formContato = document.querySelector('#contato form');
  const mensagemResultado = document.createElement('p');
  mensagemResultado.classList.add('mensagem-resultado');
  formContato.appendChild(mensagemResultado);

  formContato.addEventListener('submit', function (event) {

    event.preventDefault();

    const nome = formContato.querySelector('#nome').value.trim();
    const email = formContato.querySelector('#email').value.trim();
    const assunto = formContato.querySelector('#assunto').value.trim();
    const msg = formContato.querySelector('#mensagem').value.trim();


    if (!nome || !email || !assunto || !msg) {
      mensagemResultado.textContent = 'Preencha todos os campos antes de enviar.';
      mensagemResultado.classList.remove('sucesso');
      mensagemResultado.classList.add('erro');
      return;
    }


    const regexEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!regexEmail.test(email)) {
      mensagemResultado.textContent = 'Digite um e-mail válido.';
      mensagemResultado.classList.remove('sucesso');
      mensagemResultado.classList.add('erro');
      return;
    }


    mensagemResultado.textContent = 'Mensagem enviada! A Tropa do 7 já esta com seu recado em mãos.';
    mensagemResultado.classList.remove('erro');
    mensagemResultado.classList.add('sucesso');

    formContato.reset();
  });
});