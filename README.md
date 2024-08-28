# Projeto PHP com Docker e PostgreSQL

Este projeto demonstra a configuração de um ambiente PHP usando Docker e Docker Compose com PostgreSQL como banco de dados. O ambiente inclui um servidor web PHP e um banco de dados PostgreSQL.

## Estrutura do Projeto

- `docker-compose.yml` - Arquivo de configuração do Docker Compose.
- `.docker/Dockerfile` - Arquivo de configuração para o contêiner PHP.
- `src/` - Diretório para arquivos de código PHP.
- `DB/init.sql` - Script SQL para inicializar o banco de dados PostgreSQL.

## Pré-requisitos

- [Docker](https://www.docker.com/get-started) - Plataforma para desenvolvimento de contêineres.
- [Docker Compose](https://docs.docker.com/compose/install/) - Ferramenta para definir e executar aplicativos Docker multi-contêiner.

## Configuração do Projeto

1. **Clone o Repositório**

   Clone este repositório para o seu ambiente local:

   ```bash
   git clone https://github.com/caiobellum/projeto-vox
   cd projeto-vox

2. **Executar Projeto**
   
   Execute no terminal do projeto o comando abaixo:

   ```bash
   docker compose up

3. **Acessando o Projeto**   

   O acesso ao projeto deverá ocorrer no seguinte link:

   http://localhost:80