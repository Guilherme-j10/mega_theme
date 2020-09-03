<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php bloginfo('name'); ?> | Page not found</title>
        <style>
            *{
                margin: 0px;
                padding: 0px;
                font-family: Arial;
                text-decoration: none;
                list-style: none;
            }

            body{
                background-color: #ebebeb;
                display: flex;
                align-items: center;
                justify-content: center;
                width: 100%;
                min-height: 100vh;
            }

            .box{
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .box h1, p{
                color: #666;
            }

            .box h1{
                border-right: solid 1px #666;
                padding-right: 10px;
                margin-right: 10px;
            }
        </style>
    </head>
    <body>
        <div class="box">
            <h1>404</h1>
            <p>Not Found</p>
        </div>
    </body>
</html>