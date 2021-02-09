<html>

<head></head>

<body>
    <table>
        <tbody>
            <tr>
                <td>Title</td>
                <td>Author</td>
                <td>Description</td>
                <td>Price</td>
            </tr>
        </tbody>
        <?php

        foreach ($books as $book) {
            echo '<tr><td><a href="index.php?book=' .
                $book->title . '">' . $book->title . '</a></td><td><a href="index.php?author=' .
                $book->author . '">' . $book->author . '</a></td><td>' . $book->description . '</td><td><a href="index.php?price=' .
                $book->price . '">' . $book->price . '</a></td></tr>';
        }
        ?>
    </table>
</body>

</html>