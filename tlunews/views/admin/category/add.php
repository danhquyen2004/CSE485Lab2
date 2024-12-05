<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</head>
<body>
    <main class="container">
        <h2>Category MANAGER</h2>
        <a href="<?= DOMAIN . 'views/admin/category/add.php'; ?>" class="btn btn-success">New category</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">name</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Remove</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($categories as $category) { ?>
                    <tr>
                        <th scope="row"><?= $category->getId(); ?></th>
                        <td><?= $category->getName(); ?></td>
                        <td><a href="<?= DOMAIN . 'views/admin/category/edit.php?id='.$category->getId(); ?>">Edit</a></td>
                        <td><a href="<?= DOMAIN . 'views/admin/user/remove.php?id='.$category->getId(); ?>">Remove</a></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </main>
</body>

</html>