# Introdução

  ## Pilares

    - Organização do um sistema (Processo).
    - Componentização.
    - Relacionamento entre sistemas.
    - Governança.
    - Ambiente.
    - Projeto.
    - Projeção.
    - Cultura.

  ## Frameworks

    - TOGAF
      - Frameworks conceitual.
      - Definição dos processos de arquitetura.
      - Conceitos e nomenclaturas.
      - Visão geral de tipos de arquiteturas:
        - Negócio.
        - Sistema de informação.
        - Tecnologia.
        - Planos de migração.
    - ISO
      - ISO/IEC/IEEE 42010
      - System and software engineering
      - Architecture description
      - Formaliza os fundamentos da área de arquitetura de software

# História

## Tradicional
### Metodologias
  - Warterfall.
### Tipos de aplicação
  - Monolítica.
### Infraestrutura
  - on-promise.

## Atual
### Metodologias
  - Agile.
### Tipos de aplicação
  - multi-tier Architecture.(software distribuído).
### Infraestrutura
  - Virtualização/Cloud.

## Emergente
### Metodologias
  - DevOps/FullCycle.
### Tipos de aplicação
  - Microserviçoes.
### Infraestrutura
  - Containers.

## Futuro
### Metodologias
  - NoOps.
### Tipos de aplicação
  - Serverless Applications.(Serverless Framework)
### Infraestrutura
  - Public Cloud.

## Escalabilidade e Sistema Monolítico.

### Sistemas Monolíticos
  - Tudo dentro do mesmo sistema.
  - Alto acoplamento.
  - Processo de Deploy "completo" a cada mudança.
  - Normalmente usa uma tecnologia.
  - Um problema afeta todo o sistema.
  - Maior complexidade para times.

### Escalando software
  - Escala vertical:
    - Aumento de recurso computacionais.
  - Escala horizontal:
    - Load Balancer.
    - Adiciona quantidade de maquina.

### Detalhes sobre a arquitetura de aplicação
  - Disco efêmeros.
  - Servidor de aplicação vs Servidor de assets.
  - Cache centralizado.
  - Sessões centralizadas.
  - Upload/gravação de arquivos.

"Tudo pode ter que ser destruído e criado facilmente"

### distribuição de responsabilidade
  - App.
  - Proxy Reverso.
  - Elastic.
  - Static.
  - Cache.
  - DB.

### Escala horizontal: Monolítico
  - Ter imagens/container.
  - Ser facilmente reconstruida.
  - Ter suas responsabilidades, incluindo assets, etc.

### Quando aplicação Monolíticas podem parar de valer a pena?
  - Times grandes.
  - Necessidade de escalar todo sistema pelo fato de uma área em específico esteja com pico de utilização.
  - Risco de um deploy completo começa a se elevar.
  - Necessidade de utilizar tecnologias diferentes.
