
# Telegram Video Downloader

## Introduction
This project is a Telegram Video Downloader tool, designed to help users download videos from Telegram channels efficiently. It supports both public and private channels, provided that the user has appropriate access permissions.

## Features
- Download videos from any Telegram channel (public or private).
- User-friendly: Easy to set up and use.
- Customizable download options, including video quality and save location.

## Prerequisites
Before you begin, ensure you have met the following requirements:
- You have a Telegram account with API access.
- You have access to the Telegram channel(s) from which you wish to download videos.

## Installation
To install Telegram Video Downloader, follow these steps:

1. Clone the repository:
   ```
   git clone https://github.com/yourusername/telegram-video-downloader.git
   ```
2. Navigate to the project directory:
   ```
   cd telegram-video-downloader
   ```
3. Install the necessary dependencies:
   ```
   composer install
   ```

## Usage
To use Telegram Video Downloader, follow these steps:

1. Configure your Telegram API credentials in a `.env` file. Create it in the root project and add the necessary 
   environment variables (Check the .env.dev as an example).
2. Run the following script:
   ```
   php src/downloadAllVideosAndPhotos.php
   ```
   or 
   ```
   php src/downloadLastVideo.php
   ```
3. Follow the prompts to log in to Telegram.

## Contributing to Telegram Video Downloader
To contribute to Telegram Video Downloader, follow these steps:

1. Fork this repository.
2. Create a branch: `git checkout -b <branch_name>`.
3. Make your changes and commit them: `git commit -m '<commit_message>'`.
4. Push to the original branch: `git push origin <project_name>/<location>`.
5. Create the pull request.

Alternatively, see the GitHub documentation on [creating a pull request](https://docs.github.com/en/github/collaborating-with-issues-and-pull-requests/creating-a-pull-request).

## Contributors
Thanks to the following people who have contributed to this project:

- [@claserre9](https://github.com/claserre9)

## Contact
If you want to contact me, you can reach me at claserre9@gmail.com.

## License
This project uses the following license: MIT.
