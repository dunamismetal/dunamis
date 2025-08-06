# Sistema de Formulário para WhatsApp - Dunamis Metal

## Como Funciona

O formulário de contato do site foi configurado para enviar as informações diretamente para o WhatsApp da empresa de forma automática e organizada, **sem precisar de PHP ou backend**.

### Fluxo do Sistema:

1. **Cliente preenche o formulário** no site
2. **JavaScript captura os dados** automaticamente
3. **Mensagem é formatada** com emojis e organização profissional
4. **WhatsApp abre automaticamente** com a mensagem pronta
5. **Cliente só precisa clicar "Enviar"** no WhatsApp

## Vantagens desta Solução

✅ **100% JavaScript** - Funciona em qualquer hospedagem (GitHub Pages, Netlify, etc.)
✅ **Sem backend necessário** - Não precisa de PHP, Node.js ou servidor
✅ **Mensagem organizada** - Dados formatados profissionalmente
✅ **Instantâneo** - Cliente vê a mensagem antes de enviar
✅ **Mobile-friendly** - Abre o app do WhatsApp no celular
✅ **Desktop-friendly** - Abre o WhatsApp Web no computador

## Formato da Mensagem

Quando o cliente preenche o formulário, a mensagem gerada no WhatsApp fica assim:

```
🔧 NOVO ORÇAMENTO - DUNAMIS METAL

📋 DADOS DO CLIENTE:
👤 Nome: João Silva
📧 E-mail: joao@empresa.com.br
📱 Telefone: (11) 99999-9999
🏢 Empresa: Empresa ABC Ltda

🛠️ SERVIÇO SOLICITADO:
Corte de Metais

💬 MENSAGEM:
Preciso de um orçamento para corte de chapas de aço...

---
Enviado através do site da Dunamis Metal
```

## Configurações

### Número do WhatsApp
O número está configurado no arquivo `script.js` na linha:
```javascript
const numeroWhatsApp = "5511995768612";
```

Para alterar o número:
1. Abra o arquivo `script.js`
2. Localize a linha com `numeroWhatsApp`
3. Substitua pelo novo número (apenas números, sem símbolos)
4. Formato: código do país + DDD + número (ex: "5511999887766")

### Personalizar a Mensagem
Você pode personalizar o formato da mensagem editando a variável `mensagemWhatsApp` no arquivo `script.js`:

```javascript
const mensagemWhatsApp = `🔧 *NOVO ORÇAMENTO - DUNAMIS METAL*

📋 *DADOS DO CLIENTE:*
👤 *Nome:* ${nome}
📧 *E-mail:* ${email}
// ... resto da mensagem
`;
```

### Adicionar/Remover Campos
Para adicionar novos campos ao formulário:

1. **No HTML** (`index.html`):
   ```html
   <div class="form-group">
       <input type="text" id="novo_campo" name="novo_campo" placeholder="Novo Campo">
   </div>
   ```

2. **No JavaScript** (`script.js`):
   ```javascript
   const novoCampo = formData.get("novo_campo") || "Não informado";
   ```

3. **Na mensagem**:
   ```javascript
   📝 *Novo Campo:* ${novoCampo}
   ```

## Testando o Sistema

### Teste Local:
1. Abra o `index.html` em qualquer navegador
2. Preencha o formulário
3. Clique em "Enviar Mensagem"
4. Verifique se o WhatsApp abre com a mensagem formatada

### Teste em Produção:
1. Faça upload dos arquivos para seu servidor/GitHub Pages
2. Acesse o site online
3. Teste o formulário
4. Confirme que funciona em desktop e mobile

## Compatibilidade

### Navegadores Suportados:
- ✅ Chrome (desktop e mobile)
- ✅ Firefox (desktop e mobile)
- ✅ Safari (desktop e mobile)
- ✅ Edge (desktop e mobile)

### Dispositivos:
- ✅ **Desktop**: Abre WhatsApp Web
- ✅ **Mobile**: Abre o app do WhatsApp
- ✅ **Tablet**: Funciona em ambos os modos

## Solução de Problemas

### WhatsApp não abre:
- Verifique se o número está correto no `script.js`
- Teste em um navegador diferente
- Verifique se o WhatsApp está instalado (mobile)

### Mensagem não formatada:
- Verifique se todos os campos obrigatórios estão preenchidos
- Confirme se o JavaScript está carregando corretamente

### Erro no console:
- Abra as ferramentas de desenvolvedor (F12)
- Verifique se há erros no console
- Confirme se o `script.js` está sendo carregado

## Melhorias Futuras

Possíveis melhorias que podem ser implementadas:

1. **Validação avançada** de campos
2. **Máscara para telefone** brasileiro
3. **Seleção de múltiplos serviços**
4. **Upload de arquivos** (com links)
5. **Integração com Google Analytics** para tracking

---

**Esta solução é perfeita para sites estáticos e não requer manutenção de servidor!**

