# Sistema de Gestão de Funcionários – Empresa de Arquitetura

## 🏛️ Sistema de Gestão de Funcionários – Empresa de Arquitetura
Aplicação desenvolvida para a disciplina de Programação Web, utilizando Laravel + Breeze + Blade + TailwindCSS.

------
## 1. Sobre a aplicação

### O projeto foi desenvolvido utilizando:
- Laravel 10
- Laravel Breeze (autenticação)
- Blade
- TailwindCSS

### Algumas estruturas já existiam por causa do Breeze:
- fluxo base de autenticação
- rotas de login e registro- pages padrões adaptadas
- controller AuthenticatedSessionController, modificado manualmente

Todo o resto foi criado e adaptado especificamente para a tarefa.

------
## 2. Como o projeto foi criado (comandos comentados)

``composer create-project laravel/laravel projeto-arquitetura``

<img width="632" height="32" alt="1" src="https://github.com/user-attachments/assets/93df1433-755e-4d99-a7ac-33429bddcbec" />

``cd projeto-arquitetura``

<img width="399" height="33" alt="2" src="https://github.com/user-attachments/assets/f3da111d-4a82-44ee-8424-942f07b78d99" />

``composer require laravel/breeze --dev``

<img width="628" height="30" alt="3" src="https://github.com/user-attachments/assets/a758c5e2-ce26-446e-a2c2-57c5e02f69b0" />

``php artisan breeze:install blade``

<img width="584" height="34" alt="4" src="https://github.com/user-attachments/assets/0df731f1-84bb-410e-b50f-46358d57c98c" />

``npm install``

<img width="423" height="38" alt="5" src="https://github.com/user-attachments/assets/5361732c-426c-463f-9900-1daf0d81fd25" />

``php artisan migrate``

<img width="526" height="42" alt="2-2" src="https://github.com/user-attachments/assets/b9d23340-155e-437b-95a0-44c81a098181" />

----
## 3. Middleware – CheckEmployee
O middleware impede acesso ao sistema sem login.

### Código:
<img width="1263" height="716" alt="middleware" src="https://github.com/user-attachments/assets/c688f22d-16cf-460d-b649-6462a4d7ff77" />


### Explicação:
- Se usuário tenta acessar /dashboard ou /usuarios SEM login → redireciona para /login
- Mensagem de erro personalizada aparece

### Print:
<img width="555" height="786" alt="erro-credenciais-nm" src="https://github.com/user-attachments/assets/122797a7-07ee-4f2f-b4c8-f39af8942a2f" />


---
## 4. Validação alternativa de login – AuthenticatedSessionController
O arquivo já existia no Breeze, mas foi modificado com:
- validação manual de email/senha
- retorno com erro autoral
- personalização do fluxo de autenticação

### Prints:
<img width="1419" height="668" alt="mddleware-blade" src="https://github.com/user-attachments/assets/de585a8a-fc79-4a97-af3a-06adbda2427d" />

<img width="555" height="786" alt="erro-credenciais-nm" src="https://github.com/user-attachments/assets/76a4a5e4-135a-4327-ac5c-22cb17f8d9cd" />


------
## 5. Rotas do projeto

### ✔ Rotas autorais: routes/web.php

<img width="1090" height="542" alt="rotas-web" src="https://github.com/user-attachments/assets/c43f8fac-7ba9-4f0c-ae0e-bd13fc2a6244" />


### ✔ Rotas herdadas do Breeze: routes/auth.php

<img width="1404" height="124" alt="rotas-com-auth" src="https://github.com/user-attachments/assets/e124374e-fda3-4a7c-946e-7019a9ad8af3" />

---
## 6. CRUD de Funcionários – Código explicado

### Prints:
- construct() + index():
<img width="1242" height="661" alt="controller-middleware-lista" src="https://github.com/user-attachments/assets/347efec1-ccbb-4d04-9d02-28b0fe114ffb" />

- create() + store():
<img width="1410" height="744" alt="controller-criar-registrar" src="https://github.com/user-attachments/assets/2d5ee370-4dbc-4e75-a799-702586737eec" />

- show() + edit():
<img width="1214" height="426" alt="controller-consultar-editar" src="https://github.com/user-attachments/assets/4180dce7-7029-40ea-b330-5ce785f26d17" />

- update() + destroy():
<img width="1429" height="662" alt="controller-atualizar-excluir" src="https://github.com/user-attachments/assets/155a5ca5-5575-48da-8dd4-4be4a9d69a80" />


### Legenda:
- construct() - função para executar o middleware e garantir autenticação do usuário
- index()   – lista os funcionários
- create()  – formulário de cadastro
- store()   – salva funcionário
- show()    – página de detalhes
- edit()    – formulário de edição
- update()  – atualiza dados
- destroy() – exclui funcionário

---
## 7. Tela de Login
A tela foi herdada do Breeze, mas totalmente adaptada:
- Tailwind personalizado
- Mensagens de erro próprias
- Layout para o tema do sistema

### Prints:
<img width="1412" height="751" alt="login-pt1" src="https://github.com/user-attachments/assets/04cec466-2e40-4267-ad53-c25c71b38d79" />
<img width="1428" height="445" alt="login-pt2" src="https://github.com/user-attachments/assets/65c86267-9781-43b8-a282-ab6be220b020" />

<img width="595" height="775" alt="tela-login" src="https://github.com/user-attachments/assets/b1419b68-8a0b-483e-af45-3f03dd0c02c4" />
<img width="555" height="786" alt="erro-credenciais-nm" src="https://github.com/user-attachments/assets/809009d8-e401-4871-bbcb-78d95617a0f3" />

---
## 8. Dashboard da Aplicação

### Elementos presentes:
- Cards de projetos
- Cards de cursos
- Data da próxima reunião

### Prints:
<img width="1427" height="621" alt="principal-pt1" src="https://github.com/user-attachments/assets/00676562-52d3-445d-ac14-15a53bb14c7f" />

<img width="1341" height="615" alt="principal-pt2" src="https://github.com/user-attachments/assets/2a2b2136-db44-4f71-aa04-0482e6ce5990" />

---
## 9. Telas Criadas Manualmente

### Prints:
- tela index (listagem + edição + consulta + exclusão)
<img width="1374" height="648" alt="index-pt1" src="https://github.com/user-attachments/assets/499e0fe7-a0bf-4fe4-8ec6-de9ae030e57e" />
<img width="1366" height="638" alt="index-pt2" src="https://github.com/user-attachments/assets/2f01bc8c-205a-43d2-9ac5-89b3410eaeb5" />
<img width="965" height="268" alt="index-pt3" src="https://github.com/user-attachments/assets/33662743-7af3-43f1-bb2b-33fb7d1946fe" />

- tela create (cadastro)
<img width="1417" height="758" alt="create-pt1" src="https://github.com/user-attachments/assets/cd5924eb-ddec-4653-9a0f-ba0f9ba9d4bc" />

- tela edit (edição)
<img width="1321" height="753" alt="edit-pt1" src="https://github.com/user-attachments/assets/6721864f-8ce3-4531-a3de-0ba422b79c68" />

- tela show (consulta + edição)
<img width="1374" height="751" alt="show" src="https://github.com/user-attachments/assets/8f89d1ad-5a5f-4617-9439-b0afd323193c" />


---
## 10. Como executar o projeto (PASSO A PASSO)

### 1️⃣ Instalar dependências
``composer install
npm install``

### 2️⃣ Criar arquivo .env
`` cp .env.example .env``

<img width="375" height="75" alt="2-1" src="https://github.com/user-attachments/assets/040d4f9e-c6cf-4de4-8066-a8a4d158f4c8" />


### 3️⃣ Criar chave da aplicação
``php artisan key:generate``

### 4️⃣ Rodar migrations (se não importar SQL)
``php artisan migrate``

<img width="526" height="42" alt="2-2" src="https://github.com/user-attachments/assets/e04efe41-25b1-43c6-aff9-ab5fba33a814" />


### 5️⃣ Rodar o servidor Laravel
``composer run dev``

<img width="449" height="28" alt="now" src="https://github.com/user-attachments/assets/1b69c10d-108f-46f4-9f94-bac5ce81992c" />

### 6️⃣ Escrever os comandos a seguir, para criar um registro capaz de fazer login no site

<img width="622" height="279" alt="comandos" src="https://github.com/user-attachments/assets/d42e9d02-6947-4033-bebd-188ea3a0e22f" />

### 7️⃣ Fazer login com as credenciais presentes no comando

<img width="572" height="786" alt="tela-login-entrar" src="https://github.com/user-attachments/assets/98db7040-e19c-4055-b99f-419b1bb0910a" />


-----
# ⚠ Observações
As páginas do CRUD e Dashboard não possuiem prints porque, ao criar o projeto, alguns arquivos essenciais para a identificação das rotas não foram instalados, a única página reconhecida era a de Login.
Assim, fiquei impossibilitada de testar e tirar prints das demais telas, peço desculpas por isso.

Tentei resolver em tempo hábil, criando o projeto novamente e copiando as partes que eu desenvolvi, criando outro projeto, mas não surtiu efeito e eu não tinha muito tempo disponível por conta de outras tarefas, peço desculpas novamente.

Estou enviando todos os prints que possuo para garantir que pelo menos haja menção nessa tarefa, por mais que eu saiba que ela não vá ser satisfatória.

Desde já, agradeço pela atenção e segue print do erro que meu computador informa assim que eu tento proseguir com a navegação no site:


<img width="1290" height="819" alt="erro" src="https://github.com/user-attachments/assets/997ce3c4-40c8-4ece-b2b2-4f36e0dc4625" />




