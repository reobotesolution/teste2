<?

# alterar a variavel abaixo colocando o seu email

$destinatario = "posicao.online@gmail.com";

$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$telefone = $_REQUEST['telefone'];
$assunto = "NOVOS DADOS";

 // monta o e-mail na variavel $body

$body = "===================================" . "\n";
$body = $body . "NOVO CONTATO RECEBIDO" . "\n";
$body = $body . "===================================" . "\n\n";
$body = $body . "Nome: " . $nome . "\n";
$body = $body . "Email: " . $email . "\n";
$body = $body . "WhatsApp: " . $telefone . "\n\n";
$body = $body . "===================================" . "\n";

// envia o email
mail($destinatario, $assunto , $body, "From: $email\r\n");


mail($email, POSIÇÃO ONLINE, "Olá" .$nome. "\n Recebemos seu pedido, nossa equipe entrará em contato com você em breve!", "From: $destinatario");

// redireciona para a página de obrigado
header("location:http://posicao.online/central/cart.php?a=confproduct&i=0");


?>