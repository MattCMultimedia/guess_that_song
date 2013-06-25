<html>
<head>
    <meta charset="UTF-8">
    <title>{block name="title"}Guess That Song!{/block}</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" type="text/css" href="base.css">
    {block name="css"}{/block}
</head>
<body>
    <div class="container">
        <div class="sidebar">

            {block name="sidebar"}


            {/block}
        </div>
        <div class="main-content">
            <div class="gtsTitle"><h1>Guess That Song!</h1></div>
            <div class="game">
                {block name="gameScreen"}



                {/block}
            </div>
        </div>
    </div>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="gtsLogin.js"></script>
</body>
</html>