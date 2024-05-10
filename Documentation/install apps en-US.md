<h1 style="text-align:center">Installation and Configuration</h1>

As seen earlier, we need to install and configure some programs on our machine for the program to run. Below, we'll see step-by-step how to download, install, and configure each of these auxiliary programs.

## Git

For downloading and installing Git, you should visit [this link](https://git-scm.com/downloads) and select the version according to your operating system.

### Git Configuration

For Git configuration, you can read the [documentation](https://git-scm.com/book/pt-br/v2/Come%C3%A7ando-Configura%C3%A7%C3%A3o-Inicial-do-Git) or watch [this video](https://www.youtube.com/watch?v=AdzKzlp66sQ&ab_channel=ProgrammingKnowledge).

## PHP

You can download PHP from the [official website](https://www.php.net/).

For better understanding of how to download and install PHP on Windows, watch [this video](https://www.youtube.com/watch?v=n04w2SzGr_U&ab_channel=Novuspad). If your system is Linux, watch [this video](https://www.youtube.com/watch?v=vUxr0yYiQbE&ab_channel=AmitThinks). However, if you're using Mac, watch [this video](https://www.youtube.com/watch?v=-dfJUm2qXA8&ab_channel=CoffeeProgrammer).

### PHP Configuration

- After installation, open the terminal and type the command "php --ini".
- After pressing Enter, copy the address next to "Loaded Configuration File:".
- With this address copied, open File Explorer and paste this address. This will open a notepad with several things related to PHP.
- With the file open, press "Ctrl + f", type "fileinfo", and press Enter. This will locate the item that needs to be modified.
- The line we are looking for contains the following phrase ";extension=fileinfo". Remove the ";" (semicolon), leaving only "extension=fileinfo".
- After that, save the file by pressing "Ctrl + s".

## Docker

You can download Docker from [here](https://docs.docker.com/desktop/install/windows-install/) for Windows, [here](https://docs.docker.com/desktop/install/linux-install/) for Linux, or [here](https://docs.docker.com/desktop/install/mac-install/) for Mac.

If you're having trouble downloading or installing Docker on your machine, you can watch [this video](https://www.youtube.com/watch?v=XgRGI0Pw2mM&ab_channel=ProgrammingKnowledge2) for Windows, [this one](https://www.youtube.com/watch?v=5_EA3rBCXmU&ab_channel=ProgrammingKnowledge) for Linux, or [this one](https://www.youtube.com/watch?v=-EXlfSsP49A&ab_channel=ProgrammingKnowledge) for Mac.

### Docker Configuration

After downloading and installing Docker, no further configuration is needed. This is because the necessary instructions that Docker will read are already saved within our cryptography program, in the docker-compose.yml file.

## Composer

For downloading and installing Composer, follow the instructions on [this site](https://getcomposer.org/download/).

If you're having trouble downloading or installing Composer, watch [this video](https://www.youtube.com/watch?v=pS0U-PsXUlg&ab_channel=AmitThinks).

### Composer Configuration

Composer does not require additional configurations.

## Sail

The installation of Sail is a bit different compared to the others. To do this, we'll open the terminal on our machine, navigate to the directory where we have the program saved, and type the following commands:

- composer require laravel/sail --dev
- php artisan sail:install

_NOTE: When running the second command, a table with some options will appear. Below the table, you can type which option you want. So, after running this command, we must type "mysql"._

## WSL

_OBS.: This last step is only for Windows users._

To install WSL, you'll have to open the terminal on your machine and navigate to the directory where the program files are located. Once inside the directory, run the command "wsl --install". This command will start the download, and once the download is complete, you'll need to create a username and password. To do this, just type when prompted.

_NOTE: It's worth noting that when you type the password, for security reasons, it doesn't appear._

After installing WSL, open Docker Desktop. With the Docker application open, click on the configuration options located at the top of the screen. Within the settings, click on the "Resources" tab. Inside this tab, go to the "WSL integration" tab, and there enable integration with Ubuntu. After the integration, click the "apply & restart" button at the bottom right of the screen, and from there everything is ready.

# 

And so we finish the tutorial on how to install and configure the necessary programs for us to run our cryptography application. Therefore, you can continue to follow the [step-by-step guide](/One-time-pad/README%20en-US.md) on how to use the application.
