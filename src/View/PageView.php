<?php
namespace View;

class PageView
{
    public function __construct()
    {
    }

    public function index(array $data)
    {
        ?>
        <table>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Action</th>
            </tr>
            <?php
            if (!$data) { ?>
                <tr>
                    <td colspan="3">There is no page...</td>
                </tr>
                <?php
            } else {
                foreach($data as $page) {
                    ?>
                    <tr>
                        <td><?= $page["id"] ?></td>
                        <td><?= $page["title"] ?></td>
                        <td><a href="<?= \KANDT_ROOT_URI . \KANDT_ACTION_PARAM . "=page.show&" . \KANDT_PAGE_PARAM . "=" . $page["id"] ?>">Show</a></td>
                        <td><a href="<?= \KANDT_ROOT_URI . \KANDT_ACTION_PARAM . "=page.delete&" . \KANDT_PAGE_PARAM . "=" . $page["id"] ?>">Delete</a></td>
                        <td><a href="<?= \KANDT_ROOT_URI . \KANDT_ACTION_PARAM . "=page.edit&" . \KANDT_PAGE_PARAM . "=" . $page["id"] ?>">Edit</a></td>
                    </tr>
                    <?php
                }
            } ?>
        </table>
        <?php
    }

    public function show(array $data)
    {
        ?>
        <h1>h1: <?= $data["h1"] ?></h1>
        <h3>title: <?= $data["title"] ?></h3>
        <p>p: <?= $data["p"] ?></p>
        <span class="<?= $data["span-class"] ?>"><?= $data["span-text"] ?></span><br>
        <img src="<?= $data["img-src"] ?>" alt="<?= $data["img-alt"] ?>"><br>
        <a href="<?= \KANDT_ROOT_URI . \KANDT_ACTION_PARAM . "=page.delete&" . \KANDT_PAGE_PARAM . "=" . $data["id"] ?>">Delete</a>
        <a href="<?= \KANDT_ROOT_URI . \KANDT_ACTION_PARAM . "=page.edit&" . \KANDT_PAGE_PARAM . "=" . $data["id"] ?>">Edit</a>
        <a href="<?= \KANDT_ROOT_URI . \KANDT_ACTION_PARAM . "=page.index" ?>">Home</a>
        <?php
    }
}