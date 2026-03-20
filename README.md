# Blog CodeIgniter

## Descrição do Cenário

Este projeto foi desenvolvido como uma aplicação prática para demonstrar o desenvolvimento de um sistema web funcional utilizando o framework CodeIgniter 4. O cenário envolve a criação de uma plataforma de blog onde usuários podem visualizar posts e deixar comentários, exercitando conceitos como:

- Estrutura MVC (Model-View-Controller)
- Operações de banco de dados (CRUD)
- Validação de formulários
- Organização de código seguindo padrões de arquitetura web moderna
- Uso de migrações para versionamento de banco de dados

---

## Objetivo do Projeto

Este projeto é um **sistema de blog** desenvolvido com o framework CodeIgniter 4. O sistema permite a criação, leitura, atualização e exclusão de posts, com suporte a comentários. A aplicação foi desenvolvida com foco em práticas modernas de desenvolvimento web, seguindo os padrões do framework CodeIgniter.

### Funcionalidades Principais:
- Gerenciamento de posts
- Sistema de comentários
- Layout responsivo
- Validação de dados
- Estrutura MVC bem organizada

---

## Como Executar

### Pré-requisitos

- PHP 8.2 ou superior (com extensão SQLite3)
- Composer
- XAMPP (recomendado) ou servidor web similar
- Git (opcional)

### Passos para Instalação

1. **Clone ou copie o projeto para a pasta desejada:**
   ```bash
   cd blog
   ```

2. **Instale as dependências do Composer:**
   ```bash
   composer install
   ```

3. **Gere a chave de encriptação:**
   ```bash
   php spark key:generate
   ```

4. **Execute as migrações do banco de dados:**
   ```bash
   php spark migrate
   ```
   O banco de dados SQLite3 (`database.db`) será criado automaticamente na pasta `writable/`.

5. **Popule o banco com dados de teste (opcional):**
   ```bash
   php spark db:seed SeedName
   ```

6. **Inicie o servidor de desenvolvimento:**
   ```bash
   php spark serve
   ```

7. **Acesse o projeto no navegador:**
   ```
   http://localhost:8080/
   ```

### Estrutura de Diretórios

```
blog/
├── app/                 # Código da aplicação
│   ├── Controllers/     # Controladores
│   ├── Models/          # Modelos
│   ├── Views/           # Visualizações
│   ├── Config/          # Configurações
│   └── Database/        # Migrações e Seeds
├── public/              # Arquivos públicos
├── system/              # Framework (não editar)
├── tests/               # Testes
├── writable/            # Diretório gravável (cache, logs, uploads)
└── composer.json        # Dependências do projeto
```

---

## Passo a Passo de Utilização

### 1. Visualizar Lista de Posts
1. Acesse `http://localhost:8080/` ou `http://localhost/blog/public/`
2. A página inicial exibe todos os posts publicados
3. Cada post mostra: título, conteúdo, data de criação e número de comentários

### 2. Criar um Novo Post
1. Clique em "Novo Post" ou navegue para `http://localhost:8080/post/create`
2. Preencha o formulário com:
   - **Título**: Título do post
   - **Conteúdo**: Corpo do post em HTML ou texto simples
3. Clique em "Publicar"
4. O post será salvo no banco de dados e exibido na lista

### 3. Editar um Post
1. Clique em um post existente para abrir os detalhes
2. Clique em "Editar"
3. Atualize as informações desejadas
4. Clique em "Salvar"

### 4. Deletar um Post
1. No detalhe do post, clique em "Deletar"
2. Confirme a exclusão
3. O post será removido do sistema

### 5. Adicionar Comentários
1. Abra um post e role até a seção de comentários
2. Preencha o formulário com:
   - **Nome**: Seu nome
   - **Email**: Seu email
   - **Comentário**: Seu comentário
3. Clique em "Comentar"
4. O comentário aparecerá listado abaixo do post

---

## Resultado Obtido

### Funcionalidades Implementadas ✅

| Funcionalidade | Status | Descrição |
|---|---|---|
| **Listagem de Posts** | ✅ Completo | Exibe todos os posts com paginação |
| **Criar Post** | ✅ Completo | Formulário com validação de dados |
| **Editar Post** | ✅ Completo | Atualização de posts existentes |
| **Deletar Post** | ✅ Completo | Remoção de posts com confirmação |
| **Comentários** | ✅ Completo | Sistema de comentários funcional |
| **Banco de Dados** | ✅ Completo | SQLite3 com migrações automáticas |
| **Validação** | ✅ Completo | Formulários validados no backend |
| **Layout Responsivo** | ✅ Completo | Interface adaptável para móvel/desktop |

### Estrutura de Dados

#### Tabela `posts`
```sql
- id (Primary Key)
- title (VARCHAR)
- content (TEXT)
- created_at (TIMESTAMP)
- updated_at (TIMESTAMP)
```

#### Tabela `comentarios`
```sql
- id (Primary Key)
- post_id (Foreign Key)
- name (VARCHAR)
- email (VARCHAR)
- comment (TEXT)
- created_at (TIMESTAMP)
```

---

## Evidências de Funcionamento

### Telas Principais

1. **Página Inicial - Lista de Posts**
   - Exibe todos os posts publicados
   - Mostra título, preview de conteúdo e data
   - Botões para editar e deletar posts

2. **Página de Criação/Edição de Post**
   - Formulário com campos: Título e Conteúdo
   - Validação de campos obrigatórios
   - Mensagens de sucesso/erro

3. **Detalhe do Post**
   - Exibe post completo
   - Lista comentários do post
   - Formulário para adicionar novos comentários

4. **Seção de Comentários**
   - Lista todos os comentários do post
   - Formulário para adicionar comentário
   - Validação de email e campos obrigatórios

### Como Testar

1. Execute o servidor: `php spark serve`
2. Acesse `http://localhost:8080`
3. Crie alguns posts usando o formulário
4. Adicione comentários aos posts
5. Teste a edição e exclusão de posts
6. Verifique os dados no banco: `writable/database.db`

### Tecnologias em Ação

- **CodeIgniter 4**: Roteamento, controladores e modelos
- **SQLite3**: Persistência de dados
- **HTML/CSS**: Interface do usuário
- **Validação**: Regras de validação do CodeIgniter
- **MVC Pattern**: Separação clara de concerns

### Backend
- **PHP** 8.2+
- **CodeIgniter 4** - Framework web MVC
- **SQLite3** - Banco de dados leve e portável
- **Composer** - Gerenciador de dependências PHP

### Dependências Principais
- `laminas/laminas-escaper` - Escapamento de valores para segurança
- `psr/log` - Interface padrão para logging

### Ferramentas de Desenvolvimento
- **PHPUnit** 10.5+ - Framework de testes
- **PHP CS Fixer** - Formatação de código
- **Faker** - Geração de dados fictícios para testes
- **Kint** - Ferramenta de debug

### Frontend
- **HTML5** - Markup
- **CSS3** - Estilização
- **JavaScript** - Interatividade

### Versão do CodeIgniter
- CodeIgniter Framework v4

---

## Licença

Este projeto é licenciado sob a licença MIT. Veja o arquivo [LICENSE](LICENSE) para mais detalhes.

---

## Suporte e Comunidade

- [Forum CodeIgniter](https://forum.codeigniter.com/)
- [GitHub CodeIgniter 4](https://github.com/codeigniter4/CodeIgniter4)
- [Documentação Oficial](https://codeigniter.com/)

---

## Autores

- José Augusto da Silva Junior
- Eduardo Salvador Barbosa Corrêa
- Felipe Rodrigues do Espírito Santo

---

**Desenvolvido usando CodeIgniter 4**

## Server Requirements

PHP version 8.2 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

> [!WARNING]
> - The end of life date for PHP 7.4 was November 28, 2022.
> - The end of life date for PHP 8.0 was November 26, 2023.
> - The end of life date for PHP 8.1 was December 31, 2025.
> - If you are still using below PHP 8.2, you should upgrade immediately.
> - The end of life date for PHP 8.2 will be December 31, 2026.

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [sqlite3](http://php.net/manual/en/sqlite3.requirements.php) for SQLite3 database support
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library
