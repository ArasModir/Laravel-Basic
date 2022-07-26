<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>My Blog</title>
    <link rel="stylesheet" href="/app.css">

    </script>
</head>
<body>

<article>
    <h1>
        <?= $post->title; ?>
    </h1>

    <div>
        <?= $post->body; ?>
    </div>
</article>

<a href="/">Go Back</a>

</body>
</html>
