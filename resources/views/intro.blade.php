<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>iamnapo - cha-cha-chat</title>
    <style>
        @charset "UTF-8";
        @import "https://cdnjs.cloudflare.com/ajax/libs/KaTeX/0.9.0-alpha2/katex.min.css";

        code {
            color: #c7254e;
            background-color: #f9f2f4;
            border-radius: 4px;
        }

        code {
            padding: 2px 4px;
        }

        table {
            background-color: transparent;
        }

        th {
            text-align: left;
        }

        .table {
            width: 100%;
            max-width: 100%;
            margin-bottom: 20px;
        }

        .table>thead>tr>th {
            padding: 8px;
            line-height: 1.4285714;
            border-top: 1px solid #ddd;
        }

        .table>tbody>tr>td {
            padding: 8px;
            line-height: 1.4285714;
            vertical-align: top;
            border-top: 1px solid #ddd;
        }

        .table>thead>tr>th {
            vertical-align: bottom;
            border-bottom: 2px solid #ddd;
        }

        .table>thead:first-child>tr:first-child>th {
            border-top: 0;
        }

        .table-bordered,
        .table-bordered>thead>tr>th,
        .table-bordered>tbody>tr>td {
            border: 1px solid #ddd;
        }

        .table-bordered>thead>tr>th {
            border-bottom-width: 2px;
        }

        .table-striped>tbody>tr:nth-child(odd)>td {
            background-color: #f9f9f9;
        }

        *,
        *:before,
        *:after {
            box-sizing: border-box;
        }

        html {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        a {
            background: 0 0;
        }

        a:active,
        a:hover {
            outline: 0;
        }

        h1 {
            margin: 0.67em 0;
        }

        code {
            font-size: 1em;
        }

        code {
            font-family: monospace, monospace;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
        }

        html {
            font-size: 0.875em;
            background: #fff;
            color: #373d49;
        }

        html,
        body {
            font-family: Georgia, Cambria, serif;
            height: 100%;
        }

        body {
            font-size: 1rem;
            font-weight: 400;
            line-height: 2rem;
        }

        ul {
            margin-bottom: 0.83999rem;
            padding-top: 0.16001rem;
        }

        li {
            -webkit-font-feature-settings: "kern"1, "onum"1, "liga"1;
            font-feature-settings: "kern"1, "onum"1, "liga"1;
            margin-left: 1rem;
        }

        p {
            padding-top: 0.66001rem;
            -webkit-font-feature-settings: "kern"1, "onum"1, "liga"1;
            font-feature-settings: "kern"1, "onum"1, "liga"1;
            margin-top: 0;
        }

        p {
            margin-bottom: 1.33999rem;
        }

        th,
        td {
            padding: 12px;
        }

        h1,
        h2 {
            font-family: "Source Sans Pro", "Helvetica Neue", Helvetica,
                Arial, sans-serif;
            -webkit-font-feature-settings: "dlig"1, "liga"1, "lnum"1,
                "kern"1;
            font-feature-settings: "dlig"1, "liga"1, "lnum"1, "kern"1;
            font-style: normal;
            font-weight: 600;
            margin-top: 0;
        }

        h1 {
            line-height: 3rem;
            font-size: 2.0571429rem;
            margin-bottom: 0.21999rem;
            padding-top: 0.78001rem;
        }

        h2 {
            font-size: 1.953125rem;
            margin-bottom: 0.1835837rem;
            padding-top: 0.8164163rem;
        }

        h2 {
            line-height: 3rem;
        }

        a {
            cursor: pointer;
            color: #35d7bb;
            text-decoration: none;
        }

        a:hover,
        a:focus {
            border-bottom-color: #35d7bb;
            color: #dff9f4;
        }

        img {
            height: auto;
            max-width: 100%;
        }

        #preview .table {
            width: auto;
        }

        body {
            max-width: 1024px;
            margin: 0 auto;
            overflow: auto;
            padding: 2%;
        }

        @media screen and (min-width: 27.5em) {
            html {
                font-size: 0.875em;
            }

            body {
                font-size: 1rem;
            }

            ul {
                margin-bottom: 0.83999rem;
                padding-top: 0.16001rem;
            }

            p {
                padding-top: 0.66001rem;
            }

            p {
                margin-bottom: 1.33999rem;
            }

            h1 {
                font-size: 2.0571429rem;
                margin-bottom: 0.21999rem;
                padding-top: 0.78001rem;
            }

            h2 {
                font-size: 1.953125rem;
                margin-bottom: 0.1835837rem;
                padding-top: 0.8164163rem;
            }
        }

        @media screen and (min-width: 46.25em) {
            html {
                font-size: 0.875em;
            }

            body {
                font-size: 1rem;
            }

            ul {
                margin-bottom: 0.83999rem;
                padding-top: 0.16001rem;
            }

            p {
                padding-top: 0.66001rem;
            }

            p {
                margin-bottom: 1.33999rem;
            }

            h1 {
                font-size: 2.0571429rem;
                margin-bottom: 0.21999rem;
                padding-top: 0.78001rem;
            }

            h2 {
                font-size: 1.953125rem;
                margin-bottom: 0.1835837rem;
                padding-top: 0.8164163rem;
            }
        }

        @media screen and (min-width: 62.5em) {
            html {
                font-size: 0.875em;
            }

            body {
                font-size: 1rem;
            }

            ul {
                margin-bottom: 0.83999rem;
                padding-top: 0.16001rem;
            }

            p {
                padding-top: 0.66001rem;
            }

            p {
                margin-bottom: 1.33999rem;
            }

            h1 {
                font-size: 2.0571429rem;
                margin-bottom: 0.21999rem;
                padding-top: 0.78001rem;
            }

            h2 {
                font-size: 1.953125rem;
                margin-bottom: 0.1835837rem;
                padding-top: 0.8164163rem;
            }
        }

        @media screen and (min-width: 87.5em) {
            html {
                font-size: 0.875em;
            }

            body {
                font-size: 1rem;
            }

            ul {
                margin-bottom: 0.83999rem;
                padding-top: 0.16001rem;
            }

            p {
                padding-top: 0.66001rem;
            }

            p {
                margin-bottom: 1.33999rem;
            }

            h1 {
                font-size: 2.0571429rem;
                margin-bottom: 0.21999rem;
                padding-top: 0.78001rem;
            }

            h2 {
                font-size: 1.953125rem;
                margin-bottom: 0.1835837rem;
                padding-top: 0.8164163rem;
            }
        }
    </style>
</head>

<body id="preview">
    <h1 class="code-line" data-line-start="0" data-line-end="1">
        <a id="Simple_RESTful_server_that_functions_as_a_chat_app_0"></a>Simple RESTful server that functions as a chat app
    </h1>
    <p class="has-line-data" data-line-start="2" data-line-end="3">
        <a href="https://travis-ci.com/iamnapo/cha-cha-chat"><img src="https://img.shields.io/travis/com/iamnapo/cha-cha-chat.svg?style=for-the-badge&amp;logo=travis&amp;label=" alt="travis" /></a>
        <img src="https://img.shields.io/github/license/iamnapo/cha-cha-chat.svg?style=for-the-badge" alt="license" />
    </p>
    <h2 class="code-line" data-line-start="4" data-line-end="5">
        <a id="Installation_4"></a>Installation
    </h2>
    <ul>
        <li class="has-line-data" data-line-start="6" data-line-end="7">
            Run the Composer installation: <code>$ composer install</code>.
        </li>
        <li class="has-line-data" data-line-start="7" data-line-end="8">
            Update the <code>.env</code> file with all needed information.
        </li>
        <li class="has-line-data" data-line-start="8" data-line-end="9">
            Add an APP_KEY if you want:
            <code>$ php artisan key:generate</code>.
        </li>
        <li class="has-line-data" data-line-start="9" data-line-end="10">
            Create a file called <code>database.sqlite</code> in the
            <code>storage</code> folder.
        </li>
        <li class="has-line-data" data-line-start="10" data-line-end="11">
            Migrate the database. Add <code>--seed</code> to fill it with
            dummy data: <code>$ php artisan migrate --seed</code>.
        </li>
        <li class="has-line-data" data-line-start="11" data-line-end="13">
            Start the server: <code>$ php artisan serve</code>.
        </li>
    </ul>
    <h2 class="code-line" data-line-start="13" data-line-end="14">
        <a id="Usage_13"></a>Usage
    </h2>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Method</th>
                <th>Path</th>
                <th>Payload</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>GET</td>
                <td><code>/users</code></td>
                <td></td>
                <td>Get all users</td>
            </tr>
            <tr>
                <td>POST</td>
                <td><code>/users</code></td>
                <td><code>{&quot;name&quot;: &lt;name&gt;}</code></td>
                <td>Create a user</td>
            </tr>
            <tr>
                <td>GET</td>
                <td><code>/users/{user_id}</code></td>
                <td></td>
                <td>Get a specific user</td>
            </tr>
            <tr>
                <td>PUT</td>
                <td><code>/users/{user_id}</code></td>
                <td><code>{&quot;name&quot;: &lt;name&gt;}</code></td>
                <td>Update a specific user</td>
            </tr>
            <tr>
                <td>DELETE</td>
                <td><code>/users/{user_id}</code></td>
                <td></td>
                <td>Delete a specific user</td>
            </tr>
            <tr>
                <td>GET</td>
                <td><code>/users/{user_id}/inbox</code></td>
                <td></td>
                <td>Get a specific user’s incoming messages</td>
            </tr>
            <tr>
                <td>GET</td>
                <td><code>/users/{user_id}/sent</code></td>
                <td></td>
                <td>Get a specific user’s outgoing messages</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>GET</td>
                <td><code>/messages</code></td>
                <td></td>
                <td>Get all messages</td>
            </tr>
            <tr>
                <td>POST</td>
                <td><code>/messages</code></td>
                <td>
                    <code>{&quot;sender_id&quot;: &lt;sender_id&gt;,
                        &quot;receiver_id&quot;: &lt;receiver_id&gt;,
                        &quot;content&quot;: &lt;content&gt;}</code>
                </td>
                <td>Create a message</td>
            </tr>
            <tr>
                <td>GET</td>
                <td><code>/messages/{message_id}</code></td>
                <td></td>
                <td>Get a specific message</td>
            </tr>
            <tr>
                <td>PUT</td>
                <td><code>/messages/{message_id}</code></td>
                <td>
                    any of:
                    <code>{&quot;sender_id&quot;: &lt;sender_id&gt;,
                        &quot;receiver_id&quot;: &lt;receiver_id&gt;,
                        &quot;content&quot;: &lt;content&gt;}</code>
                </td>
                <td>Update a specific message</td>
            </tr>
            <tr>
                <td>DELETE</td>
                <td><code>/messages/{message_id}</code></td>
                <td></td>
                <td>Delete a specific message</td>
            </tr>
            <tr>
                <td>GET</td>
                <td>
                    <code>/messages/conversation?userA_id=&lt;id&gt;&amp;userB_id=&lt;id&gt;</code>
                </td>
                <td></td>
                <td>Get all messages between users A and B</td>
            </tr>
        </tbody>
    </table>
    <h2 class="code-line" data-line-start="32" data-line-end="33">
        <a id="License_32"></a>License
    </h2>
    <p class="has-line-data" data-line-start="34" data-line-end="35">
        MIT © <a href="https://iamnapo.me">Napoleon-Christos Oikonomou</a>
    </p>
</body>

</html>
