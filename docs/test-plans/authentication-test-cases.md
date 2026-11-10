# 📄 Especificação de Casos de Teste — Módulo de Autenticação

## 🎯 Módulo: Autenticação de Usuários (Login)

**Caso de Uso Relacionado:** UC-001 (Autenticação no Sistema)--

### 🔹 TC-AUTH-01: Login bem-sucedido com credenciais válidas (Positivo)- **Tipo:** Positivo- **Pré-condição:** Usuário previamente cadastrado na base de dados (`user@email.com` / 
`12345678`).- **Entradas:** `email: user@email.com`, `password: 12345678`- **Passos:**

1. Acessar a rota GET `/login`.

2. Preencher os campos com e-mail e senha válidos.

3. Clicar no botão "Entrar".- **Resultado Esperado:** Redirecionamento HTTP 302 para `/dashboard`, criação do token de sessão e status HTTP 200 na página final.

**Critério BDD:**

```gherkin
GIVEN que o usuário está registrado no banco de dados e localizado na página de login
WHEN informa o e-mail "user@email.com" e a senha "12345678" e submete o formulário
THEN a autenticação é aprovada, a sessão é criada e o usuário visualiza o Dashboard
```--
### 🔹 TC-AUTH-02: Rejeição de login com senha incorreta (Negativo)- **Tipo:** Negativo (Exceção)- **Pré-condição:** Usuário cadastrado no banco (`user@email.com`).- **Entradas:** `email: user@email.com`, `password: senha_errada`- **Resultado Esperado:** Bloqueio do acesso, resposta HTTP 422/Sessão com erro e 
mensagem "As credenciais fornecidas estão incorretas".--
### 🔹 TC-AUTH-03: Rejeição de login com e-mail não registrado (Negativo)- **Tipo:** Negativo (Exceção)- **Pré-condição:** E-mail `nao_existe@email.com` não cadastrado na base.- **Entradas:** `email: nao_existe@email.com`, `password: 12345678`- **Resultado Esperado:** Bloqueio imediato da requisição, manutenção do estado visitante 
e exibição do alerta de erro