<h1 style="text-align:center;">One-Time Pad🔐</h1>

[Readme pt-BR](README%20pt-BR.md)

## About the Project

This is an academic project, carried out by students [Guilherme Cella](https://github.com/guiCella), [Renan de Jesus](https://github.com/Renan-de-jesus), and [Victor Barbosa](https://github.com/victorbsad). It aims to use cryptography to keep your data secure.

## Objective

The objective of this project is to create a web application that can receive files and encrypt them to ensure their security during storage or transmission. Additionally, the application is also capable of decrypting these files so that they can be accessed again by the user.

## How It Works

This project is based on the One-Time Pad encryption. To work accurately and effectively, it requires an encryption key. Specifically, this key consists of a certain order of characters, chosen by the user. In addition to the key, the user must also choose a file to encrypt.

Based on this key, we use the XOR logical operator to encrypt or decrypt the data of the sent file. This operator has the ability to toggle the bits that make up the characters, as shown in the example below.

| Input A | Input B | Output |
|:-------:|:-------:|:------:|
|    0    |    0    |   0    |
|    0    |    1    |   1    |
|    1    |    0    |   1    |
|    1    |    1    |   0    |

After the encryption operation, the sent file is deleted from the system. Thus, the user does not risk their document being exposed inadvertently.

## Installation

As this project is a web application, no installation is required. However, since the project is still in an initial phase, it only works on localhost.

To run the application on localhost, you need to have the following programs installed on your machine:

- Git
- PHP
- Laravel
- Docker
- Ubuntu
- Composer
- Sail

If you do not have any of these applications installed, simply click [here](Items/passo-a-passo.md) and follow the step-by-step instructions on how to install them.

With all the applications installed and properly configured, we can start the process of opening localhost. To do this, follow the steps below:

_NOTE: The following tutorial is suitable for the Windows operating system. If you have a different one, you can view the tutorial by clicking [here](Documentation/install%20Linux.md) for Linux or [here](Documentation/install%20Mac.md) for Mac._

**1- Clone the repository:** For this first step, we need to create a folder to store this program on our machine.

**1.1:** After creating the folder, let's open it. With it open, right-click and select "Open Git Bash Here". Clicking on this option will open the git terminal.

**1.2:** With the terminal open, let's type the command "git clone https://github.com/guiCella/One-time-pad" and press enter. With that done, you will notice that the content on GitHub is already available on your machine.

_NOTE: The command should be entered without quotes._

**2- Open the terminal:** After cloning the repository, let's go to the Windows search bar and type "Command Prompt". After finding it, click on "Run as administrator".

**3- Navigate to the directory where the program is located:** To do this step, we will first open the folder where the program files are located. After that, right-click on the field that shows the location of the folder. Clicking on this field will automatically select the address. Once this is done, left-click on the blue part and select the option "Copy".

**3.1:** After obtaining the folder's address, go back to the command prompt and write the following command: "cd "copied address"". To paste the address we copied, just click inside the command prompt with the right mouse button.

_NOTE: Remember to replace the "copied address" part with the address we copied earlier, and remove the quotes._

**4- Initialize the program:** Being inside the appropriate folder, in the command prompt, we will use the command "sail up". This will initialize the program on localhost.

**5- Open the program in the web browser:** After completing the previous steps, the program will already be running perfectly. With that, you can open a web browser of your choice and type the following URL address: localhost:6969. After typing and pressing enter, you will be redirected to the program page.

**6- Closing the program:** When you finish using the program, you must close it. To do this, you need to go back to the command prompt and type the command "sail down". Remembering that the command should not be in quotes.

## How to Use 

Although it is a very simple program with an intuitive interface, let's go through a step-by-step guide on how to use it so you can make the most of it.

**1-** With the program open on the home screen, click on the "Encrypt or Decrypt" button. After that, you will be redirected to another page. On the second page, you can see a text field labeled "Encryption key:" and, below that, a place to select a document.

**2-** On the second page, click on the text field and enter your encryption key. We recommend choosing a longer key, with more characters, for stronger and more secure encryption.

**<font color="red">Note: The encryption key is a unique key that you should only share with trusted individuals.</font>**

**3-** After choosing the key, click on "Choose a file" and select the file with the ".txt" extension that you want to encrypt. Once you have selected the file, click on the "Open file" button. With that done, the file is ready for encryption.

**<font color="green">Note: Currently, the program is in an initial version that only accepts files with the ".txt" extension. We are working hard to implement support for other file types, such as ".docx" and ".pdf", for example.</font>**

**4-** Completing the previous steps, you can now encrypt your file. To do this, simply click on the "Encrypt or Decrypt" button. Clicking this button will encrypt the contents of your file, and a new file containing the encrypted content will be automatically downloaded.

**5-** To decrypt the file, you must enter the same key that was used during encryption and select the file containing the encrypted content. After these actions, click on the "Encrypt or Decrypt" button again, and a file containing the decrypted content will be downloaded once again.

## Collaborators

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
