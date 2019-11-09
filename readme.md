# Simple RESTful server that functions as a chat app

[![Deploy](https://img.shields.io/badge/%E2%AC%86%EF%B8%8FDeploy%20to-Heroku-6762a6.svg?style=for-the-badge)](https://heroku.com/deploy) [![license](https://img.shields.io/github/license/iamnapo/cha-cha-chat.svg?style=for-the-badge)](./LICENSE)

## Installation

- Run the Composer installation: `$ composer install`.
- Update the `.env` file with all needed information.
- Add an APP_KEY if you want: `$ php artisan key:generate`.
- Create a file called `database.sqlite` in the `storage` folder.
- Migrate the database. Add `--seed` to fill it with dummy data: `$ php artisan migrate --seed`.
- Start the server: `$ php artisan serve`.

## Usage

| Method | Path                                                 | Description                             |
| ------ | ---------------------------------------------------- | --------------------------------------- |
| GET    | `/users`                                             | Get all users                           |
| POST   | `/users`                                             | Create a user                           |
| GET    | `/users/{user_id}`                                   | Get a specific user                     |
| PUT    | `/users/{user_id}`                                   | Update a specific user                  |
| DELETE | `/users/{user_id}`                                   | Delete a specific user                  |
| GET    | `/users/{user_id}/inbox`                             | Get a specific user's incoming messages |
| GET    | `/users/{user_id}/sent`                              | Get a specific user's outgoing messages |
|        |                                                      |                                         |
| GET    | `/messages`                                          | Get all messages                        |
| POST   | `/messages`                                          | Create a message                        |
| GET    | `/messages/{message_id}`                             | Get a specific message                  |
| PUT    | `/messages/{message_id}`                             | Update a specific user                  |
| DELETE | `/messages/{message_id}`                             | Delete a specific user                  |
| GET    | `/messages/conversation?userA_id=<id>&userB_id=<id>` | Get all messages between users A and B  |

## License

MIT © [Napoleon-Christos Oikonomou](https://iamnapo.me)
