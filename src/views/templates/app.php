<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Schibsted+Grotesk:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet" />
    <style type="text/tailwindcss">
        @theme {
            --font-sans: "Schibsted Grotesk", sans-serif;

            --color-background-primary: #111111;
            --color-background-secondary: #1B1B1B;
            --color-background-tertiary: #303030;

            --color-border-primary: #303030;

            --color-content-primary: #FFFFFF;
            --color-content-body: #E2E2E2;
            --color-content-heading: #C6C6C6;
            --color-content-muted: #5E5E5E;
            --color-content-placeholder: #777777;
            --color-content-inverse: #111111;

            --color-accent-brand: #C4F120;
            --color-accent-red: #E61E32;
        }
    </style>
</head>

<body class="bg-background-primary text-content-body antialiased font-sans">
    <?php require __DIR__ . "/../{$view}.view.php"; ?>
</body>

</html>