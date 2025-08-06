<?php
// Configurações de e-mail
$to_email = "contato@dunamismetal.com.br";
$subject_prefix = "Contato Site Dunamis Metal - ";

// Verificar se o formulário foi enviado via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Sanitizar e validar dados do formulário
    $nome = filter_var(trim($_POST["nome"]), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $telefone = filter_var(trim($_POST["telefone"]), FILTER_SANITIZE_STRING);
    $empresa = filter_var(trim($_POST["empresa"]), FILTER_SANITIZE_STRING);
    $servico = filter_var(trim($_POST["servico"]), FILTER_SANITIZE_STRING);
    $mensagem = filter_var(trim($_POST["mensagem"]), FILTER_SANITIZE_STRING);
    
    // Validar campos obrigatórios
    if (empty($nome) || empty($email) || empty($mensagem) || empty($servico)) {
        http_response_code(400);
        echo json_encode(["status" => "error", "message" => "Por favor, preencha todos os campos obrigatórios."]);
        exit;
    }
    
    // Validar formato do e-mail
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo json_encode(["status" => "error", "message" => "Por favor, insira um e-mail válido."]);
        exit;
    }
    
    // Mapear serviços
    $servicos_map = [
        "corte" => "Corte de Metais",
        "conformacao" => "Conformação",
        "usinagem" => "Usinagem",
        "soldagem" => "Soldagem",
        "outros" => "Outros"
    ];
    
    $servico_nome = isset($servicos_map[$servico]) ? $servicos_map[$servico] : "Não especificado";
    
    // Montar o assunto do e-mail
    $subject = $subject_prefix . $servico_nome;
    
    // Montar o corpo do e-mail
    $email_body = "
    <html>
    <head>
        <title>Novo contato do site Dunamis Metal</title>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; }
            .header { background-color: #FFA500; color: #1A1A1A; padding: 20px; text-align: center; }
            .content { background-color: #f9f9f9; padding: 20px; }
            .field { margin-bottom: 15px; }
            .label { font-weight: bold; color: #1A1A1A; }
            .value { margin-top: 5px; }
            .footer { background-color: #1A1A1A; color: #fff; padding: 15px; text-align: center; font-size: 12px; }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                <h2>Novo Contato - Dunamis Metal</h2>
            </div>
            <div class='content'>
                <div class='field'>
                    <div class='label'>Nome:</div>
                    <div class='value'>" . htmlspecialchars($nome) . "</div>
                </div>
                <div class='field'>
                    <div class='label'>E-mail:</div>
                    <div class='value'>" . htmlspecialchars($email) . "</div>
                </div>
                <div class='field'>
                    <div class='label'>Telefone:</div>
                    <div class='value'>" . htmlspecialchars($telefone ?: 'Não informado') . "</div>
                </div>
                <div class='field'>
                    <div class='label'>Empresa:</div>
                    <div class='value'>" . htmlspecialchars($empresa ?: 'Não informada') . "</div>
                </div>
                <div class='field'>
                    <div class='label'>Serviço de Interesse:</div>
                    <div class='value'>" . htmlspecialchars($servico_nome) . "</div>
                </div>
                <div class='field'>
                    <div class='label'>Mensagem:</div>
                    <div class='value'>" . nl2br(htmlspecialchars($mensagem)) . "</div>
                </div>
            </div>
            <div class='footer'>
                <p>Este e-mail foi enviado através do formulário de contato do site Dunamis Metal</p>
                <p>Data: " . date('d/m/Y H:i:s') . "</p>
            </div>
        </div>
    </body>
    </html>
    ";
    
    // Cabeçalhos do e-mail
    $headers = [
        "MIME-Version: 1.0",
        "Content-Type: text/html; charset=UTF-8",
        "From: Site Dunamis Metal <noreply@dunamismetal.com.br>",
        "Reply-To: " . $email,
        "X-Mailer: PHP/" . phpversion()
    ];
    
    // Tentar enviar o e-mail
    if (mail($to_email, $subject, $email_body, implode("\r\n", $headers))) {
        // E-mail enviado com sucesso
        http_response_code(200);
        echo json_encode([
            "status" => "success", 
            "message" => "Mensagem enviada com sucesso! Entraremos em contato em breve."
        ]);
    } else {
        // Erro ao enviar e-mail
        http_response_code(500);
        echo json_encode([
            "status" => "error", 
            "message" => "Erro ao enviar mensagem. Tente novamente ou entre em contato diretamente."
        ]);
    }
    
} else {
    // Método não permitido
    http_response_code(405);
    echo json_encode(["status" => "error", "message" => "Método não permitido."]);
}
?>

