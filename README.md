# Projeto PHP com Docker e PostgreSQL

Este projeto demonstra a configuração de um ambiente PHP usando Docker e Docker Compose com PostgreSQL como banco de dados. O ambiente inclui um servidor web PHP e um banco de dados PostgreSQL, facilitando o desenvolvimento e o teste de aplicações PHP com um banco de dados relacional.

## Estrutura do Projeto

- `docker-compose.yml` - Arquivo de configuração do Docker Compose.
- `Dockerfile` - Arquivo de configuração para o contêiner PHP.
- `src/` - Diretório para arquivos de código PHP.
- `init.sql` - Script SQL para inicializar o banco de dados PostgreSQL.
- `README.md` - Este arquivo de documentação.

## Pré-requisitos

- [Docker](https://www.docker.com/get-started) - Plataforma para desenvolvimento de contêineres.
- [Docker Compose](https://docs.docker.com/compose/install/) - Ferramenta para definir e executar aplicativos Docker multi-contêiner.

## Configuração do Projeto

1. **Clone o Repositório**

   Clone este repositório para o seu ambiente local:

   ```bash
   git clone https://github.com/seu_usuario/seu_projeto.git
   cd seu_projeto
