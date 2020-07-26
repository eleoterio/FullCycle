# DDD

É um conjunto de principios com foco em:
 - Domínio
 - Exploração de modelos de forma criativa
 - Definir e falar a linguagem Ubíqua beseada em um contexto delimitado

*Domain,Driven,Design*

## Domínio (Domain)
  Domínio é o coração do negócio que você está trabalhando. É baseado em um conjunto de idéias, conhecimento e processo de negócio.


## Exploração de modelos de criativos
  DDD preza que o desenvolvedores façam parte do processo de entender o negócio e todos os seus modelos nos mais diversos ângulos ao inves de simplesmente entrevistar especialistas.

## Definir e falar a linguagem Ubíqua
  Linguagem ubíqua é a linguagem falada no dia a dia no contexto da empresa. É a linguagem que utiliza as terminologias da realidade do negócio.

# 3 Pilares
  - Linguagem Ubíqua
  - Bounded context(Contexto delimitado)
  - Context Maps(Mapas de contexto)

## Linguagem Ubíqua
  - Padronizar a linguagem entre os devs e os expert do negócio.
  - Montar documento/excel/wiki para padronizar a comunicação.

## Bounded context
  - Delimita os contextos das aplicações
  - Cada contexto possui suas responsabilidadesclaramente definidas.
  - Cada contexto pode ser sua própria linguagem Ubíqua.
  - Utilização de historias e levantamento de escopo do projeto com o "Domain Expert" auxilia no processo de delimitação de contextos.

# Domain Model Patterns
 - São padrões de desenvolvimento e estruturação de aplicações cujo o domínio é o principal foco
 - Focados em entidade de agregadores
 - Objetos de valor
 - Repositórios
 - Serviços

# Objetos de Valor (Value Objects)
  - Imutáveis
  - Coleção de atributos
  - Normalmente não possuem métodos de setters
  - Entrada dos valores por um construtor
  - Tipagem forte ao invés da Utilização de dados primitivos

# Repositórios
  - Tem acesso direto a camada de dados
  - Persiste dados utilizando as entidades
  - Possui os métodos necessários para realizar consulta
  - Utiliza sempre um Repositório por agregação
  - Pode consultar diretamente serviços externos

# Serviços de Domínio
  - Implementa lógica de negócios a partir da definição de um expert de Domínio
  - Trabalham com diversos fluxos de diversas entidades e agregações
  - Utilizam os repositórios como interface de acesso aos dados
  - Consumem recursos de camada de infraestrutura como enviar email, disparar eventos, entre outros.
