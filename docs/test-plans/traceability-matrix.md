# 🗺 Matriz de Rastreabilidade de Testes (REQ vs. TC)
## 📌 Mapeamento de Cobertura Documental — Laravel QA Project
| ID Requisito | Descrição do Requisito | Casos de Teste Associados | Nível do Teste | 
Status Documental |
|---|---|---|---|---|
| **REQ-01** | Autenticação de Usuários com E-mail e Senha | `TC-AUTH-01`, `TC-AUTH-02`, 
`TC-AUTH-03` | HTTP / Feature | Mapeado |
| **REQ-02** | Cadastro com Validação de E-mail Único e Senha Min:8 | `TC-REG-01`, `TC
REG-02`, `TC-REG-03`, `TC-REG-04` | HTTP / Database | Mapeado |
### 🔍 Garantia de Cobertura- **Requisitos Cobertos:** 100% dos requisitos funcionais iniciais possuem cenários 
positivos e negativos detalhados.- **Rastreabilidade de Mudanças:** Caso a regra de senha mude para 10 caracteres, o 
impacto é localizado imediatamente no `TC-REG-04`.