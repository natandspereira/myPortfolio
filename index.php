<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--BOOTSTRAP-->
    <link 
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
            rel="stylesheet" 
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
            crossorigin="anonymous" 
            defer 
        >
    <!--BOOTSTRAP-->

    <!--SCRIPT BOOTSTRAP-->
        <script 
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" 
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" 
            crossorigin="anonymous" 
            defer 
        > 
        </script>
        <script 
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" 
            integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" 
            crossorigin="anonymous" 
            defer 
        >
        </script>
    <!--SCRIPT BOOTSTRAP-->

    <!--ICON BOOTSTRAP-->
        <link 
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" 
            rel="stylesheet" 
        >
    <!--ICON BOOTSTRAP-->

    <!--GLOBAL STYLE-->
        <link 
            rel="stylesheet" 
            href="./src/assets/globalStyle/globalStyle.css"
        >
    <!--GLOBAL STYLE-->

    <!--HOME STYLE-->
        <link 
            rel="stylesheet" 
            href="./src/pages/Home/style.css"
        >
    <!--HOME STYLE-->
    <title>myPortfolio</title>
</head>
<body>
    <!--IMPORTED HEADER-->
        <header>
            <?php require_once __DIR__. '/src/components/Header/header.php'; ?>
        </header>
    <!--IMPORTED HEADER-->

    <!--IMPORTED HOME-->
        <main>
            <?php require_once __DIR__. '/src/pages/Home/home.php'; ?>
        </main>
    <!--IMPORTED HOME-->
</body>
</html>