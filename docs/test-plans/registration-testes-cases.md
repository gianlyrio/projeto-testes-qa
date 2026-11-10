# 📄 Especificação de Casos de Teste — Módulo de Registro
## 🎯 Módulo: Cadastro de Usuários (Register)
**Caso de Uso Relacionado:** UC-002 (Criação de Conta de Usuário)--
### 🔹 Tabela Resumo dos Casos de Teste
| ID do Caso | Tipo | Dado de Entrada (E-mail / Senha) | Comportamento do FormRequest | 
Resultado Esperado |
|---|---|---|---|---|
| **TC-REG-01** | Positivo | `novo@email.com` / `senha1234` | Validação Aprovada | 
Registro salvo na tabela `users` + Login |
| **TC-REG-02** | Negativo | `existente@email.com` (duplicado) | Regra 
`unique:users,email` | HTTP 422 + Alerta "E-mail já cadastrado" |
| **TC-REG-03** | Negativo | `teste@email.com` / senhas divergentes | Regra `confirmed` | 
Formulário rejeitado + Senha limpa |
| **TC-REG-04** | Negativo | `teste@email.com` / `123` (3 caracteres) | Regra `min:8` | 
Alerta "A senha deve ter no mínimo 8 caracteres" |--
### 🔹 Detalhamento BDD — TC-REG-01 (Registro Válido)
```gherkin
GIVEN que um novo visitante acessa a página de registro "/register"
WHEN preenche o nome "Carlos Silva", e-mail "carlos@email.com" e senha "senha1234" 
confirmada
THEN um novo registro é persistido na tabela "users" e o usuário é redirecionado logado
```
### 🔹 Detalhamento BDD — TC-REG-02 (E-mail Existente)
```gherkin
GIVEN que o e-mail "carlos@email.com" já existe cadastrado na tabela "users"
WHEN outro visitante tenta criar uma conta utilizando o e-mail "carlos@email.com"
THEN o sistema intercepta no FormRequest e impede o cadastro exibindo erro de duplicidade
```