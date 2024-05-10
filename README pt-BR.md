<h1 style="text-align:center;">One-Time Pad🔐</h1>

[Readme en-US](README%20en-US.md)


## Sobre o Projeto

 Este é um projeto acadêmico, realizado pelos estudantes [Guilherme Cella](https://github.com/guiCella), [Renan de Jesus](https://github.com/Renan-de-jesus) e [Victor Barbosa](https://github.com/victorbsad). Ele tem como obejtivo utilizar a criptografia para manter seus dados seguros.

## Objetivo

O objetivo deste projeto é criar um aplicativo web que possa receber arquivos e criptografá-los para garantir sua segurança durante o armazenamento ou transmissão. Além disso, o aplicativo também é capaz de descriptografar esses arquivos para que possam ser acessados novamente pelo usuário.


## Como Funcina

Esse projeto se baseia na criptografia One-Time Pad. A qual, para que funcione de maneira precisa e efetiva, necessita de uma chave de criptografia. Para ser mais especifico, esta chave consiste em uma determinda ordem de caracters, escolhida pelo usuário. Além da chave, o usuário também deve escolher um arquivo que quer criptografar.

Com base nessa chave, usamos o operador lógico XOR, para encriptar ou decriptar os dados do arquivo enviado. Esse operador tem a capacidade de trocar os bits que compõem os caracteres, conforme mostra o exemplo abaixo.

| Entrada A | Entrada B | Saída |
|:---------:|:---------:|:-----:|
|    0      |     0     |   0   |
|    0      |     1     |   1   |
|    1      |     0     |   1   |
|    1      |     1     |   0   |

Após a operação de criptografar, o arquvo enviado é deletado do sistema. Sendo assim, o usuário não corre riscos que seu documento seja exposto eventualmente

## Instalação

Como esse projeto é um aplicativo web, não será necessario fazer nenhuma instalação. Porém, como o projeto ainda está em uma fase inicial, ele funciona apenas em localhost.

Para que o aplicativo rode em localhost você precisa ter instalado em sua máquina os seguintes programas:

- Git
- Docker
- Ubuntu
- PHP
- Composer
- Sail

Caso você não tenha algum, ou nenhum, desses aplicativos instalados, basta você clicar [neste link](Documentation/passo-a-passo.md) e seguir o passo a passo de como instalá-los.

Com todos os aplicativos instalados e devidamente configurados, podemos iniciar o processo de abertura do localhost. Para realizarmos tal feito, vamos seguir os passos abaixo:

_OBS.: O tutorial a seguir é condizente para o sistema operacional Windows. Caso você tenha algum outro, você poderá ver o tutorial clicando [aqui](Documentation/install%20Linux.md) para Linux ou [aqui](Documentation/install%20Mac.md) para Mac._

**1- Clonar o repositório:** Para este primeiro passo, precisamos criar uma pasta para guardarmos este programa em nossa máquina.

**1.1:** Após a criação da pasta, vamos abri-lá. Com ela aberta, clicaremos com o botão direito do mouse e selecionaremos a opção "Open Git Bash Here". Clicando nessa opção, irá abrir o terminal do git.

**1.2:** Com o terminal aberto, vamos digitar o comando "git clone https://github.com/guiCella/One-time-pad" e pressionar a tecla enter. Com isso feito, você perceberá que o conteudo que se enconta no Github já está disponivel na sua máquina.

_OBS.: O camando deverá ser inserido sem a presença da aspas._

**2- Abrir o terminal:** Após ter clonado o repositório, iremos na barra de pesquisa do Windows e digitaremos "Prompt de Comando". Após localizarmos, iremos clicar na opção "Executar como administrador".

**3- Navegar para o diretorio em que se encontra o programa:** Para realizarmos esse passo, primeiramente iremos abrir a pasta onde se entra os arquivos do programa. Após isso, vamos clicar com o botão direito do mouse no campo que mostra o lugar onde a pasta se encontra. Clicando neste campo, ele selecionará o endereço automanticamente. Feito isso, clicaremos com o botão esquerdo na parte que esta em azul e selecionaremos a opção "Copiar".

**3.1:** Depois de conseguir o endereço da pasta, voltaremos para o prompt de comando e iremos escrever o seguinte comando: "cd "endereço copiado". Para colar o endereço que copiamos, basta dar um clique, com o botão direito do mouse, dentro do prompt de comando.

_OBS.: Vale lembrar que devemos trocar a parte "endereço copiado", pelo endereço que copiamos anteriormente, e tirar as aspas._

**4- Inicializar o programa:** Estando dentro da pasta condizente, no prompt de comando, iriemos utilizar o comando "sail up". Assim estaremos inicializando o programa em localhost.

**5- Abrindo o programa no navegador web:** Após realizarmos os passos anteriores, o programa já estará rodando perfeitamente. Com isso, você pode abrir um navegador web, de sua escolha, e digitar o seguinte endereço URL: localhost:6969. Após digitar e apertar o enter, você será redirecionado para a página do programa.

**6- Fechando o programa:** Quando você acabar de utilizar o programa, deverá fechá-lo. Para isso, tens que ir novamente no prompt de comando, e digitar o comando "sail down". Lembrando que o camando deve ser ser as aspas.

## Como Utilizar 

Apesar de ser um programa bem simples e com uma interface intuitiva, vamos fazer um passo a passo de como utilizá-lo para que vocês possam aproveitar o máximo do programa.

**1-** Com o programa aberto na tela inicial, você irá clicar no botão "Criptografar ou Descriptar". Após isso, você será redirecionado para outra página. Estando na segunda página, você poderá visualizar um campo de texto onde diz "Chave de criptografia:" e, abaixo, um lugar para selecionar um documento.

**2-** Na segunda página, você clicará no campo de texto e digitará a sua chave de criptografia. Nós recomendamos que você escolha uma chave mais longa, ou seja, com mais caracteres. Pois assim, a criptografia ficará mais forte e segura.

**<font color="red">Atenção: A chave de criptografia é uma chave única, a qual você deve compartilhar apenas com quem confia</font>**

**3-** Após a escolha da chave, você deve clicar em "Escolha um arquivo" e selecionar o arquivo, com extensão ".txt", que você deseja criptografar. Tendo o arquivo selecionado, clique no botão "Abrir arquivo". Com isso feito o arquivo está pronto para a criptografia

**<font color="green">Nota: Atualmente o programa se encontra um uma versão inicial, a qual aceita, somente, arquivos com a extensão ".txt". Atento que estamos trabalhando arduamente para que seja implementado o suporte de outros tipos de arquivos, como ".docx" e ".pfd" por exemplo.</font>**

**4-** Completando os passos anteriores, você já pode criptografar o seu arquivo. Para isso, basta clinar no botão "Encriptar ou Descriptar". Clicando nesse botão, o conteudo do seu arquivo será criptografado e será feito, automaticamente, um download de um novo arquivo com o conteúdo criptografado.

**5-** Para descriptografar o arquivo, você deve inserir a mesma chave que foi utilizada na hora da criptografia e selecionar o arquivo que contêm o conteúdo criptografado. Após essas ações, deve-se clicar no botão "Encriptar ou Descriptar" e será feito, novamente, um download de um arquivo contendo o conteúdo descriptografado.

## Colaboradores

 <span style="font-family: Arial; font-size: 18px;">Guilherme Cella</span>

[![Instagram](https://img.shields.io/badge/instagram-%23E4405F.svg?style=for-the-badge&logo=Instagram&logoColor=white)](https://www.instagram.com/guilherme_cella/)
[![GitHub](https://img.shields.io/badge/github-000?style=for-the-badge&logo=github&logoColor=30A3DC)](https://github.com/guiCella)

<span style="font-family: Arial; font-size: 18px;">Renan de Jesus</span>

[![linkedin](https://img.shields.io/badge/linkedin-0A66C2?style=for-the-badge&logo=linkedin&logoColor=white)](https://www.linkedin.com/in/renan-de-jesus-848308268/)
[![Instagram](https://img.shields.io/badge/instagram-%23E4405F.svg?style=for-the-badge&logo=Instagram&logoColor=white)](https://www.instagram.com/renan3t)
[![GitHub](https://img.shields.io/badge/github-000?style=for-the-badge&logo=github&logoColor=30A3DC)](https://github.com/Renan-de-Jesus)

<span style="font-family: Arial; font-size: 18px;">Victor Barbosa</span>

[![Instagram](https://img.shields.io/badge/instagram-%23E4405F.svg?style=for-the-badge&logo=Instagram&logoColor=white)](https://www.instagram.com/eell.victor/)
[![GitHub](https://img.shields.io/badge/github-000?style=for-the-badge&logo=github&logoColor=30A3DC)](https://github.com/victorbsad)
