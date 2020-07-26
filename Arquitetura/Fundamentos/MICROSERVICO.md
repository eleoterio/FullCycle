# Microserviços

## SOA: Arquitetura Orientada a Serviço
  - Serviço normalmente maiores baseados em funcionalidades.
  - Necessidade de ESB*.
  - Single point of failure.
  - Compartilhamento de bancos de dados é comum.
  - Muitas vezes também podem ter sistemas monolíticos sendo utilizados como serviços.

*ESB - Enterprise Service Bus*

## Arquitetura baseada em microserviços
  - Serviços pequenos com poucas responsabilidades.
  - Maior tolerância a falhas.
  - Totalmente independente.
  - Cada serviço possui seu próprio banco de dados.
  - Comunicação síncrona e assíncrona.

## Microserviços não são para todas as situações
  - Arquitetura complexa.
  - Custo mais elevado.
  - Necessidade de mais equipes para manter.
  - Sistema precisa ser grande o suficiente para justificar.
  - Gerar problemas que normalmente você não tinhas antes.
  - Monitoramento complexo.

*Microserviços não são moda, mas sim necessidade*

## Microserviços

### Principais características
  - [Componentização via Serviços.](#componentizacao-via-servico)
  - [Organização em torno do negócio.](#organizacao-em-torno-do-negocio)
  - Estrutura baseada em Produtos.(Não em projeto)
  - [Smart endpoints & Dump pipes.](#smart-endpoints-e-dump-pipes)
  - [Governança descentralizada.](#governanca-descentralizada)
  - Descentralização no Gerenciamento de dados.
  - [Automação de infraestrutura.](#automacao-de-infraestrutura)
  - [Desenhado para falhar.](#desenhado-para-falhar)
  - [Designer evolutivo.](#designer-evolutivo)

### Componentização via Serviços
  - Services dow microserviços != Services da OO.
  - "componente é uma unidade de software independente que pode ser substituída ou atualizada"
  - Desvantagens:
    - Chamadas externas são mais custosas do que chamadas locais.
    - Cruzamento entre componentes pode ser tornar complexo.
    - Transações entre serviços são "grandes desafios".
    - Mudanças bruscas em regras de negocio podem afetar diversos serviços tornando o processo difícil de ser refeito.

### Organização em torno do negócio
  - Conceito importante
    - Um projeto é baseado em um ou mais produtos que trabalham em diferentes contexto.
  - Time de desenvolvedores por produto.
  - Muitas empresas tratamos times como "squads".
  - Cada squad é multidisciplinar.
  - Cada squad é responsável por um ou mais produtos.
  - Cada produto pode ter um ou mais serviços envolvidos.

### Smart endpoints e Dump pipes.
  - Exposição de APIs. (ex: Rest & GraphQL)
  - Comunicação entre serviços.
  - Comunicação síncrona e assíncrona.
  - Utilização de sistemas de mensageria. (ex. RabbitMQ)
  - Garantia de que um serviço foi executado baseado na execução das filas.

### Governança descentralizada
  - Ferramenta certa para o trabalho certo. Tecnologias podem ser definidas baseadas na necessidade do produto.
  - Diferentes padrões entre squads.
  - Contratos de interface de forma independente.

### Automação de infraestrutura
  - Cloud computing.
  - Testes automatizados.
  - Continuos delivery e continuos deployer.
  - Continuos Integration.
  - Load balancer / Autoscaling.

## Desenhado para falhar
  - Tolerante a falha.
  - Serviços que se comunicam precisam de fallback.
  - logging.
  - Monitoramento em tempo real.
  - Alarmes

### Designer evolutivo
  - Produtos bem definidos podem evolui ou serem extintos por razões de negocio.
  - Gerenciamento de versões.
  - Replacement and  upgradeability.

## API Gateway

## Service Discovery
