<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap-responsive.min.css">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        {block name="head"}
        {/block}
    </head>

<body class="container">
    <div class="wrapper start-menu">
        <div class="row">

            <div class="sidebar span3">
                <ul>
                    {block name="sidebar"}
                    {/block}
                </ul>
            </div>

            <div class="main span7 offset1">
                <div class="page-header">
                  <h2>Guess That Song <small>powered by Grooveshark</small></h2>
                </div>
                {block name="message"}
                {/block}
                {block name="gameScreen"}

                {/block}
            </div>
        </div>
    </div>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    {block name="bottom"}
    {/block}
</body>
</html>