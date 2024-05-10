<h1 style="text-align:center;">One-Time Pad🔐</h1>

[Readme pt-BR](README%20pt-BR.md)

## About the Project

This is an academic project carried out by students [Guilherme Cella](https://github.com/guiCella), [Renan de Jesus](https://github.com/Renan-de-jesus), and [Victor Barbosa](https://github.com/victorbsad). Its goal is to use cryptography to keep your data secure.

## Objective

The objective of this project is to create a web application that can receive plain text files and encrypt them to ensure their security during storage or transmission. Additionally, the application is also capable of decrypting these files so they can be accessed again by the user.

## How It Works

This project is based on the One-Time Pad encryption. To work accurately and effectively, it requires an encryption key. Specifically, this key consists of a certain sequence of characters chosen by the user. In addition to the key, the user must also choose a file to encrypt.

Based on this key, we use the XOR logical operator to encrypt or decrypt the data of the sent file. This operator has the ability to toggle the bits that make up the characters, as shown in the example below.

| Input A | Input B | Output |
|:-------:|:-------:|:------:|
|    0    |    0    |   0    |
|    0    |    1    |   1    |
|    1    |    0    |   1    |
|    1    |    1    |   0    |

After the encryption operation, the sent file is deleted from the system. Therefore, the user does not risk their document being exposed inadvertently.

## Installation

Since this project is a web application, no installation is necessary. However, as the project is still in its early stages, it only works on localhost.

To run the application on localhost, you need to have the following programs installed on your machine:

- Git
- PHP
- Docker
- WSL/Ubuntu
- Composer
- Sail

If you don't have any of these applications installed, or if you're missing some, you can click [this link](Documentation/install%20apps%20en-US.md) and follow the step-by-step guide on how to install them.

With all the required applications installed and properly configured, we can start the process of opening localhost. To do this, follow the steps below:

**1- Cloning the Repository:** For this first step, we need to create a folder to store this program on our machine.

**1.1:** After creating the folder, let's open it. With it open, right-click anywhere inside the folder and select the option "Open Git Bash Here". Clicking on this option will open the git terminal.

**1.2:** With the terminal open, let's type the command "git clone https://github.com/guiCella/One-time-pad" and press the Enter key. With that done, you'll notice that the content from GitHub is now available on your machine.

_OBS.: The command should be entered without the quotes._

**2- Open the Terminal:** After cloning the repository, we'll search for the terminal of our operating system. Once found, we'll click on the option "Run as administrator".

**3- Navigate to the Directory Where the Program Is Located:** To perform this step, we'll first open the folder where the program files are located. After that, we'll right-click on the field that shows the location of the folder. Clicking on this field will automatically select the address. After that, we'll left-click on the part that is blue and select the option "Copy".

**3.1:** After getting the folder address, we'll go back to the command prompt and type the following command: "cd "copied address". To paste the address we copied, just right-click inside the command prompt.

_OBS.: Remember that we must replace "copied address" with the address we copied earlier, and remove the quotes._

**4- Opening Docker:** Before we can continue, we need to open the Docker application. You can find it by searching in the Windows search bar for "Docker Desktop" or looking on your desktop, if you chose to create a shortcut during installation.

**5- Initializing the Program:** Inside the relevant folder in the command prompt, we'll use the command "docker compose up" to initialize the program on localhost.

_OBS.: The first time you use this command, it will take some time to open localhost. The speed depends only on your machine._

**6- Opening the Program in a Web Browser:** After completing the previous steps, the program will be running perfectly. You can now open a web browser of your choice and type the following URL: localhost:6969. After typing and pressing Enter, you'll be redirected to the program page.

**7- Closing the Program:** When you're done using the program, you should close it. To do this, go back to the terminal, and press 'CTRL + c'. Remember that the command should be without quotes.

## How to Use

Although it is a very simple program with an intuitive interface, let's go through step by step on how to use it so you can make the most of it.

**1-** With the program open on the home screen, click on the "Encrypt or Decrypt" button. After that, you will be redirected to another page. On the second page, you will see a text field labeled "Encryption key:" and, below it, a place to select a document.

**2-** On the second page, click on the text field and type your encryption key. We recommend choosing a longer key, i.e., with more characters, as this will make the encryption stronger and more secure.

**<font color="red">Note: The encryption key is a unique key that you should share only with trusted individuals</font>**

**3-** After choosing the key, click on "Choose a file" and select the file with the extension ".txt" that you want to encrypt. Once you have selected the file, click on the "Open file" button. With this done, the file is ready for encryption.


**4-** Once you have completed the previous steps, you can encrypt your file. To do this, simply click on the "Encrypt or Decrypt" button. Clicking this button will encrypt the contents of your file, and a new file with the encrypted content will be downloaded automatically.

**5-** To decrypt the file, you must enter the same key that was used for encryption and select the file containing the encrypted content. After these actions, click on the "Encrypt or Decrypt" button again, and a file containing the decrypted content will be downloaded.

## Contributors

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