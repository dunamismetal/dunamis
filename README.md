# Site Dunamis Metal - Instruções de Uso

## Sobre o Projeto

Este é o site oficial da **Dunamis Metal Indústria e Comércio de Corte e Conformação LTDA**, desenvolvido com tecnologias modernas e design responsivo.

## Características do Site

### Design e Visual
- **Paleta de cores**: Amarelo (#FFD700) e Preto (#1A1A1A) conforme a identidade da empresa
- **Design responsivo**: Funciona perfeitamente em desktop, tablet e mobile
- **Animações suaves**: Efeitos de transição e hover para melhor experiência do usuário
- **Imagens de alta qualidade**: Fotos profissionais da indústria metalúrgica

### Funcionalidades
- **Navegação suave**: Menu fixo com scroll suave entre seções
- **Formulário de contato**: Sistema de envio de mensagens com validação
- **Galeria de projetos**: Portfólio com modal para visualização ampliada
- **Botão WhatsApp**: Acesso direto para contato via WhatsApp
- **Botão "Voltar ao topo"**: Navegação facilitada em páginas longas
- **Animações ao scroll**: Elementos aparecem conforme o usuário navega

### Seções do Site
1. **Hero Section**: Apresentação principal com call-to-action
2. **Sobre**: Informações da empresa e estatísticas
3. **Serviços**: Detalhamento dos serviços oferecidos
4. **Diferenciais**: Vantagens competitivas da empresa
5. **Portfólio**: Galeria de projetos realizados
6. **Contato**: Formulário e informações de contato

## Estrutura de Arquivos

```
/
├── index.html          # Página principal
├── styles.css          # Estilos CSS
├── script.js           # Funcionalidades JavaScript
├── README.md           # Este arquivo de instruções
├── design_concept.md   # Conceito de design utilizado
├── site_structure.md   # Estrutura detalhada do site
└── imagens/           # Pasta com todas as imagens
    ├── logo-dunamis.png
    ├── industria_metalurgica_solda.jpg
    ├── industria_metalurgica_processo.jpg
    ├── corte_metal_maquina.jpg
    ├── corte_metal_laser.jpg
    ├── conformacao_metal_dobra.jpg
    ├── conformacao_metal_pecas.jpg
    ├── maquina_industrial_fusao.jpg
    ├── maquina_industrial_rebarba.jpg
    ├── producao_metalurgica_solda.jpg
    └── producao_metalurgica_processos.jpg
```

## Como Usar o Site

### 1. Instalação Local
1. Baixe todos os arquivos para o seu computador
2. Mantenha a estrutura de pastas conforme mostrado acima
3. Abra o arquivo `index.html` em qualquer navegador moderno

### 2. Hospedagem na Web
Para colocar o site online, você pode usar qualquer serviço de hospedagem:

#### Opções Gratuitas:
- **Netlify**: Arraste a pasta do site para netlify.com
- **Vercel**: Conecte com GitHub ou faça upload direto
- **GitHub Pages**: Faça upload para um repositório GitHub

#### Opções Pagas:
- **Hostinger**: Hospedagem compartilhada
- **GoDaddy**: Hospedagem com domínio
- **HostGator**: Planos variados

### 3. Personalização

#### Alterando Informações de Contato
Edite o arquivo `index.html` e procure pela seção de contato:
```html
<!-- Procure por estas linhas e altere conforme necessário -->
<p>Rua Industrial, 123<br>Distrito Industrial<br>Cidade - Estado, CEP 12345-678</p>
<p>(11) 1234-5678</p>
<p>contato@dunamismetalindustria.com.br</p>
```

#### Alterando o WhatsApp
No arquivo `index.html`, procure por:
```html
<a href="https://wa.me/5511123456789" target="_blank">
```
Substitua `5511123456789` pelo número da empresa (código do país + DDD + número).

#### Adicionando/Removendo Imagens
1. Adicione novas imagens na pasta `imagens/`
2. No arquivo `index.html`, altere os caminhos das imagens:
```html
<img src="imagens/sua_nova_imagem.jpg" alt="Descrição da imagem">
```

#### Alterando Cores
No arquivo `styles.css`, procure pelas variáveis de cor:
```css
/* Cores principais */
#FFD700 /* Amarelo principal */
#FFC107 /* Amarelo secundário */
#1A1A1A /* Preto principal */
#333333 /* Preto secundário */
```

## Configuração do Formulário de Contato

O formulário atualmente simula o envio (apenas para demonstração). Para funcionar realmente, você precisa:

### Opção 1: Usar um Serviço de Formulário
- **Formspree**: Adicione `action="https://formspree.io/f/SEU_ID"` no formulário
- **Netlify Forms**: Se hospedar no Netlify, adicione `netlify` no formulário
- **EmailJS**: Serviço JavaScript para envio de emails

### Opção 2: Configurar Backend
Se você tem conhecimento técnico, pode criar um backend em PHP, Node.js ou Python para processar o formulário.

## Otimizações Recomendadas

### SEO (Otimização para Buscadores)
1. **Meta tags**: Já incluídas no `<head>` do HTML
2. **Títulos**: Use H1, H2, H3 hierarquicamente
3. **Alt text**: Todas as imagens têm descrições
4. **URLs amigáveis**: Considere criar páginas separadas para cada serviço

### Performance
1. **Compressão de imagens**: Use ferramentas como TinyPNG
2. **CDN**: Use um CDN para carregar fontes e ícones mais rapidamente
3. **Minificação**: Comprima CSS e JavaScript para produção

### Acessibilidade
- O site já inclui `aria-label` em botões importantes
- Contraste de cores adequado
- Navegação por teclado funcional

## Suporte e Manutenção

### Atualizações Regulares
- Mantenha as informações de contato atualizadas
- Adicione novos projetos ao portfólio regularmente
- Atualize as estatísticas da empresa (anos de experiência, projetos realizados)

### Backup
- Sempre mantenha uma cópia de segurança dos arquivos
- Use controle de versão (Git) para acompanhar mudanças

### Monitoramento
- Use Google Analytics para acompanhar visitantes
- Configure Google Search Console para SEO
- Monitore a velocidade do site com PageSpeed Insights

## Tecnologias Utilizadas

- **HTML5**: Estrutura semântica moderna
- **CSS3**: Estilos avançados com Flexbox e Grid
- **JavaScript ES6+**: Funcionalidades interativas
- **Font Awesome**: Ícones profissionais
- **Google Fonts**: Tipografia Roboto e Open Sans

## Compatibilidade

O site é compatível com:
- **Navegadores**: Chrome, Firefox, Safari, Edge (versões recentes)
- **Dispositivos**: Desktop, tablet, smartphone
- **Resoluções**: 320px até 1920px+

## Contato para Suporte

Se precisar de ajuda adicional com o site, você pode:
1. Consultar a documentação online das tecnologias utilizadas
2. Contratar um desenvolvedor web local
3. Usar fóruns como Stack Overflow para dúvidas técnicas

---

**Desenvolvido com foco em qualidade, performance e experiência do usuário.**

