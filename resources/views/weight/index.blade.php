<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <title>Syiox</title>

        <!-- Style -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300;400;500&display=swap" rel="stylesheet"/>
    </head>
    <body>
        <header>
            <h1 title="Syiox"><a href="/">Syiox</a></h1>
        </header>

        <section>
            <div class="table-holder">
                <table>
                    <thead>
                        <tr>
                            <td>name</td>
                            <td>weight</td>
                            <td>status</td>
                            <td>actions</td>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>oat milk</td>
                            <td>80%</td>
                            <td>full</td>
                            <td>
                                <button><i class="fa-regular fa-pen-to-square"></i></button>
                                <button><i class="fa-regular fa-trash-can"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>coca cola</td>
                            <td>5%</td>
                            <td>empty</td>
                            <td>
                                <button><i class="fa-regular fa-pen-to-square"></i></button>
                                <button><i class="fa-regular fa-trash-can"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>water pack</td>
                            <td>60%</td>
                            <td>medium</td>
                            <td>
                                <button><i class="fa-regular fa-pen-to-square"></i></button>
                                <button><i class="fa-regular fa-trash-can"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>cereals</td>
                            <td>40%</td>
                            <td>medium</td>
                            <td>
                                <button><i class="fa-regular fa-pen-to-square"></i></button>
                                <button><i class="fa-regular fa-trash-can"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>coffee</td>
                            <td>13%</td>
                            <td>empty</td>
                            <td>
                                <button><i class="fa-regular fa-pen-to-square"></i></button>
                                <button><i class="fa-regular fa-trash-can"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="t-footer">
                    <button><i class="fa-regular fa-square-plus"></i></button>
                </div>
            </div>
        </section>

        <footer>
            <p>&copy; Syiox 2024.</p>
        </footer>

        <script src="{{ asset('js/app.js')}}"></script>
        <script src="https://kit.fontawesome.com/b1d79f2ea5.js" crossorigin="anonymous"></script>
    </body>
</html>
