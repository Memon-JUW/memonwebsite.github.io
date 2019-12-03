<html>
<head>
    <title>Refresh or Reload a Page Using jQuery</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
</head>

<body>
    <div><input id="btReload" type="button" value="Reload Page" /></div>
</body>

<script>
    $(document).ready(function() {
        $('#btReload').click(function () {
            location.reload(true); 
        });    // Reload page on button click.
    });
</script>
</html>