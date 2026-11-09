# Projeto Contínuo — UC Testes de Sistemas (Firjan SENAI)

## 📌 Sobre o Projeto

Aplicação web em PHP/Laravel desenvolvida para a prática automatizada de testes de 
software (Unitários, Integração e E2E).

## 🛠 Requisitos do Ambiente- PHP 8.2+- Composer 2.x- SQLite- Git & GitHub

## 🎯 Objetivos de Qualidade (QA)- Garantir alta cobertura de testes unitários na camada de negócio.

## - Validar endpoints HTTP e formulários.- Prevenir regressões através da integração contínua (CI/CD).

##

A implementação de testes automatizados desde o primeiro dia de desenvolvimento é fundamental para garantir a estabilidade e a qualidade do software a longo prazo.

## 7 - 1

Erro È a ação humana incorreta cometida pelo dev na escrita pelo código.

Defeito é a manifestação física desse erro no código-fonte, ou seja, a linha de código mal estruturada gerada pelo programado.

Falha é o comportamento incorreto e visível que o usuário final experimenta quando o sistema é executado e o código defeituoso é acionado

## 7 - 2

O custo aumenta porque, quanto mais avançada for a etapa do projeto (passando de codificação para testes de integração, homologação/staging e produção), mais dependências o código afetado acumulará.


## 7 - 3 

Verificação - Chegagem estática

Validação - atende as espectativas e necessidades reais do usuário final?

## 7 - 4 

s testes unitários são extremamente rápidos de executar, baratos de manter, rodam isolados em memória e apontam exatamente a linha de código com problema. Já os testes End-to-End (E2E) dependem da interface gráfica, de navegadores, de bancos de dados reais e de redes, tornando-se lentos, frágeis a pequenas alterações visuais (flaky tests) e muito mais caros de manter em larga escala.