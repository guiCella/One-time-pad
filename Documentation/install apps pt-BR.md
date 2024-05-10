<h1 style="text-align:center">Instalação e Configuração</h1>

Conforme visto anteriormente, vamos precisar instalar e configurar alguns programas em nossa máquina para que o programa possa rodar. Veremos abaixo, um passo a passo de como baixar, instalar e configurar cada um desses programas auxiliares.

## Git

Para o download e instalação do git, você deve acessar [este link](https://git-scm.com/downloads) e selecionar a versão conforme o seu sistema opearcional.

### Configuração do git

Para a configuração do git, você pode ler a [documentação](https://git-scm.com/book/pt-br/v2/Come%C3%A7ando-Configura%C3%A7%C3%A3o-Inicial-do-Git) ou assistir [este vídeo](https://www.youtube.com/watch?v=mmcOw2ynWEs&ab_channel=influentech).

## PHP
Você poderá baixar o PHP no [site oficial](https://www.php.net/).

Para melhor entendimento de como baixar e instalar o PHP no Windows, assista [este vídeo](https://www.youtube.com/watch?v=TxmPhYDkQQI&ab_channel=ClubeFull-Stack). Caso seu sistema seja Linux assista [este vídeo](https://www.youtube.com/watch?v=5DpQCqBHxBY&ab_channel=Jos%C3%A9Marcos-phpislife). No entanto se seu sistema for Mac assista [este vídeo](https://www.youtube.com/watch?v=qaR4nZZhmYg&ab_channel=TreinaWeb).

### Configuração do PHP

- Após a instalação, vamos abrir o terminal e digitar o comando "php --ini".
- Assim que apertarmos o enter, vamos copiar o endereço que aparece ao lado de "Loaded Configuration File:".
- Com esse endereço copiado, iremos abrir o explorador de arquivos e colar este endereço. Com isso feito, irá abrir um bloco de notas, com várias coisas relacionadas ao PHP.
- Com o arquivo aberto, iremos precionar as teclas "Ctrl + f", digitar "fileinfo" e apertar enter. Isso irá localizar o item que precisaremos modificar.
- A linha que buscamos, contem a seguinte frase ";extension=fileinfo". Vamos remover o ";" (ponto e vírgula), ficando apenas "extension=fileinfo".
- Após esse feito, iremos salvar o arquivo precionando as teclas "Ctrl + s".

## Docker

Neste link, você pode baixar e seguir as instruções para instalar o docker: [Docker para Windows](https://docs.docker.com/desktop/install/windows-install/).

Neste link, você pode baixar e seguir as instruções para instalar o docker: [Docker para Linux](https://docs.docker.com/desktop/install/linux-install/).

Neste link, você pode baixar e seguir as instruções para instalar o docker: [Docker para Mac](https://docs.docker.com/desktop/install/mac-install/).

Caso você esteja tendo alguma dificuldade para baixar ou instalar o docker na sua máquina, você pode assistir [este vídeo](https://www.youtube.com/watch?v=Lgh8JgcYFwM&t=7s&ab_channel=Celke) para melhor entendimento da versão Windows, ou [este](https://www.youtube.com/watch?v=pBDl1H7GG-o&ab_channel=WendelSegadilha) para a versão Linux ou [este](https://www.youtube.com/watch?v=rlm8x_T34uc&ab_channel=TioJobs) para a versão Mac.

### Comfiguração do docker

Após realizarmos o download e a instalação do docker, não iremos realizar mais nenhuma configuração. Isso porque as instruções necessárias que o docker irá ler já estão salvas dentro do nosso programa de criptografia, no arquivo docker-compose.yml.

## Composer

Para o download e instalação do composer, siga as instruções deste [site](https://getcomposer.org/download/).

Caso não esteja conseguindo baixar ou instalar o composer, veja este [vídeo](https://www.youtube.com/watch?v=VeK3UvBKtqU).

### Configuração do composer

O composer não vai necessitar de configurações adicionais.

## Sail

A instalação do sail é um pouco diferente se comparada com as outras. Para ela nós iremos abrir o terminal da nossa máquina, navegar até o diretório onde temos o programa salvo e digitar os seguintes comandos.

- composer require laravel/sail --dev
- php artisan sail:install

_OBS.: Quando rodamos o segundo comando, aparecerá uma tabela com algumas opções. Logo abaixo da tabela, poderemos escrever qual dessas opção vamos querer. Sendo assim, após executar esse comando devemos escrever "mysql"._

## WSL

_OBS.: Esse últmo passo é apenas para as pessoas que usam Windows._

Para instalar o WSL você terá que abrir o terminal da sua máquina e navegar até o diretóio onde se encontra os arquivos do programa. Assim que estiver dentro do ditrtório, execute o comando "wsl --install". Esse comando irá inicializar o download e assim que o download terminar você deverá criar um usuário e uma senha. Para isto, basta apenas digitar quando lhe for pedido.

_OBS.: Vale ressaltar que quando você for digitar a senha, por questões de segurança, a mesma não aparce._

Após a instalação do wsl, iremos abrir o docker desktop. Com o aplicativo do docker aberto, vamos clicar nas opções do configuração, localizadas na parte superior da tela. Estando dentro das configurações, clicaremos na aba "Resources". Dentro desta aba, iremos na aba "WSL integration", e lá ativaremos a integração com o ubuntu. Feito a integração, basta clicar no botão "apply & restart", parte inferior direita da tela, e a partir dai está tudo pronto.

# 

E assim terminamos o tutorial de como instalar e configurar os programas necessário para que possamos rodar o nosso aplicativo de criptografia. Sendo assim, você pode continuar a seguir o [passo a passo](/One-time-pad/README%20pt-BR.md) de como utilizar o aplicativo.