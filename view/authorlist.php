<!-- <html>

<head></head>

<body>
    <table>
        <tbody>
            <tr>
                <td>Author</td>
                <td>City</td>
            </tr>
        </tbody>
        <?php

        foreach ($authors as $author) {
            echo '<tr><td><a href="index.php?author=' .
                $author->author . '">' . $author->author . '</a></td><td>' .
                $author->city . '</td></tr>';
        }
        ?>
    </table>
</body>

</html>
 -->