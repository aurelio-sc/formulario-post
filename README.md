# formulario-post
<h1>Formulário com validação de preenchimento feita em PHP.</h1>

<p>Nome: string entre 3 e 100 caracteres.</p>
<p>Senha: string entre 3 e 16 caracteres.</p>
<p>Email: string não vazia e verificada com a função filter_var($_POST['email'], FILTER_VALIDATE_EMAIL).</p>
<p>Gênero: verificação se o valor enviado corresponde a um dos valores apresentados. Caso o usuário manipule o valor pelo inspetor a validação não passará.</p>
<br>
<p>A exibição das informações na tela só ocorrerá se todas as validações forem satisfeitas.</p>
<p>Não foi feita estilização do formulário com CSS, porque foge do objetivo do projeto.</p>

![formulario](https://user-images.githubusercontent.com/95449811/191518444-260cdce0-2391-4237-b0ad-2dfbde82d74e.jpg)
