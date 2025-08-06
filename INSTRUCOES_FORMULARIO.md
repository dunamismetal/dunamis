# Instruções para Configurar o Formulário de Contato

## Sobre o Sistema de E-mail

O formulário de contato foi configurado para enviar e-mails diretamente para `contato@dunamismetal.com.br` usando PHP. O sistema inclui:

- Validação de campos obrigatórios
- Sanitização de dados para segurança
- E-mails formatados em HTML
- Resposta em JSON para feedback ao usuário

## Arquivos Incluídos

- `contact_handler.php` - Processador do formulário
- `index.html` - Formulário atualizado
- `script.js` - JavaScript para envio via AJAX

## Configuração do Servidor

### Requisitos
- Servidor web com suporte a PHP (Apache, Nginx)
- Função `mail()` do PHP habilitada
- Servidor de e-mail configurado (SMTP)

### Hospedagem Compartilhada
A maioria das hospedagens compartilhadas já tem o PHP e a função `mail()` configurados. Basta fazer upload dos arquivos.

### Hospedagem VPS/Dedicada
Se você usar um VPS ou servidor dedicado, pode precisar configurar:

1. **Instalar PHP**:
   ```bash
   sudo apt update
   sudo apt install php php-cli
   ```

2. **Configurar SMTP** (opcional, para melhor entrega):
   - Use um serviço como SendGrid, Mailgun ou Amazon SES
   - Configure no arquivo `contact_handler.php`

## Testando o Formulário

### Teste Local
Para testar localmente, você precisa de um servidor PHP:

```bash
# Navegar até a pasta do site
cd /caminho/para/site

# Iniciar servidor PHP local
php -S localhost:8000

# Acessar no navegador
http://localhost:8000
```

### Teste em Produção
1. Faça upload de todos os arquivos para seu servidor
2. Acesse o site e teste o formulário
3. Verifique se os e-mails estão chegando em `contato@dunamismetal.com.br`

## Personalização

### Alterar E-mail de Destino
No arquivo `contact_handler.php`, linha 3:
```php
$to_email = "contato@dunamismetal.com.br";
```

### Alterar Assunto do E-mail
No arquivo `contact_handler.php`, linha 4:
```php
$subject_prefix = "Contato Site Dunamis Metal - ";
```

### Personalizar Template do E-mail
O template HTML está no arquivo `contact_handler.php` na variável `$email_body`. Você pode modificar:
- Cores
- Layout
- Campos exibidos
- Formatação

## Alternativas ao PHP

Se sua hospedagem não suporta PHP, você pode usar:

### 1. Formspree (Recomendado)
```html
<form action="https://formspree.io/f/SEU_ID" method="POST">
```

### 2. Netlify Forms
Se hospedar no Netlify, adicione `netlify` ao formulário:
```html
<form netlify>
```

### 3. EmailJS
Serviço JavaScript que não requer backend:
```javascript
emailjs.send("service_id", "template_id", formData);
```

## Solução de Problemas

### E-mails não chegam
1. Verifique se a função `mail()` está habilitada
2. Verifique logs do servidor
3. Teste com um e-mail diferente
4. Configure SMTP se necessário

### Erro 500
1. Verifique se o PHP está funcionando
2. Verifique permissões dos arquivos
3. Verifique logs de erro do servidor

### Formulário não envia
1. Verifique se o JavaScript está funcionando
2. Abra o console do navegador para ver erros
3. Verifique se o arquivo `contact_handler.php` existe

## Segurança

O sistema inclui:
- Sanitização de dados de entrada
- Validação de e-mail
- Proteção contra injeção de código
- Headers de segurança

Para maior segurança, considere:
- Adicionar CAPTCHA
- Limitar tentativas por IP
- Usar HTTPS (SSL)

## Suporte

Se precisar de ajuda:
1. Verifique a documentação da sua hospedagem
2. Entre em contato com o suporte técnico
3. Considere contratar um desenvolvedor PHP

---

**Importante**: Teste sempre o formulário após fazer upload para garantir que está funcionando corretamente.

